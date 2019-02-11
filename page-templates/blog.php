<?php
/**
 * Template Name: Blog Layout
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php
	$post_id = 1;
	$queried_post = get_post($post_id);
	$title = $queried_post->post_title;
?>

<div id="blog">

	<div class="container">
		<?php
			include get_template_directory() . '/inc/nav-menu.php';
		?> <!-- Include Nav Menu --> <!-- Include Nav Menu -->
		<div class="row">
			<div class="col-12">
				<?php 
					$args = array( 'numberposts' => -1); 
					$posts= get_posts( $args );
					$count = 0;
					if ($posts) {
						foreach ( $posts as $post ) {
							echo "<div class='col-6 text-dark text-center p-3'>";
								echo "<div class='bg-light p-2'>";
									setup_postdata($post);
									the_post_thumbnail();
									the_title();
									the_excerpt();
								echo "</div>";
							echo "</div>";
						}
					} 
				?>
			</div>
		</div>
	</div>	

</div>

<?php get_footer(); ?>
