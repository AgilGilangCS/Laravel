<?php

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
    return view('main');
});
Route::get('/foo', function () {
    return 'Hai';
});
Route::post('/foo', function () {
    return 'Hai';
});
Route::put('/foo', function () {
    return 'Hai';
});
Route::delete('/foo', function () {
    return 'Hai';
});
Route::get('/user', function () {
    return view('web');
});
Route::get('user', 'UserController@index');

Route::redirect('/here', '/there');



Route::view('/welcome', 'welcome');

Route::view('/welcome', 'welcome', ['name' => 'Agil Gilang C.S']);
