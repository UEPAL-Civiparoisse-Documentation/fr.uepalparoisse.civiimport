<?php
namespace Uepal\CiviImport\RowParser;
use Uepal\CiviImport\CiviContactCellInRowParser;

/**
 * Parse an email addr : validate addr through filter_var
 */
abstract class EmailParser extends CiviContactCellInRowParser
{
  /**
   * @inheritDoc
   */
  protected function isValidData($rowData) : bool
  {
    return !empty($rowData) && is_string($rowData) && filter_var($rowData,FILTER_VALIDATE_EMAIL)===$rowData;

  }

}
