<template>
   <section class="bg-white min-h-screen mt-1 mb-1">
    <div class="container"> 
       <div class="py-6 text-center">
           <h2 class="text-6xl text-gray-900 font-bold">Ultimos Cabezales</h2>
       </div> 
  
       <div class="md:px-4 md:grid md:grid-cols-2 lg:grid-cols-3 gap-5 space-y-4 md:space-y-0" v-for="cabezal in this.cabezales" v-bind:key="cabezal.id">

     <router-link :to="{name:'comercial', params: { id: cabezal.id }}">                         
          <div class="max-w-sm bg-white px-6 pt-6 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-500 mt-3">
            <div class="relative">
              <img class="w-full rounded-xl" :src="`storage/${cabezal.imagen_principal}`" alt="Imagen principal" />
              <p class="absolute top-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-br-lg rounded-tl-lg">{{ cabezal.categoria_id }}</p>
              <p class="absolute top-0 right-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-tr-lg rounded-bl-lg">{{ cabezal.precio_contado}}</p>
            </div>
            <h1 class="mt-4 text-gray-800 text-3xl font-bold cursor-pointer text-center">{{ cabezal.nombre }}</h1>
            
           </div>
    </router-link>   

       </div>

        <div class="text-center my-1">
         <a href="" style="text-decoration:none;" class="boton-cabezales">
            Ver todos los cabezales
         </a>
        </div>
    </div>
</section>
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

<style>
.router-link{
   text-decoration:none;
} 
</style>





