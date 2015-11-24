var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss', 'public/assets/css');
     mix.scripts(['jquery.js', 'plugins/prism.js', 'plugins/bootstrap.js', 'plugins/scotchPanels.js', 'plugins/algoliasearch.js', 'plugins/typeahead.js', 'plugins/hogan.js', 'plugins/mousetrap.js', 'app.js'],
      'public/assets/js/app.js',
    	'resources/assets/js/');
    mix.version(['assets/css/app.css', 'assets/js/app.js']);
});
