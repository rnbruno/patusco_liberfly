import './bootstrap';

<<<<<<< HEAD
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { InertiaProgress } from '@inertiajs/progress';


createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
})

InertiaProgress.init();
=======
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
>>>>>>> 59ad0d99e6c13cfb77bd7721699bb1bec172fcdf
