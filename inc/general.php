<?php
/*===================================================
=            UPDATE WORDPRESS LOGIN LOGO DARK            =
===================================================*/
function my_login_logo() { ?>
	<style type="text/css">
	#login h1 a, .login h1 a {background-image:url('http://s3.dvulgsolucoes.com.br/assets/img/logo-dvulg-wordpress-white.png');background-repeat:no-repeat;height:105px;padding-bottom:30px;width:105px;}body{background:#222!important}.login #backtoblog a,.login #nav a{color:#adadad!important}.login #login_error,.login .message,.login .success,.login form{border-radius:10px}.wp-core-ui .button-primary{background:#eb6358!important;border-color:#eb6358!important;box-shadow:none!important;color:#fff!important;text-decoration:none!important;text-shadow:none!important}
	</style>
<?php } add_action( 'login_enqueue_scripts', 'my_login_logo' );


/**
 * remove some styles
 */
function wc_remove_block_library_css(){
	if (!is_admin()) {
		wp_dequeue_style( 'wc-block-style' );
		wp_dequeue_style( 'wp-block-library' );
	}
} 
add_action( 'wp_enqueue_scripts', 'wc_remove_block_library_css' );


/*========================================
=            Show the page name          =
========================================*/
function the_title_page() {
	if (is_404()) {
		echo 'Página não encontrada';

	} elseif (is_tag()) {
		single_tag_title();
		
	} elseif (is_category()) {
		single_cat_title();

	} elseif (is_tax()) {
		$term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
		echo $term->name;

	} elseif (is_day()) {
		echo "Arquivo de " . get_the_time('j \d\e F \d\e Y');

	} elseif (is_month()) {
		echo "Arquivo de " . get_the_time('F \d\e Y');

	} elseif (is_year()) {
		echo "Arquivo de " . get_the_time('Y');

	} elseif (is_author()) {
		echo "Arquivo do autor";

	} elseif (isset($_GET['p']) && !empty($_GET['p'])) {
		echo "Arquivo do blog";

	} elseif (is_search()) {
		echo "Resultados da pesquisa";
	} else {
		the_title();
	}
}


/*========================================
=       Support Facebook comments       =
========================================*/
function support_commet_facebook($order = 'footer', $num_posts = 9, $language = 'pt_BR') {
	if (is_single()) :
		if ($order == 'post') : ?>

			<div class="comment-box">
				<div class="fb-comments" data-href="<?php the_permalink() ?>" data-width="100%" data-numposts="<?= $num_posts ?>"></div>
			</div>  

		<?php elseif ($order == 'footer') : ?>

			<script>
				jQuery(function() {
					function fluidComments() {
						var $myWrap = $(".comment-box");
						width = $myWrap.width();

						$(".fb-comments").attr("data-width", width);
						if ($(".fb-comments > span > iframe").length == 1) FB.XFBML.parse();
					}

					$(function () {
						fluidComments();
					});

					var progresso;
					window.onresize = function () {
						clearTimeout(progresso);
						progresso = setTimeout(fluidComments, 100);
					};
				});
			</script>
			<div id="fb-root"></div>
			<script async defer crossorigin="anonymous" src="https://connect.facebook.net/<?= $language ?>/sdk.js#xfbml=1&version=v7.0"></script>
		
	<?php endif;
	endif;
}
