<?php if(time() > 1789487890){return null;} return array (
  'form' => '@INLINE <form method="post" class="space-y-4">
                            <div><label class="block text-sm font-medium text-gray-700 mb-1 text-left" for="cta-name">Ваше
                                    имя</label><input id="cta-name" type="text" name="Имя" placeholder="Иван Иванов" aria-label="Ваше имя" required
                                    class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-[#3F5F3F] focus:border-transparent outline-none transition">
                            </div>
                            <div>                                    <label class="block text-sm font-medium text-gray-700 mb-1 text-left" for="cta-phone">Телефон</label>
                                    <input id="cta-phone" type="tel" name="Телефон" placeholder="(999) 999-99-99" aria-label="Ваш телефон" maxlength="18" inputmode="numeric" autocomplete="tel" data-type-phone pattern="^\\+7\\s\\(\\d{3}\\)\\s\\d{3}-\\d{2}-\\d{2}$" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-[#3F5F3F] focus:border-transparent outline-none transition text-[#1a1a1a]" required>
                            </div>
                            <input type="hidden" name="Страница" value="{$_modx->config.site_url}{$_modx->resource.uri}">
                            <input type="hidden" name="Название страницы" value="{$_modx->resource.pagetitle}">
                            <button type="submit"
                                class="w-full py-4 bg-[#3F5F3F] hover:bg-[#3d5c3d] text-white font-bold rounded-xl transition shadow-md mt-2">Отправить
                                заявку</button>
                            <p class="text-xs text-gray-400 text-center mt-4">Нажимая кнопку, вы соглашаетесь с
                                политикой конфиденциальности</p>
                        </form>',
  'snippet' => 'FormIt',
  'actionUrl' => '[[+assetsUrl]]action.php',
  'clearFieldsOnSuccess' => true,
  'hooks' => 'email',
  'frontendCss' => '',
  'emailTo' => '{\'email_1\'|config},artemnersisyan777@gmail.com',
  'emailSubject' => 'Заявка CTA',
  'successMessage' => '<div class="w-fit text-center text-white font-bold p-2">Спасибо за обращене, мы скоро свяжемся с вами!</div>',
);