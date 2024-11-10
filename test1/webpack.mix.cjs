
  const mix = require('laravel-mix');
  mix.js('resources/js/bootstrap.js', 'public/js').js('resources/js/jquery-3.7.1.js','public/js')
    .postCss('resources/css/bootstrap.css', 'public/css');
