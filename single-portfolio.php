<?php
/**
 * Single Portfolio Template
 */

get_header();

while (have_posts()) : the_post();
?>

<article id="post-<?php the_ID(); ?>">
    <h1><?php the_title(); ?></h1>
    
    <?php
    // Получаем видео
    $videos = get_post_meta(get_the_ID(), '_product_videos', true);
    
    // Проверяем есть ли контент
    if (!empty($videos)) :
    ?>
    
    <!-- Превью слайдер -->
    <div id="carousel-<?php the_ID(); ?>" class="carousel slide" style="max-width: 600px; margin: 20px 0;">
        <div class="carousel-inner">
            <?php
            $count = false;
            $slide_index = 0;
            
            // Видео
            foreach ($videos as $video) {
                $preview = wp_get_attachment_image_url($video['preview_id'], 'large');
            ?>
                <div class="carousel-item<?php if ($count == false) { echo ' active'; $count = true; } ?>">
                    <a href="#" onclick="galleryOnProduct('gallery-<?php the_ID(); ?>', <?php echo $slide_index; ?>); return false;">
                        <img src="<?php echo $preview; ?>" class="d-block w-100">
                    </a>
                </div>
            <?php
                $slide_index++;
            }
            ?>
        </div>
        
        <?php if (count($videos) > 1) : ?>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-<?php the_ID(); ?>" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel-<?php the_ID(); ?>" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
        <?php endif; ?>
    </div>
    
    <!-- Модальное окно -->
    <div id="galleryWrapper" style="background: rgba(0,0,0,0.85); display: none; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 9999;">
        
        <div id="gallery-<?php the_ID(); ?>" class="carousel slide" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
            <div class="carousel-inner h-100">
                <?php
                $count = false;
                
                foreach ($videos as $video) {
                ?>
                    <div class="carousel-item h-100<?php if ($count == false) { echo ' active'; $count = true; } ?>">
                        <div class="row align-items-center h-100">
                            <div class="col text-center">
                                <?php if ($video['type'] === 'file'): ?>
                                    <video controls style="max-width: 90vw; max-height: 90vh;">
                                        <source src="<?php echo wp_get_attachment_url($video['video_id']); ?>" type="video/mp4">
                                    </video>
                                <?php else: 
                                    $video_url = $video['video_url'];
                                    $youtube_id = '';
                                    $rutube_id = '';
                                    
                                    if (preg_match('/(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $video_url, $matches)) {
                                        $youtube_id = $matches[1];
                                    }
                                    
                                    if (preg_match('/rutube\.ru\/video\/([a-zA-Z0-9]+)/', $video_url, $matches)) {
                                        $rutube_id = $matches[1];
                                    }
                                    
                                    if ($youtube_id):
                                ?>
                                    <iframe width="1200" height="675" src="https://www.youtube.com/embed/<?php echo $youtube_id; ?>" frameborder="0" allowfullscreen style="max-width: 90vw; max-height: 90vh;"></iframe>
                                <?php elseif ($rutube_id): ?>
                                    <iframe width="1200" height="675" src="https://rutube.ru/play/embed/<?php echo $rutube_id; ?>/" frameborder="0" allowfullscreen style="max-width: 90vw; max-height: 90vh;"></iframe>
                                <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            
            <?php if (count($videos) > 1) : ?>
            <button class="carousel-control-prev" type="button" data-bs-target="#gallery-<?php the_ID(); ?>" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#gallery-<?php the_ID(); ?>" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
            <?php endif; ?>
        </div>

        <button type="button" onclick="closeGalleryProduct();" class="btn-close btn-close-white" style="position: fixed; top: 25px; right: 25px; z-index: 99999;"></button>
    </div>
    
    <script>
        function galleryOnProduct(gal, slideIndex) {
            var galleryWrapper = document.getElementById('galleryWrapper');
            var gallery = document.getElementById(gal);
            if (!galleryWrapper || !gallery) return;
            
            galleryWrapper.style.display = 'block';
            gallery.style.display = "block";
            
            if (slideIndex !== undefined) {
                var carousel = bootstrap.Carousel.getInstance(gallery);
                if (!carousel) {
                    carousel = new bootstrap.Carousel(gallery, { interval: false });
                }
                carousel.to(slideIndex);
            }
            
            document.body.style.overflow = 'hidden';
        }

        function closeGalleryProduct() {
            document.getElementById('galleryWrapper').style.display = 'none';
            document.getElementById('gallery-<?php the_ID(); ?>').style.display = 'none';
            document.body.style.overflow = '';
        }
        
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && document.getElementById('galleryWrapper').style.display !== 'none') {
                closeGalleryProduct();
            }
        });
    </script>
    
    <?php endif; ?>
    
    <div class="content">
        <?php the_content(); ?>
    </div>
</article>

<?php
endwhile;

get_footer();