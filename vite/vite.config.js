import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
import FullReload from 'vite-plugin-full-reload'

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [
    vue(),
    FullReload(['public/*', 'public/**/*'], { root: __dirname+'/..' }),
  ],

  root: 'src',
  base: process.env.APP_ENV === 'development' ? '/' : '/dist/',

  build: {
    outDir: '../../public/dist',
    emptyOutDir: true,
    manifest: true,
    rollupOptions: {
      input: 'src/main.js'
    }
  },

  resolve: {
    alias: {
      vue: 'vue/dist/vue.esm-bundler.js'
    }
  }
})
