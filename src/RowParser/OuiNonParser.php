<?php

namespace Uepal\CiviImport\RowParser;
use Uepal\CiviImport\CiviContactCellInRowParser;

abstract class OuiNonParser extends CiviContactCellInRowParser
{
  /**
   * @var string "TRUE" value
   */
  const OUI = 'Oui';
  /**
   * @var string "FALSE" value
   */
  const NON = 'Non';
  /**
   * @var string[] allowed values
   */
  const VALID_VALUES = [self::OUI, self::NON];


  /**
   * @inheritDoc
   */
  protected function isValidData(?string $rowData) : bool
  {

    return (!empty($rowData) && in_array($rowData, self::VALID_VALUES));
  }

  /**
   * @inheritDoc
   */
  protected function formatData($rowData)
  {
    return (self::OUI === $rowData);
  }


}

