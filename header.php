<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php bloginfo('name'); ?> <?php wp_title('|'); ?></title>

<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&family=Playfair+Display&display=swap" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header style="background:
  linear-gradient(rgba(255,111,97,0.4), rgba(255,216,177,0.4))
  <?php if (get_header_image()) : ?>
    , url('<?php header_image(); ?>') center/cover no-repeat
  <?php endif; ?>;">

  <h1><?php bloginfo('name'); ?></h1>

</header>

<nav>
  <?php
    wp_nav_menu([
      'theme_location' => 'primary',
      'container' => false,
  'menu_class' => 'nav-menu',
    ]);
  ?>
</nav>

<div class="container">