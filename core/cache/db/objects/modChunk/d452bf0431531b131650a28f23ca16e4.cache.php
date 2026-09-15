<?php  return array (
  0 => 
  array (
    'modChunk_id' => '20',
    'modChunk_source' => '1',
    'modChunk_property_preprocess' => '0',
    'modChunk_name' => 'yandex.metrika',
    'modChunk_description' => '',
    'modChunk_editor_type' => '0',
    'modChunk_category' => '0',
    'modChunk_cache_type' => '0',
    'modChunk_snippet' => '<!-- Yandex -->
<link rel="preconnect" href="https://mc.yandex.ru" crossorigin>

<script>
(function () {
    \'use strict\';

    if (window.__analyticsInitialized) return;
    window.__analyticsInitialized = true;

    function loadYandex() {
        if (window.__ymLoaded) return;
        window.__ymLoaded = true;

        (function(m,e,s,r,i,k,a){
            m[i]=m[i]||function(){
                (m[i].a=m[i].a||[]).push(arguments);
            };
            m[i].l=Date.now();

            k=e.createElement(s);
            a=e.getElementsByTagName(s)[0];
            k.async=true;
            k.src=r;
            a.parentNode.insertBefore(k,a);

        })(window, document, \'script\',
           \'https://mc.yandex.ru/metrika/tag.js\',
           \'ym\');

        ym(108461808, \'init\', {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true,
            ecommerce: \'dataLayer\'
        });

        ym(99876445, \'init\', {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true,
            ecommerce: \'dataLayer\'
        });
    }

    function loadGTM() {
        if (window.__gtmLoaded) return;
        window.__gtmLoaded = true;

        (function(w,d,s,l,i){
            w[l]=w[l]||[];
            w[l].push({
                \'gtm.start\': new Date().getTime(),
                event:\'gtm.js\'
            });

            var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),
                dl=l !== \'dataLayer\' ? \'&l=\' + l : \'\';

            j.async = true;
            j.src = \'https://www.googletagmanager.com/gtm.js?id=\' + i + dl;

            f.parentNode.insertBefore(j,f);

        })(window, document, \'script\', \'dataLayer\', \'GTM-KJDVSFH6\');
    }

    // Метрика запускается сразу после построения DOM
    {*
    document.addEventListener(\'DOMContentLoaded\', loadYandex, {
       once: true
    });
    *}

    // GTM запускается после полной загрузки страницы
    window.addEventListener(\'load\', function () {
        setTimeout(loadGTM, 1000);
    }, {
        once: true
    });

})();
</script>',
    'modChunk_locked' => '0',
    'modChunk_properties' => 'a:0:{}',
    'modChunk_static' => '0',
    'modChunk_static_file' => '',
    'Source_id' => '1',
    'Source_name' => 'Filesystem',
    'Source_description' => '',
    'Source_class_key' => 'sources.modFileMediaSource',
    'Source_properties' => 'a:0:{}',
    'Source_is_stream' => '1',
  ),
);