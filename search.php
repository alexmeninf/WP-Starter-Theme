<?php
get_header();

$search = get_search_query(); 
?>


<section>
  <div class="container">

    <?php
    if (isset($search) && $search != '') :
      
      $search_post_type = array('post');

      $args_total_posts = array(
        'post_type'      => $search_post_type,
        'posts_per_page' => -1,
        's'              => $search,
        '_meta_or_title' => $search
      ); // total posts search
      $posts_total    = new WP_Query($args_total_posts);
      $posts_count    = $posts_total->post_count; // total de posts
      $posts_per_page = 2;
      $pages_count    = ceil($posts_count / $posts_per_page);
      $current_page   = ( isset($_GET['pg']) && $_GET['pg'] > 1 && $_GET['pg'] <= $pages_count ) ? $_GET['pg'] : 1;

      $args = array(
        'post_type'      => $search_post_type,
        'orderby'        => 'id',
        'posts_per_page' => $posts_per_page,
        'order'          => 'DESC',
        'paged'          => $current_page,
        's'              => $search,
        '_meta_or_title' => $search);
      $query_search = new WP_Query($args);

      if ($query_search->have_posts()) : ?>

        <div class="row">
          <div class="col-md-12">
            <h2 class="title-search">Resultados encontrados com '<?= $search ?>'</h2>
            <p><?= $posts_count ?> resultados encontrados.</p>
            <hr>
          </div>
        </div>

        <div class="row">
          <?php
          /*----------  Loop  ----------*/
          while ($query_search->have_posts()) :
            $query_search->the_post(); ?>

            <?php the_title(); ?><br>

          <?php endwhile; ?>
        </div>

        <?php
        // **** Pagination ****
        $maxLinks = 3; // Limite de link antes e depois
        if( $pages_count > 0 ) : ?>
          <div class="row">
            <nav class="col-sm-12 mt-5" aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <?php
                  echo '<li class="page-item"><a class="page-link" href="'.get_bloginfo('url').'/?s='.$search.'&pg=1" aria-label="Previous"><span>&laquo;</span></a></li>';
                  for($i = $current_page - $maxLinks; $i <= $current_page - 1; $i++):
                    if($i >= 1):
                      echo '<li><a class="page-link" href="'.get_bloginfo('url').'/?s='.$search.'&pg='.$i.'">'.$i.'</a></li>';
                    endif;
                  endfor;
                  echo '<li class="page-item active"><a class="page-link" href="'.get_bloginfo('url').'/?s='.$search.'&pg='.$current_page.'"> '.$current_page.'</a></li>';
                  for($i = $current_page + 1; $i <= $current_page + $maxLinks; $i++):
                    if($i <= $pages_count):
                      echo '<li class="page-item"><a class="page-link" href="'.get_bloginfo('url').'/?s='.$search.'&pg='.$i.'">'.$i.'</a></li>';
                    endif;
                  endfor;
                  echo '<li class="page-item"><a class="page-link" href="'.get_bloginfo('url').'/?s='.$search.'&pg='.$pages_count.'" aria-label="Next"><span>&raquo;</span></a></li>';
                  ?>
              </ul>
            </nav>
          </div>
        <?php endif; ?>

      <?php else: ?>

        <div class="row">
          <div class="col-md-12 text-center">
            <div class="alert alert-warning" role="alert">
              Nenhuma página com o nome <b><?= $search ?></b> foi encontrada.
            </div>
          </div>
        </div>

      <?php endif; wp_reset_postdata();

    else: ?>

    <div class="row">
      <div class="col-md-12 text-center">
        <div class="alert alert-danger" role="alert">
          Nenhuma página foi encontrada, você deve digitar o que busca.
        </div>
      </div>
    </div>

    <?php
    endif; ?>

  </div><!-- /.container -->
</section><!-- section end -->


<?php get_footer() ?>
