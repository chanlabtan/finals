<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "designations".
 *
 * @property int $id
 * @property string $designation
 * @property string $description
 *
 * @property Employees[] $employees
 */
class Designations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'designations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['designation'], 'required'],
            [['designation'], 'string', 'max' => 155],
            [['description'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'designation' => 'Designation',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployees()
    {
        return $this->hasMany(Employees::className(), ['designations_id' => 'id']);
    }
}
