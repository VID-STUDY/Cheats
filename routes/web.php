<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function () {
    Auth::routes(['register' => false,
        'reset' => false,
        'confirm' => false,
        'verify' => false]);
    Route::middleware(['auth.admin'])->group(function () {
        Route::get('/', 'DashboardController@index')->name('index');
        Route::resource('games', 'GameController');
        Route::resource('cheats', 'CheatController');
    });
});

Route::get('/', 'HomeController@index')->name('home');

Route::get('/about', 'HomeController@about')->name('about');

Route::get('/guarantees', 'HomeController@guarantees')->name('guarantees');

Route::get('/cooperation', 'HomeController@cooperation')->name('cooperation');

Route::get('/contacts', 'HomeController@contacts')->name('contacts');

Route::get('/spoofer', function () {
    return view('pages.spoofer');
})->name('spoofer');

Route::get('/user/settings', function () {
    return view('pages.settings');
})->name('settings');

Route::post('/settings', 'SettingsController@update')->name('settings_post');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|Это мы в телеграмме обсуждали. Те две страницы и шаблонизатор для них. Там скорее всего нужен слаг, но я правильно точно не сделаю)
| Поэтому пока вот так)
*/
Route::get('/chiti', function () {
    return view('cheats.chiti');
})->name('chiti');

Route::get('/chiti/podrobno', function () {
    return view('cheats.podrobno');
})->name('podrobno');

Route::get('/games', function () {
    return view('cheats.games');
})->name('games');

Route::get('/macros', function () {
    return view('cheats.macros');
})->name('macros');

Route::get('/user', function () {
    return view('pages.kabinet');
})->name('kabinet');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
