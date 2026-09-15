<?php  return 'setlocale(LC_ALL, \'en_US.UTF-8\');

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
return strftime($format, $date->getTimestamp());
return;
';