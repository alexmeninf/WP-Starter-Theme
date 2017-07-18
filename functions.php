<?php
/* Don't Remove This Include */
require_once('_framework/framework.php');


/**
 * CSS FILES
 **/
new_css('font-roboto', 'https://fonts.googleapis.com/css?family=Roboto:300,400,700');
new_css('bootstrap', 'css/bootstrap/bootstrap.css');
new_css('font-awesome', 'css/font-awesome.min.css');
new_css('owl-carousel', 'css/owl.carousel.min.css');
new_css('owl-theme', 'css/owl.theme.default.min.css');
new_css('main', 'css/main.css');
new_css('style', 'style.css');

// use_css('font-roboto');
use_css('bootstrap');
// use_css('font-awesome');
// use_css('owl-carousel');
// use_css('owl-theme');
use_css('main');
use_css('style');


/**
 * JS FILES
 **/
new_js('modernizr', 'js/vendor/modernizr-3.5.0.min.js');
new_js('jquery', 'js/vendor/jquery-3.2.1.min.js', true);
new_js('tether', 'js/tether-1.4.0.min.js', true);
new_js('bootstrap', 'js/bootstrap.min.js', true);
new_js('owl-carousel', 'js/owl.carousel.min.js', true);
new_js('main', 'js/main.js', true);

use_js('modernizr');
use_js('jquery');
use_js('tether');
use_js('bootstrap');
// use_js('owl-carousel');
use_js('main');