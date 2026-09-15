<?php if(time() > 1789483757){return null;} return array (
  'form' => '@INLINE
<form method="POST" class="p-7">

    <div class="text-left flex flex-col gap-4 text-black">

        <label class="text-left block">
            <span class="text-left block text-sm font-medium text-gray-700 mb-2">
                Ваше имя
            </span>

            <input name="Имя" type="text" placeholder="Ваше имя" required class="!text-black w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#558255] focus:border-transparent transition" style="color:black">
        </label>


        <label class="text-left block">
            <span class="text-left block text-sm font-medium text-gray-700 mb-2">
                Телефон
            </span>

            <input name="Телефон" type="tel" placeholder="(999) 999-99-99" maxlength="18" inputmode="numeric" autocomplete="tel" data-type-phone required class="!text-black w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#558255] focus:border-transparent transition">
        </label>


        <input type="hidden" name="Страница" value="{$_modx->config.site_url}{$_modx->resource.uri}">

        <input type="hidden" name="Название страницы" value="{$_modx->resource.pagetitle}">


        <button type="submit" class="text-left w-full bg-[#558255] hover:bg-[#3d5c3d] text-white py-3.5 rounded-xl text-base font-bold transition shadow-md mt-2">
            Получить консультацию
        </button>


        <p class="text-[10px] text-gray-400 text-center mt-1">
            Нажимая кнопку, вы соглашаетесь с политикой конфиденциальности
        </p>

    </div>

    {if $fi.success = 1}
        {$fi.successMessage}
    {/if}

</form>',
  'snippet' => 'FormIt',
  'actionUrl' => '[[+assetsUrl]]action.php',
  'clearFieldsOnSuccess' => true,
  'hooks' => 'email',
  'emailTo' => '{\'email_1\'|config},artemnersisyan777@gmail.com',
  'emailSubject' => 'Заявка со страницы Контакты',
  'successMessage' => '<div class="text-center text-[#558255] font-bold p-4">Спасибо за обращение, мы скоро свяжемся с вами!</div>',
);