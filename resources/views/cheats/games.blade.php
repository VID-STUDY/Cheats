@extends('app')

@section('title', 'Купить Читы')

@section('header')
    @include('layouts.header')
@endsection

@section('css')
  <!-- <link rel="stylesheet" href="{{ asset('css/games.css') }}"> -->
<style>

    .all {
         box-sizing: border-box;
         display: block;
    }

    .cheats-r6 {
    background: url('{{ asset("img/games/R6S_S.png") }}'); /* Путь к файлу с исходным рисунком  */
    display: inline-block;
    width: 240px; /* Ширина рисунка */
    height: 400px; /*  Высота рисунка */
    margin-bottom:65;
    margin-right:35;
    overflow:hidden;
    -moz-transition: all 1s ease-out;
    -o-transition: all 1s ease-out;
    -webkit-transition: all 1s ease-out;
    border-radius: 10px;

    box-shadow: 0.4em 0.4em 5px rgba(122,122,122,0.5);
    transition: 0.3s;

   }

   .cheats-r6:hover {
    background: url('{{ asset("img/games/R6S_Shover.png") }}'); /* Путь к файлу с заменяемым рисунком  */
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -o-transform: scale(1.1);
    transition: 0.3s;
   }



   .cheats-paladins {
    background: url('{{ asset("img/games/paladins.png") }}'); /* Путь к файлу с исходным рисунком  */
   display: inline-block; /*  Рисунок как блочный элемент */
    width: 240px; /* Ширина рисунка */
    height: 400px; /*  Высота рисунка */
    margin-bottom:65;
    margin-right:35;
    overflow:hidden;
    -moz-transition: all 1s ease-out;
    -o-transition: all 1s ease-out;
    -webkit-transition: all 1s ease-out;
    border-radius: 10px;

    box-shadow: 0.4em 0.4em 5px rgba(122,122,122,0.5);
    transition: 0.3s;
   }

   .cheats-paladins:hover {
    background: url('{{ asset("img/games/paladins-hover.png") }}'); /* Путь к файлу с заменяемым рисунком  */
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -o-transform: scale(1.1);
    transition: 0.3s;
   }

   .cheats-cs-go {
    background: url('{{ asset("img/games/CSGO_.png") }}'); /* Путь к файлу с исходным рисунком  */
   display: inline-block; /*  Рисунок как блочный элемент */
    width: 240px; /* Ширина рисунка */
    height: 400px; /*  Высота рисунка */
    margin-bottom:65;
    margin-right:35;
    overflow:hidden;
    -moz-transition: all 1s ease-out;
    -o-transition: all 1s ease-out;
    -webkit-transition: all 1s ease-out;
    border-radius: 10px;

    box-shadow: 0.4em 0.4em 5px rgba(122,122,122,0.5);
    transition: 0.3s;
   }

   .cheats-cs-go:hover {
    background: url('{{ asset("img/games/csgo_hover.png") }}'); /* Путь к файлу с заменяемым рисунком  */
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -o-transform: scale(1.1);
    transition: 0.3s;
   }
</style>
@endsection

@section('content')
<section id="games">
<div class="row cheat-links pt-5 pb-4 text-center">
    <div class="col pb-2">
      <a href="{{ route('chiti') }}">
        <div class="cheats-r6"></div>
      </a>
    </div>
    <div class="col pb-2">
      <a href="{{ route('chiti') }}">
        <div class="cheats-paladins"></div>
      </a>
    </div>
    <div class="col pb-2">
      <a href="{{ route('chiti') }}">
        <div class="cheats-cs-go"></div>
      </a>
<!-- <div class="col-md-4 animated flipInX">
<a href="phoenixhack.html" title="Приватный чит Phoenix для CS:GO">
<div class="phoenix-hack d-flex hvr-grow">
<div class="m-auto pt-3 pb-3">
<img src="../img/phoenix-icon.webp" class="img-fluid" alt="Phoenix">
<h2>Phoenix Hack</h2>
<ul>
<li><i class="fas fa-bolt mr-2"></i>Индивидуальный лоадер</li>
<li><i class="far fa-comments mr-2"></i>Собственный форум</li>
<li><i class="fas fa-check-double mr-2"></i>Широкий функционал</li>
<li><i class="fas fa-sliders-h mr-2"></i>Настройка чита через сайт</li>
</ul>
<span>499 RUB / Месяц</span>

</div>
</div>
</a>
</div> -->
<!-- <div class="col-md-4 animated flipInX">
<a href="{{ route('podrobno') }}" title="Приватный чит BlastHack для CS:GO">
<div class="dragon-hack d-flex hvr-grow">
<div class="m-auto pt-3 pb-3">
<img src="../img/logo.png" class="img-fluid" alt="BlastHack">
<h2 class="">BlastHack</h2>
<ul>
<li><i class="fas fa-bars mr-2"></i></li>
<li><b><i class="far fa-money-bill-alt mr-2"></i>Лучшая цена</b></li>
<li><i class="fas fa-check-double mr-2"></i>Широкий функционал</li>
<li><i class="far fa-calendar-plus mr-2"></i>Бонусная панель управления</li>
</ul>
<span>349 RUB / Месяц</span>

</div>
</div>
</a>
</div>
<div class="col-md-4 animated flipInX">
<a href="phoenixlite.html" title="Приватный чит PhoenixLite для CS:GO">
<div class="phoenix-hack-lite d-flex hvr-grow">
<div class="m-auto pt-3 pb-3">
<img src="../img/phoenix-lite-icon.webp" class="img-fluid" alt="Phoenix">
<h2>Phoenix Hack Lite</h2>
<ul>
<li><i class="far fa-comments mr-2"></i>Собственный форум</li>
<li><i class="fas fa-fighter-jet mr-2"></i>Специально для буста</li>
<li><i class="far fa-thumbs-up mr-2"></i>Простое управление</li>
<li><i class="fas fa-check mr-2"></i>Только нужные функции</li>
</ul>
<span>249 RUB / Месяц</span>
</div>
</div>
</a>
</div> -->
</div>
</section>

<scr

<script type="56535746ca67f1648817fa11-text/javascript">
    (function(d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter39582760 = new Ya.Metrika2({
                    id: 39582760,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true
                });
            } catch (e) {}
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function() {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks2");

</script>
<noscript><div><img src="https://mc.yandex.ru/watch/39582760" style="position:absolute; left:-9999px;" alt="" /></div></noscript>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" type="56535746ca67f1648817fa11-text/javascript"></script>
<script src="../js/bootstrap.bundle.min.js" type="56535746ca67f1648817fa11-text/javascript"></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="56535746ca67f1648817fa11-|49" defer=""></script>
@endsection
