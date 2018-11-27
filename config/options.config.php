<?php

namespace ZfMetal\Log;

$date = new \DateTime();

return[
    'zf-metal-log.options' => [
        'log_file' => './logs/' . $date->format('Y-m-d') . '.log',
        'filter' => \Zend\Log\Logger::INFO,
    ]
];

//const EMERG = 0;
//const ALERT = 1;
//const CRIT = 2;
//const ERR = 3;
//const WARN = 4;
//const NOTICE = 5;
//const INFO = 6;
//const DEBUG = 7;

