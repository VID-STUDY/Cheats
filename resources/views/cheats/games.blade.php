@extends('app')

@section('title', 'Купить Читы')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/games.css') }}">
@endsection

@section('content')
    <div class="container mb-5">
        <nav aria-label="breadcrumb" class="mt-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" title="Главная">Главная</a></li>
                <li class="breadcrumb-item active">Читы</li>
            </ol>
        </nav>
        <h1 class="text-center mt-5">Читы</h1>
        <section id="games">
            <div class="row cheat-links pt-5 pb-4 text-center">
                @foreach($games as $game)
                    <div class="col pb-2">
                        <a href="{{ route('cheats.game', $game->slug) }}">
                            <div class="game" style="background-image: url('{{ asset('storage/' . $game->image) }}')"></div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    </div>

@endsection
