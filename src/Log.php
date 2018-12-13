<?php

namespace ZfMetal\Log;

class Log extends \Zend\Log\Logger
{


    public function exception(\Exception $exception)
    {

        $extra = [
            'file' => $exception->getFile(),
            'line' => $exception->getLine(),
            'trace' => $exception->getTrace(),
        ];

        $message =  $exception->getMessage();
        $message .= PHP_EOL. "FILE: ". $exception->getFile();
        $message .= PHP_EOL. "LINE: ". $exception->getLine();
        $message .= PHP_EOL. "TRACE: ". PHP_EOL . $exception->getTraceAsString();
        $message .= PHP_EOL." ~ END EXCEPTION ~ ".PHP_EOL;

        $this->err("Exception: ". $message);

    }

}
