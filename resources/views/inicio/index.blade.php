@extends('layouts.app')

@section('styles')
    
@endsection

@section('content')


{{-- Seccion cabezales --}}
<section class="bg-cabezales min-h-screen -mb-1">

   <div class="container"> 
    <div class="py-6 text-center">
        <h2 class="text-6xl text-white font-bold">Cabezales</h2>
    </div> 
    <div class=" flex justify-center items-center">
      <div class="md:px-4 md:grid md:grid-cols-2 lg:grid-cols-3 gap-5 space-y-4 md:space-y-0">
        <div class="max-w-sm bg-white px-6 pt-6 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-500">
            <div class="relative">
                <img class="w-full h-64 rounded-xl" src="{{ asset('img/one-car/2.jpg') }}" alt="Colors" />
                <p class="absolute top-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-br-lg rounded-tl-lg">CABEZAL</p>
                <p class="absolute top-0 right-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-tr-lg rounded-bl-lg">Q145,000</p>
            </div>
            <h1 class="mt-4 text-gray-800 text-3xl text-center font-bold cursor-pointer">titulo transporte</h1>
           
            <div class="my-4">
             <button class="text-xl w-full text-white bg-gradient-to-r from-red-400 to-blue-400 py-1.5 rounded-xl shadow-lg">Ver informacion</button>
            </div>

        </div>
      </div>
    </div>
    <div class="text-center py-6">
        <a href="#" class="boton-cabezales">
            Ver mas ...
        </a>
    </div>
   </div>
</section>


{{-- Seccion furgones --}}
<section class="bg-furgones min-h-screen -mb-1">
    <div class="container"> 
     <div class="py-6 text-center">
         <h2 class="text-6xl text-white font-bold">Furgones</h2>
     </div> 
     <div class=" flex justify-center items-center">
       <div class="md:px-4 md:grid md:grid-cols-2 lg:grid-cols-3 gap-5 space-y-4 md:space-y-0">
         <div class="max-w-sm bg-white px-6 pt-6 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-500">
             <div class="relative">
                 <img class="w-full h-64 rounded-xl" src="{{ asset('img/one-car/2.jpg') }}" alt="Colors" />
                 <p class="absolute top-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-br-lg rounded-tl-lg">CABEZAL</p>
                 <p class="absolute top-0 right-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-tr-lg rounded-bl-lg">Q145,000</p>
             </div>
             <h1 class="mt-4 text-gray-800 text-3xl text-center font-bold cursor-pointer">titulo transporte</h1>
            
             <div class="my-4">
              <button class="text-xl w-full text-white bg-gradient-to-r from-red-400 to-blue-400 py-1.5 rounded-xl shadow-lg">Ver informacion</button>
             </div>
 
         </div>
       </div>
     </div>
     <div class="text-center py-6">
         <a href="#" class="boton-cabezales">
             Ver mas
         </a>
     </div>
    </div>
</section>


{{-- Seccion carros --}}
<section class="bg-carros min-h-screen -mb-1">
    <div class="container"> 
     <div class="py-6 text-center">
         <h2 class="text-6xl text-white font-bold">Carros</h2>
     </div> 
     <div class=" flex justify-center items-center">
       <div class="md:px-4 md:grid md:grid-cols-2 lg:grid-cols-3 gap-5 space-y-4 md:space-y-0">
         <div class="max-w-sm bg-white px-6 pt-6 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-500">
             <div class="relative">
                 <img class="w-full h-64 rounded-xl" src="{{ asset('img/one-car/2.jpg') }}" alt="Colors" />
                 <p class="absolute top-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-br-lg rounded-tl-lg">CABEZAL</p>
                 <p class="absolute top-0 right-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-tr-lg rounded-bl-lg">Q145,000</p>
             </div>
             <h1 class="mt-4 text-gray-800 text-3xl text-center font-bold cursor-pointer">titulo transporte</h1>
            
             <div class="my-4">
              <button class="text-xl w-full text-white bg-gradient-to-r from-red-400 to-blue-400 py-1.5 rounded-xl shadow-lg">Ver informacion</button>
             </div>
 
         </div>
       </div>
     </div>
     <div class="text-center py-6">
         <a href="#" class="boton-cabezales">
             Ver mas ...
         </a>
     </div>
    </div>
</section>


@endsection


@section('scripts')

@endsection