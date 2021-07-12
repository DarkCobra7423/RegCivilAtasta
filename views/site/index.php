<?php
/* @var $this yii\web\View */

use kv4nt\owlcarousel\OwlCarouselWidget;
use yii\helpers\Html;

$this->title = 'Inicio';
?>
<br>
<br>
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

        .owl-carousel .owl-item img{
            display: block;  width: 100%; 
        }

        .item-class img{
            min-height: 640px; max-height: 640px; 
        }
        .size{
            font-size: 1.3rem;
        }
        
    </style>
    
    <?php if (Yii::$app->user->isSuperadmin) { ?>
    <div class="container" style="margin-top: 13px;">
            <div class="row" style="margin-left: 0px;margin-right: 0px;">
                <h1>Bienvenido <?= Yii::$app->profile->name ?></h1>
                <h2>Estas son las unidades administrativas que actualmente existen.</h2>
            </div>
            <div class="row" style="margin-left: 0px;margin-right: 0px;">                
                <?= Html::a('Nueva Unidad Administrativa', ['administrativeunit/createunit'], ['class' => 'btn btn-warning size']) ?>
            </div>
        </div>
        <br>
        <?php
    } else {
        ?>
        <?php
        OwlCarouselWidget::begin([
            'container' => 'div',
            'containerOptions' => [
                'id' => 'container-id',
                'class' => 'container-class'
            ],
            'pluginOptions' => [
                'autoplay' => true,
                'autoplayTimeout' => 4000,
                'items' => 1,
                'loop' => true,
                'itemsDesktop' => [1199, 3],
                'itemsDesktopSmall' => [979, 3]
            ]
        ]);
        ?>
        <?php foreach ($carousels as $carousel): ?>
            <div class="item-class">
                <img src="<?= $carousel->image; ?>" alt="<?= $carousel->name; ?>">
            </div>
        <?php endforeach; ?>      
        <?php OwlCarouselWidget::end(); ?>

        <br>
    <?php } ?>
    <div class="container">
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

                            <?= Html::a('<font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit; font-size: 17px;">Crear Oficio</font>                       
                                </font>', ['site/createoffice', 'id' => $unit->idadministrativeunit], ['class' => 'btn btn-outline-light btn-sm']) ?>

                            <?php if (Yii::$app->user->isSuperadmin) { ?>                                
                                <?= Html::a('<font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit; font-size: 17px;">Editar</font>                       
                                    </font>', ['administrativeunit/update', 'id' => $unit->idadministrativeunit], ['class' => 'btn btn-outline-light btn-sm']) ?>

                                <?=
                                Html::a('<font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit; font-size: 17px;">Eliminar</font>', ['administrativeunit/delete', 'id' => $unit->idadministrativeunit], [
                                    'class' => 'btn btn-outline-light btn-sm',
                                    'data' => [
                                        'confirm' => '¿Estás seguro de que quieres eliminar esta unidad?',
                                        'method' => 'post',
                                    ],
                                ])
                                ?>

                                <?php
                            } else {
                                
                            }
                            ?>

                        </div>
                    </div>
                </div>        
            <?php endforeach; ?>        
        </div>
    </div>

</div>
<script>
    var divContainer = document.getElementById('idcontainer');
    divContainer.className = '';
</script>
