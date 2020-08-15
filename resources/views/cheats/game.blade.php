@extends('app')

@section('title', "Читы {$game->name}")

@section('content')
    <main class="container mb-5">
        <nav aria-label="breadcrumb" class="mt-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" title="Главная">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{ route('cheats.games') }}">Читы</a></li>
                <li class="breadcrumb-item active">{{ $game->name }}</li>
            </ol>
        </nav>
        <h1 class="text-center mt-5">Читы {{ $game->name }}</h1>
        <p class="text-center text-muted mb-5">{{ $game->short_description }}</p>
        <div class="row cheat-links pt-5 pb-4">
            @foreach($cheats as $cheat)
                <div class="col-md-4 animated flipInX">
                    <a href="{{ route('cheats.cheat', ['game' => $game->slug, 'cheat' => $cheat->slug]) }}" title="{{ $cheat->name }}">
                        <div class="dragon-hack d-flex hvr-grow">
                            <div class="m-auto pt-3 pb-3">
                                <img src="{{ asset('storage/' . $cheat->image) }}" class="img-fluid" alt="{{ $cheat->name }}">
                                <h2 @if ($cheat->color) style="color: {{ $cheat->color }}" @endif>{{ $cheat->name }}</h2>
                                <ul>
                                    @foreach($cheat->features as $feature)
                                        <li><i class="{{ $feature->icon }} mr-2"></i>{{ $feature->name }}</li>
                                    @endforeach
                                </ul>
                                @if ($cheat->status)
                                    <span>{{ $cheat->status }}</span>
                                @endif
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <p class="text-muted p-5 text-justify">{{ $game->description }}</p>
    </main>

    <script type="56535746ca67f1648817fa11-text/javascript">
    var ww = window.screen.width; // ширина
    var hh = window.screen.height; // высота
    if(ww < 500 && hh < 900) {
        console.log("Mobile");
    } else {
        console.log("Добро пожаловать на ПК версию сайта! Приятного пользования.");
        document.write("<script type='text/javascript/' src='https://vk.com/js/api/openapi.js?159'/>");
    }
</script>
    <script type="56535746ca67f1648817fa11-text/javascript" src="https://vk.com/js/api/openapi.js?159"></script>
    <div id="vk-vk">
        <div id="vk_community_messages"></div>
    </div>
    <style>
        @media (max-width: 900px) {
            #vk-vk {
                display: none!important;
            }
        }

    </style>

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
