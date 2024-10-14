<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TableSdmxData24021 $model */

$this->title = 'Create Table Sdmx Data24021';
$this->params['breadcrumbs'][] = ['label' => 'Table Sdmx Data24021s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table-sdmx-data24021-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
