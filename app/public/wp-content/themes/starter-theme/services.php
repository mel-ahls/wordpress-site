<?php /* Template Name: Services */ ?>

<?php get_header(); ?>

<section>
  <div class="services-title wrapper">
    <h1><?php the_field('services_title'); ?></h1>
    <?php $image = get_field('services_image');
        if( $image ) {
            echo wp_get_attachment_image( $image, 'rectangular');
        } 
      ?>
  </div>

  <div class="services wrapper">
    <div class="service-tabs">
      <h3><?php the_field('services_tab_#1'); ?><br><span><i class="fas fa-angle-down"></i></span></h3>
      
      <h3><?php the_field('services_tab_#2'); ?></h3>
      <h3><?php the_field('services_tab_#3'); ?></h3>
    </div>

    <div class="service-info background">
      <p><?php the_field('service_paragraph_#1'); ?></p>
      <p><?php the_field('service_paragraph_#2'); ?></p>
      <p><?php the_field('service_paragraph_#3'); ?></p>
    </div>
  </div>

</section>

<?php get_footer(); ?>