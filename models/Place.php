<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Place".
 *
 * @property int $id
 * @property string $name
 * @property string $latlng
 */
class Place extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Place';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'latlng'], 'required'],
            [['latlng'], 'string'],
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
            'latlng' => 'Latlng',
        ];
    }
}
