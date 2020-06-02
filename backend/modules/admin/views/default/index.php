<?php
use yii\helpers\Html;
?>
<style> 
.colleft{
  position: relative;
  width: 100%;
  padding-right: 15px;
  padding-left: 29px;
  padding-top: 10px;
}
.colright{
  position: relative;
  width: 100%;
  padding-top: 10px;
}
.imgn{
    width: 100%;
    height: 190px;
    overflow: hidden;
    object-fit: cover;
    border-top-left-radius: calc(0.25rem - 1px);
    border-top-right-radius: calc(0.25rem - 1px);
    border: double;
    border-color: black;
}
.borderd{
    border: solid;
    border-color: #337ab7;
    padding: 5px 5px;
}
.borderour{
    border: solid;
    border-color: black;
    border-width: 1px;
}
</style>


<div class="jumbotron">
  <h1 class="display-4">Админ, приветствую!</h1>
  <p class="lead">Здесь Вы можете редактировать записи на вашем сайте.</p>
  <p class="lead">Просто выберете страницу и отредактируйте ее на свой вкус.</p>
  <p class="lead">После редактирования нужно проверить запись на соответствующей странице.</p>
  <p class="lead">После нажатия на кнопку "Редактировать" на какой-либо странице, для дейстия над записями необходимо нажать на данные значки:</p>
  <p class="lead">(Просмотр <img src="/web/slider/Просмотр.jpg">), (Редактировать<img src="/web/slider/Редактировать.jpg">), (Удалить<img src="/web/slider/Удалить.jpg">)</p>
  <hr class="my-4">
  <div class="borderd">
  <h2 class="mt-0">Загружать фотографии и документы нужно здесь!</h2>
  <p>Не забудьте указать имя изображения в столбце "Имя изображения" на нужной странице, если Вы хотите отобразить изображение.</p>
  <a class="btn btn-primary btn-lg" href="admin/default/upload" role="button">Загрузить</a>
  </div>
</div>

<br>
<div class="formadmin" style="background-color: #d1eaf9;">
    <div class="row no-gutters bg-light position-relative">
        <div class="col-md-6 mb-md-0 p-md-4">
            <img src="/web/slider/main.jpg" class="imgn" alt="Главная">
        </div>
        <div class="col-md-6 position-static p-4 pl-md-0">
            <div class="colright">
            <h3 class="mt-0">Главная</h3>
            <p>Здесь можно отредактировать главную страницу. Она является "лицом" сайта, поэтому нужно хорошо продумать информацию, находящуюся здесь. 80% успеха сайта зависит от хорошо продуманной информации на главной странице, так как пользователь первым делом начинает знакомство именно тут.</p>
            <a role="presentation" class="active"><?= html::a('Редактировать',['index/index']) ?></a>
            </div>
        </div>
    </div>
</div>
<br>

<br>
<div class="formadmin" style="background-color: #d1eaf9;">
    <div class="row no-gutters bg-light position-relative">
        <div class="col-md-6 position-static p-4 pl-md-0">
            <div class="colleft">
            <h3 class="mt-0">Новости</h3>
            <p>Отредактировать, удалить или добавить в новостную ленту запись можно здесь. Добавленная новость автоматически занимает верхнюю строчку.</p>
            <a role="presentation" class="active"><?= html::a('Редактировать',['news/index']) ?></a>
            </div>
        </div>
        <div class="col-md-6 position-static p-4 pl-md-0">
            <img src="/web/slider/news.jpg" class="imgn" alt="Новости">
        </div>
    </div>
</div>
<br>

<br>
<div class="formadmin" style="background-color: #d1eaf9;">
    <div class="row no-gutters bg-light position-relative">
        <div class="col-md-6 mb-md-0 p-md-4">
            <img src="/web/slider/about.jpg" class="imgn" alt="Об организации">
        </div>
        <div class="col-md-6 position-static p-4 pl-md-0">
            <div class="colright">
            <h3 class="mt-0">Об организации</h3>
            <p>Изменить информацию об организации можете в этом меню. Чтобы начать писать с новой строки, необходимо ввести информацию в следующую строку. В этом разделе рекомендуется не добавлять информацию, а редактировать имеющую.</p>
            <a role="presentation" class="active"><?= html::a('Редактировать',['about/index']) ?></a>
            </div>
        </div>
    </div>
</div>
<br>

<br>
<div class="formadmin" style="background-color: #d1eaf9;">
    <div class="row no-gutters bg-light position-relative">
        <div class="col-md-6 position-static p-4 pl-md-0">
            <div class="colleft">
            <h3 class="mt-0">Адрес</h3>
            <p>Тут можно изменить адрес, добавить новую информацию.</p>
            <a role="presentation" class="active"><?= html::a('Редактировать',['address/index']) ?></a>
            </div>
        </div>
        <div class="col-md-6 position-static p-4 pl-md-0">
            <img src="/web/slider/address.jpg" class="imgn" alt="Адрес">
        </div>
    </div>
</div>
<br>

<br>
<div class="formadmin" style="background-color: #d1eaf9;">
    <div class="row no-gutters bg-light position-relative">
        <div class="col-md-6 mb-md-0 p-md-4">
            <img src="/web/slider/doc.jpg" class="imgn" alt="Документы">
        </div>
        <div class="col-md-6 position-static p-4 pl-md-0">
            <div class="colright">
            <h3 class="mt-0">Документы</h3>
            <p>Для начала следует загрузить документы в разделе на самом верху этой страницы. Затем нужно указать имя файла в стоке "Имя файла", заполнить остальные строки: "Название документа", "Информация о документе".</p>
            <a role="presentation" class="active"><?= html::a('Редактировать',['documents/index']) ?></a>
            </div>
        </div>
    </div>
</div>
<br>

<br>
<div class="formadmin" style="background-color: #d1eaf9;">
    <div class="row no-gutters bg-light position-relative">
        <div class="col-md-6 position-static p-4 pl-md-0">
            <div class="colleft">
            <h3 class="mt-0">Победители</h3>
            <p>Все просто. Вставляем информацию, которая соответствует столбцам. В столбец "Дата" пишем дату мероприятия, в "Заголовок" - заголовок мероприятия, в "Информация 1" - информацию о мероприятии и так далее.</p>
            <a role="presentation" class="active"><?= html::a('Редактировать',['winners/index']) ?></a>
            </div>
        </div>
        <div class="col-md-6 position-static p-4 pl-md-0">
            <img src="/web/slider/wins.jpg" class="imgn" alt="Победители">
        </div>
    </div>
</div>
<br>

<br>
<div class="formadmin" style="background-color: #d1eaf9;">
    <div class="row no-gutters bg-light position-relative">
        <div class="col-md-6 mb-md-0 p-md-4">
            <img src="/web/slider/gallery.jpg" class="imgn" alt="Главная">
        </div>
        <div class="col-md-6 position-static p-4 pl-md-0">
            <div class="colright">
            <h3 class="mt-0">Галерея</h3>
            <p>После загруки фотографий выше, можете указать их имя в столбце "Имя изображения". Также Вы можете изменить заголовок и текст к нему.</p>
            <a role="presentation" class="active"><?= html::a('Редактировать',['gallery/index']) ?></a>
            </div>
        </div>
    </div>
</div>
<br>

<br>
<div class="formadmin" style="background-color: #d1eaf9;">
    <div class="row no-gutters bg-light position-relative">
        <div class="col-md-6 position-static p-4 pl-md-0">
            <div class="colleft">
            <h3 class="mt-0">Партнеры</h3>
            <p>Редактировать информацию о партнерах, добавлять новых или удалять можно по ссылке ниже.</p>
            <a role="presentation" class="active"><?= html::a('Редактировать',['partners/index']) ?></a>
            </div>
        </div>
        <div class="col-md-6 position-static p-4 pl-md-0">
            <img src="/web/slider/partners.jpg" class="imgn" alt="Партнеры">
        </div>
    </div>
</div>
<br>