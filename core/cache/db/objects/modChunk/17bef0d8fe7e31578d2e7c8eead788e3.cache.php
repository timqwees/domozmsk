<?php  return array (
  'id' => 23,
  'source' => 1,
  'property_preprocess' => 0,
  'name' => 'blog-card',
  'description' => '',
  'editor_type' => 0,
  'category' => 26,
  'cache_type' => 0,
  'snippet' => '<div class="bg-white border border-gray-200 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300">
    <a href="[[~[[+id]]]]">
        [[+blog_image:notempty=`<img src="[[+blog_image:phpthumbon=`w=600&h=400&zc=1`]]" alt="[[+pagetitle]]" title="[[+pagetitle]]" class="w-full h-56 object-cover">`]]
    </a>
    <div class="p-6">
        [[+blog_category:notempty=`<span class="inline-block px-3 py-1 text-xs font-semibold bg-gray-100 text-gray-700 rounded-full mb-3">[[+blog_category]]</span>`]]
        
        <a href="[[~[[+id]]]]" class="block group">
            <h2 class="text-start text-xl font-semibold leading-tight text-[#2a2e3b] mb-3 group-hover:text-green-700 transition">[[+pagetitle]]</h2>
        </a>
        
        <p class="text-start text-gray-600 text-sm line-clamp-3 mb-5">[[+description]]</p>
    </div>
</div>',
  'locked' => 0,
  'properties' => 'a:0:{}',
  'static' => 0,
  'static_file' => '',
  'content' => '<div class="bg-white border border-gray-200 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300">
    <a href="[[~[[+id]]]]">
        [[+blog_image:notempty=`<img src="[[+blog_image:phpthumbon=`w=600&h=400&zc=1`]]" alt="[[+pagetitle]]" title="[[+pagetitle]]" class="w-full h-56 object-cover">`]]
    </a>
    <div class="p-6">
        [[+blog_category:notempty=`<span class="inline-block px-3 py-1 text-xs font-semibold bg-gray-100 text-gray-700 rounded-full mb-3">[[+blog_category]]</span>`]]
        
        <a href="[[~[[+id]]]]" class="block group">
            <h2 class="text-start text-xl font-semibold leading-tight text-[#2a2e3b] mb-3 group-hover:text-green-700 transition">[[+pagetitle]]</h2>
        </a>
        
        <p class="text-start text-gray-600 text-sm line-clamp-3 mb-5">[[+description]]</p>
    </div>
</div>',
);