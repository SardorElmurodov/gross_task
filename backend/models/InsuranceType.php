<?php

namespace backend\models;

use Yii;
use backend\models\Request;


/**
 * This is the model class for table "insurance_type".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $percent

 * @property Request[] $requests
 */
class InsuranceType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'insurance_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'percent'], 'required'],
            [['description'], 'string'],
            [['percent'], 'integer'],
            [['name'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'percent' => 'Percent',
        ];
    }

    public function getRequests()
    {
        return $this->hasMany(Request::className(), ['insurance_type_id' => 'id']);
    }
}
