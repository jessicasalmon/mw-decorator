<?php

add_theme_support( 'menus' );
add_theme_support( 'title-tag' );


// this function makes WP recognise our menu(s)
function register_theme_menus(){
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' ),
    )
  );
}
add_action( 'init', 'register_theme_menus');



// this function loads the style (css) files
function mw_theme_styles(){
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'nav_css', get_template_directory_uri() . '/nav.css' );
  wp_enqueue_style( 'faq-accordion_css', get_template_directory_uri() . '/css/faq-accordion.css' );
  wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
  wp_enqueue_style('responsive_grid_css', get_template_directory_uri() . '/css/responsive-grid.css');
  wp_enqueue_style('testimonial_slide_css', get_template_directory_uri() . '/css/testimonial-slide.css');
  wp_enqueue_style('header_css', get_template_directory_uri() . '/header.css');

}
add_action( 'wp_enqueue_scripts', 'mw_theme_styles' );


// this function loads the scripts (js)
function mw_theme_js(){
  wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', '', '', true );
  wp_enqueue_script( 'nav_js', get_template_directory_uri() . '/js/nav.js', '', '', true );
  wp_enqueue_script( 'testimonial_slideshow_js', get_template_directory_uri() . '/js/testimonial-slide.js', array('main_js'), '', true );
  wp_enqueue_script( 'faq-accordion_js', get_template_directory_uri() . '/js/faq-accordion.js', array('main_js'), '', true );

  // note last three args:
  // wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', array('jquery'), '', true) ;
}
add_action( 'wp_enqueue_scripts', 'mw_theme_js' );
