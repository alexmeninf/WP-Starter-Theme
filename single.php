<?php get_header(); ?>
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>


<?php get_template_part('template-parts/post/get_categories'); ?>

<?php get_template_part('template-parts/post/get_tags'); ?>

<?php get_template_part('template-parts/post/get_share-post'); ?>

<?php get_template_part('template-parts/post/get_prev-next-posts'); ?>

<?php support_comments_facebook('post'); ?> 


<?php endwhile; endif; ?>
<?php get_footer(); ?>
