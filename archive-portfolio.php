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
                        </svg>Пн-Сб: с
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
                </div>

            </div>
        </nav>
        <!-- /Header nav bottom -->
    </header>
    <div class="container">
        <div class="row align-items-center home-section-height">
            <div class="col-xl-10 col-xxl-9">
                <h1 class="home-title" style="color: #fff;">Наши работы</h1>
            </div>
        </div>
    </div>
</section>
<!-- /Home section -->



<!-- Portfolio -->
<section class="archive-portfolio-section-2 pt-4 bg-white" style="padding-bottom: 145px;">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumbs">
                    <nav class="woocommerce-breadcrumb" itemprop="breadcrumb">
                        <a href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" fill="currentColor" viewBox="0 0 24 24" class="svg-icon">
                                <path
                                    d="m21.71 11.29-9-9a1 1 0 0 0-1.42 0l-9 9a1 1 0 0 0 1.42 1.42l.29-.3v7.89A1.77 1.77 0 0 0 5.83 22H8.5a1 1 0 0 0 1-1v-4.9a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1V21a1 1 0 0 0 1 1h2.67A1.77 1.77 0 0 0 20 20.3v-7.89l.29.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42" />
                            </svg>
                        </a> / <a
                            href="#">Наши работы</a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col text-md-center">
                        <h2>Наши работы</h2>
                        <svg width="62" height="14" viewBox="0 0 62 14" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon mb-5">
                            <rect x="48" width="14" height="14" rx="3" />
                            <rect x="24" width="14" height="14" rx="3" />
                            <rect width="14" height="14" rx="3" />
                        </svg>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center mb-4 mb-lg-5">
                        <div class="nav-scroller mb-0"
                            style="text-transform: uppercase; font-family: 'HelveticaNeueCyr-Light'; font-weight: bold;">
                            <ul class="nav justify-content-lg-center d-flex m-auto align-items-center tablist" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="/portfolio/">Все</a>
                                </li>
                                <?php
                                $args = [
                                    'taxonomy' => ['portfolio-cat'],
                                    'orderby' => 'slug',
                                    'order' => 'ASC',
                                ];

                                $terms = get_terms($args);

                                foreach ($terms as $term) { ?>
                                    <li class="nav-item">
                                        <span class="nav-link px-0">
                                            <svg width="6" height="6" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                                <rect width="6" height="6" rx="2" />
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="<?php echo get_term_link($term->term_id); ?>"><?php echo $term->name; ?></a>
                                    </li>
                                <?php }
                                ?>
                            </ul>
                        </div>
                        <div class="d-lg-none text-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="40" fill="currentColor" viewBox="0 0 34 40" class="svg-icon" style="opacity: 1">
                                <path
                                    d="M30.024 16c-.638 0-1.262.191-1.79.55a3.183 3.183 0 0 0-4.8-1.6 3.158 3.158 0 0 0-4.61-1.705V3.2a3.2 3.2 0 1 0-6.4 0v22.357a.2.2 0 0 1-.13.195.194.194 0 0 1-.231-.047l-2.55-2.548a5.62 5.62 0 0 0-5.788-1.367A2.37 2.37 0 0 0 2.5 25.357l5.259 7.886a26 26 0 0 0 2.754 3.474A10.79 10.79 0 0 0 18.34 40h4a10.925 10.925 0 0 0 10.192-6.901c.462-1.152.699-2.382.697-3.624V19.2a3.2 3.2 0 0 0-3.205-3.2m1.6 13.475a8.1 8.1 0 0 1-.582 3.029 9.33 9.33 0 0 1-8.707 5.896h-4a9.2 9.2 0 0 1-6.667-2.783 24.5 24.5 0 0 1-2.583-3.26L3.831 24.47a.774.774 0 0 1 .394-1.161 4.04 4.04 0 0 1 4.16.979l2.55 2.549a1.81 1.81 0 0 0 3.093-1.28V3.2a1.6 1.6 0 0 1 3.2 0v14.4a.8.8 0 0 0 1.6 0V16a1.6 1.6 0 0 1 3.2 0v2.4a.8.8 0 0 0 1.6 0v-.8a1.6 1.6 0 1 1 3.2 0V20a.8.8 0 0 0 1.6 0v-.8a1.6 1.6 0 0 1 3.2 0z" />
                                <path
                                    d="M22.101 6.4h6.069l-1.835 1.833a.801.801 0 0 0 1.133 1.133l3.2-3.2a.8.8 0 0 0 0-1.133l-3.2-3.2a.8.8 0 1 0-1.133 1.133L28.17 4.8h-6.069a.8.8 0 1 0 0 1.6M4.501 9.6a.8.8 0 0 0 .567-1.367L3.233 6.4H9.3a.8.8 0 1 0 0-1.6H3.233l1.835-1.834a.801.801 0 1 0-1.133-1.133l-3.2 3.2a.8.8 0 0 0 0 1.133l3.2 3.2a.8.8 0 0 0 .566.234" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $args = [
                        'post_type' => 'portfolio',
                        'numberposts' => 999,
                        'posts_per_page' => 999
                    ];

                    $query = new WP_Query($args);
                    $count = 1;
                    while ($query->have_posts()):
                        $query->the_post(); ?>
                        <div class="col-md-6">
                            <div id="carouselExampleIndicators<?php echo $post->ID; ?>" class="carousel slide mb-4"
                                data-bs-ride="carousel" data-bs-interval="999999999">
                                <div class="carousel-indicators" style="bottom: 5%;">
                                    <?php
                                    $count2 = 0;
                                    for ($i = 1; $i <= 9; $i++) {
                                        if (get_post_meta($post->ID, '_img-' . $i)) { ?>
                                            <button type="button"
                                                data-bs-target="#carouselExampleIndicators<?php echo $post->ID; ?>"
                                                data-bs-slide-to="<?php echo $i - 1; ?>" <?php if ($i == 1)
                                                                                                echo ' class="active"'; ?>
                                                aria-current="true" aria-label="Slide <?php echo $i; ?>"></button>
                                    <?php $count2 = $count2 + 1;
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="carousel-inner rounded">
                                    <?php
                                    $count2 = 0;
                                    for ($i = 1; $i <= 9; $i++) {
                                        if (get_post_meta($post->ID, '_img-' . $i)) { ?>
                                            <div class="carousel-item <?php if ($i == 1)
                                                                            echo ' active'; ?>"
                                                data-bs-interval="999999999">
                                                <a
                                                    onClick="galleryOn('gallery-<?php echo $post->ID; ?>','img-<?php echo $post->ID; ?>-<?php echo $count2; ?>');">
                                                    <div class="single-product-img approximation">
                                                        <img src="<?php echo get_post_meta($post->ID, '_img-' . $i)[0]; ?>"
                                                            class="shadow rounded" alt="..." loading="lazy">
                                                        <div class="magnifier"></div>
                                                    </div>
                                                </a>
                                            </div>
                                    <?php $count2 = $count2 + 1;
                                        }
                                    }
                                    ?>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators<?php echo $post->ID; ?>"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators<?php echo $post->ID; ?>"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                    <?php $count = $count + 1;
                    endwhile;

                    wp_reset_postdata();

                    ?>
                </div>
            </div>
        </div><!-- .row -->
    </div><!-- .container -->
</section>
<!-- /Portfolio -->

<!-- Gallery wrapper-->
<div id="galleryWrapper"
    style="background: rgba(0,0,0,0.85); display: none; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 9999;">


    <?php
    // параметры по умолчанию
    $posts = get_posts(array(
        'numberposts' => 999,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'portfolio'
    ));

    foreach ($posts as $post) {
        setup_postdata($post); ?>

        <div id="gallery-<?php echo $post->ID; ?>" class="carousel slide" data-bs-ride="carousel"
            style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
            <div class="carousel-indicators">
                <?php

                /*
                $images = get_post_gallery_images();
                $count2 = 0;
                foreach ( $images as $image ) {


                    if ( $count2 == 0 ) { ?>

                        <button id="ind-<?php echo $post->ID; ?>-<?php echo $count2; ?>" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $count2; ?>" aria-label="Slide 3"></button>

                    <?php $count2 = $count2 + 1; } else { ?>

                        <button id="ind-<?php echo $post->ID; ?>-<?php echo $count2; ?>" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $count2; ?>" aria-label="Slide 3"></button>

                    <?php $count2 = $count2 + 1; }
                }*/

                $count3 = 0;
                for ($i = 1; $i <= 9; $i++) {
                    if (get_post_meta($post->ID, '_img-' . $i)) {
                        if ($count3 == 0) { ?>

                            <button id="ind-<?php echo $post->ID; ?>-<?php echo $count3; ?>" type="button"
                                data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $count3; ?>"
                                aria-label="Slide 3"></button>

                        <?php $count3 = $count3 + 1;
                        } else { ?>

                            <button id="ind-<?php echo $post->ID; ?>-<?php echo $count3; ?>" type="button"
                                data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $count3; ?>"
                                aria-label="Slide 3"></button>

                <?php $count3 = $count3 + 1;
                        }
                    }
                }
                ?>
            </div>
            <div class="carousel-inner h-100">
                <?php

                /*
                $images = get_post_gallery_images();
                $count2 = 0;
                foreach ( $images as $image ) { ?>
                    <div id="img-<?php echo $post->ID; ?>-<?php echo $count2; ?>" class="carousel-item h-100">
                        <div class="row align-items-center h-100">
                            <div class="col text-center">
                                <img src="<?php echo $image; ?>" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
                            </div>
                        </div>
                    </div>

                <?php  $count2 = $count2 + 1; } */


                $count4 = 0;
                for ($i = 1; $i <= 9; $i++) {
                    if (get_post_meta($post->ID, '_img-' . $i)) { ?>
                        <div id="img-<?php echo $post->ID; ?>-<?php echo $count4; ?>"
                            class="carousel-item h-100 <?php // if ( $i == 1 ) echo ' active'; 
                                                        ?>" data-bs-interval="999999999">
                            <div class="row align-items-center h-100">
                                <div class="col text-center">
                                    <img src="<?php echo get_post_meta($post->ID, '_img-' . $i)[0]; ?>" class="img-fluid"
                                        style="max-width: 90vw; max-height: 90vh;" alt="...">
                                </div>
                            </div>
                        </div>
                <?php $count4 = $count4 + 1;
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
            'post_type' => 'portfolio'
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
            'post_type' => 'portfolio'
        ));

        foreach ($posts as $post) {
            setup_postdata($post);
            $count5 = 0;
            for ($i = 1; $i <= 9; $i++) {
                echo 'if ( image == "img-' . $post->ID . '-' . $count5 . '" ) { document.getElementById("img-' . $post->ID . '-' . $count5 . '").classList.add("active"); document.getElementById("ind-' . $post->ID . '-' . $count5 . '").classList.add("active"); } ';
                $count5 = $count5 + 1;
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
            'post_type' => 'portfolio'
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
            'post_type' => 'portfolio'
        ));

        /*
        foreach( $posts as $post ) { setup_postdata($post);
            $images = get_post_gallery_images();
            $count2 = 0;
            foreach ( $images as $image ) {

                echo 'document.getElementById("img-'.$post->ID.'-'.$count2.'").classList.remove("active"); document.getElementById("ind-'.$post->ID.'-'.$count2.'").classList.remove("active");';

                $count2 = $count2 + 1;
            }
        } wp_reset_postdata(); */


        foreach ($posts as $post) {
            setup_postdata($post);
            $count6 = 0;
            for ($i = 1; $i <= 9; $i++) {
                echo 'document.getElementById("img-' . $post->ID . '-' . $count6 . '").classList.remove("active"); document.getElementById("ind-' . $post->ID . '-' . $count6 . '").classList.remove("active");';

                $count6 = $count6 + 1;
            }
        }
        wp_reset_postdata(); ?>

    }
</script>



<?php include 'footer-1.php'; ?>