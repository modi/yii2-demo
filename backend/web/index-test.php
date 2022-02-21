<?php

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'test');

// NOTE: Make sure this file is not accessible when deployed to production
if (YII_ENV !== 'test') {
    exit('You are not allowed to access this file.');
}

require __DIR__.'/../../vendor/autoload.php';
require __DIR__.'/../../before-yii.php';
require __DIR__.'/../../vendor/yiisoft/yii2/Yii.php';
require __DIR__.'/../../common/config/bootstrap.php';

$config = yii\helpers\ArrayHelper::merge(
    require __DIR__.'/../../common/config/main.php',
    require __DIR__.'/../../common/config/test.php',
    require __DIR__.'/../config/main.php',
    require __DIR__.'/../config/test.php',
);

(new yii\web\Application($config))->run();
