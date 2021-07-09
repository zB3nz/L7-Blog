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
/*
Route::get('/', function () {
    return view('welcome');
});
o
Route::view('/', 'welcome');
*/

Route::get('/', 'PageController@posts');
Route::get('blog/{post:slug}', 'PageController@post')->name('post');

Route::resource('posts', 'Backend\PostController')
    ->middleware('auth')
    ->except('show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
