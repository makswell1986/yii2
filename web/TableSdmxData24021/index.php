<?php

use app\models\TableSdmxData24021;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TTableSdmxData24021Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Table Sdmx Data24021s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table-sdmx-data24021-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Table Sdmx Data24021', ['create'], ['class' => 'btn btn-success']) ?>
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
                'urlCreator' => function ($action, TableSdmxData24021 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
