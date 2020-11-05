<?php

namespace app\controllers;

use app\models\PlaceNew;
use yii\filters\Cors;
use yii\rest\ActiveController;

class PlaceNewController extends ActiveController
{

    public $modelClass = PlaceNew::class;

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['cors'] = Cors::class;

        return $behaviors;
    }

}