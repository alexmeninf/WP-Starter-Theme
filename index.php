<?php get_header(); ?>
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>



<p>Hello world! This is WP Starter Framework.</p>



<?php endwhile; endif; ?>
<?php get_footer(); ?>