<?php  return array (
  0 => 
  array (
    'modSnippet_id' => '48',
    'modSnippet_source' => '1',
    'modSnippet_property_preprocess' => '0',
    'modSnippet_name' => 'ShowDate_ru',
    'modSnippet_description' => '',
    'modSnippet_editor_type' => '0',
    'modSnippet_category' => '0',
    'modSnippet_cache_type' => '0',
    'modSnippet_snippet' => 'setlocale(LC_ALL, \'en_US.UTF-8\');

if ($val == \'\') {
    $val = time();
}

// Создаем объект DateTime с текущим временем или переданным значением
$date = new DateTime(\'@\' . $val);

// Указываем временную зону +3 часа
$timezone = new DateTimeZone(\'Europe/Moscow\'); // Обратите внимание: \'Etc/GMT-3\' это UTC+3
$date->setTimezone($timezone);

// Формат по умолчанию
if ($format == \'\') {
    $format = "%a, %d %b %Y %H:%M:%S";
}

// Форматируем дату
return strftime($format, $date->getTimestamp());',
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