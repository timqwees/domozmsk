<?php return array (
  '6b2bcad4bac34cb13146b143e4dd0975' => 
  array (
    'criteria' => 
    array (
      'name' => 'fetchit',
    ),
    'object' => 
    array (
      'name' => 'fetchit',
      'path' => '{core_path}components/fetchit/',
      'assets_path' => '',
    ),
  ),
  '772110af35d5a89102ea660637d33919' => 
  array (
    'criteria' => 
    array (
      'key' => 'fetchit.frontend.js',
    ),
    'object' => 
    array (
      'key' => 'fetchit.frontend.js',
      'value' => '[[+assetsUrl]]js/fetchit.js',
      'xtype' => 'textfield',
      'namespace' => 'fetchit',
      'area' => 'fetchit_main',
      'editedon' => NULL,
    ),
  ),
  '37ed239e87eb86a426ed7b03775d03fc' => 
  array (
    'criteria' => 
    array (
      'key' => 'fetchit.frontend.js.classname',
    ),
    'object' => 
    array (
      'key' => 'fetchit.frontend.js.classname',
      'value' => 'FetchIt',
      'xtype' => 'textfield',
      'namespace' => 'fetchit',
      'area' => 'fetchit_main',
      'editedon' => NULL,
    ),
  ),
  '8662ac2c03be34ca3ccb74593ba15e95' => 
  array (
    'criteria' => 
    array (
      'key' => 'fetchit.frontend.input.invalid.class',
    ),
    'object' => 
    array (
      'key' => 'fetchit.frontend.input.invalid.class',
      'value' => 'is-invalid',
      'xtype' => 'textfield',
      'namespace' => 'fetchit',
      'area' => 'fetchit_main',
      'editedon' => NULL,
    ),
  ),
  '020aff20d7089b50a419ef2733c04f75' => 
  array (
    'criteria' => 
    array (
      'key' => 'fetchit.frontend.custom.invalid.class',
    ),
    'object' => 
    array (
      'key' => 'fetchit.frontend.custom.invalid.class',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'fetchit',
      'area' => 'fetchit_main',
      'editedon' => NULL,
    ),
  ),
  '6b85dc2481ea248915b96e2e7a747985' => 
  array (
    'criteria' => 
    array (
      'key' => 'fetchit.frontend.default.notifier',
    ),
    'object' => 
    array (
      'key' => 'fetchit.frontend.default.notifier',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'fetchit',
      'area' => 'fetchit_main',
      'editedon' => '2025-12-03 11:34:19',
    ),
  ),
  'dd066320a47286911fa2b119de64083d' => 
  array (
    'criteria' => 
    array (
      'category' => 'FetchIt',
    ),
    'object' => 
    array (
      'id' => 6,
      'parent' => 0,
      'category' => 'FetchIt',
      'rank' => 0,
    ),
  ),
  '2ccb1056e09588de72e69dbc71ceea7f' => 
  array (
    'criteria' => 
    array (
      'name' => 'FetchIt',
    ),
    'object' => 
    array (
      'id' => 18,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'FetchIt',
      'description' => '',
      'editor_type' => 0,
      'category' => 6,
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
      'properties' => 'a:4:{s:9:"actionUrl";a:7:{s:4:"name";s:9:"actionUrl";s:4:"desc";s:22:"fetchit_prop_actionUrl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:24:"[[+assetsUrl]]action.php";s:7:"lexicon";s:18:"fetchit:properties";s:4:"area";s:0:"";}s:20:"clearFieldsOnSuccess";a:7:{s:4:"name";s:20:"clearFieldsOnSuccess";s:4:"desc";s:33:"fetchit_prop_clearFieldsOnSuccess";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"fetchit:properties";s:4:"area";s:0:"";}s:4:"form";a:7:{s:4:"name";s:4:"form";s:4:"desc";s:17:"fetchit_prop_form";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:19:"tpl.FetchIt.example";s:7:"lexicon";s:18:"fetchit:properties";s:4:"area";s:0:"";}s:7:"snippet";a:7:{s:4:"name";s:7:"snippet";s:4:"desc";s:20:"fetchit_prop_snippet";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:6:"FormIt";s:7:"lexicon";s:18:"fetchit:properties";s:4:"area";s:0:"";}}',
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
    ),
  ),
  '00fd06f2b0c5da33d0266c6468d5834b' => 
  array (
    'criteria' => 
    array (
      'name' => 'FetchIt',
    ),
    'object' => 
    array (
      'id' => 6,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'FetchIt',
      'description' => '',
      'editor_type' => 0,
      'category' => 6,
      'cache_type' => 0,
      'plugincode' => '/** @var modX $modx */
/** @var array $scriptProperties */
/** @var FetchIt $FetchIt */

switch ($modx->event->name) {
    case \'OnWebPagePrerender\':
        if ($FetchIt = $modx->getService(\'FetchIt\', \'FetchIt\', MODX_CORE_PATH . \'components/fetchit/model/\')) {
            $FetchIt->registerScript();
        }
        break;
}',
      'locked' => 0,
      'properties' => NULL,
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/fetchit/elements/plugins/fetchit.php',
      'content' => '/** @var modX $modx */
/** @var array $scriptProperties */
/** @var FetchIt $FetchIt */

switch ($modx->event->name) {
    case \'OnWebPagePrerender\':
        if ($FetchIt = $modx->getService(\'FetchIt\', \'FetchIt\', MODX_CORE_PATH . \'components/fetchit/model/\')) {
            $FetchIt->registerScript();
        }
        break;
}',
    ),
  ),
  '02e0523dc80c72c77ab61e282ae0b200' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 6,
      'event' => 'OnWebPagePrerender',
    ),
    'object' => 
    array (
      'pluginid' => 6,
      'event' => 'OnWebPagePrerender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
);