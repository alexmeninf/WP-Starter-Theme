<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<title><?php echo is_front_page() ? '' : wp_title('', false).' | '; bloginfo('name'); ?></title>

	<?php wp_head(); ?>

	<?php 
	// Código de incorporação de analytics
	if ( function_exists('get_field') ) : 
		the_field('code_analytics_head', 'options');
	endif; ?>

</head>
<body <?php body_class() ?>>
	<?php wp_body_open(); ?>

	<?php 
	// Código após abertura do <body> para analitycs
	if ( function_exists('get_field') )
		the_field('code_analytics_after_body', 'options');

	// Título das páginas
	if ( ! (is_front_page() || is_home()) ) 
		get_template_part('template-parts/navigation/navbar');
	?>
