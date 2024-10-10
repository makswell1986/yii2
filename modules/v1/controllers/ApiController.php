<?php

namespace app\modules\v1\controllers;

use Yii;
use app\modules\v1\models\Api;
use yii\web\Response;
use yii\rest\Controller;
use yii\filters\RateLimiter;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;

class ApiController extends Controller
{
    public function behaviors()

    {
  return  [   
        
    'ContentNegotiator'=>[
        'class' => 'yii\filters\ContentNegotiator',
                'formats' => [
            'application/json' => Response::FORMAT_JSON]
                ], 
                
                'authenticator'=>[
        
                    'class' => HttpBasicAuth::class
                ],
     
                'rateLimiter'=>[
                    'class' =>RateLimiter::class,
                    'enableRateLimitHeaders'=>true, 
                 ],

                 'verbs' => [
            'class' => \yii\filters\VerbFilter::class,
            'actions' => [
                'index'  => ['GET'],
                'view'   => ['GET'],
                'create' => ['GET', 'POST'],
                'update' => ['GET', 'PUT', 'POST'],
                'delete' => ['POST', 'DELETE'],
            ],
        ],


        ];
          
    

  

} 




     

    public function actionView($code)
    {
        
  
        return Api::findOne($code);
      
    }


    public function actionPost()
    {
        
    
  
    

        $mass=Yii::$app->request->BodyParams;


      

        foreach ($mass as $key=>$value){       
             
        if (gettype($key)=='integer'){
            $model = new Api();
            $model['Code']=$mass['Code'];
            $model['Klassifikator']=$mass['Klassifikator'];
            $model['Klassifikator_ru']=$mass['Klassifikator_ru'];
            $model['Klassifikator_en']=$mass['Klassifikator_en']; 
           
            $model['pokazatel']=$value;
            $model['god']=$key;
            $model->save();     
        }
        

        }
       
    
      
    

            if ($model->save()){

            $response = Yii::$app->response;
            Yii::$app->response->statusCode = 200;
            $response->format = Response::FORMAT_JSON;
            $response->data = ['message' => 'ok','code'=>'200'];
    
    
            return $response;
          
            
           } 



         /*    $response = Yii::$app->response;
            $response->format = Response::FORMAT_JSON;
            $response->data = ['message' => 'false','code'=>'200'];
            return $response; */
           }
        






/*-------------------- Check code ------------------------*/

/*
public function actionInfo($message)
{
    Yii::$app->response->format = Response::FORMAT_JSON;
    return [
        'message' => $message,
        'code' => 100,
    ];
}
*/

 
}

?>