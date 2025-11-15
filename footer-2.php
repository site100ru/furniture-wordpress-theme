<?php // Footer for prilipalo() function 
?>


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
                    <svg width="24" height="24" style="position: relative; bottom: 1px;" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon me-2">
                        <path
                            d="M4 3c0-1.655 1.305-3 2.91-3h10.18C18.696 0 20 1.345 20 3v18c0 1.655-1.305 3-2.91 3H6.91C5.304 24 4 22.655 4 21zm5.818 18c0 .413.328.75.728.75h2.909c.4 0 .727-.337.727-.75a.74.74 0 0 0-.728-.75h-2.908c-.4 0-.728.337-.728.75m7.273-18H6.909v15h10.182z" />
                    </svg>
                    8 <span>(951)</span> 101-46-10
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
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                        <path
                                            d="M13.11 23.46C15.517 20.444 21 13.13 21 9.024 21 4.042 16.969 0 12 0S3 4.042 3 9.023c0 4.108 5.484 11.42 7.89 14.438.576.719 1.644.719 2.22 0M12 6.017c.796 0 1.559.316 2.121.88a3.01 3.01 0 0 1 0 4.254 2.996 2.996 0 0 1-4.242 0 3.01 3.01 0 0 1 0-4.253A3 3 0 0 1 12 6.016" />
                                    </svg>
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
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon pt-1">
                                        <path
                                            d="M21.75 12a9.75 9.75 0 1 1-19.5 0 9.75 9.75 0 0 1 19.5 0M0 12a12 12 0 1 0 24 0 12 12 0 0 0-24 0m10.875-6.375V12c0 .375.188.727.502.938l4.5 3a1.12 1.12 0 0 0 1.56-.315 1.12 1.12 0 0 0-.314-1.56L13.125 11.4V5.625c0-.623-.502-1.125-1.125-1.125s-1.125.502-1.125 1.125" />
                                    </svg>
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
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                        <path
                                            d="M12 3c-4.969 0-9 4.031-9 9s4.031 9 9 9c.83 0 1.5.67 1.5 1.5S12.83 24 12 24C5.372 24 0 18.628 0 12S5.372 0 12 0s12 5.372 12 12v1.5a4.501 4.501 0 0 1-7.931 2.91A6 6 0 1 1 12 6c1.308 0 2.517.417 3.502 1.13A1.498 1.498 0 0 1 18 8.25v5.25c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5V12c0-4.969-4.031-9-9-9m3 9a3 3 0 1 0-6 0 3 3 0 0 0 6 0" />
                                    </svg>
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
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                        <path
                                            d="M3.71 1.991q.522-.066.89.301a780 780 0 0 1 3.116 4.786q.153.598-.116 1.157a67 67 0 0 1-1.766 2.844 8.6 8.6 0 0 0 1.005 1.896 17.3 17.3 0 0 0 3.936 3.988q.989.713 2.135 1.145 1.278-.83 2.574-1.63.39-.231.83-.324.22-.023.44 0 .107.037.207.093a487 487 0 0 1 4.756 3.121q.246.281.254.66a1.7 1.7 0 0 1-.243.785 18.5 18.5 0 0 1-2.181 2.486 3.8 3.8 0 0 1-.924.624 6 6 0 0 1-.461.058 9.2 9.2 0 0 1-3.21-.659 19.2 19.2 0 0 1-4.316-2.45 38.3 38.3 0 0 1-7.907-8.036 19.7 19.7 0 0 1-2.054-3.7A9.3 9.3 0 0 1-.03 5.772q-.006-.343.173-.636.353-.527.785-.994Q2.024 2.987 3.34 2.119q.186-.075.37-.128" />
                                        <path
                                            d="M15.334.99q.068.856.045 1.737 2.232-.017 4.462.035 2.055.454 2.688 2.535.062.252.09.51.015 3.09.01 6.183H20.4q.005-2.895-.012-5.79-.06-.883-.88-1.123a127 127 0 0 0-4.128-.034q.01.869-.022 1.736a514 514 0 0 1-3.726-2.894z" />
                                    </svg>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24" class="svg-icon pt-1">
                                        <path
                                            d="M18.462 0H5.539a2.77 2.77 0 0 0-2.77 2.77v18.46A2.77 2.77 0 0 0 5.54 24h12.923a2.77 2.77 0 0 0 2.769-2.77V2.77A2.77 2.77 0 0 0 18.46 0m.923 7.385a.925.925 0 0 1-.923.923H5.539a.925.925 0 0 1-.924-.923V2.769c0-.508.415-.923.924-.923h12.923c.508 0 .923.415.923.923zM8.308 12a.925.925 0 0 1-.923.923H5.539A.925.925 0 0 1 4.615 12v-.923c0-.509.415-.923.924-.923h1.846c.508 0 .923.414.923.923zm5.538 0a.925.925 0 0 1-.923.923h-1.846a.925.925 0 0 1-.923-.923v-.923c0-.509.414-.923.923-.923h1.846c.509 0 .923.414.923.923zm5.539 0a.925.925 0 0 1-.923.923h-1.846a.925.925 0 0 1-.924-.923v-.923c0-.509.415-.923.924-.923h1.846c.508 0 .923.414.923.923zM8.308 16.615a.925.925 0 0 1-.923.924H5.539a.925.925 0 0 1-.924-.924v-.923c0-.508.415-.923.924-.923h1.846c.508 0 .923.415.923.923zm5.538 0a.925.925 0 0 1-.923.924h-1.846a.925.925 0 0 1-.923-.924v-.923c0-.508.414-.923.923-.923h1.846c.509 0 .923.415.923.923zm5.539 0a.925.925 0 0 1-.923.924h-1.846a.925.925 0 0 1-.924-.924v-.923c0-.508.415-.923.924-.923h1.846c.508 0 .923.415.923.923zM8.308 21.231a.925.925 0 0 1-.923.923H5.539a.925.925 0 0 1-.924-.923v-.923c0-.509.415-.923.924-.923h1.846c.508 0 .923.414.923.923zm5.538 0a.924.924 0 0 1-.923.923h-1.846a.925.925 0 0 1-.923-.923v-.923c0-.509.414-.923.923-.923h1.846c.509 0 .923.414.923.923zm5.539 0a.925.925 0 0 1-.923.923h-1.846a.925.925 0 0 1-.924-.923v-.923c0-.509.415-.923.924-.923h1.846c.508 0 .923.414.923.923z" />
                                        <path
                                            d="M17.539 3.692v2.77h-1.847v-2.77zm0-.923h-1.847a.925.925 0 0 0-.923.923v2.77c0 .508.415.922.923.922h1.846a.925.925 0 0 0 .924-.923V3.692a.925.925 0 0 0-.924-.923" />
                                    </svg>
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
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                        <path
                                            d="M13.11 23.46C15.517 20.444 21 13.13 21 9.024 21 4.042 16.969 0 12 0S3 4.042 3 9.023c0 4.108 5.484 11.42 7.89 14.438.576.719 1.644.719 2.22 0M12 6.017c.796 0 1.559.316 2.121.88a3.01 3.01 0 0 1 0 4.254 2.996 2.996 0 0 1-4.242 0 3.01 3.01 0 0 1 0-4.253A3 3 0 0 1 12 6.016" />
                                    </svg>
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
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon pt-1">
                                        <path
                                            d="M21.75 12a9.75 9.75 0 1 1-19.5 0 9.75 9.75 0 0 1 19.5 0M0 12a12 12 0 1 0 24 0 12 12 0 0 0-24 0m10.875-6.375V12c0 .375.188.727.502.938l4.5 3a1.12 1.12 0 0 0 1.56-.315 1.12 1.12 0 0 0-.314-1.56L13.125 11.4V5.625c0-.623-.502-1.125-1.125-1.125s-1.125.502-1.125 1.125" />
                                    </svg>
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
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                        <path
                                            d="M12 3c-4.969 0-9 4.031-9 9s4.031 9 9 9c.83 0 1.5.67 1.5 1.5S12.83 24 12 24C5.372 24 0 18.628 0 12S5.372 0 12 0s12 5.372 12 12v1.5a4.501 4.501 0 0 1-7.931 2.91A6 6 0 1 1 12 6c1.308 0 2.517.417 3.502 1.13A1.498 1.498 0 0 1 18 8.25v5.25c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5V12c0-4.969-4.031-9-9-9m3 9a3 3 0 1 0-6 0 3 3 0 0 0 6 0" />
                                    </svg>
                                </div>
                                <div class="nav-li-float-right">
                                    <span>mozaika62@bk.ru</span>
                                </div>
                                <div style="clear: both;"></div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ps-0 pt-2" data-bs-toggle="modal" data-bs-target="#callbackModal">
                            <div style="display: flex;" class="align-items-center">
                                <div class="nav-li-float-left">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                        <path
                                            d="M3.71 1.991q.522-.066.89.301a780 780 0 0 1 3.116 4.786q.153.598-.116 1.157a67 67 0 0 1-1.766 2.844 8.6 8.6 0 0 0 1.005 1.896 17.3 17.3 0 0 0 3.936 3.988q.989.713 2.135 1.145 1.278-.83 2.574-1.63.39-.231.83-.324.22-.023.44 0 .107.037.207.093a487 487 0 0 1 4.756 3.121q.246.281.254.66a1.7 1.7 0 0 1-.243.785 18.5 18.5 0 0 1-2.181 2.486 3.8 3.8 0 0 1-.924.624 6 6 0 0 1-.461.058 9.2 9.2 0 0 1-3.21-.659 19.2 19.2 0 0 1-4.316-2.45 38.3 38.3 0 0 1-7.907-8.036 19.7 19.7 0 0 1-2.054-3.7A9.3 9.3 0 0 1-.03 5.772q-.006-.343.173-.636.353-.527.785-.994Q2.024 2.987 3.34 2.119q.186-.075.37-.128" />
                                        <path
                                            d="M15.334.99q.068.856.045 1.737 2.232-.017 4.462.035 2.055.454 2.688 2.535.062.252.09.51.015 3.09.01 6.183H20.4q.005-2.895-.012-5.79-.06-.883-.88-1.123a127 127 0 0 0-4.128-.034q.01.869-.022 1.736a514 514 0 0 1-3.726-2.894z" />
                                    </svg>
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
                            <svg width="24" height="24" style="position: relative; bottom: 1px;" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                <path
                                    d="M4 3c0-1.655 1.305-3 2.91-3h10.18C18.696 0 20 1.345 20 3v18c0 1.655-1.305 3-2.91 3H6.91C5.304 24 4 22.655 4 21zm5.818 18c0 .413.328.75.728.75h2.909c.4 0 .727-.337.727-.75a.74.74 0 0 0-.728-.75h-2.908c-.4 0-.728.337-.728.75m7.273-18H6.909v15h10.182z" />
                            </svg>
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
                        <div class="row d-xl-none justify-content-center">
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
    <footer>
        <div class="container">
            <div class="row">
                <div class="col text-start text-md-center">
                    <div id="company-in-footer">©<?php echo date('Y'); ?> ООО «Furniture»</div>
                    <div id="im-in-footer">
                        Создание и продвижение сайтов:
                        <a href="https://site100.ru" class="text-light">site100.ru</a>
                    </div>
                    <div class="policy-in-footer">
                        <a href="<?php echo get_template_directory_uri(); ?>/docs/Privacy-Policy.pdf" target="_blank">Политика конфиденциальности</a> | <a href="<?php echo get_template_directory_uri(); ?>/docs/Consent-to-the-processing-of-personal-data.pdf" target="_blank">Согласие на обработку персональных данных</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer -->

</section>
<!-- /CONTACTS SECTION 4 -->



<!-- Показываем сообщение об успешной отправки -->
<div style="display: <?php echo $_SESSION['display'] ?>;" onclick="modalClose();">
    <div id="background-msg" style="display: <?php echo $_SESSION['display'] ?>;"></div>
    <button id="btn-close" type="button" class="btn-close btn-close-white" onclick="modalClose();"
        style="position: absolute; z-index: 9999; top: 15px; right: 15px;"></button>
    <div id="message">
        <?php echo $_SESSION['recaptcha'];
        unset($_SESSION['recaptcha']); ?>
    </div>
</div>



<!-- Callback Modal -->
<div class="modal fade" id="callbackModal" tabindex="-1" aria-labelledby="callbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/callback-mail.php"
            class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="callbackModalLabel">Обратный звонок</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <p><small>Мы свяжемся с Вами в теченее 10 минут и ответим на все вопросы! Для звонка введите
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
            </div>
            <div class="modal-footer">
                <button type="submit"
                    style="border-radius: 0.5rem; background-color: var(--corporate-color-1); border-color: var(--corporate-color-1);"
                    class="btn-lg btn btn-corporate-color-1 mx-auto">Жду звонка</button>
            </div>
        </form>
    </div>
</div>
<!-- /Callback Modal -->


<!-- Рассчитать стоимость с загрузкой изображения -->
<div class="modal fade" id="calculatePriceWithDownloadModal" tabindex="-1"
    aria-labelledby="calculatePriceWithDownloadLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/get_calculate_2.php"
            class="modal-content" enctype="multipart/form-data">
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
                        <button type="submit"
                            style="border-radius: 0.5rem; background-color: var(--corporate-color-1); border-color: var(--corporate-color-1);"
                            class="btn btn-lg btn-corporate-color-1">Отправить</button>
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
        <form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/get_calculate.php"
            class="modal-content" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title" id="calculatePriceWithoutDownloadLabel">Рассчитать стоимость</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row pb-2">
                    <div class="col-12">
                        <p><input type="text" name="product" style="border: none; outline: none;"
                                value="<?php echo get_the_title(); ?>"></p>
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
        <a href="tel:89511014610">
            <div class="callback-phone-button-ico"></div>
        </a>
    </div>
    <div id="whatsappBtn" class="callback-whatsapp-button" data-bs-toggle="tooltip" data-bs-placement="left"
        data-bs-custom-class="custom-tooltip" data-bs-title="Whatsapp">
        <!-- Не открывает ссылку с ПК если не установлено приложение WhatsApp
        <a href="whatsapp://send?phone=+79361385058"><div class="callback-whatsapp-button-ico"></div></a> -->
        <!-- Другой вариант ссылки. Все равно не открывает Whatsapp если нет приложения -->
        <a href="https://wa.me/79511014610?web=1&app_absent=1" target="blank">
            <div class="callback-whatsapp-button-ico"></div>
        </a>
        <!-- Еще варианты -->
        <!--a href="https://api.whatsapp.com/send/?phone=79361385058&text=Привет"><div class="callback-whatsapp-button-ico"></div></a-->
        <!--a href="https://wa.clck.bar/79361385058?text=%D0%9F%D1%80%D0%B8%D0%B2%D0%B5%D1%82!"><div class="callback-whatsapp-button-ico"></div></a-->
    </div>
    <div id="telegramBtn" class="callback-telegram-button" data-bs-toggle="tooltip" data-bs-placement="left"
        data-bs-custom-class="custom-tooltip" data-bs-title="Telegram">
        <a href="https://t.me/+79511014610">
            <div class="callback-telegram-button-ico"></div>
        </a>
    </div>
</div>
<!-- /Callback button HTML -->

<!-- Callback button JS -->
<script>
    function callbackButtonClick() {

        let formBtn = document.getElementById('formBtn').style.top;


        if (formBtn == "0px" || formBtn == 0) {
            document.getElementById('callbackBtn').style.animation = "none";
            document.getElementById('btnIco').style.animation = "change2 linear .5s";
            document.getElementById('btnIco').style.webkitAnimation = "change2 linear .5s";
            document.getElementById('btnIco').style.webkitTransition = "transform 1s ease-in-out";

            document.getElementById('btnIco').style.webkitTransform = "rotate(180deg)";
            document.getElementById('btnIco').style.transform = "rotate(180deg)";


            document.getElementById('btnIco').style.backgroundImage = "url(<?php echo get_template_directory_uri(); ?>/img/ico/callback-button-close.png)";
            document.getElementById('btnIco').style.backgroundPosition = "center";
            document.getElementById('btnIco').style.backgroundRepeat = "no-repeat";

            document.getElementById('btnIco').style.webkitBackgroundSize = "cover";
            document.getElementById('btnIco').style.backgroundSize = "cover";


            document.getElementById('formBtn').style.top = "-60px";
            document.getElementById('formBtn').style.opacity = "1";

            document.getElementById('phoneBtn').style.top = "-120px";
            document.getElementById('phoneBtn').style.opacity = "1";

            document.getElementById('whatsappBtn').style.top = "-180px";
            document.getElementById('whatsappBtn').style.opacity = "1";

            document.getElementById('telegramBtn').style.top = "-240px";
            document.getElementById('telegramBtn').style.opacity = "1";
        } else {
            document.getElementById('callbackBtn').style.animation = "waves linear 2s infinite";
            document.getElementById('btnIco').style.animation = "change linear 16s infinite";
            document.getElementById('btnIco').style.webkitTransition = "transform 1s ease-in-out";
            document.getElementById('btnIco').style.webkitAnimation = "change linear 16s infinite";
            document.getElementById('btnIco').style.transform = "rotate(180deg)";
            document.getElementById('btnIco').style.webkitTransform = "rotate(180deg)";
            document.getElementById('btnIco').style.backgroundImage = "url(<?php echo get_template_directory_uri(); ?>/img/ico/callback-button-ico.png)";
            document.getElementById('btnIco').style.backgroundPosition = "center";
            document.getElementById('btnIco').style.backgroundRepeat = "no-repeat";

            document.getElementById('btnIco').style.webkitBackgroundSize = "cover";
            document.getElementById('btnIco').style.backgroundSize = "cover";


            document.getElementById('formBtn').style.top = "0px";
            document.getElementById('formBtn').style.opacity = "0";

            document.getElementById('phoneBtn').style.top = "0px";
            document.getElementById('phoneBtn').style.opacity = "0";

            document.getElementById('whatsappBtn').style.top = "0px";
            document.getElementById('whatsappBtn').style.opacity = "0";

            document.getElementById('telegramBtn').style.top = "0px";
            document.getElementById('telegramBtn').style.opacity = "0";
        }
    }
</script>
<!-- /Callback button JS -->


<!-- Dounloads Bootstrap Bundle with Popper -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>

<!-- Scripts for Quiz and for add loader -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.5.1.min.js"></script>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/064ae6a0a2.js"></script>


<!-- Theme JS -->
<script src="<?php echo get_template_directory_uri(); ?>/js/theme.js"></script>


<script>
    prilipalo();
</script>


<!-- Telephone number mask -->
<script src="<?php echo get_template_directory_uri(); ?>/js/inputmask.min.js"></script>
<script>
    var telMask = document.getElementsByClassName("telMask");
    var im = new Inputmask("+7(999)999-99-99");
    im.mask(telMask);
</script>


<!-- Загрузка изображений с приоритетом
<script>
    if ("loading" in HTMLImageElement.prototype) {
        const images = document.querySelectorAll('img[loading="lazy"]');
        images.forEach((img) => {
            img.src = img.dataset.src;
        });
  } else {
        // Dynamically import the LazySizes library
        const script = document.createElement("script");
        script.src = "https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.1.8/lazysizes.min.js";
        document.body.appendChild(script);
    }
</script> -->


<?php if ($counter_body = get_theme_mod('mytheme_counter_body')): ?>
    <!-- Код счетчика (body) -->
    <?php echo $counter_body; ?>
<?php endif; ?>
</body>

</html>