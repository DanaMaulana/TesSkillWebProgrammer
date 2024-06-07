<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "laporan".
 *
 * @property int $id_laporan
 * @property string $judul_laporan
 * @property string $isi_laporan
 * @property string $tanggal_pembuatan_laporan
 */
class Laporan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'laporan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul_laporan', 'isi_laporan', 'tanggal_pembuatan_laporan'], 'required'],
            [['isi_laporan'], 'string'],
            [['tanggal_pembuatan_laporan'], 'safe'],
            [['judul_laporan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_laporan' => 'Id Laporan',
            'judul_laporan' => 'Judul Laporan',
            'isi_laporan' => 'Isi Laporan',
            'tanggal_pembuatan_laporan' => 'Tanggal Pembuatan Laporan',
        ];
    }
}
