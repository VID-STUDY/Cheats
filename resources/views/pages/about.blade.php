@extends('app')

@section('title', 'О проекте WH-SATANO')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
<section id="about">
<div class="container pt-5 pb-5">
<h1>Информация о проекте WH-SATANO</h1>
<p>
<strong>WH-SATANO</strong> - проект, основанный в 2015 году для разработки приватного программного обеспечения для игр.<br /> Создатели проекта с момента реализации своей идеи и по сей день придерживаются строгих правил, согласно которым любой продукт, выпущенный от имени проекта, обязан быть проработанным до мелочей, а так же должен быть доступным для всех благодаря низким ценам.<br /><br /> На текущий квартал WH-SATANO старается поддерживать программное обеспечение для таких игр, как <b>Counter Strike: Global Offensive</b>, <b>RUST</b>, <b>PUBG</b>, <b>WarFace</b> и <b>Apex</b>.
</p>
<div id="curve_chart" style="min-height: 500px" class="margin-auto w-100 animated pulse"></div>
</div>
</section>


<script type="b1ea62bcaea4d15c382a1a91-text/javascript">
    var ww = window.screen.width; // ширина
    var hh = window.screen.height; // высота
    if(ww < 500 && hh < 900) {
        console.log("Mobile");
    } else {
        console.log("Добро пожаловать на ПК версию сайта! Приятного пользования.");
        document.write("<script type='text/javascript/' src='https://vk.com/js/api/openapi.js?159'/>");
    }
</script>
<script type="b1ea62bcaea4d15c382a1a91-text/javascript" src="https://vk.com/js/api/openapi.js?159"></script>
<div id="vk-vk">
<div id="vk_community_messages"></div>
</div>
<script type="b1ea62bcaea4d15c382a1a91-text/javascript">
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
