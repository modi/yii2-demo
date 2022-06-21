<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;

class TimeoutController extends Controller
{
    public function actionFastcgi()
    {
        sleep(10);

        Yii::warning('php still running');

        return 'fastcgi timeout before php';
    }

    public function actionPhp()
    {
        while (true) {
        }
    }

    public function actionDb()
    {
        Yii::$app->db->createCommand('select sleep(5)')->execute();

        Yii::warning('php still running');
    }
}
