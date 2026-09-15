<?php  return array (
  'id' => 12,
  'source' => 1,
  'property_preprocess' => 0,
  'templatename' => 'Статья блога',
  'description' => 'Шаблон для отдельных статей блога',
  'editor_type' => 0,
  'category' => 26,
  'icon' => '',
  'template_type' => 0,
  'content' => '<!DOCTYPE html>
<html lang="ru">
<head>
    {include \'blog-head\'}
    <!-- Yandex Autoplacement 19368664 -->
<script src="https://yandex.ru/ads/system/context.js" async></script>
<script data-page-id="19368664" src="https://yandex.ru/ads/system/ap-loader.js" async></script>
</head>

<body class="bg-white">

    <div id="read-progress" class="fixed top-0 left-0 h-1 bg-[#558255] z-[100] w-0" aria-hidden="true"></div>

    {include \'header\'}

    <main class="py-20 mb-[5%]">
        <section class="py-8">
            <div class="container mx-auto px-4 max-w-6xl">

                <!-- Хлебные крошки (точно как в оригинале) -->
                <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <ol class="flex flex-wrap items-center gap-2">
                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                            <a itemprop="item" href="https://domozmsk.ru/" class="hover:text-blue-600 transition">
                                <span itemprop="name">Главная</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li class="text-gray-400">/</li>
                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                            <a itemprop="item" href="https://domozmsk.ru/blogs" class="hover:text-blue-600 transition">
                                <span itemprop="name">Блог</span>
                            </a>
                            <meta itemprop="position" content="2">
                        </li>
                        <li class="text-gray-400">/</li>
                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" 
                            class="text-gray-900 font-medium truncate max-w-[60vw]">
                            <span itemprop="name">{$_modx->resource.pagetitle}</span>
                            <meta itemprop="position" content="3">
                        </li>
                    </ol>
                </nav>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

                    <!-- Основная статья -->
                    <article class="lg:col-span-8" itemscope itemtype="https://schema.org/BlogPosting">

                        <meta itemprop="datePublished" content="{$_modx->resource.publishedon | date : \'c\'}">
                        <meta itemprop="dateModified" content="{$_modx->resource.editedon | date : \'c\'}">
                        <meta itemprop="articleSection" content="{$blog_category ?: \'Блог о ландшафтном дизайне\'}">

                        <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4">
                            <div class="flex flex-wrap items-center gap-3 text-xs text-gray-500">
                                {if $blog_category}
                                    <span itemprop="articleSection" class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-gray-100 text-gray-800 font-semibold">
                                        {$blog_category}
                                    </span>
                                {/if}
                                <span class="inline-flex items-center gap-2">
                                    <i class="fa-regular fa-calendar"></i>
                                    <time itemprop="datePublished" datetime="{$_modx->resource.publishedon | date : \'c\'}">
                                        {$_modx->resource.publishedon | date : \'d.m.Y\'}
                                    </time>
                                </span>
                                <span class="inline-flex items-center gap-2" title="Дата обновления статьи">
                                    <i class="fa-solid fa-rotate"></i>
                                    <span>Обновлено: <time itemprop="dateModified" datetime="{$_modx->resource.editedon | date : \'c\'}">{$_modx->resource.editedon | date : \'d.m.Y\'}</time></span>
                                </span>
                                <span class="inline-flex items-center gap-2">
                                    <i class="fa-regular fa-clock"></i>
                                    <span id="read-time">Читать ~5 мин</span>
                                </span>
                            </div>

                            <div class="flex flex-wrap justify-start sm:justify-end gap-x-3 gap-y-1 text-[12px] font-bold text-blue-700">
                                <!-- Можно сделать динамическими позже, пока статично как в оригинале -->
                                <a rel="tag" class="hover:text-blue-800 text-green-800 transition" href="https://domozmsk.ru/blogs">#ландшафт</a>
                                <a rel="tag" class="hover:text-blue-800 text-green-800 transition" href="https://domozmsk.ru/blogs">#озеленение</a>
                                <a rel="tag" class="hover:text-blue-800 text-green-800 transition" href="https://domozmsk.ru/blogs">#дизайн</a>
                                <a rel="tag" class="hover:text-blue-800 text-green-800 transition" href="https://domozmsk.ru/blogs">#подмосковье</a>
                                <a rel="tag" class="hover:text-blue-800 text-green-800 transition" href="https://domozmsk.ru/blogs">#москва</a>
                            </div>
                        </div>

                        <h1 itemprop="headline" class="text-start mt-4 text-[32px] leading-[38px] md:text-[40px] md:leading-[46px] font-extrabold text-[#2a2e3b]">
                            {$_modx->resource.pagetitle}
                        </h1>

                        <p itemprop="description" class="mt-3 text-[15px] leading-[22px] text-[#7a7f8c] max-w-3xl">
                            {$_modx->resource.description}
                        </p>

                        <div class="mt-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                            <div class="flex items-center gap-3" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                <meta itemprop="name" content="{$blog_author ?: \'ДОМ ОЗ\'}">
                                <meta itemprop="jobTitle" content="Эксперт по ландшафтному дизайну">
                                <div class="w-10 h-10 rounded-full bg-[#558255] text-white flex items-center justify-center font-extrabold">ДО</div>
                                <div>
                                    <div class="text-sm font-extrabold text-[#2a2e3b]">{$blog_author ?: \'ДОМ ОЗ\'} — эксперт, Москва и МО</div>
                                    <div class="text-xs text-[#7a7f8c]">Ландшафтный дизайн • 120+ проектов в Подмосковье</div>
                                </div>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-3">
                                <a href="tel:{\'phone\'|config}" class="inline-flex items-center justify-center px-6 py-3 rounded-lg bg-[#558255] text-white font-semibold hover:bg-gray-900 transition">
                                    Получить расчёт
                                </a>
                                <a href="tel:{\'phone\'|config}" class="inline-flex items-center justify-center px-6 py-3 rounded-lg bg-white border border-gray-300 text-gray-900 font-semibold hover:bg-gray-50 transition">
                                    Позвонить
                                </a>
                            </div>
                        </div>

                        {if $_modx->resource.introtext && $_modx->resource.introtext != $_modx->resource.description}
                        <div class="tldr mt-6" itemprop="abstract">
                            <strong>Коротко</strong>
                            <p>{$_modx->resource.introtext}</p>
                        </div>
                        {/if}

                        {if $blog_image}
                        <div itemprop="image" itemscope itemtype="https://schema.org/ImageObject" class="mt-6 rounded-2xl overflow-hidden border border-gray-200 bg-gray-50">
                            <meta itemprop="width" content="1400">
                            <meta itemprop="height" content="420">
                            <img loading="eager" fetchpriority="high" decoding="async" src="{$blog_image | phpthumbon : \'w=1400&h=420&zc=1\'}" 
                                 alt="{$_modx->resource.pagetitle} — фото к статье блога Дом Оз" 
                                 class="w-full h-[260px] md:h-[420px] object-cover" width="1400" height="420">
                        </div>
                        {/if}

                        <!-- Оглавление статьи (собирается автоматически из H2 текста) -->
                        <nav id="toc" aria-label="Содержание статьи" class="hidden mt-6 rounded-2xl border border-[#e6e7ee] bg-[#f8faf8] p-5">
                            <h2 class="font-extrabold text-[#2a2e3b] text-base">Содержание статьи</h2>
                            <ol id="toc-list" class="mt-3 space-y-2 text-sm text-gray-700 list-decimal pl-5"></ol>
                        </nav>

                        <!-- Контент статьи -->
                        <div class="article-body mt-8">
                            {$_modx->resource.content}
                        </div>

                        <!-- Об авторе (E-E-A-T) -->
                        <section class="mt-10 rounded-2xl border border-[#e6e7ee] bg-white p-6 md:p-8 flex flex-col sm:flex-row gap-5 items-start">
                            <div class="w-14 h-14 shrink-0 rounded-full bg-[#558255] text-white flex items-center justify-center font-extrabold text-lg">ДО</div>
                            <div>
                                <h2 class="text-lg font-extrabold text-[#2a2e3b]">Об авторе: {$blog_author ?: \'Дом Оз\'}</h2>
                                <p class="mt-2 text-sm leading-6 text-gray-600">Эксперт по ландшафтному дизайну в Москве и Московской области. Проектируем и реализуем участки под ключ: от эскиза и сметы до благоустройства и ухода. <a class="font-bold text-[#558255] hover:underline" href="https://domozmsk.ru/history-company/nasha-komanda">Наша команда</a>.</p>
                            </div>
                        </section>

                        <!-- Экспертный CTA-блок (E-E-A-T + GEO, общий для всех статей) -->
                        <section class="mt-10 rounded-2xl border border-[#e6e7ee] bg-[#f8faf8] p-6 md:p-8">
                            <h2 class="text-xl md:text-2xl font-extrabold text-[#2a2e3b]">Нужен ландшафтный дизайн в Москве и Подмосковье?</h2>
                            <p class="mt-3 text-[15px] leading-[22px] text-gray-600">Услуги компании «Дом Оз» — проектирование и реализация участков под ключ в Москве и Московской области: более 120 проектов и проверенные отзывы клиентов. Смета и стоимость работ за 1 день, этапы и сроки фиксируем в договоре, выезд инженера по МО бесплатно, гарантия до 5 лет. Чтобы заказать услуги, оставьте заявку — рассчитаем цену вашего участка в Подмосковье.</p>
                            <div class="mt-5 flex flex-col sm:flex-row gap-3">
                                <a href="https://domozmsk.ru/#kviz" class="inline-flex items-center justify-center px-6 py-3 rounded-lg bg-[#558255] text-white font-semibold hover:bg-gray-900 transition">
                                    Рассчитать стоимость
                                </a>
                                <a href="tel:{\'phone\'|config}" class="inline-flex items-center justify-center px-6 py-3 rounded-lg bg-white border border-gray-300 text-gray-900 font-semibold hover:bg-gray-50 transition">
                                    Позвонить
                                </a>
                            </div>
                        </section>

                        <!-- Мини-FAQ о заказе (общий для всех статей, усиливает коммерческие фразы) -->
                        <section class="mt-8" itemscope itemtype="https://schema.org/FAQPage">
                            <h2 class="text-xl md:text-2xl font-extrabold text-[#2a2e3b]">Частые вопросы о заказе услуг в Подмосковье</h2>
                            <div class="mt-4 space-y-3">
                                <details class="faq-item rounded-2xl border border-[#e6e7ee] bg-white px-5 py-4" itemprop="mainEntity" itemscope itemtype="https://schema.org/Question">
                                    <summary class="cursor-pointer text-[15px] font-bold text-[#2a2e3b]" itemprop="name">Сколько стоит выезд инженера на участок в Подмосковье?</summary>
                                    <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
                                        <p class="mt-2 text-sm leading-6 text-gray-600" itemprop="text">Выезд по Москве и Московской области бесплатный. Инженер оценит участок, зафиксирует стоимость работ в смете и предложит этапы реализации проекта.</p>
                                    </div>
                                </details>
                                <details class="faq-item rounded-2xl border border-[#e6e7ee] bg-white px-5 py-4" itemprop="mainEntity" itemscope itemtype="https://schema.org/Question">
                                    <summary class="cursor-pointer text-[15px] font-bold text-[#2a2e3b]" itemprop="name">Какая гарантия на ландшафтные работы в Москве и МО?</summary>
                                    <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
                                        <p class="mt-2 text-sm leading-6 text-gray-600" itemprop="text">Даем гарантию на работы до 5 лет, все обязательства фиксируем в договоре. Цену сметы не меняем в процессе реализации.</p>
                                    </div>
                                </details>
                                <details class="faq-item rounded-2xl border border-[#e6e7ee] bg-white px-5 py-4" itemprop="mainEntity" itemscope itemtype="https://schema.org/Question">
                                    <summary class="cursor-pointer text-[15px] font-bold text-[#2a2e3b]" itemprop="name">Где посмотреть отзывы и реализованные проекты?</summary>
                                    <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
                                        <p class="mt-2 text-sm leading-6 text-gray-600" itemprop="text">Более 120 проектов участков в Москве и Подмосковье и проверенные отзывы клиентов — оставьте заявку, и мы пришлем подборку работ и точную цену под ваш участок.</p>
                                    </div>
                                </details>
                            </div>
                        </section>

                    </article>

                    <!-- Сайдбар -->
                    <aside class="mb-[7vw] lg:mb-0 lg:col-span-4 lg:sticky lg:top-24 h-max space-y-4">
                        <div class="bg-white rounded-2xl border border-[#e6e7ee] shadow-[0_2px_10px_rgba(0,0,0,0.06)] overflow-hidden">
                            <div class="px-4 py-3 bg-[#f2f3f8] border-b border-[#e6e7ee]">
                                <h2 class="font-extrabold text-[#2a2e3b] text-base">Читайте также</h2>
                            </div>
                            <div class="p-4 space-y-3">
                                {\'pdoResources\' | snippet : [
                                    \'parents\' => 59,
                                    \'tpl\' => \'blog-related-item\',
                                    \'limit\' => 4,
                                    \'where\' => [\'id:!=\' => $_modx->resource.id],
                                    \'sortby\' => \'publishedon\',
                                    \'sortdir\' => \'DESC\',
                                    \'includeTVs\' => \'blog_image,blog_category\',
                                    \'tvPrefix\' => \'\'
                                ]}
                                <a href="https://domozmsk.ru/blogs" class="inline-flex items-center gap-2 text-sm font-bold text-[#558255] hover:text-gray-900 transition pt-1">
                                    Все статьи блога о ландшафтном дизайне
                                    <span aria-hidden="true">→</span>
                                </a>
                            </div>
                        </div>

                        <nav aria-label="Услуги Дом Оз в Москве и Подмосковье" class="bg-white rounded-2xl border border-[#e6e7ee] shadow-[0_2px_10px_rgba(0,0,0,0.06)] overflow-hidden">
                            <div class="px-4 py-3 bg-[#f2f3f8] border-b border-[#e6e7ee]">
                                <h2 class="font-extrabold text-[#2a2e3b] text-base">Услуги в Москве и Подмосковье</h2>
                            </div>
                            <ul class="p-4 space-y-2 text-sm font-semibold">
                                <li><a class="text-gray-700 hover:text-[#558255] transition" href="https://domozmsk.ru/uslugi/landscape-design-project/">Ландшафтное проектирование в МО</a></li>
                                <li><a class="text-gray-700 hover:text-[#558255] transition" href="https://domozmsk.ru/uslugi/moschenie/">Мощение дорожек в Подмосковье</a></li>
                                <li><a class="text-gray-700 hover:text-[#558255] transition" href="https://domozmsk.ru/uslugi/gazon/">Газон под ключ в Москве</a></li>
                                <li><a class="text-gray-700 hover:text-[#558255] transition" href="https://domozmsk.ru/uslugi/drainage">Дренаж участка в Московской области</a></li>
                                <li><a class="text-gray-700 hover:text-[#558255] transition" href="https://domozmsk.ru/uslugi/avtopoliv/">Автополив в Подмосковье</a></li>
                                <li><a class="text-gray-700 hover:text-[#558255] transition" href="https://domozmsk.ru/uslugi/backlight-design/">Ландшафтное освещение в МО</a></li>
                                <li><a class="text-gray-700 hover:text-[#558255] transition" href="https://domozmsk.ru/uslugi/design-improvement-and-landscaping/">Благоустройство и озеленение в Подмосковье</a></li>
                            </ul>
                        </nav>

                        <div class="rounded-2xl bg-gradient-to-br from-[#558255] to-green-900 p-5 text-white overflow-hidden">
                            <h2 class="text-white text-lg font-extrabold">Получите расчёт стоимости работ в Москве и МО</h2>
                            <div class="mt-2 text-sm text-blue-100">Ответим за 5 минут • Подскажем цену участка • Бесплатно • Без обязательств</div>
                            <a href="https://domozmsk.ru/#kviz" class="mt-4 inline-flex items-center justify-center w-full px-6 py-3 rounded-lg bg-white text-green-800 font-extrabold hover:bg-blue-50 transition">
                                Перейти в калькулятор
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
    </main>

    {include \'footer\'}
    {include \'modal\'}
    {include \'social\'}

    <!-- Аналитика: -->
    [[$yandex.metrika]]

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="/assets/bibliotek/jquery/jqwery.js"></script>
    <script src="/assets/bibliotek/jquery/jquery.maskedinput.min.js"></script>
    <script src="/assets/js/script.js?v={$_modx->config.cache_version}"></script>

    {ignore}
    <script>
    document.addEventListener(\'DOMContentLoaded\', function () {
        var body = document.querySelector(\'.article-body\');
        var toc = document.getElementById(\'toc\');
        var list = document.getElementById(\'toc-list\');
        if (!body || !toc || !list) return;
        var heads = body.querySelectorAll(\'h2\');
        if (heads.length < 2) return;
        heads.forEach(function (h, i) {
            if (!h.id) h.id = \'art-\' + (i + 1);
            var li = document.createElement(\'li\');
            var a = document.createElement(\'a\');
            a.href = \'#\' + h.id;
            a.textContent = h.textContent.trim();
            a.className = \'hover:text-green-800 transition\';
            li.appendChild(a);
            list.appendChild(li);
        });
        toc.classList.remove(\'hidden\');
    });
    (function () {
        var b = document.querySelector(\'.article-body\');
        var rt = document.getElementById(\'read-time\');
        if (b && rt) {
            var words = b.textContent.trim().split(/\\s+/).length;
            rt.textContent = \'Читать ~\' + Math.max(1, Math.round(words / 150)) + \' мин\';
        }
    })();
    (function () {
        var bar = document.getElementById(\'read-progress\');
        var art = document.querySelector(\'.article-body\');
        if (!bar || !art) return;
        function onScroll() {
            var r = art.getBoundingClientRect();
            var total = r.height - window.innerHeight;
            var done = Math.min(Math.max(-r.top, 0), Math.max(total, 1));
            bar.style.width = (total > 0 ? (done / total) * 100 : 0) + \'%\';
        }
        document.addEventListener(\'scroll\', onScroll, {passive: true});
        onScroll();
    })();
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