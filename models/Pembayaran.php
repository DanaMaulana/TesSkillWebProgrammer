<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pembayaran".
 *
 * @property int $id_pembayaran
 * @property int $id_transaksi
 * @property string $metode_pembayaran
 * @property float $total_pembayaran
 * @property string $tanggal_pembayaran
 */
class Pembayaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembayaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_transaksi', 'metode_pembayaran', 'total_pembayaran', 'tanggal_pembayaran'], 'required'],
            [['id_transaksi'], 'integer'],
            [['total_pembayaran'], 'number'],
            [['tanggal_pembayaran'], 'safe'],
            [['metode_pembayaran'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pembayaran' => 'Id Pembayaran',
            'id_transaksi' => 'Id Transaksi',
            'metode_pembayaran' => 'Metode Pembayaran',
            'total_pembayaran' => 'Total Pembayaran',
            'tanggal_pembayaran' => 'Tanggal Pembayaran',
        ];
    }
}
