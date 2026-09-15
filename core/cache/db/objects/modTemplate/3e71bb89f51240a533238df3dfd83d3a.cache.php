<?php  return array (
  'id' => 21,
  'source' => 1,
  'property_preprocess' => 0,
  'templatename' => 'Наша команда',
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

        /* Team member card */
        .team-card {
            transition: all 0.3s ease;
        }

        .team-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
        }

        .team-card img {
            transition: transform 0.5s ease;
        }

        .team-card:hover img {
            transform: scale(1.03);
        }

        /* FAQ accordion */
        .acor-container input[type="checkbox"] {
            display: none;
        }

        .acor-body>p {
            color: #778A6E !important;
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
            background: #778A6E;
            border-radius: 10px;
            cursor: pointer;
            border: 1px solid #e5e7eb;
            font-weight: 500;
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
        }

        .acor-container input[type="checkbox"]:checked+label::after {
            content: \'−\';
            background: #558255;
            color: #fff;
        }

        /* Animated counter */
        .stat-value {
            font-variant-numeric: tabular-nums;
        }

        /* Value card hover */
        .value-card {
            transition: all 0.3s ease;
        }

        .value-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
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
        <!-- HERO: Наша команда (полный экран + параллакс)                    -->
        <!-- ====================================================================== -->
        <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
            <!-- Фон с параллакс-эффектом -->
            {if $_modx->resource.team_hero_img}
            <img loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover object-down parallax-bg"
                src="{$_modx->resource.team_hero_img}" alt="Наша команда">
            {/if}
            <div class="absolute inset-0 bg-gradient-to-br from-black/85 via-black/70 to-black/50"></div>

            <!-- Контент -->
            <div class="relative z-10 text-center text-white px-4 max-w-5xl mx-auto">
                <span
                    class="inline-block px-5 py-2.5 bg-[#558255]/90 text-white text-sm font-bold rounded-full mb-8 backdrop-blur-sm border border-white/20">
                    О компании
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-7xl font-extrabold leading-tight mb-8 text-white">
                    {$_modx->resource.team_hero_title ?: \'Наша команда\'}
                </h1>
                <p class="text-lg md:text-xl text-white/90 leading-relaxed max-w-3xl mx-auto">
                    {$_modx->resource.team_hero_desc ?: \'Профессионалы, которые создают сады вашей мечты. Опыт,
                    экспертиза и любовь к своему делу в каждом проекте.\'}
                </p>

                <!-- Прогресс-индикатор (визуальный якорь) -->
                <div class="mt-12 flex items-center justify-center gap-3 text-sm text-white/80">
                    <span class="flex items-center gap-2">
                        <span class="w-3 h-3 bg-[#558255] rounded-full"></span>
                        Дизайнеры
                    </span>
                    <span class="w-16 h-0.5 bg-white/30"></span>
                    <span class="flex items-center gap-2">
                        <span class="w-3 h-3 bg-white/30 rounded-full"></span>
                        Инженеры
                    </span>
                    <span class="w-16 h-0.5 bg-white/30"></span>
                    <span class="flex items-center gap-2">
                        <span class="w-3 h-3 bg-white/30 rounded-full"></span>
                        Монтажники
                    </span>
                </div>
            </div>

            <!-- Скролл-индикатор с анимацией -->
            <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce">
                <div class="w-8 h-12 border-2 border-white/50 rounded-full flex justify-center">
                    <div class="w-1.5 h-3 bg-white/70 rounded-full mt-2 animate-pulse"></div>
                </div>
            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- ВВЕДЕНИЕ: Кто мы и почему нам доверяют                          -->
        <!-- ====================================================================== -->
        <section class="py-24 bg-white">
            <div class="container mx-auto px-4 max-w-4xl">
                <div class="prose prose-lg text-[#1a1a1a] leading-relaxed">
                    {if $_modx->resource.team_intro}
                    {$_modx->resource.team_intro|raw}
                    {else}
                    <p class="text-lg mb-6 text-[#1a1a1a]">
                        <b>Дом Оз</b> — это не просто компания, это команда единомышленников, объединённых любовью к
                        природе и стремлением создавать идеальные пространства.
                    </p>
                    <p class="mb-6 text-[#1a1a1a]">
                        Наши специалисты — это ландшафтные дизайнеры с художественным образованием, инженеры с
                        практическим опытом, агрономы, знающие особенности российских климатических зон, и монтажники,
                        для которых качество — не слово, а принцип.
                    </p>
                    <p class="text-[#1a1a1a]">
                        Мы не передаём работу на субподряд. Каждый проект реализуется нашей внутренней командой под
                        единым контролем — от идеи до сдачи объекта.
                    </p>
                    {/if}
                </div>
            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- СОСТАВ КОМАНДЫ (анимированные карточки)                         -->
        <!-- ====================================================================== -->
        <section class="py-24 bg-[#f8faf8] relative overflow-hidden">
            <!-- Декоративный фон -->
            <div class="absolute inset-0 opacity-30"
                style="background-image: radial-gradient(#558255 1px, transparent 1px); background-size: 30px 30px;">
            </div>

            <div class="container mx-auto px-4 relative z-10">

                <div class="text-center mb-16">
                    <span class="text-sm font-bold tracking-widest text-[#558255] uppercase mb-3 block">Наши
                        эксперты</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">Кто создаёт ваш
                        сад</h2>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    {set $members = json_decode($_modx->resource.team_members, true)}
                    {if $members}
                    {foreach $members as $member}
                    <div class="team-card bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 group cursor-pointer hover:shadow-2xl transition-all duration-300">
                    <!-- Фото с идеальными пропорциями -->
                    <div class="relative aspect-[3/4] overflow-hidden bg-gradient-to-br from-gray-100 to-gray-200">
                        <img loading="lazy" decoding="async" src="{$member.photo}" alt="{$member.name}"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        
                        <!-- Градиент при наведении -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500">
                        </div>
                        
                        <!-- Иконка при наведении -->
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-4 group-hover:translate-y-0">
                            <span class="w-16 h-16 bg-white/95 backdrop-blur-sm rounded-full flex items-center justify-center shadow-2xl transform scale-90 group-hover:scale-100 transition-all duration-300">
                                <svg class="w-7 h-7 text-[#558255]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                    </path>
                                </svg>
                            </span>
                        </div>
                        
                        <!-- Бейдж с должностью (виден всегда) -->
                        <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/60 to-transparent">
                            <p class="bg-[#558241] rouded-xl px-2 text-white text-sm font-medium opacity-90">{$member.role}</p>
                        </div>
                    </div>
                    
                    <!-- Информация о сотруднике -->
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#1a1a1a] mb-2 group-hover:text-[#558255] transition-colors">
                            {$member.name}
                        </h3>
                        <p class="text-[#1a1a1a] text-sm leading-relaxed line-clamp-3">
                            {$member.bio}
                        </p>
                    </div>
                </div>
                    {/foreach}
                    {else}
                    <!-- Пример -->
                    <div class="team-card bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100">
                        <div class="relative h-72 overflow-hidden">
                            <img loading="lazy" decoding="async" src="/assets/img/team/anna.jpg" alt="Анна Петрова" class="w-full h-full object-cover"
                                loading="lazy">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-[#1a1a1a] mb-1">Анна Петрова</h3>
                            <p class="text-[#558255] font-medium text-sm mb-3">Главный ландшафтный дизайнер</p>
                            <p class="text-[#1a1a1a] text-sm">10+ лет опыта, образование в МГУЛ, автор 50+ реализованных
                                проектов.</p>
                        </div>
                    </div>
                    <div class="team-card bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100">
                        <div class="relative h-72 overflow-hidden">
                            <img loading="lazy" decoding="async" src="/assets/img/team/dmitry.jpg" alt="Дмитрий Соколов"
                                class="w-full h-full object-cover" loading="lazy">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-[#1a1a1a] mb-1">Дмитрий Соколов</h3>
                            <p class="text-[#558255] font-medium text-sm mb-3">Инженер-проектировщик</p>
                            <p class="text-[#1a1a1a] text-sm">Специалист по дренажу и автополиву. Знает, как сделать сад
                                функциональным.</p>
                        </div>
                    </div>
                    <div class="team-card bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100">
                        <div class="relative h-72 overflow-hidden">
                            <img loading="lazy" decoding="async" src="/assets/img/team/elena.jpg" alt="Елена Волкова" class="w-full h-full object-cover"
                                loading="lazy">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-[#1a1a1a] mb-1">Елена Волкова</h3>
                            <p class="text-[#558255] font-medium text-sm mb-3">Агроном-консультант</p>
                            <p class="text-[#1a1a1a] text-sm">Подбирает растения, которые будут расти именно на вашем
                                участке.</p>
                        </div>
                    </div>
                    {/if}
                </div>
            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- СТАТИСТИКА: Анимированные цифры                                 -->
        <!-- ====================================================================== -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-4">

                <div class="text-center mb-16">
                    <span class="text-sm font-bold tracking-widest text-[#558255] uppercase mb-3 block">Наша сила</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">В цифрах</h2>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-5xl mx-auto">
                    {set $stats = json_decode($_modx->resource.team_stats, true)}
                    {if $stats}
                    {foreach $stats as $stat}
                    <div class="text-center p-6 group">
                        <div
                            class="text-4xl md:text-5xl font-extrabold text-[#558255] mb-2 stat-value group-hover:scale-110 transition">
                            {$stat.value}
                        </div>
                        <p class="text-[#1a1a1a] font-medium group-hover:text-[#558255] transition">{$stat.label}</p>
                    </div>
                    {/foreach}
                    {else}
                    <!-- Пример -->
                    <div class="text-center p-6">
                        <div class="text-4xl md:text-5xl font-extrabold text-[#558255] mb-2">15+</div>
                        <p class="text-[#1a1a1a] font-medium">специалистов в штате</p>
                    </div>
                    <div class="text-center p-6">
                        <div class="text-4xl md:text-5xl font-extrabold text-[#558255] mb-2">8+</div>
                        <p class="text-[#1a1a1a] font-medium">лет совместной работы</p>
                    </div>
                    <div class="text-center p-6">
                        <div class="text-4xl md:text-5xl font-extrabold text-[#558255] mb-2">120+</div>
                        <p class="text-[#1a1a1a] font-medium">реализованных проектов</p>
                    </div>
                    <div class="text-center p-6">
                        <div class="text-4xl md:text-5xl font-extrabold text-[#558255] mb-2">4.9/5</div>
                        <p class="text-[#1a1a1a] font-medium">средний рейтинг клиентов</p>
                    </div>
                    {/if}
                </div>
            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- ЦЕННОСТИ: Интерактивные карточки                                -->
        <!-- ====================================================================== -->
        {if $_modx->resource.team_values}
        <section class="py-24 bg-[#f8faf8]">
            <div class="container mx-auto px-4">

                <div class="text-center mb-16">
                    <span class="text-sm font-bold tracking-widest text-[#558255] uppercase mb-3 block">Философия</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">Наши ценности
                    </h2>
                </div>

                <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    {set $values = json_decode($_modx->resource.team_values, true)}
                    {foreach $values as $val}
                    <div
                        class="value-card bg-white p-8 rounded-2xl shadow-lg border border-gray-100 hover:border-[#558255]/30 transition group cursor-pointer">
                        <div
                            class="w-14 h-14 mb-6 flex items-center justify-center bg-[#558255]/10 rounded-xl text-[#558255] group-hover:bg-[#558255] group-hover:text-white transition">
                            {if $val.icon}{$val.icon|raw}{else}
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                            {/if}
                        </div>
                        <h3 class="text-xl font-bold text-[#1a1a1a] mb-3 group-hover:text-[#558255] transition">
                            {$val.title}</h3>
                        <p class="text-[#1a1a1a] text-sm leading-relaxed">{$val.desc}</p>
                    </div>
                    {/foreach}
                </div>
            </div>
        </section>
        {/if}
        
        <!-- ====================================================================== -->
        <!-- ФИНАЛЬНЫЙ CTA (градиент + анимация)                             -->
        <!-- ====================================================================== -->
        <section
            class="py-24 bg-[#778A6E] text-white text-center relative overflow-hidden">
            <div class="absolute inset-0 opacity-10"
                style="background-image: radial-gradient(#d4a574 1px, transparent 1px); background-size: 25px 25px;">
            </div>

            <div class="relative z-10 max-w-3xl mx-auto px-4">
                <span
                    class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm text-white text-sm font-bold rounded-full mb-6 border border-white/20">
                    Начните свой проект
                </span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold mb-6 text-white">
                    {$_modx->resource.team_cta_title ?: \'Готовы создать свой идеальный сад?\'}
                </h2>
                <p class="text-lg text-white/90 mb-10 max-w-2xl mx-auto">
                    {$_modx->resource.team_cta_desc ?: \'Оставьте заявку — и мы подготовим предварительный план работ и
                    смету бесплатно.\'}
                </p>
                <button
                    class="modal_window inline-block px-12 py-5 bg-[#558255] text-white rounded-xl font-bold text-lg hover:bg-[#3d5c3d] transition shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                    Получить консультацию
                </button>
                <p class="mt-6 text-sm text-white/60">
                    Ответим в течение 15 минут • Бесплатно • Без обязательств
                </p>
            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- FAQ (ЧАСТЫЕ ВОПРОСЫ О КОМАНДЕ) + Schema                         -->
        <!-- ====================================================================== -->
        {set $faq = json_decode($_modx->resource.team_faq, true)}
        {if $faq}
        <section class="py-24 bg-white" id="faq">
            <div class="container mx-auto px-4 max-w-3xl">

                <div class="text-center mb-16">
                    <span class="text-sm font-bold tracking-widest text-[#558255] uppercase mb-3 block">FAQ</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">Частые вопросы
                    </h2>
                </div>

                <div class="acor-container space-y-4">
                    {foreach $faq as $i => $item}
                    <div class="group bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-[0_4px_15px_-5px_rgba(0,0,0,0.05)] hover:border-[#558255]/40 transition-all duration-300"
                        itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <input type="checkbox" id="faq-{$i}" class="hidden peer">
                        <label for="faq-{$i}" itemprop="name" class="text-[#1a1a1a]">{$item.q}</label>
                        <div class="acor-body" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <!-- Блок с ответом (Анимация через CSS Grid) -->
                            <div class="grid grid-rows-[0fr] transition-[grid-template-rows] duration-300 ease-in-out peer-checked:grid-rows-[1fr]"
                                itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <div itemprop="text" class="pt-4 text-[#6b7280] text-base leading-relaxed">
                                    {$item.a}
                                </div>
                            </div>
                        </div>
                    </div>
                    {/foreach}
                </div>

                <!-- Schema.org FAQPage -->
                <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "FAQPage",
                "mainEntity": [
                    {foreach $faq as $i => $item}
                    {
                        "@type": "Question",
                        "name": "{$item.q|escape:\'json\'}",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "{$item.a|escape:\'json\'}"
                        }
                    }{if !$item@last},{/if}
                    {/foreach}
                ]
            }
            </script>
            </div>
        </section>
        {/if}

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

    <!-- Простой скрипт для параллакса и анимации карточек -->
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

            // Анимация появления карточек при скролле
            const teamCards = document.querySelectorAll(\'.team-card, .value-card\');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = \'1\';
                        entry.target.style.transform = \'translateY(0)\';
                    }
                });
            }, { threshold: 0.1 });

            teamCards.forEach(card => {
                card.style.opacity = \'0\';
                card.style.transform = \'translateY(20px)\';
                card.style.transition = \'opacity 0.5s ease, transform 0.5s ease\';
                observer.observe(card);
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