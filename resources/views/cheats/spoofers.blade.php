@extends('app')

@section('title', 'Спуферы')

@section('content')
    <div class="container mb-5">
        <nav aria-label="breadcrumb" class="mt-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" title="Главная">Главная</a></li>
                <li class="breadcrumb-item active">Спуферы</li>
            </ol>
        </nav>
        <h1 class="text-center mt-5">Спуферы</h1>
        <div class="row cheat-links pt-5 pb-4">
            @foreach($spoofers as $spoofer)
            <div class="col-md-4 animated flipInX">
                <a href="{{ route('cheats.spoofer', $spoofer->slug) }}" title="{{ $spoofer->name }}">
                    <div class="dragon-hack d-flex hvr-grow">
                        <div class="m-auto pt-3 pb-3">
                            <img src="{{ asset('storage/' . $spoofer->image) }}" class="img-fluid" alt="{{ $spoofer->name }}">
                            <h2 @if ($spoofer->color) style="color: {{ $spoofer->color }}" @endif>{{ $spoofer->name }}</h2>
                            <ul>
                                @foreach($spoofer->features as $feature)
                                    <li><i class="{{ $feature->icon }} mr-2"></i>{{ $feature->name }}</li>
                                @endforeach
                            </ul>
                            @if ($spoofer->status)
                                <span>{{ $spoofer->status }}</span>
                            @endif
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

@endsection
