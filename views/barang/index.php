<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Barang;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BarangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Barangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Barang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_barang',
            'kode_jenis',
            'nama_barang',
            'harga_satuan',
            'stok_barang',
            'jenisbarang.nama_jenis',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Barang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_barang' => $model->kode_barang]);
                 }
            ],
        ],
    ]); ?>


</div>
