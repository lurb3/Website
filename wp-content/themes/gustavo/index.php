<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
?>


<div class="container-flex">
	<div class="row frontpage-copy">
		<h1 class="m-auto pb-5 w-100 text-center">Hello, I'm Gustavo!</h1>
		<p class="m-auto w-100 text-center">
			I am passionate about Web Design and I've been working on it for about 2 years.<br>
			My Personal passion is Front-End Development.<br>
			I'm a fast learner and I hate not to learn new things.
		</p>
	</div>
</div>

<?php get_footer(); ?>
