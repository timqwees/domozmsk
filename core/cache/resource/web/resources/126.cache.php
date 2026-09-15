<?php if(time() > 1789483757){return null;} return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 126,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Конакты',
    'longtitle' => 'Контактные данные компании Дом Оз',
    'description' => 'Контакты Дом ОЗ в Москве: телефон, электронная почта, адрес, график работы и форма обратной связи. Свяжитесь с нами для консультации по благоустройству и озеленению.',
    'alias' => 'contact',
    'alias_visible' => 1,
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 65,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 30,
    'menuindex' => 7,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1787402129,
    'editedby' => 1,
    'editedon' => 1787402196,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1787402100,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'history-company/contact',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!DOCTYPE html>
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
    <!-- Yandex -->
<link rel="preconnect" href="https://mc.yandex.ru" crossorigin>

<script>
(function () {
    \'use strict\';

    if (window.__analyticsInitialized) return;
    window.__analyticsInitialized = true;

    function loadYandex() {
        if (window.__ymLoaded) return;
        window.__ymLoaded = true;

        (function(m,e,s,r,i,k,a){
            m[i]=m[i]||function(){
                (m[i].a=m[i].a||[]).push(arguments);
            };
            m[i].l=Date.now();

            k=e.createElement(s);
            a=e.getElementsByTagName(s)[0];
            k.async=true;
            k.src=r;
            a.parentNode.insertBefore(k,a);

        })(window, document, \'script\',
           \'https://mc.yandex.ru/metrika/tag.js\',
           \'ym\');

        ym(108461808, \'init\', {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true,
            ecommerce: \'dataLayer\'
        });

        ym(99876445, \'init\', {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true,
            ecommerce: \'dataLayer\'
        });
    }

    function loadGTM() {
        if (window.__gtmLoaded) return;
        window.__gtmLoaded = true;

        (function(w,d,s,l,i){
            w[l]=w[l]||[];
            w[l].push({
                \'gtm.start\': new Date().getTime(),
                event:\'gtm.js\'
            });

            var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),
                dl=l !== \'dataLayer\' ? \'&l=\' + l : \'\';

            j.async = true;
            j.src = \'https://www.googletagmanager.com/gtm.js?id=\' + i + dl;

            f.parentNode.insertBefore(j,f);

        })(window, document, \'script\', \'dataLayer\', \'GTM-KJDVSFH6\');
    }

    // Метрика запускается сразу после построения DOM
    {*
    document.addEventListener(\'DOMContentLoaded\', loadYandex, {
       once: true
    });
    *}

    // GTM запускается после полной загрузки страницы
    window.addEventListener(\'load\', function () {
        setTimeout(loadGTM, 1000);
    }, {
        once: true
    });

})();
</script>

    <!-- Сохранены существующие подключения проекта -->
    <script src="/assets/bibliotek/jquery/jqwery.js"></script>
    <script src="/assets/js/script.js?v={$_modx->config.cache_version}" defer></script>

</body>
</html>',
    '_isForward' => false,
    '_jscripts' => 
    array (
      0 => '<script>window.addEventListener(\'DOMContentLoaded\', () => FetchIt.create({"action":"5b4338599cb530c4f36ba76d3d9ca4ab","assetsUrl":"\\/assets\\/components\\/fetchit\\/","actionUrl":"\\/assets\\/components\\/fetchit\\/action.php","inputInvalidClass":"is-invalid","customInvalidClass":"","clearFieldsOnSuccess":true,"defaultNotifier":true,"pageId":126}));</script>',
    ),
    '_loadedjscripts' => 
    array (
      '<script>window.addEventListener(\'DOMContentLoaded\', () => FetchIt.create({"action":"5b4338599cb530c4f36ba76d3d9ca4ab","assetsUrl":"\\/assets\\/components\\/fetchit\\/","actionUrl":"\\/assets\\/components\\/fetchit\\/action.php","inputInvalidClass":"is-invalid","customInvalidClass":"","clearFieldsOnSuccess":true,"defaultNotifier":true,"pageId":126}));</script>' => true,
    ),
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[$yandex.metrika]]' => '<!-- Yandex -->
<link rel="preconnect" href="https://mc.yandex.ru" crossorigin>

<script>
(function () {
    \'use strict\';

    if (window.__analyticsInitialized) return;
    window.__analyticsInitialized = true;

    function loadYandex() {
        if (window.__ymLoaded) return;
        window.__ymLoaded = true;

        (function(m,e,s,r,i,k,a){
            m[i]=m[i]||function(){
                (m[i].a=m[i].a||[]).push(arguments);
            };
            m[i].l=Date.now();

            k=e.createElement(s);
            a=e.getElementsByTagName(s)[0];
            k.async=true;
            k.src=r;
            a.parentNode.insertBefore(k,a);

        })(window, document, \'script\',
           \'https://mc.yandex.ru/metrika/tag.js\',
           \'ym\');

        ym(108461808, \'init\', {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true,
            ecommerce: \'dataLayer\'
        });

        ym(99876445, \'init\', {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true,
            ecommerce: \'dataLayer\'
        });
    }

    function loadGTM() {
        if (window.__gtmLoaded) return;
        window.__gtmLoaded = true;

        (function(w,d,s,l,i){
            w[l]=w[l]||[];
            w[l].push({
                \'gtm.start\': new Date().getTime(),
                event:\'gtm.js\'
            });

            var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),
                dl=l !== \'dataLayer\' ? \'&l=\' + l : \'\';

            j.async = true;
            j.src = \'https://www.googletagmanager.com/gtm.js?id=\' + i + dl;

            f.parentNode.insertBefore(j,f);

        })(window, document, \'script\', \'dataLayer\', \'GTM-KJDVSFH6\');
    }

    // Метрика запускается сразу после построения DOM
    {*
    document.addEventListener(\'DOMContentLoaded\', loadYandex, {
       once: true
    });
    *}

    // GTM запускается после полной загрузки страницы
    window.addEventListener(\'load\', function () {
        setTimeout(loadGTM, 1000);
    }, {
        once: true
    });

})();
</script>',
    '[[FetchIt?form=`form_modal`&snippet=`FormIt`&actionUrl=`[[+assetsUrl]]action.php`&clearFieldsOnSuccess=`1`&hooks=`email,FormItSaveForm`&emailTo=`{\'email_1\'|config},Domoz.77@yandex.ru`&emailFromName=`{\'site_name\'|config}`&emailFrom=`domozmsk@domozmsk.ru`&emailSubject=`Сообщение с сайта {\'site_name\'|config}`&fiarFromName=`Сообщение с сайта {\'site_name\'|config}`&emailTpl=`email_tplmod`&validate=`af_name:required:minLength=3:maxLength=30:regexp=/^[а-яА-ЯёЁa-zA-Z\\s]+$/,af_phone:required,af_email:required`&validationErrorMessage=`Вам необходимо заполнить все поля`&successMessage=`Сообщение успешно отправлено`]]' => 'Array
(
    &#91;form&#93; =&gt; form_modal
    &#91;snippet&#93; =&gt; FormIt
    &#91;actionUrl&#93; =&gt; &#91;&#91;+assetsUrl&#93;&#93;action.php
    &#91;clearFieldsOnSuccess&#93; =&gt; 1
    &#91;hooks&#93; =&gt; email,FormItSaveForm
    &#91;emailTo&#93; =&gt; {&#039;email_1&#039;|config},Domoz.77@yandex.ru
    &#91;emailFromName&#93; =&gt; {&#039;site_name&#039;|config}
    &#91;emailFrom&#93; =&gt; domozmsk@domozmsk.ru
    &#91;emailSubject&#93; =&gt; Сообщение с сайта {&#039;site_name&#039;|config}
    &#91;fiarFromName&#93; =&gt; Сообщение с сайта {&#039;site_name&#039;|config}
    &#91;emailTpl&#93; =&gt; email_tplmod
    &#91;validate&#93; =&gt; af_name:required:minLength=3:maxLength=30:regexp=/^&#91;а-яА-ЯёЁa-zA-Z\\s&#93;+$/,af_phone:required,af_email:required
    &#91;validationErrorMessage&#93; =&gt; Вам необходимо заполнить все поля
    &#91;successMessage&#93; =&gt; Сообщение успешно отправлено
)
',
    '[[~126? &scheme=`full`]]' => 'https://domozmsk.ru/history-company/contact',
    '[[SchemaHome]]' => '<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "Organization",
            "@id": "https://domozmsk.ru/#organization",
            "name": "ООО Дом Оз",
            "alternateName": "Дом Оз",
            "url": "https://domozmsk.ru/",
            "description": "Контакты Дом ОЗ в Москве: телефон, электронная почта, адрес, график работы и форма обратной связи. Свяжитесь с нами для консультации по благоустройству и озеленению.",
            "logo": {
                "@type": "ImageObject",
                "@id": "https://domozmsk.ru/#logo",
                "url": "https://domozmsk.ru/assets/img/logo.png"
            },
            "telephone": "+7-985-920-77-00",
            "email": "DOMOZ.77@yandex.ru",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "RU",
                "addressLocality": "Москва",
                "streetAddress": "Головинское шоссе, 5А"
            },
            "foundingDate": "2015",
            "sameAs": [
                "https://t.me/domozmskru",
                "https://vk.ru/domozmsk",
                "https://www.youtube.com/@domozmsk"
            ],
            "knowsAbout": [
                "Ландшафтный дизайн",
                "Благоустройство территорий",
                "Озеленение",
                "Дренаж",
                "Автополив"
            ],
            "founder": {
                "@id": "https://domozmsk.ru/#person"
            }
        },
        {
            "@type": "Person",
            "@id": "https://domozmsk.ru/#person",
            "name": "Главный специалист Дом Оз",
            "jobTitle": "Эксперт по ландшафтному дизайну",
            "worksFor": {
                "@id": "https://domozmsk.ru/#organization"
            },
            "url": "https://domozmsk.ru/history-company/nasha-komanda"
        },
        {
            "@type": "WebSite",
            "@id": "https://domozmsk.ru/#website",
            "url": "https://domozmsk.ru/",
            "name": "Дом Оз",
            "publisher": {
                "@id": "https://domozmsk.ru/#organization"
            },
            "inLanguage": "ru-RU"
        },
        {
            "@type": "WebPage",
            "@id": "https://domozmsk.ru/history-company/contact#webpage",
            "url": "https://domozmsk.ru/history-company/contact",
            "name": "Конакты",
            "description": "Контакты Дом ОЗ в Москве: телефон, электронная почта, адрес, график работы и форма обратной связи. Свяжитесь с нами для консультации по благоустройству и озеленению.",
            "inLanguage": "ru-RU",
            "isPartOf": {
                "@id": "https://domozmsk.ru/#website"
            },
            "speakable": {
                "@type": "SpeakableSpecification",
                "cssSelector": [
                    "h1",
                    "h2",
                    ".tldr",
                    ".hero-desc",
                    ".faq-answer"
                ],
                "xpath": [
                    "/html/head/title",
                    "/html/body//h1[1]"
                ]
            }
        },
        {
            "@type": "BreadcrumbList",
            "@id": "https://domozmsk.ru/history-company/contact#breadcrumb",
            "itemListElement": [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Главная",
                    "item": "https://domozmsk.ru/"
                }
            ]
        },
        {
            "@type": "WebApplication",
            "@id": "https://domozmsk.ru/history-company/contact#calculator",
            "name": "Калькулятор стоимости ландшафтного дизайна",
            "url": "https://domozmsk.ru/history-company/contact#kviz",
            "description": "Рассчитайте стоимость благоустройства участка в Москве и Подмосковье за 1 минуту",
            "applicationCategory": "UtilitiesApplication",
            "operatingSystem": "Web",
            "isAccessibleForFree": true,
            "offers": {
                "@type": "Offer",
                "price": "0",
                "priceCurrency": "RUB"
            },
            "provider": {
                "@id": "https://domozmsk.ru/#organization"
            }
        },
        {
            "@type": "Service",
            "@id": "https://domozmsk.ru/history-company/contact#service",
            "serviceType": "Ландшафтный дизайн под ключ",
            "name": "Ландшафтный дизайн в Москве и Московской области",
            "provider": {
                "@id": "https://domozmsk.ru/#organization"
            },
            "areaServed": [
                "Москва",
                "Московская область",
                "Красногорск",
                "Одинцово",
                "Истра"
            ],
            "hasOfferCatalog": {
                "@type": "OfferCatalog",
                "name": "Цены на ландшафтные работы",
                "itemListElement": [
                    {
                        "@type": "Offer",
                        "name": "Проектирование",
                        "price": "11500",
                        "priceCurrency": "RUB",
                        "url": "https://domozmsk.ru/prices"
                    },
                    {
                        "@type": "Offer",
                        "name": "Благоустройство",
                        "price": "50000",
                        "priceCurrency": "RUB",
                        "url": "https://domozmsk.ru/prices"
                    },
                    {
                        "@type": "Offer",
                        "name": "Газон",
                        "price": "390",
                        "priceCurrency": "RUB",
                        "url": "https://domozmsk.ru/prices"
                    }
                ]
            }
        },
        {
            "@type": "SiteNavigationElement",
            "@id": "https://domozmsk.ru/history-company/contact#nav",
            "name": "Главное меню",
            "hasPart": [
                {
                    "@type": "SiteNavigationElement",
                    "name": "Услуги",
                    "url": "https://domozmsk.ru/history-company/contact#vidy"
                },
                {
                    "@type": "SiteNavigationElement",
                    "name": "Цены",
                    "url": "https://domozmsk.ru/prices"
                },
                {
                    "@type": "SiteNavigationElement",
                    "name": "Блог",
                    "url": "https://domozmsk.ru/blogs"
                },
                {
                    "@type": "SiteNavigationElement",
                    "name": "Отзывы",
                    "url": "https://domozmsk.ru/history-company/reviews"
                }
            ]
        }
    ]
}
</script>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'yandex.metrika' => 
      array (
        'fields' => 
        array (
          'id' => 20,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'yandex.metrika',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<!-- Yandex -->
<link rel="preconnect" href="https://mc.yandex.ru" crossorigin>

<script>
(function () {
    \'use strict\';

    if (window.__analyticsInitialized) return;
    window.__analyticsInitialized = true;

    function loadYandex() {
        if (window.__ymLoaded) return;
        window.__ymLoaded = true;

        (function(m,e,s,r,i,k,a){
            m[i]=m[i]||function(){
                (m[i].a=m[i].a||[]).push(arguments);
            };
            m[i].l=Date.now();

            k=e.createElement(s);
            a=e.getElementsByTagName(s)[0];
            k.async=true;
            k.src=r;
            a.parentNode.insertBefore(k,a);

        })(window, document, \'script\',
           \'https://mc.yandex.ru/metrika/tag.js\',
           \'ym\');

        ym(108461808, \'init\', {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true,
            ecommerce: \'dataLayer\'
        });

        ym(99876445, \'init\', {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true,
            ecommerce: \'dataLayer\'
        });
    }

    function loadGTM() {
        if (window.__gtmLoaded) return;
        window.__gtmLoaded = true;

        (function(w,d,s,l,i){
            w[l]=w[l]||[];
            w[l].push({
                \'gtm.start\': new Date().getTime(),
                event:\'gtm.js\'
            });

            var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),
                dl=l !== \'dataLayer\' ? \'&l=\' + l : \'\';

            j.async = true;
            j.src = \'https://www.googletagmanager.com/gtm.js?id=\' + i + dl;

            f.parentNode.insertBefore(j,f);

        })(window, document, \'script\', \'dataLayer\', \'GTM-KJDVSFH6\');
    }

    // Метрика запускается сразу после построения DOM
    {*
    document.addEventListener(\'DOMContentLoaded\', loadYandex, {
       once: true
    });
    *}

    // GTM запускается после полной загрузки страницы
    window.addEventListener(\'load\', function () {
        setTimeout(loadGTM, 1000);
    }, {
        once: true
    });

})();
</script>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<!-- Yandex -->
<link rel="preconnect" href="https://mc.yandex.ru" crossorigin>

<script>
(function () {
    \'use strict\';

    if (window.__analyticsInitialized) return;
    window.__analyticsInitialized = true;

    function loadYandex() {
        if (window.__ymLoaded) return;
        window.__ymLoaded = true;

        (function(m,e,s,r,i,k,a){
            m[i]=m[i]||function(){
                (m[i].a=m[i].a||[]).push(arguments);
            };
            m[i].l=Date.now();

            k=e.createElement(s);
            a=e.getElementsByTagName(s)[0];
            k.async=true;
            k.src=r;
            a.parentNode.insertBefore(k,a);

        })(window, document, \'script\',
           \'https://mc.yandex.ru/metrika/tag.js\',
           \'ym\');

        ym(108461808, \'init\', {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true,
            ecommerce: \'dataLayer\'
        });

        ym(99876445, \'init\', {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true,
            ecommerce: \'dataLayer\'
        });
    }

    function loadGTM() {
        if (window.__gtmLoaded) return;
        window.__gtmLoaded = true;

        (function(w,d,s,l,i){
            w[l]=w[l]||[];
            w[l].push({
                \'gtm.start\': new Date().getTime(),
                event:\'gtm.js\'
            });

            var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),
                dl=l !== \'dataLayer\' ? \'&l=\' + l : \'\';

            j.async = true;
            j.src = \'https://www.googletagmanager.com/gtm.js?id=\' + i + dl;

            f.parentNode.insertBefore(j,f);

        })(window, document, \'script\', \'dataLayer\', \'GTM-KJDVSFH6\');
    }

    // Метрика запускается сразу после построения DOM
    {*
    document.addEventListener(\'DOMContentLoaded\', loadYandex, {
       once: true
    });
    *}

    // GTM запускается после полной загрузки страницы
    window.addEventListener(\'load\', function () {
        setTimeout(loadGTM, 1000);
    }, {
        once: true
    });

})();
</script>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'SchemaHome' => 
      array (
        'fields' => 
        array (
          'id' => 53,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'SchemaHome',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '$id = $modx->resource->get(\'id\');
$url = $modx->makeUrl($id, \'\', \'\', \'full\');
$siteUrl = rtrim($modx->getOption(\'site_url\', null, \'https://domozmsk.ru\'), \'/\');
$headline = $modx->resource->get(\'pagetitle\');
$desc = $modx->resource->get(\'description\');
if (empty($desc)) $desc = \'Ландшафтный дизайн участков под ключ в Москве и Московской области: проектирование, благоустройство, озеленение. Смета за 1 день, договор, гарантия до 5 лет.\';

// Организация и персона — как в блог-сниппете
$org = array(\'@type\' => \'Organization\', \'@id\' => $siteUrl . \'/#organization\', \'name\' => \'ООО Дом Оз\', \'alternateName\' => \'Дом Оз\', \'url\' => $siteUrl . \'/\', \'description\' => $desc, \'logo\' => array(\'@type\' => \'ImageObject\', \'@id\' => $siteUrl . \'/#logo\', \'url\' => $siteUrl . \'/assets/img/logo.png\'), \'telephone\' => \'+7-985-920-77-00\', \'email\' => \'DOMOZ.77@yandex.ru\', \'address\' => array(\'@type\' => \'PostalAddress\', \'addressCountry\' => \'RU\', \'addressLocality\' => \'Москва\', \'streetAddress\' => \'Головинское шоссе, 5А\'), \'foundingDate\' => \'2015\', \'sameAs\' => array(\'https://t.me/domozmskru\', \'https://vk.ru/domozmsk\', \'https://www.youtube.com/@domozmsk\'), \'knowsAbout\' => array(\'Ландшафтный дизайн\', \'Благоустройство территорий\', \'Озеленение\', \'Дренаж\', \'Автополив\'), \'founder\' => array(\'@id\' => $siteUrl . \'/#person\'));
$person = array(\'@type\' => \'Person\', \'@id\' => $siteUrl . \'/#person\', \'name\' => \'Главный специалист Дом Оз\', \'jobTitle\' => \'Эксперт по ландшафтному дизайну\', \'worksFor\' => array(\'@id\' => $siteUrl . \'/#organization\'), \'url\' => $siteUrl . \'/history-company/nasha-komanda\');

$graph = array();
$graph[] = $org;
$graph[] = $person;
$graph[] = array(\'@type\' => \'WebSite\', \'@id\' => $siteUrl . \'/#website\', \'url\' => $siteUrl . \'/\', \'name\' => \'Дом Оз\', \'publisher\' => array(\'@id\' => $siteUrl . \'/#organization\'), \'inLanguage\' => \'ru-RU\');
$graph[] = array(\'@type\' => \'WebPage\', \'@id\' => $url . \'#webpage\', \'url\' => $url, \'name\' => $headline, \'description\' => $desc, \'inLanguage\' => \'ru-RU\', \'isPartOf\' => array(\'@id\' => $siteUrl . \'/#website\'), \'speakable\' => array(\'@type\' => \'SpeakableSpecification\', \'cssSelector\' => array(\'h1\', \'h2\', \'.tldr\', \'.hero-desc\', \'.faq-answer\'), \'xpath\' => array("/html/head/title", "/html/body//h1[1]")));
$graph[] = array(\'@type\' => \'BreadcrumbList\', \'@id\' => $url . \'#breadcrumb\', \'itemListElement\' => array(array(\'@type\' => \'ListItem\', \'position\' => 1, \'name\' => \'Главная\', \'item\' => $siteUrl . \'/\')));

// Калькулятор = их бесплатный чекер
$graph[] = array(\'@type\' => \'WebApplication\', \'@id\' => $url . \'#calculator\', \'name\' => \'Калькулятор стоимости ландшафтного дизайна\', \'url\' => $url . \'#kviz\', \'description\' => \'Рассчитайте стоимость благоустройства участка в Москве и Подмосковье за 1 минуту\', \'applicationCategory\' => \'UtilitiesApplication\', \'operatingSystem\' => \'Web\', \'isAccessibleForFree\' => true, \'offers\' => array(\'@type\' => \'Offer\', \'price\' => \'0\', \'priceCurrency\' => \'RUB\'), \'provider\' => array(\'@id\' => $siteUrl . \'/#organization\'));

// Каталог услуг = их ItemList из 67 инструментов
$catIds = array_filter(array_map(\'trim\', explode(\',\', (string)$modx->resource->getTVValue(\'categoryi\'))));
$items = array(); $pos = 1;
foreach ($catIds as $cid) {
    $r = $modx->getObject(\'modResource\', (int)$cid);
    if (!$r || !$r->get(\'published\') || $r->get(\'deleted\')) continue;
    $items[] = array(\'@type\' => \'ListItem\', \'position\' => $pos++, \'item\' => array(\'@type\' => \'Service\', \'name\' => $r->get(\'pagetitle\'), \'url\' => $modx->makeUrl($r->get(\'id\'), \'\', \'\', \'full\'), \'provider\' => array(\'@id\' => $siteUrl . \'/#organization\'), \'areaServed\' => array(\'Москва\', \'Московская область\')));
}
if (!empty($items)) $graph[] = array(\'@type\' => \'ItemList\', \'@id\' => $url . \'#services\', \'name\' => \'Услуги ландшафтного дизайна Дом Оз\', \'numberOfItems\' => count($items), \'itemListElement\' => $items);

// Тарифы = их OfferCatalog (цены сверьте с сайтом)
$offers = array(
    array(\'@type\' => \'Offer\', \'name\' => \'Проектирование\', \'price\' => \'11500\', \'priceCurrency\' => \'RUB\', \'url\' => $siteUrl . \'/prices\'),
    array(\'@type\' => \'Offer\', \'name\' => \'Благоустройство\', \'price\' => \'50000\', \'priceCurrency\' => \'RUB\', \'url\' => $siteUrl . \'/prices\'),
    array(\'@type\' => \'Offer\', \'name\' => \'Газон\', \'price\' => \'390\', \'priceCurrency\' => \'RUB\', \'url\' => $siteUrl . \'/prices\')
);
$graph[] = array(\'@type\' => \'Service\', \'@id\' => $url . \'#service\', \'serviceType\' => \'Ландшафтный дизайн под ключ\', \'name\' => \'Ландшафтный дизайн в Москве и Московской области\', \'provider\' => array(\'@id\' => $siteUrl . \'/#organization\'), \'areaServed\' => array(\'Москва\', \'Московская область\', \'Красногорск\', \'Одинцово\', \'Истра\'), \'hasOfferCatalog\' => array(\'@type\' => \'OfferCatalog\', \'name\' => \'Цены на ландшафтные работы\', \'itemListElement\' => $offers));

// Меню = их SiteNavigationElement
$graph[] = array(\'@type\' => \'SiteNavigationElement\', \'@id\' => $url . \'#nav\', \'name\' => \'Главное меню\', \'hasPart\' => array(
    array(\'@type\' => \'SiteNavigationElement\', \'name\' => \'Услуги\', \'url\' => $url . \'#vidy\'),
    array(\'@type\' => \'SiteNavigationElement\', \'name\' => \'Цены\', \'url\' => $siteUrl . \'/prices\'),
    array(\'@type\' => \'SiteNavigationElement\', \'name\' => \'Блог\', \'url\' => $siteUrl . \'/blogs\'),
    array(\'@type\' => \'SiteNavigationElement\', \'name\' => \'Отзывы\', \'url\' => $siteUrl . \'/history-company/reviews\')
));

// FAQ из TV vopros
$faqItems = $modx->resource->getTVValue(\'vopros\');
$faqItems = $faqItems ? json_decode($faqItems, true) : array();
$faqMain = array();
if (is_array($faqItems)) {
    foreach ($faqItems as $fq) {
        $q = trim(strip_tags((string)(isset($fq[\'vopr\']) ? $fq[\'vopr\'] : \'\')));
        $a = trim(strip_tags((string)(isset($fq[\'otv\']) ? $fq[\'otv\'] : \'\')));
        if ($q !== \'\' && $a !== \'\') $faqMain[] = array(\'@type\' => \'Question\', \'name\' => $q, \'acceptedAnswer\' => array(\'@type\' => \'Answer\', \'text\' => $a));
    }
}
if (!empty($faqMain)) $graph[] = array(\'@type\' => \'FAQPage\', \'@id\' => $url . \'#faq\', \'mainEntity\' => $faqMain);

return \'<script type="application/ld+json">\' . "\\n" . json_encode(array(\'@context\' => \'https://schema.org\', \'@graph\' => $graph), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . "\\n" . \'</script>\';',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '$id = $modx->resource->get(\'id\');
$url = $modx->makeUrl($id, \'\', \'\', \'full\');
$siteUrl = rtrim($modx->getOption(\'site_url\', null, \'https://domozmsk.ru\'), \'/\');
$headline = $modx->resource->get(\'pagetitle\');
$desc = $modx->resource->get(\'description\');
if (empty($desc)) $desc = \'Ландшафтный дизайн участков под ключ в Москве и Московской области: проектирование, благоустройство, озеленение. Смета за 1 день, договор, гарантия до 5 лет.\';

// Организация и персона — как в блог-сниппете
$org = array(\'@type\' => \'Organization\', \'@id\' => $siteUrl . \'/#organization\', \'name\' => \'ООО Дом Оз\', \'alternateName\' => \'Дом Оз\', \'url\' => $siteUrl . \'/\', \'description\' => $desc, \'logo\' => array(\'@type\' => \'ImageObject\', \'@id\' => $siteUrl . \'/#logo\', \'url\' => $siteUrl . \'/assets/img/logo.png\'), \'telephone\' => \'+7-985-920-77-00\', \'email\' => \'DOMOZ.77@yandex.ru\', \'address\' => array(\'@type\' => \'PostalAddress\', \'addressCountry\' => \'RU\', \'addressLocality\' => \'Москва\', \'streetAddress\' => \'Головинское шоссе, 5А\'), \'foundingDate\' => \'2015\', \'sameAs\' => array(\'https://t.me/domozmskru\', \'https://vk.ru/domozmsk\', \'https://www.youtube.com/@domozmsk\'), \'knowsAbout\' => array(\'Ландшафтный дизайн\', \'Благоустройство территорий\', \'Озеленение\', \'Дренаж\', \'Автополив\'), \'founder\' => array(\'@id\' => $siteUrl . \'/#person\'));
$person = array(\'@type\' => \'Person\', \'@id\' => $siteUrl . \'/#person\', \'name\' => \'Главный специалист Дом Оз\', \'jobTitle\' => \'Эксперт по ландшафтному дизайну\', \'worksFor\' => array(\'@id\' => $siteUrl . \'/#organization\'), \'url\' => $siteUrl . \'/history-company/nasha-komanda\');

$graph = array();
$graph[] = $org;
$graph[] = $person;
$graph[] = array(\'@type\' => \'WebSite\', \'@id\' => $siteUrl . \'/#website\', \'url\' => $siteUrl . \'/\', \'name\' => \'Дом Оз\', \'publisher\' => array(\'@id\' => $siteUrl . \'/#organization\'), \'inLanguage\' => \'ru-RU\');
$graph[] = array(\'@type\' => \'WebPage\', \'@id\' => $url . \'#webpage\', \'url\' => $url, \'name\' => $headline, \'description\' => $desc, \'inLanguage\' => \'ru-RU\', \'isPartOf\' => array(\'@id\' => $siteUrl . \'/#website\'), \'speakable\' => array(\'@type\' => \'SpeakableSpecification\', \'cssSelector\' => array(\'h1\', \'h2\', \'.tldr\', \'.hero-desc\', \'.faq-answer\'), \'xpath\' => array("/html/head/title", "/html/body//h1[1]")));
$graph[] = array(\'@type\' => \'BreadcrumbList\', \'@id\' => $url . \'#breadcrumb\', \'itemListElement\' => array(array(\'@type\' => \'ListItem\', \'position\' => 1, \'name\' => \'Главная\', \'item\' => $siteUrl . \'/\')));

// Калькулятор = их бесплатный чекер
$graph[] = array(\'@type\' => \'WebApplication\', \'@id\' => $url . \'#calculator\', \'name\' => \'Калькулятор стоимости ландшафтного дизайна\', \'url\' => $url . \'#kviz\', \'description\' => \'Рассчитайте стоимость благоустройства участка в Москве и Подмосковье за 1 минуту\', \'applicationCategory\' => \'UtilitiesApplication\', \'operatingSystem\' => \'Web\', \'isAccessibleForFree\' => true, \'offers\' => array(\'@type\' => \'Offer\', \'price\' => \'0\', \'priceCurrency\' => \'RUB\'), \'provider\' => array(\'@id\' => $siteUrl . \'/#organization\'));

// Каталог услуг = их ItemList из 67 инструментов
$catIds = array_filter(array_map(\'trim\', explode(\',\', (string)$modx->resource->getTVValue(\'categoryi\'))));
$items = array(); $pos = 1;
foreach ($catIds as $cid) {
    $r = $modx->getObject(\'modResource\', (int)$cid);
    if (!$r || !$r->get(\'published\') || $r->get(\'deleted\')) continue;
    $items[] = array(\'@type\' => \'ListItem\', \'position\' => $pos++, \'item\' => array(\'@type\' => \'Service\', \'name\' => $r->get(\'pagetitle\'), \'url\' => $modx->makeUrl($r->get(\'id\'), \'\', \'\', \'full\'), \'provider\' => array(\'@id\' => $siteUrl . \'/#organization\'), \'areaServed\' => array(\'Москва\', \'Московская область\')));
}
if (!empty($items)) $graph[] = array(\'@type\' => \'ItemList\', \'@id\' => $url . \'#services\', \'name\' => \'Услуги ландшафтного дизайна Дом Оз\', \'numberOfItems\' => count($items), \'itemListElement\' => $items);

// Тарифы = их OfferCatalog (цены сверьте с сайтом)
$offers = array(
    array(\'@type\' => \'Offer\', \'name\' => \'Проектирование\', \'price\' => \'11500\', \'priceCurrency\' => \'RUB\', \'url\' => $siteUrl . \'/prices\'),
    array(\'@type\' => \'Offer\', \'name\' => \'Благоустройство\', \'price\' => \'50000\', \'priceCurrency\' => \'RUB\', \'url\' => $siteUrl . \'/prices\'),
    array(\'@type\' => \'Offer\', \'name\' => \'Газон\', \'price\' => \'390\', \'priceCurrency\' => \'RUB\', \'url\' => $siteUrl . \'/prices\')
);
$graph[] = array(\'@type\' => \'Service\', \'@id\' => $url . \'#service\', \'serviceType\' => \'Ландшафтный дизайн под ключ\', \'name\' => \'Ландшафтный дизайн в Москве и Московской области\', \'provider\' => array(\'@id\' => $siteUrl . \'/#organization\'), \'areaServed\' => array(\'Москва\', \'Московская область\', \'Красногорск\', \'Одинцово\', \'Истра\'), \'hasOfferCatalog\' => array(\'@type\' => \'OfferCatalog\', \'name\' => \'Цены на ландшафтные работы\', \'itemListElement\' => $offers));

// Меню = их SiteNavigationElement
$graph[] = array(\'@type\' => \'SiteNavigationElement\', \'@id\' => $url . \'#nav\', \'name\' => \'Главное меню\', \'hasPart\' => array(
    array(\'@type\' => \'SiteNavigationElement\', \'name\' => \'Услуги\', \'url\' => $url . \'#vidy\'),
    array(\'@type\' => \'SiteNavigationElement\', \'name\' => \'Цены\', \'url\' => $siteUrl . \'/prices\'),
    array(\'@type\' => \'SiteNavigationElement\', \'name\' => \'Блог\', \'url\' => $siteUrl . \'/blogs\'),
    array(\'@type\' => \'SiteNavigationElement\', \'name\' => \'Отзывы\', \'url\' => $siteUrl . \'/history-company/reviews\')
));

// FAQ из TV vopros
$faqItems = $modx->resource->getTVValue(\'vopros\');
$faqItems = $faqItems ? json_decode($faqItems, true) : array();
$faqMain = array();
if (is_array($faqItems)) {
    foreach ($faqItems as $fq) {
        $q = trim(strip_tags((string)(isset($fq[\'vopr\']) ? $fq[\'vopr\'] : \'\')));
        $a = trim(strip_tags((string)(isset($fq[\'otv\']) ? $fq[\'otv\'] : \'\')));
        if ($q !== \'\' && $a !== \'\') $faqMain[] = array(\'@type\' => \'Question\', \'name\' => $q, \'acceptedAnswer\' => array(\'@type\' => \'Answer\', \'text\' => $a));
    }
}
if (!empty($faqMain)) $graph[] = array(\'@type\' => \'FAQPage\', \'@id\' => $url . \'#faq\', \'mainEntity\' => $faqMain);

return \'<script type="application/ld+json">\' . "\\n" . json_encode(array(\'@context\' => \'https://schema.org\', \'@graph\' => $graph), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . "\\n" . \'</script>\';',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
      'blog_category' => 
      array (
        'fields' => 
        array (
          'id' => 40,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'blog_category',
          'caption' => 'Категория статьи',
          'description' => 'Например: Ландшафтный дизайн, Озеленение, Дренаж',
          'editor_type' => 0,
          'category' => 26,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'minLength' => '',
            'maxLength' => '',
            'regex' => '',
            'regexText' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'blog_tags' => 
      array (
        'fields' => 
        array (
          'id' => 41,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'blog_tags',
          'caption' => 'Теги статьи',
          'description' => 'Через запятую: ландшафт, озеленение, дренаж',
          'editor_type' => 0,
          'category' => 26,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'minLength' => '',
            'maxLength' => '',
            'regex' => '',
            'regexText' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'categoryi' => 
      array (
        'fields' => 
        array (
          'id' => 12,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'listbox-multiple',
          'name' => 'categoryi',
          'caption' => 'Добавить Услугу',
          'description' => '',
          'editor_type' => 0,
          'category' => 16,
          'locked' => false,
          'elements' => '@SELECT `pagetitle` AS `name`,`id` FROM `[[+PREFIX]]site_content` WHERE `published` = 1 AND `deleted` = 0 AND `template` IN (3,2,6)',
          'rank' => 0,
          'display' => 'delim',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'listWidth' => '',
            'title' => '',
            'typeAhead' => 'false',
            'typeAheadDelay' => '250',
            'forceSelection' => 'false',
            'listEmptyText' => '',
            'stackItems' => 'false',
            'preserveSelectionOrder' => 'true',
          ),
          'output_properties' => 
          array (
            'delimiter' => ',',
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'vopros' => 
      array (
        'fields' => 
        array (
          'id' => 16,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'migx',
          'name' => 'vopros',
          'caption' => 'Добавить вопрос',
          'description' => '',
          'editor_type' => 0,
          'category' => 19,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'configs' => 'vopros',
            'formtabs' => '',
            'columns' => '',
            'btntext' => '',
            'previewurl' => '',
            'jsonvarkey' => '',
            'autoResourceFolders' => 'false',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
  ),
);