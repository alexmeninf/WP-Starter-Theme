<?php
/**
 * 
 * Template name: Nome de exemplo
 * 
 * */

get_header();

if (have_posts()) : while (have_posts()) : the_post(); ?>


<!-- Página aqui -->


<?php 
endwhile; endif; 

get_footer(); ?>