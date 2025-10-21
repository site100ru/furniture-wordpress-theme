<!-- Section actions -->
<section class="archive-portfolio-section archive-portfolio bg-white pb-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="breadcrumbs pt-4">
                    <a href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" fill="currentColor" viewBox="0 0 24 24" class="svg-icon">
                            <path
                                d="m21.71 11.29-9-9a1 1 0 0 0-1.42 0l-9 9a1 1 0 0 0 1.42 1.42l.29-.3v7.89A1.77 1.77 0 0 0 5.83 22H8.5a1 1 0 0 0 1-1v-4.9a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1V21a1 1 0 0 0 1 1h2.67A1.77 1.77 0 0 0 20 20.3v-7.89l.29.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42" />
                        </svg>
                    </a>
                    /
                    <a href="archive-product-portfolio.html" style="text-decoration: none;">Услуги</a> /
                    Кухни на заказ
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col text-md-center">
                <h2>Наши акции</h2>
                <svg width="62" height="14" viewBox="0 0 62 14" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon mb-5">
                    <rect x="48" width="14" height="14" rx="3" />
                    <rect x="24" width="14" height="14" rx="3" />
                    <rect width="14" height="14" rx="3" />
                </svg>
            </div>
        </div>

        <?php if ($args['section_actions_place'] == 'actions-page') { ?>
            <div class="row text-start">
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/actions/action-img-1.webp"
                        class="img-fluid rounded mb-3" alt="">
                    <p class="mb-5 d-none">Бесплатная доставка</p>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/actions/action-img-4.webp" class="img-fluid rounded mb-3" alt="Акция">
                </div>
                <div class="col-md-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/actions/action-img-4.webp" class="img-fluid rounded mb-3" alt="Акция">
                </div>
                <div class="col-md-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/actions/action-img-1.webp"
                        class="img-fluid rounded mb-3" alt="">
                    <p class="mb-5 d-none">Бесплатная доставка</p>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/actions/action-img-1.webp"
                        class="img-fluid rounded mb-3" alt="">
                    <p class="mb-5 d-none">Бесплатная доставка</p>
                </div>
                <!--div class="col-md-4 mb-5">
					<a href="single-portfolio-product-page.html">
						<div class="approximation rounded action-box">
							<div class="blue_circle">
								<h4>Бесплатная<br>доставка</h4>
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/action.webp" class="img-fluid" alt="">
						</div>
					</a>
				</div>
				<div class="col-md-4 mb-5">
					<a href="single-portfolio-product-page.html">
						<div class="approximation rounded action-box">
							<div class="blue_circle">
								<h4>Бесплатная<br>доставка</h4>
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/action.webp" class="img-fluid" alt="">
						</div>
					</a>
				</div-->
            </div>
        <?php } else if ($args['section_actions_place'] == 'home-page') { ?>
            <div class="row text-start">
                <div class="col-md-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/actions/action-img-1.webp"
                        class="img-fluid rounded mb-3" alt="">
                    <p class="mb-5 d-none">Бесплатная доставка</p>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/actions/action-img-4.webp" class="img-fluid rounded mb-3" alt="Акция">
                </div>
                <div class="col-md-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/actions/action-img-4.webp" class="img-fluid rounded mb-3" alt="Акция">
                </div>
            </div>
        <?php } ?>

        <?php if ($args['section_actions_button'] == 'true') { ?>
            <div class="row">
                <div class="col text-md-center">
                    <a href="/furniture/akcii/" class="btn btn-lg btn-corporate-color-1 mt-4">Смотреть еще</a>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
<!-- /Section actions -->