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
		?>
		<div class="row mt-5">
		<?php 
			$args = array( 'numberposts' => -1); 
			$posts= get_posts( $args );
			if ($posts) {
				foreach ( $posts as $post ) {
					$post_url = get_permalink();
					$post_thumbnail = get_the_post_thumbnail_url();
					$post_title = get_the_title();
					$post_excerpt = get_the_excerpt();
					$post_date = get_the_date();
					echo "
						<div class='col-4'>
							<a href='" . $post_url . "'>
								<div class='p-5' style='width:100%; height:250px; background-image:url(\"" . $post_thumbnail . "\"); background-position:center; background-size:contain;'></div>
							</a>
							<a class='post-link' href='" . $post_url . "'>
								<h2>" . $post_title . "</h2>
							</a>
							<p>". $post_excerpt ."</p>
							<p>" . $post_date . "</p>
						</div>
					";
				}
			} 
		?>			
		</div>
	</div>
</div>

<?php get_footer(); ?>
