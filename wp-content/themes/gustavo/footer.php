<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<footer>
	<ul>
		<a href="<?php echo get_home_url();?>">
			<li>ABOUT ME</li>
		</a>
		<a href="<?php echo get_site_url();?>/about-me">
			<li>PORTFOLIO</li>
		</a>
		<a href="<?php echo get_site_url();?>/about-me">
			<li>CURRICULUM</li>
		</a>
		<a href="<?php echo get_site_url();?>/about-me">
			<li>BLOG</li>
		</a>
		<a href="<?php echo get_site_url();?>/about-me">
			<li>CONTACT ME</li>
		</a>
	</ul>
	<!--<div id="menuBtn">
		<span class="arrow">
			<img src="<?php echo get_template_directory_uri(); ?>/images/arrow.png">
		</span>
		Menu
	</div>-->
</footer>


</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

