<?php
/**
 * Section Services
 * 
 * Выводит услуги из указанной категории
 * 
 * Параметры:
 * $args['service_category']    - slug категории услуг (например: 'kuhni', 'shkafi'), если не указан - выводятся все услуги
 * $args['background_color']    - цвет фона (например: 'bg-white', 'bg-light', 'bg-dark'), по умолчанию 'bg-light'
 * 
 * Пример использования:
 * // Все услуги
 * <?php get_template_part('template-parts/section-services/section-services', null, array(
 *     'background_color' => 'bg-light'
 * )); ?>
 * 
 * // Услуги конкретной категории
 * <?php get_template_part('template-parts/section-services/section-services', null, array(
 *     'service_category' => 'kuhni',
 *     'background_color' => 'bg-white'
 * )); ?>
 */

// Получаем параметры
$service_category = isset($args['service_category']) ? $args['service_category'] : '';
$background_color = isset($args['background_color']) ? $args['background_color'] : 'bg-light';

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
            <?php while ($services_query->have_posts()) : $services_query->the_post(); ?>
                <div class="col-md-6 mb-5">
                    <a href="<?php the_permalink(); ?>">
                        <div class="approximation project-container-2 services">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full', array('class' => 'img-fluid', 'alt' => get_the_title())); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/default-service-image.webp" class="img-fluid" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                            <div class="card-wrapper project-container-2-footer">
                                <div class="row" style="height: 100%;">
                                    <div class="col-6">
                                        <h3 style="position: absolute; bottom: 0; width: 100%;"><?php the_title(); ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
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