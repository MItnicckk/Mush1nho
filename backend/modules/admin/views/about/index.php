<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\AutorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Об организации страница';
$this->params['breadcrumbs'][] = $this->title;
?>
<p class="lead">Действия над записями: (Просмотр <img src="/web/slider/Просмотр.jpg">), (Редактировать<img src="/web/slider/Редактировать.jpg">), (Удалить<img src="/web/slider/Удалить.jpg">)</p>
<div class="about-index">
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
            'text1:ntext',
            'text2:ntext',
            'text3:ntext',
            'text4:ntext',
            //'text5:ntext',
            //'text6:ntext',
            //'Name1',
            //'InfoName1:ntext',
            //'Name2',
            //'InfoName2:ntext',
            //'contact1',
            //'contact2',
            //'contact3',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
