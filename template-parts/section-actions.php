<?php
/**
 *  Section Actions
 *  
 *  Выводит акции из указанной категории с адаптивной сеткой
 *  
 *  Параметры:
 *  $args['section_actions_place']       - slug категории акций (например: 'home-page', 'action-kyxnu', 'action-closets'), если не указан - выводятся все акции
 *  $args['show_breadcrumbs']            - показывать хлебные крошки ('true'/'false')
 *  $args['section_actions_button']      - показывать кнопку "Смотреть еще" ('true'/'false')
 *  $args['background_color']            - цвет фона (например: 'bg-white', 'bg-light', 'bg-dark'), по умолчанию 'bg-white'
 *  
 *  Пример использования:
 *  // Все акции
 *  <?php get_template_part('template-parts/section-actions', null, array(
 *      'show_breadcrumbs' => 'true',
 *      'section_actions_button' => 'false',
 *      'background_color' => 'bg-white'
 *      ));
 *  ?>
 * 
 *  // Акции конкретной категории
 *  <?php get_template_part('template-parts/section-actions', null, array(
 *     'section_actions_place' => 'action-kyxnu',
 *     'show_breadcrumbs' => 'true',
 *     'section_actions_button' => 'false',
 *     'background_color' => 'bg-light'
 *      ));
 *  ?>
 */

// Проверяем наличие акций перед выводом секции
$check_args = array(
    'post_type' => 'action',
    'posts_per_page' => 1,
);

// Добавляем фильтр по категории только если она указана
if (isset($args['section_actions_place']) && !empty($args['section_actions_place'])) {
    $check_args['tax_query'] = array(
        array(
            'taxonomy' => 'action_category',
            'field'    => 'slug',
            'terms'    => $args['section_actions_place'],
        ),
    );
}

$check_query = new WP_Query($check_args);

// Если акций нет - не выводим секцию вообще
if (!$check_query->have_posts()) {
    wp_reset_postdata();
    return;
}
wp_reset_postdata();
?>

<!-- Section actions -->
<section class="archive-portfolio-section archive-portfolio
    <?php echo !empty($args['background_color']) ? $args['background_color'] : 'bg-white'; ?>
    ">
    <div class="container">
        <?php if ($args['show_breadcrumbs'] == 'true') { ?>
            <nav class="woocommerce-breadcrumb breadcrumbs pt-4">
                <a href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" fill="currentColor" viewBox="0 0 24 24" class="svg-icon">
                        <path d="m21.71 11.29-9-9a1 1 0 0 0-1.42 0l-9 9a1 1 0 0 0 1.42 1.42l.29-.3v7.89A1.77 1.77 0 0 0 5.83 22H8.5a1 1 0 0 0 1-1v-4.9a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1V21a1 1 0 0 0 1 1h2.67A1.77 1.77 0 0 0 20 20.3v-7.89l.29.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42" />
                    </svg>
                </a>
                / Акции
            </nav>
        <?php } ?>
        
        <div class="row ">
            <div class="col text-md-center <?php echo ($args['show_breadcrumbs'] != 'true') ? 'pt-5' : ''; ?>">
                <h2>Наши акции</h2>
                <svg width="62" height="14" viewBox="0 0 62 14" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon mb-5">
                    <rect x="48" width="14" height="14" rx="3" />
                    <rect x="24" width="14" height="14" rx="3" />
                    <rect width="14" height="14" rx="3" />
                </svg>
            </div>
        </div>

        <?php
        // Функция генератора класса колонок (точно как в архивной странице)
        if (!function_exists('get_column_class')) {
            function get_column_class($total, $index) {
                $class = 'col-12'; // Для мобильной версии всегда col-12

                // Определяем паттерн в зависимости от остатка деления на 6
                $pattern = $total % 6;

                switch ($pattern) {
                    case 1: // 1, 7, 13, 19... - первые две col-6, остальные col-4
                        if ($index < 2) {
                            $class .= ' col-md-6';
                            break;
                        }
                        $class .= ' col-md-4';
                        break;

                    case 2: // 2, 8, 14, 20... - первые две col-6, остальные col-4
                        if ($index < 2) {
                            $class .= ' col-md-6';
                        } else {
                            $class .= ' col-md-4';
                        }
                        break;

                    case 3: // 3, 9, 15, 21... - все col-4
                        $class .= ' col-md-4';
                        break;

                    case 4: // 4, 10, 16, 22... - все col-6
                        $class .= ' col-md-6';
                        break;

                    case 5: // 5, 11, 17, 23... - первые две col-6, остальные col-4
                        if ($index < 2) {
                            $class .= ' col-md-6';
                        } else {
                            $class .= ' col-md-4';
                        }
                        break;

                    case 0: // 6, 12, 18, 24... - все col-4
                        $class .= ' col-md-4';
                        break;
                }

                return $class;
            }
        }

        // Получаем акции
        $actions_args = array(
            'post_type' => 'action',
            'posts_per_page' => -1, // Выводим все акции
        );
        
        // Добавляем фильтр по категории только если она указана
        if (isset($args['section_actions_place']) && !empty($args['section_actions_place'])) {
            $actions_args['tax_query'] = array(
                array(
                    'taxonomy' => 'action_category',
                    'field'    => 'slug',
                    'terms'    => $args['section_actions_place'],
                ),
            );
        }
        
        $actions_query = new WP_Query($actions_args);

        if ($actions_query->have_posts()) : 
            $total_posts = $actions_query->post_count;
            $current_index = 0;
            ?>
            <div class="row justify-content-center pb-5">
                <?php while ($actions_query->have_posts()) : $actions_query->the_post();
                    $display_type = get_post_meta(get_the_ID(), '_action_display_type', true);
                    $display_type = empty($display_type) ? 'page' : $display_type;
                    
                    // Получаем класс колонки для текущего элемента
                    $col_class = get_column_class($total_posts, $current_index);
                ?>
                    <div class="<?php echo esc_attr($col_class); ?> mb-4">
                        <!-- Если выводить в админке выбрана кнопка выводить модальное окно при нажатии -->
                        <?php if ($display_type === 'modal'): ?>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#actionModal" data-action-title="<?php echo esc_attr(get_the_title()); ?>" class="action-card">
                                <?php if (has_post_thumbnail()): ?>
                                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>"  class="img-fluid w-100"  alt="<?php echo esc_attr(get_the_title()); ?>">
                                <?php endif; ?>
                            </a>
                        <!-- Иначе выводи ссылку на страницу акций -->
                        <?php else: ?>
                            <a href="<?php the_permalink(); ?>" class="action-card">
                                <?php if (has_post_thumbnail()): ?>
                                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>"  class="img-fluid w-100"  alt="<?php echo esc_attr(get_the_title()); ?>">
                                <?php endif; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php 
                    $current_index++;
                endwhile; ?>
            </div>
        <?php
            wp_reset_postdata();
        endif;
        ?>
        
        <!-- Добавлять кнопку смотреть все -->
        <?php if ($args['section_actions_button'] == 'true') { ?>
            <div class="row">
                <div class="col text-md-center">
                    <a href="/action/" class="btn btn-lg btn-corporate-color-1 mt-4">Смотреть еще</a>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

<!-- Action Modal -->
<div class="modal fade" id="actionModal" tabindex="-1" aria-labelledby="actionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/callback-action-mail.php" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="actionModalLabel">Заявка на акцию</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <!-- Добавить название акции в модальное окно -->
                        <p>
                            <strong>Акция: <span id="modalActionTitle"></span></strong>
                        </p>
                        <p>
                            <small>Мы свяжемся с Вами в течение 10 минут и ответим на все вопросы! Для звонка введите Ваше имя и телефон.</small>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <input type="text" name="name" class="form-control" placeholder="Ваше имя">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="tel" class="form-control telMask" placeholder="Ваш телефон*" required>
                    </div>
                </div>

                <!-- Передать информацию в почту название акции -->
                <input type="hidden" name="action_title" id="hiddenActionTitle" value="">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-lg btn-corporate-color-1 mx-auto">Жду звонка</button>
            </div>
        </form>
    </div>
</div>
<!-- /Action Modal -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var actionModal = document.getElementById('actionModal');
        if (actionModal) {
            actionModal.addEventListener('show.bs.modal', function(event) {
                var button = event.relatedTarget;
                var actionTitle = button.getAttribute('data-action-title');

                var modalTitle = actionModal.querySelector('#modalActionTitle');
                var hiddenInput = actionModal.querySelector('#hiddenActionTitle');

                modalTitle.textContent = actionTitle;
                hiddenInput.value = actionTitle;
            });
        }
    });
</script>
<!-- /Section actions -->