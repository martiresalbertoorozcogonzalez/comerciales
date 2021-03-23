<template>
 <div class="container" id="inicio">

     <header-pagina></header-pagina>
     <categoria-furgones></categoria-furgones>
     <categoria-cabezales></categoria-cabezales>

 </div>
</template>
<script>

import HeaderPagina from './HeaderPagina';
import CategoriaCabezales from './CategoriaCabezales';
import CategoriaFurgones from './CategoriaFurgones';

export default {
    components: {
        HeaderPagina,
        // ListadoCategorias,
        CategoriaCabezales,
        CategoriaFurgones,
    }

}
</script>

<style>
    #inicio{
        margin-top:150px;
        width: 100%;
    }
</style>
