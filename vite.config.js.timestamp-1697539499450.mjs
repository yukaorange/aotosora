// vite.config.js
import { defineConfig } from "file:///D:/MAMP/htdocs/tomorrow-company/wp-content/themes/tomorrow-company/node_modules/vite/dist/node/index.js";
import liveReload from "file:///D:/MAMP/htdocs/tomorrow-company/wp-content/themes/tomorrow-company/node_modules/vite-plugin-live-reload/dist/index.js";
import autoprefixer from "file:///D:/MAMP/htdocs/tomorrow-company/wp-content/themes/tomorrow-company/node_modules/autoprefixer/lib/autoprefixer.js";
import postcssNesting from "file:///D:/MAMP/htdocs/tomorrow-company/wp-content/themes/tomorrow-company/node_modules/postcss-nesting/dist/index.mjs";
import sass from "file:///D:/MAMP/htdocs/tomorrow-company/wp-content/themes/tomorrow-company/node_modules/vite-plugin-sass/index.js";
import path from "path";
import glsl from "file:///D:/MAMP/htdocs/tomorrow-company/wp-content/themes/tomorrow-company/node_modules/vite-plugin-glsl/src/index.js";
var __vite_injected_original_dirname = "D:\\MAMP\\htdocs\\tomorrow-company\\wp-content\\themes\\tomorrow-company";
console.log("NODE_ENV:", process.env.NODE_ENV);
var projectName = "tomorrow-company";
var devUrl = `/${projectName}/wp-content/themes/${projectName}/public`;
var vite_config_default = defineConfig(({ command }) => {
  console.log(command);
  return {
    plugins: [
      liveReload([
        __vite_injected_original_dirname + "/**/*.php"
        //  __dirname + "/**/*.js"
      ]),
      glsl()
    ],
    root: "",
    //このファイルを置いているディレクトリがプロジェクトのルートディレクトリとなる
    // base: process.env.NODE_ENV === "development" ? devUrl : "./", //開発環境のURLを指定
    base: process.env.NODE_ENV === "development" ? devUrl : "./",
    //開発環境のURLを指定
    //この環境変数はnpm run devでにdevelopmentに切り替わる。（package.json参照）
    build: {
      outDir: path.resolve(__vite_injected_original_dirname, "./dist"),
      emptyOutDir: true,
      manifest: true,
      minify: true,
      target: "es2018",
      rollupOptions: {
        // エントリーポイントの設定
        input: {
          main: path.resolve(__vite_injected_original_dirname + "/src/js/main.js"),
          sub: path.resolve(__vite_injected_original_dirname + "/src/js/sub.js"),
          style: path.resolve(__vite_injected_original_dirname + "/src/scss/style.scss")
        },
        output: {
          // 出力設定
          entryFileNames: "js/[name].js",
          chunkFileNames: "js/[name].js",
          assetFileNames: "assets/[name].[ext]"
        }
      },
      assetsInlineLimit: 0,
      cssCodeSplit: false,
      // CSSのコード分割を無効にします
      write: true
    },
    server: {
      host: "0.0.0.0",
      cors: true,
      strictPort: true,
      port: 3e3,
      https: false,
      hmr: {
        host: "localhost"
      },
      open: `http://localhost:80/${projectName}`
      //開発環境のURLを指定
    },
    css: {
      preprocessorOptions: {
        scss: {
          implementation: sass,
          includePaths: ["./node_modules"]
        }
      },
      postcss: {
        plugins: [postcssNesting(), autoprefixer()]
      }
    }
  };
});
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCJEOlxcXFxNQU1QXFxcXGh0ZG9jc1xcXFx0b21vcnJvdy1jb21wYW55XFxcXHdwLWNvbnRlbnRcXFxcdGhlbWVzXFxcXHRvbW9ycm93LWNvbXBhbnlcIjtjb25zdCBfX3ZpdGVfaW5qZWN0ZWRfb3JpZ2luYWxfZmlsZW5hbWUgPSBcIkQ6XFxcXE1BTVBcXFxcaHRkb2NzXFxcXHRvbW9ycm93LWNvbXBhbnlcXFxcd3AtY29udGVudFxcXFx0aGVtZXNcXFxcdG9tb3Jyb3ctY29tcGFueVxcXFx2aXRlLmNvbmZpZy5qc1wiO2NvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9pbXBvcnRfbWV0YV91cmwgPSBcImZpbGU6Ly8vRDovTUFNUC9odGRvY3MvdG9tb3Jyb3ctY29tcGFueS93cC1jb250ZW50L3RoZW1lcy90b21vcnJvdy1jb21wYW55L3ZpdGUuY29uZmlnLmpzXCI7aW1wb3J0IHsgZGVmaW5lQ29uZmlnIH0gZnJvbSBcInZpdGVcIjtcbmltcG9ydCBsaXZlUmVsb2FkIGZyb20gXCJ2aXRlLXBsdWdpbi1saXZlLXJlbG9hZFwiO1xuaW1wb3J0IGF1dG9wcmVmaXhlciBmcm9tIFwiYXV0b3ByZWZpeGVyXCI7XG5pbXBvcnQgcG9zdGNzc05lc3RpbmcgZnJvbSBcInBvc3Rjc3MtbmVzdGluZ1wiO1xuaW1wb3J0IHNhc3MgZnJvbSBcInZpdGUtcGx1Z2luLXNhc3NcIjtcbmltcG9ydCBwYXRoIGZyb20gXCJwYXRoXCI7XG5pbXBvcnQgZ2xzbCBmcm9tIFwidml0ZS1wbHVnaW4tZ2xzbFwiO1xuXG5jb25zb2xlLmxvZyhcIk5PREVfRU5WOlwiLCBwcm9jZXNzLmVudi5OT0RFX0VOVik7XG5jb25zdCBwcm9qZWN0TmFtZSA9IFwidG9tb3Jyb3ctY29tcGFueVwiOyAvL1x1MzBEN1x1MzBFRFx1MzBCOFx1MzBBN1x1MzBBRlx1MzBDOFx1NTQwRFxuLy8gY29uc3QgZGV2VXJsID0gYGh0dHA6Ly9sb2NhbGhvc3Q6ODAvJHtwcm9qZWN0TmFtZX1gOyAvL1x1OTU4Qlx1NzY3QVx1NzRCMFx1NTg4M1x1MzA2RVVSTFx1MzA5Mlx1NjMwN1x1NUI5QVxuY29uc3QgZGV2VXJsID0gYC8ke3Byb2plY3ROYW1lfS93cC1jb250ZW50L3RoZW1lcy8ke3Byb2plY3ROYW1lfS9wdWJsaWNgOyAvL1x1OTU4Qlx1NzY3QVx1NzRCMFx1NTg4M1x1MzA2RVVSTFx1MzA5Mlx1NjMwN1x1NUI5QVxuXG5leHBvcnQgZGVmYXVsdCBkZWZpbmVDb25maWcoKHsgY29tbWFuZCB9KSA9PiB7XG4gIC8vIGNvbnN0IGlzUHJvZHVjdGlvbiA9IGNvbW1hbmQgPT09IFwiYnVpbGRcIjtcbiAgY29uc29sZS5sb2coY29tbWFuZCk7XG4gIHJldHVybiB7XG4gICAgcGx1Z2luczogW1xuICAgICAgbGl2ZVJlbG9hZChbXG4gICAgICAgIF9fZGlybmFtZSArIFwiLyoqLyoucGhwXCIsXG4gICAgICAgIC8vICBfX2Rpcm5hbWUgKyBcIi8qKi8qLmpzXCJcbiAgICAgIF0pLFxuICAgICAgZ2xzbCgpLFxuICAgIF0sXG4gICAgcm9vdDogXCJcIiwgLy9cdTMwNTNcdTMwNkVcdTMwRDVcdTMwQTFcdTMwQTRcdTMwRUJcdTMwOTJcdTdGNkVcdTMwNDRcdTMwNjZcdTMwNDRcdTMwOEJcdTMwQzdcdTMwQTNcdTMwRUNcdTMwQUZcdTMwQzhcdTMwRUFcdTMwNENcdTMwRDdcdTMwRURcdTMwQjhcdTMwQTdcdTMwQUZcdTMwQzhcdTMwNkVcdTMwRUJcdTMwRkNcdTMwQzhcdTMwQzdcdTMwQTNcdTMwRUNcdTMwQUZcdTMwQzhcdTMwRUFcdTMwNjhcdTMwNkFcdTMwOEJcbiAgICAvLyBiYXNlOiBwcm9jZXNzLmVudi5OT0RFX0VOViA9PT0gXCJkZXZlbG9wbWVudFwiID8gZGV2VXJsIDogXCIuL1wiLCAvL1x1OTU4Qlx1NzY3QVx1NzRCMFx1NTg4M1x1MzA2RVVSTFx1MzA5Mlx1NjMwN1x1NUI5QVxuICAgIGJhc2U6IHByb2Nlc3MuZW52Lk5PREVfRU5WID09PSBcImRldmVsb3BtZW50XCIgPyBkZXZVcmwgOiBcIi4vXCIsIC8vXHU5NThCXHU3NjdBXHU3NEIwXHU1ODgzXHUzMDZFVVJMXHUzMDkyXHU2MzA3XHU1QjlBXG4gICAgLy9cdTMwNTNcdTMwNkVcdTc0QjBcdTU4ODNcdTU5MDlcdTY1NzBcdTMwNkZucG0gcnVuIGRldlx1MzA2N1x1MzA2QmRldmVsb3BtZW50XHUzMDZCXHU1MjA3XHUzMDhBXHU2NkZGXHUzMDhGXHUzMDhCXHUzMDAyXHVGRjA4cGFja2FnZS5qc29uXHU1M0MyXHU3MTY3XHVGRjA5XG4gICAgYnVpbGQ6IHtcbiAgICAgIG91dERpcjogcGF0aC5yZXNvbHZlKF9fZGlybmFtZSwgXCIuL2Rpc3RcIiksXG4gICAgICBlbXB0eU91dERpcjogdHJ1ZSxcbiAgICAgIG1hbmlmZXN0OiB0cnVlLFxuICAgICAgbWluaWZ5OiB0cnVlLFxuICAgICAgdGFyZ2V0OiBcImVzMjAxOFwiLFxuICAgICAgcm9sbHVwT3B0aW9uczoge1xuICAgICAgICAvLyBcdTMwQThcdTMwRjNcdTMwQzhcdTMwRUFcdTMwRkNcdTMwRERcdTMwQTRcdTMwRjNcdTMwQzhcdTMwNkVcdThBMkRcdTVCOUFcbiAgICAgICAgaW5wdXQ6IHtcbiAgICAgICAgICBtYWluOiBwYXRoLnJlc29sdmUoX19kaXJuYW1lICsgXCIvc3JjL2pzL21haW4uanNcIiksXG4gICAgICAgICAgc3ViOiBwYXRoLnJlc29sdmUoX19kaXJuYW1lICsgXCIvc3JjL2pzL3N1Yi5qc1wiKSxcbiAgICAgICAgICBzdHlsZTogcGF0aC5yZXNvbHZlKF9fZGlybmFtZSArIFwiL3NyYy9zY3NzL3N0eWxlLnNjc3NcIiksXG4gICAgICAgIH0sXG4gICAgICAgIG91dHB1dDoge1xuICAgICAgICAgIC8vIFx1NTFGQVx1NTI5Qlx1OEEyRFx1NUI5QVxuICAgICAgICAgIGVudHJ5RmlsZU5hbWVzOiBcImpzL1tuYW1lXS5qc1wiLFxuICAgICAgICAgIGNodW5rRmlsZU5hbWVzOiBcImpzL1tuYW1lXS5qc1wiLFxuICAgICAgICAgIGFzc2V0RmlsZU5hbWVzOiBcImFzc2V0cy9bbmFtZV0uW2V4dF1cIixcbiAgICAgICAgfSxcbiAgICAgIH0sXG4gICAgICBhc3NldHNJbmxpbmVMaW1pdDogMCxcbiAgICAgIGNzc0NvZGVTcGxpdDogZmFsc2UsIC8vIENTU1x1MzA2RVx1MzBCM1x1MzBGQ1x1MzBDOVx1NTIwNlx1NTI3Mlx1MzA5Mlx1NzEyMVx1NTJCOVx1MzA2Qlx1MzA1N1x1MzA3RVx1MzA1OVxuICAgICAgd3JpdGU6IHRydWUsXG4gICAgfSxcbiAgICBzZXJ2ZXI6IHtcbiAgICAgIGhvc3Q6IFwiMC4wLjAuMFwiLFxuICAgICAgY29yczogdHJ1ZSxcbiAgICAgIHN0cmljdFBvcnQ6IHRydWUsXG4gICAgICBwb3J0OiAzMDAwLFxuICAgICAgaHR0cHM6IGZhbHNlLFxuICAgICAgaG1yOiB7XG4gICAgICAgIGhvc3Q6IFwibG9jYWxob3N0XCIsXG4gICAgICB9LFxuICAgICAgb3BlbjogYGh0dHA6Ly9sb2NhbGhvc3Q6ODAvJHtwcm9qZWN0TmFtZX1gLCAvL1x1OTU4Qlx1NzY3QVx1NzRCMFx1NTg4M1x1MzA2RVVSTFx1MzA5Mlx1NjMwN1x1NUI5QVxuICAgIH0sXG4gICAgY3NzOiB7XG4gICAgICBwcmVwcm9jZXNzb3JPcHRpb25zOiB7XG4gICAgICAgIHNjc3M6IHtcbiAgICAgICAgICBpbXBsZW1lbnRhdGlvbjogc2FzcyxcbiAgICAgICAgICBpbmNsdWRlUGF0aHM6IFtcIi4vbm9kZV9tb2R1bGVzXCJdLFxuICAgICAgICB9LFxuICAgICAgfSxcbiAgICAgIHBvc3Rjc3M6IHtcbiAgICAgICAgcGx1Z2luczogW3Bvc3Rjc3NOZXN0aW5nKCksIGF1dG9wcmVmaXhlcigpXSxcbiAgICAgIH0sXG4gICAgfSxcbiAgfTtcbn0pO1xuXG4iXSwKICAibWFwcGluZ3MiOiAiO0FBQXNZLFNBQVMsb0JBQW9CO0FBQ25hLE9BQU8sZ0JBQWdCO0FBQ3ZCLE9BQU8sa0JBQWtCO0FBQ3pCLE9BQU8sb0JBQW9CO0FBQzNCLE9BQU8sVUFBVTtBQUNqQixPQUFPLFVBQVU7QUFDakIsT0FBTyxVQUFVO0FBTmpCLElBQU0sbUNBQW1DO0FBUXpDLFFBQVEsSUFBSSxhQUFhLFFBQVEsSUFBSSxRQUFRO0FBQzdDLElBQU0sY0FBYztBQUVwQixJQUFNLFNBQVMsSUFBSSxpQ0FBaUM7QUFFcEQsSUFBTyxzQkFBUSxhQUFhLENBQUMsRUFBRSxRQUFRLE1BQU07QUFFM0MsVUFBUSxJQUFJLE9BQU87QUFDbkIsU0FBTztBQUFBLElBQ0wsU0FBUztBQUFBLE1BQ1AsV0FBVztBQUFBLFFBQ1QsbUNBQVk7QUFBQTtBQUFBLE1BRWQsQ0FBQztBQUFBLE1BQ0QsS0FBSztBQUFBLElBQ1A7QUFBQSxJQUNBLE1BQU07QUFBQTtBQUFBO0FBQUEsSUFFTixNQUFNLFFBQVEsSUFBSSxhQUFhLGdCQUFnQixTQUFTO0FBQUE7QUFBQTtBQUFBLElBRXhELE9BQU87QUFBQSxNQUNMLFFBQVEsS0FBSyxRQUFRLGtDQUFXLFFBQVE7QUFBQSxNQUN4QyxhQUFhO0FBQUEsTUFDYixVQUFVO0FBQUEsTUFDVixRQUFRO0FBQUEsTUFDUixRQUFRO0FBQUEsTUFDUixlQUFlO0FBQUE7QUFBQSxRQUViLE9BQU87QUFBQSxVQUNMLE1BQU0sS0FBSyxRQUFRLG1DQUFZLGlCQUFpQjtBQUFBLFVBQ2hELEtBQUssS0FBSyxRQUFRLG1DQUFZLGdCQUFnQjtBQUFBLFVBQzlDLE9BQU8sS0FBSyxRQUFRLG1DQUFZLHNCQUFzQjtBQUFBLFFBQ3hEO0FBQUEsUUFDQSxRQUFRO0FBQUE7QUFBQSxVQUVOLGdCQUFnQjtBQUFBLFVBQ2hCLGdCQUFnQjtBQUFBLFVBQ2hCLGdCQUFnQjtBQUFBLFFBQ2xCO0FBQUEsTUFDRjtBQUFBLE1BQ0EsbUJBQW1CO0FBQUEsTUFDbkIsY0FBYztBQUFBO0FBQUEsTUFDZCxPQUFPO0FBQUEsSUFDVDtBQUFBLElBQ0EsUUFBUTtBQUFBLE1BQ04sTUFBTTtBQUFBLE1BQ04sTUFBTTtBQUFBLE1BQ04sWUFBWTtBQUFBLE1BQ1osTUFBTTtBQUFBLE1BQ04sT0FBTztBQUFBLE1BQ1AsS0FBSztBQUFBLFFBQ0gsTUFBTTtBQUFBLE1BQ1I7QUFBQSxNQUNBLE1BQU0sdUJBQXVCO0FBQUE7QUFBQSxJQUMvQjtBQUFBLElBQ0EsS0FBSztBQUFBLE1BQ0gscUJBQXFCO0FBQUEsUUFDbkIsTUFBTTtBQUFBLFVBQ0osZ0JBQWdCO0FBQUEsVUFDaEIsY0FBYyxDQUFDLGdCQUFnQjtBQUFBLFFBQ2pDO0FBQUEsTUFDRjtBQUFBLE1BQ0EsU0FBUztBQUFBLFFBQ1AsU0FBUyxDQUFDLGVBQWUsR0FBRyxhQUFhLENBQUM7QUFBQSxNQUM1QztBQUFBLElBQ0Y7QUFBQSxFQUNGO0FBQ0YsQ0FBQzsiLAogICJuYW1lcyI6IFtdCn0K
