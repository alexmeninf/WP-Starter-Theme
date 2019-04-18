<?php
/* Warning: Don't Remove This Include */
require_once('_framework/framework.php');


# =================================
# =           CSS Files           =
# =================================
/*----------  New CSS Default  ----------*/
new_css('font-raleway', 'https://fonts.googleapis.com/css?family=Raleway:200,300,400,500');
new_css('bootstrap',    'css/bootstrap/bootstrap.css');
new_css('fontawesome',  'plugins/fontawesome/css/all.min.css');
new_css('owl-carousel', 'plugins/owl-carousel/css/owl.carousel.min.css');
new_css('owl-theme',    'plugins/owl-carousel/css/owl.theme.default.min.css');
new_css('lightgallery', 'plugins/lightgallery/css/lightgallery.min.css');
new_css('animate',      'plugins/wow/css/animate.css');
new_css('iziToast',     'plugins/izitoast/css/iziToast.min.css');
new_css('main',         'css/main.css');
new_css('style',        'style.css');

/*----------  Use CSS Default  ----------*/
// use_css('font-raleway');
// use_css('bootstrap');
// use_css('fontawesome');
// use_css('owl-carousel');
// use_css('owl-theme');
// use_css('lightgallery');
// use_css('animate');
// use_css('iziToast');
use_css('main');
use_css('style');


# ====================================
# =           Script Files           =
# ====================================
/*----------  New JS Default  ----------*/
new_js('modernizr',    'plugins/jquery/modernizr-3.5.0.min.js', true);
new_js('jquery',       'plugins/jquery/jquery-3.3.1.min.js', true);
new_js('popper',       'plugins/popper/js/popper.min.js', true);
new_js('bootstrap',    'plugins/bootstrap/js/bootstrap.min.js', true);
new_js('owl-carousel', 'plugins/owl-carousel/js/owl.carousel.min.js', true);
new_js('lightgallery', 'plugins/lightgallery/js/lightgallery.min.js', true);
new_js('jquery.mask',  'plugins/jquery-mask/js/jquery.mask.min.js', true);
new_js('wow',          'plugins/wow/js/wow.min.js', true);
new_js('iziToast',     'plugins/izitoast/js/iziToast.min.js', true);
new_js('lazyload',     'plugins/lazyload.min.js', true);
new_js('main',         'js/main.js', true);

/*----------  Use JS Default  ----------*/
// use_js('modernizr');
// use_js('jquery');
// use_js('popper');
// use_js('bootstrap');
// use_js('owl-carousel');
// use_js('lightgallery');
// use_js('jquery.mask');
// use_js('wow');
// use_js('iziToast');
// use_js('lazyload');
use_js('main');
