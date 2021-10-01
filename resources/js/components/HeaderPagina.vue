<template>

<div class="container row">

    <div class="col-md-6">

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

    <div class="col-md-5">

        <div>
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

