const mix = require('laravel-mix');
require('laravel-mix-purgecss');

mix.options({
  processCssUrls: false,
  postCss: [
    require('tailwindcss'),
    require('autoprefixer')
  ],
}).purgeCss({
  enabled: mix.inProduction(),
  content: [
    "resources/js/*.js",
    'resources/js/**/*.js',
    'resources/js/*.vue',
    "resources/js/**/*.vue",
    "resources/sass/*.scss",
    'resources/sass/*/**.scss',
    "./**/*.php",
    "./*.php",
  ],
  css: ['style.css'],
});

mix.webpackConfig({
  devtool: 'source-map'
});

// mix.browserSync({
//   proxy: 'superstar.test',
//   files: [
//     'resources/js/*.js',
//     'resources/js/**/*.js',
//     'resources/js/*.vue',
//     'resources/js/**/*.vue',
//     'resources/sass/*.scss',
//     'resources/sass/*/**.scss',
//     './*.php',
//     './**/*.php',
//   ]
// });

mix.setPublicPath('/');

mix.js('resources/js/app.js', 'public/js/app.js')
  .sass('resources/sass/app.scss', 'public/css/app.css')
  .sass('resources/sass/mixins.scss', 'public/css/mixins.css')
  .sass('assets/sass/style.scss', 'style.css');

if (mix.inProduction()) {
  mix.version();
}
