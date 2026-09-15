<?php  return array (
  0 => 
  array (
    'modChunk_id' => '30',
    'modChunk_source' => '1',
    'modChunk_property_preprocess' => '0',
    'modChunk_name' => 'modal_window',
    'modChunk_description' => '',
    'modChunk_editor_type' => '0',
    'modChunk_category' => '0',
    'modChunk_cache_type' => '0',
    'modChunk_snippet' => '<!-- ====================================================================== -->
<!-- МОДАЛЬНОЕ ОКНО С ФОРМОЙ ЗАЯВКИ                                         -->
<!-- ====================================================================== -->
<div id="modal-form" class="custom-modal">
    <div class="custom-modal-overlay"></div>
    <div class="custom-modal-container">
        <button class="custom-modal-close" type="button" aria-label="Закрыть">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M18 6L6 18M6 6l12 12"/>
            </svg>
        </button>
        
        <div class="custom-modal-content">
            {\'FetchIt\'|snippet:[
                \'snippet\'=>\'FormIt\',
                \'hooks\'=>\'email\',
                \'form\'=>\'@INLINE <form id="pom-modal" class="modal-form">
            <input name="workemail" hidden>
            <input name="page" hidden value="{$_modx->resource.pagetitle}">
            <input name="url" hidden value="{$_modx->config.site_url}{$_modx->resource.uri}">
            <input type="hidden" name="form_subject" value="Заявка с модального окна - {$_modx->resource.pagetitle}">
            
            <div class="modal-form-header">
                <h3>Оставить заявку</h3>
                <p>Оставьте свои контактные данные и мы свяжемся с вами в ближайшее время</p>
            </div>
            
            <div class="modal-form-body">
                <div class="modal-form-field">
                    <input id="af_name" class="!text-black modal-input" type="text" name="ФИО" placeholder="Фамилия Имя Отчество" required>
                    <span class="error_namemodal">Вы используете запрещённые символы!</span>
                </div>
                <div class="modal-form-field">
                    <input type="tel" name="Телефон" placeholder="(999) 999-99-99" maxlength="18" inputmode="numeric" autocomplete="tel" data-type-phone class="!text-black modal-input" required>
                </div>
                <div class="modal-form-field">
                    <input id="af_email" class="!text-black modal-input" type="email" name="Почта" placeholder="Email" required>
                </div>
                <div class="modal-form-field modal-form-checkbox">
                    <input class="modal-checkbox" type="checkbox" name="agree" id="form_agree" value="да" checked required>
                    <label for="form_agree">Согласен c <a href="{$_modx->makeUrl(8)}">политикой конфиденциальности</a></label>
                </div>
                <button type="submit" class="modal-submit-btn">
                    <span>Отправить заявку</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>
            </form>\',
                \'emailTo\'=>"Domoz.77@yandex.ru",
                \'emailSubject\'=>"Заявка с модального окна - {$_modx->resource.pagetitle}",
                \'successMessage\'=>\'<div class="modal-success"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#558255" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg><h3>Спасибо!</h3><p>Мы свяжемся с вами в ближайшее время</p></div>\',
                \'validate\'=>\'af_name:required:minLength=2,af_phone:required,af_email:required:email\'
            ]}
        </div>
    </div>
</div>

<style>
/* ====================================================================== */
/* СТИЛИ МОДАЛЬНОГО ОКНО                                                   */
/* ====================================================================== */
.custom-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease, visibility 0.3s ease;
    padding: 20px;
}

.custom-modal.active {
    opacity: 1;
    visibility: visible;
}

.custom-modal-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    backdrop-filter: blur(5px);
}

.custom-modal-container {
    position: relative;
    background: #fff;
    border-radius: 24px;
    max-width: 500px;
    width: 100%;
    max-height: 90vh;
    overflow-y: auto;
    box-shadow: 0 30px 80px rgba(0, 0, 0, 0.3);
    transform: translateY(30px) scale(0.95);
    transition: transform 0.3s ease;
}

.custom-modal.active .custom-modal-container {
    transform: translateY(0) scale(1);
}

.custom-modal-close {
    position: absolute;
    top: 16px;
    right: 16px;
    width: 40px;
    height: 40px;
    background: #f3f4f6;
    border: none;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    color: #6b7280;
    transition: all 0.2s ease;
    z-index: 10;
}

.custom-modal-close:hover {
    background: #558255;
    color: #fff;
    transform: rotate(90deg);
}

.custom-modal-content {
    padding: 40px;
}

@media (max-width: 640px) {
    .custom-modal-content {
        padding: 30px 20px;
    }
}

/* ====================================================================== */
/* СТИЛИ ФОРМЫ                                                             */
/* ====================================================================== */
.modal-form-header {
    text-align: center;
    margin-bottom: 30px;
}

.modal-form-header h3 {
    font-size: 28px;
    font-weight: 800;
    color: #1a1a1a;
    margin-bottom: 10px;
    line-height: 1.2;
}

.modal-form-header p {
    font-size: 15px;
    color: #6b7280;
    line-height: 1.5;
}

.modal-form-body {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.modal-form-field {
    position: relative;
}

.modal-input {
    width: 100%;
    padding: 14px 18px;
    border: 2px solid #e5e7eb;
    border-radius: 12px;
    font-size: 15px;
    color: #1a1a1a;
    background: #fff;
    transition: all 0.2s ease;
    font-family: inherit;
}

.modal-input:focus {
    outline: none;
    border-color: #558255;
    box-shadow: 0 0 0 4px rgba(85, 130, 85, 0.1);
}

.modal-input::placeholder {
    color: #9ca3af;
}

.error_namemodal {
    display: none;
    color: #ef4444;
    font-size: 12px;
    margin-top: 4px;
}

.modal-form-checkbox {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    margin-top: 4px;
}

.modal-checkbox {
    width: 18px;
    height: 18px;
    margin-top: 2px;
    accent-color: #558255;
    cursor: pointer;
    flex-shrink: 0;
}

.modal-form-checkbox label {
    font-size: 13px;
    color: #6b7280;
    line-height: 1.5;
    cursor: pointer;
}

.modal-form-checkbox label a {
    color: #558255;
    text-decoration: underline;
}

.modal-form-checkbox label a:hover {
    color: #3d5c3d;
}

.modal-submit-btn {
    width: 100%;
    padding: 16px 24px;
    background: linear-gradient(135deg, #558255 0%, #3d5c3d 100%);
    color: #fff;
    border: none;
    border-radius: 12px;
    font-size: 16px;
    font-weight: 700;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    transition: all 0.3s ease;
    margin-top: 8px;
    box-shadow: 0 8px 20px rgba(85, 130, 85, 0.3);
    font-family: inherit;
}

.modal-submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 28px rgba(85, 130, 85, 0.4);
}

.modal-submit-btn:active {
    transform: translateY(0);
}

.modal-submit-btn svg {
    transition: transform 0.3s ease;
}

.modal-submit-btn:hover svg {
    transform: translateX(4px);
}

/* Сообщение об успехе */
.modal-success {
    text-align: center;
    padding: 30px 20px;
}

.modal-success svg {
    margin: 0 auto 20px;
    display: block;
}

.modal-success h3 {
    font-size: 24px;
    font-weight: 800;
    color: #1a1a1a;
    margin-bottom: 10px;
}

.modal-success p {
    font-size: 15px;
    color: #6b7280;
}

/* Блокировка скролла при открытом модальном окне */
body.modal-open {
    overflow: hidden;
}
</style>

{ignore}
<script>
document.addEventListener(\'DOMContentLoaded\', function() {
    
    const modal = document.getElementById(\'modal-form\');
    const closeBtn = modal.querySelector(\'.custom-modal-close\');
    const overlay = modal.querySelector(\'.custom-modal-overlay\');
    
    if (!modal) {
        console.error(\'❌ Модальное окно не найдено!\');
        return;
    }
    
    // === Открытие модального окна ===
    function openModal() {
        modal.classList.add(\'active\');
        document.body.classList.add(\'modal-open\');
        console.log(\'Модальное окно открыто\');
    }
    
    // === Закрытие модального окна ===
    function closeModal() {
        modal.classList.remove(\'active\');
        document.body.classList.remove(\'modal-open\');
        console.log(\'Модальное окно закрыто\');
    }
    
    // === Обработчик клика на кнопки с классом modal_window ===
    document.addEventListener(\'click\', function(e) {
        const trigger = e.target.closest(\'.modal_window\');
        if (trigger) {
            e.preventDefault();
            e.stopPropagation();
            openModal();
        }
    });
    
    // === Закрытие по кнопке X ===
    if (closeBtn) {
        closeBtn.addEventListener(\'click\', closeModal);
    }
    
    // === Закрытие по клику на overlay ===
    if (overlay) {
        overlay.addEventListener(\'click\', closeModal);
    }
    
    // === Закрытие по Escape ===
    document.addEventListener(\'keydown\', function(e) {
        if (e.key === \'Escape\' && modal.classList.contains(\'active\')) {
            closeModal();
        }
    });
    
    console.log(\'Скрипт модального окна загружен\');
});
</script>
[[$phoneFormat]]
<script>
document.addEventListener(\'fetchit:success\', function () {
    ym(108461808, \'reachGoal\', \'FORM_SEND\');
});
</script>
{/ignore}',
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