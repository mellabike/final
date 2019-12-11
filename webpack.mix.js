const mix = require('laravel-mix');

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

/* OJO este es el original lo cambie segun el tutorial por el que esta abajo */

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');


   mix.styles([
      'resources/plantilla/css/font-awesome.min.css',
      'resources/plantilla/csssimple-line-icons.min.css/',
      'resources/plantilla/css/style.css',
  ], 'public/css/plantilla.css')
  
   mix.scripts([
      'resources/plantilla/js/jquery.min.js',
      'resources/plantilla/js/popper.min.js',
      'resources/plantilla/js/bootstrap.min.js',
      'resources/plantilla/js/Chart.min.js',
      'resources/plantilla/js/pace.min.js',
      'resources/plantilla/js/template.min.js',
   ], 'public/js/plantilla.js');
