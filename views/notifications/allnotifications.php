
<link href="<?= Yii::$app->homeUrl ?>css/notificationsStyle.css" rel="stylesheet" type="text/css"/>
<!--
<div class="Message" id="js-timer">
    <div class="Message-icon">
        <i class="fa fa-bell-o"></i>
    </div>
    <div class="Message-body">
        <p>This is a simple, but friendly, notification.</p>
        <p class="u-italic">It will disappear within a few seconds.</p>
    </div>
    <button class="Message-close js-messageClose"><i class="fa fa-times"></i></button>
</div>

<div class="Message Message--orange">
    <div class="Message-icon">
        <i class="fa fa-exclamation"></i>
    </div>
    <div class="Message-body">
        <p>This is a simple notification with a brighter color...</p>
        <p>If you bring you mouse here you can close it manually.</p>
    </div>
    <button class="Message-close js-messageClose"><i class="fa fa-times"></i></button>
</div>


<div class="Message Message--green">
    <div class="Message-icon">
        <i class="fa fa-check"></i>
    </div>
    <div class="Message-body">
        <p>This is a message telling you that everything is a-okay!</p>
        <p>Good job, and good riddance.</p>
    </div>
    <button class="Message-close js-messageClose"><i class="fa fa-times"></i></button>
</div>

<div class="Message Message--red">
    <div class="Message-icon">
        <i class="fa fa-times"></i>
    </div>
    <div class="Message-body">
        <p>This is a notification that something went wrong...</p>
        <button class="Message-button" id="js-helpMe">Yikes, help me please!</button>
        <button class="Message-button js-messageClose">Don't care.</button>
    </div>
    <button class="Message-close js-messageClose"><i class="fa fa-times"></i></button>
</div>
-->
<?php foreach ($alls as $all): 
    if($all->read == "1"){       
    ?>
<div class="Message">
    <div class="Message-icon">
        <i class="fa fa-bell-o"></i>
    </div>
    <div class="Message-body">
        <p>Do you know that you can assign status and relation to a company right in the visit list?</p>
        <button class="Message-button" id="js-showMe">Show me how</button>
        <button class="Message-button js-messageClose">Nah, not interested</button>
    </div>
    <button class="Message-close js-messageClose"><i class="fa fa-times"></i></button>
</div>
    <?php }else{ ?>
<div class="Message Message--orange">
    <div class="Message-icon">
        <i class="fa fa-exclamation"></i>
    </div>
    <div class="Message-body">
        <p>You haven't authorized your LinkedIn account. Would you like some help with that?</p>
        <p class="u-italic">With your account connected we can show you what connections you have at a company that visited your site!</p>
        <button class="Message-button" id="js-authMe">Authorize!</button>
        <button class="Message-button js-messageClose">I'll just keep using carrier pigeons</button>
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