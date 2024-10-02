<?php
namespace app\controllers;

use Yii;
use app\models\Api;
use yii\web\Response;
use yii\rest\Controller;
use yii\filters\RateLimiter;
use yii\filters\auth\HttpBasicAuth;

class ApiController extends Controller
{




    public function behaviors()
{
    $behaviors = parent::behaviors();
    $behaviors['authenticator'] = [
        'class' => HttpBasicAuth::class,
    ];
    $behaviors['rateLimiter'] = [
        'class' => RateLimiter::className(),
        'enableRateLimitHeaders' => true
    ];

    $behaviors[]=
        ['class' => 'yii\filters\ContentNegotiator',
                'formats' => [
            'application/json' => Response::FORMAT_JSON]
        ];


        

    return $behaviors;
} 




     

    public function actionView($code)
    {
   
        
        return Api::findOne($code);
    }

 
}

?>