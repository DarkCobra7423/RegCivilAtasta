<?php
/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<style>
    /*! CSS Used from: http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css */
    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }
    h1,
    h4 {
        margin-top: 0;
        margin-bottom: 0.5rem;
    }
    p {
        margin-top: 0;
        margin-bottom: 1rem;
    }
    a {
        color: #007bff;
        text-decoration: none;
        background-color: transparent;
        -webkit-text-decoration-skip: objects;
    }
    a:hover {
        color: #0056b3;
        text-decoration: underline;
    }
    h1,
    h4 {
        margin-bottom: 0.5rem;
        font-family: inherit;
        font-weight: 500;
        line-height: 1.2;
        color: inherit;
    }
    h1 {
        font-size: 2.5rem;
    }
    h4 {
        font-size: 1.5rem;
    }
    .container {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }
    @media (min-width: 576px) {
        .container {
            max-width: 540px;
        }
    }
    @media (min-width: 768px) {
        .container {
            max-width: 720px;
        }
    }
    @media (min-width: 992px) {
        .container {
            max-width: 960px;
        }
    }
    @media (min-width: 1200px) {
        .container {
            max-width: 1140px;
        }
    }
    .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }
    .col-md-12 {
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }
    @media (min-width: 768px) {
        .col-md-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }
    }
    .btn {
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
            border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
    @media screen and (prefers-reduced-motion: reduce) {
        .btn {
            transition: none;
        }
    }
    .btn:focus,
    .btn:hover {
        text-decoration: none;
    }
    .btn:focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
    .btn:disabled {
        opacity: 0.65;
    }
    .btn-primary {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }
    .btn-primary:hover {
        color: #fff;
        background-color: #0069d9;
        border-color: #0062cc;
    }
    .btn-primary:focus {
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
    }
    .btn-primary:disabled {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }
    @media print {
        *,
        ::after,
        ::before {
            text-shadow: none !important;
            box-shadow: none !important;
        }
        p {
            orphans: 3;
            widows: 3;
        }
        .container {
            min-width: 992px !important;
        }
    }
    /*! CSS Used from: Embedded */
    h4 {
        color: #253858;
        margin-bottom: 0.8rem;
        position: relative;
        font-family: "Raleway", sans-serif;
        font-size: 1.5rem;
    }
    p {
        margin-top: 0;
        margin-bottom: 1rem;
        display: block;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        color: rgb(113, 120, 126);
        font-family: "Lato", sans-serif;
    }
    .btn-primary:hover {
        color: #fff;
        background-color: #0069d9;
        border-color: #0062cc;
    }
    .btn-primary {
        color: #fff;
        background-color: #0069d9;
        border-color: #0062cc;
    }
    .btn-round {
        border-radius: 30px !important;
        text-decoration: none;
    }
    .btn {
        font-size: 15px;
        font-weight: 600;
        padding: 9px 25px;
        border-width: 2px;
        box-shadow: 0 3px 8px 0 rgba(41, 49, 89, 0.15),
            inset 0 0 0 1px hsla(0, 0%, 100%, 0.1);
    }
    .btn {
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
            border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
    .error-content {
        padding: 0 0 70px;
    }
    .error-text {
        text-align: center;
    }
    .error {
        font-size: 180px;
        font-weight: 100;
    }
    .im-sheep {
        display: inline-block;
        position: relative;
        font-size: 1em;
        margin-bottom: 70px;
    }
    .im-sheep * {
        transition: transform 0.3s;
    }
    .im-sheep .top {
        position: relative;
        top: 0;
        animation: bob 1s infinite;
    }
    .im-sheep:hover .head {
        transform: rotate(0deg);
    }
    .im-sheep:hover .head .im-eye {
        width: 1.25em;
        height: 1.25em;
    }
    .im-sheep:hover .head .im-eye:before {
        right: 30%;
    }
    .im-sheep:hover .top {
        animation-play-state: paused;
    }
    .im-sheep .head {
        display: inline-block;
        width: 5em;
        height: 5em;
        border-radius: 100%;
        background: #253858;
        vertical-align: middle;
        position: relative;
        top: 1em;
        transform: rotate(30deg);
    }
    .im-sheep .head:before {
        content: "";
        display: inline-block;
        width: 80%;
        height: 50%;
        background: #253858;
        position: absolute;
        bottom: 0;
        right: -10%;
        border-radius: 50% 40%;
    }
    .im-sheep .head:hover .im-ear.one,
    .im-sheep .head:hover .im-ear.two {
        transform: rotate(0deg);
    }
    .im-sheep .head .im-eye {
        display: inline-block;
        width: 1em;
        height: 1em;
        border-radius: 100%;
        background: white;
        position: absolute;
        overflow: hidden;
    }
    .im-sheep .head .im-eye:before {
        content: "";
        display: inline-block;
        background: black;
        width: 50%;
        height: 50%;
        border-radius: 100%;
        position: absolute;
        right: 10%;
        bottom: 10%;
        transition: all 0.3s;
    }
    .im-sheep .head .im-eye.one {
        right: -2%;
        top: 1.7em;
    }
    .im-sheep .head .im-eye.two {
        right: 2.5em;
        top: 1.7em;
    }
    .im-sheep .head .im-ear {
        background: #253858;
        width: 50%;
        height: 30%;
        border-radius: 100%;
        position: absolute;
    }
    .im-sheep .head .im-ear.one {
        left: -10%;
        top: 5%;
        transform: rotate(-30deg);
    }
    .im-sheep .head .im-ear.two {
        top: 2%;
        right: -5%;
        transform: rotate(20deg);
    }
    .im-sheep .body {
        display: inline-block;
        width: 7em;
        height: 7em;
        border-radius: 100%;
        background: #0054d1;
        position: relative;
        vertical-align: middle;
        margin-right: -3em;
    }
    .im-sheep .im-legs {
        display: inline-block;
        position: absolute;
        top: 80%;
        left: 10%;
        z-index: -1;
    }
    .im-sheep .im-legs .im-leg {
        display: inline-block;
        background: #141214;
        width: 0.5em;
        height: 2.5em;
        margin: 0.2em;
    }
    .im-sheep::before {
        left: 0;
        content: "";
        display: inline-block;
        position: absolute;
        top: 112%;
        width: 100%;
        height: 18%;
        border-radius: 100%;
        background: rgba(0, 0, 0, 0.2);
    }
    /*! CSS Used keyframes */
    @keyframes bob {
        0% {
            top: 0;
        }
        50% {
            top: 0.2em;
        }
    }

</style>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="error-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="error-text">
                    <h1 class="error">
                        <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">404 Error</font>
                        </font>
                    </h1>
                    <div class="im-sheep">
                        <div class="top">
                            <div class="body"></div>
                            <div class="head">
                                <div class="im-eye one"></div>
                                <div class="im-eye two"></div>
                                <div class="im-ear one"></div>
                                <div class="im-ear two"></div>
                            </div>
                        </div>
                        <div class="im-legs">
                            <div class="im-leg"></div>
                            <div class="im-leg"></div>
                            <div class="im-leg"></div>
                            <div class="im-leg"></div>
                        </div>
                    </div>
                    <h4>
                        <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">¡UPS! </font>
                        <font style="vertical-align: inherit;">¡No se pudo encontrar esta página!</font>
                        </font>
                    </h4>
                    <p>
                        <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Lo sentimos, pero la página que estás buscando no existe, se ha eliminado o se ha cambiado de nombre.</font>
                        </font>
                    </p>
                    <a href="<?= Yii::$app->homeUrl ?>" class="btn btn-primary btn-round">
                        <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Ir a la página de inicio</font>
                        </font>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="site-error" style="color: white;">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        El error anterior ocurrió mientras el servidor web procesaba su solicitud.
    </p>
    <p>
        Comuníquese con nosotros si cree que se trata de un error del servidor. Gracias.
    </p>

</div>
