<?php

namespace ZfMetal\Log\Initializer;

use Zend\Log\LoggerAwareInterface;
use Zend\ServiceManager\InitializerInterface;
use Interop\Container\ContainerInterface;

class LoggerAwareInitializer implements InitializerInterface
{
    public function initialize($instance,ContainerInterface $container)
    {
        if ($instance instanceof LoggerAwareInterface) {
            static $logger;
            if (!$logger) {
                $logger = $container->get('zf-metal.log');
            }
            $instance->setLogger($logger);
        }
    }
}
