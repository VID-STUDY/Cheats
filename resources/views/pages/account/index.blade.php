@extends('app')

@section('title', 'Личный кабинет')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    <div class="container m-auto pl-5 pt-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-8">
                                {{ __('Добро пожаловать') }} {{ $user->name }}
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-8 text-right">
                                        <a href="{{ route('account.settings') }}">
                                            <button class="btn btn-default">
                                                Настройки
                                            </button>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <button class="btn btn-default">
                                                Выйти
                                            </button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        @if ($subscriptions->count() > 0)
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Покупка</th>
                                    <th scope="col">Оставшиеся время действия</th>
                                    <th scope="col">Действителен до</th>
                                    <th scope="col">Файл</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($subscriptions as $subscription)
                                    <tr>
                                        <td>{{ $subscription->id }}</td>
                                        <td>{{ $subscription->cheat->name }}</td>
                                        <td>{{ $subscription->remainingTime() }} часов</td>
                                        <td>{{ $subscription->validUntil()->format('d.m.Y h:i:s') }}</td>
                                        <td><a href="{{ asset('storage/' . $subscription->filename) }}" class="btn btn-default">Скачать</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <p class="text-center">У вас ещё нет покупок</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
