<?php  return array (
  'id' => 6,
  'source' => 1,
  'property_preprocess' => 0,
  'name' => 'meta',
  'description' => '',
  'editor_type' => 0,
  'category' => 0,
  'cache_type' => 0,
  'snippet' => '<base href="[[++site_url]]">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">
<meta name="theme-color" content="#ffffff">
<meta name="format-detection" content="telephone=no">
<meta name="referrer" content="strict-origin-when-cross-origin">
<meta http-equiv="Permissions-Policy" content="interest-cohort=()">
<meta name="content-language" content="ru">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">

<!-- === SEO BASE (Надежный синтаксис MODX с fallback) === -->
<title>[[*pagetitle:default=`[[*longtitle]]`]] | ДОМ ОЗ — ландшафтный дизайн и озеленение</title>
<meta name="description" content="[[*description:default=`[[*introtext]]`:default=`Профессиональный ландшафтный дизайн и озеленение в Москве и МО`]]">
<meta name="keywords" content="[[*keywords]]">
<meta name="author" content="[[*author_name:default=`Команда Дом Оз`]]">
<meta name="citation_title" content="[[*pagetitle]]">
<meta name="citation_author" content="[[*author_name:default=`Команда Дом Оз`]]">
<meta name="citation_publisher" content="ДОМ ОЗ">
<meta name="citation_language" content="ru">
<meta name="citation_publication_date" content="[[*publishedon:date=`%Y/%m/%d`]]">
<link rel="author" href="https://domozmsk.ru/history-company/nasha-komanda">
<meta name="publisher" content="Дом ОЗ">
<meta name="geo.region" content="RU-MOW">
<meta name="geo.region" content="RU-MOS">
<meta name="geo.placename" content="Москва">
<meta name="geo.position" content="55.7558;37.6173">
<meta name="ICBM" content="55.7558, 37.6173">
<link rel="canonical" href="[[~[[*id]]? &scheme=`full`]]">

<!-- === OPEN GRAPH === -->
<meta property="og:locale" content="ru_RU">
<meta property="og:site_name" content="ДОМ ОЗ">
<meta property="og:type" content="[[*id:is=`1`:then=`website`:else=`article`]]">
<meta property="og:url" content="[[~[[*id]]? &scheme=`full`]]">
<meta property="og:title" content="[[*pagetitle:default=`[[*longtitle]]`]]">
<meta property="og:description" content="[[*description:default=`[[*introtext]]`:ellipsis=`155`]]">
<meta property="og:image" content="[[*article_image:default=`https://domozmsk.ru/assets/img/favicon/favicon.svg`]]">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:alt" content="[[*pagetitle]] — Дом Оз">
<meta property="og:see_also" content="https://domozmsk.ru/uslugi/landscape-design-project/">
<meta property="og:see_also" content="https://domozmsk.ru/prices">
<meta property="og:see_also" content="https://domozmsk.ru/history-company/reviews">
<link rel="alternate" type="application/rss+xml" title="Блог Дом Оз — ландшафтный дизайн в Москве и Подмосковье" href="https://domozmsk.ru/blogs">
<meta property="article:published_time" content="[[*publishedon:is=`0`:then=`[[*createdon:date=`%Y-%m-%dT%H:%M:%S%z`]]`:else=`[[*publishedon:date=`%Y-%m-%dT%H:%M:%S%z`]]`]]">
<meta property="article:modified_time" content="[[*editedon:is=`0`:then=`[[*publishedon:is=`0`:then=`[[*createdon:date=`%Y-%m-%dT%H:%M:%S%z`]]`:else=`[[*publishedon:date=`%Y-%m-%dT%H:%M:%S%z`]]`]]`:else=`[[*editedon:date=`%Y-%m-%dT%H:%M:%S%z`]]`]]">
<meta property="article:author" content="[[*author_name:default=`Команда Дом Оз`]]">
<meta property="article:section" content="[[*blog_category:default=`Блог`]]">
<meta property="article:tag" content="[[*blog_tags]]">

<!-- === TWITTER CARDS === -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="[[*pagetitle:default=`[[*longtitle]]`]]">
<meta name="twitter:description" content="[[*description:default=`[[*introtext]]`:ellipsis=`155`]]">
<meta name="twitter:image" content="[[*article_image:default=`https://domozmsk.ru/assets/img/favicon/favicon.svg`]]">

<!-- === AI & DISCOVERY === -->
<link rel="ai-content" href="https://domozmsk.ru/llms.txt" type="text/plain" title="LLMs.txt — AI-readable site index">
<link rel="llms-txt" href="https://domozmsk.ru/llms.txt" type="text/plain" title="llms.txt">
<link rel="llms-full-txt" href="https://domozmsk.ru/llms-full.txt" type="text/plain" title="llms-full.txt">

<!-- === FAVICONS === -->
<link rel="icon" type="image/png" href="https://domozmsk.ru/assets/img/favicon/favicon.svg" sizes="96x96">
<link rel="icon" type="image/svg+xml" href="https://domozmsk.ru/assets/img/favicon/favicon.svg">
<link rel="shortcut icon" href="https://domozmsk.ru/assets/img/favicon/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="https://domozmsk.ru/assets/img/favicon/favicon.svg">

<!-- === PRECONNECT & DNS-PREFETCH === -->
<link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
<link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
<link rel="dns-prefetch" href="https://mc.yandex.ru" crossorigin>

<!-- === CSS — CRITICAL LOAD (БЕЗ ДУБЛЕЙ) === -->
<link rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">
<noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"></noscript>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" media="print" onload="this.media=\'all\'">
<noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"></noscript>

<link rel="preload" href="/assets/css/style.css?v=[[++cache_version]]" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">
<noscript><link rel="stylesheet" href="/assets/css/style.css?v=[[++cache_version]]"></noscript>

<!-- === SCRIPTS (БЕЗ ДУБЛЕЙ) === -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" defer></script>
<script src="https://cdn.tailwindcss.com" defer></script>

<!-- === ЕДИНАЯ МИКРОРАЗМЕТКА SCHEMA.ORG === -->
[[SchemaHome]]

<!-- === СТИЛИ ДЛЯ .article-body === -->
<!-- Стили для .article-body (полностью из оригинала) -->
<style>
/* === БАЗОВЫЕ СТИЛИ СТАТЬИ === */
.article-body { font-size: 16px; line-height: 1.7; color: #444; }
.article-body>section { margin: 32px 0; }
.article-body>section>h2 { font-size: 24px; margin: 0 0 16px 0; color: #111; font-weight: 700; }
.article-body>section>h3 { font-size: 20px; margin: 24px 0 12px 0; color: #222; font-weight: 600; }
.article-body>section>p { font-size: 16px; line-height: 1.7; color: #444; margin: 0 0 16px 0; }
.article-body>section>p:last-child { margin-bottom: 0; }
.article-body>section>ul,
.article-body>section>ol { margin: 0 0 16px 0; padding-left: 24px; }
.article-body>section li { margin: 8px 0; }
.article-body a { color: #2563eb; text-decoration: none; }
.article-body a:hover { text-decoration: underline; }

/* === TL;DR — короткий ответ для читателя и нейропоиска === */
.tldr { background: #f0fdf4; border: 2px solid #bbf7d0; border-radius: 16px; padding: 20px 24px; margin: 0 0 24px 0; }
.tldr>strong:first-child, .tldr>b:first-child { color: #166534; display: block; margin-bottom: 8px; font-size: 15px; text-transform: uppercase; letter-spacing: .05em; }
.tldr p { margin: 0; font-size: 16px; line-height: 1.7; color: #14532d; }

/* === СТРУКТУРА СТАТЬИ === */
[data-type="start"] { font-size: 18px; line-height: 1.7; color: #555; margin: 0 0 24px 0; }
[data-type="list"] { background: #f8f9fa; border-radius: 12px; padding: 20px 24px; margin: 24px 0; }
[data-type="list"] h2 { font-size: 18px; margin: 0 0 12px 0; color: #111; }
[data-type="list"] ul { margin: 0; padding-left: 20px;counter-reset: listItem; }
[data-type="list"] li { margin: 8px 0; }
[data-type="list"] li::before { content: counter(listItem) ". ";counter-increment: listItem; margin: 8px 0; }
[data-type="list-body"] ul { margin: 0; padding-left: 20px; counter-reset: listItem; }
[data-type="list-body"] li { margin: 8px 0; list-style: none; counter-increment: listItem; position: relative; padding-left: 25px; }
[data-type="list-body"] li::before { content: counter(listItem) ". "; position: absolute; left: 0; font-weight: 600; }
[data-type="image"] { margin: 24px 0; }
[data-type="image"] img { width: 100%; object-fit: cover; border-radius: 16px; display: block; }
[data-type="compare"] { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin: 24px 0; }
@media (max-width: 640px) { [data-type="compare"] { grid-template-columns: 1fr; } }
[data-type="compare"]>h2,
[data-type="compare"]>h3 { grid-column: 1 / -1; margin-bottom: 8px; }
[data-type="box"] { border-radius: 16px; padding: 20px; border: 2px solid; margin: 24px 0; }
[data-type="box"]>h3,
[data-type="box"]>h4 { margin: 0 0 12px 0; font-size: 16px; }
[data-type="box"]>p { margin: 0; font-size: 15px; }

/* Цвета box блоков */
[data-type="box"][data-color="green"] { background: #f0fdf4; border-color: #bbf7d0; }
[data-type="box"][data-color="green"]>h3,
[data-type="box"][data-color="green"]>h4 { color: #166534; }
[data-type="box"][data-color="green"]>p { color: #14532d; }
[data-type="box"][data-color="red"] { background: #fef2f2; border-color: #fecaca; }
[data-type="box"][data-color="red"]>h3,
[data-type="box"][data-color="red"]>h4 { color: #991b1b; }
[data-type="box"][data-color="red"]>p { color: #7f1d1d; }
[data-type="box"][data-color="blue"] { background: #eff6ff; border-color: #bfdbfe; }
[data-type="box"][data-color="blue"]>h3,
[data-type="box"][data-color="blue"]>h4 { color: #1e40af; }
[data-type="box"][data-color="blue"]>p { color: #1e3a8a; }
[data-type="box"][data-color="yellow"] { background: #fefce8; border-color: #fde047; }
[data-type="box"][data-color="yellow"]>h3,
[data-type="box"][data-color="yellow"]>h4 { color: #854d0e; }
[data-type="box"][data-color="yellow"]>p { color: #713f12; }
[data-type="box"][data-color="dark"] { background: #1f2937; border-color: #374151; }
[data-type="box"][data-color="dark"]>h3,
[data-type="box"][data-color="dark"]>h4 { color: #f9fafb; }
[data-type="box"][data-color="dark"]>p { color: #d1d5db; }
[data-type="box"][data-color="gray"] { background: #f3f4f6; border-color: #d1d5db; }
[data-type="box"][data-color="gray"]>h3,
[data-type="box"][data-color="gray"]>h4 { color: #374151; }
[data-type="box"][data-color="gray"]>p { color: #4b5563; }
[data-type="box"][data-color="muted"] { background: #f9fafb; border-color: #e5e7eb; }
[data-type="box"][data-color="muted"]>h3,
[data-type="box"][data-color="muted"]>h4 { color: #6b7280; }
[data-type="box"][data-color="muted"]>p { color: #9ca3af; }

/* compare — карточки с цветами */
[data-type="compare"]>article { border-radius: 16px; padding: 20px; border: 2px solid; }
[data-type="compare"]>article>h3 { margin: 0 0 12px 0; font-size: 16px; display: flex; align-items: center; gap: 8px; }
[data-type="compare"]>article>p { margin: 0; font-size: 15px; }
[data-type="compare"]>article[data-variant="good"] { background: #f0fdf4; border-color: #bbf7d0; }
[data-type="compare"]>article[data-variant="good"]>h3 { color: #166534; }
[data-type="compare"]>article[data-variant="good"]>p { color: #14532d; }
[data-type="compare"]>article[data-variant="bad"] { background: #fef2f2; border-color: #fecaca; }
[data-type="compare"]>article[data-variant="bad"]>h3 { color: #991b1b; }
[data-type="compare"]>article[data-variant="bad"]>p { color: #7f1d1d; }
blockquote, dd, dl, figure, h1, h2, h3, h4, h5, h6, hr, p, pre { text-align:start; }
html,body{ scroll-behavior: smooth; }
</style>',
  'locked' => 0,
  'properties' => 'a:0:{}',
  'static' => 0,
  'static_file' => '',
  'content' => '<base href="[[++site_url]]">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">
<meta name="theme-color" content="#ffffff">
<meta name="format-detection" content="telephone=no">
<meta name="referrer" content="strict-origin-when-cross-origin">
<meta http-equiv="Permissions-Policy" content="interest-cohort=()">
<meta name="content-language" content="ru">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">

<!-- === SEO BASE (Надежный синтаксис MODX с fallback) === -->
<title>[[*pagetitle:default=`[[*longtitle]]`]] | ДОМ ОЗ — ландшафтный дизайн и озеленение</title>
<meta name="description" content="[[*description:default=`[[*introtext]]`:default=`Профессиональный ландшафтный дизайн и озеленение в Москве и МО`]]">
<meta name="keywords" content="[[*keywords]]">
<meta name="author" content="[[*author_name:default=`Команда Дом Оз`]]">
<meta name="citation_title" content="[[*pagetitle]]">
<meta name="citation_author" content="[[*author_name:default=`Команда Дом Оз`]]">
<meta name="citation_publisher" content="ДОМ ОЗ">
<meta name="citation_language" content="ru">
<meta name="citation_publication_date" content="[[*publishedon:date=`%Y/%m/%d`]]">
<link rel="author" href="https://domozmsk.ru/history-company/nasha-komanda">
<meta name="publisher" content="Дом ОЗ">
<meta name="geo.region" content="RU-MOW">
<meta name="geo.region" content="RU-MOS">
<meta name="geo.placename" content="Москва">
<meta name="geo.position" content="55.7558;37.6173">
<meta name="ICBM" content="55.7558, 37.6173">
<link rel="canonical" href="[[~[[*id]]? &scheme=`full`]]">

<!-- === OPEN GRAPH === -->
<meta property="og:locale" content="ru_RU">
<meta property="og:site_name" content="ДОМ ОЗ">
<meta property="og:type" content="[[*id:is=`1`:then=`website`:else=`article`]]">
<meta property="og:url" content="[[~[[*id]]? &scheme=`full`]]">
<meta property="og:title" content="[[*pagetitle:default=`[[*longtitle]]`]]">
<meta property="og:description" content="[[*description:default=`[[*introtext]]`:ellipsis=`155`]]">
<meta property="og:image" content="[[*article_image:default=`https://domozmsk.ru/assets/img/favicon/favicon.svg`]]">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:alt" content="[[*pagetitle]] — Дом Оз">
<meta property="og:see_also" content="https://domozmsk.ru/uslugi/landscape-design-project/">
<meta property="og:see_also" content="https://domozmsk.ru/prices">
<meta property="og:see_also" content="https://domozmsk.ru/history-company/reviews">
<link rel="alternate" type="application/rss+xml" title="Блог Дом Оз — ландшафтный дизайн в Москве и Подмосковье" href="https://domozmsk.ru/blogs">
<meta property="article:published_time" content="[[*publishedon:is=`0`:then=`[[*createdon:date=`%Y-%m-%dT%H:%M:%S%z`]]`:else=`[[*publishedon:date=`%Y-%m-%dT%H:%M:%S%z`]]`]]">
<meta property="article:modified_time" content="[[*editedon:is=`0`:then=`[[*publishedon:is=`0`:then=`[[*createdon:date=`%Y-%m-%dT%H:%M:%S%z`]]`:else=`[[*publishedon:date=`%Y-%m-%dT%H:%M:%S%z`]]`]]`:else=`[[*editedon:date=`%Y-%m-%dT%H:%M:%S%z`]]`]]">
<meta property="article:author" content="[[*author_name:default=`Команда Дом Оз`]]">
<meta property="article:section" content="[[*blog_category:default=`Блог`]]">
<meta property="article:tag" content="[[*blog_tags]]">

<!-- === TWITTER CARDS === -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="[[*pagetitle:default=`[[*longtitle]]`]]">
<meta name="twitter:description" content="[[*description:default=`[[*introtext]]`:ellipsis=`155`]]">
<meta name="twitter:image" content="[[*article_image:default=`https://domozmsk.ru/assets/img/favicon/favicon.svg`]]">

<!-- === AI & DISCOVERY === -->
<link rel="ai-content" href="https://domozmsk.ru/llms.txt" type="text/plain" title="LLMs.txt — AI-readable site index">
<link rel="llms-txt" href="https://domozmsk.ru/llms.txt" type="text/plain" title="llms.txt">
<link rel="llms-full-txt" href="https://domozmsk.ru/llms-full.txt" type="text/plain" title="llms-full.txt">

<!-- === FAVICONS === -->
<link rel="icon" type="image/png" href="https://domozmsk.ru/assets/img/favicon/favicon.svg" sizes="96x96">
<link rel="icon" type="image/svg+xml" href="https://domozmsk.ru/assets/img/favicon/favicon.svg">
<link rel="shortcut icon" href="https://domozmsk.ru/assets/img/favicon/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="https://domozmsk.ru/assets/img/favicon/favicon.svg">

<!-- === PRECONNECT & DNS-PREFETCH === -->
<link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
<link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
<link rel="dns-prefetch" href="https://mc.yandex.ru" crossorigin>

<!-- === CSS — CRITICAL LOAD (БЕЗ ДУБЛЕЙ) === -->
<link rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">
<noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"></noscript>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" media="print" onload="this.media=\'all\'">
<noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"></noscript>

<link rel="preload" href="/assets/css/style.css?v=[[++cache_version]]" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">
<noscript><link rel="stylesheet" href="/assets/css/style.css?v=[[++cache_version]]"></noscript>

<!-- === SCRIPTS (БЕЗ ДУБЛЕЙ) === -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" defer></script>
<script src="https://cdn.tailwindcss.com" defer></script>

<!-- === ЕДИНАЯ МИКРОРАЗМЕТКА SCHEMA.ORG === -->
[[SchemaHome]]

<!-- === СТИЛИ ДЛЯ .article-body === -->
<!-- Стили для .article-body (полностью из оригинала) -->
<style>
/* === БАЗОВЫЕ СТИЛИ СТАТЬИ === */
.article-body { font-size: 16px; line-height: 1.7; color: #444; }
.article-body>section { margin: 32px 0; }
.article-body>section>h2 { font-size: 24px; margin: 0 0 16px 0; color: #111; font-weight: 700; }
.article-body>section>h3 { font-size: 20px; margin: 24px 0 12px 0; color: #222; font-weight: 600; }
.article-body>section>p { font-size: 16px; line-height: 1.7; color: #444; margin: 0 0 16px 0; }
.article-body>section>p:last-child { margin-bottom: 0; }
.article-body>section>ul,
.article-body>section>ol { margin: 0 0 16px 0; padding-left: 24px; }
.article-body>section li { margin: 8px 0; }
.article-body a { color: #2563eb; text-decoration: none; }
.article-body a:hover { text-decoration: underline; }

/* === TL;DR — короткий ответ для читателя и нейропоиска === */
.tldr { background: #f0fdf4; border: 2px solid #bbf7d0; border-radius: 16px; padding: 20px 24px; margin: 0 0 24px 0; }
.tldr>strong:first-child, .tldr>b:first-child { color: #166534; display: block; margin-bottom: 8px; font-size: 15px; text-transform: uppercase; letter-spacing: .05em; }
.tldr p { margin: 0; font-size: 16px; line-height: 1.7; color: #14532d; }

/* === СТРУКТУРА СТАТЬИ === */
[data-type="start"] { font-size: 18px; line-height: 1.7; color: #555; margin: 0 0 24px 0; }
[data-type="list"] { background: #f8f9fa; border-radius: 12px; padding: 20px 24px; margin: 24px 0; }
[data-type="list"] h2 { font-size: 18px; margin: 0 0 12px 0; color: #111; }
[data-type="list"] ul { margin: 0; padding-left: 20px;counter-reset: listItem; }
[data-type="list"] li { margin: 8px 0; }
[data-type="list"] li::before { content: counter(listItem) ". ";counter-increment: listItem; margin: 8px 0; }
[data-type="list-body"] ul { margin: 0; padding-left: 20px; counter-reset: listItem; }
[data-type="list-body"] li { margin: 8px 0; list-style: none; counter-increment: listItem; position: relative; padding-left: 25px; }
[data-type="list-body"] li::before { content: counter(listItem) ". "; position: absolute; left: 0; font-weight: 600; }
[data-type="image"] { margin: 24px 0; }
[data-type="image"] img { width: 100%; object-fit: cover; border-radius: 16px; display: block; }
[data-type="compare"] { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin: 24px 0; }
@media (max-width: 640px) { [data-type="compare"] { grid-template-columns: 1fr; } }
[data-type="compare"]>h2,
[data-type="compare"]>h3 { grid-column: 1 / -1; margin-bottom: 8px; }
[data-type="box"] { border-radius: 16px; padding: 20px; border: 2px solid; margin: 24px 0; }
[data-type="box"]>h3,
[data-type="box"]>h4 { margin: 0 0 12px 0; font-size: 16px; }
[data-type="box"]>p { margin: 0; font-size: 15px; }

/* Цвета box блоков */
[data-type="box"][data-color="green"] { background: #f0fdf4; border-color: #bbf7d0; }
[data-type="box"][data-color="green"]>h3,
[data-type="box"][data-color="green"]>h4 { color: #166534; }
[data-type="box"][data-color="green"]>p { color: #14532d; }
[data-type="box"][data-color="red"] { background: #fef2f2; border-color: #fecaca; }
[data-type="box"][data-color="red"]>h3,
[data-type="box"][data-color="red"]>h4 { color: #991b1b; }
[data-type="box"][data-color="red"]>p { color: #7f1d1d; }
[data-type="box"][data-color="blue"] { background: #eff6ff; border-color: #bfdbfe; }
[data-type="box"][data-color="blue"]>h3,
[data-type="box"][data-color="blue"]>h4 { color: #1e40af; }
[data-type="box"][data-color="blue"]>p { color: #1e3a8a; }
[data-type="box"][data-color="yellow"] { background: #fefce8; border-color: #fde047; }
[data-type="box"][data-color="yellow"]>h3,
[data-type="box"][data-color="yellow"]>h4 { color: #854d0e; }
[data-type="box"][data-color="yellow"]>p { color: #713f12; }
[data-type="box"][data-color="dark"] { background: #1f2937; border-color: #374151; }
[data-type="box"][data-color="dark"]>h3,
[data-type="box"][data-color="dark"]>h4 { color: #f9fafb; }
[data-type="box"][data-color="dark"]>p { color: #d1d5db; }
[data-type="box"][data-color="gray"] { background: #f3f4f6; border-color: #d1d5db; }
[data-type="box"][data-color="gray"]>h3,
[data-type="box"][data-color="gray"]>h4 { color: #374151; }
[data-type="box"][data-color="gray"]>p { color: #4b5563; }
[data-type="box"][data-color="muted"] { background: #f9fafb; border-color: #e5e7eb; }
[data-type="box"][data-color="muted"]>h3,
[data-type="box"][data-color="muted"]>h4 { color: #6b7280; }
[data-type="box"][data-color="muted"]>p { color: #9ca3af; }

/* compare — карточки с цветами */
[data-type="compare"]>article { border-radius: 16px; padding: 20px; border: 2px solid; }
[data-type="compare"]>article>h3 { margin: 0 0 12px 0; font-size: 16px; display: flex; align-items: center; gap: 8px; }
[data-type="compare"]>article>p { margin: 0; font-size: 15px; }
[data-type="compare"]>article[data-variant="good"] { background: #f0fdf4; border-color: #bbf7d0; }
[data-type="compare"]>article[data-variant="good"]>h3 { color: #166534; }
[data-type="compare"]>article[data-variant="good"]>p { color: #14532d; }
[data-type="compare"]>article[data-variant="bad"] { background: #fef2f2; border-color: #fecaca; }
[data-type="compare"]>article[data-variant="bad"]>h3 { color: #991b1b; }
[data-type="compare"]>article[data-variant="bad"]>p { color: #7f1d1d; }
blockquote, dd, dl, figure, h1, h2, h3, h4, h5, h6, hr, p, pre { text-align:start; }
html,body{ scroll-behavior: smooth; }
</style>',
);