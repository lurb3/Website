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
				$post_category = get_the_category();
				$author = get_the_author();
				echo "
				<a class='blog-links' href='" . $post_url . "'>
					<div class='row blog-post' style='background-image:url(\"" . $post_thumbnail . "\"); background-position:center; background-size:cover;'>
					<div class='col-md-6 col-xs-12'>
						<p class='m-0 p-0 category'>"; 
						for ($i=0; $i<sizeof($post_category); $i++) {
							echo $post_category[$i] -> name . "<br>";
						}
							echo "</p>
						<p class='m-0 p-0 author'>By Gustavo Monteiro</p>
					</div>
					<div class='col-md-6 col-xs-12'>
						<p class='m-0 p-0 date'>" . $post_date . "</p>
						<h2 class='m-0 p-0 post-title'>" . $post_title . "</h2>
					</div>
					</div>
				</a>
				";
				
			}
		}
		?>
	</div>
</div>

<?php get_footer(); ?>
