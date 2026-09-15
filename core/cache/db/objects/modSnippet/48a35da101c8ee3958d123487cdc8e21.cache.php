<?php  return array (
  'id' => 18,
  'source' => 1,
  'property_preprocess' => 0,
  'name' => 'FetchIt',
  'description' => '',
  'editor_type' => 0,
  'category' => 0,
  'cache_type' => 0,
  'snippet' => '/** @var modX $modx */
/** @var FetchIt $FetchIt */
/** @var array $scriptProperties */
if (!$modx->loadClass(\'fetchit\', MODX_CORE_PATH . \'components/fetchit/model/\', false, true)) {
    return false;
}
$FetchIt = new FetchIt($modx, $scriptProperties);

$snippet = $modx->getOption(\'snippet\', $scriptProperties, \'FormIt\', true);
$tpl = $modx->getOption(\'form\', $scriptProperties, \'tpl.FetchIt.example\', true);

/** @var pdoTools $pdo */
if (class_exists(\'pdoTools\') && $pdo = $modx->getService(\'pdoTools\')) {
    $content = $pdo->getChunk($tpl, $scriptProperties);
} else {
    $content = $modx->getChunk($tpl, $scriptProperties);
}
if (empty($content)) {
    return $modx->lexicon(\'fetchit_err_chunk_nf\', array(\'name\' => $tpl));
}

// Add method = post
if (preg_match(\'#<form.*?method=(?:"|\\\')(.*?)(?:"|\\\')#i\', $content)) {
    $content = preg_replace(\'#<form(.*?)method=(?:"|\\\')(.*?)(?:"|\\\')#i\', \'<form\\\\1method="post"\', $content);
} else {
    $content = str_ireplace(\'<form\', \'<form method="post"\', $content);
}

// Add action for form processing
$action = md5(http_build_query($scriptProperties));
// Add selector to tag form
if (preg_match(\'#<form.*?data-fetchit=(?:"|\\\')(.*?)(?:"|\\\')#i\', $content, $matches)) {
    $content = preg_replace(\'#<form(.*?)data-fetchit=(?:"|\\\')(.*?)(?:"|\\\')#i\', \'<form\\\\data-fetchit="$action"\', $content);
} else {
    $content = str_ireplace(\'<form\', \'<form data-fetchit="\' . $action . \'"\', $content);
}

$FetchIt->loadScript($action);

// Save snippet properties
if (!empty(session_id())) {
    // ... to user`s session
    $_SESSION[\'FetchIt\'][$action] = $scriptProperties;
} else {
    // ... to cache file
    $modx->cacheManager->set(\'fetchit/props_\' . $action, $scriptProperties, 3600);
}

// Call snippet for preparation of form
$action = !empty($_SERVER[\'HTTP_X_FETCHIT_ACTION\'])
    ? $_SERVER[\'HTTP_X_FETCHIT_ACTION\']
    : $action;

$FetchIt->process($action, $_REQUEST);

// Return chunk
return $content;',
  'locked' => 0,
  'properties' => 'a:4:{s:4:"form";a:7:{s:4:"name";s:4:"form";s:4:"desc";s:17:"fetchit_prop_form";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:19:"tpl.FetchIt.example";s:7:"lexicon";s:18:"fetchit:properties";s:4:"area";s:0:"";}s:7:"snippet";a:7:{s:4:"name";s:7:"snippet";s:4:"desc";s:20:"fetchit_prop_snippet";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:6:"FormIt";s:7:"lexicon";s:18:"fetchit:properties";s:4:"area";s:0:"";}s:9:"actionUrl";a:7:{s:4:"name";s:9:"actionUrl";s:4:"desc";s:22:"fetchit_prop_actionUrl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:24:"[[+assetsUrl]]action.php";s:7:"lexicon";s:18:"fetchit:properties";s:4:"area";s:0:"";}s:20:"clearFieldsOnSuccess";a:7:{s:4:"name";s:20:"clearFieldsOnSuccess";s:4:"desc";s:33:"fetchit_prop_clearFieldsOnSuccess";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"fetchit:properties";s:4:"area";s:0:"";}}',
  'moduleguid' => '',
  'static' => 0,
  'static_file' => 'core/components/fetchit/elements/snippets/fetchit.php',
  'content' => '/** @var modX $modx */
/** @var FetchIt $FetchIt */
/** @var array $scriptProperties */
if (!$modx->loadClass(\'fetchit\', MODX_CORE_PATH . \'components/fetchit/model/\', false, true)) {
    return false;
}
$FetchIt = new FetchIt($modx, $scriptProperties);

$snippet = $modx->getOption(\'snippet\', $scriptProperties, \'FormIt\', true);
$tpl = $modx->getOption(\'form\', $scriptProperties, \'tpl.FetchIt.example\', true);

/** @var pdoTools $pdo */
if (class_exists(\'pdoTools\') && $pdo = $modx->getService(\'pdoTools\')) {
    $content = $pdo->getChunk($tpl, $scriptProperties);
} else {
    $content = $modx->getChunk($tpl, $scriptProperties);
}
if (empty($content)) {
    return $modx->lexicon(\'fetchit_err_chunk_nf\', array(\'name\' => $tpl));
}

// Add method = post
if (preg_match(\'#<form.*?method=(?:"|\\\')(.*?)(?:"|\\\')#i\', $content)) {
    $content = preg_replace(\'#<form(.*?)method=(?:"|\\\')(.*?)(?:"|\\\')#i\', \'<form\\\\1method="post"\', $content);
} else {
    $content = str_ireplace(\'<form\', \'<form method="post"\', $content);
}

// Add action for form processing
$action = md5(http_build_query($scriptProperties));
// Add selector to tag form
if (preg_match(\'#<form.*?data-fetchit=(?:"|\\\')(.*?)(?:"|\\\')#i\', $content, $matches)) {
    $content = preg_replace(\'#<form(.*?)data-fetchit=(?:"|\\\')(.*?)(?:"|\\\')#i\', \'<form\\\\data-fetchit="$action"\', $content);
} else {
    $content = str_ireplace(\'<form\', \'<form data-fetchit="\' . $action . \'"\', $content);
}

$FetchIt->loadScript($action);

// Save snippet properties
if (!empty(session_id())) {
    // ... to user`s session
    $_SESSION[\'FetchIt\'][$action] = $scriptProperties;
} else {
    // ... to cache file
    $modx->cacheManager->set(\'fetchit/props_\' . $action, $scriptProperties, 3600);
}

// Call snippet for preparation of form
$action = !empty($_SERVER[\'HTTP_X_FETCHIT_ACTION\'])
    ? $_SERVER[\'HTTP_X_FETCHIT_ACTION\']
    : $action;

$FetchIt->process($action, $_REQUEST);

// Return chunk
return $content;',
);