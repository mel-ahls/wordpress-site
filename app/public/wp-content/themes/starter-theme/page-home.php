<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<section>
  <div class="home-hero wrapper">
    <div class="home-hero-text">
      <h1><?php the_field('hero_title'); ?></h1>
      <p><?php the_field('hero_paragraph'); ?></p>

      <?php
        $link = get_field('hero_link');

        if( $link ) { ?>
          <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
      <?php } ?>
    </div>
    <div class="home-hero-image">
      <?php $image = get_field('hero_image');
        if( $image ) {
            echo wp_get_attachment_image( $image, 'large');
        } 
      ?>
    </div>
  </div>
</section>

<section class="background">
  <div class="home-about wrapper">
    <div class="home-about-text">
      <h2><?php the_field('home_about_title'); ?></h2>
      <p><?php the_field('home_about_paragraph'); ?></p>
      <p><?php the_field('home_about_paragraph_#2'); ?></p>
      
      <!-- link start -->
      <?php
        $link = get_field('home_about_link');

        if( $link ) { ?>
          <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
      <?php } ?>
      <!-- link ends -->
    </div>

    <div>
      <?php $image = get_field('home_about_image');
        if( $image ) {
            echo wp_get_attachment_image( $image, 'rectangle');
        }
      ?>
    </div>
  </div>
</section>

<section class="background">
  <div class="featured wrapper">

    <?php $employee = get_field('featured_employee'); ?>
    <div>
      <?php echo wp_get_attachment_image(
          get_post_thumbnail_id($employee->ID),
          'square-large'
        );?>
    </div>
    
    <div class="featured-text">
      <p><?php the_field('featured_title') ?></p>
      <?php if($employee->post_title): ?>
      <h2><?php echo $employee->post_title; ?></h2>
      <?php endif; ?>
      <p><?php the_field('featured_paragraph_#1') ?></p>
      <p><?php the_field('featured_paragraph_#2') ?></p>

    </div>

  </div>
</section>

<?php get_footer(); ?>
