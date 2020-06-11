<?php

use yii\db\Migration;

/**
 * Class m200130_035226_add_category_table
 */
class m200130_035226_add_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%portfolio}}', 'logo_path', $this->string()->null());
        $this->addColumn('{{%portfolio}}', 'category_id', $this->integer()->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m200130_035226_add_category_table cannot be reverted.\n";

        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200130_035226_add_category_table cannot be reverted.\n";

        return false;
    }
    */
}
