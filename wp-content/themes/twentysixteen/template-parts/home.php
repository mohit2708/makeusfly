<?php /* Template Name: Home Page */ 
get_header(); ?>


<?php
            	while (have_posts()) : the_post();
           	the_content();
           
           	endwhile;
           	wp_reset_postdata();
        	?>





<?php get_footer(); ?>