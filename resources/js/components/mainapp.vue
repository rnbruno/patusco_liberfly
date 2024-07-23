<template>
    <nav class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a>
                            <img :src="logoUrl" style="width:50px" alt="Logo">
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="row">

        <aside class="col-3">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-decoration-none" style="width: 280px;">
                <!--========== ADMIN SIDE MENU one ========-->
                <ul class="nav nav-pills flex-column mb-auto">

                    <!--~~~~~~~~ MENU CONTENT ~~~~~~~~-->
                    <div class="_1side_menu_content">


                        <!--~~~ MENU LIST ~~~~~~-->
                        <div class="">
                            <ul
                                class=" px-1 pt-1 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out ps-0">
                                <!-- <li v-for="(menuItem, i) in permission" :key="i" v-if="permission.length && menuItem.read">
                    <router-link :to="'/'+menuItem.name"><Icon type="ios-speedometer" /> {{menuItem.resourceName}}</router-link>
                </li> -->
                                <li class="mb-1">
                                    <button
                                        class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                                        Home
                                    </button>
                                    <div class="collapse" id="home-collapse">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small ml-4">
                                            <li><a href="#"
                                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Overview</a>
                                            </li>
                                            <li><a href="#"
                                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Updates</a>
                                            </li>
                                            <li><a href="#"
                                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Reports</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>


                                <li><router-link active-class="border-b-2 border-indigo-400"
                                        class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out"
                                        to="/contas" >
                                        Contas
                                    </router-link></li>
                                <li><router-link active-class="border-b-2 border-indigo-400"
                                        class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out"
                                        to="/acesso/index">
                                        <Icon type="ios-speedometer" /> Acesso
                                    </router-link></li>
                                    <li><router-link active-class="border-b-2 border-indigo-400"
                                        class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out"
                                        to="/login">
                                        <Icon type="ios-speedometer" /> Login
                                    </router-link></li>
                                <li><router-link active-class="border-b-2 border-indigo-400"
                                        class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out"
                                        to="adminusers">
                                        <Icon type="ios-speedometer" /> Admin users
                                    </router-link></li>
                                <li><router-link active-class="border-b-2 border-indigo-400"
                                        class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out"
                                        to="role">
                                        <Icon type="ios-speedometer" /> Role Management
                                    </router-link></li>
                                <li><router-link to="cartaoIndex">
                                        <Icon type="ios-speedometer" /> Assign Cartão
                                    </router-link></li>


                                <li><a href="/logout">
                                        <Icon type="ios-speedometer" /> Logout
                                    </a></li>
                                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                    <router-link :to="{ name: 'acesso.index' }"
                                        active-class="border-b-2 border-indigo-400"
                                        class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out">
                                        Posts
                                    </router-link>
                                    <router-link :to="{ name: 'about' }" active-class="border-b-2 border-indigo-400"
                                        class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out">
                                        Create Post
                                    </router-link>
                                </div>
                            </ul>
                        </div>
                    </div>
                </ul>
            </div>
        </aside>
        <div class="col-8 m-2">
            <router-view />
        </div>
    </div>
</template>

<script>
console.log('MainApp component mounted');

import { usePage } from '@inertiajs/inertia-vue3'

export default {

    name: 'mainapp',

    setup() {
        const { props } = usePage()
        return {
        pageProps: props,
        }
    },
    mounted() {
        console.log('MainApp component mounted');
    },
    data() {
        return {
            logoUrl: '/img/logo.jpeg', // Caminho relativo a partir da pasta public
            showDropdown: false
        }
    },
    methods: {
        toggleDropdown() {
            this.showDropdown = !this.showDropdown;
        }
    }
}
</script>
<style scoped>
/* Adicione estilos customizados, se necessário */
.dropdown-menu {
    display: none;
}

.dropdown-menu.show {
    display: block;
}
</style>