<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\GallerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Галерея страница';
$this->params['breadcrumbs'][] = $this->title;
?>
<p class="lead">Действия над записями: (Просмотр <img src="/web/slider/Просмотр.jpg">), (Редактировать<img src="/web/slider/Редактировать.jpg">), (Удалить<img src="/web/slider/Удалить.jpg">)</p>
<div class="gallery-index">
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
            'Headline:ntext',
            'Text:ntext',
            'Images',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
