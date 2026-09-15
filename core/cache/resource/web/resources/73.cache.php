<?php if(time() > 1789388984){return null;} return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 73,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Поиск по сайту',
    'longtitle' => 'Наши услуги по благоустройству участка | Дом Оз',
    'description' => 'Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.',
    'alias' => 'glavnaya-uslug',
    'alias_visible' => 1,
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 65,
    'isfolder' => 0,
    'introtext' => 'Мы предлагаем комплексный подход к благоустройству: от создания концепции до регулярного ухода за вашим садом. Каждая услуга выполняется штатными специалистами с использованием профессионального оборудования и материалов. Гарантия качества на все виды работ до 5 лет.',
    'content' => '',
    'richtext' => 1,
    'template' => 26,
    'menuindex' => 7,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1779113468,
    'editedby' => 1,
    'editedon' => 1787411178,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1779113460,
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
    'uri' => 'history-company/glavnaya-uslug',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    'categoryi' => 
    array (
      0 => 'categoryi',
      1 => '',
      2 => 'delim',
      3 => NULL,
      4 => 'listbox-multiple',
    ),
    'services_hero_desc' => 
    array (
      0 => 'services_hero_desc',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'textarea',
    ),
    'services_hero_img' => 
    array (
      0 => 'services_hero_img',
      1 => 'assets/img/part.jpg',
      2 => 'default',
      3 => NULL,
      4 => 'image',
    ),
    'services_intro' => 
    array (
      0 => 'services_intro',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'textarea',
    ),
    'services_filters' => 
    array (
      0 => 'services_filters',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'textarea',
    ),
    'services_cta_title' => 
    array (
      0 => 'services_cta_title',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    'services_cta_desc' => 
    array (
      0 => 'services_cta_desc',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    'exclude_services' => 
    array (
      0 => 'exclude_services',
      1 => '4, 5, 6, 7, 15, 25, 26, 27, 28, 29, 30, 31, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 54, 55, 56, 59, 60, 66, 70, 71, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 89, 90, 91, 92, 93, 94, 95, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 112, 113, 114, 115, 116, 117, 118, 120',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    'the_link' => 
    array (
      0 => 'the_link',
      1 => 'https://domozmsk.ru/history-company/glavnaya-uslug',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    '_content' => '<!DOCTYPE html>
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
    
    <!-- ====================================================================== -->
<!-- МОДАЛЬНОЕ ОКНО С ФОРМОЙ ЗАЯВКИ                                         -->
<!-- ====================================================================== -->
<div id="modal-form" class="custom-modal">
    <div class="custom-modal-overlay"></div>
    <div class="custom-modal-container">
        <button class="custom-modal-close" type="button" aria-label="Закрыть">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M18 6L6 18M6 6l12 12"/>
            </svg>
        </button>
        
        <div class="custom-modal-content">
            {\'FetchIt\'|snippet:[
                \'snippet\'=>\'FormIt\',
                \'hooks\'=>\'email\',
                \'form\'=>\'@INLINE <form id="pom-modal" class="modal-form">
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
            </form>\',
                \'emailTo\'=>"Domoz.77@yandex.ru",
                \'emailSubject\'=>"Заявка с модального окна - {$_modx->resource.pagetitle}",
                \'successMessage\'=>\'<div class="modal-success"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#558255" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg><h3>Спасибо!</h3><p>Мы свяжемся с вами в ближайшее время</p></div>\',
                \'validate\'=>\'af_name:required:minLength=2,af_phone:required,af_email:required:email\'
            ]}
        </div>
    </div>
</div>

<style>
/* ====================================================================== */
/* СТИЛИ МОДАЛЬНОГО ОКНО                                                   */
/* ====================================================================== */
.custom-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease, visibility 0.3s ease;
    padding: 20px;
}

.custom-modal.active {
    opacity: 1;
    visibility: visible;
}

.custom-modal-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    backdrop-filter: blur(5px);
}

.custom-modal-container {
    position: relative;
    background: #fff;
    border-radius: 24px;
    max-width: 500px;
    width: 100%;
    max-height: 90vh;
    overflow-y: auto;
    box-shadow: 0 30px 80px rgba(0, 0, 0, 0.3);
    transform: translateY(30px) scale(0.95);
    transition: transform 0.3s ease;
}

.custom-modal.active .custom-modal-container {
    transform: translateY(0) scale(1);
}

.custom-modal-close {
    position: absolute;
    top: 16px;
    right: 16px;
    width: 40px;
    height: 40px;
    background: #f3f4f6;
    border: none;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    color: #6b7280;
    transition: all 0.2s ease;
    z-index: 10;
}

.custom-modal-close:hover {
    background: #558255;
    color: #fff;
    transform: rotate(90deg);
}

.custom-modal-content {
    padding: 40px;
}

@media (max-width: 640px) {
    .custom-modal-content {
        padding: 30px 20px;
    }
}

/* ====================================================================== */
/* СТИЛИ ФОРМЫ                                                             */
/* ====================================================================== */
.modal-form-header {
    text-align: center;
    margin-bottom: 30px;
}

.modal-form-header h3 {
    font-size: 28px;
    font-weight: 800;
    color: #1a1a1a;
    margin-bottom: 10px;
    line-height: 1.2;
}

.modal-form-header p {
    font-size: 15px;
    color: #6b7280;
    line-height: 1.5;
}

.modal-form-body {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.modal-form-field {
    position: relative;
}

.modal-input {
    width: 100%;
    padding: 14px 18px;
    border: 2px solid #e5e7eb;
    border-radius: 12px;
    font-size: 15px;
    color: #1a1a1a;
    background: #fff;
    transition: all 0.2s ease;
    font-family: inherit;
}

.modal-input:focus {
    outline: none;
    border-color: #558255;
    box-shadow: 0 0 0 4px rgba(85, 130, 85, 0.1);
}

.modal-input::placeholder {
    color: #9ca3af;
}

.error_namemodal {
    display: none;
    color: #ef4444;
    font-size: 12px;
    margin-top: 4px;
}

.modal-form-checkbox {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    margin-top: 4px;
}

.modal-checkbox {
    width: 18px;
    height: 18px;
    margin-top: 2px;
    accent-color: #558255;
    cursor: pointer;
    flex-shrink: 0;
}

.modal-form-checkbox label {
    font-size: 13px;
    color: #6b7280;
    line-height: 1.5;
    cursor: pointer;
}

.modal-form-checkbox label a {
    color: #558255;
    text-decoration: underline;
}

.modal-form-checkbox label a:hover {
    color: #3d5c3d;
}

.modal-submit-btn {
    width: 100%;
    padding: 16px 24px;
    background: linear-gradient(135deg, #558255 0%, #3d5c3d 100%);
    color: #fff;
    border: none;
    border-radius: 12px;
    font-size: 16px;
    font-weight: 700;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    transition: all 0.3s ease;
    margin-top: 8px;
    box-shadow: 0 8px 20px rgba(85, 130, 85, 0.3);
    font-family: inherit;
}

.modal-submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 28px rgba(85, 130, 85, 0.4);
}

.modal-submit-btn:active {
    transform: translateY(0);
}

.modal-submit-btn svg {
    transition: transform 0.3s ease;
}

.modal-submit-btn:hover svg {
    transform: translateX(4px);
}

/* Сообщение об успехе */
.modal-success {
    text-align: center;
    padding: 30px 20px;
}

.modal-success svg {
    margin: 0 auto 20px;
    display: block;
}

.modal-success h3 {
    font-size: 24px;
    font-weight: 800;
    color: #1a1a1a;
    margin-bottom: 10px;
}

.modal-success p {
    font-size: 15px;
    color: #6b7280;
}

/* Блокировка скролла при открытом модальном окне */
body.modal-open {
    overflow: hidden;
}
</style>

{ignore}
<script>
document.addEventListener(\'DOMContentLoaded\', function() {
    
    const modal = document.getElementById(\'modal-form\');
    const closeBtn = modal.querySelector(\'.custom-modal-close\');
    const overlay = modal.querySelector(\'.custom-modal-overlay\');
    
    if (!modal) {
        console.error(\'❌ Модальное окно не найдено!\');
        return;
    }
    
    // === Открытие модального окна ===
    function openModal() {
        modal.classList.add(\'active\');
        document.body.classList.add(\'modal-open\');
        console.log(\'Модальное окно открыто\');
    }
    
    // === Закрытие модального окна ===
    function closeModal() {
        modal.classList.remove(\'active\');
        document.body.classList.remove(\'modal-open\');
        console.log(\'Модальное окно закрыто\');
    }
    
    // === Обработчик клика на кнопки с классом modal_window ===
    document.addEventListener(\'click\', function(e) {
        const trigger = e.target.closest(\'.modal_window\');
        if (trigger) {
            e.preventDefault();
            e.stopPropagation();
            openModal();
        }
    });
    
    // === Закрытие по кнопке X ===
    if (closeBtn) {
        closeBtn.addEventListener(\'click\', closeModal);
    }
    
    // === Закрытие по клику на overlay ===
    if (overlay) {
        overlay.addEventListener(\'click\', closeModal);
    }
    
    // === Закрытие по Escape ===
    document.addEventListener(\'keydown\', function(e) {
        if (e.key === \'Escape\' && modal.classList.contains(\'active\')) {
            closeModal();
        }
    });
    
    console.log(\'Скрипт модального окна загружен\');
});
</script>
<style>
    .iti__selected-dial-code {
        color: #000;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@27.1.3/dist/js/intlTelInputWithUtils.min.js" defer></script>

<script defer>
document.addEventListener(\'DOMContentLoaded\', function () {

    document.querySelectorAll("[data-type-phone]").forEach(function(input) {
        window.intlTelInput(input, {
            initialCountry: "ru",
            separateDialCode: true,
            formatAsYouType: true,
        });
    });

    document.querySelectorAll(\'input[data-type-phone]\').forEach(function (input) {

        input.addEventListener(\'input\', function (e) {

            let value = e.target.value.replace(/\\D/g, \'\');

            if (e.target.value.includes(\'+7\')) {
                value = \'9\' + value.substring(1);
            } else if (
                value.length > 0 &&
                (
                    value[0] === \'8\' ||
                    (value[0] >= \'0\' && value[0] <= \'6\') ||
                    value[0] === \'9\'
                )
            ) {
                value = \'9\' + value.substring(1);
            }

            // Максимум 10 цифр
            value = value.substring(0, 10);

            if (value.length > 0) {

                let formatted = \'\';

                if (value.length >= 1) formatted += \'(\' + value.substring(0, 3);
                if (value.length >= 4) formatted += \') \' + value.substring(3, 6);
                if (value.length >= 7) formatted += \'-\' + value.substring(6, 8);
                if (value.length >= 9) formatted += \'-\' + value.substring(8, 10);

                e.target.value = formatted;

            } else {
                e.target.value = \'\';
            }

            // Сбрасываем ошибку при вводе
            e.target.setCustomValidity(\'\');
        });

        // Проверка после выхода из поля
        input.addEventListener(\'blur\', function () {

            const digits = this.value.replace(/\\D/g, \'\');

            if (digits.length !== 10) {
                this.setCustomValidity(\'Введите полный номер телефона\');
            } else if (!/^9\\d{9}$/.test(digits)) {
                this.setCustomValidity(\'Введите корректный мобильный номер\');
            } else {
                this.setCustomValidity(\'\');
            }

        });

    });

    // Проверка при отправке формы
    document.querySelectorAll(\'form\').forEach(function(form){

        form.addEventListener(\'submit\', function(e){

            const phone = form.querySelector(\'[data-type-phone]\');
            if (!phone) return;

            const digits = phone.value.replace(/\\D/g, \'\');

            if (digits.length !== 10 || !/^9\\d{9}$/.test(digits)) {
                e.preventDefault();
                phone.setCustomValidity(\'Введите полный корректный номер телефона\');
                phone.reportValidity();
                phone.focus();
            }

        });

    });

});
</script>
<script>
document.addEventListener(\'fetchit:success\', function () {
    ym(108461808, \'reachGoal\', \'FORM_SEND\');
});
</script>
{/ignore}
</body>

</html>',
    '_isForward' => false,
    '_jscripts' => 
    array (
      0 => '<script>window.addEventListener(\'DOMContentLoaded\', () => FetchIt.create({"action":"881d46ecc5309fa14f1541c9b8ff8998","assetsUrl":"\\/assets\\/components\\/fetchit\\/","actionUrl":"\\/assets\\/components\\/fetchit\\/action.php","inputInvalidClass":"is-invalid","customInvalidClass":"","clearFieldsOnSuccess":true,"defaultNotifier":true,"pageId":73}));</script>',
      1 => '<script>window.addEventListener(\'DOMContentLoaded\', () => FetchIt.create({"action":"5b4338599cb530c4f36ba76d3d9ca4ab","assetsUrl":"\\/assets\\/components\\/fetchit\\/","actionUrl":"\\/assets\\/components\\/fetchit\\/action.php","inputInvalidClass":"is-invalid","customInvalidClass":"","clearFieldsOnSuccess":true,"defaultNotifier":true,"pageId":73}));</script>',
      2 => '<script>window.addEventListener(\'DOMContentLoaded\', () => FetchIt.create({"action":"ca170f8602715cd4acf787613d0a0353","assetsUrl":"\\/assets\\/components\\/fetchit\\/","actionUrl":"\\/assets\\/components\\/fetchit\\/action.php","inputInvalidClass":"is-invalid","customInvalidClass":"","clearFieldsOnSuccess":true,"defaultNotifier":true,"pageId":73}));</script>',
    ),
    '_loadedjscripts' => 
    array (
      '<script>window.addEventListener(\'DOMContentLoaded\', () => FetchIt.create({"action":"881d46ecc5309fa14f1541c9b8ff8998","assetsUrl":"\\/assets\\/components\\/fetchit\\/","actionUrl":"\\/assets\\/components\\/fetchit\\/action.php","inputInvalidClass":"is-invalid","customInvalidClass":"","clearFieldsOnSuccess":true,"defaultNotifier":true,"pageId":73}));</script>' => true,
      '<script>window.addEventListener(\'DOMContentLoaded\', () => FetchIt.create({"action":"5b4338599cb530c4f36ba76d3d9ca4ab","assetsUrl":"\\/assets\\/components\\/fetchit\\/","actionUrl":"\\/assets\\/components\\/fetchit\\/action.php","inputInvalidClass":"is-invalid","customInvalidClass":"","clearFieldsOnSuccess":true,"defaultNotifier":true,"pageId":73}));</script>' => true,
      '<script>window.addEventListener(\'DOMContentLoaded\', () => FetchIt.create({"action":"ca170f8602715cd4acf787613d0a0353","assetsUrl":"\\/assets\\/components\\/fetchit\\/","actionUrl":"\\/assets\\/components\\/fetchit\\/action.php","inputInvalidClass":"is-invalid","customInvalidClass":"","clearFieldsOnSuccess":true,"defaultNotifier":true,"pageId":73}));</script>' => true,
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
    '[[$phoneFormat]]' => '<style>
    .iti__selected-dial-code {
        color: #000;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@27.1.3/dist/js/intlTelInputWithUtils.min.js" defer></script>

<script defer>
document.addEventListener(\'DOMContentLoaded\', function () {

    document.querySelectorAll("[data-type-phone]").forEach(function(input) {
        window.intlTelInput(input, {
            initialCountry: "ru",
            separateDialCode: true,
            formatAsYouType: true,
        });
    });

    document.querySelectorAll(\'input[data-type-phone]\').forEach(function (input) {

        input.addEventListener(\'input\', function (e) {

            let value = e.target.value.replace(/\\D/g, \'\');

            if (e.target.value.includes(\'+7\')) {
                value = \'9\' + value.substring(1);
            } else if (
                value.length > 0 &&
                (
                    value[0] === \'8\' ||
                    (value[0] >= \'0\' && value[0] <= \'6\') ||
                    value[0] === \'9\'
                )
            ) {
                value = \'9\' + value.substring(1);
            }

            // Максимум 10 цифр
            value = value.substring(0, 10);

            if (value.length > 0) {

                let formatted = \'\';

                if (value.length >= 1) formatted += \'(\' + value.substring(0, 3);
                if (value.length >= 4) formatted += \') \' + value.substring(3, 6);
                if (value.length >= 7) formatted += \'-\' + value.substring(6, 8);
                if (value.length >= 9) formatted += \'-\' + value.substring(8, 10);

                e.target.value = formatted;

            } else {
                e.target.value = \'\';
            }

            // Сбрасываем ошибку при вводе
            e.target.setCustomValidity(\'\');
        });

        // Проверка после выхода из поля
        input.addEventListener(\'blur\', function () {

            const digits = this.value.replace(/\\D/g, \'\');

            if (digits.length !== 10) {
                this.setCustomValidity(\'Введите полный номер телефона\');
            } else if (!/^9\\d{9}$/.test(digits)) {
                this.setCustomValidity(\'Введите корректный мобильный номер\');
            } else {
                this.setCustomValidity(\'\');
            }

        });

    });

    // Проверка при отправке формы
    document.querySelectorAll(\'form\').forEach(function(form){

        form.addEventListener(\'submit\', function(e){

            const phone = form.querySelector(\'[data-type-phone]\');
            if (!phone) return;

            const digits = phone.value.replace(/\\D/g, \'\');

            if (digits.length !== 10 || !/^9\\d{9}$/.test(digits)) {
                e.preventDefault();
                phone.setCustomValidity(\'Введите полный корректный номер телефона\');
                phone.reportValidity();
                phone.focus();
            }

        });

    });

});
</script>',
    '[[$modal_window]]' => '<!-- ====================================================================== -->
<!-- МОДАЛЬНОЕ ОКНО С ФОРМОЙ ЗАЯВКИ                                         -->
<!-- ====================================================================== -->
<div id="modal-form" class="custom-modal">
    <div class="custom-modal-overlay"></div>
    <div class="custom-modal-container">
        <button class="custom-modal-close" type="button" aria-label="Закрыть">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M18 6L6 18M6 6l12 12"/>
            </svg>
        </button>
        
        <div class="custom-modal-content">
            {\'FetchIt\'|snippet:[
                \'snippet\'=>\'FormIt\',
                \'hooks\'=>\'email\',
                \'form\'=>\'@INLINE <form id="pom-modal" class="modal-form">
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
            </form>\',
                \'emailTo\'=>"Domoz.77@yandex.ru",
                \'emailSubject\'=>"Заявка с модального окна - {$_modx->resource.pagetitle}",
                \'successMessage\'=>\'<div class="modal-success"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#558255" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg><h3>Спасибо!</h3><p>Мы свяжемся с вами в ближайшее время</p></div>\',
                \'validate\'=>\'af_name:required:minLength=2,af_phone:required,af_email:required:email\'
            ]}
        </div>
    </div>
</div>

<style>
/* ====================================================================== */
/* СТИЛИ МОДАЛЬНОГО ОКНО                                                   */
/* ====================================================================== */
.custom-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease, visibility 0.3s ease;
    padding: 20px;
}

.custom-modal.active {
    opacity: 1;
    visibility: visible;
}

.custom-modal-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    backdrop-filter: blur(5px);
}

.custom-modal-container {
    position: relative;
    background: #fff;
    border-radius: 24px;
    max-width: 500px;
    width: 100%;
    max-height: 90vh;
    overflow-y: auto;
    box-shadow: 0 30px 80px rgba(0, 0, 0, 0.3);
    transform: translateY(30px) scale(0.95);
    transition: transform 0.3s ease;
}

.custom-modal.active .custom-modal-container {
    transform: translateY(0) scale(1);
}

.custom-modal-close {
    position: absolute;
    top: 16px;
    right: 16px;
    width: 40px;
    height: 40px;
    background: #f3f4f6;
    border: none;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    color: #6b7280;
    transition: all 0.2s ease;
    z-index: 10;
}

.custom-modal-close:hover {
    background: #558255;
    color: #fff;
    transform: rotate(90deg);
}

.custom-modal-content {
    padding: 40px;
}

@media (max-width: 640px) {
    .custom-modal-content {
        padding: 30px 20px;
    }
}

/* ====================================================================== */
/* СТИЛИ ФОРМЫ                                                             */
/* ====================================================================== */
.modal-form-header {
    text-align: center;
    margin-bottom: 30px;
}

.modal-form-header h3 {
    font-size: 28px;
    font-weight: 800;
    color: #1a1a1a;
    margin-bottom: 10px;
    line-height: 1.2;
}

.modal-form-header p {
    font-size: 15px;
    color: #6b7280;
    line-height: 1.5;
}

.modal-form-body {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.modal-form-field {
    position: relative;
}

.modal-input {
    width: 100%;
    padding: 14px 18px;
    border: 2px solid #e5e7eb;
    border-radius: 12px;
    font-size: 15px;
    color: #1a1a1a;
    background: #fff;
    transition: all 0.2s ease;
    font-family: inherit;
}

.modal-input:focus {
    outline: none;
    border-color: #558255;
    box-shadow: 0 0 0 4px rgba(85, 130, 85, 0.1);
}

.modal-input::placeholder {
    color: #9ca3af;
}

.error_namemodal {
    display: none;
    color: #ef4444;
    font-size: 12px;
    margin-top: 4px;
}

.modal-form-checkbox {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    margin-top: 4px;
}

.modal-checkbox {
    width: 18px;
    height: 18px;
    margin-top: 2px;
    accent-color: #558255;
    cursor: pointer;
    flex-shrink: 0;
}

.modal-form-checkbox label {
    font-size: 13px;
    color: #6b7280;
    line-height: 1.5;
    cursor: pointer;
}

.modal-form-checkbox label a {
    color: #558255;
    text-decoration: underline;
}

.modal-form-checkbox label a:hover {
    color: #3d5c3d;
}

.modal-submit-btn {
    width: 100%;
    padding: 16px 24px;
    background: linear-gradient(135deg, #558255 0%, #3d5c3d 100%);
    color: #fff;
    border: none;
    border-radius: 12px;
    font-size: 16px;
    font-weight: 700;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    transition: all 0.3s ease;
    margin-top: 8px;
    box-shadow: 0 8px 20px rgba(85, 130, 85, 0.3);
    font-family: inherit;
}

.modal-submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 28px rgba(85, 130, 85, 0.4);
}

.modal-submit-btn:active {
    transform: translateY(0);
}

.modal-submit-btn svg {
    transition: transform 0.3s ease;
}

.modal-submit-btn:hover svg {
    transform: translateX(4px);
}

/* Сообщение об успехе */
.modal-success {
    text-align: center;
    padding: 30px 20px;
}

.modal-success svg {
    margin: 0 auto 20px;
    display: block;
}

.modal-success h3 {
    font-size: 24px;
    font-weight: 800;
    color: #1a1a1a;
    margin-bottom: 10px;
}

.modal-success p {
    font-size: 15px;
    color: #6b7280;
}

/* Блокировка скролла при открытом модальном окне */
body.modal-open {
    overflow: hidden;
}
</style>

{ignore}
<script>
document.addEventListener(\'DOMContentLoaded\', function() {
    
    const modal = document.getElementById(\'modal-form\');
    const closeBtn = modal.querySelector(\'.custom-modal-close\');
    const overlay = modal.querySelector(\'.custom-modal-overlay\');
    
    if (!modal) {
        console.error(\'❌ Модальное окно не найдено!\');
        return;
    }
    
    // === Открытие модального окна ===
    function openModal() {
        modal.classList.add(\'active\');
        document.body.classList.add(\'modal-open\');
        console.log(\'Модальное окно открыто\');
    }
    
    // === Закрытие модального окна ===
    function closeModal() {
        modal.classList.remove(\'active\');
        document.body.classList.remove(\'modal-open\');
        console.log(\'Модальное окно закрыто\');
    }
    
    // === Обработчик клика на кнопки с классом modal_window ===
    document.addEventListener(\'click\', function(e) {
        const trigger = e.target.closest(\'.modal_window\');
        if (trigger) {
            e.preventDefault();
            e.stopPropagation();
            openModal();
        }
    });
    
    // === Закрытие по кнопке X ===
    if (closeBtn) {
        closeBtn.addEventListener(\'click\', closeModal);
    }
    
    // === Закрытие по клику на overlay ===
    if (overlay) {
        overlay.addEventListener(\'click\', closeModal);
    }
    
    // === Закрытие по Escape ===
    document.addEventListener(\'keydown\', function(e) {
        if (e.key === \'Escape\' && modal.classList.contains(\'active\')) {
            closeModal();
        }
    });
    
    console.log(\'Скрипт модального окна загружен\');
});
</script>
<style>
    .iti__selected-dial-code {
        color: #000;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@27.1.3/dist/js/intlTelInputWithUtils.min.js" defer></script>

<script defer>
document.addEventListener(\'DOMContentLoaded\', function () {

    document.querySelectorAll("[data-type-phone]").forEach(function(input) {
        window.intlTelInput(input, {
            initialCountry: "ru",
            separateDialCode: true,
            formatAsYouType: true,
        });
    });

    document.querySelectorAll(\'input[data-type-phone]\').forEach(function (input) {

        input.addEventListener(\'input\', function (e) {

            let value = e.target.value.replace(/\\D/g, \'\');

            if (e.target.value.includes(\'+7\')) {
                value = \'9\' + value.substring(1);
            } else if (
                value.length > 0 &&
                (
                    value[0] === \'8\' ||
                    (value[0] >= \'0\' && value[0] <= \'6\') ||
                    value[0] === \'9\'
                )
            ) {
                value = \'9\' + value.substring(1);
            }

            // Максимум 10 цифр
            value = value.substring(0, 10);

            if (value.length > 0) {

                let formatted = \'\';

                if (value.length >= 1) formatted += \'(\' + value.substring(0, 3);
                if (value.length >= 4) formatted += \') \' + value.substring(3, 6);
                if (value.length >= 7) formatted += \'-\' + value.substring(6, 8);
                if (value.length >= 9) formatted += \'-\' + value.substring(8, 10);

                e.target.value = formatted;

            } else {
                e.target.value = \'\';
            }

            // Сбрасываем ошибку при вводе
            e.target.setCustomValidity(\'\');
        });

        // Проверка после выхода из поля
        input.addEventListener(\'blur\', function () {

            const digits = this.value.replace(/\\D/g, \'\');

            if (digits.length !== 10) {
                this.setCustomValidity(\'Введите полный номер телефона\');
            } else if (!/^9\\d{9}$/.test(digits)) {
                this.setCustomValidity(\'Введите корректный мобильный номер\');
            } else {
                this.setCustomValidity(\'\');
            }

        });

    });

    // Проверка при отправке формы
    document.querySelectorAll(\'form\').forEach(function(form){

        form.addEventListener(\'submit\', function(e){

            const phone = form.querySelector(\'[data-type-phone]\');
            if (!phone) return;

            const digits = phone.value.replace(/\\D/g, \'\');

            if (digits.length !== 10 || !/^9\\d{9}$/.test(digits)) {
                e.preventDefault();
                phone.setCustomValidity(\'Введите полный корректный номер телефона\');
                phone.reportValidity();
                phone.focus();
            }

        });

    });

});
</script>
<script>
document.addEventListener(\'fetchit:success\', function () {
    ym(108461808, \'reachGoal\', \'FORM_SEND\');
});
</script>
{/ignore}',
    '[[phpthumbon?input=`assets/img/фотки_проектирование_ландшафтного_дизайна/Проект Цветочный берега-изображения-3 (2).jpg`&options=`w=600&h=400&zc=1`&pdoTools=`ec9ba3c644a1af4c161a9a8447dc1438`]]' => '/assets/cache_image/assets/img/фотки_проектирование_ландшафтного_дизайна/Проект Цветочный берега-изображения-3 (2)_600x400_71b.jpg',
    '[[phpthumbon?input=`/assets/img/uslugi/noroot.png`&options=`w=600&h=400&zc=1`&pdoTools=`7a360cac4534b13663a4ed38835e20cd`]]' => '/assets/cache_image/assets/img/uslugi/noroot_600x400_fa5.png',
    '[[phpthumbon?input=`/assets/img/uslugi/avtopoliv/norootfg.png`&options=`w=600&h=400&zc=1`&pdoTools=`3c4e1f7dc493a32fcb6b45b8610d1305`]]' => '/assets/cache_image/assets/img/uslugi/avtopoliv/norootfg_600x400_fa5.png',
    '[[phpthumbon?input=`/assets/img/uslugi/avtopoliv/noroot5.png`&options=`w=600&h=400&zc=1`&pdoTools=`2e30da034d989c8d220cd75a54ede587`]]' => '/assets/cache_image/assets/img/uslugi/avtopoliv/noroot5_600x400_fa5.png',
    '[[phpthumbon?input=`/assets/img/uslugi/avtopoliv/noroot45.png`&options=`w=600&h=400&zc=1`&pdoTools=`6b01dc65263ef540977b71a3fa41f133`]]' => '/assets/cache_image/assets/img/uslugi/avtopoliv/noroot45_600x400_fa5.png',
    '[[phpthumbon?input=`/assets/img/uslugi/avtopoliv/noroot66.png`&options=`w=600&h=400&zc=1`&pdoTools=`abd157088b409e403db713ca72f29a3a`]]' => '/assets/cache_image/assets/img/uslugi/avtopoliv/noroot66_600x400_fa5.png',
    '[[phpthumbon?input=`/assets/img/uslugi/avtopoliv/noroot8.png`&options=`w=600&h=400&zc=1`&pdoTools=`f9df73cf03e0a54fe193625592b39761`]]' => '/assets/cache_image/assets/img/uslugi/avtopoliv/noroot8_600x400_fa5.png',
    '[[phpthumbon?input=`assets/img/gelery/landscape-design-project/верт план 8.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`b3ae31727b9b165c2c226844a737ad62`]]' => '/assets/cache_image/assets/img/gelery/landscape-design-project/верт план 8_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/gelery/landscape-design-project/план покр 4.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`ba4140a115f48e86de8a31c9648c9349`]]' => '/assets/cache_image/assets/img/gelery/landscape-design-project/план покр 4_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/gelery/landscape-design-project/проектир зу 10.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`08df26a70348bb2b03139e4b1d484fbe`]]' => '/assets/cache_image/assets/img/gelery/landscape-design-project/проектир зу 10_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/gelery/landscape-design-project/сх полива6.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`bd4694c69e7161604601b578a3ad04db`]]' => '/assets/cache_image/assets/img/gelery/landscape-design-project/сх полива6_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фотки_проектирование_подсветки/Копия Одинцово_28 - Фото.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`2b9ce93ecc64335aee8aa29a68f878a7`]]' => '/assets/cache_image/assets/img/фотки_проектирование_подсветки/Копия Одинцово_28 - Фото_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фотки_проектирование_ландшафтного_дизайна/пд.JPG`&options=`w=600&h=400&zc=1`&pdoTools=`f1a34ed1194c0d50a067d23b745db3d6`]]' => '/assets/cache_image/assets/img/фотки_проектирование_ландшафтного_дизайна/пд_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/gelery/landscape-design-project/разбивочный7.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`403587e64b6000696e9a3de3bbb329a0`]]' => '/assets/cache_image/assets/img/gelery/landscape-design-project/разбивочный7_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фото_мощение/016.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`b31e938c6c981d426aaa25cad96d8946`]]' => '/assets/cache_image/assets/img/фото_мощение/016_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фото_натуральный_камень/background.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`a62ef77e6017cb925664fd932e2a1a56`]]' => '/assets/cache_image/assets/img/фото_натуральный_камень/background_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фото_гранитная_брусчатка/background.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`d9e4e14087be30b7d1e9d3ab292c8a8f`]]' => '/assets/cache_image/assets/img/фото_гранитная_брусчатка/background_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фото_каменный_ковёр/background.png`&options=`w=600&h=400&zc=1`&pdoTools=`9a950ffbabd304957a106f07e39d05ca`]]' => '/assets/cache_image/assets/img/фото_каменный_ковёр/background_600x400_fa5.png',
    '[[phpthumbon?input=`assets/img/uslugi/mosh/fer4.png`&options=`w=600&h=400&zc=1`&pdoTools=`c0a4f52efcdb5df915677febbdf950a6`]]' => '/assets/cache_image/assets/img/uslugi/mosh/fer4_600x400_fa5.png',
    '[[phpthumbon?input=`assets/img/uslugi/photo_5211024979644847859_y.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`6d1806d6678adf6e293adb6d6d3203b0`]]' => '/assets/cache_image/assets/img/uslugi/photo_5211024979644847859_y_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/blog/1/1.webp`&options=`w=600&h=400&zc=1`&pdoTools=`de6f1625923a5700b2c0365935cddc92`]]' => '/assets/cache_image/assets/img/blog/1/1_600x400_f6d.jpeg',
    '[[phpthumbon?input=`assets/img/фото_уход_за_садом/фотки/06.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`300968e34e4f3acbad87f7d713b7c690`]]' => '/assets/cache_image/assets/img/фото_уход_за_садом/фотки/06_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фото_подпорные_стенки/фотки/03.png`&options=`w=600&h=400&zc=1`&pdoTools=`aa4eb8d0a823610329888eeb17ad8efa`]]' => '/assets/cache_image/assets/img/фото_подпорные_стенки/фотки/03_600x400_fa5.png',
    '[[phpthumbon?input=`assets/img/фото_топографическая_съемка/фотки/04.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`ddfe434037cda311a5714767f2d4b34c`]]' => '/assets/cache_image/assets/img/фото_топографическая_съемка/фотки/04_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фото_асфальтирование/фотки/011.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`87148a3399de315a0a6de3797249845f`]]' => '/assets/cache_image/assets/img/фото_асфальтирование/фотки/011_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фотки_резиновое_покрытие/фотки/istockphoto-1554930780-1024x1024.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`e95fa6c0ab46a6bcfae6de11764d09a6`]]' => '/assets/cache_image/assets/img/фотки_резиновое_покрытие/фотки/istockphoto-1554930780-1024x1024_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фотки_Монтаж_ограждений/фотки/сз.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`887ff5c212c56ddb45effeef7f5c9328`]]' => '/assets/cache_image/assets/img/фотки_Монтаж_ограждений/фотки/сз_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фотки_проектирование_подсветки/фотки/пвпап.jpeg`&options=`w=600&h=400&zc=1`&pdoTools=`05f23b5fed2407d120bd3db5abc1e9a5`]]' => '/assets/cache_image/assets/img/фотки_проектирование_подсветки/фотки/пвпап_600x400_f6d.jpeg',
    '[[phpthumbon?input=`assets/img/фотки_монтаж_маф/фотки/istockphoto-175589195-1024x1024.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`807e1999c75f839591a24aff33fc69fe`]]' => '/assets/cache_image/assets/img/фотки_монтаж_маф/фотки/istockphoto-175589195-1024x1024_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фотки_Посадка и пересадка растений/фотки/Копия IMG_0819.JPG`&options=`w=600&h=400&zc=1`&pdoTools=`44d884ee0d0d267e839dc9f0406a8187`]]' => '/assets/cache_image/assets/img/фотки_Посадка и пересадка растений/фотки/Копия IMG_0819_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фотки_благоустройство и озеленение/фотки/07.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`056c5d7e39da732ecf6a4a05f646288c`]]' => '/assets/cache_image/assets/img/фотки_благоустройство и озеленение/фотки/07_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фотки_благоустройство и озеленение/го.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`2fae769560509bf097857d5fcf145abb`]]' => '/assets/cache_image/assets/img/фотки_благоустройство и озеленение/го_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фото_газон/фотки/07.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`8c857228f2f1d177ab8fca4e6aa712b7`]]' => '/assets/cache_image/assets/img/фото_газон/фотки/07_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/uslugi/photo_5309866281794657692_y.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`ce3da48e0523a731b282da4f1e717761`]]' => '/assets/cache_image/assets/img/uslugi/photo_5309866281794657692_y_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/о нас/члены/просто фотки/image-30-04-26-01-00.png`&options=`w=600&h=400&zc=1`&pdoTools=`7e97699ae3376e62ba917206a63b7944`]]' => '/assets/cache_image/assets/img/о нас/члены/просто фотки/image-30-04-26-01-00_600x400_fa5.png',
    '[[phpthumbon?input=`assets/img/фото_уход_за_садом/фотки/07.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`1212ecf50f4dd90b5cb239ad84c51991`]]' => '/assets/cache_image/assets/img/фото_уход_за_садом/фотки/07_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фото_подпорные_стенки/фотки/01.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`e699d2bbd8b87f18ca4c7068125bcc2c`]]' => '/assets/cache_image/assets/img/фото_подпорные_стенки/фотки/01_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фото_топографическая_съемка/фотки/01.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`0a7fe8956eb743c2e9e20cd2a4f81985`]]' => '/assets/cache_image/assets/img/фото_топографическая_съемка/фотки/01_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фото_асфальтирование/фотки/09.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`02fca290ec3e6af7723182b863c6b6ab`]]' => '/assets/cache_image/assets/img/фото_асфальтирование/фотки/09_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фотки_резиновое_покрытие/фотки/dominikmoser-plastic-track-1601469_1920.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`ec111fa80f6881eef6e3dcf12aeb60e5`]]' => '/assets/cache_image/assets/img/фотки_резиновое_покрытие/фотки/dominikmoser-plastic-track-1601469_1920_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фотки_Монтаж_ограждений/фотки/нз.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`7066902a666018ded365f391919c109f`]]' => '/assets/cache_image/assets/img/фотки_Монтаж_ограждений/фотки/нз_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фотки_проектирование_подсветки/фотки/photo_5435873518387138700_y.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`10050d4d516523fffb34276d0f02f266`]]' => '/assets/cache_image/assets/img/фотки_проектирование_подсветки/фотки/photo_5435873518387138700_y_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фотки_монтаж_маф/фотки/IMG_20250807_144641.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`5f8247f0e1187d4b1f21e49d36f4b10c`]]' => '/assets/cache_image/assets/img/фотки_монтаж_маф/фотки/IMG_20250807_144641_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фотки_Посадка и пересадка растений/фотки/photo_2026-06-03_10-17-26.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`d0d2baf0fe26af4bb3c39ebc738df55a`]]' => '/assets/cache_image/assets/img/фотки_Посадка и пересадка растений/фотки/photo_2026-06-03_10-17-26_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фотки_благоустройство и озеленение/фотки/014.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`cc217c3ba620c627caf52b76989fc2be`]]' => '/assets/cache_image/assets/img/фотки_благоустройство и озеленение/фотки/014_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/gelery/landscape-design-project/дендроплан2.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`36b5e39040cfe826543011003ac81c95`]]' => '/assets/cache_image/assets/img/gelery/landscape-design-project/дендроплан2_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/uslugi/gazon/ukl.png`&options=`w=600&h=400&zc=1`&pdoTools=`94a2c135b2096d62d947b4d86d187425`]]' => '/assets/cache_image/assets/img/uslugi/gazon/ukl_600x400_fa5.png',
    '[[phpthumbon?input=`assets/img/uslugi/471f55d9-6bb2-4bc5-8e39-836de5f4897d.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`b72afdb351aecb798e2c3234e9a61534`]]' => '/assets/cache_image/assets/img/uslugi/471f55d9-6bb2-4bc5-8e39-836de5f4897d_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/blog/Альтернативы классическому газону/couleur-flowers-6206279_1920.webp`&options=`w=600&h=400&zc=1`&pdoTools=`9e5f3edcd954269e93e70e3d714adfa8`]]' => '/assets/cache_image/assets/img/blog/Альтернативы классическому газону/couleur-flowers-6206279_1920_600x400_f6d.jpeg',
    '[[phpthumbon?input=`assets/img/о нас/backgorund.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`c6f8bad12580b7dafa1eb4fb0f191050`]]' => '/assets/cache_image/assets/img/о нас/backgorund_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фото_уход_за_садом/фотки/019.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`7ef0b484af90e030db2d80f89ba5f3c2`]]' => '/assets/cache_image/assets/img/фото_уход_за_садом/фотки/019_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фото_топографическая_съемка/фотки/03.png`&options=`w=600&h=400&zc=1`&pdoTools=`ac9ea90054308c8a7e9bda79b9a2b78d`]]' => '/assets/cache_image/assets/img/фото_топографическая_съемка/фотки/03_600x400_fa5.png',
    '[[phpthumbon?input=`assets/img/фото_асфальтирование/фотки/010.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`22ecca833596edd4ed4414496bbe8381`]]' => '/assets/cache_image/assets/img/фото_асфальтирование/фотки/010_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фотки_резиновое_покрытие/фотки/istockphoto-2187161036-1024x1024.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`7d4e1836c9f667e745f8056b497c923d`]]' => '/assets/cache_image/assets/img/фотки_резиновое_покрытие/фотки/istockphoto-2187161036-1024x1024_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фотки_Монтаж_ограждений/фотки/зж.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`07edb7a5085ede1402533b3c7c0dc6ac`]]' => '/assets/cache_image/assets/img/фотки_Монтаж_ограждений/фотки/зж_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фотки_проектирование_подсветки/фотки/istockphoto-2238030582-1024x1024.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`28a8af3ae529ba3dabc7987abe628b0b`]]' => '/assets/cache_image/assets/img/фотки_проектирование_подсветки/фотки/istockphoto-2238030582-1024x1024_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фотки_монтаж_маф/фотки/1737983721426.jpeg`&options=`w=600&h=400&zc=1`&pdoTools=`448f72ded9d791ba2041d9f48d79da1e`]]' => '/assets/cache_image/assets/img/фотки_монтаж_маф/фотки/1737983721426_600x400_f6d.jpeg',
    '[[phpthumbon?input=`assets/img/фотки_Посадка и пересадка растений/фотки/istockphoto-1204003714-1024x1024.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`a1cd2b8944f299863d60b17e55294147`]]' => '/assets/cache_image/assets/img/фотки_Посадка и пересадка растений/фотки/istockphoto-1204003714-1024x1024_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фотки_благоустройство и озеленение/фотки/010.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`d4c9eb00d54ba81ec7d19c25593476c1`]]' => '/assets/cache_image/assets/img/фотки_благоустройство и озеленение/фотки/010_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/uslugi/gazon/tre.png`&options=`w=600&h=400&zc=1`&pdoTools=`4b52b0d43a127264a02c3aa70705cfef`]]' => '/assets/cache_image/assets/img/uslugi/gazon/tre_600x400_fa5.png',
    '[[phpthumbon?input=`assets/img/blog/Почвопокровные вместо газона/background.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`839f30570bf2d718743af7b59957af3d`]]' => '/assets/cache_image/assets/img/blog/Почвопокровные вместо газона/background_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фото_уход_за_садом/фотки/026.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`5b270b393135c687ecc522b6b5dd62c4`]]' => '/assets/cache_image/assets/img/фото_уход_за_садом/фотки/026_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фото_подпорные_стенки/фотки/02.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`1ae13a87be04bbe04ee82516caeae272`]]' => '/assets/cache_image/assets/img/фото_подпорные_стенки/фотки/02_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/blog/Что делать с глинистой почвой на участке/background.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`e806943156789afae08e41f1554ddc07`]]' => '/assets/cache_image/assets/img/blog/Что делать с глинистой почвой на участке/background_600x400_71b.jpg',
    '[[phpthumbon?input=`/assets/img/uslugi/noroot1.png`&options=`w=600&h=400&zc=1`&pdoTools=`be9732e39200d167aaad41935dfce36e`]]' => '/assets/cache_image/assets/img/uslugi/noroot1_600x400_fa5.png',
    '[[phpthumbon?input=`assets/img/фото_газон/фотки/016.png`&options=`w=600&h=400&zc=1`&pdoTools=`54224a79f3a4ae3ac5045025a4b01674`]]' => '/assets/cache_image/assets/img/фото_газон/фотки/016_600x400_fa5.png',
    '[[phpthumbon?input=`assets/img/фото_подпорные_стенки/фотки/012.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`3e777c67685abbd5548cd400a30ec902`]]' => '/assets/cache_image/assets/img/фото_подпорные_стенки/фотки/012_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/blog/Как решить проблему стоячей воды на участке/background.png`&options=`w=600&h=400&zc=1`&pdoTools=`693411f5e532c1cd91fe6a190c08127b`]]' => '/assets/cache_image/assets/img/blog/Как решить проблему стоячей воды на участке/background_600x400_fa5.png',
    '[[phpthumbon?input=`/assets/img/uslugi/photo_52694613211229.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`4fef16c9ee3e074f79716a6d8c97b8c4`]]' => '/assets/cache_image/assets/img/uslugi/photo_52694613211229_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/uslugi/gazon/tgf.png`&options=`w=600&h=400&zc=1`&pdoTools=`fd8f4b01d7870fa62f33bfe21dfd91c6`]]' => '/assets/cache_image/assets/img/uslugi/gazon/tgf_600x400_fa5.png',
    '[[phpthumbon?input=`assets/img/фото_газон/фотки/032.JPG`&options=`w=600&h=400&zc=1`&pdoTools=`1c7f04c199c0090a17a25ac595b45bbe`]]' => '/assets/cache_image/assets/img/фото_газон/фотки/032_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фото_подпорные_стенки/фотки/05.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`93f0b04b2021c2ff5eb0f3536a6c5602`]]' => '/assets/cache_image/assets/img/фото_подпорные_стенки/фотки/05_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/blog/Благоустройство участка с уклоном/background.webp`&options=`w=600&h=400&zc=1`&pdoTools=`97c8562178e652f617ec4b11c6e3853f`]]' => '/assets/cache_image/assets/img/blog/Благоустройство участка с уклоном/background_600x400_f6d.jpeg',
    '[[phpthumbon?input=`/assets/img/uslugi/1-10.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`432618a9ef4e8642e00b2da5f8052a7f`]]' => '/assets/cache_image/assets/img/uslugi/1-10_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/о нас/отзывы лица/background.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`670693760994dfd833832b908ac157c4`]]' => '/assets/cache_image/assets/img/о нас/отзывы лица/background_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фото_газон/фотки/040.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`e9a8fcbcc28dedb376a77c29b94f1627`]]' => '/assets/cache_image/assets/img/фото_газон/фотки/040_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/blog/Уход за молодым садом в первый год/background.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`5e3164ac50e8c0961cd03a4bf1fef336`]]' => '/assets/cache_image/assets/img/blog/Уход за молодым садом в первый год/background_600x400_71b.jpg',
    '[[phpthumbon?input=`/assets/img/uslugi/1-11.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`83c3776df51ecc88bd1c5e16fd6235ce`]]' => '/assets/cache_image/assets/img/uslugi/1-11_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фото_газон/фотки/014.png`&options=`w=600&h=400&zc=1`&pdoTools=`0e979983c3d0de538976166546e487a0`]]' => '/assets/cache_image/assets/img/фото_газон/фотки/014_600x400_fa5.png',
    '[[phpthumbon?input=`assets/img/blog/Остаточные фотографии 4 блогов/025.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`7e507ffe5495fbf0315bf1b2370503e4`]]' => '/assets/cache_image/assets/img/blog/Остаточные фотографии 4 блогов/025_600x400_71b.jpg',
    '[[phpthumbon?input=`/assets/img/uslugi/noroo44t.png`&options=`w=600&h=400&zc=1`&pdoTools=`0fc1aebd33ae844e2e66779135306875`]]' => '/assets/cache_image/assets/img/uslugi/noroo44t_600x400_fa5.png',
    '[[phpthumbon?input=`assets/img/blog/Остаточные фотографии 4 блогов/08.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`9c1d1d62ee3b9676bab909758f2bce5b`]]' => '/assets/cache_image/assets/img/blog/Остаточные фотографии 4 блогов/08_600x400_71b.jpg',
    '[[phpthumbon?input=`/assets/img/uslugi/avtopoliv/noroot12.png`&options=`w=600&h=400&zc=1`&pdoTools=`bbd4afc5503e7febda5e320a853532b1`]]' => '/assets/cache_image/assets/img/uslugi/avtopoliv/noroot12_600x400_fa5.png',
    '[[phpthumbon?input=`assets/img/blog/Остаточные фотографии 4 блогов/020.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`e676ca81992284bb28de7c7b32a9a1f1`]]' => '/assets/cache_image/assets/img/blog/Остаточные фотографии 4 блогов/020_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/gelery/landscape-design-project/сх дренажа 11.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`9c597bf6ef736afb928fd38790a266c3`]]' => '/assets/cache_image/assets/img/gelery/landscape-design-project/сх дренажа 11_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/blog/Остаточные фотографии 4 блогов/07.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`b734251a301d3d50083d935f8cae9d91`]]' => '/assets/cache_image/assets/img/blog/Остаточные фотографии 4 блогов/07_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фото_топографическая_съемка/фотки/03.png`&options=`w=600&h=400&zc=1`&pdoTools=`e4c0b9bd8ab458e9ee5cac2e617c39c6`]]' => '/assets/cache_image/assets/img/фото_топографическая_съемка/фотки/03_600x400_fa5.png',
    '[[phpthumbon?input=`assets/img/Диагностика_участка/Elochka.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`b0cccea775c4e13754afaef902b00d94`]]' => '/assets/cache_image/assets/img/Диагностика_участка/Elochka_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/gelery/landscape-design-project/проектир зу 10.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`65a83071ce0a8044fbb6aed6e43a8ad7`]]' => '/assets/cache_image/assets/img/gelery/landscape-design-project/проектир зу 10_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фотки_проектирование_ландшафтного_дизайна/Копия к4..jpg`&options=`w=600&h=400&zc=1`&pdoTools=`caef4dc2eed219c2d7046339ca767869`]]' => '/assets/cache_image/assets/img/фотки_проектирование_ландшафтного_дизайна/Копия к4._600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/uslugi/mosh/fer1.png`&options=`w=600&h=400&zc=1`&pdoTools=`80b880895585aa81a3b669faf1525675`]]' => '/assets/cache_image/assets/img/uslugi/mosh/fer1_600x400_fa5.png',
    '[[phpthumbon?input=`/assets/img/uslugi/1-7.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`0bf68f92d1778bc2f25e289c5df1aafd`]]' => '/assets/cache_image/assets/img/uslugi/1-7_600x400_71b.jpg',
    '[[phpthumbon?input=`/assets/img/uslugi/1-8.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`3368a0469e0c3fbfe99c58ab3b24ff82`]]' => '/assets/cache_image/assets/img/uslugi/1-8_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фото_газон/IMG_2279.JPG`&options=`w=600&h=400&zc=1`&pdoTools=`e8f918e52408645c2cc9fa7cd3837fc7`]]' => '/assets/cache_image/assets/img/фото_газон/IMG_2279_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фото_мощение/013.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`2e10288baa724cfcfab4c0cced44c5a6`]]' => '/assets/cache_image/assets/img/фото_мощение/013_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/gelery/uxod-za-sadom/ray_shrewsberry-rose-pruning-7470829_1920.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`8950124f68a32dd70d631133a429d30c`]]' => '/assets/cache_image/assets/img/gelery/uxod-za-sadom/ray_shrewsberry-rose-pruning-7470829_1920_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/uslugi/avtopoliv/autopoliv18.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`0d7fc83b5f27209ed3c56cabfd946210`]]' => '/assets/cache_image/assets/img/uslugi/avtopoliv/autopoliv18_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/фотки_проектирование_ландшафтного_дизайна/Одинцово_19 - Фото.jpg`&options=`w=600&h=400&zc=1`&pdoTools=`d3477415fcde5ba8449f6f7ec10f6bca`]]' => '/assets/cache_image/assets/img/фотки_проектирование_ландшафтного_дизайна/Одинцово_19 - Фото_600x400_71b.jpg',
    '[[phpthumbon?input=`assets/img/Партнерская программа/Одинцово_13 - Фото (1).jpg`&options=`w=600&h=400&zc=1`&pdoTools=`fe0c1f53b7b29c32bafdc14893d936d2`]]' => '/assets/cache_image/assets/img/Партнерская программа/Одинцово_13 - Фото (1)_600x400_71b.jpg',
    '[[pdoResources?tpl=`@CODE:
                    <div class="service-item reveal" 
                         data-resource-id="{$id}"
                         data-name="{if empty($menutitle)}{$pagetitle}{else}{$menutitle}{/if}"
                         data-desc="{$_modx->resource.description|default:\'\'}">
                        <a href="{$the_link}" class="service-card group block">
                            <div class="service-card__image">
                                {if $img_cat}
                                <img loading="lazy" decoding="async" src="{$img_cat | phpthumbon : \'w=600&h=400&zc=1\'}"
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
                                <p class="service-card__desc">{$_modx->resource.description|default:\'Профессиональное выполнение работ с гарантией качества и соблюдением всех сроков.\'}</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">{$price_cat|default:\'от 5 000 ₽\'}</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>`&returnIds=``&showLog=``&fastMode=``&sortby=`menuindex`&sortbyTV=``&sortbyTVType=``&sortdir=`ASC`&sortdirTV=`ASC`&limit=`0`&offset=`0`&depth=`10`&outputSeparator=`
`&toPlaceholder=``&parents=`0`&includeContent=``&includeTVs=`the_link,img_cat,price_cat,link_cat,categoryi`&prepareTVs=`1`&processTVs=``&tvPrefix=``&tvFilters=``&tvFiltersAndDelimiter=`,`&tvFiltersOrDelimiter=`||`&where=``&showUnpublished=``&showDeleted=``&showHidden=`1`&hideContainers=``&context=``&idx=``&first=``&last=``&tplFirst=``&tplLast=``&tplOdd=``&tplWrapper=``&wrapIfEmpty=``&totalVar=`total`&resources=``&tplCondition=``&tplOperator=`==`&conditionalTpls=``&select=``&toSeparatePlaceholders=``&loadModels=``&scheme=``&useWeblinkUrl=``]]' => '<div class="service-item reveal" 
                         data-resource-id="1"
                         data-name="Ландшафтный дизайн"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/main" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фотки_проектирование_ландшафтного_дизайна/Проект Цветочный берега-изображения-3 (2)_600x400_71b.jpg"
                                    alt="Ландшафтный дизайн">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Ландшафтный дизайн</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="13"
                         data-name="Ландшафтное освещение"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/backlight-design/" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/uslugi/noroot_600x400_fa5.png"
                                    alt="Ландшафтное освещение">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Ландшафтное освещение</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Узнать подробнее</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="27"
                         data-name="Монтаж автополива"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/avtopoliv/montazh-sistemyi-avtomaticheskogo-poliva" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/uslugi/avtopoliv/norootfg_600x400_fa5.png"
                                    alt="Монтаж автополива">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Монтаж автополива</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">от 50 000 руб./услуга</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="28"
                         data-name="Настройка автополива на участке"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/avtopoliv/nastrojka-avtopoliva-na-uchastke-lyubogo-tipa" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/uslugi/avtopoliv/noroot5_600x400_fa5.png"
                                    alt="Настройка автополива на участке">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Настройка автополива на участке</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">от 20 000 руб./услуга</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="29"
                         data-name="Автополив газона"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/avtopoliv/avtomaticheskij-poliv-gazona" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/uslugi/avtopoliv/noroot45_600x400_fa5.png"
                                    alt="Автополив газона">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Автополив газона</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">от 50 000 руб./услуга</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="30"
                         data-name="Автополив сада"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/avtopoliv/avtomaticheskij-poliv-sada.-kapelnyij-poliv" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/uslugi/avtopoliv/noroot66_600x400_fa5.png"
                                    alt="Автополив сада">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Автополив сада</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">от 50 000 руб./услуга</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="31"
                         data-name="Автополив цветников"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/avtopoliv/avtomaticheskij-poliv-czvetnikov-i-klumb.-kapelnyij-poliv" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/uslugi/avtopoliv/noroot8_600x400_fa5.png"
                                    alt="Автополив цветников">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Автополив цветников</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">от 50 000 руб./услуга</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="32"
                         data-name="Генеральный план"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/landscape-design-project/" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/gelery/landscape-design-project/верт план 8_600x400_71b.jpg"
                                    alt="Генеральный план">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Генеральный план</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="33"
                         data-name="Дендроплан"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/landscape-design-project/" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/gelery/landscape-design-project/план покр 4_600x400_71b.jpg"
                                    alt="Дендроплан">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Дендроплан</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="34"
                         data-name="Ассортиментная ведомость"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/landscape-design-project/" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/gelery/landscape-design-project/проектир зу 10_600x400_71b.jpg"
                                    alt="Ассортиментная ведомость">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Ассортиментная ведомость</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="35"
                         data-name="План покрытий"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/landscape-design-project/" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/gelery/landscape-design-project/сх полива6_600x400_71b.jpg"
                                    alt="План покрытий">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">План покрытий</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="36"
                         data-name="Схема освещения"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/landscape-design-project/" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фотки_проектирование_подсветки/Копия Одинцово_28 - Фото_600x400_71b.jpg"
                                    alt="Схема освещения">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Схема освещения</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Узнать подробнее</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="37"
                         data-name="Разбивочный чертёж"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/landscape-design-project/" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фотки_проектирование_ландшафтного_дизайна/пд_600x400_71b.jpg"
                                    alt="Разбивочный чертёж">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Разбивочный чертёж</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="38"
                         data-name="Схема полива"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/landscape-design-project/" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/gelery/landscape-design-project/разбивочный7_600x400_71b.jpg"
                                    alt="Схема полива">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Схема полива</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="41"
                         data-name="Укладка тротуарной плитки"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/moschenie/ukladka-trotuarnoj-plitki" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фото_мощение/016_600x400_71b.jpg"
                                    alt="Укладка тротуарной плитки">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Укладка тротуарной плитки</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">от 1 650 руб./м2</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="42"
                         data-name="Укладка натурального камня"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/moschenie/ukladka-naturalnogo-kamnya" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фото_натуральный_камень/background_600x400_71b.jpg"
                                    alt="Укладка натурального камня">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Укладка натурального камня</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">от 2 650 руб./м2</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="43"
                         data-name="Укладка гранитной брусчатки"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/moschenie/ukladka-granitnoj-bruschatki" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фото_гранитная_брусчатка/background_600x400_71b.jpg"
                                    alt="Укладка гранитной брусчатки">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Укладка гранитной брусчатки</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">от 3 500 руб./м2</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="44"
                         data-name="Каменный ковер"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/moschenie/kamennyij-kover" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фото_каменный_ковёр/background_600x400_fa5.png"
                                    alt="Каменный ковер">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Каменный ковер</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">880 руб./м2</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="45"
                         data-name="Пошаговые дорожки в ландшафтном дизайне"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/moschenie/poshagovyie-dorozhki" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/uslugi/mosh/fer4_600x400_fa5.png"
                                    alt="Пошаговые дорожки в ландшафтном дизайне">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Пошаговые дорожки в ландшафтном дизайне</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">от 2 950 руб./м2</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="56"
                         data-name="Ливневая канализация"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/drainage/livnevaya-kanalizacziya-(dlya-sbora-vodyi-s-kryish-i-dorozhek)" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/uslugi/photo_5211024979644847859_y_600x400_71b.jpg"
                                    alt="Ливневая канализация">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Ливневая канализация</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">от 1 900 руб./м.п.</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="60"
                         data-name="Зонирование, садовые дорожки и освещение — практическое руководство"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/blog/landshaft-design-zonirovanie" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/blog/1/1_600x400_f6d.jpeg"
                                    alt="Зонирование, садовые дорожки и освещение — практическое руководство">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Зонирование, садовые дорожки и освещение — практическое руководство</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="74"
                         data-name="Обрезка деревьев и кустарников"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/uxod-za-sadom/obrezka-derevev-i-kustarnikov" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фото_уход_за_садом/фотки/06_600x400_71b.jpg"
                                    alt="Обрезка деревьев и кустарников">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Обрезка деревьев и кустарников</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="82"
                         data-name="Проектирование подпорных стенок"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/design-retaining-walls/proektirovanie-podpornyix-stenok" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фото_подпорные_стенки/фотки/03_600x400_fa5.png"
                                    alt="Проектирование подпорных стенок">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Проектирование подпорных стенок</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="90"
                         data-name="Топографическая съемка для строительства дома"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/topographic-survey/topograficheskaya-semka-dlya-stroitelstva-doma" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фото_топографическая_съемка/фотки/04_600x400_71b.jpg"
                                    alt="Топографическая съемка для строительства дома">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Топографическая съемка для строительства дома</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="93"
                         data-name="Асфальтирование участков и парковок"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/asphalting/asfaltirovanie-uchastkov-i-parkovok" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фото_асфальтирование/фотки/011_600x400_71b.jpg"
                                    alt="Асфальтирование участков и парковок">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Асфальтирование участков и парковок</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="99"
                         data-name="Резиновое покрытие для детских и спортивных площадок"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/rubber-coatings/rezinovoe-pokryitie-dlya-detskix-i-sportivnyix-ploshhadok" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фотки_резиновое_покрытие/фотки/istockphoto-1554930780-1024x1024_600x400_71b.jpg"
                                    alt="Резиновое покрытие для детских и спортивных площадок">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Резиновое покрытие для детских и спортивных площадок</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="102"
                         data-name="Металлические ограждения"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/design-fences-and-barriers/metallicheskie-ograzhdeniya" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фотки_Монтаж_ограждений/фотки/сз_600x400_71b.jpg"
                                    alt="Металлические ограждения">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Металлические ограждения</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Прочность, безопасность и длительный срок службы.</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="105"
                         data-name="Архитектурное освещение"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/backlight-design/arxitekturnoe-osveshhenie" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фотки_проектирование_подсветки/фотки/пвпап_600x400_f6d.jpeg"
                                    alt="Архитектурное освещение">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Архитектурное освещение</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Подсветка фасадов, входных групп, террас и других архитектурных элементов для создания выразительного внешнего облика объекта.</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="108"
                         data-name="Беседки и перголы для участка в Москве и МО"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/architectural-forms/besedki-i-pergolyi" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фотки_монтаж_маф/фотки/istockphoto-175589195-1024x1024_600x400_71b.jpg"
                                    alt="Беседки и перголы для участка в Москве и МО">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Беседки и перголы для участка в Москве и МО</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Комфортные зоны отдыха, которые становятся украшением участка и создают уютное пространство для проведения времени на свежем воздухе.</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="113"
                         data-name="Посадка деревьев и кустарников"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/posadka-i-peresadka-rastenij/posadka-derevev-i-kustarnikov" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фотки_Посадка и пересадка растений/фотки/Копия IMG_0819_600x400_71b.jpg"
                                    alt="Посадка деревьев и кустарников">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Посадка деревьев и кустарников</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Высадка декоративных, хвойных и плодовых растений с соблюдением всех агротехнических требований.</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="116"
                         data-name="Проектирование объектов благоустройства"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/design-improvement-and-landscaping/proektirovanie-obektov-blagoustrojstva" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фотки_благоустройство и озеленение/фотки/07_600x400_71b.jpg"
                                    alt="Проектирование объектов благоустройства">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Проектирование объектов благоустройства</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Разработка концепций и проектных решений для общественных и коммерческих территорий</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="12"
                         data-name="Благоустройство и озеленение"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/design-improvement-and-landscaping/" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фотки_благоустройство и озеленение/го_600x400_71b.jpg"
                                    alt="Благоустройство и озеленение">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Благоустройство и озеленение</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Узнать подробнее</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="47"
                         data-name="Посевной газон"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/gazon/ukladka-rulonnogo" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фото_газон/фотки/07_600x400_71b.jpg"
                                    alt="Посевной газон">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Посевной газон</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="55"
                         data-name="Глубинный дренаж"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/drainage/glubinnyij-drenazh-(dlya-otvoda-gruntovyix-vod)" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/uslugi/photo_5309866281794657692_y_600x400_71b.jpg"
                                    alt="Глубинный дренаж">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Глубинный дренаж</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">от 1 900 руб./м.п.</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="67"
                         data-name="Наша команда"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/history-company/nasha-komanda" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/о нас/члены/просто фотки/image-30-04-26-01-00_600x400_fa5.png"
                                    alt="Наша команда">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Наша команда</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="75"
                         data-name="Очистка водоемов в Москве и МО — чистка прудов"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/uxod-za-sadom/ochistka-vodoyomov" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фото_уход_за_садом/фотки/07_600x400_71b.jpg"
                                    alt="Очистка водоемов в Москве и МО — чистка прудов">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Очистка водоемов в Москве и МО — чистка прудов</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="83"
                         data-name="Подпорные стенки из бетона"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/design-retaining-walls/podpornyie-stenki-iz-betona" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фото_подпорные_стенки/фотки/01_600x400_71b.jpg"
                                    alt="Подпорные стенки из бетона">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Подпорные стенки из бетона</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="91"
                         data-name="Топографическая съемка для ландшафтного дизайна"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/topographic-survey/topograficheskaya-semka-dlya-landshaftnogo-dizajna" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фото_топографическая_съемка/фотки/01_600x400_71b.jpg"
                                    alt="Топографическая съемка для ландшафтного дизайна">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Топографическая съемка для ландшафтного дизайна</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="94"
                         data-name="Ремонт и восстановление асфальта"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/asphalting/remont-i-vosstanovlenie-asfalta" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фото_асфальтирование/фотки/09_600x400_71b.jpg"
                                    alt="Ремонт и восстановление асфальта">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Ремонт и восстановление асфальта</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="100"
                         data-name="Резиновое покрытие для дорожек и зон отдыха"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/rubber-coatings/rezinovoe-pokryitie-dlya-dorozhek-i-zon-otdyixa" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фотки_резиновое_покрытие/фотки/dominikmoser-plastic-track-1601469_1920_600x400_71b.jpg"
                                    alt="Резиновое покрытие для дорожек и зон отдыха">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Резиновое покрытие для дорожек и зон отдыха</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="103"
                         data-name="Деревянные ограждения для участка в Москве"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/design-fences-and-barriers/derevyannyie-ograzhdeniya" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фотки_Монтаж_ограждений/фотки/нз_600x400_71b.jpg"
                                    alt="Деревянные ограждения для участка в Москве">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Деревянные ограждения для участка в Москве</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"> Естественная красота и гармония с природой.</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="106"
                         data-name="Освещение дорожек и территории"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/backlight-design/osveshhenie-dorozhek-i-territorii" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фотки_проектирование_подсветки/фотки/photo_5435873518387138700_y_600x400_71b.jpg"
                                    alt="Освещение дорожек и территории">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Освещение дорожек и территории</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Организация безопасного передвижения по участку с помощью светильников вдоль дорожек, подъездных путей и функциональных зон.</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="109"
                         data-name="Садовые грядки и клумбы в Москве — оформление участка"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/architectural-forms/sadovyie-gryadki-i-klumbyi" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фотки_монтаж_маф/фотки/IMG_20250807_144641_600x400_71b.jpg"
                                    alt="Садовые грядки и клумбы в Москве — оформление участка">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Садовые грядки и клумбы в Москве — оформление участка</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Практичные и эстетичные конструкции для организации огорода и цветников. </span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="114"
                         data-name="Пересадка растений"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/posadka-i-peresadka-rastenij/peresadka-rastenij" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фотки_Посадка и пересадка растений/фотки/photo_2026-06-03_10-17-26_600x400_71b.jpg"
                                    alt="Пересадка растений">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Пересадка растений</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Безопасная пересадка деревьев, кустарников и многолетних растений с максимальным сохранением корневой системы и высокой вероятностью приживаемости.</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="117"
                         data-name="Благоустройство общественных пространств"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/design-improvement-and-landscaping/blagoustrojstvo-obshhestvennyix-prostranstv" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фотки_благоустройство и озеленение/фотки/014_600x400_71b.jpg"
                                    alt="Благоустройство общественных пространств">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Благоустройство общественных пространств</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Полный цикл работ по созданию современных общественных пространств — от подготовки территории до сдачи объекта </span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="6"
                         data-name="Вертикальная планировка"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/vertical-planning" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/gelery/landscape-design-project/дендроплан2_600x400_71b.jpg"
                                    alt="Вертикальная планировка">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Вертикальная планировка</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Узнать подробнее</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="48"
                         data-name="Укладка рулонного газона"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/gazon/ukladka-rulonnogo-gazona" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/uslugi/gazon/ukl_600x400_fa5.png"
                                    alt="Укладка рулонного газона">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Укладка рулонного газона</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="54"
                         data-name="Поверхностный дренаж"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/drainage/poverxnostnyij-drenazh-(dlya-otvoda-dozhdevoj-vodyi)" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/uslugi/471f55d9-6bb2-4bc5-8e39-836de5f4897d_600x400_71b.jpg"
                                    alt="Поверхностный дренаж">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Поверхностный дренаж</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">от 1 900 руб./м.п.</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="63"
                         data-name="Альтернативы классическому газону в 2026"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/blog/alternative-classic-gazon" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/blog/Альтернативы классическому газону/couleur-flowers-6206279_1920_600x400_f6d.jpeg"
                                    alt="Альтернативы классическому газону в 2026">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Альтернативы классическому газону в 2026</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="68"
                         data-name="Рабочий процесс"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/history-company/rabochij-proczess" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/о нас/backgorund_600x400_71b.jpg"
                                    alt="Рабочий процесс">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Рабочий процесс</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="76"
                         data-name="Стрижка живых изгородей в Москве и МО"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/uxod-za-sadom/strizhka-zhivyix-izgorodej" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фото_уход_за_садом/фотки/019_600x400_71b.jpg"
                                    alt="Стрижка живых изгородей в Москве и МО">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Стрижка живых изгородей в Москве и МО</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="92"
                         data-name="Подеревная топографическая съемка участка в Москве"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/topographic-survey/poderevnaya-topograficheskaya-semka" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фото_топографическая_съемка/фотки/03_600x400_fa5.png"
                                    alt="Подеревная топографическая съемка участка в Москве">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Подеревная топографическая съемка участка в Москве</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="95"
                         data-name="Устройство основания под асфальт в Москве"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/asphalting/ustrojstvo-osnovaniya-pod-asfalt" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фото_асфальтирование/фотки/010_600x400_71b.jpg"
                                    alt="Устройство основания под асфальт в Москве">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Устройство основания под асфальт в Москве</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="101"
                         data-name="Ремонт и восстановление резиновых покрытий"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/rubber-coatings/remont-i-vosstanovlenie-rezinovyix-pokryitij" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фотки_резиновое_покрытие/фотки/istockphoto-2187161036-1024x1024_600x400_71b.jpg"
                                    alt="Ремонт и восстановление резиновых покрытий">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Ремонт и восстановление резиновых покрытий</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="104"
                         data-name="Комбинированные ограждения"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/design-fences-and-barriers/kombinirovannyie-ograzhdeniya" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фотки_Монтаж_ограждений/фотки/зж_600x400_71b.jpg"
                                    alt="Комбинированные ограждения">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Комбинированные ограждения</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"> Стильные решения с сочетанием различных материалов.</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="107"
                         data-name="Ландшафтное освещение"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/backlight-design/landshaftnoe-osveshhenie" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фотки_проектирование_подсветки/фотки/istockphoto-2238030582-1024x1024_600x400_71b.jpg"
                                    alt="Ландшафтное освещение">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Ландшафтное освещение</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Подсветка деревьев, кустарников, цветников, водоёмов и элементов ландшафтного дизайна для создания уникальной атмосферы в вечернее время.</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="110"
                         data-name="Скамейки, арки и декоративные конструкции для сада"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/architectural-forms/skamejki,-arki-i-dekorativnyie-konstrukczii" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фотки_монтаж_маф/фотки/1737983721426_600x400_f6d.jpeg"
                                    alt="Скамейки, арки и декоративные конструкции для сада">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Скамейки, арки и декоративные конструкции для сада</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Функциональные и декоративные элементы для благоустройства частных и общественных территорий</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="115"
                         data-name="Создание декоративных композиций"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/posadka-i-peresadka-rastenij/sozdanie-dekorativnyix-kompoziczij" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фотки_Посадка и пересадка растений/фотки/istockphoto-1204003714-1024x1024_600x400_71b.jpg"
                                    alt="Создание декоративных композиций">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Создание декоративных композиций</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Формирование цветников, живых изгородей, групповых посадок и ландшафтных композиций для частных и коммерческих объектов.</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="118"
                         data-name="Озеленение территорий"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/design-improvement-and-landscaping/ozelenenie-territorij" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фотки_благоустройство и озеленение/фотки/010_600x400_71b.jpg"
                                    alt="Озеленение территорий">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Озеленение территорий</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Создание зелёных зон с использованием деревьев, кустарников, газонов и декоративных растений </span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="4"
                         data-name="Страница не найдена — Ландшафтный дизайн DOM OZ | Москва"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="" class="service-card group block">
                            <div class="service-card__image">
                                                                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-200">
                                    <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Страница не найдена — Ландшафтный дизайн DOM OZ | Москва</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="7"
                         data-name="Оформление под новый год"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/newyear" class="service-card group block">
                            <div class="service-card__image">
                                                                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-200">
                                    <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Оформление под новый год</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="49"
                         data-name="Ремонт газона"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/gazon/remont-i-vosstanovlenie-gazona" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/uslugi/gazon/tre_600x400_fa5.png"
                                    alt="Ремонт газона">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Ремонт газона</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="64"
                         data-name="Почвопокровные вместо газона: подбор для Подмосковья"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/blog/pochvopokrovnyie-vmesto-gazona-podbor-dlya-podmoskovya" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/blog/Почвопокровные вместо газона/background_600x400_71b.jpg"
                                    alt="Почвопокровные вместо газона: подбор для Подмосковья">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Почвопокровные вместо газона: подбор для Подмосковья</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="77"
                         data-name="Обработка сада"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/uxod-za-sadom/obrabotka-sada" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фото_уход_за_садом/фотки/026_600x400_71b.jpg"
                                    alt="Обработка сада">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Обработка сада</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="85"
                         data-name="Габионы и подпорные конструкции в Москве"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/design-retaining-walls/gabionyi-i-dekorativnyie-podpornyie-konstrukczii" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фото_подпорные_стенки/фотки/02_600x400_71b.jpg"
                                    alt="Габионы и подпорные конструкции в Москве">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Габионы и подпорные конструкции в Москве</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="96"
                         data-name="Что делать с глинистой почвой на участке"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/blog/chto-delat-s-glinistoj-pochvoj-na-uchastke" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/blog/Что делать с глинистой почвой на участке/background_600x400_71b.jpg"
                                    alt="Что делать с глинистой почвой на участке">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Что делать с глинистой почвой на участке</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="129"
                         data-name="Новогоднее оформление 2"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/newyear" class="service-card group block">
                            <div class="service-card__image">
                                                                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-200">
                                    <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Новогоднее оформление 2</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="5"
                         data-name="sitemap"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="" class="service-card group block">
                            <div class="service-card__image">
                                                                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-200">
                                    <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">sitemap</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="14"
                         data-name="Подпорные стенки"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/design-retaining-walls/" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/uslugi/noroot1_600x400_fa5.png"
                                    alt="Подпорные стенки">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Подпорные стенки</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Узнать подробнее</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="50"
                         data-name="Уход за газоном"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/gazon/uxod-za-gazonom-(ezhemesyachnyij-/-sezonnyij)" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фото_газон/фотки/016_600x400_fa5.png"
                                    alt="Уход за газоном">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Уход за газоном</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="86"
                         data-name="Укрепление склонов и террасирование участка в Москве"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/design-retaining-walls/ukreplenie-sklonov-i-terrasirovanie-uchastka" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фото_подпорные_стенки/фотки/012_600x400_71b.jpg"
                                    alt="Укрепление склонов и террасирование участка в Москве">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Укрепление склонов и террасирование участка в Москве</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="97"
                         data-name="Как решить проблему стоячей воды на участке"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/blog/kak-reshit-problemu-stoyachej-vodyi-na-uchastke" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/blog/Как решить проблему стоячей воды на участке/background_600x400_fa5.png"
                                    alt="Как решить проблему стоячей воды на участке">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Как решить проблему стоячей воды на участке</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="16"
                         data-name="Дренаж и ливневая канализация"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/drainage" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/uslugi/photo_52694613211229_600x400_71b.jpg"
                                    alt="Дренаж и ливневая канализация">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Дренаж и ливневая канализация</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Узнать подробнее</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="51"
                         data-name="Автополив для газона"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/gazon/montazh-avtomaticheskogo-poliva-dlya-gazona" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/uslugi/gazon/tgf_600x400_fa5.png"
                                    alt="Автополив для газона">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Автополив для газона</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="79"
                         data-name="Рулонный газон под ключ в Москве и МО"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/gazon/rulonnyij-gazon" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фото_газон/фотки/032_600x400_71b.jpg"
                                    alt="Рулонный газон под ключ в Москве и МО">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Рулонный газон под ключ в Москве и МО</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="87"
                         data-name="Облицовка подпорных стенок"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/design-retaining-walls/obliczovka-podpornyix-stenok" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фото_подпорные_стенки/фотки/05_600x400_71b.jpg"
                                    alt="Облицовка подпорных стенок">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Облицовка подпорных стенок</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="98"
                         data-name="Благоустройство участка с уклоном: геопластика, террасы и укрепление склонов."
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/blog/blagoustrojstvo-uchastka-s-uklonom" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/blog/Благоустройство участка с уклоном/background_600x400_f6d.jpeg"
                                    alt="Благоустройство участка с уклоном: геопластика, террасы и укрепление склонов.">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Благоустройство участка с уклоном: геопластика, террасы и укрепление склонов.</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="23"
                         data-name="Монтаж заборов и ограждений"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/design-fences-and-barriers/" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/uslugi/1-10_600x400_71b.jpg"
                                    alt="Монтаж заборов и ограждений">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Монтаж заборов и ограждений</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Узнать подробнее</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="72"
                         data-name="Отзывы"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/history-company/reviews" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/о нас/отзывы лица/background_600x400_71b.jpg"
                                    alt="Отзывы">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Отзывы</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="80"
                         data-name="Газоны из цветов и почвопокровных растений"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/gazon/gazonyi-iz-czvetov-i-pochvopokrovnyix-rastenij" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фото_газон/фотки/040_600x400_71b.jpg"
                                    alt="Газоны из цветов и почвопокровных растений">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Газоны из цветов и почвопокровных растений</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="119"
                         data-name="Уход за молодым садом в первый год после посадки"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/blog/uhod-za-molodym-sadom-v-pervyy-god-posle-posadki" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/blog/Уход за молодым садом в первый год/background_600x400_71b.jpg"
                                    alt="Уход за молодым садом в первый год после посадки">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Уход за молодым садом в первый год после посадки</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="20"
                         data-name="Резиновые покрытия"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/rubber-coatings/" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/uslugi/1-11_600x400_71b.jpg"
                                    alt="Резиновые покрытия">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Резиновые покрытия</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Узнать подробнее</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="73"
                         data-name="Поиск по сайту"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/history-company/glavnaya-uslug" class="service-card group block">
                            <div class="service-card__image">
                                                                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-200">
                                    <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Поиск по сайту</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="81"
                         data-name="Реставрация газона в Москве и МО — восстановление газона"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/gazon/restavracziya-gazona" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фото_газон/фотки/014_600x400_fa5.png"
                                    alt="Реставрация газона в Москве и МО — восстановление газона">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Реставрация газона в Москве и МО — восстановление газона</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="121"
                         data-name="Как подготовить участок к ландшафтным работам"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/blog/kak-podgotovit-uchastok-k-landshaftnym-rabotam" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/blog/Остаточные фотографии 4 блогов/025_600x400_71b.jpg"
                                    alt="Как подготовить участок к ландшафтным работам">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Как подготовить участок к ландшафтным работам</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="126"
                         data-name="Конакты"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="" class="service-card group block">
                            <div class="service-card__image">
                                                                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-200">
                                    <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Конакты</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="22"
                         data-name="Монтаж МАФ"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/architectural-forms/" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/uslugi/noroo44t_600x400_fa5.png"
                                    alt="Монтаж МАФ">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Монтаж МАФ</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Узнать подробнее</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="122"
                         data-name="Ландшафтный дизайн маленького участка: решения для 4-10 соток"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/blog/landshaftnyj-dizajn-malenkogo-uchastka" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/blog/Остаточные фотографии 4 блогов/08_600x400_71b.jpg"
                                    alt="Ландшафтный дизайн маленького участка: решения для 4-10 соток">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Ландшафтный дизайн маленького участка: решения для 4-10 соток</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="26"
                         data-name="Проектирование системы автополива"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/design-automatic-irrigation-system" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/uslugi/avtopoliv/noroot12_600x400_fa5.png"
                                    alt="Проектирование системы автополива">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Проектирование системы автополива</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">от 10 000 руб</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="123"
                         data-name="Проектирование малоуходного сада: красивый участок с минимальным уходом"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/blog/proektirovanie-malouhodnogo-sada" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/blog/Остаточные фотографии 4 блогов/020_600x400_71b.jpg"
                                    alt="Проектирование малоуходного сада: красивый участок с минимальным уходом">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Проектирование малоуходного сада: красивый участок с минимальным уходом</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="39"
                         data-name="Схема дренажа и ливневки"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/sxema-drenazha-i-livnevoj-kanalizaczii" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/gelery/landscape-design-project/сх дренажа 11_600x400_71b.jpg"
                                    alt="Схема дренажа и ливневки">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Схема дренажа и ливневки</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Узнать подробнее</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="124"
                         data-name="Что входит в ландшафтный проект участка"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/blog/chto-vhodit-v-landshaftnyj-proekt-uchastka" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/blog/Остаточные фотографии 4 блогов/07_600x400_71b.jpg"
                                    alt="Что входит в ландшафтный проект участка">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Что входит в ландшафтный проект участка</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="24"
                         data-name="Топографическая съемка"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/topographic-survey/" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фото_топографическая_съемка/фотки/03_600x400_fa5.png"
                                    alt="Топографическая съемка">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Топографическая съемка</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Узнать подробнее</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="111"
                         data-name="Цены на ландшафтный дизайн"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/prices" class="service-card group block">
                            <div class="service-card__image">
                                                                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-200">
                                    <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Цены на ландшафтный дизайн</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="120"
                         data-name="feed"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="" class="service-card group block">
                            <div class="service-card__image">
                                                                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-200">
                                    <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">feed</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="127"
                         data-name="Как понять, нужен ли дренаж на участке"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/blog/kak-ponyat-nuzhen-li-drenazh-na-uchastke" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/Диагностика_участка/Elochka_600x400_71b.jpg"
                                    alt="Как понять, нужен ли дренаж на участке">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Как понять, нужен ли дренаж на участке</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="25"
                         data-name="Проектирование земельных участков"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/design-land-plots" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/gelery/landscape-design-project/проектир зу 10_600x400_71b.jpg"
                                    alt="Проектирование земельных участков">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Проектирование земельных участков</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Узнать подробнее</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="128"
                         data-name="Как подготовить автополив к зиме: пошаговая инструкция по консервации | Дом Оз"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/blog/kak-podgotovit-avtopoliv-k-zime" class="service-card group block">
                            <div class="service-card__image">
                                                                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-200">
                                    <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Как подготовить автополив к зиме: пошаговая инструкция по консервации | Дом Оз</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="40"
                         data-name="3D-визуализация"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/3d-vizualizacziya-(po-zhelaniyu)" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фотки_проектирование_ландшафтного_дизайна/Копия к4._600x400_71b.jpg"
                                    alt="3D-визуализация">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">3D-визуализация</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Узнать подробнее</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="131"
                         data-name="запускатель"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="" class="service-card group block">
                            <div class="service-card__image">
                                                                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-200">
                                    <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">запускатель</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="46"
                         data-name="Проектирование мощения"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/proektirovanie-moshheniya" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/uslugi/mosh/fer1_600x400_fa5.png"
                                    alt="Проектирование мощения">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Проектирование мощения</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">от 25 000 руб</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="19"
                         data-name="Асфальтирование"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/asphalting/" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/uslugi/1-7_600x400_71b.jpg"
                                    alt="Асфальтирование">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Асфальтирование</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Узнать подробнее</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="15"
                         data-name="Монтаж освещения участка"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/lighting-design" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/uslugi/1-8_600x400_71b.jpg"
                                    alt="Монтаж освещения участка">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Монтаж освещения участка</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Узнать подробнее</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="17"
                         data-name="Газон"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/gazon/" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фото_газон/IMG_2279_600x400_71b.jpg"
                                    alt="Газон">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Газон</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Узнать подробнее</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="18"
                         data-name="Мощение"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/moschenie/" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фото_мощение/013_600x400_71b.jpg"
                                    alt="Мощение">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Мощение</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Узнать подробнее</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="57"
                         data-name="Уход за садом"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/uxod-za-sadom/" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/gelery/uxod-za-sadom/ray_shrewsberry-rose-pruning-7470829_1920_600x400_71b.jpg"
                                    alt="Уход за садом">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Уход за садом</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Узнать подробнее</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="11"
                         data-name="Автополив"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/avtopoliv/" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/uslugi/avtopoliv/autopoliv18_600x400_71b.jpg"
                                    alt="Автополив">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Автополив</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Узнать подробнее</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="2"
                         data-name="Ландшафтное проектирование"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/landscape-design-project/" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/фотки_проектирование_ландшафтного_дизайна/Одинцово_19 - Фото_600x400_71b.jpg"
                                    alt="Ландшафтное проектирование">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Ландшафтное проектирование</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Узнать подробнее</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="112"
                         data-name="Посадка и пересадка растений"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/uslugi/posadka-i-peresadka-rastenij/" class="service-card group block">
                            <div class="service-card__image">
                                                                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-200">
                                    <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Посадка и пересадка растений</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="52"
                         data-name="Партнерская программа"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/partnerskaya-programma" class="service-card group block">
                            <div class="service-card__image">
                                                                <img loading="lazy" decoding="async" src="/assets/cache_image/assets/img/Партнерская программа/Одинцово_13 - Фото (1)_600x400_71b.jpg"
                                    alt="Партнерская программа">
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Партнерская программа</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price">Узнать подробнее</span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="8"
                         data-name="Политика конфиденциальности"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/privacy" class="service-card group block">
                            <div class="service-card__image">
                                                                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-200">
                                    <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Политика конфиденциальности</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="65"
                         data-name="О компании"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="" class="service-card group block">
                            <div class="service-card__image">
                                                                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-200">
                                    <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">О компании</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="61"
                         data-name="Список блогов"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="https://domozmsk.ru/blogs" class="service-card group block">
                            <div class="service-card__image">
                                                                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-200">
                                    <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Список блогов</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
<div class="service-item reveal" 
                         data-resource-id="125"
                         data-name="Спасибо за заявку"
                         data-desc="Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.">
                        <a href="" class="service-card group block">
                            <div class="service-card__image">
                                                                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-200">
                                    <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                                            </div>
                            <div class="service-card__content">
                                <h3 class="service-card__title text-left">Спасибо за заявку</h3>
                                <p class="service-card__desc">Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.</p>
                                <div class="service-card__footer">
                                    <span class="service-card__price"></span>
                                    <span class="service-card__btn">
                                        Подробнее
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>',
    '[[FetchIt?form=`@INLINE <form method="post" class="space-y-4">
                            <div><label class="block text-sm font-medium text-gray-700 mb-1 text-left">Ваше имя</label><input type="text" name="Имя" placeholder="Иван Иванов" required class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-[#558255] focus:border-transparent outline-none transition"></div>
                            <div><label class="block text-sm font-medium text-gray-700 mb-1 text-left">Телефон</label>
                            <input type="tel" name="Телефон" placeholder="(999) 999-99-99" maxlength="18" inputmode="numeric" autocomplete="tel" data-type-phone class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-[#558255] focus:border-transparent outline-none transition" required>
                            </div>
                            <div><label class="block text-sm font-medium text-gray-700 mb-1 text-left">Интересующая услуга</label><input type="text" name="Сервис" placeholder="Например: автополив" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-[#558255] focus:border-transparent outline-none transition"></div>
                            <input type="hidden" name="Страница" value="{$_modx->config.site_url}{$_modx->resource.uri}">
                            <input type="hidden" name="Название страницы" value="{$_modx->resource.pagetitle}">
                            <button type="submit" class="w-full py-4 bg-[#558255] hover:bg-[#3d5c3d] text-white font-bold rounded-xl transition shadow-md mt-2">Получить предложение</button>
                            <p class="text-xs text-gray-400 text-center mt-4">Нажимая кнопку, вы соглашаетесь с политикой конфиденциальности</p>
                        </form>`&snippet=`FormIt`&actionUrl=`[[+assetsUrl]]action.php`&clearFieldsOnSuccess=`1`&hooks=`email`&emailTo=`{\'email_1\'|config},artemnersisyan777@gmail.com`&emailSubject=`Запрос услуги со страницы услуг`&successMessage=`<div class="w-fit text-center text-white font-bold p-2">Спасибо за обращене, мы скоро свяжемся с вами!</div>`]]' => '<form data-fetchit="881d46ecc5309fa14f1541c9b8ff8998" method="post" class="space-y-4">
                            <div><label class="block text-sm font-medium text-gray-700 mb-1 text-left">Ваше имя</label><input type="text" name="Имя" placeholder="Иван Иванов" required class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-[#558255] focus:border-transparent outline-none transition"></div>
                            <div><label class="block text-sm font-medium text-gray-700 mb-1 text-left">Телефон</label>
                            <input type="tel" name="Телефон" placeholder="(999) 999-99-99" maxlength="18" inputmode="numeric" autocomplete="tel" data-type-phone class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-[#558255] focus:border-transparent outline-none transition" required>
                            </div>
                            <div><label class="block text-sm font-medium text-gray-700 mb-1 text-left">Интересующая услуга</label><input type="text" name="Сервис" placeholder="Например: автополив" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-[#558255] focus:border-transparent outline-none transition"></div>
                            <input type="hidden" name="Страница" value="https://domozmsk.ru/history-company/glavnaya-uslug">
                            <input type="hidden" name="Название страницы" value="Поиск по сайту">
                            <button type="submit" class="w-full py-4 bg-[#558255] hover:bg-[#3d5c3d] text-white font-bold rounded-xl transition shadow-md mt-2">Получить предложение</button>
                            <p class="text-xs text-gray-400 text-center mt-4">Нажимая кнопку, вы соглашаетесь с политикой конфиденциальности</p>
                        </form>',
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
    '[[FetchIt?form=`@INLINE <form id="pom-modal" class="modal-form">
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
            </form>`&snippet=`FormIt`&actionUrl=`[[+assetsUrl]]action.php`&clearFieldsOnSuccess=`1`&hooks=`email`&emailTo=`Domoz.77@yandex.ru`&emailSubject=`Заявка с модального окна - Поиск по сайту`&successMessage=`<div class="modal-success"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#558255" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg><h3>Спасибо!</h3><p>Мы свяжемся с вами в ближайшее время</p></div>`&validate=`af_name:required:minLength=2,af_phone:required,af_email:required:email`]]' => '<form data-fetchit="ca170f8602715cd4acf787613d0a0353" method="post" id="pom-modal" class="modal-form">
            <input name="workemail" hidden>
            <input name="page" hidden value="Поиск по сайту">
            <input name="url" hidden value="https://domozmsk.ru/history-company/glavnaya-uslug">
            <input type="hidden" name="form_subject" value="Заявка с модального окна - Поиск по сайту">
            
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
                    <label for="form_agree">Согласен c <a href="privacy">политикой конфиденциальности</a></label>
                </div>
                <button type="submit" class="modal-submit-btn">
                    <span>Отправить заявку</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>
            </form>',
    '[[~73? &scheme=`full`]]' => 'https://domozmsk.ru/history-company/glavnaya-uslug',
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
            "description": "Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.",
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
            "@id": "https://domozmsk.ru/history-company/glavnaya-uslug#webpage",
            "url": "https://domozmsk.ru/history-company/glavnaya-uslug",
            "name": "Поиск по сайту",
            "description": "Полный список услуг ландшафтной компании Дом Оз: проектирование, мощение, озеленение, дренаж, автополив, освещение. Фильтруйте по категории, сравнивайте цены, выбирайте лучшее решение для вашего участка.",
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
            "@id": "https://domozmsk.ru/history-company/glavnaya-uslug#breadcrumb",
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
            "@id": "https://domozmsk.ru/history-company/glavnaya-uslug#calculator",
            "name": "Калькулятор стоимости ландшафтного дизайна",
            "url": "https://domozmsk.ru/history-company/glavnaya-uslug#kviz",
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
            "@id": "https://domozmsk.ru/history-company/glavnaya-uslug#service",
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
            "@id": "https://domozmsk.ru/history-company/glavnaya-uslug#nav",
            "name": "Главное меню",
            "hasPart": [
                {
                    "@type": "SiteNavigationElement",
                    "name": "Услуги",
                    "url": "https://domozmsk.ru/history-company/glavnaya-uslug#vidy"
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
      'modal_window' => 
      array (
        'fields' => 
        array (
          'id' => 30,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'modal_window',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<!-- ====================================================================== -->
<!-- МОДАЛЬНОЕ ОКНО С ФОРМОЙ ЗАЯВКИ                                         -->
<!-- ====================================================================== -->
<div id="modal-form" class="custom-modal">
    <div class="custom-modal-overlay"></div>
    <div class="custom-modal-container">
        <button class="custom-modal-close" type="button" aria-label="Закрыть">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M18 6L6 18M6 6l12 12"/>
            </svg>
        </button>
        
        <div class="custom-modal-content">
            {\'FetchIt\'|snippet:[
                \'snippet\'=>\'FormIt\',
                \'hooks\'=>\'email\',
                \'form\'=>\'@INLINE <form id="pom-modal" class="modal-form">
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
            </form>\',
                \'emailTo\'=>"Domoz.77@yandex.ru",
                \'emailSubject\'=>"Заявка с модального окна - {$_modx->resource.pagetitle}",
                \'successMessage\'=>\'<div class="modal-success"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#558255" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg><h3>Спасибо!</h3><p>Мы свяжемся с вами в ближайшее время</p></div>\',
                \'validate\'=>\'af_name:required:minLength=2,af_phone:required,af_email:required:email\'
            ]}
        </div>
    </div>
</div>

<style>
/* ====================================================================== */
/* СТИЛИ МОДАЛЬНОГО ОКНО                                                   */
/* ====================================================================== */
.custom-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease, visibility 0.3s ease;
    padding: 20px;
}

.custom-modal.active {
    opacity: 1;
    visibility: visible;
}

.custom-modal-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    backdrop-filter: blur(5px);
}

.custom-modal-container {
    position: relative;
    background: #fff;
    border-radius: 24px;
    max-width: 500px;
    width: 100%;
    max-height: 90vh;
    overflow-y: auto;
    box-shadow: 0 30px 80px rgba(0, 0, 0, 0.3);
    transform: translateY(30px) scale(0.95);
    transition: transform 0.3s ease;
}

.custom-modal.active .custom-modal-container {
    transform: translateY(0) scale(1);
}

.custom-modal-close {
    position: absolute;
    top: 16px;
    right: 16px;
    width: 40px;
    height: 40px;
    background: #f3f4f6;
    border: none;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    color: #6b7280;
    transition: all 0.2s ease;
    z-index: 10;
}

.custom-modal-close:hover {
    background: #558255;
    color: #fff;
    transform: rotate(90deg);
}

.custom-modal-content {
    padding: 40px;
}

@media (max-width: 640px) {
    .custom-modal-content {
        padding: 30px 20px;
    }
}

/* ====================================================================== */
/* СТИЛИ ФОРМЫ                                                             */
/* ====================================================================== */
.modal-form-header {
    text-align: center;
    margin-bottom: 30px;
}

.modal-form-header h3 {
    font-size: 28px;
    font-weight: 800;
    color: #1a1a1a;
    margin-bottom: 10px;
    line-height: 1.2;
}

.modal-form-header p {
    font-size: 15px;
    color: #6b7280;
    line-height: 1.5;
}

.modal-form-body {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.modal-form-field {
    position: relative;
}

.modal-input {
    width: 100%;
    padding: 14px 18px;
    border: 2px solid #e5e7eb;
    border-radius: 12px;
    font-size: 15px;
    color: #1a1a1a;
    background: #fff;
    transition: all 0.2s ease;
    font-family: inherit;
}

.modal-input:focus {
    outline: none;
    border-color: #558255;
    box-shadow: 0 0 0 4px rgba(85, 130, 85, 0.1);
}

.modal-input::placeholder {
    color: #9ca3af;
}

.error_namemodal {
    display: none;
    color: #ef4444;
    font-size: 12px;
    margin-top: 4px;
}

.modal-form-checkbox {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    margin-top: 4px;
}

.modal-checkbox {
    width: 18px;
    height: 18px;
    margin-top: 2px;
    accent-color: #558255;
    cursor: pointer;
    flex-shrink: 0;
}

.modal-form-checkbox label {
    font-size: 13px;
    color: #6b7280;
    line-height: 1.5;
    cursor: pointer;
}

.modal-form-checkbox label a {
    color: #558255;
    text-decoration: underline;
}

.modal-form-checkbox label a:hover {
    color: #3d5c3d;
}

.modal-submit-btn {
    width: 100%;
    padding: 16px 24px;
    background: linear-gradient(135deg, #558255 0%, #3d5c3d 100%);
    color: #fff;
    border: none;
    border-radius: 12px;
    font-size: 16px;
    font-weight: 700;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    transition: all 0.3s ease;
    margin-top: 8px;
    box-shadow: 0 8px 20px rgba(85, 130, 85, 0.3);
    font-family: inherit;
}

.modal-submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 28px rgba(85, 130, 85, 0.4);
}

.modal-submit-btn:active {
    transform: translateY(0);
}

.modal-submit-btn svg {
    transition: transform 0.3s ease;
}

.modal-submit-btn:hover svg {
    transform: translateX(4px);
}

/* Сообщение об успехе */
.modal-success {
    text-align: center;
    padding: 30px 20px;
}

.modal-success svg {
    margin: 0 auto 20px;
    display: block;
}

.modal-success h3 {
    font-size: 24px;
    font-weight: 800;
    color: #1a1a1a;
    margin-bottom: 10px;
}

.modal-success p {
    font-size: 15px;
    color: #6b7280;
}

/* Блокировка скролла при открытом модальном окне */
body.modal-open {
    overflow: hidden;
}
</style>

{ignore}
<script>
document.addEventListener(\'DOMContentLoaded\', function() {
    
    const modal = document.getElementById(\'modal-form\');
    const closeBtn = modal.querySelector(\'.custom-modal-close\');
    const overlay = modal.querySelector(\'.custom-modal-overlay\');
    
    if (!modal) {
        console.error(\'❌ Модальное окно не найдено!\');
        return;
    }
    
    // === Открытие модального окна ===
    function openModal() {
        modal.classList.add(\'active\');
        document.body.classList.add(\'modal-open\');
        console.log(\'Модальное окно открыто\');
    }
    
    // === Закрытие модального окна ===
    function closeModal() {
        modal.classList.remove(\'active\');
        document.body.classList.remove(\'modal-open\');
        console.log(\'Модальное окно закрыто\');
    }
    
    // === Обработчик клика на кнопки с классом modal_window ===
    document.addEventListener(\'click\', function(e) {
        const trigger = e.target.closest(\'.modal_window\');
        if (trigger) {
            e.preventDefault();
            e.stopPropagation();
            openModal();
        }
    });
    
    // === Закрытие по кнопке X ===
    if (closeBtn) {
        closeBtn.addEventListener(\'click\', closeModal);
    }
    
    // === Закрытие по клику на overlay ===
    if (overlay) {
        overlay.addEventListener(\'click\', closeModal);
    }
    
    // === Закрытие по Escape ===
    document.addEventListener(\'keydown\', function(e) {
        if (e.key === \'Escape\' && modal.classList.contains(\'active\')) {
            closeModal();
        }
    });
    
    console.log(\'Скрипт модального окна загружен\');
});
</script>
[[$phoneFormat]]
<script>
document.addEventListener(\'fetchit:success\', function () {
    ym(108461808, \'reachGoal\', \'FORM_SEND\');
});
</script>
{/ignore}',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<!-- ====================================================================== -->
<!-- МОДАЛЬНОЕ ОКНО С ФОРМОЙ ЗАЯВКИ                                         -->
<!-- ====================================================================== -->
<div id="modal-form" class="custom-modal">
    <div class="custom-modal-overlay"></div>
    <div class="custom-modal-container">
        <button class="custom-modal-close" type="button" aria-label="Закрыть">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M18 6L6 18M6 6l12 12"/>
            </svg>
        </button>
        
        <div class="custom-modal-content">
            {\'FetchIt\'|snippet:[
                \'snippet\'=>\'FormIt\',
                \'hooks\'=>\'email\',
                \'form\'=>\'@INLINE <form id="pom-modal" class="modal-form">
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
            </form>\',
                \'emailTo\'=>"Domoz.77@yandex.ru",
                \'emailSubject\'=>"Заявка с модального окна - {$_modx->resource.pagetitle}",
                \'successMessage\'=>\'<div class="modal-success"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#558255" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg><h3>Спасибо!</h3><p>Мы свяжемся с вами в ближайшее время</p></div>\',
                \'validate\'=>\'af_name:required:minLength=2,af_phone:required,af_email:required:email\'
            ]}
        </div>
    </div>
</div>

<style>
/* ====================================================================== */
/* СТИЛИ МОДАЛЬНОГО ОКНО                                                   */
/* ====================================================================== */
.custom-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease, visibility 0.3s ease;
    padding: 20px;
}

.custom-modal.active {
    opacity: 1;
    visibility: visible;
}

.custom-modal-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    backdrop-filter: blur(5px);
}

.custom-modal-container {
    position: relative;
    background: #fff;
    border-radius: 24px;
    max-width: 500px;
    width: 100%;
    max-height: 90vh;
    overflow-y: auto;
    box-shadow: 0 30px 80px rgba(0, 0, 0, 0.3);
    transform: translateY(30px) scale(0.95);
    transition: transform 0.3s ease;
}

.custom-modal.active .custom-modal-container {
    transform: translateY(0) scale(1);
}

.custom-modal-close {
    position: absolute;
    top: 16px;
    right: 16px;
    width: 40px;
    height: 40px;
    background: #f3f4f6;
    border: none;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    color: #6b7280;
    transition: all 0.2s ease;
    z-index: 10;
}

.custom-modal-close:hover {
    background: #558255;
    color: #fff;
    transform: rotate(90deg);
}

.custom-modal-content {
    padding: 40px;
}

@media (max-width: 640px) {
    .custom-modal-content {
        padding: 30px 20px;
    }
}

/* ====================================================================== */
/* СТИЛИ ФОРМЫ                                                             */
/* ====================================================================== */
.modal-form-header {
    text-align: center;
    margin-bottom: 30px;
}

.modal-form-header h3 {
    font-size: 28px;
    font-weight: 800;
    color: #1a1a1a;
    margin-bottom: 10px;
    line-height: 1.2;
}

.modal-form-header p {
    font-size: 15px;
    color: #6b7280;
    line-height: 1.5;
}

.modal-form-body {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.modal-form-field {
    position: relative;
}

.modal-input {
    width: 100%;
    padding: 14px 18px;
    border: 2px solid #e5e7eb;
    border-radius: 12px;
    font-size: 15px;
    color: #1a1a1a;
    background: #fff;
    transition: all 0.2s ease;
    font-family: inherit;
}

.modal-input:focus {
    outline: none;
    border-color: #558255;
    box-shadow: 0 0 0 4px rgba(85, 130, 85, 0.1);
}

.modal-input::placeholder {
    color: #9ca3af;
}

.error_namemodal {
    display: none;
    color: #ef4444;
    font-size: 12px;
    margin-top: 4px;
}

.modal-form-checkbox {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    margin-top: 4px;
}

.modal-checkbox {
    width: 18px;
    height: 18px;
    margin-top: 2px;
    accent-color: #558255;
    cursor: pointer;
    flex-shrink: 0;
}

.modal-form-checkbox label {
    font-size: 13px;
    color: #6b7280;
    line-height: 1.5;
    cursor: pointer;
}

.modal-form-checkbox label a {
    color: #558255;
    text-decoration: underline;
}

.modal-form-checkbox label a:hover {
    color: #3d5c3d;
}

.modal-submit-btn {
    width: 100%;
    padding: 16px 24px;
    background: linear-gradient(135deg, #558255 0%, #3d5c3d 100%);
    color: #fff;
    border: none;
    border-radius: 12px;
    font-size: 16px;
    font-weight: 700;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    transition: all 0.3s ease;
    margin-top: 8px;
    box-shadow: 0 8px 20px rgba(85, 130, 85, 0.3);
    font-family: inherit;
}

.modal-submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 28px rgba(85, 130, 85, 0.4);
}

.modal-submit-btn:active {
    transform: translateY(0);
}

.modal-submit-btn svg {
    transition: transform 0.3s ease;
}

.modal-submit-btn:hover svg {
    transform: translateX(4px);
}

/* Сообщение об успехе */
.modal-success {
    text-align: center;
    padding: 30px 20px;
}

.modal-success svg {
    margin: 0 auto 20px;
    display: block;
}

.modal-success h3 {
    font-size: 24px;
    font-weight: 800;
    color: #1a1a1a;
    margin-bottom: 10px;
}

.modal-success p {
    font-size: 15px;
    color: #6b7280;
}

/* Блокировка скролла при открытом модальном окне */
body.modal-open {
    overflow: hidden;
}
</style>

{ignore}
<script>
document.addEventListener(\'DOMContentLoaded\', function() {
    
    const modal = document.getElementById(\'modal-form\');
    const closeBtn = modal.querySelector(\'.custom-modal-close\');
    const overlay = modal.querySelector(\'.custom-modal-overlay\');
    
    if (!modal) {
        console.error(\'❌ Модальное окно не найдено!\');
        return;
    }
    
    // === Открытие модального окна ===
    function openModal() {
        modal.classList.add(\'active\');
        document.body.classList.add(\'modal-open\');
        console.log(\'Модальное окно открыто\');
    }
    
    // === Закрытие модального окна ===
    function closeModal() {
        modal.classList.remove(\'active\');
        document.body.classList.remove(\'modal-open\');
        console.log(\'Модальное окно закрыто\');
    }
    
    // === Обработчик клика на кнопки с классом modal_window ===
    document.addEventListener(\'click\', function(e) {
        const trigger = e.target.closest(\'.modal_window\');
        if (trigger) {
            e.preventDefault();
            e.stopPropagation();
            openModal();
        }
    });
    
    // === Закрытие по кнопке X ===
    if (closeBtn) {
        closeBtn.addEventListener(\'click\', closeModal);
    }
    
    // === Закрытие по клику на overlay ===
    if (overlay) {
        overlay.addEventListener(\'click\', closeModal);
    }
    
    // === Закрытие по Escape ===
    document.addEventListener(\'keydown\', function(e) {
        if (e.key === \'Escape\' && modal.classList.contains(\'active\')) {
            closeModal();
        }
    });
    
    console.log(\'Скрипт модального окна загружен\');
});
</script>
[[$phoneFormat]]
<script>
document.addEventListener(\'fetchit:success\', function () {
    ym(108461808, \'reachGoal\', \'FORM_SEND\');
});
</script>
{/ignore}',
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
      'phoneFormat' => 
      array (
        'fields' => 
        array (
          'id' => 31,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'phoneFormat',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<style>
    .iti__selected-dial-code {
        color: #000;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@27.1.3/dist/js/intlTelInputWithUtils.min.js" defer></script>

<script defer>
document.addEventListener(\'DOMContentLoaded\', function () {

    document.querySelectorAll("[data-type-phone]").forEach(function(input) {
        window.intlTelInput(input, {
            initialCountry: "ru",
            separateDialCode: true,
            formatAsYouType: true,
        });
    });

    document.querySelectorAll(\'input[data-type-phone]\').forEach(function (input) {

        input.addEventListener(\'input\', function (e) {

            let value = e.target.value.replace(/\\D/g, \'\');

            if (e.target.value.includes(\'+7\')) {
                value = \'9\' + value.substring(1);
            } else if (
                value.length > 0 &&
                (
                    value[0] === \'8\' ||
                    (value[0] >= \'0\' && value[0] <= \'6\') ||
                    value[0] === \'9\'
                )
            ) {
                value = \'9\' + value.substring(1);
            }

            // Максимум 10 цифр
            value = value.substring(0, 10);

            if (value.length > 0) {

                let formatted = \'\';

                if (value.length >= 1) formatted += \'(\' + value.substring(0, 3);
                if (value.length >= 4) formatted += \') \' + value.substring(3, 6);
                if (value.length >= 7) formatted += \'-\' + value.substring(6, 8);
                if (value.length >= 9) formatted += \'-\' + value.substring(8, 10);

                e.target.value = formatted;

            } else {
                e.target.value = \'\';
            }

            // Сбрасываем ошибку при вводе
            e.target.setCustomValidity(\'\');
        });

        // Проверка после выхода из поля
        input.addEventListener(\'blur\', function () {

            const digits = this.value.replace(/\\D/g, \'\');

            if (digits.length !== 10) {
                this.setCustomValidity(\'Введите полный номер телефона\');
            } else if (!/^9\\d{9}$/.test(digits)) {
                this.setCustomValidity(\'Введите корректный мобильный номер\');
            } else {
                this.setCustomValidity(\'\');
            }

        });

    });

    // Проверка при отправке формы
    document.querySelectorAll(\'form\').forEach(function(form){

        form.addEventListener(\'submit\', function(e){

            const phone = form.querySelector(\'[data-type-phone]\');
            if (!phone) return;

            const digits = phone.value.replace(/\\D/g, \'\');

            if (digits.length !== 10 || !/^9\\d{9}$/.test(digits)) {
                e.preventDefault();
                phone.setCustomValidity(\'Введите полный корректный номер телефона\');
                phone.reportValidity();
                phone.focus();
            }

        });

    });

});
</script>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<style>
    .iti__selected-dial-code {
        color: #000;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@27.1.3/dist/js/intlTelInputWithUtils.min.js" defer></script>

<script defer>
document.addEventListener(\'DOMContentLoaded\', function () {

    document.querySelectorAll("[data-type-phone]").forEach(function(input) {
        window.intlTelInput(input, {
            initialCountry: "ru",
            separateDialCode: true,
            formatAsYouType: true,
        });
    });

    document.querySelectorAll(\'input[data-type-phone]\').forEach(function (input) {

        input.addEventListener(\'input\', function (e) {

            let value = e.target.value.replace(/\\D/g, \'\');

            if (e.target.value.includes(\'+7\')) {
                value = \'9\' + value.substring(1);
            } else if (
                value.length > 0 &&
                (
                    value[0] === \'8\' ||
                    (value[0] >= \'0\' && value[0] <= \'6\') ||
                    value[0] === \'9\'
                )
            ) {
                value = \'9\' + value.substring(1);
            }

            // Максимум 10 цифр
            value = value.substring(0, 10);

            if (value.length > 0) {

                let formatted = \'\';

                if (value.length >= 1) formatted += \'(\' + value.substring(0, 3);
                if (value.length >= 4) formatted += \') \' + value.substring(3, 6);
                if (value.length >= 7) formatted += \'-\' + value.substring(6, 8);
                if (value.length >= 9) formatted += \'-\' + value.substring(8, 10);

                e.target.value = formatted;

            } else {
                e.target.value = \'\';
            }

            // Сбрасываем ошибку при вводе
            e.target.setCustomValidity(\'\');
        });

        // Проверка после выхода из поля
        input.addEventListener(\'blur\', function () {

            const digits = this.value.replace(/\\D/g, \'\');

            if (digits.length !== 10) {
                this.setCustomValidity(\'Введите полный номер телефона\');
            } else if (!/^9\\d{9}$/.test(digits)) {
                this.setCustomValidity(\'Введите корректный мобильный номер\');
            } else {
                this.setCustomValidity(\'\');
            }

        });

    });

    // Проверка при отправке формы
    document.querySelectorAll(\'form\').forEach(function(form){

        form.addEventListener(\'submit\', function(e){

            const phone = form.querySelector(\'[data-type-phone]\');
            if (!phone) return;

            const digits = phone.value.replace(/\\D/g, \'\');

            if (digits.length !== 10 || !/^9\\d{9}$/.test(digits)) {
                e.preventDefault();
                phone.setCustomValidity(\'Введите полный корректный номер телефона\');
                phone.reportValidity();
                phone.focus();
            }

        });

    });

});
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
      'services_hero_desc' => 
      array (
        'fields' => 
        array (
          'id' => 129,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'textarea',
          'name' => 'services_hero_desc',
          'caption' => 'Описание - services_hero_desc',
          'description' => '',
          'editor_type' => 0,
          'category' => 39,
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
      'services_hero_img' => 
      array (
        'fields' => 
        array (
          'id' => 130,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'image',
          'name' => 'services_hero_img',
          'caption' => 'Фон - services_hero_img',
          'description' => '',
          'editor_type' => 0,
          'category' => 39,
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
      'services_intro' => 
      array (
        'fields' => 
        array (
          'id' => 131,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'textarea',
          'name' => 'services_intro',
          'caption' => 'Введение - services_intro',
          'description' => '',
          'editor_type' => 0,
          'category' => 39,
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
      'services_filters' => 
      array (
        'fields' => 
        array (
          'id' => 132,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'textarea',
          'name' => 'services_filters',
          'caption' => 'services_filters',
          'description' => '',
          'editor_type' => 0,
          'category' => 39,
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
      'services_cta_title' => 
      array (
        'fields' => 
        array (
          'id' => 133,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'services_cta_title',
          'caption' => 'services_cta_title',
          'description' => '',
          'editor_type' => 0,
          'category' => 39,
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
      'services_cta_desc' => 
      array (
        'fields' => 
        array (
          'id' => 134,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'services_cta_desc',
          'caption' => 'services_cta_desc',
          'description' => '',
          'editor_type' => 0,
          'category' => 39,
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
      'exclude_services' => 
      array (
        'fields' => 
        array (
          'id' => 139,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'exclude_services',
          'caption' => 'Исключить страницы из поиска',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
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
      'the_link' => 
      array (
        'fields' => 
        array (
          'id' => 140,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'the_link',
          'caption' => 'Принудительное указание ссылки (Используется по нужде)',
          'description' => '',
          'editor_type' => 0,
          'category' => 41,
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