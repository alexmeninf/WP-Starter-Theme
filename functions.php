<?php
/* Warning: Don't Remove This Include */
require_once('_framework/framework.php');


# =================================
# =           CSS Files           =
# =================================
/*----------  New CSS Default  ----------*/
new_css('font-raleway-default', 'https://fonts.googleapis.com/css?family=Raleway:200,300,400,500');
new_css('bootstrap-default', 'css/bootstrap/bootstrap.css');
new_css('fontawesome-default', 'plugins/fontawesome/css/all.min.css');
new_css('owl-carousel-default', 'plugins/owl-carousel/css/owl.carousel.min.css');
new_css('owl-theme-default', 'plugins/owl-carousel/css/owl.theme.default.min.css');
new_css('lightgallery-default', 'plugins/lightgallery/css/lightgallery.min.css');
new_css('animate-default', 'plugins/wow/css/animate.css');
new_css('iziToast-default', 'plugins/izitoast/css/iziToast.min.css');
new_css('main-default', 'css/main.css');
new_css('style-default', 'style.css');

/*----------  Use CSS Default  ----------*/
// use_css('font-raleway-default');
// use_css('bootstrap-default');
// use_css('fontawesome-default');
// use_css('owl-carousel-default');
// use_css('owl-theme-default');
// use_css('lightgallery-default');
// use_css('animate-default');
// use_css('iziToast-default');
use_css('main-default');
use_css('style-default');


# ====================================
# =           Script Files           =
# ====================================
/*----------  New JS Default  ----------*/
new_js('modernizr-default', 'plugins/jquery/moderniz.min.js', true);
new_js('jquery-default', 'plugins/jquery/jquery.min.js', true);
new_js('popper-default', 'plugins/popper/js/popper.min.js', true);
new_js('bootstrap-default', 'plugins/bootstrap/js/bootstrap.min.js', true);
new_js('owl-carousel-default', 'plugins/owl-carousel/js/owl.carousel.min.js', true);
new_js('lightgallery-default', 'plugins/lightgallery/js/lightgallery.min.js', true);
new_js('jquery.mask-default', 'plugins/jquery-mask/js/jquery.mask.min.js', true);
new_js('wow-default', 'plugins/wow/js/wow.min.js', true);
new_js('sweetalert-default', 'plugins/sweetalert/sweetalert2.all.min.js', true);
new_js('lazyload-default', 'plugins/lazyload.min.js', true);
new_js('main-default', 'js/main.js', true);

/*----------  Use JS Default  ----------*/
// use_js('modernizr-default');
// use_js('jquery-default');
// use_js('popper-default');
// use_js('bootstrap-default');
// use_js('owl-carousel-default');
// use_js('lightgallery-default');
// use_js('jquery.mask-default');
// use_js('wow-default');
// use_js('sweetalert-default');
// use_js('lazyload-default');
use_js('main-default');


include 'functions/general.php';
