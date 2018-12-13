import Home from './components/Home.vue';
import Login from './components/Login.vue';
import Register from './components/Register.vue';
import allProducts from './components/customers/Main.vue';
import productList from './components/customers/List.vue';
import product from './components/customers/New.vue';

export const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home,
        meta: {
            requiresAuth: true
        }
    },
    // {
    //     path: '/home',
    //     name: 'Home',
    //     component: Home,
    //     meta: {
    //         requiresAuth: true
    //     }
    // },
    {
        path: '/login',
        name: 'Login',
        component: Login
    },
    {
        path: '/register',
        name: 'Register',
        component: Register
    },
    {
        path: '/products',
        component: allProducts,
        meta: {
            requiresAuth: true
        },
        children: [
            {
                path: '/',
                component: productList
            },
        ]
    },
    {
        path: '/product/:id',
        name: 'product',
        component: product
    },

]