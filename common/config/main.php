<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
          /*  'mimin' => [
                'class' => '\hscstudio\mimin\Module',
            ], */
            'gridview' =>  [
                'class' => '\kartik\grid\Module'
            ], 
            
        ],
];
