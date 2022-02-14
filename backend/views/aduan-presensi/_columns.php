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
     [
         'class'=>'\kartik\grid\DataColumn',
         'attribute'=>'isi_respon',
     ],
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
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'id'=>$key]);
        },
        'viewOptions'=>['role'=>'modal-remote','title'=>'View','data-toggle'=>'tooltip'],
        'updateOptions'=>['role'=>'modal-remote','title'=>'Update', 'data-toggle'=>'tooltip'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>'Delete', 
                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'data-confirm-title'=>'Are you sure?',
                          'data-confirm-message'=>'Are you sure want to delete this item'], 
    ],

];   