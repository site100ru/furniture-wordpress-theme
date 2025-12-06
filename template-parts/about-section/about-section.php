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
                        <div class="carousel-item active">
                            <a onclick="aboutSectionGalleryOn('aboutSectionGallery','imgAboutSectionGallery-1');">
                                <div class="single-product-img approximation">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/about/1.webp"
                                        class="d-block w-100" loading="lazy" alt="...">
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a onclick="aboutSectionGalleryOn('aboutSectionGallery','imgAboutSectionGallery-2');">
                                <div class="single-product-img approximation">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/about/2.webp"
                                        class="d-block w-100" loading="lazy" alt="...">
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a onclick="aboutSectionGalleryOn('aboutSectionGallery','imgAboutSectionGallery-3');">
                                <div class="single-product-img approximation">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/about/3.webp"
                                        class="d-block w-100" loading="lazy" alt="...">
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a onclick="aboutSectionGalleryOn('aboutSectionGallery','imgAboutSectionGallery-4');">
                                <div class="single-product-img approximation">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/about/4.webp"
                                        class="d-block w-100" loading="lazy" alt="...">
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a onclick="aboutSectionGalleryOn('aboutSectionGallery','imgAboutSectionGallery-5');">
                                <div class="single-product-img approximation">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/about/5.webp"
                                        class="d-block w-100" loading="lazy" alt="...">
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a onclick="aboutSectionGalleryOn('aboutSectionGallery','imgAboutSectionGallery-6');">
                                <div class="single-product-img approximation">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/about/6.webp"
                                        class="d-block w-100" loading="lazy" alt="...">
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a onclick="aboutSectionGalleryOn('aboutSectionGallery','imgAboutSectionGallery-7');">
                                <div class="single-product-img approximation">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/about/7.webp"
                                        class="d-block w-100" loading="lazy" alt="...">
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a onclick="aboutSectionGalleryOn('aboutSectionGallery','imgAboutSectionGallery-8');">
                                <div class="single-product-img approximation">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/about/8.webp"
                                        class="d-block w-100" loading="lazy" alt="...">
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Кнопки навигации -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#aboutCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Предыдущий</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#aboutCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Следующий</span>
                    </button>
                </div>
            </div>
            <!-- Описание -->
            <div class="col-12 col-lg-5 offset-lg-1 order-1 order-lg-last mb-lg-0 description_about">
                <p class="text-start">Студия кухни «Furniture» поможет каждому клиенту при выборе мебели по
                    индивидуальным
                    размерам, бесплатный дизайн-проект любой сложности, большой выбор мебели по цветовой гамме и ценовой
                    категории.</p>
                <p class="text-start">Обширный ассортимент фасадного материала такие как: Fundermax, Альтернатив, AGT,
                    Feelwood,
                    TSS. Для каждого клиента подбираем по его желаниям и возможностям европейскую фурнитуру, таких фирм
                    как: Blum,
                    Boyard, Hettich, VIBO и др. А также у нас можно укомплектоать мебель кухонной техникой известных
                    фирм: Эликор,
                    Midea, Куперсберг и др.</p>
                <p class="text-start">Нашими партнерами являются крупные фабрики «Ульяновск», «CUCINA», г. Пенза «Лев
                    Мебель»,
                    «Мебель стиль».</p>
            </div>
        </div>
    </div>
</section>
<!-- /ABOUT SECTION -->

<!-- /ABOUT SECTION GALLERY -->
<div id="aboutSectionGalleryWrapper">
    <div id="aboutSectionGallery" class="carousel slide" data-bs-ride="false" data-bs-interval="false"
        style="display: none;  position: fixed;  top: 0;  height: 100%;  width: 100%;">
        <div class="carousel-indicators">
            <button id="indAboutSectionGallery-1" type="button" data-bs-target="#aboutSectionGallery"
                data-bs-slide-to="0" aria-label="Slide 1"></button>
            <button id="indAboutSectionGallery-2" type="button" data-bs-target="#aboutSectionGallery"
                data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button id="indAboutSectionGallery-3" type="button" data-bs-target="#aboutSectionGallery"
                data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button id="indAboutSectionGallery-4" type="button" data-bs-target="#aboutSectionGallery"
                data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button id="indAboutSectionGallery-5" type="button" data-bs-target="#aboutSectionGallery"
                data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button id="indAboutSectionGallery-6" type="button" data-bs-target="#aboutSectionGallery"
                data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button id="indAboutSectionGallery-7" type="button" data-bs-target="#aboutSectionGallery"
                data-bs-slide-to="6" aria-label="Slide 7"></button>
            <button id="indAboutSectionGallery-8" type="button" data-bs-target="#aboutSectionGallery"
                data-bs-slide-to="7" aria-label="Slide 8"></button>
        </div>
        <div class="carousel-inner h-100">
            <div id="imgAboutSectionGallery-1" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about/1.webp"
                            class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"
                            alt="..." />
                    </div>
                </div>
            </div>
            <div id="imgAboutSectionGallery-2" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about/2.webp"
                            class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"
                            alt="..." />
                    </div>
                </div>
            </div>
            <div id="imgAboutSectionGallery-3" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about/3.webp"
                            class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"
                            alt="..." />
                    </div>
                </div>
            </div>
            <div id="imgAboutSectionGallery-4" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about/4.webp"
                            class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"
                            alt="..." />
                    </div>
                </div>
            </div>
            <div id="imgAboutSectionGallery-5" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about/5.webp"
                            class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"
                            alt="..." />
                    </div>
                </div>
            </div>
            <div id="imgAboutSectionGallery-6" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about/6.webp"
                            class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"
                            alt="..." />
                    </div>
                </div>
            </div>
            <div id="imgAboutSectionGallery-7" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about/7.webp"
                            class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"
                            alt="..." />
                    </div>
                </div>
            </div>
            <div id="imgAboutSectionGallery-8" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about/8.webp"
                            class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"
                            alt="..." />
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#aboutSectionGallery" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#aboutSectionGallery" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
        </button>
    </div>

    <!-- Кнопка закрытия галереи -->
    <button type="button" onClick="aboutSectionGalleryClose();" class="btn-close btn-close-white"
        style="position: fixed; top: 25px; right: 25px; z-index: 99999" aria-label="Close"></button>
</div>
<!-- /ABOUT SECTION GALLERY -->

<!-- /ABOUT SECTION GALLERY SCRIPT -->
<script>
    function aboutSectionGalleryOn(gal, img) {
        var gallery = gal; // Получаем ID галереи
        var image = img; // Получаем ID картинки

        // Открываем обертку галереи
        document.getElementById("aboutSectionGalleryWrapper").style.display = "block";

        // Открываем галерею
        if (gallery == "aboutSectionGallery") {
            document.getElementById("aboutSectionGallery").style.display = "block";
        }

        /* Открываем изображения и индикаторы галереи */
        if (image == "imgAboutSectionGallery-1") {
            document.getElementById("imgAboutSectionGallery-1").classList.add("active");
            document.getElementById("indAboutSectionGallery-1").classList.add("active");
        }
        if (image == "imgAboutSectionGallery-2") {
            document.getElementById("imgAboutSectionGallery-2").classList.add("active");
            document.getElementById("indAboutSectionGallery-2").classList.add("active");
        }
        if (image == "imgAboutSectionGallery-3") {
            document.getElementById("imgAboutSectionGallery-3").classList.add("active");
            document.getElementById("indAboutSectionGallery-3").classList.add("active");
        }
        if (image == "imgAboutSectionGallery-4") {
            document.getElementById("imgAboutSectionGallery-4").classList.add("active");
            document.getElementById("indAboutSectionGallery-4").classList.add("active");
        }
        if (image == "imgAboutSectionGallery-5") {
            document.getElementById("imgAboutSectionGallery-5").classList.add("active");
            document.getElementById("indAboutSectionGallery-5").classList.add("active");
        }
        if (image == "imgAboutSectionGallery-6") {
            document.getElementById("imgAboutSectionGallery-6").classList.add("active");
            document.getElementById("indAboutSectionGallery-6").classList.add("active");
        }
        if (image == "imgAboutSectionGallery-7") {
            document.getElementById("imgAboutSectionGallery-7").classList.add("active");
            document.getElementById("indAboutSectionGallery-7").classList.add("active");
        }
        if (image == "imgAboutSectionGallery-8") {
            document.getElementById("imgAboutSectionGallery-8").classList.add("active");
            document.getElementById("indAboutSectionGallery-8").classList.add("active");
        }

        // Проверяем количество изображений
        var galleryElement = document.getElementById(gallery);
        var carouselItems = galleryElement.querySelectorAll('.carousel-item');
        var indicators = galleryElement.querySelector('.carousel-indicators');
        var prevButton = galleryElement.querySelector('.carousel-control-prev');
        var nextButton = galleryElement.querySelector('.carousel-control-next');

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

    } /* Ending gallery opening function */


    // Кнопка закрытия галереи
    function aboutSectionGalleryClose() {
        // Закрываем обертку галереи
        document.getElementById("aboutSectionGalleryWrapper").style.display = "none";

        // Закрываем галерею
        document.getElementById("aboutSectionGallery").style.display = "none";

        /* Закрываем тзображения и индикаторы галереи */
        document.getElementById("imgAboutSectionGallery-1").classList.remove("active");
        document.getElementById("indAboutSectionGallery-1").classList.remove("active");
        document.getElementById("imgAboutSectionGallery-2").classList.remove("active");
        document.getElementById("indAboutSectionGallery-2").classList.remove("active");
        document.getElementById("imgAboutSectionGallery-3").classList.remove("active");
        document.getElementById("indAboutSectionGallery-3").classList.remove("active");
        document.getElementById("imgAboutSectionGallery-4").classList.remove("active");
        document.getElementById("indAboutSectionGallery-4").classList.remove("active");
        document.getElementById("imgAboutSectionGallery-5").classList.remove("active");
        document.getElementById("indAboutSectionGallery-5").classList.remove("active");
        document.getElementById("imgAboutSectionGallery-6").classList.remove("active");
        document.getElementById("indAboutSectionGallery-6").classList.remove("active");
        document.getElementById("imgAboutSectionGallery-7").classList.remove("active");
        document.getElementById("indAboutSectionGallery-7").classList.remove("active");
        document.getElementById("imgAboutSectionGallery-8").classList.remove("active");
        document.getElementById("indAboutSectionGallery-8").classList.remove("active");
    }
</script>
<!-- /ABOUT SECTION GALLERY SCRIPT -->