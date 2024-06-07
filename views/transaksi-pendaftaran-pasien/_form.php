<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TransaksiPendaftaranPasien $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="transaksi-pendaftaran-pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomor_pendaftaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_pendaftaran')->textInput() ?>

    <?= $form->field($model, 'id_pasien')->textInput() ?>

    <?= $form->field($model, 'nama_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_lahir')->textInput() ?>

    <?= $form->field($model, 'jenis_kelamin')->dropDownList([ 'Laki-laki' => 'Laki-laki', 'Perempuan' => 'Perempuan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomor_kontak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail_pendaftaran_lainnya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_pembayaran')->dropDownList([ 'Belum Dibayar' => 'Belum Dibayar', 'Sebagian Dibayar' => 'Sebagian Dibayar', 'Lunas' => 'Lunas', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'total_biaya')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
