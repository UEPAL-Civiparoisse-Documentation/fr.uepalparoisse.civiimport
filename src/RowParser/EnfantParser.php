<?php

namespace Uepal\CiviImport\RowParser;

/**
 * Parse the kid field
 */
class EnfantParser extends OuiNonParser
{
  /**
   * @var string target column
   */
  const TARGET_COLUMN='T';
  /**
   * @inheritDoc
   */
  protected function injectData($data, $contact)
  {
    $contact->setEnfant($data);
  }

  /**
   * Default constructor
   */
  public function __construct()
  {
    $this->setTargetColumnIdentifier(self::TARGET_COLUMN);
  }


}
