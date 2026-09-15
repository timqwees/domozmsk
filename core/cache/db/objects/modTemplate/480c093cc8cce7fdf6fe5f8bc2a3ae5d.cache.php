<?php  return array (
  'id' => 22,
  'source' => 1,
  'property_preprocess' => 0,
  'templatename' => 'Процесс работы',
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

        /* Vertical timeline */
        .timeline-step {
            position: relative;
            padding-left: 60px;
        }

        .timeline-step::before {
            content: \'\';
            position: absolute;
            left: 20px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, #558255, #d4a574);
        }

        .timeline-step:last-child::before {
            display: none;
        }

        .timeline-dot {
            position: absolute;
            left: 12px;
            top: 0;
            width: 18px;
            height: 18px;
            background: #558255;
            border: 3px solid #fff;
            border-radius: 50%;
            z-index: 2;
            box-shadow: 0 0 0 4px rgba(85, 130, 85, 0.2);
        }

        /* Animated counter */
        .stat-value {
            font-variant-numeric: tabular-nums;
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

        /* Progress bar animation */
        .progress-bar {
            background: linear-gradient(90deg, #558255 0%, #d4a574 100%);
            transition: width 1s ease-in-out;
        }

        /* Hover effects for engagement */
        .step-card {
            transition: all 0.3s ease;
        }

        .step-card:hover {
            transform: translateX(8px);
        }

        .step-card:hover .timeline-dot {
            background: #d4a574;
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
        <!-- HERO: Рабочий процесс (полный экран + параллакс)                 -->
        <!-- ====================================================================== -->
        <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
            <!-- Фон с параллакс-эффектом -->
            <!-- Фон с параллакс-эффектом -->
            {if $_modx->resource.process_hero_img}
            <img loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover object-down parallax-bg"
                src="{$_modx->resource.process_hero_img}" alt="Рабочий процесс">
            {/if}
            <div class="absolute inset-0 bg-gradient-to-br from-black/85 via-black/70 to-black/50"></div>

            <!-- Контент -->
            <div class="relative z-10 text-center text-white px-4 max-w-5xl mx-auto">
                <span
                    class="inline-block px-5 py-2.5 bg-[#558255]/90 text-white text-sm font-bold rounded-full mb-8 backdrop-blur-sm border border-white/20">
                    Прозрачность на каждом этапе
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-7xl font-extrabold leading-tight mb-8 text-white">
                    {$_modx->resource.process_hero_title ?: \'Рабочий процесс\'}
                </h1>
                <p class="text-lg md:text-xl text-white/90 leading-relaxed max-w-3xl mx-auto">
                    {$_modx->resource.process_hero_desc ?: \'От первой консультации до сдачи объекта — каждый этап
                    контролируется и фиксируется. Вы всегда знаете, что происходит с вашим проектом.\'}
                </p>

                <!-- Прогресс-индикатор (визуальный якорь) -->
                <div class="mt-12 flex items-center justify-center gap-3 text-sm text-white/80">
                    <span class="flex items-center gap-2">
                        <span class="w-3 h-3 bg-[#558255] rounded-full"></span>
                        Консультация
                    </span>
                    <span class="w-16 h-0.5 bg-white/30"></span>
                    <span class="flex items-center gap-2">
                        <span class="w-3 h-3 bg-white/30 rounded-full"></span>
                        Проект
                    </span>
                    <span class="w-16 h-0.5 bg-white/30"></span>
                    <span class="flex items-center gap-2">
                        <span class="w-3 h-3 bg-white/30 rounded-full"></span>
                        Реализация
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
        <!-- ? 2. ВВЕДЕНИЕ: Как мы организуем работу                              -->
        <!-- ====================================================================== -->
        <section class="py-24 bg-white">
            <div class="container mx-auto px-4 max-w-4xl">
                <div class="prose prose-lg text-[#1a1a1a] leading-relaxed">
                    {if $_modx->resource.process_intro}
                    {$_modx->resource.process_intro|raw}
                    {else}
                    <p class="text-lg mb-6 text-[#1a1a1a]">
                        <b>Дом Оз</b> работает по отлаженной системе, которая исключает хаос, задержки и недопонимание.
                    </p>
                    <p class="mb-6 text-[#1a1a1a]">
                        Каждый проект проходит через 4 ключевых этапа. На каждом из них вы получаете отчёт, фотофиксацию
                        и возможность внести корректировки до начала следующего шага.
                    </p>
                    <p class="text-[#1a1a1a]">
                        Мы не просто «делаем работу» — мы создаём предсказуемый, прозрачный и комфортный процесс, где вы
                        чувствуете контроль, а не беспокойство.
                    </p>
                    {/if}
                </div>
            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- ЭТАПЫ РАБОТЫ (вертикальный интерактивный таймлайн)              -->
        <!-- ====================================================================== -->
        <section class="py-24 bg-[#f8faf8] relative overflow-hidden">
            <!-- Декоративный фон -->
            <div class="absolute inset-0 opacity-30"
                style="background-image: radial-gradient(#558255 1px, transparent 1px); background-size: 30px 30px;">
            </div>

            <div class="container mx-auto px-4 relative z-10">

                <div class="text-center mb-20">
                    <span class="text-sm font-bold tracking-widest text-[#558255] uppercase mb-3 block">Пошагово</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">Как мы работаем
                    </h2>
                </div>

                <!-- Вертикальный таймлайн -->
                <div class="max-w-4xl mx-auto">
                    {set $steps = json_decode($_modx->resource.process_steps, true)}
                    {if $steps}
                    {foreach $steps as $step}
                    <div class="timeline-step mb-16 last:mb-0">
                        <div class="timeline-dot"></div>
                        <div
                            class="step-card bg-white p-8 rounded-2xl shadow-lg border border-gray-100 hover:border-[#558255]/30 transition cursor-pointer group">
                            <div class="flex items-start gap-6">
                                <div
                                    class="flex-shrink-0 w-16 h-16 flex items-center justify-center bg-[#558255] text-white rounded-xl shadow-lg group-hover:bg-[#d4a574] transition">
                                    {if $step.icon}
                                    {$step.icon|raw}
                                    {else}
                                    <span class="text-2xl font-bold">{$step.step}</span>
                                    {/if}
                                </div>
                                <div>
                                    <div class="flex items-center gap-3 mb-3">
                                        <span
                                            class="text-sm font-bold text-[#558255] bg-[#558255]/10 px-3 py-1 rounded-full">Этап
                                            {$step.step}</span>
                                        <span class="text-xs text-gray-400">~ 3-7 дней</span>
                                    </div>
                                    <h3
                                        class="text-xl font-bold text-[#1a1a1a] mb-3 group-hover:text-[#558255] transition">
                                        {$step.title}</h3>
                                    <p class="text-[#1a1a1a] text-sm leading-relaxed">{$step.desc}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {/foreach}
                    {else}
                    <!-- Пример, если поле пустое -->
                    <div class="timeline-step mb-16">
                        <div class="timeline-dot"></div>
                        <div class="step-card bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                            <div class="flex items-start gap-6">
                                <div
                                    class="flex-shrink-0 w-16 h-16 flex items-center justify-center bg-[#558255] text-white rounded-xl shadow-lg">
                                    <span class="text-2xl font-bold">1</span>
                                </div>
                                <div>
                                    <span
                                        class="text-sm font-bold text-[#558255] bg-[#558255]/10 px-3 py-1 rounded-full mb-3 inline-block">Этап
                                        1</span>
                                    <h3 class="text-left text-xl font-bold text-[#1a1a1a] mb-3">Консультация и выезд</h3>
                                    <p class="text-[#1a1a1a] text-sm">Выезд на участок, анализ потребностей,
                                        предварительная оценка бюджета и сроков.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-step mb-16">
                        <div class="timeline-dot"></div>
                        <div class="step-card bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                            <div class="flex items-start gap-6">
                                <div
                                    class="flex-shrink-0 w-16 h-16 flex items-center justify-center bg-[#558255] text-white rounded-xl shadow-lg">
                                    <span class="text-2xl font-bold">2</span>
                                </div>
                                <div>
                                    <span
                                        class="text-sm font-bold text-[#558255] bg-[#558255]/10 px-3 py-1 rounded-full mb-3 inline-block">Этап
                                        2</span>
                                    <h3 class="text-left text-xl font-bold text-[#1a1a1a] mb-3">Проект и смета</h3>
                                    <p class="text-[#1a1a1a] text-sm">Разработка концепции и проектной документации. Подготовка сметы и договора. Фиксация цен и сроков в договоре – без скрытых платежей</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-step mb-16">
                        <div class="timeline-dot"></div>
                        <div class="step-card bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                            <div class="flex items-start gap-6">
                                <div
                                    class="flex-shrink-0 w-16 h-16 flex items-center justify-center bg-[#558255] text-white rounded-xl shadow-lg">
                                    <span class="text-2xl font-bold">3</span>
                                </div>
                                <div>
                                    <span
                                        class="text-sm font-bold text-[#558255] bg-[#558255]/10 px-3 py-1 rounded-full mb-3 inline-block">Этап
                                        3</span>
                                    <h3 class="text-left text-xl font-bold text-[#1a1a1a] mb-3">Подготовка и логистика</h3>
                                    <p class="text-[#1a1a1a] text-sm">Закупка материалов, разметка участка, доставка. Вы
                                        получаете фотоотчёт о начале работ и график поставок.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-step">
                        <div class="timeline-dot"></div>
                        <div class="step-card bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                            <div class="flex items-start gap-6">
                                <div
                                    class="flex-shrink-0 w-16 h-16 flex items-center justify-center bg-[#558255] text-white rounded-xl shadow-lg">
                                    <span class="text-2xl font-bold">4</span>
                                </div>
                                <div>
                                    <span
                                        class="text-sm font-bold text-[#558255] bg-[#558255]/10 px-3 py-1 rounded-full mb-3 inline-block">Этап
                                        4</span>
                                    <h3 class="text-left text-xl font-bold text-[#1a1a1a] mb-3">Реализация и сдача</h3>
                                    <p class="text-[#1a1a1a] text-sm">Монтаж под ключ с еженедельными фотоотчётами.
                                        Приёмка по акту, гарантия 5 лет, инструкция по уходу за садом.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {/if}
                </div>
            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- СТАТИСТИКА: Анимированные цифры (вовлечение)                    -->
        <!-- ====================================================================== -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-4">

                <div class="text-center mb-16">
                    <span
                        class="text-sm font-bold tracking-widest text-[#558255] uppercase mb-3 block">Эффективность</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">В цифрах</h2>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-5xl mx-auto">
                    {set $stats = json_decode($_modx->resource.process_stats, true)}
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
                        <div class="text-4xl md:text-5xl font-extrabold text-[#558255] mb-2">35 дней</div>
                        <p class="text-[#1a1a1a] font-medium">средний срок проекта</p>
                    </div>
                    <div class="text-center p-6">
                        <div class="text-4xl md:text-5xl font-extrabold text-[#558255] mb-2">98%</div>
                        <p class="text-[#1a1a1a] font-medium">сдача в срок</p>
                    </div>
                    <div class="text-center p-6">
                        <div class="text-4xl md:text-5xl font-extrabold text-[#558255] mb-2">0</div>
                        <p class="text-[#1a1a1a] font-medium">скрытых платежей</p>
                    </div>
                    <div class="text-center p-6">
                        <div class="text-4xl md:text-5xl font-extrabold text-[#558255] mb-2">5 лет</div>
                        <p class="text-[#1a1a1a] font-medium">гарантии на работы</p>
                    </div>
                    {/if}
                </div>
            </div>
        </section>

        <!-- ====================================================================== -->
        <!-- ГАРАНТИИ ПРОЦЕССА (визуальные бейджи)                           -->
        <!-- ====================================================================== -->
        {if $_modx->resource.process_guarantees}
        <section class="py-24 bg-[#f8faf8]">
            <div class="container mx-auto px-4">

                <div class="text-center mb-16">
                    <span
                        class="text-sm font-bold tracking-widest text-[#558255] uppercase mb-3 block">Надёжность</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">Что мы
                        гарантируем</h2>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">
                    {set $guarantees = json_decode($_modx->resource.process_guarantees, true)}
                    {foreach $guarantees as $item}
                    <div
                        class="bg-white p-6 rounded-2xl border border-gray-200 hover:border-[#558255]/30 transition group text-center">
                        <div
                            class="w-14 h-14 mx-auto mb-4 flex items-center justify-center bg-[#558255]/10 rounded-xl text-[#558255] group-hover:bg-[#558255] group-hover:text-white transition">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-[#1a1a1a] mb-2 group-hover:text-[#558255] transition">
                            {$item.title}</h3>
                        <p class="text-[#1a1a1a] text-sm leading-relaxed">{$item.desc}</p>
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
            <!-- Декоративный паттерн -->
            <div class="absolute inset-0 opacity-10"
                style="background-image: radial-gradient(#d4a574 1px, transparent 1px); background-size: 25px 25px;">
            </div>

            <div class="relative z-10 max-w-3xl mx-auto px-4">
                <span
                    class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm text-white text-sm font-bold rounded-full mb-6 border border-white/20">
                    Начните свой проект
                </span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold mb-6 text-white">
                    {$_modx->resource.process_cta_title ?: \'Готовы создать свой идеальный сад?\'}
                </h2>
                <p class="text-lg text-white/90 mb-10 max-w-2xl mx-auto">
                    {$_modx->resource.process_cta_desc ?: \'Оставьте заявку — и мы подготовим предварительный план работ
                    и смету бесплатно.\'}
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
        <!-- FAQ (ЧАСТЫЕ ВОПРОСЫ О ПРОЦЕССЕ) + Schema                        -->
        <!-- ====================================================================== -->
        {set $faq = json_decode($_modx->resource.process_faq, true)}
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

        <!-- Schema.org Service -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Service",
            "name": "{$_modx->resource.pagetitle}",
            "description": "{$_modx->resource.description}",
            "provider": {
                "@type": "LocalBusiness",
                "name": "Дом Оз",
                "url": "https://domozmsk.ru",
                "logo": "https://domozmsk.ru/assets/img/logo.png",
                "address": {
                    "@type": "PostalAddress",
                    "addressLocality": "Москва",
                    "addressCountry": "RU"
                }
            },
            "areaServed": {
                "@type": "State",
                "name": "Москва и Московская область"
            },
            "offers": {
                "@type": "Offer",
                "priceCurrency": "RUB",
                "priceSpecification": {
                    "@type": "PriceSpecification",
                    "priceType": "startingAt"
                }
            }
        }
        </script>

    </main>

    {include \'footer\'}
    {include \'modal\'}
    {include \'social\'}

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="/assets/bibliotek/jquery/jqwery.js"></script>
    <script src="/assets/js/script.js?v={$_modx->config.cache_version}"></script>

    <!-- Простой скрипт для параллакса и анимации цифр -->
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

            // Анимация появления шагов при скролле
            const stepCards = document.querySelectorAll(\'.step-card\');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = \'1\';
                        entry.target.style.transform = \'translateX(0)\';
                    }
                });
            }, { threshold: 0.1 });

            stepCards.forEach(card => {
                card.style.opacity = \'0\';
                card.style.transform = \'translateX(-20px)\';
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