<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Administrativeunit;
use app\models\Stateoffice;
use app\models\Profile;

$this->title = 'Evaluar';

$unit = ArrayHelper::map(Administrativeunit::find()->all(), 'idadministrativeunit', 'name');
$state = ArrayHelper::map(Stateoffice::find()->where(['!=', 'idstateoffice', 2])->all(), 'idstateoffice', 'state');
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
    <link href="<?= Yii::$app->homeUrl ?>css/filesStyle.css" rel="stylesheet" type="text/css"/>
    <div class="col-xs-12 col-sm-6 col-md-8">
        <div id="idGrid" class="drive-wrapper drive-grid-view card" style="scroll-behavior: smooth;">
            <div class="grid-items-wrapper">

                <?php
                foreach ($offices as $office) {

                    $officefiles = \app\models\Officefile::find()->where(['idoffice' => $office->idoffice])->all();

                    foreach ($officefiles as $officefile) {

                        $files = \app\models\File::find()->where(['idfile' => $officefile->idfile])->all();

                        foreach ($files as $file) {

                            if ($file->format == '.txt') {
                                ?>
                                <!--TXT-->
                                <div class="drive-item module text-center">
                                    <div class="drive-item-inner module-inner">
                                        <div class="drive-item-title"><a href="#" onclick="ViewDocument('<?= $file->urlfile ?>');"><?= $file->name ?></a></div>
                                        <div class="drive-item-thumb">
                                            <a href="#" style="font-size: 70px;" onclick="ViewDocument('<?= $file->urlfile ?>');"><i class="far fa-file-alt text-primary"></i></a>
                                        </div>
                                    </div>
                                    <div class="drive-item-footer module-footer">
                                        <ul class="utilities list-inline">
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                            <?php } else if (($file->format == '.jpg') || ($file->format == '.png') || ($file->format == '.jpeg') || ($file->format == '.gif')) { ?>
                                <!--JPG-->
                                <div class="drive-item module text-center">
                                    <div class="drive-item-inner module-inner">
                                        <div class="drive-item-title"><a href="#" onclick="ViewDocument('<?= $file->urlfile ?>');"><?= $file->name ?></a></div>
                                        <div class="drive-item-thumb">
                                            <a href="#" onclick="ViewDocument('<?= $file->urlfile ?>');"><img class="img-responsive" src="<?= $file->urlfile ?>" alt="<?= $file->name ?>"></a>
                                        </div>
                                    </div>
                                    <div class="drive-item-footer module-footer">
                                        <ul class="utilities list-inline">
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                            <?php } else if (($file->format == '.ppt') || ($file->format == '.pptx')) { ?>
                                <!--PPT-->
                                <div class="drive-item module text-center">
                                    <div class="drive-item-inner module-inner">
                                        <div class="drive-item-title"><a href="#" onclick="ViewDocument('<?= $file->urlfile ?>');"><?= $file->name ?></a></div>
                                        <div class="drive-item-thumb">
                                            <a href="#" style="font-size: 70px;" onclick="ViewDocument('<?= $file->urlfile ?>');"><i class="far fa-file-powerpoint text-warning"></i></a>
                                        </div>
                                    </div>
                                    <div class="drive-item-footer module-footer">
                                        <ul class="utilities list-inline">
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                            <?php } else if (($file->format == '.csv') || ($file->format == '.xls')) { ?>
                                <!--CSV-->
                                <div class="drive-item module text-center">
                                    <div class="drive-item-inner module-inner">
                                        <div class="drive-item-title"><a href="#" onclick="ViewDocument('<?= $file->urlfile ?>');"><?= $file->name ?></a></div>
                                        <div class="drive-item-thumb">
                                            <a href="#" style="font-size: 70px;" onclick="ViewDocument('<?= $file->urlfile ?>');"><i class="far fa-file-excel text-success"></i></a>
                                        </div>
                                    </div>
                                    <div class="drive-item-footer module-footer">
                                        <ul class="utilities list-inline">
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                            <?php } else if ($file->format == '.pdf') { ?>
                                <!--PDF-->
                                <div class="drive-item module text-center">
                                    <div class="drive-item-inner module-inner">
                                        <div class="drive-item-title"><a href="#" onclick="ViewDocument('<?= $file->urlfile ?>');"><?= $file->name ?></a></div>
                                        <div class="drive-item-thumb">
                                            <a href="#" style="font-size: 70px;" onclick="ViewDocument('<?= $file->urlfile ?>');"><i class="far fa-file-pdf text-danger"></i></a>
                                        </div>
                                    </div>
                                    <div class="drive-item-footer module-footer">
                                        <ul class="utilities list-inline">
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                            <?php } else if (($file->format == '.zip') || ($file->format == '.rar')) { ?>

                                <!--ZIP-->
                                <div class="drive-item module text-center">
                                    <div class="drive-item-inner module-inner">
                                        <div class="drive-item-title"><a href="#" onclick="ViewDocument('<?= $file->urlfile ?>');"><?= $file->name ?></a></div>
                                        <div class="drive-item-thumb">
                                            <a href="#" style="font-size: 70px;" onclick="ViewDocument('<?= $file->urlfile ?>');"><i class="far fa-file-archive text-primary"></i></a>
                                        </div>
                                    </div>
                                    <div class="drive-item-footer module-footer">
                                        <ul class="utilities list-inline">
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                            <?php } else if (($file->format == '.docx') || ($file->format == '.doc')) { ?>
                                <!--DOC-->
                                <div class="drive-item module text-center">
                                    <div class="drive-item-inner module-inner">
                                        <div class="drive-item-title"><a href="#" onclick="ViewDocument('<?= $file->urlfile ?>');"><?= $file->name ?></a></div>
                                        <div class="drive-item-thumb">
                                            <a href="#" style="font-size: 70px;" onclick="ViewDocument('<?= $file->urlfile ?>');"><i class="far fa-file-word text-info"></i></a>
                                        </div>
                                    </div>
                                    <div class="drive-item-footer module-footer">
                                        <ul class="utilities list-inline">
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                            <?php } else if ($file->format == '.html') { ?>

                                <!--HMTL-->
                                <div class="drive-item module text-center">
                                    <div class="drive-item-inner module-inner">
                                        <div class="drive-item-title"><a href="#" onclick="ViewDocument('<?= $file->urlfile ?>');"><?= $file->name ?></a></div>
                                        <div class="drive-item-thumb">
                                            <a href="#" style="font-size: 70px;" onclick="ViewDocument('<?= $file->urlfile ?>');"><i class="far fa-file-code text-primary"></i></a>
                                        </div>
                                    </div>
                                    <div class="drive-item-footer module-footer">
                                        <ul class="utilities list-inline">
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                            <?php } else if (($file->format == '.mp4') || ($file->format == '.avi') || ($file->format == '.wmv') || ($file->format == '.mov') || ($file->format == '.rmvb') || ($file->format == '.mkb')) { ?>

                                <!--VIDEO-->
                                <div class="drive-item module text-center">
                                    <div class="drive-item-inner module-inner">
                                        <div class="drive-item-title"><a href="#" onclick="ViewDocument('<?= $file->urlfile ?>');"><?= $file->name ?></a></div>
                                        <div class="drive-item-thumb">
                                            <a href="#" style="font-size: 70px;" onclick="ViewDocument('<?= $file->urlfile ?>');"><i class="far fa-file-video text-primary"></i></a>                                                
                                        </div>
                                    </div>
                                    <div class="drive-item-footer module-footer">
                                        <ul class="utilities list-inline">
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                            <?php } else if (($file->format == '.mp3') || ($file->format == '.mp4')) { ?>
                                <!--AUDIO-->
                                <div class="drive-item module text-center">
                                    <div class="drive-item-inner module-inner">
                                        <div class="drive-item-title"><a href="#" onclick="ViewDocument('<?= $file->urlfile ?>');"><?= $file->name ?></a></div>
                                        <div class="drive-item-thumb">
                                            <a href="#" style="font-size: 70px;" onclick="ViewDocument('<?= $file->urlfile ?>');"><i class="far fa-file-audio text-primary"></i></a>
                                        </div>
                                    </div>
                                    <div class="drive-item-footer module-footer">
                                        <ul class="utilities list-inline">
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <!--OTRO-->
                                <div class="drive-item module text-center">
                                    <div class="drive-item-inner module-inner">
                                        <div class="drive-item-title"><a href="#" onclick="ViewDocument('<?= $file->urlfile ?>');"><?= $file->name ?></a></div>
                                        <div class="drive-item-thumb">
                                            <a href="#" style="font-size: 70px;" onclick="ViewDocument('<?= $file->urlfile ?>');"><i class="far fa-file text-primary"></i></a>
                                        </div>
                                    </div>
                                    <div class="drive-item-footer module-footer">
                                        <ul class="utilities list-inline">
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a></li>

                                        </ul>
                                    </div>
                                </div>

                                <?php
                            }
                        }
                    }
                }
                ?>
                <!--------------->

            </div>
        </div>
    </div>
    <?php if($model->observations != "" || $model->observations != NULL){ ?>
    <div class="col-xs-12 col-sm-6 col-md-8">
        <br>
        <div class="container">
            <b>Observaciones:</b><br>
            <?= $model->observations ?>
        </div>
    </div>
    <?php } ?>
</div>
<br>
<style>
    #viewfinder1{
        min-width: 100%;
        /*min-height: 100%;*/
        border-radius: 5px;
        border: 1px solid #dfdfdf;
    }
</style>
<div class="row">
        <!--<iframe class="col-md-12 responsive-iframe" src="" frameborder="0"></iframe>-->
    <iframe id="viewfinder1" src="" title="" width="600" height="600" allowfullscreen="" loading="lazy"></iframe>
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
            //idrevised.setAttribute("hidden", "");
            idshifted.setAttribute("hidden", "");
            idrevised.removeAttribute("hidden");

            document.getElementById("office-reviseddate").value = "";
            document.getElementById("office-observations").value = "";
            document.getElementById("office-shifteddate").value = "";
            document.getElementById("office-fkto").value = "";
        }
    }

    function ViewDocument(href) {
        //alert('aqui toy '+ href);
        //document.getElementById("viewfinder1").setAttribute("height", "600");/*min-height: 100%;*/
        document.getElementById("viewfinder1").src = href;
    }
</script>
