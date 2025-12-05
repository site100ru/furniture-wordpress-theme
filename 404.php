<?php

/**
 * Template Name: Главная с простой картинкой
 * Template Post Type: page
 */

include 'header.php';

?>

<!-- Header 2 -->
<header class="header-2">
    <!-- Top menu header -->
    <nav class="navbar navbar-expand-xl navbar-light bg-light d-none d-lg-block py-3 py-md-0" style="border-bottom: 1px solid #d7d7d7">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item me-3">
                        <a class="nav-link text-dark" href="#">
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
                    <li class="nav-item me-3">
                        <a class="nav-link text-dark" href="#">
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
                    <li class="nav-item me-3">
                        <a href="#" class="nav-link text-dark" data-bs-toggle="modal" data-bs-target="#callbackModal">
                            <div style="display: flex;">
                                <div class="nav-li-float-left">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                        <path
                                            d="M3.71 1.991q.522-.066.89.301a780 780 0 0 1 3.116 4.786q.153.598-.116 1.157a67 67 0 0 1-1.766 2.844 8.6 8.6 0 0 0 1.005 1.896 17.3 17.3 0 0 0 3.936 3.988q.989.713 2.135 1.145 1.278-.83 2.574-1.63.39-.231.83-.324.22-.023.44 0 .107.037.207.093a487 487 0 0 1 4.756 3.121q.246.281.254.66a1.7 1.7 0 0 1-.243.785 18.5 18.5 0 0 1-2.181 2.486 3.8 3.8 0 0 1-.924.624 6 6 0 0 1-.461.058 9.2 9.2 0 0 1-3.21-.659 19.2 19.2 0 0 1-4.316-2.45 38.3 38.3 0 0 1-7.907-8.036 19.7 19.7 0 0 1-2.054-3.7A9.3 9.3 0 0 1-.03 5.772q-.006-.343.173-.636.353-.527.785-.994Q2.024 2.987 3.34 2.119q.186-.075.37-.128" />
                                        <path
                                            d="M15.334.99q.068.856.045 1.737 2.232-.017 4.462.035 2.055.454 2.688 2.535.062.252.09.51.015 3.09.01 6.183H20.4q.005-2.895-.012-5.79-.06-.883-.88-1.123a127 127 0 0 0-4.128-.034q.01.869-.022 1.736a514 514 0 0 1-3.726-2.894z" />
                                    </svg>
                                </div>
                                <div class="nav-li-float-right">
                                    Обратный звонок
                                </div>
                                <div style="clear: both;"></div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link text-dark" href="#" data-bs-toggle="modal" data-bs-target="#calculatePriceWithDownloadModal">
                            <div style="display: flex;">
                                <div class="nav-li-float-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24" class="svg-icon">
                                        <path
                                            d="M18.462 0H5.539a2.77 2.77 0 0 0-2.77 2.77v18.46A2.77 2.77 0 0 0 5.54 24h12.923a2.77 2.77 0 0 0 2.769-2.77V2.77A2.77 2.77 0 0 0 18.46 0m.923 7.385a.925.925 0 0 1-.923.923H5.539a.925.925 0 0 1-.924-.923V2.769c0-.508.415-.923.924-.923h12.923c.508 0 .923.415.923.923zM8.308 12a.925.925 0 0 1-.923.923H5.539A.925.925 0 0 1 4.615 12v-.923c0-.509.415-.923.924-.923h1.846c.508 0 .923.414.923.923zm5.538 0a.925.925 0 0 1-.923.923h-1.846a.925.925 0 0 1-.923-.923v-.923c0-.509.414-.923.923-.923h1.846c.509 0 .923.414.923.923zm5.539 0a.925.925 0 0 1-.923.923h-1.846a.925.925 0 0 1-.924-.923v-.923c0-.509.415-.923.924-.923h1.846c.508 0 .923.414.923.923zM8.308 16.615a.925.925 0 0 1-.923.924H5.539a.925.925 0 0 1-.924-.924v-.923c0-.508.415-.923.924-.923h1.846c.508 0 .923.415.923.923zm5.538 0a.925.925 0 0 1-.923.924h-1.846a.925.925 0 0 1-.923-.924v-.923c0-.508.414-.923.923-.923h1.846c.509 0 .923.415.923.923zm5.539 0a.925.925 0 0 1-.923.924h-1.846a.925.925 0 0 1-.924-.924v-.923c0-.508.415-.923.924-.923h1.846c.508 0 .923.415.923.923zM8.308 21.231a.925.925 0 0 1-.923.923H5.539a.925.925 0 0 1-.924-.923v-.923c0-.509.415-.923.924-.923h1.846c.508 0 .923.414.923.923zm5.538 0a.924.924 0 0 1-.923.923h-1.846a.925.925 0 0 1-.923-.923v-.923c0-.509.414-.923.923-.923h1.846c.509 0 .923.414.923.923zm5.539 0a.925.925 0 0 1-.923.923h-1.846a.925.925 0 0 1-.924-.923v-.923c0-.509.415-.923.924-.923h1.846c.508 0 .923.414.923.923z" />
                                        <path
                                            d="M17.539 3.692v2.77h-1.847v-2.77zm0-.923h-1.847a.925.925 0 0 0-.923.923v2.77c0 .508.415.922.923.922h1.846a.925.925 0 0 0 .924-.923V3.692a.925.925 0 0 0-.924-.923" />
                                    </svg>
                                </div>
                                <div class="nav-li-float-right">
                                    Рассчитать стоимость
                                </div>
                                <div style="clear: both;"></div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="top-menu-tel nav-link text-dark" href="tel:89511014610">
                            <div style="display: flex;">
                                <div class="nav-li-float-left">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                        <path
                                            d="M4 3c0-1.655 1.305-3 2.91-3h10.18C18.696 0 20 1.345 20 3v18c0 1.655-1.305 3-2.91 3H6.91C5.304 24 4 22.655 4 21zm5.818 18c0 .413.328.75.728.75h2.909c.4 0 .727-.337.727-.75a.74.74 0 0 0-.728-.75h-2.908c-.4 0-.728.337-.728.75m7.273-18H6.909v15h10.182z" />
                                    </svg>
                                </div>
                                <div class="nav-li-float-right">
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
    <!-- /Top menu header  -->

    <!-- Menu header -->
    <nav class="navbar navbar-expand-xl navbar-light bg-white shadow py-2 py-md-0">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/logo-dark.svg">
            </a>
            <div class="d-lg-none">
                <a class="top-menu-tel pt-1 pb-0" href="tel:89511014610">8 (800) 880-80-88</a>
                <div style="font-size: 10px; font-family: Gilroy-Light; text-transform: none;">
                    <svg width="12" height="12" style="position: relative; top: -1px;" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon me-1">
                        <path
                            d="M21.75 12a9.75 9.75 0 1 1-19.5 0 9.75 9.75 0 0 1 19.5 0M0 12a12 12 0 1 0 24 0 12 12 0 0 0-24 0m10.875-6.375V12c0 .375.188.727.502.938l4.5 3a1.12 1.12 0 0 0 1.56-.315 1.12 1.12 0 0 0-.314-1.56L13.125 11.4V5.625c0-.623-.502-1.125-1.125-1.125s-1.125.502-1.125 1.125" />
                    </svg>Пн-Сб:&nbsp;с
                    10.00-19.00<br>Вс:&nbsp;с 10.00-17.00

                </div>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'navbarSupportedContent2',
                    'container' => false,
                    'menu_class' => '',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '
                            <ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-lg-0 %2$s">%3$s
                                <!-- Mobile menu -->
                                <li class="nav-item d-lg-none">
                                    <div style="font-size: 12px; font-family: HelveticaNeueCyr-Light; text-transform: none;">
                                        <svg width="10" height="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon me-1">
                                            <path
                                                d="M13.11 23.46C15.517 20.444 21 13.13 21 9.024 21 4.042 16.969 0 12 0S3 4.042 3 9.023c0 4.108 5.484 11.42 7.89 14.438.576.719 1.644.719 2.22 0M12 6.017c.796 0 1.559.316 2.121.88a3.01 3.01 0 0 1 0 4.254 2.996 2.996 0 0 1-4.242 0 3.01 3.01 0 0 1 0-4.253A3 3 0 0 1 12 6.016" />
                                        </svg>
                                        <span>гор. Рязань ул. Чапаева, 56</span>
                                    </div>
                                    <a class="nav-link top-menu-tel pt-1 pb-1" href="tel:89511014610">8 (800) 880-80-88</a>
                                    <div class="mb-2" style="font-size: 12px; font-family: HelveticaNeueCyr-Light; text-transform: none;">
                                        <svg width="10" height="10" style="position: relative; top: 2px;" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon me-1 mb-2">
                                <path
                                    d="M21.75 12a9.75 9.75 0 1 1-19.5 0 9.75 9.75 0 0 1 19.5 0M0 12a12 12 0 1 0 24 0 12 12 0 0 0-24 0m10.875-6.375V12c0 .375.188.727.502.938l4.5 3a1.12 1.12 0 0 0 1.56-.315 1.12 1.12 0 0 0-.314-1.56L13.125 11.4V5.625c0-.623-.502-1.125-1.125-1.125s-1.125.502-1.125 1.125" />
                            </svg>Пн-Сб: с 10.00-19.00, Вс: с 10.00-17.00
                                        </div>
                                </li>
                                <li class="nav-item d-lg-none pb-4">
                                    <a class="ico-button pe-2" href="https://wa.me/79361385058?web=1&app_absent=1">
                                        <img src="' . get_stylesheet_directory_uri() . '/img/ico/whatsapp-ico.svg">
                                    </a>
                                    <a class="ico-button pe-0" href="https://t.me/+79361385058">
                                        <img src="' . get_stylesheet_directory_uri() . '/img/ico/telegram-ico.svg">
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

    <!-- /Menu header -->
</header><!-- /header-2 -->

<section style="height: 80vh" class="d-flex align-items-center error-page">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 order-2 order-lg-1">
                <h1>Вы перешли на страницу которой не существует</h1>
                <h2>Возможно она была удалена</h2>
                <a href="/" class="btn btn-lg btn-corporate-color-1 mt-3 mt-lg-5">Перейти на главную</a>
            </div>

            <div class="col-8 col-md-6 col-lg-4 mb-3 mb-lg-0 order-1 order-lg-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 388 142">
                    <path fill="#A5A5A5"
                        d="M120 77v32.8h-18.2V140H61.2v-30.2H0V73.4L62.2 1.6h39.6V77H120Zm-57.4.2V50.8l.6-12.8-33 39.8c6-.4 10.133-.6 12.4-.6h20ZM193.394 0c12.8 0 23.733 3.4 32.8 10.2 9.2 6.8 15.866 15.4 20 25.8 4.133 10.4 6.2 21.933 6.2 34.6 0 12.933-2.067 24.667-6.2 35.2-4 10.533-10.6 19.2-19.8 26-9.067 6.667-20.067 10-33 10-19.067 0-33.734-6.867-44-20.6-10.267-13.867-15.4-30.667-15.4-50.4 0-21.333 5.4-38.467 16.2-51.4C161.127 6.467 175.527 0 193.394 0Zm0 31.4c-4 0-7.4 1-10.2 3-2.8 1.867-4.934 4.133-6.4 6.8-1.467 2.667-2.6 6.133-3.4 10.4-.8 4.133-1.267 7.667-1.4 10.6-.134 2.8-.2 6.2-.2 10.2 0 25.333 7.2 38 21.6 38 14.266 0 21.4-13.267 21.4-39.8 0-13.333-1.734-23.2-5.2-29.6-3.467-6.4-8.867-9.6-16.2-9.6ZM387.188 77v32.8h-18.2V140h-40.6v-30.2h-61.2V73.4l62.2-71.8h39.6V77h18.2Zm-57.4.2V50.8l.6-12.8-33 39.8c6-.4 10.133-.6 12.4-.6h20Z" />
                </svg>
            </div>
        </div>
    </div>
</section>





<?php include 'footer-1.php'; ?>