@extends('layouts.app')

@section('title', 'Добавить чит')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
@endsection

@section('content')
    <h2 class="content-heading">Читы</h2>
    <form action="{{ route('admin.cheats.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Добавить чит</h3>
                <div class="block-options">
                    <button type="submit" class="btn btn-alt-success"><i class="si si-check mr-5"></i>Добавить</button>
                </div>
            </div>
            <div class="block-content">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group @error('name') is-invalid @enderror">
                            <div class="form-material floating">
                                <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control">
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
                                    <option @if (old('type') == 'spoofer') selected @endif value="spoofer">Спуфер
                                    </option>
                                    <option @if (old('type') == 'cheat') selected @endif value="cheat">Чит</option>
                                    <option @if (old('type') == 'macros') selected @endif value="macros">Макрос</option>
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
                                          class="form-control"></textarea><label
                                    for="description">Описание</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group @error('release_date') is-invalid @enderror">
                            <div class="form-material floating">
                                <input type="text" name="release_date" id="release_date"
                                       value="{{ old('release_date') }}" class="form-control">
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
                                <input type="text" name="manufacturer" id="manufacturer"
                                       value="{{ old('manufacturer') }}" class="form-control">
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
                                <input type="file" name="image" id="image" class="form-control"
                                       accept="image/png, image/jpeg">
                                <label for="image">Главное изображение</label>
                            </div>
                            @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <div class="form-material">
                                <input type="file" name="images[]" multiple id="images" class="form-control"
                                       accept="image/png, image/jpeg">
                                <label for="images">Скрины из игры</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group @error('file') is-invalid @enderror">
                            <div class="form-material">
                                <input type="file" name="file" id="file" class="form-control" accept=".zip">
                                <label for="image">Программа</label>
                                <div class="form-text text-muted text-right">Архив с программой и инструкцией</div>
                            </div>
                            @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <div class="form-material floating">
                                <textarea name="system_requirements" id="system_requirements" cols="30" rows="8"
                                          class="form-control"></textarea>
                                <label for="system_requirements">Системные требования</label>
                                <div class="form-text text-muted text-right">Перечислите системные требования через
                                    точку с запятой
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <div class="form-material floating">
                                <textarea name="functional" id="functional" cols="30" rows="8"
                                          class="form-control"></textarea>
                                <label for="functional">Функционал</label></div>
                            <div class="form-text text-muted text-right">Перечислите основные элементы через точку с
                                запятой
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <div class="form-material floating">
                                <textarea name="additional_info" id="additional_info" cols="30" rows="8"
                                          class="form-control"></textarea>
                                <label for="additional_info">Дополнительная информация</label></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-ms-12 col-md-6">
                    <div class="form-group">
                        <div class="form-material floating">
                            <input type="text" class="form-control js-colorpicker" name="color" id="color" value="{{ old('color') }}">
                            <label for="color">Цвет текста</label>
                        </div>
                    </div>
                </div>
                <div class="col-ms-12 col-md-6">
                    <div class="form-group">
                        <div class="form-material floating">
                            <input type="text" name="status" id="status" class="form-control" value="{{ old('status') }}">
                            <label for="status">Статус</label>
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
                                    <option @if (old('game_id') == $game->id) selected
                                            @endif value="{{ $game->id }}">{{ $game->name }}</option>
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
                            <input type="number" name="sort_order" id="sort_order" min="1" value="1"
                                   class="form-control">
                            <label for="sort_order">Порядковый номер</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Периоды подписки</h3>
                <div class="block-options">
                    <button type="button" id="addDurationButton" class="btn btn-alt-primary"><i class="si si-plus"></i>
                        Добавить период
                    </button>
                </div>
            </div>
            <div class="block-content" id="durationsContainer">

            </div>
        </div>
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Особенности</h3>
                <div class="block-options">
                    <button type="button" id="addFeatureButton" class="btn btn-alt-primary"><i class="si si-plus"></i>
                        Добавить особенность
                    </button>
                </div>
            </div>
            <div class="block-content" id="featuresContainer">

            </div>
        </div>
    </form>
    <template id="duration-template">
        <div id="duration{0}">
            <div class="d-flex justify-content-end">
                <button type="button" data-target-id="duration{0}" class="btn btn-alt-danger delete-duration-button"><i
                        class="fa fa-trash"></i> Удалить
                </button>
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
            <div class="row">
                <div class="col-sm-12 form-group">
                    <div class="form-material floating">
                        <input type="text" name="durations[{0}][payment_link]" id="duration{0}payment_link" class="form-control">
                        <label for="duration{0}payment_link">Ссылка на оплату</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <div class="form-material floating">
                        <input type="text" name="durations[{0}][digiseller_product_id]" id="duration{0}digiseller_product_id" class="form-control">
                        <label for="duration{0}digiseller_product_id">ID товара на Digiseller</label>
                    </div>
                </div>
            </div>
        </div>
    </template>
    <div id="duration-counter" class="d-none">0</div>
    <template id="feature-template">
        <div id="feature{0}">
            <div class="d-flex justify-content-end">
                <button type="button" data-target-id="feature{0}" class="btn btn-alt-danger delete-feature-button"><i
                        class="fa fa-trash"></i> Удалить
                </button>
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
    <div id="feature-counter" class="d-none">0</div>
@endsection

@section('js')
    <script src="{{ asset('assets/js/cheatForm.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <script>
        Codebase.helper('colorpicker');
    </script>
@endsection
