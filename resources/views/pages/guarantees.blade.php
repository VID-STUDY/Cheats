@extends('app')

@section('title', 'Гарантии')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
<section id="guarantees">
  <div class="container pt-5 b-5 mt-2 mb-2">
    <h1 class="text-center mt-4 mb-4">Гарантии</h1>
    <p><b>Spoofer inc.</b> - популярная огранизация, разрабатывающая приватный софт для CS:GO, PUBG, RUST и Apex Legends которая заслужила свой высокий авторитет среди многих геймеров. Многочисленные отзывы, качественное исполнение своей работы, широкий ассортимент товаров дают Вам 100%-ую гарантию того, что любой продукт от нашей организации оставит для Вас лишь положительные эмоции.</p>
    <ul class="guarantees_block">
      <li>
        <i class="fas fa-check fa-2x mr-2 green-text"></i>
        <span>Мы более 4-х лет на рынке</span>
      </li>
      <li class="mt-4">
        <i class="far fa-thumbs-up fa-2x mr-2 green-text"></i>
        <span>Наш проект имеет более 6000 отзывов</span>
      </li>
      <li class="mt-4">
        <i class="fab fa-expeditedssl fa-2x mr-2 green-text"></i>
        <span>Наш веб-ресурс обладает SSL сертификатом</span>
      </li>
      <li class="mt-4">
        <i class="far fa-handshake fa-2x mr-2 green-text"></i>
        <span>Мы выдаём свой софт для тестирования бесплатно</span>
      </li>
      <li class="mt-4">
        <i class="far fa-grin fa-2x mr-2 green-text"></i>
        <span>Наш проект имеет более 30000 довольных клиентов</span>
      </li>
      <li class="mt-4 mb-5">
        <i class="fas fa-headset fa-2x mr-2 green-text"></i>
        <span>В случае возникновения проблем наша поддержка вам поможет</span>
      </li>
    </ul>
  </div>
</section>


<script type="f8052d2264a1d6a7e2e12f06-text/javascript">
    var ww = window.screen.width; // ширина
    var hh = window.screen.height; // высота
    if(ww < 500 && hh < 900) {
        console.log("Mobile");
    } else {
        console.log("Добро пожаловать на ПК версию сайта! Приятного пользования.");
        document.write("<script type='text/javascript/' src='https://vk.com/js/api/openapi.js?159'/>");
    }
</script>
<script type="f8052d2264a1d6a7e2e12f06-text/javascript" src="https://vk.com/js/api/openapi.js?159"></script>
<div id="vk-vk">
<div id="vk_community_messages"></div>
</div>
<script type="f8052d2264a1d6a7e2e12f06-text/javascript">
            VK.Widgets.CommunityMessages("vk_community_messages", 103745867, {
                expandTimeout: "5000",
                disableExpandChatSound: "1",
                tooltipButtonText: "Есть вопрос?"
            });

        </script>
<style>
            @media (max-width: 900px) {
                #vk-vk {
                    display: none!important;
                }
            }

        </style>

<script type="f8052d2264a1d6a7e2e12f06-text/javascript">
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


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" type="f8052d2264a1d6a7e2e12f06-text/javascript"></script>
<script src="js/bootstrap.bundle.min.js" type="f8052d2264a1d6a7e2e12f06-text/javascript"></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="f8052d2264a1d6a7e2e12f06-|49" defer=""></script>
@endsection
