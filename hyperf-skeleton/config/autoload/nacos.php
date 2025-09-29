<?php

declare(strict_types=1);

use function Hyperf\Support\env;

/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
return [
    // nacos server url like https://nacos.hyperf.io, Priority is higher than host:port
    // 'url' => '',
    // The nacos host info
    'host' => '127.0.0.1',
    'port' => 8848,
    // The nacos account info
    'username' => env('NACOS_USERNAME'),
    'password' => env('NACOS_PASSWORD'),
    'guzzle' => [
        'config' => null,
    ],
];
