var gulp = require('gulp');
var elixir = require('laravel-elixir');
var argv = require('yargs').argv;

elixir(function(mix) {
    var env = argv.e || argv.env || 'default';

    mix.copy('content/assets/**', 'public/assets')
    	.exec('php katana build --env=' + env, [
            './content/*',
            './content/**/*',
            './config*.php'
        ])
        .browserSync({
            server: {
                baseDir: 'public'
            },
            proxy: null,
            files: ['public/**/*']
        });
});
