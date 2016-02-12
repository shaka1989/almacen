var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('*.scss', 'public/css/all.css');

    mix.scripts('login/*.js', 'public/js/login.js')
    	.scripts('home/*.js', 'public/js/home.js')
    	.scripts('product/*.js', 'public/js/product.js')
    	.scripts('chart/*.js', 'public/js/chart.js');


});
