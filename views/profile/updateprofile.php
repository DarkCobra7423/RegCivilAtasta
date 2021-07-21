<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Profile */
/* @var $form yii\widgets\ActiveForm */
    
use yii\helpers\ArrayHelper;
use app\models\Jobtitle;
use app\models\Administrativeunit;
use kartik\file\FileInput;

$jobtitle = ArrayHelper::map(Jobtitle::find()->all(), 'idjobtitle', 'jobtitle');
$administrativeunit = ArrayHelper::map(Administrativeunit::find()->all(), 'idadministrativeunit', 'name');

$this->title = "Actualizar Perfil ".$model->name . " " . $model->lastname;

?>
<link href="<?= Yii::$app->homeUrl ?>css/profileStyle.css" rel="stylesheet" type="text/css"/>

<div class="profile-form">
    
<div class="container bootstrap snippet">

    <div class="row">
        <div class="col-sm-3">
            <!--left col-->

            <div class="text-center">
                <!--<img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">-->
                <img src="<?= $model->avatar; ?>" class="avatar img-circle img-thumbnail" alt="avatar">
            </div><br>

            <div class="panel panel-default">
                <div class="panel-heading">Reseña: <i class="fa fa-link fa-1x"></i></div>
                <div class="panel-body">
                    <p>
                        <?= $model->review ?>
                    </p>                    
                </div>
            </div>


        </div>
        <!--/col-3-->
        <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#generaldata">Actualizar Perfil</a></li>                                
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="generaldata">
                    <hr>

                    <?php $form = ActiveForm::begin(); ?>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-6">
                            <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-6">
                            <?= $form->field($model, 'gender')->dropDownList(['Femenino' => 'Femenino', 'Masculino' => 'Masculino',], ['prompt' => 'Seleccione uno...']) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-6">
                            <?= $form->field($model, 'birthdate')->textInput(['type' => 'date']) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-6">
                            <?= $form->field($model, 'phone')->textInput() ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-6">
                            <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-6">
                            <?= $form->field($model, 'fkjobtitle')->dropDownList($jobtitle, ['prompt' => 'Selecione uno...']) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <?= $form->field($model, 'fkworksin')->dropDownList($administrativeunit, ['prompt' => 'Selecione uno...']) ?>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-xs-12">
                            <?= $form->field($model, 'review')->textarea(['rows' => 6]) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <?php // $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>
                            <?= $form->field($model, 'avatars')->widget(FileInput::classname(), ['options' => ['accept' => 'avatars/*'],]); ?>
                        </div>
                    </div>
                    <?php // $form->field($model, 'fkuser')->textInput() ?>
                    
                    <!------------------------------------------------------------------------------------>
                    


                    <div class="form-group">
                        <div class="col-xs-12">
                            <br>
                            <?= Html::submitButton('<i class="glyphicon glyphicon-ok-sign"></i> Save', ['class' => 'btn btn-lg btn-success']) ?>                                                        
                        </div>
                    </div>
                    <?php ActiveForm::end(); ?>


                    <hr>

                </div>

            </div>
            <!--/tab-pane-->
        </div>
        <!--/tab-content-->

    </div>
    <!--/col-9-->
</div>
    
    
    
    
    
    
    

</div>
