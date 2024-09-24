import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'public/assets/css/core.css',
                'public/assets/css/theme-default.css',
                'public/assets/css/fonts/boxicons.css',
                'public/assets/css/demo.css',

                
                'resources/js/app.js',
                'public/assets/js/bootstrap.js',
                'public/assets/js/main.js',
            ],
            refresh: true,
        }),
    ],
});
