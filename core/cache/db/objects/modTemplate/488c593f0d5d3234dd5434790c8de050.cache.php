<?php  return array (
  'id' => 18,
  'source' => 1,
  'property_preprocess' => 0,
  'templatename' => 'услуги - Ландшафт Дизайн',
  'description' => 'Template',
  'editor_type' => 0,
  'category' => 27,
  'icon' => 'icon-briefcase',
  'template_type' => 0,
  'content' => '<!DOCTYPE html>
<html lang="ru" itemscope itemtype="https://schema.org/WebPage">

<head>
    <!-- Модуль мета-тегов MODX -->
    {include \'meta\'}
    <meta name="description" content="{$_modx->resource.baner_des}">
    {$_modx->resource.codecviz}
    <!-- Правильные заголовки кэширования -->
    <meta http-equiv="Cache-Control" content="public, max-age=31536000, immutable">
    <meta http-equiv="Expires" content="Fri, 30 May 2027 23:59:59 GMT">

    <!-- Preconnect to CDN origins -->
    <link rel="preconnect" href="https://cdn.tailwindcss.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>

    <!-- Tailwind CSS (deferred) -->
    <link rel="preload" href="https://cdn.tailwindcss.com" as="script">
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: [\'Inter\', \'sans-serif\'],
                    },
                    colors: {
                        primary: \'#558255\',
                        \'primary-dark\': \'#3d5c3d\',
                        accent: \'#d4a574\',
                        dark: \'#1a1a1a\',
                        \'light-gray\': \'#f5f7f6\'
                    }
                }
            }
        }
    </script>

    <!-- SWIPER CSS (deferred - only needed for sliders) -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" as="style"
        onload="this.onload=null;this.rel=\'stylesheet\'">
    <noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    </noscript>

    <!-- Critical CSS with onload optimization -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" as="style"
        crossorigin="anonymous" onload="this.onload=null;this.rel=\'stylesheet\'">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
            crossorigin="anonymous">
    </noscript>

    <!-- FANCYBOX CSS (deferred - only needed for lightbox) -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" as="style"
        onload="this.onload=null;this.rel=\'stylesheet\'">
    <noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">
    </noscript>

    <style>
        body {
            font-family: \'Inter\', sans-serif;
            background: #fff;
            color: #1a1a1a
        }

        @keyframes marquee {
            0% {
                transform: translateX(0)
            }

            100% {
                transform: translateX(-50%)
            }
        }

        .animate-marquee {
            animation: marquee 30s linear infinite
        }

        .service-popup li {
            margin: 4px 0;
            color: #4b5563;
            font-size: 14px
        }

        .problem-card {
            background: #f8faf8;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 20px;
            text-align: center;
            transition: all .3s
        }

        .problem-card:hover {
            border-color: #558255;
            transform: translateY(-3px)
        }

        .acor-container input[type=checkbox] {
            display: none
        }

        .acor-container .acor-body {
            max-height: 0;
            overflow: hidden;
            transition: all .3s ease
        }

        .acor-container input[type=checkbox]:checked+label+.acor-body {
            max-height: 300px;
            padding: 0 20px 20px
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
            font-weight: 500
        }

        .acor-container label:hover {
            background: #f0f0f0;
            border-color: #558255
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
            transition: all .3s
        }

        .acor-container input[type=checkbox]:checked+label::after {
            content: \'−\';
            background: #558255;
            color: #fff
        }

        .hero-carousel .swiper-slide {
            height: 500px
        }

        .hero-carousel .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover
        }

        @media (max-width:768px) {
            .hero-carousel .swiper-slide {
                height: 400px
            }
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: inherit
        }

        .swiper-pagination-bullet-active {
            background: #95dd95 !important
        }

        .swiper-pagination-bullet {
            background: var(--swiper-pagination-bullet-inactive-color, #fff)
        }

        .hero-swiper {
            height: 100%
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
            background: linear-gradient(to right, rgba(0, 0, 0, .8) 0%, rgba(0, 0, 0, .5) 50%, transparent 100%)
        }
    </style>
</head>

<body class="antialiased">

    {include \'header\'}

    <main itemprop="mainContentOfPage">

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
                                <source media="(max-width: 768px)" srcset="{$slid.img_mob}">
                                <img alt="{$_modx->resource.baner_h1}" loading="lazy" decoding="async"
                                    class="w-full h-full object-cover" src="{$slid.img}">
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
                                МОСКВА И МО
                            </span>
                            <span class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                СОЧИ
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
                                Узнать подробнее
                            </button>
                            <a href="tel:{\'phone\'|config}"
                                class="inline-flex items-center justify-center px-8 py-4 rounded-xl bg-white border border-gray-200 text-gray-900 font-semibold hover:bg-gray-50 transition">
                                Позвонить
                            </a>
                        </div>

                        <!-- Цена (Если есть в TV) -->
                        <!-- ПРАВАЯ ЧАСТЬ: Цены с подсказками -->
                        <div class="lg:col-span-6 text-white">
                            <h3 class="text-3xl font-bold mb-8 text-white text-left">Цены:</h3>

                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-x-12 gap-y-6 items-center">

                                <!-- Цена 1: Выезд и консультация -->
                                <div class="border-l-2 border-[#d4a574] pl-4">
                                    <div class="text-md font-medium leading-tight mb-1 text-gray-100">
                                        Выезд и консультация дизайнера

                                        <!-- INFO ICON -->
                                        <span class="inline-flex items-center ml-1 relative group">
                                            <i
                                                class="fas fa-info-circle text-[#d4a574] text-sm cursor-help hover:text-white transition"></i>

                                            <!-- TOOLTIP -->
                                            <div
                                                class="absolute left-1/2 -translate-x-1/2 bottom-full mb-2 w-80 p-4 bg-white/95 backdrop-blur-sm rounded-xl border border-gray-200 shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 text-left">
                                                <div class="text-[#1a1a1a] text-sm space-y-3">
                                                    <div class="font-bold text-[#558255] mb-2">Что входит в услугу:
                                                    </div>

                                                    <div>
                                                        <div class="font-semibold text-[#1a1a1a] mb-1">✔️ Осмотр участка
                                                        </div>
                                                        <div class="text-gray-600 text-xs">анализ рельефа, почвы,
                                                            инсоляции, существующих растений и строений; выявление
                                                            возможных проблем</div>
                                                    </div>

                                                    <div>
                                                        <div class="font-semibold text-[#1a1a1a] mb-1">✔️ Функциональное
                                                            зонирование</div>
                                                        <div class="text-gray-600 text-xs">обсуждение зон: отдыха, сада,
                                                            детской площадки, парковки; определение удобных маршрутов
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <div class="font-semibold text-[#1a1a1a] mb-1">✔️ Рекомендации
                                                            по стилю</div>
                                                        <div class="text-gray-600 text-xs">подбор идей по ландшафтному
                                                            стилю, советы по гармоничному сочетанию дома и участка</div>
                                                    </div>

                                                    <div>
                                                        <div class="font-semibold text-[#1a1a1a] mb-1">✔️ Рекомендации
                                                            по растениям</div>
                                                        <div class="text-gray-600 text-xs">подбор ассортимента с учетом
                                                            климата, советы по сохранению существующих растений</div>
                                                    </div>

                                                    <div>
                                                        <div class="font-semibold text-[#1a1a1a] mb-1">✔️ Инженерные
                                                            решения</div>
                                                        <div class="text-gray-600 text-xs">рекомендации по освещению,
                                                            дренажу, автополиву и материалам</div>
                                                    </div>
                                                </div>

                                                <!-- Arrow -->
                                                <div
                                                    class="absolute left-1/2 -translate-x-1/2 -bottom-2 w-4 h-4 bg-white transform rotate-45 border-r border-b border-gray-200">
                                                </div>
                                            </div>
                                        </span>
                                    </div>

                                    <p class="text-lg font-bold text-[#d4a574] mt-2">8 000 ₽</p>
                                </div>

                                <!-- Цена 2: Схема освещения -->
                                <div class="border-l-2 border-[#d4a574] pl-4">
                                    <div class="text-md font-medium leading-tight mb-1 text-gray-100">
                                        Схема<br>системы освещения

                                        <!-- INFO ICON -->
                                        <span class="inline-flex items-center ml-1 relative group">
                                            <i
                                                class="fas fa-info-circle text-[#d4a574] text-sm cursor-help hover:text-white transition"></i>

                                            <!-- TOOLTIP -->
                                            <div
                                                class="absolute left-1/2 -translate-x-1/2 bottom-full mb-2 w-80 p-4 bg-white/95 backdrop-blur-sm rounded-xl border border-gray-200 shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 text-left">
                                                <div class="text-[#1a1a1a] text-sm space-y-3">
                                                    <div class="font-bold text-[#558255] mb-2">Зачем нужен проект
                                                        освещения?</div>

                                                    <div>
                                                        <div class="font-semibold text-[#1a1a1a] mb-1">✔️ Безопасность и
                                                            комфорт</div>
                                                        <div class="text-gray-600 text-xs">освещение дорожек, ступеней и
                                                            въезда; исключение «слепящих» зон</div>
                                                    </div>

                                                    <div>
                                                        <div class="font-semibold text-[#1a1a1a] mb-1">✔️ Декоративный
                                                            эффект</div>
                                                        <div class="text-gray-600 text-xs">подсветка деревьев,
                                                            архитектурных деталей, водоёмов; создание атмосферы уюта
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <div class="font-semibold text-[#1a1a1a] mb-1">✔️
                                                            Энергоэффективность</div>
                                                        <div class="text-gray-600 text-xs">LED, датчики движения,
                                                            системы автоматизации; снижение расходов на электроэнергию
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <div class="font-semibold text-[#1a1a1a] mb-1">✔️ Техническая
                                                            точность</div>
                                                        <div class="text-gray-600 text-xs">схемы разводки кабелей,
                                                            спецификации оборудования, узлы подключения</div>
                                                    </div>
                                                </div>

                                                <!-- Arrow -->
                                                <div
                                                    class="absolute left-1/2 -translate-x-1/2 -bottom-2 w-4 h-4 bg-white transform rotate-45 border-r border-b border-gray-200">
                                                </div>
                                            </div>
                                        </span>
                                    </div>

                                    <p class="text-lg font-bold text-[#d4a574] mt-2">от 33 000 ₽</p>
                                </div>

                                <!-- Цена 3: Базовый проект -->
                                <div class="border-l-2 border-[#d4a574] pl-4">
                                    <div class="text-md font-medium leading-tight mb-1 text-gray-100">
                                        Базовый проект

                                        <!-- INFO ICON -->
                                        <span class="inline-flex items-center ml-1 relative group">
                                            <i
                                                class="fas fa-info-circle text-[#d4a574] text-sm cursor-help hover:text-white transition"></i>

                                            <!-- TOOLTIP -->
                                            <div
                                                class="absolute left-1/2 -translate-x-1/2 bottom-full mb-2 w-80 p-4 bg-white/95 backdrop-blur-sm rounded-xl border border-gray-200 shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 text-left">
                                                <div class="text-[#1a1a1a] text-sm space-y-3">
                                                    <div class="font-bold text-[#558255] mb-2">Состав проекта:</div>

                                                    <div class="text-gray-600 text-xs">
                                                        <div class="font-semibold text-[#1a1a1a] mb-1">✔️ Концепция:
                                                        </div>
                                                        <div class="mb-2">2 эскизных варианта + 1 доработка, стилевое
                                                            решение, подбор растений (фотоаналоги)</div>
                                                    </div>

                                                    <div class="text-gray-600 text-xs space-y-1">
                                                        <div>1. Генеральный план</div>
                                                        <div>2. Дендроплан с ведомостью</div>
                                                        <div>3. Визуализация (2-3 вида)</div>
                                                        <div>4. Разбивочно-посадочный чертёж</div>
                                                        <div>5. План благоустройства</div>
                                                    </div>
                                                </div>

                                                <!-- Arrow -->
                                                <div
                                                    class="absolute left-1/2 -translate-x-1/2 -bottom-2 w-4 h-4 bg-white transform rotate-45 border-r border-b border-gray-200">
                                                </div>
                                            </div>
                                        </span>
                                    </div>

                                    <p class="text-lg font-bold text-[#d4a574] mt-2">от 11 500 ₽/сотку</p>
                                </div>

                                <!-- Цена 4: Схема дренажа -->
                                <div class="border-l-2 border-[#d4a574] pl-4">
                                    <div class="text-md font-medium leading-tight mb-1 text-gray-100">
                                        Схема дренажа и ливневой канализации

                                        <!-- INFO ICON -->
                                        <span class="inline-flex items-center ml-1 relative group">
                                            <i
                                                class="fas fa-info-circle text-[#d4a574] text-sm cursor-help hover:text-white transition"></i>

                                            <!-- TOOLTIP -->
                                            <div
                                                class="absolute left-1/2 -translate-x-1/2 bottom-full mb-2 w-80 p-4 bg-white/95 backdrop-blur-sm rounded-xl border border-gray-200 shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 text-left">
                                                <div class="text-[#1a1a1a] text-sm space-y-3">
                                                    <div class="font-bold text-[#558255] mb-2">Зачем нужен дренаж?</div>

                                                    <div>
                                                        <div class="font-semibold text-[#1a1a1a] mb-1">✔️ Защита от
                                                            подтоплений</div>
                                                        <div class="text-gray-600 text-xs">отвод грунтовой, дождевой и
                                                            талой воды; предотвращение луж и размыва грунта</div>
                                                    </div>

                                                    <div>
                                                        <div class="font-semibold text-[#1a1a1a] mb-1">✔️ Здоровье
                                                            растений</div>
                                                        <div class="text-gray-600 text-xs">дренаж не допускает застоя
                                                            влаги в корневой зоне; газон не выпревает</div>
                                                    </div>

                                                    <div>
                                                        <div class="font-semibold text-[#1a1a1a] mb-1">✔️ Чёткая схема
                                                        </div>
                                                        <div class="text-gray-600 text-xs">расположение труб,
                                                            дождеприёмников, колодцев и уклонов</div>
                                                    </div>

                                                    <div>
                                                        <div class="font-semibold text-[#1a1a1a] mb-1">✔️ Экономия
                                                            бюджета</div>
                                                        <div class="text-gray-600 text-xs">избежание дорогостоящих
                                                            переделок после благоустройства</div>
                                                    </div>
                                                </div>

                                                <!-- Arrow -->
                                                <div
                                                    class="absolute left-1/2 -translate-x-1/2 -bottom-2 w-4 h-4 bg-white transform rotate-45 border-r border-b border-gray-200">
                                                </div>
                                            </div>
                                        </span>
                                    </div>

                                    <p class="text-lg font-bold text-[#d4a574] mt-2">от 33 000 ₽</p>
                                </div>

                                <!-- Цена 5: Полный проект -->
                                <div class="border-l-2 border-[#d4a574] pl-4">
                                    <div class="text-md font-medium leading-tight mb-1 text-gray-100">
                                        Полный проект

                                        <!-- INFO ICON -->
                                        <span class="inline-flex items-center ml-1 relative group">
                                            <i
                                                class="fas fa-info-circle text-[#d4a574] text-sm cursor-help hover:text-white transition"></i>

                                            <!-- TOOLTIP -->
                                            <div
                                                class="absolute left-1/2 -translate-x-1/2 bottom-full mb-2 w-80 p-4 bg-white/95 backdrop-blur-sm rounded-xl border border-gray-200 shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 text-left">
                                                <div class="text-[#1a1a1a] text-sm space-y-3">
                                                    <div class="font-bold text-[#558255] mb-2">Состав проекта:</div>

                                                    <div class="text-gray-600 text-xs">
                                                        <div class="font-semibold text-[#1a1a1a] mb-1">✔️ Всё из
                                                            базового +</div>
                                                        <div class="space-y-1 mt-2">
                                                            <div>6. Чертеж конструкций дорожных одежд</div>
                                                            <div>7. Подбор МАФ (без спецификаций)</div>
                                                            <div>8. Схема освещения участка</div>
                                                            <div>9. Схема ливневой канализации и дренажа</div>
                                                            <div>10. План автополива</div>
                                                            <div>11. План вертикальной планировки</div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Arrow -->
                                                <div
                                                    class="absolute left-1/2 -translate-x-1/2 -bottom-2 w-4 h-4 bg-white transform rotate-45 border-r border-b border-gray-200">
                                                </div>
                                            </div>
                                        </span>
                                    </div>

                                    <p class="text-lg font-bold text-[#d4a574] mt-2">от 13 500 ₽/сотку</p>
                                </div>

                            </div>
                        </div>
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
                                </form>\',
                                \'emailTo\'=>"{\'email_1\'|config},adrinal1ne30rus@mail.ru", \'emailSubject\'=>"Заявка Hero",
                                \'successMessage\'=>\'<div class="text-center text-green-600 font-bold p-4">Спасибо!</div>\'
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
                    <span class="mx-8">Более 120 реализованных проектов</span>
                    <span class="mx-8">Гарантия до 5 лет</span>
                    <span class="mx-8">Ландшафтная компания полного цикла «Дом Оз»</span>
                    <span class="mx-8">Проектирование</span>
                    <span class="mx-8">Мощение</span>
                    <span class="mx-8">Озеленение</span>
                    <span class="mx-8">Дренаж</span>
                    <span class="mx-8">Освещение</span>
                    <span class="mx-8">Автополив</span>
                    <!-- Дублируем для бесшовности -->
                    <span class="mx-8">Более 120 реализованных проектов</span>
                    <span class="mx-8">Гарантия до 5 лет</span>
                    <span class="mx-8">Ландшафтная компания полного цикла «Дом Оз»</span>
                    <span class="mx-8">Проектирование</span>
                    <span class="mx-8">Мощение</span>
                    <span class="mx-8">Озеленение</span>
                    <span class="mx-8">Дренаж</span>
                    <span class="mx-8">Освещение</span>
                    <span class="mx-8">Автополив</span>
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
                        <img alt="" loading="lazy" decoding="async"
                            class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-32 md:w-40 opacity-35 pointer-events-none"
                            src="/assets/img/услуги_иконки/фоновые_иконки/1.svg" width="160" height="160">

                        <span class="text-sm font-bold tracking-widest text-[#3d5c3d] uppercase mb-3 block">Забота о
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
        <!-- ВИДЫ ПОКРЫТИЯ (Premium Card Overlay Style) + ПОПАП ПРИ КЛИКЕ         -->
        <!-- ====================================================================== -->
<section class="py-24 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4">

        <!-- Заголовок секции -->
        <div class="relative text-center mb-16">
            <div class="relative z-10">
                <span class="text-sm font-bold tracking-widest text-[#3d5c3d] uppercase mb-3 block">Компетенции</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">
                    {$_modx->resource.vidy_title}
                </h2>
            </div>
        </div>

        <!-- Сетка услуг -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <!-- Генеральный план -->
            <div aria-label="Генеральный план"
                itemscope itemtype="https://schema.org/Service"
                class="group relative h-80 lg:h-96 rounded-3xl overflow-hidden cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500 vidy-card"
                data-popup-id="32"
                data-popup-text="Размещение всех объектов на участке (дорожки, площадки, малые архитектурные формы, водоёмы, зоны отдыха и др.); Общая концепция благоустройства.">

                <meta itemprop="name" content="Генеральный план">
                <meta itemprop="description" content="Размещение всех объектов на участке: дорожки, площадки, малые архитектурные формы, водоёмы, зоны отдыха. Общая концепция благоустройства.">
                <meta itemprop="provider" content="Дом Оз">
                <meta itemprop="areaServed" content="Москва и Московская область">

                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-500"></div>

                <div class="absolute bottom-0 left-0 w-full p-6 transform translate-y-1 group-hover:translate-y-0 transition-transform duration-500 z-10">
                    <h3 itemprop="name" class="text-xl lg:text-2xl font-bold text-white mb-3 leading-tight text-start flex items-center gap-3">
                        Генеральный план
                        
                        <button type="button" 
                                class="tooltip-trigger relative inline-flex focus:outline-none focus:ring-2 focus:ring-[#d4a574] rounded-full"
                                data-tooltip-content="
                                    <div class=\'font-bold text-[#558255] text-lg mb-4 flex items-center gap-2 pb-3 border-b border-[#558255]/20\'>
                                        <i class=\'fas fa-map-marked-alt text-2xl\'></i>
                                        Состав генерального плана:
                                    </div>
                                    <div class=\'space-y-2.5 text-gray-800\'>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Размещение всех объектов на участке</span>
                                        </div>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Дорожки, площадки, МАФ</span>
                                        </div>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Водоёмы и зоны отдыха</span>
                                        </div>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Общая концепция благоустройства</span>
                                        </div>
                                    </div>
                                ">
                            <i class="fas fa-info-circle text-[#d4a574] text-lg hover:text-white transition hover:scale-110"></i>
                        </button>
                    </h3>
                    <div class="flex items-center justify-between border-t border-white/20 pt-4 mt-2"></div>
                </div>
            </div>

            <!-- Дендроплан -->
            <div aria-label="Дендроплан"
                itemscope itemtype="https://schema.org/Service"
                class="group relative h-80 lg:h-96 rounded-3xl overflow-hidden cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500 vidy-card"
                data-popup-id="33"
                data-popup-text="Схема посадки деревьев, кустарников и цветников; Указание видов растений и их количества.">

                <meta itemprop="name" content="Дендроплан">
                <meta itemprop="description" content="Схема посадки деревьев, кустарников и цветников с указанием видов растений и их количества.">
                <meta itemprop="provider" content="Дом Оз">
                <meta itemprop="areaServed" content="Москва и Московская область">

                <img alt="Дендроплан участка" loading="lazy" decoding="async" itemprop="image"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 lazyloaded"
                    data-src="/assets/cache_image/assets/img/gelery/landscape-design-project/план покр 4_800x600_ed0.jpg"
                    src="/assets/cache_image/assets/img/gelery/landscape-design-project/план покр 4_800x600_ed0.jpg">

                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-500"></div>

                <div class="absolute bottom-0 left-0 w-full p-6 transform translate-y-1 group-hover:translate-y-0 transition-transform duration-500 z-10">
                    <h3 itemprop="name" class="text-xl lg:text-2xl font-bold text-white mb-3 leading-tight text-start flex items-center gap-3">
                        Дендроплан
                        
                        <button type="button" 
                                class="tooltip-trigger relative inline-flex focus:outline-none focus:ring-2 focus:ring-[#d4a574] rounded-full"
                                data-tooltip-content="
                                    <div class=\'font-bold text-[#558255] text-lg mb-4 flex items-center gap-2 pb-3 border-b border-[#558255]/20\'>
                                        <i class=\'fas fa-tree text-2xl\'></i>
                                        Состав дендроплана:
                                    </div>
                                    <div class=\'space-y-2.5 text-gray-800\'>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Схема посадки деревьев и кустарников</span>
                                        </div>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Расположение цветников</span>
                                        </div>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Указание видов растений</span>
                                        </div>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Количество посадочного материала</span>
                                        </div>
                                    </div>
                                ">
                            <i class="fas fa-info-circle text-[#d4a574] text-lg hover:text-white transition hover:scale-110"></i>
                        </button>
                    </h3>
                    <div class="flex items-center justify-between border-t border-white/20 pt-4 mt-2"></div>
                </div>
            </div>

            <!-- Ассортиментная ведомость -->
            <div aria-label="Ассортиментная ведомость"
                itemscope itemtype="https://schema.org/Service"
                class="group relative h-80 lg:h-96 rounded-3xl overflow-hidden cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500 vidy-card"
                data-popup-id="34"
                data-popup-text="Подробная таблица с перечнем растений, их размерами и характеристиками.">

                <meta itemprop="name" content="Ассортиментная ведомость">
                <meta itemprop="description" content="Подробная таблица с перечнем растений, их размерами и характеристиками.">
                <meta itemprop="provider" content="Дом Оз">
                <meta itemprop="areaServed" content="Москва и Московская область">

                <img alt="Ассортиментная ведомость" loading="lazy" decoding="async" itemprop="image"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 lazyloaded"
                    data-src="/assets/cache_image/assets/img/gelery/landscape-design-project/проектир зу 10_800x600_ed0.jpg"
                    src="/assets/cache_image/assets/img/gelery/landscape-design-project/проектир зу 10_800x600_ed0.jpg">

                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-500"></div>

                <div class="absolute bottom-0 left-0 w-full p-6 transform translate-y-1 group-hover:translate-y-0 transition-transform duration-500 z-10">
                    <h3 itemprop="name" class="text-xl lg:text-2xl font-bold text-white mb-3 leading-tight text-start flex items-center gap-3">
                        Ассортиментная ведомость
                        
                        <button type="button" 
                                class="tooltip-trigger relative inline-flex focus:outline-none focus:ring-2 focus:ring-[#d4a574] rounded-full"
                                data-tooltip-content="
                                    <div class=\'font-bold text-[#558255] text-lg mb-4 flex items-center gap-2 pb-3 border-b border-[#558255]/20\'>
                                        <i class=\'fas fa-list-alt text-2xl\'></i>
                                        Что включает ведомость:
                                    </div>
                                    <div class=\'space-y-2.5 text-gray-800\'>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Полный перечень растений</span>
                                        </div>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Размеры посадочного материала</span>
                                        </div>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Характеристики каждого вида</span>
                                        </div>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Количество для заказа</span>
                                        </div>
                                    </div>
                                ">
                            <i class="fas fa-info-circle text-[#d4a574] text-lg hover:text-white transition hover:scale-110"></i>
                        </button>
                    </h3>
                    <div class="flex items-center justify-between border-t border-white/20 pt-4 mt-2"></div>
                </div>
            </div>

            <!-- План покрытий -->
            <div aria-label="План покрытий"
                itemscope itemtype="https://schema.org/Service"
                class="group relative h-80 lg:h-96 rounded-3xl overflow-hidden cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500 vidy-card"
                data-popup-id="35"
                data-popup-text="Разделение участка по типам мощения (плитка, гравий, газон, деревянный настил и т. д.); Расчет площадей для подбора материалов.">

                <meta itemprop="name" content="План покрытий">
                <meta itemprop="description" content="Разделение участка по типам мощения и расчет площадей для подбора материалов.">
                <meta itemprop="provider" content="Дом Оз">
                <meta itemprop="areaServed" content="Москва и Московская область">

                <img alt="План покрытий участка" loading="lazy" decoding="async" itemprop="image"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 lazyloaded"
                    data-src="/assets/cache_image/assets/img/gelery/landscape-design-project/сх полива6_800x600_ed0.jpg"
                    src="/assets/cache_image/assets/img/gelery/landscape-design-project/сх полива6_800x600_ed0.jpg">

                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-500"></div>

                <div class="absolute bottom-0 left-0 w-full p-6 transform translate-y-1 group-hover:translate-y-0 transition-transform duration-500 z-10">
                    <h3 itemprop="name" class="text-xl lg:text-2xl font-bold text-white mb-3 leading-tight text-start flex items-center gap-3">
                        План покрытий
                        
                        <button type="button" 
                                class="tooltip-trigger relative inline-flex focus:outline-none focus:ring-2 focus:ring-[#d4a574] rounded-full"
                                data-tooltip-content="
                                    <div class=\'font-bold text-[#558255] text-lg mb-4 flex items-center gap-2 pb-3 border-b border-[#558255]/20\'>
                                        <i class=\'fas fa-th-large text-2xl\'></i>
                                        Что включает план покрытий:
                                    </div>
                                    <div class=\'space-y-2.5 text-gray-800\'>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Разделение по типам мощения</span>
                                        </div>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Плитка, гравий, газон, настил</span>
                                        </div>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Расчет площадей покрытий</span>
                                        </div>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Подбор материалов</span>
                                        </div>
                                    </div>
                                ">
                            <i class="fas fa-info-circle text-[#d4a574] text-lg hover:text-white transition hover:scale-110"></i>
                        </button>
                    </h3>
                    <div class="flex items-center justify-between border-t border-white/20 pt-4 mt-2"></div>
                </div>
            </div>

            <!-- Схема дренажа и ливневки -->
            <div aria-label="Схема дренажа и ливневки"
                itemscope itemtype="https://schema.org/Service"
                class="group relative h-80 lg:h-96 rounded-3xl overflow-hidden cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500 vidy-card"
                data-popup-id="39"
                data-popup-text="Проект системы водоотведения: дренаж, ливневая канализация, расположение труб и колодцев.">

                <meta itemprop="name" content="Схема дренажа и ливневки">
                <meta itemprop="description" content="Проект системы водоотведения: дренаж, ливневая канализация, расположение труб и колодцев.">
                <meta itemprop="provider" content="Дом Оз">
                <meta itemprop="areaServed" content="Москва и Московская область">

                <img alt="Схема дренажа и ливневки" loading="lazy" decoding="async" itemprop="image"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 lazyloaded"
                    data-src="/assets/cache_image/assets/img/gelery/landscape-design-project/сх дренажа 11_800x600_ed0.jpg"
                    src="/assets/cache_image/assets/img/gelery/landscape-design-project/сх дренажа 11_800x600_ed0.jpg">

                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-500"></div>

                <div class="absolute bottom-0 left-0 w-full p-6 transform translate-y-1 group-hover:translate-y-0 transition-transform duration-500 z-10">
                    <h3 itemprop="name" class="text-xl lg:text-2xl font-bold text-white mb-3 leading-tight text-start flex items-center gap-3">
                        Схема дренажа и ливневки
                        
                        <button type="button" 
                                class="tooltip-trigger relative inline-flex focus:outline-none focus:ring-2 focus:ring-[#d4a574] rounded-full"
                                data-tooltip-content="
                                    <div class=\'font-bold text-[#558255] text-lg mb-4 flex items-center gap-2 pb-3 border-b border-[#558255]/20\'>
                                        <i class=\'fas fa-tint text-2xl\'></i>
                                        Что включает схема:
                                    </div>
                                    <div class=\'space-y-2.5 text-gray-800\'>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Система дренажа участка</span>
                                        </div>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Ливневая канализация</span>
                                        </div>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Расположение труб и колодцев</span>
                                        </div>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Расчет уклонов и диаметров</span>
                                        </div>
                                    </div>
                                ">
                            <i class="fas fa-info-circle text-[#d4a574] text-lg hover:text-white transition hover:scale-110"></i>
                        </button>
                    </h3>
                    <div class="flex items-center justify-between border-t border-white/20 pt-4 mt-2"></div>
                </div>
            </div>

            <!-- Схема освещения -->
            <div aria-label="Схема освещения"
                itemscope itemtype="https://schema.org/Service"
                class="group relative h-80 lg:h-96 rounded-3xl overflow-hidden cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500 vidy-card"
                data-popup-id="36"
                data-popup-text="Расположение светильников, фонарей, архитектурной подсветки; Подбор оборудования с учетом стиля участка и технических параметров.">

                <meta itemprop="name" content="Схема освещения">
                <meta itemprop="description" content="Расположение светильников, фонарей, архитектурной подсветки с подбором оборудования.">
                <meta itemprop="provider" content="Дом Оз">
                <meta itemprop="areaServed" content="Москва и Московская область">

                <img alt="Схема освещения участка" loading="lazy" decoding="async" itemprop="image"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 lazyloaded"
                    data-src="/assets/cache_image/assets/img/фотки_проектирование_ландшафтного_дизайна/Копия к8_800x600_ed0.jpg"
                    src="/assets/cache_image/assets/img/фотки_проектирование_ландшафтного_дизайна/Копия к8_800x600_ed0.jpg">

                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-500"></div>

                <div class="absolute bottom-0 left-0 w-full p-6 transform translate-y-1 group-hover:translate-y-0 transition-transform duration-500 z-10">
                    <h3 itemprop="name" class="text-xl lg:text-2xl font-bold text-white mb-3 leading-tight text-start flex items-center gap-3">
                        Схема освещения
                        
                        <button type="button" 
                                class="tooltip-trigger relative inline-flex focus:outline-none focus:ring-2 focus:ring-[#d4a574] rounded-full"
                                data-tooltip-content="
                                    <div class=\'font-bold text-[#558255] text-lg mb-4 flex items-center gap-2 pb-3 border-b border-[#558255]/20\'>
                                        <i class=\'fas fa-lightbulb text-2xl\'></i>
                                        Что включает схема освещения:
                                    </div>
                                    <div class=\'space-y-2.5 text-gray-800\'>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Расположение светильников и фонарей</span>
                                        </div>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Архитектурная подсветка</span>
                                        </div>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Подбор оборудования</span>
                                        </div>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Учет стиля участка</span>
                                        </div>
                                    </div>
                                ">
                            <i class="fas fa-info-circle text-[#d4a574] text-lg hover:text-white transition hover:scale-110"></i>
                        </button>
                    </h3>
                    <div class="flex items-center justify-between border-t border-white/20 pt-4 mt-2"></div>
                </div>
            </div>

            <!-- Разбивочный чертеж -->
            <div aria-label="Разбивочный чертеж"
                itemscope itemtype="https://schema.org/Service"
                class="group relative h-80 lg:h-96 rounded-3xl overflow-hidden cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500 vidy-card"
                data-popup-id="25"
                data-popup-text="Точная привязка всех элементов благоустройства к местности с координатами и размерами.">

                <meta itemprop="name" content="Разбивочный чертеж">
                <meta itemprop="description" content="Точная привязка всех элементов благоустройства к местности с координатами и размерами.">
                <meta itemprop="provider" content="Дом Оз">
                <meta itemprop="areaServed" content="Москва и Московская область">

                <img alt="Разбивочный чертеж" loading="lazy" decoding="async" itemprop="image"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 lazyloaded"
                    data-src="/assets/cache_image/assets/img/gelery/landscape-design-project/проектир зу 10_800x600_ed0.jpg"
                    src="/assets/cache_image/assets/img/gelery/landscape-design-project/проектир зу 10_800x600_ed0.jpg">

                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-500"></div>

                <div class="absolute bottom-0 left-0 w-full p-6 transform translate-y-1 group-hover:translate-y-0 transition-transform duration-500 z-10">
                    <h3 itemprop="name" class="text-xl lg:text-2xl font-bold text-white mb-3 leading-tight text-start flex items-center gap-3">
                        Разбивочный чертеж
                        
                        <button type="button" 
                                class="tooltip-trigger relative inline-flex focus:outline-none focus:ring-2 focus:ring-[#d4a574] rounded-full"
                                data-tooltip-content="
                                    <div class=\'font-bold text-[#558255] text-lg mb-4 flex items-center gap-2 pb-3 border-b border-[#558255]/20\'>
                                        <i class=\'fas fa-ruler-combined text-2xl\'></i>
                                        Что включает разбивочный чертеж:
                                    </div>
                                    <div class=\'space-y-2.5 text-gray-800\'>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Привязка элементов к местности</span>
                                        </div>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Координаты всех объектов</span>
                                        </div>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Точные размеры и расстояния</span>
                                        </div>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Инструкция для строителей</span>
                                        </div>
                                    </div>
                                ">
                            <i class="fas fa-info-circle text-[#d4a574] text-lg hover:text-white transition hover:scale-110"></i>
                        </button>
                    </h3>
                    <div class="flex items-center justify-between border-t border-white/20 pt-4 mt-2"></div>
                </div>
            </div>

            <!-- Вертикальная планировка -->
            <div aria-label="Вертикальная планировка"
                itemscope itemtype="https://schema.org/Service"
                class="group relative h-80 lg:h-96 rounded-3xl overflow-hidden cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500 vidy-card"
                data-popup-id="6"
                data-popup-text="Проект рельефа участка с отметками высот, уклонами и движением воды.">

                <meta itemprop="name" content="Вертикальная планировка">
                <meta itemprop="description" content="Проект рельефа участка с отметками высот, уклонами и движением воды.">
                <meta itemprop="provider" content="Дом Оз">
                <meta itemprop="areaServed" content="Москва и Московская область">

                <img alt="Вертикальная планировка" loading="lazy" decoding="async" itemprop="image"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 lazyloaded"
                    data-src="/assets/cache_image/assets/img/gelery/landscape-design-project/дендроплан2_800x600_ed0.jpg"
                    src="/assets/cache_image/assets/img/gelery/landscape-design-project/дендроплан2_800x600_ed0.jpg">

                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-500"></div>

                <div class="absolute bottom-0 left-0 w-full p-6 transform translate-y-1 group-hover:translate-y-0 transition-transform duration-500 z-10">
                    <h3 itemprop="name" class="text-xl lg:text-2xl font-bold text-white mb-3 leading-tight text-start flex items-center gap-3">
                        Вертикальная планировка
                        
                        <button type="button" 
                                class="tooltip-trigger relative inline-flex focus:outline-none focus:ring-2 focus:ring-[#d4a574] rounded-full"
                                data-tooltip-content="
                                    <div class=\'font-bold text-[#558255] text-lg mb-4 flex items-center gap-2 pb-3 border-b border-[#558255]/20\'>
                                        <i class=\'fas fa-mountain text-2xl\'></i>
                                        Что включает вертикальная планировка:
                                    </div>
                                    <div class=\'space-y-2.5 text-gray-800\'>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Проект рельефа участка</span>
                                        </div>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Отметки высот</span>
                                        </div>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Уклоны для водоотведения</span>
                                        </div>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Движение поверхностных вод</span>
                                        </div>
                                    </div>
                                ">
                            <i class="fas fa-info-circle text-[#d4a574] text-lg hover:text-white transition hover:scale-110"></i>
                        </button>
                    </h3>
                    <div class="flex items-center justify-between border-t border-white/20 pt-4 mt-2"></div>
                </div>
            </div>

            <!-- 3D-визуализация -->
            <div aria-label="3D-визуализация"
                itemscope itemtype="https://schema.org/Service"
                class="group relative h-80 lg:h-96 rounded-3xl overflow-hidden cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500 vidy-card"
                data-popup-id="40"
                data-popup-text="Фотореалистичное изображение будущего сада с разных ракурсов.">

                <meta itemprop="name" content="3D-визуализация">
                <meta itemprop="description" content="Фотореалистичное изображение будущего сада с разных ракурсов.">
                <meta itemprop="provider" content="Дом Оз">
                <meta itemprop="areaServed" content="Москва и Московская область">

                <img alt="3D-визуализация ландшафта" loading="lazy" decoding="async" itemprop="image"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 lazyloaded"
                    data-src="/assets/cache_image/assets/img/фотки_проектирование_ландшафтного_дизайна/Копия к4._800x600_ed0.jpg"
                    src="/assets/cache_image/assets/img/фотки_проектирование_ландшафтного_дизайна/Копия к4._800x600_ed0.jpg">

                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-500"></div>

                <div class="absolute bottom-0 left-0 w-full p-6 transform translate-y-1 group-hover:translate-y-0 transition-transform duration-500 z-10">
                    <h3 itemprop="name" class="text-xl lg:text-2xl font-bold text-white mb-3 leading-tight text-start flex items-center gap-3">
                        3D-визуализация
                        
                        <button type="button" 
                                class="tooltip-trigger relative inline-flex focus:outline-none focus:ring-2 focus:ring-[#d4a574] rounded-full"
                                data-tooltip-content="
                                    <div class=\'font-bold text-[#558255] text-lg mb-4 flex items-center gap-2 pb-3 border-b border-[#558255]/20\'>
                                        <i class=\'fas fa-cube text-2xl\'></i>
                                        Что включает 3D-визуализация:
                                    </div>
                                    <div class=\'space-y-2.5 text-gray-800\'>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Фотореалистичные изображения</span>
                                        </div>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Вид с разных ракурсов</span>
                                        </div>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Демонстрация материалов</span>
                                        </div>
                                        <div class=\'flex items-start gap-3 p-2 rounded-lg\'>
                                            <i class=\'fas fa-check-circle text-[#558255] mt-0.5 flex-shrink-0\'></i>
                                            <span class=\'font-medium\'>Согласование с заказчиком</span>
                                        </div>
                                    </div>
                                ">
                            <i class="fas fa-info-circle text-[#d4a574] text-lg hover:text-white transition hover:scale-110"></i>
                        </button>
                    </h3>
                    <div class="flex items-center justify-between border-t border-white/20 pt-4 mt-2"></div>
                </div>
            </div>

        </div>

        <!-- CTA -->
        <div class="mt-16 text-center">
            <button
                class="modal_window inline-flex items-center gap-3 px-10 py-4 bg-[#1a1a1a] text-white rounded-xl font-bold hover:bg-[#558255] transition shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                <span>Рассчитать стоимость проекта</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
            </button>
        </div>
    </div>
</section>

<!-- Контейнер для tooltip (вне секции) -->
<div id="tooltip-container" class="fixed top-0 left-0 z-[10000] pointer-events-none"></div>

{ignore}
<style>
    @keyframes tooltip-fade-in {
        from {
            opacity: 0;
            transform: translate(-50%, -90%);
        }
        to {
            opacity: 1;
            transform: translate(-50%, -100%);
        }
    }

    .tooltip-animate {
        animation: tooltip-fade-in 0.3s ease-out forwards;
    }
</style>

<script>
document.addEventListener(\'DOMContentLoaded\', function() {
    const triggers = document.querySelectorAll(\'.tooltip-trigger\');
    const container = document.getElementById(\'tooltip-container\');
    let currentTooltip = null;
    let hideTimeout = null;

    triggers.forEach(trigger => {
        trigger.addEventListener(\'mouseenter\', function(e) {
            clearTimeout(hideTimeout);
            showTooltip(e);
        });

        trigger.addEventListener(\'mouseleave\', function() {
            hideTimeout = setTimeout(() => {
                hideTooltip();
            }, 200);
        });

        trigger.addEventListener(\'focus\', function(e) {
            clearTimeout(hideTimeout);
            showTooltip(e);
        });

        trigger.addEventListener(\'blur\', function() {
            hideTimeout = setTimeout(() => {
                hideTooltip();
            }, 200);
        });
    });

    function showTooltip(e) {
        const trigger = e.target.closest(\'.tooltip-trigger\');
        const content = trigger.dataset.tooltipContent;
        const rect = trigger.getBoundingClientRect();

        hideTooltip();

        const tooltip = document.createElement(\'div\');
        tooltip.className = \'tooltip-box tooltip-animate\';
        tooltip.style.cssText = `
            position: fixed;
            left: ${rect.left + rect.width / 2}px;
            top: ${rect.top - 10}px;
            transform: translate(-50%, -100%);
            width: 400px;
            max-width: 90vw;
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(20px);
            border-radius: 16px;
            border: 2px solid rgba(85, 130, 85, 0.4);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            padding: 24px;
            z-index: 10000;
        `;

        tooltip.innerHTML = `
            <div class="text-[#1a1a1a] text-sm">
                ${content}
            </div>
            <div style="
                position: absolute;
                bottom: -10px;
                left: 50%;
                transform: translateX(-50%) rotate(45deg);
                width: 20px;
                height: 20px;
                background: rgba(255, 255, 255, 0.98);
                border-right: 2px solid rgba(85, 130, 85, 0.4);
                border-bottom: 2px solid rgba(85, 130, 85, 0.4);
            "></div>
        `;

        container.appendChild(tooltip);
        currentTooltip = tooltip;
    }

    function hideTooltip() {
        if (currentTooltip) {
            currentTooltip.remove();
            currentTooltip = null;
        }
    }
});
</script>
{/ignore}

        <!-- ====================================================================== -->
        <!-- ПРЕИМУЩЕСТВА (Trust Signals)                                     -->
        <!-- ====================================================================== -->
        <section class="py-24 bg-[#f8faf8] relative overflow-hidden">

            <!-- Декоративный фон (еле заметный паттерн или градиент для глубины) -->
            <div class="absolute inset-0 opacity-30"
                style="background-image: radial-gradient(#558255 1px, transparent 1px); background-size: 30px 30px;">
            </div>

            <div class="relative z-10 max-w-7xl mx-auto px-4">

                <!-- Заголовок секции -->
                <div class="relative text-center mb-16">
                    <!-- Фоновая иконка -->
                    <!--<img alt="Фоновая иконка" loading="lazy" decoding="async" class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-32 md:w-40 opacity-45 pointer-events-none"-->
                    <!--    src="/assets/img/услуги_иконки/фоновые_иконки/3.svg" alt="">-->

                    <!-- Текст (поверх иконки) -->
                    <div class="relative z-10">
                        <span class="text-sm font-bold tracking-widest text-[#3d5c3d] uppercase mb-3 block">Наши
                            стандарты</span>
                        <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">Почему
                            выбирают Дом Оз?</h2>
                    </div>
                </div>

                <!-- Сетка преимуществ (4 колонки) -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                    <!-- Карточка 1 -->
                    <div
                        class="bg-white rounded-2xl p-8 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-gray-100 group hover:border-[#558255]/30 transition-all duration-300 hover:-translate-y-1">
                        <!--<div-->
                        <!--    class="w-14 h-14 rounded-xl bg-primary/5 flex items-center justify-center text-primary font-bold text-2xl mb-6 group-hover:bg-primary group-hover:text-white transition duration-300">-->
                        <!--    8+-->
                        <!--</div>-->
                        <img alt="Опыт работы компании" loading="lazy" decoding="async"
                            src="assets/img/услуги_иконки/почему мы/опыт работы.png" width="120" height="120" class="mx-auto" />
                        <h3
                            class="text-lg font-bold text-[#1a1a1a] mb-3 group-hover:text-primary transition text-center">
                            Опыт работы</h3>
                        <p class="text-center text-sm text-gray-500 leading-relaxed">Более 120 реализованных проектов в
                            Москве, МО и
                            Сочи</p>
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
                        <img alt="Официальное сотрудничество" loading="lazy" decoding="async"
                            src="assets/img/услуги_иконки/почему мы/официально.png" width="120" height="120" class="mx-auto" />
                        <h3
                            class="text-lg font-bold text-[#1a1a1a] mb-3 group-hover:text-primary transition text-center">
                            Официально</h3>
                        <p class="text-center text-sm text-gray-500 leading-relaxed">Работаем по договору с физ. и юр.
                            лицами.
                            Фиксируем смету.</p>
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
                        <img alt="Соблюдение сроков" loading="lazy" decoding="async"
                            src="assets/img/услуги_иконки/почему мы/срок.png" width="120" height="120" class="mx-auto" />
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
                        <img alt="Работа под ключ" loading="lazy" decoding="async"
                            src="assets/img/услуги_иконки/почему мы/под ключ.png" width="120" height="120" class="mx-auto" />
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
        <section class="relative py-24 bg-[#f8faf8] relative overflow-hidden">

            <!-- Фоновая иконка -->
            <img alt="Фоновая иконка" loading="lazy" decoding="async"
                class="absolute top-1/2 -translate-y-1/2 w-32 w-[600px] opacity-15 pointer-events-none"
                src="/assets/img/услуги_иконки/фоновые_иконки/1.svg" alt="" style="left: -10rem;
    rotate: 25deg;">
            <img alt="Фоновая иконка" loading="lazy" decoding="async"
                class="hidden md:block transform -scale-x-100 absolute top-1/2 -translate-y-1/2 w-32 w-[600px] opacity-15 pointer-events-none"
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
                    <!-- <img alt="Фоновая иконка" loading="lazy" decoding="async" class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-32 md:w-40 opacity-15 pointer-events-none"
                        src="/assets/img/услуги_иконки/icon.svg" alt=""> -->

                    <!-- Текст (поверх иконки) -->
                    <div class="relative z-10">
                        <span class="text-sm font-bold tracking-widest text-[#3d5c3d] uppercase mb-3 block">Прозрачность
                            на
                            каждом этапе</span>
                        <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">Как мы
                            работаем</h2>
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
        <section class="py-20">
            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-16 section-title mx-auto">{$_modx->resource.title_gelery}
                </h2>

                <div class="swiper swiper-type-4 pb-12">
                    <div class="swiper-wrapper">
                        {set $gelerys = json_decode($_modx->resource.gelery, true)}
                        {foreach $gelerys as $geler}
                        <div class="swiper-slide" itemscope itemtype="https://schema.org/ImageObject">
                            <div class="rounded-2xl overflow-hidden shadow-lg">
                                <img alt="Галерея" loading="lazy" decoding="async" alt="{$_modx->resource.baner_h1}"
                                    loading="lazy"
                                    class="lazyload w-full h-72 object-cover hover:scale-105 transition duration-500"
                                    src="{$geler.img | phpthumbon : \'/assets/img/услуги_иконки/icon.svg\'}">
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
                    <img alt="Фоновая иконка" loading="lazy" decoding="async"
                        class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-32 md:w-40 opacity-45 pointer-events-none"
                        src="/assets/img/услуги_иконки/фоновые_иконки/2.svg" alt="">

                    <!-- Текст (поверх иконки) -->
                    <div class="relative z-10">
                        <span class="text-sm font-bold tracking-widest text-[#3d5c3d] uppercase mb-3 block">Прозрачное
                            ценообразование</span>
                        <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">Стоимость
                            услуг</h2>
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
                    <img alt="Фоновая иконка" loading="lazy" decoding="async"
                        class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-32 md:w-40 opacity-45 pointer-events-none"
                        src="/assets/img/услуги_иконки/фоновые_иконки/3.svg" alt="">

                    <!-- Текст (поверх иконки) -->
                    <div class="relative z-10">
                        <span
                            class="text-sm font-bold tracking-widest text-[#3d5c3d] uppercase mb-3 block">Реализованные
                            проекты</span>
                        <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">Фото наших
                            работ</h2>
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
                            <a href="{$photo.img | phpthumbon : \'/assets/img/услуги_иконки/icon.svg\'}"
                                data-fancybox="gallery" data-caption="Ландшафтные работы Dom Oz"
                                class="group relative h-[350px] md:h-[400px] rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 block"
                                itemprop="contentUrl">

                                <!-- Изображение -->
                                <img alt="Фото работ" loading="lazy" decoding="async"
                                    src="{$photo.img | phpthumbon : \'/assets/img/услуги_иконки/icon.svg\'}"
                                    alt="Фото работ"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                    loading="lazy">

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
        <section class="py-24 bg-[#f8faf8] relative overflow-hidden">

            <!-- Декоративный фон (еле заметный паттерн или градиент для глубины) -->
            <div class="absolute inset-0 opacity-30"
                style="background-image: radial-gradient(#558255 1px, transparent 1px); background-size: 30px 30px;">
            </div>

            <div class="max-w-4xl mx-auto px-4 z-10">

                <!-- Заголовок секции -->
                <div class="relative text-center mb-16">
                    <!-- Текст -->
                    <div class="relative z-10">
                        <span class="text-sm font-bold tracking-widest text-[#3d5c3d] uppercase mb-3 block">Экспертный
                            материал</span>
                        <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">
                            {$_modx->resource.baner_h1}</h2>
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
                    </div>

                </div>

            </div>
        </section>

        <!-- Инициализация скриптов -->
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

        <!-- ====================================================================== -->
        <!-- FAQ (ЧАСТЫЕ ВОПРОСЫ) — ПРЕМИУМ ВЕРСИЯ                               -->
        <!-- ====================================================================== -->
        <section class="py-24 bg-white overflow-hidden" id="faq">
            <div class="max-w-7xl mx-auto px-4">

                <!-- Заголовок секции -->
                <div class="relative text-center mb-16">
                    <!-- Фоновая иконка -->
                    <img alt="Фоновая иконка" loading="lazy" decoding="async"
                        class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-32 md:w-32 opacity-45 pointer-events-none"
                        src="/assets/img/услуги_иконки/фоновые_иконки/4.svg" alt="">

                    <!-- Текст (поверх иконки) -->
                    <div class="relative z-10">
                        <span class="text-sm font-bold tracking-widest text-[#3d5c3d] uppercase mb-3 block">FAQ</span>
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

        <!-- ====================================================================== -->
        <!-- 8. ФИНАЛЬНЫЙ CTA (Конверсия)                                        -->
        <!-- ====================================================================== -->
        <section class="py-24 bg-white relative overflow-hidden">

            <!-- Декоративный фон -->
            <div class="absolute inset-0 opacity-50"></div>

            <div class="relative z-10 max-w-4xl mx-auto px-4 text-center">
                <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto mb-4">Готовы
                    обсудить проект?</h2>
                <p class="text-lg text-gray-500 mb-10 max-w-2xl mx-auto">Оставьте заявку, и мы подготовим
                    предварительную смету и 3D-эскиз вашего участка.</p>

                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <button
                        class="modal_window inline-flex items-center justify-center px-5 py-3 bg-[#558255] text-white rounded-xl font-bold text-lg hover:bg-[#3d5c3d] transition shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                        Получить расчет стоимости
                    </button>
                    <a href="tel:{\'phone\'|config}"
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

    <!-- Swiper JS (deferred) -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Fancybox JS (deferred) -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js" defer></script>

    <!-- jQuery и другие скрипты MODX (deferred) -->
    <script src="/assets/bibliotek/jquery/jqwery.js"></script>
    <script src="/assets/js/script.js?v={$_modx->config.cache_version}" defer></script>
    <!-- <script src="/assets/bibliotek/jquery/jquery.maskedinput.min.js" defer></script>
    <script src="/assets/js/script-ser.js?v={$_modx->config.cache_version}" defer></script> -->

    {ignore}
    <script>
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
    <script>
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

    <!-- ====================== МИКРОРАЗМЕТКА (JSON-LD + RDFa) ====================== -->

    <!-- 1. Основная разметка Организации (JSON-LD) -->
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Дом Оз",
  "alternateName": "Domoz",
  "url": "https://domozmsk.ru",
  "logo": "https://domozmsk.ru/assets/img/logo.png",
  "description": "Ландшафтная компания полного цикла в Москве и Московской области. Проектирование, благоустройство, озеленение, дренаж, автополив и освещение под ключ.",
  "telephone": "+7 (985) 920-77-00",
  "email": "DOMOZ.77@yandex.ru",
  "address": {
    "@type": "PostalAddress",
    "addressCountry": "RU",
    "addressLocality": "Москва",
    "streetAddress": "Головинское шоссе, 5А"
  },
  "foundingDate": "2015",
  "sameAs": [
    "https://vk.com/domozmsk",
    "https://www.instagram.com/domozmsk"
  ],
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+7 (985) 920-77-00",
    "contactType": "customer service",
    "availableLanguage": "Russian"
  }
}
</script>

    <!-- 2. Разметка текущей страницы (WebPage) -->
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "{$_modx->resource.pagetitle}",
  "description": "{$_modx->resource.baner_des | default: $_modx->resource.description}",
  "url": "https://domozmsk.ru{$_modx->makeUrl($_modx->resource.id)}",
  "inLanguage": "ru-RU",
  "publisher": {
    "@id": "#organization"
  },
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Главная",
        "item": "https://domozmsk.ru"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "{$_modx->resource.pagetitle}"
      }
    ]
  },
  "mainEntity": {
    "@id": "#organization"
  }
}
</script>

    <!-- 3. RDFa (чтобы TopVisor показал зелёные галочки) -->
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
    
    [[$modal_window]]

</body>

</html>',
  'locked' => 0,
  'properties' => 'a:0:{}',
  'static' => 0,
  'static_file' => '',
);