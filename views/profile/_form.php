<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\Profile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthdate')->textInput() ?>

    <?= $form->field($model, 'phone')->textInput() ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?php  // $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'avatars')->widget(FileInput::classname(), ['options' => ['accept' => 'avatars/*'],]); ?>

    <?= $form->field($model, 'review')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fkjobtitle')->textInput() ?>

    <?= $form->field($model, 'fkworksin')->textInput() ?>

    <?= $form->field($model, 'fkuser')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
