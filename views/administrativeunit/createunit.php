<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Profile;
use kartik\file\FileInput;
use yii\web\UploadedFile;


$this->title = "Nueva Unidad Administrativa";

$profiles = ArrayHelper::map(Profile::find()->all(), 'idprofile', 'namelastname');
?>
<link href="<?= Yii::$app->homeUrl ?>css/createunitStyle.css" rel="stylesheet" type="text/css"/>
<div class="container">
  <?php $form = ActiveForm::begin(); ?>
    <div class="row">
      <div class="col-md-5">
        <?= $form->field($model, 'img')->widget(FileInput::classname(), ['options' => ['accept' => 'img/*'],]); ?>
      </div>

      <div class="col-md-7">
        <!-- comment -->
        <!-- Text input-->
        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        
        <!-- Textarea -->
        <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

        <!-- Text input-->
        <?= $form->field($model, 'note')->textInput(['maxlength' => true]) ?>

        <!-- comment -->
        <?= $form->field($model, 'fkheadline')->dropDownList($profiles, ['prompt' => 'Selecione uno...']) ?>

        <br>
        <center>
          <a href="<?= Yii::$app->homeUrl ?>" class="btn btn-dark">Regresar</a>          
          <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary']) ?>
        </center>
      </div>
    </div>
  <?php ActiveForm::end(); ?>

  <br>
</div>