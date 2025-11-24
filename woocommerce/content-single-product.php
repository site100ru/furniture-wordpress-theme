<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}
?>

<section class="single-product-section bg-white py-md-5 mt-5">
    <div id="product-<?php the_ID(); ?>" <?php wc_product_class('pt-md-3', $product); ?>>
        <div class="container pt-md-3 pb-5 single-product">
            <div class="row " style="padding: 25px 0 0 0;">
                <div class="col breadcrumbs_box">
                    <div class="breadcrumbs">
                        <?php woocommerce_breadcrumb(); ?>
                    </div>
                </div>
            </div>
            <div class="row justify-content-start">
                <div class="col-md-7 single_img h-100">
                    <?php
                    /**
                     * Hook: woocommerce_before_single_product_summary.
                     *
                     * @hooked woocommerce_show_product_sale_flash - 10
                     * @hooked woocommerce_show_product_images - 20
                     */
                    do_action('woocommerce_before_single_product_summary');
                    ?>
                </div>
                <div class="col-md-5" style="width: 100%; max-width: 100%; flex: 1; padding-right: 0;">
                    <div class="summary entry-summary">
                        <div class="row pt-5 pt-md-0 w-100">
                            <div class="col text-dark text-start" style="padding-right: 0;">
                                <?php
                                /**
                                 * Hook: woocommerce_single_product_summary.
                                 *
                                 * @hooked woocommerce_template_single_title - 5
                                 * @hooked woocommerce_template_single_rating - 10
                                 * @hooked woocommerce_template_single_price - 10
                                 * @hooked woocommerce_template_single_excerpt - 20
                                 * @hooked woocommerce_template_single_add_to_cart - 30
                                 * @hooked woocommerce_template_single_meta - 40
                                 * @hooked woocommerce_template_single_sharing - 50
                                 * @hooked WC_Structured_Data::generate_product_data() - 60
                                 */
                                do_action('woocommerce_single_product_summary');
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Gallery wrapper -->
<div id="galleryWrapper" style="background: rgba(0,0,0,0.85); display: none; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 9999;">

    <div id="gallery-<?php the_ID(); ?>" class="carousel slide" data-bs-ride="false" data-bs-interval="false" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
        <div class="carousel-inner h-100">
            <?php
            $attachment_ids = $product->get_gallery_image_ids();
            $videos = get_post_meta(get_the_ID(), '_product_videos', true);
            $count = false;
            // Сначала картинки
            if (!empty($attachment_ids)) {
                foreach ($attachment_ids as $attachment_id) {
            ?>

                    <div class="carousel-item carousel-item-2 h-100<?php if ($count == false) {
                            echo ' active';
                            $count = true;
                        } ?>">
                        <div class="row align-items-center h-100">
                            <div class="col text-center">
                                <img src="<?php echo wp_get_attachment_url($attachment_id); ?>" class="img-fluid" loading="lazy" style="max-width: 90vw; max-height: 90vh;" alt="...">
                            </div>
                        </div>
                    </div>
                <?php
                }
            }

            if (!empty($videos)) {
                foreach ($videos as $video) {
                ?>
                    <div class="carousel-item carousel-item-2 h-100
                    <?php if ($count == false) {echo ' active';$count = true;} ?>">
                        <div class="row align-items-center h-100">
                            <div class="col text-center">
                                <?php if ($video['type'] === 'file'): ?>
                                    <video controls style="max-width: 90vw; max-height: 90vh;">
                                        <source src="<?php echo wp_get_attachment_url($video['video_id']); ?>" type="video/mp4">
                                    </video>
                                    <?php else:
                                    // YouTube/Rutube
                                    $video_url = $video['video_url'];
                                    $youtube_id = '';
                                    $rutube_id = '';

                                    // Парсим YouTube
                                    if (preg_match('/(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $video_url, $matches)) {
                                        $youtube_id = $matches[1];
                                    }

                                    // Парсим Rutube
                                    if (preg_match('/rutube\.ru\/video\/([a-zA-Z0-9]+)/', $video_url, $matches)) {
                                        $rutube_id = $matches[1];
                                    }

                                    if ($youtube_id):
                                    ?>
                                        <div style="position: relative; width: 100%; max-width: 1200px; aspect-ratio: 16/9; object-fit: contain; margin: 0 auto;">
                                            <iframe src="https://www.youtube.com/embed/<?php echo $youtube_id; ?>" frameborder="0" allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; padding-inline: 20px;"></iframe>
                                        </div>
                                    <?php elseif ($rutube_id): ?>
                                        <div style="position: relative; width: 100%; max-width: 1200px; aspect-ratio: 16/9; object-fit: contain; margin: 0 auto;">
                                            <iframe src="https://rutube.ru/play/embed/<?php echo $rutube_id; ?>/" frameborder="0" allow="clipboard-write; autoplay" webkitAllowFullScreen mozallowfullscreen allowFullScreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; padding-inline: 20px;"></iframe>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
        <?php
        $total_slides = count($attachment_ids) + (is_array($videos) ? count($videos) : 0);
        if ($total_slides > 1) {
        ?>
            <button class="carousel-control-prev" type="button" data-bs-target="#gallery-<?php the_ID(); ?>" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#gallery-<?php the_ID(); ?>" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        <?php } ?>
    </div>

    <!-- Кнопка закрытия галереи -->
    <button type="button" onClick="closeGalleryProduct();" class="btn-close btn-close-white" style="position: fixed; top: 25px; right: 25px; z-index: 99999;" aria-label="Close"></button>
</div> <!-- #galleryWrapper -->



<script>
    /* Функция открытия галереи */
    function galleryOnProduct(gal, slideIndex) {
        var galleryWrapper = document.getElementById('galleryWrapper');
        var gallery = document.getElementById(gal);

        if (!galleryWrapper || !gallery) return;

        galleryWrapper.style.display = 'block';
        gallery.style.display = "block";

        // Переключаем на нужный слайд
        if (slideIndex !== undefined) {
            var carousel = bootstrap.Carousel.getInstance(gallery);
            if (!carousel) {
                carousel = new bootstrap.Carousel(gallery, {
                    interval: false,
                    wrap: true
                });
            }
            carousel.to(slideIndex);
        }

        // Блокируем прокрутку страницы
        document.body.style.overflow = 'hidden';
    }

    /* Кнопка закрытия галереи */
    function closeGalleryProduct() {
        var galleryWrapper = document.getElementById('galleryWrapper');
        var gallery = document.getElementById("gallery-<?php the_ID(); ?>");
        
        if (galleryWrapper) galleryWrapper.style.display = 'none';
        if (gallery) gallery.style.display = 'none';
        
        // Останавливаем все видео
        if (gallery) {
            // HTML5 video
            var videos = gallery.querySelectorAll('video');
            videos.forEach(function(video) {
                video.pause();
                video.currentTime = 0;
            });
            
            // YouTube/Rutube iframe - перезагружаем
            var iframes = gallery.querySelectorAll('iframe');
            iframes.forEach(function(iframe) {
                var src = iframe.src;
                iframe.src = '';
                iframe.src = src;
            });
        }
        
        // Разблокируем прокрутку страницы
        document.body.style.overflow = '';
    }

    /* Закрытие по ESC и управление стрелками */
    document.addEventListener('keydown', function(e) {
        var galleryWrapper = document.getElementById('galleryWrapper');
        if (!galleryWrapper || galleryWrapper.style.display === 'none') return;

        var gallery = document.getElementById("gallery-<?php the_ID(); ?>");
        if (!gallery) return;

        var carousel = bootstrap.Carousel.getInstance(gallery);
        if (!carousel) {
            carousel = new bootstrap.Carousel(gallery, {
                interval: false,
                wrap: true
            });
        }

        switch (e.key) {
            case 'Escape':
                e.preventDefault();
                closeGalleryProduct();
                break;
            case 'ArrowLeft':
                e.preventDefault();
                carousel.prev();
                break;
            case 'ArrowRight':
                e.preventDefault();
                carousel.next();
                break;
        }
    });
        
    /* Остановка видео при переключении слайда */
    document.addEventListener('DOMContentLoaded', function() {
        var gallery = document.getElementById("gallery-<?php the_ID(); ?>");
        if (gallery) {
            gallery.addEventListener('slide.bs.carousel', function() {
                // HTML5 video
                var videos = gallery.querySelectorAll('video');
                videos.forEach(function(video) {
                    video.pause();
                });
                
                // YouTube/Rutube iframe
                var iframes = gallery.querySelectorAll('iframe');
                iframes.forEach(function(iframe) {
                    var src = iframe.src;
                    if (src) {
                        iframe.src = '';
                        iframe.src = src;
                    }
                });
            });
        }
    });

    /* Закрытие по клику на фон */
    document.addEventListener('click', function(e) {
        var galleryWrapper = document.getElementById('galleryWrapper');
        if (!galleryWrapper || galleryWrapper.style.display === 'none') return;
        
        // Клик по overlay (не по carousel)
        if (e.target.id === 'galleryWrapper') {
            closeGalleryProduct();
        }
    });
</script>


<!--h2 class="product_title text-corporate-color-2 mb-3">Кухня #099</h2>
<img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-dec.svg" style="margin-bottom: 30px;">
<div class="woocommerce-product-details__short-description">
	<div class="row justify-content-center">
		<div class="col product_info">
			<p>Краткое и красивое описание с конкретными преимуществами этого продукта. Краткое и красивое описание с конкретными преимуществами этого продукта. Краткое и красивое описание с конкретными преимуществами этого продукта.</p>
			<p><strong>Размер:</strong> 1400 х 3800 мм.</p>
			<p><strong>Корпус:</strong> высокопрочный ЛДСП Egger.</p>
			<p><strong>Фасад:</strong> износоустойчивый пластик, ЛДСП Egger.</p>
			<p><strong>Столешница:</strong> влагостойкий  ЛДСП Egger Черный Детройт 5016, Кедр, в глянцевом пластике.</p>
			<p><strong>Фурнитура:</strong> вся используемая фурнитура и интегрированная подсветка производства Hettich (Германия).</p>
			<p><strong>Стоимость представленного образца:</strong> ₽155 000</p>
			<p>Возможно любое индивидуальное изменение характеристик: размеров, материалов, фурнитуры.</p>
			<p><strong>Расчитать стоимость этого образца с учетом Ваших характеристик?</strong> Это бесплатно и ник чему Вас не обязывает!</p>
			<a href="#" style="padding: 7px 30px; margin-top: 25px;" type="button" class="btn btn-lg btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#calculatePriceWithDownloadModal">Да, рассчитайте</a>	
		</div>
	</div>
</div-->


<?php
/**
 * Hook: woocommerce_after_single_product_summary.
 *
 * @hooked woocommerce_output_product_data_tabs - 10
 * @hooked woocommerce_upsell_display - 15
 * @hooked woocommerce_output_related_products - 20
 */
//do_action( 'woocommerce_after_single_product_summary' );
?>


<?php do_action('woocommerce_after_single_product'); ?>