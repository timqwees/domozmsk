<?php  return array (
  0 => 
  array (
    'modSnippet_id' => '40',
    'modSnippet_source' => '0',
    'modSnippet_property_preprocess' => '0',
    'modSnippet_name' => 'phpthumbon',
    'modSnippet_description' => 'Создание превьюх картинок',
    'modSnippet_editor_type' => '0',
    'modSnippet_category' => '0',
    'modSnippet_cache_type' => '0',
    'modSnippet_snippet' => '/**
 * phpThumbOn
 * Создание превьюх картинок
 *
 * Copyright 2013 by Agel_Nash <Agel_Nash@xaker.ru>
 *
 * @category images
 * @license GNU General Public License (GPL), http://www.gnu.org/copyleft/gpl.html
 * @author Agel_Nash <Agel_Nash@xaker.ru>
 */

if(empty($modx) || !($modx instanceof modX)) return \'\';

$componentPath = (string)$modx->getOption(\'phpthumbon.core_path\', null, $modx->getOption(\'core_path\').\'components/phpthumbon/\');

if(!isset($modx->phpThumbOn)){
    $modx->phpThumbOn = $modx->getService("phpthumbon","phpThumbOn",$componentPath.\'model/phpthumbon/\', $scriptProperties);
}

if(!($flag = ($modx->phpThumbOn instanceof phpThumbOn))){
    $modx->phpThumbOn = null;
}
return $flag ? $modx->phpThumbOn->run($scriptProperties) : $modx->getOption(\'phpthumbon.noimage\', $scriptProperties);',
    'modSnippet_locked' => '0',
    'modSnippet_properties' => 'a:2:{s:5:"input";a:7:{s:4:"name";s:5:"input";s:4:"desc";s:16:"phpthumbon.input";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:21:"phpthumbon:properties";s:4:"area";s:0:"";}s:7:"options";a:7:{s:4:"name";s:7:"options";s:4:"desc";s:17:"phpthumbon.folder";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:21:"phpthumbon:properties";s:4:"area";s:0:"";}}',
    'modSnippet_moduleguid' => '',
    'modSnippet_static' => '0',
    'modSnippet_static_file' => '',
    'Source_id' => NULL,
    'Source_name' => NULL,
    'Source_description' => NULL,
    'Source_class_key' => NULL,
    'Source_properties' => NULL,
    'Source_is_stream' => NULL,
  ),
);