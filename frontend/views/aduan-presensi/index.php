<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap4\Modal;
use kartik\grid\GridView;
use hoaaah\ajaxcrud\CrudAsset; 
use hoaaah\ajaxcrud\BulkButtonWidget;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AduanPresensiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Aduan Presensi';
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);

?>
    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"> INPUT ADUAN</i>', ['create'],
                    ['role'=>'modal-remote','title'=> 'Input Aduan','class'=>'btn btn-danger btn-xs']) ?>
    </p>
<div class="aduan-presensi-index">
    <div id="ajaxCrudDatatable">
        <?=GridView::widget([
            'id'=>'crud-datatable',
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'pjax'=>true,
            'columns' => require(__DIR__.'/_columns.php'),
            'toolbar'=> [],          
            'striped' => true,
            'condensed' => true,
            'responsive' => true,          
            'panel' => [
                'type' => 'danger', 
                'heading' => '<i class="glyphicon glyphicon-list"></i> Aduan Presensi',                        
                        '<div class="clearfix"></div>',
            ]
        ])?>
    </div>
</div>
<?php Modal::begin([
    "id"=>"ajaxCrudModal",
    "footer"=>"",// always need it for jquery plugin
])?>
<?php Modal::end(); ?>
