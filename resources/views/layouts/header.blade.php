<header class="container py-3">
  <div class="row flex-nowrap justify-content-between align-items-center">
    <div class="col-4 pt-1 socials">
      <!-- <a class="text-muted mr-2 hvr-push" href="https://vk.com/satanosoft" target="_blank" title="Мы ВКонтакте"><i class="fab fa-vk fa-lg"></i></a> -->
      <a class="text-muted hvr-push" href="https://discord.gg/GtHkHjg" target="_blank"><i class="fab fa-discord fa-lg"></i></a>
    </div>
    <div class="col-4 text-center logo-text">
      <a class="header-logo text-theme" title="Главная страница WH-SATANO" href="{{ route('home') }}">DragonBreath</a>
    </div>
    <div class="col-4 d-flex justify-content-end align-items-center">
    </div>
  </div>
</header>


<nav class="navbar navbar-expand-lg navbar-dark bg-theme">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-md-center" id="menu">
    <ul class="navbar-nav satano-nav">
      <li class="nav-item pl-1 pr-1">
        <a class="nav-link text-white" href="{{ route('home') }}">Главная</a>
      </li>
      <li class="nav-item pl-1 pr-1">
        <a class="nav-link text-white" href="{{ route('cheats.spoofers') }}">Спуфер</a>
      </li>
      <li class="nav-item pl-1 pr-1">
        <a class="nav-link text-white" href="{{ route('cheats.games') }}">Читы</a>
      </li>
      <li class="nav-item pl-1 pr-1">
        <a class="nav-link text-white" href="{{ route('about') }}">О нас</a>
      </li>
      <li class="nav-item pl-1 pr-1">
        <a class="nav-link text-white" href="{{ route('contacts') }}">Контакты</a>
      </li>
      <!--
      <li class="nav-item pl-1 pr-1">
        <a class="nav-link text-white" href="{{ route('about') }}">О нас</a>
      </li> -->
      @if(Auth::check())
      <li class="nav-item pl-1 pr-1">
        <a class="nav-link text-white" href="{{ route('account') }}">Личный кабинет</a>
      </li>
      @else
        <li class="nav-item pl-1 pr-1">
          <a class="nav-link text-white" href="{{ route('login') }}">Авторизация</a>
        </li>
      @endif

    </ul>
  </div>
</nav>
