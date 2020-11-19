import Vue from 'vue';
import VueRouter from 'vue-router';
import VuePageTransition from 'vue-page-transition';
import InicioComercial  from '../components/InicioComercial';
import MostrarComercial from '../components/MostrarComercial';

const routes = [
    {
        path: '/',
        component: InicioComercial
    },
    {
        path: '/comercial/:id',
        name:'comercial',
        component: MostrarComercial
    }
]

const router = new VueRouter({
    mode:'history',
    routes
});


Vue.use(VueRouter);
Vue.use(VuePageTransition);

export default router;
