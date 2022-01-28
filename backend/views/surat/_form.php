<?php
use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\form\ActiveForm;
//use kartik\widgets\Select2;
use yii\helpers\ArrayHelper;
use app\models\Surat;
use kartik\date\DatePicker;
use kartik\file\FileInput;

 
/* @var $this yii\web\View */
/* @var $model app\models\AlatMedis */
/* @var $form yii\widgets\ActiveForm */
?>

<?php

$form = ActiveForm::begin(['type'=>ActiveForm::TYPE_VERTICAL]);
    echo Form::widget([
        'model'=>$model,
        'form'=>$form,
        'columns'=>2,
        'compactGrid'=>true,
        'attributes'=>[       // 2 column layout
     
            'no_surat'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'Isi Nomor surat..']],
            'tgl_surat'=>[
            'type'=>Form::INPUT_WIDGET,
            'widgetClass'=>DatePicker::classname(),
            'hint'=>'tgl Surat (tahun/bulan/tanggal)',
            'options' => ['pluginOptions' => ['format' => 'yyyy-mm-dd', 'autoclose'=>true, 'todayHighlight' => true]]
            
        ],
        ]
    ]);
    echo Form::widget([
        'model'=>$model,
        'form'=>$form,
        'columns'=>1,
        'compactGrid'=>true,
        'attributes'=>[       // 2 column layout
            'perihal'=>['type'=>Form::INPUT_TEXTAREA, 'options'=>['placeholder'=>'Isi perihal surat..']]
        ]
    ]);
    echo $form->field($model, 'file_url')->widget(FileInput::classname(), [
    'options' => ['accept' => 'pdf/*'],
]);
    
?>
<?php ActiveForm::end(); ?>



 