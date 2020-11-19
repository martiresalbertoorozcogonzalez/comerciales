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
     comerciales:[],
     categorias:[],
     categoria:''
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
      },
      AGREGAR_CATEGORIAS( state, categorias) {
          state.categorias = categorias;
      },
      SELECCIONAR_CATEGORIA(state, categoria) {
          state.categoria = categoria;
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
        },
        obtenerCategorias: state => {
            return state.categorias;
        },
        obtenerCategoria: state => {
            return state.categoria;
        }
    }
});
