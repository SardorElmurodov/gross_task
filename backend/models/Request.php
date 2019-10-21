<?php

namespace backend\models;

use Yii;
use backend\models\InsuranceType;

/**
 * This is the model class for table "request".
 *
 * @property int $request_id
 * @property int $insurance_type_id
 * @property int $user_id
 * @property int $amount

 * @property InsuranceType $instype
 */
class Request extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'request';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['insurance_type_id', 'user_id', 'amount'], 'required'],
            [['insurance_type_id', 'user_id', 'amount'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'request_id' => 'Request ID',
            'insurance_type_id' => 'Insurance Type ID',
            'user_id' => 'User ID',
            'amount' => 'Amount',
        ];
    }

    public function getInstype()
    {
        return $this->hasOne(InsuranceType::className(), ['id' => 'insurance_type_id']);
    }
}
