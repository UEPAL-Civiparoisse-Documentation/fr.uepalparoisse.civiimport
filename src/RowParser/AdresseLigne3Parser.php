<?php
namespace Uepal\CiviImport\RowParser;

/**
 * Parse the 3rd addr line
 */
class AdresseLigne3Parser extends StringNotEmptyParser
{
  /**
   * @var string target column
   */
  const TARGET_COLUMN='I';
  /**
   * @inheritDoc
   */
  protected function injectData($data, $contact)
  {
    $contact->setAdresseLigne3($data);
  }

  /**
   * constructor
   */
  public function __construct()
  {
    $this->setTargetColumnIdentifier(self::TARGET_COLUMN);
  }

}


