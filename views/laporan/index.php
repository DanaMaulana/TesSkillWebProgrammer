<?php

use app\models\Laporan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\LaporanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Laporans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Laporan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_laporan',
            'judul_laporan',
            'isi_laporan:ntext',
            'tanggal_pembuatan_laporan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Laporan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_laporan' => $model->id_laporan]);
                 }
            ],
        ],
    ]); ?>


</div>
