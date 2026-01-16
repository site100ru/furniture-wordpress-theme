<?php
/**
 * Template Name: Архив портфолио
 * Template Post Type: page
 */

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
                <h1 class="home-title">Наши работы</h1>
            </div>
        </div>
    </div>
</section>
<!-- /Home section -->

<!-- Portfolio Section -->
<?php  get_template_part('template-parts/archive-portfolio-section/archive-portfolio-section', null, [
    'bg_color' => 'bg-white',
    'category' => 'all',
    'show_title' => true,
    'show_breadcrumbs' => true,
    'show_filter' => true
]); 
?>
<!-- /Portfolio Section -->


<?php include 'footer-1.php'; ?>