<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "surat".
 *
 * @property int $id
 * @property string|null $no_surat
 * @property string|null $tgl_upload
 * @property string|null $tgl_surat
 * @property string|null $perihal
 * @property string|null $file_url
 * @property int|null $bulan
 * @property int|null $tahun
 * @property string|null $keterangan
 * @property int|null $id_user
 * @property string|null $jenis_surat
 */
class Surat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_upload', 'tgl_surat'], 'safe'],
            [['bulan', 'tahun', 'id_user'], 'integer'],
            [['no_surat'], 'string', 'max' => 70],
            [['perihal', 'keterangan'], 'string', 'max' => 200],
            [['file_url', 'jenis_surat'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'no_surat' => 'No Surat',
            'tgl_upload' => 'Tgl Upload',
            'tgl_surat' => 'Tgl Surat',
            'perihal' => 'Perihal',
            'file_url' => 'File Url',
            'bulan' => 'Bulan',
            'tahun' => 'Tahun',
            'keterangan' => 'Keterangan',
            'id_user' => 'Id User',
            'jenis_surat' => 'Jenis Surat',
        ];
    }
    public function getTglsekarang()
    {
        $sql1 = "SELECT DATE_FORMAT(now(), '%Y-%m-%d') as tglsekarang";
        $tglsekarang=Yii::$app->db->createCommand($sql1)->queryScalar(); 
        return $tglsekarang;
    }
    /**
     * {@inheritdoc}
     * @return SuratQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SuratQuery(get_called_class());
    }
}
