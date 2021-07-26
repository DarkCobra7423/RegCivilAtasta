<?php
$this->title = 'Seguimiento';
?>
<div class="container">
    <div class="row">
        <?php 
        //print_r($guest); die();
        //foreach ($guest as $gues):
            
            //foreach ($offices as $office):
            ?>
        <center><h4>Seguimiento del expediente: <?= $office->expedient ?> y no. oficio: <?= $office->nooffice; ?></h4></center>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label" for="office-reviseddate">Expediente</label>
                <input id="date1" type="text" class="form-control" value="<?= $office->expedient ?>" disabled="">
            </div>
            <div class="form-group">
                <label class="control-label" for="office-reviseddate">No. Oficio</label>
                <input id="date1" type="text" class="form-control" value="<?= $office->nooffice; ?>" disabled="">
            </div>
            <div class="form-group">
                <label class="control-label" for="office-reviseddate">Asunto</label>
                <input id="date1" type="text" class="form-control" value="<?= $office->subject ?>" disabled="">
            </div>
            <div class="form-group">
                <label class="control-label" for="office-reviseddate">Fecha Creacion</label>
                <input id="date1" type="text" class="form-control" value="<?= $office->creationdate ?>" disabled="">
            </div>
            <div class="form-group">
                <label class="control-label" for="office-reviseddate">Categoria</label>
                <input id="date1" type="text" class="form-control" value="<?= $office->category ?>" disabled="">
            </div>
            <div class="form-group">
                <label class="control-label" for="office-reviseddate">Observaciones</label>
                <input id="date1" type="text" class="form-control" value="<?= $office->observations ?>" disabled="">
            </div>
        </div>
        <div class="card col-md-6" style="margin-top: 5px;">
            <?= $office->tracing; ?>
        </div>
        <?php 
        //endforeach;
        //endforeach; 
        ?>
    </div>
</div>