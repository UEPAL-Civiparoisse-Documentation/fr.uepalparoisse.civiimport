<?php
namespace Uepal\CiviImport\RowParser;
/**
 * Allow values given that they only have upper case chars
 */
abstract class UpperCaseParser extends RegexParser
{
  /**
   * @var string valid values pattern
   */
  const REGEX='#^[[:upper:]]+([ \-\'/][[:upper:]]+)*$#';

}
