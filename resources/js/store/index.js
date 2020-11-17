import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
   state: {
     cafes: [],
     restaurantes:[],
     hoteles:[],
     hospitales:[],
     comercial:{},
     comerciales:[]
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
      },
      AGREGAR_HOSPITALES(state, hospitales) {
        state.hospitales = hospitales;
      },
      AGREGAR_COMERCIALES(state, comerciales) {
          state.comerciales = comerciales;
      }
    },
    getters: {
        obtenerComercial: state => {
            return state.comercial;
        },
        obtenerImagenes: state => {
            return state.comercial.imagenes;
        },
        obtenerComerciales: state => {
            return state.comerciales;
        }
    }
});
