<?php
namespace Uepal\CiviImport\RowParser;
use DateTime;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadSheet\Worksheet\Row;
use Uepal\CiviImport\CiviContactCellInRowParser;

/**
 * Class for parsing dates using the usual french format
 */
abstract class DateParser extends CiviContactCellInRowParser
{
  /**
   * @var string date format for DateTime
   */
  const DATE_FORMAT='d/m/Y|';
  /**
   * @inheritDoc
   */
  protected function isValidData($rowData) :bool
  {
    return (DateTime::createFromFormat(DateParser::DATE_FORMAT,$rowData)!==false);
  }

  /**
   * @inheritDoc
   */
  protected function formatData($rowData) : DateTime
  {
   return DateTime::createFromFormat(DateParser::DATE_FORMAT,$rowData);
  }

  /**
   * @inheritDoc
   */
  protected function getRowData(Row $row): ?string
  {
    $res = null;
    $worksheet = $row->getWorksheet();
    $index = $row->getRowIndex();
    $addr = $this->_targetColumnIdentifier . $index;
    if ($worksheet->cellExists($addr)) {
      $worksheet->getCell($addr)->getStyle()->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_DATE_DDMMYYYY);
      $res=$worksheet->getCell($addr)->getFormattedValue();
    }
    return $res;
  }


}
