<?php get_header(); ?>
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>


<section class="min-vh-100 d-flex align-items-center spacing">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>


<?php endwhile; endif; ?>
<?php get_footer(); ?>
