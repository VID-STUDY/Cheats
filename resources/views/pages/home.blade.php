@extends('app')

@section('title', 'Главная')

@section('css')
<style>
        .cheats {
        background: url('{{ asset("img/main_page_images/cheats.png") }}'); /* Путь к файлу с исходным рисунком  */

        width: 240px; /* Ширина рисунка */
        height: 400px; /*  Высота рисунка */


        overflow:hidden;
        -moz-transition: all 1s ease-out;
        -o-transition: all 1s ease-out;
        -webkit-transition: all 1s ease-out;
        border-radius: 10px;
        box-shadow: 0.4em 0.4em 5px rgba(122,122,122,0.5);
        transition: 0.3s;
       }

       .cheats:hover {
        background: url('{{ asset("img/main_page_images/cheats_hover.png") }}'); /* Путь к файлу с заменяемым рисунком  */
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -o-transform: scale(1.1);
        transition: 0.3s;
       }

        .macros {
        background: url(https://cdn.discordapp.com/attachments/731175555059286058/735899323119960175/401f3cbe5b49fac5.png); /* Путь к файлу с исходным рисунком  */

        width: 240px; /* Ширина рисунка */
        height: 400px; /*  Высота рисунка */


        overflow:hidden;
        -moz-transition: all 1s ease-out;
        -o-transition: all 1s ease-out;
        -webkit-transition: all 1s ease-out;
        border-radius: 10px;
        box-shadow: 0.4em 0.4em 5px rgba(122,122,122,0.5);

        transition: 0.3s;

       }

       .macros:hover {
        background: url(https://cdn.discordapp.com/attachments/731175555059286058/735899243465932880/5e73ab30d41c76ca.png); /* Путь к файлу с заменяемым рисунком  */
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -o-transform: scale(1.1);
        transition: 0.3s;
       }

        .spoofer {
        background: url('{{ asset("img/main_page_images/spoofer.png") }}'); /* Путь к файлу с исходным рисунком  */

        width: 240px; /* Ширина рисунка */
        height: 400px; /*  Высота рисунка */


        overflow:hidden;
        -moz-transition: all 1s ease-out;
        -o-transition: all 1s ease-out;
        -webkit-transition: all 1s ease-out;
        border-radius: 10px;
        box-shadow: 0.4em 0.4em 5px rgba(122,122,122,0.5);
        transition: 0.3s;
       }

       .spoofer:hover {
        background: url('{{ asset("img/main_page_images/spoofer_hover.png") }}');  /* Путь к файлу с заменяемым рисунком  */
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -o-transform: scale(1.1);
        transition: 0.3s;
       }
</style>
@endsection

@section('content')
<section id="cheats">
  <div class="container row m-auto pl-5 pt-5 pb-5">
    <div class="col pb-2 d-flex justify-content-end">
      <a href="{{ route('cheats.spoofers') }}">
        <div class="spoofer"></div>
      </a>
    </div>
    <div class="col pb-2">
      <a href="{{ route('games') }}">
          <div class="cheats"></div>
      </a>
    </div>
    <!-- <div class="col pb-2">
      <a href="{{ route('macros') }}">
          <div class="macros"></div>
      </a>
    </div> -->


  </div>
</section>
<section id="about">
  <div class="mt-3 red-bg d-flex">
    <div class="container m-auto pt-5 pb-5">
      <div class="header-h1 text-center text-white text-uppercase mb-1">
        <h1>Приватные читы</h1>
      </div>
      <p class="text-justify text-white">Многофункциональные приватные читы для популярных онлайн игр от WH-SATANO, разрабатываемые командой профессиональных разработчиков. Наши продукты являются абсолютно безопасными для использования на официальных игровых серверах. Уникальный обход позволит Вам получать удовольствие от игры и не беспокоиться о возможных блокировках. Мы разрабатываем приватное программное обеспечение уже более 4 лет, каждый приватный софт от нашего проекта можно называть эталоном в своей сфере. За годы работы WH-SATANO заработал хорошую репутацию, которая подтверждается большим количеством положительных отзывов от покупателей. Гибкая ценовая политика даёт возможность побыть в шкуре читера каждому. Открой новый геймплей в твоей любимой игре!</p>
    </div>
  </div>
</section>
<section id="plus" class="mb-2 mt-5">
  <div class="container pt-5 pb-5 row m-auto text-center">
    <div class="col-md-4">
      <i class="fas fa-percentage fa-4x m-auto blue-text-gr d-block"></i>
      <h3 class="blue-text-gr">Доступные цены</h3>
      <p class="text-muted">Может позволить себе каждый</p>
    </div>
    <div class="col-md-4">
      <i class="fas fa-shield-alt fa-4x m-auto green-text-gr d-block"></i>
      <h3 class="green-text-gr">Защита</h3>
      <p class="text-muted">Будь спокоен</p>
    </div>
    <div class="col-md-4">
      <i class="fas fa-headset fa-4x m-auto purple-text-gr d-block"></i>
      <h3 class="purple-text-gr">Поддержка</h3>
      <p class="text-muted">Решим все проблемы с читом</p>
    </div>
  </div>
</section>
<!-- <section id="reviews" class="mt-5 mb-5 p-4">
  <div class="header-h3 text-center text-muted text-uppercase mb-1">
    <h3>Отзывы</h3>
  </div>
  <p class="text-muted text-center mb-3">Честное мнение о наших продуктах от клиентов</p>
  <div id="reviewsBlock" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner text-white">
    <div class="carousel-item pt-3 pb-3 active">
      <div class="m-auto">
        <div class="text-center text-warning mb-3">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <p class="text-center bg-grey pr-5 pl-5">Чит довольно грамотно устроен, я без проблем разобрался со всеми функциями за 5 минут!</p>
        <h3 class="text-center">Дмитрий Некрасов</h3>
      </div>
    </div>
    <div class="carousel-item pt-3 pb-3">
      <div class="m-auto">
        <div class="text-center text-warning mb-3">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <p class="text-center bg-grey pr-5 pl-5">Покупал софт на CS:GO, приватные читы сделаны на высшем уровне.</p>
        <h3 class="text-center">Евгений Ядрин</h3>
      </div>
    </div>
    <div class="carousel-item pt-3 pb-3">
      <div class="m-auto">
        <div class="text-center text-warning mb-3">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <p class="text-center bg-grey pr-5 pl-5">Спасибо сайту за качественный товар, покупаю здесь уже на протяжении года.</p>
        <h3 class="text-center">Ян Купелин</h3>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="index.html#reviewsBlock" role="button" data-slide="prev"><i class="fas fa-angle-left"></i></a>
  <a class="carousel-control-next" href="index.html#reviewsBlock" role="button" data-slide="next"><i class="fas fa-angle-right"></i></a>
  </div>
  <div class="show-all-reviews hvr-bounce-in"><a href="https://vk.com/topic-103745867_33518311" target="_blank">Посмотреть все отзывы</a></div>
</section> -->
<!-- <section id="blog" class="mt-5 mb-5 p-4">
  <div class="header-h3 text-center text-muted text-uppercase mb-1">
    <h3>Блог</h3>
  </div>
  <p class="text-muted text-center mb-3">Читайте полезные статьи, связанные с миром приватных читов</p>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="post-block">
          <a href="post.php@newid=122.html"><h4>Phoenix Rainbow Six Siege - Purchase Page</h4></a>
          <p class="text-muted">
          On this page you can buy our Rainbow Six Siege Hack. Soft is undetected since release.
          Features: Simple Wallhack, No Recoil, No Sway.
          The software is available in English and Russian.
          Supports Windows 7, 8, 8.1, 10
          Supports all processors
          The product is optimized and will not affect your</p>
          <p class="more_info_post"><i class="fas fa-pen-nib mr-1"></i>Автор:<span class="author ml-1">admin</span><i class="far fa-calendar-alt ml-3"></i><time class="ml-1">2020-06-22</time></p>
        </div>
        <hr>
        <div class="post-block">
          <a href="post.php@newid=120.html"><h4>Phoenix Rainbow Six Siege - Инструкция по активации товара</h4></a>
          <p class="text-muted">В процессе оплаты вы заполняете форму для регистрации аккаунта на нашем сайте. Если аккаунт уже есть - просто вводите свои данные. После завершения оплаты</p>
          <p class="more_info_post"><i class="fas fa-pen-nib mr-1"></i>Автор:<span class="author ml-1">admin</span><i class="far fa-calendar-alt ml-3"></i><time class="ml-1">2020-06-21</time></p>
        </div>
        <hr>
        <div class="post-block">
          <a href="post.php@newid=121.html"><h4>Phoenix Rainbow Six Siege - Product Activation Instruction</h4></a>
          <p class="text-muted">During the payment process you need to fill out the form with the details to login to our website. If you already have an account, just enter your details. After you complete the payment you need to click on the get goods button. After this you are sent the registration information and need to</p>
          <p class="more_info_post"><i class="fas fa-pen-nib mr-1"></i>Автор:<span class="author ml-1">admin</span><i class="far fa-calendar-alt ml-3"></i><time class="ml-1">2020-06-21</time></p>
        </div>
        <hr>
        <a href="blog.html" class="text-center d-block text-theme mt-3 hvr-icon-wobble-horizontal">Читать все посты<br /><i class="fas fa-ellipsis-h hvr-icon"></i></a>
      </div>

    </div>
  </div>
</section> -->
@endsection
