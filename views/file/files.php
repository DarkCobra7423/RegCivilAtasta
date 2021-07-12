<?php

use yii\helpers\Html;
?>

<body>
    <link href="<?= Yii::$app->homeUrl ?>css/filesStyle.css" rel="stylesheet" type="text/css"/>

    <div class="container">
        <div class="view-account">
            <section class="module">
                <div class="module-inner">

                    <div class="content-panel">
                        <div class="content-header-wrapper">
                            <h2 class="title">Correspondencia de <?= $unit->name ?></h2>

                        </div>
                        <div class="content-utilities">
                            <div class="page-nav">
                                <span class="indicator">Vista:</span>
                                <div class="btn-group" role="group">
                                    <button id="idBtnGrid" class="active btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Grid View" id="drive-grid-toggle" onclick="viewGrid();"><i class="fa fa-th-large"></i></button>
                                    <button id="idBtnList" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="List View" id="drive-list-toggle" onclick="viewList();"><i class="fa fa-list-ul"></i></button>
                                </div>
                            </div>
                            <div class="actions">
                                <div class="btn-group">
                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false">Todos los archivos <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-file"></i> Revisados</a></li>
                                        <li><a href="#"><i class="fa fa-file-image-o"></i> Turnados</a></li>
                                        <li><a href="#"><i class="fa fa-file-video-o"></i> Pendientes</a></li>
                                        <li><a href="#"><i class="fa fa-folder"></i> Rechazados</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false"><i class="fa fa-filter"></i> Sorting <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Newest first</a></li>
                                        <li><a href="#">Oldest first</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Refresh"><i class="fa fa-refresh"></i></button>
                                    <!--<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Archive"><i class="fa fa-archive"></i></button>-->

                                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Report spam"><i class="fa fa-exclamation-triangle"></i></button>
                                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></button>
                                </div>
                            </div>
                        </div>

                        <div id="idGrid" class="drive-wrapper drive-grid-view">
                            <div class="grid-items-wrapper">

                                <?php
                                foreach ($offices as $office) {

                                    $officefiles = \app\models\Officefile::find()->where(['idoffice' => $office->idoffice])->all();

                                    foreach ($officefiles as $officefile) {

                                        $files = \app\models\File::find()->where(['idfile' => $officefile->idfile])->all();

                                        foreach ($files as $file) {

                                            if ($file->format == '.txt') {
                                                ?>
                                                <!--TXT-->
                                                <div class="drive-item module text-center">
                                                    <div class="drive-item-inner module-inner">
                                                        <div class="drive-item-title"><a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>"><?= $file->name ?></a></div>
                                                        <div class="drive-item-thumb">
                                                            <a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>" style="font-size: 70px;"><i class="far fa-file-alt text-primary"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="drive-item-footer module-footer">
                                                        <ul class="utilities list-inline">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a></li>
                                                            <li><?= Html::a('<i class="fa fa-trash"></i>', ['delete', 'id' => $file->idfile], ['class' => '', 'data' => ['confirm' => '¿Realmente desea eliminar el archivo ' . $file->name . '?', 'method' => 'post',],]) ?></li>                                                           
                                                        </ul>
                                                    </div>
                                                </div>
                                            <?php } else if (($file->format == '.jpg') || ($file->format == '.png') || ($file->format == '.jpeg') || ($file->format == '.gif')) { ?>
                                                <!--JPG-->
                                                <div class="drive-item module text-center">
                                                    <div class="drive-item-inner module-inner">
                                                        <div class="drive-item-title"><a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>"><?= $file->name ?></a></div>
                                                        <div class="drive-item-thumb">
                                                            <a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>"><img class="img-responsive" src="<?= $file->urlfile ?>" alt="<?= $file->name ?>"></a>
                                                        </div>
                                                    </div>
                                                    <div class="drive-item-footer module-footer">
                                                        <ul class="utilities list-inline">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a></li>
                                                            <li><?= Html::a('<i class="fa fa-trash"></i>', ['delete', 'id' => $file->idfile], ['class' => '', 'data' => ['confirm' => '¿Realmente desea eliminar el archivo ' . $file->name . '?', 'method' => 'post',],]) ?></li>                                                           
                                                        </ul>
                                                    </div>
                                                </div>
                                            <?php } else if (($file->format == '.ppt') || ($file->format == '.pptx')) { ?>
                                                <!--PPT-->
                                                <div class="drive-item module text-center">
                                                    <div class="drive-item-inner module-inner">
                                                        <div class="drive-item-title"><a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>"><?= $file->name ?></a></div>
                                                        <div class="drive-item-thumb">
                                                            <a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>" style="font-size: 70px;"><i class="far fa-file-powerpoint text-warning"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="drive-item-footer module-footer">
                                                        <ul class="utilities list-inline">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a></li>
                                                            <li><?= Html::a('<i class="fa fa-trash"></i>', ['delete', 'id' => $file->idfile], ['class' => '', 'data' => ['confirm' => '¿Realmente desea eliminar el archivo ' . $file->name . '?', 'method' => 'post',],]) ?></li>                                                           
                                                        </ul>
                                                    </div>
                                                </div>
                                            <?php } else if (($file->format == '.csv') || ($file->format == '.xls')) { ?>
                                                <!--CSV-->
                                                <div class="drive-item module text-center">
                                                    <div class="drive-item-inner module-inner">
                                                        <div class="drive-item-title"><a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>"><?= $file->name ?></a></div>
                                                        <div class="drive-item-thumb">
                                                            <a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>" style="font-size: 70px;"><i class="far fa-file-excel text-success"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="drive-item-footer module-footer">
                                                        <ul class="utilities list-inline">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a></li>
                                                            <li><?= Html::a('<i class="fa fa-trash"></i>', ['delete', 'id' => $file->idfile], ['class' => '', 'data' => ['confirm' => '¿Realmente desea eliminar el archivo ' . $file->name . '?', 'method' => 'post',],]) ?></li>                                                           
                                                        </ul>
                                                    </div>
                                                </div>
                                            <?php } else if ($file->format == '.pdf') { ?>
                                                <!--PDF-->
                                                <div class="drive-item module text-center">
                                                    <div class="drive-item-inner module-inner">
                                                        <div class="drive-item-title"><a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>"><?= $file->name ?></a></div>
                                                        <div class="drive-item-thumb">
                                                            <a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>" style="font-size: 70px;"><i class="far fa-file-pdf text-danger"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="drive-item-footer module-footer">
                                                        <ul class="utilities list-inline">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a></li>
                                                            <li><?= Html::a('<i class="fa fa-trash"></i>', ['delete', 'id' => $file->idfile], ['class' => '', 'data' => ['confirm' => '¿Realmente desea eliminar el archivo ' . $file->name . '?', 'method' => 'post',],]) ?></li>                                                           
                                                        </ul>
                                                    </div>
                                                </div>
                                            <?php } else if (($file->format == '.zip') || ($file->format == '.rar')) { ?>

                                                <!--ZIP-->
                                                <div class="drive-item module text-center">
                                                    <div class="drive-item-inner module-inner">
                                                        <div class="drive-item-title"><a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>"><?= $file->name ?></a></div>
                                                        <div class="drive-item-thumb">
                                                            <a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>" style="font-size: 70px;"><i class="far fa-file-archive text-primary"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="drive-item-footer module-footer">
                                                        <ul class="utilities list-inline">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a></li>
                                                            <li><?= Html::a('<i class="fa fa-trash"></i>', ['delete', 'id' => $file->idfile], ['class' => '', 'data' => ['confirm' => '¿Realmente desea eliminar el archivo ' . $file->name . '?', 'method' => 'post',],]) ?></li>                                                           
                                                        </ul>
                                                    </div>
                                                </div>
                                            <?php } else if (($file->format == '.docx') || ($file->format == '.doc')) { ?>
                                                <!--DOC-->
                                                <div class="drive-item module text-center">
                                                    <div class="drive-item-inner module-inner">
                                                        <div class="drive-item-title"><a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>"><?= $file->name ?></a></div>
                                                        <div class="drive-item-thumb">
                                                            <a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>" style="font-size: 70px;"><i class="far fa-file-word text-info"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="drive-item-footer module-footer">
                                                        <ul class="utilities list-inline">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a></li>
                                                            <li><?= Html::a('<i class="fa fa-trash"></i>', ['delete', 'id' => $file->idfile], ['class' => '', 'data' => ['confirm' => '¿Realmente desea eliminar el archivo ' . $file->name . '?', 'method' => 'post',],]) ?></li>                                                           
                                                        </ul>
                                                    </div>
                                                </div>
                                            <?php } else if ($file->format == '.html') { ?>

                                                <!--HMTL-->
                                                <div class="drive-item module text-center">
                                                    <div class="drive-item-inner module-inner">
                                                        <div class="drive-item-title"><a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>"><?= $file->name ?></a></div>
                                                        <div class="drive-item-thumb">
                                                            <a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>" style="font-size: 70px;"><i class="far fa-file-code text-primary"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="drive-item-footer module-footer">
                                                        <ul class="utilities list-inline">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a></li>
                                                            <li><?= Html::a('<i class="fa fa-trash"></i>', ['delete', 'id' => $file->idfile], ['class' => '', 'data' => ['confirm' => '¿Realmente desea eliminar el archivo ' . $file->name . '?', 'method' => 'post',],]) ?></li>                                                           
                                                        </ul>
                                                    </div>
                                                </div>
                                            <?php } else if (($file->format == '.mp4') || ($file->format == '.avi') || ($file->format == '.wmv') || ($file->format == '.mov') || ($file->format == '.rmvb') || ($file->format == '.mkb'))  { ?>
 
                                                <!--VIDEO-->
                                                <div class="drive-item module text-center">
                                                    <div class="drive-item-inner module-inner">
                                                        <div class="drive-item-title"><a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>"><?= $file->name ?></a></div>
                                                        <div class="drive-item-thumb">
                                                            <a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>" style="font-size: 70px;"><i class="far fa-file-video text-primary"></i></a>                                                
                                                        </div>
                                                    </div>
                                                    <div class="drive-item-footer module-footer">
                                                        <ul class="utilities list-inline">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a></li>
                                                            <li><?= Html::a('<i class="fa fa-trash"></i>', ['delete', 'id' => $file->idfile], ['class' => '', 'data' => ['confirm' => '¿Realmente desea eliminar el archivo ' . $file->name . '?', 'method' => 'post',],]) ?></li>                                                           
                                                        </ul>
                                                    </div>
                                                </div>
                                            <?php } else if (($file->format == '.mp3') || ($file->format == '.mp4')){ ?>
                                                <!--AUDIO-->
                                                <div class="drive-item module text-center">
                                                    <div class="drive-item-inner module-inner">
                                                        <div class="drive-item-title"><a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>"><?= $file->name ?></a></div>
                                                        <div class="drive-item-thumb">
                                                            <a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>" style="font-size: 70px;"><i class="far fa-file-audio text-primary"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="drive-item-footer module-footer">
                                                        <ul class="utilities list-inline">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a></li>
                                                            <li><?= Html::a('<i class="fa fa-trash"></i>', ['delete', 'id' => $file->idfile], ['class' => '', 'data' => ['confirm' => '¿Realmente desea eliminar el archivo ' . $file->name . '?', 'method' => 'post',],]) ?></li>                                                           
                                                        </ul>
                                                    </div>
                                                </div>
                                            <?php } else { ?>
                                                <!--OTRO-->
                                                <div class="drive-item module text-center">
                                                    <div class="drive-item-inner module-inner">
                                                        <div class="drive-item-title"><a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>"><?= $file->name ?></a></div>
                                                        <div class="drive-item-thumb">
                                                            <a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>" style="font-size: 70px;"><i class="far fa-file text-primary"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="drive-item-footer module-footer">
                                                        <ul class="utilities list-inline">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a></li>
                                                            <li><?= Html::a('<i class="fa fa-trash"></i>', ['delete', 'id' => $file->idfile], ['class' => '', 'data' => ['confirm' => '¿Realmente desea eliminar el archivo ' . $file->name . '?', 'method' => 'post',],]) ?></li> 
                                                        </ul>
                                                    </div>
                                                </div>

                                                <?php
                                            }
                                        }
                                    }
                                }
                                ?>
                                <!--------------->

                            </div>
                        </div>

                        <div id="idList" class="drive-wrapper drive-list-view" hidden="">
                            <div class="table-responsive drive-items-table-wrapper">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="type"></th>
                                            <th class="name truncate">Nombre</th>
                                            <th class="date">Tipo</th>
                                            <th class="size">Tamaño</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($offices as $office) {

                                            $officefiles = \app\models\Officefile::find()->where(['idoffice' => $office->idoffice])->all();

                                            foreach ($officefiles as $officefile) {

                                                $files = \app\models\File::find()->where(['idfile' => $officefile->idfile])->all();

                                                foreach ($files as $file) {

                                                    if ($file->format == '.txt') {
                                                        ?>

                                                        <!--TXT-->
                                                        <tr>
                                                            <td class="type"><i class="far fa-file-alt text-primary"></i></td>
                                                            <td class="name truncate"><a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>"><?= $file->name ?></a></td>
                                                            <td class="date"><?= $file->format ?></td>
                                                            <td class="size"><?= $file->size ?></td>
                                                            <td class="action">
                                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a> 
                                                                <?= Html::a('<i class="fa fa-trash"></i>', ['delete', 'id' => $file->idfile], ['class' => '', 'data' => ['confirm' => '¿Realmente desea eliminar el archivo ' . $file->name . '?', 'method' => 'post',],]) ?>
                                                            </td>
                                                        </tr>
                                                <?php } else if (($file->format == '.jpg') || ($file->format == '.png') || ($file->format == '.jpeg') || ($file->format == '.gif')) { ?>
                                                        <!--JPG-->
                                                        <tr>
                                                            <td class="type"><i class="far fa-file-image text-primary"></i></td>
                                                            <td class="name truncate"><a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>"><?= $file->name ?></a></td>
                                                            <td class="date"><?= $file->format ?></td>
                                                            <td class="size"><?= $file->size ?></td>
                                                            <td class="action">
                                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a> 
                                                                <?= Html::a('<i class="fa fa-trash"></i>', ['delete', 'id' => $file->idfile], ['class' => '', 'data' => ['confirm' => '¿Realmente desea eliminar el archivo ' . $file->name . '?', 'method' => 'post',],]) ?>
                                                            </td>
                                                        </tr>
                                        <?php } else if (($file->format == '.ppt') || ($file->format == '.pptx')) { ?>
                                                        <!--PPT-->
                                                        <tr>
                                                            <td class="type"><i class="far fa-file-powerpoint text-warning"></i></td>
                                                            <td class="name truncate"><a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>"><?= $file->name ?></a></td>
                                                            <td class="date"><?= $file->format ?></td>
                                                            <td class="size"><?= $file->size ?></td>
                                                            <td class="action">
                                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a> 
                                                                <?= Html::a('<i class="fa fa-trash"></i>', ['delete', 'id' => $file->idfile], ['class' => '', 'data' => ['confirm' => '¿Realmente desea eliminar el archivo ' . $file->name . '?', 'method' => 'post',],]) ?>
                                                            </td>
                                                        </tr>
                                            <?php } else if (($file->format == '.csv') || ($file->format == '.xls')) { ?>
                                                        <!--CSV-->
                                                        <tr>
                                                            <td class="type"><i class="far fa-file-excel text-success"></i></td>
                                                            <td class="name truncate"><a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>"><?= $file->name ?></a></td>
                                                            <td class="date"><?= $file->format ?></td>
                                                            <td class="size"><?= $file->size ?></td>
                                                            <td class="action">
                                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a> 
                                                                <?= Html::a('<i class="fa fa-trash"></i>', ['delete', 'id' => $file->idfile], ['class' => '', 'data' => ['confirm' => '¿Realmente desea eliminar el archivo ' . $file->name . '?', 'method' => 'post',],]) ?>
                                                            </td>
                                                        </tr>
                                                    <?php } else if ($file->format == '.pdf') { ?>
                                                        <!--PDF-->
                                                        <tr>
                                                            <td class="type"><i class="far fa-file-pdf text-danger"></i></td>
                                                            <td class="name truncate"><a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>"><?= $file->name ?></a></td>
                                                            <td class="date"><?= $file->format ?></td>
                                                            <td class="size"><?= $file->size ?></td>
                                                            <td class="action">
                                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a> 
                                                                <?= Html::a('<i class="fa fa-trash"></i>', ['delete', 'id' => $file->idfile], ['class' => '', 'data' => ['confirm' => '¿Realmente desea eliminar el archivo ' . $file->name . '?', 'method' => 'post',],]) ?>
                                                            </td>
                                                        </tr>
                                            <?php } else if (($file->format == '.docx') || ($file->format == '.doc')) { ?>
                                                        <!--DOC-->
                                                        <tr>
                                                            <td class="type"><i class="far fa-file-word text-info"></i></td>
                                                            <td class="name truncate"><a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>"><?= $file->name ?></a></td>
                                                            <td class="date"><?= $file->format ?></td>
                                                            <td class="size"><?= $file->size ?></td>
                                                            <td class="action">
                                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a> 
                                                                <?= Html::a('<i class="fa fa-trash"></i>', ['delete', 'id' => $file->idfile], ['class' => '', 'data' => ['confirm' => '¿Realmente desea eliminar el archivo ' . $file->name . '?', 'method' => 'post',],]) ?>
                                                            </td>
                                                        </tr>
                                                    <?php } else if ($file->format == '.html') { ?>
                                                        <!--HTML-->
                                                        <tr>
                                                            <td class="type"><i class="far fa-file-code text-primary"></i></td>
                                                            <td class="name truncate"><a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>"><?= $file->name ?></a></td>
                                                            <td class="date"><?= $file->format ?></td>
                                                            <td class="size"><?= $file->size ?></td>
                                                            <td class="action">
                                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a> 
                                                                <?= Html::a('<i class="fa fa-trash"></i>', ['delete', 'id' => $file->idfile], ['class' => '', 'data' => ['confirm' => '¿Realmente desea eliminar el archivo ' . $file->name . '?', 'method' => 'post',],]) ?>
                                                            </td>
                                                        </tr>
                                                    <?php } else if (($file->format == '.mp4') || ($file->format == '.avi') || ($file->format == '.wmv') || ($file->format == '.mov') || ($file->format == '.rmvb') || ($file->format == '.mkb')) { ?>
                                                        <!--MP4-->
                                                        <tr>
                                                            <td class="type"><i class="far fa-file-video text-primary"></i></td>
                                                            <td class="name truncate"><a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>"><?= $file->name ?></a></td>
                                                            <td class="date"><?= $file->format ?></td>
                                                            <td class="size"><?= $file->size ?></td>
                                                            <td class="action">
                                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a> 
                                                                <?= Html::a('<i class="fa fa-trash"></i>', ['delete', 'id' => $file->idfile], ['class' => '', 'data' => ['confirm' => '¿Realmente desea eliminar el archivo ' . $file->name . '?', 'method' => 'post',],]) ?>
                                                            </td>
                                                        </tr>
                                               <?php } else if (($file->format == '.mp3') || ($file->format == '.mp4'))  { ?>
                                                        <!--MP3-->
                                                        <tr>
                                                            <td class="type"><i class="far fa-file-audio text-primary"></i></td>
                                                            <td class="name truncate"><a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>"><?= $file->name ?></a></td>
                                                            <td class="date"><?= $file->format ?></td>
                                                            <td class="size"><?= $file->size ?></td>
                                                            <td class="action">
                                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a> 
                                                                <?= Html::a('<i class="fa fa-trash"></i>', ['delete', 'id' => $file->idfile], ['class' => '', 'data' => ['confirm' => '¿Realmente desea eliminar el archivo ' . $file->name . '?', 'method' => 'post',],]) ?>
                                                            </td>
                                                        </tr>
                                                    <?php } else { ?>
                                                        <!--PSD-->
                                                        <tr>
                                                            <td class="type"><i class="far fa-file text-primary"></i></td>
                                                            <td class="name truncate"><a href="<?= Yii::$app->homeUrl ?>file/documentviewer/<?= $file->idfile ?>"><?= $file->name ?></a></td>
                                                            <td class="date"><?= $file->format ?></td>
                                                            <td class="size"><?= $file->size ?></td>
                                                            <td class="action">
                                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" onclick="window.open('<?= $file->urlfile ?>')"><i class="fa fa-download"></i></a> 
                                                                    <?= Html::a('<i class="fa fa-trash"></i>', ['delete', 'id' => $file->idfile], ['class' => '', 'data' => ['confirm' => '¿Realmente desea eliminar el archivo ' . $file->name . '?', 'method' => 'post',],]) ?>
                                                            </td>
                                                        </tr>

                                                        <?php
                                                    }
                                                }
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>
    </div>
    <script type="text/javascript">

        function viewList() {
            document.getElementById("idBtnGrid").className = 'btn btn-default';
            document.getElementById("idBtnList").className = 'active btn btn-default';

            document.getElementById("idGrid").setAttribute("hidden", "");
            document.getElementById("idList").removeAttribute("hidden");
        }

        function viewGrid() {
            document.getElementById("idBtnList").className = 'btn btn-default';
            document.getElementById("idBtnGrid").className = 'active btn btn-default';

            document.getElementById("idList").setAttribute("hidden", "");
            document.getElementById("idGrid").removeAttribute("hidden");
        }

        $(function () {
            $("[data-toggle='tooltip']").tooltip();
        })
    </script>
</body>
