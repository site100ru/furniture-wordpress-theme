jQuery(document).ready(function($) {
    'use strict';
    
    let videoIndex = $('#product-videos-list .product-video-item').length;
    
    /**
     * Добавление нового видео
     */
    $('#add-product-video').on('click', function(e) {
        e.preventDefault();
        
        const template = $('#tmpl-product-video-item').html();
        let html = template.replace(/\{\{data\.index\}\}/g, videoIndex);
        html = html.replace(/\{\{data\.index\}\}/g, videoIndex); // дублируем для атрибутов
        
        $('#product-videos-list').append(html);
        videoIndex++;
        
        updateVideoNumbers();
    });
    
    /**
     * Удаление видео
     */
    $(document).on('click', '.remove-video', function(e) {
        e.preventDefault();
        
        if (confirm('Удалить это видео?')) {
            $(this).closest('.product-video-item').remove();
            updateVideoNumbers();
        }
    });
    
    /**
     * Обновление нумерации видео
     */
    function updateVideoNumbers() {
        $('#product-videos-list .product-video-item').each(function(index) {
            $(this).find('.video-number').text(index + 1);
        });
    }
    
    /**
     * Переключение между типами видео (файл/URL)
     */
    $(document).on('change', '.video-type-radio', function() {
        const $item = $(this).closest('.product-video-item');
        const type = $(this).val();
        
        if (type === 'file') {
            $item.find('.video-file-wrap').addClass('active');
            $item.find('.video-url-wrap').removeClass('active');
        } else {
            $item.find('.video-url-wrap').addClass('active');
            $item.find('.video-file-wrap').removeClass('active');
        }
    });
    
    /**
     * Выбор превью через медиабиблиотеку
     */
    $(document).on('click', '.select-preview', function(e) {
        e.preventDefault();
        
        const $button = $(this);
        const $item = $button.closest('.product-video-item');
        const $container = $item.find('.video-preview-container');
        const $input = $item.find('.video-preview-id');
        
        // Создаем медиабиблиотеку
        const mediaUploader = wp.media({
            title: wcProductVideo.selectPreview,
            button: {
                text: wcProductVideo.usePreview
            },
            library: {
                type: 'image'
            },
            multiple: false
        });
        
        // Выбор изображения
        mediaUploader.on('select', function() {
            const attachment = mediaUploader.state().get('selection').first().toJSON();
            
            // Обновляем превью (НЕ удаляем input!)
            $container.find('img').remove();
            $container.prepend('<img src="' + attachment.url + '" class="video-preview-image" />');
            $input.val(attachment.id);
            $button.text('Изменить превью');
        });

        mediaUploader.open();
    });
    
    /**
     * Выбор видеофайла через медиабиблиотеку
     */
    $(document).on('click', '.select-video-file', function(e) {
        e.preventDefault();
        
        const $button = $(this);
        const $item = $button.closest('.product-video-item');
        const $fileInfo = $item.find('.video-file-info');
        const $input = $item.find('.video-file-id');
        
        // Создаем медиабиблиотеку для видео
        const mediaUploader = wp.media({
            title: wcProductVideo.selectVideo,
            button: {
                text: wcProductVideo.useVideo
            },
            library: {
                type: 'video/mp4'
            },
            multiple: false
        });
        
        // Выбор видео
        mediaUploader.on('select', function() {
            const attachment = mediaUploader.state().get('selection').first().toJSON();
            
            // Проверяем формат
            if (attachment.subtype !== 'mp4') {
                alert('Пожалуйста, выберите файл формата .mp4');
                return;
            }
            
            // Получаем имя файла
            const filename = attachment.filename || attachment.url.split('/').pop();
            
            // Обновляем информацию о файле
            $fileInfo.html('<span class="video-filename">' + filename + '</span>');
            $input.val(attachment.id);
        });
        
        mediaUploader.open();
    });
    
});
