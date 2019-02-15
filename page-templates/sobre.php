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

	<div class="container about-container">
		<?php
			include get_template_directory() . '/inc/nav-menu.php';
		?> <!-- Include Nav Menu --> <!-- Include Nav Menu -->
		<div class="row p-3 text-center about-content">
			<div class="col-6">
				<div class="thumbnail m-auto pb-3">
					<?php 
						if ( have_posts() ) : while ( have_posts() ) : the_post();
							the_post_thumbnail(); 
						endwhile; endif;
					?>
					<div class="mt-4">
						<h2 class="d-inline">That's Me</h2>
						<i class="fas fa-long-arrow-alt-up"></i>
					</div>
				</div>
			</div>
			<div class="col-6 about-text">
				<h2 class="text-left">Sobre</h2>
				<?php
					if ( have_posts() ) : while ( have_posts() ) : the_post();
						the_content();
					endwhile; endif; 
				?>
			</div>
		</div>
	</div>	

</div>

<?php get_footer(); ?>
