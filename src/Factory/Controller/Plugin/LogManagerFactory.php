<?php

namespace ZfMetal\Log\Factory\Controller\Plugin;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class LogManagerFactory implements FactoryInterface {

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null) {
        $logger = $container->get('zf-metal.log');
        
    return new \ZfMetal\Log\Controller\Plugin\LogManager($logger);
    }

}
