<?php  return array (
  'id' => 28,
  'source' => 1,
  'property_preprocess' => 0,
  'templatename' => 'Партнерская программа',
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
                        dark: \'#1a1a1a\'
                    }
                }
            }
        }
    </script>

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

        .stat-value {
            font-variant-numeric: tabular-nums;
        }

        /* Анимация карточек партнеров */
        .partner-card {
            transition: all 0.3s ease;
        }
        .partner-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(85, 130, 85, 0.15);
            border-color: #558255;
        }
        .partner-card:hover .partner-icon {
            background: #558255;
            color: #fff;
            transform: scale(1.05);
        }
        .partner-icon {
            transition: all 0.3s ease;
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
        <!-- ? 1. HERO: Партнерство (1 экран — фото + текст)                        -->
        <!-- ====================================================================== -->
        <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
            <!-- Фон (используем history_hero_img) -->
            <img loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover"
                src="{$_modx->resource.history_hero_img}" alt="Партнерство с Дом Оз">
            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-black/40"></div>

            <!-- Контент -->
            <div class="relative z-10 text-center text-white px-4 max-w-4xl mx-auto">
                <span class="inline-block px-4 py-2 bg-[#558255]/90 text-white text-sm font-bold rounded-full mb-6 backdrop-blur-sm border border-white/20">
                    Сотрудничество
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight mb-6">
                    {$_modx->resource.history_hero_title ?: \'Партнерская программа Дом&nbsp;Оз\'}
                </h1>
                <p class="text-lg md:text-xl text-gray-200 leading-relaxed">
                    {$_modx->resource.history_hero_desc ?: \'Если вы работаете в сфере строительства, архитектуры, дизайна или благоустройства территорий и ищете надежного партнера — будем рады знакомству.\'}
                </p>
            </div>

            <!-- Скролл-индикатор -->
            <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce">
                <div class="w-8 h-12 border-2 border-white/50 rounded-full flex justify-center">
                    <div class="w-1.5 h-3 bg-white/70 rounded-full mt-2 animate-pulse"></div>
                </div>
            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- ? 2. ПАРТНЕРСКАЯ ПРОГРАММА: Текст                                     -->
        <!-- ====================================================================== -->
        <section class="py-24 bg-[#f8faf8] relative">
            <div class="container mx-auto px-4">
                <div class="max-w-3xl mx-auto text-center">
                    
                    <div class="text-center mb-16">
                        <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] mx-auto">Партнерская программа компании «Дом&nbsp;Оз»</h2>
                    </div>
                    
                    <!-- Верхний декоративный акцент -->
                    <div class="w-16 h-1 bg-[#558255] mx-auto mb-8 rounded-full"></div>
                    
                    <p class="text-lg md:text-xl text-[#1a1a1a] leading-relaxed mb-6 font-medium">
                        Современный ландшафт создается усилиями многих специалистов. Архитекторы, дизайнеры, строители, инженеры, поставщики материалов и растений — каждый вносит свой вклад в создание гармоничного пространства.
                    </p>
                    
                    <p class="text-lg md:text-xl text-[#1a1a1a] leading-relaxed mb-6 font-medium">
                        В "Дом Оз" мы ценим профессиональное сотрудничество и уверены, что лучшие проекты рождаются благодаря объединению опыта, знаний и ответственности. Именно поэтому мы развиваем партнерскую программу для специалистов и компаний, которые разделяют наш подход к качеству и долгосрочному результату.
                    </p>
                    
                    <p class="text-lg md:text-xl text-[#1a1a1a] leading-relaxed font-medium">
                        Наш принцип прост: надежное партнерство должно быть выгодным, прозрачным и комфортным для всех участников.
                    </p>
                    
                    <!-- Нижний декоративный акцент -->
                    <div class="w-16 h-1 bg-[#558255] mx-auto mt-8 rounded-full"></div>
                    
                </div>
            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- ? 3. КОГО ПРИГЛАШАЕМ К СОТРУДНИЧЕСТВУ                                -->
        <!-- ====================================================================== -->
        <section class="py-24 bg-white relative overflow-hidden">
            <!-- Декоративный фон -->
            <div class="absolute inset-0 opacity-20"
                style="background-image: radial-gradient(#558255 1px, transparent 1px); background-size: 30px 30px;"></div>

            <div class="container mx-auto px-4 relative z-10">

                <div class="text-center mb-16">
                    <span class="text-sm font-bold tracking-widest text-[#558255] uppercase mb-3 block">Сотрудничество</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">Вместе создаем пространства на годы вперед</h2>
                    <p class="text-gray-600 mt-6 max-w-2xl mx-auto text-lg">Мы приглашаем к сотрудничеству профессионалов и компании, разделяющие наш подход к качеству</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">
                    
                    <!-- Архитекторы -->
                    <div class="partner-card bg-white p-6 rounded-2xl border border-gray-200 text-center">
                        <div class="partner-icon w-16 h-16 mx-auto mb-4 flex items-center justify-center bg-[#558255]/10 rounded-2xl text-[#558255]">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-[#1a1a1a] mb-2">Архитекторы и бюро</h3>
                        <p class="text-gray-600 text-sm">Архитектурные бюро и частные архитекторы</p>
                    </div>

                    <!-- Дизайнеры -->
                    <div class="partner-card bg-white p-6 rounded-2xl border border-gray-200 text-center">
                        <div class="partner-icon w-16 h-16 mx-auto mb-4 flex items-center justify-center bg-[#558255]/10 rounded-2xl text-[#558255]">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-[#1a1a1a] mb-2">Дизайнеры</h3>
                        <p class="text-gray-600 text-sm">Дизайнеры интерьеров и экстерьеров</p>
                    </div>

                    <!-- Строительные компании -->
                    <div class="partner-card bg-white p-6 rounded-2xl border border-gray-200 text-center">
                        <div class="partner-icon w-16 h-16 mx-auto mb-4 flex items-center justify-center bg-[#558255]/10 rounded-2xl text-[#558255]">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-[#1a1a1a] mb-2">Строительные компании</h3>
                        <p class="text-gray-600 text-sm">Подрядчики и строительные организации</p>
                    </div>

                    <!-- Девелоперы -->
                    <div class="partner-card bg-white p-6 rounded-2xl border border-gray-200 text-center">
                        <div class="partner-icon w-16 h-16 mx-auto mb-4 flex items-center justify-center bg-[#558255]/10 rounded-2xl text-[#558255]">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-[#1a1a1a] mb-2">Девелоперы</h3>
                        <p class="text-gray-600 text-sm">Девелоперы и застройщики</p>
                    </div>

                    <!-- Питомники растений -->
                    <div class="partner-card bg-white p-6 rounded-2xl border border-gray-200 text-center">
                        <div class="partner-icon w-16 h-16 mx-auto mb-4 flex items-center justify-center bg-[#558255]/10 rounded-2xl text-[#558255]">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-[#1a1a1a] mb-2">Питомники растений</h3>
                        <p class="text-gray-600 text-sm">Питомники и поставщики посадочного материала</p>
                    </div>

                    <!-- Поставщики материалов -->
                    <div class="partner-card bg-white p-6 rounded-2xl border border-gray-200 text-center">
                        <div class="partner-icon w-16 h-16 mx-auto mb-4 flex items-center justify-center bg-[#558255]/10 rounded-2xl text-[#558255]">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-[#1a1a1a] mb-2">Поставщики материалов</h3>
                        <p class="text-gray-600 text-sm">Поставщики материалов и оборудования</p>
                    </div>

                    <!-- Инженерные системы -->
                    <div class="partner-card bg-white p-6 rounded-2xl border border-gray-200 text-center">
                        <div class="partner-icon w-16 h-16 mx-auto mb-4 flex items-center justify-center bg-[#558255]/10 rounded-2xl text-[#558255]">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-[#1a1a1a] mb-2">Инженеры</h3>
                        <p class="text-gray-600 text-sm">Специалисты по инженерным системам</p>
                    </div>

                    <!-- Смежные бизнесы -->
                    <div class="partner-card bg-white p-6 rounded-2xl border border-gray-200 text-center">
                        <div class="partner-icon w-16 h-16 mx-auto mb-4 flex items-center justify-center bg-[#558255]/10 rounded-2xl text-[#558255]">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-[#1a1a1a] mb-2">Смежные бизнесы</h3>
                        <p class="text-gray-600 text-sm">Владельцы бизнесов, работающих с частными домовладениями</p>
                    </div>

                </div>

                <div class="text-center mt-12">
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Для каждого партнера мы подбираем <span class="font-bold text-[#558255]">индивидуальный формат взаимодействия</span> и стремимся к долгосрочному сотрудничеству.
                    </p>
                </div>

            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- ? 4. СТАТИСТИКА: В цифрах (из TV history_stats)                       -->
        <!-- ====================================================================== -->
        <section class="py-20 bg-[#f8faf8]">
            <div class="container mx-auto px-4">

                <div class="text-center mb-16">
                    <span class="text-sm font-bold tracking-widest text-[#558255] uppercase mb-3 block">Наши достижения</span>
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
        <!-- ? 5. ЦЕННОСТИ: Наши ценности (из TV history_values)                  -->
        <!-- ====================================================================== -->
        <section class="py-24 bg-white">
            <div class="container mx-auto px-4">

                <div class="text-center mb-16">
                    <span class="text-sm font-bold tracking-widest text-[#558255] uppercase mb-3 block">Философия</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">Наши ценности</h2>
                </div>

                <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    {set $values = json_decode($_modx->resource.history_values, true)}
                    {if $values}
                    {foreach $values as $val}
                    <div class="bg-[#f8faf8] p-8 rounded-2xl shadow-lg border border-gray-100 hover:border-[#558255]/30 transition group">
                        <div class="w-14 h-14 mb-6 flex items-center justify-center bg-[#558255]/10 rounded-xl text-[#558255] group-hover:bg-[#558255] group-hover:text-white transition">
                            {if $val.icon}{$val.icon|raw}{else}
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                            {/if}
                        </div>
                        <h3 class="text-xl font-bold text-[#1a1a1a] mb-3">{$val.title}</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">{$val.desc}</p>
                    </div>
                    {/foreach}
                    {else}
                    <!-- Пример -->
                    <div class="bg-[#f8faf8] p-8 rounded-2xl shadow-lg border border-gray-100">
                        <div class="mx-auto w-16 h-16 mb-2 flex items-center justify-center bg-[#558255]/10 rounded-xl text-[#558255]">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a1a1a] mb-3">Качество без компромиссов</h3>
                        <p class="text-gray-600 text-sm">Используем только проверенные материалы и технологии, которые работают в российском климате.</p>
                    </div>
                    <div class="bg-[#f8faf8] p-8 rounded-2xl shadow-lg border border-gray-100">
                        <div class="mx-auto w-16 h-16 mb-2 flex items-center justify-center bg-[#558255]/10 rounded-xl text-[#558255]">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a1a1a] mb-3">Индивидуальный подход</h3>
                        <p class="text-gray-600 text-sm">Каждый проект создаётся с учётом характера участка, пожеланий клиента и бюджета.</p>
                    </div>
                    <div class="bg-[#f8faf8] p-8 rounded-2xl shadow-lg border border-gray-100">
                        <div class="mx-auto w-16 h-16 mb-2 flex items-center justify-center bg-[#558255]/10 rounded-xl text-[#558255]">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a1a1a] mb-3">Прозрачность на всех этапах</h3>
                        <p class="text-gray-600 text-sm">Фиксируем смету и сроки в договоре. Вы всегда знаете, за что платите.</p>
                    </div>
                    {/if}
                </div>

            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- ? 6. ФИНАЛЬНЫЙ CTA: Заявка на партнерство                             -->
        <!-- ====================================================================== -->
        <section class="py-24 bg-[#1a1a1a] text-white relative overflow-hidden">
            <div class="absolute inset-0 opacity-10"
                style="background-image: radial-gradient(#558255 1px, transparent 1px); background-size: 30px 30px;"></div>

            <div class="container mx-auto px-4 relative z-10">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    
                    <div class="text-left">
                        <h2 class="text-3xl md:text-4xl font-extrabold mb-6 text-white">
                            Готовы обсудить партнерство?
                        </h2>
                        <p class="text-lg text-gray-400 mb-8">
                            Оставьте заявку или свяжитесь с нами удобным способом. Обсудим возможные форматы сотрудничества и найдем решение, которое будет полезно для обеих сторон.
                        </p>

                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center gap-3">
                                <svg class="w-6 h-6 text-[#558255]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-300">Индивидуальные условия сотрудничества</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-6 h-6 text-[#558255]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-300">Прозрачная система взаиморасчетов</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-6 h-6 text-[#558255]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-300">Долгосрочное взаимовыгодное партнерство</span>
                            </li>
                        </ul>

                        <!-- Контакты -->
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
                        <h3 class="text-2xl font-bold mb-2">Оставить заявку на партнерство</h3>
                        <p class="text-gray-500 text-sm mb-6">Мы свяжемся с вами в течение 1 рабочего дня</p>

                        {\'!FetchIt\'|snippet:[
                        \'snippet\'=>\'FormIt\', \'hooks\'=>\'email\',
                        \'form\'=>\'@INLINE <form method="post" class="space-y-4">
                            <div><label class="block text-sm font-medium text-gray-700 mb-1 text-left">Ваше имя</label><input type="text" name="Имя" placeholder="Иван Иванов" required class="!text-black w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-[#558255] focus:border-transparent outline-none transition"></div>
                            <div><label class="block text-sm font-medium text-gray-700 mb-1 text-left">Компания</label><input type="text" name="Компания" placeholder="Название компании" class="!text-black w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-[#558255] focus:border-transparent outline-none transition"></div>
                            <div><label class="block text-sm font-medium text-gray-700 mb-1 text-left">Телефон</label><input type="tel" name="Телефон" placeholder="+7 (999) 999-99-99" required class="!text-black w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-[#558255] focus:border-transparent outline-none transition"></div>
                            <div><label class="block text-sm font-medium text-gray-700 mb-1 text-left">Email</label><input type="email" name="Почта" placeholder="email@company.ru" class="!text-black w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-[#558255] focus:border-transparent outline-none transition"></div>
                            <div><label class="block text-sm font-medium text-gray-700 mb-1 text-left">Направление деятельности</label><input type="text" name="Направление" placeholder="Архитектура, дизайн, строительство..." class="!text-black w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-[#558255] focus:border-transparent outline-none transition"></div>
                            <input type="hidden" name="Страница" value="{$_modx->config.site_url}{$_modx->resource.uri}">
                            <input type="hidden" name="Название страницы" value="{$_modx->resource.pagetitle}">
                            <button type="submit" class="w-full py-4 bg-[#558255] hover:bg-[#3d5c3d] text-white font-bold rounded-xl transition shadow-md mt-2">Стать партнером</button>
                            <p class="text-xs text-gray-400 text-center mt-4">Нажимая кнопку, вы соглашаетесь с политикой конфиденциальности</p>
                        </form>\',
                        \'emailTo\'=>"{\'email_1\'|config},artemnersisyan777@gmail.com", 
                        \'emailSubject\'=>"Заявка на партнерство от {$_modx->resource.pagetitle}",
                        \'successMessage\'=>\'<div class="w-fit text-center text-white font-bold p-2">Спасибо за обращене, мы скоро свяжемся с вами!</div>\'
                        ]}
                    </div>
                </div>
            </div>
        </section>

        <!-- Пустая секция для отступа -->
        <section class="py-12 bg-[#1a1a1a]"></section>

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