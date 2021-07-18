<?php
//documentviewer
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$this->title = 'Visor de documentos';
?>
<style>
    #viewfinder{
        min-width: 100%;
        min-height: 100%;
    }
</style>
<?php if (($model->format == '.pdf') || ($model->format == '.mp4') || ($model->format == '.jpg' || ($model->format == '.jpeg') || ($model->format == '.png') || ($model->format == '.gif') || ($model->format == '.html'))) { ?>
    <div class="">
        <iframe id="viewfinder" src="<?= $model->urlfile; ?>" title="<?= $model->name ?>" width="600" height="600" style="border:0; width: 100%" allowfullscreen="" loading="lazy"></iframe>
    </div>
<?php } else { ?>
    <br>
    <br>
    <label style="color: red;">Formato de archivo no compatible para su lectura, por favor descargue el archivo.</label>
    <a href="<?= Yii::$app->homeUrl ?>file/files"> Regresar</a>
<?php } ?>

<script>
    //document.getElementById("idContainer").removeAttribute("hidden");
    document.getElementById("idcontainer").setAttribute("style", "padding-top: 50px;");
</script>