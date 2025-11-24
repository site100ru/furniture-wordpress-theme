<?php
/**
 * Product Video Gallery
 * Добавление видео к товарам WooCommerce
 * 
 * @package ProductVideo
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class WC_Product_Video {
    
    /**
     * Единственный экземпляр класса
     */
    private static $instance = null;
    
    /**
     * Получить экземпляр класса
     */
    public static function get_instance() {
        if ( null === self::$instance ) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    /**
     * Конструктор
     */
    private function __construct() {
        // Путь к папке с плагином
        define( 'WC_PRODUCT_VIDEO_PATH', dirname( __FILE__ ) );
        define( 'WC_PRODUCT_VIDEO_URL', get_template_directory_uri() . '/inc/product-video' );
        
        // Хуки
        add_action( 'add_meta_boxes', array( $this, 'add_video_meta_box' ), 30 );
        add_action( 'save_post', array( $this, 'save_video_meta' ) );
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_assets' ) );
    }
    
    /**
     * Подключение стилей и скриптов в админке
     */
    public function enqueue_admin_assets( $hook ) {
        global $post_type;
        
        // Типы записей с поддержкой видео
        $allowed_types = apply_filters('product_video_post_types', array('product'));

        if ( ( 'post.php' === $hook || 'post-new.php' === $hook ) && in_array($post_type, $allowed_types) ) {
            
            // Подключаем медиабиблиотеку WordPress
            wp_enqueue_media();
            
            // Стили
            wp_enqueue_style(
                'wc-product-video-admin',
                WC_PRODUCT_VIDEO_URL . '/assets/admin.css',
                array(),
                '1.0.0'
            );
            
            // Скрипты
            wp_enqueue_script(
                'wc-product-video-admin',
                WC_PRODUCT_VIDEO_URL . '/assets/admin.js',
                array( 'jquery' ),
                '1.0.0',
                true
            );
            
            // Переменные для JS
            wp_localize_script( 'wc-product-video-admin', 'wcProductVideo', array(
                'selectPreview' => __( 'Выберите превью', 'woocommerce' ),
                'selectVideo' => __( 'Выберите видео', 'woocommerce' ),
                'usePreview' => __( 'Использовать превью', 'woocommerce' ),
                'useVideo' => __( 'Использовать видео', 'woocommerce' ),
            ) );
        }
    }

    /**
     * Добавление метабокса
     */
    public function add_video_meta_box() {
        // Типы записей с поддержкой видео
        $post_types = apply_filters('product_video_post_types', array('product'));
        
        foreach ($post_types as $post_type) {
            add_meta_box(
                'wc_product_video',
                __( 'Видео', 'woocommerce' ),
                array( $this, 'render_video_meta_box' ),
                $post_type,
                'side',
                'default'
            );
        }
    }
    
    /**
     * Отрисовка метабокса
     */
    public function render_video_meta_box( $post ) {
        // Nonce для безопасности
        wp_nonce_field( 'wc_product_video_save', 'wc_product_video_nonce' );
        
        // Получаем сохраненные видео
        $videos = get_post_meta( $post->ID, '_product_videos', true );
        if ( ! is_array( $videos ) ) {
            $videos = array();
        }
        
        ?>
        <div id="product-videos-container">
            <div id="product-videos-list">
                <?php
                if ( ! empty( $videos ) ) {
                    foreach ( $videos as $index => $video ) {
                        $this->render_video_item( $index, $video );
                    }
                }
                ?>
            </div>
            
            <button type="button" class="button button-primary" id="add-product-video">
                <?php _e( 'Добавить видео', 'woocommerce' ); ?>
            </button>
        </div>
        
        <!-- Шаблон для нового видео -->
        <script type="text/html" id="tmpl-product-video-item">
            <?php 
            ob_start();
            $this->render_video_item( '{{data.index}}', array() ); 
            $template = ob_get_clean();
            echo $template;
            ?>
        </script>
        <?php
    }
    
    /**
     * Отрисовка элемента видео
     */
    private function render_video_item( $index, $video = array() ) {
        $preview_id = isset( $video['preview_id'] ) ? $video['preview_id'] : '';
        $preview_url = $preview_id ? wp_get_attachment_image_url( $preview_id, 'thumbnail' ) : '';
        $video_type = isset( $video['type'] ) ? $video['type'] : 'file';
        $video_id = isset( $video['video_id'] ) ? $video['video_id'] : '';
        $video_url_value = isset( $video['video_url'] ) ? $video['video_url'] : '';
        $video_file_url = $video_id ? wp_get_attachment_url( $video_id ) : '';
        ?>
        <div class="product-video-item" data-index="<?php echo esc_attr( $index ); ?>">
            <div class="video-item-header">
                <span class="video-item-title"><?php _e( 'Видео', 'woocommerce' ); ?> #<span class="video-number"><?php echo esc_html( is_numeric( $index ) ? $index + 1 : 1 ); ?></span></span>
                <button type="button" class="button-link-delete remove-video">
                    <?php _e( 'Удалить', 'woocommerce' ); ?>
                </button>
            </div>
            
            <!-- Превью -->
            <div class="video-preview-wrap">
                <label><?php _e( 'Превью:', 'woocommerce' ); ?></label>
                <div class="video-preview-container">
                    <?php if ( $preview_url ) : ?>
                        <img src="<?php echo esc_url( $preview_url ); ?>" class="video-preview-image" />
                    <?php endif; ?>
                    <input type="hidden" 
                           name="product_videos[<?php echo esc_attr( $index ); ?>][preview_id]" 
                           class="video-preview-id" 
                           value="<?php echo esc_attr( $preview_id ); ?>" />
                </div>
                <button type="button" class="button select-preview">
                    <?php echo $preview_url ? __( 'Изменить превью', 'woocommerce' ) : __( 'Выбрать превью', 'woocommerce' ); ?>
                </button>
            </div>
            
            <!-- Toggle переключатель -->
            <div class="video-type-toggle">
                <label class="toggle-label">
                    <input type="radio" 
                           name="product_videos[<?php echo esc_attr( $index ); ?>][type]" 
                           value="file" 
                           class="video-type-radio"
                           <?php checked( $video_type, 'file' ); ?> />
                    <span><?php _e( 'Файл', 'woocommerce' ); ?></span>
                </label>
                <label class="toggle-label">
                    <input type="radio" 
                           name="product_videos[<?php echo esc_attr( $index ); ?>][type]" 
                           value="url" 
                           class="video-type-radio"
                           <?php checked( $video_type, 'url' ); ?> />
                    <span><?php _e( 'URL', 'woocommerce' ); ?></span>
                </label>
            </div>
            
            <!-- Загрузка файла -->
            <div class="video-file-wrap <?php echo $video_type === 'file' ? 'active' : ''; ?>">
                <label><?php _e( 'Видеофайл (.mp4):', 'woocommerce' ); ?></label>
                <div class="video-file-info">
                    <?php if ( $video_file_url ) : ?>
                        <span class="video-filename"><?php echo esc_html( basename( $video_file_url ) ); ?></span>
                    <?php else : ?>
                        <span class="video-filename no-file"><?php _e( 'Файл не выбран', 'woocommerce' ); ?></span>
                    <?php endif; ?>
                </div>
                <input type="hidden" 
                       name="product_videos[<?php echo esc_attr( $index ); ?>][video_id]" 
                       class="video-file-id" 
                       value="<?php echo esc_attr( $video_id ); ?>" />
                <button type="button" class="button select-video-file">
                    <?php _e( 'Выбрать видео', 'woocommerce' ); ?>
                </button>
            </div>
            
            <!-- URL видео -->
            <div class="video-url-wrap <?php echo $video_type === 'url' ? 'active' : ''; ?>">
                <label><?php _e( 'Ссылка на видео:', 'woocommerce' ); ?></label>
                <input type="text" 
                       name="product_videos[<?php echo esc_attr( $index ); ?>][video_url]" 
                       class="video-url-input widefat" 
                       value="<?php echo esc_attr( $video_url_value ); ?>"
                       placeholder="https://www.youtube.com/watch?v=... или https://rutube.ru/video/.../" />
                <small class="description">
                    <?php _e( 'Поддерживается YouTube и Rutube', 'woocommerce' ); ?>
                </small>
            </div>
        </div>
        <?php
    }
    
    /**
     * Сохранение метаданных
     */
    public function save_video_meta( $post_id ) {
        error_log('SAVE_VIDEO_META CALLED for post: ' . $post_id);
        error_log('POST DATA: ' . print_r($_POST['product_videos'] ?? 'NO DATA', true));
    
        // Проверки безопасности
        if ( ! isset( $_POST['wc_product_video_nonce'] ) ) {
            return;
        }
        
        if ( ! wp_verify_nonce( $_POST['wc_product_video_nonce'], 'wc_product_video_save' ) ) {
            return;
        }
        
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
            return;
        }
        
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }
        
        // Получаем и очищаем данные
        $videos = array();
        
        if ( isset( $_POST['product_videos'] ) && is_array( $_POST['product_videos'] ) ) {
            foreach ( $_POST['product_videos'] as $video_data ) {
                // Пропускаем пустые элементы
                if ( empty( $video_data['preview_id'] ) ) {
                    continue;
                }
                
                $video = array(
                    'preview_id' => absint( $video_data['preview_id'] ),
                    'type' => sanitize_text_field( $video_data['type'] ),
                );
                
                if ( $video['type'] === 'file' && ! empty( $video_data['video_id'] ) ) {
                    $video['video_id'] = absint( $video_data['video_id'] );
                } elseif ( $video['type'] === 'url' && ! empty( $video_data['video_url'] ) ) {
                    $video['video_url'] = esc_url_raw( $video_data['video_url'] );
                }
                
                $videos[] = $video;
            }
        }
        
        // Сохраняем или удаляем метаданные
        if ( ! empty( $videos ) ) {
            update_post_meta( $post_id, '_product_videos', $videos );
        } else {
            delete_post_meta( $post_id, '_product_videos' );
        }
    }
}

// Инициализация
function wc_product_video_init() {
    if ( ! class_exists( 'WooCommerce' ) ) {
        return;
    }
    WC_Product_Video::get_instance();
}

add_action( 'init', 'wc_product_video_init', 20 );