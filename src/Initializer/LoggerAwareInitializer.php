<?php

namespace ZfMetal\Log\Initializer;

use Zend\Log\LoggerAwareInterface;
use Zend\ServiceManager\Initializer\InitializerInterface;
use Interop\Container\ContainerInterface;

class LoggerAwareInitializer implements InitializerInterface
{
    public function __invoke(ContainerInterface $container, $instance)
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
