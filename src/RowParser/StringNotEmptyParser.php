<?php

namespace Uepal\CiviImport\RowParser;
use Uepal\CiviImport\CiviContactCellInRowParser;

/**
 * parse a string that should not be empty to be valid
 */
abstract class StringNotEmptyParser extends CiviContactCellInRowParser
{
  /**
   * @var string regex describing an "empty" regex pattern
   */
  const EMPTY_REGEX='/^[[:space:]]*$/';
  /**
   * @inheritDoc
   */
  protected function isValidData(?string $rowData): bool
  {
   return !empty($rowData) && !preg_match(self::EMPTY_REGEX,$rowData);
  }

}
