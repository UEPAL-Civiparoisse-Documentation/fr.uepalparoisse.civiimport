<?php
namespace Uepal\CiviImport\RowParser;

/**
 * Parse the "email prive" field
 */
class EmailPriveParser extends EmailParser
{
  /**
   * @var string target column
   */
  const TARGET_COLUMN='P';
  /**
   * @inheritDoc
   */
  protected function injectData($data, $contact)
  {
    $contact->setEmailPrive($data);
  }

  /**
   * Default constructor
   */
  public function __construct()
  {
    $this->setTargetColumnIdentifier(self::TARGET_COLUMN);
  }


}
