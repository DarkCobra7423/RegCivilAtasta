<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\OfficeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Filtrar Oficios';
?>
<div class="office-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
            //'idoffice',
            'expedient',
            'nooffice',
            'subject',
            'creationdate',
            'category',
          //  'fkstateoffice',
            'stateoffice',
            //'fkadministrativeunit',
            //'shifteddate',
            //'fkto',
            //'reviseddate',
            //'observations:ntext',
            //['class' => 'yii\grid\ActionColumn'],
            //-------------------
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{evaluating}',
                'buttons' => [
                    'evaluating' => function ($url, $model) {

                        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                                    'title' => Yii::t('yii', 'Ver o Evaluar'),
                        ]);
                    }
                ]
            ],
        //----------------
        ],
    ]);
    ?>

</div>
