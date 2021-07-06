<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Office */
/* @var $form yii\widgets\ActiveForm */
?>

<link href="<?= Yii::$app->homeUrl; ?>css/uploadStyle.css" rel="stylesheet" type="text/css"/>

<div class="container">

    <div class="row">

        <div class="col-lg-8 col-lg-offset-2">

            <?php $form = ActiveForm::begin(); ?>

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
                        <?= $form->field($model, 'fkadministrativeunit')->textInput(['placeholder' => 'Por favor, seleccione la unidad adm.']) ?>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_phone">Archivo</label>
                            <input id="form_phone" type="file" name="phone" class="form-control" placeholder="Please enter your phone">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <?= $form->field($model, 'subject')->textInput(['maxlength' => true, 'placeholder' => 'Por favor, introduzca el asunto']) ?>
                    </div>

                    <!------------------------->
                    <?php $form->field($model, 'creationdate')->textInput(['value' => NULL]) ?>

                    <?php $form->field($model, 'category')->textInput(['maxlength' => true, 'value' => 'Interno']) ?>

                    <?php $form->field($model, 'fkstateoffice')->textInput(['value' => '4']) ?>

                    <?php $form->field($model, 'shifteddate')->textInput(['value' => NULL]) ?>

                    <?php $form->field($model, 'fkto')->textInput(['value' => NULL]) ?>

                    <?php $form->field($model, 'reviseddate')->textInput(['value' => NULL]) ?>

                    <?php $form->field($model, 'observations')->textarea(['rows' => 6, 'value' => NULL]) ?>
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