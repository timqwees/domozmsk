<?php  return '// Работаем только на фронтенде (чтобы не ломать админку MODX лишними заголовками)
if ($modx->context->get(\'key\') !== \'web\') {
    return;
}

// --- СУЩЕСТВУЮЩИЕ ЗАГОЛОВКИ БЕЗОПАСНОСТИ ---

// HSTS
header(\'Strict-Transport-Security: max-age=31536000\');

// Clickjacking
header(\'X-Frame-Options: SAMEORIGIN\');

// MIME sniffing
header(\'X-Content-Type-Options: nosniff\');

// Referrer
header(\'Referrer-Policy: strict-origin-when-cross-origin\');

// Permissions
header(\'Permissions-Policy: geolocation=(), microphone=(), camera=()\');

// Cross-Origin
header(\'Cross-Origin-Opener-Policy: same-origin-allow-popups\');

// Legacy XSS header — для прохождения старого аудита Enterno
header(\'X-XSS-Protection: 1; mode=block\');
header_remove("X-Powered-By");

// Content Security Policy
header("Content-Security-Policy: default-src \'self\' https:; img-src \'self\' https: data: blob:; script-src \'self\' https: \'unsafe-inline\' \'unsafe-eval\'; style-src \'self\' https: \'unsafe-inline\'; font-src \'self\' https: data:; connect-src \'self\' https:; frame-src \'self\' https:; media-src \'self\' https: blob:;");


// --- НОВЫЕ ЗАГОЛОВКИ ДЛЯ AI (LLMs) ---

// Получаем базовый URL сайта из системных настроек (убираем слэш на конце, если он есть)
$siteUrl = rtrim($modx->getOption(\'site_url\', null, \'https://domozmsk.ru\'), \'/\');

// Формируем и отправляем заголовок Link
// Параметр false означает "добавить к существующим заголовкам, а не заменять их"
header(\'Link: <\' . $siteUrl . \'/llms.txt>; rel="llms", <\' . $siteUrl . \'/openapi.yaml>; rel="service-desc"\', false);

header(\'X-Robots-Tag: index, follow\');
return;
';