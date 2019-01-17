<?php

/*
 * This file is part of Swoft.
 * (c) Swoft <group@swoft.org>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    'redis'     => [
        'name'        => 'redis',
        'uri'         => [
            'tcp://115.159.204.72:6379?auth=Heimai666-root',
        ],
        'minActive'   => 8,
        'maxActive'   => 8,
        'maxWait'     => 8,
        'maxWaitTime' => 3,
        'maxIdleTime' => 60,
        'timeout'     => 8,
        'db'          => 0,
        'prefix'      => 'redis_',
        'serialize'   => 0,
    ],
    'demoRedis' => [
        'db'     => 0,
        'prefix' => 'demo_redis_',
    ],
];