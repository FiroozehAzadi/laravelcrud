   const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js') // Ensure this path is correct
   .css('/resources/css/app.css', '/public/css') // Include your CSS file
   .version();