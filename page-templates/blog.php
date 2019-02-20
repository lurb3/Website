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
		<div class="row mt-5">

		<?php 
			$args = array( 'numberposts' => -1); 
			$posts= get_posts( $args );
			$count = 0;
			if ($posts) {
				foreach ( $posts as $post ) {
					echo "<div class='col-4'>";
						echo "<div class='p-5' style='width:100%; height:250px; background-image:url(\""; setup_postdata($post); echo get_the_post_thumbnail_url(); echo"\"); background-position:center; background-size:contain;'>";
						echo "</div>";
						echo "<a class='post-link' href='"; echo get_permalink(); echo"'><h2>"; the_title(); echo "</h2></a>";
						echo "<p>"; the_excerpt(); echo "</p>";
						echo "<p>"; echo get_the_date(); "</p>";
					echo "</div>";
				}
			} 
		?>			
		</div>
	</div>
</div>

<?php get_footer(); ?>
