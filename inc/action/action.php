<?php
/**
 * Action Custom Post Type and Taxonomy
 * Кастомный тип записи "Акции" и его таксономия
 */

/**
 * Регистрация типа записи "Акции"
 */
function register_action_post_type() {
    $labels = array(
        'name'               => 'Акции',
        'singular_name'      => 'Акция',
        'menu_name'          => 'Акции',
        'add_new'            => 'Добавить акцию',
        'add_new_item'       => 'Добавить новую акцию',
        'edit_item'          => 'Редактировать акцию',
        'new_item'           => 'Новая акция',
        'view_item'          => 'Посмотреть акцию',
        'search_items'       => 'Найти акцию',
        'not_found'          => 'Акций не найдено',
        'not_found_in_trash' => 'В корзине акций не найдено',
        'all_items'          => 'Все акции'
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'query_var'           => true,
        'rewrite'             => array('slug' => 'action'),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-megaphone',
        'supports'            => array('title', 'editor', 'thumbnail'),
        'show_in_rest'        => false
    );

    register_post_type('action', $args);
}
add_action('init', 'register_action_post_type');

/**
 * Регистрация таксономии (категорий) для акций
 */
function register_action_taxonomy() {
    $labels = array(
        'name'              => 'Категории акций',
        'singular_name'     => 'Категория акции',
        'search_items'      => 'Найти категорию',
        'all_items'         => 'Все категории',
        'parent_item'       => 'Родительская категория',
        'parent_item_colon' => 'Родительская категория:',
        'edit_item'         => 'Редактировать категорию',
        'update_item'       => 'Обновить категорию',
        'add_new_item'      => 'Добавить новую категорию',
        'new_item_name'     => 'Новое название категории',
        'menu_name'         => 'Категории'
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'category-action'),
        'show_in_rest'      => false
    );

    register_taxonomy('action_category', array('action'), $args);
}
add_action('init', 'register_action_taxonomy');

/**
 * Включение поддержки миниатюр (featured images)
 */
function action_theme_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'action_theme_setup');

/**
 * Добавляем метабокс для выбора типа показа акции
 */
function action_display_type_metabox() {
    add_meta_box(
        'action_display_type',
        'Тип отображения акции',
        'action_display_type_callback',
        'action',
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'action_display_type_metabox');

function action_display_type_callback($post) {
    wp_nonce_field('action_display_type_nonce', 'action_display_type_nonce');
    $value = get_post_meta($post->ID, '_action_display_type', true);
    ?>
    <label>
        <input type="radio" name="action_display_type" value="page" <?php checked($value, 'page'); ?> <?php if(empty($value)) echo 'checked'; ?>>
        Открывать страницу акции
    </label>
    <br><br>
    <label>
        <input type="radio" name="action_display_type" value="modal" <?php checked($value, 'modal'); ?>>
        Показывать модальное окно
    </label>
    <?php
}

/**
 * Сохраняем значение метабокса
 */
function save_action_display_type($post_id) {
    if (!isset($_POST['action_display_type_nonce']) || !wp_verify_nonce($_POST['action_display_type_nonce'], 'action_display_type_nonce')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['action_display_type'])) {
        update_post_meta($post_id, '_action_display_type', sanitize_text_field($_POST['action_display_type']));
    }
}
add_action('save_post_action', 'save_action_display_type');