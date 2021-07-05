<?php
/* @var $this yii\web\View */

$this->title = 'Inicio';
?>
<div class="site-index">
    <link href="<?= Yii::$app->homeUrl; ?>css/homeStyle.css" rel="stylesheet" type="text/css"/>

    <style>
        .btn-warning {
            color: #111;
            background-color: #ffc107;
            border-color: #ffc107;
        }
        .btn-warning:hover {
            color: #111;
            background-color: #e0a800;
            border-color: #d39e00;
        }
        .btn-warning:focus {
            box-shadow: 0 0 0 3px rgba(255, 193, 7, 0.5);
        }
        .btn-warning:disabled {
            background-color: #ffc107;
            border-color: #ffc107;
        }
        .btn-warning:active {
            background-color: #e0a800;
            background-image: none;
            border-color: #d39e00;
        }
    </style>
        <?php if (Yii::$app->user->isSuperadmin) { ?>
        <div class="row" style="margin-left: 0px;margin-right: 0px;">
            <h1>Bienvenido <?= Yii::$app->profile->name ?></h1>
            <h2>Estas son las unidades administrativas que actualmente existen.</h2>
        </div>
        <div class="row" style="margin-left: 0px;margin-right: 0px;">
            <button class="btn btn-warning" style="font-size: 1.3rem;"> Nueva Unidad Administrativa</button>
        </div>
        <br>
        <?php         
        } else {
        ?>
        
        <h1>Aqui ira el carousel</h1>
        
        <br>
        <?php } ?>

    <div class="row">
        <?php foreach ($units as $unit): ?>
            <div class="col-md-4">
                <div class="card mb-4 text-white bg-dark" style="max-height: 443px;min-height: 443px;">
                    <img class="card-img-top" src="<?= $unit->image; ?>" alt="<?= $unit->name ?>">
                    <div class="card-body">
                        <h5 class="card-title">
                            <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit; font-size: 20px; text-transform: capitalize;"><?= $unit->name; ?></font></font>
                        </h5>
                        <p class="card-text">
                            <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;  text-align: justify"><?= $unit->description; ?></font>                       
                            </font>
                        </p>
                        <h5 style="color: red;"><?= $unit->note; ?></h5>
                        <a href="#" class="btn btn-outline-light btn-sm">
                            <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit; font-size: 17px;">Crear Oficio</font>                       
                            </font>
                        </a>
                        <?php if (Yii::$app->user->isSuperadmin) { ?>
                            <a href="#" class="btn btn-outline-light btn-sm">
                                <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit; font-size: 17px;">Editar</font>                       
                                </font>
                            </a>

                            <a href="#" class="btn btn-outline-light btn-sm">
                                <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit; font-size: 17px;">Eliminar</font>                       
                                </font>
                            </a>
                        <?php } else { } ?>

                    </div>
                </div>
            </div>        
        <?php endforeach; ?>        
    </div>


</div>
