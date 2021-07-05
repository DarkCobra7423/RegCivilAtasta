<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Acerca de nosotros';
?>
<link href="<?= Yii::$app->homeUrl; ?>css/AboutStyle.css" rel="stylesheet" type="text/css"/>
<div class="site-about">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <center>
                    <div class="aboutus-image float-left hidden-sm">
                        <img src="<?= Yii::$app->homeUrl ?>image/about.jpeg" alt=""/>                        
                    </div>
                </center>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="aboutus-content ">
                    <h2>
                        <p><span>Bienvenido al </span></p>
                        Registro <span>Civil Atasta</span>
                    </h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. </p>

                    <div class="counter ">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="single-counter text-center">
                                <h2 class="counter"><span>15</span></h2>
                                <p>Lorem ipsum dolor.</p>
                            </div>

                            <div class="single-counter text-center">
                                <h2 class="counter"><span>100</span></h2>
                                <p>Lorem ipsum dolor.</p>
                            </div>

                            <div class="single-counter text-center">
                                <h2 class="counter"><span>5</span></h2>
                                <p>Lorem ipsum dolor.</p>
                            </div>

                            <div class="single-counter text-center">
                                <h2 class="counter"><span>10</span></h2>
                                <p>Lorem ipsum dolor.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
