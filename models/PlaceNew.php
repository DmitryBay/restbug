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
class PlaceNew extends Place
{
    public function fields(){
        return ['id','name'];
    }
}
