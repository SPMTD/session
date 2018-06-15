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
    Mapper::map(51.916361, 4.482342, ['marker' => false, 'zoom' => 10, 'markers' => ['title' => 'Skate spot', 'animation' => 'DROP', 'icon' => 'http://app.sesami.fr/images/marker-black.svg']]);
    // Rotterdam
    Mapper::informationWindow(51.911992, 4.481689, 'Zalmhaven 5', ['open' => false, 'markers' => ['title' => 'Title']]);
    Mapper::informationWindow(51.907829, 4.512093, 'Skateland Rotterdam', ['open' => false, 'markers' => ['title' => 'Title']]);
    Mapper::informationWindow(51.916792, 4.476161, 'Skatebaan Westblaak', ['open' => false, 'markers' => ['title' => 'Title']]);
    Mapper::informationWindow(51.916361, 4.482342, 'Blauwe tien', ['open' => false, 'markers' => ['title' => 'Title']]);
    Mapper::informationWindow(51.917775, 4.482828, 'Verwoeste stad', ['open' => false, 'markers' => ['title' => 'Title']]);
    Mapper::informationWindow(51.917587, 4.481762, 'Maritime museum benches', ['open' => false, 'markers' => ['title' => 'Title']]);
    Mapper::informationWindow(51.915678, 4.476902, 'RSI The Attraction', ['open' => false, 'markers' => ['title' => 'Title']]);
    
    // Hellevoetsluis
    Mapper::informationWindow(51.834200, 4.122545, 'SPUG Hellevoetsluis', ['open' => false, 'markers' => ['title' => 'Title']]);

    // Oud-Beijerland
    Mapper::informationWindow(51.819588, 4.409488, 'Skatepark Oud-Beijerland', ['open' => false, 'markers' => ['title' => 'Title']]);
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/spots', 'SpotsController@index')->name('spots');
