<?php  return array (
  'id' => 19,
  'source' => 1,
  'property_preprocess' => 0,
  'templatename' => 'История компании',
  'description' => '',
  'editor_type' => 0,
  'category' => 12,
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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

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

        /* Timeline vertical line */
        .timeline-line {
            position: absolute;
            left: 20px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, #558255, #d4a574);
        }

        @media (min-width: 768px) {
            .timeline-line {
                left: 50%;
                transform: translateX(-50%);
            }
        }

        /* Stats counter animation */
        .stat-value {
            font-variant-numeric: tabular-nums;
        }
    </style>

    <!-- Breadcrumb Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Главная", "item": "https://domozmsk.ru/" },
            { "@type": "ListItem", "position": 2, "name": "О нас", "item": "https://domozmsk.ru/#about" },
            { "@type": "ListItem", "position": 3, "name": "{$_modx->resource.pagetitle}", "item": "https://domozmsk.ru/{$_modx->resource.uri}" }
        ]
    }
    </script>
</head>

<body class="antialiased">

    {include \'header\'}

    <main itemprop="mainContentOfPage">

        <!-- ====================================================================== -->
        <!-- ? 1. HERO: История компании                                           -->
        <!-- ====================================================================== -->
        <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
            <!-- Фон -->
            <img loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover"
                src="{$_modx->resource.history_hero_img}" alt="История компании">
            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-black/40"></div>

            <!-- Контент -->
            <div class="relative z-10 text-center text-white px-4 max-w-4xl mx-auto">
                <span class="inline-block px-4 py-2 bg-[#558255]/90 text-white text-sm font-bold rounded-full mb-6">
                    О компании
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight mb-6">
                    {$_modx->resource.history_hero_title ?: \'История компании Дом&nbsp;Оз\'}
                </h1>
                <p class="text-lg md:text-xl text-gray-200 leading-relaxed">
                    {$_modx->resource.history_hero_desc ?: \'Мы создаём сады, которые живут десятилетиями. С 2018 года —
                    более 120 реализованных проектов в Москве, МО и Сочи.\'}
                </p>
            </div>
        </section>

        <!-- ====================================================================== -->
<!-- ? 2. НАША ФИЛОСОФИЯ: Красиво оформленный текст                         -->
<!-- ====================================================================== -->
<section class="py-24 bg-[#f8faf8] relative">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
            
            <!-- Верхний декоративный акцент -->
            <div class="w-16 h-1 bg-[#558255] mx-auto mb-8 rounded-full"></div>
            
            <p class="text-lg md:text-xl text-[#1a1a1a] leading-relaxed mb-6 font-medium">
                Именно поэтому в «Дом Оз» мы уделяем главное внимание тому, что остается скрытым от глаз: дренажу, основаниям, коммуникациям и подготовке грунта. Ведь именно эти элементы определяют, будет ли участок радовать десятилетиями или потребует дорогостоящих переделок уже через несколько сезонов.
            </p>
            
            <p class="text-lg md:text-xl text-[#1a1a1a] leading-relaxed font-medium">
                Мы убеждены, что настоящий ландшафтный дизайн рождается на стыке инженерной точности и эстетики. Поэтому создаем пространства, которые впечатляют с первого взгляда и сохраняют свою красоту долгие годы.
            </p>
            
            <!-- Нижний декоративный акцент -->
            <div class="w-16 h-1 bg-[#558255] mx-auto mt-8 rounded-full"></div>
            
        </div>
    </div>
</section>

        <!-- ====================================================================== -->
        <!-- 3. СТАТИСТИКА: Цифры и факты                                       -->
        <!-- ====================================================================== -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-4">

                <div class="text-center mb-16">
                    <span class="text-sm font-bold tracking-widest text-[#558255] uppercase mb-3 block">Наши
                        достижения</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">В цифрах</h2>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-5xl mx-auto">
                    {set $stats = json_decode($_modx->resource.history_stats, true)}
                    {if $stats}
                    {foreach $stats as $stat}
                    <div class="text-center p-6">
                        <div class="text-4xl md:text-5xl font-extrabold text-[#558255] mb-2 stat-value">
                            {$stat.value}
                        </div>
                        <p class="text-gray-600 font-medium">{$stat.label}</p>
                    </div>
                    {/foreach}
                    {else}
                    <!-- Пример -->
                    <div class="text-center p-6">
                        <div class="text-4xl md:text-5xl font-extrabold text-[#558255] mb-2">120+</div>
                        <p class="text-gray-600 font-medium">реализованных проектов</p>
                    </div>
                    <div class="text-center p-6">
                        <div class="text-4xl md:text-5xl font-extrabold text-[#558255] mb-2">8+</div>
                        <p class="text-gray-600 font-medium">лет на рынке</p>
                    </div>
                    <div class="text-center p-6">
                        <div class="text-4xl md:text-5xl font-extrabold text-[#558255] mb-2">5 лет</div>
                        <p class="text-gray-600 font-medium">гарантии на работы</p>
                    </div>
                    <div class="text-center p-6">
                        <div class="text-4xl md:text-5xl font-extrabold text-[#558255] mb-2">100%</div>
                        <p class="text-gray-600 font-medium">клиентов рекомендуют нас</p>
                    </div>
                    {/if}
                </div>

            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- ? 4. ЦЕННОСТИ: Что нами движет                                       -->
        <!-- ====================================================================== -->
        <section class="py-24 bg-[#f8faf8]">
            <div class="container mx-auto px-4">

                <div class="text-center mb-16">
                    <span class="text-sm font-bold tracking-widest text-[#558255] uppercase mb-3 block">Философия</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">Наши ценности
                    </h2>
                </div>

                <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    {set $values = json_decode($_modx->resource.history_values, true)}
                    {if $values}
                    {foreach $values as $val}
                    <div
                        class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 hover:border-[#558255]/30 transition group">
                        <div
                            class="w-14 h-14 mb-6 flex items-center justify-center bg-[#558255]/10 rounded-xl text-[#558255] group-hover:bg-[#558255] group-hover:text-white transition">
                            {if $val.icon}{$val.icon|raw}{else}
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                </path>
                            </svg>
                            {/if}
                        </div>
                        <h3 class="text-xl font-bold text-[#1a1a1a] mb-3">{$val.title}</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">{$val.desc}</p>
                    </div>
                    {/foreach}
                    {else}
                    <!-- Пример -->
                    <div class="text-start bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                        <div
                            class="w-14 h-14 mb-6 flex items-center justify-center bg-[#558255]/10 rounded-xl text-[#558255]">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a1a1a] mb-3">Качество без компромиссов</h3>
                        <p class="text-gray-600 text-sm">Используем только проверенные материалы и технологии, которые
                            работают в российском климате.</p>
                    </div>
                    <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                        <div
                            class="w-14 h-14 mb-6 flex items-center justify-center bg-[#558255]/10 rounded-xl text-[#558255]">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-start text-xl font-bold text-[#1a1a1a] mb-3">Индивидуальный подход</h3>
                        <p class="text-gray-600 text-sm">Каждый проект создаётся с учётом характера участка, пожеланий
                            клиента и бюджета.</p>
                    </div>
                    <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                        <div
                            class="w-14 h-14 mb-6 flex items-center justify-center bg-[#558255]/10 rounded-xl text-[#558255]">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-start text-xl font-bold text-[#1a1a1a] mb-3">Прозрачность на всех этапах</h3>
                        <p class="text-gray-600 text-sm">Фиксируем смету и сроки в договоре. Вы всегда знаете, за что
                            платите.</p>
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
                    <button onclick="return false;"
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
        
        <section class="py-24 bg-white relative overflow-hidden"></section>

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

[[$modal_window]]

</body>

</html>',
  'locked' => 0,
  'properties' => 'a:0:{}',
  'static' => 0,
  'static_file' => '',
);