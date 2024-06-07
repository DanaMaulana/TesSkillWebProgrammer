<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TransaksiPendaftaranPasienSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="transaksi-pendaftaran-pasien-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_transaksi') ?>

    <?= $form->field($model, 'nomor_pendaftaran') ?>

    <?= $form->field($model, 'tanggal_pendaftaran') ?>

    <?= $form->field($model, 'id_pasien') ?>

    <?= $form->field($model, 'nama_pasien') ?>

    <?php // echo $form->field($model, 'tanggal_lahir') ?>

    <?php // echo $form->field($model, 'jenis_kelamin') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'nomor_kontak') ?>

    <?php // echo $form->field($model, 'detail_pendaftaran_lainnya') ?>

    <?php // echo $form->field($model, 'status_pembayaran') ?>

    <?php // echo $form->field($model, 'total_biaya') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
