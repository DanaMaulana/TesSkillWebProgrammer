<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PembayaranSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pembayaran-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pembayaran') ?>

    <?= $form->field($model, 'id_transaksi') ?>

    <?= $form->field($model, 'metode_pembayaran') ?>

    <?= $form->field($model, 'total_pembayaran') ?>

    <?= $form->field($model, 'tanggal_pembayaran') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
