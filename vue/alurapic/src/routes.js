import Home from './components/home/Home.vue';
import Cadastro from './components/cadastro/Cadastro.vue';

export const routes = [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        name: 'cadastro',
        path: '/cadastro',
        component: Cadastro
    },
    {
        name: 'alterar',
        path: '/cadastro/:id',
        component: Cadastro
    },
    {
        path: '*',
        component: Home
    }
];