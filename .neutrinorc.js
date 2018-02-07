module.exports = {
  options: {
    source: "js",
    output: "dist/js",
    tests: "tests/js",
    mains: {
      app: "index"
    }
  },
  use: [
    "@neutrinojs/airbnb",
    "@neutrinojs/jest",
    [
      "@neutrinojs/react",
      {
        devServer: {

          // Proxy WordPress backend
          proxy: "http://localhost:8080",

          // Make JS available on plugin related path
          publicPath: "/wp-content/plugins/plugin-name/js"
        }
      }
    ]
  ]
};
