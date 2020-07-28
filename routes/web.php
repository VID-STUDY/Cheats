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

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/guarantees', function () {
    return view('pages.guarantees');
})->name('guarantees');

Route::get('/cooperation', function () {
    return view('pages.cooperation');
})->name('cooperation');

Route::get('/contacts', function () {
    return view('pages.contacts');
})->name('contacts');


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
