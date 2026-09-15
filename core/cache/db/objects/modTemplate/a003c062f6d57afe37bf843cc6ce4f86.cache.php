<?php  return array (
  'id' => 1,
  'source' => 0,
  'property_preprocess' => 0,
  'templatename' => 'home',
  'description' => 'Template',
  'editor_type' => 0,
  'category' => 0,
  'icon' => 'icon-home',
  'template_type' => 0,
  'content' => '[[mark]]

<!DOCTYPE html>
<html lang="ru">

<head>
    {include \'meta\'}
    {$_modx->resource.codecviz}
    {set $sliders = json_decode($_modx->resource.baner_img, true)}
    {if $sliders && !empty($sliders[0].img)}
    <link rel="preload" as="image" fetchpriority="high"
        href="{$sliders[0].img | phpthumbon : \'w=1600&h=900&zc=1&f=webp&q=65\'}"
        imagesrcset="{$sliders[0].img_mob | phpthumbon : \'w=640&h=864&zc=1&f=webp&q=65\'} 768w, {$sliders[0].img | phpthumbon : \'w=1600&h=900&zc=1&f=webp&q=65\'} 1600w"
        imagesizes="100vw">
    {/if}
    
    <link rel="alternate" type="application/rss+xml" title="Читайте новости об ландшафтном дизайне у нас в блогах" href="[[~61]]" />
    
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif;
            background: #fff;
            color: #1a1a1a;
            overflow-x: hidden
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
                animation-range-end: entry 80%
            }

            @keyframes revealAnim {
                from {
                    opacity: 0;
                    transform: translateY(80px) scale(0.9);
                    filter: blur(10px)
                }

                to {
                    opacity: 1;
                    transform: translateY(0) scale(1);
                    filter: blur(0)
                }
            }
        }

        @supports not (animation-timeline: view()) {
            .reveal {
                opacity: 1;
                transform: none;
                filter: none
            }
        }

        .section-title {
            position: relative;
            display: inline-block;
            text-align: left
        }

        .section-title::after {
            content: \'\';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #3F5F3F, #d4a574);
            border-radius: 2px
        }

        .text-center .section-title::after {
            left: 50%;
            transform: translateX(-50%)
        }

        .hero-slider {
            height: 100vh;
            min-height: 700px
        }

        .hero-slide {
            position: relative;
            height: 100%
        }

        .hero-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to right, rgba(0, 0, 0, 0.85) 0%, rgba(0, 0, 0, 0.5) 50%, transparent 100%)
        }

        @keyframes ticker {
            0% {
                transform: translateX(0)
            }

            100% {
                transform: translateX(-50%)
            }
        }

        .animate-ticker {
            animation: ticker 35s linear infinite
        }

        .timeline-line {
            position: absolute;
            left: 24px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, #3F5F3F, #d4a574);
            z-index: 0
        }

        @media (min-width: 768px) {
            .timeline-line {
                left: 50%;
                transform: translateX(-50%)
            }
        }

        ::-webkit-scrollbar {
            width: 8px
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1
        }

        ::-webkit-scrollbar-thumb {
            background: #3F5F3F;
            border-radius: 4px
        }

        /* Accessibility: увеличенные области прикосновения */
        .footer__social-social a,
        .abssocial a {
            min-width: 48px;
            min-height: 48px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px
        }

        /* LCP: текст hero виден до загрузки Tailwind */
        .hero-slider h1 {
            font-size: clamp(1.875rem, 5vw, 3.75rem);
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 1.5rem
        }

        /* LCP: контент первого экрана не должен ждать scroll-driven reveal */
        .hero-slider .reveal {
            opacity: 1;
            transform: none;
            filter: none;
            animation: none !important;
        }
    </style>
</head>

<body class="antialiased">

    {include \'header\'}

    <main>

        <!-- ====================================================================== -->
        <!-- 1. HERO SECTION (ИСПРАВЛЕНО: preload + src совпадают, hero-overlay) -->
        <!-- ====================================================================== -->
        <section class="relative hero-slider overflow-hidden">
            <div class="swiper hero-swiper h-full">
                <div class="swiper-wrapper">
                    {if $sliders}
                    {set $isFirstSlide = true}
                    {foreach $sliders as $slid}
                    <div class="swiper-slide hero-slide">
                        <picture>
                            <source media="(max-width: 768px)"
                                srcset="{$slid.img_mob | phpthumbon : \'w=640&h=864&zc=1&f=webp&q=65\'}" type="image/webp">
                            <source srcset="{$slid.img | phpthumbon : \'w=1600&h=900&zc=1&f=webp&q=65\'}" type="image/webp">

                            {if $isFirstSlide}
                            <!-- ЕРВЫЙ СЛАЙД: preload и src ОДИНАКОВЫЕ -->
                            <img loading="eager" fetchpriority="high" decoding="async"
                                src="{$slid.img | phpthumbon : \'w=1600&h=900&zc=1&f=webp&q=65\'}" sizes="100vw" width="1600"
                                height="900" alt="{$_modx->resource.baner_h1 | strip_tags}">
                            {set $isFirstSlide = false}
                            {else}
                            <!-- ОСТАЛЬНЫЕ: lazy -->
                            <img loading="lazy" decoding="async"
                                src="{$slid.img | phpthumbon : \'w=1600&h=900&zc=1&f=webp&q=65\'}" sizes="100vw" width="1600"
                                height="900" alt="{$_modx->resource.baner_h1 | strip_tags}">
                            {/if}
                        </picture>
                        <!-- ВАЖНО: затемнение должно быть в каждом слайде -->
                        <div class="hero-overlay"></div>
                    </div>
                        {/foreach}
                    {/if}
                </div>
            </div>

            <div class="absolute inset-0 z-10 flex items-center">
                <div class="container mx-auto px-4 grid lg:grid-cols-12 gap-12 items-center">

                    <!-- Левая часть: Текст -->
                    <div class="lg:col-span-7 text-white text-left reveal">
                        <div
                            class="flex flex-wrap items-center gap-4 mb-8 text-sm font-medium tracking-wide uppercase text-green-200">
                            <span
                                class="flex items-center gap-2 bg-white/10 px-3 py-1 rounded-full backdrop-blur-sm border border-white/20">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                Москва и Московская область
                            </span>
                            <span
                                class="flex items-center gap-2 bg-white/10 px-3 py-1 rounded-full backdrop-blur-sm border border-white/20">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                Подмосковье — выезд по МО за 1 день
                            </span>
                        </div>

                        <h1
                            class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight mb-6 text-shadow reveal delay-100 text-left">
                            {$_modx->resource.baner_h1}
                        </h1>

                        <p
                            class="hero-desc text-lg md:text-xl text-gray-200 mb-8 max-w-2xl leading-relaxed reveal delay-200 text-left">
                            {$_modx->resource.baner_des}
                        </p>

                        <div class="mb-8 reveal delay-200">
                            <a aria-label="Позвонить по номеру телефона" href="tel:{\'phone\'|config}"
                                class="text-3xl md:text-4xl font-bold text-white hover:text-[#d4a574] transition flex items-center gap-3">
                                <svg class="w-8 h-8 text-[#3F5F3F]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                                {\'phone\'|config}
                            </a>
                        </div>

                        <div class="flex flex-wrap gap-4 reveal delay-300">
                            <button aria-label="Пройти опрос для заказа" class="modal_window inline-flex items-center justify-center px-8 py-4 bg-[#3F5F3F] hover:bg-[#3d5c3d] text-white font-bold rounded-xl transition shadow-lg transform hover:-translate-y-1">
                                {$_modx->resource.baner_button_text|default:\'Рассчитать стоимость\'}
                            </button>
                            <a aria-label="Список всех услуг" href="#vidy"
                                class="inline-flex items-center justify-center px-8 py-4 bg-white/10 backdrop-blur-sm border border-white/30 hover:bg-white hover:text-[#1a1a1a] text-white font-bold rounded-xl transition">
                                Смотреть услуги
                            </a>
                        </div>
                        <p class="mt-6 text-sm text-gray-300 max-w-2xl leading-relaxed">
                            Проектирование, благоустройство и озеленение участков под ключ в Москве и Московской области. Стоимость ландшафтного дизайна фиксируем в смете — заказать проект участка в Подмосковье можно с бесплатным выездом и расчетом цены за 1 день.
                        </p>
                    </div>

                    <!-- Правая часть: Форма -->
                    <div class="hidden lg:block lg:col-span-5 reveal delay-200 formform">
                        <div class="bg-white p-8 rounded-2xl shadow-2xl max-w-md ml-auto border border-gray-100">
                            <h2 class="text-2xl font-bold text-[#1a1a1a] mb-2 text-left">Оставьте заявку на проект участка в Подмосковье</h2>
                            <p class="text-gray-500 text-sm mb-6 text-left">Мы свяжемся с вами в течение 15 минут, рассчитаем стоимость благоустройства участка в Москве и МО.</p>

                            {\'FetchIt\'|snippet:[
                            \'snippet\'=>\'FormIt\', \'hooks\'=>\'email\',
                            \'frontendCss\'=>\'\',
                            \'form\'=>\'@INLINE <form method="post" action="{$_modx->resource.id|url}" class="space-y-4">
                                <input type="text" name="Имя" placeholder="Ваше имя" aria-label="Ваше имя" required
                                    class="!text-black w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-[#3F5F3F] focus:border-transparent outline-none transition">
                                <input type="tel" name="Телефон" placeholder="(999) 999-99-99" aria-label="Ваш телефон" maxlength="18" inputmode="numeric" autocomplete="tel" data-type-phone class="!text-black w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-[#3F5F3F] focus:border-transparent outline-none transition" required>
                                <input type="hidden" name="Страница" value="{$_modx->config.site_url}{$_modx->resource.uri}">
                                <input type="hidden" name="Название страницы" value="{$_modx->resource.pagetitle}">
                                <button type="submit"
                                    class="w-full py-4 bg-[#3F5F3F] hover:bg-[#3d5c3d] text-white font-bold rounded-xl transition shadow-md">Отправить
                                    заявку</button>
                                <p class="text-xs text-gray-400 text-center">Нажимая кнопку, вы соглашаетесь с политикой
                                    конфиденциальности</p>
                            </form>\',
                            \'emailTo\'=>"{\'email_1\'|config},artemnersisyan777@gmail.com",
                            \'emailSubject\'=>"Заявка с сайта",
                            \'successMessage\'=>\'<div class="w-fit text-center text-white font-bold p-2">Спасибо за обращене, мы скоро свяжемся с вами!</div>\'
                            ]}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- 2. БЕГУЩАЯ СТРОКА                                                    -->
        <!-- ====================================================================== -->
        <section class="py-4 bg-[#3F5F3F] overflow-hidden relative z-20">
            <div class="flex whitespace-nowrap animate-ticker font-medium text-lg">
                <span class="text-white mx-6 flex items-center gap-2">✓ ландшафтный дизайн под ключ в Москве и Подмосковье</span>
                <span class="text-white mx-6 flex items-center gap-2">✓ Гарантия на все виды работ до 5 лет</span>
                <span class="text-white mx-6 flex items-center gap-2">✓ Более 120 реализованных проектов участков в Московской области</span>
                <span class="text-white mx-6 flex items-center gap-2">✓ Работаем по договору</span>
                <span class="text-white mx-6 flex items-center gap-2">✓ Бесплатный выезд инженера по Москве и МО</span>
                <span class="text-white mx-6 flex items-center gap-2">✓ ландшафтный дизайн под ключ в Москве и Подмосковье</span>
                <span class="text-white mx-6 flex items-center gap-2">✓ Гарантия на все виды работ до 5 лет</span>
                <span class="text-white mx-6 flex items-center gap-2">✓ Более 120 реализованных проектов участков в Московской области</span>
                <span class="text-white mx-6 flex items-center gap-2">✓ Работаем по договору</span>
                <span class="text-white mx-6 flex items-center gap-2">✓ Бесплатный выезд инженера по Москве и МО</span>
            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- ПРЕИМУЩЕСТВА                                                          -->
        <!-- ====================================================================== -->
        <section class="py-24 bg-[#f8faf8] relative overflow-hidden">

            <div class="relative z-10 max-w-7xl mx-auto px-4">
                <div class="relative text-center mb-16">
                    <div class="relative z-10">
                        <span class="text-sm font-bold tracking-widest text-[#3F5F3F] uppercase mb-3 block">Наши
                            стандарты</span>
                        <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">Почему заказывают ландшафтный дизайн в Москве и Московской области в Дом&nbsp;Оз</h2>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 items-center justify-center">
                    <div
                        class="bg-white rounded-2xl p-8 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-gray-100 group hover:border-[#3F5F3F]/30 transition-all duration-300 hover:-translate-y-1">
                        <img class="mx-auto" alt="опыт работы" loading="lazy" decoding="async" width="300" height="300"
                            src="{\'assets/img/услуги_иконки/почему мы/опыт работы.png\' | phpthumbon : \'w=300&h=300&zc=1&f=webp&q=80\'}" />
                        <h3
                            class="text-lg font-bold text-[#1a1a1a] mb-3 group-hover:text-primary transition text-center">
                            Опыт работы</h3>
                        <p class="text-center text-sm text-gray-500 leading-relaxed">Более 120 реализованных проектов благоустройства участков в Москве, Московской области и Подмосковье</p>
                    </div>

                    <div
                        class="bg-white rounded-2xl p-8 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-gray-100 group hover:border-[#3F5F3F]/30 transition-all duration-300 hover:-translate-y-1">
                        <img class="mx-auto" alt="официально" loading="lazy" decoding="async" width="300" height="300"
                            src="{\'assets/img/услуги_иконки/почему мы/официально.png\' | phpthumbon : \'w=300&h=300&zc=1&f=webp&q=80\'}" />
                        <h3
                            class="text-lg font-bold text-[#1a1a1a] mb-3 group-hover:text-primary transition text-center">
                            Официально</h3>
                        <p class="text-center text-sm text-gray-500 leading-relaxed">Работаем по договору с физ. и юр.
                            лицами в Москве и МО. Фиксируем смету и стоимость проекта участка.</p>
                    </div>

                    <div
                        class="bg-white rounded-2xl p-8 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-gray-100 group hover:border-[#3F5F3F]/30 transition-all duration-300 hover:-translate-y-1">
                        <img class="mx-auto" alt="в срок" loading="lazy" decoding="async" width="300" height="300"
                            src="{\'assets/img/услуги_иконки/почему мы/срок.png\' | phpthumbon : \'w=300&h=300&zc=1&f=webp&q=80\'}" />
                        <h3
                            class="text-lg font-bold text-[#1a1a1a] mb-3 group-hover:text-primary transition text-center">
                            Точно в срок</h3>
                        <p class="text-center text-sm text-gray-500 leading-relaxed">Сдаем объекты день в день. Никаких
                            задержек и «сюрпризов».</p>
                    </div>

                    <div
                        class="bg-white rounded-2xl p-8 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-gray-100 group hover:border-[#3F5F3F]/30 transition-all duration-300 hover:-translate-y-1">
                        <img class="mx-auto" alt="под ключ" loading="lazy" decoding="async" width="300" height="300"
                            src="{\'assets/img/услуги_иконки/почему мы/под ключ.png\' | phpthumbon : \'w=300&h=300&zc=1&f=webp&q=80\'}" />
                        <h3
                            class="text-lg font-bold text-[#1a1a1a] mb-3 group-hover:text-primary transition text-center">
                            Под ключ</h3>
                        <p class="text-center text-sm text-gray-500 leading-relaxed">От проектирования участка до финальной уборки территории — ландшафтные работы под ключ в Подмосковье.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- КВИЗ (ИСПРАВЛЕНО: правильная инициализация Marquiz + title для iframe) -->
        <!-- ====================================================================== -->
        <section id="kviz" class="kviz py-24 bg-[#f8faf8] reveal">
            <img loading="lazy" decoding="async" width="600" height="600" aria-hidden="true"
                class="absolute top-1/2 -translate-y-1/2 w-32 w-[600px] opacity-15 pointer-events-none"
                src="/assets/img/услуги_иконки/фоновые_иконки/1.svg" alt=""
                style="left: -10rem; rotate: 25deg;">
            <img loading="lazy" decoding="async" width="600" height="600" aria-hidden="true"
                class="hidden md:block transform -scale-x-100 absolute top-1/2 -translate-y-1/2 w-32 w-[600px] opacity-15 pointer-events-none"
                src="/assets/img/услуги_иконки/фоновые_иконки/1.svg" alt=""
                style="right: -10rem; rotate: -25deg;">

            <div class="absolute inset-0 opacity-30"
                style="background-image: radial-gradient(#3F5F3F 1px, transparent 1px); background-size: 30px 30px;">
            </div>

            <div class="container mx-auto px-4 relative z-10">
                <div class="text-center mb-10">
                    <span class="text-sm font-bold tracking-widest text-[#3F5F3F] uppercase mb-3 block">Подбор
                        решения</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title"
                        style="text-align: center;">Узнайте стоимость ландшафтного дизайна в Москве и Московской области за 1 минуту</h2>
                    <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Ответьте на 4 вопроса и получите предварительную
                        смету благоустройства участка в Подмосковье + подарок на выбор. Рассчитаем цену проектирования и реализации проекта под ключ.</p>
                </div>
            
                <!-- ====================================================================== -->
                <!-- MARQUIZ (Надёжная загрузка с отладкой)                                 -->
                <!-- ====================================================================== -->
                <div class="ar-container">
                        <div data-marquiz-id="694a7f2849c7600019f84985" id="marquiz-inline"></div>
                    </div>
                
                {ignore}
                <script>
                (function() {
                    \'use strict\';
                
                    const QUIZ_ID = \'694a7f2849c7600019f84985\';
                    const QUIZ_CONFIG = {
                        id: QUIZ_ID,
                        buttonText: \'«Старт»\',
                        bgColor: \'#283328\',
                        textColor: \'#ffffff\',
                        rounded: true,
                        shadow: \'rgba(40, 51, 40, 0.5)\',
                        blicked: true,
                        fixed: false,
                        buttonOnMobile: false,
                        disableOnMobile: false,
                        fullWidth: false
                    };
                
                    let marquizLoaded = false;
                    let marquizInitialized = false;
                
                    // Загрузка скрипта Marquiz
                    function loadMarquizScript() {
                        if (marquizLoaded) return;
                        marquizLoaded = true;
                
                        console.log(\'[Marquiz] Загрузка скрипта...\');
                
                        const script = document.createElement(\'script\');
                        script.src = \'https://script.marquiz.ru/v2.js\';
                        script.async = true;
                
                        script.onload = function() {
                            console.log(\'[Marquiz] Скрипт загружен\');
                            initMarquiz();
                        };
                
                        script.onerror = function() {
                            console.error(\'[Marquiz] Ошибка загрузки скрипта\');
                            marquizLoaded = false;
                        };
                
                        document.head.appendChild(script);
                    }
                
                    // Инициализация квиза
                    function initMarquiz() {
                        if (marquizInitialized) return;
                        if (typeof Marquiz === \'undefined\') {
                            console.warn(\'[Marquiz] Marquiz ещё не определён, ждём...\');
                            setTimeout(initMarquiz, 100);
                            return;
                        }
                
                        marquizInitialized = true;
                        console.log(\'[Marquiz] Инициализация...\');
                
                        // Инициализация
                        Marquiz.init({
                            host: \'//quiz.marquiz.ru\',
                            region: \'ru\',
                            id: QUIZ_ID,
                            autoOpen: false,
                            autoOpenFreq: \'once\',
                            openOnExit: false,
                            disableOnMobile: false
                        });
                
                        // Добавление inline-квиза
                        Marquiz.add([\'Inline\', QUIZ_CONFIG]);
                        console.log(\'[Marquiz] Квиз добавлен\');
                    }
                
                    // Загрузка СТРОГО при скролле до блока (без принудительных таймеров — они грузят Marquiz 600+ КБ даже тем, кто не доскроллил, и роняют PSI)
                    const quizBlock = document.getElementById(\'kviz\');
                    if (!quizBlock) {
                        console.error(\'[Marquiz] Блок #kviz не найден\');
                        return;
                    }
                
                    if (\'IntersectionObserver\' in window) {
                        const observer = new IntersectionObserver(function(entries) {
                            entries.forEach(function(entry) {
                                if (entry.isIntersecting) {
                                    console.log(\'[Marquiz] Блок виден, загружаем...\');
                                    loadMarquizScript();
                                    observer.disconnect();
                                }
                            });
                        }, {
                            rootMargin: \'200px\'
                        });
                
                        observer.observe(quizBlock);
                        console.log(\'[Marquiz] Observer установлен\');
                    } else {
                        // Fallback для старых браузеров
                        console.log(\'[Marquiz] IntersectionObserver не поддерживается\');
                        setTimeout(loadMarquizScript, 2000);
                    }
                
                    // Блок уже виден при загрузке? Не форсируем: догрузится при первом скролле через observer выше
                })();
                </script>
                {/ignore}
                

            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- ВИДЫ РАБОТ                                                            -->
        <!-- ====================================================================== -->
        <section class="py-24 bg-[#f8faf8] relative overflow-hidden reveal" id="vidy">
            <div class="absolute inset-0 opacity-30"
                style="background-image: radial-gradient(#3F5F3F 1px, transparent 1px); background-size: 30px 30px;">
            </div>
            <div class="container mx-auto px-4 relative z-10">
                <div class="text-center mb-16">
                    <span class="text-sm font-bold tracking-widest text-[#3F5F3F] uppercase mb-3 block">Наши
                        услуги</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">Виды ландшафтных работ под ключ в Москве и Подмосковье</h2>
                </div>
                <p class="text-center text-gray-600 max-w-3xl mx-auto mb-12">Услуги по проектированию, благоустройству и озеленению участков в Московской области: дренаж, мощение, газон, освещение, автополив. Стоимость работ фиксируем в смете — заказать услуги можно для участка любой площади.</p>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                    {\'pdoResources\' | snippet : [
                    \'parents\'=>\'0\',
                    \'tpl\'=>\'@CODE:
                    <a aria-label="{$pagetitle}" href="{if $link_cat != ""}/{else}{$id | url}{/if}"
                        class="group relative h-80 rounded-2xl overflow-hidden shadow-lg block bg-white hover:shadow-2xl transition duration-300">
                        <img width="600" height="600" loading="lazy" decoding="async"
                            class="lazyload w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                            data-src="{$img_cat | phpthumbon : \\\'w=600&h=600&zc=1&f=webp&q=80\\\'}" alt="{$pagetitle}">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent opacity-80 group-hover:opacity-100 transition">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 w-full p-6 transform translate-y-2 group-hover:translate-y-0 transition duration-300">
                            <h3 class="text-xl font-bold text-white mb-2 text-left">{$pagetitle}</h3>
                            <span
                                class="inline-block px-3 py-1 bg-[#3F5F3F] text-white text-xs font-bold rounded-lg">{$price_cat}</span>
                        </div>
                    </a>\',
                    \'limit\'=>\'9\', \'tvPrefix\'=>\'\', \'includeTVs\'=> \'img_cat,price_cat,link_cat,categoryi\',
                    \'resources\'=> $_modx->resource.categoryi, \'sortby\' => \'menuindex\'
                    ]}
                </div>
                <div class="text-center">
                    <a aria-label="Страница услуг" href="https://domozmsk.ru/history-company/glavnaya-uslug"
                        class="inline-flex items-center justify-center px-10 py-4 bg-white border-2 border-[#3F5F3F] text-[#3F5F3F] font-bold rounded-xl hover:bg-[#3F5F3F] hover:text-white transition shadow-md">
                        Смотреть все услуги
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- ЭТАПЫ РАБОТЫ                                                          -->
        <!-- ====================================================================== -->
        <section class="py-24 bg-white relative overflow-hidden reveal" id="etapy">
            <img loading="lazy" decoding="async" width="600" height="600" aria-hidden="true"
                class="absolute top-1/2 -translate-y-1/2 w-32 w-[600px] opacity-15 pointer-events-none"
                src="/assets/img/услуги_иконки/фоновые_иконки/4.svg" alt=""
                style="left: -10rem; rotate: 25deg;">
            <img loading="lazy" decoding="async" width="600" height="600" aria-hidden="true"
                class="hidden md:block transform -scale-x-100 absolute top-1/2 -translate-y-1/2 w-32 w-[600px] opacity-15 pointer-events-none"
                src="/assets/img/услуги_иконки/фоновые_иконки/4.svg" alt=""
                style="right: -10rem; rotate: -25deg;">

            <div class="absolute inset-0 opacity-30"
                style="background-image: radial-gradient(#3F5F3F 1px, transparent 1px); background-size: 30px 30px;">
            </div>
            <div class="container mx-auto px-4 relative z-10">
                <div class="text-center mb-20">
                    <span class="text-sm font-bold tracking-widest text-[#3F5F3F] uppercase mb-3 block">Процесс</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">Этапы проектирования и благоустройства участка в Московской области
                    </h2>
                </div>
                <p class="text-center text-gray-600 max-w-3xl mx-auto mb-12">От аудита участка в Москве и МО до реализации проекта под ключ: разработка эскизов, подготовка документации, подготовка территории, монтаж и озеленение. Стоимость каждого этапа работ видна в смете.</p>

                <div class="relative max-w-5xl mx-auto">
                    <div class="timeline-line"></div>

                    <div class="relative flex flex-col md:flex-row items-center mb-20">
                        <div class="order-1 md:w-5/12 md:text-right md:pr-20 pl-16 md:pl-0">
                            <h3 class="text-xl text-left md:text-right font-bold text-[#1a1a1a] mb-2">Аудит и топосъемка
                            </h3>
                            <p class="text-[#3F5F3F] text-sm font-semibold mb-2">(1 день)</p>
                             <p class="text-gray-600 text-sm leading-relaxed">Ознакомление с участком в Москве и Московской области, обсуждение ваших
                                 пожеланий, формирование концепции будущего сада и проекта благоустройства территории.</p>
                        </div>
                        <div
                            class="order-2 absolute left-0 md:left-1/2 md:-translate-x-1/2 w-12 h-12 bg-[#3F5F3F] rounded-full border-4 border-white shadow-lg flex items-center justify-center text-white font-bold z-10">
                            01</div>
                        <div class="order-3 md:w-5/12 md:pl-20 pl-16 md:text-left"></div>
                    </div>

                    <div class="relative flex flex-col md:flex-row items-center mb-20 reveal">
                        <div class="order-1 md:w-5/12 md:pr-20 pl-16 md:pl-0 md:text-right"></div>
                        <div
                            class="order-2 absolute left-0 md:left-1/2 md:-translate-x-1/2 w-12 h-12 bg-[#3F5F3F] rounded-full border-4 border-white shadow-lg flex items-center justify-center text-white font-bold z-10">
                            02</div>
                        <div class="order-3 md:w-5/12 ml-16 md:ml-auto">
                            <h3 class="text-xl text-left md:text-left font-bold text-[#1a1a1a] mb-2">Разработка эскизов
                            </h3>
                            <p class="text-[#3F5F3F] text-sm font-semibold mb-2">(7-14 дней)</p>
                            <p class="text-gray-600 text-sm leading-relaxed">Вы получаете 2-3 эскиза ландшафтного дизайна участка в Подмосковье в разных стилях.
                                 Обсуждаем, комбинируем, дорабатываем 1 итоговый вариант проекта для реализации под ключ.</p>
                        </div>
                    </div>

                    <div class="relative flex flex-col md:flex-row items-center mb-20 reveal">
                        <div class="order-1 md:w-5/12 md:text-right md:pr-20 pl-16 md:pl-0">
                            <h3 class="text-xl text-left md:text-right font-bold text-[#1a1a1a] mb-2">Подготовка
                                документации</h3>
                            <p class="text-[#3F5F3F] text-sm font-semibold mb-2">(14-30 дней)</p>
                            <p class="text-gray-600 text-sm leading-relaxed">Подготовка полной проектной документации для участка в Московской области.
                                 При необходимости создаем 3D визуализации. Полная фиксированная смета стоимости работ.</p>
                        </div>
                        <div
                            class="order-2 absolute left-0 md:left-1/2 md:-translate-x-1/2 w-12 h-12 bg-[#3F5F3F] rounded-full border-4 border-white shadow-lg flex items-center justify-center text-white font-bold z-10">
                            03</div>
                        <div class="order-3 md:w-5/12 md:pl-20 pl-16 md:text-left"></div>
                    </div>

                    <div class="relative flex flex-col md:flex-row items-center mb-20 reveal">
                        <div class="order-1 md:w-5/12 md:pr-20 pl-16 md:pl-0 md:text-right"></div>
                        <div
                            class="order-2 absolute left-0 md:left-1/2 md:-translate-x-1/2 w-12 h-12 bg-[#3F5F3F] rounded-full border-4 border-white shadow-lg flex items-center justify-center text-white font-bold z-10">
                            04</div>
                        <div class="order-3 md:w-5/12 ml-16 md:ml-auto">
                            <h3 class="text-xl text-left md:text-left font-bold text-[#1a1a1a] mb-2">Подготовка
                                территории</h3>
                            <p class="text-[#3F5F3F] text-sm font-semibold mb-2">(7-10 дней)</p>
                            <p class="text-gray-600 text-sm leading-relaxed">Черновая планировка участка, согласно
                                проекту, снятие/завоз грунта, вывоз мусора и др.</p>
                        </div>
                    </div>

                    <div class="relative flex flex-col md:flex-row items-center mb-20 reveal">
                        <div class="order-1 md:w-5/12 md:text-right md:pr-20 pl-16 md:pl-0">
                            <h3 class="text-xl text-left md:text-right font-bold text-[#1a1a1a] mb-2">Реализация проекта
                            </h3>
                            <p class="text-[#3F5F3F] text-sm font-semibold mb-2">(от 30 дней)</p>
                            <p class="text-gray-600 text-sm leading-relaxed">Профессионально монтируем инженерные
                                 системы на участке в Подмосковье: дренаж, автополив, освещение и др. Выполняем мощение дорожек и площадок, сажаем растения и укладываем газон. Все ландшафтные работы под ключ с гарантией.</p>
                        </div>
                        <div
                            class="order-2 absolute left-0 md:left-1/2 md:-translate-x-1/2 w-12 h-12 bg-[#3F5F3F] rounded-full border-4 border-white shadow-lg flex items-center justify-center text-white font-bold z-10">
                            05</div>
                        <div class="order-3 md:w-5/12 md:pl-20 pl-16 md:text-left"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- ОТЗЫВЫ                                                                -->
        <!-- ====================================================================== -->
        <section class="py-24 bg-[#f8faf8] relative overflow-hidden reveal">
            <div class="absolute inset-0 opacity-30"
                style="background-image: radial-gradient(#3F5F3F 1px, transparent 1px); background-size: 30px 30px;">
            </div>
            <div class="container mx-auto px-4 relative z-10">
                <div class="text-center mb-16">
                    <span class="text-sm font-bold tracking-widest text-[#3F5F3F] uppercase mb-3 block">Доверие</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">Отзывы клиентов о благоустройстве участков в Москве и области
                    </h2>
                </div>
                <p class="text-center text-gray-600 max-w-3xl mx-auto mb-12">Проверенные отзывы заказчиков ландшафтного дизайна под ключ в Подмосковье: цена, сроки проектирования и качество реализации проектов.</p>

                <div class="relative max-w-5xl mx-auto">
                    <div class="swiper reviews-swiper pb-12">
                        <div class="swiper-wrapper">
                            {set $otzivis = json_decode($_modx->resource.otziv, true)}
                            {if $otzivis}
                            {foreach $otzivis as $otz}
                            <div class="swiper-slide">
                                <div
                                    class="bg-white p-3 rounded-3xl border border-gray-100 transition duration-300 h-full flex flex-col">
                                    <div class="overflow-hidden rounded-2xl flex-grow">
                                        <img loading="lazy" decoding="async" class="w-full h-auto object-contain"
                                            src="{$otz.img | phpthumbon : \'w=600&h=900&zc=1&f=webp&q=65\'}" width="600" height="900"
                                            alt="Отзыв клиента о ландшафтном дизайне участка в Подмосковье — Дом Оз">
                                    </div>
                                    <div
                                        class="pt-4 px-2 pb-2 flex items-center justify-between border-t border-gray-50 mt-2">
                                        <div class="flex items-center gap-2 text-[#3F5F3F]">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <span class="font-bold text-sm">5.0 / 5.0</span>
                                        </div>
                                        <span class="text-xs text-gray-400 font-medium">Проверенный клиент</span>
                                    </div>
                                </div>
                            </div>
                            {/foreach}
                            {/if}
                        </div>
                        <div class="flex justify-center items-center mt-4">
                            <button type="button" aria-label="Читать все отзывы на Яндекс"
                                onclick="window.open(\'https://yandex.ru/profile/143689332544?lang=ru\', \'_blank\');"
                                class="w-fit py-4 px-10 bg-[#3F5F3F] hover:bg-[#3d5c3d] text-white font-bold rounded-xl transition shadow-md mt-2">Читать
                                все отзывы</button>
                        </div>
                    </div>
                    <div
                        class="swiper-button-prev !w-10 !h-10 !bg-white !shadow !rounded-full !text-[#3F5F3F] !opacity-100 hover:!bg-[#3F5F3F] hover:!text-white transition"
                        aria-label="Предыдущий отзыв">
                    </div>
                    <div
                        class="swiper-button-next !w-10 !h-10 !bg-white !shadow !rounded-full !text-[#3F5F3F] !opacity-100 hover:!bg-[#3F5F3F] hover:!text-white transition"
                        aria-label="Следующий отзыв">
                    </div>
                </div>
                <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto mt-12 text-left">
                    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                        <div class="font-bold text-[#3F5F3F] text-sm mb-2">5.0 / 5.0</div>
                        <p class="text-sm text-gray-600 leading-relaxed">Заказывали благоустройство участка в Истре под ключ. Смету зафиксировали до начала работ, сделали дренаж, мощение и газон за месяц. Цена не выросла ни на рубль.</p>
                        <div class="mt-4 text-xs text-gray-400 font-medium">Андрей, Истра • благоустройство участка</div>
                    </div>
                    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                        <div class="font-bold text-[#3F5F3F] text-sm mb-2">5.0 / 5.0</div>
                        <p class="text-sm text-gray-600 leading-relaxed">Делали проектирование и озеленение дачного участка в Подмосковье. Привезли 3 эскиза, всё объяснили, посадки прижились. Работают по договору, это подкупает.</p>
                        <div class="mt-4 text-xs text-gray-400 font-medium">Марина, Одинцово • озеленение участка</div>
                    </div>
                    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                        <div class="font-bold text-[#3F5F3F] text-sm mb-2">5.0 / 5.0</div>
                        <p class="text-sm text-gray-600 leading-relaxed">Нужен был ландшафтный дизайн дома в Красногорске с автополивом и освещением. Выехали за день, смету посчитали за сутки. Второй год всё работает.</p>
                        <div class="mt-4 text-xs text-gray-400 font-medium">Дмитрий, Красногорск • дизайн под ключ</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- СРАВНЕНИЕ: Дом Оз vs обычные бригады (как у enterno)            -->
        <!-- ====================================================================== -->
        <section class="py-24 bg-white relative overflow-hidden reveal">
            <div class="container mx-auto px-4 max-w-4xl">
                <div class="text-center mb-12">
                    <span class="text-sm font-bold tracking-widest text-[#3F5F3F] uppercase mb-3 block">Сравнение</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">Дом Оз против обычных бригад в Подмосковье</h2>
                    <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Почему заказать благоустройство участка в Москве и МО у компании выгоднее, чем у частников без договора.</p>
                </div>
                <div class="overflow-x-auto rounded-2xl border border-gray-100 shadow-sm">
                    <table class="w-full text-sm text-left">
                        <thead>
                            <tr class="bg-[#f8faf8] text-[#1a1a1a]">
                                <th class="p-4 font-bold">Критерий</th>
                                <th class="p-4 font-bold text-[#3F5F3F]">Дом Оз</th>
                                <th class="p-4 font-bold text-gray-400">Частные бригады</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600">
                            <tr class="border-t border-gray-100"><td class="p-4 font-medium text-[#1a1a1a]">Договор и фиксированная смета</td><td class="p-4">Да, цена не меняется</td><td class="p-4">Нет, доплаты по ходу</td></tr>
                            <tr class="border-t border-gray-100"><td class="p-4 font-medium text-[#1a1a1a]">Проект и эскизы участка</td><td class="p-4">2-3 эскиза + документация</td><td class="p-4">«На глаз», без проекта</td></tr>
                            <tr class="border-t border-gray-100"><td class="p-4 font-medium text-[#1a1a1a]">Гарантия на работы</td><td class="p-4">До 5 лет по договору</td><td class="p-4">Нет</td></tr>
                            <tr class="border-t border-gray-100"><td class="p-4 font-medium text-[#1a1a1a]">Штатные бригады и надзор</td><td class="p-4">Да, инженер на объекте</td><td class="p-4">Случайные люди</td></tr>
                            <tr class="border-t border-gray-100"><td class="p-4 font-medium text-[#1a1a1a]">Смета за 1 день, выезд по МО</td><td class="p-4">Бесплатно</td><td class="p-4">Неделями</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- AI-КРАТКО (TL;DR для нейропоиска)                                   -->
        <!-- ====================================================================== -->
        <section class="py-12 bg-[#f8faf8] reveal" id="tldr">
            <div class="container mx-auto px-4 max-w-4xl">
                <div class="tldr bg-white rounded-2xl p-8 border border-gray-100 shadow-sm">
                    <h2 class="text-2xl font-extrabold text-[#1a1a1a] mb-4 text-center">Коротко: ландшафтный дизайн под ключ в Москве и МО</h2>
                    <ul class="text-gray-600 text-sm leading-relaxed space-y-2 max-w-3xl mx-auto list-disc pl-5">
                        <li><strong>Что делаем:</strong> проектирование, благоустройство, озеленение участков под ключ в Москве, Московской области и Подмосковье.</li>
                        <li><strong>Стоимость услуг:</strong> проектирование от 11 500 руб/сотка, благоустройство от 50 000 руб/услуга, цена фиксируется в смете и договоре.</li>
                        <li><strong>Сроки работ:</strong> эскизы 7-14 дней, документация 14-30 дней, реализация проекта от 30 дней.</li>
                        <li><strong>Гарантии:</strong> работаем по договору, 120+ реализованных проектов, гарантия на работы до 5 лет, бесплатный выезд инженера по Москве и МО.</li>
                        <li><strong>Как заказать:</strong> оставьте заявку — рассчитаем стоимость проекта участка в Подмосковье за 1 день.</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- SEO-ТЕКСТ                                                             -->
        <!-- ====================================================================== -->
        <section class="py-24 bg-white reveal">
            <div class="container mx-auto px-4 max-w-4xl">
                <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] mb-6 text-center">Ландшафтный дизайн и благоустройство участков под ключ в Подмосковье — цены и услуги</h2>
                <p class="text-center text-gray-600 max-w-3xl mx-auto mb-10">Проектирование участков, ландшафтное проектирование и озеленение территории, дренаж, мощение, газон и освещение в Москве и Московской области. Стоимость работ и цена проектирования зависят от площади участка — смету фиксируем до начала реализации проекта.</p>
                <div class="!text-left prose prose-lg prose-green mx-auto text-[#1a1a1a]">
                    {$_modx->resource.content}
                </div>
                <div class="mt-12 grid md:grid-cols-2 gap-6 text-left">
                    <div class="bg-[#f8faf8] rounded-2xl p-6 border border-gray-100">
                        <h3 class="text-xl font-bold text-[#1a1a1a] mb-3">Проектирование ландшафтного дизайна в Подмосковье: эскизы и документация</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Готовим 2-3 эскиза ландшафтного дизайна участка в Московской области, проектную документацию, 3D-визуализацию и смету. Опыт компании — 120+ реализованных проектов домов и участков под ключ без переделок.</p>
                    </div>
                    <div class="bg-[#f8faf8] rounded-2xl p-6 border border-gray-100">
                        <h3 class="text-xl font-bold text-[#1a1a1a] mb-3">Благоустройство и подготовка территории участка в МО</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Выполняем подготовку территории и все виды работ по благоустройству участка в Подмосковье: планировка, дренаж, ливневка, мощение дорожек, подпорные стенки. Реализация проекта строго по смете без скрытых доплат.</p>
                    </div>
                    <div class="bg-[#f8faf8] rounded-2xl p-6 border border-gray-100">
                        <h3 class="text-xl font-bold text-[#1a1a1a] mb-3">Озеленение, газон и освещение участков в Московской области</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Озеленение территории, посадка растений, укладка газона, автополив и ландшафтное освещение участка в Москве и области. Услуги по уходу за садом после реализации проекта.</p>
                    </div>
                    <div class="bg-[#f8faf8] rounded-2xl p-6 border border-gray-100">
                        <h3 class="text-xl font-bold text-[#1a1a1a] mb-3">Стоимость услуг компании — смета без скрытых доплат</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Стоимость ландшафтных работ в Подмосковье фиксируем в договоре. Цена проектирования от 11 500 руб/сотка, реализация — по смете. Проверенные клиенты оставляют отзывы о цене и сроках — изучите отзывы перед заявкой.</p>
                    </div>
                </div>
                <p class="mt-10 text-gray-600 leading-relaxed">Заказать ландшафтный дизайн участка в Москве и МО можно с выездом инженера за 1 день. Выполняем все виды ландшафтных работ в Подмосковье: от эскиза и проектной документации до благоустройства, озеленения и ухода за территорией. Цена услуг прозрачна — стоимость проектирования и цена реализации проекта участка под ключ в Московской области вы видите в договоре без скрытых доплат.</p>
            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- СТАТЬИ И РУКОВОДСТВА (свежесть + перелинковка, как у enterno)     -->
        <!-- ====================================================================== -->
        <section class="py-24 bg-white relative overflow-hidden reveal">
            <div class="container mx-auto px-4 max-w-6xl">
                <div class="text-center mb-12">
                    <span class="text-sm font-bold tracking-widest text-[#3F5F3F] uppercase mb-3 block">Блог</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto" style="text-align:center">Статьи и руководства о ландшафтном дизайне в Подмосковье</h2>
                    <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Цены, этапы работ, ошибки благоустройства участков в Москве и МО — простым языком.</p>
                </div>
                <div class="grid md:grid-cols-3 gap-6">
                    {\'pdoResources\' | snippet : [
                    \'parents\' => \'59\',
                    \'tpl\' => \'@CODE:<a href="{$id | url}" class="group bg-[#f8faf8] rounded-2xl border border-gray-100 overflow-hidden hover:shadow-xl transition block"><div class="p-6" style="text-align:center"><h3 class="text-lg font-bold text-[#1a1a1a] mb-2 group-hover:text-[#3F5F3F] transition" style="text-align:center">{$pagetitle}</h3><span class="text-sm font-bold text-[#3F5F3F]">Читать статью →</span></div></a>\',
                    \'limit\' => \'3\',
                    \'sortby\' => \'publishedon\',
                    \'sortdir\' => \'DESC\'
                    ]}
                </div>
                <div class="text-center mt-10">
                    <a href="https://domozmsk.ru/blogs" class="inline-flex items-center justify-center px-10 py-4 bg-white border-2 border-[#3F5F3F] text-[#3F5F3F] font-bold rounded-xl hover:bg-[#3F5F3F] hover:text-white transition shadow-md">Все статьи блога</a>
                </div>
            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- FAQ                                                                   -->
        <!-- ====================================================================== -->
        <section class="py-24 bg-[#f8faf8] relative overflow-hidden reveal">
            <div class="absolute inset-0 opacity-30"
                style="background-image: radial-gradient(#3F5F3F 1px, transparent 1px); background-size: 30px 30px;">
            </div>
            <div class="container mx-auto px-4 max-w-3xl relative z-10">
                <div class="text-center mb-16">
                    <span class="text-sm font-bold tracking-widest text-[#3F5F3F] uppercase mb-3 block">FAQ</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">Частые вопросы про ландшафтный дизайн участков в Подмосковье
                    </h2>
                </div>
                <p class="text-center text-gray-600 max-w-3xl mx-auto mb-10">Сколько стоит проект участка в Московской области, как заказать благоустройство в Москве и что входит в услуги под ключ.</p>

                <div class="space-y-4">
                    {set $voprosi = json_decode($_modx->resource.vopros, true)}
                    {if $voprosi}
                    {foreach $voprosi as $vop}
                    <details
                        class="group bg-white rounded-2xl border border-gray-200 open:border-[#3F5F3F]/30 transition shadow-sm">
                        <summary
                            class="flex justify-between items-center cursor-pointer p-6 font-medium text-[#1a1a1a] list-none">
                            {$vop.vopr}
                            <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <div
                            class="grid grid-rows-[0fr] transition-[grid-template-rows] duration-300 ease-out group-open:grid-rows-[1fr]">
                            <div class="overflow-hidden">
                                <div class="text-[#1a1a1a] px-6 pb-6 leading-relaxed border-t border-gray-100 pt-4">
                                    {$vop.otv}
                                </div>
                            </div>
                        </div>
                    </details>
                    {/foreach}
                    {/if}
                    <details class="group bg-white rounded-2xl border border-gray-200 open:border-[#3F5F3F]/30 transition shadow-sm">
                        <summary class="flex justify-between items-center cursor-pointer p-6 font-medium text-[#1a1a1a] list-none">
                            Сколько стоит ландшафтный дизайн под ключ в Подмосковье?
                            <span class="transition group-open:rotate-180"><svg fill="none" height="24" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg></span>
                        </summary>
                        <div class="grid grid-rows-[0fr] transition-[grid-template-rows] duration-300 ease-out group-open:grid-rows-[1fr]"><div class="overflow-hidden"><div class="faq-answer text-[#1a1a1a] px-6 pb-6 leading-relaxed border-t border-gray-100 pt-4">Стоимость проектирования участка в Московской области — от 11 500 руб/сотка, реализация проекта благоустройства — по смете от 50 000 руб/услуга. Точную цену работ называем после выезда инженера по Москве и МО и фиксируем в договоре без скрытых доплат.</div></div></div>
                    </details>
                    <details class="group bg-white rounded-2xl border border-gray-200 open:border-[#3F5F3F]/30 transition shadow-sm">
                        <summary class="flex justify-between items-center cursor-pointer p-6 font-medium text-[#1a1a1a] list-none">
                            Что входит в благоустройство участка в Московской области под ключ?
                            <span class="transition group-open:rotate-180"><svg fill="none" height="24" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg></span>
                        </summary>
                        <div class="grid grid-rows-[0fr] transition-[grid-template-rows] duration-300 ease-out group-open:grid-rows-[1fr]"><div class="overflow-hidden"><div class="faq-answer text-[#1a1a1a] px-6 pb-6 leading-relaxed border-t border-gray-100 pt-4">Подготовка территории, дренаж и ливневка, мощение дорожек, озеленение, газон, автополив, ландшафтное освещение, эскизы и проектная документация. Все виды ландшафтных работ выполняет одна компания по договору.</div></div></div>
                    </details>
                    <details class="group bg-white rounded-2xl border border-gray-200 open:border-[#3F5F3F]/30 transition shadow-sm">
                        <summary class="flex justify-between items-center cursor-pointer p-6 font-medium text-[#1a1a1a] list-none">
                            Выезжаете ли вы на участки в Подмосковье и как заказать проект?
                            <span class="transition group-open:rotate-180"><svg fill="none" height="24" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg></span>
                        </summary>
                        <div class="grid grid-rows-[0fr] transition-[grid-template-rows] duration-300 ease-out group-open:grid-rows-[1fr]"><div class="overflow-hidden"><div class="faq-answer text-[#1a1a1a] px-6 pb-6 leading-relaxed border-t border-gray-100 pt-4">Да, работаем по Москве и всей Московской области до 100 км от МКАД. Чтобы заказать ландшафтный дизайн дома — оставьте заявку: инженер приедет за 1 день, сделает замеры и рассчитает стоимость услуг.</div></div></div>
                    </details>
                    <details class="group bg-white rounded-2xl border border-gray-200 open:border-[#3F5F3F]/30 transition shadow-sm">
                        <summary class="flex justify-between items-center cursor-pointer p-6 font-medium text-[#1a1a1a] list-none">
                            Есть ли отзывы и гарантия на ландшафтные работы в Москве?
                            <span class="transition group-open:rotate-180"><svg fill="none" height="24" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg></span>
                        </summary>
                        <div class="grid grid-rows-[0fr] transition-[grid-template-rows] duration-300 ease-out group-open:grid-rows-[1fr]"><div class="overflow-hidden"><div class="faq-answer text-[#1a1a1a] px-6 pb-6 leading-relaxed border-t border-gray-100 pt-4">Да, 120+ реализованных проектов участков в Подмосковье, проверенные отзывы клиентов, гарантия на работы до 5 лет. Опыт компании — 18 лет, все этапы фиксируем в договоре и смете.</div></div></div>
                    </details>
                </div>
            </div>
        </section>
        {ignore}
        <script type="application/ld+json">
        {"@context":"https://schema.org","@type":"FAQPage","mainEntity":[
        {"@type":"Question","name":"Сколько стоит ландшафтный дизайн под ключ в Подмосковье?","acceptedAnswer":{"@type":"Answer","text":"Проектирование участка в Московской области от 11 500 руб/сотка, благоустройство от 50 000 руб/услуга. Точная стоимость работ по смете после выезда по Москве и МО."}},
        {"@type":"Question","name":"Что входит в благоустройство участка в Московской области под ключ?","acceptedAnswer":{"@type":"Answer","text":"Подготовка территории, дренаж, мощение, озеленение, газон, автополив, освещение, эскизы и проектная документация."}},
        {"@type":"Question","name":"Выезжаете ли вы на участки в Подмосковье?","acceptedAnswer":{"@type":"Answer","text":"Да, работаем по Москве и Московской области до 100 км от МКАД. Заявка — выезд инженера за 1 день."}},
        {"@type":"Question","name":"Есть ли отзывы и гарантия на работы?","acceptedAnswer":{"@type":"Answer","text":"120+ реализованных проектов, проверенные отзывы, гарантия до 5 лет, договор и фиксированная смета."}}
        ]}
        </script>
        {/ignore}

        <!-- ====================================================================== -->
        <!-- ФИНАЛЬНЫЙ CTA                                                         -->
        <!-- ====================================================================== -->
        <section class="py-24 bg-[#1a1a1a] text-white relative overflow-hidden reveal" id="contac">
            <div class="absolute inset-0 opacity-10"
                style="background-image: radial-gradient(#3F5F3F 1px, transparent 1px); background-size: 30px 30px;">
            </div>

            <div class="container mx-auto px-4 relative z-10">
                <div class="grid lg:grid-cols-2 gap-12">
                    <div>
                        <h2 class="text-3xl text-left md:text-4xl font-extrabold mb-6 text-white">Готовы обсудить
                            проект участка в Москве и МО?</h2>
                        <p class="text-lg text-gray-400 mb-8 text-left">Оставьте заявку, и мы подготовим предварительную
                            смету стоимости ландшафтного дизайна и план благоустройства участка в Подмосковье бесплатно.</p>

                        <ul class="space-y-4 mb-8 text-left">
                            <li class="flex items-center gap-3">
                                <svg class="w-6 h-6 text-[#3F5F3F]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-300">Выезд замерщика по Москве и МО за 1 день</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-6 h-6 text-[#3F5F3F]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-300">Гарантия лучшей цены на ландшафтные работы</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-6 h-6 text-[#3F5F3F]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-300">Работаем по договору — смета на проект участка без скрытых доплат</span>
                            </li>
                        </ul>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="tel:{\'phone\'|config}" class="inline-flex items-center justify-center px-6 py-3 bg-white/10 backdrop-blur-sm border border-white/30 text-white rounded-xl font-bold hover:bg-white hover:text-[#1a1a1a] transition">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                {\'phone\'|config}
                            </a>
                            <a href="mailto:{\'email_1\'|config}" class="inline-flex items-center justify-center px-6 py-3 bg-white/10 backdrop-blur-sm border border-white/30 text-white rounded-xl font-bold hover:bg-white hover:text-[#1a1a1a] transition">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                {\'email_1\'|config}
                            </a>
                        </div>
                    </div>

                    <div class="bg-white p-8 rounded-2xl shadow-2xl text-[#1a1a1a]">
                        {\'FetchIt\'|snippet:[
                        \'snippet\'=>\'FormIt\', \'hooks\'=>\'email\',
                        \'frontendCss\'=>\'\',
                        \'form\'=>\'@INLINE <form method="post" class="space-y-4">
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
                        </form>\',
                        \'emailTo\'=>"{\'email_1\'|config},artemnersisyan777@gmail.com",
                        \'emailSubject\'=>"Заявка CTA",
                        \'successMessage\'=>\'<div class="w-fit text-center text-white font-bold p-2">Спасибо за обращене, мы скоро свяжемся с вами!</div>\'
                        ]}
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24 bg-[#1a1a1a]"></section>

    </main>

    {include \'footer\'}
    {include \'modal\'}
    {include \'social\'}

    <!-- Аналитика: -->
    [[$yandex.metrika]]

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
    <script src="/assets/bibliotek/jquery/jqwery.js" defer></script>
    <script src="/assets/js/script.js?v={$_modx->config.cache_version}" defer></script>
    

    <script defer>
        document.addEventListener(\'DOMContentLoaded\', function () {
            // Accessibility: подписи для плавающих кнопок связи (chunks/social)
            document.querySelectorAll(\'.abssocial a:not([aria-label])\').forEach(function (link) {
                var label = link.querySelector(\'span\') && link.querySelector(\'span\').textContent.trim();
                if (!label) {
                    if (link.classList.contains(\'abssocial__one\')) label = \'Открыть меню связи\';
                    else if (link.classList.contains(\'abssocial__close\')) label = \'Закрыть меню связи\';
                }
                if (label) link.setAttribute(\'aria-label\', label);
            });

            // Hero Slider
            if (document.querySelector(\'.hero-swiper\')) {
                new Swiper(\'.hero-swiper\', {
                    loop: true,
                    autoplay: { delay: 5000, disableOnInteraction: false },
                    effect: \'fade\',
                    fadeEffect: { crossFade: true }
                });
            }

            // Reviews Slider
            if (document.querySelector(\'.reviews-swiper\')) {
                new Swiper(\'.reviews-swiper\', {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    autoHeight: true,
                    breakpoints: {
                        640: { slidesPerView: 2 },
                        1024: { slidesPerView: 2.5 }
                    },
                    navigation: { nextEl: \'.swiper-button-next\', prevEl: \'.swiper-button-prev\' },
                    pagination: { el: \'.swiper-pagination\', clickable: true }
                });
            }
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