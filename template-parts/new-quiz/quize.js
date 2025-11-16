document.addEventListener('DOMContentLoaded', function () {
    // Глобальный объект для хранения ответов
    const answers = {};
    
    // Получаем все вопросы
    const allQuestions = Array.from(document.querySelectorAll('[id^="question-"]'));
    let currentQuestionIndex = 0;

    // Получаем элементы навигации
    const btnPrev = document.getElementById('btn-prev');
    const btnNext = document.getElementById('btn-next');
    const progressBar = document.getElementById('quiz-progress-bar');
    const privacyPolicyContainer = document.getElementById('privacy-policy-container');

    // Функция для сохранения ответа
    function saveAnswer(questionId, answer) {
        answers[questionId] = answer;
        const hiddenField = document.getElementById(`form-answer-${questionId}`);
        if (hiddenField) {
            hiddenField.value = answer;
        }
    }

    // Функция для отображения тостового уведомления
    function showToast(message) {
        const toastHTML = `
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Внимание</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    ${message}
                </div>
            </div>
        `;

        const toastContainer = document.getElementById('toast-container');
        if (toastContainer) {
            toastContainer.innerHTML = toastHTML;
            const toastElement = toastContainer.querySelector('.toast');
            const toast = new bootstrap.Toast(toastElement);
            toast.show();
        }
    }

    // Функция для проверки, выбран ли ответ
    function isAnswerSelected(questionElement) {
        const checkboxes = questionElement.querySelectorAll('input[type="checkbox"]:not([name^="answer-7"])');
        const radios = questionElement.querySelectorAll('input[type="radio"]');
        
        // Для чекбоксов (кроме контактных методов)
        if (checkboxes.length > 0) {
            return Array.from(checkboxes).some(input => input.checked);
        }
        
        // Для радио-кнопок
        if (radios.length > 0) {
            return Array.from(radios).some(input => input.checked);
        }
        
        return true; // Для формы всегда true (там своя валидация)
    }

    // Функция для получения выбранного ответа
    function getSelectedAnswer(questionElement) {
        const checkboxes = questionElement.querySelectorAll('input[type="checkbox"]:not([name^="answer-7"]):checked');
        const radio = questionElement.querySelector('input[type="radio"]:checked');
        
        if (checkboxes.length > 0) {
            return Array.from(checkboxes).map(cb => cb.value).join(', ');
        }
        
        if (radio) {
            return radio.value;
        }
        
        return '';
    }

    // Функция для обновления прогресс-бара с анимацией
    function updateProgressBar(progress) {
        progressBar.classList.add('progress-updating');
        
        setTimeout(() => {
            progressBar.style.width = progress + '%';
            progressBar.textContent = progress + '%';
            
            setTimeout(() => {
                progressBar.classList.remove('progress-updating');
            }, 300);
        }, 50);
    }

    // Функция для обновления состояния кнопок
    function updateNavigationButtons() {
        const currentQuestion = allQuestions[currentQuestionIndex];
        const isLast = currentQuestion.dataset.isLast === '1';
        const progress = parseInt(currentQuestion.dataset.progress);

        // Обновляем прогресс-бар
        updateProgressBar(progress);

        // Управление кнопкой "Предыдущий"
        btnPrev.disabled = currentQuestionIndex === 0;

        // Управление кнопкой "Следующий" / "Отправить"
        if (isLast) {
            btnNext.textContent = 'Отправить';
            btnNext.type = 'submit';
            privacyPolicyContainer.style.display = 'block';
        } else {
            btnNext.textContent = 'Следующий';
            btnNext.type = 'button';
            privacyPolicyContainer.style.display = 'none';
        }
    }

    // Функция для переключения вопросов с анимацией
    function switchQuestion(fromIndex, toIndex) {
        const currentQuestion = allQuestions[fromIndex];
        const nextQuestion = allQuestions[toIndex];

        // Добавляем класс скрытия к текущему
        currentQuestion.classList.add('hiding');
        
        setTimeout(() => {
            // Убираем все классы с текущего
            currentQuestion.classList.remove('active', 'hiding');
            
            // Показываем следующий
            nextQuestion.classList.add('active');
            
            // Обновляем индекс
            currentQuestionIndex = toIndex;
            
            // Обновляем навигацию
            updateNavigationButtons();
        }, 300);
    }

    // Функция перехода к следующему вопросу
    function goToNextQuestion() {
        const currentQuestion = allQuestions[currentQuestionIndex];
        
        // Если это последний шаг с формой, не переходим автоматически
        if (currentQuestion.dataset.isLast === '1') {
            return;
        }

        // Проверяем, выбран ли ответ
        if (!isAnswerSelected(currentQuestion)) {
            showToast('Пожалуйста, выберите ответ для продолжения');
            return;
        }

        // Извлекаем ID текущего вопроса
        const questionId = parseInt(currentQuestion.id.replace('question-', ''));
        
        // Сохраняем ответ
        const answer = getSelectedAnswer(currentQuestion);
        if (answer) {
            saveAnswer(questionId, answer);
        }

        // Переходим к следующему вопросу
        if (currentQuestionIndex < allQuestions.length - 1) {
            switchQuestion(currentQuestionIndex, currentQuestionIndex + 1);
        }
    }

    // Обработчик кнопки "Следующий"
    btnNext.addEventListener('click', function() {
        // Если это кнопка отправки формы
        if (this.type === 'submit') {
            const form = document.getElementById('quiz');
            if (form) {
                form.dispatchEvent(new Event('submit'));
            }
            return;
        }

        goToNextQuestion();
    });

    // Автоматический переход при выборе радиокнопки
    document.addEventListener('change', function(e) {
        if (e.target.type === 'radio' && e.target.classList.contains('checkbox')) {
            // Небольшая задержка для визуального фидбека
            setTimeout(() => {
                goToNextQuestion();
            }, 300);
        }
    });

    // Обработчик кнопки "Предыдущий"
    btnPrev.addEventListener('click', function() {
        if (currentQuestionIndex > 0) {
            switchQuestion(currentQuestionIndex, currentQuestionIndex - 1);
        }
    });

    // Инициализация: делаем первый вопрос активным
    if (allQuestions.length > 0) {
        allQuestions[0].classList.add('active');
        updateNavigationButtons();
    }

    // Обработка чекбоксов контактных методов
    const contactCheckboxes = document.querySelectorAll('input[name^="answer-7"]');
    contactCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const hiddenField = document.getElementById(`form-${this.name}`);
            if (hiddenField) {
                hiddenField.value = this.checked ? this.value : '';
            }
        });
    });

    // Маска для телефона
    const phoneInput = document.getElementById('feedback-phone');
    if (phoneInput) {
        phoneInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            
            if (value.length > 0) {
                if (value[0] === '8') {
                    value = '7' + value.slice(1);
                }
                
                let formatted = '+7';
                if (value.length > 1) {
                    formatted += ' (' + value.slice(1, 4);
                }
                if (value.length >= 5) {
                    formatted += ') ' + value.slice(4, 7);
                }
                if (value.length >= 8) {
                    formatted += '-' + value.slice(7, 9);
                }
                if (value.length >= 10) {
                    formatted += '-' + value.slice(9, 11);
                }
                
                e.target.value = formatted;
            }
        });
    }

    console.log('Quiz initialized successfully');
});