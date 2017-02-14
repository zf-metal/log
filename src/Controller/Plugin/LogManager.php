<?php

namespace ZfMetal\Log\Controller\Plugin;
use Zend\Mvc\Controller\Plugin\AbstractPlugin;

class LogManager extends AbstractPlugin{
    
    /**
     *
     * @var \ZfMetal\Log\Log
     */
    private $logger;
    
    function getLogger() {
        return $this->logger;
    }

    function setLogger(\ZfMetal\Log\Log $logger) {
        $this->logger = $logger;
    }

        function __construct(\ZfMetal\Log\Log $logger) {
        $this->logger = $logger;
    }
    
    public function __invoke() {
        return $this->getLogger();
    }
}
