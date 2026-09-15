<?php
/**
 * SchemaBlogPosting — ФИНАЛЬНАЯ ВЕРСИЯ С ЗАЩИТОЙ ОТ 1970 ГОДА
 */

$id = $modx->resource->get('id');
$url = $modx->makeUrl($id, '', '', 'full');
$headline = $modx->resource->get('pagetitle');
$siteUrl = rtrim($modx->getOption('site_url', null, 'https://domozmsk.ru'), '/');

// 1. Описание
$description = $modx->resource->get('description');
if (empty($description)) $description = $modx->resource->get('introtext');
if (empty($description)) $description = mb_substr(strip_tags($modx->resource->get('content')), 0, 160, 'UTF-8') . '...';
$description = strip_tags($description);

// 2. ЖЕСТКАЯ ЗАЩИТА ОТ 1970 ГОДА (Timestamp <= 0)
$publishedon = (int)$modx->resource->get('publishedon');
$createdon = (int)$modx->resource->get('createdon');
$editedon = (int)$modx->resource->get('editedon');

// Если publishedon равен 0 или меньше (1970 год), берем createdon
if ($publishedon <= 946684800) { // 946684800 = 1 января 2000 года (безопасный порог)
    $publishedon = ($createdon > 946684800) ? $createdon : time();
}

// Если editedon равен 0 или меньше даты публикации, приравниваем к publishedon
if ($editedon <= 946684800 || $editedon < $publishedon) {
    $editedon = $publishedon;
}

$datePublishedIso = date('c', $publishedon);
$dateModifiedIso = date('c', $editedon);

// 3. Категория и теги
$category = $modx->resource->getTVValue('blog_category');
if (empty($category)) {
    $parent = $modx->getObject('modResource', $modx->resource->get('parent'));
    $category = $parent ? $parent->get('pagetitle') : 'Блог';
}
$keywords = $modx->resource->getTVValue('blog_tags') ?: $modx->resource->get('keywords');

// 4. Автор
$authorName = $modx->resource->getTVValue('author_name') ?: 'Главный специалист Дом Оз';
$authorJobTitle = $modx->resource->getTVValue('author_job_title') ?: 'Эксперт по ландшафтному дизайну';

// 4a. Логотип с реальными размерами (как у enterno: width/height обязательны)
$logoObj = ['@type' => 'ImageObject', '@id' => $siteUrl . '/#logo', 'url' => $siteUrl . '/assets/img/logo.png'];
$logoSize = @getimagesize($modx->getOption('base_path') . 'assets/img/logo.png');
if ($logoSize) { $logoObj['width'] = $logoSize[0]; $logoObj['height'] = $logoSize[1]; }

// 4b. Изображение статьи с реальными размерами + wordCount (как у enterno)
$articleImg = $modx->resource->getTVValue('article_image') ?: $modx->resource->getTVValue('blog_image');
if (empty($articleImg)) $articleImg = 'assets/img/og-cover.jpg';
$articleImgUrl = preg_match('#^https?://#', $articleImg) ? $articleImg : $siteUrl . '/' . ltrim($articleImg, '/');
$imgSize = @getimagesize($modx->getOption('base_path') . ltrim(preg_replace('#^https?://[^/]+#', '', $articleImgUrl), '/'));
$imageObj = ['@type' => 'ImageObject', 'url' => $articleImgUrl];
if ($imgSize) { $imageObj['width'] = $imgSize[0]; $imageObj['height'] = $imgSize[1]; }
$plainText = trim(strip_tags((string)$modx->resource->get('content')));
$wordCount = ($plainText === '') ? 0 : count(preg_split('/\s+/u', $plainText));

// 5. Хлебные крошки
$parents = $modx->getParentIds($id);
$parents[] = $id;
$parents = array_reverse(array_filter($parents));

$breadcrumbItems = [['@type' => 'ListItem', 'position' => 1, 'name' => 'Главная', 'item' => $siteUrl . '/']];
$position = 2;
foreach ($parents as $parentId) {
    if ($parentId == 0 || $parentId == $id) continue;
    $parentRes = $modx->getObject('modResource', $parentId);
    if ($parentRes) {
        $breadcrumbItems[] = [
            '@type' => 'ListItem', 'position' => $position++,
            'name' => $parentRes->get('pagetitle'),
            'item' => $modx->makeUrl($parentId, '', '', 'full')
        ];
    }
}
$breadcrumbItems[] = ['@type' => 'ListItem', 'position' => $position, 'name' => $headline];

// 6. Сборка единого @graph
$graph = [
    ['@type' => 'WebPage', '@id' => $url . '#webpage', 'url' => $url, 'name' => $headline, 'description' => $description, 'inLanguage' => 'ru-RU', 'isPartOf' => ['@id' => $siteUrl . '/#website'], 'breadcrumb' => ['@id' => $url . '#breadcrumb'], 'author' => ['@id' => $siteUrl . '/#person'], 'speakable' => ['@type' => 'SpeakableSpecification', 'cssSelector' => ['h1', 'h2', '.tldr', '.article-body > p:first-of-type', '.faq-item p', '.faq-item summary', '#toc-list'], 'xpath' => ["/html/head/title", "/html/head/meta[@name='description']/@content", "/html/body//h1[1]"]]],
    ['@type' => 'BreadcrumbList', '@id' => $url . '#breadcrumb', 'itemListElement' => $breadcrumbItems],
    ['@type' => 'Person', '@id' => $siteUrl . '/#person', 'name' => $authorName, 'jobTitle' => $authorJobTitle, 'worksFor' => ['@id' => $siteUrl . '/#organization'], 'url' => $siteUrl . '/history-company/nasha-komanda', 'knowsAbout' => ['Ландшафтный дизайн', 'Благоустройство участков', 'Озеленение', 'Дренаж', 'Автополив'], 'sameAs' => ['https://t.me/domozmskru']],
    ['@type' => 'Organization', '@id' => $siteUrl . '/#organization', 'name' => 'ООО Дом Оз', 'alternateName' => 'Дом Оз', 'url' => $siteUrl . '/', 'description' => 'Ландшафтная компания полного цикла в Москве и Московской области: проектирование, благоустройство и озеленение участков под ключ', 'logo' => $logoObj, 'image' => ['@id' => $siteUrl . '/#logo'], 'telephone' => '+7-985-920-77-00', 'email' => 'DOMOZ.77@yandex.ru', 'address' => ['@type' => 'PostalAddress', 'addressCountry' => 'RU', 'addressLocality' => 'Москва', 'streetAddress' => 'Головинское шоссе, 5А'], 'foundingDate' => '2015', 'sameAs' => ['https://t.me/domozmskru', 'https://vk.ru/domozmsk', 'https://www.youtube.com/@domozmsk'], 'contactPoint' => [['@type' => 'ContactPoint', 'contactType' => 'customer service', 'telephone' => '+7-985-920-77-00', 'areaServed' => 'RU', 'availableLanguage' => 'ru']], 'knowsAbout' => ['Ландшафтный дизайн', 'Благоустройство территорий', 'Озеленение', 'Ландшафтное проектирование', 'Автополив', 'Дренаж участков'], 'founder' => ['@id' => $siteUrl . '/#person']],
    ['@type' => 'BlogPosting', '@id' => $url . '#article', 'mainEntityOfPage' => ['@id' => $url . '#webpage'], 'headline' => mb_substr($headline, 0, 110, 'UTF-8'), 'description' => $description, 'image' => $imageObj, 'wordCount' => $wordCount, 'datePublished' => $datePublishedIso, 'dateModified' => $dateModifiedIso, 'author' => ['@id' => $siteUrl . '/#person'], 'publisher' => ['@id' => $siteUrl . '/#organization'], 'articleSection' => $category, 'inLanguage' => 'ru-RU']
];

if (!empty($keywords)) $graph[4]['keywords'] = $keywords;

// 7. WebSite (как у enterno: издатель + язык)
$graph[] = ['@type' => 'WebSite', '@id' => $siteUrl . '/#website', 'url' => $siteUrl . '/', 'name' => 'Дом Оз', 'description' => 'Блог о ландшафтном дизайне, благоустройстве и озеленении участков в Москве и Подмосковье', 'publisher' => ['@id' => $siteUrl . '/#organization'], 'inLanguage' => 'ru-RU'];

// 8. FAQPage из TV vopros (как у enterno: глубокие ответы отдельной нодой)
$faqRaw = $modx->resource->getTVValue('vopros');
$faqItems = $faqRaw ? json_decode($faqRaw, true) : [];
$faqMain = [];
if (is_array($faqItems)) {
    foreach ($faqItems as $fq) {
        $q = trim(strip_tags((string)(isset($fq['vopr']) ? $fq['vopr'] : '')));
        $a = trim(strip_tags((string)(isset($fq['otv']) ? $fq['otv'] : '')));
        if ($q !== '' && $a !== '') $faqMain[] = ['@type' => 'Question', 'name' => $q, 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $a]];
    }
}
if (!empty($faqMain)) $graph[] = ['@type' => 'FAQPage', '@id' => $url . '#faq', 'mainEntity' => $faqMain];

$json = json_encode(['@context' => 'https://schema.org', '@graph' => $graph], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
return '<script type="application/ld+json">' . "\n" . $json . "\n" . '</script>';
return;
