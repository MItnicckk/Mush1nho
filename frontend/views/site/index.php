<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\bootstrap\ActiveForm;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
      <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <div class="title-tag mb-lg-5 mb-md-4 mb-sm-4 mb-3 pb-lg-3 pb-md-2">
          <h6 class="title-top-txt-2 text-center mb-2">Чем мы занимаемся</h6>
          <div class="sub-title-mid text-center mb-lg-4 mb-3">
            <h2>Продажа автомобилей</h2>
          </div>
          <div class="title-wls-text text-center mb-2">
            <p>Компания специализируется на выкупе, обмене и продаже автомобилей с пробегом<br>
              Выбери свой автомобиль мечты
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 video-info-img text-center">
            <div class="abut-img-w3l">
              <img src="images/iSGUE3ZGA.jpg" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-6 left-abut-txt ">
            <div class="about-right-grid">
              <h6 class="title-top-txt-2 mb-2">О нас</h6>
              <h5 class="mb-3"></h5>
              <p>Представляет собой современный, оснащенный по последнему слову техники автоцентр, который полностью соответствует всем требованиям корейского производителя. На сегодняшний день оказывает полный спектр услуг по страхованию, кредитованию, покупке и сервисно-гарантийному обслуживанию автомобилей.</p>
            </div>
            
          </div>
        </div>
      </div>
      <!-- //row-two -->
    </section>
    <!--//about -->
    <!-- service -->
    <section class="service py-lg-4 py-md-3 py-sm-3 py-3" id="service">
      <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <div class="title-tag mb-lg-5 mb-md-4 mb-sm-4 mb-3 pb-lg-3 pb-md-2">
          <div class="row">
            <div class="title-wls-text col-lg-6 col-md-6 txt-rightside clr-para">
              <p class="">Выберите свое авто для вашей работы, отдыха, путешествий.</p>
            </div>
            <div class="col-lg-6 col-md-6 ">
              <h6 class="title-top-txt mb-2">Что мы можем предоставить</h6>
              <h3  class="title clr">Автомобили</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center">
            <div class="grid-wthree-service">
              <img src="images/1car.png" alt="" class="img-fluid" width="50" height="50">
              <div class="ser-text-wthree">
                <h4 class="mt-2">
                  Седан
                </h4>
                <p class="mt-3">Классический автомобиль для повседневных поездок</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center">
            <div class="grid-wthree-service">
              <img src="images/2car.png" alt="" class="img-fluid" width="50" height="50">
              <div class="ser-text-wthree">
                <h4 class="mt-2">
                  Кроссовер
                </h4>
                <p class="mt-3">Автомобиль для поездок загород, на природу</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center">
            <div class="grid-wthree-service">
              <img src="images/33car.png" alt="" class="img-fluid" width="50" height="50">
              <div class="ser-text-wthree">
                <h4 class="mt-2">
                  Гоночная машина
                </h4>
                <p class="mt-3">Для автолюбителей ездить на большой скорости</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center mt-lg-4 mt-3">
            <div class="grid-wthree-service">
              <img src="images/44car.png" alt="" class="img-fluid" width="50" height="50">
              <div class="ser-text-wthree">
                <h4 class="mt-2">
                  Мини-автобус
                </h4>
                <p class="mt-3">Подойдет большим семьем и любителям путешествовать</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center mt-lg-4 mt-3">
            <div class="grid-wthree-service">
              <img src="images/5car.png" alt="" class="img-fluid" width="50" height="50">
              <div class="ser-text-wthree">
                <h4 class="mt-2">
                  Кабриолет
                </h4>
                <p class="mt-3">Для повседневных поездок, также подойдет для отдыха</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center mt-lg-4 mt-3">
            <div class="grid-wthree-service">
              <img src="images/6car.png" alt="" class="img-fluid" width="50" height="50">
              <div class="ser-text-wthree">
                <h4 class="mt-2">
                  Раритетные машины
                </h4>
                <p class="mt-3">Автомобили для коллекционеров, любителей эстетики</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--//service -->
    <!-- gallery -->
    <section class="gallery py-lg-4 py-md-3 py-sm-3 py-3" id="gallery">
      <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <div class="title-tag mb-lg-5 mb-md-4 mb-sm-4 mb-3 pb-lg-3 pb-md-2">
          <div class="row">
            <div class="col-lg-6 col-md-6 txt-rightside">
              <h6 class="title-top-txt-2 mb-2">Посмотрите наши авто</h6>
              <h3  class="title">Авто-галерея</h3>
            </div>
            <div class="title-wls-text col-lg-6 col-md-6 ">
              <p class="">Автомобили, которые мы можем предоставить здесь и сейчас.</p>
            </div>
          </div>
        </div>
        <div class="row gallery-info">
          <div class="col-lg-6 col-md-6 col-sm-6 gallery-img-grid">
            <div class="gallery-grids mb-lg-4 mb-3">
                     <a href="#gal1"><img src="images/1.jpg" alt="news image" class="img-fluid"></a>
            </div>
            <div class="row mbb-lg-4 mbb-3">
              <div class="col-lg-6 col-md-6">
                <div class="gallery-grids">
      <a href="#gal2"><img src="images/2.jpg" alt="news image" class="img-fluid"></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="gallery-grids">
      <a href="#gal3"><img src="images/8.jpg" alt="news image" class="img-fluid"></a>
                </div>
              </div>
            </div>
            <div class="gallery-grids">
      <a href="#gal7"><img src="images/7.jpg" alt="news image" class="img-fluid"></a>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 gallery-img-grid">
            <div class="row mb-lg-4 mb-3">
              <div class="col-lg-6 col-md-6">
                <div class="gallery-grids">
      <a href="#gal8"><img src="images/9.jpg" alt="news image" class="img-fluid"></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="gallery-grids">
      <a href="#t3"><img src="images/3.jpg" alt="news image" class="img-fluid"></a>
                </div>
              </div>
            </div>
            <div class="row mb-lg-4 mb-3">
              <div class="col-lg-6 col-md-6">
                <div class="gallery-grids">
      <a href="#gal4"><img src="images/4.jpg" alt="news image" class="img-fluid"></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="gallery-grids">
      <a href="#gal5"><img src="images/5.jpg" alt="news image" class="img-fluid"></a>
                </div>
              </div>
            </div>
            <div class="gallery-grids mb-lg-4 mbb-3">
      <a href="#gal6"><img src="images/6.jpg" alt="news image" class="img-fluid"></a>
            </div>
        <div class="row mb-lg-4 mb-3">
              <div class="col-lg-6 col-md-6">
                <div class="gallery-grids">
      <a href="#gal2"><img src="images/2.jpg" alt="news image" class="img-fluid"></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="gallery-grids">
      <a href="#gal3"><img src="images/8.jpg" alt="news image" class="img-fluid"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
          <!-- popup-->
      <div id="gal1" class="popup-effect">
         <div class="popup">
            <img src="images/1.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal2" class="popup-effect">
         <div class="popup">
            <img src="images/2.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal3" class="popup-effect">
         <div class="popup">
            <img src="images/8.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal7" class="popup-effect">
         <div class="popup">
            <img src="images/7.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal8" class="popup-effect">
         <div class="popup">
            <img src="images/9.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="t3" class="popup-effect">
         <div class="popup">
            <img src="images/3.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
            <!-- popup-->
      <div id="gal4" class="popup-effect">
         <div class="popup">
            <img src="images/4.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->

      <!-- popup-->
      <div id="gal6" class="popup-effect">
         <div class="popup">
            <img src="images/6.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal5" class="popup-effect">
         <div class="popup">
            <img src="images/5.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
    <!--//gallery -->
    <!-- stats -->
    <section class="stats py-lg-4 py-md-3 py-sm-3 py-3">
      <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
        <div class="stats-info row ">
          <div class="col-lg-3 col-md-3 col-sm-6 col-6 stats-grid ">
            <div class="register-left-num ">
              <div class="count-icon">
                <img src="images/hands.png" alt="" class="img-fluid" width="50" height="50">
              </div>
              <div class="counter-number"> </div>
              <div class="stat-info pt-lg-3 pt-md-3 pt-sm-3 pt-3">
                <h4>Доверие</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-6 stats-grid ">
            <div class="register-left-num">
              <div class="count-icon">
                <img src="images/money.png" alt="" class="img-fluid" width="50" height="50">
              </div>
              <div class="counter-number"> </div>
              <div class="stat-info pt-lg-3 pt-md-3 pt-sm-3 pt-3">
                <h4>Безопасная сделка</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-6 stats-grid">
            <div class="register-left-num">
              <div class="count-icon">
                <img src="images/key.png" alt="" class="img-fluid" width="50" height="50">
              </div>
              <div class="counter-number"> </div>
              <div class="stat-info pt-lg-3 pt-md-3 pt-sm-3 pt-3">
                <h4>Тестирование</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-6 stats-grid">
            <div class="register-left-num">
              <div class="count-icon">
                <img src="images/world.png" alt="" class="img-fluid" width="50" height="50">
              </div>
              <div class="counter-number"> </div>
              <div class="stat-info pt-lg-3 pt-md-3 pt-sm-3 pt-3">
                <h4>Работаем по всему миру</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--//stats -->
    <!--features -->
     <section class="clients py-lg-4 py-md-3 py-sm-3 py-3" id="clients">
      <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <div class="title-tag mb-lg-5 mb-md-4 mb-sm-4 mb-3 pb-lg-3 pb-md-2">
          <div class="row">
            <div class="title-wls-text col-lg-6 col-md-6 txt-rightside">
              <p>Просмотрите отзывы наших клиентов</p>
            </div>
            <div class="col-lg-6 col-md-6 ">
              <h6 class="title-top-txt-2 mb-2">Что говорят люди</h6>
              <h3  class="title">Наши клиенты</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 clients-txt">
            <div class="client-txt-color">
              <img src="images/1c.jpg" class="img-thumbnail" alt="">
              <div class="client-txt-info mt-md-4 mt-3 mb-2">
                <h4>Александр</h4>
                <p class="mt-sm-3 mt-2">Очень известный производитель, поставщик многих конвейеров в Европе, очень качественные детали подвески и ремни.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 clients-txt">
            <div class="client-txt-color">
              <img src="images/3c.jpg" class="img-thumbnail" alt="">
              <div class="client-txt-info mt-md-4 mt-3 mb-2">
                <h4>Виктория</h4>
                <p class="mt-sm-3 mt-2 ">Производство во многих странах Европы. Вся продукция соответствует оригиналу и по качеству и по характеристикам.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 clients-txt">
            <div class="client-txt-color">
              <img src="images/2c.jpg" class="img-thumbnail " alt="">
              <div class="client-txt-info mt-md-4 mt-3 mb-2">
                <h4>Владимир</h4>
                <p class="mt-sm-3 mt-2">Отличный сервис, быстрая работа с клиентами, вежливые сотрудники. Качество полностью соответствует описанию</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--//features-->
    <!--price -->
    <section class="price py-lg-4 py-md-3 py-sm-3 py-3" id="price">
      <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <div class="title-tag mb-lg-5 mb-md-4 mb-sm-4 mb-3 pb-lg-3 pb-md-2">
          <div class="row">
            <div class="col-lg-6 col-md-6 txt-rightside ">
              <h6 class="title-top-txt mb-2"></h6>
              <h3  class="title clr">Наши цены</h3>
            </div>
            <div class="title-wls-text col-lg-6 col-md-6 clr-para">
              <p class="">Выберете подходящую для себя сделку, ориентируясь на цену, время сделки и продавца.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 pricing-grid">
            <div class="w3ls-bottom grid-two">
              <div class="table-txt-grid">
                <h4>Обычная</h4>
              </div>
              <div class="my-lg-4 my-3 price-w3layouts-table">
                <h4> <span class="sup">$</span><span class="number-price">50</span> </h4>
              </div>
              <div class="price-list-txt">
                <ul class="count">
                  <li>Виды авто</li>
                  <li>Обычная скорость </li>
                  <li>Обычный продавец</li>
                  <li>Малый выбор</li>
                  <!-- <li>Lorem ipsum </li> -->
                </ul>
              </div>
              <div class="view-buttn mt-3">
                <a href="#contact" class=" scroll">Офорить</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 pricing-grid">
            <div class="w3ls-bottom grid-two">
              <div class="table-txt-grid">
                <h4>Медиум</h4>
              </div>
              <div class="my-lg-4 my-3 price-w3layouts-table">
                <h4> <span class="sup">$</span><span class="number-price">60</span>  </h4>
              </div>
              <div class="price-list-txt">
                <ul class="count">
                  <li>Виды авто</li>
                  <li>Повышеная скорость</li>
                  <li>Опытный продавец</li>
                  <li>Средний выбор</li>
                  <!-- <li>Lorem ipsum </li> -->
                </ul>
              </div>
              <div class="view-buttn mt-3">
                <a href="#contact" class=" scroll">Офорить</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 pricing-grid">
            <div class="w3ls-bottom grid-two">
              <div class="table-txt-grid">
                <h4>Премиум</h4>
              </div>
              <div class="my-lg-4 my-3 price-w3layouts-table">
                <h4> <span class="sup">$</span><span class="number-price">70</span> </h4>
              </div>
              <div class="price-list-txt">
                <ul class="count">
                  <li>Виды авто</li>
                  <li>Максимальная скорость</li>
                  <li>Лучший продавец</li>
                  <li>Большой выбор</li>
                  <!-- <li>Lorem ipsum </li> -->
                </ul>
              </div>
              <div class="view-buttn mt-3">
                <a href="#contact" class=" scroll">Офорить</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 pricing-grid">
            <div class="w3ls-bottom grid-two">
              <div class="table-txt-grid">
                <h4>VIP</h4>
              </div>
              <div class="my-lg-4 my-3 price-w3layouts-table">
                <h4> <span class="sup">$</span><span class="number-price">80</span>  </h4>
              </div>
              <div class="price-list-txt">
                <ul class="count">
                  <li>Виды авто</li>
                  <li>Моментальная скорость</li>
                  <li>Несколько продавцов</li>
                  <li>VIP выбор</li>
                </ul>
              </div>
              <div class="view-buttn mt-3">
                <a href="#contact" class=" scroll">Офорить</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--//price-->
    <!-- clients -->
   
    <!--//clients-->
    <!-- video -->
    
    <!--//video-->
    <!--team-->
    
    <!--//team-->
    <!--blog-->
    
    <!--//blog-->
    <!-- contact -->
    <section class="contact py-lg-4 py-md-3 py-sm-3 py-3" id="contact">
      <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <div class="title-tag mb-lg-5 mb-md-4 mb-sm-4 mb-3 pb-lg-3 pb-md-2">
          <div class="row">
            <div class="title-wls-text col-lg-6 col-md-6 txt-rightside">
              <p>Свяжитесь с нашим менеджером, если есть какие-то вопросы.</p>
            </div>
            <div class="col-lg-6 col-md-6 ">
              <h6 class="title-top-txt-2 mb-2">Введите данные</h6>
              <h3  class="title">Наши контакты</h3>
            </div>
          </div>
        </div>
        <div class="contact-details">
          <div class="row">

            <div class="col-lg-6 col-md-6">
              <?php $form = ActiveForm::begin([
        'id' => 'login-form',
      ]); ?>
                <div class=" form-group contact-forms">
                  <?= $form->field($model, 'name') ?>
                </div>
                <div class="form-group contact-forms">
                  <?= $form->field($model, 'mail') ?>
                </div>
                <div class="form-group contact-forms">
                  <?= $form->field($model, 'phone') ?> 
                </div>
                <div class="form-group contact-forms">
                  <?= $form->field($model, 'massage')->textarea(['rows' => 4]) ?>
                </div>
                <div class="place-sign">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-lg btn-primary btn-block']) ?>
      </div>
      <?php ActiveForm::end(); ?>
            </div>
            <div class="col-lg-6 col-md-6 address-grid">
              <div class="row address-contact-form">
                <div class="col-lg-3 col-md-4 col-sm-4">
                  <div class="footer-icon text-center">
                    <span class="fa fa-home" aria-hidden="true"></span>
                  </div>
                </div>
                <div class=" footer-contact-list col-lg-9 col-md-8 col-sm-8">
                  <h6 class="mb-3">Адрес
                  </h6>
                  <p>пл. Гагарина, 1, Ростов-на-Дону, Ростовская обл., 344002
                  </p>
                </div>
              </div>
              <div class="row address-contact-form mt-lg-4 mt-3">
                <div class="col-lg-3 col-md-4 col-sm-4">
                  <div class="footer-icon text-center">
                    <span class="fa fa-phone" aria-hidden="true"></span>
                  </div>
                </div>
                <div class=" footer-contact-list col-lg-9 col-md-8 col-sm-8">
                  <h6 class="mb-3">Телефон</h6>
                  <p>+ 7 861 846 54 65</p>
                  <p>+ 7 861 846 16 35</p>
                </div>
              </div>
              <div class="row address-contact-form mt-lg-4 mt-3">
                <div class="col-lg-3 col-md-4 col-sm-4">
                  <div class="footer-icon text-center">
                    <span class="fa fa-envelope" aria-hidden="true"></span>
                  </div>
                </div>
                <div class=" footer-contact-list col-lg-9 col-md-8 col-sm-8">
                  <h6 class="mb-3">Почта</h6>
                  <p><a href="mailto:info@example.com">autoMusta@mail.ru</a></p>
                  <p><a href="mailto:info@example.com">autoMusta@list.ru</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>