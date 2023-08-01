const mix = require('laravel-mix');


// Copiar o arquivo do jQuery para a pasta public
mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');

// Restante do código...
mix.js('resources/js/app.js', 'public/js')
  .sass('resources/sass/app.scss', 'public/css')
  .version();
