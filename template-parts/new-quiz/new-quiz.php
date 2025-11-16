<?php

/**
 * Шаблон квиза с поддержкой динамических конфигов
 */

$config_name = isset($args['config']) ? $args['config'] : 'quiz-config';
$config_file = __DIR__ . '/' . $config_name . '.php';

if (!file_exists($config_file)) {
    error_log("Quiz config file not found: {$config_file}");
    return;
}

$quiz_config = require_once($config_file);

$settings = $quiz_config['settings'];
$questions = $quiz_config['questions'];
$total_questions = count(array_filter($questions, function ($q) {
    return $q['type'] !== 'form';
}));
?>

<section id="quiz" class="quiz-section py-5">
    <div class="container">
        <div class="row">
            <div class="col text-md-center">
                <h2 class="text-center title"><?php echo $settings['title']; ?></h2>
                <p class="text-center mb-5 subtitle"><?php echo $settings['subtitle']; ?></p>

                <svg style="margin-bottom: 60px;" width="62" height="14" viewBox="0 0 62 14" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
                    <rect x="48" width="14" height="14" rx="3"></rect>
                    <rect x="24" width="14" height="14" rx="3"></rect>
                    <rect width="14" height="14" rx="3"></rect>
                </svg>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="quiz-question-wrapper">

                    <div class="section-title-decoration"></div>

                    <div class="quiz-question-container">
                        <div class="row text-start quiz-question-container-row">

                            <?php foreach ($questions as $index => $question): ?>
                                <?php
                                $question_id = $question['id'];
                                $display_style = $index === 0 ? '' : '';
                                $progress = $question['progress'];
                                $step_text = isset($question['step_number']) && $question['step_number'] === false
                                    ? ''
                                    : "<span>{$question_id}/{$total_questions}</span> ";
                                $is_last = $progress >= 100;
                                ?>

                                <!-- Вопрос <?php echo $question_id; ?> -->
                                <div class="col-xl-9" id="question-<?php echo $question_id; ?>" style="<?php echo $display_style; ?>" data-progress="<?php echo $progress; ?>" data-is-last="<?php echo $is_last ? '1' : '0'; ?>">
                                    <h3 class="quiz-section-subtitle mb-4 text-start">
                                        <?php echo $step_text . $question['title']; ?>
                                    </h3>

                                    <?php if (!empty($question['subtitle'])): ?>
                                        <p class="quiz-section-description mb-4 text-start">
                                            <?php echo $question['subtitle']; ?>
                                        </p>
                                    <?php endif; ?>

                                    <?php if ($question['type'] === 'form'): ?>
                                        <!-- Форма обратной связи -->
                                        <form action="<?php echo $settings['form_action']; ?>" id="quiz" method="post" name="quiz" class="form">
                                            <div class="loader-box"><span class="loader"></span></div>

                                            <input type="hidden" name="form-source" value="quiz">
                                            <input type="hidden" name="button-context" value="quiz-configurator">

                                            <!-- Способы связи -->
                                            <div class="row quiz-questions-container align-items-center">
                                                <?php foreach ($question['contact_methods'] as $method): ?>
                                                    <div class="<?php echo $question['col_size']; ?> mb-3 question">
                                                        <label class="option_item" for="<?php echo $method['name']; ?>">
                                                            <div class="d-flex quiz-chek gap-2 align-items-center">
                                                                <input type="checkbox"
                                                                    id="<?php echo $method['name']; ?>"
                                                                    name="<?php echo $method['name']; ?>"
                                                                    class="checkbox"
                                                                    value="<?php echo $method['title']; ?>" />
                                                                <div class="option_inner text-start">
                                                                    <div class="shadow-wrapper-box"></div>
                                                                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/template-parts/new-quiz/ico/checkbox.svg" />
                                                                </div>
                                                                <img src="<?php echo $method['icon']; ?>" class="qize-feedback-icons">
                                                                <h6 class="quiz-section-h3 mb-0"><?php echo $method['title']; ?></h6>
                                                            </div>
                                                        </label>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>

                                            <!-- Поля формы -->
                                            <div class="row mb-4">
                                                <?php echo $question['form_fields']; ?>
                                            </div>

                                            <!-- Скрытые поля для передачи ответов -->
                                            <?php for ($i = 1; $i <= $total_questions; $i++): ?>
                                                <input type="hidden" id="form-answer-<?php echo $i; ?>" name="form-answer-<?php echo $i; ?>" />
                                            <?php endfor; ?>
                                            <?php foreach ($question['contact_methods'] as $method): ?>
                                                <input type="hidden" id="form-<?php echo $method['name']; ?>" name="form-<?php echo $method['name']; ?>" />
                                            <?php endforeach; ?>
                                        </form>

                                    <?php elseif ($question['type'] === 'checkbox'): ?>
                                        <!-- Варианты с чекбоксами (простой список) -->
                                        <div class="row quiz-questions-container">
                                            <?php foreach ($question['answers'] as $answer_index => $answer): ?>
                                                <?php
                                                $answer_id = "answer-{$question_id}-" . ($answer_index + 1);
                                                $input_name = $question['input_name'] . '-' . ($answer_index + 1);
                                                ?>
                                                <div class="<?php echo $question['col_size']; ?>">
                                                    <label class="d-flex quiz-chek gap-3" for="<?php echo $answer_id; ?>">
                                                        <div class="option_item">
                                                            <input type="checkbox"
                                                                id="<?php echo $answer_id; ?>"
                                                                name="<?php echo $input_name; ?>"
                                                                class="checkbox"
                                                                value="<?php echo $answer['title']; ?>" />
                                                            <div class="option_inner text-start">
                                                                <div class="shadow-wrapper-box"></div>
                                                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/template-parts/new-quiz/ico/checkbox.svg" />
                                                            </div>
                                                        </div>
                                                        <h6 class="quiz-section-h3 mb-4"><?php echo $answer['title']; ?></h6>
                                                    </label>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>

                                    <?php elseif ($question['type'] === 'checkbox-with-image-text'): ?>
                                        <!-- Варианты с чекбоксами в стиле радиокнопок (с изображениями) -->
                                        <div class="row quiz-questions-container">
                                            <?php foreach ($question['answers'] as $answer_index => $answer): ?>
                                                <?php
                                                $answer_id = "answer-{$question_id}-" . ($answer_index + 1);
                                                $input_name = $question['input_name'] . '-' . ($answer_index + 1);
                                                ?>
                                                <div class="<?php echo $question['col_size']; ?>">
                                                    <label class="option_item mb-3" for="<?php echo $answer_id; ?>">
                                                        <input type="checkbox"
                                                            id="<?php echo $answer_id; ?>"
                                                            name="<?php echo $input_name; ?>"
                                                            class="checkbox"
                                                            value="<?php echo $answer['title']; ?>" />
                                                        <div class="option_inner">
                                                            <div class="shadow-wrapper">
                                                                <div class="shadow-wrapper-decoration"></div>
                                                            </div>
                                                            <img loading="lazy"
                                                                src="<?php echo $answer['image']; ?>"
                                                                style="width: 100%" />
                                                        </div>
                                                    </label>
                                                    <h6 class="quiz-section-h3 mb-4"><?php echo $answer['title']; ?></h6>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>

                                    <?php else: ?>
                                        <!-- Варианты с радиокнопками и изображениями -->
                                        <div class="row quiz-questions-container">
                                            <?php foreach ($question['answers'] as $answer_index => $answer): ?>
                                                <?php $answer_id = "answer-{$question_id}-" . ($answer_index + 1); ?>
                                                <div class="<?php echo $question['col_size']; ?>">
                                                    <label class="option_item mb-3" for="<?php echo $answer_id; ?>">
                                                        <input type="radio"
                                                            id="<?php echo $answer_id; ?>"
                                                            name="<?php echo $question['input_name']; ?>"
                                                            class="checkbox"
                                                            value="<?php echo $answer['title']; ?>" />
                                                        <div class="option_inner">
                                                            <div class="shadow-wrapper">
                                                                <div class="shadow-wrapper-decoration"></div>
                                                            </div>
                                                            <img loading="lazy"
                                                                src="<?php echo $answer['image']; ?>"
                                                                style="width: 100%" />
                                                        </div>
                                                    </label>
                                                    <h6 class="quiz-section-h3 mb-4"><?php echo $answer['title']; ?></h6>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>

                                    <?php endif; ?>
                                </div>
                                <!-- /Вопрос <?php echo $question_id; ?> -->

                            <?php endforeach; ?>

                            <!-- Блок с директором -->
                            <div class="col-xl-3">
                                <div class="row justify-content-center">
                                    <div class="col pt-5 text-center text-xl-start">
                                        <div class="title">
                                            <h5 class="quiz-section-h3 mb-2">Нужна конcультация?</h5>
                                            <span>Отвечу на все вопросы</span>
                                        </div>

                                        <div class="img-fluid mb-2 w-100 img-director mt-3">
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/template-parts/new-quiz/img/director-img.jpg" />
                                        </div>

                                        <h5 class="quiz-section-h3 mb-4">
                                            Игорь Львович <br />
                                            <span style="font-weight: 300;">Руководитель фабрики</span>
                                        </h5>

                                        <div class="d-flex flex-column align-items-center align-items-lg-start">
                                            <a href="tel:+79856445775" class="d-flex aling-items-center gap-3 tel">
                                                <img src="<?php echo get_template_directory_uri(); ?>/template-parts/new-quiz/ico/mobile-phone-ico.svg">
                                                +7 (985) 644-57-75
                                            </a>

                                            <div class="social">
                                                <a href="https://wa.me/79856445775?web=1&amp;app_absent=1" target="_blank">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.svg" class="ico-button" />
                                                </a>
                                                <a href="https://t.me/+79856445775" target="_blank">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.svg" class="ico-button" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End блок с директором -->

                        </div>

                        <!-- ВЫНЕСЕННЫЙ БЛОК НАВИГАЦИИ И ПРОГРЕССА -->
                        <div class="row">
                            <div class="col-xl-9">
                                <div class="quiz-navigation-wrapper">
                                    <div class="row align-items-center">
                                        <div class="col-3 col-lg-1 mb-3 mb-lg-0">
                                            <div class="progress-title">Готово:</div>
                                        </div>

                                        <div class="col-9 col-lg-5 mb-3 mb-lg-0">
                                            <div class="progress" role="progressbar" aria-label="Progress">
                                                <div class="progress-bar" id="quiz-progress-bar" style="width: 0%">0%</div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0">
                                            <button type="button" id="btn-prev" class="btn btn-corporate-color-outline-1" disabled>
                                                Предыдущий
                                            </button>
                                        </div>

                                        <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0">
                                            <button type="button" id="btn-next" class="btn btn-danger">
                                                Следующий
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Чекбокс политики конфиденциальности (показывается только на последнем шаге) -->
                                    <label class="form-check-label" for="feedback-privacy-policy">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="feedback-privacy-policy" checked required />
                                        Оставляя заявку, вы даете свое согласие на обработку персональных данных
                                        в соответствие с
                                        <a href="https://oknamobifon.ru/privacy/" data-bs-toggle="modal"
                                            data-bs-target="#modal-privacy">политикой конфиденциальности</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /ВЫНЕСЕННЫЙ БЛОК НАВИГАЦИИ И ПРОГРЕССА -->

                    </div>
                    <!-- /.quiz-question-container -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Контейнер для тостов -->
<div id="toast-container" class="toast-container position-fixed bottom-0 end-0 p-3">
</div>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/template-parts/new-quiz/quiz.css">
<script type="module" src="<?php echo get_template_directory_uri(); ?>/template-parts/new-quiz/quize.js"></script>