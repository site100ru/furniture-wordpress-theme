/**
 * Gallery Images Admin JavaScript
 * Функционал галереи изображений в стиле WooCommerce
 */

(function($) {
    'use strict';

    var galleryImagesFrame;
    var $galleryContainer;
    var $galleryList;
    var $galleryInput;

    $(document).ready(function() {
        $galleryContainer = $('#gallery_images_container');
        $galleryList = $galleryContainer.find('.gallery-images-list');
        $galleryInput = $('#gallery_image_ids');

        // Инициализация сортировки
        initSortable();

        // Обработчик кнопки "Добавить изображения"
        $galleryContainer.on('click', '.add-gallery-images', function(e) {
            e.preventDefault();
            openMediaLibrary();
        });

        // Обработчик удаления изображения
        $galleryContainer.on('click', '.delete-gallery-image', function(e) {
            e.preventDefault();
            deleteImage($(this).closest('.gallery-image'));
        });
    });

    /**
     * Инициализация сортировки изображений
     */
    function initSortable() {
        $galleryList.sortable({
            items: '.gallery-image',
            cursor: 'move',
            scrollSensitivity: 40,
            forcePlaceholderSize: true,
            forceHelperSize: false,
            helper: 'clone',
            opacity: 0.65,
            placeholder: 'gallery-image ui-sortable-placeholder',
            start: function(event, ui) {
                ui.item.css('background-color', '#f6f6f6');
            },
            stop: function(event, ui) {
                ui.item.removeAttr('style');
            },
            update: function() {
                updateGalleryInput();
            }
        });
    }

    /**
     * Открытие медиа-библиотеки WordPress
     */
    function openMediaLibrary() {
        // Если фрейм уже создан, открываем его
        if (galleryImagesFrame) {
            galleryImagesFrame.open();
            return;
        }

        // Создаем новый фрейм медиа-библиотеки
        galleryImagesFrame = wp.media({
            title: galleryImagesL10n.title,
            button: {
                text: galleryImagesL10n.button
            },
            multiple: true,
            library: {
                type: 'image'
            }
        });

        // Обработчик выбора изображений
        galleryImagesFrame.on('select', function() {
            var attachments = galleryImagesFrame.state().get('selection').toJSON();
            addImagesToGallery(attachments);
        });

        // Открываем фрейм
        galleryImagesFrame.open();
    }

    /**
     * Добавление изображений в галерею
     */
    function addImagesToGallery(attachments) {
        var existingIds = getGalleryIds();

        attachments.forEach(function(attachment) {
            // Проверяем, что изображение еще не добавлено
            if (existingIds.indexOf(attachment.id.toString()) === -1) {
                var thumbnailUrl = attachment.sizes && attachment.sizes.thumbnail 
                    ? attachment.sizes.thumbnail.url 
                    : attachment.url;

                var $imageItem = $('<li class="gallery-image newly-added" data-attachment-id="' + attachment.id + '">' +
                    '<img src="' + thumbnailUrl + '" alt="">' +
                    '<a href="#" class="delete-gallery-image" title="Удалить изображение">×</a>' +
                    '</li>');

                $galleryList.append($imageItem);

                // Удаляем класс анимации после завершения
                setTimeout(function() {
                    $imageItem.removeClass('newly-added');
                }, 300);
            }
        });

        updateGalleryInput();
    }

    /**
     * Удаление изображения из галереи
     */
    function deleteImage($imageItem) {
        // Анимация удаления
        $imageItem.fadeOut(200, function() {
            $(this).remove();
            updateGalleryInput();
        });
    }

    /**
     * Обновление скрытого поля с ID изображений
     */
    function updateGalleryInput() {
        var ids = getGalleryIds();
        $galleryInput.val(ids.join(','));
    }

    /**
     * Получение массива ID изображений
     */
    function getGalleryIds() {
        var ids = [];
        $galleryList.find('.gallery-image').each(function() {
            ids.push($(this).data('attachment-id'));
        });
        return ids;
    }

})(jQuery);