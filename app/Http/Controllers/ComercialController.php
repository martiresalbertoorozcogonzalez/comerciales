<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Comercial;
use Illuminate\Http\Request;

class ComercialController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('comercial.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validacion
        $data = $request->validate([
           'nombre' => 'required',
           'categoria_id' => 'required|exists:App\Categpria,id',
           'imagen_principal' => 'required|image|1000',
           'direccion' => 'required',
           'colonia' => 'required',
           'lat' => 'required',
           'lng' => 'required',
           'telefono' => 'required|numeric',
           'descripcion' => 'required|min:50',
           'apertura' => 'date_format:H:1',
           'cierre' => 'date_format:H:1|after:apertura',
           'uuid' => 'required|uuid'
        ]);

        dd("Desde store");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comercial  $comercial
     * @return \Illuminate\Http\Response
     */
    public function show(Comercial $comercial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comercial  $comercial
     * @return \Illuminate\Http\Response
     */
    public function edit(Comercial $comercial)
    {
        return "Desde edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comercial  $comercial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comercial $comercial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comercial  $comercial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comercial $comercial)
    {
        //
    }
}
