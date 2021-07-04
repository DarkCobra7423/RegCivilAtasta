<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Officefile */

$this->title = 'Update Officefile: ' . $model->idoffice;
$this->params['breadcrumbs'][] = ['label' => 'Officefiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idoffice, 'url' => ['view', 'idoffice' => $model->idoffice, 'idfile' => $model->idfile]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="officefile-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
