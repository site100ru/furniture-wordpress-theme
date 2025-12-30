<?php
/**  
 * settings [
 *   'title' => 'Заголовок блока квиза',
 *   'subtitle' => 'Подзаголовок блока квиза',
 *   'form_action' => 'Путь до обработчика формы'
 * ]
 * 
 * questions [
 *   [
 *     'id' => Порядковый номер вопроса (1, 2, 3...),
 *     'type' => Тип вопроса: 'radio' | 'checkbox' | 'checkbox-with-image-text' | 'form',
 *     'title' => 'Заголовок вопроса',
 *     'subtitle' => 'Подзаголовок вопроса (необязательно)',
 *     'step_number' => true|false - показывать ли номер шага (по умолчанию true),
 *     'progress' => Процент выполнения квиза после этого шага (0-100),
 *     'col_size' => 'Размер колонки Bootstrap для вариантов ответа ',
 *     'input_name' => 'Имя input для сохранения ответа (например: answer-1)',
 *     'answers' => [ // Заполняется только для вопросов с вариантами ответа
 *       [
 *         'title' => 'Текст варианта ответа',
 *         'image' => 'Путь к изображению (для типов radio и checkbox-with-image-text)'
 *       ]
 *     ],
 *     'contact_methods' => [ // Только для type='form'
 *       [
 *         'name' => 'Уникальное имя поля (например: answer-7-1)',
 *         'title' => 'Название способа связи',
 *         'icon' => 'Путь к иконке'
 *       ]
 *     ],
 *     'form_fields' => 'HTML код полей формы' // Только для type='form'
 *   ]
 * ]
 */
return [
    'settings' => [
        'title' => 'Узнайте примерную стоимость Вашего шкафа на нашей фабрике',
        'subtitle' => 'Ответьте на 5 коротких вопроса.',
        'form_action' => get_template_directory_uri() . '/template-parts/new-quiz/mails/quiz.php',
    ],

    'questions' => [
        [
            'id' => 1,
            'title' => 'Какой шкаф Вы хотите?',
            'subtitle' => 'Можно выбрать несколько вариантов для более точного расчета',
            'type' => 'checkbox-with-image-text',
            'input_name' => 'question-1',
            'col_size' => 'col-6 col-md-4 col-xl-3',
            'progress' => 0,
            'answers' => [
                ['title' => 'Шкаф-купе', 'image' => get_template_directory_uri() . '/template-parts/new-quiz/img/closet/1-1.webp'],
                ['title' => 'Распашной шкаф', 'image' => get_template_directory_uri() . '/template-parts/new-quiz/img/closet/1-2.webp'],
                ['title' => 'Гардеробная', 'image' => get_template_directory_uri() . '/template-parts/new-quiz/img/closet/1-3.webp'],
                ['title' => 'Двери-купе', 'image' => get_template_directory_uri() . '/template-parts/new-quiz/img/closet/1-4.webp'],
                ['title' => 'Рабочая зона', 'image' => get_template_directory_uri() . '/template-parts/new-quiz/img/closet/1-5.webp'],
                ['title' => 'Другая', 'image' => get_template_directory_uri() . '/template-parts/new-quiz/img/closet/1-6.webp'],
            ],
        ],

        [
            'id' => 2,
            'title' => 'Какой тип шкафа Вам нужен?',
            'type' => 'radio',
            'input_name' => 'question-2',
            'col_size' => 'col-6 col-md-4 col-xl-3',
            'progress' => 26,
            'answers' => [
                ['title' => 'Корпусный', 'image' => get_template_directory_uri() . '/template-parts/new-quiz/img/closet/2-1.webp'],
                ['title' => 'Встроенный', 'image' => get_template_directory_uri() . '/template-parts/new-quiz/img/closet/2-2.webp'],
                ['title' => 'Угловой', 'image' => get_template_directory_uri() . '/template-parts/new-quiz/img/closet/2-3.webp'],
                ['title' => 'Радиусный', 'image' => get_template_directory_uri() . '/template-parts/new-quiz/img/closet/2-4.webp'],
                ['title' => 'Гардеробный', 'image' => get_template_directory_uri() . '/template-parts/new-quiz/img/closet/2-5.webp'],
                ['title' => 'Пока не знаю', 'image' => get_template_directory_uri() . '/template-parts/new-quiz/img/closet/2-6.webp'],
            ],
        ],

        [
            'id' => 3,
            'title' => 'Какой материал фасада Вы хотите?',
            'type' => 'radio',
            'input_name' => 'question-3',
            'col_size' => 'col-6 col-md-4 col-xl-3',
            'progress' => 36,
            'answers' => [
                ['title' => 'ЛДСП', 'image' => get_template_directory_uri() . '/template-parts/new-quiz/img/closet/3-1.webp'],
                ['title' => 'Пескоструйная обработка', 'image' => get_template_directory_uri() . '/template-parts/new-quiz/img/closet/3-2.webp'],
                ['title' => 'Зеркало', 'image' => get_template_directory_uri() . '/template-parts/new-quiz/img/closet/3-3.webp'],
                ['title' => 'Комбинированный вариант', 'image' => get_template_directory_uri() . '/template-parts/new-quiz/img/closet/3-4.webp'],
                ['title' => 'Пока не знаю', 'image' => get_template_directory_uri() . '/template-parts/new-quiz/img/closet/3-5.webp'],
            ],
        ],

        [
            'id' => 4,
            'title' => 'Какая ориентировочная ширина шкафа планируется?',
            'type' => 'checkbox',
            'input_name' => 'answer-4',
            'col_size' => 'col-12 col-md-8 col-lg-3',
            'progress' => 44,
            'answers' => [
                ['title' => 'До 1 м'],
                ['title' => '1.5 м'],
                ['title' => '2 м'],
                ['title' => '2.5 м'],
                ['title' => '3 м'],
                ['title' => '3.5 м'],
                ['title' => '4 м'],
                ['title' => '4.5 м'],
                ['title' => '5 м'],
                ['title' => 'Более 5 м'],
            ],
        ],

        [
            'id' => 5,
            'title' => 'Какое количество дверей Вы предполагаете?',
            'type' => 'radio',
            'input_name' => 'question-5',
            'col_size' => 'col-6 col-md-4 col-xl-3',
            'progress' => 60,
            'answers' => [
                ['title' => '1 дверь', 'image' => get_template_directory_uri() . '/template-parts/new-quiz/img/closet/5-1.webp'],
                ['title' => '2 двери', 'image' => get_template_directory_uri() . '/template-parts/new-quiz/img/closet/5-2.webp'],
                ['title' => '3 двери', 'image' => get_template_directory_uri() . '/template-parts/new-quiz/img/closet/5-3.webp'],
                ['title' => '4 двери', 'image' => get_template_directory_uri() . '/template-parts/new-quiz/img/closet/5-4.webp'],
                ['title' => '5 дверей', 'image' => get_template_directory_uri() . '/template-parts/new-quiz/img/closet/5-5.webp'],
                ['title' => 'Более 5 дверей', 'image' => get_template_directory_uri() . '/template-parts/new-quiz/img/closet/5-6.webp'],
            ],
        ],

        [
            'id' => 6,
            'title' => 'Какой подарок Вы хотели бы получить в случае заказа?',
            'type' => 'radio',
            'input_name' => 'question-6',
            'col_size' => 'col-6 col-md-4 col-xl-3',
            'progress' => 80,
            'step_number' => false,
            'answers' => [
                ['title' => 'Беспроцентная рассрочка на 1 год', 'image' => get_template_directory_uri() . '/template-parts/new-quiz/img/closet/5-1.webp'],
                ['title' => 'Скидка 25%', 'image' => get_template_directory_uri() . '/template-parts/new-quiz/img/closet/5-2.webp'],
                ['title' => 'Скидка 35% на второй предмет', 'image' => get_template_directory_uri() . '/template-parts/new-quiz/img/closet/5-3.webp'],
                ['title' => 'Скидка 50% на натяжной потолок', 'image' => get_template_directory_uri() . '/template-parts/new-quiz/img/closet/5-4.webp'],
            ],
        ],

        [
            'id' => 7,
            'title' => 'Куда отправить расчет?',
            'type' => 'form',
            'col_size' => 'col-6 col-md-4 col-xl-3',
            'progress' => 100,
            'step_number' => false,
            'contact_methods' => [
                ['name' => 'answer-7-1', 'title' => 'Перезвонить', 'icon' => get_template_directory_uri() . '/template-parts/new-quiz/ico/messengers-icons.svg'],
                ['name' => 'answer-7-2', 'title' => 'Отправить в&nbsp;Whatsapp', 'icon' => get_template_directory_uri() . '/template-parts/new-quiz/ico/wa-icons.svg'],
                ['name' => 'answer-7-3', 'title' => 'Отправить в&nbsp;Telegram', 'icon' => get_template_directory_uri() . '/template-parts/new-quiz/ico/telegram-icons.svg'],
                ['name' => 'answer-7-4', 'title' => 'Отправить в&nbsp;Max', 'icon' => get_template_directory_uri() . '/template-parts/new-quiz/ico/max-icons.svg'],
            ],

            // на последнем шаге вместе с кнопками есть инпуты (имя/телефон) при необходимости добавиить дополнительные поля - напиши их тут. Потом шаблон сам вставит полностью этот участок кода под соцсетями
            'form_fields' => '
                <div class="col-12 col-md-6 col-xl-3 mb-3 mb-md-0">
                    <label for="feedback-phone mb-1" class="label">Ваш телефон <span class="form__required">*</span></label>
                    <input type="tel" pattern="^(\+7|8)\s\(\d{3}\)\s\d{3}-\d{2}-\d{2}$" class="form-control telMask" id="feedback-phone" name="form-phone" placeholder="Ваш телефон" required="" title="Введите номер в формате: +7 (999) 999-99-99 или 8 (999) 999-99-99" />
                </div>

                <div class="col-12 col-md-6 col-md-5">
                    <label for="feedback-name mb-1" class="label">Как Вас зовут? <span class="form__required">*</span></label>
                    <input type="text" class="form-control" id="feedback-name" name="form-name" placeholder="Как Вас зовут" required="" />
                </div>
            ',
        ],
    ],
];
