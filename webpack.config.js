const webpack = require("webpack");
const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const MinifyPlugin = require("babel-minify-webpack-plugin");
const OptimizeCSSAssets = require("optimize-css-assets-webpack-plugin");
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const CleanWebpackPlugin = require('clean-webpack-plugin');

/////////////////////////////////////////////////////////////////////////

const localhost = 'http://test:8888'; // Server address as setup in MAMP

/////////////////////////////////////////////////////////////////////////

let config = {
  entry: ['./src/js/index.js', './src/scss/application.scss'],
  output: {
    path: path.resolve(__dirname, "./assets/js"),
    filename: "./bundle.js"
  },
  module: {
    rules: [{
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader"
        }
      },
      {
        test: /\.(scss|css)$/,
        use: [{
            loader: MiniCssExtractPlugin.loader
          },
          {
            loader: "css-loader",
            options: {
              importLoaders: 1
            }
          },
          {
            loader: 'postcss-loader',
            options: {
              sourceMap: true
            }
          },
          {
            loader: "sass-loader",
            options: {
              sourceMap: true
            }
          }
        ]
      },
      {
        test: /\.(ttf|eot|woff|woff2)$/,
        use: {
          loader: "file-loader",
          options: {
            name: "../fonts/[name].[ext]"
          },
        },
      },
      {
        test: /\.(jpe?g|png|gif|svg|ico)$/i,
        use: [{
          loader: "file-loader",
          options: {
            name: "../images/[name].[ext]"
          }
        }]
      }
    ]
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "../css/bundle.css",
		}),
		new MinifyPlugin(),
		new OptimizeCSSAssets(),
		new BrowserSyncPlugin({
      host: 'localhost',
      port: '3000',
      proxy: localhost,
      files: [{
        match: ['**/*.php'],
        fn: function(event, file) {
          if (event === "change") {
            const bs = require('browser-sync').get('bs-webpack-plugin');
            bs.reload();
          }
        }
      }],
      injectChanges: true,
      notify: true
    })
  ]
}
module.exports = config;
