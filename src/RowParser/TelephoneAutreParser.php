<?php
namespace Uepal\CiviImport\RowParser;

/**
 * Parse the "telephone autre" field
 */
class TelephoneAutreParser extends RegexParser
{
  /**
   * Regex describing allowed values
   */
  const REGEX='#^00 33 [12345679] [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}$#';
  /**
   * @var string target column
   */
  const TARGET_COLUMN='O';
  /**
   * @inheritDoc
   */
  protected function injectData($data, $contact)
  {
    $contact->setTelephoneAutre($data);
  }
  /**
   * default constructor
   */
  public function __construct()
  {
    $this->setTargetColumnIdentifier(self::TARGET_COLUMN);
    $this->setRegex(self::REGEX);
  }






}


