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

// Cheats routes
Route::get('/spoofers', 'CheatsController@spoofers')->name('cheats.spoofers');
Route::get('/spoofers/{cheat}', 'CheatsController@spoofer')->name('cheats.spoofer');
Route::get('/cheats', 'CheatsController@games')->name('cheats.games');
Route::get('/cheats/{game}', 'CheatsController@game')->name('cheats.game');
Route::get('/cheats/{game}/{cheat}', 'CheatsController@cheat')->name('cheats.cheat');
Route::post('/cheats/{cheat}/buy', 'CheatsController@buy')->middleware('auth')->name('cheats.buy');

Route::get('/spoofer', function () {
    return view('pages.spoofer');
})->name('spoofer');

Route::get('/account/settings', 'AccountController@settings')->name('account.settings');

Route::post('/account/settings', 'AccountController@storeSettings')->name('account.settings.save');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|Это мы в телеграмме обсуждали. Те две страницы и шаблонизатор для них. Там скорее всего нужен слаг, но я правильно точно не сделаю)
| Поэтому пока вот так)
*/

Route::get('/account', 'AccountController@index')->name('account');

Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
