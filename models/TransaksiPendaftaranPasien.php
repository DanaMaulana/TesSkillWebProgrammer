<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaksi_pendaftaran_pasien".
 *
 * @property int $id_transaksi
 * @property string $nomor_pendaftaran
 * @property string $tanggal_pendaftaran
 * @property int $id_pasien
 * @property string $nama_pasien
 * @property string $tanggal_lahir
 * @property string $jenis_kelamin
 * @property string $alamat
 * @property string $nomor_kontak
 * @property string $detail_pendaftaran_lainnya
 * @property string $status_pembayaran
 * @property float $total_biaya
 */
class TransaksiPendaftaranPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi_pendaftaran_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomor_pendaftaran', 'tanggal_pendaftaran', 'id_pasien', 'nama_pasien', 'tanggal_lahir', 'jenis_kelamin', 'alamat', 'nomor_kontak', 'detail_pendaftaran_lainnya', 'status_pembayaran', 'total_biaya'], 'required'],
            [['tanggal_pendaftaran', 'tanggal_lahir'], 'safe'],
            [['id_pasien'], 'integer'],
            [['jenis_kelamin', 'status_pembayaran'], 'string'],
            [['total_biaya'], 'number'],
            [['nomor_pendaftaran', 'nama_pasien', 'alamat', 'nomor_kontak', 'detail_pendaftaran_lainnya'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_transaksi' => 'Id Transaksi',
            'nomor_pendaftaran' => 'Nomor Pendaftaran',
            'tanggal_pendaftaran' => 'Tanggal Pendaftaran',
            'id_pasien' => 'Id Pasien',
            'nama_pasien' => 'Nama Pasien',
            'tanggal_lahir' => 'Tanggal Lahir',
            'jenis_kelamin' => 'Jenis Kelamin',
            'alamat' => 'Alamat',
            'nomor_kontak' => 'Nomor Kontak',
            'detail_pendaftaran_lainnya' => 'Detail Pendaftaran Lainnya',
            'status_pembayaran' => 'Status Pembayaran',
            'total_biaya' => 'Total Biaya',
        ];
    }
}
