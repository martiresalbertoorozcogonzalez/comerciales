@extends('layouts.app')


@section('content')

<div class="container" style="margin-top: 20px;">

  <div class="row">

        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner text-center">
            <h3><i class="nav-icon fas fa-image"></i></h3>

            <p>Publicacion</p>
            </div>
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{ route('admin.publicaciones') }}" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->




   </div>

</div>


@endsection()
