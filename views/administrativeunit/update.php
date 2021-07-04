<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Administrativeunit */

$this->title = 'Update Administrativeunit: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Administrativeunits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->idadministrativeunit]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="administrativeunit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
