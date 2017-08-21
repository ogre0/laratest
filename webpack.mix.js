let mix = require('laravel-mix');





// config eslint
mix.webpackConfig({
  module: {
    rules: [
      {
        exclude: /node_modules/,
        loader: 'eslint-loader',
        test: /\.(js|vue)?$/ 
      },
    ]
  }
})




/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .extract(['vue'])
   .sass('resources/assets/sass/app.scss', 'public/css');
