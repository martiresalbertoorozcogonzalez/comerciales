<template>

  <div class="text-center">

      <h2 class="text-center text-3xl text-gray-900">Galeria imagenes</h2>
         
       <div class="grid grid-cols-1 sm:grid-cols-4 md:grid-cols-4 lg:grid-cols-4 gap-4 items-center">  
          <div v-for="imagen in imagenes" v-bind:key="imagen.id">
            <a class="w-full" :href='`/storage/${imagen.ruta_imagen}`' data-lightbox="imagenes" data-title="Imagenes Comercial o establecimiento">
             <img :src='`/storage/${imagen.ruta_imagen}`' alt="">
            </a>
          </div>
       </div>   

  </div>

</template>

<script>
import Lightbox from 'Lightbox2';
export default {
   computed: {
       imagenes() {
           return this.$store.getters.obtenerImagenes;
       }
   },
}
</script>

<style scoped>
 @import 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.css';
</style>
