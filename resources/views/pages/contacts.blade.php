@extends('app')

@section('title', 'Контактные данные')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
<section id="contacts">
<div class="container" style="padding-bottom: 15%;">
<h1 class="text-center mt-4 mb-4">Контакты</h1>
<h2 class="text-center">Данные персонала</h2>
<hr>
<p class="contact_item text-muted"><i class="fas fa-user-circle"></i> Leax3201#3201 | <i class="fas fa-male"></i> Продавец</p>
<p class="contact_item text-muted"><i class="fas fa-user-circle"></i> MrFalope6870#9999 | <i class="fas fa-male"></i> Кодер</p>
<h2 class="text-center mt-3">Данные проекта</h2>
<hr>
<p class="contact_item text-muted"><i class="fas fa-globe"></i> Основной сайт - <a href="{{ route('home') }}" target="_blank">dragoncheats.ru</a></p>
<p class="contact_item text-muted">Наш дискорд - <a href="https://discord.gg/GtHkHjg" target="_blank"><i class="fab fa-discord fa-lg"></i></a></p>
<!-- <h2 class="text-center mt-3">Немного о проекте</h2>
<div class="content_block">
<p class="text-muted">Проект <b>WH-SATANO</b> был создан в 2015 году. Именно в этот год на рынке приватного софта была нехватка уникального продукта, который мог бы решать многие проблемы игроков CS:GO. Например, чтобы поиграть с читом в лицензионную версию CS:GO (Steam), Вы обязаны были подвергнуть свой аккаунт риску, связанному с высоким на тот момент уровнем защиты античита от компании <b>VALVE</b>. Получить бан, используя софт, лежащий в открытом доступе в сети, было достаточно легко, и именно поэтому мы поставили перед собой задачу - <b>сделать самый надёжный приватный чит для CS:GO</b>. Спустя несколько месяцев работы у нас это получилось и первая версия софта вышла в продажу. В дальнейшем ассортимент приватного софта расширился и от имени <b>WH-SATANO</b> были выпущены ещё несколько читов для таких игр, как <b>RUST</b>, <b>PUBG</b> и <b>Apex</b>. На текущий момент в ассортименте имеются:
</p>
<ul>
<li style="color: #5858c0;"><b>BlastHack</b> - чит для CS:GO</li>
<li style="color: #ef984f;"><b>Phoenix</b> - чит для CS:GO</li>
<li style="color: #9455a4;"><b>Phoenix Lite</b> - чит для CS:GO</li>
<li style="color: #d45f5f;"><b>Phoenix Rust</b> - чит для RUST(заморожен)</li>
<li style="color: #d27f12;"><b>PubgMOD</b> - паки для PUBG(заморожен)</li>
<li style="color: #ffc0cb;"><b>Pubg X-ray</b> - вх для PUBG(заморожен)</li>
<li style="color: #40E0D0;"><b>Apex X-ray</b> - вх для Apex Legends</li>
</ul>
<p class="mb-5 text-muted">С каждым обновлением функционал, гибкость, защищённость и качество всех читов растут. Так как над всем проектом работает целая команда опытных в своём деле людей. Персонал проекта насчитывает более 10-ти человек, которые ежедневно трудятся для того, чтобы <b>WH-SATANO</b> оставался лучшим среди всех конкурентов. А так же у нас есть дочерний проект <a class="text-dark" href="https://satano.ru" title="Приватные читы для CS:GO, WarFace (кс го, варфейс)">satano</a>, который так же занимается продажей софта.</p>
</div> -->
</div>
</section>



<script type="e8b2577ea77d1b760cd96c15-text/javascript">
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


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" type="e8b2577ea77d1b760cd96c15-text/javascript"></script>
<script src="js/bootstrap.bundle.min.js" type="e8b2577ea77d1b760cd96c15-text/javascript"></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="e8b2577ea77d1b760cd96c15-|49" defer=""></script>
@endsection
