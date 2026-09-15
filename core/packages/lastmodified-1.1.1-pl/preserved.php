<?php return array (
  '94364571481036308fb54ff51642ee8b' => 
  array (
    'criteria' => 
    array (
      'name' => 'lastmodified',
    ),
    'object' => 
    array (
      'name' => 'lastmodified',
      'path' => '{core_path}components/lastmodified/',
      'assets_path' => '',
    ),
  ),
  '6408588ec121bb7484291e97cd3081e6' => 
  array (
    'criteria' => 
    array (
      'key' => 'lastmodified.response',
    ),
    'object' => 
    array (
      'key' => 'lastmodified.response',
      'value' => 'private',
      'xtype' => 'textfield',
      'namespace' => 'lastmodified',
      'area' => 'lastmodified.main',
      'editedon' => NULL,
    ),
  ),
  '604c2f8d9418ec8f04aea24fc7511c48' => 
  array (
    'criteria' => 
    array (
      'key' => 'lastmodified.maxage',
    ),
    'object' => 
    array (
      'key' => 'lastmodified.maxage',
      'value' => '3600',
      'xtype' => 'textfield',
      'namespace' => 'lastmodified',
      'area' => 'lastmodified.main',
      'editedon' => NULL,
    ),
  ),
  '1e13e2b44c2976201dfdb1c6e2c417d4' => 
  array (
    'criteria' => 
    array (
      'key' => 'lastmodified.expires',
    ),
    'object' => 
    array (
      'key' => 'lastmodified.expires',
      'value' => '3600',
      'xtype' => 'textfield',
      'namespace' => 'lastmodified',
      'area' => 'lastmodified.main',
      'editedon' => NULL,
    ),
  ),
  '628d88d33188aeb5438010f80182521c' => 
  array (
    'criteria' => 
    array (
      'key' => 'lastmodified.update_parent',
    ),
    'object' => 
    array (
      'key' => 'lastmodified.update_parent',
      'value' => '',
      'xtype' => 'combo-boolean',
      'namespace' => 'lastmodified',
      'area' => 'lastmodified.main',
      'editedon' => NULL,
    ),
  ),
  'd11cd6e75e296d67418de23508aadb4a' => 
  array (
    'criteria' => 
    array (
      'key' => 'lastmodified.update_level',
    ),
    'object' => 
    array (
      'key' => 'lastmodified.update_level',
      'value' => '1',
      'xtype' => 'textfield',
      'namespace' => 'lastmodified',
      'area' => 'lastmodified.main',
      'editedon' => NULL,
    ),
  ),
  '83fc540f563dd2ad6c3c025e7fcfec9d' => 
  array (
    'criteria' => 
    array (
      'key' => 'lastmodified.update_start',
    ),
    'object' => 
    array (
      'key' => 'lastmodified.update_start',
      'value' => '',
      'xtype' => 'combo-boolean',
      'namespace' => 'lastmodified',
      'area' => 'lastmodified.main',
      'editedon' => NULL,
    ),
  ),
  'bf2d0a7f6af4e69c724b8df6632ded8d' => 
  array (
    'criteria' => 
    array (
      'key' => 'lastmodified.prevent_authorized',
    ),
    'object' => 
    array (
      'key' => 'lastmodified.prevent_authorized',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'lastmodified',
      'area' => 'lastmodified.main',
      'editedon' => NULL,
    ),
  ),
  '7c48b7e1dafe56c69d2484678bb41bc3' => 
  array (
    'criteria' => 
    array (
      'key' => 'lastmodified.prevent_session',
    ),
    'object' => 
    array (
      'key' => 'lastmodified.prevent_session',
      'value' => 'minishop2',
      'xtype' => 'textfield',
      'namespace' => 'lastmodified',
      'area' => 'lastmodified.main',
      'editedon' => NULL,
    ),
  ),
  '147d6246596d18eba7055e6ef74bb494' => 
  array (
    'criteria' => 
    array (
      'key' => 'lastmodified.exclude',
    ),
    'object' => 
    array (
      'key' => 'lastmodified.exclude',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'lastmodified',
      'area' => 'lastmodified.main',
      'editedon' => NULL,
    ),
  ),
  '3e79afef02f106b589b33146e92fa9a8' => 
  array (
    'criteria' => 
    array (
      'category' => 'LastModified',
    ),
    'object' => 
    array (
      'id' => 43,
      'parent' => 0,
      'category' => 'LastModified',
      'rank' => 0,
    ),
  ),
  'edcd93043f1b3bc3635f1c151ea45278' => 
  array (
    'criteria' => 
    array (
      'name' => 'LastModified',
    ),
    'object' => 
    array (
      'id' => 18,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'LastModified',
      'description' => 'MODx Revolution plugin which handles the If-Modified-Since request header.',
      'editor_type' => 0,
      'category' => 43,
      'cache_type' => 0,
      'plugincode' => '/**
 * A part of LastModified plugin which handles the If-Modified-Since request header.
 *
 * @var modX $modx MODX instance
 * @var array $preventValues Prevent handling list
 * @var integer $lastUpdateTime Document last update time
 * @var integer $lastDownloadTime Document last download time (HTTP_IF_MODIFIED_SINCE)
 * @var string $cacheControl Cache-control directive (public, private)
 * @var integer $cacheMaxAge Cache max age in seconds
 * @var integer $cacheExpires Cache expires in seconds
 */
if ($modx->event->name == \'OnWebPagePrerender\') {
    if ($modx->getOption(\'lastmodified.prevent_authorized\') && ($modx->user->get(\'username\') !== $modx->getOption(\'default_username\'))) {
        return \'\';
    }

    if (!empty($modx->getOption(\'lastmodified.exclude\'))) {
        $excludeOptionValues = explode(\',\', $modx->getOption(\'lastmodified.exclude\'));

        $excludeIds = array_map(function ($value) {
            return (int)$value;
        }, $excludeOptionValues);

        if (in_array($modx->resource->id, $excludeIds, false)) {
            return \'\';
        }
    }

    if (!empty($modx->getOption(\'lastmodified.prevent_session\'))) {
        $preventOptionValues = explode(\',\', $modx->getOption(\'lastmodified.prevent_session\'));

        $preventValues = array_map(function ($value) {
            return strtolower(trim($value));
        }, $preventOptionValues);

        $sessionKeys = array_map(function ($value) {
            return strtolower(trim($value));
        }, array_keys($_SESSION));

        if (count(array_intersect($preventValues, $sessionKeys)) > 0) {
            return \'\';
        }
    }

    $lastUpdateTime = $modx->resource->get(\'editedon\')
        ? strtotime($modx->resource->get(\'editedon\'))
        : strtotime($modx->resource->get(\'createdon\'));

    if (empty($lastUpdateTime)) {
        return \'\';
    }

    $cacheControl = trim($modx->getOption(\'lastmodified.response\'));

    if (!in_array($cacheControl, [\'private\', \'public\'])) { // \'no-cache\'
        $modx->log(xPDO::LOG_LEVEL_ERROR, \'LastModified: wrong \' . $cacheControl . \' response value. Check configuration.\');
        return \'\';
    }

    $cacheMaxAge = ((int)$modx->getOption(\'lastmodified.maxage\') > 0) ? (int)$modx->getOption(\'lastmodified.maxage\') : 3600;
    $cacheExpires = ((int)$modx->getOption(\'lastmodified.expires\') > 0) ? (int)$modx->getOption(\'lastmodified.expires\') : 3600;

    if (!empty($_SERVER[\'HTTP_IF_MODIFIED_SINCE\'])) { // browser has sent If-Modified-Since request header
        $lastDownloadTime = strtotime($_SERVER[\'HTTP_IF_MODIFIED_SINCE\']);
        if ($lastUpdateTime <= $lastDownloadTime) {
            $protocol = isset($_SERVER[\'SERVER_PROTOCOL\']) ? $_SERVER[\'SERVER_PROTOCOL\'] : \'HTTP/1.1\';
            header($protocol . \' 304 Not Modified\');
            header(\'Last-Modified: \' . gmdate(\'D, d M Y H:i:s\', $lastUpdateTime) . \' GMT\');
            header(\'Cache-control: \' . $cacheControl . \', max-age=\' . $cacheMaxAge);
            header(\'Expires: \' . gmdate(\'D, d M Y H:i:s\', time() + $cacheExpires));
            exit(); // return \'\';
        }
    }
    header(\'Last-Modified: \' . gmdate(\'D, d M Y H:i:s\', $lastUpdateTime) . \' GMT\');
    header(\'Cache-control: \' . $cacheControl . \', max-age=\' . $cacheMaxAge);
    header(\'Expires: \' . gmdate(\'D, d M Y H:i:s\', time() + $cacheExpires));

    return \'\';
}

/**
 * A part of LastModified plugin which updates the editedon field of dependent resources.
 *
 * @var modX $modx MODX instance
 * @var int $id id of saved document (available on OnDocFormSave)
 * @var int $startId Site start id
 * @var modResource $start Site start object
 * @var int $nesting Nesting level option value
 * @var array $parentIds current page parents
 * @var modResource $parent Parent resource object
 */
if ($modx->event->name == \'OnDocFormSave\') {

    if ($modx->getOption(\'lastmodified.update_start\')) {

        $startId = (int)$modx->getOption(\'site_start\');

        if ($startId > 0 && $startId !== $id) {

            $start = $modx->getObject(\'modResource\', $startId);

            if (!$start instanceof modResource) {
                $modx->log(xPDO::LOG_LEVEL_ERROR, \'LastModified: get wrong modResource instance for site start with id \' . $startId . \' for document \' . $id . \'.\');
                return \'\';
            }

            $start->set(\'editedon\', time());
            $start->clearCache($resource->context_key);
            $start->save();

            unset($start);
        }

        unset($startId);
    }

    if ($modx->getOption(\'lastmodified.update_parent\')) {
        $nesting = (($level = (int)$modx->getOption(\'lastmodified.update_level\')) > 0) ? $level : 1;

        $parentIds = $modx->getParentIds($id, $nesting, [\'context\' => $resource->context_key]);

        if (empty($parentIds)) {
            $modx->log(xPDO::LOG_LEVEL_ERROR, \'LastModified: get empty ParentIds array. Possible context violation.\');
            return \'\';
        }

        foreach ($parentIds as $parentId) {
            if ($parentId === 0) {
                break;
            }

            $parent = $modx->getObject(\'modResource\', $parentId);

            if (!$parent instanceof modResource) {
                $modx->log(xPDO::LOG_LEVEL_ERROR, \'LastModified: get wrong modResource instance for parent with id \' . $parentId . \' for document \' . $id . \'.\');
                return \'\';
            }

            $parent->set(\'editedon\', time());
            $parent->clearCache($resource->context_key);
            $parent->save();

            unset($parent);
        }

        unset($parentIds);

        return \'\';
    }
}',
      'locked' => 0,
      'properties' => NULL,
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/lastmodified/elements/plugins/plugin.lastmodified.php',
      'content' => '/**
 * A part of LastModified plugin which handles the If-Modified-Since request header.
 *
 * @var modX $modx MODX instance
 * @var array $preventValues Prevent handling list
 * @var integer $lastUpdateTime Document last update time
 * @var integer $lastDownloadTime Document last download time (HTTP_IF_MODIFIED_SINCE)
 * @var string $cacheControl Cache-control directive (public, private)
 * @var integer $cacheMaxAge Cache max age in seconds
 * @var integer $cacheExpires Cache expires in seconds
 */
if ($modx->event->name == \'OnWebPagePrerender\') {
    if ($modx->getOption(\'lastmodified.prevent_authorized\') && ($modx->user->get(\'username\') !== $modx->getOption(\'default_username\'))) {
        return \'\';
    }

    if (!empty($modx->getOption(\'lastmodified.exclude\'))) {
        $excludeOptionValues = explode(\',\', $modx->getOption(\'lastmodified.exclude\'));

        $excludeIds = array_map(function ($value) {
            return (int)$value;
        }, $excludeOptionValues);

        if (in_array($modx->resource->id, $excludeIds, false)) {
            return \'\';
        }
    }

    if (!empty($modx->getOption(\'lastmodified.prevent_session\'))) {
        $preventOptionValues = explode(\',\', $modx->getOption(\'lastmodified.prevent_session\'));

        $preventValues = array_map(function ($value) {
            return strtolower(trim($value));
        }, $preventOptionValues);

        $sessionKeys = array_map(function ($value) {
            return strtolower(trim($value));
        }, array_keys($_SESSION));

        if (count(array_intersect($preventValues, $sessionKeys)) > 0) {
            return \'\';
        }
    }

    $lastUpdateTime = $modx->resource->get(\'editedon\')
        ? strtotime($modx->resource->get(\'editedon\'))
        : strtotime($modx->resource->get(\'createdon\'));

    if (empty($lastUpdateTime)) {
        return \'\';
    }

    $cacheControl = trim($modx->getOption(\'lastmodified.response\'));

    if (!in_array($cacheControl, [\'private\', \'public\'])) { // \'no-cache\'
        $modx->log(xPDO::LOG_LEVEL_ERROR, \'LastModified: wrong \' . $cacheControl . \' response value. Check configuration.\');
        return \'\';
    }

    $cacheMaxAge = ((int)$modx->getOption(\'lastmodified.maxage\') > 0) ? (int)$modx->getOption(\'lastmodified.maxage\') : 3600;
    $cacheExpires = ((int)$modx->getOption(\'lastmodified.expires\') > 0) ? (int)$modx->getOption(\'lastmodified.expires\') : 3600;

    if (!empty($_SERVER[\'HTTP_IF_MODIFIED_SINCE\'])) { // browser has sent If-Modified-Since request header
        $lastDownloadTime = strtotime($_SERVER[\'HTTP_IF_MODIFIED_SINCE\']);
        if ($lastUpdateTime <= $lastDownloadTime) {
            $protocol = isset($_SERVER[\'SERVER_PROTOCOL\']) ? $_SERVER[\'SERVER_PROTOCOL\'] : \'HTTP/1.1\';
            header($protocol . \' 304 Not Modified\');
            header(\'Last-Modified: \' . gmdate(\'D, d M Y H:i:s\', $lastUpdateTime) . \' GMT\');
            header(\'Cache-control: \' . $cacheControl . \', max-age=\' . $cacheMaxAge);
            header(\'Expires: \' . gmdate(\'D, d M Y H:i:s\', time() + $cacheExpires));
            exit(); // return \'\';
        }
    }
    header(\'Last-Modified: \' . gmdate(\'D, d M Y H:i:s\', $lastUpdateTime) . \' GMT\');
    header(\'Cache-control: \' . $cacheControl . \', max-age=\' . $cacheMaxAge);
    header(\'Expires: \' . gmdate(\'D, d M Y H:i:s\', time() + $cacheExpires));

    return \'\';
}

/**
 * A part of LastModified plugin which updates the editedon field of dependent resources.
 *
 * @var modX $modx MODX instance
 * @var int $id id of saved document (available on OnDocFormSave)
 * @var int $startId Site start id
 * @var modResource $start Site start object
 * @var int $nesting Nesting level option value
 * @var array $parentIds current page parents
 * @var modResource $parent Parent resource object
 */
if ($modx->event->name == \'OnDocFormSave\') {

    if ($modx->getOption(\'lastmodified.update_start\')) {

        $startId = (int)$modx->getOption(\'site_start\');

        if ($startId > 0 && $startId !== $id) {

            $start = $modx->getObject(\'modResource\', $startId);

            if (!$start instanceof modResource) {
                $modx->log(xPDO::LOG_LEVEL_ERROR, \'LastModified: get wrong modResource instance for site start with id \' . $startId . \' for document \' . $id . \'.\');
                return \'\';
            }

            $start->set(\'editedon\', time());
            $start->clearCache($resource->context_key);
            $start->save();

            unset($start);
        }

        unset($startId);
    }

    if ($modx->getOption(\'lastmodified.update_parent\')) {
        $nesting = (($level = (int)$modx->getOption(\'lastmodified.update_level\')) > 0) ? $level : 1;

        $parentIds = $modx->getParentIds($id, $nesting, [\'context\' => $resource->context_key]);

        if (empty($parentIds)) {
            $modx->log(xPDO::LOG_LEVEL_ERROR, \'LastModified: get empty ParentIds array. Possible context violation.\');
            return \'\';
        }

        foreach ($parentIds as $parentId) {
            if ($parentId === 0) {
                break;
            }

            $parent = $modx->getObject(\'modResource\', $parentId);

            if (!$parent instanceof modResource) {
                $modx->log(xPDO::LOG_LEVEL_ERROR, \'LastModified: get wrong modResource instance for parent with id \' . $parentId . \' for document \' . $id . \'.\');
                return \'\';
            }

            $parent->set(\'editedon\', time());
            $parent->clearCache($resource->context_key);
            $parent->save();

            unset($parent);
        }

        unset($parentIds);

        return \'\';
    }
}',
    ),
  ),
  'c0290a4db6f9cbfc5ad172b50c177e2a' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 18,
      'event' => 'OnWebPagePrerender',
    ),
    'object' => 
    array (
      'pluginid' => 18,
      'event' => 'OnWebPagePrerender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '6bf948d1b5e84fbb6296604561d4e366' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 18,
      'event' => 'OnDocFormSave',
    ),
    'object' => 
    array (
      'pluginid' => 18,
      'event' => 'OnDocFormSave',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
);