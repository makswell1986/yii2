<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TableSdmxData24021 $model */

$this->title = 'Update Table Sdmx Data24021: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Table Sdmx Data24021s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="table-sdmx-data24021-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
