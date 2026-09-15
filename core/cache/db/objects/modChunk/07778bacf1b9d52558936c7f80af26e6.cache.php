<?php  return array (
  'id' => 27,
  'source' => 1,
  'property_preprocess' => 0,
  'name' => 'tpl-rss',
  'description' => '',
  'editor_type' => 0,
  'category' => 0,
  'cache_type' => 0,
  'snippet' => '<item turbo="true">
      <title>[[+pagetitle]]</title>
      <link>[[~[[+id]]? &scheme=`full`]]</link>
      <description>[[+introtext:default=`[[+content:ellipsis=`600`]]`:cdata]]</description>
      <pubDate>[[!ShowDate_ru? &val=`[[+publishedon]]`]] +0300</pubDate>
      <guid isPermaLink="false">[[~[[+id]]? &scheme=`full`]]</guid>
      <dc:creator>[[+createdby:userinfo=`fullname`]]</dc:creator>
    <turbo:content>
        <![CDATA[ 
                   <header>
                       <h1>[[+pagetitle:replace=`&nbsp;== `]]</h1>
                       {if $id | resource : \'image\' != \'\'}
                          <figure>
                             <img src="{$_modx->config.site_url ~ $id | resource : \'image\' | phpthumbon : \'w=640\'}" />
                          </figure>
                       {/if}
                       {set $parentIDs = $_modx->getParentIds($id) | reverse}
                       <div data-block="breadcrumblist">
                           {foreach $parentIDs as $parentId first=$first}
                               {if $first} 
                                   <a href="{$_modx->config.site_url}">{1 | resource : \'pagetitle\'}</a>
                               {else}
                                   <a href="{$_modx->config.site_url ~ $parentId | resource : \'uri\'}">{$parentId | resource : \'pagetitle\'}</a>
                               {/if}
                           {/foreach}
                       </div>
                   </header>
                   
                   [[+content:replace=`&nbsp;== `]]
                   
                ]]>
    </turbo:content>
</item>',
  'locked' => 0,
  'properties' => 'a:0:{}',
  'static' => 0,
  'static_file' => '',
  'content' => '<item turbo="true">
      <title>[[+pagetitle]]</title>
      <link>[[~[[+id]]? &scheme=`full`]]</link>
      <description>[[+introtext:default=`[[+content:ellipsis=`600`]]`:cdata]]</description>
      <pubDate>[[!ShowDate_ru? &val=`[[+publishedon]]`]] +0300</pubDate>
      <guid isPermaLink="false">[[~[[+id]]? &scheme=`full`]]</guid>
      <dc:creator>[[+createdby:userinfo=`fullname`]]</dc:creator>
    <turbo:content>
        <![CDATA[ 
                   <header>
                       <h1>[[+pagetitle:replace=`&nbsp;== `]]</h1>
                       {if $id | resource : \'image\' != \'\'}
                          <figure>
                             <img src="{$_modx->config.site_url ~ $id | resource : \'image\' | phpthumbon : \'w=640\'}" />
                          </figure>
                       {/if}
                       {set $parentIDs = $_modx->getParentIds($id) | reverse}
                       <div data-block="breadcrumblist">
                           {foreach $parentIDs as $parentId first=$first}
                               {if $first} 
                                   <a href="{$_modx->config.site_url}">{1 | resource : \'pagetitle\'}</a>
                               {else}
                                   <a href="{$_modx->config.site_url ~ $parentId | resource : \'uri\'}">{$parentId | resource : \'pagetitle\'}</a>
                               {/if}
                           {/foreach}
                       </div>
                   </header>
                   
                   [[+content:replace=`&nbsp;== `]]
                   
                ]]>
    </turbo:content>
</item>',
);