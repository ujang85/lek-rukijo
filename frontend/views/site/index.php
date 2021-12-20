<?php

use rce\material\widgets\Card;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <center><h1>LEK RUKIJO</h1>

        <p class="lead">LAYANAN ELEKTRONIK KEPEGAWAIAN RUMAH SAKIT JOGJA</p>
    </center>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?php Card::begin([
                    'header'=>'header-icon',
                    'type'=>'card-stats',
                    'icon'=>'<i class="material-icons">content_copy</i>',
                    'color'=>'danger',
                    'title'=>'Aduan Presensi',
                    'subtitle'=>'Layanan',
                    'footer'=>'<div class="stats">
                            <i class="material-icons text-danger">warning</i>
                           
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
                    'subtitle'=>'FILE',
                    'footer'=>'<div class="stats">
                            <i class="material-icons">date_range</i> Last 24 Hours
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
                            <i class="material-icons">update</i> Just Updated
                          </div>',
                ]); Card::end(); ?>
            </div>
        </div>

        

    </div>

</div>
