<?php
/**
 * Template Name: Sobre Layout
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

<div id="about">
	<div class="container mw-100 m-0">
		<?php
			include get_template_directory() . '/inc/nav-menu.php';

			$post_thumbnail = get_the_post_thumbnail_url();
			$post_title = get_the_title();
			echo "
			<div
				class='row page-post-image'
				style='background-image:url(\"" . $post_thumbnail . "\"); 	background-position:center; background-size:cover; height:300px;'
			>
					<div class='m-auto text-center' style='z-index:999;'>
						<h1 class='text-light'>
							" . $post_title . "
						</h1>
					</div>
				</div>
			";		
		?>
	</div>

	<div class="container">
		<div class="row">
			<?php
				$post_ID = get_the_ID();
				$post = get_post($post_ID);
				echo"
						<div class='about-me-content mt-5'>
							"; echo $post -> post_content; echo"
						</div>
					";
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
