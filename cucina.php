<?php

/**
 * Template Name: Кучина
 * Template Post Type: page
 */

include 'header.php';

?>


<!-- Home section -->
<div id="sp-home" class="scroll-points"></div>
<section class="main-home-section home-cucina">
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
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                            <path
                                                d="M13.11 23.46C15.517 20.444 21 13.13 21 9.024 21 4.042 16.969 0 12 0S3 4.042 3 9.023c0 4.108 5.484 11.42 7.89 14.438.576.719 1.644.719 2.22 0M12 6.017c.796 0 1.559.316 2.121.88a3.01 3.01 0 0 1 0 4.254 2.996 2.996 0 0 1-4.242 0 3.01 3.01 0 0 1 0-4.253A3 3 0 0 1 12 6.016" />
                                        </svg>
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
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                            <path
                                                d="M21.75 12a9.75 9.75 0 1 1-19.5 0 9.75 9.75 0 0 1 19.5 0M0 12a12 12 0 1 0 24 0 12 12 0 0 0-24 0m10.875-6.375V12c0 .375.188.727.502.938l4.5 3a1.12 1.12 0 0 0 1.56-.315 1.12 1.12 0 0 0-.314-1.56L13.125 11.4V5.625c0-.623-.502-1.125-1.125-1.125s-1.125.502-1.125 1.125" />
                                        </svg>
                                    </div>
                                    <div class="nav-li-float-right">
                                        Пн-Сб: с 10.00-19.00<br>Вс: с 10.00-17.00
                                    </div>
                                    <div style="clear: both;"></div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item me-1 me-xxl-3">
                            <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#callbackModal">
                                <div style="display: flex;">
                                    <div class="nav-li-float-left">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                            <path
                                                d="M3.71 1.991q.522-.066.89.301a780 780 0 0 1 3.116 4.786q.153.598-.116 1.157a67 67 0 0 1-1.766 2.844 8.6 8.6 0 0 0 1.005 1.896 17.3 17.3 0 0 0 3.936 3.988q.989.713 2.135 1.145 1.278-.83 2.574-1.63.39-.231.83-.324.22-.023.44 0 .107.037.207.093a487 487 0 0 1 4.756 3.121q.246.281.254.66a1.7 1.7 0 0 1-.243.785 18.5 18.5 0 0 1-2.181 2.486 3.8 3.8 0 0 1-.924.624 6 6 0 0 1-.461.058 9.2 9.2 0 0 1-3.21-.659 19.2 19.2 0 0 1-4.316-2.45 38.3 38.3 0 0 1-7.907-8.036 19.7 19.7 0 0 1-2.054-3.7A9.3 9.3 0 0 1-.03 5.772q-.006-.343.173-.636.353-.527.785-.994Q2.024 2.987 3.34 2.119q.186-.075.37-.128" />
                                            <path
                                                d="M15.334.99q.068.856.045 1.737 2.232-.017 4.462.035 2.055.454 2.688 2.535.062.252.09.51.015 3.09.01 6.183H20.4q.005-2.895-.012-5.79-.06-.883-.88-1.123a127 127 0 0 0-4.128-.034q.01.869-.022 1.736a514 514 0 0 1-3.726-2.894z" />
                                        </svg>
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24" class="svg-icon">
                                            <path
                                                d="M18.462 0H5.539a2.77 2.77 0 0 0-2.77 2.77v18.46A2.77 2.77 0 0 0 5.54 24h12.923a2.77 2.77 0 0 0 2.769-2.77V2.77A2.77 2.77 0 0 0 18.46 0m.923 7.385a.925.925 0 0 1-.923.923H5.539a.925.925 0 0 1-.924-.923V2.769c0-.508.415-.923.924-.923h12.923c.508 0 .923.415.923.923zM8.308 12a.925.925 0 0 1-.923.923H5.539A.925.925 0 0 1 4.615 12v-.923c0-.509.415-.923.924-.923h1.846c.508 0 .923.414.923.923zm5.538 0a.925.925 0 0 1-.923.923h-1.846a.925.925 0 0 1-.923-.923v-.923c0-.509.414-.923.923-.923h1.846c.509 0 .923.414.923.923zm5.539 0a.925.925 0 0 1-.923.923h-1.846a.925.925 0 0 1-.924-.923v-.923c0-.509.415-.923.924-.923h1.846c.508 0 .923.414.923.923zM8.308 16.615a.925.925 0 0 1-.923.924H5.539a.925.925 0 0 1-.924-.924v-.923c0-.508.415-.923.924-.923h1.846c.508 0 .923.415.923.923zm5.538 0a.925.925 0 0 1-.923.924h-1.846a.925.925 0 0 1-.923-.924v-.923c0-.508.414-.923.923-.923h1.846c.509 0 .923.415.923.923zm5.539 0a.925.925 0 0 1-.923.924h-1.846a.925.925 0 0 1-.924-.924v-.923c0-.508.415-.923.924-.923h1.846c.508 0 .923.415.923.923zM8.308 21.231a.925.925 0 0 1-.923.923H5.539a.925.925 0 0 1-.924-.923v-.923c0-.509.415-.923.924-.923h1.846c.508 0 .923.414.923.923zm5.538 0a.924.924 0 0 1-.923.923h-1.846a.925.925 0 0 1-.923-.923v-.923c0-.509.414-.923.923-.923h1.846c.509 0 .923.414.923.923zm5.539 0a.925.925 0 0 1-.923.923h-1.846a.925.925 0 0 1-.924-.923v-.923c0-.509.415-.923.924-.923h1.846c.508 0 .923.414.923.923z" />
                                            <path
                                                d="M17.539 3.692v2.77h-1.847v-2.77zm0-.923h-1.847a.925.925 0 0 0-.923.923v2.77c0 .508.415.922.923.922h1.846a.925.925 0 0 0 .924-.923V3.692a.925.925 0 0 0-.924-.923" />
                                        </svg>
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
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                            <path
                                                d="M4 3c0-1.655 1.305-3 2.91-3h10.18C18.696 0 20 1.345 20 3v18c0 1.655-1.305 3-2.91 3H6.91C5.304 24 4 22.655 4 21zm5.818 18c0 .413.328.75.728.75h2.909c.4 0 .727-.337.727-.75a.74.74 0 0 0-.728-.75h-2.908c-.4 0-.728.337-.728.75m7.273-18H6.909v15h10.182z" />
                                        </svg>
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
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                            <path
                                                d="M4 3c0-1.655 1.305-3 2.91-3h10.18C18.696 0 20 1.345 20 3v18c0 1.655-1.305 3-2.91 3H6.91C5.304 24 4 22.655 4 21zm5.818 18c0 .413.328.75.728.75h2.909c.4 0 .727-.337.727-.75a.74.74 0 0 0-.728-.75h-2.908c-.4 0-.728.337-.728.75m7.273-18H6.909v15h10.182z" />
                                        </svg>
                                    </div>
                                    <div class="nav-li-float-right" style="min-width: 128px;">
                                        8 (800) 880-80-88
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
											<svg width="10" height="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon me-1">
                                                <path
                                                    d="M13.11 23.46C15.517 20.444 21 13.13 21 9.024 21 4.042 16.969 0 12 0S3 4.042 3 9.023c0 4.108 5.484 11.42 7.89 14.438.576.719 1.644.719 2.22 0M12 6.017c.796 0 1.559.316 2.121.88a3.01 3.01 0 0 1 0 4.254 2.996 2.996 0 0 1-4.242 0 3.01 3.01 0 0 1 0-4.253A3 3 0 0 1 12 6.016" />
                                            </svg>
												<span>гор. Рязань, ул. Чапаева, 56</span>
										</div>
										<a class="nav-link top-menu-tel pt-1 pb-1" href="tel:89511014610">8 (800) 880-80-88</a>
										<div class="mb-2" style="font-size: 12px; font-family: HelveticaNeueCyr-Light; text-transform: none;">
											<svg width="10" height="10" style="position: relative; top: 2px;" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon me-1 mb-2">
                                            <path
                                                d="M21.75 12a9.75 9.75 0 1 1-19.5 0 9.75 9.75 0 0 1 19.5 0M0 12a12 12 0 1 0 24 0 12 12 0 0 0-24 0m10.875-6.375V12c0 .375.188.727.502.938l4.5 3a1.12 1.12 0 0 0 1.56-.315 1.12 1.12 0 0 0-.314-1.56L13.125 11.4V5.625c0-.623-.502-1.125-1.125-1.125s-1.125.502-1.125 1.125" />
                                        </svg>Пн-Сб: с 10.00-19.00, Вс: с 10.00-17.00
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
                        <svg width="12" height="12" style="position: relative; top: -1px;" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon me-1">
                            <path
                                d="M21.75 12a9.75 9.75 0 1 1-19.5 0 9.75 9.75 0 0 1 19.5 0M0 12a12 12 0 1 0 24 0 12 12 0 0 0-24 0m10.875-6.375V12c0 .375.188.727.502.938l4.5 3a1.12 1.12 0 0 0 1.56-.315 1.12 1.12 0 0 0-.314-1.56L13.125 11.4V5.625c0-.623-.502-1.125-1.125-1.125s-1.125.502-1.125 1.125" />
                        </svg>Пн-Сб: с 10.00-19.00<br>Вс:
                        с 10.00-17.00
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
											<svg width="10" height="10" viewBox="0 0 24 24" style="position: relative; top: -2px;" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon me-1">
                                                <path
                                                    d="M13.11 23.46C15.517 20.444 21 13.13 21 9.024 21 4.042 16.969 0 12 0S3 4.042 3 9.023c0 4.108 5.484 11.42 7.89 14.438.576.719 1.644.719 2.22 0M12 6.017c.796 0 1.559.316 2.121.88a3.01 3.01 0 0 1 0 4.254 2.996 2.996 0 0 1-4.242 0 3.01 3.01 0 0 1 0-4.253A3 3 0 0 1 12 6.016" />
                                            </svg>
											<span>гор. Рязань, ул. Чапаева, 56</span>
										</div>
										<a class="nav-link top-menu-tel pt-1 pb-1" href="tel:89511014610">8 (800) 880-80-88</a>
										<div class="mb-2" style="font-size: 12px; font-family: Gilroy-Light; text-transform: none;">
											  <svg width="10" height="10" style="position: relative; top: 3px;" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon me-1 mb-2">
                                            <path
                                                d="M21.75 12a9.75 9.75 0 1 1-19.5 0 9.75 9.75 0 0 1 19.5 0M0 12a12 12 0 1 0 24 0 12 12 0 0 0-24 0m10.875-6.375V12c0 .375.188.727.502.938l4.5 3a1.12 1.12 0 0 0 1.56-.315 1.12 1.12 0 0 0-.314-1.56L13.125 11.4V5.625c0-.623-.502-1.125-1.125-1.125s-1.125.502-1.125 1.125" />
                                        </svg>Пн-Сб: с 10.00-19.00, Вс: с 10.00-17.00
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
                </div><!-- #sliding-header-collapse -->
            </div>
        </nav>
        <!-- /Header nav bottom -->
    </header>
    <div class="container">
        <div class="row align-items-center home-section-height">
            <div class="col-xl-12 text-center">
                <a href="" class="logo-cucina">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/cucina-logo 1.svg" alt="">
                </a>
                <h1 class="home-title" style="color: #fff; margin-top: 20px;">Кухни CUCINA в Рязани</h1>
            </div>
        </div>
    </div>
</section>
<!-- /Home section -->


<!-- VIDEO SECTION -->
<section id="video" class="bg-white">
    <div id="video-container" class="container">
        <nav class="woocommerce-breadcrumb" itemprop="breadcrumb">
            <a href="/" class="me-2 d-flex align-items-center" style="padding-bottom: 2px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" fill="currentColor" viewBox="0 0 24 24" class="svg-icon">
                    <path
                        d="m21.71 11.29-9-9a1 1 0 0 0-1.42 0l-9 9a1 1 0 0 0 1.42 1.42l.29-.3v7.89A1.77 1.77 0 0 0 5.83 22H8.5a1 1 0 0 0 1-1v-4.9a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1V21a1 1 0 0 0 1 1h2.67A1.77 1.77 0 0 0 20 20.3v-7.89l.29.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42" />
                </svg>
            </a>
            / Кухни Cucina в Рязани
        </nav>
        <div class="row">
            <div class="text-md-center">
                <h2>Видеопрезентация фабрики CUCINA</h2>
                <svg style="margin-bottom: 60px;" width="62" height="14" viewBox="0 0 62 14" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                    <rect x="48" width="14" height="14" rx="3" />
                    <rect x="24" width="14" height="14" rx="3" />
                    <rect width="14" height="14" rx="3" />
                </svg>
            </div>
        </div>
        <div class="row justify-content-center" style="max-height: 480px;">
            <div class="col-md-8">
                <div style="position: relative">
                    <video id="video-player" class="rounded" style="width: 100%; max-height: 480px; overflow: hidden;"
                        playsinline="playsinline" loop="loop"
                        poster="<?php echo get_template_directory_uri(); ?>/img/cucina-video-poster.webp">
                        <!-- muted="muted" autoplay="autoplay" -->
                        <!-- <source src="header-bg.ogv" type='video/ogg; codecs="theora, vorbis"'> -->
                        <source src="<?php echo get_template_directory_uri(); ?>/video/video-cucina.mp4"
                            type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
                        <!-- <source src="header-bg.webm" type='video/webm; codecs="vp8, vorbis"'> -->
                    </video>
                    <div id="play-circle">
                        <div id="play" onclick="play();"></div>
                    </div>
                    <div id="stop-circle" onclick="pause();">
                        <div>
                            <i class="far fa-stop-circle"></i>
                        </div>
                    </div>
                </div>

                <script>
                    function play() {
                        document.getElementById("video-player").play();
                        document.getElementById("play-circle").style.display = "none";
                        document.getElementById("stop-circle").style.display = "block";
                    }

                    function pause() {
                        document.getElementById("video-player").pause();
                        document.getElementById("stop-circle").style.display = "none";
                        document.getElementById("play-circle").style.display = "block";
                    }
                </script>
            </div>
        </div>
    </div>
</section>
<!-- END VIDEO SECTION -->


<!-- ABOUT SECTION -->
<section class="about-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col text-md-center">
                <h2>О фабрике CUCINA</h2>
                <svg style="margin-bottom: 60px;" width="62" height="14" viewBox="0 0 62 14" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                    <rect x="48" width="14" height="14" rx="3" />
                    <rect x="24" width="14" height="14" rx="3" />
                    <rect width="14" height="14" rx="3" />
                </svg>
            </div>
        </div>
        <!-- Слайдер Bootstrap -->
        <div class="row justify-content-between align-items-center" style="margin-bottom: 120px;">
            <div class="col-12 col-lg-6 order-2 order-lg-last text-center">

                <div id="aboutCarousel1" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner rounded">
                        <div class="carousel-item active">
                            <a onClick="aboutSectionGallery1On('aboutSectionGallery1','imgAboutSectionGallery1-1');">
                                <div class="single-product-img approximation">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-cucina1.webp"
                                        class="d-block w-100" loading="lazy" alt="...">
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a onClick="aboutSectionGallery1On('aboutSectionGallery1','imgAboutSectionGallery1-2');">
                                <div class="single-product-img approximation">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-cucina2.webp"
                                        class="d-block w-100" loading="lazy" alt="...">
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div>
                        <!-- <div class="carousel-item">
                            <a onClick="aboutSectionGalleryOn('aboutSectionGallery','imgAboutSectionGallery-3');">
                                <div class="single-product-img approximation">
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/img/about-section-slide-3.jpeg" class="d-block w-100" loading="lazy" alt="...">
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div> -->
                    </div>
                    <!-- Кнопки навигации -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#aboutCarousel1"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Предыдущий</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#aboutCarousel1"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Следующий</span>
                    </button>
                </div>
            </div>
            <!-- Описание -->
            <div class="col-12 col-lg-5 order-1  order-lg-first mb-lg-0 description_about">
                <div class="description-block">
                    <h3>Наша миссия</h3>
                    <p>Превратить  мечты наших клиентов в реальность , создав идеальную кухню для каждого !</p>
                    <p>В центре внимания CUCINA — человек с его потребностями и желаниями, идеями и вкусами.</p>
                </div>
                <div class="description-block">
                    <h3>Наша цель</h3>
                    <p>Производить  качественную мебель , сбалансированно внедряя инновации исследуя традициям , в
                        гармонии с окружающей средой. Мы обеспечиваем выпуск индивидуальной дизайнерской мебели,
                        сохраняя на нее доступные цены.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-lg-6 order-2 order-lg-first text-center">

                <div id="aboutCarousel2" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner rounded">
                        <div class="carousel-item active">
                            <a onClick="aboutSectionGallery2On('aboutSectionGallery2','imgAboutSectionGallery2-1');">
                                <div class="single-product-img approximation">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-cucina2.webp"
                                        class="d-block w-100" loading="lazy" alt="...">
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a onClick="aboutSectionGallery2On('aboutSectionGallery2','imgAboutSectionGallery2-2');">
                                <div class="single-product-img approximation">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-cucina1.webp"
                                        class="d-block w-100" loading="lazy" alt="...">
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div>
                        <!-- <div class="carousel-item">
                            <a onClick="aboutSectionGalleryOn('aboutSectionGallery','imgAboutSectionGallery-3');">
                                <div class="single-product-img approximation">
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/img/about-section-slide-3.jpeg" class="d-block w-100" loading="lazy" alt="...">
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div> -->
                    </div>
                    <!-- Кнопки навигации -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#aboutCarousel2"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Предыдущий</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#aboutCarousel2"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Следующий</span>
                    </button>
                </div>
            </div>
            <!-- Описание -->
            <div class="col-12 col-lg-5 order-1 order-lg-last mb-lg-0 description_about">
                <div class="description-block">
                    <h3>Уникальность</h3>
                    <p>Наши проекты отличает внимание к деталям , ведь мы создаем уникальный продукт , который
                        оптимально подойдет к вашему стилю и образу жизни.</p>
                </div>
                <div class="description-block">
                    <h3>Ассортимент</h3>
                    <p>
                        Мы постоянно стремимся к совершенству и расширяем границы возможного в дизайне кухни.
                    </p>
                    <p>
                        Мы не забываем о функциональности ,оснащаем нашу продукцию только качественной европейской
                        фарнитурой в базовой ее комплектации.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /ABOUT SECTION -->


<!-- /ABOUT SECTION GALLERY -->
<div id="aboutSectionGallery1Wrapper">
    <div id="aboutSectionGallery1" class="carousel slide" data-bs-ride="false" data-bs-interval="false"
        style="display: none;  position: fixed;  top: 0;  height: 100%;  width: 100%;">
        <div class="carousel-indicators">
            <button id="indAboutSectionGallery1-1" type="button" data-bs-target="#aboutSectionGallery1"
                data-bs-slide-to="0" aria-label="Slide 1"></button>
            <button id="indAboutSectionGallery1-2" type="button" data-bs-target="#aboutSectionGallery1"
                data-bs-slide-to="1" aria-label="Slide 2"></button>
            <!-- <button id="indAboutSectionGallery1-3" type="button" data-bs-target="#aboutSectionGallery1" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
        </div>
        <div class="carousel-inner h-100">
            <div id="imgAboutSectionGallery1-1" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-cucina1.webp"
                            class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"
                            alt="..." />
                    </div>
                </div>
            </div>
            <div id="imgAboutSectionGallery1-2" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-cucina2.webp"
                            class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"
                            alt="..." />
                    </div>
                </div>
            </div>
            <!-- <div id="imgAboutSectionGallery-3" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img  data-src="<?php echo get_template_directory_uri(); ?>/img/about-section-slide-3.jpeg" class="img-fluid lazyload" loading="lazy"  style="max-width: 90vw; max-height: 90vh"  alt="..."/>
                    </div>
                </div>
            </div> -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#aboutSectionGallery1" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#aboutSectionGallery1" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Кнопка закрытия галереи -->
    <button type="button" onClick="aboutSectionGallery1Close();" class="btn-close btn-close-white"
        style="position: fixed; top: 25px; right: 25px; z-index: 99999" aria-label="Close"></button>
</div>

<div id="aboutSectionGallery2Wrapper">
    <div id="aboutSectionGallery2" class="carousel slide" data-bs-ride="false" data-bs-interval="false"
        style="display: none;  position: fixed;  top: 0;  height: 100%;  width: 100%;">
        <div class="carousel-indicators">
            <button id="indAboutSectionGallery2-1" type="button" data-bs-target="#aboutSectionGallery2"
                data-bs-slide-to="0" aria-label="Slide 1"></button>
            <button id="indAboutSectionGallery2-2" type="button" data-bs-target="#aboutSectionGallery2"
                data-bs-slide-to="1" aria-label="Slide 2"></button>
            <!-- <button id="indAboutSectionGallery1-3" type="button" data-bs-target="#aboutSectionGallery1" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
        </div>
        <div class="carousel-inner h-100">
            <div id="imgAboutSectionGallery2-1" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-cucina2.webp"
                            class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"
                            alt="..." />
                    </div>
                </div>
            </div>
            <div id="imgAboutSectionGallery2-2" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-cucina1.webp"
                            class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"
                            alt="..." />
                    </div>
                </div>
            </div>
            <!-- <div id="imgAboutSectionGallery-3" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img  data-src="<?php echo get_template_directory_uri(); ?>/img/about-section-slide-3.jpeg" class="img-fluid lazyload" loading="lazy"  style="max-width: 90vw; max-height: 90vh"  alt="..."/>
                    </div>
                </div>
            </div> -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#aboutSectionGallery2" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#aboutSectionGallery2" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Кнопка закрытия галереи -->
    <button type="button" onClick="aboutSectionGallery2Close();" class="btn-close btn-close-white"
        style="position: fixed; top: 25px; right: 25px; z-index: 99999" aria-label="Close"></button>
</div>
<!-- /ABOUT SECTION GALLERY -->


<!-- /ABOUT SECTION GALLERY SCRIPT -->
<script>
    /* Gallery 1 opening function */
    function aboutSectionGallery1On(gal, img) {
        var gallery = gal; // Получаем ID галереи
        var image = img; // Получаем ID картинки

        // Открываем обертку галереи
        document.getElementById("aboutSectionGallery1Wrapper").style.display = "block";

        // Открываем галерею
        if (gallery == "aboutSectionGallery1") {
            document.getElementById("aboutSectionGallery1").style.display = "block";
        }

        /* Открываем изображения и индикаторы галереи */
        if (image == "imgAboutSectionGallery1-1") {
            document.getElementById("imgAboutSectionGallery1-1").classList.add("active");
            document.getElementById("indAboutSectionGallery1-1").classList.add("active");
        }
        if (image == "imgAboutSectionGallery1-2") {
            document.getElementById("imgAboutSectionGallery1-2").classList.add("active");
            document.getElementById("indAboutSectionGallery1-2").classList.add("active");
        }
        //   if ( image == "imgAboutSectionGallery-3" ) {
        // 	  document.getElementById("imgAboutSectionGallery1-3").classList.add("active");
        // 	  document.getElementById("indAboutSectionGallery1-3").classList.add("active");
        //   }

    } /* Ending gallery 1 opening function */


    // Кнопка закрытия галереи 1
    function aboutSectionGallery1Close() {
        // Закрываем обертку галереи
        document.getElementById("aboutSectionGallery1Wrapper").style.display = "none";

        // Закрываем галерею
        document.getElementById("aboutSectionGallery1").style.display = "none";

        /* Закрываем тзображения и индикаторы галереи */
        document.getElementById("imgAboutSectionGallery1-1").classList.remove("active");
        document.getElementById("indAboutSectionGallery1-1").classList.remove("active");
        document.getElementById("imgAboutSectionGallery1-2").classList.remove("active");
        document.getElementById("indAboutSectionGallery1-2").classList.remove("active");
        //   document.getElementById("imgAboutSectionGallery1-3").classList.remove("active");
        //   document.getElementById("indAboutSectionGallery1-3").classList.remove("active");
    }
</script>

<script>
    /* Gallery 2 opening function */
    function aboutSectionGallery2On(gal, img) {
        var gallery = gal; // Получаем ID галереи
        var image = img; // Получаем ID картинки

        // Открываем обертку галереи
        document.getElementById("aboutSectionGallery2Wrapper").style.display = "block";

        // Открываем галерею
        if (gallery == "aboutSectionGallery2") {
            document.getElementById("aboutSectionGallery2").style.display = "block";
        }

        /* Открываем изображения и индикаторы галереи */
        if (image == "imgAboutSectionGallery2-1") {
            document.getElementById("imgAboutSectionGallery2-1").classList.add("active");
            document.getElementById("indAboutSectionGallery2-1").classList.add("active");
        }
        if (image == "imgAboutSectionGallery2-2") {
            document.getElementById("imgAboutSectionGallery2-2").classList.add("active");
            document.getElementById("indAboutSectionGallery2-2").classList.add("active");
        }
        //   if ( image == "imgAboutSectionGallery2-3" ) {
        // 	  document.getElementById("imgAboutSectionGallery2-3").classList.add("active");
        // 	  document.getElementById("indAboutSectionGallery2-3").classList.add("active");
        //   }

    } /* Ending gallery 1 opening function */


    // Кнопка закрытия галереи 1
    function aboutSectionGallery2Close() {
        // Закрываем обертку галереи
        document.getElementById("aboutSectionGallery2Wrapper").style.display = "none";

        // Закрываем галерею
        document.getElementById("aboutSectionGallery2").style.display = "none";

        /* Закрываем тзображения и индикаторы галереи */
        document.getElementById("imgAboutSectionGallery2-1").classList.remove("active");
        document.getElementById("indAboutSectionGallery2-1").classList.remove("active");
        document.getElementById("imgAboutSectionGallery2-2").classList.remove("active");
        document.getElementById("indAboutSectionGallery2-2").classList.remove("active");
        //   document.getElementById("imgAboutSectionGallery2-3").classList.remove("active");
        //   document.getElementById("indAboutSectionGallery2-3").classList.remove("active");
    }
</script>
<!-- /ABOUT SECTION GALLERY SCRIPT -->


<!-- PORTFOLIO SECTION --
<section class="portfolio-cucina bg-white">
    <div class="container">
        <div class="row">
            <div class="col text-md-center">
                <h2>Наши последние работы кухонь CUCINA</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-dec.svg" class="" style="margin-bottom: 60px;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4" style="margin-bottom: 40px;">
                <a href="">
                    <div class="approximation project-container-2 rounded">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-cucina1.webp" class="" alt="">
                        <div class="card-wrapper">
                            <div class="position-absolute">Кухня #001</div>
                        </div>	
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="margin-bottom: 40px;">
                <a href="">
                    <div class="approximation project-container-2 rounded">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-cucina2.webp" class="" alt="">
                        <div class="card-wrapper">
                            <div class="position-absolute">Кухня #002</div>
                        </div>	
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="margin-bottom: 40px;">
                <a href="">
                    <div class="approximation project-container-2 rounded">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-cucina3.webp" class="" alt="">
                        <div class="card-wrapper">
                            <div class="position-absolute">Кухня #003</div>
                        </div>	
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="margin-bottom: 40px;">
                <a href="">
                    <div class="approximation project-container-2 rounded">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-cucina4.webp" class="" alt="">
                        <div class="card-wrapper">
                            <div class="position-absolute">Кухня #004</div>
                        </div>	
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="margin-bottom: 40px;">
                <a href="">
                    <div class="approximation project-container-2 rounded">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-cucina5.webp" class="" alt="">
                        <div class="card-wrapper">
                            <div class="position-absolute">Кухня #005</div>
                        </div>	
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="margin-bottom: 40px;">
                <a href="">
                    <div class="approximation project-container-2 rounded">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-cucina6.webp" class="" alt="">
                        <div class="card-wrapper">
                            <div class="position-absolute">Кухня #006</div>
                        </div>	
                    </div>
                </a>
            </div>
        </div>
        <div class="text-md-center">
            <a href="https://мозаика62.рф/portfolio-cat/02-кухни-cucina" class="btn btn-lg btn-corporate-color-1">Смотреть все</a>
        </div>
    </div>
</section-->


<section class="portfolio-cucina bg-white">
    <div class="container">
        <div class="row">
            <div class="col text-md-center">
                <h2>Наши последние работы кухонь CUCINA</h2>
                <svg style="margin-bottom: 60px;" width="62" height="14" viewBox="0 0 62 14" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                    <rect x="48" width="14" height="14" rx="3" />
                    <rect x="24" width="14" height="14" rx="3" />
                    <rect width="14" height="14" rx="3" />
                </svg>
                <div class="row text-start justify-content-center">
                    <?php
                    $args = [
                        'post_type' => 'portfolio',
                        'posts_per_page' => 6, // Получаем только 3 последние записи
                        //'numberposts' 	 => 999,
                        'portfolio-cat' => '02-кухни-cucina'
                    ];
                    $query = new WP_Query($args);
                    while ($query->have_posts()):
                        $query->the_post(); ?>
                        <div class="col-md-4" style="margin-bottom: 40px;">
                            <a onClick="galleryOn('gallery-<?php echo $post->ID; ?>','img-<?php echo $post->ID; ?>-0');">
                                <div class="approximation project-container-2 rounded">
                                    <img src="<?php echo get_post_meta($post->ID, '_img-1')[0]; ?>" class=" rounded"
                                        alt="">
                                    <div class="card-wrapper">
                                        <div class="position-absolute"><?php the_title(); ?></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="row">
                    <div class="col text-center d-none d-md-block">
                        <a href="/furniture/portfolio-cat/02-кухни-cucina"
                            class="btn btn-lg btn-corporate-color-1">Смотреть все кухни Cucina</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery wrapper-->
<div id="galleryWrapper"
    style="background: rgba(0,0,0,0.85); display: none; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 9999;">
    <?php
    // параметры по умолчанию
    $posts = get_posts(array(
        'numberposts' => 999,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'portfolio',
    ));

    foreach ($posts as $post) {
        setup_postdata($post); ?>

        <div id="gallery-<?php echo $post->ID; ?>" class="carousel slide" data-bs-ride="carousel"
            style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
            <div class="carousel-indicators">
                <?php
                $count2 = 0;
                for ($i = 1; $i <= 9; $i++) {
                    if (get_post_meta($post->ID, '_img-' . $i)) {
                        if ($count2 == 0) { ?>

                            <button id="ind-<?php echo $post->ID; ?>-<?php echo $count2; ?>" type="button"
                                data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $count2; ?>"
                                aria-label="Slide 3"></button>

                        <?php $count2 = $count2 + 1;
                        } else { ?>

                            <button id="ind-<?php echo $post->ID; ?>-<?php echo $count2; ?>" type="button"
                                data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $count2; ?>"
                                aria-label="Slide 3"></button>

                <?php $count2 = $count2 + 1;
                        }
                    }
                }
                ?>
            </div>
            <div class="carousel-inner h-100">
                <?php
                $count2 = 0;
                for ($i = 1; $i <= 9; $i++) {
                    if (get_post_meta($post->ID, '_img-' . $i)) { ?>
                        <div id="img-<?php echo $post->ID; ?>-<?php echo $count2; ?>"
                            class="carousel-item h-100 <?php // if ( $i == 1 ) echo ' active'; ?>" data-bs-interval="999999999">
                            <div class="row align-items-center h-100">
                                <div class="col text-center">
                                    <img src="<?php echo get_post_meta($post->ID, '_img-' . $i)[0]; ?>" class="img-fluid" style="max-width: 90vw; max-height: 90vh;" alt="...">
                                </div>
                            </div>
                        </div>
                <?php $count2 = $count2 + 1;
                    }
                }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    <?php }
    wp_reset_postdata();
    ?>

    <!-- Кнопка закрытия галереи -->
    <button type="button" onClick="closeGallery();" class="btn-close btn-close-white"
        style="position: fixed; top: 25px; right: 25px; z-index: 99999;" aria-label="Close"></button>
</div>


<script>
    /* Функция открытия галереи */
    function galleryOn(gal, img) {
        var gallery = gal; // Получаем ID галереи
        var image = img; // Получаем ID картинки
        // Открываем обертку галереи
        document.getElementById('galleryWrapper').style.display = 'block';

        // Проверяем какие данные передаются для открытия галереи и картинки
        //alert(gallery+' '+image); 


        <?php // Открываем галерею
        $posts = get_posts(array(
            'numberposts' => 999,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'portfolio',
            //'post__not_in' => array( 42 ) // Выводим все категории портфолио кроме Разное
        ));

        foreach ($posts as $post) {
            setup_postdata($post);

            echo 'if ( gallery == "gallery-' . $post->ID . '" ) { document.getElementById("gallery-' . $post->ID . '").style.display = "block"; }';
        }
        wp_reset_postdata();
        ?>


        <?php // Открываем изображения
        $posts = get_posts(array(
            'numberposts' => 999,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'portfolio',
            //'post__not_in' => array( 42 ) // Выводим все категории портфолио кроме Разное
        ));

        foreach ($posts as $post) {
            setup_postdata($post);
            $count2 = 0;
            for ($i = 1; $i <= 9; $i++) {
                echo 'if ( image == "img-' . $post->ID . '-' . $count2 . '" ) { document.getElementById("img-' . $post->ID . '-' . $count2 . '").classList.add("active"); document.getElementById("ind-' . $post->ID . '-' . $count2 . '").classList.add("active"); } ';
                $count2 = $count2 + 1;
            }
        }
        wp_reset_postdata();
        ?>
    }


    // Кнопка закрытия галереи
    function closeGallery() {
        // Закрываем обертку галереи
        document.getElementById('galleryWrapper').style.display = 'none';

        <?php // Открываем галерею
        $posts = get_posts(array(
            'numberposts' => 999,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'portfolio',
            //'post__not_in' => array( 42 ) // Выводим все категории портфолио кроме Разное
        ));

        foreach ($posts as $post) {
            setup_postdata($post);

            echo 'document.getElementById("gallery-' . $post->ID . '").style.display = "none";';
        }
        wp_reset_postdata();
        ?>

        <?php // Закрываем изображения
        $posts = get_posts(array(
            'numberposts' => 999,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'portfolio',
        ));

        foreach ($posts as $post) {
            setup_postdata($post);
            $count2 = 0;
            for ($i = 1; $i <= 9; $i++) {
                echo 'document.getElementById("img-' . $post->ID . '-' . $count2 . '").classList.remove("active"); document.getElementById("ind-' . $post->ID . '-' . $count2 . '").classList.remove("active");';

                $count2 = $count2 + 1;
            }
        }
        wp_reset_postdata(); ?>

    }
</script>


<?php include 'footer-1.php'; ?>