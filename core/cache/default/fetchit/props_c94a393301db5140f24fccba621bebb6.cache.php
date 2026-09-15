<?php if(time() > 1789475051){return null;} return array (
  'form' => '@INLINE <form method="POST" class="md:col-span-3 p-6 bg-white">
                                    <div class="flex flex-col gap-4 text-black">
                                        <input name="Имя" type="text" placeholder="Ваше имя" required
                                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#558255] focus:border-transparent transition"
                                            style="color:black">
                                        <input type="tel" name="Телефон" placeholder="(999) 999-99-99" maxlength="18" inputmode="numeric" autocomplete="tel" data-type-phone class="text-black w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#558255] focus:border-transparent transition" required>
                                        <input type="hidden" name="Страница" value="{$_modx->config.site_url}{$_modx->resource.uri}">
                                        <input type="hidden" name="Название страницы" value="{$_modx->resource.pagetitle}">
                                        <button type="submit"
                                                class="w-full bg-[#558255] hover:bg-[#3d5c3d] text-white py-3.5 rounded-xl text-base font-bold transition shadow-md mt-2">
                                                Получить расчет
                                        </button>

                                    <p class="text-[10px] text-gray-400 text-center mt-2">
                                        Нажимая кнопку, вы соглашаетесь с политикой конфиденциальности
                                    </p>
                                    </div>
                                    {if $fi.success = 1}{$fi.successMessage}{/if}
                                </form>',
  'snippet' => 'FormIt',
  'actionUrl' => '[[+assetsUrl]]action.php',
  'clearFieldsOnSuccess' => true,
  'hooks' => 'email',
  'emailTo' => '{\'email_1\'|config},artemnersisyan777@gmail.com',
  'emailSubject' => 'Заявка c сайта',
  'successMessage' => '<div class="w-fit text-center text-white font-bold p-2">Спасибо за обращене, мы скоро свяжемся с вами!</div>',
);