<?php

use app\models\TransaksiPendaftaranPasien;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TransaksiPendaftaranPasienSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Transaksi Pendaftaran Pasiens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-pendaftaran-pasien-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Transaksi Pendaftaran Pasien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_transaksi',
            'nomor_pendaftaran',
            'tanggal_pendaftaran',
            'id_pasien',
            'nama_pasien',
            //'tanggal_lahir',
            //'jenis_kelamin',
            //'alamat',
            //'nomor_kontak',
            //'detail_pendaftaran_lainnya',
            //'status_pembayaran',
            //'total_biaya',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TransaksiPendaftaranPasien $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_transaksi' => $model->id_transaksi]);
                }
            ],
        ],
    ]); ?>


</div>
