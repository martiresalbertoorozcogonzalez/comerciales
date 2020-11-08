import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
   state: {
     cafes: [],
     restaurantes:[],
     hoteles:[],
     comercial:{},
   },
   mutations: {
      AGREGAR_CAFES(state, cafes) {
          state.cafes = cafes;
      },
      AGREGAR_RESTAURANTES(state, restaurantes) {
          state.restaurantes = restaurantes;
      },
      AGREGAR_HOTELES(state, hoteles) {
        state.hoteles = hoteles;
      },
      AGREGAR_COMERCIAL(state, comercial) {
        state.comercial = comercial;
      }
    },
    getters: {
        obtenerComercial: state => {
            return state.comercial
        }
    }
});
