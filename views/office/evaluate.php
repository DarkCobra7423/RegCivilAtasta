<?php

use yii\helpers\Html;
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="row" style="margin-bottom: 8px;margin-right: 0px;">
                <div class="pull-right"><?= Html::a('Oficios', ['file/files'], ['class' => 'btn btn-primary']) ?> <?= Html::a('Filtrar Oficios', ['office/filter'], ['class' => 'btn btn-primary']) ?></div>
            </div>
            
            <table class="table">

                <div class="alert alert-info">
                    <label>Dirigidos a <b><?= Yii::$app->profile->name." ".Yii::$app->profile->lastname ?></b></label>
                </div>

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
                    <?php foreach ($formes as $forme): ?>
                        <tr>
                            <td>
                                <?= $forme->expedient ?>
                            </td>
                            <td>
                                <?= $forme->nooffice ?>
                            </td>
                            <td>
                                <?= $forme->subject ?>
                            </td>
                            <td>
                                <span class="label label-info"><?= $forme->getState(); ?></span>
                            </td>
                            <td>
                                <?= $forme->creationdate ?>
                            </td>
                            <td>
                                <?= Html::a('<i class="far fa-edit"></i>', ['evaluating', 'id' => $forme->idoffice], ['title' => 'Evaluar']) ?>
                                <?= Html::a('<i class="far fa-share-square"></i>', ['update', 'id' => $forme->idoffice], ['title' => 'Turnar']) ?>                                
                            </td>
                        </tr>
                    <?php endforeach; ?>    
                </tbody>
            </table>

            <table class="table">
                
                <div class="alert alert-success">
                    Correspondencia dirigida a su unidad administrativa
                </div>
                
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
                                <?= Html::a('<i class="far fa-edit"></i>', ['evaluating', 'id' => $office->idoffice], ['title' => 'Evaluar']) ?>
                                <?= Html::a('<i class="far fa-share-square"></i>', ['update', 'id' => $office->idoffice], ['title' => 'Turnar']) ?>                                
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