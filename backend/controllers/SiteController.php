<?php

namespace backend\controllers;

use common\models\User;
use Yii;
use yii\filters\RateLimiter;
use yii\web\Controller;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function behaviors()
    {
        return [
            'rateLimiter' => [
                'class' => RateLimiter::class,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionJson()
    {
        $response = Yii::$app->getResponse();
        $response->format = Response::FORMAT_JSON;
        $response->content = '{"k": "v"}';

        // 以下不是必须

        // 可以等框架自动调用 send()，也可以显式调用
        // $response->send();

        // 结束执行，避免其他代码干扰输出
        // exit;
    }

    public function actionRateLimit()
    {
        $user = new User(1);
        Yii::$app->user->login($user);
    }
}
