<?php

namespace Uepal\CiviImport\RowParser;
use PhpOffice\PhpSpreadsheet\Worksheet\Row;

/**
 * Parse the row index - useful if we want to store a reference to the file
 */
class RowIndexParser extends \Uepal\CiviImport\CiviContactCellInRowParser
{
  /**
   * @inheritDoc
   */
  protected function isValidData(?string $rowData) : bool
  {
  return !empty($rowData) && is_numeric($rowData);
  }

  /**
   * @inheritDoc
   */
  protected function injectData($data, $contact)
  {
    $contact->setRowIndex($data);
  }

  /**
   * @inheritDoc
   */
  protected function getRowData(Row $row) :?string
  {
    return $row->getRowIndex();
  }


}
