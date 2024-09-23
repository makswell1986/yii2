<?php
namespace app\controllers;

use Yii;
use app\models\Api;
use yii\rest\Controller;
use yii\filters\RateLimiter;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;

class ApiController extends Controller
{




    public function behaviors()
{
    $behaviors = parent::behaviors();
    $behaviors['authenticator'] = [
        'class' => HttpBasicAuth::class,
        //'class'=>HttpBearerAuth::class,
    ];
    

   //$behaviors['rateLimiter']['enableRateLimitHeaders'] = true;
    return $behaviors;
} 




     

    public function actionView($code)
    {
   
        
        return Api::findOne($code);
    }

 
}

?>