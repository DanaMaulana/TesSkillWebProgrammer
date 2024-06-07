<?php

use app\models\TransaksiMemberikanTindakanDanObatPasien;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TransaksiMemberikanTindakanDanObatPasienSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Transaksi Memberikan Tindakan Dan Obat Pasiens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-memberikan-tindakan-dan-obat-pasien-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Transaksi Memberikan Tindakan Dan Obat Pasien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_transaksi',
            'id_pasien',
            'tanggal_transaksi',
            'tindakan_yang_diberikan',
            'obat_yang_diberikan',
            //'dosis_obat',
            //'biaya_tindakan',
            //'biaya_obat',
            //'total_biaya',
            //'status_pembayaran',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TransaksiMemberikanTindakanDanObatPasien $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_transaksi' => $model->id_transaksi]);
                 }
            ],
        ],
    ]); ?>


</div>
