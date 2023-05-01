<?php
namespace Uepal\CiviImport\RowParser;

/**
 * Parse the "divers" field
 */
class DiversParser extends StringNotEmptyParser
{
  /**
   * @var string target column
   */
  const TARGET_COLUMN='X';
  /**
   * @inheritDoc
   */
  protected function injectData($data, $contact)
  {
    $contact->setDivers($data);
  }

  /**
   * constructor
   */
  public function __construct()
  {
    $this->setTargetColumnIdentifier(self::TARGET_COLUMN);
  }


}
