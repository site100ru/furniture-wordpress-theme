<?php
/**
 * Template part: Archive Portfolio Slider
 * 
 * Параметры:
 * $args['show_breadcrumbs']    - показывать хлебные крошки (true/false), по умолчанию true
 * $args['breadcrumbs_text']    - текст хлебных крошек после "Услуги /", например "Кухни на заказ"
 * $args['title']               - заголовок секции, по умолчанию "Наши работы"
 * $args['description']         - подзаголовок (section-description), по умолчанию "Представляем с гордостью!"
 * $args['taxonomy_slug']       - slug таксономии для фильтрации (например '06-shkafy')
 * $args['category_link']       - URL ссылки "Показать еще" (например '/portfolio-cat/06-shkafy/')
 * $args['posts_per_page']      - количество постов для вывода, по умолчанию все
 * 
 * 
 * <?php 
 * get_template_part('template-parts/archive-portfolio-slider/archive-portfolio-slider', null, [
 *     'show_breadcrumbs' => true,
 *     'breadcrumbs_text' => 'Кухни на заказ',
 *     'title' => 'Наши работы',
 *     'description' => 'Представляем с гордостью!',
 *     'taxonomy_slug' => '06-shkafy',
 *     'category_link' => '/portfolio-cat/06-shkafy/',
 *     'posts_per_page' => 10
 * ]); 
 * ?>
 */

// Устанавливаем значения по умолчанию
$show_breadcrumbs = isset($args['show_breadcrumbs']) ? $args['show_breadcrumbs'] : true;
$breadcrumbs_text = isset($args['breadcrumbs_text']) ? $args['breadcrumbs_text'] : '';
$title = isset($args['title']) ? $args['title'] : 'Наши работы';
$description = isset($args['description']) ? $args['description'] : 'Представляем с гордостью!';
$taxonomy_slug = isset($args['taxonomy_slug']) ? $args['taxonomy_slug'] : '';
$category_link = isset($args['category_link']) ? $args['category_link'] : '/portfolio/';
$posts_per_page = isset($args['posts_per_page']) ? $args['posts_per_page'] : -1;
?>

<!-- Archive portfolio section -->
<section class="archive-portfolio-section-2 pt-4 bg-white" style="padding-bottom: 60px;">
    <div class="container">
        <?php if ($show_breadcrumbs) : ?>
        <div class="row">
            <div class="col">
                <nav class="woocommerce-breadcrumb breadcrumbs">
                    <a href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" fill="currentColor" viewBox="0 0 24 24" class="svg-icon">
                            <path
                                d="m21.71 11.29-9-9a1 1 0 0 0-1.42 0l-9 9a1 1 0 0 0 1.42 1.42l.29-.3v7.89A1.77 1.77 0 0 0 5.83 22H8.5a1 1 0 0 0 1-1v-4.9a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1V21a1 1 0 0 0 1 1h2.67A1.77 1.77 0 0 0 20 20.3v-7.89l.29.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42" />
                        </svg>
                    </a>
                    <?php if ($breadcrumbs_text) : ?>
                    / Услуги / <?php echo esc_html($breadcrumbs_text); ?>
                    <?php endif; ?>
                </nav>
            </div>
        </div>
        <?php endif; ?>
        
        <div class="row">
            <div class="col text-md-center">
                <h2><?php echo esc_html($title); ?></h2>

                <?php if ($description) : ?>
                <p class="section-description archive-portfolio mb-3"><?php echo esc_html($description); ?></p>
                <?php endif; ?>

                <svg width="62" height="14" viewBox="0 0 62 14" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon mb-5">
                    <rect x="48" width="14" height="14" rx="3" />
                    <rect x="24" width="14" height="14" rx="3" />
                    <rect width="14" height="14" rx="3" />
                </svg>
            </div>
        </div>
        
        <div class="row">
            <?php
            $query_args = [
                'post_type' => 'portfolio',
                'numberposts' => $posts_per_page,
                'posts_per_page' => $posts_per_page
            ];
            
            // Добавляем фильтр по таксономии, если указан slug
            if ($taxonomy_slug) {
                $query_args['portfolio-cat'] = $taxonomy_slug;
            }

            $query = new WP_Query($query_args);
            
            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();
                    
                    // Подсчитываем количество изображений
                    $images_count = 0;
                    for ($i = 1; $i <= 9; $i++) {
                        if (get_post_meta($post->ID, '_img-' . $i)) {
                            $images_count++;
                        }
                    }
                    ?>
                    <div class="col-md-6">
                        <div id="carouselExampleIndicators<?php echo $post->ID; ?>" class="carousel slide mb-4"
                            data-bs-ride="carousel" data-bs-interval="999999999">
                            
                            <?php if ($images_count > 1) : ?>
                            <div class="carousel-indicators" style="bottom: 5%;">
                                <?php
                                $count2 = 0;
                                for ($i = 1; $i <= 9; $i++) {
                                    if (get_post_meta($post->ID, '_img-' . $i)) { ?>
                                        <button type="button" data-bs-target="#carouselExampleIndicators<?php echo $post->ID; ?>"
                                            data-bs-slide-to="<?php echo $i - 1; ?>" 
                                            <?php if ($i == 1) echo ' class="active"'; ?>
                                            aria-current="true" 
                                            aria-label="Slide <?php echo $i; ?>"></button>
                                <?php $count2++;
                                    }
                                }
                                ?>
                            </div>
                            <?php endif; ?>
                            
                            <div class="carousel-inner ">
                                <?php
                                $count2 = 0;
                                for ($i = 1; $i <= 9; $i++) {
                                    if (get_post_meta($post->ID, '_img-' . $i)) { ?>
                                        <div class="carousel-item <?php if ($i == 1) echo ' active'; ?>" data-bs-interval="999999999">
                                            <a onClick="galleryOn('gallery-<?php echo $post->ID; ?>','img-<?php echo $post->ID; ?>-<?php echo $count2; ?>');">
                                                <div class="single-product-img approximation">
                                                    <img src="<?php echo get_post_meta($post->ID, '_img-' . $i)[0]; ?>"
                                                        class="shadow " 
                                                        alt="<?php echo esc_attr(get_the_title()); ?>" 
                                                        loading="lazy">
                                                    <div class="magnifier"></div>
                                                </div>
                                            </a>
                                        </div>
                                <?php $count2++;
                                    }
                                }
                                ?>
                            </div>
                            
                            <?php if ($images_count > 1) : ?>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators<?php echo $post->ID; ?>" 
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Предыдущий</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators<?php echo $post->ID; ?>" 
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Следующий</span>
                            </button>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile;
            else : ?>
                <div class="col-12 text-center py-5">
                    <p>Работы не найдены.</p>
                </div>
            <?php endif;

            wp_reset_postdata();
            ?>
        </div>
        
        <?php if ($category_link) : ?>
        <div class="row text-md-center">
            <div class="col">
                <a href="<?php echo esc_url($category_link); ?>" type="button" class="btn btn-lg btn-corporate-color-1">Показать еще</a>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
<!-- /Archive-portfolio section -->