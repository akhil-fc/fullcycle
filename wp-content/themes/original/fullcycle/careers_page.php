<?php
/* Template Name: Careers Page */
get_header();
?>

<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				the_content();
				
			endwhile; // End of the loop.
			?>
<!-- Featured Jobs Section Start -->
<?php
  $type = 'awsm_job_openings';
  $args = array(
    'post_type' => $type,
    'post_status' => 'publish',
    'posts_per_page' => 8,
    'ignore_sticky_posts'=> true
  );
  $my_query = null;
  $my_query = new WP_Query($args);
?>
<div class="featuredJobs slidingWrap" id="featureJobs">
            <div class="featuredWrapper">
                <h3>Featured Jobs</h3>
                <p class="featuresubHeading">Don’t see the position you’re looking for? We’d love to hear from you at <a href="#">jobs@FullCycle.com</a>.</p>
                <div class="jobListing">
<?php if( $my_query->have_posts() ):?>
  <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
  <div class="jobFDetail">
                        <div>
                        	<div class="contentDetail"> 
	                            <h5><?php the_title(); ?></h5>
	                            <?php the_content(); ?>
							</div> 
							<p class="content-none"><a href="<?php the_permalink(); ?>"
                                        target="blank" class="applyNowBtn">Apply Now</a></p>
                        </div>
                    </div>
  <?php endwhile; ?>
<?php
endif;
wp_reset_query();
?>
                </div>
            </div>
        </div>    
<!-- Featured Jobs Section Ends -->
<a href="#featureJobs" class="slideToViewJobs">View Open Jobs</a>
<?php get_footer(); ?>