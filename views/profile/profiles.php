<?php
use yii\helpers\Html;
$this->title = "Perfiles";
?>
<link href="<?= Yii::$app->homeUrl; ?>css/profilesStyle.css" rel="stylesheet" type="text/css"/>
<div class="card-header">
    <div class="row" style="padding-left: 25px;padding-right: 25px;">
        <div class="pull-left">
<?= Html::a('Nuevo Perfil', ['profile/newprofile'], ['class' => 'btn btn-warning']) ?>
        </div>

        <div class="pull-right">
            <input type="text" placeholder="Buscar">
        </div>
    </div>
</div>
<br>

<div class="row">
<?php foreach ($profiles as $profile): ?>
        <div class="col-md-4">
            <div class="card mb-4 border-dark">
                <center>
                    <img class="card-img-top" src="<?= $profile->avatar; ?>" alt="<?= $profile->name." ".$profile->lastname; ?>" style="width: 50%; margin-top: 10px;">
                </center>
                <div class="card-body">
                    <h5 class="card-title">
                        <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;"><b><?= $profile->name." ".$profile->lastname; ?></b></font>
                        </font>
                    </h5>
                    <p class="card-text">
                        <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;"><?= $profile->review; ?></font><br>
                        <font style="vertical-align: inherit;">Genero: <?= $profile->gender; ?></font><br>
                        <font style="vertical-align: inherit;">Telefono: <?= $profile->phone; ?></font><br>
                        <font style="vertical-align: inherit;">Labora en: <?= $profile->worksin->name; ?></font>
                        </font>
                    </p>  
                    <?= Html::a('<font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit; font-size: 15px;">Ver Perfil</font>
                        </font>', ['viewprofile', 'id' => $profile->idprofile], ['class' => 'btn btn-dark btn-sm']) ?>
                    
                    <?= Html::a('<font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit; font-size: 15px;">Inicio Sesion</font>', ['user-management/user/update', 'id' => $profile->fkuser], ['class' => 'btn btn-dark btn-sm']) ?>
                    <?= Html::a('<font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit; font-size: 15px;">Eliminar</font>', ['delete', 'id' => $profile->idprofile], [
                        'class' => 'btn btn-dark btn-sm',
                        'data' => [
                            'confirm' => '¿Realmente desea eliminar el perfil '.$profile->name.'?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </div>
            </div>
        </div>
<?php endforeach; ?>

</div>