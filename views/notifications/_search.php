<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NotificationsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="notifications-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idnotifications') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'message') ?>

    <?= $form->field($model, 'datatime') ?>

    <?= $form->field($model, 'read') ?>

    <?php // echo $form->field($model, 'fkprofile') ?>

    <?php // echo $form->field($model, 'fkoffice') ?>

    <?php // echo $form->field($model, 'fkadministrativeunit') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
