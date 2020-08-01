@extends('app')

@section('title', 'Блог - новости мира приватных читов')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
<main class="pt-5 pb-5">
<div class="container m-auto" id="articles">
</div>

<script type="bdf0c591f975c814b1a81891-text/javascript">
    var ww = window.screen.width; // ширина
    var hh = window.screen.height; // высота
    if(ww < 500 && hh < 900) {
        console.log("Mobile");
    } else {
        console.log("Добро пожаловать на ПК версию сайта! Приятного пользования.");
        document.write("<script type='text/javascript/' src='https://vk.com/js/api/openapi.js?159'/>");
    }
</script>
<script type="bdf0c591f975c814b1a81891-text/javascript" src="https://vk.com/js/api/openapi.js?159"></script>
<div id="vk-vk">
<div id="vk_community_messages"></div>
</div>
<script type="bdf0c591f975c814b1a81891-text/javascript">
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

<script type="bdf0c591f975c814b1a81891-text/javascript">
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


<script src="js/jquery-blog.js" type="bdf0c591f975c814b1a81891-text/javascript"></script>
<script src="js/scripts-blog.js" type="bdf0c591f975c814b1a81891-text/javascript"></script>
<script src="js/bootstrap.bundle.min.js" type="bdf0c591f975c814b1a81891-text/javascript"></script>
<script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js" type="bdf0c591f975c814b1a81891-text/javascript"></script>
<script src="https://yastatic.net/share2/share.js" type="bdf0c591f975c814b1a81891-text/javascript"></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="bdf0c591f975c814b1a81891-|49" defer=""></script>
@endsection
