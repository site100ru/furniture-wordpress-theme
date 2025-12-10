<?php
/**
 * Section Projects
 * 
 * Выводит категории товаров (проектов)
 * 
 * Параметры:
 * $args['product_category']    - slug родительской категории (например: 'mebel', 'kuhni'), если не указан - выводятся все категории первого уровня
 * $args['background_color']    - цвет фона (например: 'bg-white', 'bg-light', 'bg-dark'), по умолчанию 'bg-white'
 * $args['card_type']           - тип карточки: 'approximation', 'zoom-card', 'hover-image', по умолчанию 'approximation'
 * 
 * Пример использования:
 * // Все категории первого уровня (непустые)
 * <?php get_template_part('template-parts/section-projects/section-projects', null, array(
 *     'background_color' => 'bg-white',
 *     'card_type' => 'approximation'
 * )); ?>
 * 
 * // Дочерние категории конкретной родительской категории (непустые)
 * <?php get_template_part('template-parts/section-projects/section-projects', null, array(
 *     'product_category' => 'mebel',
 *     'background_color' => 'bg-light',
 *     'card_type' => 'zoom-card'
 * )); ?>
 */

// Получаем параметры
$product_category = isset($args['product_category']) ? $args['product_category'] : '';
$background_color = isset($args['background_color']) ? $args['background_color'] : 'bg-white';
$card_type = isset($args['card_type']) ? $args['card_type'] : 'approximation';

// Определяем parent для категорий
if (!empty($product_category)) {
    // Если указана категория - получаем её дочерние категории
    $parent_term = get_term_by('slug', $product_category, 'product_cat');
    $parent_id = $parent_term ? $parent_term->term_id : 0;
} else {
    // Если не указана - берем категории первого уровня
    $parent_id = 0;
}

// Получаем категории товаров
$categories = get_terms(array(
    'taxonomy'   => 'product_cat',
    'orderby'    => 'name',
    'order'      => 'ASC',
    'hide_empty' => true,
    'parent'     => $parent_id
));

// Выводим блок только если есть категории
if (!empty($categories) && !is_wp_error($categories)) :
?>

<section class="archive-portfolio-section archive-portfolio <?php echo esc_attr($background_color); ?> py-5">
    <div class="container">
        <div class="row">
            <div class="col text-md-center">
                <h2>Каталог проектов</h2>
                <svg style="margin-bottom: 60px;" width="62" height="14" viewBox="0 0 62 14" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                    <rect x="48" width="14" height="14" rx="3" />
                    <rect x="24" width="14" height="14" rx="3" />
                    <rect width="14" height="14" rx="3" />
                </svg>
            </div>
        </div>

        <div class="row text-start">
            <?php foreach ($categories as $category) :
                // Получаем изображение категории
                $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                $image = wp_get_attachment_url($thumbnail_id);
            ?>
                <div class="col-md-6 mb-5">
                    <?php 
                    get_template_part('template-parts/cards/card', null, array(
                        'link' => get_term_link($category),
                        'image' => $image,
                        'title' => $category->name,
                        'card_type' => $card_type
                    ));
                    ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php endif; ?>