<?php

namespace App\Http\Controllers;

use App\Imagen;
use App\Modelo;
use App\Categoria;
use App\Comercial;
use App\Condicion;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Intervention\Image\Gd\Commands\BackupCommand;

class ComercialController extends Controller
{


    public function inicio()
    {
        return view('comercial.inicio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        $modelo = Modelo::all();
        $condicion = Condicion::all();

        return view('comercial.create',compact('categorias','modelo','condicion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $data = $request->validate([
           'nombre' => 'required',
           'categoria_id' => 'required|exists:App\Categoria,id',
           'condicion_id' => 'required|exists:App\Condicion,id',
           'modelo_id' => 'required|exists:App\Modelo,id',
           'imagen_principal' => 'required|image|max:1000',
           'precio_contado' => 'required',
           'precio_financiado' => 'required',
           'millaje' => 'required',
           'direccion' => 'required',
           'colonia' => 'required',
           'lat' => 'required',
           'lng' => 'required',
           'telefono' => 'required|numeric',
           'descripcion' => 'required|min:50',
           'apertura' => 'date_format:H:i',
           'cierre' => 'date_format:H:i|after:apertura',
           'uuid' => 'required|uuid',
        ]);

        //Guardar la imagen
        $ruta_imagen = $request['imagen_principal']->store('principales','public');

        // Rezise a la imagen
        $img = Image::make(public_path("storage/{$ruta_imagen}") )->fit(800,600);
        $img->save();

        //Guardar en la BD
        auth()->user()->comercial()->create([
            'nombre' => $data['nombre'],
            'imagen_principal' => $ruta_imagen,
            'precio_contado' => $data['precio_contado'],
            'precio_financiado' => $data['precio_financiado'],
            'millaje' => $data['millaje'],
            'direccion' => $data['direccion'],
            'colonia' => $data['colonia'],
            'lat' => $data['lat'],
            'lng' => $data['lng'],
            'telefono' => $data['telefono'],
            'descripcion' => $data['descripcion'],
            'apertura' => $data['apertura'],
            'cierre' => $data['cierre'],
            'uuid' => $data['uuid'],
            'categoria_id' => $data['categoria_id'],
            'condicion_id' => $data['condicion_id'],
            'modelo_id' => $data['modelo_id'],
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
        //Consuktar categorias
        $categorias = Categoria::all();

        //Obtener los comerciales
        $comercial = auth()->user()->comercial;
        $comercial->apertura = date('H:i', strtotime($comercial->apertura));
        $comercial->cierre = date('H:i', strtotime($comercial->cierre));

        //Obtiene las imagenes del comercial o establecimiento
        $imagenes = Imagen::where('id_establecimiento', $comercial->uuid)->get();

        return view('comercial.edit',compact('categorias','comercial','imagenes'));
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
                //Ejecutar Policy
                $this->authorize('update', $comercial);

                //Validacion
                $data = $request->validate([
                    'nombre' => 'required',
                    'categoria_id' => 'required|exists:App\Categoria,id',
                    'imagen_principal' => 'image|max:1000',
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

                 $comercial->nombre = $data['nombre'];
                 $comercial->categoria_id = $data['categoria_id'];
                 $comercial->direccion = $data['direccion'];
                 $comercial->colonia = $data['colonia'];
                 $comercial->lat = $data['lat'];
                 $comercial->lng = $data['lng'];
                 $comercial->telefono = $data['telefono'];
                 $comercial->descripcion = $data['descripcion'];
                 $comercial->apertura = $data['apertura'];
                 $comercial->cierre = $data['cierre'];
                 $comercial->uuid = $data['uuid'];

                 //Si el usuario sube una imagen
                 if (request('imagen_principal')) {
                     //Guardar la imagen
                    $ruta_imagen = $request['imagen_principal']->store('principales','public');

                    // Rezise a la imagen
                    $img = Image::make(public_path("storage/{$ruta_imagen}") )->fit(800,600);
                    $img->save();

                    $comercial->imagen_principal = $ruta_imagen;

                 }

                 $comercial->save();

                 //Mensaje al usuario
                 return back()->with('estado','Tu informacion se almaceno correctamente');

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
