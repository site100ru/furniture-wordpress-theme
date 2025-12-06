<?php

/**
 * Шаблон одиночной акции
 * Автоматически используется для типа записи 'action'
 */

include 'header.php';

while (have_posts()) : the_post();
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
                    <h1 class="home-title"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- /Home section -->

    <section class="single-action-section bg-white py-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav class="breadcrumbs">
                        <a href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" fill="currentColor" viewBox="0 0 24 24" class="svg-icon breadcrumbs-svg">
                                <path
                                    d="m21.71 11.29-9-9a1 1 0 0 0-1.42 0l-9 9a1 1 0 0 0 1.42 1.42l.29-.3v7.89A1.77 1.77 0 0 0 5.83 22H8.5a1 1 0 0 0 1-1v-4.9a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1V21a1 1 0 0 0 1 1h2.67A1.77 1.77 0 0 0 20 20.3v-7.89l.29.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42" />
                            </svg>
                        </a>
                        /
                        <a href="/action">
                            Акции
                        </a>
                        /
                        <span><?php the_title(); ?></span>

                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail('full', array('class' => 'img-fluid rounded w-100 mb-4')); ?>
                    <?php endif; ?>

                    <div class="action-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
endwhile;

include 'footer-1.php';
?>