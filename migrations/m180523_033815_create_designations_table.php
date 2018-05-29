<?php

use yii\db\Migration;

/**
 * Handles the creation of table `designations`.
 */
class m180523_033815_create_designations_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('designations', [
            'id' => $this->primaryKey(),
            'designation' => $this->string(155)->notNull(),
            'description' => $this->string(50),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('designations');
    }
}
