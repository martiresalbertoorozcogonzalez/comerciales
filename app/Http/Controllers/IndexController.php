<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comercial;

class IndexController extends Controller
{
    public function index(Request $request)
    {

        $cabezales = Comercial::where("categoria_id","=",1)->get();

        // dd($cabezales);

        return view('inicio.index')->with('cabezales',$cabezales);
    }
}
