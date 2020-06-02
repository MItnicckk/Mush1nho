<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\TradeInSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Trade Ins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trade-in-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Trade In', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'SdavaemieAuto:ntext',
            'idProdashiAuto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
