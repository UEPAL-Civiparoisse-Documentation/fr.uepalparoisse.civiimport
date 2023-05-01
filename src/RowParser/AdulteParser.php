<?php

namespace Uepal\CiviImport\RowParser;

/**
 * Parser the "adulte" field
 */
class AdulteParser extends OuiNonParser
{
  /**
   * @var string target column
   */
  const TARGET_COLUMN='S';
  /**
   * @inheritDoc
   */
  protected function injectData($data, $contact)
  {
    $contact->setAdulte($data);
  }

  /**
   * constructor
   */
  public function __construct()
  {
    $this->setTargetColumnIdentifier(self::TARGET_COLUMN);
  }


}
