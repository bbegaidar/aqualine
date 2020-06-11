<?php

use yii\db\Migration;

/**
 * Class m200129_053928_add_column
 */
class m200129_053928_add_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%portfolio}}', 'is_active', $this->integer()->defaultValue(0));
        $this->addColumn('{{%services}}', 'is_active', $this->integer()->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m200129_053928_add_column cannot be reverted.\n";

        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200129_053928_add_column cannot be reverted.\n";

        return false;
    }
    */
}
