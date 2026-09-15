<?php if(time() > 1789388984){return null;} return array (
  'form' => '@INLINE <form method="post" class="space-y-4">
                            <div><label class="block text-sm font-medium text-gray-700 mb-1 text-left">Ваше имя</label><input type="text" name="Имя" placeholder="Иван Иванов" required class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-[#558255] focus:border-transparent outline-none transition"></div>
                            <div><label class="block text-sm font-medium text-gray-700 mb-1 text-left">Телефон</label>
                            <input type="tel" name="Телефон" placeholder="(999) 999-99-99" maxlength="18" inputmode="numeric" autocomplete="tel" data-type-phone class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-[#558255] focus:border-transparent outline-none transition" required>
                            </div>
                            <div><label class="block text-sm font-medium text-gray-700 mb-1 text-left">Интересующая услуга</label><input type="text" name="Сервис" placeholder="Например: автополив" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-[#558255] focus:border-transparent outline-none transition"></div>
                            <input type="hidden" name="Страница" value="{$_modx->config.site_url}{$_modx->resource.uri}">
                            <input type="hidden" name="Название страницы" value="{$_modx->resource.pagetitle}">
                            <button type="submit" class="w-full py-4 bg-[#558255] hover:bg-[#3d5c3d] text-white font-bold rounded-xl transition shadow-md mt-2">Получить предложение</button>
                            <p class="text-xs text-gray-400 text-center mt-4">Нажимая кнопку, вы соглашаетесь с политикой конфиденциальности</p>
                        </form>',
  'snippet' => 'FormIt',
  'actionUrl' => '[[+assetsUrl]]action.php',
  'clearFieldsOnSuccess' => true,
  'hooks' => 'email',
  'emailTo' => '{\'email_1\'|config},artemnersisyan777@gmail.com',
  'emailSubject' => 'Запрос услуги со страницы услуг',
  'successMessage' => '<div class="w-fit text-center text-white font-bold p-2">Спасибо за обращене, мы скоро свяжемся с вами!</div>',
);