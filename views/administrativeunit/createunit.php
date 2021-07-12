<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Profile;

$this->title = "Nueva Unidad Administrativa";

$profiles = ArrayHelper::map(Profile::find()->all(), 'idprofile', 'namelastname');
?>
<link href="<?= Yii::$app->homeUrl ?>css/createunitStyle.css" rel="stylesheet" type="text/css"/>
<div class="container">
  <?php $form = ActiveForm::begin(); ?>
    <div class="row">
      <div class="card col-md-5">
        <iframe class="col-md-12 responsive-iframe" src="" frameborder="0" width="90%" height="200px" id="previsualizar1"></iframe>
      </div>

      <div class="col-md-7">
        <!-- comment -->
        <!-- Text input-->
        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        
        <!-- File Button -->
        <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

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