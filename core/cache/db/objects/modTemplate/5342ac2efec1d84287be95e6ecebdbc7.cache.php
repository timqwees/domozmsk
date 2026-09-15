<?php  return array (
  'id' => 25,
  'source' => 1,
  'property_preprocess' => 0,
  'templatename' => 'Отзывы',
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
    
     <!-- Critical CSS with onload optimization -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" as="style"
        crossorigin="anonymous" onload="this.onload=null;this.rel=\'stylesheet\'">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
            crossorigin="anonymous">
    </noscript>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body { font-family: \'Inter\', sans-serif; background: #fff; color: #1a1a1a; }
        .section-title { position: relative; display: inline-block; }
        .section-title::after {
            content: \'\'; position: absolute; bottom: -8px; left: 50%; transform: translateX(-50%);
            width: 60px; height: 3px; background: linear-gradient(90deg, #558255, #d4a574); border-radius: 2px;
        }
        /* Review card hover */
        .review-card { transition: all 0.3s ease; }
        .review-card:hover { transform: translateY(-6px); box-shadow: 0 20px 40px rgba(0,0,0,0.1); }
        /* Quote icon */
        .quote-icon { position: absolute; top: 20px; right: 20px; opacity: 0.1; }
        /* Video card */
        .video-card { transition: all 0.3s ease; }
        .video-card:hover { transform: translateY(-6px); box-shadow: 0 20px 40px rgba(0,0,0,0.15); }
        .video-card:hover .video-play-icon { transform: scale(1.1); }
        .video-play-icon { transition: transform 0.3s ease; }
        /* Video container */
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            border-radius: 12px;
        }
        .video-container video {
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
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

    <!-- Review Schema (Aggregate + Individual) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "Услуги ландшафтного дизайна Дом Оз",
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "{$_modx->resource.reviews_rating_score|default:\'4.9\'}",
            "reviewCount": "{$_modx->resource.reviews_rating_count|default:\'48\'}",
            "bestRating": "5",
            "worstRating": "1"
        }
    }
    </script>
</head>

<body class="antialiased">

{include \'header\'}

<main itemprop="mainContentOfPage">

<!-- ====================================================================== -->
<!-- ? 1. HERO: Отзывы (Полный экран + доверие)                            -->
<!-- ====================================================================== -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-black">
    
    <!-- Фон (Прямая ссылка) -->
    {if $_modx->resource.reviews_hero_img}
        <img loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover opacity-50" src="{$_modx->resource.reviews_hero_img}" alt="Отзывы о Дом Оз">
    {/if}
    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/30 to-transparent"></div>

    <!-- Контент -->
    <div class="relative z-10 text-center text-white px-4 max-w-4xl mx-auto">
        <span class="inline-block px-5 py-2.5 bg-[#558255]/90 text-white text-sm font-bold rounded-full mb-8 backdrop-blur-sm border border-white/20">
            Социальное доказательство
        </span>
        <h1 class="text-4xl md:text-5xl lg:text-7xl font-extrabold leading-tight mb-8 text-white">
            {$_modx->resource.reviews_hero_title ?: \'Что говорят о нас клиенты\'}
        </h1>
        <p class="text-lg md:text-xl text-white/90 leading-relaxed max-w-3xl mx-auto">
            {$_modx->resource.reviews_hero_desc ?: \'Мы не просто выполняем работы — мы создаём отношения, основанные на доверии. Реальные истории реальных людей.\'}
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
<!-- ? 2. БЛОК РЕЙТИНГА (Доверие Яндекса)                                  -->
<!-- ====================================================================== -->
<section class="py-12 bg-[#f8faf8] border-b border-gray-200">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center justify-center gap-8 md:gap-16">
            
            <!-- Рейтинг -->
            <div class="flex items-center gap-4">
                <div class="flex text-[#d4a574] text-2xl">
                    ★★★★★
                </div>
                <div class="flex flex-col">
                    <span class="text-2xl font-bold text-[#1a1a1a]">{$_modx->resource.reviews_rating_score|default:\'4.9\'} <span class="text-gray-400 text-sm font-normal">/ 5.0</span></span>
                    <span class="text-sm text-gray-500">на основе {$_modx->resource.reviews_rating_count|default:\'48\'} отзывов</span>
                </div>
            </div>

            <!-- Источник -->
            <div class="h-8 w-px bg-gray-300 hidden md:block"></div>
            <div class="flex items-center gap-3">
                <a href="https://webmaster.yandex.ru/siteinfo/?site=https://domozmsk.ru"><img width="88" height="31" alt="" border="0" border-radius="8" src="https://yandex.ru/cycounter?https://domozmsk.ru&theme=light&lang=ru"/></a>
                <span class="font-medium text-[#1a1a1a]">{$_modx->resource.reviews_rating_source|default:\'Яндекс.Карты\'}</span>
            </div>

            <!-- Гарантия -->
            <div class="h-8 w-px bg-gray-300 hidden md:block"></div>
            <div class="flex items-center gap-3">
                <svg class="w-6 h-6 text-[#558255]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                <span class="font-medium text-[#1a1a1a]">Гарантия 5 лет</span>
            </div>

        </div>
    </div>
</section>

<!-- ====================================================================== -->
<!-- ? 3. СПИСОК ОТЗЫВОВ (Карточки)                                        -->
<!-- ====================================================================== -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-4">
        
        <div class="text-center mb-16">
            <span class="text-sm font-bold tracking-widest text-[#558255] uppercase mb-3 block">Реальные истории</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">Отзывы наших клиентов</h2>
        </div>
        
        
      
<!-- Текстовая версия отзывов для поисковых систем и пользователей без JS -->
        {set $reviewsText = $_modx->resource.reviews_text}
        {if $reviewsText}
        <div class="max-w-4xl mx-auto mt-12 space-y-6" aria-label="Отзывы клиентов в текстовом формате">
            {$reviewsText|raw}
        </div>
        {else}
        <div class="max-w-5xl mx-auto mt-12" aria-label="Отзывы клиентов в текстовом формате">
            <div class="grid md:grid-cols-2 gap-6">
                <article class="bg-[#f8faf8] rounded-2xl p-6 md:p-8">
                    <div class="flex items-center justify-between gap-4 mb-4">
                        <strong class="text-lg text-[#1a1a1a]">Алексей, Истринский район</strong>
                        <span class="text-[#d4a574]" aria-label="5 из 5">★★★★★</span>
                    </div>
                    <p class="text-gray-700 leading-relaxed">
                        Обратились в «Дом Оз» для благоустройства участка после строительства дома. 
                        Нужно было сделать дорожки, площадку и аккуратно связать все зоны участка между собой.
                        Понравилось, что сначала обсудили задачи и материалы, а затем последовательно выполнили работы.
                        Мощение получилось ровным и аккуратным, участок сразу стал выглядеть завершённым.
                    </p>
                </article>

                <article class="bg-[#f8faf8] rounded-2xl p-6 md:p-8">
                    <div class="flex items-center justify-between gap-4 mb-4">
                        <strong class="text-lg text-[#1a1a1a]">Марина, Одинцовский район</strong>
                        <span class="text-[#d4a574]" aria-label="5 из 5">★★★★★</span>
                    </div>
                    <p class="text-gray-700 leading-relaxed">
                        Заказывали благоустройство территории и мощение вокруг дома. Для нас было важно,
                        чтобы дорожки и площадки выглядели аккуратно и подходили к уже готовому дому.
                        Специалисты помогли определиться с решением, подготовили основание и выполнили укладку.
                        Отдельно отметили внимательное отношение к деталям и чистоту после завершения работ.
                    </p>
                </article>

                <article class="bg-[#f8faf8] rounded-2xl p-6 md:p-8">
                    <div class="flex items-center justify-between gap-4 mb-4">
                        <strong class="text-lg text-[#1a1a1a]">Сергей, Красногорск</strong>
                        <span class="text-[#d4a574]" aria-label="5 из 5">★★★★★</span>
                    </div>
                    <p class="text-gray-700 leading-relaxed">
                        Делали на участке въездную зону и пешеходные дорожки. Основной запрос был на практичное
                        покрытие, которое будет хорошо смотреться рядом с домом и садом. Работу организовали
                        поэтапно: подготовили территорию, сделали основание и уложили покрытие. Результатом довольны,
                        все основные зоны участка теперь удобно использовать в любую погоду.
                    </p>
                </article>

                <article class="bg-[#f8faf8] rounded-2xl p-6 md:p-8">
                    <div class="flex items-center justify-between gap-4 mb-4">
                        <strong class="text-lg text-[#1a1a1a]">Елена, Наро-Фоминский район</strong>
                        <span class="text-[#d4a574]" aria-label="5 из 5">★★★★★</span>
                    </div>
                    <p class="text-gray-700 leading-relaxed">
                        Обновляли старые дорожки на участке и хотели привести территорию к единому стилю.
                        Сначала обсудили варианты мощения и расположение дорожек, после чего приступили к подготовке
                        основания. Нам понравилось, что мастера внимательно отнеслись к уклонам, примыканиям
                        и геометрии покрытия. В итоге дорожки выглядят аккуратно и гармонично с озеленением.
                    </p>
                </article>

                <article class="bg-[#f8faf8] rounded-2xl p-6 md:p-8 md:col-span-2">
                    <div class="flex items-center justify-between gap-4 mb-4">
                        <strong class="text-lg text-[#1a1a1a]">Дмитрий, Москва</strong>
                        <span class="text-[#d4a574]" aria-label="5 из 5">★★★★★</span>
                    </div>
                    <p class="text-gray-700 leading-relaxed">
                        Заказывали комплексное благоустройство участка, в том числе мощение зоны перед домом.
                        Хотелось получить не просто отдельные дорожки, а цельный и удобный участок. 
                        Команда помогла согласовать расположение покрытий и выполнить работы в соответствии с проектом.
                        После завершения стало заметно удобнее пользоваться парковкой, входной зоной и дорожками по саду.
                    </p>
                </article>
            </div>

            <p class="text-center text-sm text-gray-500 mt-6">
                Текстовые отзывы приведены на странице в дополнение к виджету отзывов. 
                Средняя оценка — {$_modx->resource.reviews_rating_score|default:\'4.9\'} из 5 на основе
                {$_modx->resource.reviews_rating_count|default:\'48\'} отзывов.
            </p>
        </div>
        {/if}

<div style="display: flex; justify-content: center;margin-top: 20px;border-radius: 20px;">
    <iframe title="Виджет с отзывами «Карусель» от MyReviews" style="width: 100%; height: 100%; max-width: 1170px; border: none; outline: none; padding: 0; margin: 0" id="myReviews__block-widget">
    </iframe>
</div>


      
<script src="https://myreviews.dev/widget/dist/blockWidget.js" defer></script>
<script>
    (function (){
      var myReviewsInit = function () {
        new window.myReviews.BlockWidget({
        uuid: "71384fe2-8dd2-40ed-b58a-dd16223b7329",
        name: "g8374573",
        additionalFrame:"none",
        lang:"ru",
        widgetId: "1"
        }).init();

      };
    if (document.readyState === "loading") {
      document.addEventListener(\'DOMContentLoaded\', function () {
          myReviewsInit()
      })
    } else {
      myReviewsInit()
    }
    })()
</script>
  
    </div>
</section>

<!-- ====================================================================== -->
<!-- 4. ВИДЕО-ОТЗЫВЫ (ГАЛЕРЕЯ)                                           -->
<!-- ====================================================================== -->
{set $videos = json_decode($_modx->resource.reviews_videos, true)}
{if $videos}
<section class="py-24 bg-[#f8faf8] relative overflow-hidden">
    <!-- Декоративный фон -->
    <div class="absolute inset-0 opacity-30" style="background-image: radial-gradient(#558255 1px, transparent 1px); background-size: 30px 30px;"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        
        <div class="text-center mb-16">
            <span class="text-sm font-bold tracking-widest text-[#558255] uppercase mb-3 block">Видео отзывы</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a1a1a] section-title mx-auto">
                {$_modx->resource.reviews_video_title ?: \'Клиенты рассказывают о нас\'}
            </h2>
            {if $_modx->resource.reviews_video_desc}
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">{$_modx->resource.reviews_video_desc}</p>
            {/if}
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-8 max-w-7xl mx-auto justify-center items-center">
            {foreach $videos as $video}
            <div class="video-card bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100">
                <!-- Видео -->
                <div class="relative">
                    <div class="video-container">
                        {$video.embed}
                    </div>
                </div>
                
                <!-- Информация -->
                <div class="p-6">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 bg-[#558255] rounded-full flex items-center justify-center text-white font-bold">
                            <!-- {$video.author|substr:0:1}-->
                            <i class="fa fa-user text-white"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-[#1a1a1a]">{$video.author}</h4>
                            <div class="text-xs text-gray-500">{$video.date}</div>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600 leading-relaxed">{$video.text}</p>
                </div>
            </div>
            {/foreach}
        </div>
    </div>
</section>
{/if}

<!-- ====================================================================== -->
<!-- ФИНАЛЬНЫЙ CTA                                                    -->
<!-- ====================================================================== -->
<section class="py-24 bg-white text-white text-center relative overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#d4a574 1px, transparent 1px); background-size: 25px 25px;"></div>
    
    <div class="relative z-10 max-w-3xl mx-auto px-4">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold mb-6 text-[#778A6E]">
            {$_modx->resource.reviews_cta_title ?: \'Хотите такой же результат?\'}
        </h2>
        <p class="text-lg text-black/90 mb-10 max-w-2xl mx-auto">
            Оставьте заявку, и мы рассчитаем стоимость вашего участка бесплатно.
        </p>
        <button class="modal_window inline-block px-12 py-5 bg-[#558255] text-white rounded-xl font-bold text-lg hover:bg-[#3d5c3d] transition shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
            Рассчитать стоимость
        </button>
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