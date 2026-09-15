<?php  return array (
  'id' => 26,
  'source' => 1,
  'property_preprocess' => 0,
  'templatename' => 'Поиск по сайту',
  'description' => '',
  'editor_type' => 0,
  'category' => 27,
  'icon' => '',
  'template_type' => 0,
  'content' => '<!DOCTYPE html>
<html lang="ru" itemscope itemtype="https://schema.org/WebPage">

<head>
    {include \'meta\'}
    <title>{$_modx->resource.pagetitle} — Дом Оз</title>
    <meta name="description" content="{$_modx->resource.description}">
    {$_modx->resource.codecviz}

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: [\'Inter\', \'sans-serif\'] },
                    colors: {
                        primary: \'#558255\',
                        \'primary-dark\': \'#3d5c3d\',
                        accent: \'#d4a574\',
                        dark: \'#1a1a1a\',
                        light: \'#f8faf8\'
                    }
                }
            }
        }
    </script>

    <!-- Fuse.js для умного поиска -->
    <script src="https://cdn.jsdelivr.net/npm/fuse.js@7/dist/fuse.min.js"></script>

    <style>
        body {
            font-family: \'Inter\', sans-serif;
            background: #fff;
            color: #1a1a1a;
            overflow-x: hidden;
        }

        .reveal {
            opacity: 0;
            transform: translateY(60px);
            transition: all 1s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        .section-title {
            position: relative;
            display: inline-block;
            text-align: left;
        }

        .section-title::after {
            content: \'\';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #558255, #d4a574);
            border-radius: 2px;
        }

        .text-center .section-title::after {
            left: 50%;
            transform: translateX(-50%);
        }

        .hero-slider {
            height: 60vh;
            min-height: 400px;
        }

        .hero-slide {
            position: relative;
            height: 100%;
        }

        .hero-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0.3) 100%);
        }

        .service-card {
            background: #fff;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            height: 100%;
            display: flex;
            flex-direction: column;
            border: 1px solid rgba(85, 130, 85, 0.1);
            position: relative;
        }

        .service-card::before {
            content: \'\';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #558255, #d4a574);
            transform: scaleX(0);
            transition: transform 0.5s ease;
        }

        .service-card:hover::before {
            transform: scaleX(1);
        }

        .service-card:hover {
            transform: translateY(-16px) scale(1.02);
            box-shadow: 0 30px 60px rgba(85, 130, 85, 0.2);
            border-color: rgba(85, 130, 85, 0.3);
        }

        .service-card__image {
            position: relative;
            height: 280px;
            overflow: hidden;
            background: linear-gradient(135deg, #f5f7f6 0%, #e8f0e9 100%);
        }

        .service-card__image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .service-card:hover .service-card__image img {
            transform: scale(1.15) rotate(2deg);
        }

        .service-card__content {
            padding: 28px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            background: #fff;
        }

        .service-card__title {
            font-size: 1.35rem;
            font-weight: 800;
            color: #1a1a1a;
            margin-bottom: 12px;
            line-height: 1.4;
            transition: color 0.3s ease;
        }

        .service-card:hover .service-card__title {
            color: #558255;
        }

        .service-card__desc {
            font-size: 0.95rem;
            color: #6b7280;
            margin-bottom: 24px;
            flex-grow: 1;
            line-height: 1.7;
        }

        .service-card__footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 24px;
            border-top: 2px solid #f3f4f6;
            transition: border-color 0.3s ease;
        }

        .service-card:hover .service-card__footer {
            border-color: #558255;
        }

        .service-card__price {
            font-size: 1.35rem;
            font-weight: 800;
            background: linear-gradient(135deg, #558255 0%, #3d5c3d 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .service-card__btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: #558255;
            font-weight: 700;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            padding: 10px 20px;
            border-radius: 12px;
            background: linear-gradient(135deg, #f0f7f0 0%, #e0efe0 100%);
            border: 2px solid transparent;
        }

        .service-card__btn:hover {
            gap: 14px;
            background: linear-gradient(135deg, #558255 0%, #3d5c3d 100%);
            color: #fff;
            transform: translateX(6px);
            box-shadow: 0 8px 20px rgba(85, 130, 85, 0.3);
        }

        .service-card__btn svg {
            transition: transform 0.3s ease;
        }

        .service-card__btn:hover svg {
            transform: translateX(6px);
        }

        .search-section {
            background: linear-gradient(135deg, #f8faf8 0%, #ffffff 100%);
            border-radius: 32px;
            padding: 40px;
            margin-bottom: 48px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(85, 130, 85, 0.1);
        }

        .search-wrapper {
            position: relative;
            max-width: 700px;
            margin: 0 auto;
        }

        .search-input {
            width: 100%;
            padding: 20px 28px 20px 60px;
            border-radius: 50px;
            border: 2px solid #e5e7eb;
            font-size: 1.1rem;
            font-weight: 500;
            transition: all 0.3s ease;
            background: #fff;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        .search-input:focus {
            outline: none;
            border-color: #558255;
            box-shadow: 0 8px 30px rgba(85, 130, 85, 0.2);
            transform: translateY(-2px);
        }

        .search-icon {
            position: absolute;
            left: 24px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            width: 24px;
            height: 24px;
            transition: color 0.3s ease;
        }

        .search-input:focus+.search-icon {
            color: #558255;
        }

        .results-counter {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-top: 20px;
            padding: 12px 24px;
            background: linear-gradient(135deg, #f0f7f0 0%, #e0efe0 100%);
            border-radius: 50px;
            font-weight: 600;
            color: #558255;
            font-size: 1rem;
            box-shadow: 0 4px 15px rgba(85, 130, 85, 0.15);
            transition: all 0.3s ease;
        }

        .results-counter.hidden {
            opacity: 0;
            transform: translateY(-10px);
            pointer-events: none;
        }

        .results-counter span {
            font-weight: 800;
            font-size: 1.2rem;
            background: linear-gradient(135deg, #558255 0%, #3d5c3d 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .no-results {
            text-align: center;
            padding: 80px 40px;
            background: linear-gradient(135deg, #f8faf8 0%, #ffffff 100%);
            border-radius: 32px;
            border: 2px dashed #d1d5db;
        }

        .no-results-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 24px;
            background: linear-gradient(135deg, #f0f7f0 0%, #e0efe0 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .no-results-icon svg {
            width: 40px;
            height: 40px;
            color: #558255;
        }

        @media (max-width: 768px) {
            .search-section {
                padding: 24px;
            }

            .service-card__image {
                height: 220px;
            }

            .service-card__content {
                padding: 20px;
            }
        }

        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #558255;
            border-radius: 4px;
        }
    </style>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Главная", "item": "https://domozmsk.ru/" },
            { "@type": "ListItem", "position": 2, "name": "Услуги", "item": "https://domozmsk.ru/services" }
        ]
    }
    </script>
</head>

<body class="antialiased" data-excluded-ids="{$_modx->resource.exclude_services|default:\'\'}">

    {include \'header\'}

    <main>

        <!-- HERO SECTION -->
        <section class="relative hero-slider overflow-hidden">
            {if $_modx->resource.services_hero_img}
            <img loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover"
                src="{$_modx->resource.services_hero_img}" alt="Услуги Дом Оз">
            {/if}
            <div class="hero-overlay"></div>

            <div class="absolute inset-0 z-10 flex items-center justify-center">
                <div class="container mx-auto px-4 text-center text-white reveal">
                    <span class="inline-block px-4 py-2 bg-[#558255]/90 text-white text-sm font-bold rounded-full mb-6 backdrop-blur-sm border border-white/20">
                        Поиск по сайту
                    </span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight mb-6 text-shadow">
                        {$_modx->resource.services_hero_title ?: \'Поиск услуг и страниц\'}
                    </h1>
                    <p class="text-lg md:text-xl text-gray-200 max-w-3xl mx-auto leading-relaxed">
                        {$_modx->resource.services_hero_desc ?: \'Полный спектр ландшафтных работ: от проектирования до ухода за садом.\'}
                    </p>
                </div>
            </div>
        </section>

        <!-- ПОИСК -->
        <section class="py-12 bg-white top-0 z-30 shadow-sm">
            <div class="container mx-auto px-4">
                <div class="search-section reveal">
                    <div class="text-center mb-8">
                        <h2 class="text-2xl md:text-3xl font-extrabold text-[#1a1a1a] mb-3">Найдите нужную услугу или страницу</h2>
                        <p class="text-gray-600">Введите название для быстрого поиска</p>
                    </div>

                    <div class="search-wrapper">
                        <input type="text" id="service-search" class="search-input"
                            placeholder="Например: автополив, газон, брусчатка...">
                        <svg class="search-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>

                    <div class="text-center mt-6">
                        <div id="results-counter" class="results-counter hidden">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Найдено: <span id="count">0</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- СЕТКА УСЛУГ -->
        <section class="py-16 bg-[#f8faf8] relative overflow-hidden">
            <div class="absolute inset-0 opacity-30"
                style="background-image: radial-gradient(#558255 1px, transparent 1px); background-size: 30px 30px;">
            </div>

            <div class="container mx-auto px-4 relative z-10">

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="services-grid">

                    {\'pdoResources\' | snippet : [
                    \'parents\'=>\'0\',
                    \'tpl\'=>\'@CODE:
                    <div class="service-item reveal" 
                         data-resource-id="{$id}"
                         data-name="{if empty($menutitle)}{$pagetitle}{else}{$menutitle}{/if}"
                         data-desc="{$_modx->resource.description|default:\\\'\\\'}">
                        <a href="{$the_link}" class="service-card group block">
                            <div class="service-card__image">
                                {if $img_cat}
                                <img loading="lazy" decoding="async" src="{$img_cat | phpthumbon : \\\'w=600&h=400&zc=1\\\'}"
                                    alt="{if empty($menutitle)}{$pagetitle}{else}{$menutitle}{/if}">
                                {else}
                                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-200">
                                    <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                {/if}
                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">{if empty($menutitle)}{$pagetitle}{else}{$menutitle}{/if}</h3>
                                <p class="service-card__desc">{$_modx->resource.description|default:\\\'Профессиональное выполнение работ с гарантией качества и соблюдением всех сроков.\\\'}</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">{$price_cat|default:\\\'от 5 000 ₽\\\'}</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>\',
                    \'limit\'=>\'0\',
                    \'tvPrefix\'=>\'\',
                    \'includeTVs\'=> \'the_link,img_cat,price_cat,link_cat,categoryi\',
                    \'resources\'=>$_modx->resource.categoryi,
                    \'sortby\' => \'menuindex\',
                    \'sortdir\' => \'ASC\'
                    ]}

                </div>

                <div id="no-results" class="no-results hidden">
                    <div class="no-results-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-[#1a1a1a] mb-3">Ничего не найдено</h3>
                    <p class="text-gray-600 mb-6">Попробуйте изменить запрос или посмотреть все услуги.</p>
                    <button id="reset-search"
                        class="px-8 py-3 bg-[#558255] text-white rounded-xl font-bold hover:bg-[#3d5c3d] transition shadow-lg">
                        Показать все услуги
                    </button>
                </div>

            </div>
        </section>

        <!-- ФИНАЛЬНЫЙ CTA -->
        <section class="py-24 bg-[#1a1a1a] text-white relative overflow-hidden">
            <div class="absolute inset-0 opacity-10"
                style="background-image: radial-gradient(#558255 1px, transparent 1px); background-size: 30px 30px;">
            </div>

            <div class="container mx-auto px-4 relative z-10 reveal">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="text-left">
                        <h2 class="text-3xl md:text-4xl font-extrabold mb-6 text-white">
                            {$_modx->resource.services_cta_title ?: \'Не нашли нужную услугу?\'}
                        </h2>
                        <p class="text-lg text-gray-400 mb-8 text-left">
                            {$_modx->resource.services_cta_desc ?: \'Мы выполняем и индивидуальные задачи. Опишите ваш проект — и мы подготовим персональное предложение.\'}
                        </p>

                        <ul class="space-y-4 mb-8 text-left">
                            <li class="flex items-center gap-3">
                                <svg class="w-6 h-6 text-[#558255]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-300">Бесплатная консультация инженера</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-6 h-6 text-[#558255]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-300">Индивидуальный расчет стоимости</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-6 h-6 text-[#558255]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-300">Гарантия на все виды работ</span>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-white p-8 rounded-2xl shadow-2xl text-[#1a1a1a]">
                        {\'FetchIt\'|snippet:[
                        \'snippet\'=>\'FormIt\', \'hooks\'=>\'email\',
                        \'form\'=>\'@INLINE <form method="post" class="space-y-4">
                            <div><label class="block text-sm font-medium text-gray-700 mb-1 text-left">Ваше имя</label><input type="text" name="Имя" placeholder="Иван Иванов" required class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-[#558255] focus:border-transparent outline-none transition"></div>
                            <div><label class="block text-sm font-medium text-gray-700 mb-1 text-left">Телефон</label>
                            <input type="tel" name="Телефон" placeholder="(999) 999-99-99" maxlength="18" inputmode="numeric" autocomplete="tel" data-type-phone class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-[#558255] focus:border-transparent outline-none transition" required>
                            </div>
                            <div><label class="block text-sm font-medium text-gray-700 mb-1 text-left">Интересующая услуга</label><input type="text" name="Сервис" placeholder="Например: автополив" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-[#558255] focus:border-transparent outline-none transition"></div>
                            <input type="hidden" name="Страница" value="{$_modx->config.site_url}{$_modx->resource.uri}">
                            <input type="hidden" name="Название страницы" value="{$_modx->resource.pagetitle}">
                            <button type="submit" class="w-full py-4 bg-[#558255] hover:bg-[#3d5c3d] text-white font-bold rounded-xl transition shadow-md mt-2">Получить предложение</button>
                            <p class="text-xs text-gray-400 text-center mt-4">Нажимая кнопку, вы соглашаетесь с политикой конфиденциальности</p>
                        </form>\',
                        \'emailTo\'=>"{\'email_1\'|config},artemnersisyan777@gmail.com", \'emailSubject\'=>"Запрос услуги со страницы услуг",
                        \'successMessage\'=>\'<div class="w-fit text-center text-white font-bold p-2">Спасибо за обращене, мы скоро свяжемся с вами!</div>\'
                        ]}
                    </div>
                </div>
            </div>
        </section>

        <section class="py-12 bg-[#1a1a1a]"></section>

    </main>

    {include \'footer\'}
    {include \'modal\'}
    {include \'social\'}

    <script src="/assets/bibliotek/jquery/jqwery.js"></script>
    <script src="/assets/js/script.js?v={$_modx->config.cache_version}"></script>

    {ignore}
    <script>
        document.addEventListener(\'DOMContentLoaded\', function () {

            // === Получаем исключённые ID из data-атрибута body ===
            const excludedIdsRaw = document.body.getAttribute(\'data-excluded-ids\') || \'\';
            const excludedIds = excludedIdsRaw.split(\',\').map(id => parseInt(id.trim())).filter(id => !isNaN(id));
            
            console.log(\'Исключённые ID:\', excludedIds);

            // === Инициализация Fuse.js ===
            const allServiceItems = Array.from(document.querySelectorAll(\'.service-item\'));
            
            // Сразу скрываем и удаляем исключённые элементы
            allServiceItems.forEach(item => {
                const resourceId = parseInt(item.getAttribute(\'data-resource-id\'));
                if (excludedIds.includes(resourceId)) {
                    item.style.display = \'none\';
                    item.remove();
                }
            });

            // Получаем оставшиеся элементы
            const serviceItems = Array.from(document.querySelectorAll(\'.service-item\'));
            
            const searchInput = document.getElementById(\'service-search\');
            const resultsCounter = document.getElementById(\'results-counter\');
            const countSpan = document.getElementById(\'count\');
            const noResults = document.getElementById(\'no-results\');
            const grid = document.getElementById(\'services-grid\');
            const resetBtn = document.getElementById(\'reset-search\');

            let fuse = null;

            const searchData = serviceItems.map((item, index) => ({
                id: index,
                resourceId: item.getAttribute(\'data-resource-id\') || \'\',
                name: item.getAttribute(\'data-name\') || \'\',
                desc: item.getAttribute(\'data-desc\') || \'\',
                element: item
            }));

            if (searchData.length > 0) {
                fuse = new Fuse(searchData, {
                    keys: [\'name\', \'desc\'],
                    threshold: 0.4,
                    includeScore: true,
                    minMatchCharLength: 2
                });
            }

            function searchServices() {
                const query = searchInput.value.toLowerCase().trim();
                let visibleCount = 0;

                if (query === \'\') {
                    serviceItems.forEach(item => {
                        item.style.display = \'block\';
                        setTimeout(() => {
                            item.style.opacity = \'1\';
                            item.style.transform = \'scale(1)\';
                        }, 50);
                        visibleCount++;
                    });
                } else {
                    const results = fuse.search(query);
                    const foundIds = results.map(r => r.item.id);

                    serviceItems.forEach((item, index) => {
                        if (foundIds.includes(index)) {
                            item.style.display = \'block\';
                            setTimeout(() => {
                                item.style.opacity = \'1\';
                                item.style.transform = \'scale(1)\';
                            }, 50);
                            visibleCount++;
                        } else {
                            item.style.opacity = \'0\';
                            item.style.transform = \'scale(0.9)\';
                            setTimeout(() => {
                                item.style.display = \'none\';
                            }, 300);
                        }
                    });
                }

                if (visibleCount > 0) {
                    countSpan.textContent = visibleCount;
                    resultsCounter.classList.remove(\'hidden\');
                    noResults.classList.add(\'hidden\');
                    grid.classList.remove(\'opacity-50\');
                } else {
                    resultsCounter.classList.add(\'hidden\');
                    noResults.classList.remove(\'hidden\');
                    grid.classList.add(\'opacity-50\');
                }
            }

            if (searchInput) {
                searchInput.addEventListener(\'input\', searchServices);
            }

            if (resetBtn) {
                resetBtn.addEventListener(\'click\', function () {
                    searchInput.value = \'\';
                    searchServices();
                });
            }

            const reveals = document.querySelectorAll(\'.reveal\');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add(\'active\');
                    }
                });
            }, { threshold: 0.1 });

            reveals.forEach(el => observer.observe(el));

            setTimeout(() => {
                countSpan.textContent = serviceItems.length;
                resultsCounter.classList.remove(\'hidden\');
            }, 500);
        });
    </script>
    {/ignore}
    
    [[$modal_window]]
</body>

</html>',
  'locked' => 0,
  'properties' => 'a:0:{}',
  'static' => 0,
  'static_file' => '',
);