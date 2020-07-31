@extends('app')

@section('title', 'Сотрудничество')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
<section id="cooperation">
  <div class="container pt-5 pb-5">
    <div class="text-center text-theme">
      <i class="far fa-handshake fa-10x"></i>
    </div>
    <h1 class="text-center mt-2 mb-2">Сотрудничество с проектом <b>Spoofer inc.</b></h1>
    <p class="text-muted">Готов сотрудничать с проектом? Мы всегда ждём умных и активных молодых людей, которые будут заинтересованы в развитии проекта.</p>
    <hr />
    <p class="text-muted">Ниже представлен список вакансий свободных на текущий момент (
    27/07/2020)</p>
    <ul class="text-muted">
      <li><i class="fas fa-code"></i> <b>Разработчик приватного софта</b> - нам нужны кодеры с готовым софтом или те, кто сделает продукт под нужды рынка. Разработчики в команде wh-satano являются ключевыми и получают самый большой процент от продаж. Если вы хотите с головой уйти в разработку и не париться над рекламой продукта и набором персонала, то присоединяйтесь к нам, мы готовы помочь вам с реализацией вашего софта!</li>
      <li><i class="fab fa-twitch"></i> <b>Стример на Twitch</b> - если вы проводите регулярные стримы на твиче или другой платформе, то мы готовы предоставлять вам софт, некоторую рекламу и накрутку зрителей за ответную рекламу нашего проекта с вашей стороны. Стримерам с хорошей аудиторией мы также готовы платить фиксированный гонорар.</li>
      <li><i class="fab fa-youtube"></i> <b>YouTuber</b> - мы готовы сотрудничать с ютуберами игровой тематики, которые имеют некоторую аудиторию и регулярно выпускают видео на своём канале. Ютуберам мы выдаём особую панель с реферальными ссылками, которые вы можете размещать у себя под видео. Если люди покупают наш продукт по вашим ссылкам, то вы получаете определенную долю от продажи. Ютуберы, работающие на постоянной основе, могут также претендовать на фиксированную выплату за каждый ролик с рекламой нашего проекта.</li>
    </ul>
    <p lass="text-muted">По всем вопросам в Discord: <b>satano#5012</b><br />Вконтакте: <a target="_blank" href="https://vk.com/id243982595"><b>CLICK HERE <i class="fab fa-vk"></i></b></a></p>
  </div>
</section>
<script type="5fb89a366d115a551bb533ce-text/javascript">
    var ww = window.screen.width; // ширина
    var hh = window.screen.height; // высота
    if(ww < 500 && hh < 900) {
        console.log("Mobile");
    } else {
        console.log("Добро пожаловать на ПК версию сайта! Приятного пользования.");
        document.write("<script type='text/javascript/' src='https://vk.com/js/api/openapi.js?159'/>");
    }
</script>
<script type="5fb89a366d115a551bb533ce-text/javascript" src="https://vk.com/js/api/openapi.js?159"></script>
<div id="vk-vk">
<div id="vk_community_messages"></div>
</div>
<script type="5fb89a366d115a551bb533ce-text/javascript">
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

<script type="5fb89a366d115a551bb533ce-text/javascript">
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


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" type="5fb89a366d115a551bb533ce-text/javascript"></script>
<script src="js/bootstrap.bundle.min.js" type="5fb89a366d115a551bb533ce-text/javascript"></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="5fb89a366d115a551bb533ce-|49" defer=""></script>
@endsection
