<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>
    <div class="bg-gray-300">
        <div class="container mx-auto custom-h-300 flex">
            <div class="flex custom-pt-90">
                <div class="flex">
                    <a class="uppercase custom-mr-90 custom-text-18 text-white" href="#">About Us</a>
                    <a class="uppercase custom-mr-90 custom-text-18 text-white" href="#">Playground</a>
                    <a class="uppercase custom-text-18 text-white" href="#">Education</a>
                </div>
            </div>
            <div class="custom-h-250 custom-w-400 bg-red-500">
                Logo here
            </div>
            <div class="flex custom-pt-90">
                <div class="flex">
                    <a class="uppercase custom-mr-90 custom-text-18 text-white" href="#">Membership</a>
                    <a class="uppercase custom-mr-90 custom-text-18 text-white" href="#">Contact</a>
                    <a class="uppercase custom-text-18 text-white" href="#">Book Now</a>
                </div>
            </div>
        </div>
    </div>
	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );
