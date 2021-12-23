<?php
use hoaaah\sbadmin2\widgets\Menu;

echo Menu::widget([
    'options' => [
        'ulClass' => "navbar-nav bg-gradient-primary sidebar sidebar-dark accordion",
        'ulId' => "accordionSidebar"
    ], //  optional
    'brand' => [
        'url' => ['/'],
        'content' => <<<HTML
            <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Admin LEK RUKIJO</div>        
HTML
    ],
    'items' => [
        [
            'label' => 'Tentang Program',
            'url' => ['/site/index'], //  Array format of Url to, will be not used if have an items
            'icon' => 'fas fa-fw fa-tachometer-alt', // optional, default to "fa fa-circle-o
            'visible' => true, // optional, default to true
            // 'options' => [
            //     'liClass' => 'nav-item',
            // ] // optional
        ],
        [
            'type' => 'divider', // divider or sidebar, if not set then link menu
            // 'label' => '', // if sidebar we will set this, if divider then no

        ],
        [
            'label' => 'Master Data',
            'visible' => true, // optional, default to true
            // 'subMenuTitle' => 'Menu 3 Item', // optional only when have submenutitle, if not exist will not have subMenuTitle
            'items' => [
                [
                    'label' => 'Data Unit kerja',
                    'url' => ['/menu21'], //  Array format of Url to, will be not used if have an items
                ],
                [
                    'label' => 'Data Status Pegawai',
                    'url' => ['/menu21'], //  Array format of Url to, will be not used if have an items
                ],
                [
                    'label' => 'Data Jabatan',
                    'url' => ['/menu22'], //  Array format of Url to, will be not used if have an items
                ],
            ]
        ],
        [
            'label' => 'Layanan Pegawai',
            'visible' => true, // optional, default to true
            // 'subMenuTitle' => 'Menu 3 Item', // optional only when have submenutitle, if not exist will not have subMenuTitle
            'items' => [
                [
                    'label' => 'Data Pegawai',
                    'url' => ['/menu21'], //  Array format of Url to, will be not used if have an items
                ],
                [
                    'label' => 'Verifikasi Personal File',
                    'url' => ['/menu21'], //  Array format of Url to, will be not used if have an items
                ],
                [
                    'label' => 'Mutasi Pegawai',
                    'url' => ['/menu21'], //  Array format of Url to, will be not used if have an items
                ],
                [
                    'label' => 'Verifikasi Aduan Presensi',
                    'url' => ['/menu22'], //  Array format of Url to, will be not used if have an items
                ],
            ]
        ],
        [
            'label' => 'Bank Data Kepegawaian',
            // 'icon' => 'fa fa-menu', // optional, default to "fa fa-circle-o
            'visible' => true, // optional, default to true
            // 'subMenuTitle' => 'Menu 2 Item', // optional only when have submenutitle, if not exist will not have subMenuTitle
            'items' => [
                [
                    'label' => 'Data SK',
                    'url' => ['/menu21'], //  Array format of Url to, will be not used if have an items
                ],
                [
                    'label' => 'Data PERWAL',
                    'url' => ['/menu22'], //  Array format of Url to, will be not used if have an items
                ],
                [
                    'label' => 'Data Surat Keluar',
                    'url' => ['/menu22'], //  Array format of Url to, will be not used if have an items
                ],
            ]
        ],
    ]
]);