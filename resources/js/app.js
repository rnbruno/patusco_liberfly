

// require('./bootstrap');
import './bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap';
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

import {createApp, onMounted} from 'vue'
import LaravelVuePagination from 'laravel-vue-pagination';
// import MainApp from './components/mainapp.vue';
import router from './router'
import VueSweetalert2 from "vue-sweetalert2";
import useAuth from "./composables/auth";
import { abilitiesPlugin } from '@casl/vue';
import { library } from '@fortawesome/fontawesome-svg-core';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
// Importar ícones específicos
import { fas } from '@fortawesome/free-solid-svg-icons';
import { fab } from '@fortawesome/free-brands-svg-icons';
import '@fortawesome/fontawesome-free/css/all.min.css'; // Importa o CSS do Font Awesome
import { InertiaProgress } from '@inertiajs/progress';


library.add(fas, fab);
import ability from './services/ability';
// import Select2 from 'vue3-select2-component';


const app = createApp({
    setup() {
        const { getUser } = useAuth()
        onMounted(getUser)
    },
})
// app.component('mainapp', MainApp);
app.component('font-awesome-icon', FontAwesomeIcon);
app.use(router)
app.use(VueSweetalert2)
app.use(library)
app.use(FontAwesomeIcon)
app.use(InertiaProgress);
app.use(abilitiesPlugin, ability)
app.component('Pagination', LaravelVuePagination)
// app.component('Select2', Select2)
app.mount('#app')
// console.log('Vue.js app initialized');

// Inicializa o Inertia Progress com configurações personalizadas
InertiaProgress.init({
  delay: 250,
  color: '#29d',
  includeCSS: true,
  showSpinner: true,
})