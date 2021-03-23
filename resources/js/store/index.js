import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
   state: {
     furgones: [],
     cabezales: [],
     comercial:{},
     comerciales:[],
     categorias:[],
     categoria:'',
   },
   mutations: {
      AGREGAR_CABEZALES(state, cabezales) {
          state.cabezales = cabezales;
      },
      AGREGAR_FURGONES(state, furgones) {
        state.furgones = furgones;
      },
      AGREGAR_COMERCIAL(state, comercial) {
        state.comercial = comercial;
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
