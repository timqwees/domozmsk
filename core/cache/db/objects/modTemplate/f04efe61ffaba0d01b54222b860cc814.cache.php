<?php  return array (
  'id' => 27,
  'source' => 1,
  'property_preprocess' => 0,
  'templatename' => 'цены',
  'description' => '',
  'editor_type' => 0,
  'category' => 0,
  'icon' => '',
  'template_type' => 0,
  'content' => '<!DOCTYPE html>
<html lang="ru" itemscope itemtype="https://schema.org/WebPage">

<head>
    {include \'meta\'}
    <title>{$_modx->resource.pagetitle} — Дом Оз</title>
    <meta name="description" content="{$_modx->resource.description}">
    {$_modx->resource.codecviz}

    <!-- Tailwind CSS (БЕЗ defer!) -->
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
                        dark: \'#1a1a1a\'
                    }
                }
            }
        }
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: \'Inter\', sans-serif;
            background: #fff;
            color: #1a1a1a;
        }

        .section-title {
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: \'\';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #558255, #d4a574);
            border-radius: 2px;
        }

        /* Price table */
        .price-table {
            border-collapse: separate;
            border-spacing: 0;
            width: 100%;
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            border: 1px solid #e5e7eb;
        }

        .price-table thead {
            background: linear-gradient(135deg, #558255 0%, #3d5c3d 100%);
            color: #fff;
        }

        .price-table thead th {
            padding: 18px 24px;
            font-weight: 600;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            text-align: left;
        }

        .price-table thead th:last-child {
            text-align: right;
        }

        .price-table thead th:nth-child(2) {
            text-align: center;
        }

        .price-table tbody tr {
            transition: all 0.25s ease;
            border-bottom: 1px solid #f1f5f1;
        }

        .price-table tbody tr:last-child {
            border-bottom: none;
        }

        .price-table tbody tr:hover {
            background: #f8faf8;
            transform: scale(1.005);
        }

        .price-table tbody td {
            padding: 18px 24px;
            font-size: 15px;
            color: #1a1a1a;
            vertical-align: middle;
        }

        .price-table tbody td:last-child {
            text-align: right;
            font-weight: 700;
            color: #558255;
            font-size: 16px;
            white-space: nowrap;
        }

        .price-table tbody td:nth-child(2) {
            text-align: center;
            color: #6b7280;
            font-size: 14px;
        }

        .price-table tbody td:first-child {
            font-weight: 500;
        }

        /* Section card */
        .price-section {
            transition: all 0.3s ease;
        }

        .price-section:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(85, 130, 85, 0.15);
        }

        .price-section-icon {
            transition: all 0.4s ease;
        }

        .price-section:hover .price-section-icon {
            transform: rotate(-8deg) scale(1.1);
            background: #558255;
            color: #fff;
        }

        /* FAQ accordion */
        .acor-container input[type="checkbox"] {
            display: none;
        }

        .acor-container .acor-body {
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .acor-container input[type="checkbox"]:checked+label+.acor-body {
            max-height: 400px;
            padding: 0 20px 20px;
        }

        .acor-container label {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 20px;
            background: #778A6E;
            border-radius: 10px;
            cursor: pointer;
            border: 1px solid #e5e7eb;
            font-weight: 500;
            color: #fff;
        }

        .acor-container label:hover {
            background: #3d5c3d;
            border-color: #558255;
        }

        .acor-container label::after {
            content: \'+\';
            font-size: 22px;
            color: #558255;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
            border-radius: 50%;
            transition: all 0.3s;
            flex-shrink: 0;
        }

        .acor-container input[type="checkbox"]:checked+label::after {
            content: \'−\';
            background: #558255;
            color: #fff;
        }

        /* Feature card */
        .feature-card {
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        /* Sticky TOC */
        .toc-item {
            transition: all 0.2s ease;
        }

        .toc-item:hover {
            background: #f8faf8;
            color: #558255;
            padding-left: 24px;
        }

        /* Mobile table */
        @media (max-width: 640px) {
            .price-table thead {
                display: none;
            }

            .price-table tbody tr {
                display: block;
                padding: 16px;
                margin-bottom: 12px;
                border: 1px solid #e5e7eb;
                border-radius: 12px;
            }

            .price-table tbody td {
                display: flex;
                justify-content: space-between;
                padding: 8px 0;
                text-align: right;
                border: none;
            }

            .price-table tbody td::before {
                content: attr(data-label);
                font-weight: 600;
                color: #6b7280;
                text-align: left;
                font-size: 13px;
            }

            .price-table tbody td:last-child {
                font-size: 18px;
                color: #558255;
                border-top: 1px dashed #e5e7eb;
                padding-top: 12px;
                margin-top: 4px;
            }
        }
    </style>

    <!-- Breadcrumb Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Главная", "item": "https://domozmsk.ru/" },
            { "@type": "ListItem", "position": 2, "name": "Цены", "item": "https://domozmsk.ru/tseny/" }
        ]
    }
    </script>
</head>

<body class="antialiased">

    {include \'header\'}

    <main itemprop="mainContentOfPage">

<!-- ====================================================================== -->
<!-- HERO: Цены (чистый, но эстетичный)                               -->
<!-- ====================================================================== -->
<section class="relative min-h-[100dvh] flex items-center justify-center overflow-hidden">
    <!-- Фоновое изображение -->
    {set $heroImg = json_decode($_modx->resource.baner_img, true)}
    {if $heroImg}
    {foreach $heroImg as $img}
    <picture>
        <source media="(max-width: 768px)" srcset="{$img.img_mob}">
        <img loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover" src="{$img.img}"
            alt="Цены на ландшафтный дизайн">
    </picture>
    {/foreach}
    {else}
    <img loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover"
        src="/assets/img/price/price-hero.jpg" alt="Цены на ландшафтный дизайн">
    {/if}
    
    <!-- Затемнение для читаемости -->
    <div class="absolute inset-0 bg-gradient-to-b from-black/65 via-black/45 to-black/75"></div>

    <!-- Контент -->
    <div class="hero-content relative z-10 text-center text-white px-4 max-w-4xl mx-auto py-20">
        
        <!-- Метка -->
        <span class="inline-block px-4 py-1.5 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full text-sm font-medium tracking-wide mb-6">
            Актуальные цены 2026
        </span>

        <!-- Заголовок H1 -->
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6 tracking-tight">
            {$_modx->resource.baner_h1 ?: \'Цены на ландшафтный дизайн\'}
        </h1>

        <!-- Описание -->
        <span class="text-lg md:text-xl leading-relaxed max-w-2xl mx-auto mb-10">
            {$_modx->resource.baner_des ?: \'Прозрачное ценообразование без скрытых платежей. Фиксируем стоимость в договоре. Бесплатный выезд и консультация.\'}
        </span>

        <!-- Блок с ценами -->
        {if $_modx->resource.baner_price}
        <div class="bg-white/10 backdrop-blur-md rounded-2xl p-6 md:p-8 border border-white/20 max-w-3xl mx-auto mb-10">
            <div class="text-white/90 text-base md:text-lg leading-relaxed">
                {$_modx->resource.baner_price|raw}
            </div>
        </div>
        {/if}
        
                <!-- Быстрые якоря (текстовые, без иконок) -->
        <div class="my-10 flex flex-wrap items-center justify-center gap-3 text-sm text-white/90">
            <a href="#price-list" class="px-5 py-2.5 bg-white/10 backdrop-blur-sm rounded-full border border-white/20 hover:bg-[#558255] hover:border-[#558255] transition">
                Полный прайс
            </a>
            <a href="#project" class="px-5 py-2.5 bg-white/10 backdrop-blur-sm rounded-full border border-white/20 hover:bg-[#558255] hover:border-[#558255] transition">
                Проектирование
            </a>
            <a href="#works" class="px-5 py-2.5 bg-white/10 backdrop-blur-sm rounded-full border border-white/20 hover:bg-[#558255] hover:border-[#558255] transition">
                Работы
            </a>
            <a href="#greening" class="px-5 py-2.5 bg-white/10 backdrop-blur-sm rounded-full border border-white/20 hover:bg-[#558255] hover:border-[#558255] transition">
                Озеленение
            </a>
        </div>

        <!-- Кнопка -->
        {if $_modx->resource.baner_button_text}
        <a href="{$_modx->resource.baner_button_link ?: \'#request\'}"
           class="inline-block px-8 py-4 bg-[#558255] hover:bg-[#3d5c3d] text-white font-semibold rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-0.5">
            {$_modx->resource.baner_button_text}
        </a>
        {/if}
    </div>
</section>

<style>
    .hero-content > * { opacity: 0; transform: translateY(20px); animation: heroFadeUp 0.8s ease forwards; }
    .hero-content > *:nth-child(1) { animation-delay: 0.1s; }
    .hero-content > *:nth-child(2) { animation-delay: 0.2s; }
    .hero-content > *:nth-child(3) { animation-delay: 0.3s; }
    .hero-content > *:nth-child(4) { animation-delay: 0.4s; }
    .hero-content > *:nth-child(5) { animation-delay: 0.5s; }
    @keyframes heroFadeUp { to { opacity: 1; transform: translateY(0); } }
</style>

        <!-- ====================================================================== -->
        <!-- ПРЕИМУЩЕСТВА: Почему цены честные                               -->
        <!-- ====================================================================== -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-4 max-w-6xl">

                <div class="text-center mb-16">
                    <span class="text-sm font-bold tracking-widest text-[#558255] uppercase mb-3 block">Наши
                        принципы</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">Почему нам
                        доверяют</h2>
                </div>

                <div class="grid md:grid-cols-3 gap-6">
                    <div
                        class="feature-card bg-[#f8faf8] p-8 rounded-2xl border border-gray-100 text-center group cursor-pointer">
                        <div
                            class="w-16 h-16 mx-auto mb-5 flex items-center justify-center bg-[#558255]/10 rounded-2xl text-[#558255] group-hover:bg-[#558255] group-hover:text-white transition">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a1a1a] mb-3">Фиксированная смета</h3>
                        <p class="text-[#1a1a1a] text-sm leading-relaxed">Цена в договоре = цена в реальности. Никаких
                            «внезапных» доплат в процессе работ.</p>
                    </div>

                    <div
                        class="feature-card bg-[#f8faf8] p-8 rounded-2xl border border-gray-100 text-center group cursor-pointer">
                        <div
                            class="w-16 h-16 mx-auto mb-5 flex items-center justify-center bg-[#558255]/10 rounded-2xl text-[#558255] group-hover:bg-[#558255] group-hover:text-white transition">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a1a1a] mb-3">Без посредников</h3>
                        <p class="text-[#1a1a1a] text-sm leading-relaxed">Штатные бригады и собственные материалы —
                            поэтому цены ниже рыночных на 15–20%.</p>
                    </div>

                    <div
                        class="feature-card bg-[#f8faf8] p-8 rounded-2xl border border-gray-100 text-center group cursor-pointer">
                        <div
                            class="w-16 h-16 mx-auto mb-5 flex items-center justify-center bg-[#558255]/10 rounded-2xl text-[#558255] group-hover:bg-[#558255] group-hover:text-white transition">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a1a1a] mb-3">Гарантия 5 лет</h3>
                        <p class="text-[#1a1a1a] text-sm leading-relaxed">Даём официальную гарантию на все виды работ.
                            Бесплатно устраняем любые недочёты.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- ПРАЙС-ЛИСТ (из TV price_list)                                   -->
        <!-- ====================================================================== -->
        <section class="py-24 bg-[#f8faf8] relative overflow-hidden" id="price-list">
            <!-- Декоративный фон -->
            <div class="absolute inset-0 opacity-20"
                style="background-image: radial-gradient(#558255 1px, transparent 1px); background-size: 30px 30px;">
            </div>

            <div class="container mx-auto px-4 relative z-10">

                <div class="text-center mb-16">
                    <span class="text-sm font-bold tracking-widest text-[#558255] uppercase mb-3 block">Прайс-лист
                        2026</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">Стоимость работ
                    </h2>
                    <p class="mt-6 text-[#1a1a1a] text-lg max-w-3xl mx-auto">
                        Точная стоимость рассчитывается после выезда специалиста и зависит от площади участка, его
                        состояния и объёма работ. Ниже — ориентировочные цены.
                    </p>
                </div>

                <!-- Вывод секций из TV price_list -->
                {set $priceList = json_decode($_modx->resource.price_list, true)}
                {if $priceList}
                <div class="max-w-5xl mx-auto space-y-12">
                    {foreach $priceList as $i => $section}
                    <div class="price-section bg-white rounded-3xl p-6 md:p-10 shadow-lg border border-gray-100"
                        id="section-{$i}">

                        <!-- Заголовок секции -->
                        <div class="flex items-center gap-4 mb-8 pb-6 border-b border-gray-100">
                            <div
                                class="price-section-icon w-14 h-14 flex-shrink-0 flex items-center justify-center bg-[#558255]/10 text-[#558255] rounded-2xl">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl md:text-3xl font-extrabold text-[#1a1a1a]">
                                    {$section.section_title}</h3>
                                <p class="text-sm text-[#6b7280] mt-1">
                                    {count($section.items)} {if count($section.items) % 10 == 1 && count($section.items) % 100 != 11}позиция{elseif count($section.items) % 10 >= 2 && count($section.items) % 10 <= 4 && (count($section.items) % 100 < 10 || count($section.items) % 100 >= 20)}позиции{else}позиций{/if}
                                </p>
                            </div>
                        </div>

                        <!-- Таблица -->
                        <div class="overflow-x-auto">
                            <table class="price-table">
                                <thead>
                                    <tr>
                                        <th>Наименование</th>
                                        <th>Ед. изм.</th>
                                        <th>Цена</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {foreach $section.items as $item}
                                    <tr>
                                        <td data-label="Наименование">{$item.name}</td>
                                        <td data-label="Ед. изм.">{$item.unit}</td>
                                        <td data-label="Цена">{$item.price}</td>
                                    </tr>
                                    {/foreach}
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {/foreach}
                </div>
                {else}
                <!-- Заглушка, если TV пустой -->
                <div class="max-w-3xl mx-auto text-center bg-white p-12 rounded-3xl shadow-lg">
                    <p class="text-lg text-[#1a1a1a]">Прайс-лист формируется. Пожалуйста, оставьте заявку — мы
                        рассчитаем стоимость вашего проекта бесплатно.</p>
                    <button
                        class="modal_window inline-block mt-6 px-8 py-4 bg-[#558255] text-white rounded-xl font-bold hover:bg-[#3d5c3d] transition">
                        Получить расчёт
                    </button>
                </div>
                {/if}

                <!-- Примечание -->
                <div class="max-w-5xl mx-auto mt-12 bg-[#d4a574]/10 border border-[#d4a574]/30 rounded-2xl p-6 md:p-8">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-[#d4a574] rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-[#1a1a1a] mb-2">Обратите внимание</h4>
                            <p class="text-[#1a1a1a] text-sm leading-relaxed">
                                Указанные цены являются ориентировочными. Окончательная стоимость зависит от площади
                                участка, сложности рельефа, удалённости от Москвы и выбранных материалов. Точную смету
                                мы составляем <b>бесплатно</b> после выезда специалиста на объект.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- ЭТАПЫ РАБОТЫ: как мы формируем цену                             -->
        <!-- ====================================================================== -->
        <section class="py-24 bg-white">
            <div class="container mx-auto px-4 max-w-6xl">

                <div class="text-center mb-16">
                    <span class="text-sm font-bold tracking-widest text-[#558255] uppercase mb-3 block">Процесс</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">Как мы работаем
                    </h2>
                </div>

                <div class="grid md:grid-cols-4 gap-6 relative">
                    <!-- Линия соединения -->
                    <div class="hidden md:block absolute top-12 left-[12%] right-[12%] h-0.5 bg-gradient-to-r from-[#558255] via-[#d4a574] to-[#558255]"></div>

                    <div class="relative text-center group">
                        <div
                            class="w-24 h-24 mx-auto mb-5 bg-white border-4 border-[#558255] rounded-full flex items-center justify-center text-2xl font-extrabold text-[#558255] relative z-10 group-hover:bg-[#558255] group-hover:text-white transition">
                            1
                        </div>
                        <h3 class="text-lg font-bold text-[#1a1a1a] mb-2">Заявка</h3>
                        <p class="text-sm text-[#6b7280]">Оставляете заявку — перезваниваем за 15 минут</p>
                    </div>

                    <div class="relative text-center group">
                        <div
                            class="w-24 h-24 mx-auto mb-5 bg-white border-4 border-[#558255] rounded-full flex items-center justify-center text-2xl font-extrabold text-[#558255] relative z-10 group-hover:bg-[#558255] group-hover:text-white transition">
                            2
                        </div>
                        <h3 class="text-lg font-bold text-[#1a1a1a] mb-2">Выезд</h3>
                        <p class="text-sm text-[#6b7280]">Бесплатно приезжаем, делаем замеры и фото</p>
                    </div>

                    <div class="relative text-center group">
                        <div
                            class="w-24 h-24 mx-auto mb-5 bg-white border-4 border-[#558255] rounded-full flex items-center justify-center text-2xl font-extrabold text-[#558255] relative z-10 group-hover:bg-[#558255] group-hover:text-white transition">
                            3
                        </div>
                        <h3 class="text-lg font-bold text-[#1a1a1a] mb-2">Смета</h3>
                        <p class="text-sm text-[#6b7280]">Составляем подробную смету с фиксированной ценой</p>
                    </div>

                    <div class="relative text-center group">
                        <div
                            class="w-24 h-24 mx-auto mb-5 bg-white border-4 border-[#558255] rounded-full flex items-center justify-center text-2xl font-extrabold text-[#558255] relative z-10 group-hover:bg-[#558255] group-hover:text-white transition">
                            4
                        </div>
                        <h3 class="text-lg font-bold text-[#1a1a1a] mb-2">Реализация</h3>
                        <p class="text-sm text-[#6b7280]">Подписываем договор и приступаем к работам</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- CTA: Точный расчёт                                              -->
        <!-- ====================================================================== -->
        <section class="py-24 bg-[#778A6E] text-white text-center relative overflow-hidden">
            <div class="absolute inset-0 opacity-10"
                style="background-image: radial-gradient(#d4a574 1px, transparent 1px); background-size: 25px 25px;">
            </div>

            <div class="relative z-10 max-w-3xl mx-auto px-4">
                <span
                    class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm text-white text-sm font-bold rounded-full mb-6 border border-white/20">
                    Бесплатно
                </span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold mb-6 text-white">
                    {$_modx->resource.price_cta_title ?: \'Рассчитаем стоимость вашего проекта\'}
                </h2>
                <p class="text-lg text-white/90 mb-10 max-w-2xl mx-auto">
                    {$_modx->resource.price_cta_desc ?: \'Оставьте заявку — специалист выедет на участок, сделает замеры
                    и подготовит точную смету. Это бесплатно и ни к чему не обязывает.\'}
                </p>
                <button
                    class="modal_window inline-block px-12 py-5 bg-[#558255] text-white rounded-xl font-bold text-lg hover:bg-[#3d5c3d] transition shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                    Получить точную смету
                </button>
                <p class="mt-6 text-sm text-white/60">
                    Ответим за 15 минут • Выезд бесплатный • Без обязательств
                </p>
            </div>
        </section>

                <!-- ====================================================================== -->
        <!-- FAQ (ЧАСТЫЕ ВОПРОСЫ) — ПРЕМИУМ ВЕРСИЯ                               -->
        <!-- ====================================================================== -->
        <section class="py-24 bg-white overflow-hidden" id="faq">
            <div class="max-w-7xl mx-auto px-4">

                <!-- Заголовок секции -->
                <div class="relative text-center mb-16">
                    <!-- Фоновая иконка -->
                    <img loading="lazy" decoding="async" class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-32 md:w-32 opacity-45 pointer-events-none"
                        src="/assets/img/услуги_иконки/фоновые_иконки/4.svg" alt="">

                    <!-- Текст (поверх иконки) -->
                    <div class="relative z-10">
                        <span class="text-sm font-bold tracking-widest text-[#558255] uppercase mb-3 block">FAQ</span>
                        <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">Часто
                            задаваемые вопросы</h2>
                    </div>
                </div>

                <!-- Контейнер аккордеона -->
                <div class="space-y-4">

                    {set $voprosi = json_decode($_modx->resource.vopros, true)}

                    {if $voprosi}
                    {foreach $voprosi as $vop}
                    <div class="group bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-[0_4px_15px_-5px_rgba(0,0,0,0.05)] hover:border-[#558255]/40 transition-all duration-300"
                        itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">

                        <!-- Скрытый чекбокс для управления состоянием -->
                        <input type="checkbox" id="faq-item-{$vop.number}" class="hidden peer">

                        <!-- Заголовок вопроса (Label) -->
                        <label for="faq-item-{$vop.number}"
                            class="flex items-center justify-between p-6 cursor-pointer bg-white hover:bg-gray-50/50 transition-colors duration-300 select-none">
                            <span itemprop="name" class="text-[#1a1a1a] text-lg font-semibold pr-4 leading-tight">
                                {$vop.vopr}
                            </span>

                            <!-- Иконка плюса/минуса -->
                            <span
                                class="w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-[#f3f4f6] text-[#558255] transition-all duration-300 peer-checked:bg-[#558255] peer-checked:text-white">
                                <svg class="w-5 h-5 transition-transform duration-300 peer-checked:rotate-45"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M12 4v16m8-8H4" />
                                </svg>
                            </span>
                        </label>

                        <!-- Блок с ответом (Анимация через CSS Grid) -->
                        <div class="grid grid-rows-[0fr] transition-[grid-template-rows] duration-300 ease-in-out peer-checked:grid-rows-[1fr]"
                            itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div class="overflow-hidden">
                                <div itemprop="text"
                                    class="p-6 pt-2 text-[#6b7280] text-base leading-relaxed border-t border-gray-100">
                                    {$vop.otv}
                                </div>
                            </div>
                        </div>

                    </div>
                    {/foreach}
                    {else}
                    <div class="text-center p-8 bg-white rounded-2xl border border-gray-200">
                        <p class="text-[#6b7280]">В данный момент вопросы не загружены.</p>
                    </div>
                    {/if}

                </div>

            </div>
        </section>
        
        <section class="py-24"></section>

        <!-- Schema.org Organization -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Дом Оз",
            "url": "https://domozmsk.ru",
            "logo": "https://domozmsk.ru/assets/img/logo.png",
            "foundingDate": "2018",
            "description": "Ландшафтная компания полного цикла. Проектирование, мощение, озеленение, дренаж, автополив.",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Москва",
                "addressCountry": "RU"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "{(\'phone\'|config)}",
                "contactType": "customer service"
            }
        }
        </script>

    </main>

    {include \'footer\'}
    {include \'modal\'}
    {include \'social\'}

    <script src="/assets/bibliotek/jquery/jqwery.js"></script>
    <script src="/assets/js/script.js?v={$_modx->config.cache_version}"></script>

    <script>
        document.addEventListener(\'DOMContentLoaded\', function () {
            // Параллакс для фона героя
            const parallaxBg = document.querySelector(\'.parallax-bg\');
            if (parallaxBg) {
                window.addEventListener(\'scroll\', function () {
                    const scrolled = window.pageYOffset;
                    parallaxBg.style.transform = \'translateY(\' + (scrolled * 0.3) + \'px)\';
                });
            }

            // Анимация появления карточек и секций
            const animElements = document.querySelectorAll(\'.price-section, .feature-card\');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = \'1\';
                        entry.target.style.transform = \'translateY(0)\';
                    }
                });
            }, { threshold: 0.1 });

            animElements.forEach(el => {
                el.style.opacity = \'0\';
                el.style.transform = \'translateY(30px)\';
                el.style.transition = \'opacity 0.6s ease, transform 0.6s ease\';
                observer.observe(el);
            });

            // Плавный скролл по якорям
            document.querySelectorAll(\'a[href^="#"]\').forEach(anchor => {
                anchor.addEventListener(\'click\', function (e) {
                    const target = document.querySelector(this.getAttribute(\'href\'));
                    if (target) {
                        e.preventDefault();
                        target.scrollIntoView({ behavior: \'smooth\', block: \'start\' });
                    }
                });
            });
        });
    </script>
    
    [[$modal_window]]

</body>

</html>',
  'locked' => 0,
  'properties' => 'a:0:{}',
  'static' => 0,
  'static_file' => '',
);