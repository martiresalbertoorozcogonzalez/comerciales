<template>
   <div class="container my-5">

       <center>
        <h1 class="text-center mb-5 mt-4">{{comercial.nombre}}</h1>
       </center>

       <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">

         <div class="row-span-2">
              <img :src="`../storage/${comercial.imagen_principal}`" class="img-fluid" alt="imagen comercial o establecimiento">
         </div>
        
         <div class="bg-blueGray-400 p-3">
             <h2 class="text-center text-white mt-2 mb-4">Descripcion</h2>
             <p class="text-white mt-1">
                {{comercial.descripcion}}
             </p>
         </div>
        
            <galeria-imagenes></galeria-imagenes>

       </div>

   </div>
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
