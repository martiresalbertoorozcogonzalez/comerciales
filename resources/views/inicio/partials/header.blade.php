{{-- Seccion Header --}}

<section>     

    <nav class="bg-blueGray-900 py-3">
        <div class="container mx-auto md:px-0">
            <div class="flex item-center justify-end">
                
                <a class="flex flex-row justify-between gap-3 text-2xl text-white font-bold" href="{{ url('/') }}">
                    <img class="opacity-50 bg-black" src="images/logos/logo.png" width="30px" height="30px">
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

</section>

