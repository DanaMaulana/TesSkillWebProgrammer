<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TransaksiMemberikanTindakanDanObatPasien $model */

$this->title = 'Create Transaksi Memberikan Tindakan Dan Obat Pasien';
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Memberikan Tindakan Dan Obat Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-memberikan-tindakan-dan-obat-pasien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
