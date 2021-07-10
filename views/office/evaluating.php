<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Administrativeunit;
use app\models\Stateoffice;
use app\models\Profile;

$unit = ArrayHelper::map(Administrativeunit::find()->all(), 'idadministrativeunit', 'name');
$state = ArrayHelper::map(Stateoffice::find()->all(), 'idstateoffice', 'state');
$profile = ArrayHelper::map(Profile::find()->all(), 'idprofile', 'name');
?>

<div class="row">
    <div class="card col-xs-6 col-md-4">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'expedient')->textInput(['maxlength' => true, 'disabled' => '']) ?>

        <?= $form->field($model, 'nooffice')->textInput(['disabled' => '']) ?>

        <?= $form->field($model, 'subject')->textInput(['maxlength' => true, 'disabled' => '']) ?>

        <?= $form->field($model, 'creationdate')->textInput(['disabled' => '']) ?>

        <?= $form->field($model, 'category')->textInput(['maxlength' => true, 'disabled' => '']) ?>

        <?= $form->field($model, 'fkstateoffice')->dropDownList($state, ['prompt' => 'Selecione uno...', 'onchange' => 'State($(this).val())']) ?>

        <div id="idrevised" class="" hidden="">

            <div class="form-group field-office-reviseddate">
                <label class="control-label" for="office-reviseddate">Fecha Revisado</label>
                <input id="date1" type="text" class="form-control" value="<?= date('Y-m-d H:i:s') ?>" disabled="">
            </div>

            <div hidden=""><?= $form->field($model, 'reviseddate')->textInput(['value' => date('Y-m-d H:i:s')]) ?></div>

            <?= $form->field($model, 'observations')->textarea(['rows' => 6]) ?>
        </div>

        <div id="idshifted" class="" hidden="">
            <?= $form->field($model, 'fkadministrativeunit')->dropDownList($unit, ['prompt' => 'Selecione uno...', 'onchange' => '$.post("' . Yii::$app->homeUrl . 'office/worksin?unit="+$(this).val(), function(data){$("select#office-fkto").html(data);});']) ?>
            
            <div class="form-group field-office-shifteddate">
                <label class="control-label" for="office-shifteddate">Fecha Turnado</label>
                <input id="date2" type="text" class="form-control" value="<?= date('Y-m-d H:i:s') ?>" disabled="">
            </div>
            
            <div hidden=""><?= $form->field($model, 'shifteddate')->textInput(['value' => date('Y-m-d H:i:s')]) ?></div>

            <?= $form->field($model, 'fkto')->dropDownList($profile, ['prompt' => 'Selecione uno...']) ?>        
        </div>

        <div class="form-group">
            <?= Html::submitButton('Evaluar Oficio', ['class' => 'btn btn-success']) ?>
            <?= Html::a('Cancelar', ['evaluate'], ['class' => 'btn btn-danger']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

    <style>
        .responsive-iframe {
            /*position: absolute;*/
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
    </style>

    <div class="col-xs-12 col-sm-6 col-md-8">
        <!--<iframe class="col-md-12 responsive-iframe" src="//jornadasciberseguridad.riasc.unileon.es/archivos/ejemplo_esp.pdf" frameborder="0"></iframe>-->
        <iframe src="//jornadasciberseguridad.riasc.unileon.es/archivos/ejemplo_esp.pdf" width="600" height="600" style="border:0; width: 100%" allowfullscreen="" loading="lazy"></iframe>
    </div>

</div>

<script>
    function State(value) {
        var idshifted = document.getElementById("idshifted")
        var idrevised = document.getElementById("idrevised")

        if (value == "1") {  //revised   
            idrevised.removeAttribute("hidden");
            idshifted.setAttribute("hidden", "");

            //document.getElementById("office-fkadministrativeunit").value = "";
            document.getElementById("office-shifteddate").value = "";
            document.getElementById("office-fkto").value = "";

            document.getElementById("office-reviseddate").value = "<?= date('Y-m-d H:i:s') ?>";
            document.getElementById("date1").value = "<?= date('Y-m-d H:i:s') ?>";

        } else if (value == "3") {  //shifted
            idshifted.removeAttribute("hidden");
            idrevised.setAttribute("hidden", "");

            document.getElementById("office-reviseddate").value = "";
            document.getElementById("office-observations").value = "";

            document.getElementById("office-shifteddate").value = "<?= date('Y-m-d H:i:s') ?>";
            document.getElementById("date2").value = "<?= date('Y-m-d H:i:s') ?>";

        } else {
            idrevised.setAttribute("hidden", "");
            idshifted.setAttribute("hidden", "");

            document.getElementById("office-reviseddate").value = "";
            document.getElementById("office-observations").value = "";
            document.getElementById("office-shifteddate").value = "";
            document.getElementById("office-fkto").value = "";
        }
    }
</script>
