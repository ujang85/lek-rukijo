<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AduanPresensi */
?>
<div class="aduan-presensi-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_aduan',
            'tgl_aduan',
            'user_pengadu',
            'isi_aduan',
            'keterangan',
            'status_respon',
            'isi_respon',
            'user_perespon',
            'tgl_respon',
            'unit',
        ],
    ]) ?>

</div>
