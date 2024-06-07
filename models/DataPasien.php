<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_pasien".
 *
 * @property int $id_pasien
 * @property string $nama_pasien
 * @property string $tanggal_lahir
 * @property string $jenis_kelamin
 * @property string $alamat
 * @property string $nomor_kontak
 */
class DataPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pasien', 'tanggal_lahir', 'jenis_kelamin', 'alamat', 'nomor_kontak'], 'required'],
            [['tanggal_lahir'], 'safe'],
            [['jenis_kelamin'], 'string'],
            [['nama_pasien', 'alamat'], 'string', 'max' => 255],
            [['nomor_kontak'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pasien' => 'Id Pasien',
            'nama_pasien' => 'Nama Pasien',
            'tanggal_lahir' => 'Tanggal Lahir',
            'jenis_kelamin' => 'Jenis Kelamin',
            'alamat' => 'Alamat',
            'nomor_kontak' => 'Nomor Kontak',
        ];
    }
}
