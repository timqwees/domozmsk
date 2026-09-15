<?php  return array (
  0 => 
  array (
    'modChunk_id' => '31',
    'modChunk_source' => '1',
    'modChunk_property_preprocess' => '0',
    'modChunk_name' => 'phoneFormat',
    'modChunk_description' => '',
    'modChunk_editor_type' => '0',
    'modChunk_category' => '0',
    'modChunk_cache_type' => '0',
    'modChunk_snippet' => '<style>
    .iti__selected-dial-code {
        color: #000;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@27.1.3/dist/js/intlTelInputWithUtils.min.js" defer></script>

<script defer>
document.addEventListener(\'DOMContentLoaded\', function () {

    document.querySelectorAll("[data-type-phone]").forEach(function(input) {
        window.intlTelInput(input, {
            initialCountry: "ru",
            separateDialCode: true,
            formatAsYouType: true,
        });
    });

    document.querySelectorAll(\'input[data-type-phone]\').forEach(function (input) {

        input.addEventListener(\'input\', function (e) {

            let value = e.target.value.replace(/\\D/g, \'\');

            if (e.target.value.includes(\'+7\')) {
                value = \'9\' + value.substring(1);
            } else if (
                value.length > 0 &&
                (
                    value[0] === \'8\' ||
                    (value[0] >= \'0\' && value[0] <= \'6\') ||
                    value[0] === \'9\'
                )
            ) {
                value = \'9\' + value.substring(1);
            }

            // Максимум 10 цифр
            value = value.substring(0, 10);

            if (value.length > 0) {

                let formatted = \'\';

                if (value.length >= 1) formatted += \'(\' + value.substring(0, 3);
                if (value.length >= 4) formatted += \') \' + value.substring(3, 6);
                if (value.length >= 7) formatted += \'-\' + value.substring(6, 8);
                if (value.length >= 9) formatted += \'-\' + value.substring(8, 10);

                e.target.value = formatted;

            } else {
                e.target.value = \'\';
            }

            // Сбрасываем ошибку при вводе
            e.target.setCustomValidity(\'\');
        });

        // Проверка после выхода из поля
        input.addEventListener(\'blur\', function () {

            const digits = this.value.replace(/\\D/g, \'\');

            if (digits.length !== 10) {
                this.setCustomValidity(\'Введите полный номер телефона\');
            } else if (!/^9\\d{9}$/.test(digits)) {
                this.setCustomValidity(\'Введите корректный мобильный номер\');
            } else {
                this.setCustomValidity(\'\');
            }

        });

    });

    // Проверка при отправке формы
    document.querySelectorAll(\'form\').forEach(function(form){

        form.addEventListener(\'submit\', function(e){

            const phone = form.querySelector(\'[data-type-phone]\');
            if (!phone) return;

            const digits = phone.value.replace(/\\D/g, \'\');

            if (digits.length !== 10 || !/^9\\d{9}$/.test(digits)) {
                e.preventDefault();
                phone.setCustomValidity(\'Введите полный корректный номер телефона\');
                phone.reportValidity();
                phone.focus();
            }

        });

    });

});
</script>',
    'modChunk_locked' => '0',
    'modChunk_properties' => 'a:0:{}',
    'modChunk_static' => '0',
    'modChunk_static_file' => '',
    'Source_id' => '1',
    'Source_name' => 'Filesystem',
    'Source_description' => '',
    'Source_class_key' => 'sources.modFileMediaSource',
    'Source_properties' => 'a:0:{}',
    'Source_is_stream' => '1',
  ),
);