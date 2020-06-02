<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\WinnersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Победители страница';
$this->params['breadcrumbs'][] = $this->title;
?>
<p class="lead">Действия над записями: (Просмотр <img src="/web/slider/Просмотр.jpg">), (Редактировать<img src="/web/slider/Редактировать.jpg">), (Удалить<img src="/web/slider/Удалить.jpg">)</p>
<div class="winners-index">
<a class="btn btn-primary btn-lg" href="../../admin" role="button">Назад</a>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать запись', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Date',
            'Headline:ntext',
            'Text1:ntext',
            'Litle:ntext',
            //'L1place',
            //'L2place',
            //'L3place',
            //'Average:ntext',
            //'A1place',
            //'A2place',
            //'A3place',
            //'Big:ntext',
            //'B1place',
            //'B2place',
            //'B3place',
            //'Text2:ntext',
            //'Text3:ntext',
            //'T1place',
            //'T2place',
            //'T3place',
            //'Text4:ntext',
            //'Images',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
