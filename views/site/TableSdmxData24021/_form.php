<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TableSdmxData24021 $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="table-sdmx-data24021-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Code')->textInput() ?>

    <?= $form->field($model, 'Klassifikator')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Klassifikator_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Klassifikator_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pokazatel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'god')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
