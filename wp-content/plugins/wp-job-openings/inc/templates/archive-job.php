<?php
/**
 * Template for displaying job listing archives
 * 
 * This template can be overridden by copying it to currenttheme/wp-job-openings/archive-job.php
 * 
 * @package wp-job-openings
 * @version 1.3
 */

if( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

/**
 * before_awsm_jobs_main_content hook
 * 
 * @since 1.1
 */
do_action( 'before_awsm_jobs_main_content' );

?>
    <div class="awsm-job-main awsm-job-archive-content">
        <div class="awsm-job-container">

            <?php include get_awsm_jobs_template_path( 'job-openings-view' ); ?>
            
        </div>
    </div>
<?php
/**
 * after_awsm_jobs_main_content hook
 * 
 * @since 1.1
 */
do_action( 'after_awsm_jobs_main_content' );

get_footer();