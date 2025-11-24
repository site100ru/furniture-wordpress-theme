<?php
/**
 * 
 * Добавляет функционал галереи изображений для любых типов записей
 * Интерфейс аналогичен галерее товаров WooCommerce
 * 
 */

if (!defined('ABSPATH')) {
    exit;
}

// Глобальная переменная для хранения типов записей
global $gallery_images_post_types;
$gallery_images_post_types = array();

/**
 * Инициализация функционала галереи
 * 
 * @param array $post_types Массив типов записей. Если пустой - применяется ко всем
 */
function init_gallery_images($post_types = array()) {
    global $gallery_images_post_types;
    
    // Если массив пустой, получаем все зарегистрированные типы записей
    if (empty($post_types)) {
        $post_types = get_post_types(array('public' => true), 'names');
        // Исключаем attachment и nav_menu_item
        $post_types = array_diff($post_types, array('attachment', 'nav_menu_item'));
    }
    
    $gallery_images_post_types = $post_types;
    
    // Хуки WordPress
    add_action('add_meta_boxes', 'gallery_images_add_meta_box');
    add_action('save_post', 'gallery_images_save_meta_box', 10, 2);
    add_action('admin_enqueue_scripts', 'gallery_images_enqueue_scripts');
}

/**
 * Добавление мета-бокса галереи
 */
function gallery_images_add_meta_box() {
    global $gallery_images_post_types;
    
    foreach ($gallery_images_post_types as $post_type) {
        add_meta_box(
            'gallery_images_meta_box',
            __('Галерея изображений', 'gallery-images'),
            'gallery_images_meta_box_callback',
            $post_type,
            'side',
            'low'
        );
    }
}

/**
 * Вывод содержимого мета-бокса
 */
function gallery_images_meta_box_callback($post) {
    wp_nonce_field('gallery_images_save', 'gallery_images_nonce');
    
    $gallery_ids = get_post_meta($post->ID, '_gallery_image_ids', true);
    $gallery_ids = !empty($gallery_ids) ? explode(',', $gallery_ids) : array();
    ?>
    <div id="gallery_images_container" class="gallery-images-container">
        <ul class="gallery-images-list">
            <?php
            if (!empty($gallery_ids)) {
                foreach ($gallery_ids as $attachment_id) {
                    if ($attachment_id && wp_attachment_is_image($attachment_id)) {
                        $image = wp_get_attachment_image($attachment_id, 'thumbnail');
                        echo '<li class="gallery-image" data-attachment-id="' . esc_attr($attachment_id) . '">';
                        echo $image;
                        echo '<a href="#" class="delete-gallery-image" title="' . esc_attr__('Удалить изображение', 'gallery-images') . '">×</a>';
                        echo '</li>';
                    }
                }
            }
            ?>
        </ul>
        <input type="hidden" id="gallery_image_ids" name="gallery_image_ids" value="<?php echo esc_attr(implode(',', $gallery_ids)); ?>">
        <p class="gallery-actions">
            <a href="#" class="button add-gallery-images">
                <?php _e('Добавить изображения', 'gallery-images'); ?>
            </a>
        </p>
    </div>
    <?php
}

/**
 * Сохранение данных мета-бокса
 */
function gallery_images_save_meta_box($post_id, $post) {
    // Проверка nonce
    if (!isset($_POST['gallery_images_nonce']) || !wp_verify_nonce($_POST['gallery_images_nonce'], 'gallery_images_save')) {
        return;
    }
    
    // Проверка автосохранения
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    // Проверка прав пользователя
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    // Проверка типа записи
    global $gallery_images_post_types;
    if (!in_array($post->post_type, $gallery_images_post_types)) {
        return;
    }
    
    // Сохранение данных
    if (isset($_POST['gallery_image_ids'])) {
        $gallery_ids = sanitize_text_field($_POST['gallery_image_ids']);
        
        // Валидация: проверяем что это действительно ID изображений
        $ids_array = array_filter(array_map('intval', explode(',', $gallery_ids)));
        $validated_ids = array();
        
        foreach ($ids_array as $id) {
            if (wp_attachment_is_image($id)) {
                $validated_ids[] = $id;
            }
        }
        
        if (!empty($validated_ids)) {
            update_post_meta($post_id, '_gallery_image_ids', implode(',', $validated_ids));
        } else {
            delete_post_meta($post_id, '_gallery_image_ids');
        }
    } else {
        delete_post_meta($post_id, '_gallery_image_ids');
    }
}

/**
 * Подключение скриптов и стилей
 */
function gallery_images_enqueue_scripts($hook) {
    // Загружаем только на страницах редактирования записей
    if (!in_array($hook, array('post.php', 'post-new.php'))) {
        return;
    }
    
    global $post, $gallery_images_post_types;
    
    // Проверяем тип записи
    if (!isset($post->post_type) || !in_array($post->post_type, $gallery_images_post_types)) {
        return;
    }
    
    // Подключаем медиа-библиотеку WordPress
    wp_enqueue_media();
    
    // Подключаем jQuery UI для сортировки
    wp_enqueue_script('jquery-ui-sortable');
    
    // Подключаем наши стили
    wp_enqueue_style(
        'gallery-images-admin',
        get_template_directory_uri() . '/inc/gallery-images/assets/admin.css',
        array(),
        '1.0.0'
    );
    
    // Подключаем наш скрипт
    wp_enqueue_script(
        'gallery-images-admin',
        get_template_directory_uri() . '/inc/gallery-images/assets/admin.js',
        array('jquery', 'jquery-ui-sortable'),
        '1.0.0',
        true
    );
    
    // Передаем переводы в JavaScript
    wp_localize_script('gallery-images-admin', 'galleryImagesL10n', array(
        'title' => __('Добавить изображения в галерею', 'gallery-images'),
        'button' => __('Добавить в галерею', 'gallery-images'),
    ));
}
