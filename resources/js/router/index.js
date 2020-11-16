import Vue from 'vue';
import VueRouter from 'vue-router';
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

export default router;
