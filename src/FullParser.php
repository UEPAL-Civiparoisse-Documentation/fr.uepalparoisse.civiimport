<?php

namespace Uepal\CiviImport;

use PhpOffice\PhpSpreadsheet\Worksheet\Row;
use Psr\Log\LoggerInterface;
use Uepal\CiviImport\RowParser\AdresseLigne1Parser;
use Uepal\CiviImport\RowParser\AdresseLigne2Parser;
use Uepal\CiviImport\RowParser\AdresseLigne3Parser;
use Uepal\CiviImport\RowParser\AdulteParser;
use Uepal\CiviImport\RowParser\CiviliteParser;
use Uepal\CiviImport\RowParser\CodePostalParser;
use Uepal\CiviImport\RowParser\DateNaissanceParser;
use Uepal\CiviImport\RowParser\DiversParser;
use Uepal\CiviImport\RowParser\ElecteurParser;
use Uepal\CiviImport\RowParser\EmailAutreParser;
use Uepal\CiviImport\RowParser\EmailPriveParser;
use Uepal\CiviImport\RowParser\EnfantParser;
use Uepal\CiviImport\RowParser\FoyerAppartenanceParser;
use Uepal\CiviImport\RowParser\LieuNaissanceParser;
use Uepal\CiviImport\RowParser\NomConjointParser;
use Uepal\CiviImport\RowParser\NomNaissanceParser;
use Uepal\CiviImport\RowParser\NomParentsParser;
use Uepal\CiviImport\RowParser\NomParser;
use Uepal\CiviImport\RowParser\PaysParser;
use Uepal\CiviImport\RowParser\PrenomParser;
use Uepal\CiviImport\RowParser\RowIndexParser;
use Uepal\CiviImport\RowParser\TelephoneAutreParser;
use Uepal\CiviImport\RowParser\TelephoneFixeParser;
use Uepal\CiviImport\RowParser\TelephonePortableParser;
use Uepal\CiviImport\RowParser\VilleParser;

/**
 * FullParser is a kind of converter which use RowParsers as populators to get a ParsedContact
 * Dependency Injection was not used to keep code more simple, with fewer dependencies.
 */
class FullParser
{
  /**
   * @var CiviContactCellInRowParser[] collection of parser
   */
  private array $parsers;

  /**
   * @var ?FullParser use only one instance
   */
  private static ?FullParser $singleton=null;

  /**
   * private constructor : objects cannot be instantiated elsewhere
   */
  private function __construct()
  {
    $this->parsers = [
      new AdresseLigne1Parser(),
      new AdresseLigne2Parser(),
      new AdresseLigne3Parser(),
      new AdulteParser(),
      new CiviliteParser(),
      new CodePostalParser(),
      new DateNaissanceParser(),
      new DiversParser(),
      new ElecteurParser(),
      new EmailAutreParser(),
      new EmailPriveParser(),
      new EnfantParser(),
      new FoyerAppartenanceParser(),
      new LieuNaissanceParser(),
      new NomConjointParser(),
      new NomNaissanceParser(),
      new NomParentsParser(),
      new NomParser(),
      new PaysParser(),
      new PrenomParser(),
      new RowIndexParser(),
      new TelephoneAutreParser(),
      new TelephoneFixeParser(),
      new TelephonePortableParser(),
      new VilleParser()
    ];
  }

  /**
   * Get the unique object instance
   * @return FullParser
   */
  public static function getSingleton() : FullParser
  {
    if (self::$singleton == null) {
      self::$singleton = new FullParser();
    }
    return self::$singleton;
  }

  /**
   * parse a row : convert a row to a ParsedContact
   * @param Row $row
   * @param LoggerInterface $logger
   * @return ParsedContact
   */
  public function parseRow(Row $row,LoggerInterface $logger) : ParsedContact
  {
    $res = new ParsedContact();
    foreach ($this->parsers as $parser) {
      $parser->parse($row, $res,$logger);
    }
    return $res;
  }
}
