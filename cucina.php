<?php

/**
 * Template Name: Кучина
 * Template Post Type: page
 */

include 'header.php';

?>


<!-- Home section -->
<div id="sp-home" class="scroll-points"></div>
<section class="main-home-section home-cucina">
    <div class="parallax-home-section" style="min-height: 640px;"></div>
    <!-- header-menu -->
    <?php get_template_part('template-parts/header-menu/header-menu'); ?>
    
    <div class="container">
        <div class="row align-items-center home-section-height">
            <div class="col-xl-12 text-center">
                <a href="" class="logo-cucina">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/cucina-logo 1.svg" alt="">
                </a>
                <h1 class="home-title" style="color: #fff; margin-top: 20px;">Кухни CUCINA в Рязани</h1>
            </div>
        </div>
    </div>
</section>
<!-- /Home section -->


<!-- VIDEO SECTION -->
<section id="video" class="bg-white">
    <div id="video-container" class="container">
        <nav class="woocommerce-breadcrumb" itemprop="breadcrumb">
            <a href="/" class="me-2 d-flex align-items-center" style="padding-bottom: 2px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" fill="currentColor" viewBox="0 0 24 24" class="svg-icon">
                    <path
                        d="m21.71 11.29-9-9a1 1 0 0 0-1.42 0l-9 9a1 1 0 0 0 1.42 1.42l.29-.3v7.89A1.77 1.77 0 0 0 5.83 22H8.5a1 1 0 0 0 1-1v-4.9a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1V21a1 1 0 0 0 1 1h2.67A1.77 1.77 0 0 0 20 20.3v-7.89l.29.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42" />
                </svg>
            </a>
            / Кухни Cucina в Рязани
        </nav>
        <div class="row">
            <div class="text-md-center">
                <h2>Видеопрезентация фабрики CUCINA</h2>
                <svg style="margin-bottom: 60px;" width="62" height="14" viewBox="0 0 62 14" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                    <rect x="48" width="14" height="14" rx="3" />
                    <rect x="24" width="14" height="14" rx="3" />
                    <rect width="14" height="14" rx="3" />
                </svg>
            </div>
        </div>
        <div class="row justify-content-center" style="max-height: 480px;">
            <div class="col-md-8">
                <div style="position: relative">
                    <video id="video-player" class="rounded" style="width: 100%; max-height: 480px; overflow: hidden;"
                        playsinline="playsinline" loop="loop"
                        poster="<?php echo get_template_directory_uri(); ?>/img/cucina-video-poster.webp">
                        <!-- muted="muted" autoplay="autoplay" -->
                        <!-- <source src="header-bg.ogv" type='video/ogg; codecs="theora, vorbis"'> -->
                        <source src="<?php echo get_template_directory_uri(); ?>/video/video-cucina.mp4"
                            type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
                        <!-- <source src="header-bg.webm" type='video/webm; codecs="vp8, vorbis"'> -->
                    </video>
                    <div id="play-circle">
                        <div id="play" onclick="play();"></div>
                    </div>
                    <div id="stop-circle" onclick="pause();">
                        <div>
                            <i class="far fa-stop-circle"></i>
                        </div>
                    </div>
                </div>

                <script>
                    function play() {
                        document.getElementById("video-player").play();
                        document.getElementById("play-circle").style.display = "none";
                        document.getElementById("stop-circle").style.display = "block";
                    }

                    function pause() {
                        document.getElementById("video-player").pause();
                        document.getElementById("stop-circle").style.display = "none";
                        document.getElementById("play-circle").style.display = "block";
                    }
                </script>
            </div>
        </div>
    </div>
</section>
<!-- END VIDEO SECTION -->


<!-- ABOUT SECTION -->
<section class="about-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col text-md-center">
                <h2>О фабрике CUCINA</h2>
                <svg style="margin-bottom: 60px;" width="62" height="14" viewBox="0 0 62 14" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                    <rect x="48" width="14" height="14" rx="3" />
                    <rect x="24" width="14" height="14" rx="3" />
                    <rect width="14" height="14" rx="3" />
                </svg>
            </div>
        </div>
        <!-- Слайдер Bootstrap -->
        <div class="row justify-content-between align-items-center" style="margin-bottom: 120px;">
            <div class="col-12 col-lg-6 order-2 order-lg-last text-center">

                <div id="aboutCarousel1" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner rounded">
                        <div class="carousel-item active">
                            <a onClick="aboutSectionGallery1On('aboutSectionGallery1','imgAboutSectionGallery1-1');">
                                <div class="single-product-img approximation">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-cucina1.webp"
                                        class="d-block w-100" loading="lazy" alt="...">
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a onClick="aboutSectionGallery1On('aboutSectionGallery1','imgAboutSectionGallery1-2');">
                                <div class="single-product-img approximation">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-cucina2.webp"
                                        class="d-block w-100" loading="lazy" alt="...">
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div>
                        <!-- <div class="carousel-item">
                            <a onClick="aboutSectionGalleryOn('aboutSectionGallery','imgAboutSectionGallery-3');">
                                <div class="single-product-img approximation">
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/img/about-section-slide-3.jpeg" class="d-block w-100" loading="lazy" alt="...">
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div> -->
                    </div>
                    <!-- Кнопки навигации -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#aboutCarousel1"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Предыдущий</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#aboutCarousel1"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Следующий</span>
                    </button>
                </div>
            </div>
            <!-- Описание -->
            <div class="col-12 col-lg-5 order-1  order-lg-first mb-lg-0 description_about">
                <div class="description-block">
                    <h3>Наша миссия</h3>
                    <p>Превратить  мечты наших клиентов в реальность , создав идеальную кухню для каждого !</p>
                    <p>В центре внимания CUCINA — человек с его потребностями и желаниями, идеями и вкусами.</p>
                </div>
                <div class="description-block">
                    <h3>Наша цель</h3>
                    <p>Производить  качественную мебель , сбалансированно внедряя инновации исследуя традициям , в
                        гармонии с окружающей средой. Мы обеспечиваем выпуск индивидуальной дизайнерской мебели,
                        сохраняя на нее доступные цены.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-lg-6 order-2 order-lg-first text-center">

                <div id="aboutCarousel2" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner rounded">
                        <div class="carousel-item active">
                            <a onClick="aboutSectionGallery2On('aboutSectionGallery2','imgAboutSectionGallery2-1');">
                                <div class="single-product-img approximation">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-cucina2.webp"
                                        class="d-block w-100" loading="lazy" alt="...">
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a onClick="aboutSectionGallery2On('aboutSectionGallery2','imgAboutSectionGallery2-2');">
                                <div class="single-product-img approximation">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-cucina1.webp"
                                        class="d-block w-100" loading="lazy" alt="...">
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div>
                        <!-- <div class="carousel-item">
                            <a onClick="aboutSectionGalleryOn('aboutSectionGallery','imgAboutSectionGallery-3');">
                                <div class="single-product-img approximation">
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/img/about-section-slide-3.jpeg" class="d-block w-100" loading="lazy" alt="...">
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div> -->
                    </div>
                    <!-- Кнопки навигации -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#aboutCarousel2"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Предыдущий</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#aboutCarousel2"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Следующий</span>
                    </button>
                </div>
            </div>
            <!-- Описание -->
            <div class="col-12 col-lg-5 order-1 order-lg-last mb-lg-0 description_about">
                <div class="description-block">
                    <h3>Уникальность</h3>
                    <p>Наши проекты отличает внимание к деталям , ведь мы создаем уникальный продукт , который
                        оптимально подойдет к вашему стилю и образу жизни.</p>
                </div>
                <div class="description-block">
                    <h3>Ассортимент</h3>
                    <p>
                        Мы постоянно стремимся к совершенству и расширяем границы возможного в дизайне кухни.
                    </p>
                    <p>
                        Мы не забываем о функциональности ,оснащаем нашу продукцию только качественной европейской
                        фарнитурой в базовой ее комплектации.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /ABOUT SECTION -->


<!-- /ABOUT SECTION GALLERY -->
<div id="aboutSectionGallery1Wrapper">
    <div id="aboutSectionGallery1" class="carousel slide" data-bs-ride="false" data-bs-interval="false"
        style="display: none;  position: fixed;  top: 0;  height: 100%;  width: 100%;">
        <div class="carousel-indicators">
            <button id="indAboutSectionGallery1-1" type="button" data-bs-target="#aboutSectionGallery1"
                data-bs-slide-to="0" aria-label="Slide 1"></button>
            <button id="indAboutSectionGallery1-2" type="button" data-bs-target="#aboutSectionGallery1"
                data-bs-slide-to="1" aria-label="Slide 2"></button>
            <!-- <button id="indAboutSectionGallery1-3" type="button" data-bs-target="#aboutSectionGallery1" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
        </div>
        <div class="carousel-inner h-100">
            <div id="imgAboutSectionGallery1-1" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-cucina1.webp"
                            class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"
                            alt="..." />
                    </div>
                </div>
            </div>
            <div id="imgAboutSectionGallery1-2" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-cucina2.webp"
                            class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"
                            alt="..." />
                    </div>
                </div>
            </div>
            <!-- <div id="imgAboutSectionGallery-3" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img  data-src="<?php echo get_template_directory_uri(); ?>/img/about-section-slide-3.jpeg" class="img-fluid lazyload" loading="lazy"  style="max-width: 90vw; max-height: 90vh"  alt="..."/>
                    </div>
                </div>
            </div> -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#aboutSectionGallery1" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#aboutSectionGallery1" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
        </button>
    </div>

    <!-- Кнопка закрытия галереи -->
    <button type="button" onClick="aboutSectionGallery1Close();" class="btn-close btn-close-white"
        style="position: fixed; top: 25px; right: 25px; z-index: 99999" aria-label="Close"></button>
</div>

<div id="aboutSectionGallery2Wrapper">
    <div id="aboutSectionGallery2" class="carousel slide" data-bs-ride="false" data-bs-interval="false"
        style="display: none;  position: fixed;  top: 0;  height: 100%;  width: 100%;">
        <div class="carousel-indicators">
            <button id="indAboutSectionGallery2-1" type="button" data-bs-target="#aboutSectionGallery2"
                data-bs-slide-to="0" aria-label="Slide 1"></button>
            <button id="indAboutSectionGallery2-2" type="button" data-bs-target="#aboutSectionGallery2"
                data-bs-slide-to="1" aria-label="Slide 2"></button>
            <!-- <button id="indAboutSectionGallery1-3" type="button" data-bs-target="#aboutSectionGallery1" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
        </div>
        <div class="carousel-inner h-100">
            <div id="imgAboutSectionGallery2-1" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-cucina2.webp"
                            class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"
                            alt="..." />
                    </div>
                </div>
            </div>
            <div id="imgAboutSectionGallery2-2" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-cucina1.webp"
                            class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh"
                            alt="..." />
                    </div>
                </div>
            </div>
            <!-- <div id="imgAboutSectionGallery-3" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img  data-src="<?php echo get_template_directory_uri(); ?>/img/about-section-slide-3.jpeg" class="img-fluid lazyload" loading="lazy"  style="max-width: 90vw; max-height: 90vh"  alt="..."/>
                    </div>
                </div>
            </div> -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#aboutSectionGallery2" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#aboutSectionGallery2" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
        </button>
    </div>

    <!-- Кнопка закрытия галереи -->
    <button type="button" onClick="aboutSectionGallery2Close();" class="btn-close btn-close-white"
        style="position: fixed; top: 25px; right: 25px; z-index: 99999" aria-label="Close"></button>
</div>
<!-- /ABOUT SECTION GALLERY -->


<!-- /ABOUT SECTION GALLERY SCRIPT -->
<script>
    /* Gallery 1 opening function */
    function aboutSectionGallery1On(gal, img) {
        var gallery = gal; // Получаем ID галереи
        var image = img; // Получаем ID картинки

        // Открываем обертку галереи
        document.getElementById("aboutSectionGallery1Wrapper").style.display = "block";

        // Открываем галерею
        if (gallery == "aboutSectionGallery1") {
            document.getElementById("aboutSectionGallery1").style.display = "block";
        }

        /* Открываем изображения и индикаторы галереи */
        if (image == "imgAboutSectionGallery1-1") {
            document.getElementById("imgAboutSectionGallery1-1").classList.add("active");
            document.getElementById("indAboutSectionGallery1-1").classList.add("active");
        }
        if (image == "imgAboutSectionGallery1-2") {
            document.getElementById("imgAboutSectionGallery1-2").classList.add("active");
            document.getElementById("indAboutSectionGallery1-2").classList.add("active");
        }
        //   if ( image == "imgAboutSectionGallery-3" ) {
        // 	  document.getElementById("imgAboutSectionGallery1-3").classList.add("active");
        // 	  document.getElementById("indAboutSectionGallery1-3").classList.add("active");
        //   }

    } /* Ending gallery 1 opening function */


    // Кнопка закрытия галереи 1
    function aboutSectionGallery1Close() {
        // Закрываем обертку галереи
        document.getElementById("aboutSectionGallery1Wrapper").style.display = "none";

        // Закрываем галерею
        document.getElementById("aboutSectionGallery1").style.display = "none";

        /* Закрываем тзображения и индикаторы галереи */
        document.getElementById("imgAboutSectionGallery1-1").classList.remove("active");
        document.getElementById("indAboutSectionGallery1-1").classList.remove("active");
        document.getElementById("imgAboutSectionGallery1-2").classList.remove("active");
        document.getElementById("indAboutSectionGallery1-2").classList.remove("active");
        //   document.getElementById("imgAboutSectionGallery1-3").classList.remove("active");
        //   document.getElementById("indAboutSectionGallery1-3").classList.remove("active");
    }
</script>

<script>
    /* Gallery 2 opening function */
    function aboutSectionGallery2On(gal, img) {
        var gallery = gal; // Получаем ID галереи
        var image = img; // Получаем ID картинки

        // Открываем обертку галереи
        document.getElementById("aboutSectionGallery2Wrapper").style.display = "block";

        // Открываем галерею
        if (gallery == "aboutSectionGallery2") {
            document.getElementById("aboutSectionGallery2").style.display = "block";
        }

        /* Открываем изображения и индикаторы галереи */
        if (image == "imgAboutSectionGallery2-1") {
            document.getElementById("imgAboutSectionGallery2-1").classList.add("active");
            document.getElementById("indAboutSectionGallery2-1").classList.add("active");
        }
        if (image == "imgAboutSectionGallery2-2") {
            document.getElementById("imgAboutSectionGallery2-2").classList.add("active");
            document.getElementById("indAboutSectionGallery2-2").classList.add("active");
        }
        //   if ( image == "imgAboutSectionGallery2-3" ) {
        // 	  document.getElementById("imgAboutSectionGallery2-3").classList.add("active");
        // 	  document.getElementById("indAboutSectionGallery2-3").classList.add("active");
        //   }

    } /* Ending gallery 1 opening function */


    // Кнопка закрытия галереи 1
    function aboutSectionGallery2Close() {
        // Закрываем обертку галереи
        document.getElementById("aboutSectionGallery2Wrapper").style.display = "none";

        // Закрываем галерею
        document.getElementById("aboutSectionGallery2").style.display = "none";

        /* Закрываем тзображения и индикаторы галереи */
        document.getElementById("imgAboutSectionGallery2-1").classList.remove("active");
        document.getElementById("indAboutSectionGallery2-1").classList.remove("active");
        document.getElementById("imgAboutSectionGallery2-2").classList.remove("active");
        document.getElementById("indAboutSectionGallery2-2").classList.remove("active");
        //   document.getElementById("imgAboutSectionGallery2-3").classList.remove("active");
        //   document.getElementById("indAboutSectionGallery2-3").classList.remove("active");
    }
</script>
<!-- /ABOUT SECTION GALLERY SCRIPT -->


<!-- PORTFOLIO SECTION --
<section class="portfolio-cucina bg-white">
    <div class="container">
        <div class="row">
            <div class="col text-md-center">
                <h2>Наши последние работы кухонь CUCINA</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-dec.svg" class="" style="margin-bottom: 60px;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4" style="margin-bottom: 40px;">
                <a href="">
                    <div class="approximation project-container-2 rounded">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-cucina1.webp" class="" alt="">
                        <div class="card-wrapper">
                            <div class="position-absolute">Кухня #001</div>
                        </div>	
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="margin-bottom: 40px;">
                <a href="">
                    <div class="approximation project-container-2 rounded">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-cucina2.webp" class="" alt="">
                        <div class="card-wrapper">
                            <div class="position-absolute">Кухня #002</div>
                        </div>	
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="margin-bottom: 40px;">
                <a href="">
                    <div class="approximation project-container-2 rounded">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-cucina3.webp" class="" alt="">
                        <div class="card-wrapper">
                            <div class="position-absolute">Кухня #003</div>
                        </div>	
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="margin-bottom: 40px;">
                <a href="">
                    <div class="approximation project-container-2 rounded">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-cucina4.webp" class="" alt="">
                        <div class="card-wrapper">
                            <div class="position-absolute">Кухня #004</div>
                        </div>	
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="margin-bottom: 40px;">
                <a href="">
                    <div class="approximation project-container-2 rounded">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-cucina5.webp" class="" alt="">
                        <div class="card-wrapper">
                            <div class="position-absolute">Кухня #005</div>
                        </div>	
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="margin-bottom: 40px;">
                <a href="">
                    <div class="approximation project-container-2 rounded">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-cucina6.webp" class="" alt="">
                        <div class="card-wrapper">
                            <div class="position-absolute">Кухня #006</div>
                        </div>	
                    </div>
                </a>
            </div>
        </div>
        <div class="text-md-center">
            <a href="https://мозаика62.рф/portfolio-cat/02-кухни-cucina" class="btn btn-lg btn-corporate-color-1">Смотреть все</a>
        </div>
    </div>
</section-->


<section class="portfolio-cucina bg-white">
    <div class="container">
        <div class="row">
            <div class="col text-md-center">
                <h2>Наши последние работы кухонь CUCINA</h2>
                <svg style="margin-bottom: 60px;" width="62" height="14" viewBox="0 0 62 14" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                    <rect x="48" width="14" height="14" rx="3" />
                    <rect x="24" width="14" height="14" rx="3" />
                    <rect width="14" height="14" rx="3" />
                </svg>
                <div class="row text-start justify-content-center">
                    <?php
                    $args = [
                        'post_type' => 'portfolio',
                        'posts_per_page' => 6, // Получаем только 3 последние записи
                        //'numberposts' 	 => 999,
                        'portfolio-cat' => '02-кухни-cucina'
                    ];
                    $query = new WP_Query($args);
                    while ($query->have_posts()):
                        $query->the_post(); ?>
                        <div class="col-md-4" style="margin-bottom: 40px;">
                            <a onClick="galleryOn('gallery-<?php echo $post->ID; ?>','img-<?php echo $post->ID; ?>-0');">
                                <div class="approximation project-container-2 rounded">
                                    <img src="<?php echo get_post_meta($post->ID, '_img-1')[0]; ?>" class=" rounded"
                                        alt="">
                                    <div class="card-wrapper">
                                        <div class="position-absolute"><?php the_title(); ?></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="row">
                    <div class="col text-center d-none d-md-block">
                        <a href="/furniture/portfolio-cat/02-кухни-cucina"
                            class="btn btn-lg btn-corporate-color-1">Смотреть все кухни Cucina</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery wrapper-->
<div id="galleryWrapper"
    style="background: rgba(0,0,0,0.85); display: none; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 9999;">
    <?php
    // параметры по умолчанию
    $posts = get_posts(array(
        'numberposts' => 999,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'portfolio',
    ));

    foreach ($posts as $post) {
        setup_postdata($post); ?>

        <div id="gallery-<?php echo $post->ID; ?>" class="carousel slide" data-bs-ride="carousel"
            style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
            <div class="carousel-indicators">
                <?php
                $count2 = 0;
                for ($i = 1; $i <= 9; $i++) {
                    if (get_post_meta($post->ID, '_img-' . $i)) {
                        if ($count2 == 0) { ?>

                            <button id="ind-<?php echo $post->ID; ?>-<?php echo $count2; ?>" type="button"
                                data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $count2; ?>"
                                aria-label="Slide 3"></button>

                        <?php $count2 = $count2 + 1;
                        } else { ?>

                            <button id="ind-<?php echo $post->ID; ?>-<?php echo $count2; ?>" type="button"
                                data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $count2; ?>"
                                aria-label="Slide 3"></button>

                <?php $count2 = $count2 + 1;
                        }
                    }
                }
                ?>
            </div>
            <div class="carousel-inner h-100">
                <?php
                $count2 = 0;
                for ($i = 1; $i <= 9; $i++) {
                    if (get_post_meta($post->ID, '_img-' . $i)) { ?>
                        <div id="img-<?php echo $post->ID; ?>-<?php echo $count2; ?>"
                            class="carousel-item h-100 <?php // if ( $i == 1 ) echo ' active'; ?>" data-bs-interval="999999999">
                            <div class="row align-items-center h-100">
                                <div class="col text-center">
                                    <img src="<?php echo get_post_meta($post->ID, '_img-' . $i)[0]; ?>" class="img-fluid" style="max-width: 90vw; max-height: 90vh;" alt="...">
                                </div>
                            </div>
                        </div>
                <?php $count2 = $count2 + 1;
                    }
                }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Следующий</span>
            </button>
        </div>
    <?php }
    wp_reset_postdata();
    ?>

    <!-- Кнопка закрытия галереи -->
    <button type="button" onClick="closeGallery();" class="btn-close btn-close-white"
        style="position: fixed; top: 25px; right: 25px; z-index: 99999;" aria-label="Close"></button>
</div>


<script>
    /* Функция открытия галереи */
    function galleryOn(gal, img) {
        var gallery = gal; // Получаем ID галереи
        var image = img; // Получаем ID картинки
        // Открываем обертку галереи
        document.getElementById('galleryWrapper').style.display = 'block';

        // Проверяем какие данные передаются для открытия галереи и картинки
        //alert(gallery+' '+image); 


        <?php // Открываем галерею
        $posts = get_posts(array(
            'numberposts' => 999,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'portfolio',
            //'post__not_in' => array( 42 ) // Выводим все категории портфолио кроме Разное
        ));

        foreach ($posts as $post) {
            setup_postdata($post);

            echo 'if ( gallery == "gallery-' . $post->ID . '" ) { document.getElementById("gallery-' . $post->ID . '").style.display = "block"; }';
        }
        wp_reset_postdata();
        ?>


        <?php // Открываем изображения
        $posts = get_posts(array(
            'numberposts' => 999,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'portfolio',
            //'post__not_in' => array( 42 ) // Выводим все категории портфолио кроме Разное
        ));

        foreach ($posts as $post) {
            setup_postdata($post);
            $count2 = 0;
            for ($i = 1; $i <= 9; $i++) {
                echo 'if ( image == "img-' . $post->ID . '-' . $count2 . '" ) { document.getElementById("img-' . $post->ID . '-' . $count2 . '").classList.add("active"); document.getElementById("ind-' . $post->ID . '-' . $count2 . '").classList.add("active"); } ';
                $count2 = $count2 + 1;
            }
        }
        wp_reset_postdata();
        ?>
    }


    // Кнопка закрытия галереи
    function closeGallery() {
        // Закрываем обертку галереи
        document.getElementById('galleryWrapper').style.display = 'none';

        <?php // Открываем галерею
        $posts = get_posts(array(
            'numberposts' => 999,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'portfolio',
            //'post__not_in' => array( 42 ) // Выводим все категории портфолио кроме Разное
        ));

        foreach ($posts as $post) {
            setup_postdata($post);

            echo 'document.getElementById("gallery-' . $post->ID . '").style.display = "none";';
        }
        wp_reset_postdata();
        ?>

        <?php // Закрываем изображения
        $posts = get_posts(array(
            'numberposts' => 999,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'portfolio',
        ));

        foreach ($posts as $post) {
            setup_postdata($post);
            $count2 = 0;
            for ($i = 1; $i <= 9; $i++) {
                echo 'document.getElementById("img-' . $post->ID . '-' . $count2 . '").classList.remove("active"); document.getElementById("ind-' . $post->ID . '-' . $count2 . '").classList.remove("active");';

                $count2 = $count2 + 1;
            }
        }
        wp_reset_postdata(); ?>

    }
</script>


<?php include 'footer-1.php'; ?>