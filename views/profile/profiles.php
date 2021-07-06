<?php
use yii\helpers\Html;
?>
<link href="<?= Yii::$app->homeUrl; ?>css/profilesStyle.css" rel="stylesheet" type="text/css"/>
<div class="card-header">
    <div class="row" style="padding-left: 25px;padding-right: 25px;">
        <div class="pull-left">
<?= Html::a('Nuevo Perfil', ['profile/create'], ['class' => 'btn btn-warning']) ?>
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
                <img class="card-img-top" src="<?= Yii::$app->homeUrl . $profile->photo; ?>" alt="<?= $profile->name." ".$profile->lastname; ?>">
                <div class="card-body">
                    <h5 class="card-title">
                        <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;"><?= $profile->name." ".$profile->lastname; ?></font>
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
                    <a href="http://www.jquery2dotnet.com/" class="btn btn-dark btn-sm" style="font-size: 1.3rem;">
                        <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Ve a algún lugar</font>
                        </font>
                    </a>
                </div>
            </div>
        </div>
<?php endforeach; ?>

</div>