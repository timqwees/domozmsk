<?php  return array (
  'config' => 
  array (
    'allow_tags_in_post' => '1',
    'modRequest.class' => 'modManagerRequest',
  ),
  'aliasMap' => 
  array (
  ),
  'webLinkMap' => 
  array (
  ),
  'eventMap' => 
  array (
    'OnBeforeCacheUpdate' => 
    array (
      13 => '13',
    ),
    'OnChunkFormPrerender' => 
    array (
      2 => '2',
      16 => '16',
      11 => '11',
    ),
    'OnChunkFormSave' => 
    array (
      16 => '16',
      11 => '11',
    ),
    'OnDocFormPrerender' => 
    array (
      7 => '7',
      2 => '2',
      16 => '16',
      11 => '11',
    ),
    'OnDocFormRender' => 
    array (
      10 => '10',
    ),
    'OnDocFormSave' => 
    array (
      16 => '16',
      10 => '10',
      18 => '18',
      11 => '11',
    ),
    'OnFileCreateFormPrerender' => 
    array (
      2 => '2',
    ),
    'OnFileEditFormPrerender' => 
    array (
      2 => '2',
    ),
    'OnFileManagerUpload' => 
    array (
      9 => '9',
    ),
    'OnHandleRequest' => 
    array (
      4 => '4',
      3 => '3',
    ),
    'OnLoadWebDocument' => 
    array (
      10 => '10',
    ),
    'OnLoadWebPageCache' => 
    array (
      4 => '4',
    ),
    'OnManagerPageBeforeRender' => 
    array (
      12 => '12',
      5 => '5',
      2 => '2',
    ),
    'OnMODXInit' => 
    array (
      10 => '10',
      3 => '3',
      11 => '11',
    ),
    'OnPluginFormPrerender' => 
    array (
      2 => '2',
      11 => '11',
    ),
    'OnPluginFormSave' => 
    array (
      11 => '11',
    ),
    'OnResourceDuplicate' => 
    array (
      10 => '10',
    ),
    'OnRichTextBrowserInit' => 
    array (
      12 => '12',
    ),
    'OnRichTextEditorInit' => 
    array (
      12 => '12',
    ),
    'OnRichTextEditorRegister' => 
    array (
      12 => '12',
      2 => '2',
    ),
    'OnSiteRefresh' => 
    array (
      14 => '14',
      1 => '1',
    ),
    'OnSnipFormPrerender' => 
    array (
      16 => '16',
      2 => '2',
      11 => '11',
    ),
    'OnSnipFormSave' => 
    array (
      16 => '16',
      11 => '11',
    ),
    'OnTempFormPrerender' => 
    array (
      16 => '16',
      2 => '2',
      11 => '11',
    ),
    'OnTempFormSave' => 
    array (
      16 => '16',
      11 => '11',
    ),
    'OnTVFormPrerender' => 
    array (
      16 => '16',
      11 => '11',
    ),
    'OnTVFormSave' => 
    array (
      16 => '16',
      11 => '11',
    ),
    'OnTVInputPropertiesList' => 
    array (
      7 => '7',
    ),
    'OnTVInputRenderList' => 
    array (
      2 => '2',
      7 => '7',
    ),
    'OnWebPageInit' => 
    array (
      19 => '19',
      4 => '4',
    ),
    'OnWebPagePrerender' => 
    array (
      1 => '1',
      6 => '6',
      4 => '4',
      18 => '18',
    ),
    'pdoToolsOnFenomInit' => 
    array (
      3 => '3',
    ),
  ),
  'pluginCache' => 
  array (
    1 => 
    array (
      'id' => '1',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'pdoTools',
      'description' => '',
      'editor_type' => '0',
      'category' => '1',
      'cache_type' => '0',
      'plugincode' => '/** @var modX $modx */
switch ($modx->event->name) {

    case \'OnMODXInit\':
        $fqn = $modx->getOption(\'pdoTools.class\', null, \'pdotools.pdotools\', true);
        $path = $modx->getOption(\'pdotools_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
        $modx->loadClass($fqn, $path, false, true);

        $fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
        $path = $modx->getOption(\'pdofetch_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
        $modx->loadClass($fqn, $path, false, true);
        break;

    case \'OnSiteRefresh\':
        /** @var pdoTools $pdoTools */
        if ($pdoTools = $modx->getService(\'pdoTools\')) {
            if ($pdoTools->clearFileCache()) {
                $modx->log(modX::LOG_LEVEL_INFO, $modx->lexicon(\'refresh_default\') . \': pdoTools\');
            }
        }
        break;

    case \'OnWebPagePrerender\':
        $parser = $modx->getParser();
        if ($parser instanceof pdoParser) {
            foreach ($parser->pdoTools->ignores as $key => $val) {
                $modx->resource->_output = str_replace($key, $val, $modx->resource->_output);
            }
        }
        break;
}',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/pdotools/elements/plugins/plugin.pdotools.php',
    ),
    2 => 
    array (
      'id' => '2',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'Ace',
      'description' => 'Ace code editor plugin for MODx Revolution',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * Ace Source Editor Plugin
 *
 * Events: OnManagerPageBeforeRender, OnRichTextEditorRegister, OnSnipFormPrerender,
 * OnTempFormPrerender, OnChunkFormPrerender, OnPluginFormPrerender,
 * OnFileCreateFormPrerender, OnFileEditFormPrerender, OnDocFormPrerender
 *
 * @author Danil Kostin <danya.postfactum(at)gmail.com>
 *
 * @package ace
 *
 * @var array $scriptProperties
 * @var Ace $ace
 */
if ($modx->event->name == \'OnRichTextEditorRegister\') {
    $modx->event->output(\'Ace\');
    return;
}

if ($modx->getOption(\'which_element_editor\', null, \'Ace\') !== \'Ace\') {
    return;
}

$corePath = $modx->getOption(\'ace.core_path\', null, $modx->getOption(\'core_path\').\'components/ace/\');
$ace = $modx->getService(\'ace\', \'Ace\', $corePath.\'model/ace/\');
$ace->initialize();

$extensionMap = array(
    \'tpl\'   => \'text/x-smarty\',
    \'htm\'   => \'text/html\',
    \'html\'  => \'text/html\',
    \'css\'   => \'text/css\',
    \'scss\'  => \'text/x-scss\',
    \'less\'  => \'text/x-less\',
    \'svg\'   => \'image/svg+xml\',
    \'xml\'   => \'application/xml\',
    \'xsl\'   => \'application/xml\',
    \'js\'    => \'application/javascript\',
    \'json\'  => \'application/json\',
    \'php\'   => \'application/x-php\',
    \'sql\'   => \'text/x-sql\',
    \'md\'    => \'text/x-markdown\',
    \'txt\'   => \'text/plain\',
    \'twig\'  => \'text/x-twig\'
);

// Define default mime for html elements(templates, chunks and html resources)
$html_elements_mime=$modx->getOption(\'ace.html_elements_mime\',null,false);
if(!$html_elements_mime){
    // this may deprecated in future because components may set ace.html_elements_mime option now
    switch (true) {
        case $modx->getOption(\'twiggy_class\'):
            $html_elements_mime = \'text/x-twig\';
            break;
        case $modx->getOption(\'pdotools_fenom_parser\'):
            $html_elements_mime = \'text/x-smarty\';
            break;
        default:
            $html_elements_mime = \'text/html\';
    }
}

// Defines wether we should highlight modx tags
$modxTags = false;
switch ($modx->event->name) {
    case \'OnSnipFormPrerender\':
        $field = \'modx-snippet-snippet\';
        $mimeType = \'application/x-php\';
        break;
    case \'OnTempFormPrerender\':
        $field = \'modx-template-content\';
        $modxTags = true;
        $mimeType = $html_elements_mime;
        break;
    case \'OnChunkFormPrerender\':
        $field = \'modx-chunk-snippet\';
        if ($modx->controller->chunk && $modx->controller->chunk->isStatic()) {
            $extension = pathinfo($modx->controller->chunk->name, PATHINFO_EXTENSION);
            if(!$extension||!isset($extensionMap[$extension])){
                $extension = pathinfo($modx->controller->chunk->getSourceFile(), PATHINFO_EXTENSION);
            }
            $mimeType = isset($extensionMap[$extension]) ? $extensionMap[$extension] : \'text/plain\';
        } else {
            $mimeType = $html_elements_mime;
        }
        $modxTags = true;
        break;
    case \'OnPluginFormPrerender\':
        $field = \'modx-plugin-plugincode\';
        $mimeType = \'application/x-php\';
        break;
    case \'OnFileCreateFormPrerender\':
        $field = \'modx-file-content\';
        $mimeType = \'text/plain\';
        break;
    case \'OnFileEditFormPrerender\':
        $field = \'modx-file-content\';
        $extension = pathinfo($scriptProperties[\'file\'], PATHINFO_EXTENSION);
        $mimeType = isset($extensionMap[$extension])
            ? $extensionMap[$extension]
            : (\'@FILE:\'.pathinfo($scriptProperties[\'file\'], PATHINFO_BASENAME));
        $modxTags = $extension == \'tpl\';
        break;
    case \'OnDocFormPrerender\':
        if (!$modx->controller->resourceArray) {
            return;
        }
        $field = \'ta\';
        $mimeType = $modx->getObject(\'modContentType\', $modx->controller->resourceArray[\'content_type\'])->get(\'mime_type\');

        if($mimeType == \'text/html\')$mimeType = $html_elements_mime;

        if ($modx->getOption(\'use_editor\')){
            $richText = $modx->controller->resourceArray[\'richtext\'];
            $classKey = $modx->controller->resourceArray[\'class_key\'];
            if ($richText || in_array($classKey, array(\'modStaticResource\',\'modSymLink\',\'modWebLink\',\'modXMLRPCResource\'))) {
                $field = false;
            }
        }
        $modxTags = true;
        break;
    case \'OnTVInputRenderList\':
        $modx->event->output($corePath . \'elements/tv/input/\');
        break;
    default:
        return;
}

$modxTags = (int) $modxTags;
$script = \'\';
if (!empty($field)) {
    $script .= "MODx.ux.Ace.replaceComponent(\'$field\', \'$mimeType\', $modxTags);";
}

if ($modx->event->name == \'OnDocFormPrerender\' && !$modx->getOption(\'use_editor\')) {
    $script .= "MODx.ux.Ace.replaceTextAreas(Ext.query(\'.modx-richtext\'));";
}

if ($script) {
    $modx->controller->addHtml(\'<script>Ext.onReady(function() {\' . $script . \'});</script>\');
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'ace/elements/plugins/ace.plugin.php',
    ),
    3 => 
    array (
      'id' => '3',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'ClientConfig',
      'description' => 'Sets system settings from the Client Config CMP.',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * ClientConfig
 *
 * Copyright 2011-2014 by Mark Hamstra <hello@markhamstra.com>
 *
 * ClientConfig is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ClientConfig is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ClientConfig; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package clientconfig
 *
 * @var modX $modx
 * @var int $id
 * @var string $mode
 * @var modResource $resource
 * @var modTemplate $template
 * @var modTemplateVar $tv
 * @var modChunk $chunk
 * @var modSnippet $snippet
 * @var modPlugin $plugin
*/

$eventName = $modx->event->name;

switch($eventName) {
    case \'OnMODXInit\':
    case \'OnHandleRequest\':
    case \'pdoToolsOnFenomInit\':
        // Measure to guard against pdoTools fenom parser loop bug: https://github.com/modmore/ClientConfig/issues/192
        // Here we only allow the pdoToolsOnFenomInit event to trigger the first time.
        if ($eventName === \'pdoToolsOnFenomInit\') {
            if ($modx->getOption(\'clientconfig.fenom_initialized\')) {
                return;
            }
            $modx->setOption(\'clientconfig.fenom_initialized\', true);
        }

        /* Grab the class */
        $path = $modx->getOption(\'clientconfig.core_path\', null, $modx->getOption(\'core_path\') . \'components/clientconfig/\');
        $path .= \'model/clientconfig/\';
        $clientConfig = $modx->getService(\'clientconfig\',\'ClientConfig\', $path);

        /* If we got the class (gotta be careful of failed migrations), grab settings and go! */
        if ($clientConfig instanceof ClientConfig) {
            $contextKey = $modx->context instanceof modContext || $modx->context instanceof \\MODX\\Revolution\\modContext
                ? $modx->context->get(\'key\') : \'web\';
            $settings = $clientConfig->getSettings($contextKey);

            /* Make settings available as [[++tags]] */
            $modx->setPlaceholders($settings, \'+\');

            /* Make settings available for $modx->getOption() */
            foreach ($settings as $key => $value) {
                $modx->setOption($key, $value);
            }
        }
        break;
}

return;',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    4 => 
    array (
      'id' => '4',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'debugParser',
      'description' => '',
      'editor_type' => '0',
      'category' => '4',
      'cache_type' => '0',
      'plugincode' => 'if (empty($_REQUEST[\'debug\']) || !$modx->user->hasSessionContext(\'mgr\') || $modx->context->key == \'mgr\') {
	return;
}

switch ($modx->event->name) {

	case \'OnHandleRequest\':
		if ($modx->parser instanceof pdoParser && $modx->loadClass(\'debugPdoParser\', MODX_CORE_PATH . \'components/debugparser/model/\', false, true)) {
			$modx->parser = new debugPdoParser($modx);
		}
		elseif ($modx->loadClass(\'debugParser\', MODX_CORE_PATH . \'components/debugparser/model/\', false, true)) {
			$modx->parser = new debugParser($modx);
		}
		break;

	case \'OnWebPageInit\':
		if (method_exists($modx->parser, \'clearCache\') && empty($_REQUEST[\'cache\'])) {
			$modx->parser->clearCache();
		}
		break;

	case \'OnLoadWebPageCache\':
		if (property_exists($modx->parser, \'from_cache\')) {
			$modx->parser->from_cache = true;
		}
		break;

	case \'OnWebPagePrerender\':
		if (method_exists($modx->parser, \'generateReport\')) {
			$modx->parser->generateReport();
		}
		break;
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/debugparser/elements/plugins/plugin.debugparser.php',
    ),
    5 => 
    array (
      'id' => '5',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'FormIt',
      'description' => '',
      'editor_type' => '0',
      'category' => '5',
      'cache_type' => '0',
      'plugincode' => '/**
 * FormIt
 *
 * Copyright 2009-2017 by Sterc <modx@sterc.nl>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormIt plugin
 *
 * @package formit
 */

$formit = $modx->getService(
    \'formit\',
    \'FormIt\',
    $modx->getOption(\'formit.core_path\', null, $modx->getOption(\'core_path\').\'components/formit/\') .\'model/formit/\',
    array()
);

if (!($formit instanceof FormIt)) {
    return;
}

switch ($modx->event->name) {
    case \'OnManagerPageBeforeRender\':
        // If migration status is false, show migrate alert message bar in manager
        if (method_exists(\'FormIt\',\'encryptionMigrationStatus\')) {
            if (!$formit->encryptionMigrationStatus()) {
                $modx->lexicon->load(\'formit:mgr\');
                $properties = array(\'message\' => $modx->lexicon(\'formit.migrate_alert\'));
                $chunk = $formit->_getTplChunk(\'migrate/alert\');
                if ($chunk) {
                    $modx->regClientStartupHTMLBlock($chunk->process($properties));
                    $modx->regClientCSS($formit->config[\'cssUrl\'] . \'migrate.css\');
                }
            }
        }
}',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    6 => 
    array (
      'id' => '6',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'FetchIt',
      'description' => '',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
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
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/fetchit/elements/plugins/fetchit.php',
    ),
    7 => 
    array (
      'id' => '7',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'MIGX',
      'description' => '',
      'editor_type' => '0',
      'category' => '7',
      'cache_type' => '0',
      'plugincode' => '$corePath = $modx->getOption(\'migx.core_path\',null,$modx->getOption(\'core_path\').\'components/migx/\');
$assetsUrl = $modx->getOption(\'migx.assets_url\', null, $modx->getOption(\'assets_url\') . \'components/migx/\');
switch ($modx->event->name) {
    case \'OnTVInputRenderList\':
        $modx->event->output($corePath.\'elements/tv/input/\');
        break;
    case \'OnTVInputPropertiesList\':
        $modx->event->output($corePath.\'elements/tv/inputoptions/\');
        break;

        case \'OnDocFormPrerender\':
        $modx->controller->addCss($assetsUrl.\'css/mgr.css\');
        break; 
 
    /*          
    case \'OnTVOutputRenderList\':
        $modx->event->output($corePath.\'elements/tv/output/\');
        break;
    case \'OnTVOutputRenderPropertiesList\':
        $modx->event->output($corePath.\'elements/tv/properties/\');
        break;
    
    case \'OnDocFormPrerender\':
        $assetsUrl = $modx->getOption(\'colorpicker.assets_url\',null,$modx->getOption(\'assets_url\').\'components/colorpicker/\'); 
        $modx->regClientStartupHTMLBlock(\'<script type="text/javascript">
        Ext.onReady(function() {
            
        });
        </script>\');
        $modx->regClientStartupScript($assetsUrl.\'sources/ColorPicker.js\');
        $modx->regClientStartupScript($assetsUrl.\'sources/ColorMenu.js\');
        $modx->regClientStartupScript($assetsUrl.\'sources/ColorPickerField.js\');		
        $modx->regClientCSS($assetsUrl.\'resources/css/colorpicker.css\');
        break;
     */
}
return;',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    9 => 
    array (
      'id' => '9',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'migxResizeOnUpload',
      'description' => '',
      'editor_type' => '0',
      'category' => '7',
      'cache_type' => '0',
      'plugincode' => '/**
 * migxResizeOnUpload Plugin
 *
 * Events: OnFileManagerUpload
 * Author: Bruno Perner <b.perner@gmx.de>
 * Modified to read multiple configs from mediasource-property
 * 
 * First Author: Vasiliy Naumkin <bezumkin@yandex.ru>
 * Required: PhpThumbOf snippet for resizing images
 * 
 * Example: mediasource - property \'resizeConfig\':
 * [{"alias":"origin","w":"500","h":"500","far":1},{"alias":"thumb","w":"150","h":"150","far":1}]
 */

if ($modx->event->name != \'OnFileManagerUpload\') {
    return;
}


$file = $modx->event->params[\'files\'][\'file\'];
$directory = $modx->event->params[\'directory\'];

if ($file[\'error\'] != 0) {
    return;
}

$name = $file[\'name\'];
//$extensions = explode(\',\', $modx->getOption(\'upload_images\'));

$source = $modx->event->params[\'source\'];

if ($source instanceof modMediaSource) {
    //$dirTree = $modx->getOption(\'dirtree\', $_REQUEST, \'\');
    //$modx->setPlaceholder(\'docid\', $resource_id);
    $source->initialize();
    $basePath = str_replace(\'/./\', \'/\', $source->getBasePath());
    //$cachepath = $cachepath . $dirTree;
    $baseUrl = $modx->getOption(\'site_url\') . $source->getBaseUrl();
    //$baseUrl = $baseUrl . $dirTree;
    $sourceProperties = $source->getPropertyList();

    //echo \'<pre>\' . print_r($sourceProperties, 1) . \'</pre>\';
    //$allowedExtensions = $modx->getOption(\'allowedFileTypes\', $sourceProperties, \'\');
    //$allowedExtensions = empty($allowedExtensions) ? \'jpg,jpeg,png,gif\' : $allowedExtensions;
    //$maxFilesizeMb = $modx->getOption(\'maxFilesizeMb\', $sourceProperties, \'8\');
    //$maxFiles = $modx->getOption(\'maxFiles\', $sourceProperties, \'0\');
    //$thumbX = $modx->getOption(\'thumbX\', $sourceProperties, \'100\');
    //$thumbY = $modx->getOption(\'thumbY\', $sourceProperties, \'100\');
    $resizeConfigs = $modx->getOption(\'resizeConfigs\', $sourceProperties, \'\');
    $resizeConfigs = $modx->fromJson($resizeConfigs);
    $thumbscontainer = $modx->getOption(\'thumbscontainer\', $sourceProperties, \'thumbs/\');
    $imageExtensions = $modx->getOption(\'imageExtensions\', $sourceProperties, \'jpg,jpeg,png,gif,JPG\');
    $imageExtensions = explode(\',\', $imageExtensions);
    //$uniqueFilenames = $modx->getOption(\'uniqueFilenames\', $sourceProperties, false);
    //$onImageUpload = $modx->getOption(\'onImageUpload\', $sourceProperties, \'\');
    //$onImageRemove = $modx->getOption(\'onImageRemove\', $sourceProperties, \'\');
    $cleanalias = $modx->getOption(\'cleanFilename\', $sourceProperties, false);

}

if (is_array($resizeConfigs) && count($resizeConfigs) > 0) {
    foreach ($resizeConfigs as $rc) {
        if (isset($rc[\'alias\'])) {
            $filePath = $basePath . $directory;
            $filePath = str_replace(\'//\',\'/\',$filePath);
            if ($rc[\'alias\'] == \'origin\') {
                $thumbPath = $filePath;
            } else {
                $thumbPath = $filePath . $rc[\'alias\'] . \'/\';
                $permissions = octdec(\'0\' . (int)($modx->getOption(\'new_folder_permissions\', null, \'755\', true)));
                if (!@mkdir($thumbPath, $permissions, true)) {
                    $modx->log(MODX_LOG_LEVEL_ERROR, sprintf(\'[migxResourceMediaPath]: could not create directory %s).\', $thumbPath));
                } else {
                    chmod($thumbPath, $permissions);
                }

            }


            $filename = $filePath . $name;
            $thumbname = $thumbPath . $name;
            $ext = substr(strrchr($name, \'.\'), 1);
            if (in_array($ext, $imageExtensions)) {
                $sizes = getimagesize($filename);
                echo $sizes[0]; 
                //$format = substr($sizes[\'mime\'], 6);
                if ($sizes[0] > $rc[\'w\'] || $sizes[1] > $rc[\'h\']) {
                    if ($sizes[0] < $rc[\'w\']) {
                        $rc[\'w\'] = $sizes[0];
                    }
                    if ($sizes[1] < $rc[\'h\']) {
                        $rc[\'h\'] = $sizes[1];
                    }
                    $type = $sizes[0] > $sizes[1] ? \'landscape\' : \'portrait\';
                    if (isset($rc[\'far\']) && $rc[\'far\'] == \'1\' && isset($rc[\'w\']) && isset($rc[\'h\'])) {
                        if ($type = \'landscape\') {
                            unset($rc[\'h\']);
                        }else {
                            unset($rc[\'w\']);
                        }
                    }

                    $options = \'\';
                    foreach ($rc as $k => $v) {
                        if ($k != \'alias\') {
                            $options .= \'&\' . $k . \'=\' . $v;
                        }
                    }
                    $resized = $modx->runSnippet(\'phpthumbof\', array(\'input\' => $filePath . $name, \'options\' => $options));
                    rename(MODX_BASE_PATH . substr($resized, 1), $thumbname);
                }
            }


        }
    }
}',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    10 => 
    array (
      'id' => '10',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'seoPro',
      'description' => 'SEO optimizing plugin for MODx Revolution.',
      'editor_type' => '0',
      'category' => '8',
      'cache_type' => '0',
      'plugincode' => '/**
 * The base seoPro snippet.
 *
 * @package seopro
 */
$seoPro = $modx->getService(\'seopro\', \'seoPro\', $modx->getOption(\'seopro.core_path\', null, $modx->getOption(\'core_path\') . \'components/seopro/\') . \'model/seopro/\', $scriptProperties);
if (!($seoPro instanceof seoPro)) {
    return \'\';
}

$disabledTemplates = explode(\',\', $modx->getOption(\'seopro.disabledtemplates\', null, \'0\'));

switch ($modx->event->name) {
    case \'OnMODXInit\':
        $version = $modx->getVersionData();
        $version = (int)($version[\'version\'] . $version[\'major_version\']);
        if ($version < 27) {
            $modx->loadClass(\'modResource\');
            $modx->map[\'modResource\'][\'fieldMeta\'][\'description\'] = array(
                \'dbtype\' => \'text\',
                \'phptype\' => \'string\',
                \'index\' => \'fulltext\',
                \'indexgrp\' => \'content_ft_idx\',
            );
        }
        break;

    case \'OnDocFormRender\':
        $template = (string)$resource->get(\'template\');
        $override = false;
        if (isset($_REQUEST[\'template\'])) {
            $template = (string)$_REQUEST[\'template\'];
            $override = true;
        }
        if (($override && $template === \'0\') || (!empty($template) && in_array($template, $disabledTemplates))) {
            break;
        }
        
        $currClassKey = $resource->get(\'class_key\');
        $strFields = $modx->getOption(\'seopro.fields\', null, \'pagetitle:70,longtitle:70,description:320,alias:2023,menutitle:2023\');
        $arrFields = array();
        if (is_array(explode(\',\', $strFields))) {
            foreach (explode(\',\', $strFields) as $field) {
                list($fieldName, $fieldCount) = explode(\':\', $field);
                $arrFields[$fieldName] = $fieldCount;
            }
        } else {
            return \'\';
        }

        $keywords = \'\';
        $modx->controller->addLexiconTopic(\'seopro:default\');
        $ctxKey = !empty($resource) ? $resource->get(\'context_key\') : $modx->getOption(\'default_context\');
        $ctx = $modx->getContext($ctxKey);
        if ($ctx) {
            $url = $ctx->getOption(\'site_url\', \'\', $modx->getOption(\'site_url\'));
        } else {
            $url = $modx->getOption(\'site_url\');
        }
        if ($mode == \'upd\') {
            if ($ctx) {
                if ($resource->get(\'id\') != $ctx->getOption(\'site_start\', \'\', $modx->getOption(\'site_start\'))) {
                    $url .= $resource->get(\'uri\');
                }
            } else {
                $url = $modx->makeUrl($resource->get(\'id\'), \'\', \'\', \'full\');
            }
            $url = str_replace(
                $resource->get(\'alias\'),
                \'<span id=\\"seopro-replace-alias\\">\' . $resource->get(\'alias\') . \'</span>\',
                $url
            );
            $seoKeywords = $modx->getObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
            if ($seoKeywords) {
                $keywords = $seoKeywords->get(\'keywords\');
            }
        }

        if ($_REQUEST[\'id\'] == $modx->getOption(\'site_start\')) {
            unset($arrFields[\'alias\']);
            unset($arrFields[\'menutitle\']);
        }


        $config = $seoPro->config;
        unset($config[\'resource\']);
        $modx->regClientStartupHTMLBlock(\'<script type="text/javascript">
        Ext.onReady(function() {
            seoPro.config = \' . $modx->toJSON($config) . \';
            seoPro.config.record = "\' . $keywords . \'";
            seoPro.config.values = {};
            seoPro.config.fields = "\' . implode(",", array_keys($arrFields)) . \'";
            seoPro.config.chars = \' . $modx->toJSON($arrFields) . \'
            seoPro.config.url = "\' . $url . \'";
        });</script>\');

        /* include CSS and JS*/
        $version = $modx->getVersionData();
        if($version[\'version\'] == 2 && $version[\'major_version\'] == 2){
            $modx->regClientCSS($seoPro->config[\'assetsUrl\'] . \'css/mgr.css\');
        }else{
            $modx->regClientCSS($seoPro->config[\'assetsUrl\'] . \'css/mgr23.css\');
        }
        $modx->regClientStartupScript($seoPro->config[\'assetsUrl\'] . \'js/mgr/seopro.js??v=\' . $modx->getOption(\'seopro.version\', null, \'v1.0.0\'));
        $modx->regClientStartupScript($seoPro->config[\'assetsUrl\'] . \'js/mgr/resource.js?v=\' . $modx->getOption(\'seopro.version\', null, \'v1.0.0\'));

        break;

    case \'OnDocFormSave\':
        $template = (string)$resource->get(\'template\');
        $override = false;
        if (isset($_REQUEST[\'template\'])) {
            $template = (string)$_REQUEST[\'template\'];
            $override = true;
        }
        if (($override && $template === \'0\') || (!empty($template) && in_array($template, $disabledTemplates))) {
            break;
        }
        $seoKeywords = $modx->getObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
        if (!$seoKeywords && isset($resource)) {
            $seoKeywords = $modx->newObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
        }
        if($seoKeywords){
            if (isset($_POST[\'keywords\'])){
                $seoKeywords->set(\'keywords\', trim($_POST[\'keywords\'], \',\'));
            } else {
                $seoKeywords->set(\'keywords\', \'\');
            }
            $seoKeywords->save();
        }
        break;

    case \'onResourceDuplicate\':
        $template = (string)$resource->get(\'template\');
        $override = false;
        if (isset($_REQUEST[\'template\'])) {
            $template = (string)$_REQUEST[\'template\'];
            $override = true;
        }
        if (($override && $template === \'0\') || (!empty($template) && in_array($template, $disabledTemplates))) {
            break;
        }

        $seoKeywords = $modx->getObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
        if (!$seoKeywords) {
            $seoKeywords = $modx->newObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
        }
        $newSeoKeywords = $modx->newObject(\'seoKeywords\');
        $newSeoKeywords->fromArray($seoKeywords->toArray());
        $newSeoKeywords->set(\'resource\', $newResource->get(\'id\'));
        $newSeoKeywords->save();
        break;

    case \'OnLoadWebDocument\':
        if ($modx->context->get(\'key\') == "mgr") {
            break;
        }
        $template = ($modx->resource->get(\'template\')) ? (string)$modx->resource->get(\'template\') : \'\';
        if (in_array($template, $disabledTemplates)) {
            break;
        }
        $seoKeywords = $modx->getObject(\'seoKeywords\', array(\'resource\' => $modx->resource->get(\'id\')));
        if ($seoKeywords) {
            $keyWords = $seoKeywords->get(\'keywords\');
            $modx->setPlaceholder(\'seoPro.keywords\', $keyWords);
        }
        // Render the meta title, based on system settings
        $titleFormat = $modx->getOption(\'seopro.title_format\');
        if (empty($titleFormat)) {
            $siteDelimiter = $modx->getOption(\'seopro.delimiter\', null, \'/\');
            $siteUseSitename = (boolean)$modx->getOption(\'seopro.usesitename\', null, true);
            $siteID = $modx->resource->get(\'id\');
            $siteName = $modx->getOption(\'site_name\');
            $longtitle = $modx->resource->get(\'longtitle\');
            $pagetitle = $modx->resource->get(\'pagetitle\');
            $seoProTitle = array();
            if ($siteID == $modx->getOption(\'site_start\')) {
                $seoProTitle[\'pagetitle\'] = !empty($longtitle) ? $longtitle : $siteName;
            } else {
                $seoProTitle[\'pagetitle\'] = !empty($longtitle) ? $longtitle : $pagetitle;
                if ($siteUseSitename) {
                    $seoProTitle[\'delimiter\'] = $siteDelimiter;
                    $seoProTitle[\'sitename\'] = $siteName;
                }
            }
            $title = implode(\' \', $seoProTitle);
        } else {
            $title = $modx->getOption(\'seopro.title_format\');
        }
        $modx->setPlaceholder(\'seoPro.title\', $title);
        break;
}',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    11 => 
    array (
      'id' => '11',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'VersionX',
      'description' => 'The plugin that enables VersionX of tracking your content.',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * VersionX
 *
 * @package versionx
 *
 * @var modX $modx
 * @var VersionX $versionX
 * @var int $id
 * @var string $mode
 * @var modResource $resource
 * @var modTemplate|\\MODX\\Revolution\\modTemplate $template
 * @var modTemplateVar $tv
 * @var modChunk|\\MODX\\Revolution\\modChunk $chunk
 * @var modSnippet|\\MODX\\Revolution\\modSnippet $snippet
 * @var modPlugin|\\MODX\\Revolution\\modPluginEvent $plugin
*/

use Carbon\\Carbon;
use modmore\\VersionX\\Enums\\RevertAction;
use modmore\\VersionX\\Types\\Chunk;
use modmore\\VersionX\\Types\\Plugin;
use modmore\\VersionX\\Types\\Snippet;
use modmore\\VersionX\\Types\\TV;
use modmore\\VersionX\\Types\\Resource;
use modmore\\VersionX\\Types\\Template;
use modmore\\VersionX\\VersionX;

$eventName = $modx->event->name;

$path = $modx->getOption(\'versionx.core_path\', null, MODX_CORE_PATH . \'components/versionx/\');
require $path . \'vendor/autoload.php\';

if (!$versionX = new VersionX($modx)) {
    $modx->log(modX::LOG_LEVEL_ERROR, \'Could not load VersionX\');
    return;
}

switch($eventName) {
    case \'OnDocFormSave\':
    case \'FredOnFredResourceSave\':
        if ($modx->getOption(\'versionx.enable.resources\',null,true) && $id) {
            $type = new Resource($versionX);
            $result = $versionX->deltas()->createDelta($id, $type);
        }
        break;

    case \'OnTempFormSave\':
        if ($modx->getOption(\'versionx.enable.templates\',null,true) && $id) {
            $type = new Template($versionX);
            $result = $versionX->deltas()->createDelta($id, $type);
        }
        break;

    case \'OnTVFormSave\':
        if ($modx->getOption(\'versionx.enable.templatevariables\',null,true) && $id) {
            $type = new TV($versionX);
            $result = $versionX->deltas()->createDelta($id, $type);
        }
        break;

    case \'OnChunkFormSave\':
        if ($modx->getOption(\'versionx.enable.chunks\',null,true) && $id) {
            $type = new Chunk($versionX);
            $result = $versionX->deltas()->createDelta($id, $type);
        }
        break;

    case \'OnSnipFormSave\':
        if ($modx->getOption(\'versionx.enable.snippets\',null,true) && $id) {
            $type = new Snippet($versionX);
            $result = $versionX->deltas()->createDelta($id, $type);
        }
        break;

    case \'OnPluginFormSave\':
        if ($modx->getOption(\'versionx.enable.plugins\',null,true) && $id) {
            $type = new Plugin($versionX);
            $result = $versionX->deltas()->createDelta($id, $type);
        }
        break;

    case \'OnBeforeManagerPageInit\': // Required for autoloading
    case \'OnManagerPageInit\':
    case \'OnHandleRequest\':

        break;

    /* Add tabs */
    case \'OnDocFormPrerender\':
        if ($mode == modSystemEvent::MODE_UPD && $modx->getOption(\'versionx.formtabs.resource\',null,true)) {
            $versionX->outputVersionsTab($id, new Resource($versionX));
        }
        break;

    case \'OnTempFormPrerender\':
        if ($mode == modSystemEvent::MODE_UPD && $modx->getOption(\'versionx.formtabs.template\',null,true)) {
            $versionX->outputVersionsTab($id, new Template($versionX));
        }
        break;

    case \'OnTVFormPrerender\':
        if ($mode == modSystemEvent::MODE_UPD && $modx->getOption(\'versionx.formtabs.templatevariable\',null,true)) {
            $versionX->outputVersionsTab($id, new TV($versionX));
        }
        break;

    case \'OnChunkFormPrerender\':
        if ($mode == modSystemEvent::MODE_UPD && $modx->getOption(\'versionx.formtabs.chunk\',null,true)) {
            $versionX->outputVersionsTab($id, new Chunk($versionX));
        }
        break;

    case \'OnSnipFormPrerender\':
        if ($mode == modSystemEvent::MODE_UPD && $modx->getOption(\'versionx.formtabs.snippet\',null,true)) {
            $versionX->outputVersionsTab($id, new Snippet($versionX));
        }
        break;

    case \'OnPluginFormPrerender\':
        if ($mode == modSystemEvent::MODE_UPD && $modx->getOption(\'versionx.formtabs.plugin\',null,true)) {
            $versionX->outputVersionsTab($id, new Plugin($versionX));
        }
        break;

    case \'OnResourceMagicPreview\':
        /**  @var array $properties */
        if (empty($properties[\'versionx\'])) {
            break;
        }

        $versionX = new VersionX($modx);
        $deltaId = $properties[\'delta_id\'];

        $delta = $modx->getObject(\\vxDelta::class, [\'id\' => $deltaId]);
        if ($delta->get(\'type_class\') !== Resource::class) {
            break;
        };

        $previewType = new \\modmore\\VersionX\\Types\\ResourcePreview($versionX);

        // Check type of revert preview (\'delta\' or \'point in time\')
        if ($properties[\'revert\'] === \'delta\') {
            $now = Carbon::now()->toDateTimeString();
            $fields = $modx->getCollection(\\vxDeltaField::class, [
                \'delta\' => $deltaId,
            ]);
            foreach ($fields as $field) {
                $resource->set($field->get(\'field\'), $field->get(\'before\'));
            }
            $resource = $previewType->afterRevert(RevertAction::DELTA, $fields, $resource, $now);
        }
        elseif ($properties[\'revert\'] === \'pit\') {
            // Get the first version of every field after the "time_end" on the selected delta
            $fields = [];
            foreach ($versionX->deltas()->getClosestDeltaFields($previewType, $resource, [], $delta->get(\'time_start\')) as $item) {
                $fields[$item->get(\'field\')] = $item;
            }
            // Apply the field values to the object
            // We want to revert to all fields to the after value of a specific point in time.
            foreach ($fields as $field) {
                $resource->set($field->get(\'field\'), $field->get(\'before\'));
            }
        }

        break;
}

return true;',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    12 => 
    array (
      'id' => '12',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'CKEditor',
      'description' => 'CKEditor WYSIWYG editor plugin for MODX2 and MODX3',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * CKEditor WYSIWYG Editor Plugin
 *
 * Events: OnManagerPageBeforeRender, OnRichTextEditorRegister, OnRichTextEditorInit, OnRichTextBrowserInit
 *
 * @var modX $modx
 * @author Danil Kostin <danya.postfactum(at)gmail.com>
 *
 * @package ckeditor
 */
$enabled = $modx->getOption(\'which_editor\', null, \'CKEditor\') == \'CKEditor\' && $modx->getOption(\'use_editor\', null, true);

switch ($modx->event->name) {
    case \'OnRichTextEditorRegister\':
        $modx->event->output(\'CKEditor\');
        break;
    case \'OnManagerPageBeforeRender\':
        if ($enabled) {
            /** @var CKEditor $ckeditor */
            $ckeditor = $modx->getService(\'ckeditor\', \'CKEditor\', $modx->getOption(\'ckeditor.core_path\', null, $modx->getOption(\'core_path\').\'components/ckeditor/\') . \'model/ckeditor/\');
            $ckeditor->initialize();
        }
        break;
    case \'OnRichTextEditorInit\':
        break;
    case \'OnRichTextBrowserInit\':
        if ($enabled) {
            $funcNum = $_REQUEST[\'CKEditorFuncNum\'];
            $modx->event->output("function(data){
                window.parent.opener.CKEDITOR.tools.callFunction({$funcNum}, data.fullRelativeUrl);
            }");
        }
        break;
}

return;',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '1',
      'static_file' => 'ckeditor/elements/plugins/ckeditor.plugin.php',
    ),
    13 => 
    array (
      'id' => '13',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'cacheVersion',
      'description' => '',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => 'if ($modx->event->name == \'OnBeforeCacheUpdate\') {
    $now = date("mdyHis");
    $cache_version = $modx->getObject(\'modSystemSetting\', \'cache_version\');
    $cache_version->set(\'value\', $now);
    $cache_version->save();
}',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    14 => 
    array (
      'id' => '14',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'phpThumbOfCacheManager',
      'description' => 'Handles cache cleaning when clearing the Site Cache.',
      'editor_type' => '0',
      'category' => '24',
      'cache_type' => '0',
      'plugincode' => '/*
 * Handles cache cleanup
 * pThumb
 * Copyright 2013 Jason Grant
 *
 * Please see the GitHub page for documentation or to report bugs:
 * https://github.com/oo12/phpThumbOf
 *
 * pThumb is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * pThumb is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * phpThumbOf; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 */

if ($modx->event->name === \'OnSiteRefresh\') {
	if (!$modx->loadClass(\'pThumbCacheCleaner\', MODX_CORE_PATH . \'components/phpthumbof/model/\', true, true)) {
		$modx->log(modX::LOG_LEVEL_ERROR, \'[pThumb] Could not load pThumbCacheCleaner class.\');
		return;
	}
	static $pt_settings = array();
	$pThumb = new pThumbCacheCleaner($modx, $pt_settings, array(), true);
	$pThumb->cleanCache();
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    16 => 
    array (
      'id' => '16',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'modDevTools',
      'description' => 'Rapid site development helper for MODx Revolution',
      'editor_type' => '0',
      'category' => '42',
      'cache_type' => '0',
      'plugincode' => '/**
 * modDevTools Plugin
 *
 * @package moddevtools
 * @subpackage plugin
 *
 * @var modX $modx
 * @var array $scriptProperties
 */

$className = \'TreehillStudio\\ModDevTools\\Plugins\\Events\\\\\' . $modx->event->name;

$corePath = $modx->getOption(\'moddevtools.core_path\', null, $modx->getOption(\'core_path\') . \'components/moddevtools/\');
/** @var modDevTools $moddevtools */
$moddevtools = $modx->getService(\'moddevtools\', \'modDevTools\', $corePath . \'model/moddevtools/\', [
    \'core_path\' => $corePath
]);

if ($moddevtools) {
    if (class_exists($className)) {
        $handler = new $className($modx, $scriptProperties);
        if (get_class($handler) == $className) {
            $handler->run();
        } else {
            $modx->log(xPDO::LOG_LEVEL_ERROR, $className. \' could not be initialized!\', \'\', \'modDevTools Plugin\');
        }
    } else {
        $modx->log(xPDO::LOG_LEVEL_ERROR, $className. \' was not found!\', \'\', \'modDevTools Plugin\');
    }
}

return;',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    18 => 
    array (
      'id' => '18',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'LastModified',
      'description' => 'MODx Revolution plugin which handles the If-Modified-Since request header.',
      'editor_type' => '0',
      'category' => '43',
      'cache_type' => '0',
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
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/lastmodified/elements/plugins/plugin.lastmodified.php',
    ),
    19 => 
    array (
      'id' => '19',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'Headers',
      'description' => '',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '// Работаем только на фронтенде (чтобы не ломать админку MODX лишними заголовками)
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

header(\'X-Robots-Tag: index, follow\');',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
  ),
  'policies' => 
  array (
    'modAccessContext' => 
    array (
      'mgr' => 
      array (
        0 => 
        array (
          'principal' => 1,
          'authority' => 0,
          'policy' => 
          array (
            'about' => true,
            'access_permissions' => true,
            'actions' => true,
            'change_password' => true,
            'change_profile' => true,
            'charsets' => true,
            'class_map' => true,
            'components' => true,
            'content_types' => true,
            'countries' => true,
            'create' => true,
            'credits' => true,
            'customize_forms' => true,
            'dashboards' => true,
            'database' => true,
            'database_truncate' => true,
            'delete_category' => true,
            'delete_chunk' => true,
            'delete_context' => true,
            'delete_document' => true,
            'delete_weblink' => true,
            'delete_symlink' => true,
            'delete_static_resource' => true,
            'delete_eventlog' => true,
            'delete_plugin' => true,
            'delete_propertyset' => true,
            'delete_role' => true,
            'delete_snippet' => true,
            'delete_template' => true,
            'delete_tv' => true,
            'delete_user' => true,
            'directory_chmod' => true,
            'directory_create' => true,
            'directory_list' => true,
            'directory_remove' => true,
            'directory_update' => true,
            'edit_category' => true,
            'edit_chunk' => true,
            'edit_context' => true,
            'edit_document' => true,
            'edit_weblink' => true,
            'edit_symlink' => true,
            'edit_static_resource' => true,
            'edit_locked' => true,
            'edit_plugin' => true,
            'edit_propertyset' => true,
            'edit_role' => true,
            'edit_snippet' => true,
            'edit_template' => true,
            'edit_tv' => true,
            'edit_user' => true,
            'element_tree' => true,
            'empty_cache' => true,
            'error_log_erase' => true,
            'error_log_view' => true,
            'events' => true,
            'export_static' => true,
            'file_create' => true,
            'file_list' => true,
            'file_manager' => true,
            'file_remove' => true,
            'file_tree' => true,
            'file_update' => true,
            'file_upload' => true,
            'file_unpack' => true,
            'file_view' => true,
            'flush_sessions' => true,
            'frames' => true,
            'help' => true,
            'home' => true,
            'import_static' => true,
            'languages' => true,
            'lexicons' => true,
            'list' => true,
            'load' => true,
            'logout' => true,
            'logs' => true,
            'menus' => true,
            'menu_reports' => true,
            'menu_security' => true,
            'menu_site' => true,
            'menu_support' => true,
            'menu_system' => true,
            'menu_tools' => true,
            'menu_user' => true,
            'messages' => true,
            'namespaces' => true,
            'new_category' => true,
            'new_chunk' => true,
            'new_context' => true,
            'new_document' => true,
            'new_document_in_root' => true,
            'new_plugin' => true,
            'new_propertyset' => true,
            'new_role' => true,
            'new_snippet' => true,
            'new_static_resource' => true,
            'new_symlink' => true,
            'new_template' => true,
            'new_tv' => true,
            'new_user' => true,
            'new_weblink' => true,
            'packages' => true,
            'policy_delete' => true,
            'policy_edit' => true,
            'policy_new' => true,
            'policy_save' => true,
            'policy_template_delete' => true,
            'policy_template_edit' => true,
            'policy_template_new' => true,
            'policy_template_save' => true,
            'policy_template_view' => true,
            'policy_view' => true,
            'property_sets' => true,
            'providers' => true,
            'publish_document' => true,
            'purge_deleted' => true,
            'remove' => true,
            'remove_locks' => true,
            'resource_duplicate' => true,
            'resourcegroup_delete' => true,
            'resourcegroup_edit' => true,
            'resourcegroup_new' => true,
            'resourcegroup_resource_edit' => true,
            'resourcegroup_resource_list' => true,
            'resourcegroup_save' => true,
            'resourcegroup_view' => true,
            'resource_quick_create' => true,
            'resource_quick_update' => true,
            'resource_tree' => true,
            'save' => true,
            'save_category' => true,
            'save_chunk' => true,
            'save_context' => true,
            'save_document' => true,
            'save_plugin' => true,
            'save_propertyset' => true,
            'save_role' => true,
            'save_snippet' => true,
            'save_template' => true,
            'save_tv' => true,
            'save_user' => true,
            'search' => true,
            'set_sudo' => true,
            'settings' => true,
            'sources' => true,
            'source_delete' => true,
            'source_edit' => true,
            'source_save' => true,
            'source_view' => true,
            'steal_locks' => true,
            'tree_show_element_ids' => true,
            'tree_show_resource_ids' => true,
            'undelete_document' => true,
            'unlock_element_properties' => true,
            'unpublish_document' => true,
            'usergroup_delete' => true,
            'usergroup_edit' => true,
            'usergroup_new' => true,
            'usergroup_save' => true,
            'usergroup_user_edit' => true,
            'usergroup_user_list' => true,
            'usergroup_view' => true,
            'view' => true,
            'view_category' => true,
            'view_chunk' => true,
            'view_context' => true,
            'view_document' => true,
            'view_element' => true,
            'view_eventlog' => true,
            'view_offline' => true,
            'view_plugin' => true,
            'view_propertyset' => true,
            'view_role' => true,
            'view_snippet' => true,
            'view_sysinfo' => true,
            'view_template' => true,
            'view_tv' => true,
            'view_unpublished' => true,
            'view_user' => true,
            'workspaces' => true,
          ),
        ),
        1 => 
        array (
          'principal' => 2,
          'authority' => 0,
          'policy' => 
          array (
            'about' => false,
            'access_permissions' => false,
            'actions' => false,
            'change_password' => true,
            'change_profile' => true,
            'charsets' => false,
            'class_map' => true,
            'components' => true,
            'content_types' => false,
            'countries' => true,
            'create' => true,
            'credits' => false,
            'customize_forms' => false,
            'dashboards' => false,
            'database' => false,
            'database_truncate' => false,
            'delete_category' => true,
            'delete_chunk' => false,
            'delete_context' => false,
            'delete_document' => true,
            'delete_eventlog' => false,
            'delete_plugin' => false,
            'delete_propertyset' => false,
            'delete_role' => false,
            'delete_snippet' => false,
            'delete_static_resource' => true,
            'delete_symlink' => true,
            'delete_template' => true,
            'delete_tv' => true,
            'delete_user' => false,
            'delete_weblink' => true,
            'directory_chmod' => false,
            'directory_create' => true,
            'directory_list' => true,
            'directory_remove' => true,
            'directory_update' => true,
            'edit_category' => true,
            'edit_chunk' => false,
            'edit_context' => true,
            'edit_document' => true,
            'edit_locked' => true,
            'edit_plugin' => false,
            'edit_propertyset' => false,
            'edit_role' => false,
            'edit_snippet' => false,
            'edit_static_resource' => true,
            'edit_symlink' => true,
            'edit_template' => false,
            'edit_tv' => false,
            'edit_user' => false,
            'edit_weblink' => true,
            'element_tree' => false,
            'empty_cache' => true,
            'error_log_erase' => false,
            'error_log_view' => true,
            'events' => true,
            'export_static' => true,
            'file_create' => true,
            'file_list' => true,
            'file_manager' => true,
            'file_remove' => true,
            'file_tree' => true,
            'file_unpack' => true,
            'file_update' => true,
            'file_upload' => true,
            'file_view' => true,
            'flush_sessions' => true,
            'formit' => true,
            'formit_encryptions' => true,
            'frames' => true,
            'help' => true,
            'home' => true,
            'import_static' => true,
            'languages' => true,
            'lexicons' => true,
            'list' => true,
            'load' => true,
            'logout' => true,
            'logs' => false,
            'menus' => true,
            'menu_reports' => true,
            'menu_security' => false,
            'menu_site' => true,
            'menu_support' => true,
            'menu_system' => true,
            'menu_tools' => true,
            'menu_trash' => false,
            'menu_user' => true,
            'messages' => true,
            'namespaces' => true,
            'new_category' => true,
            'new_chunk' => false,
            'new_context' => false,
            'new_document' => true,
            'new_document_in_root' => true,
            'new_plugin' => false,
            'new_propertyset' => true,
            'new_role' => false,
            'new_snippet' => false,
            'new_static_resource' => true,
            'new_symlink' => true,
            'new_template' => false,
            'new_tv' => false,
            'new_user' => false,
            'new_weblink' => true,
            'packages' => true,
            'policy_delete' => false,
            'policy_edit' => false,
            'policy_new' => false,
            'policy_save' => false,
            'policy_template_delete' => false,
            'policy_template_edit' => false,
            'policy_template_new' => false,
            'policy_template_save' => false,
            'policy_template_view' => false,
            'policy_view' => false,
            'property_sets' => true,
            'providers' => true,
            'publish_document' => true,
            'purge_deleted' => false,
            'remove' => true,
            'remove_locks' => false,
            'resourcegroup_delete' => false,
            'resourcegroup_edit' => true,
            'resourcegroup_new' => true,
            'resourcegroup_resource_edit' => true,
            'resourcegroup_resource_list' => true,
            'resourcegroup_save' => true,
            'resourcegroup_view' => true,
            'resource_duplicate' => true,
            'resource_quick_create' => true,
            'resource_quick_update' => true,
            'resource_tree' => true,
            'save' => true,
            'save_category' => true,
            'save_chunk' => false,
            'save_context' => false,
            'save_document' => true,
            'save_plugin' => false,
            'save_propertyset' => false,
            'save_role' => false,
            'save_snippet' => false,
            'save_template' => false,
            'save_tv' => false,
            'save_user' => false,
            'search' => true,
            'settings' => false,
            'set_sudo' => false,
            'sources' => true,
            'source_delete' => true,
            'source_edit' => true,
            'source_save' => true,
            'source_view' => true,
            'steal_locks' => true,
            'tree_show_element_ids' => true,
            'tree_show_resource_ids' => true,
            'undelete_document' => true,
            'unlock_element_properties' => true,
            'unpublish_document' => true,
            'usergroup_delete' => false,
            'usergroup_edit' => false,
            'usergroup_new' => false,
            'usergroup_save' => false,
            'usergroup_user_edit' => false,
            'usergroup_user_list' => false,
            'usergroup_view' => true,
            'view' => true,
            'view_category' => true,
            'view_chunk' => false,
            'view_context' => false,
            'view_document' => true,
            'view_element' => true,
            'view_eventlog' => true,
            'view_offline' => true,
            'view_plugin' => true,
            'view_propertyset' => true,
            'view_role' => true,
            'view_snippet' => true,
            'view_sysinfo' => true,
            'view_template' => true,
            'view_tv' => true,
            'view_unpublished' => true,
            'view_user' => true,
            'workspaces' => true,
          ),
        ),
      ),
    ),
  ),
);