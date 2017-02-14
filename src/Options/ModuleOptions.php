<?php

namespace ZfMetal\Log\Options;

use Zend\Stdlib\AbstractOptions;

class ModuleOptions extends AbstractOptions {

    /**
     * @var string
     */
    private $logFile;
    
    function getLogFile() {
        return $this->logFile;
    }

    function setLogFile($logFile) {
        $this->logFile = $logFile;
    }
    
    /**
     * Constructor
     */
    public function __construct($options = null) {
        $this->__strictMode__ = false;
        parent::__construct($options);
    }

}
