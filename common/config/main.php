<?php

return [
    'timeZone' => 'Etc/GMT+8',
    'aliases' => [
        '@bower' => '@node_modules',
        '@npm' => '@node_modules',
    ],
    'vendorPath' => dirname(dirname(__DIR__)).'/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
