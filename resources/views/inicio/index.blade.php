@extends('layouts.app')

@section('styles')
    
@endsection

@section('content')

<pagina-inicio></pagina-inicio>

<!-- Seccion de contacto -->
<div class="relative flex items-top justify-center bg-blueGray-500 dark:bg-gray-900 sm:items-center pb-4">
    <div class="max-w-6xl mx-auto">
        <div class="mt-8 overflow-hidden">
            <div class="container grid grid-cols-1 md:grid-cols-2">
                <div class="p-6 mr-2 bg-gray-100 dark:bg-gray-800 sm:rounded-lg text-center">
                    <div class="flex justify-center">
                        <img class="h-25 w-25" src="{{ asset('img/LogoTransVentas33.png') }}" alt="">
                    </div>
                    <h3 class="text-4xl sm:text-4xl md:text-4xl text-gray-800 dark:text-white font-extrabold tracking-tight">
                        Contactanos
                    </h3>
                    
                    <div class="flex mt-8 text-gray-600 text-center dark:text-gray-400">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <div class="ml-4 text-md tracking-wide font-semibold w-60">
                            Guatemala,Villa Nueva
                        </div>
                    </div>

                    <div class="flex mt-4 text-gray-600 dark:text-gray-400">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <div class="ml-4 text-md tracking-wide font-semibold w-40">
                            +43745326
                        </div>
                    </div>

                    <div class="flex mt-8 text-gray-600 text-center dark:text-gray-400">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <div class="ml-4 text-md tracking-wide font-semibold w-60">
                            transventas7@gmail.com
                        </div>
                    </div>
                
                </div>

                <form class="p-6 flex flex-col justify-center">
                    <div class="flex flex-col">
                        <label for="name" class="hidden">Nombre Completo</label>
                        <input type="name" name="name" id="name" placeholder="Nombre completo" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
                    </div>

                    <div class="flex flex-col mt-2">
                        <label for="email" class="hidden">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
                    </div>

                    <div class="flex flex-col mt-2">
                        <label for="tel" class="hidden">Numero de telefo (Opcional)</label>
                        <input type="tel" name="tel" id="tel" placeholder="Numero de telefo (Opcional)" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
                    </div>

                    <button type="submit" class="md:w-32 bg-indigo-600 hover:bg-blue-dark text-white font-bold py-3 px-6 rounded-lg mt-3 hover:bg-indigo-500 transition ease-in-out duration-300">
                        Enviar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection


@section('scripts')

@endsection