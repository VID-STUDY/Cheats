<!-- <script type="b1ea62bcaea4d15c382a1a91-text/javascript">
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

</style> -->
<footer class="pb-1 pt-4">
  <div class="container text-center">
    <div class="row">
      <div class="col-md-4">
        <h5>Навигация</h5>
        <ul class="list-group text-muted pl-4 pr-4">
          <li><a href="{{ route('home') }}" class="hvr-icon-pulse" title="Главная страница"><i class="fas fa-home hvr-icon mr-3"></i>Главная</a></li>
          <!-- <li><a href="sitemap.xml" class="hvr-icon-pulse" title="Карта сайта"><i class="fas fa-sitemap hvr-icon mr-3"></i>Карта сайта</a></li>
          <li><a href="blog.html" class="hvr-icon-pulse" title="Блог"><i class="far fa-newspaper mr-3"></i>Игровой блог</a></li> -->
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Полезные ссылки</h5>
          <ul class="list-group text-muted pl-4 pr-4">

          <li><a href="https://discord.gg/GtHkHjg" class="hvr-icon-pulse" title="Сотрудничество"><i class="far fa-handshake mr-2"></i>Дискорд</a></li>

        </ul>
      </div>
      <div class="col-md-4">
        <h5>Разделы сайта</h5>
        <ul class="list-group text-muted pl-4 pr-4">
            <!-- @foreach($lastCheats as $lastCheat)
                @if ($lastCheat->type !== 'spoofer' and !$lastCheat->game)
                    @continue
                @endif
                <li><a href="@if ($lastCheat->type == 'spoofer') {{ route('cheats.spoofer', $lastCheat->slug) }} @else {{ route('cheats.cheat', ['game' => $lastCheat->game->slug, 'cheat' => $lastCheat->slug]) }} @endif" class="hvr-icon-pulse" title="{{ $lastCheat->name }}"><i class="fas fa-angle-right hvr-icon mr-2"></i>{{ $lastCheat->name }}</a></li>
            @endforeach -->
            <li><a href="{{ route('home') }}" class="hvr-icon-pulse"><i class="fas fa-angle-right hvr-icon mr-2"></i>Главная</a></li>
            <li><a href="{{ route('cheats.games') }}" class="hvr-icon-pulse"><i class="fas fa-angle-right hvr-icon mr-2"></i>Читы</a></li>
            <li><a href="{{ route('cheats.spoofers') }}" class="hvr-icon-pulse"><i class="fas fa-angle-right hvr-icon mr-2"></i>Спуфер</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-12 text-muted text-center mt-5">
    <p>Copyright © DragonBreath inc., 2015-2020</p>

    </div>
  </div>
</footer>
