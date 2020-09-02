@extends('app')

@section('title', 'Контактные данные')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
<section id="contacts">
<div class="container" style="padding-bottom: 15%;">
  <h1 class="text-center mt-4 mb-4">Контакты</h1>
  <h2 class="text-center">Данные персонала</h2>
  <hr>
  <p class="contact_item text-muted"><i class="fas fa-user-circle"></i> Leax3201#3201 | <i class="fas fa-male"></i> Продавец</p>
  <p class="contact_item text-muted"><i class="fas fa-user-circle"></i> UnDERLY#4633  | <i class="fas fa-male"></i> Кодер</p>
  <h2 class="text-center mt-3">Данные проекта</h2>
  <hr>
  <p class="contact_item text-muted"><i class="fas fa-globe"></i> Основной сайт - <a href="{{ route('home') }}" target="_blank">dragoncheats.ru</a></p>
  <p class="contact_item text-muted">Наш дискорд - <a href="https://discord.gg/GtHkHjg" target="_blank"><i class="fab fa-discord fa-lg"></i></a></p>

</div>
</section>




@endsection
