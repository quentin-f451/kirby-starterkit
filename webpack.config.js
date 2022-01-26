const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const merge = require("webpack-merge");
const LiveReloadPlugin = require("webpack-livereload-plugin");

const commonConfig = {
  context: path.resolve(__dirname, "./src/"),
  entry: "./js/index.js",
  output: {
    path: path.resolve(__dirname, "./www/assets/"),
    publicPath: "/",
    filename: "./js/bundle.js",
    assetModuleFilename: "./",
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /(node_modules)/,
        use: {
          loader: "babel-loader",
          options: {
            presets: ["@babel/preset-env"],
          },
        },
      },
      {
        test: /\.(sa|sc|c)ss$/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
            options: { publicPath: "." },
          },
          {
            loader: "css-loader",
          },
          {
            loader: "postcss-loader",
          },
          {
            loader: "sass-loader",
            options: {
              implementation: require("sass"),
            },
          },
        ],
      },
      {
        test: /\.(png|jpg|gif|svg)$/,
        type: "asset/resource",
        generator: {
          filename: "./images/[name][ext]",
        },
      },
      {
        test: /.(ttf|otf|eot|woff(2)?)(\?[a-z0-9]+)?$/,
        type: "asset/resource",
        generator: {
          filename: "./fonts/[name][ext]",
        },
      },
    ],
  },
  plugins: [
    new LiveReloadPlugin(),
    new MiniCssExtractPlugin({
      filename: "./css/bundle.css",
    }),
  ],
};

/**
 * Export config based on mode
 */
module.exports = (env, argv) => {
  const mode = argv.mode;

  /**
   * Development config
   */
  if (mode === "development") {
    return merge(commonConfig, {
      devtool: "inline-source-map",
    });
  }

  /**
   * Production config
   */
  if (mode === "production") {
    return merge(commonConfig, {});
  }
};
