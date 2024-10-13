<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'layout'=>'site',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'modules' => [
        'v1' => [
            'class' => 'app\modules\v1\Module',
        ],
        'v2' => [
            'class' => 'app\modules\v2\Module',
        ],
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'SWZr28vwrJMUKdNQ5rUfb0yTTjCYSlho',
            'baseUrl'=>'',
            'parsers'=>['application/json' => 'yii\web\JsonParser'],
            
            
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
            'enableSession'=>true
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@app/mail',
            // send all mails to a file by default.
            'useFileTransport' => true,
        ],
        'log' => [
        'traceLevel' => YII_DEBUG ? 3 : 0,
        'targets' => [
            [
                'class' => 'app\components\log\MyDbTarget',
                'levels' => ['info'],
             
                  
            ],
            [
                'class' => 'yii\log\FileTarget',
                'levels' => ['info'],
                'categories' => ['yii\db\Command::query'],
                'logFile' => '@runtime/logs/query.log', // Для отслеживания только чтения данных
            ],
            [
                'class' => 'yii\log\FileTarget',
                'levels' => ['info'],
                'categories' => ['yii\db\Command::execute'],
                'logFile' => '@runtime/logs/execute.log', // Для отслеживания операций модификации данных
            ],





        ],
    ], 
    'db' => $db,
    'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                /*'<action:[-a-zA-Z0-9_]+>' => 'site/<action>',*/
                ['class' => 'yii\rest\UrlRule', 'controller' => 'v1/api'],
                ['class' => 'yii\rest\UrlRule', 'controller' => 'news'] 
            ],
        ],
  
    ],
  

  
        

    

    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
