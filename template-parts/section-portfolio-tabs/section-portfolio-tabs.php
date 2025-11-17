<?php
$category = $args['category'] ?? '';
$title = $args['title'] ?? 'Последние выполненные работы';
$bg_class = $args['bg_class'] ?? 'bg-white';
$section_class = $args['section_class'] ?? 'archive-portfolio-section-2';
$button_text = $args['button_text'] ?? 'Смотреть еще';
$button_url = $args['button_url'] ?? '/furniture/portfolio/';
$posts_count = $args['posts_count'] ?? 6;
$gallery_function = $args['gallery_function'] ?? 'galleryOn';

$query_args = [
    'post_type' => 'portfolio',
    'numberposts' => $posts_count,
    'posts_per_page' => $posts_count,
];

if (!empty($category)) {
    $query_args['portfolio-cat'] = $category;
}

$query = new WP_Query($query_args);
?>

<!-- SECTION PORTFOLIO -->
<section class="section-portfolio <?php echo esc_attr($section_class); ?> <?php echo esc_attr($bg_class); ?>" style="padding-block: 60px;">
    <div class="container">
        <div class="row">
            <div class="col text-md-center">
                <h2 style="margin-bottom: 15px;"><?php echo esc_html($title); ?></h2>
                <svg style="margin-bottom: 60px;" width="62" height="14" viewBox="0 0 62 14" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                    <rect x="48" width="14" height="14" rx="3" />
                    <rect x="24" width="14" height="14" rx="3" />
                    <rect width="14" height="14" rx="3" />

                </svg>
                <div class="row">

                    <?php
                    while ($query->have_posts()):
                        $query->the_post(); ?>
                        <div class="col-md-6 col-lg-4 mb-5">
                            <?php if ($gallery_function === 'portfolioGalleryOpen'): ?>
                                <a onclick="portfolioGalleryOpen( 'portfolio-gallery-<?php echo get_the_ID(); ?>' )">
                            <?php else: ?>
                                <a href="#" onclick="galleryOn('gallery-<?php echo get_the_ID(); ?>', 'img-<?php echo get_the_ID(); ?>-0'); return false;">
                            <?php endif; ?>
                                <div class="approximation approximation-project project-container-2 rounded">
                                    <img src="<?php echo get_post_meta(get_the_ID(), '_img-1')[0]; ?>" class="rounded"
                                        alt="<?php echo get_the_title(); ?>" loading="lazy">
                                    <div class="card-wrapper">
                                        <div class="position-absolute"><?php echo get_the_title(); ?></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile;

                    wp_reset_postdata();
                    ?>
                </div>
                <a href="<?php echo esc_url($button_url); ?>" class="btn btn-lg btn-corporate-color-1"
                    style="margin-top: 12px;"><?php echo esc_html($button_text); ?></a>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION PORTFOLIO -->