<?php
namespace Uepal\CiviImport;
use Psr\Log\AbstractLogger;

class MiniLogger extends AbstractLogger
{
  /**
   * @inheritDoc
   */
  public function log($level, $message, array $context = array())
  {
    // TODO: Implement log() method.
    $additionalData=print_r($context,true);
    error_log('LEVEL : '.$level.' MESSAGE : '.$message. ' CONTEXT : '.$additionalData);
  }

}
