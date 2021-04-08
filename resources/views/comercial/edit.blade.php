@extends('layouts.app')

@section('styles')

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>

<link rel="stylesheet" ng-href="https://unpkg.com/esri-leaflet-geocoder/dist/esri-leaflet-geocoder.css"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" integrity="sha512-3g+prZHHfmnvE1HBLwUnVuunaPOob7dpksI7/v6UnF/rnKGwHf/GdEq9K7iEN7qTtW+S0iivTcGpeTBqqB04wA==" crossorigin="anonymous"/>

@endsection

@section('content')

 <div class="container">
      <h1 class="text-center mt-4">Editar Comercial o Establecimiento</h1>

      <div class="mt-5 row justify-content-center">

      <form
        class="col-md-9 col-xs-12 card card-body"
        action="{{route('admin.publicaciones.update',['comercial' => $comercial->id])}}"
        method="POST"
        enctype="multipart/form-data"
        novalidate>

         @csrf
         @method('PUT')

       <fieldset class="border p-4">
           <legend class="text-primary">Nombre , Categoria e Imagen</legend>

         <div class="form-group">
           <label for="nombre">Nombre Comercial</label>
           <input
             id="nombre"
             type="text"
             class="form-control @error('nombre') is-invalid @enderror"
             placeholder="Nombre Comercial"
             name="nombre"
             value="{{$comercial->nombre}}"
           >

           @error('nombre')
             <div class="invalid-feedback">
                 {{$message}}
             </div>
           @enderror

        </div>

        <div class="form-group">
              <label for="categoria">Categoria Establecimiento</label>

              <select
                class="form-control @error('categoria_id') is-invalid @enderror"
                name="categoria_id"
                id="categoria_id"
              >
                <option value="" selected disabled>-- Seleccione --</option>

                @foreach($categorias as $categoria)
                    <option
                      value="{{$categoria->id}}"
                      {{$comercial->categoria_id == $categoria->id ? 'selected' : '' }}
                      >{{$categoria->nombre}}
                    </option>
                @endforeach

               </select>
        </div>


        <div class="form-group">
          <label for="imagen_principal">Imagen Comercial o Establecimiento</label>
          <input
            id="imagen_principal"
            type="file"
            class="form-control @error('imagen_principal') is-invalid @enderror"
            name="imagen_principal"
            value="{{old('imagen_principal')}}"
          >

          @error('imagen_principal')
            <div class="invalid-feedback">
                {{$message}}
            </div>
          @enderror

          <img style="width:200px; margin-top:20px;" src="/storage/{{ $comercial->imagen_principal}}">

       </div>

       </fieldset>
{{--
    <fieldset class="border p-4">
        <legend class="text-primary">Ubicacion Comercial o de Establecimiento</legend>

        <div class="form-group">
            <label for="nombre">Direccio del Establecimiento</label>
            <input
            type="text"
            class="form-control"
            placeholder="Calle Comercial o Establecimiento"
            >

            <a href="" class="text-secondary mt-5 mb-3 text-center">EL assitente colocara una direccion estimada , o coloca el Pin en el lugar correcto</a>
        </div>

        <div class="form-group">
            <div id="mapa" style="height: 400px"></div>
        </div>

        <p class="informacion">Confirma que los siguientes campos son correctos</p>

        <div class="form-group">
                <input
                  type="text"
                  id="direccion"
                  class="form-control @error('direccion') is-invalid @enderror"
                  placeholder="Direccion"
                  value="{{$comercial->direccion}}"
                  name="direccion"
                >
                @error('direccion')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
              @enderror
        </div>

        <div class="form-group">
                <input
                  type="text"
                  id="colonia"
                  class="form-control @error('colonia') is-invalid @enderror"
                  placeholder="Colonia"
                  value="{{$comercial->colonia}}"
                  name="colonia"
                >
                @error('colonia')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
              @enderror
        </div>

        <input type="hidden" id="lat" name="lat" value="{{$comercial->lat}}">
        <input type="hidden" id="lng" name="lng" value="{{$comercial->lng}}">


    </fieldset>  --}}

    <fieldset class="border p-4 mt-5">
        <legend  class="text-primary">Información Establecimiento: </legend>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input
                    type="tel"
                    class="form-control @error('telefono')  is-invalid  @enderror"
                    id="telefono"
                    placeholder="Teléfono Establecimiento"
                    name="telefono"
                    value="{{$comercial->telefono}}"
                >

                    @error('telefono')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
            </div>



            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea
                    class="form-control  @error('descripcion')  is-invalid  @enderror"
                    name="descripcion"
                >{{$comercial->descripcion}}</textarea>

                    @error('descripcion')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
            </div>

            <div class="form-group">
                <label for="apertura">Hora Apertura:</label>
                <input
                    type="time"
                    class="form-control @error('apertura')  is-invalid  @enderror"
                    id="apertura"
                    name="apertura"
                    value="{{$comercial->apertura}}"
                >
                @error('apertura')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nombre">Hora Cierre:</label>
                <input
                    type="time"
                    class="form-control @error('cierre')  is-invalid  @enderror"
                    id="cierre"
                    name="cierre"
                    value="{{$comercial->cierre}}"
                >
                @error('cierre')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
    </fieldset>

    <fieldset class="border p-4 mt-5">
      <legend class="text-primary">Imagenes del Comercial o Establecimiento</legend>
       <div class="form-group">
           <label for="imagenes">Imagenes</label>
           <div id="dropzone" class="dropzone form-control"></div>
       </div>

       @if (count($imagenes) >0 )
           @foreach ($imagenes as $imagen)
               <input type="hidden" class="galeria" value="{{$imagen->ruta_imagen}}">
           @endforeach
       @endif

    </fieldset>

     <input type="hidden" id="uuid" name="uuid" value="{{$comercial->uuid}}">
     <input type="submit" class="btn btn-primary mt-3 d-block" value="Guardar cambios Establecimiento">

      </form>

    </div>

    </div>

@endsection

@section('scripts')


 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

 <!-- Load Esri Leaflet from CDN -->
 <script src="https://unpkg.com/esri-leaflet" defer></script>

 <script src="https://unpkg.com/esri-leaflet-geocoder" defer></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js" integrity="sha512-9WciDs0XP20sojTJ9E7mChDXy6pcO0qHpwbEJID1YVavz2H6QBz5eLoDD8lseZOb2yGT8xDNIV7HIe1ZbuiDWg==" crossorigin="anonymous" defer></script>


@endsection()








