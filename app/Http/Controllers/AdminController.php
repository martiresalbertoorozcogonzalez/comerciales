<?php

namespace App\Http\Controllers;

use App\Imagen;
use App\Modelo;
use App\Categoria;
use App\Comercial;
use App\Condicion;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('comercial.home');
    }


    public function publicaciones(Comercial $comercial)
    {

        $publicaciones = Comercial::where('user_id', auth()->user()->id )->get();

        // dd($publicaciones);

        return view('comercial.publicaciones', compact('publicaciones'));
    }


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
           'imagen_principal' => 'required|image|max:10000',
           'precio_contado' => 'required',
           'precio_financiado' => 'required',
           'millaje' => 'required',
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
            'telefono' => $data['telefono'],
            'descripcion' => $data['descripcion'],
            'apertura' => $data['apertura'],
            'cierre' => $data['cierre'],
            'uuid' => $data['uuid'],
            'categoria_id' => $data['categoria_id'],
            'condicion_id' => $data['condicion_id'],
            'modelo_id' => $data['modelo_id'],
            ]);

        return redirect()->action('AdminController@publicaciones')->with('estado','La informacion se envio correctamente');
    }


    public function edit(Comercial $comercial)
    {

         //Consultar categorias
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
                    'telefono' => 'required|numeric',
                    'descripcion' => 'required|min:50',
                    'apertura' => 'date_format:H:i',
                    'cierre' => 'date_format:H:i|after:apertura',
                    'uuid' => 'required|uuid'
                 ]);

                 $comercial->nombre = $data['nombre'];
                 $comercial->categoria_id = $data['categoria_id'];
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
                 return redirect()->action('AdminController@publicaciones')->with('estado','Tu informacion se almaceno correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comercial  $comercial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comercial $comercial)
    {
        //Ejecutar el Policy
        $this->authorize('delete', $comercial);

        //Eliminar la publicacion
        $comercial->delete();

        return redirect()->action('AdminController@publicaciones');
    }


}
