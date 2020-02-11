<?php


namespace EasyPhpRest\Util;


class Constants
{

    const ROOT_DIR = __DIR__ . '/../../../../../';
    const MODE = 0755;
    const AUTOLOAD_ARRAY = [
        'autoload' => [
            'psr-0' => [
                'App\\' => 'src/'
            ]
        ]
    ];
    const CONTROLLERS_NAMESPACE = 'App\\Controller\\';
}