import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['workbench/resources/css/app.css'],
            publicDirectory: 'public',
            buildDirectory: 'build',
            hotFile: 'public/hot',
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        hmr: {
            host: 'localhost',
        },
    },
    build: {
        outDir: 'public/build',
        manifest: true,
        rollupOptions: {
            input: 'workbench/resources/css/app.css',
        },
    },
});
