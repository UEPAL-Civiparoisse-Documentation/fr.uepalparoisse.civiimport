<?php
namespace Uepal\CiviImport\RowParser;
/**
 * Parse birthdate field
 */
class DateNaissanceParser extends DateParser
{
  /**
   * @var string target column
   */
  const TARGET_COLUMN = 'E';

  /**
   * @inheritDoc
   */
  protected function injectData($data, $contact)
  {
   $contact->setDateNaissance($data);
  }

  /**
   * Default constructor
   */
  public function __construct()
  {
    $this->setTargetColumnIdentifier(self::TARGET_COLUMN);
  }

}
