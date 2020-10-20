<?php /* Template Name: About Us */ ?>

<?php get_header(); ?>

<section>
	<div class="about-hero wrapper">
			<h1><?php the_field('about_title'); ?></h1>
			<?php $image = get_field('about_image');
				if( $image ) {
					echo wp_get_attachment_image( $image, 'large');
			} ?>
	</div>
</section>

<section class="background">
	<div class="beginnings wrapper">
		<div class="beginnings-text">
			<h2><?php the_field('beginnings_title') ?></h2>
			<p><?php the_field('beginnings_paragraph_#1'); ?></p>
			<p><?php the_field('beginnings_paragraph_#2'); ?></p>
			<p><?php the_field('beginnings_paragraph_#3'); ?></p>
		</div>
		<div>
			<?php $image = get_field('beginnings_image');
				if( $image ) {
						echo wp_get_attachment_image( $image, 'large');
				} ?>
		</div>
	</div>
</section>

<section class="background crop">
	<div class="mission">
		<h2><?php the_field('title_mission'); ?></h2>
		<p><?php the_field('mission_paragraph_#1'); ?></p>
		<p><?php the_field('mission_paragraph_#2'); ?></p>
	</div> 
</section>

<section class="teams wrapper">
  
  <h2><?php the_field('team_title'); ?></h2>
    
	<!-- Our query for team members -->
	<?php
	// leadership team query
	$leadership_query = new WP_Query(
		array(
			'post_type' => 'team_members',
			'posts_per_page' => -1,
			'tax_query' => array(
				array(
						'taxonomy' => 'team', // what taxonomy are we querying by?
						'field' => 'slug', // what field is the query? (other options are the term_id or name)
						'terms'    => 'leadership', // what specific term are we querying by?
				))
		)
	);

	// The Loop for leadership
	if ( $leadership_query->have_posts() ) { ?>
    <h3>Leadership</h3>
    <div class="team-container leaders">
      <?php while ( $leadership_query->have_posts() ) { 
        $leadership_query->the_post(); ?>
        <?php $job_title = get_field('job_title'); ?>
          <div class="team-member">
            <a href="<?php the_permalink(); ?>">
              <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'thumbnail', false, array('class' => 'featured-image')); ?>
              <h4><?php the_title(); ?></h4>
              <p><?php echo $job_title; ?></p>
            </a>
          </div>
          <?php }
        /* Restore original Post Data */
        wp_reset_postdata();
      } else { ?>
        <!-- no posts found -->
        <p>There are no leaders</p>
      <?php } ?>
    </div>
    

  <?php
    // developers team query
	$developers_query = new WP_Query(
		array(
			'post_type' => 'team_members',
			'posts_per_page' => -1,
			'tax_query' => array(
				array(
						'taxonomy' => 'team', // what taxonomy are we querying by?
						'field' => 'slug', // what field is the query? (other options are the term_id or name)
						'terms'    => 'development', // what specific term slug are we querying by?
				))
		)
	);

	// The Loop for developers team
  if ( $developers_query->have_posts() ) { ?>
    <h3>Development Team</h3>
    <div class="team-container">
      <?php while ( $developers_query->have_posts() ) { 
        $developers_query->the_post(); ?>
        <div class="team-member">
          <a href="<?php the_permalink(); ?>">
            <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'thumbnail', false, array('class' => 'featured-image')); ?>
            <h4><?php the_title(); ?></h4>
          </a>
        </div>
      <?php }
      /* Restore original Post Data */
        wp_reset_postdata();
      } else { ?>
          <!-- no posts found -->
          <p>There are no developers</p>
      <?php } ?>
    </div>
  
  <?php
	// design team query
	$design_query = new WP_Query(
			array(
					'post_type' => 'team_members',
					'posts_per_page' => -1,
					'tax_query' => array(
							array(
									'taxonomy' => 'team', // what taxonomy are we querying by?
									'field' => 'slug', // what field is the query? (other options are the term_id or name)
									'terms'    => 'design', // what specific term slug are we querying by?
							))
			)
	);
	// The Loop for design team
	if ( $design_query->have_posts() ) { ?>
      <h3>Design Team</h3>
      <div class="team-container">
			  <?php while ( $design_query->have_posts() ) { 
					$design_query->the_post(); ?>
					<div class="team-member">
							<a href="<?php the_permalink(); ?>">
									<?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'thumbnail', false, array('class' => 'featured-image')); ?>
									<h4><?php the_title(); ?></h4>
							</a>
					</div>
          <?php }
          /* Restore original Post Data */
          wp_reset_postdata();
          } else { ?>
          <!-- no posts found -->
          <p>There are no designers</p>
        <?php } ?>
      </div>
</section>

<section>
	<div class="get-in-touch">
		<p><?php the_field('get_in_touch'); ?></p>
		<?php
			$link = get_field('get_in_touch_link');

			if( $link ) { ?>
				<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
      <?php } ?>
	</div>
</section>

<?php get_footer(); ?>