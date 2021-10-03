<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comercial;

class IndexController extends Controller
{
    public function index(Request $request)
    {

        $cabezales = Comercial::where("categoria_id","=",1)->get();
        $furgones = Comercial::where("categoria_id","=",2)->get();
        $carros = Comercial::where("categoria_id","=",4)->get();

        // dd($cabezales);

        return view('inicio.index')->with('cabezales',$cabezales)
                                   ->with('furgones',$furgones)
                                   ->with('carros',$carros);

    }
}
