<?php get_header(); ?>
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>


<section class="min-vh-100 d-flex align-items-center spacing">
  <div class="container">
    <div class="row">
      
      <?php if ( is_active_sidebar( 'sidebar-2' )  ) : ?>
        <div class="col-lg-4 widget-area" role="complementary">
          
          <?php dynamic_sidebar( 'sidebar-2' ); ?>
          
        </div>
      <?php endif; ?>
      
      <div class="col-lg-<?= is_active_sidebar( 'sidebar-2' ) ? '8' : '4' ?>">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>


<?php endwhile; endif; ?>
<?php get_footer(); ?>
