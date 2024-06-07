<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TransaksiMemberikanTindakanDanObatPasien;

/**
 * TransaksiMemberikanTindakanDanObatPasienSearch represents the model behind the search form of `app\models\TransaksiMemberikanTindakanDanObatPasien`.
 */
class TransaksiMemberikanTindakanDanObatPasienSearch extends TransaksiMemberikanTindakanDanObatPasien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_transaksi', 'id_pasien'], 'integer'],
            [['tanggal_transaksi', 'tindakan_yang_diberikan', 'obat_yang_diberikan', 'dosis_obat', 'status_pembayaran'], 'safe'],
            [['biaya_tindakan', 'biaya_obat', 'total_biaya'], 'number'],
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
        $query = TransaksiMemberikanTindakanDanObatPasien::find();

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
            'id_transaksi' => $this->id_transaksi,
            'id_pasien' => $this->id_pasien,
            'tanggal_transaksi' => $this->tanggal_transaksi,
            'biaya_tindakan' => $this->biaya_tindakan,
            'biaya_obat' => $this->biaya_obat,
            'total_biaya' => $this->total_biaya,
        ]);

        $query->andFilterWhere(['like', 'tindakan_yang_diberikan', $this->tindakan_yang_diberikan])
            ->andFilterWhere(['like', 'obat_yang_diberikan', $this->obat_yang_diberikan])
            ->andFilterWhere(['like', 'dosis_obat', $this->dosis_obat])
            ->andFilterWhere(['like', 'status_pembayaran', $this->status_pembayaran]);

        return $dataProvider;
    }
}
