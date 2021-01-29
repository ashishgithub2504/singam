<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "banners".
 *
 * @property int $id
 * @property string|null $image
 * @property string $name
 * @property string $title
 * @property string $url
 * @property string|null $status
 */
class Banners extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'banners';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'title', 'url'], 'required'],
            [['status'], 'string'],
            [['image'], 'string', 'max' => 145],
            [['name', 'title', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'name' => 'Name',
            'title' => 'Title',
            'url' => 'Url',
            'status' => 'Status',
        ];
    }
}
