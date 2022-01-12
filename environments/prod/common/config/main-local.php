<?php

return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=example.com;dbname=app',
            'username' => 'app_user',
            'password' => 'app_pass',
            'charset' => 'utf8mb4',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
        ],
    ],
];
