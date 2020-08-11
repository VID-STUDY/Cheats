@extends('app')

@section('title', 'BlastHack')

@section('header')
    @include('layouts.header')
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/cheat-page-style.css') }}">
@endsection

@section('content')
<main class="p-1 dragon-bg" style="background:url('{{ asset('img/dragonhack-bg.webp') }}')">
  <div class="container text-center">
  <h1 class="dh-h1 mt-5">BlastHack</h1>
  <div class="text animated shake"></div>
  <div class="row mt-5">
  <div class="col-md-8">
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
  <div class="carousel-item active">
  <img class="img-fluid " src="https://sun9-13.userapi.com/c857420/v857420953/7f928/CdKVsL0SZls.jpg" alt="First slide">
  </div>
  <div class="carousel-item">
  <img class="img-fluid " src="https://sun9-32.userapi.com/c857420/v857420953/7f8f8/iujYsUfoM0g.jpg" alt="First slide">
  </div>
  <div class="carousel-item">
  <img class="img-fluid" src="https://sun9-33.userapi.com/c857420/v857420953/7f7e4/HUrxBVdvW6s.jpg" alt="Second slide">
  </div>
  <div class="carousel-item">
  <img class="img-fluid" src="https://sun9-2.userapi.com/c857420/v857420953/7f79f/y2eq4RcOTdU.jpg" alt="Third slide">
  </div>
  <div class="carousel-item">
  <img class="img-fluid" src="https://sun9-10.userapi.com/c857420/v857420077/7e1fa/t_n-JorWxYI.jpg" alt="Third slide">
  </div>
  </div>
  <a class="carousel-control-prev" href="blasthack.html#carouselExampleIndicators" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
  <a class="carousel-control-next" href="blasthack.html#carouselExampleIndicators" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
  </div>
  </div>
  <div class="col-md-4 d-flex">
  <div class="m-auto d-block">
  <h2>Информация о чите</h2>
  <p class="text-left about-cheat-text">BlastHack - уникальная разработка, использующая современные медоты защиты информации, благодаря которым чит является максимольно надёжным и подготовленным под MatchMaking</p>
  <hr>
  <p class="text-left about-cheat-text">
  <b class="mr-2">Дата выхода:</b>2019 год<br />
  <b class="mr-2">Игра:</b>CS:GO<br />
  <b class="mr-2">Тип:</b>Мультихак<br />
  <b class="mr-2">Дополнения:</b>панель управления<br />
  <b class="mr-2">Разработчик:</b>wh-satano<br />
  </p>
  <a href="../BlastTest.php@cheat=BlastHack&amp;game=CSGO&amp;days=test.html" title="Тест приватного чита BlastHack" class="btn btn-lg btn-buy-cheat mr-3">Взять тест</a>
  <a type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-lg btn-buy-cheat">Купить</a>
  <br><br><a type="button" data-toggle="modal" data-target="#videoModal" class="btn btn-lg btn-buy-cheat"><i class="fab fa-youtube mr-1"></i>Обзор</a>
  </div>
  </div>
  </div>
  <div class="row mt-5">
  <div class="col-md-8">
  <div class="cheat-defblock p-4">
  <h2>Функционал</h2>
  <div class="row">
  <div class="col-md-6">
  <h4>Визуальные функции</h4>
  <ul class="about-cheat-text">
  <li><i class="far fa-check-circle mr-2"></i>Выделение противников квадратами</li>
  <li><i class="far fa-check-circle mr-2"></i>Имена противников</li>
  <li><i class="far fa-check-circle mr-2"></i>Количество здоровья, брони</li>
  <li><i class="far fa-check-circle mr-2"></i>Оружие в руках</li>
  <li><i class="far fa-check-circle mr-2"></i>Линии прицеливания</li>
  <li><i class="far fa-check-circle mr-2"></i>Дополнительный прицел</li>
  <li><i class="far fa-check-circle mr-2"></i>Отображение разброса точкой</li>
  <li><i class="far fa-check-circle mr-2"></i>Радиус захвата аимбота</li>
  <li><i class="far fa-check-circle mr-2"></i>Оружие на земле</li>
  <li><i class="far fa-check-circle mr-2"></i>Набор сапёра</li>
  <li><i class="far fa-check-circle mr-2"></i>Расположение бомбы</li>
  <li><i class="far fa-check-circle mr-2"></i>Обход OBS</li>
  <li><i class="far fa-check-circle mr-2"></i>Обводка модели</li>
  <li><i class="far fa-check-circle mr-2"></i>Показывает человека с бомбой</li>
  <li><i class="far fa-check-circle mr-2"></i>Подсвечивание врагов цветом</li>
  <li><i class="far fa-check-circle mr-2"></i>Радар</li>
  </ul>
  </div>
  <div class="col-md-6">
  <h4>Аимбот</h4>
  <ul class="about-cheat-text">
  <li><i class="far fa-check-circle mr-2"></i>Аимбот для всех оружий</li>
  <li><i class="far fa-check-circle mr-2"></i>Триггербот</li>
  <li><i class="far fa-check-circle mr-2"></i>Проверка на ослепление</li>
  <li><i class="far fa-check-circle mr-2"></i>Проверка на дым</li>
  <li><i class="far fa-check-circle mr-2"></i>Задержка после убийства</li>
  <li><i class="far fa-check-circle mr-2"></i>Антиразброс</li>
  <li><i class="far fa-check-circle mr-2"></i>Радиус аимбота</li>
  <li><i class="far fa-check-circle mr-2"></i>Доводка и скорость доводки</li>
  </ul>
  <h4>Скинченджер</h4>
  <ul class="about-cheat-text">
  <li><i class="far fa-check-circle mr-2"></i>Замена всех скинов на всех оружиях</li>
  <li><i class="far fa-check-circle mr-2"></i>Визуальная замена звания</li>
  <li><i class="far fa-check-circle mr-2"></i>Визуальная замена медалей и побед</li>
  <li><i class="far fa-check-circle mr-2"></i>Визуальная замена скинов в инвентаре</li>
  </ul>
  </div>
  </div>
  <h4>Дополнительное</h4>
  <ul>
  <li><i class="far fa-check-circle mr-2"></i>Автораспрыжка и автострейф</li>
  <li><i class="far fa-check-circle mr-2"></i>Возможность убрать руки</li>
  <li><i class="far fa-check-circle mr-2"></i>Показывает ранги игроков в таблице</li>
  <li><i class="far fa-check-circle mr-2"></i>Вид от 3-го лица</li>
  <li><i class="far fa-check-circle mr-2"></i>Автопринятие игры</li>
  <li><i class="far fa-check-circle mr-2"></i>Настройка цветов отображения всех функций</li>
  <li><i class="far fa-check-circle mr-2"></i>Сохранение конфигурации чита</li>
  </ul>
  </div>
  </div>
  <div class="col-md-4">
  <div class="cheat-defblock p-4">
  <a class="btn btn-addon hvr-icon-pulse" href="http://blast-hack.ru/" target="_blank">Панель пользователя <i class="fas fa-tachometer-alt hvr-icon ml-2"></i></a>
  <hr>
  <p>Оценка пользователей</p>
  <div class="row ocenka">
  <i class="fas fa-star fa-2x"></i>
  <i class="fas fa-star fa-2x"></i>
  <i class="fas fa-star fa-2x"></i>
  <i class="fas fa-star fa-2x"></i>
  <i class="fas fa-star fa-2x"></i>
  </div>
  <hr>
  <p class="about-cheat-text">Системные требования <br />
  <span>ОС:</span> Windows 7 и выше<br />
   <span>Оперативная память:</span> 2ГБ<br />
  <span>Видеокарта:</span> 512Мб, поддержка DirectX 9<br />
  <span>Процесор:</span> Intel® Core™ 2 Duo E6600 or AMD Phenom™ X3 8750 или выше
  </p>
  <hr>
  <p class="about-cheat-text">Приватный чит BlastHack имеет полную защиту от обнаружения системой VAC</p>
  <p><img src="../img/rus_flag.webp"> Чит на русском языке</p>
  </div>
  </div>
  </div>
  <nav aria-label="breadcrumb" class="mt-3">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="../index.html" title="Главная">Главная</a></li>
  <li class="breadcrumb-item"><a href="index.html" title="Читы CS:GO">Читы для CS:GO</a></li>
  <li class="breadcrumb-item"><a href="blasthack.html#">BlastHack</a></li>
  </ol>
  </nav>
  </div>
</main>


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
