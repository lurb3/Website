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
		<?php 
					$args = array( 'numberposts' => -1); 
					$posts= get_posts( $args );
					$count = 0;
					if ($posts) {
						foreach ( $posts as $post ) {
							echo "<div class='col-md-4 col-xs-12 pl-5 pr-5'>";
								echo "<div style='box-shadow: 6px 6px 15px -3px rgba(0,0,0,0.5);'>";
									echo "<div style='height:400px; background-image:url(\""; 
									setup_postdata($post);
									echo get_the_post_thumbnail_url(); echo"\");'>";
										
									echo "</div>";
									echo "<div style='min-height:150px' class='bg-dark text-light'>"; the_title(); echo "</div>";
								echo "</div>";
							echo "</div>";
						}
					} 
				?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
