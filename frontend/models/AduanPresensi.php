<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "aduan_presensi".
 *
 * @property int $id_aduan
 * @property string|null $tgl_aduan
 * @property int|null $user_pengadu
 * @property string|null $isi_aduan
 * @property string|null $keterangan
 * @property int|null $status_respon
 * @property string|null $isi_respon
 * @property string|null $user_perespon
 * @property string|null $tgl_respon
 * @property int|null $unit
 */
class AduanPresensi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aduan_presensi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_aduan', 'tgl_respon'], 'safe'],
            [['user_pengadu', 'status_respon', 'unit'], 'integer'],
            [['isi_aduan'], 'string', 'max' => 150],
            [['keterangan', 'isi_respon'], 'string', 'max' => 100],
            [['user_perespon'], 'string', 'max' => 90],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_aduan' => Yii::t('app', 'Id Aduan'),
            'tgl_aduan' => Yii::t('app', 'Tgl Aduan'),
            'user_pengadu' => Yii::t('app', 'User Pengadu'),
            'isi_aduan' => Yii::t('app', 'Isi Aduan'),
            'keterangan' => Yii::t('app', 'Keterangan'),
            'status_respon' => Yii::t('app', 'Status Respon'),
            'isi_respon' => Yii::t('app', 'Isi Respon'),
            'user_perespon' => Yii::t('app', 'User Perespon'),
            'tgl_respon' => Yii::t('app', 'Tgl Respon'),
            'unit' => Yii::t('app', 'Unit'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return AduanPresensiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AduanPresensiQuery(get_called_class());
    }
}
