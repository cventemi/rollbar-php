<?php

namespace Rollbar\TestHelpers;

use Rollbar\RollbarLogger;
use Psr\Log\LoggerTrait;

class StdOutLogger extends RollbarLogger
{
    use LoggerTrait;
    
    public function log($level, $message, array $context = array())
    {
        echo '[' . get_class($this) . ': '. $level . '] ' . $message;
    }
}
