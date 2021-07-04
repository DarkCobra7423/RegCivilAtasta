<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jobtitle */

$this->title = 'Update Jobtitle: ' . $model->idjobtitle;
$this->params['breadcrumbs'][] = ['label' => 'Jobtitles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idjobtitle, 'url' => ['view', 'id' => $model->idjobtitle]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jobtitle-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
