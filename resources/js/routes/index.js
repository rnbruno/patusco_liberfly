import { createRouter, createWebHistory } from "vue-router";

import AuthenticatedLayout from "../Pages/layouts/Authenticated.vue";
import GuestLayout from "../Pages/layouts/Guest.vue";

import PostsIndex from '../Pages/components/Posts/Index.vue'
import PostsCreate from '../Pages/components/Posts/Create.vue'
import PostsEdit from '../Pages/components/Posts/Edit.vue'
import Usuarios from '../Pages/Usuario/Usuarios.vue'
import Login from '../Pages/components/Login.vue'

function auth(to, from, next) {
    if (JSON.parse(localStorage.getItem('loggedIn'))) {
        next()
    }

    next('/login')
}

const routes = [
    {
        path: '/',
        redirect: { name: 'login' },
        component: GuestLayout,
        children: [
            {
                path: '/login',
                name: 'login',
                component: Login
            },
        ]
    },
    {
        path: '/Usuarios',
        redirect: { name: 'usuarios' },
        component: Usuarios,
        
    },
    {
        component: AuthenticatedLayout,
        beforeEnter: auth,
        children: [
            {
                path: '/posts',
                name: 'posts.index',
                component: PostsIndex,
                meta: { title: 'Posts' }
            },
            {
                path: '/posts/create',
                name: 'posts.create',
                component: PostsCreate,
                meta: { title: 'Add new post' }
            },
            {
                path: '/posts/edit/:id',
                name: 'posts.edit',
                component: PostsEdit,
                meta: { title: 'Edit post' }
            },
        ]
    }
]

export default createRouter({
    history: createWebHistory(),
    routes
})