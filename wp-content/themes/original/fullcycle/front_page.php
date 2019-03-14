<?php
/* Template Name: Front Page */
get_header();
?>
<div class="homeMainWrap">
<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				the_content();
				
			endwhile; // End of the loop.
			?>
</div>
<?php get_footer(); ?>