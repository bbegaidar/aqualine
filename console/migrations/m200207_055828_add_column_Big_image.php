<?php

use yii\db\Migration;

/**
 * Class m200207_055828_add_column_Big_image
 */
class m200207_055828_add_column_Big_image extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%portfolio}}', 'images_big', $this->text()->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m200207_055828_add_column_Big_image cannot be reverted.\n";

        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200207_055828_add_column_Big_image cannot be reverted.\n";

        return false;
    }
    */
}
