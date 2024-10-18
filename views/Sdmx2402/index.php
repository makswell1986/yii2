<?php

use app\models\Sdmx2402;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

use phpnt\exportFile\ExportFile;


/** @var yii\web\View $this */
/** @var app\models\Sdmx2402Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Sdmx2402s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sdmx2402-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sdmx2402', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?

/*     $model=new Sdmx2402 ();
\moonland\phpexcel\Excel::export([
	'models' => $model-> 
	
]);    
    
\moonland\phpexcel\Excel::widget([
	'models' => $model,
	'mode' => 'export', //default value as 'export'
	
]); */




// минимальные настройки
echo ExportFile::widget([
    'model'             => '\models\',   // путь к модели
    'searchAttributes'  => $searchModel,                    // фильтр
]) ?>




    
    
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        
        'pager' => ['class' => 'yii\bootstrap5\LinkPager'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Code',
            'Klassifikator',
            'Klassifikator_ru',
            'Klassifikator_en',
            'pokazatel',
            'god',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Sdmx2402 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
