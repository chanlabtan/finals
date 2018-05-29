<?php

use yii\db\Migration;

/**
 * Handles the creation of table `departments`.
 */
class m180523_033754_create_departments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('departments', [
            'id' => $this->primaryKey(),
            'department_name' => $this->string(50)->notNull(),
            'description' => $this->string(50),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('departments');
    }
}
