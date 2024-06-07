<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TransaksiMemberikanTindakanDanObatPasien $model */

$this->title = $model->id_transaksi;
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Memberikan Tindakan Dan Obat Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="transaksi-memberikan-tindakan-dan-obat-pasien-view">

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
            'id_pasien',
            'tanggal_transaksi',
            'tindakan_yang_diberikan',
            'obat_yang_diberikan',
            'dosis_obat',
            'biaya_tindakan',
            'biaya_obat',
            'total_biaya',
            'status_pembayaran',
        ],
    ]) ?>

</div>
