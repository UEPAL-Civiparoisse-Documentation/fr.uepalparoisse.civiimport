<?php

namespace Uepal\CiviImport\RowParser;
/**
 * Parse name field
 */
class NomParser extends UpperCaseParser
{
  /**
   * @var string target column
   */
  const TARGET_COLUMN='B';
  /**
   * @inheritDoc
   */
  protected function injectData($data, $contact)
  {
    $contact->setNom($data);
  }

  /**
   * default constructor
   */
  public function __construct()
  {
    $this->setTargetColumnIdentifier(self::TARGET_COLUMN);
    $this->setRegex(UpperCaseParser::REGEX);
  }

}
