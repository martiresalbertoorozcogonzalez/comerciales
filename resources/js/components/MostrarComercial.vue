<template>
   <section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
    <div class="lg:w-4/3 mx-auto flex flex-wrap">
      <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto object-cover object-center rounded" :src="`../storage/${comercial.imagen_principal}`">
     
      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
        <h2 class="text-sm title-font text-gray-500 tracking-widest">{{comercial.categoria}}</h2>
        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{comercial.nombre}}</h1>
        <div class="flex mb-4">
           <h2>Hola aca algo nuevo</h2>
        </div>
        <p class="leading-relaxed">Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn. Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over, neutra jean shorts keytar banjo tattooed umami cardigan.</p>
        <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
          <div>
            <h2>Aca ira otra cosa</h2>
          </div>
        </div>
        <div class="flex">
          <span class="title-font font-medium text-2xl text-gray-900">Q{{comercial.precio_contado}}</span>
          <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Button</button>
          
        </div>
      </div>
    
   </div>
   <div class="col-span-3 mt-10">
      <galeria-imagenes></galeria-imagenes>
   </div>
   
  </div>
</section>
</template>

<script>
import MapaUbicacion from './MapaUbicacion';
import GaleriaImagenes from './GaleriaImagenes';

export default {
    components: {
      MapaUbicacion,
      GaleriaImagenes
    },
    mounted() {

        const { id } = this.$route.params;

        axios.get('/api/comerciales/' + id )
           .then(respuesta => {
              this.$store.commit('AGREGAR_COMERCIAL', respuesta.data);
           })
    },
    computed: {
        comercial() {
            return this.$store.getters.obtenerComercial;
        }
    }
}
</script>
