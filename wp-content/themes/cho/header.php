<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotswold Hybrid Organs</title>
      <?php wp_head();?>
  </head>
<body <?php body_class(); ?>>
<header>
  <div class="logo-container">
    <img
      src="<?php bloginfo('template_directory');?>/img/top2.png"
      alt="Cotswold Hybrid Organs logo"
    >
  </div>
  <nav class="flex-nav">
    <?php
      $defaults = array(
          'container' => true,
          'theme_location' => 'primary-menu',
          'menu_class' => 'no-bullet desktop'
          // 'menu_class' => 'hidden'
          // 'menu_id' => 'your_menu_id',
      );
      wp_nav_menu( $defaults );
    ?>
  </nav>
</header>

<div class="site-container">