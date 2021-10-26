<template>
   <div class="container my-5">

       <center>
        <h1 class="text-centermb-5" style="margin-top:120px;">{{comercial.nombre}}</h1>
       </center>

       <div class="row align-items-start">

           <div class="col-md-7 order-1">
              <img :src="`../storage/${comercial.imagen_principal}`" class="img-fluid" alt="imagen comercial o establecimiento">
           </div>

           <aside class="col-md-5 order-2">


               <div class="p-4 bg-danger">

                 <h2 class="text-center text-white mt-2 mb-4">Descripcion</h2>

                 <p class="text-white mt-1">
                     <br>
                     {{comercial.descripcion}}
                 </p>


               </div>

               <div class="p-4 bg-dark">

                <div class="row form-group">

                  <div class="col-sm text-white mt-1">
                     <span class="font-weight-bold">
                         Horario :
                     </span>
                     <br>
                     {{comercial.apertura}} - {{comercial.cierre}}
                 </div>

                   <div class="col-sm text-white mt-1">
                     <span class="font-weight-bold">
                         Telefono :
                     </span>
                     <br>
                     {{comercial.telefono}}
                  </div>

                 </div>


               </div>

           </aside>


       </div>

         <galeria-imagenes></galeria-imagenes>

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
