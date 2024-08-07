import { defineConfig } from "vite";

export default defineConfig({
  base: "",
  root: "src",
  publicDir: "../public",

  build: {
    manifest: true,
    rollupOptions: {
      input: {
        index: "src/js/index.js",
        styles: "src/scss/application.scss",
      },
    },
    outDir: "../www/assets",
    emptyOutDir: true,
    assetsDir: "",
  },
});
