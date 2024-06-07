<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Laporan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="laporan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'judul_laporan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isi_laporan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tanggal_pembuatan_laporan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
