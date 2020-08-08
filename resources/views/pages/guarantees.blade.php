@extends('app')

@section('title', 'О нас')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
<section id="guarantees">
  <div class="container pt-5 b-5 mt-2 mb-2">
    <h1 class="text-center mt-4 mb-4">О нас</h1>
    <p>
      <font color="#D85E53">DragonBreath</font> -  небольшой коллектив с наполеоновскими амбициями и стремлением к совершенствованию производимых нами товаров и услуг. В их число входят: фирменный спуфер, читы (скоро) на Apex: Legends, RaibowSixSiege, CS:GO, PUBG, Paladins. Также ведётся активная разработка макросов.
    <br>  Мы на рынке относительно недавно и поэтому остро нуждаемся в вашей поддержке, отзывах и критике. Тем не менее, разработчики Dragon’s уже имеют довольно значительный опыт в работе с клиентами на площадке Funpay.
      Примечание: если вы обнаружили какую бы то ни было помеху в работе сайта или предоставляемых нами услуг, просьба сообщить в техподдержку или в онлайн чат.
      Спасибо за то, что выбрали нас.

    </p>
    <ul class="guarantees_block">
      <li>
        <i class="fas fa-check fa-2x mr-2 green-text"></i>
        <span>Приемлемые цены.</span>
      </li>
      <li class="mt-4">
        <i class="far fa-thumbs-up fa-2x mr-2 green-text"></i>
        <span>Гарантия безопасности.</span>
      </li>
      <li class="mt-4">
        <i class="fab fa-expeditedssl fa-2x mr-2 green-text"></i>
        <span>Наш веб-ресурс обладает SSL сертификатом</span>
      </li>
      <li class="mt-4">
        <i class="far fa-handshake fa-2x mr-2 green-text"></i>
        <span>Активная техподдержка</span>
      </li>
      <li class="mt-4">
        <i class="far fa-grin fa-2x mr-2 green-text"></i>
        <span>Скидки постоянным клиентам </span>
      </li>
      <li class="mt-4 mb-5">
        <i class="fas fa-headset fa-2x mr-2 green-text"></i>
        <span>В случае возникновения проблем наша поддержка вам поможет</span>
      </li>
    </ul>
  </div>
</section>


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
