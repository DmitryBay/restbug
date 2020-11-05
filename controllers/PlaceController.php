<?php
namespace app\controllers;

use app\models\Place;
use yii\filters\Cors;
use yii\rest\ActiveController;

class PlaceController extends ActiveController {

    public $modelClass = Place::class;

    public function behaviors()
    {
        $behaviors =  parent::behaviors();
        $behaviors['cors']= Cors::class;

        return $behaviors;
    }

}