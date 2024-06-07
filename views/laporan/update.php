<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Laporan $model */

$this->title = 'Update Laporan: ' . $model->id_laporan;
$this->params['breadcrumbs'][] = ['label' => 'Laporans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_laporan, 'url' => ['view', 'id_laporan' => $model->id_laporan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="laporan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
