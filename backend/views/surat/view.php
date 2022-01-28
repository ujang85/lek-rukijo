<?php

use yii\widgets\DetailView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\models\Surat */
?>
<div class="surat-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'no_surat',
            'tgl_upload',
            'tgl_surat',
            'jenis_surat',
            'perihal',
        ],
    ]) ?>
    <?= \yii2assets\pdfjs\PdfJs::widget([
  'url'=> Url::base().'/surat/'.$model->file_url
    ]); ?>

</div>
