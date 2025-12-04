<!-- ABOUT SECTION -->
<section class="about-section bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col text-md-center">
                <h2>О нас</h2>
                <svg width="62" height="14" viewBox="0 0 62 14" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon mb-5">
                    <rect x="48" width="14" height="14" rx="3" />
                    <rect x="24" width="14" height="14" rx="3" />
                    <rect width="14" height="14" rx="3" />
                </svg>
            </div>
        </div>
        <!-- Слайдер Bootstrap -->
        <div class="row justify-content-between about_box">
            <div class="col-12 col-lg-6 order-2 order-lg-first text-center">
                <div id="aboutCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner rounded">
                        <?php 
                        $about_images = [
                            get_template_directory_uri() . '/img/about/1.webp',
                            get_template_directory_uri() . '/img/about/2.webp',
                            get_template_directory_uri() . '/img/about/3.webp',
                            get_template_directory_uri() . '/img/about/4.webp',
                            get_template_directory_uri() . '/img/about/5.webp',
                            get_template_directory_uri() . '/img/about/6.webp',
                            get_template_directory_uri() . '/img/about/7.webp',
                            get_template_directory_uri() . '/img/about/8.webp',
                        ];
                        
                        foreach ($about_images as $index => $image): 
                            $active_class = ($index === 0) ? 'active' : '';
                        ?>
                            <div class="carousel-item <?php echo $active_class; ?>">
                                <a href="#" onclick="aboutSectionGalleryOn(<?php echo $index; ?>); return false;">
                                    <div class="single-product-img approximation">
                                        <img src="<?php echo esc_url($image); ?>"
                                            class="d-block w-100" loading="lazy" alt="О нас - фото <?php echo $index + 1; ?>">
                                        <div class="magnifier"></div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- Кнопки навигации -->
                    <?php if (count($about_images) > 1): ?>
                    <button class="carousel-control-prev" type="button" data-bs-target="#aboutCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Предыдущий</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#aboutCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Следующий</span>
                    </button>
                    <?php endif; ?>
                </div>
            </div>
            <!-- Описание -->
            <div class="col-12 col-lg-5 offset-lg-1 order-1 order-lg-last mb-lg-0 description_about">
                <p class="text-start">
                    Студия кухни «Furniture» поможет каждому клиенту при выборе мебели по индивидуальным
                    размерам, бесплатный дизайн-проект любой сложности, большой выбор мебели по цветовой гамме и ценовой
                    категории.
                </p>
                <p class="text-start">
                    Обширный ассортимент фасадного материала такие как: Fundermax, Альтернатив, AGT, Feelwood,
                    TSS. Для каждого клиента подбираем по его желаниям и возможностям европейскую фурнитуру, таких фирм
                    как: Blum, Boyard, Hettich, VIBO и др. А также у нас можно укомплектоать мебель кухонной техникой известных
                    фирм: Эликор, Midea, Куперсберг и др.
                </p>
                <p class="text-start">
                    Нашими партнерами являются крупные фабрики «Ульяновск», «CUCINA», г. Пенза «Лев Мебель»,
                    «Мебель стиль».
                </p>
            </div>
        </div>
    </div>
</section>
<!-- /ABOUT SECTION -->

<!-- ABOUT SECTION GALLERY -->
<div id="aboutSectionGalleryWrapper">
    <div id="aboutSectionGallery" class="carousel slide" data-bs-ride="false" data-bs-interval="false" style="position: fixed; top: 0; height: 100%; width: 100%;">
        
        <!-- Индикаторы -->
        <div class="carousel-indicators">
            <?php foreach ($about_images as $index => $image): ?>
                <button 
                    type="button" 
                    data-bs-target="#aboutSectionGallery" 
                    data-bs-slide-to="<?php echo $index; ?>" 
                    <?php echo ($index === 0) ? 'class="active" aria-current="true"' : ''; ?>
                    aria-label="Slide <?php echo $index + 1; ?>">
                </button>
            <?php endforeach; ?>
        </div>

        <!-- Слайды -->
        <div class="carousel-inner h-100">
            <?php foreach ($about_images as $index => $image):  $active_class = ($index === 0) ? 'active' : ''; ?>
                <div class="carousel-item h-100 <?php echo $active_class; ?>">
                    <div class="row align-items-center h-100">
                        <div class="col text-center">
                            <img src="<?php echo esc_url($image); ?>"
                                class="img-fluid" 
                                loading="lazy" 
                                style="max-width: 90vw; max-height: 90vh"
                                alt="О нас - фото <?php echo $index + 1; ?>" />
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Кнопки навигации -->
        <button class="carousel-control-prev" type="button" data-bs-target="#aboutSectionGallery" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#aboutSectionGallery" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Кнопка закрытия галереи -->
    <button type="button" onclick="aboutSectionGalleryClose();" class="btn-close btn-close-white"
        style="position: fixed; top: 25px; right: 25px; z-index: 99999" aria-label="Close"></button>
</div>
<!-- /ABOUT SECTION GALLERY -->

<script>
    // Функция открытия галереи
    function aboutSectionGalleryOn(slideIndex) {
        const galleryWrapper = document.getElementById('aboutSectionGalleryWrapper');
        const gallery = document.getElementById('aboutSectionGallery');
        
        if (!galleryWrapper || !gallery) {
            return;
        }

        // Показываем галерею
        galleryWrapper.style.display = 'block';
        document.body.style.overflow = 'hidden';

        // Проверяем количество изображений
        const carouselItems = gallery.querySelectorAll('.carousel-item');
        const indicators = gallery.querySelector('.carousel-indicators');
        const prevButton = gallery.querySelector('.carousel-control-prev');
        const nextButton = gallery.querySelector('.carousel-control-next');

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

        // Получаем или создаем экземпляр карусели Bootstrap
        const carouselElement = document.getElementById('aboutSectionGallery');
        let carousel = bootstrap.Carousel.getInstance(carouselElement);
        
        if (!carousel) {
            carousel = new bootstrap.Carousel(carouselElement, {
                interval: false,
                wrap: true
            });
        }

        carousel.to(slideIndex);
    }

    // Функция закрытия галереи
    function aboutSectionGalleryClose() {
        const galleryWrapper = document.getElementById('aboutSectionGalleryWrapper');
        
        if (galleryWrapper) {
            galleryWrapper.style.display = 'none';
            document.body.style.overflow = '';
        }
    }

    // События
    document.addEventListener('DOMContentLoaded', function() {
        const galleryWrapper = document.getElementById('aboutSectionGalleryWrapper');

        // Закрытие по клику на фон
        if (galleryWrapper) {
            galleryWrapper.addEventListener('click', function(e) {
                if (e.target === galleryWrapper) {
                    aboutSectionGalleryClose();
                }
            });
        }

        // Обработка клавиш
        document.addEventListener('keydown', function(e) {
            const galleryWrapper = document.getElementById('aboutSectionGalleryWrapper');
            
            // Проверяем, открыта ли галерея
            if (galleryWrapper && galleryWrapper.style.display === 'block') {
                const carouselElement = document.getElementById('aboutSectionGallery');
                const carousel = bootstrap.Carousel.getInstance(carouselElement);
                
                // Escape - закрыть галерею
                if (e.key === 'Escape' || e.keyCode === 27) {
                    aboutSectionGalleryClose();
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
        });
    });
</script>