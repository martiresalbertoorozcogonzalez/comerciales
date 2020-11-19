<template>
<div>
   <listado-categorias></listado-categorias>
   <mapa-comerciales></mapa-comerciales>
   <categoria-cafe></categoria-cafe>
   <categoria-restaurant></categoria-restaurant>
   <categoria-hotel></categoria-hotel>
   <categoria-hospital></categoria-hospital>
</div>
</template>


<script>
import ListadoCategorias from './ListadoCategorias'
import MapaComerciales from './MapaComerciales';
import CategoriaCafe from './CategoriaCafe';
import CategoriaRestaurant from './CategoriaRestaurant';
import CategoriaHotel from './CategoriaHotel';
import CategoriaHospital from './CategoriaHospital';

export default {
    components: {
        ListadoCategorias,
        CategoriaCafe,
        CategoriaRestaurant,
        CategoriaHotel,
        CategoriaHospital,
        MapaComerciales
    }

}
</script>
