<?php
/**
 * Breadcrumbs Component
 * 
 * Универсальный компонент хлебных крошек
 * 
 * Параметры:
 * $args['items'] - массив элементов крошек, каждый элемент:
 *     [
 *         'text' => 'Текст',
 *         'link' => 'URL' // опционально, если нужна ссылка
 *     ]
 * 
 * Пример использования:
 * <?php get_template_part('template-parts/breadcrumbs/breadcrumbs', null, array(
 *     'items' => [
 *         ['text' => 'Услуги', 'link' => '/services/'],
 *         ['text' => 'Подуслуги', 'link' => '/services/sub/'],
 *         ['text' => 'Услуга'] // последний без ссылки
 *     ]
 * )); ?>
 */

$items = isset($args['items']) ? $args['items'] : [];

// Если нет элементов - ничего не выводим
if (empty($items)) {
    return;
}
?>

<div class="row">
    <div class="col">
        <nav class="woocommerce-breadcrumb breadcrumbs">
            <!-- Иконка домой -->
            <a href="/">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" fill="currentColor" viewBox="0 0 24 24" class="svg-icon">
                    <path d="m21.71 11.29-9-9a1 1 0 0 0-1.42 0l-9 9a1 1 0 0 0 1.42 1.42l.29-.3v7.89A1.77 1.77 0 0 0 5.83 22H8.5a1 1 0 0 0 1-1v-4.9a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1V21a1 1 0 0 0 1 1h2.67A1.77 1.77 0 0 0 20 20.3v-7.89l.29.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42" />
                </svg>
            </a>
            
            <?php foreach ($items as $item) : ?>
                / 
                <?php if (!empty($item['link'])) : ?>
                    <a href="<?php echo esc_url($item['link']); ?>">
                        <?php echo esc_html($item['text']); ?>
                    </a>
                <?php else : ?>
                    <?php echo esc_html($item['text']); ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </nav>
    </div>
</div>