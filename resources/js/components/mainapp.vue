<template>
    <nav class="mnb navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="ic fa fa-bars"></i>
                </button>
                <div style="padding: 15px 0;">
                    <a href="#" id="msbo"><i class="ic fa fa-bars"></i></a>
                </div>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">En</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">Draude Oba <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Settings</a></li>
                            <li><a href="#">Upgrade</a></li>
                            <li><a href="#">Help</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-bell-o"></i></a></li>
                    <li><a href="#"><i class="fa fa-comment-o"></i></a></li>
                </ul>
                <form class="navbar-form navbar-right">
                    <input type="text" class="form-control" placeholder="Search...">
                </form>
            </div>
        </div>
    </nav>
    <div class="msb" id="msb">
        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <div class="brand-wrapper">
                    <!-- Brand -->
                    <div class="flex">
                        <!-- Logo -->
                        <div class="shrink-0 flex items-center">
                            <a>
                                <img :src="logoUrl" style="width:50px" alt="Logo">
                            </a>
                        </div>
                        <div class="brand-name-wrapper sidebar-content">
                            <a class="navbar-brand" href="#">
                                SAITAMA
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Menu -->
            <div class="side-menu-container">
                <ul class="nav navbar-nav">

                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active"><a href="#"><i class="fa fa-puzzle-piece"></i> Components</a></li>
                    <router-link :to="{ name: 'conta' }">Contas</router-link>
                    <router-link :to="{ name: 'conta' }">Contas</router-link>
                    <Link href="/contas" :class="{ 'active': $page.url === '/contas' }">Contas</Link>
                    <Link href="/">Home</Link>
                    <Link href="/about">About</Link>
                    <Link href="/contact">Contact</Link>
                    <li><a href="#"><i class="fa fa-heart"></i> Extras</a></li>
                    <!-- Dropdown-->
                    <li class="panel panel-default" id="dropdown">
                        <a data-toggle="collapse" href="#dropdown-lvl1">
                            <i class="fa fa-diamond"></i> Apps
                            <span class="caret"></span>
                        </a>
                        <!-- Dropdown level 1 -->
                        <div id="dropdown-lvl1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="nav navbar-nav">
                                    <li><a href="#">Mail</a></li>
                                    <li><a href="#">Calendar</a></li>
                                    <li><a href="#">Ecommerce</a></li>
                                    <li><a href="#">User</a></li>
                                    <li><a href="#">Social</a></li>

                                    <!-- Dropdown level 2 -->
                                    <li class="panel panel-default" id="dropdown">
                                        <a data-toggle="collapse" href="#dropdown-lvl2">
                                            <i class="glyphicon glyphicon-off"></i> Sub Level <span
                                                class="caret"></span>
                                        </a>
                                        <div id="dropdown-lvl2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <ul class="nav navbar-nav">
                                                    <li><a href="#">Link</a></li>
                                                    <li><a href="#">Link</a></li>
                                                    <li><a href="#">Link</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="#"><span class="glyphicon glyphicon-signal"></span> Link</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
    <div class="mcw">
        <!--navigation here-->
        <!--main content view-->
        <div class="cv">
            <div>
                <div class="inbox">
                    <div class="inbox-sb">

                        <div class="col-8 m-2 frame_">
                            <router-view />
                        </div>
                    </div>
                </div>
            </div>
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
        },
        toggleSidebar() {
            this.isCollapsed = !this.isCollapsed;
        },
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

<style src="./mainapp.css"></style>