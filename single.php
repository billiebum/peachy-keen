<?php get_header(); ?>

<div class="container">

  <div class="main-content">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <h2><?php the_title(); ?></h2>

      <p>
Posted on <?php echo get_the_date(); ?> at <?php echo get_the_time(); ?> by <?php the_author(); ?> in <?php the_category(', '); ?>
      </p>

      <?php the_content(); ?>

<div class="post-tags">
  <?php the_tags('Tags: ', ', '); ?>
</div>

      <?php comments_template(); ?>  <!-- 👈 THIS WAS MISSING -->

    <?php endwhile; endif; ?>

  </div>

  <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>