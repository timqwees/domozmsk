<?php  return array (
  'id' => 8,
  'source' => 1,
  'property_preprocess' => 0,
  'templatename' => 'page',
  'description' => '',
  'editor_type' => 0,
  'category' => 0,
  'icon' => '',
  'template_type' => 0,
  'content' => '<!DOCTYPE html>
<html lang="ru">
<head>
  {include \'meta\'}
  </head>

<body>
 {include \'header\'}
  <main>
    <section class="fy politiki">
      <div class="ar-container">
        {$_modx->resource.content}
      </div>
    </section>

    <div class="secblock"></div>
  </main>
 {include \'footer\'}
{include \'modal\'}
  {include \'foter_social\'}
  
  <!-- Аналитика: -->
    [[$yandex.metrika]]
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="/assets/bibliotek/jquery/jqwery.js"></script>
  <script src="/assets/bibliotek/jquery/jquery.maskedinput.min.js"></script>
  <script src="/assets/js/script.js"></script>
</body>

</html>',
  'locked' => 0,
  'properties' => 'a:0:{}',
  'static' => 0,
  'static_file' => '',
);