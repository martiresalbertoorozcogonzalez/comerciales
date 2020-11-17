<template>
<div class="mapa">
    <l-map
     :zoom="zoom"
     :center="center"
     :options="mapOptions"
    >
        <l-tile-layer :url="url" :attribution="attribution"/>

        <l-marker
          v-for="comercial in comerciales"
          v-bind:key="comercial.id"
          :lat-lng="obtenerCordenadas(comercial)"
          :icon="iconoComercial(comercial)"
        >
            <l-tooltip>
               {{ comercial.nombre}} - {{ comercial.categoria.nombre }}
            </l-tooltip>
        </l-marker>

    </l-map>
 </div>
</template>

<script>
import { latLng } from 'leaflet';
import { LMap, LTileLayer, LMarker, LTooltip, LIcon } from 'vue2-leaflet';

export default {
  components: {
      LMap,
      LTileLayer,
      LMarker,
      LTooltip,
      LIcon
  },
  data() {
    return {
      zoom: 13,
      center: latLng(14.6392565,-90.5129618),
      url: "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
      attribution:
        '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
      currentZoom: 11.5,
      currentCenter: latLng(14.6392565,-90.5129618),
      showParagraph: false,
      mapOptions: {
        zoomSnap: 0.5
      },
      showMap: true
    };
  },
  created() {
      axios.get('/api/comerciales')
          .then(respuesta => {
             this.$store.commit('AGREGAR_COMERCIALES', respuesta.data);
          })
   },
   computed: {
       comerciales() {
        return this.$store.getters.obtenerComerciales;
       }
   },
   methods: {
       obtenerCordenadas(comerciales){
         return {
             lat: comerciales.lat,
             lng: comerciales.lng
         }
      },
       iconoComercial(comerciales) {
           const {slug} = comerciales.categoria;
           return L.icon({
               iconUrl: `images/iconos/${slug}.png`,
               iconSize: [40,50]
           })
       }

   }
}
</script>

<style scoped>

.mapa {
    height: 600px;
    width: 100%;
}

</style>
