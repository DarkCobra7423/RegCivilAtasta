<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Administrativeunit;
use kartik\file\FileInput;

$unit = ArrayHelper::map(Administrativeunit::find()->all(), 'idadministrativeunit', 'name');
?>
<link href="<?= Yii::$app->homeUrl ?>css/newofficeStyle.css" rel="stylesheet" type="text/css"/>

<div class="container">
    <center>
        <h3 style="text-transform: capitalize;">Enviar Oficio a <?= $modelUnit->name ?></h3>
    </center>

    <div class="row">
        <div class="col-sm-4 col-md-6">            
                <?php
                $form = ActiveForm::begin([
                            'method' => 'post',
                            'action' => ['site/createoffice/' . $modelUnit->idadministrativeunit],
                                //"options" => ["enctype" => "multipart/form-data"],
                ]);
                ?>
                <?= $form->field($modelfile, 'imageFiles[]')->widget(FileInput::classname(), ['options' => ['multiple' => true, 'accept' => 'image/*'],]); ?>
         
        </div>

        <div class="card col-sm-4 col-md-6">
            <div class="form-group">
                <?= $form->field($model, 'expedient')->textInput(['maxlength' => true, 'placeholder' => 'Por favor, introduzca el no. expediente', 'onchange' => '$.post("' . Yii::$app->homeUrl . 'office/existexpedient?value="+$(this).val(), function(data){if(data == "true"){$(this).val("");document.getElementById("office-expedient").value = "";alert("El no. expediente ya se encuentra registrado");}else{}});']) ?>
            </div>
            <div class="form-group">
                <?= $form->field($model, 'nooffice')->textInput(['placeholder' => 'Por favor, introduzca el no. oficio', 'onchange' => '$.post("' . Yii::$app->homeUrl . 'office/existnooficce?value="+$(this).val(), function(data){if(data == "true"){$(this).val("");document.getElementById("office-nooffice").value = "";alert("El no. oficio ya se encuentra registrado");}else{}});']) ?>
            </div>
            <div class="form-group">
                <?= $form->field($model, 'subject')->textInput(['maxlength' => true, 'placeholder' => 'Por favor, introduzca el asunto']) ?>
            </div>
            <div class="form-group">
                <?= $form->field($model, 'fkadministrativeunit')->dropDownList($unit, ['prompt' => 'Selecione uno...', 'value' => $modelUnit->idadministrativeunit]) ?>
            </div>
            <!------------------------->
            <div class="" hidden="">
                <?= $form->field($model, 'creationdate')->textInput(['value' => date('Y-m-d H:i:s')]) ?>

                <?= $form->field($model, 'category')->textInput(['maxlength' => true, 'value' => 'Externo']) ?>

                <?= $form->field($model, 'fkstateoffice')->textInput(['value' => '2']) ?>
            </div>

            <br>

            <div class="col-md-12">
                <center>
                    <a href="<?= Yii::$app->homeUrl ?>" class="btn btn-dark">Regresar</a>                            
                    <?= Html::submitButton('Enviar Oficio', ['class' => 'btn btn-primary']) ?>
                </center>
                <br>
            </div>
        </div>
    </div>
    <br>
    <?php ActiveForm::end(); ?>
</div>