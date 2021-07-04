<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Officefile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="officefile-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idoffice')->textInput() ?>

    <?= $form->field($model, 'idfile')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
