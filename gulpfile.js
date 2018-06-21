let elixir = require('laravel-elixir');
elixir.config.css.folder = '';
elixir.config.css.sass.folder = '';
elixir.config.js.folder = '';
elixir.config.sourcemaps = false;
// elixir.config({ purifyCss: true });
/*************************
 * Require
 *************************/
require('laravel-elixir-vueify');

elixir(function (mix) {
	mix.browserSync({
		                online: true,
		                proxy: 'localhost:8000'
	                });

});
