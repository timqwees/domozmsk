<?php if(time() > 1789464474){return null;} return array (
  'form' => '@INLINE <form id="pom-modal" class="modal-form">
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
            </form>',
  'snippet' => 'FormIt',
  'actionUrl' => '[[+assetsUrl]]action.php',
  'clearFieldsOnSuccess' => true,
  'hooks' => 'email',
  'emailTo' => 'Domoz.77@yandex.ru',
  'emailSubject' => 'Заявка с модального окна - Уход за газоном',
  'successMessage' => '<div class="modal-success"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#558255" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg><h3>Спасибо!</h3><p>Мы свяжемся с вами в ближайшее время</p></div>',
  'validate' => 'af_name:required:minLength=2,af_phone:required,af_email:required:email',
);