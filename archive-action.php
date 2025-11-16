<?php

/**
 * Template Name: Страница акций
 * Template Post Type: page
 */

include 'header.php';

// Получаем все акции
$args = array(
    'post_type' => 'action',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC'
);
$actions_query = new WP_Query($args);

/**
 * Генератор класса колонок в зависимости от общего количества и позиции элемента
 * 
 * @param int $total Общее количество элементов
 * @param int $index Текущий индекс элемента (начинается с 0)
 * @return string Классы Bootstrap колонок
 */
function get_column_class($total, $index)
{
    $class = 'col-12'; // Для мобильной версии всегда col-12

    // Определяем паттерн в зависимости от остатка деления на 6
    $pattern = $total % 6;

    switch ($pattern) {
        case 1: // 1, 7, 13, 19... - первые две col-6, остальные col-4
            if ($index < 2) {
                $class .= ' col-md-6';
                break;
            }
            $class .= ' col-md-4';
            break;

        case 2: // 2, 8, 14, 20... - первые две col-6, остальные col-4
            if ($index < 2) {
                $class .= ' col-md-6';
            } else {
                $class .= ' col-md-4';
            }
            break;

        case 3: // 3, 9, 15, 21... - все col-4
            $class .= ' col-md-4';
            break;

        case 4: // 4, 10, 16, 22... - все col-6
            $class .= ' col-md-6';
            break;

        case 5: // 5, 11, 17, 23... - первые две col-6, остальные col-4
            if ($index < 2) {
                $class .= ' col-md-6';
            } else {
                $class .= ' col-md-4';
            }
            break;

        case 0: // 6, 12, 18, 24... - все col-4
            $class .= ' col-md-4';
            break;
    }

    return $class;
}

$total_posts = $actions_query->post_count;
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
                        <a class="top-menu-tel pt-1 pb-0" style="font-size: 14px;" href="tel:89511014610">
                            8 (951) 101-46-10</a>
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
        <div class="container">
            <div class="row align-items-center home-section-height">
                <div class="col-xl-10 col-xxl-9">
                    <h1 class="home-title text-light">Акции</h1>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="actions-page-section bg-white">
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
                        Акции
                    </nav>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <?php if ($actions_query->have_posts()): ?>
                <?php
                $current_index = 0;
                while ($actions_query->have_posts()):
                    $actions_query->the_post();
                    $display_type = get_post_meta(get_the_ID(), '_action_display_type', true);
                    $display_type = empty($display_type) ? 'page' : $display_type;

                    // Получаем класс колонки для текущего элемента
                    $column_class = get_column_class($total_posts, $current_index);
                ?>

                    <div class="<?php echo esc_attr($column_class); ?> mb-4">
                        <?php if ($display_type === 'modal'): ?>
                            <!-- Кликабельная картинка для модального окна -->
                            <a href="#" data-bs-toggle="modal" data-bs-target="#actionModal"
                                data-action-title="<?php echo esc_attr(get_the_title()); ?>"
                                style="cursor: pointer;">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('full', array('class' => 'img-fluid rounded w-100')); ?>
                                <?php endif; ?>
                            </a>
                        <?php else: ?>
                            <!-- Обычная ссылка на страницу -->
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('full', array('class' => 'img-fluid rounded w-100')); ?>
                                <?php endif; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php
                    $current_index++;
                endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else: ?>
                <div class="col-12">
                    <p>Акции не найдены</p>
                </div>
            <?php endif; ?>
        </div>

    </div>
</section>

<!-- Action Modal -->
<div class="modal fade" id="actionModal" tabindex="-1" aria-labelledby="actionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/callback-mail.php"
            class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="actionModalLabel">Заявка на акцию</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <p><strong>Акция: <span id="modalActionTitle"></span></strong></p>
                        <p><small>Мы свяжемся с Вами в течение 10 минут и ответим на все вопросы! Для звонка введите
                                Ваше имя и телефон.</small></p>
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
                <input type="hidden" name="action_title" id="hiddenActionTitle" value="">
            </div>
            <div class="modal-footer">
                <button type="submit"
                    style="border-radius: 0.5rem; background-color: var(--corporate-color-1); border-color: var(--corporate-color-1);"
                    class="btn-lg btn btn-corporate-color-1 mx-auto">Жду звонка</button>
            </div>
        </form>
    </div>
</div>
<!-- /Action Modal -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var actionModal = document.getElementById('actionModal');
        if (actionModal) {
            actionModal.addEventListener('show.bs.modal', function(event) {
                var button = event.relatedTarget;
                var actionTitle = button.getAttribute('data-action-title');

                var modalTitle = actionModal.querySelector('#modalActionTitle');
                var hiddenInput = actionModal.querySelector('#hiddenActionTitle');

                modalTitle.textContent = actionTitle;
                hiddenInput.value = actionTitle;
            });
        }
    });
</script>

<?php include 'footer-1.php'; ?>