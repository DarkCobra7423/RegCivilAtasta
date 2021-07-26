<?php
$this->title = 'Seguimiento';
?>
<div class="container">
    <div class="row">
        <center><h4>Seguimiento del expediente: <?= $model->expedient ?> y no. oficio: <?= $model->nooffice; ?></h4></center>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label" for="office-reviseddate">Expediente</label>
                <input id="date1" type="text" class="form-control" value="<?= $model->expedient ?>" disabled="">
            </div>
            <div class="form-group">
                <label class="control-label" for="office-reviseddate">No. Oficio</label>
                <input id="date1" type="text" class="form-control" value="<?= $model->nooffice; ?>" disabled="">
            </div>
            <div class="form-group">
                <label class="control-label" for="office-reviseddate">Asunto</label>
                <input id="date1" type="text" class="form-control" value="<?= $model->subject ?>" disabled="">
            </div>
            <div class="form-group">
                <label class="control-label" for="office-reviseddate">Fecha Creacion</label>
                <input id="date1" type="text" class="form-control" value="<?= $model->creationdate ?>" disabled="">
            </div>
            <div class="form-group">
                <label class="control-label" for="office-reviseddate">Categoria</label>
                <input id="date1" type="text" class="form-control" value="<?= $model->category ?>" disabled="">
            </div>
            <div class="form-group">
                <label class="control-label" for="office-reviseddate">Observaciones</label>
                <input id="date1" type="text" class="form-control" value="<?= $model->observations ?>" disabled="">
            </div>
        </div>
        <div class="card col-md-6" style="margin-top: 5px;">
            <?= $model->tracing; ?>
        </div>
    </div>
</div>