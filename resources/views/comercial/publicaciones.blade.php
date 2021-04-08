@extends('layouts.app')


@section('content')

<div class="container-fluid" style="margin-top: 120px;">

    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                  Mis Publicaiones
                  <a href="{{ route('admin.publicaciones.create') }}" type="button" class="btn btn-sm btn-primary">Crear</a>
              </h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 200px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default btn-danger"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>editar</th>
                    <th>Borrar</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($publicaciones as $publicacion)
                  <tr>

                        <td>{{ $publicacion->id }}</td>
                        <td>{{ $publicacion->user->name }}</td>
                        <td>{{ $publicacion->created_at }}</td>
                        <td><span class="tag tag-success">{{ $publicacion->condicion->nombre }}</span></td>
                        <td>{{ $publicacion->nombre }}</td>
                        <td><img width="70px" src="{{ Storage::url($publicacion->imagen_principal) }}"></td>
                        <td>
                            <a href="{{ route('admin.publicaciones.edit',['publicacion' => $publicacion->id]) }}" type="button" class="btn btn-sm btn-primary">Editar</a>
                        </td>

                        <td>
                            <form action="{{ route('admin.publicaciones.destroy',$publicacion->id ) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-sm btn-danger" value="Eliminar &times;">
                            </form>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>

</div>

@endsection
