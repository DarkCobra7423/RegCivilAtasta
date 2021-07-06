<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contacto';
?>
<div class="site-contact">
    <link href="<?= Yii::$app->homeUrl ?>css/contactStyle.css" rel="stylesheet" type="text/css"/>

    <div class="row" id="contatti">
        <div class="container mt-5">

            <div class="row" style="height:550px;">
                <div class="col-md-6 maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d948.7253555805985!2d-92.94851731514512!3d17.983322723855157!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x883cd6059f5f3e9e!2sRegistro%20Civil%20No.%202!5e0!3m2!1ses-419!2sus!4v1625544890575!5m2!1ses-419!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-md-6">
                    <h2 class="text-uppercase mt-3 font-weight-bold text-white">CONTACTANOS</h2>
                    <form action="">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control mt-2" placeholder="Nombre" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control mt-2" placeholder="Correo ELectronico" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form-control mt-2" placeholder="Email" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="number" class="form-control mt-2" placeholder="Telefono" required="">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Su asunto" rows="3" required=""></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required="">
                                        <label class="form-check-label" for="invalidCheck2">
                                            Acepta Terminios y Condiciones
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-light" type="submit">Enviar</button>
                            </div>
                        </div>
                    </form>
                    <div class="text-white">
                        <h2 class="text-uppercase mt-4 font-weight-bold">¿Donde estamos?</h2>

                        <i class="fas fa-phone mt-3"></i> <a href="tel:+">(+52) 9381266723</a><br>
                        <i class="fa fa-envelope mt-3"></i> <a href="">info@test.it</a><br>
                        <i class="fas fa-globe mt-3"></i> José María Morelos y Pavón 151, Cuadrante II, Atasta de Serra, 86100 Villahermosa, Tab., México<br>                        
                        <div class="my-4">
                            <a href="#"><i class="fab fa-facebook fa-3x pr-4"></i></a>
                            <a href="#"><i class="fab fa-linkedin fa-3x"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
