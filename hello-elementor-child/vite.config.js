import { defineConfig } from 'vite';
import path from 'path';

export default defineConfig({
  root: 'assets',
  base: '',
  build: {
    outDir: '../dist',
    emptyOutDir: true,
    rollupOptions: {
      input: {
        app: path.resolve(__dirname, 'assets/js/app.js')
      },
      output: {
        entryFileNames: '[name].js',
        assetFileNames: '[name][extname]'
      }
    },
    cssMinify: 'lightningcss'
  },
  css: {
    transformer: 'lightningcss'
  }
});
