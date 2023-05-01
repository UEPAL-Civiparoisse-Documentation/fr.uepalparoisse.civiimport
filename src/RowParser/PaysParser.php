<?php
namespace Uepal\CiviImport\RowParser;

/**
 * Parse the country field
 */
class PaysParser extends StringNotEmptyParser
{
  /**
   * @var string target column
   */
  const TARGET_COLUMN='L';
  /**
   * @inheritDoc
   */
  protected function injectData($data, $contact)
  {
    $contact->setPays($data);
  }

  /**
   * default constructor
   */
  public function __construct()
  {
    $this->setTargetColumnIdentifier(self::TARGET_COLUMN);
  }

}

