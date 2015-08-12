<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sanpham */

$this->title = 'Tạo  Sản phẩm';
$this->params['breadcrumbs'][] = ['label' => 'Sanphams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sanpham-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
