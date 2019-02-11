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

<div id="sobre">

	<div class="container">
		<?php
			include get_template_directory() . '/inc/nav-menu.php';
		?> <!-- Include Nav Menu --> <!-- Include Nav Menu -->
		<div class="row bg-light p-3 text-center sobre-content">
			<div class="thumbnail m-auto pb-3">
				<?php 
					if ( have_posts() ) : while ( have_posts() ) : the_post();
						the_post_thumbnail(); 
					endwhile; endif;
				?>
			</div>
			<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					the_content();
				endwhile; endif; 
			?>
		</div>
	</div>	

</div>

<?php get_footer(); ?>
