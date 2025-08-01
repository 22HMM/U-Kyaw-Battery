let mix = require('laravel-mix');

mix.postCss('resources/css/app.css', 'public/css', [
    require('tailwindcss'),
]);

mix.js('resources/js/app.js', 'public/js');

mix.disableNotifications(); // Disabled annoying pop up for developer's mental health