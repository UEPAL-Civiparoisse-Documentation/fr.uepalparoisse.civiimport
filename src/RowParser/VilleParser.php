<?php

namespace Uepal\CiviImport\RowParser;
/**
 * Parse the city field
 */
class VilleParser extends UpperCaseParser
{
  /**
   * @var string target column
   */
  const TARGET_COLUMN='K';
  /**
   * @inheritDoc
   */
  protected function injectData($data, $contact)
  {
    $contact->setVille($data);
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

