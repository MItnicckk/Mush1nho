<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>

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
              <form action="#" method="post">
                <div class=" form-group contact-forms">
                  <input type="text" class="form-control" placeholder="Имя" required="">
                </div>
                <div class="form-group contact-forms">
                  <input type="email" class="form-control" placeholder="Почта" required="">
                </div>
                <div class="form-group contact-forms">
                  <input type="text" class="form-control" placeholder="Телефон" required=""> 
                </div>
                <div class="form-group contact-forms">
                  <textarea class="form-control" placeholder="Сообщение" rows="3" required=""></textarea>
                </div>
                <button type="submit" class="btn btn-block sent-butnn">Отправить</button>
              </form>
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
    <!--//contact -->
    
    <!--//footer -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>