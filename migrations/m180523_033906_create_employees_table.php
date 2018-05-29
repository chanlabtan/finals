<?php

use yii\db\Migration;

/**
 * Handles the creation of table `employees`.
 */
class m180523_033906_create_employees_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('employees', [
            'id' => $this->primaryKey(),
            'emp_code' => $this->integer()->notNull(),
            'first_name' => $this->string(155)->notNull(),
            'last_name' => $this->string(155)->notNull(),
            'email' => $this->string(155)->notNull(),
            'departments_id' => $this->integer()->notNull(),
            'designations_id' => $this->integer()->notNull(),
            'manager_id' => $this->integer()->notNull(),
            'address' => $this->string(155)->notNull()
        ]);
        $this->createIndex(
            'idx-employees-departments_id',
            'employees','departments_id'
        );

        $this->addForeignKey(
            'fk-employees-departments',
            'employees','departments_id',
            'departments', 'id'
        );

        $this->createIndex(
            'idx-employees-designations',
            'employees','designations_id'
        );

        $this->addForeignKey(
            'fk-employees-designations',
            'employees','designations_id',
            'designations', 'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-employees-departments', 'employees');
        $this->dropForeignKey('fk-employees-designations', 'employees');
        $this->dropIndex('idx-employees-departments_id','employees');
        $this->dropIndex('idx-employees-designations_id','employees');
        $this->dropTable('employees');
    }
}