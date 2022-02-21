<?php

use yii\db\Migration;

/**
 * Class m220221_023713_add_book_table
 */
class m220221_023713_add_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('book', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'author' => $this->string(60)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('book');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220221_023713_add_book_table cannot be reverted.\n";

        return false;
    }
    */
}
