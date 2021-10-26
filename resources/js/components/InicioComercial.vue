<template>
 <div  id="inicio">

     <categoria-cabezales></categoria-cabezales>
<div class="bg-blueGray-500">
     <categoria-furgones></categoria-furgones>
</div>     
     <categoria-carros></categoria-carros>

 </div>
</template>
<script>

import HeaderPagina from './HeaderPagina';
import CategoriaCabezales from './CategoriaCabezales';
import CategoriaFurgones from './CategoriaFurgones';
import CategoriaCarros from './CategoriaCarros';


export default {
    components: {
        HeaderPagina,
        // ListadoCategorias,
        CategoriaFurgones,
        CategoriaCarros,
        CategoriaCabezales
    }

}
</script>

<style>
    #inicio{
        margin-top:50px;
        width: 100%;
    }
</style>
