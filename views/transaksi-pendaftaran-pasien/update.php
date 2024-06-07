<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TransaksiPendaftaranPasien $model */

$this->title = 'Update Transaksi Pendaftaran Pasien: ' . $model->id_transaksi;
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Pendaftaran Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_transaksi, 'url' => ['view', 'id_transaksi' => $model->id_transaksi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transaksi-pendaftaran-pasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
