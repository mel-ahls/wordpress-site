<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
		</section>
	</article>

<?php endif; // end if there are no posts ?>


<!-- BLOG POST -->
<?php // if there are posts, Start the Loop. ?>
<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_post_thumbnail('rectangle'); ?>
		<h2><?php the_title(); ?></h2>
		<div class="date-time">
			<h4><?php echo get_the_author();?> -</h4>
			<h4><?php echo get_the_date(); ?></h4>
		</div>
			<?php the_excerpt(); ?>
	</article>

<?php endwhile; // End the loop. ?>



<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></p>
  <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></p>
<?php endif; ?>
