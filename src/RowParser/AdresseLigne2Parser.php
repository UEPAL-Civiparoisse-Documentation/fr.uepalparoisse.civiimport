<?php
namespace Uepal\CiviImport\RowParser;

/**
 * Parse the 2nd addr line
 */
class AdresseLigne2Parser extends StringNotEmptyParser
{
  /**
   * @var string target column
   */
  const TARGET_COLUMN='H';
  /**
   * @inheritDoc
   */
  protected function injectData($data, $contact)
  {
    $contact->setAdresseLigne2($data);
  }

  /**
   * constructor
   */
  public function __construct()
  {
    $this->setTargetColumnIdentifier(self::TARGET_COLUMN);
  }

}


