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

<div id="projects" class="container">
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
            <?php
            /*
                TODO: Put Array into backoffice
                TODO: Button bellow?
                TODO: &:hover - show background image
                TODO: Add Links to each card
                TODO: Seperate cards through categories
            */
                $cardsArray = [
                    'BudgetApp' => [
                        'Url' => '',
                        'Title' => 'BudgetApp',
                        'SubTitle' => 'Web App to control personal spendings',
                        'TimeSpent' => '1 month (WIP)'
                    ],
                    'GustavoMonteiro' => [
                        'Url' => '',
                        'Title' => 'Gustavo Monteiro Website',
                        'SubTitle' => 'Personal website + blog',
                        'TimeSpent' => '2 weeks (WIP)'
                    ],
                    'Tendoledu' => [
                        'Url' => '',
                        'Title' => 'Tendoledu',
                        'SubTitle' => 'Landing Page for School Business',
                        'TimeSpent' => '2 days'
                    ],
                    'AnaPeneda' => [
                        'Url' => '',
                        'Title' => 'Ana Peneda Website',
                        'SubTitle' => 'Website to promote personal brand',
                        'TimeSpent' => '1 week (WIP)'
                    ],
                    'CounterApp' => [
                        'Url' => '',
                        'Title' => 'Counter App',
                        'SubTitle' => 'Web App to count time spent coding',
                        'TimeSpent' => '0 days (WIP)'
                    ],
                    'Dashboard' => [
                        'Url' => '',
                        'Title' => 'Dashboard',
                        'SubTitle' => 'Dashboard template for public use',
                        'TimeSpent' => '0 days (WIP)'
                    ]
                ];

                foreach($cardsArray as $card) {
                    echo "
                        <div class='col-lg-12'>
                            <div class='projectsCard'>
                                <div class='cardText'>
                                    <h2>" . $card['Title'] . "</h2>
                                    <span>" . $card['SubTitle'] . "</span>
                                    <span>Time Spent: " . $card['TimeSpent'] . "</span>
                                </div>
                            </div>
                        </div>
                    ";
                }
            ?>
        </div>
        
    </div>
</div>

<?php get_footer(); ?>
