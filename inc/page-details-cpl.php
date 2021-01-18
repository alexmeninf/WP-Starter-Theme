<?php
/**
 * the_support_material
 * Mostra o botão do material de apoio.
 *
 * @param  mixed $link
 * @param  mixed $date
 * @return void
 */
function the_support_material() {
  $link   = get_field("link_atividade");
  $date   = get_field('publication_data');

  if ( $link ) : 
    $link_url = $link['url'];
    $link_title = $link['title'] ? $link['title'] : 'Material de apoio';
    $link_target = $link['target'] ? $link['target'] : '_blank'; 
    
    if (is_published($date)) : ?>

      <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>

    <?php else : ?>

      <a class="btn" href="javascript:void(0);">Material em breve</a>
  <?php endif;
  endif;
}


/**
 * the_sales_button
 * Mostra o botão de vendas
 *
 * @return void
 */
function the_sales_button() {
  $link_sales     = get_field('link_hotmart', 'options');
  $button         = '<a href="'. $link_sales .'" target="_blank" rel="noopener">Matricule-se agora!</a>';
  $date           = get_field('automatically_publish', 'options');
  $specific_pages = get_field('show_on_specific_pages', 'options');

  if (get_field('show_btn_vendas', 'options') && $link_sales != '' && is_page($specific_pages)) : 
    if ($date) :
      if (is_published($date)) :
        echo $button;
      endif;
    else : 
      echo $button;
    endif;
  endif;
}

/**
 * the_embed_video
 *
 * @param  mixed $embed - Get the full iframe
 * @param  mixed $date_published - Given in which the video will appear
 * @param  mixed $img - Thumbnail for video
 * @return string
 */
function the_embed_video($iframe, $date_published, $img) {
  $html_embed = '<div class="embed-video ratio ratio-16x9">';
  $html_embed .= embed_video($iframe);
  $html_embed .= '</div>';

  $html_img = '<img src="'. $img['url'] .'" alt="Em breve" class="img-fluid img_coming_soon">';

  if ( is_published($date_published) ) {
    echo $html_embed;
  } else {
    echo $html_img;
  }
}


/**
 * embed_video
 * 
 * @param  mixed $iframe
 * @return string returns an iframe
 */
function embed_video($iframe) {
  preg_match('/src="(.+?)"/', $iframe, $matches);
  $src = $matches[1];

  $params = array(
    'controls'  => 1,
    'rel'       => 0,
  );
  $new_src = add_query_arg($params, $src);
  $iframe  = str_replace($src, $new_src, $iframe);

  // Add extra attributes to iframe HTML.
  $attributes = 'frameborder="0"';
  $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
  
  return $iframe;
}


/**
 * is_published
 *
 * @param  mixed $date
 * @return boolean
 */
function is_published($date) {
  date_default_timezone_set('UTC');
  
  $check = false;

  if ( strtotime(date('Y-m-d H:i:s') . '-3 hours') >= strtotime($date) ) {
    $check = true;
  }

   return $check;
}