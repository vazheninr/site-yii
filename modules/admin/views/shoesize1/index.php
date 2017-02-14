<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shoe Sizes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shoe-size-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Shoe Size', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'prod_id',
            'size_i',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
