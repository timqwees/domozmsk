<?php  return array (
  0 => 
  array (
    'modSnippet_id' => '53',
    'modSnippet_source' => '1',
    'modSnippet_property_preprocess' => '0',
    'modSnippet_name' => 'SchemaHome',
    'modSnippet_description' => '',
    'modSnippet_editor_type' => '0',
    'modSnippet_category' => '0',
    'modSnippet_cache_type' => '0',
    'modSnippet_snippet' => '$id = $modx->resource->get(\'id\');
$url = $modx->makeUrl($id, \'\', \'\', \'full\');
$siteUrl = rtrim($modx->getOption(\'site_url\', null, \'https://domozmsk.ru\'), \'/\');
$headline = $modx->resource->get(\'pagetitle\');
$desc = $modx->resource->get(\'description\');
if (empty($desc)) $desc = \'Ландшафтный дизайн участков под ключ в Москве и Московской области: проектирование, благоустройство, озеленение. Смета за 1 день, договор, гарантия до 5 лет.\';

// Организация и персона — как в блог-сниппете
$org = array(\'@type\' => \'Organization\', \'@id\' => $siteUrl . \'/#organization\', \'name\' => \'ООО Дом Оз\', \'alternateName\' => \'Дом Оз\', \'url\' => $siteUrl . \'/\', \'description\' => $desc, \'logo\' => array(\'@type\' => \'ImageObject\', \'@id\' => $siteUrl . \'/#logo\', \'url\' => $siteUrl . \'/assets/img/logo.png\'), \'telephone\' => \'+7-985-920-77-00\', \'email\' => \'DOMOZ.77@yandex.ru\', \'address\' => array(\'@type\' => \'PostalAddress\', \'addressCountry\' => \'RU\', \'addressLocality\' => \'Москва\', \'streetAddress\' => \'Головинское шоссе, 5А\'), \'foundingDate\' => \'2015\', \'sameAs\' => array(\'https://t.me/domozmskru\', \'https://vk.ru/domozmsk\', \'https://www.youtube.com/@domozmsk\'), \'knowsAbout\' => array(\'Ландшафтный дизайн\', \'Благоустройство территорий\', \'Озеленение\', \'Дренаж\', \'Автополив\'), \'founder\' => array(\'@id\' => $siteUrl . \'/#person\'));
$person = array(\'@type\' => \'Person\', \'@id\' => $siteUrl . \'/#person\', \'name\' => \'Главный специалист Дом Оз\', \'jobTitle\' => \'Эксперт по ландшафтному дизайну\', \'worksFor\' => array(\'@id\' => $siteUrl . \'/#organization\'), \'url\' => $siteUrl . \'/history-company/nasha-komanda\');

$graph = array();
$graph[] = $org;
$graph[] = $person;
$graph[] = array(\'@type\' => \'WebSite\', \'@id\' => $siteUrl . \'/#website\', \'url\' => $siteUrl . \'/\', \'name\' => \'Дом Оз\', \'publisher\' => array(\'@id\' => $siteUrl . \'/#organization\'), \'inLanguage\' => \'ru-RU\');
$graph[] = array(\'@type\' => \'WebPage\', \'@id\' => $url . \'#webpage\', \'url\' => $url, \'name\' => $headline, \'description\' => $desc, \'inLanguage\' => \'ru-RU\', \'isPartOf\' => array(\'@id\' => $siteUrl . \'/#website\'), \'speakable\' => array(\'@type\' => \'SpeakableSpecification\', \'cssSelector\' => array(\'h1\', \'h2\', \'.tldr\', \'.hero-desc\', \'.faq-answer\'), \'xpath\' => array("/html/head/title", "/html/body//h1[1]")));
$graph[] = array(\'@type\' => \'BreadcrumbList\', \'@id\' => $url . \'#breadcrumb\', \'itemListElement\' => array(array(\'@type\' => \'ListItem\', \'position\' => 1, \'name\' => \'Главная\', \'item\' => $siteUrl . \'/\')));

// Калькулятор = их бесплатный чекер
$graph[] = array(\'@type\' => \'WebApplication\', \'@id\' => $url . \'#calculator\', \'name\' => \'Калькулятор стоимости ландшафтного дизайна\', \'url\' => $url . \'#kviz\', \'description\' => \'Рассчитайте стоимость благоустройства участка в Москве и Подмосковье за 1 минуту\', \'applicationCategory\' => \'UtilitiesApplication\', \'operatingSystem\' => \'Web\', \'isAccessibleForFree\' => true, \'offers\' => array(\'@type\' => \'Offer\', \'price\' => \'0\', \'priceCurrency\' => \'RUB\'), \'provider\' => array(\'@id\' => $siteUrl . \'/#organization\'));

// Каталог услуг = их ItemList из 67 инструментов
$catIds = array_filter(array_map(\'trim\', explode(\',\', (string)$modx->resource->getTVValue(\'categoryi\'))));
$items = array(); $pos = 1;
foreach ($catIds as $cid) {
    $r = $modx->getObject(\'modResource\', (int)$cid);
    if (!$r || !$r->get(\'published\') || $r->get(\'deleted\')) continue;
    $items[] = array(\'@type\' => \'ListItem\', \'position\' => $pos++, \'item\' => array(\'@type\' => \'Service\', \'name\' => $r->get(\'pagetitle\'), \'url\' => $modx->makeUrl($r->get(\'id\'), \'\', \'\', \'full\'), \'provider\' => array(\'@id\' => $siteUrl . \'/#organization\'), \'areaServed\' => array(\'Москва\', \'Московская область\')));
}
if (!empty($items)) $graph[] = array(\'@type\' => \'ItemList\', \'@id\' => $url . \'#services\', \'name\' => \'Услуги ландшафтного дизайна Дом Оз\', \'numberOfItems\' => count($items), \'itemListElement\' => $items);

// Тарифы = их OfferCatalog (цены сверьте с сайтом)
$offers = array(
    array(\'@type\' => \'Offer\', \'name\' => \'Проектирование\', \'price\' => \'11500\', \'priceCurrency\' => \'RUB\', \'url\' => $siteUrl . \'/prices\'),
    array(\'@type\' => \'Offer\', \'name\' => \'Благоустройство\', \'price\' => \'50000\', \'priceCurrency\' => \'RUB\', \'url\' => $siteUrl . \'/prices\'),
    array(\'@type\' => \'Offer\', \'name\' => \'Газон\', \'price\' => \'390\', \'priceCurrency\' => \'RUB\', \'url\' => $siteUrl . \'/prices\')
);
$graph[] = array(\'@type\' => \'Service\', \'@id\' => $url . \'#service\', \'serviceType\' => \'Ландшафтный дизайн под ключ\', \'name\' => \'Ландшафтный дизайн в Москве и Московской области\', \'provider\' => array(\'@id\' => $siteUrl . \'/#organization\'), \'areaServed\' => array(\'Москва\', \'Московская область\', \'Красногорск\', \'Одинцово\', \'Истра\'), \'hasOfferCatalog\' => array(\'@type\' => \'OfferCatalog\', \'name\' => \'Цены на ландшафтные работы\', \'itemListElement\' => $offers));

// Меню = их SiteNavigationElement
$graph[] = array(\'@type\' => \'SiteNavigationElement\', \'@id\' => $url . \'#nav\', \'name\' => \'Главное меню\', \'hasPart\' => array(
    array(\'@type\' => \'SiteNavigationElement\', \'name\' => \'Услуги\', \'url\' => $url . \'#vidy\'),
    array(\'@type\' => \'SiteNavigationElement\', \'name\' => \'Цены\', \'url\' => $siteUrl . \'/prices\'),
    array(\'@type\' => \'SiteNavigationElement\', \'name\' => \'Блог\', \'url\' => $siteUrl . \'/blogs\'),
    array(\'@type\' => \'SiteNavigationElement\', \'name\' => \'Отзывы\', \'url\' => $siteUrl . \'/history-company/reviews\')
));

// FAQ из TV vopros
$faqItems = $modx->resource->getTVValue(\'vopros\');
$faqItems = $faqItems ? json_decode($faqItems, true) : array();
$faqMain = array();
if (is_array($faqItems)) {
    foreach ($faqItems as $fq) {
        $q = trim(strip_tags((string)(isset($fq[\'vopr\']) ? $fq[\'vopr\'] : \'\')));
        $a = trim(strip_tags((string)(isset($fq[\'otv\']) ? $fq[\'otv\'] : \'\')));
        if ($q !== \'\' && $a !== \'\') $faqMain[] = array(\'@type\' => \'Question\', \'name\' => $q, \'acceptedAnswer\' => array(\'@type\' => \'Answer\', \'text\' => $a));
    }
}
if (!empty($faqMain)) $graph[] = array(\'@type\' => \'FAQPage\', \'@id\' => $url . \'#faq\', \'mainEntity\' => $faqMain);

return \'<script type="application/ld+json">\' . "\\n" . json_encode(array(\'@context\' => \'https://schema.org\', \'@graph\' => $graph), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . "\\n" . \'</script>\';',
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