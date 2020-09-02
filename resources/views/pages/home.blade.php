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
  <div class="container row m-auto pl-5 pt-5">
    <div class="col pb-2 d-flex justify-content-end">
      <a href="{{ route('cheats.spoofers') }}">
        <div class="spoofer"></div>
      </a>
    </div>
    <div class="col pb-2 d-flex justify-content-start">
      <a href="{{ route('cheats.games') }}">
          <div class="cheats"></div>
      </a>
    </div>


  </div>
</section>
<section id="about">
  <div class="mt-3 red-bg d-flex">
    <div class="container m-auto pt-5 pb-5">
      <div class="header-h1 text-center text-white text-uppercase mb-1">
        <h1>Читы</h1>
      </div>
      <p class="text-justify text-white">
        Авторские читы, спуфер, макросы всё это вы можете найти на нашем сайте. Команда разработчиков Dragon’s гарантирует работоспособность и безопасность для ваших систем всего предоставляемого программного обеспечения. Специалисты Dragon's находятся на передовой борьбы и обхода античитов, благодаря чему вы можете наслаждаться комфортной игрой без опасения за ваши аккаунты, а политика ценообразования не ударит по вашему кошельку.
      </p>
    </div>
  </div>
</section>
<section id="plus" class="mb-2 mt-5">
  <div class="container pt-5 pb-5 row m-auto text-center">
    <div class="col-md-4">
      <i class="fas fa-percentage fa-4x m-auto blue-text-gr d-block"></i>
      <h3 class="blue-text-gr">Клиентоориентированность.</h3>
      <p class="text-muted">Зачем тут знак процентов?</p>
    </div>
    <div class="col-md-4">
      <i class="fas fa-shield-alt fa-4x m-auto green-text-gr d-block"></i>
      <h3 class="green-text-gr">Работоспособность ПО.</h3>
      <p class="text-muted">Будь спокоен</p>
    </div>
    <div class="col-md-4">
      <i class="fas fa-headset fa-4x m-auto purple-text-gr d-block"></i>
      <h3 class="purple-text-gr">Активную техподдержку.</h3>
      <p class="text-muted">Всегда рады помочь</p>
    </div>
  </div>
</section>
S
@endsection
