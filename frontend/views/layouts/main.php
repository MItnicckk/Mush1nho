<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
 <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head> 
  <body>
    <?php $this->beginBody() ?>
    <div class="header-outs " id="header">
      <div class="header-w3layouts">
        <div class="container-fluid">
         

          <nav>
            <div id="logo">
              <h1> <a href="#">AutoMusta</a></h1>
            </div>
            <label for="drop" class="toggle">Меню</label>
            <input type="checkbox" id="drop" />
            
            <ul class="menu mt-lg-3 mt-2">
              <!-- <?php
              NavBar::begin([  
             'brandLabel' => '<class="menu mt-lg-3 mt-2">',
              ]);
                $menuItems = [
        ['label' => 'Главная', 'url' => ['/site/index']],
        ['label' => 'Курсы', 'url' => ['/site/auto']],
        ['label' => 'Подать заявку', 'url' => ['/site/contact']],
        ['label' => 'Уроки', 'url' => ['/admin/default/lesson'], 'visible' => Yii::$app->user->getIdentity('User') ? true : false],
         ];
         echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
         ]);
         NavBar::end();?> -->
              <li ><a href="#about">О нас</a></li>
              <li><a href="#service">Услуги</a></li>
              <li><a href="#gallery">Машины</a></li>
              <li><a href="#price">Цены</a></li>
              <li class="active"><a href="#clients">Клиенты</a></li>
              <li ><a href="#contact" class="pr-0">Контакты</a></li>
            </ul>
            <div class="clearfix"></div>
          </nav>


          <div class="clearfix"></div>
        </div>
      </div>
      <!-- //nav -->
      <!-- //header -->
      <div class="container">
        <div class="slide-info text-center">
          <div class="banner-top-grid">
            <h4>ВЫБЕРИ СВОЙ</h4>
          </div>
          <h5>АВТОМОБИЛЬ МЕЧТЫ</h5>
          <div class="slide-info-txt">
            <p>Компания AutoMusta представляет к Вашему вниманию сервис по продажам автомобилей</p>
          </div>
          <div class="two-mid-button d-flex justify-content-center mt-lg-5 mt-md-4 mt-sm-4 mt-3">
            <div class="read-buttn ">
              <a href="#about" class=" scroll">О компании</a>
            </div>
            <div class="view-buttn">
              <a href="#contact" class=" scroll">Связаться</a>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>
    <div class="address-map-w3layouts ">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10837.23153815094!2d39.713769240569256!3d47.23012321658235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe71795934da757ba!2z0JTQk9Ci0KM!5e0!3m2!1sru!2sru!4v1590960969461!5m2!1sru!2sru"></iframe>
    </div>
<footer class="py-lg-4 py-md-3 py-sm-3 py-3">
      <div class="container-fluid">
        <div class="footer-main text-center">
          <p> 
            © 2020 AutoMusta. Все права защищены | Design by <a href="https://vk.com/mus1nho" target="_blank">MustaRamazanov</a>
          </p>
        </div>
        <div class="icons txt-center mt-lg-4 mt-3 ">
          <ul>
            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li><a href="#"><span class="fa fa-rss"></span></a></li>
            <li><a href="#"><span class="fa fa-vk"></span></a></li>
          </ul>
        </div>
      </div>
      <!-- move icon -->
      <div class="txt-center">
        <a href="#header" class="move-top txt-center mt-3"></a>
      </div>
      <!--//move icon -->
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
