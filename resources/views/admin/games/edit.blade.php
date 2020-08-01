@extends('layouts.app')

@section('title', "Игра {$game->name}")

@section('content')
    <h2 class="content-heading">Игры</h2>
    <form action="{{ route('admin.games.update', $game->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Игра {{ $game->name }} <small>Редактировать</small></h3>
                <div class="block-options">
                    <button type="submit" class="btn btn-alt-success"><i class="fa fa-save mr-5"></i>Сохранить</button>
                </div>
            </div>
            <div class="block-content">
                <div class="form-group @error('name') is-invalid @enderror">
                    <div class="form-material floating">
                        <input type="text" name="name" id="name" value="{{ $game->name }}" class="form-control">
                        <label for="name">Название игры</label>
                    </div>
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group @error('short_description') is-invalid @enderror">
                    <div class="form-material floating">
                        <textarea name="short_description" id="short_description" rows="3"
                                  class="form-control">{{ $game->short_description }}</textarea>
                        <label for="short_description">Краткое описание игры</label>
                    </div>
                    @error('short_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group @error('description') is-invalid @enderror">
                    <div class="form-material floating">
                        <textarea name="description" id="description" rows="3"
                                  class="form-control">{{ $game->description }}</textarea>
                        <label for="description">Описание игры</label>
                    </div>
                    @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group @error('image') is-invalid @enderror">
                    <div class="form-material">
                        <input type="file" name="image" id="image" class="form-control" accept="image/png, image/jpeg">
                        <label for="image">Изображение</label>
                    </div>
                    @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <img src="{{ asset('storage/' . $game->image) }}" alt="{{ $game->name }}" class="img-thumbnail">
                <div class="form-group">
                    <div class="form-material floating">
                        <input type="number" name="sort_order" id="sort_order" min="1" value="1" class="form-control">
                        <label for="sort_order">Порядковый номер</label>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
