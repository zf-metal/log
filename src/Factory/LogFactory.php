<?php

namespace ZfMetal\Log\Factory;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\Log\Writer\Stream;
use ZfMetal\Log\Log;

class LogFactory implements FactoryInterface {

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null) {
        $moduleConfig = $container->get('zf-metal-log.options');
       
        $filter = new \Zend\Log\Filter\Priority($moduleConfig->getFilter());
        $writer = new Stream($moduleConfig->getLogFile());
        $writer->addFilter($filter);
        $logger = new Log();
        $logger->addWriter($writer);
        
        return $logger;
    }

}
