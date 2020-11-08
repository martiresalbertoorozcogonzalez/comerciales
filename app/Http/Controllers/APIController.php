<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Comercial;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function categorias()
    {
        $categorias = Categoria::all();
        return response()->json($categorias);
    }

    public function categoria(Categoria $categoria)
    {
        $comerciales = Comercial::where('categoria_id', $categoria->id)->with('categoria')->take(3)->get();
        return response()->json($comerciales);
    }

}
