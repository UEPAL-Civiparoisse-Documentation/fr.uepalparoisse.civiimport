<?php

namespace Uepal\CiviImport\RowParser;

/**
 * Parse the spouse name field
 */
class NomConjointParser extends StringNotEmptyParser
{
  /**
   * @var string target column
   */
  const TARGET_COLUMN='V';
  /**
   * @inheritDoc
   */
  protected function injectData($data, $contact)
  {
   $contact->setNomConjoint($data);
  }

  /**
   * default constructor
   */
  public function __construct()
  {
    $this->setTargetColumnIdentifier(self::TARGET_COLUMN);
  }


}
