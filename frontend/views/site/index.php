<?php

use rce\material\widgets\Card;
/* @var $this yii\web\View */

$this->title = 'LEK RUKIJO';
?>
<div class="site-index">

    <div class="jumbotron">
        <center><h1>LEK RUKIJO</h1>

        <p class="lead">LAYANAN ELEKTRONIK KEPEGAWAIAN RUMAH SAKIT JOGJA</p>
    </center>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4">
                <?php Card::begin([
                    'header'=>'header-icon',
                    'type'=>'card-stats',
                    'icon'=>'<i class="material-icons">content_copy</i>',
                    'color'=>'danger',
                    'subtitle'=>'<h5><a href="index.php?r=aduan-presensi/index">ADUAN PRESENSI</a></h5>',
                    'footer'=>'<div class="stats">
                                <i class="material-icons">face</i> Layanan Presensi
                          </div>',
                ]); Card::end(); ?>
                </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?php Card::begin([
                    'header'=>'header-icon',
                    'type'=>'card-stats',
                    'icon'=>'<i class="material-icons">store</i>',
                    'color'=>'warning',
                    'title'=>'PERSONAL FILE',
                    'footer'=>'<div class="stats">
                            <i class="material-icons">date_range</i> Personal File Pegawai
                          </div>',
                ]); Card::end(); ?>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?php Card::begin([
                    'type'=>'card-stats',
                    'header'=>'header-icon',
                    'icon'=>'<i class="fa fa-twitter"></i>',
                    'color'=>'info',
                    'title'=>'+245 chat',
                    'subtitle'=>'Sosial Media',
                    'footer'=>'<div class="stats">
                            <i class="material-icons">update</i>Layanan Surat-Menyurat
                          </div>',
                ]); Card::end(); ?>
            </div>
        </div>

        

    </div>

</div>
