<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\AduanPresensi;

/**
 * AduanPresensiSearch represents the model behind the search form about `app\models\AduanPresensi`.
 */
class AduanPresensiSearch extends AduanPresensi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_perespon','id_aduan', 'user_pengadu', 'status_respon', 'unit'], 'integer'],
            [['tgl_aduan', 'isi_aduan', 'keterangan', 'isi_respon', 'user_perespon', 'tgl_respon'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = AduanPresensi::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_aduan' => $this->id_aduan,
            'tgl_aduan' => $this->tgl_aduan,
            'user_pengadu' => $this->user_pengadu,
            'status_respon' => $this->status_respon,
            'tgl_respon' => $this->tgl_respon,
            'unit' => $this->unit,
        ]);

        $query->andFilterWhere(['like', 'isi_aduan', $this->isi_aduan])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'isi_respon', $this->isi_respon]);
            

        return $dataProvider;
    }
}
