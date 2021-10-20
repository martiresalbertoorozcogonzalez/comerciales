@extends('layouts.app')


@section('content')

<div class="flex justify-self-start pl-28 text-center">
	<a href="{{ url('/') }}" style="text-decoration:none;" class="boton-regresar">
	   Regresar
	</a>
</div>

<!--Hero-->
<div class="container bg-gray-100 flex flex-col md:flex-row mx-auto  items-center my-6 md:my-12 relative">
	
	<!--Right Col-->
	<div class="w-full lg:w-1/2 text-center py-3 px-3">
		<img class="fill-current text-black w-full rounded-sm" src="{{ asset('img/cabezal.jpg') }}" alt="">
	</div>	
	
	<!--Left Col-->
	<div class="flex flex-col w-full lg:w-1/2 justify-center items-start pt-12 pb-24 px-6">
		<p class="uppercase tracking-loose">Cabezal</p>
		<h1 class="my-4">Freightliner Century</h1>
		<p class="leading-normal mb-4">Enter your super app's description here... The key is to find the right length.  Don't want it to be too long, but then don't want it to be too short so that it looks weird between the title and button below.</p>
		<h3 class="my-3 text-3xl text-blueGray-800 font-bold">Q135,000</h3>
	    
		<galeria-imagenes></galeria-imagenes>
		
		<a href="#" style="text-decoration: none;" class="boton-regresar">
			Contactar al vendedor
		</a>
		
	</div>
	

</div>


@endsection