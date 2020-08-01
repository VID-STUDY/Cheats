@extends('app')

@section('title', 'Купить Спуфер')

@section('header')
    @include('layouts.header')
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/spoofer.css') }}">
@endsection

@section('content')
<section id="spoofer">
  <center>
    <h2><label id="labelnamespoofer" style="font-size: 32;">Dragon's Breath Spoofer</label></h2>
    </br>
    <label style="color:#320a18;" id="infolabel">Информация о спуфере: </label>
  </center>
<p>
  <center>
    <label id="infolabel2"></br>
      Этот софт помогает снять бан по железу, меняет практически все данные компьютера, железа и телеметрии, </br>нужные для определения вашего компьютера античитами.</br>
      ------------------------------------------------------------------------</br>
      Статус: Undetected</br>
      Античит: EAC/BE</br>
      <label style="color:#B22222;">------------------------------------------------------------------------</br>
       После оплаты вы получаете товар и подробную инструкцию. </br>При возникновении проблем можно обратится в нашу тех.поддержку!</br>
      ------------------------------------------------------------------------</label></br>
      <label style="color:#000000;">Поддерживаемые игры: Apex Legends, EFT, Arma 3, Pubg, Fortnite и другие. </br>За уточнением о работоспособности в других играх - уточнять в ЛС, по контактам ниже.</br>

      </br>Меняет:</br>
      * Вся телеметрия Windows (Около 25-ти параметров)</br>
      * MACadress</br>
      * HardwareGUID</br>
      * HWID</br>
      * SerialNumber Hardware</br>
      * HDD/SSD ID</br>
      * Motherboard model and Serial number</br>
      * Bios ID and Serial</br>
      * CPU</label></br></br>
      <label style="color:#808080;" >-----------------------------------------------------------------------</br>
      Цена: 500р/месяц</label>
      </br>
    </label>
  </center>
</p>

<center>
  <p>
    <img style="margin-bottom: 30px;margin-top: 30px;" src="https://cdn.discordapp.com/attachments/712443748629610506/735168781541703700/ggg.png" alt="spoofer_img">
  </p>
  <form method="POST" action="https://money.yandex.ru/quickpay/confirm.xml">
    <input type="hidden" name="receiver" value="410015579702003">
    <input type="hidden" name="formcomment" value="Spoofer">
    <input type="hidden" name="short-dest" value="Spoofer">
    <input type="hidden" name="label" value="$order_id">
    <input type="hidden" name="quickpay-form" value="donate">
    <input type="hidden" name="targets" value="Spoofer">
    <input type="hidden" name="sum" value="500" data-type="number">
    <input type="hidden" name="comment" value="Лучший спуфер.">
    <input type="hidden" name="need-fio" value="false">
    <input type="hidden" name="need-email" value="false">
    <input type="hidden" name="need-phone" value="false">
    <input type="hidden" name="need-address" value="false">
    <input type="hidden" name="paymentType" value="AC">
    <input type="submit" id="buyit" value="Купить">
  </form>
</center>
<div class="footer">
    <center><label style="color:#fff;margin-left:80;" id="infolabe3"><strong>Наш официальный дискорд сервер: </strong>https://discord.gg/GtHkHjg </br><label>
            Наши контакты: </br>
            Продавец: Leax3201#3201</br>
            Кодер: MrFalope6870#9999</br>
        </center>
      </div>
</section>
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
