<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Laporan $model */

$this->title = $model->id_laporan;
$this->params['breadcrumbs'][] = ['label' => 'Laporans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="laporan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_laporan' => $model->id_laporan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_laporan' => $model->id_laporan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_laporan',
            'judul_laporan',
            'isi_laporan:ntext',
            'tanggal_pembuatan_laporan',
        ],
    ]) ?>

</div>
