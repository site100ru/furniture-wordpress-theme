<?php

/**
 * Template Name: Главная с простой картинкой
 * Template Post Type: page
 */

include 'header.php';

?>

<!-- header-menu -->
<?php get_template_part('template-parts/header-menu/header-white-menu'); ?>

<section style="height: 80vh" class="d-flex align-items-center error-page">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 order-2 order-lg-1">
                <h1>Вы перешли на страницу которой не существует</h1>
                <h2>Возможно она была удалена</h2>
                <a href="/" class="btn btn-lg btn-corporate-color-1 mt-3 mt-lg-5">Перейти на главную</a>
            </div>

            <div class="col-8 col-md-6 col-lg-4 mb-3 mb-lg-0 order-1 order-lg-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 388 142">
                    <path fill="#A5A5A5"
                        d="M120 77v32.8h-18.2V140H61.2v-30.2H0V73.4L62.2 1.6h39.6V77H120Zm-57.4.2V50.8l.6-12.8-33 39.8c6-.4 10.133-.6 12.4-.6h20ZM193.394 0c12.8 0 23.733 3.4 32.8 10.2 9.2 6.8 15.866 15.4 20 25.8 4.133 10.4 6.2 21.933 6.2 34.6 0 12.933-2.067 24.667-6.2 35.2-4 10.533-10.6 19.2-19.8 26-9.067 6.667-20.067 10-33 10-19.067 0-33.734-6.867-44-20.6-10.267-13.867-15.4-30.667-15.4-50.4 0-21.333 5.4-38.467 16.2-51.4C161.127 6.467 175.527 0 193.394 0Zm0 31.4c-4 0-7.4 1-10.2 3-2.8 1.867-4.934 4.133-6.4 6.8-1.467 2.667-2.6 6.133-3.4 10.4-.8 4.133-1.267 7.667-1.4 10.6-.134 2.8-.2 6.2-.2 10.2 0 25.333 7.2 38 21.6 38 14.266 0 21.4-13.267 21.4-39.8 0-13.333-1.734-23.2-5.2-29.6-3.467-6.4-8.867-9.6-16.2-9.6ZM387.188 77v32.8h-18.2V140h-40.6v-30.2h-61.2V73.4l62.2-71.8h39.6V77h18.2Zm-57.4.2V50.8l.6-12.8-33 39.8c6-.4 10.133-.6 12.4-.6h20Z" />
                </svg>
            </div>
        </div>
    </div>
</section>





<?php include 'footer-1.php'; ?>