<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Officefile */

$this->title = $model->idoffice;
$this->params['breadcrumbs'][] = ['label' => 'Officefiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="officefile-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idoffice' => $model->idoffice, 'idfile' => $model->idfile], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idoffice' => $model->idoffice, 'idfile' => $model->idfile], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idoffice',
            'idfile',
        ],
    ]) ?>

</div>
