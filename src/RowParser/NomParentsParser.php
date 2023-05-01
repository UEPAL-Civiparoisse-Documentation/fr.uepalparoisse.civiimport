<?php

namespace Uepal\CiviImport\RowParser;

/**
 * parse the parent name field
 */
class NomParentsParser extends StringNotEmptyParser
{
  /**
   * @var string target column
   */
  const TARGET_COLUMN='U';

  /**
   * @inheritDoc
   */
  protected function injectData($data, $contact)
  {
   $contact->setNomParents($data);
  }

  /**
   * default constructor
   */
  public function __construct()
  {
    $this->setTargetColumnIdentifier(self::TARGET_COLUMN);
  }


}
