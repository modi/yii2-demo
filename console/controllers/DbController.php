<?php

namespace console\controllers;

use PDO;
use Yii;
use yii\console\Controller;
use yii\db\Query;

class DbController extends Controller
{
    public function actionBatchBuffered()
    {
        $db = Yii::$app->db;
        $db->open();

        $this->stdout('方法1：使用 batch()，开启结果集缓冲，内存占用情况（字节）：'."\n");

        $this->stdout(number_format(memory_get_peak_usage(true), 0)."\n");

        $query = (new Query())->from('t1');
        foreach ($query->batch(1000) as $batch) {
            $this->stdout(number_format(memory_get_peak_usage(true), 0)."\n");
        }
    }

    public function actionBatchUnbuffered()
    {
        $db = Yii::$app->db;
        $db->open();

        $this->stdout('方法2：使用 batch()，关闭结果集缓冲，内存占用情况（字节）：'."\n");

        $this->stdout(number_format(memory_get_peak_usage(true), 0)."\n");

        // 关闭数据库查询结果集缓存模式 @see https://www.php.net/manual/en/mysqlinfo.concepts.buffering.php
        $db->pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);

        $query = (new Query())->from('t1');
        foreach ($query->batch(1000) as $batch) {
            $this->stdout(number_format(memory_get_peak_usage(true), 0)."\n");
        }

        $db->pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
    }
}
