<?php
namespace Uepal\CiviImport\RowParser;

/**
 * Parse the "email autre" field
 */
class EmailAutreParser extends EmailParser
{
  /**
   * @var string target column
   */
  const TARGET_COLUMN='Q';
  /**
   * @inheritDoc
   */
  protected function injectData($data, $contact)
  {
    $contact->setEmailAutre($data);
  }

  /**
   * Default constructor
   */
  public function __construct()
  {
    $this->setTargetColumnIdentifier(self::TARGET_COLUMN);
  }


}

