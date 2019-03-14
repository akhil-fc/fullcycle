<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>



	<footer>
        <div class="footerContent aboutUsWrap">
			<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>			
				<?php dynamic_sidebar( 'footer-1' ); ?>
			<?php endif; ?>
        </div>
        <div class="footerContent linksWrap">
            <h4>Links</h4>			
            <div class="links">
				<?php
					global $id;
					wp_list_pages( array(
						'title_li'    => '',
						'child_of'    => '',
						'show_date'   => '',
						'date_format' => ''
					) );
				?>
            </div>
        </div>
        <div class="footerContent ">
            <h4>Locations</h4>
            <div class="locationWrap">
                <div class="contactBoxes">
				<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>			
					<?php dynamic_sidebar( 'footer-2' ); ?>
				<?php endif; ?>
                </div>
                <div class="contactBoxes">
				<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>			
					<?php dynamic_sidebar( 'footer-3' ); ?>
				<?php endif; ?>
            </div>
        </div>
        </div>
        <div class="footerCopy">
			<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>			
					<?php dynamic_sidebar( 'footer-4' ); ?>
				<?php endif; ?>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/skrollr.min.js"></script>
    <script>
        var s = skrollr.init();
    </script>
    <script>
        new WOW().init();
    </script>
<?php if (is_page('what-we-do')){ ?>
<script>
        $(window).scroll(function(event) {
            var scroll = $(window).scrollTop();
            $('.subNavigation ').toggleClass('fixed',
                scroll >= $('#Dedicated').offset().top - 230
            );
            $('header ').toggleClass('bg-white',
                scroll >= $('#Dedicated').offset().top - 230
            );
        });
        $(window).scroll();
    </script>
<?php } ?>

<?php if (is_page('your-developers')){ ?>
<script>
        // owl carosle initialising function
        var owl = $('.owl-carousel');
        owl.owlCarousel({
                margin: 0,
                loop: false,
                animateOut: 'fadeOut',
                touchDrag: false,
                mouseDrag: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
            // END
        $(window).scroll(function(event) {
            var scroll = $(window).scrollTop();
            $('.subNavigation ').toggleClass('fixed',
                scroll >= $('#Dedicated').offset().top - 230
            );
            $('header ').toggleClass('bg-white',
                scroll >= $('#Dedicated').offset().top - 230
            );
        });
    </script>
<?php } ?>

<?php if (is_page('about')){ ?>
<script>
          // owl carosle initialising function
            var owl = $('.owl-carousel');
              owl.owlCarousel({
                  margin: 0,
                  loop: false,
                  animateOut: 'fadeOut',
                  touchDrag:false,
                  mouseDrag:false,
                  responsive: {
                      0: {
                          items: 1
                      },
                      600: {
                          items: 1
                      },
                      1000: {
                          items: 1
                      }
                  }
              })
            // END
            $(window).scroll(function (event) {
                  var scroll = $(window).scrollTop();
                  $('.subNavigation ').toggleClass('fixed',               
                    scroll >= $('#Story').offset().top - 230
                  );
                  $('header ').toggleClass('bg-white',               
                    scroll >= $('#Story').offset().top - 230
                  );
              });          
            $(window).scroll();
        </script>
<?php } ?>

<?php if (is_page('careers')){ ?>
<script>
            $(window).scroll(function (event) {
                  var scroll = $(window).scrollTop();
                  $('.slideToViewJobs ').toggleClass('display-none',               
                    scroll >= $('#featureJobs').offset().top - 85
                  );
                  $('header ').toggleClass('bg-white box-shadow',               
                    scroll >= $('#Dedicated').offset().top - 85
                  );
              });          
            $(window).scroll();
        </script>
<?php } ?>

<?php wp_footer(); ?>

</body>
</html>
