@extends('layouts.app')

@section('styles')
    
@endsection

@section('content')

{{-- Seccion cards primera precenteacion --}}
@include('inicio.partials.subheader')

{{-- Seccion cabezales --}}
<section class="bg-cabezales min-h-screen mt-1 mb-1">
    <div class="container"> 
       <div class="py-6 text-center">
           <h2 class="text-6xl text-white font-bold">Cabezales</h2>
       </div> 
  
       <div class="md:px-4 md:grid md:grid-cols-2 lg:grid-cols-3 gap-5 space-y-4 md:space-y-0">
         
         @foreach ($cabezales as $cabezal)
            
         <a href="#" style="text-decoration: none;" class="flex flex-wrap justify-center items-center">
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

        <div class="text-center my-1">
         <a href="" style="text-decoration:none;" class="boton-cabezales">
            Ver todos los cabezales
         </a>
        </div>
    </div>
    

</section>

  {{-- Seccion furgones --}}
<section class="bg-cabezales min-h-screen mt-1 mb-1">
    <div class="container"> 
       <div class="py-6 text-center">
           <h2 class="text-6xl text-white font-bold">furgones</h2>
       </div> 
  
       <div class="md:px-4 md:grid md:grid-cols-2 lg:grid-cols-3 gap-5 space-y-4 md:space-y-0">
         
         {{-- @foreach ($cabezales as $cabezal) --}}
            
         <a href="#" style="text-decoration: none;" class="flex flex-wrap justify-center items-center">
          <div class="max-w-sm bg-white px-6 pt-6 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-500 mt-3">
            <div class="relative">
              <img class="w-full rounded-xl" src="{{ asset('img/one-car/2.jpg') }}" alt="Imagen principal" />
              <p class="absolute top-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-br-lg rounded-tl-lg">Furgones</p>
              <p class="absolute top-0 right-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-tr-lg rounded-bl-lg">Q45,000</p>
            </div>
            <h1 class="mt-4 text-gray-800 text-3xl font-bold cursor-pointer text-center">Gran Danes</h1>
            
           </div>
          </a>

          {{-- @endforeach --}}
    
       </div>

        <div class="text-center my-1">
         <a href="" style="text-decoration:none;" class="boton-cabezales">
            Ver todos los Furgones
         </a>
        </div>
    </div>
    

</section>

{{-- Seccion carros --}}
<section class="bg-cabezales min-h-screen mt-1 mb-1">
    <div class="container"> 
       <div class="py-6 text-center">

           <h2 class="text-6xl text-white font-bold">Carros</h2>
       
        </div> 
  
       <div class="md:px-4 md:grid md:grid-cols-2 lg:grid-cols-3 gap-5 space-y-4 md:space-y-0">
         
         {{-- @foreach ($cabezales as $cabezal) --}}
            
         <a href="#" style="text-decoration: none;" class="flex flex-wrap justify-center items-center">
          <div class="max-w-sm bg-white px-6 pt-6 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-500 mt-3">
            <div class="relative">
              <img class="w-full rounded-xl" src="{{ asset('img/one-car/2.jpg') }}" alt="Imagen principal" />
              <p class="absolute top-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-br-lg rounded-tl-lg">Furgones</p>
              <p class="absolute top-0 right-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-tr-lg rounded-bl-lg">Q45,000</p>
            </div>
            <h1 class="mt-4 text-gray-800 text-3xl font-bold cursor-pointer text-center">Toyota Yaris</h1>
            
           </div>
          </a>

          {{-- @endforeach --}}
    
       </div>

        <div class="text-center my-1">
         <a href="" style="text-decoration:none;" class="boton-cabezales">
            Ver todos los carros
         </a>
        </div>
    </div>
    

</section>

<!-- Seccion de contacto -->
<section class="pt-20 pb-36 px-8 bg-blueGray-500">
    <div class="relative flex items-top justify-center min-h-screen bg-white dark:bg-gray-900 sm:items-center sm:pt-0 pb-7">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-8 overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6 mr-2 bg-gray-100 dark:bg-gray-800 sm:rounded-lg text-center">
                        <div class="flex justify-center">
                            <img class="h-25 w-25" src="{{ asset('img/LogoTransVentas33.png') }}" alt="">
                        </div>
                        <h3 class="text-2xl sm:text-5xl text-gray-800 dark:text-white font-extrabold tracking-tight">
                            Contactanos
                        </h3>
                        
                        <div class="flex items-center mt-8 text-gray-600 text-center dark:text-gray-400">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <div class="ml-4 text-md tracking-wide font-semibold w-40">
                                Acme Inc, Street, State,
                                Postal Code
                            </div>
                        </div>

                        <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <div class="ml-4 text-md tracking-wide font-semibold w-40">
                                +44 1234567890
                            </div>
                        </div>

                        <div class="flex items-center mt-2 text-gray-600 dark:text-gray-400">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <div class="ml-4 text-md tracking-wide font-semibold w-40">
                                info@acme.org
                            </div>
                        </div>
                    
                    </div>

                    <form class="p-6 flex flex-col justify-center">
                        <div class="flex flex-col">
                            <label for="name" class="hidden">Full Name</label>
                            <input type="name" name="name" id="name" placeholder="Full Name" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
                        </div>

                        <div class="flex flex-col mt-2">
                            <label for="email" class="hidden">Email</label>
                            <input type="email" name="email" id="email" placeholder="Email" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
                        </div>

                        <div class="flex flex-col mt-2">
                            <label for="tel" class="hidden">Number</label>
                            <input type="tel" name="tel" id="tel" placeholder="Telephone Number" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
                        </div>

                        <button type="submit" class="md:w-32 bg-indigo-600 hover:bg-blue-dark text-white font-bold py-3 px-6 rounded-lg mt-3 hover:bg-indigo-500 transition ease-in-out duration-300">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
</div>
</section>
  
@endsection


@section('scripts')

@endsection