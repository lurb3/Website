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
            <!-- TODO: Add Links to each card -->
            <!-- TODO: create a for loop for each card -->
            <!-- TODO: Seperate cards through categories -->
            <div class="col-lg-6">
                <div class="projectsCard" alt="Web App - Budget App" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/budget-app.jpg);'">
                    <div class="cardText">
                        <h2>BudgetApp</h2>
                        <span>Web App to control personal spendings</span>
                        <span>Time Spent: 1 month (WIP)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="projectsCard" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/gustavo-website.jpg);'">
                    <div class="cardText">
                        <h2>Gustavo Monteiro Website</h2>
                        <span>Personal website + blog</span>
                        <span>Time Spent: 2 weeks (WIP)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="projectsCard" alt="Tenduledo Landing Page" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/tenduledo-project.jpg);'">
                    <div class="cardText">
                        <h2>Tendoledu</h2>
                        <span>Landing Page for School Business</span>
                        <span>Time Spent: 2 days</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="projectsCard" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/ana-website.jpg);'">
                    <div class="cardText">
                        <h2>Ana Peneda Website</h2>
                        <span>Website to promote personal brand</span>
                        <span>Time Spent: 1 weeks (WIP)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="projectsCard" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/tenduledo-project.jpg);'">
                    <div class="cardText">
                        <h2>Counter App</h2>
                        <span>Web App to count time spent coding</span>
                        <span>Time Spent: 0 days (WIP)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="projectsCard" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/tenduledo-project.jpg);'">
                    <div class="cardText">
                        <h2>Dashboard</h2>
                        <span>Dashboard template for public use</span>
                        <span>Time Spent: 0 days (WIP)</span>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<?php get_footer(); ?>
