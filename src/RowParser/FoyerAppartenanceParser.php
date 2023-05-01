<?php

namespace Uepal\CiviImport\RowParser;

/**
 * Parse the "foyer appartenance" field
 */
class FoyerAppartenanceParser extends StringNotEmptyParser
{
  /**
   * @var string target column
   */
  const TARGET_COLUMN='R';
  /**
   * @inheritDoc
   */
  protected function injectData($data, $contact)
  {
    $contact->setFoyerAppartenance($data);
  }

  /**
   * default constructor
   */
  public function __construct()
  {
    $this->setTargetColumnIdentifier(self::TARGET_COLUMN);
  }


}

