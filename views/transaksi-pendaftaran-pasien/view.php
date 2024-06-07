<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TransaksiPendaftaranPasien $model */

$this->title = $model->id_transaksi;
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Pendaftaran Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="transaksi-pendaftaran-pasien-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_transaksi' => $model->id_transaksi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_transaksi' => $model->id_transaksi], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_transaksi',
            'nomor_pendaftaran',
            'tanggal_pendaftaran',
            'id_pasien',
            'nama_pasien',
            'tanggal_lahir',
            'jenis_kelamin',
            'alamat',
            'nomor_kontak',
            'detail_pendaftaran_lainnya',
            'status_pembayaran',
            'total_biaya',
        ],
    ]) ?>

</div>
