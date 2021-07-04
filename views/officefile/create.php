<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Officefile */

$this->title = 'Create Officefile';
$this->params['breadcrumbs'][] = ['label' => 'Officefiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="officefile-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
