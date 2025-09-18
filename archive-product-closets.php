<?php

/**
 * Template Name: Страница архива шкафов
 * Template Post Type: page, product_cat
 **/

defined('ABSPATH') || exit;

get_header();
//get_header( 'shop' );
//include 'header.php';

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action('woocommerce_before_main_content');

?>


<!-- Home section -->
<div id="sp-home" class="scroll-points"></div>
<section class="main-home-section">
    <div class="parallax-home-section" style="min-height: 640px;"></div>
    <header class="d-none d-lg-block">
        <!-- Header nav top -->
        <nav class="header-nav-top navbar navbar-expand-lg navbar-light d-none d-lg-block py-0">
            <div class="container">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item me-1 me-xxl-3">
                            <a class="nav-link" href="#">
                                <div style="display: flex;">
                                    <div class="nav-li-float-left">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg">
                                    </div>
                                    <div class="nav-li-float-right">
                                        гор. Рязань,<br>ул. Чапаева, 56
                                    </div>
                                    <div style="clear: both;"></div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item me-1 me-xxl-3">
                            <a class="nav-link" href="#">
                                <div style="display: flex;">
                                    <div class="nav-li-float-left">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg">
                                    </div>
                                    <div class="nav-li-float-right">
                                        Пн-Сб: с 10.00-19.00<br>Вс: с 10.00-17.00
                                    </div>
                                    <div style="clear: both;"></div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item me-1 me-xxl-3">
                            <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#callbackModal">
                                <div style="display: flex;">
                                    <div class="nav-li-float-left">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/callback-ico.svg">
                                    </div>
                                    <div class="nav-li-float-right max-width-1400">
                                        Обратный звонок
                                    </div>
                                    <div style="clear: both;"></div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item me-1 me-xxl-4">
                            <a class="nav-link" href="#" data-bs-toggle="modal"
                                data-bs-target="#calculatePriceWithDownloadModal">
                                <div style="display: flex;">
                                    <div class="nav-li-float-left">
                                        <img
                                            src="<?php echo get_template_directory_uri(); ?>/img/ico/calculator-ico.svg">
                                    </div>
                                    <div class="nav-li-float-right max-width-1400">
                                        Рассчитать стоимость
                                    </div>
                                    <div style="clear: both;"></div>
                                </div>
                            </a>
                        </li>
                        <!-- <li class="nav-item me-1 me-xxl-4">
                            <a class="top-menu-tel nav-link" href="tel:89511014610">
                                <div style="display: flex;">
                                    <div class="nav-li-float-left">
                                        <img
                                            src="<?php echo get_template_directory_uri(); ?>/img/ico/mobile-phone-ico.svg">
                                    </div>
                                    <div class="nav-li-float-right" style="min-width: 128px;">
                                        8 (4912) 77-70-98
                                    </div>
                                    <div style="clear: both;"></div>
                                </div>
                            </a>
                        </li> -->
                        <li class="nav-item me-1 me-xxl-4">
                            <a class="top-menu-tel nav-link" href="tel:89511014610">
                                <div style="display: flex;">
                                    <div class="nav-li-float-left">
                                        <img
                                            src="<?php echo get_template_directory_uri(); ?>/img/ico/mobile-phone-ico.svg">
                                    </div>
                                    <div class="nav-li-float-right" style="min-width: 128px;">
                                        8 (951) 101-46-10
                                    </div>
                                    <div style="clear: both;"></div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ico-button" href="https://t.me/vasilyevr">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.svg">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ico-button" href="https://wa.me/79511014610?web=1&app_absent=1">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.svg">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /Header nav top -->

        <!-- Header nav bottom -->
        <nav class="header-nav-bottom navbar navbar-expand-lg navbar-light py-0">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/logo-light.svg">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#mobail-header-collapse" aria-controls="mobail-header-collapse"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="mobail-header-collapse">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'mobail-header-collapse',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '
								<ul id="%1$s" class="navbar-nav align-items-center ms-auto mb-2 mb-lg-0 %2$s">%3$s
									<!-- Mobile menu -->
									<li class="nav-item d-lg-none">
										<a class="nav-link active" href="#" data-bs-toggle="modal" data-bs-target="#measurerModal">Вызов замерщика</a>
									</li>
									<li class="nav-item d-lg-none">
										<div style="font-size: 12px; font-family: HelveticaNeueCyr-Light; text-transform: none;">
											<img src="' . get_template_directory_uri() . '/img/ico/location-ico.svg" style="width: 10px;" class="me-1">
												<span>гор. Рязань, ул. Чапаева, 56</span>
										</div>
										<a class="nav-link top-menu-tel pt-1 pb-1" href="tel:89511014610">8 (951) 101-46-10</a>
										<div class="mb-2" style="font-size: 12px; font-family: HelveticaNeueCyr-Light; text-transform: none;">
											<img src="' . get_template_directory_uri() . '/img/ico/clock-ico.svg" style="width: 10px; position: relative; top: 2px;" class="me-1 mb-2">Пн-Сб: с 10.00-19.00, Вс: с 10.00-17.00
										</div>
									</li>
									<li class="nav-item d-lg-none pb-4">
										<a class="ico-button pe-2" href="https://wa.me/79511014610?web=1&app_absent=1">
											<img src="' . get_template_directory_uri() . '/img/ico/whatsapp-ico.svg">
										</a>
										<a class="ico-button pe-0" href="https://t.me/+79511014610">
											<img src="' . get_template_directory_uri() . '/img/ico/telegram-ico.svg">
										</a>
									</li>	
									<!-- End mobile menu -->
								</ul>
							',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                    ?>
                </div>

            </div>
        </nav>
        <!-- /Header nav bottom -->
    </header>


    <header id="sliding-header" class="shadow">
        <!-- Header nav bottom -->
        <nav class="header-nav-bottom navbar navbar-expand-lg navbar-light py-1 py-lg-0">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/logo-dark.svg">
                </a>

                <div class="d-lg-none">
                    <a class="top-menu-tel pt-1 pb-0" style="font-size: 14px;" href="tel:89511014610">8 (951)
                        101-46-10</a>
                    <div style="font-size: 10px; font-family: Gilroy-Light; text-transform: none;">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg"
                            style="width: 12px; position: relative; top: -1px;" class="me-1">Пн-Сб: с
                        10.00-19.00<br>Вс: с 10.00-17.00
                    </div>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#sliding-header-collapse" aria-controls="sliding-header-collapse"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="sliding-header-collapse">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'sliding-header-collapse',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '
								<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-lg-0 %2$s">%3$s
									<!-- Mobile menu -->
									<li class="nav-item d-lg-none">
										<a class="nav-link active" href="#" data-bs-toggle="modal" data-bs-target="#measurerModal">Вызов замерщика</a>
									</li>
									<li class="nav-item d-lg-none">
										<div style="font-size: 12px; font-family: Gilroy-Light; text-transform: none;">
											<img src="' . get_template_directory_uri() . '/img/ico/location-ico.svg" style="width: 10px; position: relative; top: -2px;" class="me-1">
											<span>гор. Рязань, ул. Чапаева, 56</span>
										</div>
										<a class="nav-link top-menu-tel pt-1 pb-1" href="tel:89511014610">8 (951) 101-46-10</a>
										<div class="mb-2" style="font-size: 12px; font-family: Gilroy-Light; text-transform: none;">
											<img src="' . get_template_directory_uri() . '/img/ico/clock-ico.svg" style="width: 10px; position: relative; top: 3px;" class="me-1 mb-2">Пн-Сб: с 10.00-19.00, Вс: с 10.00-17.00
										</div>
									</li>
									<li class="nav-item d-lg-none pb-2">
										<a class="ico-button pe-2" href="https://wa.me/79511014610?web=1&app_absent=1">
											<img src="' . get_template_directory_uri() . '/img/ico/whatsapp-ico.svg">
										</a>
										<a class="ico-button pe-0" href="https://t.me/+79511014610">
											<img src="' . get_template_directory_uri() . '/img/ico/telegram-ico.svg">
										</a>
									</li>	
									<!-- End mobile menu -->
								</ul>
							',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                    ?>
                </div>

            </div>
        </nav>
        <!-- /Header nav bottom -->
    </header>
    <div class="container">
        <div class="row align-items-center home-section-height">
            <div class="col-xl-10 col-xxl-9">
                <h1 class="home-title mb-3">Шкафы по индивидуальным размерам на&#160;заказ от&#160;производителя</h1>
                <p class="home-subtitle mb-4">Изготовим качественные шкафы по разумной цене, с учетом Ваших пожеланий и
                    особенностей помещения. Рассчитаем стоимость за 15 минут.</p>
                <a href="#" type="button" class="btn btn-lg btn-corporate-color-1" data-bs-toggle="modal"
                    data-bs-target="#calculatePriceWithDownloadModal">Рассчитать стоимость</a>
            </div>
        </div>
    </div>
</section>
<!-- /Home section -->


<!-- Archive portfolio section -->
<section class="archive-portfolio-section-2 pt-4 bg-white" style="margin-bottom: 60px;">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="breadcrumbs">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/breadcrumbs-icon.svg"></a>
                    /
                    <a href="archive-product-portfolio.html" style="text-decoration: none;">Услуги</a> /
                    Шкафы на заказ
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col text-md-center">
                <h2>Наши работы</h2>
                <p class="section-description archive-portfolio mb-3">Представляем с гордостью!</p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">
            </div>
        </div>
        <div class="row text-md-center">
            <div class="col mb-5">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Прямые</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Угловые</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                    <label class="form-check-label" for="inlineCheckbox3">П-образные</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                    <label class="form-check-label" for="inlineCheckbox4">С барной стойкой</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
                    <label class="form-check-label" for="inlineCheckbox5">С островком</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6">
                    <label class="form-check-label" for="inlineCheckbox6">Трехрядные</label>
                </div>
            </div>
        </div>
        <div class="row text-start">
            <div class="col-md-6 mb-5">
                <a href="single-portfolio-product-page.html">
                    <div class="approximation project-container-2 rounded">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-card (1).jpg"
                            class="img-fluid" alt="">
                        <div class="card-wrapper project-container-2-footer">
                            <div class="row card-portfolio">
                                <div class="col-6">
                                    <h3>Кухня #099</h3>
                                </div>
                                <div class="col-6">
                                    <h3 class="text-end">₽155 000</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-5">
                <a href="single-portfolio-product-page.html">
                    <div class="approximation project-container-2 rounded">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-card (2).jpg"
                            class="img-fluid" alt="" decoding="async" />
                        <div class="card-wrapper project-container-2-footer">
                            <div class="row card-portfolio">
                                <div class="col-6">
                                    <h3>Кухня #098</h3>
                                </div>
                                <div class="col-6">
                                    <h3 class="text-end">₽95 000</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-5">
                <a href="single-portfolio-product-page.html">
                    <div class="approximation project-container-2 rounded">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-card (3).jpg"
                            class="img-fluid" alt="" decoding="async" />
                        <div class="card-wrapper project-container-2-footer">
                            <div class="row card-portfolio">
                                <div class="col-6">
                                    <h3>Кухня #097</h3>
                                </div>
                                <div class="col-6">
                                    <h3 class="text-end">₽105 000</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-5">
                <a href="single-portfolio-product-page.html">
                    <div class="approximation project-container-2 rounded">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-card (4).jpg"
                            class="img-fluid" alt="" decoding="async" />
                        <div class="card-wrapper project-container-2-footer">
                            <div class="row card-portfolio">
                                <div class="col-6">
                                    <h3>Кухня #096</h3>
                                </div>
                                <div class="col-6">
                                    <h3 class="text-end">₽115 000</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-5">
                <a href="single-portfolio-product-page.html">
                    <div class="approximation project-container-2 rounded">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-card (5).jpg"
                            class="img-fluid" alt="" decoding="async" fetchpriority="high" />
                        <div class="card-wrapper project-container-2-footer">
                            <div class="row card-portfolio">
                                <div class="col-6">
                                    <h3>Кухня #095</h3>
                                </div>
                                <div class="col-6">
                                    <h3 class="text-end">₽105 000</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-5">
                <a href="single-portfolio-product-page.html">
                    <div class="approximation project-container-2 rounded">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-card (6).jpg"
                            class="img-fluid" alt="" decoding="async" />
                        <div class="card-wrapper project-container-2-footer">
                            <div class="row card-portfolio">
                                <div class="col-6">
                                    <h3>Кухня #094</h3>
                                </div>
                                <div class="col-6">
                                    <h3 class="text-end">₽105 000</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-5">
                <a href="single-portfolio-product-page.html">
                    <div class="approximation project-container-2 rounded">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-card (7).jpg"
                            class="img-fluid" alt="" decoding="async" />
                        <div class="card-wrapper project-container-2-footer">
                            <div class="row card-portfolio">
                                <div class="col-6">
                                    <h3>Кухня #093</h3>
                                </div>
                                <div class="col-6">
                                    <h3 class="text-end">₽105 000</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-5">
                <a href="single-portfolio-product-page.html">
                    <div class="approximation project-container-2 rounded">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-card (8).jpg"
                            class="img-fluid" alt="" decoding="async" />
                        <div class="card-wrapper project-container-2-footer">
                            <div class="row card-portfolio">
                                <div class="col-6">
                                    <h3>Кухня #092</h3>
                                </div>
                                <div class="col-6">
                                    <h3 class="text-end">₽105 000</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-5">
                <a href="single-portfolio-product-page.html">
                    <div class="approximation project-container-2 rounded">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-card (9).jpg"
                            class="img-fluid" alt="" decoding="async" />
                        <div class="card-wrapper project-container-2-footer">
                            <div class="row card-portfolio">
                                <div class="col-6">
                                    <h3>Кухня #091</h3>
                                </div>
                                <div class="col-6">
                                    <h3 class="text-end">₽105 000</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-5">
                <a href="single-portfolio-product-page.html">
                    <div class="approximation project-container-2 rounded">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-card (10).jpg"
                            class="img-fluid" alt="" decoding="async" />
                        <div class="card-wrapper project-container-2-footer">
                            <div class="row card-portfolio">
                                <div class="col-6">
                                    <h3>Кухня #090</h3>
                                </div>
                                <div class="col-6">
                                    <h3 class="text-end">₽105 000</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row text-md-center">
            <div class="col">
                <a href="#" type="button" class="btn btn-lg btn-corporate-color-1">Показать еще</a>
            </div>
        </div>
    </div>
</section>
<!-- /Archive-portfolio section -->


<!-- Gradient order section -->
<section class="gradient-order-section bg-light section-half"
    style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/gradient-order-section-bg-dark.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 text-md-end">
                <h2 class="text-light">Рассчитаем стоимость за 15 минут</h2>
                <p class="section-description archive-portfolio text-light mb-3">Хотите узнать стоимость качественной
                    кухни с
                    учетом всех Ваших пожеланий и особенностей помещения? Это бесплатно и ни к чему Вас не обязывает!
                </p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">
                <br>
                <a href="#" type="button" class="btn btn-lg btn-corporate-color-1 mb-4" data-bs-toggle="modal"
                    data-bs-target="#calculatePriceWithDownloadModal">Рассчитать стоимость</a>
                <div class="row justify-content-md-end">
                    <div class="col">
                        <ul class="nav justify-content-md-end gap-3">
                            <li class="nav-item">
                                <a class="nav-link ico-button" href="https://wa.me/79361385058?web=1&amp;app_absent=1">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.png" />
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ico-button" href="https://t.me/+79361385058">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.png" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-7"></div>
        </div>
    </div>
</section>
<!-- End gradient order section -->



<!-- ABOUT SECTION -->
<section class="about-section bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col text-md-center">
                <h2>О нас</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">
            </div>
        </div>
        <!-- Слайдер Bootstrap -->
        <div class="row justify-content-between about_box">
            <div class="col-12 col-lg-6 order-2 order-lg-first text-center">

                <div id="aboutCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner rounded">
                        <div class="carousel-item">
                            <a onclick="aboutSectionGalleryOn('aboutSectionGallery','imgAboutSectionGallery-1');">
                                <div class="single-product-img approximation">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/about/1.webp"
                                        class="d-block w-100" loading="lazy" alt="...">
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a onclick="aboutSectionGalleryOn('aboutSectionGallery','imgAboutSectionGallery-2');">
                                <div class="single-product-img approximation">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/about/2.webp"
                                        class="d-block w-100" loading="lazy" alt="...">
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item active">
                            <a onclick="aboutSectionGalleryOn('aboutSectionGallery','imgAboutSectionGallery-3');">
                                <div class="single-product-img approximation">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/about/3.webp"
                                        class="d-block w-100" loading="lazy" alt="...">
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a onclick="aboutSectionGalleryOn('aboutSectionGallery','imgAboutSectionGallery-4');">
                                <div class="single-product-img approximation">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/about/4.webp"
                                        class="d-block w-100" loading="lazy" alt="...">
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a onclick="aboutSectionGalleryOn('aboutSectionGallery','imgAboutSectionGallery-5');">
                                <div class="single-product-img approximation">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/about/5.webp"
                                        class="d-block w-100" loading="lazy" alt="...">
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a onclick="aboutSectionGalleryOn('aboutSectionGallery','imgAboutSectionGallery-6');">
                                <div class="single-product-img approximation">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/about/6.webp"
                                        class="d-block w-100" loading="lazy" alt="...">
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a onclick="aboutSectionGalleryOn('aboutSectionGallery','imgAboutSectionGallery-7');">
                                <div class="single-product-img approximation">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/about/7.webp"
                                        class="d-block w-100" loading="lazy" alt="...">
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a onclick="aboutSectionGalleryOn('aboutSectionGallery','imgAboutSectionGallery-8');">
                                <div class="single-product-img approximation">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/about/8.webp"
                                        class="d-block w-100" loading="lazy" alt="...">
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Кнопки навигации -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#aboutCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Предыдущий</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#aboutCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Следующий</span>
                    </button>
                </div>
            </div>
            <!-- Описание -->
            <div class="col-12 col-lg-5 offset-lg-1 order-1 order-lg-last mb-lg-0 description_about">
                <p class="text-start">Студия кухни «Furniture» поможет каждому клиенту при выборе мебели по
                    индивидуальным
                    размерам, бесплатный дизайн-проект любой сложности, большой выбор мебели по цветовой гамме и ценовой
                    категории.</p>
                <p class="text-start">Обширный ассортимент фасадного материала такие как: Fundermax, Альтернатив, AGT,
                    Feelwood,
                    TSS. Для каждого клиента подбираем по его желаниям и возможностям европейскую фурнитуру, таких фирм
                    как: Blum,
                    Boyard, Hettich, VIBO и др. А также у нас можно укомплектоать мебель кухонной техникой известных
                    фирм: Эликор,
                    Midea, Куперсберг и др.</p>
                <p class="text-start">Нашими партнерами являются крупные фабрики «Ульяновск», «CUCINA», г. Пенза «Лев
                    Мебель»,
                    «Мебель стиль».</p>
            </div>
        </div>
    </div>
</section>
<!-- /ABOUT SECTION -->

<!-- /ABOUT SECTION GALLERY -->
<div id="aboutSectionGalleryWrapper">
    <div id="aboutSectionGallery" class="carousel slide" data-bs-ride="false" data-bs-interval="false"
        style="display: none;  position: fixed;  top: 0;  height: 100%;  width: 100%;">
        <div class="carousel-indicators">
            <button id="indAboutSectionGallery-1" type="button" data-bs-target="#aboutSectionGallery"
                data-bs-slide-to="0" aria-label="Slide 1"></button>
            <button id="indAboutSectionGallery-2" type="button" data-bs-target="#aboutSectionGallery"
                data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button id="indAboutSectionGallery-3" type="button" data-bs-target="#aboutSectionGallery"
                data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button id="indAboutSectionGallery-4" type="button" data-bs-target="#aboutSectionGallery"
                data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button id="indAboutSectionGallery-5" type="button" data-bs-target="#aboutSectionGallery"
                data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button id="indAboutSectionGallery-6" type="button" data-bs-target="#aboutSectionGallery"
                data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button id="indAboutSectionGallery-7" type="button" data-bs-target="#aboutSectionGallery"
                data-bs-slide-to="6" aria-label="Slide 7"></button>
            <button id="indAboutSectionGallery-8" type="button" data-bs-target="#aboutSectionGallery"
                data-bs-slide-to="7" aria-label="Slide 8"></button>
        </div>
        <div class="carousel-inner h-100">
            <div id="imgAboutSectionGallery-1" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img src="https://xn--62-6kca7ahoms.xn--p1ai/wp-content/uploads/2025/08/1.webp"
                            class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"
                            alt="..." />
                    </div>
                </div>
            </div>
            <div id="imgAboutSectionGallery-2" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img src="https://xn--62-6kca7ahoms.xn--p1ai/wp-content/uploads/2025/08/2.webp"
                            class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"
                            alt="..." />
                    </div>
                </div>
            </div>
            <div id="imgAboutSectionGallery-3" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img src="https://xn--62-6kca7ahoms.xn--p1ai/wp-content/uploads/2025/08/3.webp"
                            class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"
                            alt="..." />
                    </div>
                </div>
            </div>
            <div id="imgAboutSectionGallery-4" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img src="https://xn--62-6kca7ahoms.xn--p1ai/wp-content/uploads/2025/08/4.webp"
                            class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"
                            alt="..." />
                    </div>
                </div>
            </div>
            <div id="imgAboutSectionGallery-5" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img src="https://xn--62-6kca7ahoms.xn--p1ai/wp-content/uploads/2025/08/5.webp"
                            class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"
                            alt="..." />
                    </div>
                </div>
            </div>
            <div id="imgAboutSectionGallery-6" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img src="https://xn--62-6kca7ahoms.xn--p1ai/wp-content/uploads/2025/08/6.webp"
                            class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"
                            alt="..." />
                    </div>
                </div>
            </div>
            <div id="imgAboutSectionGallery-7" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img src="https://xn--62-6kca7ahoms.xn--p1ai/wp-content/uploads/2025/08/7.webp"
                            class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"
                            alt="..." />
                    </div>
                </div>
            </div>
            <div id="imgAboutSectionGallery-8" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img src="https://xn--62-6kca7ahoms.xn--p1ai/wp-content/uploads/2025/08/8.webp"
                            class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"
                            alt="..." />
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#aboutSectionGallery" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#aboutSectionGallery" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Кнопка закрытия галереи -->
    <button type="button" onClick="aboutSectionGalleryClose();" class="btn-close btn-close-white"
        style="position: fixed; top: 25px; right: 25px; z-index: 99999" aria-label="Close"></button>
</div>
<!-- /ABOUT SECTION GALLERY -->

<!-- /ABOUT SECTION GALLERY SCRIPT -->
<script>
    /* Gallery opening function */
    function aboutSectionGalleryOn(gal, img) {
        var gallery = gal; // Получаем ID галереи
        var image = img; // Получаем ID картинки

        // Открываем обертку галереи
        document.getElementById("aboutSectionGalleryWrapper").style.display = "block";

        // Открываем галерею
        if (gallery == "aboutSectionGallery") { document.getElementById("aboutSectionGallery").style.display = "block"; }

        /* Открываем изображения и индикаторы галереи */
        if (image == "imgAboutSectionGallery-1") {
            document.getElementById("imgAboutSectionGallery-1").classList.add("active");
            document.getElementById("indAboutSectionGallery-1").classList.add("active");
        }
        if (image == "imgAboutSectionGallery-2") {
            document.getElementById("imgAboutSectionGallery-2").classList.add("active");
            document.getElementById("indAboutSectionGallery-2").classList.add("active");
        }
        if (image == "imgAboutSectionGallery-3") {
            document.getElementById("imgAboutSectionGallery-3").classList.add("active");
            document.getElementById("indAboutSectionGallery-3").classList.add("active");
        }
        if (image == "imgAboutSectionGallery-4") {
            document.getElementById("imgAboutSectionGallery-4").classList.add("active");
            document.getElementById("indAboutSectionGallery-4").classList.add("active");
        }
        if (image == "imgAboutSectionGallery-5") {
            document.getElementById("imgAboutSectionGallery-5").classList.add("active");
            document.getElementById("indAboutSectionGallery-5").classList.add("active");
        }
        if (image == "imgAboutSectionGallery-6") {
            document.getElementById("imgAboutSectionGallery-6").classList.add("active");
            document.getElementById("indAboutSectionGallery-6").classList.add("active");
        }
        if (image == "imgAboutSectionGallery-7") {
            document.getElementById("imgAboutSectionGallery-7").classList.add("active");
            document.getElementById("indAboutSectionGallery-7").classList.add("active");
        }
        if (image == "imgAboutSectionGallery-8") {
            document.getElementById("imgAboutSectionGallery-8").classList.add("active");
            document.getElementById("indAboutSectionGallery-8").classList.add("active");
        }

    } /* Ending gallery opening function */


    // Кнопка закрытия галереи
    function aboutSectionGalleryClose() {
        // Закрываем обертку галереи
        document.getElementById("aboutSectionGalleryWrapper").style.display = "none";

        // Закрываем галерею
        document.getElementById("aboutSectionGallery").style.display = "none";

        /* Закрываем тзображения и индикаторы галереи */
        document.getElementById("imgAboutSectionGallery-1").classList.remove("active");
        document.getElementById("indAboutSectionGallery-1").classList.remove("active");
        document.getElementById("imgAboutSectionGallery-2").classList.remove("active");
        document.getElementById("indAboutSectionGallery-2").classList.remove("active");
        document.getElementById("imgAboutSectionGallery-3").classList.remove("active");
        document.getElementById("indAboutSectionGallery-3").classList.remove("active");
        document.getElementById("imgAboutSectionGallery-4").classList.remove("active");
        document.getElementById("indAboutSectionGallery-4").classList.remove("active");
        document.getElementById("imgAboutSectionGallery-5").classList.remove("active");
        document.getElementById("indAboutSectionGallery-5").classList.remove("active");
        document.getElementById("imgAboutSectionGallery-6").classList.remove("active");
        document.getElementById("indAboutSectionGallery-6").classList.remove("active");
        document.getElementById("imgAboutSectionGallery-7").classList.remove("active");
        document.getElementById("indAboutSectionGallery-7").classList.remove("active");
        document.getElementById("imgAboutSectionGallery-8").classList.remove("active");
        document.getElementById("indAboutSectionGallery-8").classList.remove("active");
    }
</script>
<!-- /ABOUT SECTION GALLERY SCRIPT -->


<!-- Advantage section -->
<section class="advantage bg-white py-5">
    <div class="container">
        <div class="row">
            <div class="col align-items-center text-md-center">
                <h2>Наши преимущества</h2>
                <p class="advantages">Почему стоит выбрать компанию «Furniture»</p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">

                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="row">
                            <div class="col-3 col-md-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/measurement-ico.svg"
                                    class="img-fluid">
                            </div>
                            <div class="col-9 col-md-10">
                                <h3 class="advantage-title text-start">Замер и дизайн-проект бесплатно</h3>
                                <p class="text-start">При заключении договора наш специалист бесплатно сделает замер и
                                    разработает
                                    дизайн-проект любого предмета мебели.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="row">
                            <div class="col-3 col-md-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-advantage-ico.svg"
                                    class="img-fluid">
                            </div>
                            <div class="col-9 col-md-10">
                                <h3 class="advantage-title text-start">Высокотехнологичное производство</h3>
                                <p class="text-start">Вся наша мебель изготавливаются на современном оборудовании
                                    фабрики Cucina, что
                                    позволяет гарантировать нам высочайшее качество каждого изделия.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="row">
                            <div class="col-3 col-md-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-guarantee-ico.svg"
                                    class="img-fluid">
                            </div>
                            <div class="col-9 col-md-10">
                                <h3 class="advantage-title text-start">Гарантия 2 года</h3>
                                <p class="text-start">Мы даем максимальную гарантию на свою мебель, т.к. уверены в
                                    профессионализме
                                    своих сотрудников и используемых материалах.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="row">
                            <div class="col-3 col-md-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/discount-ico.svg"
                                    class="img-fluid">
                            </div>
                            <div class="col-9 col-md-10">
                                <h3 class="advantage-title text-start">Скидка +10% при повторном обращении</h3>
                                <p class="text-start">Мы изготавливаем любую корпусную мебель, а значит Вы можете
                                    заказать у нас кухню,
                                    шкаф, прихожую или другую мебель в квартиру в едином стиле по выгодной цене.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="row">
                            <div class="col-3 col-md-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/measurement-ico.svg"
                                    class="img-fluid">
                            </div>
                            <div class="col-9 col-md-10">
                                <h3 class="advantage-title text-start">Замер и дизайн-проект бесплатно</h3>
                                <p class="text-start">При заключении договора наш специалист бесплатно сделает замер и
                                    разработает
                                    дизайн-проект Вашей будущей кухни</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="row">
                            <div class="col-3 col-md-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-advantage-ico.svg"
                                    class="img-fluid">
                            </div>
                            <div class="col-9 col-md-10">
                                <h3 class="advantage-title text-start">Собственное производство</h3>
                                <p class="text-start">Мы обеспечиваем полный цикл изготовления кухни (проект,
                                    производство, доставка,
                                    монтаж), без перекладывания обязанностей на посредников.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Advantage section -->


<!-- Как заказать -->
<section class="advantages bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="section-title text-center">
                <h2>Как заказать</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">
            </div>

            <div class="row justify-content-around">
                <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="row align-items-center">
                        <div class="col-4 text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/1.svg" class="img-fluid" />
                        </div>
                        <div class="col-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/call-agent-ico.svg"
                                class="img-fluid" />
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col text-start">
                            <h3>Первичный контакт</h3>
                            <p class="mb-0">
                                Свяжитесь с нами любым удобным способом, расскажите, что Вы хотите. При наличии
                                дизайн-проекта,
                                набросок, размеров или другой информации — высылаете нам на почту, в Telegram, Whatsapp
                                или в форме
                                обратной связи.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="row align-items-center">
                        <div class="col-4 text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/2.svg" class="img-fluid" />
                        </div>
                        <div class="col-4 text-start">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/calc-ico.svg"
                                class="img-fluid" />
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col text-start">
                            <h3>Расчет стоимости</h3>
                            <p class="mb-0">
                                На основании полученой от Вас информации мы сделаем предварительный расчет стоимости и
                                сроков
                                производства. При необходимости уточняемм детали.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="row align-items-center">
                        <div class="col-4 text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/3.svg" class="img-fluid" />
                        </div>
                        <div class="col-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/doc-ico.svg"
                                class="img-fluid" />
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col text-start">
                            <h3>Заключение договора</h3>
                            <p class="mb-0">
                                Если Вас все устраивает, мы приезжаем к Вам на замер, утверждаем сроки, материалы,
                                заключаем договор. Вы
                                вносите предоплату и кухня поступает в производство.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-0">
                    <div class="row align-items-center">
                        <div class="col-4 text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/4.svg" class="img-fluid" />
                        </div>
                        <div class="col-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/delivery.svg"
                                class="img-fluid" />
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col text-start">
                            <h3>Доставка и установка</h3>
                            <p class="mb-0">
                                После окончания производства доставляем и устанавливаем кухню в заранее оговоренные дату
                                и время. После
                                установки производим окончательные расчеты.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Как заказать -->


<!-- Частые вопросы -->
<section class="section section-faq py-5 bg-white">
    <div class="container">
        <div class="section-title text-center">
            <h2>Частые вопросы</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">
        </div>

        <div class="col-lg-10 text-center mx-auto">
            <div class="accordion text-start" id="accordionExample">
                <div class="accordion-item mb-3">
                    <h3 class="accordion-header" id="heading-2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                            Сколько времени изготавливается кухня?
                        </button>
                    </h3>
                    <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p> Срок производства зависит от материалов и составляет от 10 рабочих дней. Сроки, в
                                обязательном
                                порядке, согласовываются с заказчиком при заключении договора.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3">
                    <h3 class="accordion-header" id="heading-1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                            Как вызвать специалиста для проведения замера?
                        </button>
                    </h3>
                    <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-0">
                                Вызвать замерщика Вы можете любым из способов: оставить онлайн-заявку на нашем сайте,
                                написать на
                                электронный адрес: <a href="mailto:mozaika62@bk.ru">mozaika62@bk.ru</a>, позвонить по
                                телефону ☎ <a href="tel:+79511014610">8 (951) 101-46-10</a> или оставить заявку на
                                обратный звонок, написать в Telegram или Whatsapp.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item mb-3">
                    <h3 class="accordion-header" id="heading-3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                            Сколько стоит вызов замерщика?
                        </button>
                    </h3>
                    <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-0">
                                Стоимость выезда замерщика с образцами материалов составляет 3000 руб. Но если Вы
                                заключаете договор, то
                                замер для Вас обходится бесплатно, а оплаченный Вами выезд вычитается из суммы оплаты.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item mb-3">
                    <h3 class="accordion-header" id="heading-4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                            Если эскиз кухни уже есть, можно ли по нему получить расчет?
                        </button>
                    </h3>
                    <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Конечно!</p>
                            <p class="mb-0">Направьте эскиз с Вашей кухней (или другой корпусной мебелью) на нашу
                                электронную почту:<a target="_blank"
                                    href="mailto:mebel-dsever@yandex.ru">mebel-dsever@yandex.ru</a>,
                                дополнительно указав в письме материал фасадов,
                                комплектацию, габариты мебели и мы предоставим расчет в ответном письме.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item mb-3">
                    <h3 class="accordion-header" id="heading-4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                            У вас цены ниже, чем обычно по городу. Почему?
                        </button>
                    </h3>
                    <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body pb-2">
                            <p class="mb-0">
                                Наличие собственного производства, оптовые закупки расходных материалов и большое
                                количество заказов
                                позволяют нам сохранять цены на докризисном уровне и делать нашим клиентам предложения
                                на самых выгодных
                                условиях.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item mb-3">
                    <h3 class="accordion-header" id="heading-6">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                            Какая модель кухни самая популярная?
                        </button>
                    </h3>
                    <div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body pb-2">
                            <p>Предпочтения наших клиентов настолько разнообразны, что выделить какую-либо модель
                                достаточно сложно.
                                При разработке проекта мы учитываем все Ваши пожелания, а благодаря широчайшей коллекции
                                фасадов и
                                столешниц, могут быть сотни разных вариаций.</p>
                            <p class="mb-0">
                                В одном можем уверить Вас точно: какая бы ни была кухня от нашей фабрики по стилю или
                                конфигурации, она
                                идеально впишется в ваш интерьер и прослужит долгие годы.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Частые вопросы -->

<!-- Gradient order section -->
<section class="gradient-order-section bg-light section-half"
    style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/sec-bg2.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 text-md-end">
                <h2>Рассчитаем стоимость за 15 минут</h2>
                <p class="section-description archive-portfolio mb-3">Хотите узнать стоимость качественной кухни с
                    учетом всех
                    Ваших пожеланий и особенностей помещения? Это бесплатно и ни к чему Вас не обязывает!</p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">
                <br>
                <a href="#" type="button" class="btn btn-lg btn-corporate-color-1 mb-4" data-bs-toggle="modal"
                    data-bs-target="#calculatePriceWithDownloadModal">Рассчитать стоимость</a>
                <div class="row justify-content-md-end">
                    <div class="col">
                        <ul class="nav justify-content-md-end gap-3">
                            <li class="nav-item">
                                <a class="nav-link ico-button" href="https://wa.me/79361385058?web=1&amp;app_absent=1">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.png" />
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ico-button" href="https://t.me/+79361385058">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.png" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-7"></div>
        </div>
    </div>
</section>
<!-- End gradient order section -->

<!-- CONTACTS SECTION 4 -->
<section class="contacts-section-4">

    <!-- Desktop version -->
    <div class="container py-5 d-none d-xl-block">
        <div class="row align-items-center">
            <div class="col-xl-2">
                <a href="/">
                    <img id="navbar-brand-img" src="<?php echo get_template_directory_uri(); ?>/img/ico/logo-light.svg"
                        class="img-fluid">
                </a>
            </div>
            <div class="col-xl-8">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'contacts-desktop-menu',
                    'container' => false,
                    'menu_class' => '',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '
							<ul id="%1$s" class="nav justify-content-center %2$s">%3$s</ul>
						',
                    'depth' => 2,
                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>
            </div>
            <div class="col-xl-2 text-end">
                <a href="tel:‪89511014610" class="contacts-phone">‪
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/mobile-phone-ico.svg" class="me-2"
                        style="position: relative; bottom: 1px;">8 <span>(951)</span> 101-46-10
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col py-4">
                <ul class="nav justify-content-center align-items-center">
                    <li class="nav-item me-1 me-lg-2">
                        <a class="nav-link" href="#">
                            <div style="display: flex;" class="align-items-center">
                                <div class="nav-li-float-left">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg">
                                </div>
                                <div class="nav-li-float-right">
                                    <span>гор. Рязань,<br>ул. Чапаева, 56</span>
                                </div>
                                <div style="clear: both;"></div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item me-1 me-lg-2">
                        <a class="nav-link" href="#">
                            <div style="display: flex;" class="align-items-center">
                                <div class="nav-li-float-left">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg"
                                        class="pt-1">
                                </div>
                                <div class="nav-li-float-right">
                                    <span>Пн-Сб: с 10:00-19:00<br>Вс: с 10:00-17:00</span>
                                </div>
                                <div style="clear: both;"></div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item me-1 me-lg-2">
                        <a href="mailto:mozaika62@bk.ru" class="nav-link">
                            <div style="display: flex;" class="align-items-center">
                                <div class="nav-li-float-left">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/email-ico.svg">
                                </div>
                                <div class="nav-li-float-right">
                                    <span>mozaika62@bk.ru</span>
                                </div>
                                <div style="clear: both;"></div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item me-1 me-lg-2">
                        <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#callbackModal">
                            <div style="display: flex;" class="align-items-center">
                                <div class="nav-li-float-left">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/callback-ico.svg">
                                </div>
                                <div class="nav-li-float-right">
                                    <span>Обратный звонок</span>
                                </div>
                                <div style="clear: both;"></div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item me-1 me-lg-2">
                        <a class="nav-link" href="#" data-bs-toggle="modal"
                            data-bs-target="#calculatePriceWithDownloadModal">
                            <div style="display: flex;" class="align-items-center">
                                <div class="nav-li-float-left">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/calculator-ico.svg"
                                        class="pt-1">
                                </div>
                                <div class="nav-li-float-right">
                                    <span>Рассчитать стоимость</span>
                                </div>
                                <div style="clear: both;"></div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link ico-button px-2" href="https://wa.me/79511014610?web=1&app_absent=1">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.svg">
                        </a>
                    </li>

                    <!-- Telegram -->
                    <?php if (get_theme_mod('mytheme_telegram')): ?>
                        <li class="nav-item">
                            <a class="nav-link ico-button px-2" href="<?php echo get_theme_mod('mytheme_telegram'); ?>"
                                target="blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.svg">
                            </a>
                        </li>
                    <?php endif; ?>

                    <li class="nav-item">
                        <a class="nav-link ico-button px-2" href="https://www.instagram.com/mozaika.kitchen62">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/instagram-ico.svg">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ico-button px-2" href="https://vk.com/mozaika.kitchen62">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk-ico.svg">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Desktop version -->

    <!-- Mobile version -->
    <div class="container d-xl-none">
        <div class="row">
            <div class="col py-5">
                <a href="#">
                    <img id="navbar-brand-img" src="<?php echo get_template_directory_uri(); ?>/img/ico/logo-light.svg"
                        class="img-fluid">
                </a>
                <ul class="ps-0 pt-3 pb-2">
                    <li class="nav-item">
                        <a href="#" class="nav-link ps-0 pb-2">
                            <div style="display: flex;" class="align-items-center">
                                <div class="nav-li-float-left">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg">
                                </div>
                                <div class="nav-li-float-right">
                                    <span>гор. Рязань, ул. Чапаева, д. 56</span>
                                </div>
                                <div style="clear: both;"></div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ps-0 py-2">
                            <div style="display: flex;" class="align-items-center">
                                <div class="nav-li-float-left">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg"
                                        class="pt-1">
                                </div>
                                <div class="nav-li-float-right">
                                    <span>Пн-Сб: с 10:00-19:00 Вс: с 10:00-17:00</span>
                                </div>
                                <div style="clear: both;"></div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="mailto:mozaika62@bk.ru" class="nav-link ps-0 py-2">
                            <div style="display: flex;" class="align-items-center">
                                <div class="nav-li-float-left">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/email-ico.svg">
                                </div>
                                <div class="nav-li-float-right">
                                    <span>mozaika62@bk.ru</span>
                                </div>
                                <div style="clear: both;"></div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ps-0 pt-2">
                            <div style="display: flex;" class="align-items-center">
                                <div class="nav-li-float-left">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/callback-ico.svg">
                                </div>
                                <div class="nav-li-float-right">
                                    <span>Обратный звонок</span>
                                </div>
                                <div style="clear: both;"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <a href="tel:‪89511014610" class="contacts-phone">
                    <div style="display: flex;" class="align-items-center">
                        <div class="nav-li-float-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/mobile-phone-ico.svg"
                                style="position: relative; bottom: 1px;">
                        </div>
                        <div class="nav-li-float-right">
                            8 <span>(951)</span> 101-46-10
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                </a>
                <ul class="nav pt-4 pb-3">
                    <li class="nav-item">
                        <a class="nav-link ico-button ps-0 pe-2" href="https://wa.me/79511014610?web=1&app_absent=1">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.svg">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ico-button px-2" href="https://t.me/+79511014610">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.svg">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ico-button px-2" href="https://www.instagram.com/mozaika.kitchen62">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/instagram-ico.svg">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ico-button px-2" href="https://vk.com/mozaika.kitchen62">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk-ico.svg">
                        </a>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-lg-8 pt-4 pt-lg-2">
                        <div class="row d-lg-none justify-content-center">
                            <div class="col-6 left-col-footer-menu">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'footer-menu-1',
                                    'container' => false,
                                    'menu_class' => '',
                                    'fallback_cb' => '__return_false',
                                    'items_wrap' => '<ul id="menu-main-menu-2" class="navbar-nav ms-auto mb-lg-0 %2$s">%3$s</ul>',
                                    'depth' => 2,
                                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                                ));
                                ?>
                            </div>
                            <div class="col-6 right-col-footer-menu">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'footer-menu-2',
                                    'container' => false,
                                    'menu_class' => '',
                                    'fallback_cb' => '__return_false',
                                    'items_wrap' => '<ul id="menu-main-menu-3" class="navbar-nav ms-auto mb-lg-0 %2$s">%3$s</ul>',
                                    'depth' => 2,
                                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                                ));
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Mobile version -->

    <!-- Footer -->
    <footer style="padding: 29px 0;">
        <div class="container">
            <div class="row">
                <div class="col text-start text-md-center">
                    <div id="im-in-footer">Создание, продвижение и поддержка:
                        <a href="#" class="text-light">сайт100.рф</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer -->

</section>
<!-- /CONTACTS SECTION 4 -->




<!-- Callback Modal -->
<div class="modal fade" id="callbackModal" tabindex="-1" aria-labelledby="callbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form method="post" action="callback-mail.php" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="callbackModalLabel">Обратный звонок</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <p><small>Мы свяжемся с Вами в теченее 10 минут и ответим на все вопросы! Для звонка введите
                                Ваше имя и
                                телефон.</small></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <input type="text" name="name" class="form-control" placeholder="Ваше имя">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="tel" class="form-control telMask" placeholder="Ваш телефон*" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-corporate-color-1 mx-auto">Жду звонка</button>
            </div>
        </form>
    </div>
</div>
<!-- /Callback Modal -->


<!-- Рассчитать стоимость с загрузкой изображения -->
<div class="modal fade" id="calculatePriceWithDownloadModal" tabindex="-1"
    aria-labelledby="calculatePriceWithDownloadLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form method="post" action="mails/get_calculate.php" class="modal-content" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title" id="calculatePriceWithDownloadLabel">Рассчитать стоимость</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row pb-2">
                    <div class="col-12">
                        <p><small>Опишите кухню своими словами, укажите форму, размеры, материалы и другую
                                информацию</small></p>
                    </div>
                    <div class="col-12 mb-3">
                        <textarea type="text" rows="3" name="mes" class="form-control form-control-corporate-color-1"
                            placeholder=""></textarea>
                    </div>
                    <div class="col-12">
                        <p><small>Вы можете прикрепить проект, изображение или схематично нарисованный рисунок
                                кухни.</small></p>
                    </div>
                    <div class="mb-3">
                        <div class="input-group custom-file-button">
                            <label class="input-group-text" for="inputGroupFile"
                                style="border-radius: 5px;">Прикрепить</label>
                            <input type="file" name="file[]" class="form-control" id="inputGroupFile"
                                accept=".jpg,.jpeg,.png,.pdf,.heic" multiple>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" name="name" class="form-control form-control-corporate-color-1"
                            placeholder="Ваше имя">
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" name="tel" class="form-control form-control-corporate-color-1 telMask"
                            placeholder="Ваш телефон*" required>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-corporate-color-1">Отправить</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /Рассчитать стоимость с загрузкой изображения -->


<!-- Рассчитать стоимость без загрузки изображения -->
<div class="modal fade" id="calculatePriceWithoutDownloadModal" tabindex="-1"
    aria-labelledby="calculatePriceWithoutDownloadLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form method="post" action="mails/get_calculate.php" class="modal-content" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title" id="calculatePriceWithoutDownloadLabel">Рассчитать стоимость</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row pb-2">
                    <div class="col-12">
                        <p>Расчет по кухне #099</p>
                    </div>
                    <div class="col-12 mb-3">
                        <textarea type="text" rows="3" name="mes" class="form-control form-control-corporate-color-1"
                            placeholder="При желании укажите форму, размеры, материалы кухни или другую информацию"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" name="name" class="form-control form-control-corporate-color-1"
                            placeholder="Ваше имя">
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" name="tel" class="form-control form-control-corporate-color-1 telMask"
                            placeholder="Ваш телефон*" required>
                    </div>

                    <div class="col-md-6">
                        <button type="submit" class="btn btn-corporate-color-1">Отправить</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /Рассчитать стоимость без загрузки изображения -->


<!-- Measurer Modal -->
<div class="modal fade" id="measurerModal" tabindex="-1" aria-labelledby="measurerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form method="post" action="mails/measurer-mail.php" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="measurerModalLabel">Вызов замерщика</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <p><small>Наш специалист приедет в удобное для Вас время, произведет замеры, ознакомит с
                                продукцией и
                                материалами, cделает 3d дизайн-проект, проконсультирует по всем вопросам! Для связи с
                                замерщиком
                                дизайнером введите Ваше имя и телефон.</small></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Ваше имя">
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" name="tel" class="form-control telMask" placeholder="Ваш телефон*">
                    </div>
                    <div class="col-12 mb-3">
                        <input type="text" name="adr" class="form-control" placeholder="Адрес объекта*">
                    </div>
                    <div class="col-12 mb-3">
                        <textarea type="text" name="mes" class="form-control"
                            placeholder="Дополнительная информация"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p class="mb-0">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-1.svg" class="me-1"
                                style="width: 25px;">
                            <small>Изготовление от 10 дней!</small>
                        </p>
                    </div>
                    <div class="col-6">
                        <p class="mb-0">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-3.svg" class="me-1"
                                style="width: 20px;">
                            <small>Гарантия 2 года!</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-corporate-color-1 mx-auto">Вызвать</button>
            </div>
        </form>
    </div>
</div>
<!-- /Measurer Modall -->

<!-- Callback button HTML -->
<div class="callback-button-wrapper">
    <div id="callbackBtn" class="callback-button" onclick="callbackButtonClick();">
        <div id="btnIco" class="callback-button-ico"></div>
    </div>

    <div id="formBtn" class="callback-form-button" data-bs-toggle="tooltip" data-bs-placement="left"
        data-bs-custom-class="custom-tooltip" data-bs-title="Перезвонить Вам?">
        <a data-bs-toggle="modal" data-bs-target="#callbackModal">
            <div class="callback-form-button-ico"></div>
        </a>
    </div>
    <div id="phoneBtn" class="callback-phone-button" data-bs-toggle="tooltip" data-bs-placement="left"
        data-bs-custom-class="custom-tooltip" data-bs-title="Позвонить">
        <a href="tel:84993900100">
            <div class="callback-phone-button-ico"></div>
        </a>
    </div>
    <div id="whatsappBtn" class="callback-whatsapp-button" data-bs-toggle="tooltip" data-bs-placement="left"
        data-bs-custom-class="custom-tooltip" data-bs-title="Whatsapp">
        <!-- Не открывает ссылку с ПК если не установлено приложение WhatsApp
                <a href="whatsapp://send?phone=+79361385058"><div class="callback-whatsapp-button-ico"></div></a> -->
        <!-- Другой вариант ссылки. Все равно не открывает Whatsapp если нет приложения -->
        <a href="https://wa.me/79361385058?web=1&app_absent=1" target="blank">
            <div class="callback-whatsapp-button-ico"></div>
        </a>
        <!-- Еще варианты -->
        <!--a href="https://api.whatsapp.com/send/?phone=79361385058&text=Привет"><div class="callback-whatsapp-button-ico"></div></a-->
        <!--a href="https://wa.clck.bar/79361385058?text=%D0%9F%D1%80%D0%B8%D0%B2%D0%B5%D1%82!"><div class="callback-whatsapp-button-ico"></div></a-->
    </div>
    <div id="telegramBtn" class="callback-telegram-button" data-bs-toggle="tooltip" data-bs-placement="left"
        data-bs-custom-class="custom-tooltip" data-bs-title="Telegram">
        <a href="https://t.me/+79361385058">
            <div class="callback-telegram-button-ico"></div>
        </a>
    </div>
</div>
<!-- /Callback button HTML -->

<!-- Bootstrap JS -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>

<!-- jQuery -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.5.1.min.js"></script>

<!-- Theme JS -->
<script src="<?php echo get_template_directory_uri(); ?>/js/theme.js"></script>

<!-- Menu -->
<script>vyezjalo();</script>

<!--script src="<?php echo get_template_directory_uri(); ?>/js/quiz.js"></script-->

<!-- Telephone number mask -->
<script src="<?php echo get_template_directory_uri(); ?>/js/inputmask.min.js"></script>
<script>
    var telMask = document.getElementsByClassName("telMask");
    var im = new Inputmask("+7(999)999-99-99");
    im.mask(telMask);
</script>
</body>

</html>