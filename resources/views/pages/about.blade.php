@extends('app')

@section('title', 'О проекте DragonBreath')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
<section id="about">
<div class="container row m-auto pl-5 pt-5 pb-5">
<h1>Информация о проекте <font color="#D85E53">DragonBreath</font></h1>
<p>
Мы небольшой коллектив с наполеоновскими амбициями и стремлением к совершенствованию производимых нами товаров и услуг. В их число входят: фирменный спуфер, читы (скоро) на Apex: Legends, RaibowSixSiege, CS:GO, PUBG, Paladins. Также ведётся активная разработка макросов.
Мы на рынке относительно недавно и поэтому остро нуждаемся в вашей поддержке, отзывах и критике. Тем не менее, разработчики Dragon’s уже имеют довольно значительный опыт в работе с клиентами на площадке Funpay.
Примечание: если вы обнаружили какую бы то ни было помеху в работе сайта или предоставляемых нами услуг, просьба сообщить в техподдержку или в онлайн чат.
Спасибо за то, что выбрали наш сайт.

</p>

</div>
</section>



<script type="b1ea62bcaea4d15c382a1a91-text/javascript">
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


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" type="b1ea62bcaea4d15c382a1a91-text/javascript"></script>
<script src="js/bootstrap.bundle.min.js" type="b1ea62bcaea4d15c382a1a91-text/javascript"></script>
<script type="b1ea62bcaea4d15c382a1a91-text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="b1ea62bcaea4d15c382a1a91-text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Год', 'Посетители', 'Покупатели'],
                ['2015', 100, 30],
                ['2016', 300, 140],
                ['2017', 600, 490],
                ['2018', 1050, 900],
                ['2019', 1250, 1050]
            ]);

            var options = {
                title: 'Число ежемесячных пользователей',
                curveType: 'function',
                legend: {
                    position: 'bottom'
                }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }

    </script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="b1ea62bcaea4d15c382a1a91-|49" defer=""></script>
@endsection
