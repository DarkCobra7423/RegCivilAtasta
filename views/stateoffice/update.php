<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Stateoffice */

$this->title = 'Update Stateoffice: ' . $model->idstateoffice;
$this->params['breadcrumbs'][] = ['label' => 'Stateoffices', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idstateoffice, 'url' => ['view', 'id' => $model->idstateoffice]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stateoffice-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
