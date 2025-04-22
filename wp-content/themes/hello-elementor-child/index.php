<?php 

get_header(); ?>

<h2>Our Projects</h2>

<?php
$args = array(
    'post_type' => 'projects',
    'posts_per_page' => 3 // Show latest 3
);
$loop = new WP_Query($args);
while($loop->have_posts()) : $loop->the_post(); ?>
    <div class="project-box">
        <h3><?php the_title(); ?></h3>
        <div><?php the_post_thumbnail('medium'); ?></div>
        <p><?php the_excerpt(); ?></p>
    </div>
<?php endwhile; wp_reset_postdata(); ?>
<?php the_content(); ?>

<?php get_footer(); ?>
