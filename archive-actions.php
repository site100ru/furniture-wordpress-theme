<?php

/**
 * Template Name: Акции
 * Template Post Type: page
 **/

include 'header.php';

?>


<!-- Home section -->
<div id="sp-home" class="scroll-points"></div>
<section class="main-home-section min-home">
    <div class="parallax-home-section" style="min-height: 640px;"></div>

    <!-- header-menu -->
    <?php get_template_part('template-parts/header-menu/header-menu'); ?>

    <div class="container">
        <div class="row align-items-center home-section-height">
            <div class="col-xl-10 col-xxl-9">
                <h1 class="home-title">Акции</h1>
            </div>
        </div>
    </div>
</section>
<!-- /Home section -->



<?php get_template_part('template-parts/section-actions', null, ['show_breadcrumbs' => 'true','section_actions_button' => 'false', 'section_actions_place' => 'actions-page']); ?>



<?php include 'footer-1.php'; ?>