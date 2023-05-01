<?php

namespace Uepal\CiviImport;

use PhpOffice\PhpSpreadSheet\Worksheet\Row;
use Psr\Log\LoggerInterface;

/**
 * main class for parsing cells
 */
abstract class CiviContactCellInRowParser
{
  /**
   *
   * @var string identifier of the target column
   */
  protected string $_targetColumnIdentifier;

  /**
   * check whether rowData is valid or not for this parser
   * @param ?string $rowData
   * @return bool
   */
  protected abstract function isValidData(?string $rowData): bool;

  /**
   * Really inject row data into the contact
   * @param mixed $data
   * @param ParsedContact $contact
   * @return void
   */
  protected abstract function injectData($data, ParsedContact $contact);

  /**
   * target column
   * @return string
   */
  public function getTargetColumnIdentifier(): string
  {
    return $this->_targetColumnIdentifier;
  }

  /**
   * @param string $targetColumnIdentifier
   */
  protected function setTargetColumnIdentifier(string $targetColumnIdentifier): void
  {
    $this->_targetColumnIdentifier = $targetColumnIdentifier;
  }

  /**
   * retrieve data from a row
   * @param Row $row
   * @return ?string
   */
  protected function getRowData(Row $row): ?string
  {
    $res = null;
    $worksheet = $row->getWorksheet();
    $index = $row->getRowIndex();
    $addr = $this->_targetColumnIdentifier . $index;
    if ($worksheet->cellExists($addr)) {
      $res = $worksheet->getCell($addr)->getFormattedValue();
    }
    return $res;
  }

  /**
   * Check whether the data is faulty, while considering empty not as an error
   * @param ?string $rowData
   * @return bool
   */
  public function hasErrors(?string $rowData): bool
  {
    $res = false;
    if (!empty($rowData)) {
      $res = !$this->isValidData($rowData);
    }
    return $res;
  }


  /**
   * Format valid data
   * @param mixed $rowData valid data
   * @return mixed formatted data
   */
  protected function formatData($rowData)
  {
    return $rowData;
  }

  /**
   * Convert / Inject row data from this parser into a contact : whole function
   * @param Row $src
   * @param ParsedContact $dst
   * @param LoggerInterface $logger
   * @return void
   */
  public function parse(Row $src, ParsedContact $dst, LoggerInterface $logger)
  {
    $rowData = $this->getRowData($src);
    if ($this->hasErrors($rowData)) {
      $logger->warning('Row contains errors', ['rowData' => $rowData, 'row' => $src]);
    } else if ($this->isValidData($rowData)) {
      $formattedData = $this->formatData($rowData);
      $this->injectData($formattedData, $dst);
    } else {
      /** if we enter here, there is no error, but data is not valid : thus rowData is empty */
      $logger->warning('RowData is empty', ['rowData' => $rowData, 'row' => $src]);
    }

  }

}
