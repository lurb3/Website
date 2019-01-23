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
		<div class="row mb-5 mt-5">
			<div class="col-12 text-center">
				<h2 class="text-light">Latest Posts</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-6 text-dark text-center">
				<div class="mr-1 bg-light">
					<?php echo $title; ?>
				</div>
				<p class="bg-light">
					<?php $args = array( 'numberposts' => -1); 
$posts= get_posts( $args );
if ($posts) {
    foreach ( $posts as $post ) {
        setup_postdata($post);
        the_title();
        the_excerpt();
    }
} ?>
				</p>
			</div>
			<div class="col-6 text-dark text-center">
				<div class="ml-1 bg-light">
					B
				</div>
			</div>
		</div>
	</div>	

</div>

<?php get_footer(); ?>
