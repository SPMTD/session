<?php

namespace App\Http\Controllers;

use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

class MapController extends Controller {
    public function index()
    {
        Mapper::map(51.911992, 4.481689);
        
        return view('map');
    }
}