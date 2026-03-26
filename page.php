<?php get_header(); ?>

<div class="container">

  <div class="main-content">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <h2 class="page-title"><?php the_title(); ?></h2>

      <?php the_content(); ?>

    <?php endwhile; endif; ?>

  </div>

  <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>