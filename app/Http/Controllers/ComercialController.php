<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Comercial;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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
           'categoria_id' => 'required|exists:App\Categoria,id',
           'imagen_principal' => 'required|image|max:1000',
           'direccion' => 'required',
           'colonia' => 'required',
           'lat' => 'required',
           'lng' => 'required',
           'telefono' => 'required|numeric',
           'descripcion' => 'required|min:50',
           'apertura' => 'date_format:H:i',
           'cierre' => 'date_format:H:i|after:apertura',
           'uuid' => 'required|uuid'
        ]);

        //Guardar la imagen
        $ruta_imagen = $request['imagen_principal']->store('principales','public');

        // Rezise a la imagen
        $img = Image::make(public_path("storage/{$ruta_imagen}") )->fit(800,600);
        $img->save();

        //Guardar en la BD
        auth()->user()->comercial()->create([
            'nombre' => $data['nombre'],
            'categoria_id' => $data['categoria_id'],
            'imagen_principal' => $ruta_imagen,
            'direccion' => $data['direccion'],
            'colonia' => $data['colonia'],
            'lat' => $data['lat'],
            'lng' => $data['lng'],
            'telefono' => $data['telefono'],
            'descripcion' => $data['descripcion'],
            'apertura' => $data['apertura'],
            'cierre' => $data['cierre'],
            'uuid' => $data['uuid'],
        ]);

        return back()->with('estado','La informacion se envio correctamente');
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
