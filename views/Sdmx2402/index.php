<?php

use app\models\Sdmx2402;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

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

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Code',
            'Klassifikator',
            'Klassifikator_ru',
            'Klassifikator_en',
            //'pokazatel',
            //'god',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Sdmx2402 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
