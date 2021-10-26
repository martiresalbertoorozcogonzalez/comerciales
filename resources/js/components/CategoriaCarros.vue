<template>
<div class="container mt-5 justify-content-center">
      <h1 class="text-5xl text-center text-gray-900 font mb-5">Ultimos carros</h1>

      <div class="row">
          <div class="col-md-4 mt-4" v-for=" carro in this.carros" v-bind:key="carro.id">

             <div class="card bg border-dark p-2">
                 <img class="card-img-top" :src="`storage/${carro.imagen_principal}`" alt="card del cabezal">
                 <div class="card-body">
                     <h3 class="card-title font-weight-bold">
                         {{ carro.nombre }}
                     </h3>
                     <p class="card-text">
                         <span class="font-weight-bold">Horario:</span>
                         {{carro.apertura}}  -  {{carro.cierre}}
                     </p>

                    <router-link :to="{name:'comercial', params: { id: carro.id }}">
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
      axios.get('/api/categorias/carro')
         .then(respuesta => {
             this.$store.commit("AGREGAR_CARROS",respuesta.data);
         })
    },
    computed: {
        carros(){
         return this.$store.state.carros;
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
