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
        <div class="row cheat-links pt-5 pb-4 d-flex justify-content-center">
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

@endsection
