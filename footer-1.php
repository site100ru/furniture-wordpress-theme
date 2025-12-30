<?php // Footer for vyezjalo() function 
?>


<!-- CONTACTS SECTION 4 -->
<section class="contacts-section-4">
    <!-- Desktop version -->
    <div class="container py-5 d-none d-xl-block">
        <div class="row align-items-center">
            <div class="col-xl-2">
                <a href="/">
                    <img id="navbar-brand-img" src="<?php echo get_template_directory_uri(); ?>/img/ico/logo-light.svg"class="img-fluid">
                </a>
            </div>
            <div class="col-xl-8" id="footer-menu">
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
            <div class="col-xl-2">
                <?php
                // Получаем основной телефон для футера (desktop)
                $phone_display = '';
                $phone_link = '';
                if (function_exists('mytheme_get_phone')) {
                    $phone_display = mytheme_get_phone('main');
                    $phone_link = mytheme_get_phone_link('main');
                }
                if (!empty($phone_display)):
                ?>
                <a href="tel:<?php echo esc_attr($phone_link); ?>" class="contacts-phone d-flex justify-content-end align-items-center">
                    <div class="d-flex align-items-center gap-3 lh-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                            <path
                                d="M4 3c0-1.655 1.305-3 2.91-3h10.18C18.696 0 20 1.345 20 3v18c0 1.655-1.305 3-2.91 3H6.91C5.304 24 4 22.655 4 21zm5.818 18c0 .413.328.75.728.75h2.909c.4 0 .727-.337.727-.75a.74.74 0 0 0-.728-.75h-2.908c-.4 0-.728.337-.728.75m7.273-18H6.909v15h10.182z" />
                        </svg>
                        <span class="phone-footer"><?php echo esc_html($phone_display); ?></span>
                    </div>
                </a>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col py-4">
                <ul class="nav justify-content-center align-items-center">
                    <?php
                    // Получаем адрес для футера (desktop)
                    $address = '';
                    if (function_exists('mytheme_get_address')) {
                        $address = mytheme_get_address();
                    }
                    if (!empty($address)):
                    ?>
                    <li class="nav-item me-1 me-lg-2">
                        <a class="nav-link">
                            <div class="d-flex align-items-center gap-3 lh-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                    <path
                                        d="M13.11 23.46C15.517 20.444 21 13.13 21 9.024 21 4.042 16.969 0 12 0S3 4.042 3 9.023c0 4.108 5.484 11.42 7.89 14.438.576.719 1.644.719 2.22 0M12 6.017c.796 0 1.559.316 2.121.88a3.01 3.01 0 0 1 0 4.254 2.996 2.996 0 0 1-4.242 0 3.01 3.01 0 0 1 0-4.253A3 3 0 0 1 12 6.016" />
                                </svg>
                                <span class="address-footer"><?php echo esc_html($address); ?></span>
                            </div>
                        </a>
                    </li>
                    <?php endif; ?>

                    <?php
                    // Получаем время работы для футера (desktop)
                    $job_time = '';
                    if (function_exists('mytheme_get_job_time')) {
                        $job_time = mytheme_get_job_time();
                    }
                    if (!empty($job_time)):
                    ?>
                    <li class="nav-item me-1 me-lg-2">
                        <a class="nav-link">
                            <div class="d-flex align-items-center gap-3 lh-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                    <path
                                        d="M21.75 12a9.75 9.75 0 1 1-19.5 0 9.75 9.75 0 0 1 19.5 0M0 12a12 12 0 1 0 24 0 12 12 0 0 0-24 0m10.875-6.375V12c0 .375.188.727.502.938l4.5 3a1.12 1.12 0 0 0 1.56-.315 1.12 1.12 0 0 0-.314-1.56L13.125 11.4V5.625c0-.623-.502-1.125-1.125-1.125s-1.125.502-1.125 1.125" />
                                </svg>
                                <span class="time-footer"><?php echo esc_html($job_time); ?></span>
                            </div>
                        </a>
                    </li>
                    <?php endif; ?>

                    <?php
                    // Получаем email для футера (desktop)
                    $email = '';
                    $email_link = '';
                    if (function_exists('mytheme_get_email')) {
                        $email = mytheme_get_email();
                        $email_link = mytheme_get_email_link();
                    }
                    if (!empty($email)):
                    ?>
                    <li class="nav-item me-1 me-lg-2">
                        <a href="<?php echo esc_url($email_link); ?>" class="nav-link">
                            <div class="d-flex align-items-center gap-3 lh-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                    <path
                                        d="M12 3c-4.969 0-9 4.031-9 9s4.031 9 9 9c.83 0 1.5.67 1.5 1.5S12.83 24 12 24C5.372 24 0 18.628 0 12S5.372 0 12 0s12 5.372 12 12v1.5a4.501 4.501 0 0 1-7.931 2.91A6 6 0 1 1 12 6c1.308 0 2.517.417 3.502 1.13A1.498 1.498 0 0 1 18 8.25v5.25c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5V12c0-4.969-4.031-9-9-9m3 9a3 3 0 1 0-6 0 3 3 0 0 0 6 0" />
                                </svg>
                                <span><?php echo esc_html($email); ?></span>
                            </div>
                        </a>
                    </li>
                    <?php endif; ?>

                    <li class="nav-item me-1 me-lg-2">
                        <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#callbackModal">
                            <div class="d-flex align-items-center gap-3 lh-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                    <path
                                        d="M3.71 1.991q.522-.066.89.301a780 780 0 0 1 3.116 4.786q.153.598-.116 1.157a67 67 0 0 1-1.766 2.844 8.6 8.6 0 0 0 1.005 1.896 17.3 17.3 0 0 0 3.936 3.988q.989.713 2.135 1.145 1.278-.83 2.574-1.63.39-.231.83-.324.22-.023.44 0 .107.037.207.093a487 487 0 0 1 4.756 3.121q.246.281.254.66a1.7 1.7 0 0 1-.243.785 18.5 18.5 0 0 1-2.181 2.486 3.8 3.8 0 0 1-.924.624 6 6 0 0 1-.461.058 9.2 9.2 0 0 1-3.21-.659 19.2 19.2 0 0 1-4.316-2.45 38.3 38.3 0 0 1-7.907-8.036 19.7 19.7 0 0 1-2.054-3.7A9.3 9.3 0 0 1-.03 5.772q-.006-.343.173-.636.353-.527.785-.994Q2.024 2.987 3.34 2.119q.186-.075.37-.128" />
                                    <path
                                        d="M15.334.99q.068.856.045 1.737 2.232-.017 4.462.035 2.055.454 2.688 2.535.062.252.09.51.015 3.09.01 6.183H20.4q.005-2.895-.012-5.79-.06-.883-.88-1.123a127 127 0 0 0-4.128-.034q.01.869-.022 1.736a514 514 0 0 1-3.726-2.894z" />
                                </svg>
                                <span>Обратный звонок</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item me-1 me-lg-2">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#calculatePriceWithDownloadModal">
                            <div class="d-flex align-items-center gap-3 lh-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24" class="svg-icon">
                                    <path
                                        d="M18.462 0H5.539a2.77 2.77 0 0 0-2.77 2.77v18.46A2.77 2.77 0 0 0 5.54 24h12.923a2.77 2.77 0 0 0 2.769-2.77V2.77A2.77 2.77 0 0 0 18.46 0m.923 7.385a.925.925 0 0 1-.923.923H5.539a.925.925 0 0 1-.924-.923V2.769c0-.508.415-.923.924-.923h12.923c.508 0 .923.415.923.923zM8.308 12a.925.925 0 0 1-.923.923H5.539A.925.925 0 0 1 4.615 12v-.923c0-.509.415-.923.924-.923h1.846c.508 0 .923.414.923.923zm5.538 0a.925.925 0 0 1-.923.923h-1.846a.925.925 0 0 1-.923-.923v-.923c0-.509.414-.923.923-.923h1.846c.509 0 .923.414.923.923zm5.539 0a.925.925 0 0 1-.923.923h-1.846a.925.925 0 0 1-.924-.923v-.923c0-.509.415-.923.924-.923h1.846c.508 0 .923.414.923.923zM8.308 16.615a.925.925 0 0 1-.923.924H5.539a.925.925 0 0 1-.924-.924v-.923c0-.508.415-.923.924-.923h1.846c.508 0 .923.415.923.923zm5.538 0a.925.925 0 0 1-.923.924h-1.846a.925.925 0 0 1-.923-.924v-.923c0-.508.414-.923.923-.923h1.846c.509 0 .923.415.923.923zm5.539 0a.925.925 0 0 1-.923.924h-1.846a.925.925 0 0 1-.924-.924v-.923c0-.508.415-.923.924-.923h1.846c.508 0 .923.415.923.923zM8.308 21.231a.925.925 0 0 1-.923.923H5.539a.925.925 0 0 1-.924-.923v-.923c0-.509.415-.923.924-.923h1.846c.508 0 .923.414.923.923zm5.538 0a.924.924 0 0 1-.923.923h-1.846a.925.925 0 0 1-.923-.923v-.923c0-.509.414-.923.923-.923h1.846c.509 0 .923.414.923.923zm5.539 0a.925.925 0 0 1-.923.923h-1.846a.925.925 0 0 1-.924-.923v-.923c0-.509.415-.923.924-.923h1.846c.508 0 .923.414.923.923z" />
                                    <path
                                        d="M17.539 3.692v2.77h-1.847v-2.77zm0-.923h-1.847a.925.925 0 0 0-.923.923v2.77c0 .508.415.922.923.922h1.846a.925.925 0 0 0 .924-.923V3.692a.925.925 0 0 0-.924-.923" />
                                </svg>
                                <span>Рассчитать стоимость</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <ul class="nav justify-content-center">
                    <?php
                    // Получаем WhatsApp для футера (desktop)
                    $whatsapp = '';
                    if (function_exists('mytheme_get_whatsapp')) {
                        $whatsapp = mytheme_get_whatsapp(true);
                    }
                    if (!empty($whatsapp)):
                    ?>
                    <li class="nav-item">
                        <a class="nav-link ico-button px-2" href="<?php echo esc_url($whatsapp); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.svg">
                        </a>
                    </li>
                    <?php endif; ?>

                    <?php
                    // Получаем Telegram для футера (desktop)
                    $telegram = '';
                    if (function_exists('mytheme_get_telegram')) {
                        $telegram = mytheme_get_telegram();
                    }
                    if (!empty($telegram)):
                    ?>
                    <li class="nav-item">
                        <a class="nav-link ico-button px-2" href="<?php echo esc_url($telegram); ?>" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.svg">
                        </a>
                    </li>
                    <?php endif; ?>

                    <?php
                    // Получаем VK для футера (desktop)
                    $vk = '';
                    if (function_exists('mytheme_get_vk')) {
                        $vk = mytheme_get_vk();
                    }
                    if (!empty($vk)):
                    ?>
                    <li class="nav-item">
                        <a class="nav-link ico-button px-2" href="<?php echo esc_url($vk); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk-ico.svg">
                        </a>
                    </li>
                    <?php endif; ?>

                    <?php
                    // Получаем Instagram
                    $instagram = '';
                    if (function_exists('mytheme_get_instagram')) {
                        $instagram = mytheme_get_instagram();
                    }
                    if (!empty($instagram)):
                    ?>
                    <li class="nav-item">
                        <a class="nav-link ico-button px-2" href="<?php echo esc_url($instagram); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/instagram-ico.svg">
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Desktop version -->

    <!-- Mobile version -->
    <div class="container d-xl-none">
        <div class="row">
            <div class="col py-5">
                <a href="/">
                    <img id="navbar-brand-img" src="<?php echo get_template_directory_uri(); ?>/img/ico/logo-light.svg" class="img-fluid">
                </a>
                <ul class="ps-0 pt-3 pb-2">
                    <?php
                    // Получаем адрес для футера (mobile)
                    $address = '';
                    if (function_exists('mytheme_get_address')) {
                        $address = mytheme_get_address();
                    }
                    if (!empty($address)):
                    ?>
                    <li class="nav-item">
                        <a class="nav-link ps-0 pb-2">
                            <div class="d-flex align-items-center gap-3 lh-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                    <path
                                        d="M13.11 23.46C15.517 20.444 21 13.13 21 9.024 21 4.042 16.969 0 12 0S3 4.042 3 9.023c0 4.108 5.484 11.42 7.89 14.438.576.719 1.644.719 2.22 0M12 6.017c.796 0 1.559.316 2.121.88a3.01 3.01 0 0 1 0 4.254 2.996 2.996 0 0 1-4.242 0 3.01 3.01 0 0 1 0-4.253A3 3 0 0 1 12 6.016" />
                                </svg>
                                <span class="address-footer"><?php echo esc_html($address); ?></span>
                            </div>
                        </a>
                    </li>
                    <?php endif; ?>

                    <?php
                    // Получаем время работы для футера (mobile)
                    $job_time = '';
                    if (function_exists('mytheme_get_job_time')) {
                        $job_time = mytheme_get_job_time();
                    }
                    if (!empty($job_time)):
                    ?>
                    <li class="nav-item">
                        <a class="nav-link ps-0 py-2">
                            <div class="d-flex align-items-center gap-3 lh-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                    <path
                                        d="M21.75 12a9.75 9.75 0 1 1-19.5 0 9.75 9.75 0 0 1 19.5 0M0 12a12 12 0 1 0 24 0 12 12 0 0 0-24 0m10.875-6.375V12c0 .375.188.727.502.938l4.5 3a1.12 1.12 0 0 0 1.56-.315 1.12 1.12 0 0 0-.314-1.56L13.125 11.4V5.625c0-.623-.502-1.125-1.125-1.125s-1.125.502-1.125 1.125" />
                                </svg>
                                <span class="time-footer"><?php echo esc_html($job_time); ?></span>
                            </div>
                        </a>
                    </li>
                    <?php endif; ?>

                    <?php
                    // Получаем email для футера (mobile)
                    $email = '';
                    $email_link = '';
                    if (function_exists('mytheme_get_email')) {
                        $email = mytheme_get_email();
                        $email_link = mytheme_get_email_link();
                    }
                    if (!empty($email)):
                    ?>
                    <li class="nav-item">
                        <a href="<?php echo esc_url($email_link); ?>" class="nav-link ps-0 py-2">
                            <div class="d-flex align-items-center gap-3 lh-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                    <path
                                        d="M12 3c-4.969 0-9 4.031-9 9s4.031 9 9 9c.83 0 1.5.67 1.5 1.5S12.83 24 12 24C5.372 24 0 18.628 0 12S5.372 0 12 0s12 5.372 12 12v1.5a4.501 4.501 0 0 1-7.931 2.91A6 6 0 1 1 12 6c1.308 0 2.517.417 3.502 1.13A1.498 1.498 0 0 1 18 8.25v5.25c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5V12c0-4.969-4.031-9-9-9m3 9a3 3 0 1 0-6 0 3 3 0 0 0 6 0" />
                                </svg>
                                <span><?php echo esc_html($email); ?></span>
                            </div>
                        </a>
                    </li>
                    <?php endif; ?>

                    <li class="nav-item">
                        <a class="nav-link ps-0 py-2" data-bs-toggle="modal" data-bs-target="#callbackModal">
                            <div class="d-flex align-items-center gap-3 lh-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                    <path
                                        d="M3.71 1.991q.522-.066.89.301a780 780 0 0 1 3.116 4.786q.153.598-.116 1.157a67 67 0 0 1-1.766 2.844 8.6 8.6 0 0 0 1.005 1.896 17.3 17.3 0 0 0 3.936 3.988q.989.713 2.135 1.145 1.278-.83 2.574-1.63.39-.231.83-.324.22-.023.44 0 .107.037.207.093a487 487 0 0 1 4.756 3.121q.246.281.254.66a1.7 1.7 0 0 1-.243.785 18.5 18.5 0 0 1-2.181 2.486 3.8 3.8 0 0 1-.924.624 6 6 0 0 1-.461.058 9.2 9.2 0 0 1-3.21-.659 19.2 19.2 0 0 1-4.316-2.45 38.3 38.3 0 0 1-7.907-8.036 19.7 19.7 0 0 1-2.054-3.7A9.3 9.3 0 0 1-.03 5.772q-.006-.343.173-.636.353-.527.785-.994Q2.024 2.987 3.34 2.119q.186-.075.37-.128" />
                                    <path
                                        d="M15.334.99q.068.856.045 1.737 2.232-.017 4.462.035 2.055.454 2.688 2.535.062.252.09.51.015 3.09.01 6.183H20.4q.005-2.895-.012-5.79-.06-.883-.88-1.123a127 127 0 0 0-4.128-.034q.01.869-.022 1.736a514 514 0 0 1-3.726-2.894z" />
                                </svg>
                                <span>Обратный звонок</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-0 pt-2" data-bs-toggle="modal" data-bs-target="#calculatePriceWithDownloadModal">
                            <div class="d-flex align-items-center gap-3 lh-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24" class="svg-icon">
                                    <path
                                        d="M18.462 0H5.539a2.77 2.77 0 0 0-2.77 2.77v18.46A2.77 2.77 0 0 0 5.54 24h12.923a2.77 2.77 0 0 0 2.769-2.77V2.77A2.77 2.77 0 0 0 18.46 0m.923 7.385a.925.925 0 0 1-.923.923H5.539a.925.925 0 0 1-.924-.923V2.769c0-.508.415-.923.924-.923h12.923c.508 0 .923.415.923.923zM8.308 12a.925.925 0 0 1-.923.923H5.539A.925.925 0 0 1 4.615 12v-.923c0-.509.415-.923.924-.923h1.846c.508 0 .923.414.923.923zm5.538 0a.925.925 0 0 1-.923.923h-1.846a.925.925 0 0 1-.923-.923v-.923c0-.509.414-.923.923-.923h1.846c.509 0 .923.414.923.923zm5.539 0a.925.925 0 0 1-.923.923h-1.846a.925.925 0 0 1-.924-.923v-.923c0-.509.415-.923.924-.923h1.846c.508 0 .923.414.923.923zM8.308 16.615a.925.925 0 0 1-.923.924H5.539a.925.925 0 0 1-.924-.924v-.923c0-.508.415-.923.924-.923h1.846c.508 0 .923.415.923.923zm5.538 0a.925.925 0 0 1-.923.924h-1.846a.925.925 0 0 1-.923-.924v-.923c0-.508.414-.923.923-.923h1.846c.509 0 .923.415.923.923zm5.539 0a.925.925 0 0 1-.923.924h-1.846a.925.925 0 0 1-.924-.924v-.923c0-.508.415-.923.924-.923h1.846c.508 0 .923.415.923.923zM8.308 21.231a.925.925 0 0 1-.923.923H5.539a.925.925 0 0 1-.924-.923v-.923c0-.509.415-.923.924-.923h1.846c.508 0 .923.414.923.923zm5.538 0a.924.924 0 0 1-.923.923h-1.846a.925.925 0 0 1-.923-.923v-.923c0-.509.414-.923.923-.923h1.846c.509 0 .923.414.923.923zm5.539 0a.925.925 0 0 1-.923.923h-1.846a.925.925 0 0 1-.924-.923v-.923c0-.509.415-.923.924-.923h1.846c.508 0 .923.414.923.923z" />
                                    <path
                                        d="M17.539 3.692v2.77h-1.847v-2.77zm0-.923h-1.847a.925.925 0 0 0-.923.923v2.77c0 .508.415.922.923.922h1.846a.925.925 0 0 0 .924-.923V3.692a.925.925 0 0 0-.924-.923" />
                                </svg>
                                <span>Рассчитать стоимость</span>
                            </div>
                        </a>
                    </li>
                </ul>

                <?php
                // Получаем основной телефон для футера (mobile)
                $phone_display = '';
                $phone_link = '';
                if (function_exists('mytheme_get_phone')) {
                    $phone_display = mytheme_get_phone('main');
                    $phone_link = mytheme_get_phone_link('main');
                }
                if (!empty($phone_display)):
                ?>
                <a href="tel:<?php echo esc_attr($phone_link); ?>" class="contacts-phone">
                    <div class="d-flex align-items-center gap-3 lh-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                            <path
                                d="M4 3c0-1.655 1.305-3 2.91-3h10.18C18.696 0 20 1.345 20 3v18c0 1.655-1.305 3-2.91 3H6.91C5.304 24 4 22.655 4 21zm5.818 18c0 .413.328.75.728.75h2.909c.4 0 .727-.337.727-.75a.74.74 0 0 0-.728-.75h-2.908c-.4 0-.728.337-.728.75m7.273-18H6.909v15h10.182z" />
                        </svg>
                        <span class="phone-footer"><?php echo esc_html($phone_display); ?></span>
                    </div>
                </a>
                <?php endif; ?>

                <ul class="nav pt-4 pb-3">
                    <?php
                    // Получаем WhatsApp для футера (mobile)
                    $whatsapp = '';
                    if (function_exists('mytheme_get_whatsapp')) {
                        $whatsapp = mytheme_get_whatsapp(true);
                    }
                    if (!empty($whatsapp)):
                    ?>
                    <li class="nav-item">
                        <a class="nav-link ico-button ps-0 pe-2" href="<?php echo esc_url($whatsapp); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.svg">
                        </a>
                    </li>
                    <?php endif; ?>

                    <?php
                    // Получаем Telegram для футера (mobile)
                    $telegram = '';
                    if (function_exists('mytheme_get_telegram')) {
                        $telegram = mytheme_get_telegram();
                    }
                    if (!empty($telegram)):
                    ?>
                    <li class="nav-item">
                        <a class="nav-link ico-button px-2" href="<?php echo esc_url($telegram); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.svg">
                        </a>
                    </li>
                    <?php endif; ?>

                    <?php
                    // Получаем VK для футера (mobile)
                    $vk = '';
                    if (function_exists('mytheme_get_vk')) {
                        $vk = mytheme_get_vk();
                    }
                    if (!empty($vk)):
                    ?>
                    <li class="nav-item">
                        <a class="nav-link ico-button px-2" href="<?php echo esc_url($vk); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk-ico.svg">
                        </a>
                    </li>
                    <?php endif; ?>

                    <?php
                    // Получаем Instagram
                    $instagram = '';
                    if (function_exists('mytheme_get_instagram')) {
                        $instagram = mytheme_get_instagram();
                    }
                    if (!empty($instagram)):
                    ?>
                    <li class="nav-item">
                        <a class="nav-link ico-button px-2" href="<?php echo esc_url($instagram); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/instagram-ico.svg">
                        </a>
                    </li>
                    <?php endif; ?>
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


<?php get_template_part('template-parts/gallery/gallery-modal'); ?>

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
                        <p>
                            <small>
                                Мы свяжемся с Вами в теченее 10 минут и ответим на все вопросы! Для звонка введите
                                Ваше имя и телефон.
                            </small>
                        </p>
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
                        <p>
                            <small>Опишите кухню своими словами, укажите форму, размеры, материалы и другую
                                информацию
                            </small>
                        </p>
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
                            <label class="input-group-text" for="inputGroupFile">Прикрепить</label>
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
                                продукцией и материалами, cделает 3d дизайн-проект, проконсультирует по всем вопросам!
                                Для связи с замерщиком дизайнером введите Ваше имя и телефон.</small></p>
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
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 389 392" class="me-1 svg-icon"
                                style="width: 25px;">
                                <path fill-rule="evenodd" fill="currentColor"
                                    d="M123.255 1.218c-2.135 1.03-4.237 6.018-4.249 10.085-.003.991-.715 4.92-1.582 8.732-1.575 6.924-1.579 6.93-5.75 7.942-2.296.557-6.059 1.658-8.363 2.447l-4.189 1.435-7.758-9.43c-9.45-11.485-9.575-11.505-22.865-3.698-13.76 8.084-13.653 7.819-8.617 21.309C62.147 46.107 64 51.199 64 51.356s-2.797 3.1-6.216 6.54c-6.996 7.04-5.821 6.911-19.022 2.079-11.981-4.385-12.408-4.206-19.739 8.291-7.983 13.608-7.95 13.944 2.227 22.816 4.538 3.956 8.64 7.543 9.116 7.971.48.431-.14 4.588-1.387 9.31l-2.254 8.53-4.839 1.038c-2.662.571-6.763 1.31-9.113 1.643C.936 121.25 0 122.587 0 137.825c0 15.148.291 15.439 18.279 18.245 4.278.667 8.003 1.577 8.278 2.022.532.861 4.443 15.754 4.443 16.92 0 .381-2.602 2.737-5.782 5.235-14.504 11.395-14.498 11.373-6.468 25.722 7.4 13.224 7.47 13.253 20.44 8.592 5.67-2.038 10.797-3.854 11.391-4.037 1.632-.501 13.553 11.931 13.011 13.567-.257.775-2.107 5.875-4.111 11.333-4.236 11.536-4.008 12.959 2.688 16.796 2.382 1.366 7.233 4.151 10.78 6.19 8.381 4.817 9.288 4.508 18.436-6.275l7.517-8.86 8.451 2.113 8.45 2.112 1.534 7.5c.843 4.125 1.826 9.3 2.183 11.5 1.149 7.077 2.086 7.5 16.635 7.5 15.746 0 16.046-.197 17.757-11.615 2.312-15.44 1.694-14.382 9.602-16.415 3.842-.987 7.679-2.072 8.527-2.409 1.089-.434 3.719 2.044 8.966 8.447 9.581 11.693 9.477 11.676 23.044 3.873 12.84-7.385 13.323-8.219 10.011-17.28-1.227-3.356-2.943-8.262-3.815-10.904l-1.585-4.802 6.302-6.359 6.303-6.359 8.116 2.993c14.459 5.331 14.269 5.29 16.812 3.602 3.57-2.37 14.093-21.487 13.384-24.313-.32-1.276-4.598-5.754-9.508-9.953l-8.925-7.633 1.584-5.187c.871-2.852 1.856-6.75 2.19-8.661.545-3.129 1.001-3.54 4.593-4.136C273.608 152.89 272 154.268 272 137.611c0-15.897-.106-16.046-12.972-18.231-13.478-2.289-13.045-2.004-15.146-9.955-2.692-10.191-2.715-10.132 6.703-17.813 4.66-3.8 8.706-7.925 9.027-9.202.818-3.257-11.158-24.258-14.279-25.041-2.001-.502-17.623 4.11-22.178 6.548-1.503.804-2.936-.151-8.216-5.478l-6.395-6.453 3.941-11.379c4.953-14.302 4.964-14.274-8.393-21.857-13.536-7.684-13.339-7.715-22.747 3.59l-7.772 9.34-4.536-1.341a222 222 0 0 0-8.626-2.335l-4.089-.994-1.119-6.755a896 896 0 0 1-1.776-11.165c-1.175-7.889-3.41-9.102-16.632-9.022-6.212.037-12.305.555-13.54 1.15m6.289 11.032c-.216.688-1.308 5.967-2.427 11.733-2.304 11.877-2.616 12.265-11.206 13.955-3.329.655-8.798 2.068-12.153 3.139-7.949 2.54-8.528 2.277-16.817-7.647-8.174-9.787-6.781-9.241-13.607-5.335-6.108 3.495-6.01 2.274-1.246 15.477C73.689 48.012 75 52.584 75 53.733c0 2.083-17.352 20.421-20.448 21.609-1.646.631-6.451-.702-16.763-4.652l-6.71-2.571-3.04 5.312c-4.003 6.997-4.222 6.382 5.081 14.224 9.974 8.407 10.159 8.869 7.32 18.312-1.246 4.143-2.557 9.108-2.915 11.033-.548 2.949-2.469 8.936-2.896 9.027-.071.015-5.304 1.058-11.629 2.316l-11.5 2.289v13.861l7.5 1.145c16.115 2.461 17.206 3.148 18.435 11.621.38 2.617 1.768 7.927 3.084 11.798 3.051 8.968 2.704 9.814-7.369 17.943-9.104 7.347-9.235 7.712-5.129 14.25 3.454 5.501 2.906 5.354 9.993 2.681 17.23-6.499 15.244-6.87 27.076 5.062 11.429 11.526 11.259 10.893 6.403 23.766-4.326 11.467-4.522 10.158 2.117 14.129l5.609 3.355 2.141-2.371c1.178-1.305 4.164-4.847 6.637-7.872 7.438-9.101 7.999-9.29 17.596-5.936 3.249 1.135 8.356 2.476 11.35 2.979 7.361 1.237 7.88 1.986 10.448 15.071l2.234 11.386 6.657.295c6.251.277 6.686.155 7.12-2 .255-1.262 1.292-6.795 2.305-12.295l1.843-10 3.975-1.177c27.084-8.016 24.784-8.188 33.57 2.51 8.638 10.517 7.44 9.995 13.839 6.018 5.967-3.71 5.972-3.748 1.941-14.69-4.435-12.042-4.479-11.873 5.75-22.468 4.881-5.056 9.514-9.596 10.296-10.088 1.696-1.069 8.346.496 16.701 3.931 7.862 3.232 7.733 3.268 11.368-3.173 3.651-6.469 4.615-4.567-7.74-15.281-8.237-7.144-8.07-6.54-4.825-17.437 1.334-4.48 2.717-10.017 3.073-12.306.934-6.001 2.755-7.104 15.078-9.128l10.924-1.794v-13.785l-11.278-2.216c-13.147-2.585-13.905-3.058-14.797-9.248-.37-2.567-1.778-8.207-3.129-12.532-3.054-9.784-2.726-11.029 4.427-16.784 11.539-9.285 11.586-9.348 9.677-13.086-3.641-7.127-5.361-8.857-7.611-7.653-2.317 1.24-18.702 6.887-19.983 6.887-.451 0-5.385-4.505-10.965-10.011-11.692-11.538-11.558-11.073-6.897-23.893 3.902-10.73 3.924-10.548-1.694-14.075-6.331-3.976-5.81-4.185-13.57 5.435-8.028 9.951-8.808 10.305-16.952 7.701-3.425-1.095-8.703-2.53-11.728-3.187-8.984-1.952-9.551-2.606-11.413-13.169C142.889 9.493 143.886 11 136.45 11c-4.334 0-6.644.418-6.906 1.25M117.5 53.924c-42.279 10.731-70.982 51.152-65.507 92.25 8.962 67.275 81.903 99.242 135.276 59.284 21.954-16.435 33.194-39.67 33.119-68.458-.057-21.838-2.925-30.337-9.667-28.645-3.593.902-4.091 3.481-2.09 10.826 5.725 21.007-.591 48.47-15.227 66.214-34.612 41.962-103.787 32.603-124.877-16.895-8.795-20.641-8.499-45.298.766-64 23.369-47.167 83.04-56.798 119.936-19.358 9.287 9.425 12.59 10.933 14.821 6.765 1.889-3.53.193-6.728-7.836-14.779-20.868-20.925-51.786-30.039-78.714-23.204m10.412 40.087c-16.149 2.733-32.401 19.116-34.475 34.756-.808 6.084.384 8.233 4.563 8.233 3.427 0 4.621-1.4 5.547-6.5 1.123-6.189 4.822-12.663 9.919-17.362 21.929-20.213 55.837-5.468 55.833 24.28-.004 31.337-37.883 45.148-58.575 21.358-5.625-6.467-8.638-7.363-11.266-3.352-4.044 6.171 9.906 19.767 24.949 24.318 37.448 11.326 69.78-32.207 48.945-65.901-9.177-14.841-27.546-22.857-45.44-19.83m-.412 26.085c-10.159 5.792-10.5 6.363-10.5 17.563 0 11.113.238 11.46 12.233 17.8l7.468 3.947 7.399-4.344c11.426-6.708 10.9-5.862 10.9-17.526 0-11.84.085-11.688-9.675-17.363-8.715-5.069-9.068-5.071-17.825-.077m4 9.736c-3.752 2.593-4 3.07-4 7.697 0 4.796.122 4.999 4.41 7.365l4.41 2.433 4.34-2.303c4.279-2.27 4.34-2.376 4.34-7.568 0-5.171-.08-5.313-4.428-7.861-5.28-3.094-4.213-3.122-9.072.237m152.677 81.991c-1.025 1.025-2.643 5.563-3.697 10.37-1.821 8.307-1.974 8.583-5.427 9.785-1.954.68-5.425 2.148-7.713 3.262l-4.161 2.025-8.369-5.133c-4.603-2.822-8.976-5.132-9.718-5.132s-5.342 3.906-10.221 8.681c-10.636 10.408-10.813 11.27-4.371 21.319 5.353 8.352 5.213 6.618 1.307 16.172-3.008 7.357-3.399 7.845-6.75 8.417C209.048 284.323 208 285.45 208 299.932c0 14.749.37 15.355 10.761 17.632 10.311 2.26 10.558 2.433 12.573 8.827.961 3.047 2.179 5.808 2.706 6.134 1.817 1.122.949 3.825-3.54 11.027-6.163 9.889-6.07 10.353 4.17 20.698 10.243 10.348 10.808 10.466 20.33 4.25 8.198-5.352 6.608-5.218 16.056-1.355l7.692 3.146 1.788 8.516c2.513 11.979 2.817 12.193 17.273 12.193 14.487 0 14.538-.034 17.429-11.391 1.245-4.89 2.938-9.267 3.762-9.726 3.867-2.151 12.504-5.883 13.615-5.883 1.432 0 13.16 6.827 13.965 8.129 1.896 3.069 6.453.655 14.83-7.855 10.13-10.29 10.185-10.575 4.019-20.732l-4.571-7.53 2.571-6.426c1.414-3.535 2.571-6.897 2.571-7.471 0-1.581 2.727-2.685 11.239-4.551 10.283-2.253 10.761-2.995 10.761-16.721 0-15.85-.124-15.986-17.705-19.366-2.116-.407-3.425-1.356-3.853-2.796-.357-1.2-1.79-4.772-3.186-7.939l-2.536-5.758 4.64-7.519c6.377-10.334 6.257-11.053-3.522-21.071-10.433-10.689-10.051-10.608-20.417-4.346-8.509 5.139-8.605 5.169-11.75 3.604-1.744-.868-5.22-2.43-7.725-3.472l-4.554-1.894-1.837-8.393c-2.548-11.64-2.923-11.893-17.666-11.893-10.171 0-12.152.263-13.712 1.823m6.819 10.688c-.545 1.433-1.273 4.492-1.618 6.798-1.017 6.806-3.109 10.387-6.459 11.057-1.627.326-6.389 2.176-10.58 4.113-9.55 4.412-10.442 4.388-18.129-.489-7.71-4.89-7.922-4.894-12.507-.198-4.538 4.647-4.563 3.912.411 12.283 4.715 7.937 4.713 8.404-.117 20.425-5.494 13.676-4.656 12.748-13.529 14.988-10.44 2.636-10.468 2.66-10.468 9.036 0 6.256.307 6.521 9.803 8.475 6.843 1.408 11.197 4.107 11.197 6.94 0 2.062 3.734 11.607 5.685 14.534 2.249 3.374 1.47 7.417-2.825 14.646l-4.139 6.968 2.934 3.626c4.742 5.858 5.465 6.019 10.966 2.443 10.347-6.726 10.804-6.795 18.807-2.822 3.89 1.93 9.019 4.021 11.398 4.647 4.901 1.288 5.986 3.118 8.167 13.769l1.28 6.25h13.361l1.787-7.75c2.23-9.676 3.563-11.823 7.759-12.506 1.826-.297 6.753-2.17 10.95-4.163 8.632-4.099 8.949-4.067 17.847 1.805 6.764 4.463 6.788 4.463 11.32-.178 4.568-4.678 4.567-4.753-.112-12.44-5.348-8.787-5.374-8.953-2.308-14.925 1.509-2.939 3.537-7.903 4.507-11.032 2.291-7.39 3.316-8.035 17.866-11.243 2.674-.589 2.75-.795 2.75-7.476v-6.869l-3.75-.645c-13.642-2.343-14.222-2.709-16.757-10.578-.974-3.025-3.09-8.137-4.703-11.361l-2.931-5.861 4.571-7.866c5.496-9.46 5.448-8.649.778-13.209-4.699-4.589-4.773-4.587-12.329.297-7.529 4.866-8.646 4.902-18.004.578-4.074-1.883-8.619-3.727-10.1-4.098-3.911-.982-5.041-2.822-7.291-11.872l-2.016-8.108-6.24-.298c-5.925-.283-6.291-.166-7.232 2.309m-4.24 26.951c-32.165 7.04-49.783 43.746-35.198 73.334 16.163 32.79 58.413 39.69 83.44 13.628 18.612-19.383 19.701-47.154 2.71-69.118-9.008-11.645-18.135-13.534-16.763-3.47.1.736 1.717 2.685 3.593 4.332 23.896 20.98 17.438 59.424-11.958 71.186-7.245 2.899-22.007 2.86-29.36-.076-33.196-13.257-35.546-59.247-3.878-75.889 5.608-2.946 8.418-3.773 14.082-4.145 8.06-.528 11.576-2.232 11.576-5.612q.002-8.164-18.244-4.17m4.744 26.343c-19.78 7.014-24.812 30.357-9.389 43.558 18.987 16.252 47.741-3.691 39.401-27.328-4.177-11.841-19.311-20.025-30.012-16.23m-141.845 8.024c-.91 1.006-1.655 3.388-1.655 5.293 0 3.231-.286 3.541-4.248 4.599-4.17 1.113-4.299 1.071-7.073-2.294-5.913-7.174-12.617-2.009-8.279 6.379 1.32 2.554 1.214 2.894-1.885 6.035-3.276 3.32-3.294 3.325-6.508 1.663-3.824-1.978-7.617-1.31-8.508 1.498-.983 3.097.355 5.871 3.653 7.577 2.221 1.148 2.821 1.997 2.288 3.239-.398.925-.935 2.92-1.195 4.432-.356 2.075-1.042 2.75-2.793 2.75-9.851 0-11.424 10.361-1.7 11.196 3.249.279 3.648.672 4.865 4.804.757 2.569.931 4.636.405 4.817-4.786 1.644-7.514 7.291-4.822 9.983 1.552 1.552 6.283 1.54 8.786-.023 3.239-2.023 9.611 4.663 7.506 7.876-3.12 4.761-1.328 9.347 3.651 9.347 2.007 0 3.229-.827 4.55-3.082 1.66-2.831 2.124-3.031 5.712-2.463 5.254.832 5.595 1.139 5.595 5.033 0 3.886 2.166 6.512 5.371 6.512 3.218 0 4.629-1.876 4.629-6.153 0-3.485.268-3.827 3.75-4.794 5.593-1.554 6.589-1.323 8.453 1.953 4.002 7.033 12.255 1.714 8.413-5.421l-1.767-3.28 3.152-3.153c3.217-3.217 5.395-3.938 6.499-2.152 1.336 2.162 7.485 1.126 8.663-1.459 1.097-2.408-.886-7.513-2.936-7.556-2.722-.058-3.309-1.775-2.162-6.327 1.063-4.225 1.446-4.658 4.119-4.658 4.737 0 6.816-1.64 6.816-5.375 0-3.549-2.727-5.625-7.389-5.625-3.808 0-5.68-7.757-2.463-10.208 4.432-3.376 4.852-3.874 4.852-5.76 0-4.531-5.544-6.44-9.881-3.403-2.238 1.568-2.457 1.5-5.749-1.793-3.405-3.405-3.415-3.439-1.8-6.676 1.935-3.879 1.228-7.772-1.572-8.661-3.075-.976-5.868.348-7.535 3.572-.833 1.611-1.615 2.922-1.739 2.914-.123-.009-2.249-.618-4.724-1.355-4.231-1.259-4.519-1.571-4.825-5.222-.531-6.364-4.819-8.668-8.52-4.579m139.673 4.693c-12.21 9.625-3.394 29.141 11.792 26.104 11.86-2.372 15.486-17.859 6.01-25.671-4.877-4.019-13.001-4.217-17.802-.433m5.718 8.923c-2.845 3.427 1.078 9.221 4.704 6.948 3.568-2.237 2.285-8.393-1.75-8.393-.965 0-2.295.65-2.954 1.445m-151.367 7.098c-19.947 7.318-23.96 34.44-7.105 48.021C154.271 366.823 181 353.781 181 330.888c0-19.038-19.575-32.856-37.321-26.345m2.821 11.03c-7.168 3.727-10.067 9.178-9.273 17.436 1.791 18.636 29.997 18.654 32.496.02 1.711-12.754-12.183-23.198-23.223-17.456m5.5 9.203c-5.012 1.62-6.478 6.746-2.939 10.285 4.544 4.544 13.052-1.247 9.918-6.752-1.595-2.803-4.572-4.31-6.979-3.533" />
                            </svg>
                            <small>Изготовление от 10 дней!</small>
                        </p>
                    </div>
                    <div class="col-6">
                        <p class="mb-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 389 392" class="me-1 svg-icon"
                                style="width: 25px;">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M200 5.167c-4.752 1.339-20 17.538-20 21.248 0 .877-1.8 3.088-5.5 6.755-3.926 3.891-7.015 3.5-19.5-2.471-15.85-7.58-20.007-8.419-26.345-5.319-7.196 3.521-9.415 8.177-10.177 21.353-.581 10.053-2.133 20.091-3.431 22.191-.44.711-7.35 1.917-17.142 2.991-18.098 1.986-21.711 3.271-25.752 9.163-4.112 5.997-2.811 12.015 7.484 34.608 4.203 9.225 2.756 12.248-9.936 20.76-23.455 15.729-24.756 28.076-4.518 42.863 2.026 1.48 4.051 2.697 4.5 2.705s3.404 2.295 6.567 5.083c7.668 6.76 7.653 7.575-.458 24.903-6.159 13.159-7.038 18.081-4.371 24.466 2.8 6.701 8.443 8.942 27.829 11.052 6.91.752 7.272 1.979 2.75 9.328-1.65 2.681-3 5.193-3 5.581s-1.125 2.181-2.5 3.984-2.5 3.555-2.5 3.895-2.403 4.621-5.339 9.515-5.64 9.524-6.007 10.289c-.367.764-1.799 3.19-3.182 5.39s-2.809 4.675-3.169 5.5-2.269 4.2-4.243 7.5c-4.032 6.74-4.027 6.732-11.001 18.629-8.792 14.996-6.911 17.58 11.607 15.947 6.509-.574 14.534-1.239 17.834-1.478a362 362 0 0 0 12.186-1.138l6.185-.704 3.462 7.372c3.408 7.255 8.135 17.442 14.63 31.523 5.457 11.83 9.839 11.158 17.288-2.651 4.785-8.872 20.526-35.867 22.878-39.236 1.05-1.504 2.37-3.754 2.933-5a53 53 0 0 1 2.231-4.297l7.564-12.75c3.497-5.894 6.6-10.717 6.897-10.717.296 0 2.663 1.987 5.26 4.417 9.413 8.804 18.832 7.831 28.236-2.917 2.258-2.581 3.175-1.571 11.358 12.509 3.241 5.576 6.896 11.792 8.122 13.815 1.227 2.022 2.534 4.351 2.906 5.176s3.462 6.225 6.868 12c15.472 26.24 19.153 32.617 19.777 34.265.367.971 1.804 2.197 3.193 2.725 4.28 1.628 6.812-.19 9.932-7.129 1.573-3.499 4.544-9.961 6.602-14.361s5.215-11.263 7.015-15.251c1.801-3.988 3.811-7.696 4.468-8.241.795-.66 8.921-.313 24.341 1.041 31.869 2.798 33.554 1.602 22.875-16.237-6.39-10.675-13.382-22.537-14.707-24.949-.825-1.502-3.272-5.798-5.439-9.547-2.166-3.749-4.416-7.722-5-8.83s-2.007-3.358-3.162-5c-1.156-1.642-4.018-6.527-6.361-10.855-2.342-4.327-5.334-9.452-6.649-11.389-4.463-6.577-3.156-7.748 9.611-8.611 12.681-.858 18.91-3.748 22.048-10.23 3.165-6.539 2.4-10.011-6.262-28.401-4.201-8.919-4.8-15.292-1.743-18.545 1.268-1.35 2.803-2.455 3.411-2.455.607 0 1.753-.9 2.546-2s1.811-2 2.263-2c1.103 0 11.132-7.448 13.814-10.259 11.941-12.515 8.669-22.031-12.472-36.27-10.987-7.4-11.964-8.702-11.307-15.069.314-3.047 1.012-6.072 1.551-6.721 1.888-2.277 8.965-19.623 9.643-23.634.529-3.128.185-5.083-1.509-8.582-3.302-6.821-7.232-8.398-26.483-10.629-11.345-1.314-16.324-2.288-17.113-3.348-1.125-1.512-1.608-4.689-3.464-22.772-1.273-12.402-3.281-16.669-9.583-20.363l-4.664-2.733-6.253 1.64c-5.3 1.39-19.695 7.431-25.659 10.768-5.384 3.013-8.508.806-18.442-13.028a1919 1919 0 0 0-6.967-9.647c-2.317-3.171-11.42-8.43-14.301-8.263-.855.05-3.129.534-5.054 1.077m-.502 15.012c-1.557 1.748-4.961 6.361-7.563 10.25-8.868 13.255-14.706 17.79-22.819 17.722-4.851-.04-7.475-.948-20.804-7.198-15.65-7.338-17.33-6.701-17.907 6.782C129.158 76.834 123.481 84 101.671 84c-17.009 0-21.112 2.146-18.545 9.701.71 2.089 1.66 4.31 2.111 4.935 1.847 2.562 8.619 19.552 9.227 23.152 1.343 7.947-4.393 15.69-18.857 25.455C66.34 153.499 64 156.004 64 159.671c0 3.445-.312 3.139 13.5 13.255 12.601 9.228 17.417 15.175 17.474 21.574.017 1.969-3.867 13.916-5.248 16.139C87.898 213.583 82 228.386 82 230.03c0 2.728 1.075 3.07 12.807 4.075 30.073 2.578 33.614 5.741 35.125 31.369 1.233 20.895 1.446 20.993 22.568 10.32 18.243-9.218 26.934-6.419 39.5 12.723 11.527 17.557 13.217 17.486 26.372-1.112 13.832-19.554 19.412-20.798 42.841-9.549 16.019 7.692 17.664 6.876 17.854-8.856.044-3.575.459-8.75.923-11.5 3.104-18.397 7.144-21.149 34.397-23.433 15.858-1.329 15.67-.719 6.452-20.865-9.775-21.364-7.581-28.14 13.661-42.186 15.34-10.143 15.09-12.648-2.5-25.045-19.274-13.584-20.899-19.983-10.534-41.471C325.368 96.412 328 90.128 328 88.901c0-2.625-5.396-4.051-18.391-4.859-24.944-1.551-28.417-5.339-30.581-33.357-.545-7.048-1.25-13.235-1.568-13.75-.722-1.169-4.914-1.216-7.224-.082-.955.469-3.536 1.651-5.736 2.626s-5.582 2.586-7.516 3.579c-10.71 5.503-19.657 6.543-25.456 2.959C227.97 43.819 219 34.255 219 32.661c0-1.047-5.166-7.889-9.371-12.411-3.803-4.091-6.532-4.11-10.131-.071M197.5 53.62c-17.411 1.5-30.722 5.954-49 16.395-5.482 3.131-6.908 4.284-16.503 13.344-39.349 37.156-43.239 100.748-8.739 142.849 31.856 38.874 82.996 49.865 128.492 27.615 6.738-3.295 12.25-6.403 12.25-6.907a.91.91 0 0 1 .897-.916c2.291 0 18.068-15.318 24.203-23.5 5.606-7.477 13.469-22.759 15.299-29.735a448 448 0 0 1 3.159-11.265c2.105-7.099 2.495-35.17.587-42.25a586 586 0 0 1-2.192-8.435C294.53 85.138 244.556 49.567 197.5 53.62m-5 12.783c-.55.205-3.7.927-7 1.605-10.484 2.154-21.401 6.506-29.5 11.759a4277 4277 0 0 1-5.407 3.501c-9.961 6.432-23.31 22.291-29.237 34.732C95.685 171.893 125.9 236.886 183 250.596c11.536 2.77 33.871 2.569 44.856-.404 20.806-5.629 45.496-23.386 54.723-39.355 16.31-28.228 19.304-55.672 9.198-84.337-1.163-3.3-2.429-6.45-2.813-7s-2.181-3.7-3.993-7c-6.322-11.516-17.765-23.684-29.715-31.598-4.072-2.696-7.623-4.902-7.891-4.902-.269 0-2.823-1.098-5.677-2.44-9.96-4.685-20.177-6.799-34.688-7.177-7.425-.193-13.95-.184-14.5.02m30.322 90.097c-18.194 18.425-33.809 33.497-34.701 33.493-.891-.005-8.557-7.003-17.035-15.553-16.967-17.111-17.931-17.853-22.043-16.949-2.718.597-3.995 2.68-4.029 6.571-.027 3.035 39.817 41.938 42.951 41.938 2.348 0 8.53-5.761 38.463-35.844 19.616-19.714 36.363-36.84 37.216-38.058 2.819-4.025-.727-9.024-6.443-9.084-.715-.008-16.185 15.061-34.379 33.486M108.5 269.65a2391 2391 0 0 0-7.603 13.254c-1.432 2.528-5.145 8.816-8.25 13.974S87 306.406 87 306.589s-2.497 4.495-5.549 9.581c-7.466 12.443-7.497 13.363-.451 13.212 3.025-.066 11.686-.699 19.247-1.408 15.805-1.482 16.206-1.341 19.926 7.001 1.109 2.489 3.5 7.675 5.313 11.525s4.309 9.385 5.549 12.301c3.242 7.622 5.081 6.949 11.76-4.301 2.938-4.95 5.993-10.35 6.789-12 1.548-3.212 2.752-5.245 5.916-9.992 1.1-1.65 2.842-4.577 3.872-6.504 4.722-8.84 6.931-12.622 8.227-14.083.771-.868 1.401-1.874 1.401-2.236 0-.361 2.25-4.409 5-8.994 5.92-9.873 5.852-9.217 1.459-13.941-4.302-4.628-6.996-4.787-15.049-.891-15.133 7.322-20.12 9.141-25.064 9.141-11.707 0-15.65-5.636-17.137-24.5-.994-12.61-2.825-12.77-9.709-.85m183.371-5.9c-1.467 31.285-9.866 37.506-34.696 25.698-15.658-7.445-18.747-7.838-23.054-2.934-2.33 2.655-3.116 4.368-2.723 5.935.5 1.994 7.524 14.697 11.82 21.379.945 1.47 2.408 4.022 3.251 5.672s2.862 5.125 4.486 7.722c1.625 2.598 4.4 7.323 6.167 10.5 1.767 3.178 5.5 9.603 8.296 14.278s5.405 9.288 5.8 10.25c1.3 3.17 4.741 2.099 6.423-2 .846-2.062 3.028-6.9 4.85-10.75a605 605 0 0 0 6.023-13.197c4.687-10.712 2.051-10.282 40.236-6.566 7.376.717 6.528-2.761-5.102-20.939-2.006-3.136-3.648-5.957-3.648-6.27s-1.149-2.388-2.554-4.613-3.429-5.591-4.5-7.48l-3.892-6.87c-2.194-3.871-5.933-10.158-7.794-13.103-.681-1.079-2.153-3.649-3.27-5.712-2.515-4.644-5.922-5.201-6.119-1" />
                            </svg>

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

    <?php
    // Получаем основной телефон
    $phone_link = '';
    if (function_exists('mytheme_get_phone_link')) {
        $phone_link = mytheme_get_phone_link('main');
    }
    if (!empty($phone_link)):
    ?>
    <div id="phoneBtn" class="callback-phone-button" data-bs-toggle="tooltip" data-bs-placement="left"
        data-bs-custom-class="custom-tooltip" data-bs-title="Позвонить">
        <a href="tel:<?php echo esc_attr($phone_link); ?>">
            <div class="callback-phone-button-ico"></div>
        </a>
    </div>
    <?php endif; ?>

    <?php
    // Получаем WhatsApp
    $whatsapp = '';
    if (function_exists('mytheme_get_whatsapp')) {
        $whatsapp = mytheme_get_whatsapp(true);
    }
    if (!empty($whatsapp)):
    ?>
    <div id="whatsappBtn" class="callback-whatsapp-button" data-bs-toggle="tooltip" data-bs-placement="left"
        data-bs-custom-class="custom-tooltip" data-bs-title="Whatsapp">
        <a href="<?php echo esc_url($whatsapp); ?>" target="_blank">
            <div class="callback-whatsapp-button-ico"></div>
        </a>
    </div>
    <?php endif; ?>

    <?php
    // Получаем Telegram
    $telegram = '';
    if (function_exists('mytheme_get_telegram')) {
        $telegram = mytheme_get_telegram();
    }
    if (!empty($telegram)):
    ?>
    <div id="telegramBtn" class="callback-telegram-button" data-bs-toggle="tooltip" data-bs-placement="left"
        data-bs-custom-class="custom-tooltip" data-bs-title="Telegram">
        <a href="<?php echo esc_url($telegram); ?>">
            <div class="callback-telegram-button-ico"></div>
        </a>
    </div>
    <?php endif; ?>
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


<!-- Theme JS -->
<script src="<?php echo get_template_directory_uri(); ?>/js/theme.js"></script>


<script>
    vyezjalo();
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

<?php include get_template_directory() . '/inc/snowflake/snowflake.php'; ?>

</body>

</html>