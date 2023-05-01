<?php

namespace Uepal\CiviImport;

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Settings;
use PhpOffice\PhpSpreadsheet\Worksheet\Row;
use Exception;
use Psr\Log\LoggerInterface;

/**
 * Extractor : class that could be used for parsing a file, using env vars.
 */
class Extractor
{
  /**
   * @string env var for the path of the Excel file
   */
  const ENV_FILEPATH = "CIVIPAROISSE_IMPORT_FILEPATH";
  /**
   * @string env var for the name of the sheet in the Excel file
   */
  const ENV_SHEETNAME = 'CIVIPAROISSE_IMPORT_SHEETNAME';

  /**
   * retrieve excel file filepath from environment
   * @return string
   * @throws Exception
   */
  static public function getImportFilePathFromEnvironment(): string
  {
    $envImport = getenv(self::ENV_FILEPATH);

    if (!empty($envImport)) {
      if (!(file_exists($envImport) || is_readable($envImport))) {
        throw new Exception('Cannot Import : unreadable file specified :' . $envImport);
      }
    } else {
      throw new Exception('Cannot Import : empty Import environment variable (' . self::ENV_FILEPATH . ')');
    }
    return $envImport;
  }

  /**
   * retrieve from the environment the name of the sheet inside the file
   * @return string
   * @throws Exception
   */
  static public function getImportSheetnameFromEnvironment(): string
  {
    $envSheet = getenv(self::ENV_SHEETNAME);

    if (empty($envSheet)) {
      throw new Exception('Cannot Import: sheetname not specified in environment variable (' . self::ENV_SHEETNAME . ')');
    }

    return $envSheet;

  }

  /**
   * Retrieve data from a spreadsheet file
   * @param string $spreadsheetPath filepath
   * @param string $sheetName sheetname
   * @param string $locale locale for parsing
   * @param LoggerInterface $logger logger to use
   * @return ParsedContact[]
   */
  static public function getDataFromSpreadsheet(LoggerInterface $logger,string $spreadsheetPath, string $sheetName, string $locale = 'fr') : array
  {
    $res = [];
    $validLocale = Settings::setLocale($locale);
    if(!$validLocale)
    {
      $logger->warning('setLocale returned false for locale : '.$locale);
    }
    $spreadSheet = IOFactory::load($spreadsheetPath);
    $worksheet = $spreadSheet->getSheetByName($sheetName);
    $rowIterator = $worksheet->getRowIterator(2);
    while ($rowIterator->valid()) {
      $row = $rowIterator->current();
      if (!empty($row)) {
        $elem = self::getDataFromRow($row,$logger);
        $res[] = $elem;
      }
      $rowIterator->next();
    }
    return $res;
  }

  /**
   * Retrieve data from a row
   * @param Row $row
   * @param LoggerInterface $logger
   * @return ParsedContact
   */
  static public function getDataFromRow(Row $row, LoggerInterface $logger) : ParsedContact
  {
    $parser = FullParser::getSingleton();
    return $parser->parseRow($row,$logger);
  }

  /**
   * Function that can act as a main function - useful for debugging
   * @return void
   */
  static public function preview()
  {
    try {
      $logger=new MiniLogger();
      $spreadsheet = self::getImportFilePathFromEnvironment();
      $sheetname = self::getImportSheetnameFromEnvironment();
      $data = self::getDataFromSpreadsheet($logger, $spreadsheet, $sheetname);
      var_dump($data);
    } catch (Exception $e) {
      error_log($e->getTraceAsString());
    }
  }


}
