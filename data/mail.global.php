<?php

namespace ZfMetal\Security;

return[
    'zf-metal-mail.options' => [
        'default-from' => 'info@security.com',
        'transport' => 'Zend\Mail\Transport\Smtp',
        'transport_options' => [
            'name' => 'example.com',
            'host' => '127.0.0.1',
            'port' => 587,
            // Notice port change for TLS is 587
            'connection_class' => 'plain',
            'connection_config' => [
                'username' => 'user',
                'password' => 'pass',
                'ssl' => 'tls',
            ],
        ]
    ],
];
