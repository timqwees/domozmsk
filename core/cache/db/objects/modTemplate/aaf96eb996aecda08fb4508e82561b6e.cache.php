<?php  return array (
  'id' => 13,
  'source' => 1,
  'property_preprocess' => 0,
  'templatename' => 'Список всех блогов',
  'description' => '',
  'editor_type' => 0,
  'category' => 26,
  'icon' => '',
  'template_type' => 0,
  'content' => '<!DOCTYPE html>
<html lang="ru">
<head>
    {include \'meta\'}
    {include \'blogs-head\'}
</head>
<body class="bg-white">

    {include \'header\'}

    <main class="pt-20 mb-[10%]">
        <section class="py-12">
            <div class="container mx-auto px-4 max-w-6xl">

                <h1 class="text-4xl md:text-5xl font-extrabold text-center text-[#2a2e3b] mb-4">Блоги от ДОМ ОЗ</h1>
                <p class="text-center text-lg text-gray-600 max-w-2xl mx-auto mb-12">
                    Полезные статьи и советы по ландшафтному дизайну, озеленению и благоустройству
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    [[pdoResources?
                        &parents=`59`
                        &depth=`1`
                        &sortby=`publishedon`
                        &sortdir=`DESC`
                        &includeTVs=`blog_image,blog_category`
                        &tvPrefix=``
                        &tpl=`blog-card`
                    ]]
                </div> 

            </div>
        </section>
    </main>

    {include \'footer\'}
    {include \'modal\'}
    {include \'social\'}

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="/assets/bibliotek/jquery/jqwery.js"></script>
    <script src="/assets/bibliotek/jquery/jquery.maskedinput.min.js"></script>
    <script src="/assets/js/script.js?v={$_modx->config.cache_version}"></script>
    
    [[$modal_window]]
</body>
</html>',
  'locked' => 0,
  'properties' => 'a:0:{}',
  'static' => 0,
  'static_file' => '',
);