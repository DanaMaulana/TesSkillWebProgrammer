<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaksi_memberikan_tindakan_dan_obat_pasien".
 *
 * @property int $id_transaksi
 * @property int $id_pasien
 * @property string $tanggal_transaksi
 * @property string $tindakan_yang_diberikan
 * @property string $obat_yang_diberikan
 * @property string $dosis_obat
 * @property float $biaya_tindakan
 * @property float $biaya_obat
 * @property float $total_biaya
 * @property string $status_pembayaran
 */
class TransaksiMemberikanTindakanDanObatPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi_memberikan_tindakan_dan_obat_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien', 'tanggal_transaksi', 'tindakan_yang_diberikan', 'obat_yang_diberikan', 'dosis_obat', 'biaya_tindakan', 'biaya_obat', 'total_biaya', 'status_pembayaran'], 'required'],
            [['id_pasien'], 'integer'],
            [['tanggal_transaksi'], 'safe'],
            [['biaya_tindakan', 'biaya_obat', 'total_biaya'], 'number'],
            [['status_pembayaran'], 'string'],
            [['tindakan_yang_diberikan', 'obat_yang_diberikan', 'dosis_obat'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_transaksi' => 'Id Transaksi',
            'id_pasien' => 'Id Pasien',
            'tanggal_transaksi' => 'Tanggal Transaksi',
            'tindakan_yang_diberikan' => 'Tindakan Yang Diberikan',
            'obat_yang_diberikan' => 'Obat Yang Diberikan',
            'dosis_obat' => 'Dosis Obat',
            'biaya_tindakan' => 'Biaya Tindakan',
            'biaya_obat' => 'Biaya Obat',
            'total_biaya' => 'Total Biaya',
            'status_pembayaran' => 'Status Pembayaran',
        ];
    }
}
