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
                          <a href="{{ route('kabinet') }}">
                              <button class="btn btn-default">
                                  Покупки
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
                  <form method="POST" action="{{ route('settings_post') }}">
                      @csrf
                      <input type="hidden" name="user_id" value="{{ auth()->user()->id}}">
                      <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Имя') }}</label>

                          <div class="col-md-6">
                              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ auth()->user()->name }}" required autocomplete="name" autofocus>

                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <!-- <div class="form-group row">
                          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail адресс') }}</label>

                          <div class="col-md-6">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ auth()->user()->email }}" required autocomplete="email">

                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div> -->


                      <div class="form-group row">
                          <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Новый пароль') }}</label>

                          <div class="col-md-6">
                              <input id="password-confirm" type="password" class="form-control" name="password" autocomplete="new-password">
                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary" style="background:#808080">
                                  {{ __('Сохранить') }}
                              </button>
                          </div>
                      </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
