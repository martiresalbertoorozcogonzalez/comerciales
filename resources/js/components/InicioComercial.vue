<template>
<div>
   <mapa-comerciales></mapa-comerciales>
   <categoria-cafe></categoria-cafe>
   <categoria-restaurant></categoria-restaurant>
   <categoria-hotel></categoria-hotel>
   <categoria-hospital></categoria-hospital>
</div>
</template>


<script>
import MapaComerciales from './MapaComerciales';
import CategoriaCafe from './CategoriaCafe';
import CategoriaRestaurant from './CategoriaRestaurant';
import CategoriaHotel from './CategoriaHotel';
import CategoriaHospital from './CategoriaHospital';

export default {
    components: {
        CategoriaCafe,
        CategoriaRestaurant,
        CategoriaHotel,
        CategoriaHospital,
        MapaComerciales
    }

}
</script>
