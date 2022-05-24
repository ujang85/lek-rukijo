<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap4\Modal;
use kartik\grid\GridView;
use hoaaah\ajaxcrud\CrudAsset; 
use hoaaah\ajaxcrud\BulkButtonWidget;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AduanPresensiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Aduan Presensi';
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);

?>

<?=

                    'Export Data',
                    Html::a('<i class="glyphicon glyphicon-repeat"></i>', [''],
                    ['data-pjax'=>1, 'class'=>'btn btn-default', 'title'=>'Reset Grid']).
                   //  '{toggleData}'.
             
            ExportMenu::widget([
                        'dataProvider' => $dataProvider,
                        'columns' => require(__DIR__.'/_columns.php'),
                        'contentBefore' => [
                                [
                                'value' => $this->title,
                                ]
                                ],
                        'filename' => $this->title,
                        'exportConfig' => [
                                    ExportMenu::FORMAT_HTML => false,
                                    ExportMenu::FORMAT_PDF => false,
                                    ExportMenu::FORMAT_EXCEL => false,
                                    ExportMenu::FORMAT_TEXT => false,
                                    ExportMenu::FORMAT_CSV =>false,
                                    ExportMenu::FORMAT_EXCEL_X  => [
                                     'label' => 'File Excel',
                                ],
                                 ],

                    ])
        ?>
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
