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
                      {{ __('Добро пожаловать') }} {{ auth()->user()->name }}
                    </div>
                    <div class="col-md-4">
                      <div class="row">
                        <div class="col-md-8 text-right">
                          <a href="{{ route('settings') }}">
                              <button class="btn btn-default">
                                  Настройки
                              </button>
                          </a>
                        </div>
                        <div class="col-md-4">
                          <form action="{{ route('admin.logout') }}" method="post">
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
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Покупка</th>
                        <th scope="col">Оставшиеся время действия</th>
                        <th scope="col">Действителен до</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Спуфер</td>
                        <td>720 часов</td>
                        <td>04.09.2020</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
