<section class="section-portfolio archive-portfolio-section-2 bg-white" style="padding-block: 60px;">
    <div class="container">
        <div class="row">
            <div class="col text-lg-center">
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
                    <div class="col text-center mb-4 mb-lg-5">
                        <div class="d-lg-none">
                            <!-- Bootstrap Tabs Navigation -->
                            <div class="nav-scroller mb-0" style="text-transform: uppercase; font-family: 'HelveticaNeueCyr-Light'; font-weight: bold;">
                                <ul class="nav justify-content-lg-center d-flex m-auto" id="myTab" role="tablist">
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
                                            <li class="nav-item">
                                                <span class="nav-link px-0">
                                                    <svg width="6" height="6" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
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
                        <ul class="nav nav-tabs justify-content-center mb-4 d-none d-lg-flex" id="myTab" role="tablist">
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