<?php

return [
    'timeZone' => 'Etc/GMT+8',
    'aliases' => [
        '@bower' => '@node_modules',
        '@npm' => '@node_modules',
    ],
    'vendorPath' => dirname(dirname(__DIR__)).'/vendor',
    'bootstrap' => [
        'queue',
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => 'redis',
            'port' => 6379,
            'database' => 0,
            'password' => 'NOT_SAFE',
        ],
        'queue' => [
            'class' => \yii\queue\redis\Queue::class,
            'redis' => 'redis',
            'channel' => 'queue',
        ],
    ],
];
