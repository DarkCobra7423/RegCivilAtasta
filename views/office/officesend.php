<?php
use yii\helpers\Html;

$this->title = 'Oficios Enviados';
?>

<table class="table">

    <div class="alert alert-info">
        <label>Oficios Enviados Por: <b><?= Yii::$app->profile->name . " " . Yii::$app->profile->lastname ?></b></label>
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
                Evaluar
            </th>
        </tr>
    </thead>
    <tbody> 
        <?php
        foreach ($sendoffices as $sendoffice): 
        
        $sends = \app\models\Office::find()->where(['idoffice' => $sendoffice->fkoffice])->all();
        
        foreach ($sends as $send): 
            ?>
            <tr>
                <td>
                    <?= $send->expedient ?>
                </td>
                <td>
                    <?= $send->nooffice ?>
                </td>
                <td>
                    <?= $send->subject ?>
                </td>
                <td>
                    <?php if ($send->getStateoffice() == 'Turnado') { ?>
                        <span class="badge badge-warning"><?= $send->getStateoffice(); ?></span>
                    <?php } else { ?>
                        <span class="badge badge-success"><?= $send->getStateoffice(); ?></span>
                    <?php } ?>
                </td>
                <td>
                    <?= $send->creationdate ?>
                </td>
                <td>
                    <?= Html::a('<i class="far fa-edit"></i>', ['evaluating', 'id' => $send->idoffice], ['title' => 'Evaluar']) ?>                    
                </td>
            </tr>
        <?php
        endforeach; 
        endforeach;
        ?>    
    </tbody>
</table>