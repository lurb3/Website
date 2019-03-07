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
</div>

<div class="container mw-100 m-0">
	<?php
		$post_thumbnail = get_the_post_thumbnail_url();
		$post_title = get_the_title();
		$post_date = get_the_date();
		$modified_date = get_the_modified_date();
		echo "
			<div
				class='row post-image'
				style='background-image:url(\"" . $post_thumbnail . "\"); background-position:center; background-size:cover; height:500px;'
			>
				<div class='m-auto text-center' style='z-index:999;'>
					<h1 class='text-light'>
						" . $post_title . "
					</h1>
					<p class='text-light'>
						Publish Date: " . $post_date . "
					</p>
					<p class='text-light'>
						Last Update: " . $modified_date . "
					</p>
				</div>
			</div>
		";
	?>
</div>

<div class="container mt-3">

	<div class="row">
		<?php
			$post_ID = get_the_ID();
			$content_post = get_post($post_ID);
			$content = $content_post -> post_content;
			$previous_post = get_previous_post();
			echo "
				<div class='pl-5 pr-5 post-content'>
					<p>" . $content . "</p>
					<p>
						<a href='" . get_permalink( $previous_post->ID ) . "'>
							<- ".$previous_post -> post_title ."
						</a>
					</p>
				</div>
			";
		?>
	</div>

</div>

<?php get_footer(); ?>
