<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Stateoffice */

$this->title = 'Create Stateoffice';
$this->params['breadcrumbs'][] = ['label' => 'Stateoffices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stateoffice-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
