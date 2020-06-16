<?php

  add_theme_support( 'menus' );

  function register_theme_menus() {
    register_nav_menus(
      array(
        'primary-menu' => __( 'Primary Menu' )
      )
    );
  }

  add_action( 'init', 'register_theme_menus' );

  function load_stylesheets() {
    // Custom styles
    wp_register_style('stylesheet', get_template_directory_uri() . '/css/application.css', array(), false, 'all');
    // WordPress style file
    wp_register_style('stylesheet', get_template_directory_uri() . 'css/style.css', array(), false, 'all');
    wp_enqueue_style('stylesheet');
  }

  function load_js() {
    // Custom scripts, dependent on jQuery
    wp_enqueue_script( 'scripts_js', get_template_directory_uri() . '/js/scripts.js', array ( 'jquery' ), 1.1, true);
  }

  add_action( 'wp_enqueue_scripts', 'load_js' );

  add_action('wp_enqueue_scripts', 'load_stylesheets');



?>