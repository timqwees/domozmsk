<?php  return array (
  0 => 
  array (
    'modSnippet_id' => '52',
    'modSnippet_source' => '1',
    'modSnippet_property_preprocess' => '0',
    'modSnippet_name' => 'mark',
    'modSnippet_description' => '',
    'modSnippet_editor_type' => '0',
    'modSnippet_category' => '0',
    'modSnippet_cache_type' => '0',
    'modSnippet_snippet' => '$accept = $_SERVER[\'HTTP_ACCEPT\'] ?? \'\';

if (stripos($accept, \'text/markdown\') === false) {
    return \'\';
}

$resource = $modx->resource;

$title = $resource->get(\'pagetitle\');
$description = $resource->get(\'description\');
$content = $resource->get(\'content\');

$url = $modx->makeUrl(
    $resource->get(\'id\'),
    \'\',
    \'\',
    \'full\'
);

$description = trim(strip_tags($description));
$content = trim(strip_tags($content));

$markdown = "# " . $title . "\\n\\n";

if ($description) {
    $markdown .= $description . "\\n\\n";
}

if ($content) {
    $markdown .= $content . "\\n\\n";
}

$markdown .= "---\\n\\n";
$markdown .= "## Компания\\n\\n";
$markdown .= "**ООО Дом Оз** — ландшафтная компания полного цикла в Москве и Московской области.\\n\\n";
$markdown .= "Сайт: " . $url . "\\n";
$markdown .= "Телефон: +7-985-920-77-00\\n";
$markdown .= "Email: DOMOZ.77@yandex.ru\\n";

header(\'Content-Type: text/markdown; charset=utf-8\');
header(\'Vary: Accept\');
header(\'X-Content-Type-Options: nosniff\');

echo $markdown;
exit;',
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