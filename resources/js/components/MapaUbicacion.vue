<template>

   <div class="mapa">
       <l-map :zoom="zoom" :center="center" :option="mapOptions">

        <l-tile-layer :url="url" :attribution="attribution"></l-tile-layer>

       </l-map>

   </div>
</template>

<script>

import { LMap, LTileLayer } from 'vue2-leaflet';


export default {
    components: {
      LMap,
      LTileLayer,
   },
    data() {
       return {
            zoom: 16,
            center:[14.6392565,-90.5129618],
            url: "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
            attribution:'&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
            currentZoom: 11.5,
            mapOptions: {
                zoomSnap: 0.5
            }
        };
    }
}
</script>

<style scoped>

@import 'https://unpkg.com/leaflet@1.6.0/dist/leaflet.css';

.mapa {
      height:300px;
      width: 100%;
   }
</style>
