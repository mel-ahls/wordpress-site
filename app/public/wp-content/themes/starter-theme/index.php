<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="wrapper">

  <div class="content">
      <?php get_template_part( 'loop', 'index' );	?>
  </div> /.content

  <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
    <?php wp_dropdown_categories(); ?>
    <input type="submit" name="submit" value="Go" />
</form>

  <?php get_sidebar(); ?>

</div> 

<?php get_footer(); ?>