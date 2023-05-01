<?php

namespace Uepal\CiviImport\RowParser;
/**
 * Parse the birth name field
 */
class NomNaissanceParser extends UpperCaseParser
{
  /**
   * @var string target column
   */
  const TARGET_COLUMN='C';
  /**
   * @inheritDoc
   */
  protected function injectData($data, $contact)
  {
    $contact->setNomNaissance($data);
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
