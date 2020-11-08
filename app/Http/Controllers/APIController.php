<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Comercial;
use Illuminate\Http\Request;

class APIController extends Controller
{
    //Metodo para  todas las categorias
    public function categorias()
    {
        $categorias = Categoria::all();
        return response()->json($categorias);
    }

    //Muestra los cameriales de la categoria en especifico
    public function categoria(Categoria $categoria)
    {
        $comerciales = Comercial::where('categoria_id', $categoria->id)->with('categoria')->take(3)->get();
        return response()->json($comerciales);
    }

    //Muestra un comercial en especifico
    public function show(Comercial $comercial)
    {
      return response()->json($comercial);
    }

}
