@extends('layouts.app')

@section('content')


{{-- Seccion cabezales --}}
<section class="bg-white min-h-screen mt-1 mb-1">
  <div class="container"> 
     <div class="py-6 text-center">
         <h2 class="text-6xl text-blueGray-900 font-bold">Cabezales</h2>
     </div> 

     <div class="md:px-4 md:grid md:grid-cols-2 lg:grid-cols-3 gap-5 space-y-4 md:space-y-0">
       
       @foreach ($cabezales as $cabezal)
          
       <a href="{{ route('ver.cabezal',['comercial' => $cabezal->id]) }}" style="text-decoration: none;" class="flex flex-wrap justify-center items-center">
        <div class="max-w-sm bg-white px-6 pt-6 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-500 mt-3">
          <div class="relative">
            <img class="w-full rounded-xl" src="/storage/{{$cabezal->imagen_principal}}" alt="Imagen principal" />
            <p class="absolute top-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-br-lg rounded-tl-lg">Cabezales</p>
            <p class="absolute top-0 right-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-tr-lg rounded-bl-lg">{{$cabezal->precio_contado}}</p>
          </div>
          <h1 class="mt-4 text-gray-800 text-3xl font-bold cursor-pointer text-center">{{$cabezal->nombre}}</h1>
          
         </div>
        </a>

        @endforeach
  
     </div>

      
  </div>
  

</section>



@endsection