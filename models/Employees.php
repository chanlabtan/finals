<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employees".
 *
 * @property int $id
 * @property int $emp_code
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property int $departments_id
 * @property int $designations_id
 * @property int $manager_id
 * @property string $address
 *
 * @property Departments $departments
 * @property Designations $designations
 */
class Employees extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employees';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['emp_code', 'first_name', 'last_name', 'email', 'departments_id', 'designations_id', 'manager_id', 'address'], 'required'],
            [['emp_code', 'departments_id', 'designations_id', 'manager_id'], 'integer'],
            [['first_name', 'last_name', 'email', 'address'], 'string', 'max' => 155],
            [['departments_id'], 'exist', 'skipOnError' => true, 'targetClass' => Departments::className(), 'targetAttribute' => ['departments_id' => 'id']],
            [['designations_id'], 'exist', 'skipOnError' => true, 'targetClass' => Designations::className(), 'targetAttribute' => ['designations_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'emp_code' => 'Emp Code',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'departments_id' => 'Departments ID',
            'designations_id' => 'Designations ID',
            'manager_id' => 'Manager ID',
            'address' => 'Address',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartments()
    {
        return $this->hasOne(Departments::className(), ['id' => 'departments_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDesignations()
    {
        return $this->hasOne(Designations::className(), ['id' => 'designations_id']);
    }
}
