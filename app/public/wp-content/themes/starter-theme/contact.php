<?php /* Template Name: Contact */ ?>

<?php get_header();  ?>

<section>
  <div class="wrapper">
    <div class="contact-hero">
      <h1><?php the_field('contact_title'); ?></h1>
        <?php $image = get_field('contact_image');
          if( $image ) {
              echo wp_get_attachment_image( $image, 'rectangular');
          } 
        ?>
    </div>
  
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile; // end the loop?>
    
    <div class="contact-map">
      <p><?php the_field('contact_address'); ?></p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.9951974547866!2d-79.40004738429855!3d43.648268260767324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34dc87fa67bd%3A0xe172d8fcbe1c5997!2sJuno%20College%20of%20Technology%20(formerly%20HackerYou)!5e0!3m2!1sen!2sca!4v1603222676060!5m2!1sen!2sca" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

  </div>
</section>

<?php get_footer(); ?>