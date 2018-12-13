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

        $this->err("Exception: ". $exception->getMessage(), $extra);

    }

}
