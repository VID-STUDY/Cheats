@extends('app')

@section('title', 'Купить Макросы')

@section('header')
    @include('layouts.header')
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('css/games.css') }}">
@endsection

@section('content')
<section id="games">
<div class="row cheat-links pt-5 pb-4 text-center">
    <div class="col pb-2">
      <a href="{{ route('chiti') }}">
        <div class="cheats-r6"></div>
      </a>
    </div>
    <div class="col pb-2">
      <a href="{{ route('chiti') }}">
        <div class="cheats-paladins"></div>
      </a>
    </div>
    <div class="col pb-2">
      <a href="{{ route('chiti') }}">
        <div class="cheats-cs-go"></div>
      </a>

</div>
</section>

@endsection
