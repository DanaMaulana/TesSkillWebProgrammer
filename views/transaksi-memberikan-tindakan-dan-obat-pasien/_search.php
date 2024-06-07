<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TransaksiMemberikanTindakanDanObatPasienSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="transaksi-memberikan-tindakan-dan-obat-pasien-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_transaksi') ?>

    <?= $form->field($model, 'id_pasien') ?>

    <?= $form->field($model, 'tanggal_transaksi') ?>

    <?= $form->field($model, 'tindakan_yang_diberikan') ?>

    <?= $form->field($model, 'obat_yang_diberikan') ?>

    <?php // echo $form->field($model, 'dosis_obat') ?>

    <?php // echo $form->field($model, 'biaya_tindakan') ?>

    <?php // echo $form->field($model, 'biaya_obat') ?>

    <?php // echo $form->field($model, 'total_biaya') ?>

    <?php // echo $form->field($model, 'status_pembayaran') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
