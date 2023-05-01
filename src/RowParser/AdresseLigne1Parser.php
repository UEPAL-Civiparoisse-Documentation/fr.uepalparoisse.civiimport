<?php
namespace Uepal\CiviImport\RowParser;

/**
 * Parse the first addr line
 */
class AdresseLigne1Parser extends StringNotEmptyParser
{
  /**
   * @var string target column
   */
  const TARGET_COLUMN='G';
  /**
   * @inheritDoc
   */
  protected function injectData($data, $contact)
  {
    $contact->setAdresseLigne1($data);
  }

  /**
   * constructor
   */
  public function __construct()
  {
    $this->setTargetColumnIdentifier(self::TARGET_COLUMN);
  }

}

