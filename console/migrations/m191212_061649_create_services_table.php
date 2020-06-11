<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%services}}`.
 */
class m191212_061649_create_services_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%services}}', [
            'id' => $this->primaryKey(),
            'name_rus' => $this->string()->null(),
            'name_eng' => $this->string()->null(),
            'body_rus' => $this->text()->null(),
            'body_eng' => $this->text()->null(),
            'advantage_rus' => $this->text()->null(),
            'advantage_eng' => $this->text()->null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%services}}');
    }
}
