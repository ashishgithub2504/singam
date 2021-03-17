<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property int $id
 * @property string $name
 * @property string $mobile
 * @property string $email
 * @property string|null $status
 * @property string|null $commant
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'mobile', 'email'], 'required'],
            [['status'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['mobile', 'email', 'commant'], 'string', 'max' => 155],
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
            'mobile' => 'Mobile',
            'email' => 'Email',
            'service' => 'Service',
            'resume' => 'Resume',
            'status' => 'Status',
            'commant' => 'Commant',
        ];
    }
}
