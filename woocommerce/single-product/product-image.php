<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.1
 */
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters(
	'woocommerce_single_product_image_gallery_classes',
	array(
		'woocommerce-product-gallery',
		'woocommerce-product-gallery--' . ( $post_thumbnail_id ? 'with-images' : 'without-images' ),
		'woocommerce-product-gallery--columns-' . absint( $columns ),
		'images',
	)
);

$attachment_ids = $product->get_gallery_image_ids();
$videos = get_post_meta(get_the_ID(), '_product_videos', true);

// Проверяем есть ли контент для вывода
if (empty($attachment_ids) && empty($videos)) {
	return; // Ничего не выводим
}
?>

<div id="carousel-<?php the_ID(); ?>" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
	<div class="carousel-inner rounded">
		<?php
            $count = false;
            $slide_index = 0;

            // Картинки
            if (!empty($attachment_ids)) {
                foreach ($attachment_ids as $attachment_id) {
            ?>
                <div class="carousel-item<?php if ($count == false) { echo ' active'; $count = true; } ?>" data-bs-interval="9999">
                    <a onclick="galleryOnProduct('gallery-<?php the_ID(); ?>', <?php echo $slide_index; ?>);">
                        <div class="single-product-img approximation">
                            <img src="<?php echo wp_get_attachment_url($attachment_id); ?>" class="d-block w-100" loading="lazy" alt="...">
                            <div class="magnifier"></div>
                        </div>
                    </a>
                </div>
            <?php 
                    $slide_index++;
                }
            }

            // Видео
            if (!empty($videos)) {
                foreach ($videos as $video) {
                    $preview = wp_get_attachment_image_url($video['preview_id'], 'full');
            ?>
                <div class="carousel-item<?php if ($count == false) { echo ' active'; $count = true; } ?>" data-bs-interval="9999">
                    <a onclick="galleryOnProduct('gallery-<?php the_ID(); ?>', <?php echo $slide_index; ?>);">
                        <div class="single-product-img">
                            <img src="<?php echo $preview; ?>" class="d-block w-100" loading="lazy">
                            <div class="magnifier"></div>
                        </div>
                    </a>
                </div>
            <?php
                    $slide_index++;
                }
            }
            ?>
	</div>
	
	<?php 
	// Считаем общее количество слайдов
	$total_slides = count($attachment_ids) + (is_array($videos) ? count($videos) : 0);
	
	if ($total_slides > 1) { 
	?>
		<button class="carousel-control-prev" type="button" data-bs-target="#carousel-<?php the_ID(); ?>" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carousel-<?php the_ID(); ?>" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	<?php } ?>
</div>