<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
?>

<div class="container">
	<?php
		include get_template_directory() . '/inc/nav-menu.php';
	?>

	<div class="row">
		
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'loop-templates/content', 'single' ); ?>
			<?php understrap_post_nav(); ?>

		<?php endwhile; // end of the loop. ?>
		<?php get_footer(); ?>
	</div>

</div>

