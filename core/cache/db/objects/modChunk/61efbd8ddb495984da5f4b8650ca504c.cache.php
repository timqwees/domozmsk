<?php  return array (
  'id' => 14,
  'source' => 1,
  'property_preprocess' => 0,
  'name' => 'modal',
  'description' => '',
  'editor_type' => 0,
  'category' => 0,
  'cache_type' => 0,
  'snippet' => '<div class="uk-flex-top overlay-modal">
    <div class="ar-modal-dialog  wipo uk-modal-body uk-margin-auto-vertical mode">
      <button class="ar-modal-close-default re  pag0 uk-icon" type="button">
        <svg width="14" height="14" viewBox="0 0 14 14">
          <line fill="none" stroke="#fff" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"></line>
          <line fill="none" stroke="#fff" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"></line>
        </svg>
      </button>
         {\'FetchIt\'|snippet:[
        \'snippet\'=>\'FormIt\',
        \'hooks\'=>\'email,FormItSaveForm\',
        \'form\'=>\'form_modal\',
        \'emailTo\'=>"{\'email_1\'|config},Domoz.77@yandex.ru",
        \'emailFromName\'=>"{\'site_name\'|config}",
        \'emailFrom\'=>\'domozmsk@domozmsk.ru\',
        \'emailSubject\'=>"Сообщение с сайта {\'site_name\'|config}",
        \'fiarFromName\'=>"Сообщение с сайта {\'site_name\'|config}",
        \'emailTpl\'=>\'email_tplmod\',
        \'validate\'=>\'af_name:required:minLength=3:maxLength=30:regexp=/^[а-яА-ЯёЁa-zA-Z\\s]+$/,af_phone:required,af_email:required\',
        \'validationErrorMessage\'=>\'Вам необходимо заполнить все поля\',
  \'successMessage\'=>\'Сообщение успешно отправлено\'
      ]}
    </div>
  </div>',
  'locked' => 0,
  'properties' => 'a:0:{}',
  'static' => 0,
  'static_file' => '',
  'content' => '<div class="uk-flex-top overlay-modal">
    <div class="ar-modal-dialog  wipo uk-modal-body uk-margin-auto-vertical mode">
      <button class="ar-modal-close-default re  pag0 uk-icon" type="button">
        <svg width="14" height="14" viewBox="0 0 14 14">
          <line fill="none" stroke="#fff" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"></line>
          <line fill="none" stroke="#fff" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"></line>
        </svg>
      </button>
         {\'FetchIt\'|snippet:[
        \'snippet\'=>\'FormIt\',
        \'hooks\'=>\'email,FormItSaveForm\',
        \'form\'=>\'form_modal\',
        \'emailTo\'=>"{\'email_1\'|config},Domoz.77@yandex.ru",
        \'emailFromName\'=>"{\'site_name\'|config}",
        \'emailFrom\'=>\'domozmsk@domozmsk.ru\',
        \'emailSubject\'=>"Сообщение с сайта {\'site_name\'|config}",
        \'fiarFromName\'=>"Сообщение с сайта {\'site_name\'|config}",
        \'emailTpl\'=>\'email_tplmod\',
        \'validate\'=>\'af_name:required:minLength=3:maxLength=30:regexp=/^[а-яА-ЯёЁa-zA-Z\\s]+$/,af_phone:required,af_email:required\',
        \'validationErrorMessage\'=>\'Вам необходимо заполнить все поля\',
  \'successMessage\'=>\'Сообщение успешно отправлено\'
      ]}
    </div>
  </div>',
);