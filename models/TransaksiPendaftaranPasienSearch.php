<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TransaksiPendaftaranPasien;

/**
 * TabelTransaksiPendaftaranPasienSearch represents the model behind the search form of `app\models\TabelTransaksiPendaftaranPasien`.
 */
class TransaksiPendaftaranPasienSearch extends TransaksiPendaftaranPasien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_transaksi', 'id_pasien'], 'integer'],
            [['nomor_pendaftaran', 'tanggal_pendaftaran', 'nama_pasien', 'tanggal_lahir', 'jenis_kelamin', 'alamat', 'nomor_kontak', 'detail_pendaftaran_lainnya', 'status_pembayaran'], 'safe'],
            [['total_biaya'], 'number'],
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
        $query = TransaksiPendaftaranPasien::find();

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
            'tanggal_pendaftaran' => $this->tanggal_pendaftaran,
            'id_pasien' => $this->id_pasien,
            'tanggal_lahir' => $this->tanggal_lahir,
            'total_biaya' => $this->total_biaya,
        ]);

        $query->andFilterWhere(['like', 'nomor_pendaftaran', $this->nomor_pendaftaran])
            ->andFilterWhere(['like', 'nama_pasien', $this->nama_pasien])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'nomor_kontak', $this->nomor_kontak])
            ->andFilterWhere(['like', 'detail_pendaftaran_lainnya', $this->detail_pendaftaran_lainnya])
            ->andFilterWhere(['like', 'status_pembayaran', $this->status_pembayaran]);

        return $dataProvider;
    }
}
