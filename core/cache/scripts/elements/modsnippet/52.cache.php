<?php  return '$accept = $_SERVER[\'HTTP_ACCEPT\'] ?? \'\';

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
exit;
return;
';