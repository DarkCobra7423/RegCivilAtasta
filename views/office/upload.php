<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Administrativeunit;
use kartik\file\FileInput;

$unit = ArrayHelper::map(Administrativeunit::find()->all(), 'idadministrativeunit', 'name');

/* @var $this yii\web\View */
/* @var $model app\models\Office */
/* @var $form yii\widgets\ActiveForm */
?>

<link href="<?= Yii::$app->homeUrl; ?>css/uploadStyle.css" rel="stylesheet" type="text/css"/>

<div class="container">

    <div class="row">
        <?php if($sends != NULL){ ?>
        <div class="col-lg-8 col-lg-offset-2">
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Enviado!</strong> El oficio <?= $sends->expedient; ?> se a enviado con exito.
        </div>
        </div>
        <?php }else{} ?>

        <div class="col-lg-8 col-lg-offset-2">

            <?php
            $form = ActiveForm::begin([
                             'method' => 'post',
                             'action' => ['office/upload'],
            ]);
            ?>

            <div class="messages"></div>

            <div class="controls">

                <div class="row">
                    <div class="col-md-6">                            
                        <?= $form->field($model, 'expedient')->textInput(['maxlength' => true, 'placeholder' => 'Por favor, introduzca el no. expediente']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $form->field($model, 'nooffice')->textInput(['placeholder' => 'Por favor, introduzca el no. oficio']) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">                        
                        <?= $form->field($model, 'subject')->textInput(['maxlength' => true, 'placeholder' => 'Por favor, introduzca el asunto']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $form->field($model, 'fkadministrativeunit')->dropDownList($unit, ['prompt' => 'Selecione uno...']) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">                        
                        <?= $form->field($modelfile, 'files')->widget(FileInput::classname(), ['options' => ['accept' => 'files/*'],]); ?>                        
                    </div>

                    <!------------------------->
                    <div class="" hidden="">
                        <?= $form->field($model, 'creationdate')->textInput(['value' => date('Y-m-d H:i:s')]) ?>

                        <?= $form->field($model, 'category')->textInput(['maxlength' => true, 'value' => 'Interno']) ?>

                        <?= $form->field($model, 'fkstateoffice')->textInput(['value' => '2']) ?>

                        <?php $form->field($model, 'shifteddate')->textInput(['value' => NULL]) ?>

                        <?php $form->field($model, 'fkto')->textInput(['value' => NULL]) ?>

                        <?php $form->field($model, 'reviseddate')->textInput(['value' => NULL]) ?>

                        <?php $form->field($model, 'observations')->textarea(['rows' => 6, 'value' => NULL]) ?>
                    </div>
                    <!------------------------->

                    <div class="col-md-12">                            
                        <?= Html::submitButton('Enviar Oficio', ['class' => 'btn btn-success btn-send']) ?>                        
                    </div>
                </div>

            </div>

            <?php ActiveForm::end(); ?>

        </div>

    </div>

</div>