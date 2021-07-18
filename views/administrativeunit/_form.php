<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\Administrativeunit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="administrativeunit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php // $form->field($model, 'image')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'img')->widget(FileInput::classname(), ['options' => ['accept' => 'img/*'],]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'note')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fkheadline')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
