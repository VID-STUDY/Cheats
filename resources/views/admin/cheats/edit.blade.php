@extends('layouts.app')

@section('title', "Чит $cheat->name")

@section('content')
    <h2 class="content-heading">Читы</h2>
    <form action="{{ route('admin.cheats.update', $cheat->slug) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Чит {{ $cheat->name }}</h3>
                <div class="block-options">
                    <button type="submit" class="btn btn-alt-success"><i class="si si-check mr-5"></i>Сохранить</button>
                </div>
            </div>
            <div class="block-content">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group @error('name') is-invalid @enderror">
                            <div class="form-material floating">
                                <input type="text" name="name" id="name" value="{{ $cheat->name}}" class="form-control">
                                <label for="name">Название чита</label>
                            </div>
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group @error('type') is-invalid @enderror">
                            <div class="form-material floating">
                                <select type="text" name="type" id="type" class="form-control">
                                    <option @if ($cheat->type == 'spoofer') selected @endif value="spoofer">Спуфер</option>
                                    <option @if ($cheat->type == 'cheat') selected @endif value="cheat">Чит</option>
                                    <option @if ($cheat->type == 'macros') selected @endif value="macros">Макрос</option>
                                </select>
                                <label for="type">Тип</label>
                            </div>
                            @error('type')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group @error('description') is-invalid @enderror">
                            <div class="form-material floating">
                                <textarea name="description" id="description" cols="30" rows="5"
                                          class="form-control">{{ $cheat->description }}</textarea><label
                                    for="description">Описание</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group @error('release_date') is-invalid @enderror">
                            <div class="form-material floating">
                                <input type="text" name="release_date" id="release_date" value="{{ $cheat->release_date  }}" class="form-control">
                                <label for="release_date">Дата релиза</label>
                            </div>
                            @error('release_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group @error('manufacturer') is-invalid @enderror">
                            <div class="form-material floating">
                                <input type="text" name="manufacturer" id="manufacturer" value="{{ $cheat->manufacturer }}" class="form-control">
                                <label for="manufacturer">Разработчик</label>
                            </div>
                            @error('manufacturer')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group @error('image') is-invalid @enderror">
                            <div class="form-material">
                                <input type="file" name="image" id="image" class="form-control" accept="image/png, image/jpeg">
                                <label for="image">Изображение</label>
                            </div>
                            @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        @if ($cheat->image)
                            <img src="{{ asset('storage/'.$cheat->image) }}" alt="{{ $cheat->name }}" class="img-thumbnail">
                        @endif
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <div class="form-material">
                                <input type="file" name="images[]" multiple id="images" class="form-control" accept="image/png, image/jpeg">
                                <label for="images">Скрины из игры</label>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($cheat->images as $image)
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <img src="{{ asset('storage/' . $image->image) }}" alt="" class="img-thumbnail">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group @error('file') is-invalid @enderror">
                            <div class="form-material">
                                <input type="file" name="file" id="file" class="form-control" accept=".zip, .rar">
                                <label for="image">Программа</label>
                                <div class="form-text text-muted text-right">Архив с программой и инструкцией</div>
                            </div>
                            @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        @if ($cheat->file)
                            <a href="{{ asset('storage/'.$cheat->file) }}" class="btn btn-alt-primary"><i class="fa fa-download"></i> Скачать</a>
                        @endif
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <div class="form-material floating">
                                <textarea name="system_requirements" id="system_requirements" cols="30" rows="8"
                                          class="form-control">{{ $cheat->system_requirements }}</textarea>
                                <label for="system_requirements">Системные требования</label>
                                <div class="form-text text-muted text-right">Перечислите системные требования через точку с запятой</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <div class="form-material floating">
                                <textarea name="functional" id="functional" cols="30" rows="8" class="form-control">{{ $cheat->functional }}</textarea>
                                <label for="functional">Функционал</label></div>
                            <div class="form-text text-muted text-right">Перечислите основные элементы через точку с запятой</div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <div class="form-material floating">
                                <textarea name="additional_info" id="additional_info" cols="30" rows="8" class="form-control">{{ $cheat->additional_info }}</textarea>
                                <label for="additional_info">Дополнительная информация</label></div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group @error('game_id') is-invalid @enderror">
                            <div class="form-material floating">
                                <select type="text" name="game_id" id="game_id" class="form-control">
                                    @foreach($games as $game)
                                        <option @if ($cheat->game_id == $game->id) selected @endif value="{{ $game->id }}">{{ $game->name }}</option>
                                    @endforeach
                                </select>
                                <label for="game_id">Игра</label>
                            </div>
                            @error('game_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <div class="form-material floating">
                                <input type="number" name="sort_order" id="sort_order" min="1" value="{{ $cheat->sort_order }}" class="form-control">
                                <label for="sort_order">Порядковый номер</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Периоды подписки</h3>
                <div class="block-options">
                    <button type="button" id="addDurationButton" class="btn btn-alt-primary"><i class="si si-plus"></i> Добавить период</button>
                </div>
            </div>
            <div class="block-content" id="durationsContainer">
                @foreach($cheat->durations as $key => $duration)
                    <div id="duration{{ $key }}">
                        <div class="d-flex justify-content-end">
                            <button type="button" data-target-id="duration{{ $key }}" class="btn btn-alt-danger delete-duration-button"><i class="fa fa-trash"></i> Удалить</button>
                        </div>
                        <div class="row">
                            <div class="col-ms-12 col-md-6">
                                <div class="form-group">
                                    <div class="form-material floating">
                                        <input type="text" name="durations[{{ $key }}][duration]" id="duration{{ $key }}duration"
                                               class="form-control" value="{{ $duration->duration }}"><label
                                            for="duration{{ $key }}duration">Период</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-ms-12 col-md-6">
                                <div class="form-group">
                                    <div class="form-material floating">
                                        <input type="text" name="durations[{{ $key }}][price]" id="duration{{ $key }}price"
                                               class="form-control" value="{{ $duration->price }}"><label
                                            for="duration{{ $key }}price">Цена</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Особенности</h3>
                <div class="block-options">
                    <button type="button" id="addFeatureButton" class="btn btn-alt-primary"><i class="si si-plus"></i> Добавить особенность</button>
                </div>
            </div>
            <div class="block-content" id="featuresContainer">
                @foreach($cheat->features as $key => $feature)
                    <div id="feature{{ $key }}">
                        <div class="d-flex justify-content-end">
                            <button type="button" data-target-id="feature{{ $key }}" class="btn btn-alt-danger delete-feature-button"><i class="fa fa-trash"></i> Удалить</button>
                        </div>
                        <div class="row">
                            <div class="col-ms-12 col-md-6">
                                <div class="form-group">
                                    <div class="form-material floating">
                                        <input type="text" name="features[{{ $key }}][icon]" id="features{{ $key }}icon"
                                               class="form-control" value="{{ $feature->icon }}"><label
                                            for="features{{ $key }}icon">Иконка</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-ms-12 col-md-6">
                                <div class="form-group">
                                    <div class="form-material floating">
                                        <input type="text" name="features[{{ $key }}][name]" id="features{{ $key }}name"
                                               class="form-control" value="{{ $feature->name }}"><label
                                            for="features{{ $key }}name">Текст</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </form>
    <template id="duration-template">
        <div id="duration{0}">
            <div class="d-flex justify-content-end">
                <button type="button" data-target-id="duration{0}" class="btn btn-alt-danger delete-duration-button"><i class="fa fa-trash"></i> Удалить</button>
            </div>
            <div class="row">
                <div class="col-ms-12 col-md-6">
                    <div class="form-group">
                        <div class="form-material floating">
                            <input type="text" name="durations[{0}][duration]" id="duration{0}duration"
                                   class="form-control"><label
                                for="duration{0}duration">Период</label>
                        </div>
                    </div>
                </div>
                <div class="col-ms-12 col-md-6">
                    <div class="form-group">
                        <div class="form-material floating">
                            <input type="text" name="durations[{0}][price]" id="duration{0}price"
                                   class="form-control"><label
                                for="duration{0}price">Цена</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>
    <div id="duration-counter" class="d-none">{{ $cheat->durations()->count() }}</div>
    <template id="feature-template">
        <div id="feature{0}">
            <div class="d-flex justify-content-end">
                <button type="button" data-target-id="feature{0}" class="btn btn-alt-danger delete-feature-button"><i class="fa fa-trash"></i> Удалить</button>
            </div>
            <div class="row">
                <div class="col-ms-12 col-md-6">
                    <div class="form-group">
                        <div class="form-material floating">
                            <input type="text" name="features[{0}][icon]" id="features{0}icon"
                                   class="form-control"><label
                                for="features{0}icon">Иконка</label>
                        </div>
                    </div>
                </div>
                <div class="col-ms-12 col-md-6">
                    <div class="form-group">
                        <div class="form-material floating">
                            <input type="text" name="features[{0}][name]" id="features{0}name"
                                   class="form-control"><label
                                for="features{0}name">Текст</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>
    <div id="feature-counter" class="d-none">{{ $cheat->features()->count() }}</div>
@endsection

@section('js')
    <script src="{{ asset('assets/js/cheatForm.js') }}"></script>
@endsection
