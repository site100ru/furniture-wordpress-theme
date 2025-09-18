<!-- Section actions -->
<section class="archive-portfolio-section archive-portfolio bg-white pb-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="breadcrumbs pt-4">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/breadcrumbs-icon.svg"></a>
                    /
                    <a href="archive-product-portfolio.html" style="text-decoration: none;">Услуги</a> /
                    Кухни на заказ
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col text-md-center">
                <h2>Наши акции</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">
            </div>
        </div>
        
		<?php if ( $args['section_actions_place'] == 'actions-page' ) { ?>
			<div class="row text-start">
				<div class="col-md-6">
					<img src="<?php echo get_template_directory_uri(); ?>/img/actions/action-img-1.jpg"
						class="img-fluid rounded mb-3" alt="">
					<p class="mb-5 d-none">Бесплатная доставка</p>
				</div>
				<div class="col-md-6">
					<img src="<?php echo get_template_directory_uri(); ?>/img/actions/action-img-4.jpg" class="img-fluid rounded mb-3" alt="Акция">
				</div>
				<div class="col-md-4">
					<img src="<?php echo get_template_directory_uri(); ?>/img/actions/action-img-4.jpg" class="img-fluid rounded mb-3" alt="Акция">
				</div>
				<div class="col-md-4">
					<img src="<?php echo get_template_directory_uri(); ?>/img/actions/action-img-1.jpg"
						class="img-fluid rounded mb-3" alt="">
					<p class="mb-5 d-none">Бесплатная доставка</p>
				</div>
				<div class="col-md-4">
					<img src="<?php echo get_template_directory_uri(); ?>/img/actions/action-img-1.jpg"
						class="img-fluid rounded mb-3" alt="">
					<p class="mb-5 d-none">Бесплатная доставка</p>
				</div>
				<!--div class="col-md-4 mb-5">
					<a href="single-portfolio-product-page.html">
						<div class="approximation rounded action-box">
							<div class="blue_circle">
								<h4>Бесплатная<br>доставка</h4>
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/action.jpg" class="img-fluid" alt="">
						</div>
					</a>
				</div>
				<div class="col-md-4 mb-5">
					<a href="single-portfolio-product-page.html">
						<div class="approximation rounded action-box">
							<div class="blue_circle">
								<h4>Бесплатная<br>доставка</h4>
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/action.jpg" class="img-fluid" alt="">
						</div>
					</a>
				</div-->
			</div>
		<?php } else if ( $args['section_actions_place'] == 'home-page' ) { ?>
			<div class="row text-start">
				<div class="col-md-4">
					<img src="<?php echo get_template_directory_uri(); ?>/img/actions/action-img-1.jpg"
						class="img-fluid rounded mb-3" alt="">
					<p class="mb-5 d-none">Бесплатная доставка</p>
				</div>
				<div class="col-md-4">
					<img src="<?php echo get_template_directory_uri(); ?>/img/actions/action-img-4.jpg" class="img-fluid rounded mb-3" alt="Акция">
				</div>
				<div class="col-md-4">
					<img src="<?php echo get_template_directory_uri(); ?>/img/actions/action-img-4.jpg" class="img-fluid rounded mb-3" alt="Акция">
				</div>
			</div>
		<?php } ?>
		
		<?php if ( $args['section_actions_button'] == 'true' ) { ?>
			<div class="row">
				<div class="col text-md-center">
					<a href="/furniture/akcii/" class="btn btn-lg btn-corporate-color-1 mt-4">Смотреть еще</a>
				</div>
			</div>
		<?php } ?>
    </div>
</section>
<!-- /Section actions -->