@extends('app')

@section('title', $cheat->name)

@section('css')
    <link rel="stylesheet" href="{{ asset('css/cheat-page-style.css') }}">
@endsection

@section('content')
    <main class="p-1 dragon-bg" style="background:url('{{ asset('img/dragonhack-bg.webp') }}')">
        <div class="container text-center">
            <h1 class="dh-h1 mt-5">{{ $cheat->name }}</h1>
            <div class="text animated shake"></div>
            <div class="row mt-5">
                <div class="col-md-8">
                    @if ($cheat->images()->count() > 0)
                        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach($cheat->images as $key => $image)
                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}" @if ($key == 0) class="active" @endif></li>
                                @endforeach
                            </ol>
                            <div class="carousel-inner">
                                @foreach($cheat->images as $key => $image)
                                    <div class="carousel-item @if ($key == 0) active @endif">
                                        <img class="img-fluid " src="{{ asset('storage/' . $image->image) }}" alt="">
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                        </div>
                    @endif
                </div>
                <div class="col-md-4 d-flex">
                    <div class="m-auto d-block">
                        <h2>Информация о чите</h2>
                        <p class="text-left about-cheat-text">{{ $cheat->description }}</p>
                        <hr>
                        <p class="text-left about-cheat-text">
                            @if ($cheat->release_date)
                                <b class="mr-2">Дата выхода:</b>{{ $cheat->release_date }}<br />
                            @endif
                            <b class="mr-2">Игра:</b>{{ $game->name }}<br />
                            <b class="mr-2">Тип:</b>@switch($cheat->type) @case('spoofer') Спуфер @break @case('cheat') Чит @break @case('macros') Макрос @break @default Неизвестно @endswitch<br />
                            @if ($cheat->manufacturer)
                                <b class="mr-2">Разработчик:</b>{{ $cheat->manufacturer }}<br />
                            @endif
                        </p>
                        <a type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-lg btn-buy-cheat">Купить</a>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-8">
                    @if ($cheat->functional)
                    <div class="cheat-defblock p-4">
                        <h2>Функционал</h2>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="about-cheat-text">
                                    @foreach(explode(';', $cheat->functional) as $func)
                                        @if (!empty($func))
                                            <li><i class="far fa-check-circle mr-2"></i>{{ $func }}</li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="col-md-4">
                    <div class="cheat-defblock p-4">
                        <p>Оценка пользователей</p>
                        <div class="row ocenka">
                            <i class="fas fa-star fa-2x"></i>
                            <i class="fas fa-star fa-2x"></i>
                            <i class="fas fa-star fa-2x"></i>
                            <i class="fas fa-star fa-2x"></i>
                            <i class="fas fa-star fa-2x"></i>
                        </div>
                        <hr>
                        @if ($cheat->system_requirements)
                            <p class="about-cheat-text">Системные требования <br />
                                @foreach(explode(';', $cheat->system_requirements) as $requirement)
                                    @if (!empty($requirement))
                                        {{ $requirement }} <br>
                                    @endif
                                @endforeach
                            </p>
                        @endif
                        @if ($cheat->additional_info)
                            <hr>
                            <p class="about-cheat-text">{{ $cheat->additional_info }}</p>
                        @endif
                    </div>
                </div>
            </div>
            <nav aria-label="breadcrumb" class="mt-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" title="Главная">Главная</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('cheats.game', $game->slug) }}" title="{{ $game->name }}">{{ $game->name }}</a></li>
                    <li class="breadcrumb-item active"><a href="#">{{ $cheat->name }}</a></li>
                </ol>
            </nav>
        </div>
    </main>

    <script type="7c970f9dee8bf3fd5daaf159-text/javascript">
    var ww = window.screen.width; // ширина
    var hh = window.screen.height; // высота
    if(ww < 500 && hh < 900) {
        console.log("Mobile");
    } else {
        console.log("Добро пожаловать на ПК версию сайта! Приятного пользования.");
        document.write("<script type='text/javascript/' src='https://vk.com/js/api/openapi.js?159'/>");
    }
</script>
    <script type="7c970f9dee8bf3fd5daaf159-text/javascript" src="https://vk.com/js/api/openapi.js?159"></script>
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

    <script type="7c970f9dee8bf3fd5daaf159-text/javascript">
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


    <script src="../js/jquery-3.3.1.min.js" type="7c970f9dee8bf3fd5daaf159-text/javascript"></script>
    <script src="../js/bootstrap.bundle.min.js" type="7c970f9dee8bf3fd5daaf159-text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js" type="7c970f9dee8bf3fd5daaf159-text/javascript"></script>
    <script type="7c970f9dee8bf3fd5daaf159-text/javascript">
        'use strict';

        function _classCallCheck(instance, Constructor) {
            if (!(instance instanceof Constructor)) {
                throw new TypeError("Cannot call a class as a function");
            }
        }

        // ——————————————————————————————————————————————————
        // Эффект смены символов в тексте
        // ——————————————————————————————————————————————————

        var TextScramble = function() {
            function TextScramble(el) {
                _classCallCheck(this, TextScramble);

                this.el = el;
                this.chars = '!<>-о_\\м/ф[]{}у—=+*ы^?#________а';
                this.update = this.update.bind(this);
            }

            TextScramble.prototype.setText = function setText(newText) {
                var _this = this;

                var oldText = this.el.innerText;
                var length = Math.max(oldText.length, newText.length);
                var promise = new Promise(function(resolve) {
                    return _this.resolve = resolve;
                });
                this.queue = [];
                for (var i = 0; i < length; i++) {
                    var from = oldText[i] || '';
                    var to = newText[i] || '';
                    var start = Math.floor(Math.random() * 40);
                    var end = start + Math.floor(Math.random() * 40);
                    this.queue.push({
                        from: from,
                        to: to,
                        start: start,
                        end: end
                    });
                }
                cancelAnimationFrame(this.frameRequest);
                this.frame = 0;
                this.update();
                return promise;
            };

            TextScramble.prototype.update = function update() {
                var output = '';
                var complete = 0;
                for (var i = 0, n = this.queue.length; i < n; i++) {
                    var _queue$i = this.queue[i];
                    var from = _queue$i.from;
                    var to = _queue$i.to;
                    var start = _queue$i.start;
                    var end = _queue$i.end;
                    var char = _queue$i.char;

                    if (this.frame >= end) {
                        complete++;
                        output += to;
                    } else if (this.frame >= start) {
                        if (!char || Math.random() < 0.28) {
                            char = this.randomChar();
                            this.queue[i].char = char;
                        }
                        output += '<span class="dud">' + char + '</span>';
                    } else {
                        output += from;
                    }
                }
                this.el.innerHTML = output;
                if (complete === this.queue.length) {
                    this.resolve();
                } else {
                    this.frameRequest = requestAnimationFrame(this.update);
                    this.frame++;
                }
            };

            TextScramble.prototype.randomChar = function randomChar() {
                return this.chars[Math.floor(Math.random() * this.chars.length)];
            };

            return TextScramble;
        }();

        // ——————————————————————————————————————————————————
        // Пример текста
        // ——————————————————————————————————————————————————

        var phrases = ['Низкая цена', 'Надёжная защита', 'Бесплатный тест', 'Удобное меню'];

        var el = document.querySelector('.text');
        var fx = new TextScramble(el);

        var counter = 0;
        var next = function next() {
            fx.setText(phrases[counter]).then(function() {
                setTimeout(next, 1500);
            });
            counter = (counter + 1) % phrases.length;
        };

        next();

    </script>
    <script type="7c970f9dee8bf3fd5daaf159-text/javascript">
        /* Формирование ссылки при выборе чита*/

        function OnSelectionChange() {
            //alert(typeof(document.getElementById("priceRange").value));
            // var selectedOption = select.options[select.selectedIndex];
            switch (document.getElementById("priceRange").value)
			{
                case '1':
                    document.getElementById("buy-shop").href = "../buy.php?cheat=Blast&game=CSGO&days=3&lang=ru-RU&url_yt=https://www.youtube.com/embed/QwjjB7Y0ZVo";
                    $("#buy-shop").attr('target', '_blank');
                    document.getElementById("resultDays").innerHTML = "3 дня - 50 рублей";
                    document.getElementById("resultDays").classList.remove("animated", "flipInY", "flipInX", "jackInTheBox", "bounceIn");
                    document.getElementById("resultDays").classList.add("animated", "flipInX");
                    break;
                case '2':
                    document.getElementById("buy-shop").href = "../buy.php?cheat=Blast&game=CSGO&days=6&lang=ru-RU&url_yt=https://www.youtube.com/embed/QwjjB7Y0ZVo";
                    $("#buy-shop").attr('target', '_blank');
                    document.getElementById("resultDays").innerHTML = "6 дней - 99 рублей";
                    document.getElementById("resultDays").classList.remove("animated", "flipInY", "flipInX", "jackInTheBox", "bounceIn");
                    document.getElementById("resultDays").classList.add("animated", "flipInY");
                    break;
                case '3':
                    document.getElementById("buy-shop").href = "../buy.php?cheat=Blast&game=CSGO&days=15&lang=ru-RU&url_yt=https://www.youtube.com/embed/QwjjB7Y0ZVo";
                    $("#buy-shop").attr('target', '_blank');
                    document.getElementById("resultDays").innerHTML = "15 дней - 199 рублей";
                    document.getElementById("resultDays").classList.remove("animated", "flipInY", "flipInX", "jackInTheBox", "bounceIn");
                    document.getElementById("resultDays").classList.add("animated", "jackInTheBox");
                    break;
                case '4':
                    document.getElementById("buy-shop").href = "../buy.php?cheat=Blast&game=CSGO&days=30&lang=ru-RU&url_yt=https://www.youtube.com/embed/QwjjB7Y0ZVo";
                    $("#buy-shop").attr('target', '_blank');
                    document.getElementById("resultDays").innerHTML = "30 дней - 349 рублей";
                    document.getElementById("resultDays").classList.remove("animated", "flipInY", "flipInX", "jackInTheBox", "bounceIn");
                    document.getElementById("resultDays").classList.add("animated", "bounceIn");
                    break;
                case '5':
                    document.getElementById("buy-shop").href = "../buy.php?cheat=Blast&game=CSGO&days=AllTime&lang=ru-RU&url_yt=https://www.youtube.com/embed/QwjjB7Y0ZVo";
                    $("#buy-shop").attr('target', '_blank');
                    document.getElementById("resultDays").innerHTML = "Навсегда - 1499 рублей";
                    document.getElementById("resultDays").classList.remove("animated", "flipInY", "flipInX", "jackInTheBox", "bounceIn");
                    document.getElementById("resultDays").classList.add("animated", "bounceIn");
                    break;
            }
        }

		 $('#yt-video').click(function() {
            console.log(":asd");
        });

        function carouselChanging() {
            if (!flag) {
                $('.carousel').carousel('pause');
                flag = true;
                $('.carousel-control-prev').setAttribute("hidden", "");
                $('.carousel-control-next').setAttribute("hidden", "");
                console.log("Carousel is locked");
            } else {
                $('.carousel').carousel();
                flag = false;
                console.log("Carousel is unlocked");
            }
        }


    </script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="7c970f9dee8bf3fd5daaf159-|49" defer=""></script>
@endsection