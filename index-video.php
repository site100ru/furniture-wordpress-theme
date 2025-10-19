<?php

/**
 * Template Name: Главная с видео
 * Template Post Type: page
 */

include 'header.php';

?>


<section class="main-home-section main-parallax main-home-section-kyxnu home-section-video">
    <!-- Header -->
    <div class="site-navbar-wrap">
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
                                            8 (951) 101-46-10
                                        </div>
                                        <div style="clear: both;"></div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ico-button" href="https://t.me/+79511014610">
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
                    <a class="navbar-brand" href="/">
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
											<a class="nav-link top-menu-tel pt-1 pb-1" href="tel:89511014610">8 (951) 101-46-10</a>
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
                            </svg> Пн-Сб: с
                            10.00-19.00<br>Вс: с
                            10.00-17.00
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
											<a class="nav-link top-menu-tel pt-1 pb-1" href="tel:89511014610">8 (951) 101-46-10</a>
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
    </div>

    <!-- home-video-section -->
    <div class="site-blocks-cover home-video-section">
        <video autoplay loop playsinline muted>
            <source src="<?php echo get_template_directory_uri(); ?>/video/video-cucina.mp4">
        </video>
        <div class="overlay"
            style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.75) 0%, rgba(0, 0, 0, 0.15) 35%, rgba(0, 0, 0, 0.15) 100%);">
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center home-section-height">
            <div class="col-xl-10 col-xxl-9">
                <h1 class="home-title mb-3">Мебель По индивидуальным размерам <br />
                    на заказ от производителя</h1>
                <p class="home-subtitle mb-4">Изготовим качественную кухню с учетом Ваших пожеланий и особенностей помещения
                    по разумной цене! Рассчитаем стоимость за 15 минут.</p>
                <a href="#" type="button" class="btn btn-lg btn-corporate-color-1" data-bs-toggle="modal"
                    data-bs-target="#calculatePriceWithDownloadModal">Рассчитать стоимость</a>
            </div>
        </div>
    </div>
    <!-- END home-video-section -->

</section>
<!-- /Header -->



<!-- Action -->
<section class="archive-portfolio-section archive-portfolio bg-white py-5">
    <div class="container">
        <div class="row">
            <div class="col text-md-center">
                <h2>Каталог проектов</h2>
                 <svg style="margin-bottom: 60px;" width="62" height="14" viewBox="0 0 62 14" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                    <rect x="48" width="14" height="14" rx="3" />
                    <rect x="24" width="14" height="14" rx="3" />
                    <rect width="14" height="14" rx="3" />
                </svg>
            </div>
        </div>
        <div class="row text-start">
            <div class="col-md-6 mb-5">
                <a href="/furniture/product-category/кухни/">
                    <div class="approximation project-container-2 services">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/project-1.webp" class="img-fluid"
                            alt="">
                        <div class="card-wrapper project-container-2-footer">
                            <div class="row" style="height: 100%;">
                                <div class="col-6">
                                    <h3 style="position: absolute; bottom: 0; width: 100%;">Каталог кухонь</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-5">
                <a href="/furniture/product-category/шкафы/">
                    <div class="services approximation project-container-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/project-2.webp" class="img-fluid"
                            alt="" decoding="async" />
                        <div class="card-wrapper project-container-2-footer">
                            <div class="row" style="height: 100%;">
                                <div class="col-6">
                                    <h3 style="position: absolute; bottom: 0; width: 100%;">Каталог шкафов</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- /Action -->

<!-- Services -->
<section class="archive-portfolio-section archive-portfolio bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col text-md-center">
                <h2>Наши услуги</h2>
                 <svg style="margin-bottom: 60px;" width="62" height="14" viewBox="0 0 62 14" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                    <rect x="48" width="14" height="14" rx="3" />
                    <rect x="24" width="14" height="14" rx="3" />
                    <rect width="14" height="14" rx="3" />
                </svg>
            </div>
        </div>
        <div class="row text-start">
            <div class="col-md-6 mb-5">
                <a href="/furniture/кухни-на-заказ/">
                    <div class="approximation project-container-2 services">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/services-1.webp" class="img-fluid"
                            alt="">
                        <div class="card-wrapper project-container-2-footer">
                            <div class="row" style="height: 100%;">
                                <div class="col-6">
                                    <h3 style="position: absolute; bottom: 0; width: 100%;">Кухни на заказ</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-5">
                <a href="/furniture/шкафы-на-заказ/">
                    <div class="services approximation project-container-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/services-2.webp" class="img-fluid"
                            alt="" decoding="async" />
                        <div class="card-wrapper project-container-2-footer">
                            <div class="row" style="height: 100%;">
                                <div class="col-6">
                                    <h3 style="position: absolute; bottom: 0; width: 100%;">Шкафы на заказ</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- /Action -->

<!-- SECTION PORTFOLIO -->
<section class="section-portfolio archive-portfolio-section-2 bg-white" style="padding-block: 60px;">
    <div class="container">
        <div class="row">
            <div class="col text-md-center">
                <h2 style="margin-bottom: 15px;">Последние выполненные работы</h2>
                <svg style="margin-bottom: 60px;" width="62" height="14" viewBox="0 0 62 14" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                    <rect x="48" width="14" height="14" rx="3" />
                    <rect x="24" width="14" height="14" rx="3" />
                    <rect width="14" height="14" rx="3" />
        
                </svg>

                <?php
                // Получаем все категории портфолио
                $portfolio_categories = get_terms(array(
                    'taxonomy' => 'portfolio-cat',
                    'hide_empty' => true,
                    'orderby' => 'name',
                    'order' => 'ASC'
                ));
                ?>

                <div class="row">
                    <div class="col text-center mb-4 mb-md-5">
                        <div class="d-md-none">
                            <!-- Bootstrap Tabs Navigation -->
                            <div class="nav-scroller mb-0" style="text-transform: uppercase; font-family: 'HelveticaNeueCyr-Light'; font-weight: bold;">
                                <ul class="nav justify-content-md-center d-flex m-auto" id="myTab" role="tablist">
                                    <!-- Таб "Все" -->
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all"
                                            type="button" role="tab" aria-controls="all" aria-selected="true">
                                            Все
                                        </button>
                                    </li>

                                    <?php if (!empty($portfolio_categories)): ?>
                                        <?php foreach ($portfolio_categories as $category): ?>
                                            <!-- Декоративная точка -->
                                            <li class="nav-item d-none d-xl-inline">
                                                <span class="nav-link px-0">
                                                    <svg style="margin-bottom: 5px;" width="6" height="6" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                                        <rect width="6" height="6" rx="2" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <!-- Категория -->
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="<?php echo esc_attr($category->slug); ?>-tab"
                                                    data-bs-toggle="tab" data-bs-target="#<?php echo esc_attr($category->slug); ?>"
                                                    type="button" role="tab" aria-controls="<?php echo esc_attr($category->slug); ?>"
                                                    aria-selected="false">
                                                    <?php echo esc_html($category->name); ?>
                                                </button>
                                            </li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <div class="text-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="40" fill="currentColor" viewBox="0 0 34 40" class="svg-icon" style="opacity: 1">
                                    <path
                                        d="M30.024 16c-.638 0-1.262.191-1.79.55a3.183 3.183 0 0 0-4.8-1.6 3.158 3.158 0 0 0-4.61-1.705V3.2a3.2 3.2 0 1 0-6.4 0v22.357a.2.2 0 0 1-.13.195.194.194 0 0 1-.231-.047l-2.55-2.548a5.62 5.62 0 0 0-5.788-1.367A2.37 2.37 0 0 0 2.5 25.357l5.259 7.886a26 26 0 0 0 2.754 3.474A10.79 10.79 0 0 0 18.34 40h4a10.925 10.925 0 0 0 10.192-6.901c.462-1.152.699-2.382.697-3.624V19.2a3.2 3.2 0 0 0-3.205-3.2m1.6 13.475a8.1 8.1 0 0 1-.582 3.029 9.33 9.33 0 0 1-8.707 5.896h-4a9.2 9.2 0 0 1-6.667-2.783 24.5 24.5 0 0 1-2.583-3.26L3.831 24.47a.774.774 0 0 1 .394-1.161 4.04 4.04 0 0 1 4.16.979l2.55 2.549a1.81 1.81 0 0 0 3.093-1.28V3.2a1.6 1.6 0 0 1 3.2 0v14.4a.8.8 0 0 0 1.6 0V16a1.6 1.6 0 0 1 3.2 0v2.4a.8.8 0 0 0 1.6 0v-.8a1.6 1.6 0 1 1 3.2 0V20a.8.8 0 0 0 1.6 0v-.8a1.6 1.6 0 0 1 3.2 0z" />
                                    <path
                                        d="M22.101 6.4h6.069l-1.835 1.833a.801.801 0 0 0 1.133 1.133l3.2-3.2a.8.8 0 0 0 0-1.133l-3.2-3.2a.8.8 0 1 0-1.133 1.133L28.17 4.8h-6.069a.8.8 0 1 0 0 1.6M4.501 9.6a.8.8 0 0 0 .567-1.367L3.233 6.4H9.3a.8.8 0 1 0 0-1.6H3.233l1.835-1.834a.801.801 0 1 0-1.133-1.133l-3.2 3.2a.8.8 0 0 0 0 1.133l3.2 3.2a.8.8 0 0 0 .566.234" />
                                </svg>
                            </div>
                        </div>

                        <!-- Десктопная версия с Bootstrap Tabs -->
                        <ul class="nav nav-tabs justify-content-center mb-4 d-none d-md-flex" id="myTab" role="tablist">
                            <!-- Таб "Все" -->
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all"
                                    type="button" role="tab" aria-controls="all" aria-selected="true">
                                    Все
                                </button>
                            </li>

                            <?php if (!empty($portfolio_categories)): ?>
                                <?php foreach ($portfolio_categories as $category): ?>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link ps-0" id="<?php echo esc_attr($category->slug); ?>-tab"
                                            data-bs-toggle="tab" data-bs-target="#<?php echo esc_attr($category->slug); ?>"
                                            type="button" role="tab" aria-controls="<?php echo esc_attr($category->slug); ?>"
                                            aria-selected="false">
                                            <svg width="6" height="6" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon me-3">
                                                <rect width="6" height="6" rx="2" />
                                            </svg>
                                            <?php echo esc_html($category->name); ?>
                                        </button>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>

                <!-- Tab Content -->
                <div class="tab-content" id="portfolioTabContent">

                    <!-- Все работы -->
                    <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                        <div class="row">
                            <?php
                            $args = [
                                'post_type' => 'portfolio',
                                'numberposts' => 6,
                                'posts_per_page' => 6,
                            ];

                            $query = new WP_Query($args);

                            while ($query->have_posts()):
                                $query->the_post(); ?>
                                <div class="col-md-6 col-lg-4 mb-5">
                                    <a href="#" onclick="galleryOn('gallery-<?php echo get_the_ID(); ?>', 'img-<?php echo get_the_ID(); ?>-0'); return false;">
                                        <div class="approximation approximation-project project-container-2 rounded">
                                            <img src="<?php echo get_post_meta(get_the_ID(), '_img-1')[0]; ?>"
                                                class="rounded" alt="<?php echo get_the_title(); ?>" loading="lazy">
                                            <div class="card-wrapper">
                                                <div class="position-absolute"><?php echo get_the_title(); ?></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endwhile;

                            wp_reset_postdata();
                            ?>
                        </div>
                        <a href="/furniture/portfolio/" class="btn btn-lg btn-corporate-color-1"
                            style="margin-top: 12px;">Смотреть еще</a>
                    </div>

                    <?php if (!empty($portfolio_categories)): ?>
                        <?php foreach ($portfolio_categories as $category): ?>
                            <!-- <?php echo esc_html($category->name); ?> -->
                            <div class="tab-pane fade" id="<?php echo esc_attr($category->slug); ?>" role="tabpanel"
                                aria-labelledby="<?php echo esc_attr($category->slug); ?>-tab">
                                <div class="row">
                                    <?php
                                    $args = [
                                        'post_type' => 'portfolio',
                                        'numberposts' => 6,
                                        'posts_per_page' => 6,
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'portfolio-cat',
                                                'field' => 'term_id',
                                                'terms' => $category->term_id,
                                            ),
                                        ),
                                    ];

                                    $category_query = new WP_Query($args);

                                    if ($category_query->have_posts()):
                                        while ($category_query->have_posts()):
                                            $category_query->the_post(); ?>
                                            <div class="col-md-6 col-lg-4 mb-5">
                                                <a href="#" onclick="galleryOn('gallery-<?php echo get_the_ID(); ?>', 'img-<?php echo get_the_ID(); ?>-0'); return false;">
                                                    <div class="approximation approximation-project project-container-2 rounded">
                                                        <img src="<?php echo get_post_meta(get_the_ID(), '_img-1')[0]; ?>"
                                                            class="rounded" alt="<?php echo get_the_title(); ?>" loading="lazy">
                                                        <div class="card-wrapper">
                                                            <div class="position-absolute"><?php echo get_the_title(); ?></div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php endwhile;
                                    else: ?>
                                        <div class="col-12">
                                            <p>В данной категории пока нет работ.</p>
                                        </div>
                                    <?php endif;

                                    wp_reset_postdata();
                                    ?>
                                </div>
                                <?php if ($category_query->have_posts()): ?>
                                    <a href="/furniture/portfolio-cat/<?php echo esc_attr($category->slug); ?>/"
                                        class="btn btn-lg btn-corporate-color-1" style="margin-top: 12px;">
                                        Смотреть все
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery wrapper -->
<div id="galleryWrapper" style="background: rgba(0,0,0,0.85); display: none; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 9999;">
    <?php
    $posts = get_posts(array(
        'numberposts' => 999,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'portfolio',
    ));

    foreach ($posts as $post) {
        setup_postdata($post); ?>

        <div id="gallery-<?php echo $post->ID; ?>" class="carousel slide" data-bs-ride="carousel" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
            <div class="carousel-indicators">
                <?php
                $count2 = 0;
                for ($i = 1; $i <= 9; $i++) {
                    if (get_post_meta($post->ID, '_img-' . $i)) {
                        $activeClass = ($count2 == 0) ? 'class="active"' : '';
                ?>
                        <button id="ind-<?php echo $post->ID; ?>-<?php echo $count2; ?>" type="button"
                            data-bs-target="#gallery-<?php echo $post->ID; ?>"
                            data-bs-slide-to="<?php echo $count2; ?>"
                            <?php echo $activeClass; ?>
                            aria-label="Slide <?php echo $count2 + 1; ?>"></button>
                <?php
                        $count2++;
                    }
                }
                ?>
            </div>
            <div class="carousel-inner h-100">
                <?php
                $count2 = 0;
                for ($i = 1; $i <= 9; $i++) {
                    if (get_post_meta($post->ID, '_img-' . $i)) {
                        $activeClass = ($count2 == 0) ? 'active' : '';
                ?>
                        <div id="img-<?php echo $post->ID; ?>-<?php echo $count2; ?>"
                            class="carousel-item h-100 <?php echo $activeClass; ?>"
                            data-bs-interval="999999999">
                            <div class="row align-items-center h-100">
                                <div class="col text-center">
                                    <img src="<?php echo get_post_meta($post->ID, '_img-' . $i)[0]; ?>"
                                        class="img-fluid"
                                        style="max-width: 75vw; max-height: 75vh;"
                                        alt="<?php echo get_the_title(); ?>">
                                </div>
                            </div>
                        </div>
                <?php
                        $count2++;
                    }
                }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    <?php }
    wp_reset_postdata();
    ?>

    <!-- Кнопка закрытия галереи -->
    <button type="button" onclick="closeGallery();" class="btn-close btn-close-white"
        style="position: fixed; top: 25px; right: 25px; z-index: 99999;"
        aria-label="Close"></button>
</div>

<script>
    // Объект для хранения соответствий ID галерей
    const portfolioGalleries = {};

    <?php
    // Создаем JavaScript объект с данными галерей
    $posts = get_posts(array(
        'numberposts' => 999,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'portfolio',
    ));

    foreach ($posts as $post) {
        setup_postdata($post);
        echo "portfolioGalleries['gallery-{$post->ID}'] = 'gallery-{$post->ID}';";
    }
    wp_reset_postdata();
    ?>

    // Функция открытия галереи
    function galleryOn(galleryId, imageId = null) {
        const galleryWrapper = document.getElementById('galleryWrapper');

        if (!galleryWrapper) {
            console.error('Gallery wrapper not found');
            return;
        }

        // Закрываем все открытые галереи
        closeAllGalleries();

        // Показываем модальное окно
        galleryWrapper.style.display = 'block';
        document.body.style.overflow = 'hidden';

        // Открываем нужную галерею
        const targetGallery = document.getElementById(galleryId);
        if (targetGallery) {
            targetGallery.style.display = 'block';

            // Если указан конкретный слайд, активируем его
            if (imageId) {
                const targetImage = document.getElementById(imageId);
                const targetIndicator = document.getElementById('ind-' + imageId.replace('img-', ''));

                if (targetImage && targetIndicator) {
                    // Убираем активные классы со всех элементов текущей галереи
                    targetGallery.querySelectorAll('.carousel-item').forEach(item => {
                        item.classList.remove('active');
                    });
                    targetGallery.querySelectorAll('.carousel-indicators button').forEach(btn => {
                        btn.classList.remove('active');
                    });

                    // Добавляем активные классы к нужным элементам
                    targetImage.classList.add('active');
                    targetIndicator.classList.add('active');
                }
            }
        } else {
            console.error('Gallery element not found:', galleryId);
        }
    }

    // Функция закрытия всех галерей
    function closeAllGalleries() {
        // Скрываем все галереи
        document.querySelectorAll('[id^="gallery-"]').forEach(gallery => {
            gallery.style.display = 'none';
        });

        // Убираем активные классы
        document.querySelectorAll('.carousel-item').forEach(item => {
            item.classList.remove('active');
        });

        document.querySelectorAll('.carousel-indicators button').forEach(btn => {
            btn.classList.remove('active');
        });
    }

    // Функция закрытия галереи
    function closeGallery() {
        const galleryWrapper = document.getElementById('galleryWrapper');
        if (galleryWrapper) {
            galleryWrapper.style.display = 'none';
            document.body.style.overflow = '';
        }
        closeAllGalleries();
    }

    // События
    document.addEventListener('DOMContentLoaded', function() {
        const galleryWrapper = document.getElementById('galleryWrapper');

        // Закрытие по клику на фон
        if (galleryWrapper) {
            galleryWrapper.addEventListener('click', function(e) {
                if (e.target === galleryWrapper) {
                    closeGallery();
                }
            });
        }

        // Закрытие по клавише Escape
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeGallery();
            }
        });
    });
</script>
<!-- END SECTION PORTFOLIO -->

<!-- ABOUT SECTION -->
<section class="about-section bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col text-md-center">
                <h2>О нас</h2>
                <svg width="62" height="14" viewBox="0 0 62 14" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon mb-5">
                    <rect x="48" width="14" height="14" rx="3" />
                    <rect x="24" width="14" height="14" rx="3" />
                    <rect width="14" height="14" rx="3" />
                </svg>
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
        if (gallery == "aboutSectionGallery") {
            document.getElementById("aboutSectionGallery").style.display = "block";
        }

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
                <svg width="62" height="14" viewBox="0 0 62 14" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon mb-5">
                    <rect x="48" width="14" height="14" rx="3" />
                    <rect x="24" width="14" height="14" rx="3" />
                    <rect width="14" height="14" rx="3" />
                </svg>

                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="row">
                            <div class="col-3 col-md-2">
                                <svg width="70" height="70" viewBox="0 0 70 70" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                    <path
                                        d="M70 51.201V36.025H16.27V16.338h8.75v-8.75h28.574v15.45H30.383l-10.8 5.4 10.8 5.4h36.199v-10.8H55.645v-17.5H23.638l-9.42 9.282v21.205H0v15.176h14.219v13.262h41.426v-9.844h-2.051v7.793H16.27v-11.21zM29.531 31.085 24.1 28.369l5.432-2.716zm24.063.702H31.582v-2.324h22.012zm0-4.375H31.582v-2.324h22.012zm6.426-2.324h4.511v6.7H60.02zm-4.376 0h2.325v6.7h-2.325zM22.97 8.97v5.317h-5.181zM2.05 38.076h3.418v1.23h2.05v-1.23h2.325v3.418h2.05v-3.418h2.325v1.23h2.05v-1.23h2.325v3.418h2.05v-3.418h2.325v1.23h2.05v-1.23h2.325v3.418h2.05v-3.418h2.325v1.23h2.05v-1.23h2.325v3.418h2.05v-3.418h2.325v1.23h2.05v-1.23h2.325v3.418h2.05v-3.418h2.325v1.23h2.05v-1.23h2.325v3.418h2.05v-3.418h2.325v1.23h2.05v-1.23h2.325v3.418h2.05v-3.418h3.555v6.7H2.051zm0 11.074v-2.324h65.898v2.324z" />
                                    <path d="M63.3 28.37h-2.05v2.187h2.05z" />
                                </svg>
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
                                <svg width="70" height="70" viewBox="0 0 70 70" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.285 58.79c-4.512 0-8.203-3.83-8.203-8.204 0-4.512 3.691-8.203 8.203-8.203s8.203 3.691 8.203 8.203-3.691 8.203-8.203 8.203m0-14.493c-3.418 0-6.152 2.871-6.152 6.152-.137 3.555 2.598 6.29 6.152 6.29a6.127 6.127 0 0 0 6.153-6.153c0-3.418-2.735-6.29-6.153-6.29" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M25.566 70h-6.699c-.547 0-.957-.41-.957-1.094v-3.418c-1.094-.273-2.187-.82-3.144-1.367l-2.598 2.461c-.41.41-.957.41-1.367 0l-4.785-4.785c-.41-.274-.41-.957 0-1.367l2.46-2.461c-.546-1.094-.956-2.051-1.23-3.145H3.828c-.547 0-1.094-.547-1.094-1.093v-6.563c0-.547.547-1.094 1.094-1.094h3.418c.41-.957.82-2.05 1.367-3.008L6.016 40.47c-.41-.41-.41-.957 0-1.367l4.785-4.786c.41-.41 1.094-.41 1.504 0l2.46 2.461c.958-.547 2.051-.957 3.145-1.23v-3.555c0-.547.41-.957 1.094-.957h6.7c.546 0 .956.41.956.957v3.555c1.094.273 2.188.684 3.145 1.23l2.46-2.46c.41-.41 1.094-.41 1.505 0l4.785 4.785c.41.41.41.957 0 1.367l-2.598 2.597c.547.957.957 2.051 1.23 3.145h3.555c.547 0 1.094.41 1.094.957v6.7c0 .546-.547 1.093-1.094 1.093h-3.554c-.274 1.094-.684 2.05-1.231 3.145l2.461 2.46c.41.41.41.957 0 1.368l-4.785 4.785c-.41.41-.957.41-1.367 0l-2.598-2.461c-.957.547-2.05.957-3.145 1.367v3.418c0 .547-.41.957-.957.957m-5.742-2.05h4.785v-3.282c0-.41.274-.82.82-.957a11.1 11.1 0 0 0 3.966-1.64c.41-.274.82-.137 1.23.136l2.324 2.324 3.418-3.418-2.324-2.324c-.41-.273-.41-.82-.137-1.23.684-1.23 1.367-2.598 1.64-3.965.138-.41.411-.82.958-.82h3.281v-4.649h-3.281c-.547 0-.82-.41-.957-.82-.274-1.367-.957-2.735-1.64-3.965-.274-.41-.274-.957.136-1.23l2.324-2.325-3.418-3.418-2.324 2.324c-.41.41-.82.41-1.23.137a11.1 11.1 0 0 0-3.965-1.64c-.547 0-.82-.41-.82-.82v-3.282h-4.786v3.281c0 .41-.273.82-.683.957-1.368.274-2.735.957-3.965 1.64-.41.274-.957.274-1.367 0l-2.325-2.46-3.28 3.418 2.323 2.324c.274.41.41.82.137 1.23-.82 1.231-1.367 2.598-1.777 3.965-.137.547-.547.82-.957.82H4.648v4.65h3.418c.41 0 .82.41.957.82.41 1.367.957 2.734 1.641 3.964.274.41.137.957-.137 1.23L8.203 61.25l3.418 3.418 2.324-2.324c.274-.41.82-.41 1.23-.137a11.1 11.1 0 0 0 3.966 1.64c.41.137.82.547.82.958v3.144zM54.414 47.852c-3.145 0-5.742-2.461-5.742-5.606s2.598-5.605 5.742-5.605 5.605 2.46 5.605 5.605c-.136 3.145-2.597 5.606-5.605 5.606m0-9.297c-2.05 0-3.691 1.777-3.691 3.691 0 2.05 1.64 3.691 3.691 3.691 1.914 0 3.555-1.64 3.555-3.69 0-2.052-1.64-3.692-3.555-3.692" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M56.465 55.098h-4.238c-.547 0-1.094-.41-1.094-.957V52.09a5 5 0 0 1-1.504-.684l-1.504 1.367c-.137.137-.41.274-.684.274-.273 0-.547-.137-.683-.274l-3.008-3.007a1.073 1.073 0 0 1 0-1.504l1.504-1.367c-.41-.547-.547-1.094-.684-1.641h-2.05a.935.935 0 0 1-.958-.957v-4.375c0-.547.41-.957.958-.957h2.05c.137-.547.41-1.094.684-1.64L43.75 35.82c-.41-.273-.41-.957 0-1.367l3.008-3.008c.136-.273.547-.41.683-.41.274 0 .547.137.684.41l1.504 1.367c.41-.273.957-.41 1.504-.683v-2.05c0-.548.547-.958 1.094-.958h4.238c.683 0 1.094.41 1.094.957v2.05c.547.138 1.093.411 1.64.684l1.367-1.503c.137-.137.41-.274.684-.274.273 0 .547.137.684.274l3.007 3.144c.41.41.41.957 0 1.367l-1.367 1.367c.274.547.41 1.094.684 1.641h1.914c.547 0 1.094.41 1.094 1.094v4.238c0 .547-.547 1.094-1.094 1.094h-1.914c-.274.547-.41 1.094-.684 1.504l1.367 1.504c.41.41.41.957 0 1.367l-3.007 3.144c-.137.137-.41.274-.684.274-.273 0-.547-.137-.684-.274L59.2 51.27c-.547.274-1.093.547-1.64.684v2.05c0 .684-.547 1.095-1.094 1.095m-3.281-1.914h2.324v-1.778c0-.547.273-.82.683-.957.957-.273 1.778-.547 2.461-1.093.41-.274.957-.137 1.23.136l1.368 1.23 1.64-1.64-1.23-1.23c-.41-.41-.41-.82-.273-1.23.547-.821.957-1.642 1.093-2.462.137-.41.547-.82.958-.82h1.777v-2.324h-1.778c-.41 0-.82-.274-.956-.684-.274-.82-.547-1.777-1.094-2.46-.137-.411-.137-.958.273-1.231l1.23-1.23-1.64-1.642L59.883 35c-.274.41-.82.41-1.23.137-.684-.41-1.505-.82-2.462-.957-.41-.137-.683-.547-.683-1.094v-1.64h-2.324v1.64c0 .547-.274.957-.82 1.094-.821.136-1.641.547-2.325.957-.41.273-.957.136-1.367-.137l-1.23-1.23-1.641 1.64 1.23 1.23c.41.274.41.82.274 1.231-.547.684-.82 1.64-1.094 2.461 0 .41-.41.684-.957.684h-1.777v2.324h1.777c.547 0 .957.41.957.82.273.82.547 1.64 1.094 2.598.136.41.136.82-.274 1.094l-1.23 1.367 1.64 1.64 1.23-1.367c.411-.273.958-.273 1.368-.136.684.546 1.504.82 2.324 1.093.547.137.82.41.82.957zM37.871 23.242c-3.828 0-6.973-3.144-6.973-7.11 0-3.827 3.145-6.972 6.973-6.972s6.973 3.145 6.973 6.973c0 3.965-3.145 7.11-6.973 7.11m0-12.031c-2.734 0-5.059 2.187-5.059 4.922S35 21.19 37.873 21.19c2.733 0 4.921-2.187 4.921-5.058a4.9 4.9 0 0 0-4.922-4.922" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M40.606 32.402H35a.934.934 0 0 1-.957-.957v-2.734c-.82-.273-1.64-.684-2.461-1.094l-1.914 2.051c-.41.41-.957.41-1.367 0l-3.828-3.828a1.073 1.073 0 0 1 0-1.504l1.914-1.914c-.41-.82-.684-1.64-.957-2.461h-2.871a.934.934 0 0 1-.957-.957v-5.606c0-.546.41-.957.957-.957h2.87c.137-.82.548-1.64.958-2.46l-1.914-1.915a1.073 1.073 0 0 1 0-1.504L28.3 2.735a.75.75 0 0 1 .683-.41c.274 0 .547.137.684.41l1.914 1.914c.82-.273 1.64-.683 2.461-.957V.957c0-.547.547-.957 1.094-.957h5.468c.547 0 1.094.41 1.094.957v2.734c.82.274 1.64.684 2.324 1.094l1.914-2.05c.274-.137.547-.274.684-.274.273 0 .547.137.684.273L51.27 6.7c.41.41.41.957 0 1.367L49.355 9.98c.274.82.684 1.641.958 2.461h2.734c.684 0 1.094.41 1.094.957v5.606c0 .547-.41.957-1.094.957h-2.734c-.274.82-.547 1.64-.958 2.46l1.915 1.915c.41.41.41 1.094 0 1.504l-3.965 3.828c-.137.137-.41.273-.684.273-.273 0-.41-.136-.684-.273l-1.914-2.05c-.82.546-1.64.82-2.46 1.093v2.734c0 .684-.41.957-.958.957m-4.512-1.914h3.554v-2.597c0-.41.274-.82.82-.957a15.3 15.3 0 0 0 3.282-1.368c.41-.273.82-.136 1.094.137l1.914 1.914 2.46-2.597-1.913-1.778c-.274-.41-.41-.957 0-1.23.547-1.094.957-2.188 1.367-3.282 0-.41.41-.82.957-.82h2.46v-3.555h-2.46c-.547 0-.957-.273-.957-.683-.41-1.23-.82-2.324-1.367-3.281-.274-.41-.274-.957 0-1.23l1.914-1.915-2.598-2.46-1.777 1.777c-.274.41-.82.41-1.23.273-.958-.684-2.051-1.094-3.145-1.367-.547-.137-.82-.547-.82-1.094v-2.46h-3.555v2.46c0 .547-.41.957-.82 1.094-1.094.273-2.188.683-3.282 1.367-.41.137-.82.137-1.23-.274l-1.778-1.777-2.46 2.461L28.3 9.16c.41.274.41.684.273 1.094-.683 1.23-1.23 2.324-1.367 3.418-.137.41-.547.683-1.094.683h-2.46v3.692h2.46c.547 0 .957.273 1.094.683.137 1.094.684 2.188 1.367 3.282.137.41.137.957-.137 1.23l-1.914 1.777 2.598 2.598 1.777-1.914c.41-.273.82-.41 1.23-.137 1.095.684 2.188 1.094 3.282 1.368.41.136.82.546.82.957v2.597z" />
                                </svg>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" viewBox="0 0 70 70" class="svg-icon">
                                    <path
                                        d="M35 44.844a17.5 17.5 0 1 1 14-28 1.094 1.094 0 1 1-1.75 1.312 15.247 15.247 0 1 0 1.794 3.063 1.094 1.094 0 1 1 2.001-.875A17.5 17.5 0 0 1 35 44.844m5.053-9.406a1.09 1.09 0 0 0 .438-1.094l-.744-4.375 3.15-3.074a1.094 1.094 0 0 0-.602-1.87l-4.375-.634-1.936-3.883a1.094 1.094 0 0 0-1.958 0l-1.946 3.948-4.375.635a1.094 1.094 0 0 0-.602 1.87l3.15 3.074-.744 4.375a1.094 1.094 0 0 0 1.586 1.148L35 33.468l3.894 2.046a1.09 1.09 0 0 0 1.148-.087zm-5.556-4.168-2.45 1.28.47-2.723a1.1 1.1 0 0 0-.317-.963l-1.98-1.925 2.735-.393a1.1 1.1 0 0 0 .82-.602L35 23.46l1.225 2.472a1.1 1.1 0 0 0 .82.602l2.735.393-1.98 1.925a1.1 1.1 0 0 0-.317.963l.47 2.723-2.439-1.28a1.1 1.1 0 0 0-1.017 0zm6.07 20.443a6.1 6.1 0 0 0 2.975-2.188 6 6 0 0 1 1.51-1.356 6.1 6.1 0 0 1 2.045-.35 6.07 6.07 0 0 0 3.489-.974 6.1 6.1 0 0 0 1.728-3.193 6 6 0 0 1 .788-1.903 6 6 0 0 1 1.673-1.182 6.1 6.1 0 0 0 2.745-2.406 6.05 6.05 0 0 0 .175-3.598 6.1 6.1 0 0 1-.11-2.09 6 6 0 0 1 .974-1.75 6.14 6.14 0 0 0 1.422-3.38 6.14 6.14 0 0 0-1.444-3.4 5.9 5.9 0 0 1-.973-1.75 6.1 6.1 0 0 1 .11-2.09 6.04 6.04 0 0 0-.176-3.598 6.1 6.1 0 0 0-2.745-2.406 6 6 0 0 1-1.673-1.182 6 6 0 0 1-.788-1.903 6.1 6.1 0 0 0-1.728-3.193 6.07 6.07 0 0 0-3.49-.974 6.1 6.1 0 0 1-2.044-.35A6 6 0 0 1 43.53 5.13a6.1 6.1 0 0 0-2.975-2.188 6 6 0 0 0-3.522.635A6.2 6.2 0 0 1 35 4.2a6.2 6.2 0 0 1-2.034-.58 6 6 0 0 0-3.522-.634 6.1 6.1 0 0 0-2.975 2.188 6 6 0 0 1-1.51 1.356 6.1 6.1 0 0 1-2.045.35 6.07 6.07 0 0 0-3.49.973 6.1 6.1 0 0 0-1.727 3.194 6 6 0 0 1-.788 1.903 6 6 0 0 1-1.673 1.181 6.1 6.1 0 0 0-2.745 2.407 3.5 3.5 0 0 0-.263.765 1.119 1.119 0 1 0 2.188.47q.032-.147.098-.284a4.5 4.5 0 0 1 1.848-1.454 7.6 7.6 0 0 0 2.232-1.761 7.7 7.7 0 0 0 1.17-2.636 4.5 4.5 0 0 1 1.017-2.111 4.5 4.5 0 0 1 2.275-.503 7.7 7.7 0 0 0 2.844-.558 7.6 7.6 0 0 0 2.187-1.849 4.5 4.5 0 0 1 1.849-1.487 4.46 4.46 0 0 1 2.187.536 7.7 7.7 0 0 0 2.844.733 7.8 7.8 0 0 0 2.844-.733 4.46 4.46 0 0 1 2.187-.536c.76.295 1.425.79 1.925 1.433a7.5 7.5 0 0 0 2.188 1.848 7.7 7.7 0 0 0 2.844.569c.79-.02 1.57.17 2.264.547.513.607.856 1.339.995 2.122.226.946.63 1.84 1.192 2.636a7.6 7.6 0 0 0 2.308 1.717 4.5 4.5 0 0 1 1.827 1.498c.203.76.203 1.56 0 2.319a7.7 7.7 0 0 0-.088 2.91 7.5 7.5 0 0 0 1.313 2.515 4.53 4.53 0 0 1 1.093 2.187 4.53 4.53 0 0 1-1.093 2.188 7.5 7.5 0 0 0-1.313 2.516 7.7 7.7 0 0 0 .088 2.909c.202.76.202 1.56 0 2.319a4.5 4.5 0 0 1-1.849 1.454 7.6 7.6 0 0 0-2.286 1.597 7.7 7.7 0 0 0-1.17 2.636 4.5 4.5 0 0 1-1.017 2.111c-.701.365-1.486.538-2.275.503a7.7 7.7 0 0 0-2.844.558 7.6 7.6 0 0 0-2.188 1.849 4.5 4.5 0 0 1-1.848 1.487 4.45 4.45 0 0 1-2.187-.536 7.7 7.7 0 0 0-2.844-.733c-.986.061-1.951.31-2.844.733a4.45 4.45 0 0 1-2.187.536 4.5 4.5 0 0 1-1.925-1.433 7.5 7.5 0 0 0-2.188-1.848 7.7 7.7 0 0 0-2.844-.569c-.79.02-1.57-.17-2.264-.547a4.5 4.5 0 0 1-.995-2.122 7.7 7.7 0 0 0-1.192-2.636 7.6 7.6 0 0 0-2.308-1.717 4.5 4.5 0 0 1-1.827-1.498 4.5 4.5 0 0 1 0-2.32 7.7 7.7 0 0 0 .088-2.908 7.5 7.5 0 0 0-1.313-2.516 4.53 4.53 0 0 1-1.093-2.188 4.54 4.54 0 0 1 1.093-2.187l.361-.525c.435-.6.757-1.275.952-1.99a6 6 0 0 0 0-2.024 1.1 1.1 0 1 0-2.188.262c.072.424.072.856 0 1.28-.139.455-.353.884-.634 1.269l-.34.492a6.14 6.14 0 0 0-1.366 3.51 6.14 6.14 0 0 0 1.443 3.403c.422.523.751 1.115.974 1.75a6.1 6.1 0 0 1-.11 2.089 6.04 6.04 0 0 0 .175 3.598 6.1 6.1 0 0 0 2.746 2.406 6 6 0 0 1 1.673 1.181 6 6 0 0 1 .788 1.904 6.1 6.1 0 0 0 1.728 3.193 6.07 6.07 0 0 0 3.489.974 6.1 6.1 0 0 1 2.045.35 6 6 0 0 1 1.51 1.356 6.1 6.1 0 0 0 2.975 2.188 6.03 6.03 0 0 0 3.522-.635A6.2 6.2 0 0 1 35 50.488c.706.074 1.395.27 2.034.58a7.7 7.7 0 0 0 2.767.721q.384 0 .755-.087zM17.5 40.578 15.18 66.106l14.624-14.634a1.094 1.094 0 0 0-1.543-1.542L15.137 63.055l-1.192-7.186a1.09 1.09 0 0 0-.897-.897L5.852 53.77l12.173-12.206a1.093 1.093 0 0 0-1.542-1.543L2.8 53.726a1.093 1.093 0 0 0 .59 1.849l8.51 1.422 1.422 8.509a1.094 1.094 0 0 0 1.848.59zm42.23 7.23a1.094 1.094 0 0 0 0-1.542l-6.136-6.114a1.093 1.093 0 0 0-1.543 1.542l6.104 6.103a1.094 1.094 0 0 0 1.542 0zm-3.796 18.594a1.1 1.1 0 0 0 .744-.864l1.422-8.51 8.51-1.422a1.092 1.092 0 0 0 .59-1.848l-3.106-3.128a1.094 1.094 0 0 0-1.542 1.542l1.596 1.597-7.186 1.192a1.09 1.09 0 0 0-.896.897l-1.193 7.186L42.34 50.52a1.094 1.094 0 0 0-1.542 1.542l14.022 14.043a1.09 1.09 0 0 0 1.093.274zm5.316-18.277a1.094 1.094 0 1 0 0 2.187 1.094 1.094 0 0 0 0-2.187" />
                                </svg>
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
                                <svg width="65" height="65" viewBox="0 0 65 65" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                    <path
                                        d="M40.05 23.97a1.03 1.03 0 0 0-.73-.313 1 1 0 0 0-.73.313L24.138 38.905a1.07 1.07 0 0 0-.315.758 1.1 1.1 0 0 0 .303.764 1.005 1.005 0 0 0 1.472-.013L40.05 25.478a1.07 1.07 0 0 0 .302-.754 1.1 1.1 0 0 0-.302-.754M26.933 31.125c.816 0 1.615-.25 2.294-.719a4.24 4.24 0 0 0 1.52-1.915 4.4 4.4 0 0 0 .235-2.465 4.3 4.3 0 0 0-1.13-2.185 4.1 4.1 0 0 0-2.114-1.168 4 4 0 0 0-2.385.243c-.755.323-1.4.87-1.853 1.571a4.37 4.37 0 0 0-.696 2.371 4.35 4.35 0 0 0 1.21 3.016c.774.8 1.824 1.25 2.919 1.251m0-6.4c.408 0 .807.125 1.147.359s.604.568.76.957a2.2 2.2 0 0 1 .118 1.233c-.08.414-.277.794-.565 1.093a2.05 2.05 0 0 1-1.058.584c-.4.082-.815.04-1.192-.122a2.1 2.1 0 0 1-.927-.786 2.185 2.185 0 0 1 .258-2.693c.387-.4.911-.625 1.459-.626M37.255 33.259c-.817 0-1.615.25-2.294.719a4.24 4.24 0 0 0-1.52 1.915 4.4 4.4 0 0 0-.236 2.465c.16.828.553 1.589 1.13 2.185a4.1 4.1 0 0 0 2.114 1.168c.801.165 1.632.08 2.386-.243s1.4-.87 1.853-1.571a4.37 4.37 0 0 0 .696-2.371 4.35 4.35 0 0 0-1.21-3.016 4.07 4.07 0 0 0-2.919-1.251m0 6.4c-.408 0-.808-.124-1.147-.359a2.1 2.1 0 0 1-.76-.957 2.2 2.2 0 0 1-.118-1.233c.08-.414.276-.794.565-1.093a2.04 2.04 0 0 1 1.057-.584c.4-.082.816-.04 1.193.122.377.161.7.435.927.786a2.185 2.185 0 0 1-.258 2.693c-.387.4-.912.625-1.459.626" />
                                    <path
                                        d="M61.218 25.811a6.26 6.26 0 0 1-1.832-2.839 6.44 6.44 0 0 1-.113-3.41 8.6 8.6 0 0 0 .095-3.596 8.45 8.45 0 0 0-1.385-3.3 8.1 8.1 0 0 0-2.605-2.386 7.85 7.85 0 0 0-3.337-1.024 5.87 5.87 0 0 1-3.085-1.174 6.16 6.16 0 0 1-2.02-2.681 8.3 8.3 0 0 0-1.957-2.97A7.95 7.95 0 0 0 41.986.598a7.75 7.75 0 0 0-3.461-.344 7.8 7.8 0 0 0-3.276 1.206 5.8 5.8 0 0 1-3.156.936 5.8 5.8 0 0 1-3.156-.937A7.8 7.8 0 0 0 25.662.255 7.75 7.75 0 0 0 22.2.6a7.95 7.95 0 0 0-2.992 1.83 8.3 8.3 0 0 0-1.957 2.97 6.16 6.16 0 0 1-2.025 2.685 5.87 5.87 0 0 1-3.093 1.172 7.85 7.85 0 0 0-3.336 1.03 8.1 8.1 0 0 0-2.601 2.39 8.45 8.45 0 0 0-1.38 3.304 8.6 8.6 0 0 0 .102 3.597 6.44 6.44 0 0 1-.123 3.412 6.26 6.26 0 0 1-1.841 2.835 8.3 8.3 0 0 0-2.113 2.861 8.6 8.6 0 0 0-.748 3.516 8.6 8.6 0 0 0 .756 3.514 8.3 8.3 0 0 0 2.12 2.857A6.26 6.26 0 0 1 4.8 41.412a6.44 6.44 0 0 1 .113 3.41 8.6 8.6 0 0 0-.095 3.596 8.45 8.45 0 0 0 1.385 3.3 8.1 8.1 0 0 0 2.605 2.386 7.85 7.85 0 0 0 3.337 1.024 5.87 5.87 0 0 1 3.086 1.174 6.16 6.16 0 0 1 2.02 2.68 8.3 8.3 0 0 0 1.957 2.972 7.94 7.94 0 0 0 2.992 1.83 7.75 7.75 0 0 0 3.462.345 7.8 7.8 0 0 0 3.276-1.207 5.8 5.8 0 0 1 3.155-.935c1.115 0 2.209.324 3.155.935l.551-.901-.55.902a7.8 7.8 0 0 0 3.276 1.206 7.75 7.75 0 0 0 3.46-.345 7.95 7.95 0 0 0 2.993-1.83 8.3 8.3 0 0 0 1.957-2.97 6.16 6.16 0 0 1 2.025-2.685 5.87 5.87 0 0 1 3.092-1.172 7.85 7.85 0 0 0 3.336-1.03 8.1 8.1 0 0 0 2.602-2.39 8.45 8.45 0 0 0 1.38-3.304 8.6 8.6 0 0 0-.102-3.597 6.44 6.44 0 0 1 .123-3.412 6.26 6.26 0 0 1 1.84-2.835 8.3 8.3 0 0 0 2.114-2.861 8.6 8.6 0 0 0 .748-3.516 8.6 8.6 0 0 0-.756-3.514 8.3 8.3 0 0 0-2.12-2.857m-1.33 11.13a8.4 8.4 0 0 0-2.464 3.813 8.66 8.66 0 0 0-.155 4.583c.212.874.237 1.787.072 2.672a6.3 6.3 0 0 1-1.028 2.454 6.04 6.04 0 0 1-1.935 1.774 5.8 5.8 0 0 1-2.48.762 7.9 7.9 0 0 0-4.157 1.58 8.3 8.3 0 0 0-2.721 3.61 6.14 6.14 0 0 1-1.451 2.206 5.9 5.9 0 0 1-2.22 1.36 5.75 5.75 0 0 1-2.57.257 5.8 5.8 0 0 1-2.43-.895 7.84 7.84 0 0 0-4.256-1.262c-1.505 0-2.98.438-4.256 1.262a5.8 5.8 0 0 1-2.43.895c-.865.11-1.741.023-2.569-.257a5.9 5.9 0 0 1-2.22-1.36 6.1 6.1 0 0 1-1.45-2.205 8.3 8.3 0 0 0-2.727-3.614A7.9 7.9 0 0 0 12.277 53a5.8 5.8 0 0 1-2.464-.753 6 6 0 0 1-1.924-1.762 6.3 6.3 0 0 1-1.04-2.47 6.4 6.4 0 0 1 .074-2.693 8.66 8.66 0 0 0-.165-4.584 8.4 8.4 0 0 0-2.473-3.809 6.2 6.2 0 0 1-1.571-2.13 6.38 6.38 0 0 1 .008-5.23A6.2 6.2 0 0 1 4.3 27.443c1.148-1.01 2-2.33 2.463-3.813a8.66 8.66 0 0 0 .156-4.582 6.4 6.4 0 0 1-.072-2.673 6.3 6.3 0 0 1 1.027-2.453 6.04 6.04 0 0 1 1.936-1.775 5.8 5.8 0 0 1 2.48-.762 7.9 7.9 0 0 0 4.157-1.58 8.3 8.3 0 0 0 2.72-3.611c.321-.837.816-1.59 1.45-2.207a5.9 5.9 0 0 1 2.221-1.361 5.74 5.74 0 0 1 2.57-.256c.864.11 1.694.417 2.43.897a7.83 7.83 0 0 0 4.257 1.262c1.505 0 2.98-.437 4.255-1.262a5.8 5.8 0 0 1 2.431-.895 5.75 5.75 0 0 1 2.568.257c.828.28 1.586.743 2.22 1.36a6.1 6.1 0 0 1 1.45 2.205 8.3 8.3 0 0 0 2.728 3.614 7.9 7.9 0 0 0 4.163 1.577 5.8 5.8 0 0 1 2.465.753 6 6 0 0 1 1.923 1.761 6.3 6.3 0 0 1 1.04 2.471 6.4 6.4 0 0 1-.073 2.693 8.66 8.66 0 0 0 .165 4.584 8.4 8.4 0 0 0 2.473 3.809 6.2 6.2 0 0 1 1.571 2.13 6.38 6.38 0 0 1-.008 5.23 6.2 6.2 0 0 1-1.578 2.125" />
                                    <path
                                        d="M32.093 10.856a20.17 20.17 0 0 0-11.47 3.596c-3.395 2.344-6.04 5.676-7.603 9.575a22 22 0 0 0-1.175 12.328c.797 4.138 2.763 7.94 5.65 10.924s6.566 5.016 10.57 5.84c4.006.822 8.156.4 11.929-1.215s6.997-4.35 9.265-7.858a21.85 21.85 0 0 0 3.48-11.854c-.007-5.657-2.184-11.08-6.054-15.08s-9.118-6.25-14.592-6.256m0 40.538a18.16 18.16 0 0 1-10.323-3.236c-3.055-2.11-5.436-5.109-6.843-8.617a19.8 19.8 0 0 1-1.057-11.095c.717-3.725 2.486-7.147 5.085-9.832s5.91-4.514 9.514-5.256c3.604-.74 7.34-.36 10.735 1.093 3.395 1.454 6.297 3.915 8.339 7.073a19.66 19.66 0 0 1 3.131 10.668c-.005 5.091-1.965 9.972-5.448 13.572s-8.206 5.625-13.133 5.63" />
                                </svg>
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
                                <svg width="70" height="70" viewBox="0 0 70 70" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                    <path
                                        d="M70 51.201V36.025H16.27V16.338h8.75v-8.75h28.574v15.45H30.383l-10.8 5.4 10.8 5.4h36.199v-10.8H55.645v-17.5H23.638l-9.42 9.282v21.205H0v15.176h14.219v13.262h41.426v-9.844h-2.051v7.793H16.27v-11.21zM29.531 31.085 24.1 28.369l5.432-2.716zm24.063.702H31.582v-2.324h22.012zm0-4.375H31.582v-2.324h22.012zm6.426-2.324h4.511v6.7H60.02zm-4.376 0h2.325v6.7h-2.325zM22.97 8.97v5.317h-5.181zM2.05 38.076h3.418v1.23h2.05v-1.23h2.325v3.418h2.05v-3.418h2.325v1.23h2.05v-1.23h2.325v3.418h2.05v-3.418h2.325v1.23h2.05v-1.23h2.325v3.418h2.05v-3.418h2.325v1.23h2.05v-1.23h2.325v3.418h2.05v-3.418h2.325v1.23h2.05v-1.23h2.325v3.418h2.05v-3.418h2.325v1.23h2.05v-1.23h2.325v3.418h2.05v-3.418h2.325v1.23h2.05v-1.23h2.325v3.418h2.05v-3.418h3.555v6.7H2.051zm0 11.074v-2.324h65.898v2.324z" />
                                    <path d="M63.3 28.37h-2.05v2.187h2.05z" />
                                </svg>
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
                                <svg width="70" height="70" viewBox="0 0 70 70" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.285 58.79c-4.512 0-8.203-3.83-8.203-8.204 0-4.512 3.691-8.203 8.203-8.203s8.203 3.691 8.203 8.203-3.691 8.203-8.203 8.203m0-14.493c-3.418 0-6.152 2.871-6.152 6.152-.137 3.555 2.598 6.29 6.152 6.29a6.127 6.127 0 0 0 6.153-6.153c0-3.418-2.735-6.29-6.153-6.29" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M25.566 70h-6.699c-.547 0-.957-.41-.957-1.094v-3.418c-1.094-.273-2.187-.82-3.144-1.367l-2.598 2.461c-.41.41-.957.41-1.367 0l-4.785-4.785c-.41-.274-.41-.957 0-1.367l2.46-2.461c-.546-1.094-.956-2.051-1.23-3.145H3.828c-.547 0-1.094-.547-1.094-1.093v-6.563c0-.547.547-1.094 1.094-1.094h3.418c.41-.957.82-2.05 1.367-3.008L6.016 40.47c-.41-.41-.41-.957 0-1.367l4.785-4.786c.41-.41 1.094-.41 1.504 0l2.46 2.461c.958-.547 2.051-.957 3.145-1.23v-3.555c0-.547.41-.957 1.094-.957h6.7c.546 0 .956.41.956.957v3.555c1.094.273 2.188.684 3.145 1.23l2.46-2.46c.41-.41 1.094-.41 1.505 0l4.785 4.785c.41.41.41.957 0 1.367l-2.598 2.597c.547.957.957 2.051 1.23 3.145h3.555c.547 0 1.094.41 1.094.957v6.7c0 .546-.547 1.093-1.094 1.093h-3.554c-.274 1.094-.684 2.05-1.231 3.145l2.461 2.46c.41.41.41.957 0 1.368l-4.785 4.785c-.41.41-.957.41-1.367 0l-2.598-2.461c-.957.547-2.05.957-3.145 1.367v3.418c0 .547-.41.957-.957.957m-5.742-2.05h4.785v-3.282c0-.41.274-.82.82-.957a11.1 11.1 0 0 0 3.966-1.64c.41-.274.82-.137 1.23.136l2.324 2.324 3.418-3.418-2.324-2.324c-.41-.273-.41-.82-.137-1.23.684-1.23 1.367-2.598 1.64-3.965.138-.41.411-.82.958-.82h3.281v-4.649h-3.281c-.547 0-.82-.41-.957-.82-.274-1.367-.957-2.735-1.64-3.965-.274-.41-.274-.957.136-1.23l2.324-2.325-3.418-3.418-2.324 2.324c-.41.41-.82.41-1.23.137a11.1 11.1 0 0 0-3.965-1.64c-.547 0-.82-.41-.82-.82v-3.282h-4.786v3.281c0 .41-.273.82-.683.957-1.368.274-2.735.957-3.965 1.64-.41.274-.957.274-1.367 0l-2.325-2.46-3.28 3.418 2.323 2.324c.274.41.41.82.137 1.23-.82 1.231-1.367 2.598-1.777 3.965-.137.547-.547.82-.957.82H4.648v4.65h3.418c.41 0 .82.41.957.82.41 1.367.957 2.734 1.641 3.964.274.41.137.957-.137 1.23L8.203 61.25l3.418 3.418 2.324-2.324c.274-.41.82-.41 1.23-.137a11.1 11.1 0 0 0 3.966 1.64c.41.137.82.547.82.958v3.144zM54.414 47.852c-3.145 0-5.742-2.461-5.742-5.606s2.598-5.605 5.742-5.605 5.605 2.46 5.605 5.605c-.136 3.145-2.597 5.606-5.605 5.606m0-9.297c-2.05 0-3.691 1.777-3.691 3.691 0 2.05 1.64 3.691 3.691 3.691 1.914 0 3.555-1.64 3.555-3.69 0-2.052-1.64-3.692-3.555-3.692" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M56.465 55.098h-4.238c-.547 0-1.094-.41-1.094-.957V52.09a5 5 0 0 1-1.504-.684l-1.504 1.367c-.137.137-.41.274-.684.274-.273 0-.547-.137-.683-.274l-3.008-3.007a1.073 1.073 0 0 1 0-1.504l1.504-1.367c-.41-.547-.547-1.094-.684-1.641h-2.05a.935.935 0 0 1-.958-.957v-4.375c0-.547.41-.957.958-.957h2.05c.137-.547.41-1.094.684-1.64L43.75 35.82c-.41-.273-.41-.957 0-1.367l3.008-3.008c.136-.273.547-.41.683-.41.274 0 .547.137.684.41l1.504 1.367c.41-.273.957-.41 1.504-.683v-2.05c0-.548.547-.958 1.094-.958h4.238c.683 0 1.094.41 1.094.957v2.05c.547.138 1.093.411 1.64.684l1.367-1.503c.137-.137.41-.274.684-.274.273 0 .547.137.684.274l3.007 3.144c.41.41.41.957 0 1.367l-1.367 1.367c.274.547.41 1.094.684 1.641h1.914c.547 0 1.094.41 1.094 1.094v4.238c0 .547-.547 1.094-1.094 1.094h-1.914c-.274.547-.41 1.094-.684 1.504l1.367 1.504c.41.41.41.957 0 1.367l-3.007 3.144c-.137.137-.41.274-.684.274-.273 0-.547-.137-.684-.274L59.2 51.27c-.547.274-1.093.547-1.64.684v2.05c0 .684-.547 1.095-1.094 1.095m-3.281-1.914h2.324v-1.778c0-.547.273-.82.683-.957.957-.273 1.778-.547 2.461-1.093.41-.274.957-.137 1.23.136l1.368 1.23 1.64-1.64-1.23-1.23c-.41-.41-.41-.82-.273-1.23.547-.821.957-1.642 1.093-2.462.137-.41.547-.82.958-.82h1.777v-2.324h-1.778c-.41 0-.82-.274-.956-.684-.274-.82-.547-1.777-1.094-2.46-.137-.411-.137-.958.273-1.231l1.23-1.23-1.64-1.642L59.883 35c-.274.41-.82.41-1.23.137-.684-.41-1.505-.82-2.462-.957-.41-.137-.683-.547-.683-1.094v-1.64h-2.324v1.64c0 .547-.274.957-.82 1.094-.821.136-1.641.547-2.325.957-.41.273-.957.136-1.367-.137l-1.23-1.23-1.641 1.64 1.23 1.23c.41.274.41.82.274 1.231-.547.684-.82 1.64-1.094 2.461 0 .41-.41.684-.957.684h-1.777v2.324h1.777c.547 0 .957.41.957.82.273.82.547 1.64 1.094 2.598.136.41.136.82-.274 1.094l-1.23 1.367 1.64 1.64 1.23-1.367c.411-.273.958-.273 1.368-.136.684.546 1.504.82 2.324 1.093.547.137.82.41.82.957zM37.871 23.242c-3.828 0-6.973-3.144-6.973-7.11 0-3.827 3.145-6.972 6.973-6.972s6.973 3.145 6.973 6.973c0 3.965-3.145 7.11-6.973 7.11m0-12.031c-2.734 0-5.059 2.187-5.059 4.922S35 21.19 37.873 21.19c2.733 0 4.921-2.187 4.921-5.058a4.9 4.9 0 0 0-4.922-4.922" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M40.606 32.402H35a.934.934 0 0 1-.957-.957v-2.734c-.82-.273-1.64-.684-2.461-1.094l-1.914 2.051c-.41.41-.957.41-1.367 0l-3.828-3.828a1.073 1.073 0 0 1 0-1.504l1.914-1.914c-.41-.82-.684-1.64-.957-2.461h-2.871a.934.934 0 0 1-.957-.957v-5.606c0-.546.41-.957.957-.957h2.87c.137-.82.548-1.64.958-2.46l-1.914-1.915a1.073 1.073 0 0 1 0-1.504L28.3 2.735a.75.75 0 0 1 .683-.41c.274 0 .547.137.684.41l1.914 1.914c.82-.273 1.64-.683 2.461-.957V.957c0-.547.547-.957 1.094-.957h5.468c.547 0 1.094.41 1.094.957v2.734c.82.274 1.64.684 2.324 1.094l1.914-2.05c.274-.137.547-.274.684-.274.273 0 .547.137.684.273L51.27 6.7c.41.41.41.957 0 1.367L49.355 9.98c.274.82.684 1.641.958 2.461h2.734c.684 0 1.094.41 1.094.957v5.606c0 .547-.41.957-1.094.957h-2.734c-.274.82-.547 1.64-.958 2.46l1.915 1.915c.41.41.41 1.094 0 1.504l-3.965 3.828c-.137.137-.41.273-.684.273-.273 0-.41-.136-.684-.273l-1.914-2.05c-.82.546-1.64.82-2.46 1.093v2.734c0 .684-.41.957-.958.957m-4.512-1.914h3.554v-2.597c0-.41.274-.82.82-.957a15.3 15.3 0 0 0 3.282-1.368c.41-.273.82-.136 1.094.137l1.914 1.914 2.46-2.597-1.913-1.778c-.274-.41-.41-.957 0-1.23.547-1.094.957-2.188 1.367-3.282 0-.41.41-.82.957-.82h2.46v-3.555h-2.46c-.547 0-.957-.273-.957-.683-.41-1.23-.82-2.324-1.367-3.281-.274-.41-.274-.957 0-1.23l1.914-1.915-2.598-2.46-1.777 1.777c-.274.41-.82.41-1.23.273-.958-.684-2.051-1.094-3.145-1.367-.547-.137-.82-.547-.82-1.094v-2.46h-3.555v2.46c0 .547-.41.957-.82 1.094-1.094.273-2.188.683-3.282 1.367-.41.137-.82.137-1.23-.274l-1.778-1.777-2.46 2.461L28.3 9.16c.41.274.41.684.273 1.094-.683 1.23-1.23 2.324-1.367 3.418-.137.41-.547.683-1.094.683h-2.46v3.692h2.46c.547 0 .957.273 1.094.683.137 1.094.684 2.188 1.367 3.282.137.41.137.957-.137 1.23l-1.914 1.777 2.598 2.598 1.777-1.914c.41-.273.82-.41 1.23-.137 1.095.684 2.188 1.094 3.282 1.368.41.136.82.546.82.957v2.597z" />
                                </svg>
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
<section class="section section-how bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="section-title text-md-center">
                <h2>Как заказать</h2>
                <svg width="62" height="14" viewBox="0 0 62 14" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon mb-5">
                    <rect x="48" width="14" height="14" rx="3" />
                    <rect x="24" width="14" height="14" rx="3" />
                    <rect width="14" height="14" rx="3" />
                </svg>
            </div>

            <div class="row justify-content-around">
                <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="row align-items-center">
                        <div class="col-4 text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/1.svg" class="img-fluid" />
                        </div>
                        <div class="col-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" viewBox="0 0 70 70" class="svg-icon">
                                <path
                                    d="M58.288 45.4a1.06 1.06 0 0 1-1.054-1.055V23.394a1.054 1.054 0 0 1 1.054-1.054 11.534 11.534 0 0 1 0 23.06m1.054-20.901v18.699a9.426 9.426 0 0 0 0-18.7M12.356 45.4a11.533 11.533 0 1 1 0-23.06 1.054 1.054 0 0 1 1.054 1.054v20.951a1.063 1.063 0 0 1-1.054 1.054m-1.054-20.901a9.426 9.426 0 0 0 0 18.699zM38.67 65.799h-6.697a3.934 3.934 0 0 1-3.8-5.48 3.935 3.935 0 0 1 3.8-2.382h6.698a3.935 3.935 0 0 1 0 7.862m-6.697-5.737a1.827 1.827 0 1 0 0 3.655h6.698a1.827 1.827 0 0 0 0-3.655z" />
                                <path
                                    d="M8.064 25.366a.9.9 0 0 1-.332-.06 1.054 1.054 0 0 1-.671-1.326 29.749 29.749 0 0 1 56.514 0 1.054 1.054 0 0 1-1.998.655 27.633 27.633 0 0 0-52.519 0 1.05 1.05 0 0 1-.994.73M41.68 62.22a1.054 1.054 0 0 1-.23-2.073 27.57 27.57 0 0 0 19.584-16.872 1.056 1.056 0 0 1 1.963.773 29.67 29.67 0 0 1-21.122 18.147q-.097.022-.195.026" />
                                <path
                                    d="M35.322 52.939a19.736 19.736 0 1 1 19.736-19.736 19.76 19.76 0 0 1-19.736 19.736m0-37.399A17.637 17.637 0 1 0 52.95 33.203a17.645 17.645 0 0 0-17.628-17.629z" />
                                <path
                                    d="M24.842 35.49a2.091 2.091 0 1 1 0-4.184 2.091 2.091 0 0 1 0 4.183M45.241 35.49a2.09 2.09 0 1 1 0-4.182 2.09 2.09 0 0 1 0 4.181M35.322 45.357a6.044 6.044 0 0 1-6.035-6.035 1.052 1.052 0 0 1 1.828-.805 1.05 1.05 0 0 1 .272.805 3.935 3.935 0 1 0 7.87 0 1.054 1.054 0 0 1 2.108 0 6.05 6.05 0 0 1-6.043 6.035M40.311 29.667a1 1 0 0 1-.272 0 29 29 0 0 1-7.938-3.952c-.34-.221-.663-.434-.97-.62a2.74 2.74 0 0 0 0 1.759 1.054 1.054 0 0 1-.934 1.7c-4.522-.408-7.446-3.264-9.707-6.01a1.078 1.078 0 0 1 .486-1.727 1.08 1.08 0 0 1 1.155.325c2.37 2.873 4.428 4.403 6.8 5.006q.015-.901.195-1.785c.068-.39.136-.748.161-1.062a1.04 1.04 0 0 1 .527-.85 1.05 1.05 0 0 1 .978 0q1.265.664 2.447 1.47a34.6 34.6 0 0 0 5.483 3.06v-.093a8.5 8.5 0 0 1-.697-2.941 1.055 1.055 0 0 1 1.81-.79c2.474 2.626 8.05 3.153 11.9 1.13a1.055 1.055 0 1 1 .994 1.861 13.96 13.96 0 0 1-11.9.28c.253.644.444 1.31.57 1.99a1.054 1.054 0 0 1-.672 1.19 1 1 0 0 1-.416.06" />
                            </svg>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" viewBox="0 0 70 70" class="svg-icon">
                                <path
                                    d="M63.094 22.094h-3.051a11.01 11.01 0 0 0-9.95-9.95v-7.05a1 1 0 0 0-1-1h-44a1 1 0 0 0-1 1v60a1 1 0 0 0 1 1h58a3 3 0 0 0 3-3v-38a3 3 0 0 0-3-3m-14 12a11 11 0 0 0 9.786-6h1.214v8h-22v-8h1.214a11 11 0 0 0 9.786 6m9-11a9 9 0 1 1-9-9 9.01 9.01 0 0 1 9 9m-52-17h42v6.05a11.01 11.01 0 0 0-9.95 9.95h-3.05a3 3 0 0 0-2.816 2h-8.184v2h8v10h-8v2h8v2h-8v2h8v10h-8v2h8v2h-8v2h8v5c.003.341.065.68.184 1H6.094zm58 57a1 1 0 0 1-1 1h-28a1 1 0 0 1-1-1v-38a1 1 0 0 1 1-1h3.05q.095 1.017.376 2h-1.426a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h24a1 1 0 0 0 1-1v-10a1 1 0 0 0-1-1h-1.426q.28-.983.375-2h3.05a1 1 0 0 1 1 1z" />
                                <path
                                    d="M41.094 40.094h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1m-1 4h-2v-2h2zM61.094 40.094h-8a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1m-1 4h-6v-2h6zM41.094 48.094h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1m-1 4h-2v-2h2zM41.094 56.094h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1m-1 4h-2v-2h2zM49.094 40.094h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1m-1 4h-2v-2h2zM49.094 48.094h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1m-1 4h-2v-2h2zM49.094 56.094h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1m-1 4h-2v-2h2zM61.094 48.094h-8a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-12a1 1 0 0 0-1-1m-1 12h-6v-10h6zM15.094 16.094a7 7 0 1 0 7 7 7.01 7.01 0 0 0-7-7m0 12a5 5 0 1 1 5-5 5.006 5.006 0 0 1-5 5M24.094 20.094h9v2h-9zM14.094 14.094h26a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-26a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1m1-4h24v2h-24z" />
                                <path
                                    d="M14.094 23.68 12.8 22.387 11.387 23.8l2 2a1 1 0 0 0 1.414 0l4-4-1.414-1.414zM15.094 32.094a7 7 0 1 0 7 7 7.01 7.01 0 0 0-7-7m0 12a5 5 0 1 1 5-5 5.006 5.006 0 0 1-5 5" />
                                <path
                                    d="M14.094 39.68 12.8 38.387 11.387 39.8l2 2a1 1 0 0 0 1.414 0l4-4-1.414-1.414zM15.094 48.094a7 7 0 1 0 7 7 7.01 7.01 0 0 0-7-7m0 12a5 5 0 1 1 5-5 5.006 5.006 0 0 1-5 5" />
                                <path
                                    d="M14.094 55.68 12.8 54.387 11.387 55.8l2 2a1 1 0 0 0 1.414 0l4-4-1.414-1.414zM46.523 17.03a3.99 3.99 0 0 0-1.43 3.064h2a2 2 0 0 1 2.372-1.967 2.03 2.03 0 0 1 1.6 1.6 1.99 1.99 0 0 1-.61 1.839 6.9 6.9 0 0 0-2.361 5.028v.5h2v-.5a4.91 4.91 0 0 1 1.717-3.568 4 4 0 0 0-5.288-6zM48.094 28.094h2v2h-2z" />
                            </svg>
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
                            <svg width="70" height="70" viewBox="0 0 70 70" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                <path
                                    d="M43.477 4.824H4v60h48.87v-50.69zm.64 3.702 5.018 4.972h-5.017zm6.565 54.129H6.188V6.992H41.93v8.675h8.753zM61.259 12.486l-4.741 11.277V64.1H66V23.763zm2.553 49.446h-5.106v-5.06h5.106zm0-7.23h-5.106V27.957h5.106zm0-28.915h-5.106v-1.59l2.553-6.073 2.553 6.073z" />
                                <path
                                    d="M46.67 53.257H28.435v2.169H46.67zM43.527 47.89c-.59.748-.864 1.03-1.42 1.03-.554 0-.83-.282-1.419-1.03-.62-.785-1.47-1.862-3.143-1.862s-2.521 1.077-3.14 1.863c-.588.747-.863 1.029-1.416 1.029s-.826-.282-1.414-1.029c-.62-.786-1.467-1.863-3.14-1.863v2.169c.553 0 .827.282 1.415 1.028.619.787 1.467 1.864 3.14 1.864 1.672 0 2.52-1.077 3.14-1.863.587-.747.862-1.029 1.414-1.029.556 0 .83.282 1.42 1.03.62.786 1.47 1.862 3.143 1.862 1.674 0 2.524-1.076 3.144-1.862.589-.748.864-1.03 1.42-1.03v-2.169c-1.675 0-2.524 1.077-3.144 1.863M32.082 57.594h-3.647v2.169h3.647zM37.918 57.594H34.27v2.169h3.648zM46.67 57.594h-3.647v2.169h3.647zM24.789 10.606H10.2v2.17H24.79zM29.894 22.173H10.2v2.169h19.694zM19.683 46.028H10.2v2.169h9.483zM19.683 51.812H10.2v2.168h9.483zM46.67 27.957H10.2v2.168h36.47zM46.67 33.74H10.2v2.168h36.47zM46.67 39.523H13.848v2.168h32.824zM13.847 14.944H10.2v2.17h3.647zM19.682 14.944h-3.647v2.17h3.647z" />
                            </svg>
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
                            <svg width="70" height="70" viewBox="0 0 70 70" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                <path
                                    d="M22.58 48.01a4.525 4.525 0 0 0 0 9.05 4.525 4.525 0 0 0 0-9.05m0 6.788a2.263 2.263 0 0 1 0-4.525 2.263 2.263 0 0 1 0 4.525M49.677 48.01a4.525 4.525 0 0 0 0 9.05 4.525 4.525 0 0 0 0-9.05m0 6.788a2.263 2.263 0 0 1 0-4.525 2.263 2.263 0 0 1 0 4.525" />
                                <path
                                    d="M67.742 36.905v-9.072a5.66 5.66 0 0 0-.883-3.037L60.327 14.51a3.37 3.37 0 0 0-2.857-1.572h-7.793V8.414h-37.01l-1.694 6.788h3.491l-.393 2.263H4.516v2.262h9.163l-.787 4.525H4.516v2.263H12.5l-.785 4.525H4.516v2.263h6.806l-.982 5.657H8.036l-1.13 9.05h-.132a2.263 2.263 0 0 0-2.258 2.263v4.525a2.263 2.263 0 0 0 2.258 2.262h7.996c1.565 2.701 4.475 4.526 7.81 4.526s6.247-1.825 7.811-4.526h11.477c1.565 2.701 4.475 4.526 7.81 4.526s6.247-1.825 7.811-4.526h8.91l3.577-16.732.024-.237a3.39 3.39 0 0 0-2.258-3.186M57.47 15.202c.387 0 .744.196.952.524l6.532 10.286c.347.544.53 1.174.53 1.821v8.864H61.17l-.452 2.262H42.903V16.333c0-.624.507-1.131 1.13-1.131zm-43.04-4.525h32.99v2.262H13.864zm2.326 4.525h24.097a3.4 3.4 0 0 0-.208 1.131V38.96H12.633zm-6.727 26.02h50.239l-1.355 6.788h-1.426c-1.565-2.7-4.475-4.525-7.81-4.525s-6.247 1.824-7.811 4.525H30.39c-1.564-2.7-4.475-4.525-7.81-4.525s-6.246 1.824-7.811 4.525H9.181zM6.774 54.798v-4.525h7.071a9 9 0 0 0-.297 2.262c0 .783.11 1.538.297 2.263zm15.807 4.525c-3.736 0-6.775-3.044-6.775-6.788 0-3.743 3.039-6.788 6.775-6.788s6.774 3.045 6.774 6.788-3.038 6.788-6.774 6.788m8.735-4.525c.187-.725.297-1.48.297-2.263s-.11-1.537-.297-2.262h9.627a9 9 0 0 0-.298 2.262c0 .783.11 1.538.297 2.263zm18.361 4.525c-3.736 0-6.774-3.044-6.774-6.788 0-3.743 3.038-6.788 6.774-6.788s6.775 3.045 6.775 6.788-3.038 6.788-6.775 6.788m14.893-4.525h-6.159c.189-.725.299-1.48.299-2.263s-.11-1.537-.297-2.262h2.351l2.258-11.314h3.59c.59 0 1.076.454 1.126 1.032z" />
                                <path
                                    d="m63.226 27.322-6.149-9.857H45.161v14.707h18.065zm-2.258 2.587H47.419V19.728h8.407l5.142 8.243zM45.161 34.435h6.774v2.262h-6.774zM0 17.465h2.258v2.262H0zM0 24.252h2.258v2.263H0zM0 31.04h2.258v2.263H0z" />
                            </svg>
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
<section class="section section-faq py-5">
    <div class="container">
        <div class="section-title text-md-center">
            <h2>Частые вопросы</h2>
            <svg width="62" height="14" viewBox="0 0 62 14" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon mb-5">
                    <rect x="48" width="14" height="14" rx="3" />
                    <rect x="24" width="14" height="14" rx="3" />
                    <rect width="14" height="14" rx="3" />
                </svg>
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

<!-- Не нашли нужного товара? -->
<section class="section section-half bg-light py-5">
    <div class="d-flex flex-wrap half-bg">
        <!-- Левая часть с фоном -->
        <div class="left-part flex-grow-1"></div>

        <!-- Правая часть с картинкой (скрывается на мобилках) -->
        <div class="right-part d-none d-md-block">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gradient-order-section-bg-1.webp" alt="Изображение"
                class="img-cover" />
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-md-6 text-md-end">
                <h2 class="mb-1">Рассчитаем стоимость за 15 минут</h2>

                <p class="order-description mb-3">
                    Узнайте стоимость качественной кухни с учетом всех Ваших пожеланий и особенностей помещения.
                    Оставьте заявку
                    нажав на кнопку ниже или напишите нам в мессенджер.
                    Это бесплатно и ни к чему Вас не обязывает!
                </p>

                 <svg width="62" height="14" viewBox="0 0 62 14" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon mb-5">
                    <rect x="48" width="14" height="14" rx="3" />
                    <rect x="24" width="14" height="14" rx="3" />
                    <rect width="14" height="14" rx="3" />
                </svg>

                <br />

                <button type="button" class="btn btn-lg btn-corporate-color-1 mb-4" data-bs-toggle="modal"
                    data-bs-target="#callbackModal">
                    Расчитать стоимость
                </button>

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

            <div class="col-md-6 ps-4"></div>
        </div>
    </div>
</section>
<!-- /Не нашли нужного товара? -->

<?php include 'footer-1.php'; ?>