<template>
<div class="container mt-5 justify-content-center">
      <h1 class="titulo">Furgones</h1>

      <div class="row">
          <div class="col-md-4 mt-4" v-for=" furgon in this.furgones" v-bind:key="furgon.id">

             <div class="card bg border-dark p-2">
                 <img class="card-img-top" :src="`storage/${furgon.imagen_principal}`" alt="card del cabezal">
                 <div class="card-body">
                     <h3 class="card-title font-weight-bold">
                         {{ furgon.nombre }}
                     </h3>
                     <p class="card-text">{{furgon.direccion}}</p>
                     <p class="card-text">
                         <span class="font-weight-bold">Horario:</span>
                         {{furgon.apertura}}  -  {{furgon.cierre}}
                     </p>

                    <router-link :to="{name:'comercial', params: { id: furgon.id }}">
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
      axios.get('/api/categorias/furgones')
         .then(respuesta => {
             this.$store.commit("AGREGAR_FURGONES",respuesta.data);
         })
    },
    computed: {
        furgones(){
         return this.$store.state.furgones;
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
