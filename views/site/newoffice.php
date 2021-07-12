<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
//use app\controllers\OfficeController;
use app\models\Administrativeunit;
use app\models\Office;
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
      <div class="card">
        <div class="card-body">
          <?php
            $form = ActiveForm::begin([
                             'method' => 'post',
                             'action' => ['office/upload'],
            ]);
            ?>
            <div class="form-group">
              <?= $form->field($model, 'expedient')->textInput(['maxlength' => true, 'placeholder' => 'Por favor, introduzca el no. expediente']) ?>
            </div>
            <div class="form-group">
              <?= $form->field($model, 'nooffice')->textInput(['placeholder' => 'Por favor, introduzca el no. oficio']) ?>
            </div>
            <div class="form-group">
              <?= $form->field($model, 'subject')->textInput(['maxlength' => true, 'placeholder' => 'Por favor, introduzca el asunto']) ?>
            </div>
            <div class="form-group">
              <?= $form->field($model, 'fkadministrativeunit')->dropDownList($unit, ['prompt' => 'Selecione uno...']) ?>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="filebutton">Subir Archivo</label>
              <div class="col-md-12">
                <input id="filebutton" name="uploadedFile" class="form-control-file" type="file" onchange="return validarExt()" required="">
              </div>
            </div>
            
            <br>
            
            <div class="col-md-12">
              <center>
                <a href="index.php" class="btn btn-secondary">Regresar</a>
                <input type="submit" class="btn btn-primary" value="Guardar" name="uploadBtn">
              </center>

            </div>

          <?php ActiveForm::end(); ?>
        </div>
      </div>
    </div>

    <div class="card col-sm-4 col-md-6">
      <!--861px-->
      <iframe class="col-md-12 responsive-iframe" src="" frameborder="0" width="90%" height="200px" id="previsualizar1"></iframe>
      <!--<div id="visorArchivo" class="col-md-12" style="width: 100%; height: auto;"></div>-->
    </div>
  </div>
  <br>

</div>