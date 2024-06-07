<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TransaksiPendaftaranPasien $model */

$this->title = 'Create Transaksi Pendaftaran Pasien';
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Pendaftaran Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-pendaftaran-pasien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
