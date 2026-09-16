<?php
/** @var modX $modx */
/** @var FetchIt $FetchIt */
/** @var array $scriptProperties */
if (!$modx->loadClass('fetchit', MODX_CORE_PATH . 'components/fetchit/model/', false, true)) {
    return false;
}
$FetchIt = new FetchIt($modx, $scriptProperties);

$snippet = $modx->getOption('snippet', $scriptProperties, 'FormIt', true);
$tpl = $modx->getOption('form', $scriptProperties, 'tpl.FetchIt.example', true);

/** @var pdoTools $pdo */
if (class_exists('pdoTools') && $pdo = $modx->getService('pdoTools')) {
    $content = $pdo->getChunk($tpl, $scriptProperties);
} else {
    $content = $modx->getChunk($tpl, $scriptProperties);
}
if (empty($content)) {
    return $modx->lexicon('fetchit_err_chunk_nf', array('name' => $tpl));
}

// Add method = post
if (preg_match('#<form.*?method=(?:"|\')(.*?)(?:"|\')#i', $content)) {
    $content = preg_replace('#<form(.*?)method=(?:"|\')(.*?)(?:"|\')#i', '<form\\1method="post"', $content);
} else {
    $content = str_ireplace('<form', '<form method="post"', $content);
}

// Add action for form processing
$action = md5(http_build_query($scriptProperties));
// Add selector to tag form
if (preg_match('#<form.*?data-fetchit=(?:"|\')(.*?)(?:"|\')#i', $content, $matches)) {
    $content = preg_replace('#<form(.*?)data-fetchit=(?:"|\')(.*?)(?:"|\')#i', '<form\\data-fetchit="$action"', $content);
} else {
    $content = str_ireplace('<form', '<form data-fetchit="' . $action . '"', $content);
}

$FetchIt->loadScript($action);

// Save snippet properties: в сессию (если есть) И в кеш (фолбэк для хитов,
// когда сниппет не исполняется, а отправка идёт из уже открытой страницы).
if (!empty(session_id())) {
    // ... to user`s session
    $_SESSION['FetchIt'][$action] = $scriptProperties;
}
// ... always to cache file (TTL 3600)
$modx->cacheManager->set('fetchit/props_' . $action, $scriptProperties, 3600);

// Call snippet for preparation of form
$action = !empty($_SERVER['HTTP_X_FETCHIT_ACTION'])
    ? $_SERVER['HTTP_X_FETCHIT_ACTION']
    : $action;

$response = $FetchIt->process($action, $_REQUEST);

// PRG для нативного POST (без JS/AJAX): после успешной отправки уводим
// 303-редиректом на чистый URL, чтобы F5 не спрашивал повторную отправку.
// AJAX-вызовы (action.php, заголовок X-FetchIt-Action) не трогаем.
if (!empty($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST'
    && empty($_SERVER['HTTP_X_FETCHIT_ACTION'])
) {
    $ok = false;
    if (is_array($response)) {
        $ok = !empty($response['success']);
    } elseif (is_string($response)) {
        $decoded = json_decode($response, true);
        $ok = is_array($decoded) && !empty($decoded['success']);
    }
    if ($ok && $modx->resource instanceof modResource) {
        $url = $modx->makeUrl($modx->resource->get('id'), '', '', 'full');
        $modx->sendRedirect($url, array('responseCode' => 'HTTP/1.1 303 See Other'));
        @session_write_close();
        exit();
    }
}

// Return chunk
return $content;
