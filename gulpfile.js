const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

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

 elixir(mix => {
 	mix.sass('app.scss')
 	.webpack('app.js')
 	mix.browserSync({
 		proxy: 'studio-sova.dev'
 	});
 	 mix.scripts(['jquery.js','jquery.easing.min.js','scrolling-nav.js'], 'public/js/app.js');
 	 mix.scripts(['jquery.js','moment-with-locales.min.js','admin.js'], 'public/js/admin.js');
});
