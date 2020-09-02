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


    
  @yield('js')
  </body>
</html>
