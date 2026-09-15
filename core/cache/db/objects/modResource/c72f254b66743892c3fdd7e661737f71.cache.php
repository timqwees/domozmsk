<?php  return array (
  'id' => 120,
  'type' => 'document',
  'contentType' => 'application/rss+xml',
  'pagetitle' => 'feed',
  'longtitle' => '',
  'description' => 'Полезный канал сайта Дом Оз',
  'alias' => 'rss',
  'alias_visible' => 1,
  'link_attributes' => '',
  'published' => 1,
  'pub_date' => 0,
  'unpub_date' => 0,
  'parent' => 0,
  'isfolder' => 0,
  'introtext' => '',
  'content' => '<?xml version="1.0" encoding="UTF-8"?>
<rss xmlns:yandex="http://news.yandex.ru"
     xmlns:media="http://search.yahoo.com/mrss/"
     xmlns:turbo="http://turbo.yandex.ru"
     xmlns:atom="http://www.w3.org/2005/Atom"
     version="2.0">   
    <channel> 
        <title>[[*pagetitle]] / [[++site_name]]</title>
		<link>[[~[[*id]]?scheme=`full`]]</link>
		<description>[[*description:cdata]]</description>
		<language>ru</language>
		<copyright></copyright>
		<ttl>120</ttl>
		<atom:link href="[[~[[*id]]?scheme=`full`]]" rel="self" type="application/rss+xml" />
        [[!pdoResources?
			&tpl=`tpl-rss`
			&parents=`59`
			&depth=`5`
			&limit=`300`
			&sortby=`createdon`
			&includeContent=`1`
		]]
    </channel>
</rss>',
  'richtext' => 0,
  'template' => 0,
  'menuindex' => 11,
  'searchable' => 1,
  'cacheable' => 1,
  'createdby' => 1,
  'createdon' => 1781543661,
  'editedby' => 1,
  'editedon' => 1781544392,
  'deleted' => 0,
  'deletedon' => 0,
  'deletedby' => 0,
  'publishedon' => 1781543640,
  'publishedby' => 1,
  'menutitle' => '',
  'donthit' => 0,
  'privateweb' => 0,
  'privatemgr' => 0,
  'content_dispo' => 0,
  'hidemenu' => 1,
  'class_key' => 'modDocument',
  'context_key' => 'web',
  'content_type' => 6,
  'uri' => 'rss.rss',
  'uri_override' => 0,
  'hide_children_in_tree' => 0,
  'show_in_tree' => 1,
  'properties' => NULL,
);