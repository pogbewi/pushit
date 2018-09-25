const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');

  mix.styles([
      'public/assets/web/assets/mobirise-icons/mobirise-icons.css',
       'public/assets/tether/tether.min.css',
      'public/assets/bootstrap/css/bootstrap.min.css',
       'public/assets/bootstrap/css/bootstrap-grid.min.css',
       'public/assets/bootstrap/css/bootstrap-reboot.min.css',
       'public/assets/dropdown/css/style.css',
       'public/assets/socicon/css/styles.css',
       'public/assets/theme/css/style.css',
       'public/assets/mobirise/css/mbr-additional.css',
], 'public/css/all.css');

  mix.scripts([
      'public/assets/web/assets/jquery/jquery.min.js',
      'public/assets/popper/popper.min.js',
      'public/assets/tether/tether.min.js',
      'public/assets/bootstrap/js/bootstrap.min.js',
      'public/assets/smoothscroll/smooth-scroll.js',
      'public/assets/dropdown/js/script.min.js',
      'public/assets/touchswipe/jquery.touch-swipe.min.js',
      'public/assets/ytplayer/jquery.mb.ytplayer.min.js',
      'public/assets/vimeoplayer/jquery.mb.vimeo_player.js',
      'public/assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js',
      'public/assets/theme/js/script.js',
      'public/assets/slidervideo/script.js',
      'public/assets/formoid/formoid.min.js',
      'public/assets/anim/jquery.easing.min.js',
  ], 'public/js/all.js');
