<?php
namespace Uepal\CiviImport\RowParser;
/**
 * Parse the firstname field
 */
class PrenomParser extends RegexParser
{
  /**
   * @var string target column
   */
  const TARGET_COLUMN='D';
  /**
   * regex describing a firstname;
   */
  const PRENOM_REGEX='/^[[:upper:]][[:lower:]éèêëüôïàù]+(-[[:upper:]][[:lower:]éèêëüôïàù]+)*$/';
  /**
   * @inheritDoc
   */
  protected function injectData($data, $contact)
  {
    $contact->setPrenom($data);
  }

  /**
   * Default constructor
   */
  public function __construct()
  {
    $this->setTargetColumnIdentifier(self::TARGET_COLUMN);
    $this->setRegex(self::PRENOM_REGEX);
  }




}
