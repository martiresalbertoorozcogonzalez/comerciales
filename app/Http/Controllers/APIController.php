<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Comercial;
use App\Imagen;
use Illuminate\Http\Request;

class APIController extends Controller
{

    //Metodo para obtener todos los comerciales o establecimientos
    public function index()
    {
      $comerciales = Comercial::with('categoria')->get();

      return response()->json($comerciales);
    }

    //Metodo para  todas las categorias
    public function categorias()
    {
        $categorias = Categoria::all();
        return response()->json($categorias);
    }

    //Muestra los camerciales de la categoria especifica
    public function categoria(Categoria $categoria)
    {
        $comerciales = Comercial::where('categoria_id', $categoria->id)->with('categoria')->take(3)->get();
        return response()->json($comerciales);
    }

    public function comercialescategoria(Categoria $categoria)
    {
        $comerciales = Comercial::where('categoria_id', $categoria->id)->with('categoria')->get();
        return response()->json($comerciales);
    }

    //Muestra un comercial en especifico
    public function show(Comercial $comercial)
    {

      $imagenes = Imagen::where('id_establecimiento', $comercial->uuid)->get();
      $comercial->imagenes = $imagenes;

      return response()->json($comercial);

    }

}
