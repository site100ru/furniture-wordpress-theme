<?php

/**
 * Template Name: Контакты
 * Template Post Type: page
 **/

include 'header.php';

?>


<div class="site-wrap min-home" style="height: auto; z-index: auto;">
    <!-- Header -->
    <div class="site-navbar-wrap">
        <div class="parallax-home-section" style="min-height: 640px;"></div>
        <!-- <div class="overlay"></div> -->
        <div id="sp-home" class="scroll-points"></div>
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
                        <a class="top-menu-tel pt-1 pb-0" style="font-size: 14px;" href="tel:89511014610">
                            8 (800) 880-80-88</a>
                        <div style="font-size: 10px; font-family: Gilroy-Light; text-transform: none;">
                            <svg width="12" height="12" viewBox="0 0 24 24" style=" position: relative; top: -1px;" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon me-1">
                                <path
                                    d="M21.75 12a9.75 9.75 0 1 1-19.5 0 9.75 9.75 0 0 1 19.5 0M0 12a12 12 0 1 0 24 0 12 12 0 0 0-24 0m10.875-6.375V12c0 .375.188.727.502.938l4.5 3a1.12 1.12 0 0 0 1.56-.315 1.12 1.12 0 0 0-.314-1.56L13.125 11.4V5.625c0-.623-.502-1.125-1.125-1.125s-1.125.502-1.125 1.125" />
                            </svg>
                            Пн-Сб: с
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
        </header><!-- site-navbar -->
        <div class="container">
            <div class="row align-items-center home-section-height">
                <div class="col-xl-10 col-xxl-9">
                    <h1 class="home-title text-light">Контакты</h1>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="archive-products-section site-section bg-white"
    style="padding-bottom: 60px; padding-top: 0; position: relative;">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumbs pt-4">
                    <nav class="woocommerce-breadcrumb" itemprop="breadcrumb">
                        <a href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" fill="currentColor" viewBox="0 0 24 24" class="svg-icon">
                                <path
                                    d="m21.71 11.29-9-9a1 1 0 0 0-1.42 0l-9 9a1 1 0 0 0 1.42 1.42l.29-.3v7.89A1.77 1.77 0 0 0 5.83 22H8.5a1 1 0 0 0 1-1v-4.9a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1V21a1 1 0 0 0 1 1h2.67A1.77 1.77 0 0 0 20 20.3v-7.89l.29.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42" />
                            </svg>
                        </a> /
                        Контакты
                    </nav>
                </div>
            </div>
        </div>
        <div class="container" style="padding: 0;">
            <div class="row">
                <div class="col text-dark text-md-center">
                    <h2 class="mb-3">Контакты</h2>
                    <svg width="62" height="14" viewBox="0 0 62 14" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon mb-5 mx-md-auto d-block">
                        <rect x="48" width="14" height="14" rx="3" />
                        <rect x="24" width="14" height="14" rx="3" />
                        <rect width="14" height="14" rx="3" />
                    </svg>
                    <div class="container" style="margin-top: 60px;">
                        <div class="row section-contacts contacts">
                            <!-- 1 блок -->
                            <div class="col-12 col-md-6 col-xl-3 col-xxl-4 mb-0 mb-md-4">
                                <div class="d-flex align-items-center mb-4 pb-md-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" style="flex-shrink: 0;" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon me-4">
                                        <path
                                            d="M13.11 23.46C15.517 20.444 21 13.13 21 9.024 21 4.042 16.969 0 12 0S3 4.042 3 9.023c0 4.108 5.484 11.42 7.89 14.438.576.719 1.644.719 2.22 0M12 6.017c.796 0 1.559.316 2.121.88a3.01 3.01 0 0 1 0 4.254 2.996 2.996 0 0 1-4.242 0 3.01 3.01 0 0 1 0-4.253A3 3 0 0 1 12 6.016" />
                                    </svg>
                                    <p class="mb-0 text-min-text">
                                        <span>гор. Рязань, ул. Чапаева, д. 56, Мебельный центр "Базар" (ост.
                                            "Центральный рынок").</span>
                                    </p>
                                </div>

                                <div class="d-flex align-items-center mb-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon me-4">
                                        <path
                                            d="M21.75 12a9.75 9.75 0 1 1-19.5 0 9.75 9.75 0 0 1 19.5 0M0 12a12 12 0 1 0 24 0 12 12 0 0 0-24 0m10.875-6.375V12c0 .375.188.727.502.938l4.5 3a1.12 1.12 0 0 0 1.56-.315 1.12 1.12 0 0 0-.314-1.56L13.125 11.4V5.625c0-.623-.502-1.125-1.125-1.125s-1.125.502-1.125 1.125" />
                                    </svg>
                                    <p class="mb-0 text-min-text">Пн-Сб 10:00-19:00, <br /> Вс 10:00-17:00</p>
                                </div>
                            </div>

                            <!-- 2 блок -->
                            <div class="col-12 col-md-6 col-xl-3 col-xxl-2 mb-0 mb-md-4">
                                <div class="d-flex align-items-center mb-4 pb-md-3 flex-wrap">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon me-3">
                                        <path
                                            d="M4 3c0-1.655 1.305-3 2.91-3h10.18C18.696 0 20 1.345 20 3v18c0 1.655-1.305 3-2.91 3H6.91C5.304 24 4 22.655 4 21zm5.818 18c0 .413.328.75.728.75h2.909c.4 0 .727-.337.727-.75a.74.74 0 0 0-.728-.75h-2.908c-.4 0-.728.337-.728.75m7.273-18H6.909v15h10.182z" />
                                    </svg>
                                    <a href="tel:+79511014610" class="text-decoration-none">+7 (951) 101-46-10</a>
                                </div>

                                <div class="d-flex align-items-center mb-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon me-3">
                                        <path
                                            d="M3.71 1.991q.522-.066.89.301a780 780 0 0 1 3.116 4.786q.153.598-.116 1.157a67 67 0 0 1-1.766 2.844 8.6 8.6 0 0 0 1.005 1.896 17.3 17.3 0 0 0 3.936 3.988q.989.713 2.135 1.145 1.278-.83 2.574-1.63.39-.231.83-.324.22-.023.44 0 .107.037.207.093a487 487 0 0 1 4.756 3.121q.246.281.254.66a1.7 1.7 0 0 1-.243.785 18.5 18.5 0 0 1-2.181 2.486 3.8 3.8 0 0 1-.924.624 6 6 0 0 1-.461.058 9.2 9.2 0 0 1-3.21-.659 19.2 19.2 0 0 1-4.316-2.45 38.3 38.3 0 0 1-7.907-8.036 19.7 19.7 0 0 1-2.054-3.7A9.3 9.3 0 0 1-.03 5.772q-.006-.343.173-.636.353-.527.785-.994Q2.024 2.987 3.34 2.119q.186-.075.37-.128" />
                                        <path
                                            d="M15.334.99q.068.856.045 1.737 2.232-.017 4.462.035 2.055.454 2.688 2.535.062.252.09.51.015 3.09.01 6.183H20.4q.005-2.895-.012-5.79-.06-.883-.88-1.123a127 127 0 0 0-4.128-.034q.01.869-.022 1.736a514 514 0 0 1-3.726-2.894z" />
                                    </svg>
                                    <button class="nav-link d-flex align-items-center gap-3 gap-md-2 gap-xl-3 lh-1"
                                        data-bs-toggle="modal" data-bs-target="#callbackModal">
                                        Обратный звонок
                                    </button>
                                </div>
                            </div>

                            <!-- 3 блок -->
                            <div class="col-12 col-md-6 col-xl-3 col-xxl-2 mb-0 mb-md-4">
                                <div class="d-flex align-items-center mb-4 pb-md-3 flex-wrap">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon me-3">
                                        <path
                                            d="M4.483 1.107c-.375.011-.704.21-.98.485l-.46.459 4.985 5.076.724-.724a1.13 1.13 0 0 0 0-1.592l-3.22-3.22c-.312-.311-.674-.496-1.049-.484M2.511 2.581l-.528.528c-.864.864-.858 1.994-.858 2.516 0 2.16.863 5.893 6.11 11.139 5.245 5.246 8.98 6.11 11.139 6.11.521 0 1.652.006 2.516-.859l.478-.477-4.985-5.076-.523.524c-.31.31-.539.347-.761.32-.223-.025-.452-.154-.62-.284-.917-.71-2.401-1.726-4.089-3.413-1.687-1.688-2.703-3.173-3.413-4.09-.13-.168-.259-.395-.285-.617s.014-.454.324-.764l.481-.481zm15.88 12.339c-.289 0-.577.109-.795.327l-.683.684 4.986 5.076.508-.508c.276-.276.473-.608.484-.983s-.172-.737-.484-1.05l-3.22-3.219a1.12 1.12 0 0 0-.796-.327" />
                                    </svg>

                                    <a href="tel:+74912527890" class="text-decoration-none">8 (4912) 52-78-90</a>
                                </div>

                                <div class="d-flex align-items-center mb-4 flex-wrap">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon me-3">
                                        <path
                                            d="M4.483 1.107c-.375.011-.704.21-.98.485l-.46.459 4.985 5.076.724-.724a1.13 1.13 0 0 0 0-1.592l-3.22-3.22c-.312-.311-.674-.496-1.049-.484M2.511 2.581l-.528.528c-.864.864-.858 1.994-.858 2.516 0 2.16.863 5.893 6.11 11.139 5.245 5.246 8.98 6.11 11.139 6.11.521 0 1.652.006 2.516-.859l.478-.477-4.985-5.076-.523.524c-.31.31-.539.347-.761.32-.223-.025-.452-.154-.62-.284-.917-.71-2.401-1.726-4.089-3.413-1.687-1.688-2.703-3.173-3.413-4.09-.13-.168-.259-.395-.285-.617s.014-.454.324-.764l.481-.481zm15.88 12.339c-.289 0-.577.109-.795.327l-.683.684 4.986 5.076.508-.508c.276-.276.473-.608.484-.983s-.172-.737-.484-1.05l-3.22-3.219a1.12 1.12 0 0 0-.796-.327" />
                                    </svg>
                                    <a href="tel:+74912777098" class="text-decoration-none">8 (4912) 77-70-98</a>
                                </div>
                            </div>

                            <!-- Третий блок -->
                            <div class="col-12 col-md-12 col-xl-3 col-xxl-3 mb-0 mb-md-4">
                                <div class="d-flex align-items-center mb-4 pb-md-3 flex-wrap">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon me-3 ">
                                        <path
                                            d="M12 3c-4.969 0-9 4.031-9 9s4.031 9 9 9c.83 0 1.5.67 1.5 1.5S12.83 24 12 24C5.372 24 0 18.628 0 12S5.372 0 12 0s12 5.372 12 12v1.5a4.501 4.501 0 0 1-7.931 2.91A6 6 0 1 1 12 6c1.308 0 2.517.417 3.502 1.13A1.498 1.498 0 0 1 18 8.25v5.25c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5V12c0-4.969-4.031-9-9-9m3 9a3 3 0 1 0-6 0 3 3 0 0 0 6 0" />
                                    </svg>
                                    <a href="mailto:zakaz@mglight.ru" class="text-decoration-none">zakaz@mglight.ru
                                    </a>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-md-center" style="margin-top: 60px;">
                        <!--
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.svg" alt="whatsapp" style="padding: 10px;">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.svg" alt="telegram" style="padding: 10px;">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/instagram-ico.svg" alt="instagram" style="padding: 10px;">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk-ico.svg" alt="vk" style="padding: 10px;">
                        -->
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link ico-button px-2"
                                    href="https://wa.me/79511014610?web=1&amp;app_absent=1">
                                    <img
                                        src="https://xn--62-6kca7ahoms.xn--p1ai/wp-content/themes/mozaika/img/ico/whatsapp-ico.svg">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ico-button px-2" href="https://t.me/+79511014610">
                                    <img
                                        src="https://xn--62-6kca7ahoms.xn--p1ai/wp-content/themes/mozaika/img/ico/telegram-ico.svg">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ico-button px-2" href="https://www.instagram.com/mozaika.kitchen62">
                                    <img
                                        src="https://xn--62-6kca7ahoms.xn--p1ai/wp-content/themes/mozaika/img/ico/instagram-ico.svg">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ico-button px-2" href="https://vk.com/mozaika.kitchen62">
                                    <img
                                        src="https://xn--62-6kca7ahoms.xn--p1ai/wp-content/themes/mozaika/img/ico/vk-ico.svg">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Yandex Map -->
<section class="archive-products-section site-section bg-white"
    style="padding-bottom: 60px; z-index: 10; position: relative;">
    <div class="container">
        <div class="row">
            <section id="map" style="height: 650px; border-radius: 10px;"></section>
        </div>
    </div>
</section>

<!-- API Yandex map -->
<script src="https://api-maps.yandex.ru/2.1/?apikey=67fa0c4f-ad3f-4f9e-bd3f-729ca47910bf&lang=ru_RU"
    type="text/javascript"></script>

<script type="text/javascript">
    // Функция ymaps.ready() будет вызвана, когда
    // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
    ymaps.ready(init);

    function init() {
        // Создание карты.
        var myMap = new ymaps.Map("map", {
            // Координаты центра карты.
            // Порядок по умолчанию: «широта, долгота».
            // Чтобы не определять координаты центра карты вручную,
            // воспользуйтесь инструментом Определение координат.
            center: [54.624353, 39.734443],
            // Уровень масштабирования. Допустимые значения:
            // от 0 (весь мир) до 19.
            zoom: 17
        });

        var glyphIcon1 = new ymaps.Placemark([54.624363, 39.734543], {}, {
            iconLayout: 'default#image',
            iconImageHref: '<?php echo get_template_directory_uri(); ?>/img/ico/placemark0.png',
            iconImageSize: [270, 270],
            iconImageOffset: [-150, -230]
        });

        // Размещение геообъекта на карте.
        myMap.geoObjects.add(glyphIcon1);
    }
</script>



<?php include 'footer-1.php'; ?>