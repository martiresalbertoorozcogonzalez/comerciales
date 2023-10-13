{{-- Seccion Header --}}
<section class="relative">

    <div class="pt-16 pb-32 min-h-screen-75">
     <div class="bg-cabezaltres absolute top-0 w-full h-full bg-center bg-cover">
        <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black">
            <nav class="bg-blueGray-500 shadow-md py-3">
                <div class="container mx-auto md:px-0">
                    <div class="flex item-center justify-around">
    
                        
                        <a class="flex flex-row justify-between gap-3 text-2xl text-white font-bold" href="{{ url('/') }}">
                            <img src="images/logos/logo.png" width="30px" height="30px">
                            {{ config('app.name', 'TransVentasGuatemala') }}
                        </a>
    
                        <nav class="flex-1 text-right">
    
                                <!-- Authentication Links -->
                                @guest
                                    <a class="text-white no-underline hover:underline hover:text-gray-100 p-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    @if (Route::has('register'))
                                    <a class="text-white no-underline hover:underline hover:text-gray-100 p-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    @endif
                                @else
    
                                <span class="text-white text-sm pr-4">{{ Auth::user()->name }}</span>
    
                                <a class="no-underline hover:underline text-white" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                        </form>
                                @endguest
                        </nav>
                    </div>
                </div>
            </nav>
        </span>
     </div>
     <div class="text-center relative mx-auto mt-3">
        <div class="w-full px-2 ml-auto mr-auto">
            <h1 class=" text-white font-semibold text-5xl">
                TransVentas Guatemala
            </h1>
            <div class="flex justify-center">
             <img class="h-40 w-40" src="{{ asset('img/LogoTransVentas33.png') }}" alt="">
            </div>
            <p class="text-lg text-blueGray-200">
                Publicidad y Marketing
            </p>     
        </div>
     </div>

    
    </div>
</section>

{{-- Seccion cards primera precenteacion --}}
<section class="pb-10 bg-blueGray-500 -mt-24">
    
    <div class="mx-auto px-4">
        <div class="flex flex-wrap">

        <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
            <div class="px-4 py-5 flex-auto">
                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                <ion-icon name="trophy"></ion-icon>
                </div>
                <h6 class="text-xl font-semibold">Publicidad</h6>
                <p class="mt-2 mb-4 text-blueGray-500">
                Divide details about your product or agency work into parts.
                A paragraph describing a feature will be enough.
                </p>
            </div>
            </div>
        </div>

        <div class="w-full md:w-4/12 px-4 text-center">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
            <div class="px-4 py-5 flex-auto">
                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
                <ion-icon name="laptop"></ion-icon>
                </div>
                <h6 class="text-xl font-semibold">Marketing</h6>
                <p class="mt-2 mb-4 text-blueGray-500">
                Keep you user engaged by providing meaningful information.
                Remember that by this time, the user is curious.
                </p>
            </div>
            </div>
        </div>

        <div class="pt-6 w-full md:w-4/12 px-4 text-center">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
            <div class="px-4 py-5 flex-auto">
                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
                <ion-icon name="finger-print"></ion-icon>
                </div>
                <h6 class="text-xl font-semibold">Ventas</h6>
                <p class="mt-2 mb-4 text-blueGray-500">
                Write a few lines about each one. A paragraph describing a
                feature will be enough. Keep you user engaged!
                </p>
            </div>
            </div>
        </div>

        </div>
    </div>

</section>
