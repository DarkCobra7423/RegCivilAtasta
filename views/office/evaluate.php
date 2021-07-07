<?php

use yii\helpers\Html;
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="alert alert-info">
                Please Wait...
            </div>
            <div class="alert alert-success" style="display:none;">
                <span class="glyphicon glyphicon-ok"></span> Drag table row and cange Order
            </div>

            <div class="pull-right">
                <button class="btn btn-primary">Buscar</button>
            </div>


            <table class="table">
                <thead>
                    <tr>
                        <th>
                            Expediente
                        </th>
                        <th>
                            No. Oficio
                        </th>
                        <th>
                            Asunto
                        </th>
                        <th>
                            Estado
                        </th>
                        <th>
                            Enviado
                        </th>
                        <th>
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody> 
                    <?php foreach ($offices as $office): ?>
                        <tr>
                            <td>
                                <?= $office->expedient ?>
                            </td>
                            <td>
                                <?= $office->nooffice ?>
                            </td>
                            <td>
                                <?= $office->subject ?>
                            </td>
                            <td>
                                <span class="label label-warning"><?= $office->getState(); ?></span>
                            </td>
                            <td>
                                <?= $office->creationdate ?>
                            </td>
                            <td>
                                <?= Html::a('<i class="far fa-edit"></i>', ['update', 'id' => $office->idoffice], ['class' => '']) ?>
                                <?= Html::a('<i class="far fa-share-square">', ['update', 'id' => $office->idoffice], ['class' => '']) ?>
                                <?= Html::a('<i class="far fa-eye">', ['delete', 'id' => $office->idoffice], ['class' => '', 'data' => ['confirm' => 'Are you sure you want to delete this item?', 'method' => 'post',],]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>      
            <!--<tr class="success">
                <td>
                    Column content
                </td>
                <td>
                    Column content
                </td>
                <td>
                    Column content
                </td>
                <td>
                    Column content
                </td>
                <td>
                    Column content
                </td>
            </tr>-->
                </tbody>
            </table>
        </div>
    </div>
</div>