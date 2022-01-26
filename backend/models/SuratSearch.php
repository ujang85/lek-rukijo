<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Surat;

/**
 * SuratSearch represents the model behind the search form about `app\models\Surat`.
 */
class SuratSearch extends Surat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'bulan', 'tahun', 'id_user'], 'integer'],
            [['no_surat', 'tgl_upload', 'tgl_surat', 'perihal', 'file_url', 'keterangan', 'jenis_surat'], 'safe'],
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
        $query = Surat::find();

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
            'id' => $this->id,
            'tgl_upload' => $this->tgl_upload,
            'tgl_surat' => $this->tgl_surat,
            'bulan' => $this->bulan,
            'tahun' => $this->tahun,
            'id_user' => $this->id_user,
        ]);

        $query->andFilterWhere(['like', 'no_surat', $this->no_surat])
            ->andFilterWhere(['like', 'perihal', $this->perihal])
            ->andFilterWhere(['like', 'file_url', $this->file_url])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'jenis_surat', $this->jenis_surat]);

        return $dataProvider;
    }
}
