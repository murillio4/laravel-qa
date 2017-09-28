const { mix } = require('laravel-mix');

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
    .js('resources/assets/js/bootstrap.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');

mix.copy('node_modules/semantic-ui-css/semantic.min.css','public/css/semantic.min.css')
    .copy('node_modules/semantic-ui-css/semantic.min.js','public/js/semantic.min.js')
    .copy('node_modules/bootstrap-tokenfield/dist/css/bootstrap-tokenfield.css','public/css/bootstrap-tokenfield.css')
    .copy('node_modules/bootstrap-tokenfield/dist/bootstrap-tokenfield.min.js','public/js/bootstrap-tokenfield.min.js')
    .copy('resources/assets/css/prism.css','public/css/prism.css')
    .copy('resources/assets/js/prism.min.js','public/js/prism.min.js')
    .copy('resources/assets/js/tinymce.min.js','public/js/tinymce.min.js');
