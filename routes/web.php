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

use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

Route::get('/', function () {
    Mapper::map(0, 0, ['marker' => false, 'zoom' => 10, 'markers' => ['title' => 'You are here', 'animation' => 'DROP', 'icon' => 'http://app.sesami.fr/images/marker-black.svg']]);
    Mapper::informationWindow(51.917606, 4.488776, 'Location 1<hr>Location 2', ['open' => true, 'markers' => ['title' => 'Title']]);
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
