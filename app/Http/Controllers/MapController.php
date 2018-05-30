<?php

namespace App\Http\Controllers;

use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

class MapController extends Controller {
    public function index()
    {
        Mapper::map(51.917606, 4.488776);
        
        return view('map');
    }
}