<?php
/**
 * Service Custom Post Type and Taxonomy
 * Кастомный тип записи "Услуги" и его таксономия
 */

/**
 * Регистрация типа записи "Услуги"
 */
function register_service_post_type() {
    $labels = array(
        'name'               => 'Услуги',
        'singular_name'      => 'Услуга',
        'menu_name'          => 'Услуги',
        'add_new'            => 'Добавить услугу',
        'add_new_item'       => 'Добавить новую услугу',
        'edit_item'          => 'Редактировать услугу',
        'new_item'           => 'Новая услуга',
        'view_item'          => 'Посмотреть услугу',
        'search_items'       => 'Найти услугу',
        'not_found'          => 'Услуг не найдено',
        'not_found_in_trash' => 'В корзине услуг не найдено',
        'all_items'          => 'Все услуги'
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'query_var'           => true,
        'rewrite'             => array('slug' => 'service'),
        'capability_type'     => 'page',
        'has_archive'         => true,
        'hierarchical'        => true,
        'menu_position'       => 6,
        'menu_icon'           => 'dashicons-admin-tools',
        'supports'            => array('title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'),
        'show_in_rest'        => false
    );

    register_post_type('service', $args);
}
add_action('init', 'register_service_post_type');

/**
 * Регистрация таксономии (категорий) для услуг
 */
function register_service_taxonomy() {
    $labels = array(
        'name'              => 'Категории услуг',
        'singular_name'     => 'Категория услуги',
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
        'rewrite'           => array('slug' => 'kategoriya-uslug'),
        'show_in_rest'      => false
    );

    register_taxonomy('service_category', array('service'), $args);
}
add_action('init', 'register_service_taxonomy');

/**
 * Включение поддержки миниатюр (featured images)
 */
function service_theme_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'service_theme_setup');

/**
 * Автоматически добавляем шаблоны из папки templates
 */
function add_service_templates($templates) {
    $templates_dir = get_template_directory() . '/inc/service/templates/';
    
    if (is_dir($templates_dir)) {
        $files = glob($templates_dir . '*.php');
        
        foreach ($files as $file) {
            $template_data = get_file_data($file, array('Template Name' => 'Template Name'));
            
            if (!empty($template_data['Template Name'])) {
                $relative_path = 'inc/service/templates/' . basename($file);
                $templates[$relative_path] = $template_data['Template Name'];
            }
        }
    }
    
    return $templates;
}
add_filter('theme_service_templates', 'add_service_templates');

/**
 * Загружаем шаблон из подпапки
 */
function load_service_template($template) {
    global $post;
    
    if (is_singular('service') && isset($post->ID)) {
        $custom_template = get_post_meta($post->ID, '_wp_page_template', true);
        
        if ($custom_template && $custom_template != 'default') {
            $template_file = get_template_directory() . '/' . $custom_template;
            
            if (file_exists($template_file)) {
                return $template_file;
            }
        }
    }
    
    return $template;
}
add_filter('single_template', 'load_service_template');