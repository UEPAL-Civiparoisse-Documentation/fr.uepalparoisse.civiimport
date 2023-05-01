<?php
namespace Uepal\CiviImport\RowParser;

/**
 * Parse the home phone field
 */
class TelephoneFixeParser extends RegexParser
{
  /**
   * @var string allowed values regex pattern
   */
  const REGEX='#^00 33 [123459] [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}$#';
  /**
   * @var string target column
   */
  const TARGET_COLUMN='M';
  /**
   * @inheritDoc
   */
  protected function injectData($data, $contact)
  {
    $contact->setTelephoneFixe($data);
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

