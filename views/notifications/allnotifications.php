<?php

use yii\helpers\Html;
use yii\web\Controller;
use app\models\Notifications;
use yii\grid\GridView;
?>
<link href="<?= Yii::$app->homeUrl ?>css/notificationsStyle.css" rel="stylesheet" type="text/css"/>

<?php
foreach ($alls as $all):
    if ($all->read == "0") {
        ?>
        <div class="Message">
            <div class="Message-icon">
                <i class="fas fa-check"></i>
            </div>
            <div class="Message-body">
                <h4><?= $all->title ?></h4>
                <p> <?= $all->message ?></p>
                <p class="pull-right"><i class="far fa-clock"></i> <?= $all->datatime ?></p>
                <div class="btn-group" style="margin-top: 10px;">
                    <?= Html::a('Leído', ['notifications/read', 'id' => $all->idnotifications], ['class' => 'Message-button', 'id' => 'js-showMe']) ?>
                    <?= Html::a('Ver Oficio', ['office/evaluating', 'id' => $all->fkoffice], ['class' => 'Message-button js-messageClose']) ?>                    
                </div>

            </div>
            <button class="Message-close js-messageClose"><i class="fa fa-times"></i></button>
        </div>
    <?php } else { ?>
        <div class="Message Message--orange">
            <div class="Message-icon">
                <i class="fas fa-check-double"></i>
            </div>
            <div class="Message-body">
                <h4><?= $all->title ?></h4>
                <p> <?= $all->message ?></p>
                <p class="pull-right" ><i class="far fa-clock"></i> <?= $all->datatime ?></p>
                <div class="btn-group" style="margin-top: 10px;">
                    <?= Html::a('Ver Oficio', ['office/evaluating', 'id' => $all->fkoffice], ['class' => 'Message-button js-messageClose']) ?>
                </div>

            </div>
            <button class="Message-close js-messageClose"><i class="fa fa-times"></i></button>
        </div>
    <?php } endforeach; ?>

<script>
    /*
     function closeMessage(el) {
     el.addClass('is-hidden');
     }
     
     $('.js-messageClose').on('click', function (e) {
     closeMessage($(this).closest('.Message'));
     });
     
     $('#js-helpMe').on('click', function (e) {
     alert('Help you we will, young padawan');
     closeMessage($(this).closest('.Message'));
     });
     
     $('#js-authMe').on('click', function (e) {
     alert('Okelidokeli, requesting data transfer.');
     closeMessage($(this).closest('.Message'));
     });
     
     $('#js-showMe').on('click', function (e) {
     alert("You're off to our help section. See you later!");
     closeMessage($(this).closest('.Message'));
     });
     
     $(document).ready(function () {
     setTimeout(function () {
     closeMessage($('#js-timer'));
     }, 5000);
     });
     */
</script>