const mix = require('laravel-mix');
require('laravel-mix-purgecss');

mix.options({
  processCssUrls: false,
  postCss: [
    require('tailwindcss'),
    require('autoprefixer'),
  ],
});

mix.webpackConfig({
  devtool: 'source-map'
});

mix.browserSync({
  proxy: 'superstar.test',
  files: [
    'resources/js/*.{js,vue}',
    'resources/js/**/*.{js,vue}',
    'resources/sass/*.scss',
    'resources/sass/**/*.scss',
    '*.php',
    '**/*.php',
  ]
});

mix.setPublicPath('/');

mix.js('resources/js/app.js', 'public/js/app.js').vue();
mix.sass('resources/sass/app.scss', 'public/css/app.css').options({
  postCss: [
    require("@tailwindcss/jit"),
  ],
});
mix.sass('resources/sass/style.scss', 'style.css');

if (mix.inProduction()) {
  mix.version();
}
