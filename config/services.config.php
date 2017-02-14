<?php

namespace ZfMetal\Log;

return [
    'service_manager' => [
        'factories' => [
            'zf-metal-log.options' => Factory\Options\ModuleOptionsFactory::class,
            \ZfMetal\Log\Log::class => \ZfMetal\Log\Factory\LogFactory::class,
        ],
        'aliases' => [
            'zf-metal.log' => \ZfMetal\Log\Log::class,
        ],
        'initializers' => [
            'logger' => \ZfMetal\Log\Initializer\LoggerAwareInitializer::class,
        ],
    ]
];

