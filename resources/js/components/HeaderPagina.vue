<template>

<div class="container row">

    <div class="col-md-8">

        <Slick ref="slick" :options="slickOptions">
            <div>
                <img class="img-fluid" src="images/home1.jpg">
            </div>
            <div>
                <img class="img-fluid" src="images/home1.jpg">
            </div>
            <div>
                <img class="img-fluid" src="images/home3.jpg">
            </div>
        </Slick>
    </div>

    <div class="col-md-4 card bg border-dark p-2">

        <div class="titulo">
            <h4>
                <i class="fa fa-search"> </i>
                <span>Buscar Cabezal</span>
            </h4>
        </div>
        <div class="form-group pr-3 pl-3 pt-4">
            <select class="form-control mb-3">
                <option selected>Marca</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="form-group pr-3 pl-3">
            <select class="form-control mb-3 pt-2">
                <option selected>Modelo</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="form-group p-4">
            <button type="submit" class="button-enviar btn-danger btn-lg">Buscar</button>
        </div>

    </div>

</div>

</template>

<script>
import Slick from 'vue-slick';
export default {
    components: { Slick },
    data() {
     return {
         slickOptions: {
             slidesToShow: 1,
             autoplay: true,
             arrows:false,
             appendDots: "o",
         }
     }
    },
    mounted() {
        console.log('Component Mounted');
    }
}
</script>

<style scoped>

.titulo{
  background-color: black;
}

.titulo h4 {
    height: 53px;
}

.titulo h4 i {
    color: black;
}

.titulo h4 i {
  background: #ff2929;
  color: #fff;
  display: inline-block;
  width: 61px;
  height: 61px;
  line-height: 61px;
  text-align: center;
  font-size: 25px;
  border-radius: 2px;
  margin-right: 5px;
}

.titulo h4 span {
   color: white;
}



</style>

