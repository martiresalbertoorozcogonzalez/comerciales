<template>
  <div class="container my-5">
      <h2>Hoteles</h2>

      <div class="row">
          <div class="col-md-4 mt-4" v-for="hospital in this.hospitales" v-bind:key="hospital.id">

             <div class="card">
                 <img class="card-img-top" :src="`storage/${hospital.imagen_principal}`" alt="card del restaurante">
                 <div class="card-body">
                     <h3 class="card-title text-primary font-weight-bold">
                         {{ hospital.nombre }}
                     </h3>
                     <p class="card-text">{{hospital.direccion}}</p>
                     <p class="card-text">
                         <span class="font-weight-bold">Horario:</span>
                         {{hospital.apertura}}  -  {{hospital.cierre}}
                     </p>

                    <router-link :to="{name:'comercial', params: { id: hospital.id }}">
                      <a class="btn btn-primary d-block">Ver Lugar</a>
                    </router-link>

                 </div>
             </div>

          </div>
      </div>

  </div>
</template>

<script>
export default {
    mounted() {
      axios.get('/api/categorias/hospital')
         .then(respuesta => {
             this.$store.commit("AGREGAR_HOSPITALES",respuesta.data);
         })
    },
    computed: {
        hospitales(){
         return this.$store.state.hospitales;
       }
    }
}
</script>
