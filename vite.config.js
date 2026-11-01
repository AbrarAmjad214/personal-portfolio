import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            // Committed to git so a pull is all the server needs to deploy new assets.
            buildDirectory: 'dist',
            refresh: true,
        }),
    ],
});
