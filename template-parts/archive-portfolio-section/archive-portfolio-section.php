<?php

/**
 * Template Part: Archive Portfolio Section
 * 
 * $bg_color - Цвет фона секции (по умолчанию 'bg-white')
 * $category - ID категории или 'all' для всех категорий (по умолчанию 'all')
 * $show_title - Показывать заголовок секции (по умолчанию false)
 * $show_breadcrumbs - Показывать хлебные крошки (по умолчанию false)
 * $show_filter - Показывать фильтр категорий (по умолчанию false)
 * $section_title - Заголовок секции (по умолчанию 'Наши работы')
 * 
 * Примеры
 * <?php get_template_part('template-parts/archive-portfolio-section/archive-portfolio-section', null, [
 *  'bg_color' => 'bg-white',
 *  'category' => 'all',
 *  'show_title' => true,
 *  'show_breadcrumbs' => true,
 *  'show_filter' => true
 *  ]);
 * ?>
 * 
 * 
 * <?php 
 * get_template_part('template-parts/archive-portfolio-section/archive-portfolio-section', null, [
 *     'bg_color' => 'bg-white',
 *     'category' => '01-kuhni', // Slug категории
 *     'show_title' => false,
 *     'show_breadcrumbs' => false,
 *     'show_filter' => false
 * ]); 
 * ?>
 */

// Параметры по умолчанию
$bg_color = isset($args['bg_color']) ? $args['bg_color'] : 'bg-white';
$category = isset($args['category']) ? $args['category'] : 'all';
$show_title = isset($args['show_title']) ? $args['show_title'] : false;
$show_breadcrumbs = isset($args['show_breadcrumbs']) ? $args['show_breadcrumbs'] : false;
$show_filter = isset($args['show_filter']) ? $args['show_filter'] : false;
$section_title = isset($args['section_title']) ? $args['section_title'] : 'Наши работы';

// Если передан slug (строка), преобразуем его в term_id
if ($category !== 'all' && !is_numeric($category)) {
    $term = get_term_by('slug', $category, 'portfolio-cat');
    if ($term) {
        $category = $term->term_id;
    }
}
?>

<!-- Portfolio -->
<section class="archive-portfolio-section-2 pt-4 <?php echo esc_attr($bg_color); ?>" style="padding-bottom: 145px;">
    <div class="container">
        <?php if ($show_breadcrumbs) : ?>
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <nav class="woocommerce-breadcrumb" itemprop="breadcrumb">
                            <a href="/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" fill="currentColor" viewBox="0 0 24 24" class="svg-icon">
                                    <path
                                        d="m21.71 11.29-9-9a1 1 0 0 0-1.42 0l-9 9a1 1 0 0 0 1.42 1.42l.29-.3v7.89A1.77 1.77 0 0 0 5.83 22H8.5a1 1 0 0 0 1-1v-4.9a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1V21a1 1 0 0 0 1 1h2.67A1.77 1.77 0 0 0 20 20.3v-7.89l.29.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42" />
                                </svg>
                            </a> / <a href="#"><?php echo esc_html($section_title); ?></a>
                        </nav>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col">
                <?php if ($show_title) : ?>
                    <div class="row">
                        <div class="col text-md-center">
                            <h2><?php echo esc_html($section_title); ?></h2>
                            <svg width="62" height="14" viewBox="0 0 62 14" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon mb-5">
                                <rect x="48" width="14" height="14" rx="3" />
                                <rect x="24" width="14" height="14" rx="3" />
                                <rect width="14" height="14" rx="3" />
                            </svg>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ($show_filter) : ?>
                    <div class="row">
                        <div class="col text-center mb-4 mb-lg-5">
                            <div class="nav-scroller mb-0">
                                <ul class="nav justify-content-lg-center d-flex m-auto align-items-center tablist" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo ($category === 'all') ? 'active' : ''; ?>" href="/portfolio/">Все</a>
                                    </li>
                                    <?php
                                    $args_terms = [
                                        'taxonomy' => ['portfolio-cat'],
                                        'orderby' => 'slug',
                                        'order' => 'ASC',
                                    ];

                                    $terms = get_terms($args_terms);

                                    foreach ($terms as $term) { ?>
                                        <li class="nav-item">
                                            <span class="nav-link px-0">
                                                <svg width="6" height="6" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                                    <rect width="6" height="6" rx="2" />
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?php echo ($category == $term->term_id) ? 'active' : ''; ?>" href="<?php echo get_term_link($term->term_id); ?>">
                                                <?php echo $term->name; ?>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="d-lg-none text-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="40" fill="currentColor" viewBox="0 0 34 40" class="svg-icon">
                                    <path
                                        d="M30.024 16c-.638 0-1.262.191-1.79.55a3.183 3.183 0 0 0-4.8-1.6 3.158 3.158 0 0 0-4.61-1.705V3.2a3.2 3.2 0 1 0-6.4 0v22.357a.2.2 0 0 1-.13.195.194.194 0 0 1-.231-.047l-2.55-2.548a5.62 5.62 0 0 0-5.788-1.367A2.37 2.37 0 0 0 2.5 25.357l5.259 7.886a26 26 0 0 0 2.754 3.474A10.79 10.79 0 0 0 18.34 40h4a10.925 10.925 0 0 0 10.192-6.901c.462-1.152.699-2.382.697-3.624V19.2a3.2 3.2 0 0 0-3.205-3.2m1.6 13.475a8.1 8.1 0 0 1-.582 3.029 9.33 9.33 0 0 1-8.707 5.896h-4a9.2 9.2 0 0 1-6.667-2.783 24.5 24.5 0 0 1-2.583-3.26L3.831 24.47a.774.774 0 0 1 .394-1.161 4.04 4.04 0 0 1 4.16.979l2.55 2.549a1.81 1.81 0 0 0 3.093-1.28V3.2a1.6 1.6 0 0 1 3.2 0v14.4a.8.8 0 0 0 1.6 0V16a1.6 1.6 0 0 1 3.2 0v2.4a.8.8 0 0 0 1.6 0v-.8a1.6 1.6 0 1 1 3.2 0V20a.8.8 0 0 0 1.6 0v-.8a1.6 1.6 0 0 1 3.2 0z" />
                                    <path
                                        d="M22.101 6.4h6.069l-1.835 1.833a.801.801 0 0 0 1.133 1.133l3.2-3.2a.8.8 0 0 0 0-1.133l-3.2-3.2a.8.8 0 1 0-1.133 1.133L28.17 4.8h-6.069a.8.8 0 1 0 0 1.6M4.501 9.6a.8.8 0 0 0 .567-1.367L3.233 6.4H9.3a.8.8 0 1 0 0-1.6H3.233l1.835-1.834a.801.801 0 1 0-1.133-1.133l-3.2 3.2a.8.8 0 0 0 0 1.133l3.2 3.2a.8.8 0 0 0 .566.234" />
                                </svg>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="row" style="position: relative;">
                    <?php
                    // Формируем аргументы запроса
                    $query_args = [
                        'post_type' => 'portfolio',
                        'numberposts' => 999,
                        'posts_per_page' => 999
                    ];

                    // Если указана конкретная категория
                    if ($category !== 'all' && !empty($category)) {
                        $query_args['tax_query'] = [
                            [
                                'taxonomy' => 'portfolio-cat',
                                'field' => 'term_id',
                                'terms' => $category,
                            ],
                        ];
                    }

                    $query = new WP_Query($query_args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()):
                            $query->the_post();

                            // Проверяем наличие первого изображения
                            $first_img = get_post_meta(get_the_ID(), '_img-1', true);

                            if ($first_img) :
                    ?>
                                <div class="col-md-6 col-lg-4">
                                    <div class="mb-4">
                                        <a href="#" onClick="galleryOn('gallery-<?php echo get_the_ID(); ?>','img-<?php echo get_the_ID(); ?>-0'); return false;">
                                            <div class="zoom-card portfolio approximation">
                                                <img src="<?php echo esc_url($first_img); ?>"
                                                    class="shadow"
                                                    alt="<?php echo esc_attr(get_the_title()); ?>"
                                                    loading="lazy">
                                                <div class="magnifier"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                        <?php
                            endif;
                        endwhile;
                    else: ?>
                        <div class="col-12 text-center py-5">
                            <p>Работы не найдены.</p>
                        </div>
                    <?php endif;

                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div><!-- .row -->
    </div><!-- .container -->
</section>
<!-- /Portfolio -->

<!-- Masonry -->
<script>
    <?php include get_template_directory() . '/template-parts/archive-portfolio-section/js/masonry.js'; ?>
</script>
<script>
    <?php include get_template_directory() . '/template-parts/archive-portfolio-section/js/imagesloaded.js'; ?>
</script>

<!-- Инициализация Masonry для портфолио -->
<script>
    <?php include get_template_directory() . '/template-parts/archive-portfolio-section/js/archive-portfolio-section.js'; ?>
</script>