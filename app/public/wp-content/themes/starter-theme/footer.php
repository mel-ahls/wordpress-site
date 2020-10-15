</main>
<footer>
  <div class="footer-flex wrapper">
    <div class="footer-title">
      <h3><?php the_field('footer_title', 'option'); ?></h3>
    </div>
    <div class="footer-social">
      <p><?php the_field('footer_follow_us','option') ?></p>
      <?php wp_nav_menu( array(
        'theme_location' => 'footer',
        'container_class' => 'footer-menu'
      )); ?>
    </div>
  </div>  

</footer>
<?php wp_footer(); ?>
</body>
</html>