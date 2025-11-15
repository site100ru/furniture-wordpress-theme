<?php
/**
 * Single product short description
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/short-description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post;

$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );

/* Не выводить short description если оно пустое 
if ( ! $short_description ) {
	return;
} */

?>
<div class="woocommerce-product-details__short-description">
	<div class="row justify-content-center">
		<div class="col">
            <svg width="62" height="14" viewBox="0 0 62 14" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon mb-5">
                    <rect x="48" width="14" height="14" rx="3" />
                    <rect x="24" width="14" height="14" rx="3" />
                    <rect width="14" height="14" rx="3" />
                </svg>

			<?php
				echo $short_description;
				$price = get_post_meta( get_the_ID(), '_regular_price', true);
				
				// ЕСЛИ ЦЕНЫ НЕТ
				if ( $price == null ) { ?>
					<button class="btn btn-lg btn-corporate-color-1 mt-2 px-3 text-light" data-bs-toggle="modal" data-bs-target="#calculatePriceWithoutDownloadModal">Да, рассчитайте</button>
				<?php
					
				// ЕСЛИ ЦЕНА ЕСТЬ
				} else { ?>
					<p><strong>Стоимость:</strong><span class="text-corporate-color-1"> от <?php echo number_format( $price, 0, ',', ' ' ); ?></span> руб.</p>
					
					<?php
						/* Проверяем, содержит ли протукт метку "Портфолио" и в зависимости от результата выводим то или иное описание. */
						
						// ЕСЛИ ЕСТЬ МЕТКА "ПОРТФОЛИО"
						if ( has_term( 'Портфолио', 'product_tag' ) ) { ?>
							<p>Стоимость указана за данный образец. Хотите рассчитаем точную стоимость по Вашим размерам? Это бесплатно и ни к чему Вас не обязывает!</p>
							<button class="btn btn-lg btn-corporate-color-1 mt-2 px-3 text-light" data-bs-toggle="modal" data-bs-target="#calculatePriceWithoutDownloadModal">Да, рассчитайте</button>
						<?php
						
						// ЕСЛИ НЕТ МЕТКИ "ПОРТФОЛИО"
						} else { ?>
							<p>Хотите рассчитаем точную стоимость этого образца по Вашим размерам? Это бесплатно и ни к чему Вас не обязывает!</p>
							<button class="btn btn-lg btn-corporate-color-1 mt-2 px-3 text-light" data-bs-toggle="modal" data-bs-target="#calculatePriceWithoutDownloadModal">Да, рассчитайте</button>
						<?php }
					?>
				<?php }
			?>
		</div>
	</div>
</div>