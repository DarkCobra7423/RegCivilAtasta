<?php
//documentviewer
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$this->title = 'Visor de documentos';
?>
<style>
    #viewfinder{
        min-width: 100%;
        min-height: 100%;
    }
</style>

<div class="">
    <iframe id="viewfinder" src="<?= $model->urlfile; ?>" width="600" height="600" style="border:0; width: 100%" allowfullscreen="" loading="lazy"></iframe>
</div>