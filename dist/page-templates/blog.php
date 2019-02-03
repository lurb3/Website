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
		<div class="row mt-5">
			<div class="col-12 text-center">
				<ul class="home-links">
					<li><a href="#">Sobre</a></li>
					<li><a href="#">Projetos</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Curriculum</a></li>
					<li><a href="#">Contactos</a></li>
				</ul>
			</div>
		</div>
		<div class="row mb-2 mt-2">
			<div class="col-12 text-center">
				<h2 class="text-light">Blog</h2>
			</div>
		</div>
		<div class="row">
				<?php 
					$args = array( 'numberposts' => -1); 
					$posts= get_posts( $args );
					$count = 0;
					if ($posts) {
						foreach ( $posts as $post ) {
							echo "<div class='col-6 text-dark text-center p-3'>";
								echo "<div class='bg-light p-2'>";
									setup_postdata($post);
									the_title();
									the_content();
									the_excerpt();
								echo "</div>";
							echo "</div>";
						}
					} 
				?>
		</div>
	</div>	

</div>

<?php get_footer(); ?>
