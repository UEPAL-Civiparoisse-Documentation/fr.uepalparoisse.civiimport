<?php
namespace Uepal\CiviImport\RowParser;

/**
 * parse the place of birth field
 */
class LieuNaissanceParser extends StringNotEmptyParser
{
  /**
   * @var string target column
   */
  const TARGET_COLUMN='F';
  /**
   * @inheritDoc
   */
  protected function injectData($data, $contact)
  {
    $contact->setLieuNaissance($data);
  }

  /**
   * default constructor
   */
  public function __construct()
  {
    $this->setTargetColumnIdentifier(self::TARGET_COLUMN);
  }

}
