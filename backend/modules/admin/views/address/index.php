<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\AddressSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Адрес страница';
$this->params['breadcrumbs'][] = $this->title;
?>
<p class="lead">Действия над записями: (Просмотр <img src="/web/slider/Просмотр.jpg">), (Редактировать<img src="/web/slider/Редактировать.jpg">), (Удалить<img src="/web/slider/Удалить.jpg">)</p>
<div class="address-index">
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

 <div class="row featurette">
    <div class="col-md-10">
    <hr class="featurette-divider">
    <h2 class="featurette-heading">Если Вы хотите изменить адрес, Вам нужно следовать инструкции:</h2>
    <br>
    <h2>1) Зайти на сайт "Яндекс Карты".</h2>
    <br>
    <h2>2) Ввести нужный Вам адрес.</h2>
        <div class="photo-container">
        <img src="/web/slider/2.jpg" alt="Фото">
        </div>
    <br>
    <br>
    <h2>3) Нажать на кнопку с тремя горизонтальными линиями в верхнем правом углу экрана.</h2>
        <div class="photo-container">
        <img src="/web/slider/3.jpg" alt="Фото">
        </div>
    <br>
    <br>
    <h2>4) Нажать на кнопку "Поделиться".</h2>
        <div class="photo-container">
        <img src="/web/slider/4.jpg" alt="Фото">
        </div>
    <br>
    <br>
    <h2>5) В появившемся окне выделить ссылку, помеченную зеленым цветом.</h2>
        <div class="photo-container">
        <img src="/web/slider/5.jpg" alt="Фото">
        </div>
    <br>
    <br>
    <h2>6) То, что выделено красным цветом - не выделять.</h2>
        <div class="photo-container">
        <img src="/web/slider/6.jpg" alt="Фото">
        </div>
    <br>
    <br>
    <h2>7) Скопированную ссылку вставить в строку "Ссылка яндекс карты" наверху.</h2>
    <div class="photo-container">
        <img src="/web/slider/7.jpg" alt="Фото">
        </div>
    <br>
    <br>
    </div>
</div>