<?php /* Template Name: Contact */ ?>

<?php get_header();  ?>

<div class="wrapper">
  <div class="content">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <div class="contact-hero">
      <h1><?php the_title(); ?></h1>
        <?php $image = get_field('contact_image');
          if( $image ) {
              echo wp_get_attachment_image( $image, 'rectangular');
          } 
        ?>
      </div>
    <?php the_content(); ?>
    <?php endwhile; // end the loop?>
  </div>
</div>

<?php get_footer(); ?>