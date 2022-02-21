<?php

namespace common\tests\fixtures;

use yii\test\ActiveFixture;

class BookFixture extends ActiveFixture
{
    public $tableName = 'book';
    public $dataFile = __DIR__.'/data/book.php';
}
