<?php

return [
    'id' => 'app-common-tests',
    'basePath' => dirname(__DIR__),
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => $_ENV['DB_TEST_DSN'],
            'username' => $_ENV['DB_TEST_USERNAME'],
            'password' => $_ENV['DB_TEST_PASSWORD'],
            'charset' => $_ENV['DB_CHARSET'],
        ],
    ],
];
