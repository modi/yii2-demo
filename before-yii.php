<?php

if (!isset($_ENV['YII_ENV'])) {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__, 'app.env');
    $dotenv->load();
}

defined('YII_ENV') or define('YII_ENV', $_ENV['YII_ENV'] ?? 'dev');
defined('YII_DEBUG') or define('YII_DEBUG', $_ENV['YII_DEBUG'] ?? true);
