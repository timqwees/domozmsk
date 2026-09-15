<?php  return array (
  'id' => 22,
  'source' => 1,
  'property_preprocess' => 0,
  'name' => 'blog-related-item',
  'description' => '',
  'editor_type' => 0,
  'category' => 26,
  'cache_type' => 0,
  'snippet' => '<a href="{$_modx->makeUrl($id)}" class="block rounded-xl hover:bg-gray-50 p-2 transition">
    <div class="flex gap-3">
        <img class="w-[84px] h-[64px] object-cover rounded-lg lazyload" 
             data-src="{$blog_image | phpthumbon : \'w=120&h=90&zc=1\'}" 
             alt="{$pagetitle}">
        <div class="flex-1">
            <div class="text-[13px] font-extrabold leading-[16px]">{$pagetitle}</div>
            <div class="mt-1 text-[11px] text-gray-500">
                {$_modx->resource.publishedon | date : \'d.m.Y\'}
            </div>
            {if $blog_category}
            <div class="mt-1 text-[11px] text-gray-500 flex items-center gap-1">
                <i class="fa-solid fa-tag"></i> {$blog_category}
            </div>
            {/if}
        </div>
    </div>
</a>',
  'locked' => 0,
  'properties' => 'a:0:{}',
  'static' => 0,
  'static_file' => '',
  'content' => '<a href="{$_modx->makeUrl($id)}" class="block rounded-xl hover:bg-gray-50 p-2 transition">
    <div class="flex gap-3">
        <img class="w-[84px] h-[64px] object-cover rounded-lg lazyload" 
             data-src="{$blog_image | phpthumbon : \'w=120&h=90&zc=1\'}" 
             alt="{$pagetitle}">
        <div class="flex-1">
            <div class="text-[13px] font-extrabold leading-[16px]">{$pagetitle}</div>
            <div class="mt-1 text-[11px] text-gray-500">
                {$_modx->resource.publishedon | date : \'d.m.Y\'}
            </div>
            {if $blog_category}
            <div class="mt-1 text-[11px] text-gray-500 flex items-center gap-1">
                <i class="fa-solid fa-tag"></i> {$blog_category}
            </div>
            {/if}
        </div>
    </div>
</a>',
);