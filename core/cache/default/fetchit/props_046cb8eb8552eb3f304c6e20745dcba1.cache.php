<?php if(time() > 1789475231){return null;} return array (
  'form' => '@INLINE <form method="POST" class="md:col-span-3 p-6 bg-white">
                                    <input name="workemail" hidden>
                                    <input name="page" hidden value="{$_modx->resource.pagetitle}">
                                    <input name="url" hidden
                                        value="https://domozmsk.ru/{$_modx->makeUrl($_modx->resource.id)}">
                                    <input type="hidden" name="form_subject"
                                        value="Форма отправки внизу страницы {$_modx->resource.pagetitle}">
                                    <div class="flex flex-col gap-4 text-black">
                                        <input name="af_name" type="text" placeholder="Ваше имя" required
                                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#558255] focus:border-transparent transition"
                                            style="color:black">
                                        <input style="color:black" name="af_phone" type="tel"
                                            placeholder="+7 (___) ___-__-__" required maxlength="17"
                                            class="text-black w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#558255] focus:border-transparent transition">

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
  'emailTo' => '{\'email_1\'|config},adrinal1ne30rus@mail.ru',
  'emailSubject' => 'Заявка Hero',
  'successMessage' => '<div class="text-center text-green-600 font-bold p-4">Спасибо!</div>',
);