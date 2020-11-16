<template>
   <div class="container my-5">
       <h2 class="text-center mb-5">{{comercial.nombre}}</h2>

       <div class="row align-items-start">
           <div class="col-md-8 order-2">
              <img :src="`../storage/${comercial.imagen_principal}`" class="img-fluid" alt="imagen comercial o establecimiento">
              <p class="mt-3">{{comercial.descripcion}}</p>
              <galeria-imagenes></galeria-imagenes>
           </div>
           <aside class="col-md-4 order-1">

               <div>
                   <mapa-ubicacion> </mapa-ubicacion>
               </div>

               <div class="p-4 bg-primary">
                 <h2 class="text-center text-white mt-2 mb-4">Mas Informacion</h2>

                 <p class="text-white mt-1">
                     <span class="font-weight-bold">
                         Ubicacion
                     </span>
                     {{comercial.direccion}}
                 </p>

                   <p class="text-white mt-1">
                     <span class="font-weight-bold">
                         Colonia
                     </span>
                     {{comercial.colonia}}
                 </p>

                   <p class="text-white mt-1">
                     <span class="font-weight-bold">
                         Horario
                     </span>
                     {{comercial.apertura}} - {{comercial.cierre}}
                 </p>

                   <p class="text-white mt-1">
                     <span class="font-weight-bold">
                         Telefono
                     </span>
                     {{comercial.telefono}}
                 </p>


               </div>



           </aside>
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
