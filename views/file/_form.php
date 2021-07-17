<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\File */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="file-form">

    <?php // $form = ActiveForm::begin(); ?>
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?php // $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'file')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'imageFiles[]')->widget(FileInput::classname(), ['options' => ['multiple' => true, 'accept' => 'image/*'],]); ?>
    
    <?php // $form->field($model, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>
    <?php //$form->field($model, 'files')->widget(FileInput::classname(), ['options' => ['multiple' => true],]); ?>
    <?php /* FileInput::widget([
    'model' => $model,
    'attribute' => 'files[]',
    'options' => ['multiple' => true]
]);*/ ?>
    
    <?php // $form->field($model, 'format')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'size')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
