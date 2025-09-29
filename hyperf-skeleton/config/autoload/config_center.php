<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
use Hyperf\ConfigCenter\Mode;

use function Hyperf\Support\env;

return [
    'enable' => (bool) env('CONFIG_CENTER_ENABLE', true),
    'driver' => env('CONFIG_CENTER_DRIVER', 'nacos'),
    'mode' => env('CONFIG_CENTER_MODE', Mode::PROCESS),
    'drivers' => [
        'nacos' => [
            'driver' => Hyperf\ConfigNacos\NacosDriver::class,
            'merge_mode' => Hyperf\ConfigNacos\Constants::CONFIG_MERGE_OVERWRITE,
            'interval' => 3,
            'default_key' => 'nacos_config',
            'listener_config' => [
                // dataId, group, tenant, type, content
                'nacos_config' => [
                    'tenant' => 'public', // corresponding with service.namespaceId
                    'data_id' => 'text_test',
                    'group' => 'DEFAULT_GROUP',
                ],
                'nacos_config.text_test' => [
                    'data_id' => 'text_test',
                    'group' => 'DEFAULT_GROUP',
                    'type' => 'txt',
                ],
            ],
            'client' => [
                'host' => env('NACOS_HOST', '127.0.0.1'),
                'port' => env('NACOS_PORT', 8848),
                'username' => env('NACOS_USERNAME', 'test'),
                'password' => env('NACOS_PASSWORD', '123456'),
                'guzzle' => [
                    'config' => null,
                ],
            ],
        ],
    ],
];
