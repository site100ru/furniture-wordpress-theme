<?php
/**
 * Section Services
 * 
 * Выводит услуги из указанной категории
 * 
 * Параметры:
 * $args['service_category']    - slug категории услуг (например: 'kuhni', 'shkafi'), если не указан - выводятся все услуги
 * $args['background_color']    - цвет фона (например: 'bg-white', 'bg-light', 'bg-dark'), по умолчанию 'bg-light'
 * $args['card_type']           - тип карточки: 'approximation', 'zoom-card', 'hover-image', по умолчанию 'approximation'
 * 
 * Пример использования:
 * // Все услуги
 * <?php get_template_part('template-parts/section-services/section-services', null, array(
 *     'background_color' => 'bg-light',
 *     'card_type' => 'approximation'
 * )); ?>
 * 
 * // Услуги конкретной категории
 * <?php get_template_part('template-parts/section-services/section-services', null, array(
 *     'service_category' => 'kuhni',
 *     'background_color' => 'bg-white',
 *     'card_type' => 'zoom-card'
 * )); ?>
 */

// Получаем параметры
$service_category = isset($args['service_category']) ? $args['service_category'] : '';
$background_color = isset($args['background_color']) ? $args['background_color'] : 'bg-light';
$card_type = isset($args['card_type']) ? $args['card_type'] : 'approximation';

// Формируем запрос услуг
$services_args = array(
    'post_type' => 'service',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC'
);

// Если указана категория - выводим услуги из этой категории
if (!empty($service_category)) {
    $services_args['tax_query'] = array(
        array(
            'taxonomy' => 'service_category',
            'field'    => 'slug',
            'terms'    => $service_category,
        ),
    );
}

$services_query = new WP_Query($services_args);

// Выводим блок только если есть услуги
if ($services_query->have_posts()) :
?>

<!-- Services -->
<section class="archive-portfolio-section archive-portfolio <?php echo esc_attr($background_color); ?> py-5">
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
            <?php while ($services_query->have_posts()) : $services_query->the_post(); 
                // Получаем изображение
                $image = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : '';
            ?>
                <div class="col-md-6 mb-5">
                    <?php 
                    get_template_part('template-parts/cards/card', null, array(
                        'link' => get_permalink(),
                        'image' => $image,
                        'title' => get_the_title(),
                        'card_type' => $card_type
                    ));
                    ?>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<!-- /Services -->

<?php
    wp_reset_postdata();
endif;
?>