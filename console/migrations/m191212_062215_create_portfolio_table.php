<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%portfolio}}`.
 */
class m191212_062215_create_portfolio_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%portfolio}}', [
            'id' => $this->primaryKey(),
            'name_rus' => $this->string()->null(),
            'name_eng' => $this->string()->null(),
            'area' => $this->integer()->defaultValue(0),
            'location_rus' => $this->string()->null(),
            'location_eng' => $this->string()->null(),
            'images' => $this->string()->null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%portfolio}}');
    }
}
