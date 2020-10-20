<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="wrapper">


  <div class="blog-hero">
    <h1><?php the_field('blog_page_title', 'option'); ?></h1>

    <div class="hero-image">
      <?php $image = get_field('blog_image', 'option');
          if( $image ) {
            echo wp_get_attachment_image( $image, 'large');
        } ?>
    </div>
  </div>
  
  <div class="dropdown">
    <form action="<?php echo esc_url( home_url( '/' ) ); ?>"  method="get">
      <?php wp_dropdown_categories(); ?>
      <input type="submit" name="submit" value="Go" />
    </form>
  </div>

  <div class="blog-content">
       <?php get_template_part( 'loop', 'index' ); ?>
  </div>

</div>

<?php get_footer(); ?>