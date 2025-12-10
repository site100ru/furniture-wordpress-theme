<?php

/**
 * Template Name: Страница акций
 * Template Post Type: page
 */

include 'header.php';
?>

<div class="min-home">
    <!-- Header -->
    <div class="site-navbar-wrap">
        <div class="parallax-home-section" style="min-height: 640px;"></div>
        <!-- <div class="overlay"></div> -->
        <div id="sp-home" class="scroll-points"></div>

        <!-- header-menu -->
        <?php get_template_part('template-parts/header-menu/header-menu'); ?>

        <div class="container">
            <div class="row align-items-center home-section-height">
                <div class="col-xl-10 col-xxl-9">
                    <h1 class="home-title text-light">Акции</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Advantage section -->
<?php  get_template_part('template-parts/section-actions', null, array(
    'show_breadcrumbs' => 'true',
    'section_actions_button' => 'false',
    'background_color' => 'bg-white'
    ));
?>

<?php include 'footer-1.php'; ?>