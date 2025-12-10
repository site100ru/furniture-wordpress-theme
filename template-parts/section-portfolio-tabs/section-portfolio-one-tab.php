<?php
/**
 * Section Portfolio One Tab
 * 
 * Выводит портфолио работ с одной вкладкой
 * 
 * Параметры:
 * $args['category']         - slug категории портфолио (например: 'kuhni', 'mebel'), если не указан - выводятся все работы
 * $args['title']            - заголовок секции, по умолчанию 'Последние выполненные работы'
 * $args['background_color'] - цвет фона (например: 'bg-white', 'bg-light', 'bg-dark'), по умолчанию 'bg-white'
 * $args['posts_count']      - количество выводимых работ, по умолчанию 6
 * $args['card_type']        - тип карточки: 'approximation', 'zoom-card', 'hover-image', по умолчанию 'approximation'
 * 
 * Пример использования:
 * // Все работы портфолио
 * <?php get_template_part('template-parts/section-portfolio-tabs/section-portfolio-one-tab', null, array(
 *     'title' => 'Наши работы',
 *     'background_color' => 'bg-white',
 *     'posts_count' => 6,
 *     'card_type' => 'approximation'
 * )); ?>
 * 
 * // Работы конкретной категории
 * <?php get_template_part('template-parts/section-portfolio-tabs/section-portfolio-one-tab', null, array(
 *     'category' => 'kuhni',
 *     'title' => 'Кухни',
 *     'subtitle' => 'Представляем с гордостью!',
 *     'background_color' => 'bg-light',
 *     'posts_count' => 9,
 *     'card_type' => 'zoom-card',
 *     'show_button' => false
 * )); ?>
 */

// Получаем параметры
$category = isset($args['category']) ? $args['category'] : '';
$title = isset($args['title']) ? $args['title'] : 'Последние выполненные работы';
$subtitle = isset($args['subtitle']) ? $args['subtitle'] : '';
$background_color = isset($args['background_color']) ? $args['background_color'] : 'bg-white';
$posts_count = isset($args['posts_count']) ? $args['posts_count'] : 6;
$card_type = isset($args['card_type']) ? $args['card_type'] : 'approximation';
$show_button = isset($args['show_button']) ? $args['show_button'] : true;

// Формируем аргументы запроса
$query_args = array(
    'post_type' => 'portfolio',
    'numberposts' => $posts_count,
    'posts_per_page' => $posts_count,
);

// Если указана категория - добавляем её в запрос
if (!empty($category)) {
    $query_args['portfolio-cat'] = $category;
}

// Получаем работы портфолио
$query = new WP_Query($query_args);

// Выводим блок только если есть работы
if ($query->have_posts()) :
?>

<!-- SECTION PORTFOLIO -->
<section class="section-portfolio archive-portfolio-section-2 <?php echo esc_attr($background_color); ?>" style="padding-block: 60px;">
    <div class="container">
        <div class="row">
            <div class="col text-md-center">
                <h2 style="margin-bottom: 15px;"><?php echo esc_html($title); ?></h2>

                <?php if ($subtitle) : ?>
                    <p class="section-description archive-portfolio mb-3"><?php echo esc_html($subtitle); ?></p>
                <?php endif; ?>

                <svg style="margin-bottom: 60px;" width="62" height="14" viewBox="0 0 62 14" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                    <rect x="48" width="14" height="14" rx="3" />
                    <rect x="24" width="14" height="14" rx="3" />
                    <rect width="14" height="14" rx="3" />
                </svg>
                
                <div class="row">
                    <?php while ($query->have_posts()) :
                        $query->the_post();
                        $post_id = get_the_ID();
                        $image = get_post_meta($post_id, '_img-1', true);
                    ?>
                        <div class="col-md-6 col-lg-4 mb-5">
                            <div onclick="galleryOn('gallery-<?php echo get_the_ID(); ?>', 'img-<?php echo get_the_ID(); ?>-0'); return false;" style="cursor: pointer;">
                                <?php 
                                get_template_part('template-parts/cards/card', null, array(
                                    'image' => $image,
                                    'title' => get_the_title(),
                                    'card_type' => $card_type,
                                    'link' => ''
                                ));
                                ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>

                <?php if ($show_button) : ?>
                    <a href="/portfolio" class="btn btn-lg btn-corporate-color-1 mt-3">
                        Смотреть еще
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION PORTFOLIO -->

<?php
    wp_reset_postdata();
endif;
?>