<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Administrativeunit */

$this->title = 'Create Administrativeunit';
$this->params['breadcrumbs'][] = ['label' => 'Administrativeunits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="administrativeunit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
