<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Loại Sản Phẩm ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loaisanpham-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Loaisanpham', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'loaisanpham_id',
            'ten',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
