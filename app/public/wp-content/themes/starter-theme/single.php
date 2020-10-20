<?php get_header(); ?>

<div class="wrapper">

  <div class="content">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <section>
      <div class="post-hero">
        <div class="post-info" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <p><?php the_category(); ?></p>
          <h1><?php the_title(); ?></h1>
          <h2>By: <?php echo get_the_author(); ?></h2>
        </div>
        <div class="post-img">
          <?php the_post_thumbnail('full'); ?>
        </div>
      </div>
      <div class="post-text background">
        <?php the_content(); ?>
      </div>
    </section>

    <?php endwhile; // end of the loop. ?>
  </div>

</div>

<?php get_footer(); ?>