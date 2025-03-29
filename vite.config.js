import { defineConfig } from 'vite';

export default defineConfig(async () => {
  const { default: laravel } = await import('laravel-vite-plugin');
  return {
    plugins: [
      laravel({
        input: ['resources/css/app.css', 'resources/js/app.js'],
        refresh: true,
      }),
    ],
  };
});
