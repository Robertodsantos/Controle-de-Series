<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = ['Stranger Things',
        'First Love',
        'Castlevania'];
    
        return view('series.index', compact('series'));

        //['series' => $series], assim passamos o conteúdo de uma variável da controller para uma view

    }
    
     public function create()
    {
        return view('series.create');

    }
}
