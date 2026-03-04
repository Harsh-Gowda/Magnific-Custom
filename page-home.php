<?php 

// Template Name: Home

get_header();

?>

<div class="home-hero w-full h-screen relative">
      <?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>
        <div class="home-hero w-full h-screen relative">
            <?php the_post_thumbnail('full'); ?>
        </div>
    <?php endwhile; 
endif; 
?>
</div>



<?php get_footer(); ?>