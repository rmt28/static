import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
  plugins: [
    tailwindcss(),
  ],
  build: {
    outDir: 'dist',
    manifest: true,
    rollupOptions: {
      input: 'src/main.js',
    },
  },
  server: {
    strictPort: true,
    port: 5173,
  },
});