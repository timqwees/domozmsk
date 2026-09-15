<?php  return array (
  'id' => 24,
  'source' => 1,
  'property_preprocess' => 0,
  'name' => 'blogs-head',
  'description' => '',
  'editor_type' => 0,
  'category' => 26,
  'cache_type' => 0,
  'snippet' => '    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="theme-color" content="#ffffff">
    
    <base href="{$_modx->config.site_url}">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="referrer" content="origin-when-crossorigin">
    <meta name="content-language" content="ru">

    <title>{if !empty($_modx->resource.longtitle)}{$_modx->resource.longtitle |
        stripTags}{else}{$_modx->resource.pagetitle
        | stripTags}{/if} | Dom OZ</title>
    <meta name="description"
        content="{if !empty($_modx->resource.description)}{$_modx->resource.description | stripTags | truncate:155:\'…\'}{else}{\'seoPro.description\' | placeholder | stripTags | truncate:155:\'…\'}{/if}"
        lang="ru">
    <meta name="keywords" content="{\'seoPro.keywords\' | placeholder}" lang="ru">
    <meta name="author" content="DOM OZ — ландшафтный дизайн Москва">
    <meta name="robots" content="{if $_modx->resource.published}index,follow{else}noindex,nofollow{/if}">

    <link rel="canonical" href="https://domozmsk.ru/{$_modx->resource.uri}">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Блоги | ДОМ ОЗ — Ландшафтный дизайн и озеленение">
    <meta property="og:description" content="Полезные статьи о ландшафтном дизайне, озеленении, уходе за участком, дренаже и благоустройстве территории от профессионалов ДОМ ОЗ">
    <meta property="og:url" content="{$_modx->makeUrl($_modx->resource.id, \'\', \'\', \'full\')}">
    <meta property="og:image" content="assets/img/black.jpg">
    <meta property="og:image:width" content="1400">
    <meta property="og:image:height" content="900">
    <meta property="og:image:alt" content="Блоги | ДОМ ОЗ — Ландшафтный дизайн и озеленение">
    <meta property="og:site_name" content="ДОМ ОЗ — Ландшафтный дизайн и озеленение">
    <meta property="og:locale" content="ru_RU">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Блог | ДОМ ОЗ — Ландшафтный дизайн и озеленение">
    <meta name="twitter:description" content="Полезные статьи о ландшафтном дизайне, озеленении, уходе за участком, дренаже и благоустройстве территории от профессионалов ДОМ ОЗ">
    <meta name="twitter:image" content="assets/img/black.jpg">
    
    [[$schemaArticle]]
    [[$schemaOrganization]]

    <script src="https://cdn.tailwindcss.com" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" media="print" onload="this.media=\'all\'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"></noscript>',
  'locked' => 0,
  'properties' => 'a:0:{}',
  'static' => 0,
  'static_file' => '',
  'content' => '    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="theme-color" content="#ffffff">
    
    <base href="{$_modx->config.site_url}">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="referrer" content="origin-when-crossorigin">
    <meta name="content-language" content="ru">

    <title>{if !empty($_modx->resource.longtitle)}{$_modx->resource.longtitle |
        stripTags}{else}{$_modx->resource.pagetitle
        | stripTags}{/if} | Dom OZ</title>
    <meta name="description"
        content="{if !empty($_modx->resource.description)}{$_modx->resource.description | stripTags | truncate:155:\'…\'}{else}{\'seoPro.description\' | placeholder | stripTags | truncate:155:\'…\'}{/if}"
        lang="ru">
    <meta name="keywords" content="{\'seoPro.keywords\' | placeholder}" lang="ru">
    <meta name="author" content="DOM OZ — ландшафтный дизайн Москва">
    <meta name="robots" content="{if $_modx->resource.published}index,follow{else}noindex,nofollow{/if}">

    <link rel="canonical" href="https://domozmsk.ru/{$_modx->resource.uri}">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Блоги | ДОМ ОЗ — Ландшафтный дизайн и озеленение">
    <meta property="og:description" content="Полезные статьи о ландшафтном дизайне, озеленении, уходе за участком, дренаже и благоустройстве территории от профессионалов ДОМ ОЗ">
    <meta property="og:url" content="{$_modx->makeUrl($_modx->resource.id, \'\', \'\', \'full\')}">
    <meta property="og:image" content="assets/img/black.jpg">
    <meta property="og:image:width" content="1400">
    <meta property="og:image:height" content="900">
    <meta property="og:image:alt" content="Блоги | ДОМ ОЗ — Ландшафтный дизайн и озеленение">
    <meta property="og:site_name" content="ДОМ ОЗ — Ландшафтный дизайн и озеленение">
    <meta property="og:locale" content="ru_RU">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Блог | ДОМ ОЗ — Ландшафтный дизайн и озеленение">
    <meta name="twitter:description" content="Полезные статьи о ландшафтном дизайне, озеленении, уходе за участком, дренаже и благоустройстве территории от профессионалов ДОМ ОЗ">
    <meta name="twitter:image" content="assets/img/black.jpg">
    
    [[$schemaArticle]]
    [[$schemaOrganization]]

    <script src="https://cdn.tailwindcss.com" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" media="print" onload="this.media=\'all\'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"></noscript>',
);