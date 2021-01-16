<template>
<div>
   <listado-categorias></listado-categorias>
    <categoria-cabezales></categoria-cabezales>
</div>
</template>


<script>
import ListadoCategorias from './ListadoCategorias';
import CategoriaCabezales from './CategoriaCabezales';

export default {
    components: {
        ListadoCategorias,
        CategoriaCabezales,
    }

}
</script>
