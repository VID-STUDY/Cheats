<!doctype html>
<html lang="ru">
  <head>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127500454-1" type="a696848f29c030b8171175e2-text/javascript"></script>
    <script type="a696848f29c030b8171175e2-text/javascript">
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-127500454-1');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Приватные читы для популярных онлайн игр от вх-сатано по доступным ценам. На сайте вы найдете много положительных отзывов" />
    <meta name="keywords" content="Приватные читы, читы, читы на онлайн игры, cheats, private cheats, купить читы, купить приватные читы ">
    <link rel="canonical" href="index.html" />
    <meta name="google-site-verification" content="tgxpE0t7w0vUHi39Jk-it7fbDVwdBrEEvsz-QWs3xuo" />
    @yield('meta')

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hover.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style5.css') }}">
    @yield('css')
    <title>
     @yield('title')
    </title>
  </head>
  <body>

    @include('layouts.header')


    <div class="img-load" hidden></div>
    <main>
      @yield('content')
    </main>

    @include('layouts.footer')

    <script type="a696848f29c030b8171175e2-text/javascript">
        var ww = window.screen.width; // ширина
        var hh = window.screen.height; // высота
        if(ww < 500 && hh < 900) {
            console.log("Mobile");
        } else {
            console.log("Добро пожаловать на ПК версию сайта! Приятного пользования.");
            document.write("<script type='text/javascript/' src='https://vk.com/js/api/openapi.js?159'/>");
        }
    </script>
    <script type="a696848f29c030b8171175e2-text/javascript" src="https://vk.com/js/api/openapi.js?159"></script>
    <div id="vk-vk">
    <div id="vk_community_messages"></div>
    </div>
    <script type="a696848f29c030b8171175e2-text/javascript">
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

    <script type="a696848f29c030b8171175e2-text/javascript">
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


    <script src="{{ asset('js/jquery-3.3.1.min.js') }}" async type="a696848f29c030b8171175e2-text/javascript"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" async type="a696848f29c030b8171175e2-text/javascript"></script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="a696848f29c030b8171175e2-|49" defer=""></script>
  </body>
</html>
