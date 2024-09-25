import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // admin
                'resources/sass/app.scss',
                'resources/js/app.js',

                'public/admin_assets/css/core.css',
                'public/admin_assets/css/theme-default.css',
                'public/admin_assets/css/fonts/boxicons.css',
                'public/admin_assets/css/demo.css',

                // 'public/admin_assets/js/bootstrap.js',
                'public/admin_assets/js/main.js',



                // store
                "public/scss/store.scss"
          
            ],
            refresh: true,
        }),
    ],
});
