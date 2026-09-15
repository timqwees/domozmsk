<?php  return array (
  'id' => 30,
  'source' => 1,
  'property_preprocess' => 0,
  'templatename' => 'Контакты',
  'description' => '',
  'editor_type' => 0,
  'category' => 12,
  'icon' => '',
  'template_type' => 0,
  'content' => '<!DOCTYPE html>
<html lang="ru" itemscope itemtype="https://schema.org/ContactPage">

<head>
    {include \'meta\'}
    {$_modx->resource.codecviz}

    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif;
            background: #fff;
            color: #1a1a1a;
            overflow-x: hidden;
        }

        .section-title {
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: \'\';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #3F5F3F, #d4a574);
            border-radius: 2px;
        }

        .text-center .section-title::after {
            left: 50%;
            transform: translateX(-50%);
        }

        .contact-card {
            transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
        }

        .contact-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 18px 45px -20px rgba(0,0,0,.22);
            border-color: rgba(85,130,85,.35);
        }

        section[id] {
            scroll-margin-top: 100px;
        }

        @media (max-width: 767px) {
            section[id] {
                scroll-margin-top: 75px;
            }
        }
    </style>
</head>

<body class="antialiased">

    {include \'header\'}

    <main id="main-content" itemprop="mainContentOfPage">

        <!-- ================================================================ -->
        <!-- ХЛЕБНЫЕ КРОШКИ                                                   -->
        <!-- ================================================================ -->

        <div class="text-left max-w-7xl mx-auto px-4 pt-6">

            <nav aria-label="Хлебные крошки" class="absolute top-[100px] text-sm text-gray-500" itemscope itemtype="https://schema.org/BreadcrumbList">

                <ol class="flex flex-wrap items-center gap-2">

                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="text-left flex items-center gap-2">

                        <a href="/" itemprop="item" class="text-left hover:text-[#558255] transition">

                            <span itemprop="name">Главная</span>

                        </a>

                        <meta itemprop="position" content="1">

                        <span aria-hidden="true" class="text-left text-gray-300">/</span>
                    </li>

                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">

                        <span itemprop="name" class="text-left text-gray-700 font-medium">
                            {$_modx->resource.pagetitle ?: \'Контакты\'}
                        </span>

                        <meta itemprop="position" content="2">

                    </li>

                </ol>
            </nav>
        </div>


        <!-- ================================================================ -->
        <!-- HERO                                                             -->
        <!-- ================================================================ -->

        <section class="py-16 md:py-24 bg-[#f8faf8]">
            <div class="text-left max-w-7xl mx-auto px-4">

                <div class="max-w-3xl mx-auto text-center">

                    <span class="text-center text-sm font-bold tracking-widest text-[#558255] uppercase mb-4 block">
                        Свяжитесь с нами
                    </span>

                    <h1 class="text-center text-4xl md:text-6xl font-extrabold text-[#1a1a1a] section-title">
                        Контакты
                    </h1>

                    <p class="text-center mt-10 text-lg md:text-xl text-gray-600 leading-relaxed">
                        Если у вас есть вопросы по благоустройству, озеленению или другим работам,
                        свяжитесь с нами удобным способом. Мы ответим и поможем определить следующий шаг.
                    </p>

                </div>

            </div>
        </section>


        <!-- ================================================================ -->
        <!-- ОСНОВНЫЕ КОНТАКТЫ                                                 -->
        <!-- ================================================================ -->

        <section id="contacts" class="py-20 bg-white">

            <div class="text-left max-w-7xl mx-auto px-4">

                <div class="text-center mb-14">
                    <span class="text-center text-sm font-bold tracking-widest text-[#558255] uppercase mb-3 block">
                        Как с нами связаться
                    </span>

                    <h2 class="text-center text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title">
                        Контактная информация
                    </h2>
                </div>


                <div class="text-left grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto">

                    <!-- Телефон -->
                    <div class="text-left contact-card bg-white rounded-2xl p-7 border border-gray-100 shadow-sm">

                        <div class="text-left w-14 h-14 rounded-xl bg-[#558255]/10 flex items-center justify-center mb-5">
                            <svg class="w-7 h-7 text-[#558255]" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a2 2 0 011.94 1.515l.57 2.28a2 2 0 01-.57 1.94l-1.38 1.38a16 16 0 006.12 6.12l1.38-1.38a2 2 0 011.94-.57l2.28.57A2 2 0 0121 16.72V20a2 2 0 01-2 2C9.61 22 2 14.39 2 5a2 2 0 011-0z">
                                </path>
                            </svg>
                        </div>

                        <p class="text-left text-sm font-semibold text-[#558255] uppercase tracking-wide mb-2">
                            Телефон
                        </p>

                        <a href="tel:+79859207700" class="text-left text-xl font-bold text-[#1a1a1a] hover:text-[#558255] transition" itemprop="telephone">
                            +7 (985) 920-77-00
                        </a>

                        <p class="text-left mt-3 text-sm text-gray-500">
                            Кликабельный номер для звонка с телефона.
                        </p>

                    </div>


                    <!-- Email -->
                    <div class="text-left contact-card bg-white rounded-2xl p-7 border border-gray-100 shadow-sm">

                        <div class="text-left w-14 h-14 rounded-xl bg-[#558255]/10 flex items-center justify-center mb-5">
                            <svg class="w-7 h-7 text-[#558255]" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l9 6 9-6M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>

                        <p class="text-left text-sm font-semibold text-[#558255] uppercase tracking-wide mb-2">
                            Электронная почта
                        </p>

                        <a href="mailto:DOMOZ.77@yandex.ru" class="text-left text-lg md:text-xl font-bold text-[#1a1a1a] hover:text-[#558255] transition break-all" itemprop="email">
                            DOMOZ.77@yandex.ru
                        </a>

                        <p class="text-left mt-3 text-sm text-gray-500">
                            Нажмите на адрес, чтобы открыть почтовое приложение.
                        </p>

                    </div>


                    <!-- Адрес -->
                    <div class="text-left contact-card bg-white rounded-2xl p-7 border border-gray-100 shadow-sm">

                        <div class="text-left w-14 h-14 rounded-xl bg-[#558255]/10 flex items-center justify-center mb-5">
                            <svg class="w-7 h-7 text-[#558255]" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21s8-6.2 8-12a8 8 0 10-16 0c0 5.8 8 12 8 12z">
                                </path>
                                <circle cx="12" cy="9" r="2.5"></circle>
                            </svg>
                        </div>

                        <p class="text-left text-sm font-semibold text-[#558255] uppercase tracking-wide mb-2">
                            Адрес
                        </p>

                        <address class="text-left not-italic text-xl font-bold text-[#1a1a1a]" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">

                            <span itemprop="addressLocality">Москва</span>,
                            <span itemprop="streetAddress">Головинское шоссе, 5А</span>

                        </address>

                        <p class="text-left mt-3 text-sm text-gray-500">
                            Полный адрес компании.
                        </p>

                    </div>

                </div>

            </div>
        </section>


        <!-- ================================================================ -->
        <!-- РЕКВИЗИТЫ И ГРАФИК                                               -->
        <!-- ================================================================ -->

        <section id="details" class="py-20 bg-[#f8faf8]">

            <div class="text-left max-w-6xl mx-auto px-4">

                <div class="text-left grid grid-cols-1 md:grid-cols-2 gap-8">

                    <!-- График -->
                    <div class="text-left bg-white rounded-3xl p-8 md:p-10 shadow-sm border border-gray-100">

                        <span class="text-left text-sm font-bold tracking-widest text-[#558255] uppercase">
                            Информация
                        </span>

                        <h2 class="text-left text-2xl md:text-3xl font-extrabold text-[#1a1a1a] mt-3 mb-6">
                            График работы
                        </h2>

                        <!--
                            В исходных данных сайта конкретный график работы
                            не указан. Поэтому здесь оставлена честная заглушка,
                            а не выдуманное расписание.
                        -->

                        <div class="text-left rounded-2xl bg-[#f8faf8] p-5 border border-gray-100">
                            <p class="text-left text-gray-700 leading-relaxed">
                                График работы необходимо указать в настройках страницы
                                после подтверждения фактического расписания компании.
                            </p>
                        </div>

                    </div>


                    <!-- Реквизиты -->
                    <div class="text-left bg-white rounded-3xl p-8 md:p-10 shadow-sm border border-gray-100">

                        <span class="text-left text-sm font-bold tracking-widest text-[#558255] uppercase">
                            Для документов
                        </span>

                        <h2 class="text-left text-2xl md:text-3xl font-extrabold text-[#1a1a1a] mt-3 mb-6">
                            Реквизиты
                        </h2>

                        <!--
                            В исходном файле ИНН, ОГРН, КПП, расчётный счёт
                            и банковские реквизиты отсутствуют.
                            Не подставляем вымышленные значения.
                        -->

                        <div class="text-left rounded-2xl bg-[#f8faf8] p-5 border border-gray-100">
                            <p class="text-left text-gray-700 leading-relaxed">
                                Реквизиты компании будут размещены здесь после
                                добавления фактических данных.
                            </p>
                        </div>

                    </div>

                </div>

            </div>
        </section>


        <!-- ================================================================ -->
        <!-- МЕНЕДЖЕРЫ                                                        -->
        <!-- ================================================================ -->

        <section id="managers" class="py-20 bg-white">

            <div class="text-left max-w-6xl mx-auto px-4">

                <div class="text-center mb-12">

                    <span class="text-center text-sm font-bold tracking-widest text-[#558255] uppercase mb-3 block">
                        Персональный контакт
                    </span>

                    <h2 class="text-center text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title">
                        Менеджеры
                    </h2>

                </div>

                <div class="max-w-3xl mx-auto bg-[#f8faf8] rounded-3xl p-8 md:p-10 border border-gray-100 text-center">

                    <!--
                        Отдельные контакты менеджеров отсутствуют
                        в исходных данных сайта.
                    -->

                    <div class="text-center w-16 h-16 mx-auto rounded-2xl bg-[#558255]/10 flex items-center justify-center mb-5">
                        <svg class="w-8 h-8 text-[#558255]" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                            </path>
                        </svg>
                    </div>

                    <h3 class="text-center text-xl font-bold text-[#1a1a1a] mb-3">
                        Свяжитесь с компанией
                    </h3>

                    <p class="text-center text-gray-600 leading-relaxed mb-6">
                        Персональные контакты менеджеров можно добавить сюда
                        после получения актуальных данных.
                    </p>

                    <a href="tel:+79859207700" class="text-center inline-flex items-center justify-center px-6 py-3 rounded-xl bg-[#558255] text-white font-bold hover:bg-[#3d5c3d] transition">
                        Позвонить
                    </a>

                </div>

            </div>
        </section>


        <!-- ================================================================ -->
        <!-- ФОРМА ОБРАТНОЙ СВЯЗИ                                             -->
        <!-- ================================================================ -->

        <section id="feedback" class="py-20 bg-[#f8faf8]">

            <div class="text-left max-w-6xl mx-auto px-4">

                <div class="text-left grid grid-cols-1 lg:grid-cols-2 gap-10 items-stretch">

                    <!-- Текст -->
                    <div class="text-left flex flex-col justify-center">

                        <span class="text-left text-sm font-bold tracking-widest text-[#558255] uppercase mb-3">
                            Обратная связь
                        </span>

                        <h2 class="text-left text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title">
                            Остались вопросы?
                        </h2>

                        <p class="text-left mt-10 text-lg text-gray-600 leading-relaxed">
                            Оставьте имя и номер телефона. Мы свяжемся с вами,
                            ответим на вопросы и обсудим задачу.
                        </p>

                        <div class="text-left mt-8 space-y-4 text-gray-700">

                            <div class="text-left flex gap-3">
                                <span class="text-left text-[#558255] font-bold">✓</span>
                                <span>Бесплатная консультация инженера</span>
                            </div>

                            <div class="text-left flex gap-3">
                                <span class="text-left text-[#558255] font-bold">✓</span>
                                <span>При необходимости запланируем выезд замерщика</span>
                            </div>

                            <div class="text-left flex gap-3">
                                <span class="text-left text-[#558255] font-bold">✓</span>
                                <span>Без навязчивых звонков и спама</span>
                            </div>

                        </div>

                    </div>


                    <!-- Форма -->
                    <div class="text-left bg-white rounded-3xl shadow-xl border border-gray-100 overflow-hidden">

                        <div class="text-left px-7 py-6 border-b border-gray-100 bg-gray-50">

                            <h3 class="text-left text-xl font-bold text-gray-900">
                                Заказать консультацию
                            </h3>

                            <p class="text-left text-sm text-gray-600 mt-1">
                                Расскажем о стоимости работ и ответим на вопросы.
                            </p>

                        </div>

                        {\'!FetchIt\'|snippet:[
                            \'snippet\'=>\'FormIt\',
                            \'hooks\'=>\'email\',
                            \'form\'=>\'@INLINE
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

</form>\',
                            \'emailTo\'=>"{\'email_1\'|config},artemnersisyan777@gmail.com",
                            \'emailSubject\'=>"Заявка со страницы Контакты",
                            \'successMessage\'=>\'<div class="text-center text-[#558255] font-bold p-4">Спасибо за обращение, мы скоро свяжемся с вами!</div>\'
                        ]}

                    </div>

                </div>

            </div>
        </section>


        <!-- ================================================================ -->
        <!-- КАРТА                                                            -->
        <!-- ================================================================ -->

        <section id="map" class="py-20 bg-white">

            <div class="text-left max-w-7xl mx-auto px-4">

                <div class="text-center mb-12">

                    <span class="text-center text-sm font-bold tracking-widest text-[#558255] uppercase mb-3 block">
                        Мы на карте
                    </span>

                    <h2 class="text-center text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title">
                        Как нас найти
                    </h2>

                </div>

                <div class="text-left grid grid-cols-1 lg:grid-cols-3 gap-8">

                    <div class="text-left bg-[#f8faf8] rounded-3xl p-8 border border-gray-100">

                        <h3 class="text-left text-xl font-bold text-[#1a1a1a] mb-5">
                            Адрес
                        </h3>

                        <p class="text-left text-gray-700 leading-relaxed mb-6">
                            Москва, Головинское шоссе, 5А
                        </p>

                        <a href="https://yandex.ru/maps/?text=Москва%2C%20Головинское%20шоссе%2C%205А" target="_blank" rel="noopener noreferrer" class="text-left inline-flex items-center justify-center px-6 py-3 rounded-xl bg-[#558255] text-white font-bold hover:bg-[#3d5c3d] transition">
                            Открыть маршрут
                        </a>

                    </div>


                    <div class="text-left lg:col-span-2 rounded-3xl overflow-hidden border border-gray-200 shadow-sm min-h-[380px]">

                        <iframe title="Карта проезда — Москва, Головинское шоссе, 5А" src="https://yandex.ru/map-widget/v1/?text=Москва%2C%20Головинское%20шоссе%2C%205А" width="100%" height="100%" frameborder="0" allowfullscreen="true" class="w-full min-h-[380px]">
                        </iframe>

                    </div>

                </div>

            </div>
        </section>


        <!-- ================================================================ -->
        <!-- СОЦСЕТИ                                                          -->
        <!-- ================================================================ -->

        <section class="py-16 bg-[#f8faf8]">

            <div class="max-w-4xl mx-auto px-4 text-center">

                <span class="text-center text-sm font-bold tracking-widest text-[#558255] uppercase mb-3 block">
                    Мы в социальных сетях
                </span>

                <h2 class="text-center text-2xl md:text-3xl font-extrabold text-[#1a1a1a]">
                    Следите за нашими работами
                </h2>

                <div class="text-center flex flex-wrap justify-center gap-4 mt-8">

                    <a href="https://vk.com/domozmsk" target="_blank" rel="noopener noreferrer" class="text-center px-6 py-3 rounded-xl bg-white border border-gray-200 font-bold text-gray-700 hover:border-[#558255] hover:text-[#558255] transition">
                        ВКонтакте
                    </a>

                    <a href="https://www.instagram.com/domozmsk" target="_blank" rel="noopener noreferrer" class="text-center px-6 py-3 rounded-xl bg-white border border-gray-200 font-bold text-gray-700 hover:border-[#558255] hover:text-[#558255] transition">
                        Instagram
                    </a>

                </div>

            </div>

        </section>

    </main>


    {include \'footer\'}
    {include \'modal\'}
    {include \'social\'}

    <!-- Аналитика -->
    [[$yandex.metrika]]

    <!-- Сохранены существующие подключения проекта -->
    <script src="/assets/bibliotek/jquery/jqwery.js"></script>
    <script src="/assets/js/script.js?v={$_modx->config.cache_version}" defer></script>

</body>
</html>',
  'locked' => 0,
  'properties' => 'a:0:{}',
  'static' => 0,
  'static_file' => '',
);