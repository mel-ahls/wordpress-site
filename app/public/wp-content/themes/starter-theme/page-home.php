<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<section>
  <div class="hero wrapper">
    <h1><?php the_field('hero_title'); ?></h1>
    <p><?php the_field('hero_paragraph'); ?></p>

    <?php
      $link = get_field('hero_link');

      if( $link ) { ?>
        <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
    <?php } ?>
  </div>
</section>

<section>
  <div class="about wrapper">

    <div class="about-text">
      <h2><?php the_field('about_title'); ?></h2>
      <p><?php the_field('about_paragraph'); ?></p>
      <p><?php the_field('about_paragraph_#2'); ?></p>
      
      <!-- link start -->
      <?php
        $link = get_field('hero_link');

        if( $link ) { ?>
          <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
      <?php } ?>
      <!-- link ends -->
    </div>

    <div class="about-image">
      <?php $image = get_field('about_image');
        if( $image ) {
            echo wp_get_attachment_image( $image, 'thumbnail');
        } 
      ?>
    </div>

  </div>
</section>

<section>
  <div class="featured wrapper">

    <div class="featured-image">
      <?php $image = get_field('featured_image');
        if( $image ) {
            echo wp_get_attachment_image( $image, 'thumbnail');
        } 
      ?>
    </div>

    <div class="featured-text">
      <h2><?php the_field('featured_employee'); ?></h2>
      <p><?php the_field('featured_employee_name'); ?></p>
      <p><?php the_field('featured_paragraph'); ?></p>
      <p><?php the_field('featured_paragraph_#2'); ?></p>
    </div>

  </div>
</section>

<?php get_footer(); ?>