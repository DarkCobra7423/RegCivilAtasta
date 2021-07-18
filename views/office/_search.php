<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OfficeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="office-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idoffice') ?>

    <?= $form->field($model, 'expedient') ?>

    <?= $form->field($model, 'nooffice') ?>

    <?= $form->field($model, 'subject') ?>

    <?= $form->field($model, 'creationdate') ?>

    <?php // echo $form->field($model, 'category') ?>

    <?php // echo $form->field($model, 'fkstateoffice') ?>

    <?php // echo $form->field($model, 'fkadministrativeunit') ?>

    <?php // echo $form->field($model, 'shifteddate') ?>

    <?php // echo $form->field($model, 'fkto') ?>

    <?php // echo $form->field($model, 'reviseddate') ?>

    <?php // echo $form->field($model, 'observations') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
