<?php

namespace Uepal\CiviImport\RowParser;
use Uepal\CiviImport\CiviContactCellInRowParser;

/**
 * Parse the "civilite" field
 */
class CiviliteParser extends CiviContactCellInRowParser
{
  /**
   * @var string[] allowed values
   */
  const VALID_CIVILITE = ['M.', 'Mme'];
  /**
   * @var string target column
   */
  const TARGET_COLUMN='A';

  /**
   * @inheritDoc
   */
  protected function isValidData($rowData) : bool
  {
    $res = false;
    if (!empty($rowData) && in_array($rowData, self::VALID_CIVILITE)) {
      $res = true;
    }
    return $res;
  }

  /**
   * @inheritDoc
   */
  protected function injectData($data, $contact)
  {
    $contact->setCivilite($data);
  }

  /**
   * constructor
   */
  public function __construct()
  {
    $this->setTargetColumnIdentifier(self::TARGET_COLUMN);
  }


}
