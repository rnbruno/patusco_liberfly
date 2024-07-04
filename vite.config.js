import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
<<<<<<< HEAD
import vue from '@vitejs/plugin-vue';
=======
>>>>>>> 59ad0d99e6c13cfb77bd7721699bb1bec172fcdf

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
<<<<<<< HEAD
        vue({
            template:{
                transformAssetUrls: {},
                base: null,
                includeAbsolute: false,

            }
        })
=======
>>>>>>> 59ad0d99e6c13cfb77bd7721699bb1bec172fcdf
    ],
});
