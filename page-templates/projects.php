<?php
/**
 * Template Name: Projects
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

<div id="projects">
    <!-- NAV Menu -->
    <?php
        include get_template_directory() . '/inc/nav-menu.php';
    ?>

    <div class="container">
        <div class="row mb-5">
            <div class="text-center m-auto">
            <img style="font-size:30px;" draggable="false" class="emoji" alt="💻" src="https://s.w.org/images/core/emoji/11.2.0/svg/1f4bb.svg">
            <h1 class="m-auto">Projects</h1>
            </div>
        </div>
        <div class="row">
            <!-- TODO: create a for loop for each card -->
            <div class="col-lg-4">
                <div class="projectsCard" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/tenduledo-project.jpg);'">
                    <div class="cardText">
                        <h2>Tendoledu</h2>
                        <span>Landing Page for School Business</span>
                        <span>Time Spent: 2 days</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="projectsCard" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/tenduledo-project.jpg);'">
                    <div class="cardText">
                        <h2>Tendoledu</h2>
                        <span>Landing Page for School Business</span>
                        <span>Time Spent: 2 days</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="projectsCard" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/tenduledo-project.jpg);'">
                    <div class="cardText">
                        <h2>Tendoledu</h2>
                        <span>Landing Page for School Business</span>
                        <span>Time Spent: 2 days</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="projectsCard" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/tenduledo-project.jpg);'">
                    <div class="cardText">
                        <h2>Tendoledu</h2>
                        <span>Landing Page for School Business</span>
                        <span>Time Spent: 2 days</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="projectsCard" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/tenduledo-project.jpg);'">
                    <div class="cardText">
                        <h2>Tendoledu</h2>
                        <span>Landing Page for School Business</span>
                        <span>Time Spent: 2 days</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="projectsCard" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/tenduledo-project.jpg);'">
                    <div class="cardText">
                        <h2>Tendoledu</h2>
                        <span>Landing Page for School Business</span>
                        <span>Time Spent: 2 days</span>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<?php get_footer(); ?>
