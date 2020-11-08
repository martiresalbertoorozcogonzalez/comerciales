<template>
   <div class="container my-5">
       <h2>{{comercial.nombre}}</h2>
   </div>
</template>


<script>
export default {
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
