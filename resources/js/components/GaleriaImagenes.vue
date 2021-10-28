<template>

  <div>

      <h2 class="text-center text-3xl text-gray-900">Galeria imagenes</h2>

          <div v-for="imagen in imagenes" v-bind:key="imagen.id">
            <a :href='`/storage/${imagen.ruta_imagen}`' data-lightbox="imagenes" data-title="Imagenes Comercial o establecimiento">
             <img  class="w-full p-3" :src='`/storage/${imagen.ruta_imagen}`' alt="">
            </a>
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
