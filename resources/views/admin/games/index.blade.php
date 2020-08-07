@extends('layouts.app')

@section('title', 'Игры')

@section('content')
    <h2 class="content-heading">Игры</h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Список игр</h3>
            <div class="block-options">
                <a href="{{ route('admin.games.create') }}" class="btn btn-sm btn-alt-primary"><i class="si si-plus mr-5"></i>Добавить игру</a>
            </div>
        </div>
        <div class="block-content">
            @if ($games->count() > 0)
                <ul class="list-group list-group-flush mb-20">
                    @foreach($games as $game)
                        <li class="list-group-item-action d-flex justify-content-between align-items-center py-15">
                            <span class="d-flex align-items-center ml-5"><img src="{{ asset('storage/' . $game->image) }}" alt="" class="img-avatar img-avatar32 mr-10">{{ $game->name }}</span>
                            <span class="d-flex align-items-center justify-content-between">
                                <a href="{{ route('admin.games.edit', $game->id) }}" class="btn btn-alt-warning mr-5" data-toggle="tooltip" title="Редактировать"><i class="fa fa-edit"></i></a>
                                <form action="{{ route('admin.games.destroy', $game->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-alt-danger mr-20" data-toggle="tooltip" title="Удалить"><i class="si si-trash"></i></button>
                                </form>
                            </span>
                        </li>
                    @endforeach
                </ul>
            @else
                <div class="py-30 text-center">
                    <i class="si si-ghost text-primary display-3"></i>
                    <p class="mt-20 font-size-h5">There are no games</p>
                </div>
            @endif
        </div>
    </div>
@endsection
