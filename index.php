<?php

/**
 * Template Name: Главная с простой картинкой
 * Template Post Type: page
 */

include 'header.php';

?>


<!-- Home section -->
<div id="sp-home" class="scroll-points"></div>
<section class="main-home-section main-home-section-kyxnu">
    <div class="home-img" style="min-height: 640px;"></div>

    <!-- header-menu -->
    <?php get_template_part('template-parts/header-menu/header-menu'); ?>
    
    <div class="container">
        <div class="row align-items-center home-section-height">
            <div class="col-xl-10 col-xxl-9">
                <h1 class="home-title mb-3">
                    Мебель по индивидуальным размерам <br />
                    на заказ от производителя
                </h1>
                <p class="home-subtitle mb-4">Изготовим качественную мебель с учетом Ваших пожеланий и особенностей помещения по разумной цене! Рассчитаем стоимость за 15 минут.</p>
                <button type="button" class="btn btn-lg btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#calculatePriceWithDownloadModal">Рассчитать стоимость</button>
            </div>
        </div>
    </div>
</section>
<!-- /Home section -->

<!-- Action -->
<?php get_template_part('template-parts/section-projects/section-projects', null, array(
    'background_color' => 'bg-white',
    'card_type' => 'approximation'
)); ?>

<!-- Services -->
<?php get_template_part('template-parts/section-services/section-services', null, array(
    'background_color' => 'bg-light',
    'card_type' => 'approximation'
)); ?>

<!-- SECTION PORTFOLIO -->
<?php get_template_part('template-parts/section-portfolio-tabs/section-portfolio-tabs', null, []); ?>
<!-- END SECTION PORTFOLIO -->

<?php get_template_part('template-parts/section-actions', null, ['section_actions_button' => 'false', 'section_actions_place' => 'actions-page', 'show_breadcrumbs' => 'false']); ?>


<!-- SECTION ACTIONS -->
<?php get_template_part('template-parts/section-actions', null, array(
    'section_actions_place' => 'home-page',
    'show_breadcrumbs' => 'false',
    'section_actions_button' => 'true',
    'background_color' => 'bg-white'
));
?>


<!-- ABOUT SECTION -->
<?php get_template_part('template-parts/about-section/about-section'); ?>


<!-- Как заказать -->
<section class="section section-how bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="section-title text-md-center">
                <h2>Как заказать</h2>
                <svg width="62" height="14" viewBox="0 0 62 14" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon mb-5">
                    <rect x="48" width="14" height="14" rx="3" />
                    <rect x="24" width="14" height="14" rx="3" />
                    <rect width="14" height="14" rx="3" />
                </svg>
            </div>

            <div class="row justify-content-around">
                <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="row align-items-center">
                        <div class="col-4 text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/1.svg" class="img-fluid" />
                        </div>
                        <div class="col-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" viewBox="0 0 70 70" class="svg-icon">
                                <path
                                    d="M58.288 45.4a1.06 1.06 0 0 1-1.054-1.055V23.394a1.054 1.054 0 0 1 1.054-1.054 11.534 11.534 0 0 1 0 23.06m1.054-20.901v18.699a9.426 9.426 0 0 0 0-18.7M12.356 45.4a11.533 11.533 0 1 1 0-23.06 1.054 1.054 0 0 1 1.054 1.054v20.951a1.063 1.063 0 0 1-1.054 1.054m-1.054-20.901a9.426 9.426 0 0 0 0 18.699zM38.67 65.799h-6.697a3.934 3.934 0 0 1-3.8-5.48 3.935 3.935 0 0 1 3.8-2.382h6.698a3.935 3.935 0 0 1 0 7.862m-6.697-5.737a1.827 1.827 0 1 0 0 3.655h6.698a1.827 1.827 0 0 0 0-3.655z" />
                                <path
                                    d="M8.064 25.366a.9.9 0 0 1-.332-.06 1.054 1.054 0 0 1-.671-1.326 29.749 29.749 0 0 1 56.514 0 1.054 1.054 0 0 1-1.998.655 27.633 27.633 0 0 0-52.519 0 1.05 1.05 0 0 1-.994.73M41.68 62.22a1.054 1.054 0 0 1-.23-2.073 27.57 27.57 0 0 0 19.584-16.872 1.056 1.056 0 0 1 1.963.773 29.67 29.67 0 0 1-21.122 18.147q-.097.022-.195.026" />
                                <path
                                    d="M35.322 52.939a19.736 19.736 0 1 1 19.736-19.736 19.76 19.76 0 0 1-19.736 19.736m0-37.399A17.637 17.637 0 1 0 52.95 33.203a17.645 17.645 0 0 0-17.628-17.629z" />
                                <path
                                    d="M24.842 35.49a2.091 2.091 0 1 1 0-4.184 2.091 2.091 0 0 1 0 4.183M45.241 35.49a2.09 2.09 0 1 1 0-4.182 2.09 2.09 0 0 1 0 4.181M35.322 45.357a6.044 6.044 0 0 1-6.035-6.035 1.052 1.052 0 0 1 1.828-.805 1.05 1.05 0 0 1 .272.805 3.935 3.935 0 1 0 7.87 0 1.054 1.054 0 0 1 2.108 0 6.05 6.05 0 0 1-6.043 6.035M40.311 29.667a1 1 0 0 1-.272 0 29 29 0 0 1-7.938-3.952c-.34-.221-.663-.434-.97-.62a2.74 2.74 0 0 0 0 1.759 1.054 1.054 0 0 1-.934 1.7c-4.522-.408-7.446-3.264-9.707-6.01a1.078 1.078 0 0 1 .486-1.727 1.08 1.08 0 0 1 1.155.325c2.37 2.873 4.428 4.403 6.8 5.006q.015-.901.195-1.785c.068-.39.136-.748.161-1.062a1.04 1.04 0 0 1 .527-.85 1.05 1.05 0 0 1 .978 0q1.265.664 2.447 1.47a34.6 34.6 0 0 0 5.483 3.06v-.093a8.5 8.5 0 0 1-.697-2.941 1.055 1.055 0 0 1 1.81-.79c2.474 2.626 8.05 3.153 11.9 1.13a1.055 1.055 0 1 1 .994 1.861 13.96 13.96 0 0 1-11.9.28c.253.644.444 1.31.57 1.99a1.054 1.054 0 0 1-.672 1.19 1 1 0 0 1-.416.06" />
                            </svg>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col text-start">
                            <h3>Первичный контакт</h3>
                            <!-- Здесь -->
                            <p class="mb-0">Свяжитесь с нами любым удобным способом, расскажите, что Вы хотите. При наличии дизайн-проекта, набросок, размеров или другой информации — высылаете нам на почту, в Telegram, Whatsapp или в форме обратной связи.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="row align-items-center">
                        <div class="col-4 text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/2.svg" class="img-fluid" />
                        </div>
                        <div class="col-4 text-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" viewBox="0 0 70 70" class="svg-icon">
                                <path
                                    d="M63.094 22.094h-3.051a11.01 11.01 0 0 0-9.95-9.95v-7.05a1 1 0 0 0-1-1h-44a1 1 0 0 0-1 1v60a1 1 0 0 0 1 1h58a3 3 0 0 0 3-3v-38a3 3 0 0 0-3-3m-14 12a11 11 0 0 0 9.786-6h1.214v8h-22v-8h1.214a11 11 0 0 0 9.786 6m9-11a9 9 0 1 1-9-9 9.01 9.01 0 0 1 9 9m-52-17h42v6.05a11.01 11.01 0 0 0-9.95 9.95h-3.05a3 3 0 0 0-2.816 2h-8.184v2h8v10h-8v2h8v2h-8v2h8v10h-8v2h8v2h-8v2h8v5c.003.341.065.68.184 1H6.094zm58 57a1 1 0 0 1-1 1h-28a1 1 0 0 1-1-1v-38a1 1 0 0 1 1-1h3.05q.095 1.017.376 2h-1.426a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h24a1 1 0 0 0 1-1v-10a1 1 0 0 0-1-1h-1.426q.28-.983.375-2h3.05a1 1 0 0 1 1 1z" />
                                <path
                                    d="M41.094 40.094h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1m-1 4h-2v-2h2zM61.094 40.094h-8a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1m-1 4h-6v-2h6zM41.094 48.094h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1m-1 4h-2v-2h2zM41.094 56.094h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1m-1 4h-2v-2h2zM49.094 40.094h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1m-1 4h-2v-2h2zM49.094 48.094h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1m-1 4h-2v-2h2zM49.094 56.094h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1m-1 4h-2v-2h2zM61.094 48.094h-8a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-12a1 1 0 0 0-1-1m-1 12h-6v-10h6zM15.094 16.094a7 7 0 1 0 7 7 7.01 7.01 0 0 0-7-7m0 12a5 5 0 1 1 5-5 5.006 5.006 0 0 1-5 5M24.094 20.094h9v2h-9zM14.094 14.094h26a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-26a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1m1-4h24v2h-24z" />
                                <path
                                    d="M14.094 23.68 12.8 22.387 11.387 23.8l2 2a1 1 0 0 0 1.414 0l4-4-1.414-1.414zM15.094 32.094a7 7 0 1 0 7 7 7.01 7.01 0 0 0-7-7m0 12a5 5 0 1 1 5-5 5.006 5.006 0 0 1-5 5" />
                                <path
                                    d="M14.094 39.68 12.8 38.387 11.387 39.8l2 2a1 1 0 0 0 1.414 0l4-4-1.414-1.414zM15.094 48.094a7 7 0 1 0 7 7 7.01 7.01 0 0 0-7-7m0 12a5 5 0 1 1 5-5 5.006 5.006 0 0 1-5 5" />
                                <path
                                    d="M14.094 55.68 12.8 54.387 11.387 55.8l2 2a1 1 0 0 0 1.414 0l4-4-1.414-1.414zM46.523 17.03a3.99 3.99 0 0 0-1.43 3.064h2a2 2 0 0 1 2.372-1.967 2.03 2.03 0 0 1 1.6 1.6 1.99 1.99 0 0 1-.61 1.839 6.9 6.9 0 0 0-2.361 5.028v.5h2v-.5a4.91 4.91 0 0 1 1.717-3.568 4 4 0 0 0-5.288-6zM48.094 28.094h2v2h-2z" />
                            </svg>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col text-start">
                            <h3>Расчет стоимости</h3>
                            <p class="mb-0">
                                На основании полученой от Вас информации мы сделаем предварительный расчет стоимости и
                                сроков
                                производства. При необходимости уточняемм детали.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="row align-items-center">
                        <div class="col-4 text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/3.svg" class="img-fluid" />
                        </div>
                        <div class="col-4">
                            <svg width="70" height="70" viewBox="0 0 70 70" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                <path
                                    d="M43.477 4.824H4v60h48.87v-50.69zm.64 3.702 5.018 4.972h-5.017zm6.565 54.129H6.188V6.992H41.93v8.675h8.753zM61.259 12.486l-4.741 11.277V64.1H66V23.763zm2.553 49.446h-5.106v-5.06h5.106zm0-7.23h-5.106V27.957h5.106zm0-28.915h-5.106v-1.59l2.553-6.073 2.553 6.073z" />
                                <path
                                    d="M46.67 53.257H28.435v2.169H46.67zM43.527 47.89c-.59.748-.864 1.03-1.42 1.03-.554 0-.83-.282-1.419-1.03-.62-.785-1.47-1.862-3.143-1.862s-2.521 1.077-3.14 1.863c-.588.747-.863 1.029-1.416 1.029s-.826-.282-1.414-1.029c-.62-.786-1.467-1.863-3.14-1.863v2.169c.553 0 .827.282 1.415 1.028.619.787 1.467 1.864 3.14 1.864 1.672 0 2.52-1.077 3.14-1.863.587-.747.862-1.029 1.414-1.029.556 0 .83.282 1.42 1.03.62.786 1.47 1.862 3.143 1.862 1.674 0 2.524-1.076 3.144-1.862.589-.748.864-1.03 1.42-1.03v-2.169c-1.675 0-2.524 1.077-3.144 1.863M32.082 57.594h-3.647v2.169h3.647zM37.918 57.594H34.27v2.169h3.648zM46.67 57.594h-3.647v2.169h3.647zM24.789 10.606H10.2v2.17H24.79zM29.894 22.173H10.2v2.169h19.694zM19.683 46.028H10.2v2.169h9.483zM19.683 51.812H10.2v2.168h9.483zM46.67 27.957H10.2v2.168h36.47zM46.67 33.74H10.2v2.168h36.47zM46.67 39.523H13.848v2.168h32.824zM13.847 14.944H10.2v2.17h3.647zM19.682 14.944h-3.647v2.17h3.647z" />
                            </svg>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col text-start">
                            <h3>Заключение договора</h3>
                            <p class="mb-0">
                                Если Вас все устраивает, мы приезжаем к Вам на замер, утверждаем сроки, материалы,
                                заключаем договор. Вы
                                вносите предоплату и кухня поступает в производство.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-0">
                    <div class="row align-items-center">
                        <div class="col-4 text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/4.svg" class="img-fluid" />
                        </div>
                        <div class="col-4">
                            <svg width="70" height="70" viewBox="0 0 70 70" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                                <path
                                    d="M22.58 48.01a4.525 4.525 0 0 0 0 9.05 4.525 4.525 0 0 0 0-9.05m0 6.788a2.263 2.263 0 0 1 0-4.525 2.263 2.263 0 0 1 0 4.525M49.677 48.01a4.525 4.525 0 0 0 0 9.05 4.525 4.525 0 0 0 0-9.05m0 6.788a2.263 2.263 0 0 1 0-4.525 2.263 2.263 0 0 1 0 4.525" />
                                <path
                                    d="M67.742 36.905v-9.072a5.66 5.66 0 0 0-.883-3.037L60.327 14.51a3.37 3.37 0 0 0-2.857-1.572h-7.793V8.414h-37.01l-1.694 6.788h3.491l-.393 2.263H4.516v2.262h9.163l-.787 4.525H4.516v2.263H12.5l-.785 4.525H4.516v2.263h6.806l-.982 5.657H8.036l-1.13 9.05h-.132a2.263 2.263 0 0 0-2.258 2.263v4.525a2.263 2.263 0 0 0 2.258 2.262h7.996c1.565 2.701 4.475 4.526 7.81 4.526s6.247-1.825 7.811-4.526h11.477c1.565 2.701 4.475 4.526 7.81 4.526s6.247-1.825 7.811-4.526h8.91l3.577-16.732.024-.237a3.39 3.39 0 0 0-2.258-3.186M57.47 15.202c.387 0 .744.196.952.524l6.532 10.286c.347.544.53 1.174.53 1.821v8.864H61.17l-.452 2.262H42.903V16.333c0-.624.507-1.131 1.13-1.131zm-43.04-4.525h32.99v2.262H13.864zm2.326 4.525h24.097a3.4 3.4 0 0 0-.208 1.131V38.96H12.633zm-6.727 26.02h50.239l-1.355 6.788h-1.426c-1.565-2.7-4.475-4.525-7.81-4.525s-6.247 1.824-7.811 4.525H30.39c-1.564-2.7-4.475-4.525-7.81-4.525s-6.246 1.824-7.811 4.525H9.181zM6.774 54.798v-4.525h7.071a9 9 0 0 0-.297 2.262c0 .783.11 1.538.297 2.263zm15.807 4.525c-3.736 0-6.775-3.044-6.775-6.788 0-3.743 3.039-6.788 6.775-6.788s6.774 3.045 6.774 6.788-3.038 6.788-6.774 6.788m8.735-4.525c.187-.725.297-1.48.297-2.263s-.11-1.537-.297-2.262h9.627a9 9 0 0 0-.298 2.262c0 .783.11 1.538.297 2.263zm18.361 4.525c-3.736 0-6.774-3.044-6.774-6.788 0-3.743 3.038-6.788 6.774-6.788s6.775 3.045 6.775 6.788-3.038 6.788-6.775 6.788m14.893-4.525h-6.159c.189-.725.299-1.48.299-2.263s-.11-1.537-.297-2.262h2.351l2.258-11.314h3.59c.59 0 1.076.454 1.126 1.032z" />
                                <path
                                    d="m63.226 27.322-6.149-9.857H45.161v14.707h18.065zm-2.258 2.587H47.419V19.728h8.407l5.142 8.243zM45.161 34.435h6.774v2.262h-6.774zM0 17.465h2.258v2.262H0zM0 24.252h2.258v2.263H0zM0 31.04h2.258v2.263H0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col text-start">
                            <h3>Доставка и установка</h3>
                            <p class="mb-0">
                                После окончания производства доставляем и устанавливаем кухню в заранее оговоренные дату
                                и время. После
                                установки производим окончательные расчеты.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Как заказать -->


<!-- Частые вопросы -->
<?php get_template_part('template-parts/section-faq/section-faq', null, [
    'bg_class' => 'bg-white',
    'config' => 'faq-kitchen'
]);?>
<!-- /Частые вопросы -->


<!-- Не нашли нужного товара? -->
<section class="section section-half bg-light py-5">
    <div class="d-flex flex-wrap half-bg">
        <!-- Левая часть с фоном -->
        <div class="left-part flex-grow-1"></div>

        <!-- Правая часть с картинкой (скрывается на мобилках) -->
        <div class="right-part d-none d-md-block">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gradient-order-section-bg-1.webp" alt="Изображение"
                class="img-cover" />
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-md-6 text-md-end">
                <h2 class="mb-1">Рассчитаем стоимость за 15 минут</h2>

                <p class="order-description mb-3">
                    Узнайте стоимость качественной кухни с учетом всех Ваших пожеланий и особенностей помещения.
                    Оставьте заявку
                    нажав на кнопку ниже или напишите нам в мессенджер.
                    Это бесплатно и ни к чему Вас не обязывает!
                </p>

                <svg width="62" height="14" viewBox="0 0 62 14" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon mb-5">
                    <rect x="48" width="14" height="14" rx="3" />
                    <rect x="24" width="14" height="14" rx="3" />
                    <rect width="14" height="14" rx="3" />
                </svg>

                <br />

                <button type="button" class="btn btn-lg btn-corporate-color-1 mb-4" data-bs-toggle="modal"
                    data-bs-target="#calculatePriceWithDownloadModal">
                    Расcчитать стоимость
                </button>

                <div class="row justify-content-md-end">
                    <div class="col">
                        <ul class="nav justify-content-md-end gap-3">
                            <?php
                            // Получаем WhatsApp
                            $whatsapp = '';
                            if (function_exists('mytheme_get_whatsapp')) {
                                $whatsapp = mytheme_get_whatsapp(true);
                            }
                            if (!empty($whatsapp)):
                            ?>
                            <li class="nav-item">
                                <a class="nav-link ico-button" href="<?php echo esc_url($whatsapp); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.png" />
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php
                            // Получаем Telegram
                            $telegram = '';
                            if (function_exists('mytheme_get_telegram')) {
                                $telegram = mytheme_get_telegram();
                            }
                            if (!empty($telegram)):
                            ?>
                            <li class="nav-item">
                                <a class="nav-link ico-button" href="<?php echo esc_url($telegram); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.png" />
                                </a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 ps-4"></div>
        </div>
    </div>
</section>
<!-- /Не нашли нужного товара? -->

<?php include 'footer-1.php'; ?>