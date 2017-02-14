<?php

namespace ZfMetal\Log\Factory\Options;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;


class ModuleOptionsFactory implements FactoryInterface {

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null) {
         $config = $container->get('Config');
         
         return new \ZfMetal\Log\Options\ModuleOptions(isset($config['zf-metal-log.options']) ? $config['zf-metal-log.options'] : array());
    }

}
