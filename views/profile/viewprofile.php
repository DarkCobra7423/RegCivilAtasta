<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Profile */

$this->title = $model->name . " " . $model->lastname;
\yii\web\YiiAsset::register($this);
?>
<div class="profile-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar Perfil', ['updateprofile', 'id' => $model->idprofile], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Eliminar Perfil', ['delete', 'id' => $model->idprofile], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Realmente desea eliminar el perfil de ' . $model->name . '?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <?php /* DetailView::widget([
      'model' => $model,
      'attributes' => [
      'idprofile',
      'name',
      'lastname',
      'gender',
      'birthdate',
      'phone',
      'address',
      'photo',
      ['attribute' => 'avatar',
      'format' => 'raw',
      'value' => function($model){
      return Html::img($model->avatar, ['style' => 'width: 10%']);
      }
      ],
      'review:ntext',
      //'fkjobtitle',
      ['attribute' => 'Tipo usuario',
      'format' => 'raw',
      'value' => function($model){
      return $model->jobtitle;
      }
      ],
      //'fkworksin',
      ['attribute' => 'Labora en',
      'format' => 'raw',
      'value' => function($model){
      return $model->worksin->name;
      }
      ],
      //'fkuser',
      ['attribute' => 'Usuario',
      'format' => 'raw',
      'value' => function($model){
      return $model->username;
      }
      ],
      ],
      ]) */ ?>



    <div class="container">
        <div class="row">
            <div class="span12">
                <table class="table table-condensed table-hover">
                    <thead>
                        <tr>
                            <th>Campos</th>
                            <th>Datos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ID</td>
                            <td><?= $model->idprofile ?></td>    					
                        </tr>
                        <tr>
                            <td>Nombre</td>
                            <td><?= $model->name ?></td>    					
                        </tr>
                        <tr>
                            <td>Apellidos</td>
                            <td><?= $model->lastname ?></td>    					
                        </tr>
                        <tr>
                            <td>Genero</td>
                            <td><?= $model->gender ?></td>    					
                        </tr>
                        <tr>
                            <td>Fecha Nacimiento</td>
                            <td><?= $model->birthdate ?></td>    					
                        </tr>
                        <tr>
                            <td>Telefono</td>
                            <td><?= $model->phone ?></td>    					
                        </tr>
                        <tr>
                            <td>Direccion</td>
                            <td><?= $model->address ?></td>    					
                        </tr>
                        <tr>
                            <td>Avatar</td>
                            <td><?= Html::img($model->avatar, ['style' => 'width: 10%']) ?></td>    					
                        </tr>
                        <tr>
                            <td>Reseña</td>
                            <td><?= $model->review ?></td>    					
                        </tr>
                        <tr>
                            <td>Tipo Usuario</td>
                            <td><?= $model->jobtitle ?></td>    					
                        </tr>
                        <tr>
                            <td>Labora En</td>
                            <td><?= $model->worksin->name ?></td>    					
                        </tr>
                        <tr>
                            <td>Usuario</td>
                            <td><?= $model->username ?></td>    					
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>