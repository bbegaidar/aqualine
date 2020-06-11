<?php

use yii\db\Migration;

/**
 * Class m200130_045214_alter_colum
 */
class m200130_045214_alter_colum extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('portfolio', 'images', $this->text()->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m200130_045214_alter_colum cannot be reverted.\n";

        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200130_045214_alter_colum cannot be reverted.\n";

        return false;
    }
    */
}
