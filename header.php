<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo is_front_page() ? '' : wp_title('', false).' | '; bloginfo('name'); ?></title>
  <link rel="shortcut icon" href="<?php echo THEMEROOT; ?>/images/favicon.png" type="image/png" />

  <?php wp_head(); ?>
</head>
<body>
