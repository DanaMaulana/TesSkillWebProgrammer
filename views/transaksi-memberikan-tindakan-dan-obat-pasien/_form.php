<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TransaksiMemberikanTindakanDanObatPasien $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="transaksi-memberikan-tindakan-dan-obat-pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pasien')->textInput() ?>

    <?= $form->field($model, 'tanggal_transaksi')->textInput() ?>

    <?= $form->field($model, 'tindakan_yang_diberikan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'obat_yang_diberikan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dosis_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'biaya_tindakan')->textInput() ?>

    <?= $form->field($model, 'biaya_obat')->textInput() ?>

    <?= $form->field($model, 'total_biaya')->textInput() ?>

    <?= $form->field($model, 'status_pembayaran')->dropDownList([ 'Belum Dibayar' => 'Belum Dibayar', 'Sebagian Dibayar' => 'Sebagian Dibayar', 'Lunas' => 'Lunas', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
