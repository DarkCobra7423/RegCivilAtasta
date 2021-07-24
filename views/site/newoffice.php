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
        <style>
            .correct{
                background-color: #28a745;
                color: white;
            }
            
            .error{
                background-color: #dc3545;
                color: white;
            }
        </style>
        <div class="card col-sm-4 col-md-6">
            <div class="input-group">
               <!-- <input type="text" class="form-control" placeholder="Search for..."> -->
                <input id="idhidden" hidden="">
                 <?= $form->field($modelGuest, 'email')->textInput(['type' => 'email', 'maxlength' => true, 'class' => 'form-control', 'placeholder' => 'Por favor, introduzca su correo electronico', 'onchange' => '$.post("' . Yii::$app->homeUrl . 'email/validateemail?setto="+$(this).val(), function(data){document.getElementById("idhidden").value = data});']) ?>
                <span class="input-group-btn">
                  <!--  <button class="btn btn-default" type="button">Go!</button>-->
                  <input id="idcode" style="min-width: 80px;margin-top: 24px;" maxlength="6" type="text" class="form-control" placeholder="Codigo" onchange="$.post('<?= Yii::$app->homeUrl ?>email/comparationcode?param='+$(this).val()+'&send='+document.getElementById('idhidden').value, function(data){if(data == 'true'){document.getElementById('idcode').className = 'form-control correct';}else{document.getElementById('idcode').className = 'form-control error';}});">
                </span>
            </div>
            <div class="form-group">
                <?= $form->field($modelGuest, 'nameandlastname')->textInput(['maxlength' => true, 'placeholder' => 'Por favor, introduzca su nombre(s) y apellidos', 'onchange' => '$.post("' . Yii::$app->homeUrl . 'office/existexpedient?value="+$(this).val(), function(data){if(data == "true"){$(this).val("");document.getElementById("office-expedient").value = "";alert("El no. expediente ya se encuentra registrado");}else{}});']) ?>
            </div>
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