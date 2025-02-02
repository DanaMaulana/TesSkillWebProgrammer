<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Laporan;

/**
 * LaporanSearch represents the model behind the search form of `app\models\Laporan`.
 */
class LaporanSearch extends Laporan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_laporan'], 'integer'],
            [['judul_laporan', 'isi_laporan', 'tanggal_pembuatan_laporan'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Laporan::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_laporan' => $this->id_laporan,
            'tanggal_pembuatan_laporan' => $this->tanggal_pembuatan_laporan,
        ]);

        $query->andFilterWhere(['like', 'judul_laporan', $this->judul_laporan])
            ->andFilterWhere(['like', 'isi_laporan', $this->isi_laporan]);

        return $dataProvider;
    }
}
