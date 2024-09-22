<?php
namespace app\controllers;

use Yii;
use app\models\Api;
use yii\rest\Controller;
use yii\filters\auth\HttpBasicAuth;

class ApiController extends Controller
{




    public function behaviors()
{
    $behaviors = parent::behaviors();
    $behaviors['authenticator'] = [
        'class' => HttpBasicAuth::class,
    ];
    return $behaviors;
} 




     

    public function actionView($code)
    {
   
        
        return Api::findOne($code);
    }

 
}

?>