<?php
namespace Uepal\CiviImport\RowParser;

class TelephonePortableParser extends RegexParser
{
  /**
   * @var string regex for valid values
   */
  const REGEX='#^00 33 [67] [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}$#';
  /**
   * @var string target column
   */
  const TARGET_COLUMN='N';
  /**
   * @inheritDoc
   */
  protected function injectData($data, $contact)
  {
    $contact->setTelephonePortable($data);
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


