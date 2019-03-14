<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/media.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php 
if(is_front_page()){ ?>
<ul id="menu">
        <li class="active"><a href="#slide1" class="active"><span></span></a></li>
        <li><a href="#slide2"><span></span></a></li>
        <li><a href="#slideThree"><span></span></a></li>
        <li><a href="#slide3"><span></span></a></li>
        <li><a href="#slide4"><span></span></a></li>
	</ul>
<?php } ?>
<?php 
if(is_page(array('faq','careers','why-india')) || is_singular( 'awsm_job_openings' )){
 	$headerClass = 'class="boxShadowOnScroll bg-white"';
}else{
	$headerClass = 'class="bg-white"';
}
?>

<header id="header" <?php echo $headerClass; ?> >
        <nav>
            <div class="logoWrap">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/fullCycleLogo.svg" alt="" class="logoNormal">         
                    <p class="logoBtmText">ATLANTA | Gurugram </p>
                </a>
            </div>
            
			<?php $args = array(
							'menu'            => 'top_nav',
							'container'       => 'div',
							'container_class' => 'rightNavLinks tab-dis-none',
							'container_id'    => '',
							'menu_class'      => 'menu',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'item_spacing'    => 'preserve',
							'depth'           => 0,
							'walker'         => new WPSE_78121_Sublevel_Walker,
							'theme_location'  => '',
						); ?>
			<?php wp_nav_menu( $args ); ?>
            <button class="toggleIcon tab-dis-block web-dis-none">
                <span></span>
            </button>    
			<a href="<?php echo esc_url( home_url( 'contact-us' ) ); ?>" class="contactUsBtn mobile-dis-none">Contact us</a>
						
		</nav> 
		<div class="rightNavLinks tab-dis-block web-dis-none" id="indexPageWebLinks">
		<?php $args = array(
							'menu'            => 'mob_top_nav',
							'container'       => 'div',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'menu',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'item_spacing'    => 'preserve',
							'depth'           => 0,
							'walker'         => '',
							'theme_location'  => '',
						); ?>
			<?php wp_nav_menu( $args ); ?>
            <ul class="">
                <li class="navLink active">
                    <a href="index.html" class=""><?php get_the_title(2); ?></a>
                </li>
                <li class="navLink ">
                    <a href="what-we-do.html">What We Do</a>
                </li>
                <li class="navLink">
                    <a href="your-developer.html">Your Developers</a>
                </li>
                <li class="navLink">
                    <a href="why-india.html">Why India</a>
                </li>
                <li class="navLink">
                    <a href="Aboutus.html" class="droupDown">About Us</a>
                </li>
                <li class="navLink">
                    <a href="FAQ.html" class="droupDown">FAQ</a>
                </li>
                <li class="navLink">
                    <a href="Careers.html" class="droupDown">Careers</a>
                </li>
                <li class="contactWrap">
                    <a href="ContactUs.html" class="contactUsBtn tabContactUsBtn">Contact us</a>
                </li>
            </ul>
        </div>       
    </header>
