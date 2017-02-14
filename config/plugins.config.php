<?php

namespace ZfMetal\Log;

return [
    'controller_plugins' => [
        'factories' => [
            \ZfMetal\Log\Controller\Plugin\LogManager::class => \ZfMetal\Log\Factory\Controller\Plugin\LogMaganerFactory::class,
        ],
        'aliases' => [
            'logger' => \ZfMetal\Log\Controller\Plugin\LogManager::class,
        ]
    ]
];
