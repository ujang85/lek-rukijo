<?php
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use kartik\grid\GridView;
return [
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
        'header' => 'no',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'tgl_aduan',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'isi_aduan',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'keterangan',
    ],
     [
                'attribute'=> 'status_respon',
                'filter' => [0 => "BELUM", 1 => "SUDAH"],
                'value' => function ($model) {
                    $data=$model->status_respon;
                    if(is_null($data)||($data)==0)
                        {
                            return "BELUM";    
                        }else
                        {
                            return "SUDAH";                           
                        }
            }, 
            'format' => 'raw',
            'noWrap' => true,
            'filterType' => GridView::FILTER_SELECT2,
            'filterInputOptions' => ['placeholder' => '*All*'],
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
            ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'isi_respon',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'user_perespon',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'tgl_respon',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'unit',
    // ],
    

];   