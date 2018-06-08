<?php

namespace App\Http\Controllers;

use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

class SpotsController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        Mapper::map(0, 0, ['marker' => false, 'zoom' => 10, 'markers' => ['title' => 'You are here', 'animation' => 'DROP', 'icon' => 'http://app.sesami.fr/images/marker-black.svg']]);
        Mapper::informationWindow(51.917606, 4.488776, 'Wijnhaven 99', ['open' => true, 'markers' => ['title' => 'Title']]);
        return view('spots');
    }
}