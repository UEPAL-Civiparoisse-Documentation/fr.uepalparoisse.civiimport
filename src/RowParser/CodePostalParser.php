<?php

namespace Uepal\CiviImport\RowParser;
/**
 * Parse the post code field
 */
class CodePostalParser extends RegexParser
{
  /**
   * @var string target column
   */
  const TARGET_COLUMN='J';
  /**
   * @var string regex for parsing
   */
  const REGEX='/^([[:upper:]]+-)?[0-9]{5}$/';
  /**
   * @inheritDoc
   */
  protected function injectData($data, $contact)
  {
    $contact->setCodePostal($data);
  }

  /**
   * Default Constructor
   */
  public function __construct()
  {
    $this->setTargetColumnIdentifier(self::TARGET_COLUMN);
    $this->setRegex(self::REGEX);
  }

}
