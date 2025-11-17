<?php
$bg_class = $args['bg_class'] ?? 'bg-white';
$config = $args['config'] ?? 'faq';

// Загружаем конфиг из той же папки, что и шаблон
$config_path = dirname(__FILE__) . '/' . $config . '.php';
$faq_items = [];

if (file_exists($config_path)) {
    $faq_items = include($config_path);
}
?>

<!-- Частые вопросы -->
<section class="section section-faq py-5 <?php echo esc_attr($bg_class); ?>">
    <div class="container">
        <div class="section-title text-md-center">
            <h2>Частые вопросы</h2>
            <svg width="62" height="14" viewBox="0 0 62 14" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon mb-5">
                    <rect x="48" width="14" height="14" rx="3" />
                    <rect x="24" width="14" height="14" rx="3" />
                    <rect width="14" height="14" rx="3" />
                </svg>
        </div>

        <div class="col-lg-10 text-center mx-auto">
            <div class="accordion text-start" id="accordionExample">
                <?php 
                $first = true;
                foreach ($faq_items as $index => $item): 
                    $collapse_id = 'collapse-' . ($index + 1);
                    $heading_id = 'heading-' . ($index + 1);
                ?>
                <div class="accordion-item mb-3">
                    <h3 class="accordion-header" id="<?php echo $heading_id; ?>">
                        <button class="accordion-button <?php echo $first ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse"
                            data-bs-target="#<?php echo $collapse_id; ?>" aria-expanded="<?php echo $first ? 'true' : 'false'; ?>" aria-controls="<?php echo $collapse_id; ?>">
                            <?php echo esc_html($item['question']); ?>
                        </button>
                    </h3>
                    <div id="<?php echo $collapse_id; ?>" class="accordion-collapse collapse <?php echo $first ? 'show' : ''; ?>" aria-labelledby="<?php echo $heading_id; ?>"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <?php echo $item['answer']; ?>
                        </div>
                    </div>
                </div>
                <?php 
                    $first = false;
                endforeach; 
                ?>
            </div>
        </div>
    </div>
</section>
<!-- /Частые вопросы -->