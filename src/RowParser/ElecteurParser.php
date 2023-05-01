<?php

namespace Uepal\CiviImport\RowParser;

/**
 * Parse the "electeur" field
 */
class ElecteurParser extends OuiNonParser
{
  /**
   * @var string target column
   */
  const TARGET_COLUMN='W';
  /**
   * @inheritDoc
   */
  protected function injectData($data, $contact)
  {
   $contact->setElecteur($data);
  }

  /**
   * Default constructor
   */
  public function __construct()
  {
    $this->setTargetColumnIdentifier(self::TARGET_COLUMN);
  }


}
