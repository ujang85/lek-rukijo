<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Surat */
?>
<div class="surat-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'no_surat',
            'tgl_upload',
            'tgl_surat',
            'perihal',
            'file_url:url',
            'bulan',
            'tahun',
            'keterangan',
            'id_user',
            'jenis_surat',
        ],
    ]) ?>

</div>
