<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%clients}}`.
 */
class m230707_115139_create_clients_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%clients}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'created_at' => $this->timestamp()
                ->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()
                ->defaultExpression('CURRENT_TIMESTAMP')
                ->append('ON UPDATE CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%clients}}');
    }
}
