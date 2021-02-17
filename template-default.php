<?php
/**
 * 
 * Template name: Nome de exemplo
 * 
 * */

get_header();

if (have_posts()) : while (have_posts()) : the_post(); ?>


<!-- Página aqui -->
section.spacing>.container>.row.justify-content-center.align-items-center>.col-12|c


<?php 
endwhile; endif; 

get_footer(); ?>
