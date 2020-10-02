<?php get_header();  ?>

<?php function melsFunction($n1, $n2) {
  $tally = $n1 + $n2;
  return $tally;
  }
  echo melsFunction(10, 20);
?>

<div class="wrapper">
  <div class="content">
    <?php // Start the loop ?>

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <p><?php the_date(); ?></p>
      <?php the_excerpt(); ?>
      <?php the_post_thumbnail(); ?>

    <?php endwhile; // end the loop?>
  </div> <!-- /,content -->
  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>