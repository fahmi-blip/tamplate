import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.jsx',
                'resources/scss/App.scss'
            ],
             
            refresh: true,
        }),
        react(),
    ],
    resolve: {
        alias: {
            // Ini membantu jika template menggunakan absolute import dengan '@'
            '@': '/resources/js/src', 
        },
    },
});