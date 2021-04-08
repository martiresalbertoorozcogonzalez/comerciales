<template>
 <div class="container" id="inicio">

     <header-pagina></header-pagina>
     <categoria-cabezales></categoria-cabezales>
     <categoria-furgones></categoria-furgones>
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
        CategoriaCabezales,
        CategoriaFurgones,
        CategoriaCarros
    }

}
</script>

<style>
    #inicio{
        margin-top:150px;
        width: 100%;
    }
</style>
