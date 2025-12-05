<!-- Header 2 -->
<header class="header-2">
    <!-- Top menu header -->
    <nav class="header-nav-top navbar navbar-expand-lg navbar-light d-none d-lg-block py-0" style="border-bottom: 1px solid #d7d7d7">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                <ul class="navbar-nav ms-auto align-items-center">
                    <?php
                    // Получаем адрес
                    $address = '';
                    if (function_exists('mytheme_get_address')) {
                        $address = mytheme_get_address();
                    }
                    if (!empty($address)):
                    ?>
                    <li class="nav-item me-1 me-xxl-3">
                        <a class="nav-link text-dark">
                            <div class="d-flex align-items-center gap-2 lh-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                    <path
                                        d="M13.11 23.46C15.517 20.444 21 13.13 21 9.024 21 4.042 16.969 0 12 0S3 4.042 3 9.023c0 4.108 5.484 11.42 7.89 14.438.576.719 1.644.719 2.22 0M12 6.017c.796 0 1.559.316 2.121.88a3.01 3.01 0 0 1 0 4.254 2.996 2.996 0 0 1-4.242 0 3.01 3.01 0 0 1 0-4.253A3 3 0 0 1 12 6.016" />
                                </svg>
                                <span class="address-header"><?php echo esc_html($address); ?></span>
                            </div>
                        </a>
                    </li>
                    <?php endif; ?>

                    <?php
                    // Получаем время работы
                    $job_time = '';
                    if (function_exists('mytheme_get_job_time')) {
                        $job_time = mytheme_get_job_time();
                    }
                    if (!empty($job_time)):
                    ?>
                    <li class="nav-item me-1 me-xxl-3">
                        <a class="nav-link text-dark">
                            <div class="d-flex align-items-center gap-2 lh-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                    <path
                                        d="M21.75 12a9.75 9.75 0 1 1-19.5 0 9.75 9.75 0 0 1 19.5 0M0 12a12 12 0 1 0 24 0 12 12 0 0 0-24 0m10.875-6.375V12c0 .375.188.727.502.938l4.5 3a1.12 1.12 0 0 0 1.56-.315 1.12 1.12 0 0 0-.314-1.56L13.125 11.4V5.625c0-.623-.502-1.125-1.125-1.125s-1.125.502-1.125 1.125" />
                                </svg>
                                <span class="time-header"><?php echo esc_html($job_time); ?></span>
                            </div>
                        </a>
                    </li>
                    <?php endif; ?>

                    <li class="nav-item me-1 me-xxl-3">
                        <a href="#" class="nav-link text-dark" data-bs-toggle="modal" data-bs-target="#callbackModal">
                            <div class="d-flex align-items-center gap-2 lh-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                    <path
                                        d="M3.71 1.991q.522-.066.89.301a780 780 0 0 1 3.116 4.786q.153.598-.116 1.157a67 67 0 0 1-1.766 2.844 8.6 8.6 0 0 0 1.005 1.896 17.3 17.3 0 0 0 3.936 3.988q.989.713 2.135 1.145 1.278-.83 2.574-1.63.39-.231.83-.324.22-.023.44 0 .107.037.207.093a487 487 0 0 1 4.756 3.121q.246.281.254.66a1.7 1.7 0 0 1-.243.785 18.5 18.5 0 0 1-2.181 2.486 3.8 3.8 0 0 1-.924.624 6 6 0 0 1-.461.058 9.2 9.2 0 0 1-3.21-.659 19.2 19.2 0 0 1-4.316-2.45 38.3 38.3 0 0 1-7.907-8.036 19.7 19.7 0 0 1-2.054-3.7A9.3 9.3 0 0 1-.03 5.772q-.006-.343.173-.636.353-.527.785-.994Q2.024 2.987 3.34 2.119q.186-.075.37-.128" />
                                    <path
                                        d="M15.334.99q.068.856.045 1.737 2.232-.017 4.462.035 2.055.454 2.688 2.535.062.252.09.51.015 3.09.01 6.183H20.4q.005-2.895-.012-5.79-.06-.883-.88-1.123a127 127 0 0 0-4.128-.034q.01.869-.022 1.736a514 514 0 0 1-3.726-2.894z" />
                                </svg>
                                <span class="max-width-1400">Обратный звонок</span>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item me-1 me-xxl-4">
                        <a class="nav-link text-dark" href="#" data-bs-toggle="modal" data-bs-target="#calculatePriceWithDownloadModal">
                            <div class="d-flex align-items-center gap-2 lh-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24" class="svg-icon">
                                    <path
                                        d="M18.462 0H5.539a2.77 2.77 0 0 0-2.77 2.77v18.46A2.77 2.77 0 0 0 5.54 24h12.923a2.77 2.77 0 0 0 2.769-2.77V2.77A2.77 2.77 0 0 0 18.46 0m.923 7.385a.925.925 0 0 1-.923.923H5.539a.925.925 0 0 1-.924-.923V2.769c0-.508.415-.923.924-.923h12.923c.508 0 .923.415.923.923zM8.308 12a.925.925 0 0 1-.923.923H5.539A.925.925 0 0 1 4.615 12v-.923c0-.509.415-.923.924-.923h1.846c.508 0 .923.414.923.923zm5.538 0a.925.925 0 0 1-.923.923h-1.846a.925.925 0 0 1-.923-.923v-.923c0-.509.414-.923.923-.923h1.846c.509 0 .923.414.923.923zm5.539 0a.925.925 0 0 1-.923.923h-1.846a.925.925 0 0 1-.924-.923v-.923c0-.509.415-.923.924-.923h1.846c.508 0 .923.414.923.923zM8.308 16.615a.925.925 0 0 1-.923.924H5.539a.925.925 0 0 1-.924-.924v-.923c0-.508.415-.923.924-.923h1.846c.508 0 .923.415.923.923zm5.538 0a.925.925 0 0 1-.923.924h-1.846a.925.925 0 0 1-.923-.924v-.923c0-.508.414-.923.923-.923h1.846c.509 0 .923.415.923.923zm5.539 0a.925.925 0 0 1-.923.924h-1.846a.925.925 0 0 1-.924-.924v-.923c0-.508.415-.923.924-.923h1.846c.508 0 .923.415.923.923zM8.308 21.231a.925.925 0 0 1-.923.923H5.539a.925.925 0 0 1-.924-.923v-.923c0-.509.415-.923.924-.923h1.846c.508 0 .923.414.923.923zm5.538 0a.924.924 0 0 1-.923.923h-1.846a.925.925 0 0 1-.923-.923v-.923c0-.509.414-.923.923-.923h1.846c.509 0 .923.414.923.923zm5.539 0a.925.925 0 0 1-.923.923h-1.846a.925.925 0 0 1-.924-.923v-.923c0-.509.415-.923.924-.923h1.846c.508 0 .923.414.923.923z" />
                                    <path
                                        d="M17.539 3.692v2.77h-1.847v-2.77zm0-.923h-1.847a.925.925 0 0 0-.923.923v2.77c0 .508.415.922.923.922h1.846a.925.925 0 0 0 .924-.923V3.692a.925.925 0 0 0-.924-.923" />
                                </svg>
                                <span class="max-width-1400">Рассчитать стоимость</span>
                            </div>
                        </a>
                    </li>

                    <?php
                    // Получаем основной телефон
                    $phone_display = '';
                    $phone_link = '';
                    if (function_exists('mytheme_get_phone')) {
                        $phone_display = mytheme_get_phone('main');
                        $phone_link = mytheme_get_phone_link('main');
                    }
                    if (!empty($phone_display)):
                    ?>
                    <li class="nav-item me-1 me-xxl-4">
                        <a class="top-menu-tel nav-link text-dark" href="tel:<?php echo esc_attr($phone_link); ?>">
                            <div class="d-flex align-items-center gap-2 lh-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                    <path
                                        d="M4 3c0-1.655 1.305-3 2.91-3h10.18C18.696 0 20 1.345 20 3v18c0 1.655-1.305 3-2.91 3H6.91C5.304 24 4 22.655 4 21zm5.818 18c0 .413.328.75.728.75h2.909c.4 0 .727-.337.727-.75a.74.74 0 0 0-.728-.75h-2.908c-.4 0-.728.337-.728.75m7.273-18H6.909v15h10.182z" />
                                </svg>
                                <span><?php echo esc_html($phone_display); ?></span>
                            </div>
                        </a>
                    </li>
                    <?php endif; ?>

                    <?php
                    // Получаем ссылку на Telegram
                    $telegram = '';
                    if (function_exists('mytheme_get_telegram')) {
                        $telegram = mytheme_get_telegram();
                    }
                    if (!empty($telegram)):
                    ?>
                    <li class="nav-item">
                        <a class="nav-link ico-button" href="<?php echo esc_url($telegram); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.svg">
                        </a>
                    </li>
                    <?php endif; ?>

                    <?php
                    // Получаем ссылку на WhatsApp
                    $whatsapp = '';
                    if (function_exists('mytheme_get_whatsapp')) {
                        $whatsapp = mytheme_get_whatsapp(true);
                    }
                    if (!empty($whatsapp)):
                    ?>
                    <li class="nav-item">
                        <a class="nav-link ico-button" href="<?php echo esc_url($whatsapp); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.svg">
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /Top menu header  -->

    <!-- Menu header -->
    <nav id="top-menu-2" class="header-nav-bottom navbar navbar-expand-lg navbar-light bg-white shadow py-1 py-lg-0">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/logo-dark.svg">
            </a>
            <div class="d-lg-none">
                <?php
                // Получаем основной телефон для мобильного меню
                $phone_display = '';
                $phone_link = '';
                if (function_exists('mytheme_get_phone')) {
                    $phone_display = mytheme_get_phone('main');
                    $phone_link = mytheme_get_phone_link('main');
                }
                if (!empty($phone_display)):
                ?>
                
                <a class="top-header top-menu-tel" href="tel:<?php echo esc_attr($phone_link); ?>"><?php echo esc_html($phone_display); ?></a>
                <?php endif; ?>

                <?php
                // Получаем время работы для мобильного меню
                $job_time = '';
                if (function_exists('mytheme_get_job_time')) {
                    $job_time = mytheme_get_job_time();
                }
                if (!empty($job_time)):
                ?>
                <div class="d-flex gap-2 sliding-header-time">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon mt-1">
                        <path
                            d="M21.75 12a9.75 9.75 0 1 1-19.5 0 9.75 9.75 0 0 1 19.5 0M0 12a12 12 0 1 0 24 0 12 12 0 0 0-24 0m10.875-6.375V12c0 .375.188.727.502.938l4.5 3a1.12 1.12 0 0 0 1.56-.315 1.12 1.12 0 0 0-.314-1.56L13.125 11.4V5.625c0-.623-.502-1.125-1.125-1.125s-1.125.502-1.125 1.125" />
                    </svg>
                    <span class="time-sliding-header"><?php echo esc_html($job_time); ?></span>
                </div>
                <?php endif; ?>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobail-header-collapse" aria-controls="mobail-header-collapse" aria-expanded="false" aria-label="Toggle navigation">
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
                            <ul id="%1$s" class="navbar-nav align-items-lg-center ms-auto mb-2 mb-lg-0 %2$s">%3$s
                                <!-- Mobile menu -->
                                <li class="nav-item d-lg-none">
                                    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#callbackModal">Обратный звонок</a>
                                </li>

                                <li class="nav-item d-lg-none">
                                    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#calculatePriceWithDownloadModal">Рассчитать стоимость</a>
                                </li>

                                <li class="nav-item d-lg-none">
                                    ' . (function_exists('mytheme_get_address') && !empty(mytheme_get_address()) ? '
                                    <div class="d-flex gap-2 mobile-sliding-header-time">
                                        <svg width="10" height="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                            <path
                                                d="M13.11 23.46C15.517 20.444 21 13.13 21 9.024 21 4.042 16.969 0 12 0S3 4.042 3 9.023c0 4.108 5.484 11.42 7.89 14.438.576.719 1.644.719 2.22 0M12 6.017c.796 0 1.559.316 2.121.88a3.01 3.01 0 0 1 0 4.254 2.996 2.996 0 0 1-4.242 0 3.01 3.01 0 0 1 0-4.253A3 3 0 0 1 12 6.016" />
                                        </svg>
                                        <span class="address-menu">' . esc_html(mytheme_get_address()) . '</span>
                                    </div>
                                    ' : '') . '

                                    ' . (function_exists('mytheme_get_phone') && !empty(mytheme_get_phone('main')) ? '
                                    <a class="nav-link py-2" href="tel:' . esc_attr(mytheme_get_phone_link('main')) . '">' . esc_html(mytheme_get_phone('main')) . '</a>
                                    ' : '') . '

                                    ' . (function_exists('mytheme_get_job_time') && !empty(mytheme_get_job_time()) ? '
                                    <div class="d-flex gap-2 mb-2 mobile-sliding-header-time">
                                        <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                            <path
                                                d="M21.75 12a9.75 9.75 0 1 1-19.5 0 9.75 9.75 0 0 1 19.5 0M0 12a12 12 0 1 0 24 0 12 12 0 0 0-24 0m10.875-6.375V12c0 .375.188.727.502.938l4.5 3a1.12 1.12 0 0 0 1.56-.315 1.12 1.12 0 0 0-.314-1.56L13.125 11.4V5.625c0-.623-.502-1.125-1.125-1.125s-1.125.502-1.125 1.125" />
                                        </svg>
                                        <span class="time-menu">' . esc_html(mytheme_get_job_time()) . '</span>
                                    </div>
                                    ' : '') . '
                                </li>
                                <li class="nav-item d-lg-none pb-2">
                                    ' . (function_exists('mytheme_get_whatsapp') && !empty(mytheme_get_whatsapp(true)) ? '
                                    <a class="ico-button pe-2" href="' . esc_url(mytheme_get_whatsapp(true)) . '">
                                        <img src="' . get_template_directory_uri() . '/img/ico/whatsapp-ico.svg">
                                    </a>
                                    ' : '') . '
                                    ' . (function_exists('mytheme_get_telegram') && !empty(mytheme_get_telegram()) ? '
                                    <a class="ico-button pe-0" href="' . esc_url(mytheme_get_telegram()) . '">
                                        <img src="' . get_template_directory_uri() . '/img/ico/telegram-ico.svg">
                                    </a>
                                    ' : '') . '
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
</header>
<!-- /header-2 -->