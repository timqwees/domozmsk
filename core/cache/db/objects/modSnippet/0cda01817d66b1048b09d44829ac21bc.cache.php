<?php  return array (
  0 => 
  array (
    'modSnippet_id' => '46',
    'modSnippet_source' => '1',
    'modSnippet_property_preprocess' => '0',
    'modSnippet_name' => 'autoMicrodata',
    'modSnippet_description' => '',
    'modSnippet_editor_type' => '0',
    'modSnippet_category' => '0',
    'modSnippet_cache_type' => '0',
    'modSnippet_snippet' => '/**
 * Сниппет autoMicrodata - полная микроразметка для SEO
 * Вызов: [[!autoMicrodata]]
 */

// ===== ЗАЩИТА ОТ ДУБЛИРОВАНИЯ =====
if (!empty($GLOBALS[\'autoMicrodata_loaded\'])) return \'\';
$GLOBALS[\'autoMicrodata_loaded\'] = true;

// ===== ПОЛУЧЕНИЕ ДАННЫХ =====
$resource = $modx->resource;
$siteUrl = \'https://domozmsk.ru\';

$pagetitle = $resource->get(\'pagetitle\');
$longtitle = $resource->get(\'longtitle\') ?: $pagetitle;
$description = strip_tags($resource->get(\'description\'));
$introtext = strip_tags($resource->get(\'introtext\'));
$uri = $resource->get(\'uri\');

// Исправляем URL — добавляем слэш если нужно
$fullUrl = $siteUrl . \'/\' . ltrim($uri, \'/\');

// Даты — проверяем что createdon > 0
$createdon = $resource->get(\'createdon\');
$editedon = $resource->get(\'editedon\');

$dateCreated = ($createdon && $createdon > 0) ? date(\'c\', $createdon) : null;
$dateModified = ($editedon && $editedon > 0) ? date(\'c\', $editedon) : $dateCreated;
$datePublished = $dateCreated;

// TV поля
$priceListJson = $resource->getTVValue(\'price_list\');
$faqJson = $resource->getTVValue(\'faq\');
$heroImg = $resource->getTVValue(\'baner_img\');

$priceList = json_decode($priceListJson, true) ?: [];
$faq = json_decode($faqJson, true) ?: [];

// ===== ИЗОБРАЖЕНИЕ (исправляем URL) =====
$imageUrl = $siteUrl . \'/assets/img/logo.png\'; // дефолтное
if ($heroImg) {
    $heroData = json_decode($heroImg, true);
    if (!empty($heroData[0][\'img\'])) {
        $imgPath = $heroData[0][\'img\'];
        // Если путь относительный — добавляем домен
        if (strpos($imgPath, \'http\') !== 0) {
            $imgPath = $siteUrl . \'/\' . ltrim($imgPath, \'/\');
        }
        // Кодируем URL (кириллица, пробелы)
        $imageUrl = preg_replace_callback(\'|(?:/(?:[^/?#]+/)*)([^?#]*)(\\?[^#]*|)|\', function($m) {
            return str_replace(
                array_map(\'rawurlencode\', array_merge(range(\'а\',\'я\'), range(\'А\',\'Я\'), [\'ё\',\'Ё\',\' \'])),
                array_merge(
                    array_map(function($c){ return rawurlencode($c); }, range(\'а\',\'я\')),
                    array_map(function($c){ return rawurlencode($c); }, range(\'А\',\'Я\')),
                    [\'%D1%91\',\'%D0%81\',\'%20\']
                ),
                $m[0]
            );
        }, $imgPath);
        // Проще: просто кодируем весь URL
        $parts = parse_url($imgPath);
        if ($parts) {
            $path = implode(\'/\', array_map(\'rawurlencode\', explode(\'/\', $parts[\'path\'])));
            $imageUrl = $parts[\'scheme\'] . \'://\' . $parts[\'host\'] . $path;
        }
    }
}

$output = \'\';

// ===== 1. ОСНОВНАЯ РАЗМЕТКА: Service =====
$offers = [];

if (!empty($priceList)) {
    foreach ($priceList as $section) {
        if (empty($section[\'items\']) || !is_array($section[\'items\'])) continue;
        
        foreach ($section[\'items\'] as $item) {
            if (empty($item[\'name\'])) continue;
            
            $priceStr = isset($item[\'price\']) ? $item[\'price\'] : \'\';
            $priceNum = preg_replace(\'/[^0-9.]/\', \'\', $priceStr);
            $unit = isset($item[\'unit\']) ? trim($item[\'unit\']) : \'\';
            
            if (empty($priceNum) || $priceNum == \'0\') continue;
            $priceFloat = floatval($priceNum);
            
            $offer = [
                \'@type\' => \'Offer\',
                \'itemOffered\' => [
                    \'@type\' => \'Service\',
                    \'name\' => $item[\'name\']
                ],
                \'priceCurrency\' => \'RUB\',
                \'availability\' => \'https://schema.org/InStock\',
                \'seller\' => [
                    \'@type\' => \'Organization\',
                    \'name\' => \'Дом Оз\'
                ]
            ];
            
            $offer[\'priceSpecification\'] = [
                \'@type\' => \'UnitPriceSpecification\',
                \'price\' => $priceFloat,
                \'priceCurrency\' => \'RUB\'
            ];
            
            if (!empty($unit)) {
                $offer[\'priceSpecification\'][\'unitText\'] = $unit;
                $offer[\'unitText\'] = $unit;
            }
            
            $offers[] = $offer;
        }
    }
}

// Основная структура Service
$serviceData = [
    \'@context\' => \'https://schema.org\',
    \'@type\' => \'Service\',
    \'name\' => $pagetitle,
    \'description\' => mb_substr($description ?: $introtext, 0, 500),
    \'url\' => $fullUrl,
    \'image\' => $imageUrl,
    \'provider\' => [
        \'@type\' => \'HomeAndConstructionBusiness\',
        \'name\' => \'Дом Оз\',
        \'url\' => $siteUrl,
        \'logo\' => $siteUrl . \'/assets/img/logo.png\',
        \'telephone\' => \'+7-985-920-77-00\',
        \'email\' => \'DOMOZ.77@yandex.ru\',
        \'address\' => [
            \'@type\' => \'PostalAddress\',
            \'streetAddress\' => \'Головинское шоссе, 5А\',
            \'addressLocality\' => \'Москва\',
            \'addressRegion\' => \'Московская область\',
            \'postalCode\' => \'125212\',
            \'addressCountry\' => \'RU\'
        ]
    ],
    \'areaServed\' => [
        [\'@type\' => \'City\', \'name\' => \'Москва\'],
        [\'@type\' => \'City\', \'name\' => \'Красногорск\'],
        [\'@type\' => \'City\', \'name\' => \'Одинцово\'],
        [\'@type\' => \'City\', \'name\' => \'Истра\'],
        [\'@type\' => \'City\', \'name\' => \'Химки\'],
        [\'@type\' => \'City\', \'name\' => \'Мытищи\'],
        [\'@type\' => \'AdministrativeArea\', \'name\' => \'Московская область\']
    ]
];

// Добавляем каталог офферов, если есть
if (!empty($offers)) {
    $serviceData[\'hasOfferCatalog\'] = [
        \'@type\' => \'OfferCatalog\',
        \'name\' => $pagetitle . \' — прайс-лист\',
        \'itemListElement\' => $offers
    ];
}

$output .= \'<!-- Schema.org: Service -->\' . "\\n";
$output .= \'<script type="application/ld+json">\' . "\\n";
$output .= json_encode($serviceData, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
$output .= "\\n</script>\\n\\n";

// ===== 2. РАЗМЕТКА СТРАНИЦЫ: WebPage (один блок!) =====
$webPageData = [
    \'@context\' => \'https://schema.org\',
    \'@type\' => \'WebPage\',
    \'name\' => $pagetitle,
    \'headline\' => $longtitle,
    \'description\' => mb_substr($description, 0, 300),
    \'url\' => $fullUrl,
    \'image\' => $imageUrl,
    \'inLanguage\' => \'ru-RU\',
    \'publisher\' => [
        \'@type\' => \'Organization\',
        \'name\' => \'Дом Оз\',
        \'logo\' => [
            \'@type\' => \'ImageObject\',
            \'url\' => $siteUrl . \'/assets/img/logo.png\'
        ]
    ]
];

// Добавляем даты только если они валидные
if ($dateCreated) {
    $webPageData[\'dateCreated\'] = $dateCreated;
}
if ($dateModified) {
    $webPageData[\'dateModified\'] = $dateModified;
}
if ($datePublished) {
    $webPageData[\'datePublished\'] = $datePublished;
}

$output .= \'<!-- Schema.org: WebPage -->\' . "\\n";
$output .= \'<script type="application/ld+json">\' . "\\n";
$output .= json_encode($webPageData, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
$output .= "\\n</script>\\n\\n";

// ===== 3. ХЛЕБНЫЕ КРОШКИ: BreadcrumbList =====
$parent = $resource->get(\'parent\');
$breadcrumbs = [
    [
        \'@type\' => \'ListItem\',
        \'position\' => 1,
        \'name\' => \'Главная\',
        \'item\' => $siteUrl . \'/\'
    ]
];

$position = 2;

if ($parent && $parent != 0) {
    $parentResource = $modx->getObject(\'modResource\', $parent);
    if ($parentResource) {
        $parentUri = $parentResource->get(\'uri\');
        $parentTitle = $parentResource->get(\'pagetitle\');
        
        if ($parentUri && $parentUri != \'/\') {
            $breadcrumbs[] = [
                \'@type\' => \'ListItem\',
                \'position\' => $position,
                \'name\' => $parentTitle,
                \'item\' => $siteUrl . \'/\' . ltrim($parentUri, \'/\')
            ];
            $position++;
        }
    }
}

$breadcrumbs[] = [
    \'@type\' => \'ListItem\',
    \'position\' => $position,
    \'name\' => $pagetitle,
    \'item\' => $fullUrl
];

$breadcrumbData = [
    \'@context\' => \'https://schema.org\',
    \'@type\' => \'BreadcrumbList\',
    \'itemListElement\' => $breadcrumbs
];

$output .= \'<!-- Schema.org: BreadcrumbList -->\' . "\\n";
$output .= \'<script type="application/ld+json">\' . "\\n";
$output .= json_encode($breadcrumbData, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
$output .= "\\n</script>\\n\\n";

// ===== 4. FAQ: FAQPage =====
if (!empty($faq)) {
    $faqEntities = [];
    
    foreach ($faq as $item) {
        if (empty($item[\'q\']) || empty($item[\'a\'])) continue;
        
        $faqEntities[] = [
            \'@type\' => \'Question\',
            \'name\' => strip_tags($item[\'q\']),
            \'acceptedAnswer\' => [
                \'@type\' => \'Answer\',
                \'text\' => strip_tags($item[\'a\'])
            ]
        ];
    }
    
    if (!empty($faqEntities)) {
        $faqData = [
            \'@context\' => \'https://schema.org\',
            \'@type\' => \'FAQPage\',
            \'mainEntity\' => $faqEntities
        ];
        
        $output .= \'<!-- Schema.org: FAQPage -->\' . "\\n";
        $output .= \'<script type="application/ld+json">\' . "\\n";
        $output .= json_encode($faqData, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        $output .= "\\n</script>\\n\\n";
    }
}

// ===== 5. ОРГАНИЗАЦИЯ: Organization (один блок!) =====
$orgData = [
    \'@context\' => \'https://schema.org\',
    \'@type\' => [\'Organization\', \'HomeAndConstructionBusiness\', \'LocalBusiness\'],
    \'@id\' => $siteUrl . \'/#organization\',
    \'name\' => \'Дом Оз\',
    \'alternateName\' => \'Dom OZ\',
    \'url\' => $siteUrl,
    \'logo\' => [
        \'@type\' => \'ImageObject\',
        \'url\' => $siteUrl . \'/assets/img/logo.png\',
        \'width\' => 200,
        \'height\' => 60
    ],
    \'image\' => $siteUrl . \'/assets/img/logo.png\',
    \'description\' => \'Ландшафтная компания полного цикла в Москве и Московской области. Проектирование, благоустройство, озеленение, дренаж, автополив и освещение под ключ.\',
    \'foundingDate\' => \'2015\',
    \'telephone\' => \'+7-985-920-77-00\',
    \'email\' => \'DOMOZ.77@yandex.ru\',
    \'address\' => [
        \'@type\' => \'PostalAddress\',
        \'streetAddress\' => \'Головинское шоссе, 5А\',
        \'addressLocality\' => \'Москва\',
        \'addressRegion\' => \'Московская область\',
        \'postalCode\' => \'125212\',
        \'addressCountry\' => \'RU\'
    ],
    \'geo\' => [
        \'@type\' => \'GeoCoordinates\',
        \'latitude\' => \'55.8573\',
        \'longitude\' => \'37.5126\'
    ],
    \'openingHoursSpecification\' => [
        \'@type\' => \'OpeningHoursSpecification\',
        \'dayOfWeek\' => [\'Monday\', \'Tuesday\', \'Wednesday\', \'Thursday\', \'Friday\', \'Saturday\', \'Sunday\'],
        \'opens\' => \'09:00\',
        \'closes\' => \'21:00\'
    ],
    \'sameAs\' => [
        \'https://vk.com/domozmsk\',
        \'https://t.me/domozmskru\',
        \'https://wa.me/79859207700\'
    ],
    \'contactPoint\' => [
        \'@type\' => \'ContactPoint\',
        \'telephone\' => \'+7-985-920-77-00\',
        \'contactType\' => \'customer service\',
        \'email\' => \'DOMOZ.77@yandex.ru\',
        \'availableLanguage\' => [\'Russian\'],
        \'areaServed\' => \'RU\'
    ],
    \'priceRange\' => \'₽₽\'
];

$output .= \'<!-- Schema.org: Organization -->\' . "\\n";
$output .= \'<script type="application/ld+json">\' . "\\n";
$output .= json_encode($orgData, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
$output .= "\\n</script>\\n";

return $output;',
    'modSnippet_locked' => '0',
    'modSnippet_properties' => 'a:0:{}',
    'modSnippet_moduleguid' => '',
    'modSnippet_static' => '0',
    'modSnippet_static_file' => '',
    'Source_id' => '1',
    'Source_name' => 'Filesystem',
    'Source_description' => '',
    'Source_class_key' => 'sources.modFileMediaSource',
    'Source_properties' => 'a:0:{}',
    'Source_is_stream' => '1',
  ),
);