<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TransaksiMemberikanTindakanDanObatPasien $model */

$this->title = 'Update Transaksi Memberikan Tindakan Dan Obat Pasien: ' . $model->id_transaksi;
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Memberikan Tindakan Dan Obat Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_transaksi, 'url' => ['view', 'id_transaksi' => $model->id_transaksi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transaksi-memberikan-tindakan-dan-obat-pasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
