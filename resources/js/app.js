

// require('./bootstrap');
import './bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap';
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

import {createApp, onMounted} from 'vue'
import LaravelVuePagination from 'laravel-vue-pagination';
import router from './router'
import VueSweetalert2 from "vue-sweetalert2";
import useAuth from "./composables/auth";
import { abilitiesPlugin } from '@casl/vue';
import { library } from '@fortawesome/fontawesome-svg-core';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
// Importar ícones específicos
import vuetify from '../js/vuetify/index';
import { fas } from '@fortawesome/free-solid-svg-icons';
import { fab } from '@fortawesome/free-brands-svg-icons';
import '@fortawesome/fontawesome-free/css/all.min.css'; // Importa o CSS do Font Awesome
import { InertiaProgress } from '@inertiajs/progress';


library.add(fas, fab);
import ability from './services/ability';



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
app.use(vuetify); // Usa o Vuetify
app.use(abilitiesPlugin, ability)
app.component('Pagination', LaravelVuePagination)
app.mount('#app')

// Inicializa o Inertia Progress com configurações personalizadas
InertiaProgress.init({
  delay: 250,
  color: '#29d',
  includeCSS: true,
  showSpinner: true,
})