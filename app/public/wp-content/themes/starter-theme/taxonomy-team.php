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
    <h2>Leadership</h2>
    <?php while ( $leadership_query->have_posts() ) { 
        $leadership_query->the_post(); ?>

        <?php $job_title = get_field('job_title'); ?>
        
        <div class="team-member">
            <a href="<?php the_permalink(); ?>">
                <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'medium', false, array('class' => 'featured-image')); ?>
                <h2><?php the_title(); ?></h2>
                <p><?php echo $job_title; ?></p>
            </a>
        </div>

    <?php }
    
    /* Restore original Post Data */
    wp_reset_postdata();
} else { ?>
    <!-- no posts found -->
    <p>There are no leaders</p>
<?php }



// developers team query
$developers_query = new WP_Query(
    array(
        'post_type' => 'team_members',
        'posts_per_page' => -1,
        'tax_query' => array(
              array(
                'taxonomy' => 'team', // what taxonomy are we querying by?
                'field' => 'slug', // what field is the query? (other options are the term_id or name)
                'terms'    => 'developer', // what specific term slug are we querying by?
              ))
      )
);

// The Loop for developers team
if ( $developers_query->have_posts() ) { ?>
    <h2>Development Team</h2>
    <?php while ( $developers_query->have_posts() ) { 
        $developers_query->the_post(); ?>

        <div class="team-member">
            <a href="<?php the_permalink(); ?>">
                <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'medium', false, array('class' => 'featured-image')); ?>
                <h2><?php the_title(); ?></h2>
            </a>
        </div>

    <?php }
    
    /* Restore original Post Data */
    wp_reset_postdata();
} else { ?>
    <!-- no posts found -->
    <p>There are no developers</p>
<?php }


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
    <h2>Design Team</h2>
    <?php while ( $design_query->have_posts() ) { 
        $design_query->the_post(); ?>

        <div class="team-member">
            <a href="<?php the_permalink(); ?>">
                <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'medium', false, array('class' => 'featured-image')); ?>
                <h2><?php the_title(); ?></h2>
            </a>
        </div>

    <?php }
    
    /* Restore original Post Data */
    wp_reset_postdata();
} else { ?>
    <!-- no posts found -->
    <p>There are no designers</p>
<?php } ?>