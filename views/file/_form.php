<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\File */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="file-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name[]')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'file')->textInput(['maxlength' => true]) ?>
    <?php // $form->field($model, 'files')->widget(FileInput::classname(), ['options' => ['accept' => 'files/*'],]); ?>
    <?= $form->field($model, 'files[]')->widget(FileInput::classname(), ['options' => ['multiple' => true],]); ?>
    
    <?= $form->field($model, 'format[]')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'size[]')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
