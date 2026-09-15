<?php  return array (
  'id' => 17,
  'source' => 1,
  'property_preprocess' => 0,
  'templatename' => 'услуги - без переходов',
  'description' => 'Template',
  'editor_type' => 0,
  'category' => 27,
  'icon' => 'icon-briefcase',
  'template_type' => 0,
  'content' => '<!DOCTYPE html>
<html lang="ru" itemscope itemtype="https://schema.org/WebPage">

<head>
    {include \'meta\'}
    {$_modx->resource.codecviz}
    {set $sliders = json_decode($_modx->resource.baner_img, true)}
    
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif;
            background: #fff;
            color: #1a1a1a;
            overflow-x: hidden;
        }

        /* --- АНИМАЦИЯ REVEAL --- */
        @supports (animation-timeline: view()) {
            .reveal {
                opacity: 0;
                transform: translateY(80px) scale(0.9);
                filter: blur(10px);
                animation: revealAnim linear both;
                animation-timeline: view();
                animation-range-start: entry 20%;
                animation-range-end: entry 80%;
            }

            @keyframes revealAnim {
                from {
                    opacity: 0;
                    transform: translateY(80px) scale(0.9);
                    filter: blur(10px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0) scale(1);
                    filter: blur(0);
                }
            }
        }

        @supports not (animation-timeline: view()) {
            .reveal {
                opacity: 1;
                transform: none;
                filter: none;
            }
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
            background: linear-gradient(90deg, #3F5F3F, #d4a574);
            border-radius: 2px;
        }

        .text-center .section-title::after {
            left: 50%;
            transform: translateX(-50%);
        }

        .hero-slider {
            height: 100vh;
            min-height: 700px;
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
            background: linear-gradient(to right, rgba(0, 0, 0, 0.85) 0%, rgba(0, 0, 0, 0.5) 50%, transparent 100%);
        }

        @keyframes ticker {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .animate-ticker {
            animation: ticker 35s linear infinite;
        }

        .timeline-line {
            position: absolute;
            left: 24px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, #3F5F3F, #d4a574);
            z-index: 0;
        }

        @media (min-width: 768px) {
            .timeline-line {
                left: 50%;
                transform: translateX(-50%);
            }
        }

        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #3F5F3F;
            border-radius: 4px;
        }

        /* Accessibility: увеличенные области прикосновения */
        .footer__social-social a,
        .abssocial a {
            min-width: 48px;
            min-height: 48px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px;
        }

        /* LCP: текст hero виден до загрузки Tailwind */
        .hero-slider h1 {
            font-size: clamp(1.875rem, 5vw, 3.75rem);
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 1.5rem;
        }

        /* Структура страницы: якоря не прячутся под фиксированным/верхним меню */
        section[id] {
            scroll-margin-top: 110px;
        }

        @media (max-width: 767px) {
            section[id] {
                scroll-margin-top: 80px;
            }
        }
        
        body {
            font-family: \'Inter\', sans-serif;
            background: #fff;
            color: #1a1a1a;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .animate-marquee {
            animation: marquee 30s linear infinite;
        }

        .service-popup li {
            margin: 4px 0;
            color: #4b5563;
            font-size: 14px;
        }

        /* Problems grid */
        .problem-card {
            background: #f8faf8;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 20px;
            text-align: center;
            transition: all 0.3s;
        }

        .problem-card:hover {
            border-color: #558255;
            transform: translateY(-3px);
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
            max-height: 300px;
            padding: 0 20px 20px;
        }

        .acor-container label {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 20px;
            background: #f8f9fa;
            border-radius: 10px;
            cursor: pointer;
            border: 1px solid #e5e7eb;
            font-weight: 500;
        }

        .acor-container label:hover {
            background: #f0f0f0;
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
        }

        .acor-container input[type="checkbox"]:checked+label::after {
            content: \'−\';
            background: #558255;
            color: #fff;
        }

        /* Carousel styles */
        .hero-carousel .swiper-slide {
            height: 500px;
        }

        .hero-carousel .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .hero-carousel .swiper-slide {
                height: 400px;
            }
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: inherit;
        }

        .swiper-pagination-bullet-active {
            background: #95dd95 !important;
        }

        .swiper-pagination-bullet {
            background: var(--swiper-pagination-bullet-inactive-color, #ffffff);
        }

        /* Hero Slider Styles */
        .hero-swiper {
            height: 100%;
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
            background: linear-gradient(to right, rgba(0, 0, 0, 0.65) 0%, rgba(0, 0, 0, 0.4) 50%, transparent 100%);
        }
    </style>
</head>

<body class="antialiased">

    {include \'header\'}

    <main id="main-content" itemprop="mainContentOfPage">

        <!-- Доступность: быстрый переход к основному содержимому -->
        <a href="#main-content"
           class="sr-only focus:not-sr-only focus:fixed focus:z-[9999] focus:top-4 focus:left-4 focus:px-4 focus:py-3 focus:bg-white focus:text-gray-900 focus:rounded-lg focus:shadow-lg">
            Перейти к содержимому
        </a>

        <!-- ====================================================================== -->
        <!-- HERO SECTION (Слайдер + Форма захвата)                              -->
        <!-- ====================================================================== -->
        <section class="relative min-h-auto overflow-hidden py-14">
            
            <!-- Хлебные крошки -->
            <nav aria-label="Хлебные крошки"
                 class="z-10 absolute bg-white w-auto top-[65px] px-4 py-4 text-sm text-gray-500"
                 itemscope
                 itemtype="https://schema.org/BreadcrumbList">
            
                <ol class="flex flex-wrap items-center gap-2">
            
                    <li itemprop="itemListElement"
                        itemscope
                        itemtype="https://schema.org/ListItem"
                        class="flex items-center gap-2">
            
                        <a href="/"
                           itemprop="item"
                           class="hover:text-[#558255] transition">
                            <span itemprop="name">Главная</span>
                        </a>
            
                        <meta itemprop="position" content="1">
            
                        <span aria-hidden="true" class="text-gray-300">/</span>
                    </li>
            
                    <li itemprop="itemListElement"
                        itemscope
                        itemtype="https://schema.org/ListItem"
                        class="flex items-center gap-2">
            
                        <span itemprop="name"
                              class="text-gray-700 font-medium">
                            {$_modx->resource.pagetitle}
                        </span>
            
                        <meta itemprop="position" content="2">
                    </li>
            
                </ol>
            </nav>
            
            <div class="flex items-center">

            <!-- Слайдер фона (вместо статичного изображения) -->
            <div class="absolute inset-0 z-0">
                <div class="swiper hero-swiper h-full">
                    <div class="swiper-wrapper">
                        {set $sliders = json_decode($_modx->resource.baner_img, true)}
                        {if $sliders}
                        {foreach $sliders as $slid}
                        <div class="swiper-slide hero-slide">
                            <picture>
                                <source media="(max-width: 768px)" srcset="{$slid.img_mob | phpthumbon : \'w=768&f=webp&q=75\'}">
                                <img {if $slid@first}fetchpriority="high"{else}loading="lazy"{/if} decoding="async" class="w-full h-full object-cover"
                                    src="{$slid.img | phpthumbon : \'w=1920&f=webp&q=75\'}"
                                    alt="{$_modx->resource.baner_h1}" width="1920" height="1080">
                            </picture>
                            <div class="hero-overlay"></div>
                        </div>
                        {/foreach}
                        {/if}
                    </div>
                </div>
            </div>

            <!-- Контент поверх слайдера -->
            <div class="relative z-10 container mx-auto px-4 py-20 h-auto md:h-[90dvh]">
                <div class="grid lg:grid-cols-12 gap-10 items-center">

                    <!-- ЛЕВАЯ ЧАСТЬ: Текст -->
                    <div class="lg:col-span-6 text-white flex flex-col items-start text-left">

                        <!-- Города (Минимализм, светло-зеленый) -->
                        <div class="flex gap-6 mb-6 text-green-200 text-sm font-medium tracking-wide">
                            <span class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                МОСКВА И МОСКОВСКАЯ ОБЛАСТЬ
                            </span>
                            <span class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                ПОДМОСКОВЬЕ — ВЫЕЗД ЗА 1 ДЕНЬ
                            </span>
                        </div>

                        <!-- H1 Заголовок -->
                        <h1
                            class="text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight mb-6 text-shadow text-left">
                            {$_modx->resource.baner_h1}
                        </h1>

                        <!-- Описание (Увеличенная ширина) -->
                        <p class="text-lg md:text-xl text-white mb-8 leading-relaxed text-left">
                            {$_modx->resource.baner_des}
                        </p>

                        <!-- Кнопки (Как в примере) -->
                        <div class="flex flex-col sm:flex-row gap-4 mb-8 w-full sm:w-auto">
                            <button
                                class="modal_window inline-flex items-center justify-center px-8 py-4 rounded-xl bg-[#558255] text-white font-semibold hover:bg-[#3d5c3d] transition">
                                Рассчитать стоимость
                            </button>
                            <a aria-label="Кнопка повзонить" href="tel:{\'phone\'|config}"
                                class="inline-flex items-center justify-center px-8 py-4 rounded-xl bg-white border border-gray-200 text-gray-900 font-semibold hover:bg-gray-50 transition">
                                Позвонить
                            </a>
                        </div>
                        <p class="text-sm text-white/80 leading-relaxed max-w-xl">
                            {$_modx->resource.pagetitle} под ключ в Москве и Московской области — стоимость, сроки и этапы работ для вашего участка в Подмосковье. Оставьте заявку, рассчитаем цену за 1 день.
                        </p>

                        <!-- Цена (Если есть в TV) -->
                        {if $_modx->resource.baner_price}
                        <div class="hidden md:block text-2xl font-bold text-green-300">
                            {$_modx->resource.baner_price}
                        </div>
                        {/if}
                    </div>

                    <!-- ПРАВАЯ ЧАСТЬ: Форма захвата (Лид-магнит) -->
                    <div class="hidden md:block lg:col-span-6">
                        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden border border-gray-100">

                            <!-- Заголовок формы -->
                            <div
                                class="flex items-center justify-between px-6 py-4 border-b border-gray-100 bg-gray-50">
                                <div class="flex flex-col gap-1">
                                    <div class="text-lg md:text-xl font-bold text-gray-900">Не ждите, получите
                                        консультацию сразу!</div>
                                    <p class="text-xs text-gray-600">Расскажем о стоимости работ за 5 минут</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-5">

                                {\'FetchIt\'|snippet:[
                                \'snippet\'=>\'FormIt\', \'hooks\'=>\'email\',
                                \'form\'=>\'@INLINE <form method="POST" class="md:col-span-3 p-6 bg-white">
                                    <div class="flex flex-col gap-4 text-black">
                                        <input name="Имя" type="text" placeholder="Ваше имя" required
                                            class="!text-black w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#558255] focus:border-transparent transition"
                                            style="color:black">
                                        <input type="tel" name="Телефон" placeholder="(999) 999-99-99" maxlength="18" inputmode="numeric" autocomplete="tel" data-type-phone class="!text-black w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#558255] focus:border-transparent transition" required>
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
                                </form>\',
                                \'emailTo\'=>"{\'email_1\'|config},artemnersisyan777@gmail.com", \'emailSubject\'=>"Заявка c сайта",
                                \'successMessage\'=>\'<div class="w-fit text-center text-white font-bold p-2">Спасибо за обращене, мы скоро свяжемся с вами!</div>\'
                                ]}

                                <!-- Преимущества (справа от полей) -->
                                <div
                                    class="md:col-span-2 bg-gray-50 p-6 flex flex-col justify-center border-l border-gray-100">
                                    <ul class="space-y-4 text-sm text-gray-700">
                                        <li class="flex items-start gap-3">
                                            <i class="fas fa-check-circle text-[#558255] mt-1"></i>
                                            <span><b>Бесплатная</b> консультация инженера</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="fas fa-ruler-combined text-[#558255] mt-1"></i>
                                            <span>Запланируем выезд замерщика<br>(при необходимости)</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="fas fa-shield-alt text-[#558255] mt-1"></i>
                                            <span>Без навязчивых звонков и спама</span>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Марквиз (Бегущая строка) -->
            <div class="absolute bottom-0 left-0 right-0 bg-white border-t border-gray-200 py-3 overflow-hidden z-20">
                <div class="flex whitespace-nowrap animate-marquee text-sm font-medium text-gray-700">
                    <span class="mx-8">Более 120 реализованных проектов в Москве и МО</span>
                    <span class="mx-8">Гарантия на работы до 5 лет</span>
                    <span class="mx-8">Ландшафтная компания полного цикла «Дом Оз»</span>
                    <span class="mx-8">Стоимость работ — смета за 1 день</span>
                    <span class="mx-8">Выезд по Подмосковью бесплатно</span>
                </div>
            </div>

             </div>
        </section>

        {set $problems = json_decode($_modx->resource.problems_list, true)}

        {if $problems}

        <!-- ====================================================================== -->
        <!-- ПРОБЛЕМЫ: С какими проблемами сталкиваются владельцы (TV Dynamic)   -->
        <!-- ====================================================================== -->
        <section class="py-20 bg-[#f8faf8]">
            <div class="container mx-auto px-4">

                <!-- Заголовок секции -->
                <div class="relative text-center mb-16">
                    <div class="relative z-10">
                        <!-- Фоновая иконка -->
                        <img loading="lazy" decoding="async" class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-32 md:w-40 opacity-35 pointer-events-none"
                            src="/assets/img/услуги_иконки/фоновые_иконки/1.svg" alt="фото 1 проблем">

                        <span class="text-sm font-bold tracking-widest text-[#558255] uppercase mb-3 block">Забота о
                            вашем саде</span>
                        <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">
                            {$_modx->resource.problems_title ?: \'С какими проблемами сталкиваются владельцы участков?\'}
                        </h2>
                    </div>
                </div>

                <!-- Описание -->
                {if $_modx->resource.problems_description}
                <div class="max-w-4xl mx-auto mb-12 text-center">
                    <p class="text-lg text-gray-600 leading-relaxed">
                        {$_modx->resource.problems_description}
                    </p>
                </div>
                {/if}

                <!-- Сетка проблем (Динамическая) -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-5xl mx-auto">
                    {foreach $problems as $item}
                    <div
                        class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm hover:border-[#558255] hover:-translate-y-1 transition duration-300 text-center group">
                        <div
                            class="w-20 mx-auto mb-4 rounded-full flex items-center justify-center text-[#558255] transition">
                            {if $item.icon}
                            <!-- Пользовательская иконка (SVG) -->
                            {$item.icon}
                            {else}
                            <!-- Иконка по умолчанию (Листок) -->
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                </path>
                            </svg>
                            {/if}
                        </div>
                        <p class="font-semibold text-[#1a1a1a] text-sm md:text-base leading-snug">
                            {$item.title}
                        </p>
                    </div>
                    {/foreach}
                </div>

                {if $_modx->resource.problems_footer}
                <p class="text-center mt-12 text-lg font-medium text-[#558255]">
                    {$_modx->resource.problems_footer}
                </p>
                {/if}

            </div>
        </section>
        {/if}

        <!-- ====================================================================== -->
        <!-- ВИДЫ ПОКРЫТИЯ (Premium Card Overlay Style)                          -->
        <!-- ====================================================================== -->
        <section id="services" class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4">

                <!-- Заголовок секции -->
                <div class="relative text-center mb-16">
                    <!-- Текст -->
                    <div class="relative z-10">
                        <span
                            class="text-sm font-bold tracking-widest text-[#558255] uppercase mb-3 block">Компетенции</span>
                        <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">
                            {$_modx->resource.vidy_title}</h2>
                    </div>
                </div>

                <!-- Сетка услуг (pdoResources) -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mx-auto mt-6">
                    {\'pdoResources\' | snippet : [
                    \'parents\' => \'0\',
                    \'tpl\' => \'@CODE:
                    <div class="overflow-hidden service-card group border border-gray-200 bg-white shadow-sm rounded-2xl"
                        itemscope itemtype="https://schema.org/Service">
                        <meta itemprop="name" content="{if empty($menutitle)}{$pagetitle}{else}{$menutitle}{/if}">
                        <meta itemprop="description"
                            content="Предложение компании ландшафтного дизайна в Москве и МО - {if empty($menutitle)}{$pagetitle}{else}{$menutitle}{/if} под ключ в Подмосковье. Цены, сроки и стоимость работ.">
                        {if $price_cat}
                        <span itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                            <meta itemprop="priceCurrency" content="RUB">
                            <meta itemprop="price" content="{$price_cat}">
                        </span>
                        {/if}
                        <div class="relative h-52 rounded-2xl">
                            <div class="swiper swiper-type-one w-full h-full">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img decoding="async" itemprop="image" alt="{$pagetitle}" {if $idx == 1}fetchpriority="high"{else}loading="lazy"{/if} src="{$img_cat | phpthumbon : \\\'w=800&h=600&zc=1&f=webp&q=75\\\'}" class="w-full h-full object-cover" width="800" height="600">
                                    </div>
                                </div>
                            </div>
                            <div
                                class="absolute bottom-0 left-0 right-0 z-20 p-4 bg-gradient-to-t from-black/70 to-transparent">
                                {if $price_cat}
                                <div class="text-xs text-black/80 w-fit bg-white rounded-lg px-2 py-1">{$price_cat}
                                </div>
                                {/if}
                                <h3 class="mt-1 font-semibold text-white text-lg text-start" itemprop="name">
                                    {if empty($menutitle)}{$pagetitle}{else}{$menutitle}{/if}
                                </h3>
                            </div>
                        </div>

                    </div>\',
                    \'limit\' => \'6\',
                    \'tvPrefix\' => \'\',
                    \'includeTVs\' => \'img_cat,price_cat,link_cat,categoryi\',
                    \'resources\' => $_modx->resource.categoryi,
                    \'sortby\' => \'menuindex\'
                    ]}
                </div>

                <!-- Главный CTA -->
                <div class="mt-16 text-center">
                    <button
                        class="modal_window inline-flex items-center gap-3 px-10 py-4 bg-[#1a1a1a] text-white rounded-xl font-bold hover:bg-[#558255] transition shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                        <span>Рассчитать стоимость проекта</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- ПРЕИМУЩЕСТВА (Trust Signals)                                     -->
        <!-- ====================================================================== -->
        <section id="advantages" class="py-24 bg-[#f8faf8] relative overflow-hidden">

            <!-- Декоративный фон (еле заметный паттерн или градиент для глубины) -->
            <div class="absolute inset-0 opacity-30"
                style="background-image: radial-gradient(#558255 1px, transparent 1px); background-size: 30px 30px;">
            </div>

            <div class="relative z-10 max-w-7xl mx-auto px-4">

                <!-- Заголовок секции -->
                <div class="relative text-center mb-16">
                    <!-- Фоновая иконка -->
                    <!--<img loading="lazy" decoding="async" class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-32 md:w-40 opacity-45 pointer-events-none"-->
                    <!--    src="/assets/img/услуги_иконки/фоновые_иконки/3.svg" alt="">-->

                    <!-- Текст (поверх иконки) -->
                    <div class="relative z-10">
                        <span class="text-sm font-bold tracking-widest text-[#558255] uppercase mb-3 block">Наши
                            стандарты</span>
                        <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">Почему
                            заказывают Дом&nbsp;Оз в Москве и МО?</h2>
                    </div>
                </div>

                <!-- Сетка преимуществ (4 колонки) -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 px-6">

                    <!-- Карточка 1 -->
                    <div
                        class="bg-white rounded-2xl p-8 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-gray-100 group hover:border-[#558255]/30 transition-all duration-300 hover:-translate-y-1">
                        <!--<div-->
                        <!--    class="w-14 h-14 rounded-xl bg-primary/5 flex items-center justify-center text-primary font-bold text-2xl mb-6 group-hover:bg-primary group-hover:text-white transition duration-300">-->
                        <!--    8+-->
                        <!--</div>-->
                        <img alt="опыт работы" loading="lazy" decoding="async" src="assets/img/услуги_иконки/почему мы/опыт работы.png" class="mx-auto" width="120" height="120" />
                        <h3
                            class="text-lg font-bold text-[#1a1a1a] mb-3 group-hover:text-primary transition text-center">
                            Опыт работы</h3>
                        <p class="text-center text-sm text-gray-500 leading-relaxed">Более 120 реализованных проектов в
                            Москве, Московской области и
                            Подмосковье</p>
                    </div>

                    <!-- Карточка 2 -->
                    <div
                        class="bg-white rounded-2xl p-8 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-gray-100 group hover:border-[#558255]/30 transition-all duration-300 hover:-translate-y-1">
                        <!-- <div
                            class="w-14 h-14 rounded-xl bg-primary/5 flex items-center justify-center text-primary font-bold text-xl mb-6 group-hover:bg-primary group-hover:text-white transition duration-300">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div> -->
                        <img alt="Официально" loading="lazy" decoding="async" src="assets/img/услуги_иконки/почему мы/официально.png" class="mx-auto" width="120" height="120" />
                        <h3
                            class="text-lg font-bold text-[#1a1a1a] mb-3 group-hover:text-primary transition text-center">
                            Официально</h3>
                        <p class="text-center text-sm text-gray-500 leading-relaxed">Работаем по договору с физ. и юр.
                            лицами в Москве и МО.
                            Фиксируем смету и стоимость работ.</p>
                    </div>

                    <!-- Карточка 3 -->
                    <div
                        class="bg-white rounded-2xl p-8 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-gray-100 group hover:border-[#558255]/30 transition-all duration-300 hover:-translate-y-1">
                        <!--<div-->
                        <!--    class="w-14 h-14 rounded-xl bg-primary/5 flex items-center justify-center text-primary font-bold text-xl mb-6 group-hover:bg-primary group-hover:text-white transition duration-300">-->
                        <!--    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">-->
                        <!--        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"-->
                        <!--            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>-->
                        <!--    </svg>-->
                        <!--</div>-->
                        <img alt="Точно в срок" loading="lazy" decoding="async" src="assets/img/услуги_иконки/почему мы/срок.png" class="mx-auto" width="120" height="120" />
                        <h3
                            class="text-lg font-bold text-[#1a1a1a] mb-3 group-hover:text-primary transition text-center">
                            Точно в срок</h3>
                        <p class="text-center text-sm text-gray-500 leading-relaxed">Сдаем объекты день в день. Никаких
                            задержек и
                            «сюрпризов».</p>
                    </div>

                    <!-- Карточка 4 -->
                    <div
                        class="bg-white rounded-2xl p-8 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-gray-100 group hover:border-[#558255]/30 transition-all duration-300 hover:-translate-y-1">
                        <!--<div-->
                        <!--    class="w-14 h-14 rounded-xl bg-primary/5 flex items-center justify-center text-primary font-bold text-xl mb-6 group-hover:bg-primary group-hover:text-white transition duration-300">-->
                        <!--    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">-->
                        <!--        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"-->
                        <!--            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">-->
                        <!--        </path>-->
                        <!--    </svg>-->
                        <!--</div>-->
                        <img alt="Под ключ" loading="lazy" decoding="async" src="assets/img/услуги_иконки/почему мы/под ключ.png" class="mx-auto" width="120" height="120" />
                        <h3
                            class="text-lg font-bold text-[#1a1a1a] mb-3 group-hover:text-primary transition text-center">
                            Под ключ</h3>
                        <p class="text-center text-sm text-gray-500 leading-relaxed">От подготовки основания до
                            финальной уборки
                            территории.</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- ПРОЦЕСС РАБОТЫ (Как мы работаем)                                 -->
        <!-- ====================================================================== -->
        <section id="process" class="relative py-24 bg-[#f8faf8] relative overflow-hidden">

            <!-- Фоновая иконка -->
            <img loading="lazy" decoding="async" class="absolute top-1/2 -translate-y-1/2 w-32 w-[600px] opacity-15 pointer-events-none"
                src="/assets/img/услуги_иконки/фоновые_иконки/1.svg" alt="" style="left: -10rem;
    rotate: 25deg;">
            <img loading="lazy" decoding="async" class="hidden md:block transform -scale-x-100 absolute top-1/2 -translate-y-1/2 w-32 w-[600px] opacity-15 pointer-events-none"
                src="/assets/img/услуги_иконки/фоновые_иконки/1.svg" alt="" style="right: -10rem;
    rotate: -25deg;">

            <!-- Декоративный фон (еле заметный паттерн или градиент для глубины) -->
            <div class="absolute inset-0 opacity-30"
                style="background-image: radial-gradient(#558255 1px, transparent 1px); background-size: 30px 30px;">
            </div>

            <div class="max-w-7xl mx-auto px-4">

                <!-- Заголовок секции -->
                <div class="relative text-center mb-16">
                    <!-- Фоновая иконка -->
                    <!-- <img loading="lazy" decoding="async" class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-32 md:w-40 opacity-15 pointer-events-none"
                        src="/assets/img/услуги_иконки/icon.svg" alt=""> -->

                    <!-- Текст (поверх иконки) -->
                    <div class="relative z-10">
                        <span class="text-sm font-bold tracking-widest text-[#558255] uppercase mb-3 block">Прозрачность
                            на
                            каждом этапе</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">Как мы
                    работаем в Москве и Московской области</h2>
                    </div>
                </div>

                <!-- Сетка этапов -->
                <div class="relative grid grid-cols-1 md:grid-cols-4 gap-8 lg:gap-4">

                    <!-- Линия-соединитель (только десктоп) -->
                    <div
                        class="hidden md:block absolute top-10 left-[12%] right-[12%] h-px bg-gradient-to-r from-transparent via-gray-200 to-transparent">
                    </div>

                    <!-- Этап 1 -->
                    <div class="relative pt-4 group text-center">
                        <div
                            class="w-12 h-12 mx-auto mb-6 flex items-center justify-center rounded-full bg-[#558255] text-white font-bold text-lg relative z-10 shadow-lg ring-4 ring-white group-hover:scale-110 transition-transform duration-300">
                            01</div>
                        <h3 class="text-lg font-bold mb-3 text-[#1a1a1a]">Консультация и выезд</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Выезд инженера, замер участка и
                            анализ грунта — бесплатно. Все условия фиксируем в договоре.</p>
                    </div>

                    <!-- Этап 2 -->
                    <div class="relative pt-4 group text-center">
                        <div
                            class="w-12 h-12 mx-auto mb-6 flex items-center justify-center rounded-full bg-[#558255] text-white font-bold text-lg relative z-10 shadow-lg ring-4 ring-white group-hover:scale-110 transition-transform duration-300">
                            02</div>
                        <h3 class="text-lg font-bold mb-3 text-[#1a1a1a]">Проект и смета</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Раскладка мощения
                            и детальной сметы.
                            Цена и сроки фиксируются до начала работ.</p>
                    </div>

                    <!-- Этап 3 -->
                    <div class="relative pt-4 group text-center">
                        <div
                            class="w-12 h-12 mx-auto mb-6 flex items-center justify-center rounded-full bg-[#558255] text-white font-bold text-lg relative z-10 shadow-lg ring-4 ring-white group-hover:scale-110 transition-transform duration-300">
                            03</div>
                        <h3 class="text-lg font-bold mb-3 text-[#1a1a1a]">Реализация под ключ</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Профессиональная укладка с контролем качества.
                            Еженедельные фотоотчёты о ходе работ.</p>
                    </div>

                    <!-- Этап 4 -->
                    <div class="relative pt-4 group text-center">
                        <div
                            class="w-12 h-12 mx-auto mb-6 flex items-center justify-center rounded-full bg-[#558255] text-white font-bold text-lg relative z-10 shadow-lg ring-4 ring-white group-hover:scale-110 transition-transform duration-300">
                            04</div>
                        <h3 class="text-lg font-bold mb-3 text-[#1a1a1a]">Сдача и гарантия</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Приёмка работ по акту. Предоставляем
                            официальную гарантию до 5 лет и инструкцию по уходу.</p>
                    </div>

                </div>

                <!-- CTA -->
                <div class="mt-16 text-center">
                    <button
                        class="modal_window inline-flex items-center gap-3 px-10 py-4 bg-[#1a1a1a] text-white rounded-xl font-bold hover:bg-[#558255] transition shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                        <span>Обсудить проект</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- 5. ГАЛЕРЕЯ (Swiper)                                                 -->
        <!-- ====================================================================== -->
        {if $_modx->resource.gelery}
        <section id="gallery" class="py-20">
            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-16 section-title mx-auto">{$_modx->resource.title_gelery}
                </h2>

                <div class="swiper swiper-type-4 pb-12">
                    <div class="swiper-wrapper">
                        {set $gelerys = json_decode($_modx->resource.gelery, true)}
                        {foreach $gelerys as $geler}
                        <div class="swiper-slide" itemscope itemtype="https://schema.org/ImageObject">
                            <div class="rounded-2xl overflow-hidden shadow-lg">
                                <img loading="lazy" decoding="async" alt="{$_modx->resource.baner_h1}"
                                    class="lazyload w-full h-72 object-cover hover:scale-105 transition duration-500"
                                    src="{$geler.img | phpthumbon : \'w=800&h=600&zc=1&f=webp&q=75\'}"
                                    width="800" height="600">
                                <link itemprop="contentUrl" href="{$geler.img}">
                            </div>
                        </div>
                        {/foreach}
                    </div>
                    <!-- Pagination & Navigation -->
                    <div class="swiper-pagination mt-8"></div>
                    <div
                        class="swiper-button-prev p-2 !text-primary !bg-white !rounded-full !w-12 !h-12 !shadow-lg !opacity-100 hover:bg-primary hover:text-white transition">
                    </div>
                    <div
                        class="swiper-button-next p-2 !text-primary !bg-white !rounded-full !w-12 !h-12 !shadow-lg !opacity-100 hover:bg-primary hover:text-white transition">
                    </div>
                </div>
            </div>
        </section>
        {/if}

        <!-- ====================================================================== -->
        <!-- ПРАЙС-ЛИСТ (Универсальный TV)                                       -->
        <!-- ====================================================================== -->
        <section class="py-24 bg-[#f8faf8]" id="price-list">
            <div class="max-w-5xl mx-auto px-4">

                <!-- Заголовок секции -->
                <div class="relative text-center mb-16">
                    <!-- Фоновая иконка -->
                    <img loading="lazy" decoding="async" class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-32 md:w-40 opacity-45 pointer-events-none"
                        src="/assets/img/услуги_иконки/фоновые_иконки/2.svg" alt="">

                    <!-- Текст (поверх иконки) -->
                    <div class="relative z-10">
                        <span class="text-sm font-bold tracking-widest text-[#558255] uppercase mb-3 block">Прозрачное
                            ценообразование</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">Стоимость
                    {$_modx->resource.pagetitle} в Москве и Подмосковье</h2>
                    </div>
                </div>

                <!-- Контейнер прайса -->
                <div class="bg-white shadow-lg border border-gray-200 overflow-hidden">

                    <!-- Шапка прайса -->
                    <div class="bg-[#558255] px-6 py-6 md:px-10">
                        <h3 class="text-white text-xl md:text-2xl font-bold text-center">
                            Актуальный прайс-лист
                        </h3>
                        <p class="text-green-100 text-center mt-2 text-sm">
                            На услугу: {$_modx->resource.pagetitle}
                        </p>
                    </div>

                    <!-- Данные из TV поля -->
                    <div class="p-6 md:p-10">

                        {set $priceData = json_decode($_modx->resource.price_list, true)}

                        {if $priceData}

                        {foreach $priceData as $section}
                        <!-- Заголовок группы услуг -->
                        <h4
                            class="text-lg font-bold text-[#1a1a1a] mb-4 mt-8 first:mt-0 pb-2 border-b-2 border-[#558255]/20">
                            {$section.section_title}
                        </h4>

                        <!-- Таблица -->
                        <div class="overflow-x-auto mb-8">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr
                                        class="bg-gray-50 text-gray-500 text-xs uppercase tracking-wider border-b border-gray-200">
                                        <th class="px-4 py-3 font-semibold">Наименование</th>
                                        <th class="px-4 py-3 font-semibold w-1/4 text-center">Ед. изм.</th>
                                        <th class="px-4 py-3 font-semibold w-1/4 text-right">Цена</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100">

                                    {foreach $section.items as $item}
                                    <tr class="group hover:bg-[#f0f7f0] transition duration-200">
                                        <!-- Название -->
                                        <td class="px-4 py-4 text-[#1a1a1a] font-medium text-base">
                                            {$item.name}
                                        </td>

                                        <!-- Единица измерения -->
                                        <td class="px-4 py-4 text-center text-gray-500 text-sm">
                                            {if $item.unit}
                                            <span class="bg-white px-2 py-1 border border-gray-200 rounded text-xs">
                                                {$item.unit}
                                            </span>
                                            {/if}
                                        </td>

                                        <!-- Цена -->
                                        <td
                                            class="px-4 py-4 text-right font-bold text-[#558255] text-lg whitespace-nowrap">
                                            {$item.price}
                                        </td>
                                    </tr>
                                    {/foreach}

                                </tbody>
                            </table>
                        </div>
                        {/foreach}

                        {else}
                        <!-- Заглушка, если поле пустое -->
                        <div class="text-center py-10">
                            <p class="text-gray-400">Прайс-лист для этой услуги пока формируется. Позвоните нам для
                                расчета.</p>
                        </div>
                        {/if}

                    </div>

                    <!-- Подвал -->
                    <div
                        class="bg-gray-50 px-6 py-6 md:px-10 border-t border-gray-200 flex flex-col md:flex-row items-center justify-between gap-4">
                        <p class="text-xs text-gray-500 text-center md:text-left">
                            * Цены ориентировочные. Точная смета составляется после выезда инженера.
                        </p>
                        <button
                            class="modal_window inline-flex items-center gap-2 px-6 py-3 bg-[#558255] text-white font-bold text-sm hover:bg-[#3d5c3d] transition shadow-md">
                            <span>Заказать расчет</span>
                        </button>
                    </div>

                </div>
            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- ПОРТФОЛИО / ФОТО РАБОТ (TV Gallery + Lightbox)                   -->
        <!-- ====================================================================== -->
        <section class="py-24 bg-white overflow-hidden" id="portfolio">
            <div class="max-w-7xl mx-auto px-4">

                <!-- Заголовок секции -->
                <div class="relative text-center mb-16">
                    <!-- Фоновая иконка -->
                    <img loading="lazy" decoding="async" class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-32 md:w-40 opacity-45 pointer-events-none"
                        src="/assets/img/услуги_иконки/фоновые_иконки/3.svg" alt="">

                    <!-- Текст (поверх иконки) -->
                    <div class="relative z-10">
                        <span
                            class="text-sm font-bold tracking-widest text-[#558255] uppercase mb-3 block">Реализованные
                            проекты</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">Фото наших
                    работ в Подмосковье</h2>
                    </div>
                </div>

                <!-- Слайдер -->
                <div class="swiper portfolio-swiper pb-12">
                    <div class="swiper-wrapper">
                        {set $photos = json_decode($_modx->resource.service_photos, true)}

                        {if $photos}
                        {foreach $photos as $photo}
                        <div class="swiper-slide" itemscope itemtype="https://schema.org/ImageObject">
                            <!-- Вся карточка кликабельна -->
                            <a aria-label="Фотографии карточек" href="{$photo.img | phpthumbon : \'w=800&h=600&zc=1&f=webp&q=75\'}"
                                data-fancybox="gallery" data-caption="Ландшафтные работы Dom Oz"
                                class="group relative h-[350px] md:h-[400px] rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 block"
                                itemprop="contentUrl">

                                <!-- Изображение -->
                                <img loading="lazy" decoding="async" src="{$photo.img | phpthumbon : \'w=800&h=600&zc=1&f=webp&q=75\'}"
                                    alt="Фото работ"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

                                <!-- Затемнение при наведении -->
                                <div
                                    class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition duration-500">
                                </div>

                                <!-- Кнопка лупы (появляется при наведении) -->
                                <div
                                    class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                                    <span
                                        class="w-14 h-14 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center shadow-lg transform scale-90 group-hover:scale-100 transition duration-300">
                                        <svg class="w-7 h-7 text-[#558255]" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </span>
                                </div>

                            </a>
                        </div>
                        {/foreach}
                        {else}
                        <div
                            class="swiper-slide flex items-center justify-center bg-gray-50 rounded-2xl border border-dashed border-gray-300 h-[300px]">
                            <p class="text-gray-400">Фотографии для этой услуги пока не загружены</p>
                        </div>
                        {/if}
                    </div>

                    <!-- Навигация -->
                    <div class="swiper-pagination portfolio-pagination mt-6"></div>
                    <div class="swiper-button-prev !w-12 !h-12 !bg-white !shadow-lg !rounded-full !text-[#558255] opacity-50 hover:opacity-100 transition"
                        style="--swiper-navigation-size: 20px;"></div>
                    <div class="swiper-button-next !w-12 !h-12 !bg-white !shadow-lg !rounded-full !text-[#558255] opacity-50 hover:opacity-100 transition"
                        style="--swiper-navigation-size: 20px;"></div>
                </div>

            </div>
        </section>

<!-- ====================================================================== -->
<!-- 6. SEO-КОНТЕНТ (Экспертный блок + "Читать далее")                  -->
<!-- ====================================================================== -->
<section id="seo-content-section" class="py-24 bg-[#f8faf8] relative overflow-hidden">

    <!-- Декоративный фон (еле заметный паттерн или градиент для глубины) -->
    <div class="absolute inset-0 opacity-30"
        style="background-image: radial-gradient(#558255 1px, transparent 1px); background-size: 30px 30px;">
    </div>

    <div class="max-w-4xl mx-auto px-4 z-10">

        <!-- Заголовок секции -->
        <div class="relative text-center mb-16">
            <!-- Текст -->
            <div class="relative z-10">
                <span class="text-sm font-bold tracking-widest text-[#558255] uppercase mb-3 block">Экспертный
                    материал</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">
                    {$_modx->resource.pagetitle} — цены, этапы работ и гарантия в Москве и Подмосковье</h2>
            </div>
        </div>

        <!-- Карточка с контентом -->
        <div
            class="relative bg-white rounded-3xl shadow-[0_8px_30px_-10px_rgba(0,0,0,0.08)] border border-gray-100 overflow-hidden">

            <div class="p-8 md:p-10">

                <!-- Основной SEO-контент -->
                <div id="seo-content"
                    class="prose prose-lg prose-green max-w-none text-gray-700 leading-relaxed overflow-hidden transition-all duration-500 ease-in-out"
                    style="max-height: 320px;">
                    {$_modx->resource.content}
                </div>
                <div class="tldr mt-8 rounded-2xl bg-[#f8faf8] border border-gray-100 p-6 text-left">
                    <h3 class="text-lg font-bold text-[#1a1a1a] mb-3">Коротко о {$_modx->resource.pagetitle} в Москве и МО</h3>
                    <ul class="text-sm text-gray-600 leading-relaxed space-y-2 list-disc pl-5">
                        <li>Услуга: {$_modx->resource.pagetitle} под ключ в Москве, Московской области и Подмосковье.</li>
                        <li>Стоимость работ — по смете, фиксируем цену в договоре до начала работ.</li>
                        <li>Выезд инженера по Москве и МО за 1 день, гарантия на работы до 5 лет, проверенные отзывы клиентов.</li>
                        <li>Как заказать: оставьте заявку — рассчитаем стоимость и сроки за 1 день.</li>
                    </ul>
                </div>

                <!-- Градиент-затемнение (исчезает при раскрытии) -->
                <div id="seo-fade"
                    class="absolute bottom-24 left-0 right-0 h-32 bg-gradient-to-t from-white via-white/90 to-transparent pointer-events-none transition-opacity duration-500">
                </div>

                <!-- Кнопка "Читать далее" -->
                <div class="text-center mt-8">
                    <button id="seo-toggle-btn"
                        class="inline-flex items-center gap-3 px-8 py-4 bg-[#558255] text-white rounded-xl font-bold text-base hover:bg-[#3d5c3d] transition-all duration-300 shadow-lg hover:shadow-2xl hover:shadow-[#558255]/30 transform hover:-translate-y-0.5 group">
                        <span id="seo-toggle-text">Читать далее</span>
                        <svg id="seo-toggle-icon"
                            class="w-5 h-5 transition-transform duration-300 group-hover:translate-y-0.5"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- Скрипт для кнопки "Читать далее" -->
{ignore}
<script>
document.addEventListener(\'DOMContentLoaded\', function () {
    const seoContent = document.getElementById(\'seo-content\');
    const seoFade = document.getElementById(\'seo-fade\');
    const seoBtn = document.getElementById(\'seo-toggle-btn\');
    const seoText = document.getElementById(\'seo-toggle-text\');
    const seoIcon = document.getElementById(\'seo-toggle-icon\');

    if (!seoContent || !seoBtn) return;

    // Проверяем, нужен ли вообще блок "Читать далее"
    // (если контент меньше 320px — скрываем кнопку)
    function checkContentHeight() {
        // Временно снимаем ограничение, чтобы узнать реальную высоту
        seoContent.style.maxHeight = \'none\';
        const realHeight = seoContent.scrollHeight;
        seoContent.style.maxHeight = \'320px\';

        if (realHeight <= 320) {
            // Контент короткий — скрываем кнопку и градиент
            seoBtn.style.display = \'none\';
            if (seoFade) seoFade.style.display = \'none\';
        }
    }

    checkContentHeight();

    let isExpanded = false;

    seoBtn.addEventListener(\'click\', function () {
        isExpanded = !isExpanded;

        if (isExpanded) {
            // Разворачиваем
            seoContent.style.maxHeight = seoContent.scrollHeight + \'px\';
            if (seoFade) seoFade.style.opacity = \'0\';
            if (seoFade) seoFade.style.pointerEvents = \'none\';
            seoText.textContent = \'Свернуть\';
            seoIcon.style.transform = \'rotate(180deg)\';
        } else {
            // Сворачиваем
            seoContent.style.maxHeight = \'320px\';
            if (seoFade) seoFade.style.opacity = \'1\';
            if (seoFade) seoFade.style.pointerEvents = \'auto\';
            seoText.textContent = \'Читать далее\';
            seoIcon.style.transform = \'rotate(0deg)\';

            // Плавный скролл к началу блока
            const section = seoBtn.closest(\'section\');
            if (section) {
                const rect = section.getBoundingClientRect();
                if (rect.top < -100) {
                    section.scrollIntoView({ behavior: \'smooth\', block: \'start\' });
                }
            }
        }
    });
});
</script>
{/ignore}

        <!-- Инициализация скриптов -->
        {ignore}
        <script>
            document.addEventListener(\'DOMContentLoaded\', function () {
                // Fancybox (Лайтбокс для фото)
                if (typeof Fancybox !== \'undefined\') {
                    Fancybox.bind(\'[data-fancybox="gallery"]\', {
                        Thumbs: { autoStart: true },
                        Toolbar: { display: { left: [], middle: [\'zoomIn\', \'zoomOut\', \'toggle1to1\', \'rotateCCW\', \'rotateCW\', \'flipX\', \'flipY\'], right: [\'slideshow\', \'thumbs\', \'close\'] } },
                        Carousel: { DblClick: false }
                    });
                }
            });
        </script>
        {/ignore}

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
                    задаваемые вопросы о {$_modx->resource.pagetitle} в Москве и области</h2>
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
                    
                    {set $voprosi = json_decode($_modx->resource.vopros, true)}

                    {if $voprosi}
                    {set $ob = \'{\'}
                    {set $cb = \'}\'}
                    <script type="application/ld+json">
                    {$ob}"@context": "https://schema.org",
                      "@type": "FAQPage",
                      "mainEntity": [
                        {foreach $voprosi as $vop}
                        {$ob}"@type": "Question",
                          "name": "{$vop.vopr | strip_tags | replace:\'"\':\'\\"\'}",
                          "acceptedAnswer": {$ob}"@type": "Answer",
                            "text": "{$vop.otv | strip_tags | replace:\'"\':\'\\"\'}"
                          {$cb}
                        {$cb}{if !$vop@last},{/if}
                        {/foreach}
                      ]
                    {$cb}
                    </script>
                    {/if}

                </div>

            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- 8. ФИНАЛЬНЫЙ CTA (Конверсия)                                        -->
        <!-- ====================================================================== -->
        <section id="contact-cta" class="py-24 bg-white relative overflow-hidden">

            <!-- Декоративный фон -->
            <div class="absolute inset-0 opacity-50"></div>

            <div class="relative z-10 max-w-4xl mx-auto px-4 text-center">
                <div class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto mb-4" role="heading" aria-level="2">Готовы
                    обсудить {$_modx->resource.pagetitle} в Москве и МО?</div>
                <p class="text-lg text-gray-500 mb-10 max-w-2xl mx-auto">Оставьте заявку, и мы подготовим
                    предварительную смету стоимости работ и 3D-эскиз вашего участка в Подмосковье.</p>

                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <button
                        class="modal_window inline-flex items-center justify-center px-5 py-3 bg-[#558255] text-white rounded-xl font-bold text-lg hover:bg-[#3d5c3d] transition shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                        Получить расчет стоимости
                    </button>
                    <a aria-label="Кнопка позвонить" href="tel:{\'phone\'|config}"
                        class="inline-flex items-center justify-center px-5 py-3 bg-white border border-gray-200 text-gray-900 rounded-xl font-bold text-lg hover:border-[#558255] hover:text-[#558255] transition">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                        Позвонить
                    </a>
                </div>
            </div>
        </section>

        <!-- block -->
        <section class="py-24 bg-white relative overflow-hidden"></section>

    </main>

    {include \'footer\'}
    {include \'modal\'}
    {include \'social\'}

    <!-- Аналитика: -->
    [[$yandex.metrika]]


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>

    <!-- Fancybox JS -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js" defer></script>

    <!-- jQuery и другие скрипты MODX -->
<script src="/assets/bibliotek/jquery/jqwery.js"></script>
<script src="/assets/bibliotek/jquery/jquery.maskedinput.min.js" defer></script>
<script src="/assets/js/script.js?v={$_modx->config.cache_version}" defer></script>
<!--<script src="/assets/js/script-ser.js?v={$_modx->config.cache_version}"></script>-->

    {ignore}
    <script defer>
        document.addEventListener(\'DOMContentLoaded\', function () {
            if (typeof Swiper !== \'undefined\') {
                // Hero Slider
                new Swiper(\'.hero-swiper\', {
                    loop: true,
                    autoplay: { delay: 5000, disableOnInteraction: false },
                    effect: \'fade\',
                    fadeEffect: { crossFade: true },
                    speed: 800
                });
            }
        });
    </script>
    {/ignore}

    <!-- Инициализация Swiper -->
    {ignore}
    <script defer>
        $(document).ready(function () {
            if (typeof Swiper !== \'undefined\') {
                // Gallery Swiper
                $(\'.swiper-type-4\').each(function () {
                    new Swiper(this, {
                        loop: true,
                        slidesPerView: 1,
                        spaceBetween: 20,
                        speed: 800,
                        autoplay: { delay: 4000, disableOnInteraction: false },
                        pagination: {
                            el: \'.swiper-pagination\',
                            clickable: true,
                            bulletClass: \'swiper-pagination-bullet\',
                            bulletActiveClass: \'swiper-pagination-bullet-active\'
                        },
                        navigation: {
                            nextEl: \'.swiper-button-next\',
                            prevEl: \'.swiper-button-prev\'
                        },
                        breakpoints: {
                            640: { slidesPerView: 2 },
                            1024: { slidesPerView: 3 }
                        }
                    });
                });

                // Portfolio Swiper
                $(\'.portfolio-swiper\').each(function () {
                    new Swiper(this, {
                        slidesPerView: 1.2,
                        spaceBetween: 20,
                        speed: 800,
                        grabCursor: true,
                        breakpoints: {
                            640: { slidesPerView: 2.2, spaceBetween: 20 },
                            1024: { slidesPerView: 3.2, spaceBetween: 24 }
                        },
                        pagination: { el: \'.portfolio-pagination\', clickable: true },
                        navigation: { nextEl: \'.swiper-button-next\', prevEl: \'.swiper-button-prev\' }
                    });
                });
            }
        });
    </script>
    {/ignore}
    
    <!-- ====================== МИКРОРАЗМЕТКА (JSON-LD + RDFa) ====================== -->

{set $ob = \'{\'}
{set $cb = \'}\'}
<script type="application/ld+json">
{$ob}"@context": "https://schema.org",
  "@type": "Article",
  "headline": "{$_modx->resource.pagetitle | strip_tags | replace:\'"\':\'\\"\'}",
  "description": "{$_modx->resource.description | strip_tags | replace:\'"\':\'\\"\'}",
  "author": {$ob}"@type": "Organization",
    "name": "Дом Оз",
    "url": "https://domozmsk.ru/"
  {$cb},
  "publisher": {$ob}"@type": "Organization",
    "name": "Дом Оз",
    "url": "https://domozmsk.ru/",
    "logo": {$ob}"@type": "ImageObject",
      "url": "https://domozmsk.ru/assets/img/logo.png"
    {$cb}
  {$cb},
  "datePublished": "{$_modx->resource.publishedon | date_format:\'%Y-%m-%d\'}",
  "dateModified": "{$_modx->resource.editedon | date_format:\'%Y-%m-%d\'}",
  "mainEntityOfPage": {$ob}"@type": "WebPage",
    "@id": "{$_modx->makeUrl($_modx->resource.id, \'\', \'\', \'full\')}"
  {$cb}
{$cb}
</script>

<!-- 3. RDFa -->
<div itemscope itemtype="https://schema.org/Organization" style="display: none;">
  <meta itemprop="name" content="Дом Оз" />
  <meta itemprop="url" content="https://domozmsk.ru" />
  <meta itemprop="telephone" content="+7 (985) 920-77-00" />
  <meta itemprop="email" content="DOMOZ.77@yandex.ru" />
  <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
    <meta itemprop="addressLocality" content="Москва" />
    <meta itemprop="streetAddress" content="Головинское шоссе, 5А" />
    <meta itemprop="addressCountry" content="RU" />
  </div>
</div>

[[!autoMicrodata]]

[[$modal_window]]

</body>

</html>',
  'locked' => 0,
  'properties' => 'a:0:{}',
  'static' => 0,
  'static_file' => '',
);