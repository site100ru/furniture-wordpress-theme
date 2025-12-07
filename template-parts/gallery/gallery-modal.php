<?php
/**
 * Gallery Modal
 * 
 * Универсальное модальное окно галереи для портфолио
 * Загружает все галереи портфолио и управляет их отображением
 * 
 * Использование:
 * 1. Подключите этот файл один раз в footer или в нужном месте:
 *    <?php get_template_part('template-parts/gallery/gallery-modal'); ?>
 * 
 * 2. Вызывайте галерею из любого места:
 *    <div onclick="galleryOn('gallery-123', 'img-123-0')">Открыть галерею</div>
 * 
 * Параметры функции galleryOn():
 * - galleryId: ID галереи (например: 'gallery-123')
 * - imageId: ID конкретного изображения для открытия (опционально)
 */
?>

<!-- Gallery wrapper -->
<div id="galleryWrapper" style="background: rgba(0,0,0,0.85); display: none; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 9999;">
    <?php
    $posts = get_posts(array(
        'numberposts' => 999,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'portfolio',
    ));

    foreach ($posts as $post) {
        setup_postdata($post); ?>

        <div id="gallery-<?php echo $post->ID; ?>" class="carousel slide" data-bs-ride="carousel" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
            <div class="carousel-indicators">
                <?php
                $count2 = 0;
                for ($i = 1; $i <= 9; $i++) {
                    if (get_post_meta($post->ID, '_img-' . $i)) {
                        $activeClass = ($count2 == 0) ? 'class="active"' : '';
                ?>
                        <button id="ind-<?php echo $post->ID; ?>-<?php echo $count2; ?>" type="button"
                            data-bs-target="#gallery-<?php echo $post->ID; ?>"
                            data-bs-slide-to="<?php echo $count2; ?>"
                            <?php echo $activeClass; ?>
                            aria-label="Slide <?php echo $count2 + 1; ?>"></button>
                <?php
                        $count2++;
                    }
                }
                ?>
            </div>
            <div class="carousel-inner h-100">
                <?php
                $count2 = 0;
                for ($i = 1; $i <= 9; $i++) {
                    if (get_post_meta($post->ID, '_img-' . $i)) {
                        $activeClass = ($count2 == 0) ? 'active' : '';
                ?>
                        <div id="img-<?php echo $post->ID; ?>-<?php echo $count2; ?>"
                            class="carousel-item h-100 <?php echo $activeClass; ?>"
                            data-bs-interval="999999999">
                            <div class="row align-items-center h-100">
                                <div class="col text-center">
                                    <img src="<?php echo get_post_meta($post->ID, '_img-' . $i)[0]; ?>"
                                        class="img-fluid"
                                        style="max-width: 90vw; max-height: 90vh;"
                                        alt="<?php echo get_the_title(); ?>">
                                </div>
                            </div>
                        </div>
                <?php
                        $count2++;
                    }
                }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Следующий</span>
            </button>
        </div>
    <?php }
    wp_reset_postdata();
    ?>

    <!-- Кнопка закрытия галереи -->
    <button type="button" onclick="closeGallery();" class="btn-close btn-close-white"
        style="position: fixed; top: 25px; right: 25px; z-index: 99999;"
        aria-label="Close"></button>
</div>

<script>
    // Функция открытия галереи
    function galleryOn(galleryId, imageId = null) {
        const galleryWrapper = document.getElementById('galleryWrapper');

        if (!galleryWrapper) {
            console.error('Gallery wrapper not found');
            return;
        }

        // Показываем модальное окно
        galleryWrapper.style.display = 'block';
        document.body.style.overflow = 'hidden';

        // Открываем нужную галерею
        const targetGallery = document.getElementById(galleryId);
        if (targetGallery) {
            targetGallery.style.display = 'block';

            // Проверяем количество изображений
            const carouselItems = targetGallery.querySelectorAll('.carousel-item');
            const indicators = targetGallery.querySelector('.carousel-indicators');
            const prevButton = targetGallery.querySelector('.carousel-control-prev');
            const nextButton = targetGallery.querySelector('.carousel-control-next');

            // Если только одно изображение, скрываем стрелки и индикаторы
            if (carouselItems.length <= 1) {
                if (indicators) indicators.style.display = 'none';
                if (prevButton) prevButton.style.display = 'none';
                if (nextButton) nextButton.style.display = 'none';
            } else {
                if (indicators) indicators.style.display = 'flex';
                if (prevButton) prevButton.style.display = 'flex';
                if (nextButton) nextButton.style.display = 'flex';
            }

            // Если указан конкретный слайд, активируем его
            if (imageId) {
                const targetImage = document.getElementById(imageId);
                const targetIndicator = document.getElementById('ind-' + imageId.replace('img-', ''));

                if (targetImage && targetIndicator) {
                    // Убираем активные классы со всех элементов текущей галереи
                    targetGallery.querySelectorAll('.carousel-item').forEach(item => {
                        item.classList.remove('active');
                    });
                    targetGallery.querySelectorAll('.carousel-indicators button').forEach(btn => {
                        btn.classList.remove('active');
                    });

                    // Добавляем активные классы к нужным элементам
                    targetImage.classList.add('active');
                    targetIndicator.classList.add('active');
                }
            }
        } else {
            console.error('Gallery element not found:', galleryId);
        }
    }

    // Функция закрытия галереи
    function closeGallery() {
        const galleryWrapper = document.getElementById('galleryWrapper');
        if (galleryWrapper) {
            galleryWrapper.style.display = 'none';
            document.body.style.overflow = '';
        }
        
        // Скрываем все открытые галереи
        document.querySelectorAll('[id^="gallery-"]').forEach(gallery => {
            gallery.style.display = 'none';
        });
    }

    // События
    document.addEventListener('DOMContentLoaded', function() {
        const galleryWrapper = document.getElementById('galleryWrapper');

        // Закрытие по клику на фон
        if (galleryWrapper) {
            galleryWrapper.addEventListener('click', function(e) {
                if (e.target === galleryWrapper) {
                    closeGallery();
                }
            });
        }

        // Обработка клавиш
        document.addEventListener('keydown', function(e) {
            const galleryWrapper = document.getElementById('galleryWrapper');
            
            // Проверяем, открыта ли галерея
            if (galleryWrapper && galleryWrapper.style.display === 'block') {
                // Находим текущую открытую галерею
                const openGallery = document.querySelector('[id^="gallery-"][style*="display: block"]');
                
                if (openGallery) {
                    const carouselElement = openGallery;
                    const carousel = bootstrap.Carousel.getInstance(carouselElement);
                    
                    // Escape - закрыть галерею
                    if (e.key === 'Escape' || e.keyCode === 27) {
                        closeGallery();
                    }
                    // Стрелка влево - предыдущий слайд
                    else if (e.key === 'ArrowLeft' || e.keyCode === 37) {
                        if (carousel) {
                            e.preventDefault();
                            carousel.prev();
                        }
                    }
                    // Стрелка вправо - следующий слайд
                    else if (e.key === 'ArrowRight' || e.keyCode === 39) {
                        if (carousel) {
                            e.preventDefault();
                            carousel.next();
                        }
                    }
                }
            }
        });
    });
</script>