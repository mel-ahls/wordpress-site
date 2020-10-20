<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    
    <div class="member wrapper">
        <div class="member-info">
            <h1><?php the_title(); ?></h1>
            <h2><?php the_field('job_title'); ?></h2>
            <h3><?php the_field('additional'); ?></h3>
            <p><?php the_field('pizza_topping'); ?> <span><?php the_field('topping_answer'); ?></span></p>
            <p><?php the_field('fav_band'); ?> <span><?php the_field('band_answer'); ?></span></p>
            <p><?php the_field('fav_project'); ?> <span><?php the_field('project_answer'); ?></span></p>
        </div>

        <div class="member-img">
            <?php the_post_thumbnail('full'); ?>
        </div>
    </div>
        <div class="member-about background">
            <p><?php the_field('member_about'); ?></p>
            <p><?php the_field('member_about_2'); ?></p>
            <p><?php the_field('member_about_3'); ?></p>
        </div>    

        <?php the_content(); ?>


<?php endwhile; ?>

<?php get_footer(); ?>