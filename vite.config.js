import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: 'resources/js/app.jsx',
<<<<<<< HEAD
            refresh: true,
        }),
        react(),
            input: ['resources/css/app.css', 'resources/js/app.js'],
=======
>>>>>>> f8ef78f (Initial working Laravel Docker setup)
            refresh: true,
        }),
        react(),
    ],
});
