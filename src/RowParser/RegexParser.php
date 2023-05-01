<?php
namespace Uepal\CiviImport\RowParser;
use Uepal\CiviImport\CiviContactCellInRowParser;

/**
 * parse a field using a regex
 */
abstract class RegexParser extends CiviContactCellInRowParser
{
  /**
   * @var string regex;
   */
  protected string $_regex;

  /**
   * @return string
   */
  public function getRegex(): string
  {
    return $this->_regex;
  }

  /**
   * @param string $regex
   */
  protected function setRegex(string $regex): void
  {
    $this->_regex = $regex;
  }

  /**
   * @inheritDoc
   */
  protected function isValidData(?string $rowData) : bool
  {
    return is_string($rowData) && !empty($rowData) && (preg_match($this->getRegex(),$rowData)===1);

  }
}
