<?php

function sunset_theme_setup() {

  add_theme_support('title-tag');

  add_theme_support('post-thumbnails');

  add_theme_support('custom-header', [
    'width' => 1200,
    'height' => 250,
    'flex-height' => true,
    'flex-width' => true,
  ]);

  register_nav_menus([
    'primary' => 'Primary Menu',
  ]);
}
add_action('after_setup_theme', 'sunset_theme_setup');


function sunset_enqueue_styles() {
  wp_enqueue_style('main-style', get_stylesheet_uri());

  wp_enqueue_style(
    'google-fonts',
    'https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&family=Playfair+Display&display=swap',
    [],
    null
  );
}
add_action('wp_enqueue_scripts', 'sunset_enqueue_styles');

function sunset_widgets_init() {
  register_sidebar(array(
    'name' => 'Primary Sidebar',
    'id' => 'primary',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
  ));
}
add_action('widgets_init', 'sunset_widgets_init');