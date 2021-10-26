<template>

<div class="container mt-5 justify-content-center">
      <h1 class="text-5xl text-center text-gray-900 font mb-5">Ultimos cabezales</h1>

      <div class="row">
          <div class="col-md-4 mt-4" v-for="cabezal in this.cabezales" v-bind:key="cabezal.id">

             <div class="card bg border-dark p-2">
                 <img class="card-img-top" :src="`storage/${cabezal.imagen_principal}`" alt="card del cabezal">
                 <div class="card-body">
                     <h3 class="card-title font-weight-bold">
                         {{ cabezal.nombre }}
                     </h3>
                     <!-- <p class="card-text">
                         <span class="font-weight-bold">Horario:</span>
                         {{cabezal.apertura}}  -  {{cabezal.cierre}}
                     </p> -->

                    <router-link :to="{name:'comercial', params: { id: cabezal.id }}">
                      <a class="btn btn-danger d-block">Informacion</a>
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
      axios.get('/api/categorias/cabezal')
         .then(respuesta => {
             this.$store.commit("AGREGAR_CABEZALES",respuesta.data);
         })
    },
    computed: {
        cabezales(){
         return this.$store.state.cabezales;
       }
    }
}
</script>

<style scoped>

.titulo{
    font-size:45px;
}

.card-title{
    color: black;
}
</style>
