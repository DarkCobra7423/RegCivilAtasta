<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Office */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="office-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'expedient')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nooffice')->textInput() ?>

    <?= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'creationdate')->textInput() ?>

    <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fkstateoffice')->textInput() ?>

    <?= $form->field($model, 'fkadministrativeunit')->textInput() ?>

    <?= $form->field($model, 'shifteddate')->textInput() ?>

    <?= $form->field($model, 'fkto')->textInput() ?>

    <?= $form->field($model, 'reviseddate')->textInput() ?>

    <?= $form->field($model, 'observations')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
