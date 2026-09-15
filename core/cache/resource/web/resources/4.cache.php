<?php if(time() > 1789486803){return null;} return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 4,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Страница не найдена — Ландшафтный дизайн DOM OZ | Москва',
    'longtitle' => 'Ошибка 404: Страница не найдена. Вернуться на главную',
    'description' => 'Страница не найдена. Возможно, она была перемещена или удалена. Смотрите наши услуги: ландшафтный дизайн, озеленение, благоустройство в Москве.',
    'alias' => 'error404',
    'alias_visible' => 1,
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => 'К сожалению, запрашиваемая страница не найдена. Возможно, вы ввели неверный адрес или страница была удалена. Не расстраивайтесь — мы поможем найти то, что вы искали! DOM OZ предлагает профессиональный ландшафтный дизайн, озеленение и благоустройство участков в Москве и МО. Посетите главную страницу, каталог услуг или свяжитесь с нами для бесплатной консультации.',
    'content' => '<main style="margin-top: 5rem">
  <div class="wrap">
    <h1 style=\'color: black\'>О-нет, страница не найдена!</h1>
    <canvas width="560" height="312"></canvas>
    <p>Запрошенная вами страница либо была перемещена, либо не существует.</p>
    <a href="/">Вернутся на главную</a>
  </div>
</main>
<style>
    * {
  border: 0;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
:root {
  font-size: calc(16px + (20 - 16)*(100vw - 320px)/(1024 - 320));
}
body {
  background: #f1f1f1;
  color: #242424;
  font: 1em "Hind", Arial, sans-serif;
  line-height: 1.5;
}
a {
  color: #2762f3;
  text-decoration: none;
}
a:hover {
  text-decoration: underline;
}
a:active {
  color: #0c48db;
}
a:visited {
  color: #5785f6;
}
h1 {
  font: 2em "Ubuntu", Arial, sans-serif;
  line-height: 1.5;
  margin-bottom: .75em;
}
p, ul {
  margin-bottom: 1.5em;
}
ul {
  margin-left: 1.5em;
}
main, canvas {
  display: block;
}
canvas {
  display: block;
  margin: 0 auto 1.5em auto;
  width: 100%;
  height: auto;
  -webkit-tap-highlight-color: transparent;
}
.wrap {
  margin: auto;
  padding: 1.5em;
  max-width: 37.5em;
}
@media (prefers-color-scheme: dark) {
  body {
    background: #242424;
    color: #f1f1f1;
  }
  a {
    color: #5785f6;
  }
  a:active {
    color: #2762f3;
  }
  a:visited {
    color: #87a9f9;
  }
}
</style>

<script>
    window.addEventListener("DOMContentLoaded",game);

function game() {
  var canvas = document.querySelector("canvas"),
    c = canvas.getContext("2d"),
    W = canvas.width,
    H = canvas.height,
    S = 2,
    assets = [
      "https://assets.codepen.io/416221/nowhere.png",
      "https://assets.codepen.io/416221/tumbleweed.png"
    ],
    sprites = [],
    score = 0,
    world = {
      friction: 0.1,
      gravity: 0.1
    },
    tumbleweed = {
      inPlay: false,
      x: -160,
      y: 200,
      r: 32,
      rotation: 0,
      xVel: 10,
      yVel: 0,
      mass: 2.5,
      restitution: 0.3
    },
    loadSprite = url => {
      return new Promise((resolve,reject) => {
        let sprite = new Image();
        sprite.src = url;
        sprite.onload = () => {
          resolve(sprite);
        };
        sprite.onerror = () => {
          reject(url);
        };
      });
    },
    spritePromises = assets.map(loadSprite),
    applyForce = e => {
      let ex = e.clientX - canvas.offsetLeft,
        ey = e.clientY - (canvas.offsetTop - window.pageYOffset);

      ex = ex / canvas.offsetWidth * W;
      ey = ey / canvas.offsetHeight * H;

      let insideX = Math.abs(ex - tumbleweed.x) <= tumbleweed.r,
        insideY = Math.abs(ey - tumbleweed.y) <= tumbleweed.r;

      if (insideX && insideY) {
        let xForce = tumbleweed.x - ex, 
          yForce = tumbleweed.y - ey,
          xAccel = xForce / tumbleweed.mass,
          yAccel = yForce / tumbleweed.mass;

        tumbleweed.xVel += xAccel;
        tumbleweed.yVel += yAccel;

        ++score;
        
        // when enabled, the tumbleweed will be allowed to touch the left side after rolling in
        if (!tumbleweed.inPlay)
          tumbleweed.inPlay = true;
      }
    },
    update = () => {
      // A. Background
      c.clearRect(0,0,W,H);
      c.drawImage(sprites[0],0,0,W,H);

      // B. Tumbleweed
      tumbleweed.x += tumbleweed.xVel;
      
      // 1. Friction to the right
      if (tumbleweed.xVel > 0) {
        tumbleweed.xVel -= world.friction;
        if (tumbleweed.xVel < 0)
          tumbleweed.xVel = 0;
      
      // 2. Friction to the left
      } else if (tumbleweed.xVel < 0) {
        tumbleweed.xVel += world.friction;
        if (tumbleweed.xVel > 0)
          tumbleweed.xVel = 0;
      }
      
      // 3. Horizontal collision
      let hitLeftBound = tumbleweed.x <= tumbleweed.r && tumbleweed.inPlay,
        hitRightBound = tumbleweed.x >= W - tumbleweed.r;

      if (hitLeftBound)
        tumbleweed.x = tumbleweed.r;
      else if (hitRightBound)
        tumbleweed.x = W - tumbleweed.r;

      if (hitLeftBound || hitRightBound)
        tumbleweed.xVel *= -tumbleweed.restitution;
      
      // 4. Vertical collision
      tumbleweed.y += tumbleweed.yVel;
      tumbleweed.yVel += world.gravity;

      let hitTopBound = tumbleweed.y <= tumbleweed.r,
        hitBottomBound = tumbleweed.y >= H - tumbleweed.r;

      if (hitTopBound) {
        tumbleweed.y = tumbleweed.r;

      } else if (hitBottomBound) {
        tumbleweed.y = H - tumbleweed.r;
        score = 0;
      }
      if (hitTopBound || hitBottomBound)
        tumbleweed.yVel *= -tumbleweed.restitution;
      
      // 5. Rotation
      tumbleweed.rotation += tumbleweed.xVel;

      if (tumbleweed.rotation >= 360)
        tumbleweed.rotation -= 360;
      else if (tumbleweed.rotation < 0)
        tumbleweed.rotation += 360;
      
      // 6. Drawing
      c.save();
      c.translate(tumbleweed.x,tumbleweed.y);
      c.rotate(tumbleweed.rotation * Math.PI/180);
      c.drawImage(
        sprites[1],
        -tumbleweed.r,
        -tumbleweed.r,
        tumbleweed.r * 2,
        tumbleweed.r * 2
      );
      c.translate(-tumbleweed.x,-tumbleweed.y);
      c.restore();

      // C. Score
      if (score > 0) {
        c.fillStyle = "#7f7f7f";
        c.font = "48px Hind, sans-serif";
        c.textAlign = "center";
        c.fillText(score,W/2,48);
      }
    },
    render = () => {
      update();
      requestAnimationFrame(render);
    };
  
  // ensure proper resolution
  canvas.width = W * S;
  canvas.height = H * S;
  c.scale(S,S);
  
  // load sprites
  Promise.all(spritePromises).then(loaded => {
    for (let sprite of loaded)
      sprites.push(sprite);

    render();
    canvas.addEventListener("click",applyForce);

  }).catch(urls => {
    console.log(urls+" couldn’t be loaded");
  });
}
</script>',
    'richtext' => 0,
    'template' => 8,
    'menuindex' => 3,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1764599273,
    'editedby' => 1,
    'editedon' => 1787412231,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1764599220,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 1,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'error404',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!DOCTYPE html>
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
    <!-- Yandex -->
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
</script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="/assets/bibliotek/jquery/jqwery.js"></script>
  <script src="/assets/bibliotek/jquery/jquery.maskedinput.min.js"></script>
  <script src="/assets/js/script.js"></script>
</body>

</html>',
    '_isForward' => true,
    '_jscripts' => 
    array (
      0 => '<script>window.addEventListener(\'DOMContentLoaded\', () => FetchIt.create({"action":"5b4338599cb530c4f36ba76d3d9ca4ab","assetsUrl":"\\/assets\\/components\\/fetchit\\/","actionUrl":"\\/assets\\/components\\/fetchit\\/action.php","inputInvalidClass":"is-invalid","customInvalidClass":"","clearFieldsOnSuccess":true,"defaultNotifier":true,"pageId":4}));</script>',
    ),
    '_loadedjscripts' => 
    array (
      '<script>window.addEventListener(\'DOMContentLoaded\', () => FetchIt.create({"action":"5b4338599cb530c4f36ba76d3d9ca4ab","assetsUrl":"\\/assets\\/components\\/fetchit\\/","actionUrl":"\\/assets\\/components\\/fetchit\\/action.php","inputInvalidClass":"is-invalid","customInvalidClass":"","clearFieldsOnSuccess":true,"defaultNotifier":true,"pageId":4}));</script>' => true,
    ),
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[$yandex.metrika]]' => '<!-- Yandex -->
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
    '[[FetchIt?form=`form_modal`&snippet=`FormIt`&actionUrl=`[[+assetsUrl]]action.php`&clearFieldsOnSuccess=`1`&hooks=`email,FormItSaveForm`&emailTo=`{\'email_1\'|config},Domoz.77@yandex.ru`&emailFromName=`{\'site_name\'|config}`&emailFrom=`domozmsk@domozmsk.ru`&emailSubject=`Сообщение с сайта {\'site_name\'|config}`&fiarFromName=`Сообщение с сайта {\'site_name\'|config}`&emailTpl=`email_tplmod`&validate=`af_name:required:minLength=3:maxLength=30:regexp=/^[а-яА-ЯёЁa-zA-Z\\s]+$/,af_phone:required,af_email:required`&validationErrorMessage=`Вам необходимо заполнить все поля`&successMessage=`Сообщение успешно отправлено`]]' => 'Array
(
    &#91;form&#93; =&gt; form_modal
    &#91;snippet&#93; =&gt; FormIt
    &#91;actionUrl&#93; =&gt; &#91;&#91;+assetsUrl&#93;&#93;action.php
    &#91;clearFieldsOnSuccess&#93; =&gt; 1
    &#91;hooks&#93; =&gt; email,FormItSaveForm
    &#91;emailTo&#93; =&gt; {&#039;email_1&#039;|config},Domoz.77@yandex.ru
    &#91;emailFromName&#93; =&gt; {&#039;site_name&#039;|config}
    &#91;emailFrom&#93; =&gt; domozmsk@domozmsk.ru
    &#91;emailSubject&#93; =&gt; Сообщение с сайта {&#039;site_name&#039;|config}
    &#91;fiarFromName&#93; =&gt; Сообщение с сайта {&#039;site_name&#039;|config}
    &#91;emailTpl&#93; =&gt; email_tplmod
    &#91;validate&#93; =&gt; af_name:required:minLength=3:maxLength=30:regexp=/^&#91;а-яА-ЯёЁa-zA-Z\\s&#93;+$/,af_phone:required,af_email:required
    &#91;validationErrorMessage&#93; =&gt; Вам необходимо заполнить все поля
    &#91;successMessage&#93; =&gt; Сообщение успешно отправлено
)
',
    '[[~4? &scheme=`full`]]' => 'https://domozmsk.ru/error404',
    '[[SchemaHome]]' => '<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "Organization",
            "@id": "https://domozmsk.ru/#organization",
            "name": "ООО Дом Оз",
            "alternateName": "Дом Оз",
            "url": "https://domozmsk.ru/",
            "description": "Страница не найдена. Возможно, она была перемещена или удалена. Смотрите наши услуги: ландшафтный дизайн, озеленение, благоустройство в Москве.",
            "logo": {
                "@type": "ImageObject",
                "@id": "https://domozmsk.ru/#logo",
                "url": "https://domozmsk.ru/assets/img/logo.png"
            },
            "telephone": "+7-985-920-77-00",
            "email": "DOMOZ.77@yandex.ru",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "RU",
                "addressLocality": "Москва",
                "streetAddress": "Головинское шоссе, 5А"
            },
            "foundingDate": "2015",
            "sameAs": [
                "https://t.me/domozmskru",
                "https://vk.ru/domozmsk",
                "https://www.youtube.com/@domozmsk"
            ],
            "knowsAbout": [
                "Ландшафтный дизайн",
                "Благоустройство территорий",
                "Озеленение",
                "Дренаж",
                "Автополив"
            ],
            "founder": {
                "@id": "https://domozmsk.ru/#person"
            }
        },
        {
            "@type": "Person",
            "@id": "https://domozmsk.ru/#person",
            "name": "Главный специалист Дом Оз",
            "jobTitle": "Эксперт по ландшафтному дизайну",
            "worksFor": {
                "@id": "https://domozmsk.ru/#organization"
            },
            "url": "https://domozmsk.ru/history-company/nasha-komanda"
        },
        {
            "@type": "WebSite",
            "@id": "https://domozmsk.ru/#website",
            "url": "https://domozmsk.ru/",
            "name": "Дом Оз",
            "publisher": {
                "@id": "https://domozmsk.ru/#organization"
            },
            "inLanguage": "ru-RU"
        },
        {
            "@type": "WebPage",
            "@id": "https://domozmsk.ru/error404#webpage",
            "url": "https://domozmsk.ru/error404",
            "name": "Страница не найдена — Ландшафтный дизайн DOM OZ | Москва",
            "description": "Страница не найдена. Возможно, она была перемещена или удалена. Смотрите наши услуги: ландшафтный дизайн, озеленение, благоустройство в Москве.",
            "inLanguage": "ru-RU",
            "isPartOf": {
                "@id": "https://domozmsk.ru/#website"
            },
            "speakable": {
                "@type": "SpeakableSpecification",
                "cssSelector": [
                    "h1",
                    "h2",
                    ".tldr",
                    ".hero-desc",
                    ".faq-answer"
                ],
                "xpath": [
                    "/html/head/title",
                    "/html/body//h1[1]"
                ]
            }
        },
        {
            "@type": "BreadcrumbList",
            "@id": "https://domozmsk.ru/error404#breadcrumb",
            "itemListElement": [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Главная",
                    "item": "https://domozmsk.ru/"
                }
            ]
        },
        {
            "@type": "WebApplication",
            "@id": "https://domozmsk.ru/error404#calculator",
            "name": "Калькулятор стоимости ландшафтного дизайна",
            "url": "https://domozmsk.ru/error404#kviz",
            "description": "Рассчитайте стоимость благоустройства участка в Москве и Подмосковье за 1 минуту",
            "applicationCategory": "UtilitiesApplication",
            "operatingSystem": "Web",
            "isAccessibleForFree": true,
            "offers": {
                "@type": "Offer",
                "price": "0",
                "priceCurrency": "RUB"
            },
            "provider": {
                "@id": "https://domozmsk.ru/#organization"
            }
        },
        {
            "@type": "Service",
            "@id": "https://domozmsk.ru/error404#service",
            "serviceType": "Ландшафтный дизайн под ключ",
            "name": "Ландшафтный дизайн в Москве и Московской области",
            "provider": {
                "@id": "https://domozmsk.ru/#organization"
            },
            "areaServed": [
                "Москва",
                "Московская область",
                "Красногорск",
                "Одинцово",
                "Истра"
            ],
            "hasOfferCatalog": {
                "@type": "OfferCatalog",
                "name": "Цены на ландшафтные работы",
                "itemListElement": [
                    {
                        "@type": "Offer",
                        "name": "Проектирование",
                        "price": "11500",
                        "priceCurrency": "RUB",
                        "url": "https://domozmsk.ru/prices"
                    },
                    {
                        "@type": "Offer",
                        "name": "Благоустройство",
                        "price": "50000",
                        "priceCurrency": "RUB",
                        "url": "https://domozmsk.ru/prices"
                    },
                    {
                        "@type": "Offer",
                        "name": "Газон",
                        "price": "390",
                        "priceCurrency": "RUB",
                        "url": "https://domozmsk.ru/prices"
                    }
                ]
            }
        },
        {
            "@type": "SiteNavigationElement",
            "@id": "https://domozmsk.ru/error404#nav",
            "name": "Главное меню",
            "hasPart": [
                {
                    "@type": "SiteNavigationElement",
                    "name": "Услуги",
                    "url": "https://domozmsk.ru/error404#vidy"
                },
                {
                    "@type": "SiteNavigationElement",
                    "name": "Цены",
                    "url": "https://domozmsk.ru/prices"
                },
                {
                    "@type": "SiteNavigationElement",
                    "name": "Блог",
                    "url": "https://domozmsk.ru/blogs"
                },
                {
                    "@type": "SiteNavigationElement",
                    "name": "Отзывы",
                    "url": "https://domozmsk.ru/history-company/reviews"
                }
            ]
        }
    ]
}
</script>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'yandex.metrika' => 
      array (
        'fields' => 
        array (
          'id' => 20,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'yandex.metrika',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<!-- Yandex -->
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
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<!-- Yandex -->
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
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'SchemaHome' => 
      array (
        'fields' => 
        array (
          'id' => 53,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'SchemaHome',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '$id = $modx->resource->get(\'id\');
$url = $modx->makeUrl($id, \'\', \'\', \'full\');
$siteUrl = rtrim($modx->getOption(\'site_url\', null, \'https://domozmsk.ru\'), \'/\');
$headline = $modx->resource->get(\'pagetitle\');
$desc = $modx->resource->get(\'description\');
if (empty($desc)) $desc = \'Ландшафтный дизайн участков под ключ в Москве и Московской области: проектирование, благоустройство, озеленение. Смета за 1 день, договор, гарантия до 5 лет.\';

// Организация и персона — как в блог-сниппете
$org = array(\'@type\' => \'Organization\', \'@id\' => $siteUrl . \'/#organization\', \'name\' => \'ООО Дом Оз\', \'alternateName\' => \'Дом Оз\', \'url\' => $siteUrl . \'/\', \'description\' => $desc, \'logo\' => array(\'@type\' => \'ImageObject\', \'@id\' => $siteUrl . \'/#logo\', \'url\' => $siteUrl . \'/assets/img/logo.png\'), \'telephone\' => \'+7-985-920-77-00\', \'email\' => \'DOMOZ.77@yandex.ru\', \'address\' => array(\'@type\' => \'PostalAddress\', \'addressCountry\' => \'RU\', \'addressLocality\' => \'Москва\', \'streetAddress\' => \'Головинское шоссе, 5А\'), \'foundingDate\' => \'2015\', \'sameAs\' => array(\'https://t.me/domozmskru\', \'https://vk.ru/domozmsk\', \'https://www.youtube.com/@domozmsk\'), \'knowsAbout\' => array(\'Ландшафтный дизайн\', \'Благоустройство территорий\', \'Озеленение\', \'Дренаж\', \'Автополив\'), \'founder\' => array(\'@id\' => $siteUrl . \'/#person\'));
$person = array(\'@type\' => \'Person\', \'@id\' => $siteUrl . \'/#person\', \'name\' => \'Главный специалист Дом Оз\', \'jobTitle\' => \'Эксперт по ландшафтному дизайну\', \'worksFor\' => array(\'@id\' => $siteUrl . \'/#organization\'), \'url\' => $siteUrl . \'/history-company/nasha-komanda\');

$graph = array();
$graph[] = $org;
$graph[] = $person;
$graph[] = array(\'@type\' => \'WebSite\', \'@id\' => $siteUrl . \'/#website\', \'url\' => $siteUrl . \'/\', \'name\' => \'Дом Оз\', \'publisher\' => array(\'@id\' => $siteUrl . \'/#organization\'), \'inLanguage\' => \'ru-RU\');
$graph[] = array(\'@type\' => \'WebPage\', \'@id\' => $url . \'#webpage\', \'url\' => $url, \'name\' => $headline, \'description\' => $desc, \'inLanguage\' => \'ru-RU\', \'isPartOf\' => array(\'@id\' => $siteUrl . \'/#website\'), \'speakable\' => array(\'@type\' => \'SpeakableSpecification\', \'cssSelector\' => array(\'h1\', \'h2\', \'.tldr\', \'.hero-desc\', \'.faq-answer\'), \'xpath\' => array("/html/head/title", "/html/body//h1[1]")));
$graph[] = array(\'@type\' => \'BreadcrumbList\', \'@id\' => $url . \'#breadcrumb\', \'itemListElement\' => array(array(\'@type\' => \'ListItem\', \'position\' => 1, \'name\' => \'Главная\', \'item\' => $siteUrl . \'/\')));

// Калькулятор = их бесплатный чекер
$graph[] = array(\'@type\' => \'WebApplication\', \'@id\' => $url . \'#calculator\', \'name\' => \'Калькулятор стоимости ландшафтного дизайна\', \'url\' => $url . \'#kviz\', \'description\' => \'Рассчитайте стоимость благоустройства участка в Москве и Подмосковье за 1 минуту\', \'applicationCategory\' => \'UtilitiesApplication\', \'operatingSystem\' => \'Web\', \'isAccessibleForFree\' => true, \'offers\' => array(\'@type\' => \'Offer\', \'price\' => \'0\', \'priceCurrency\' => \'RUB\'), \'provider\' => array(\'@id\' => $siteUrl . \'/#organization\'));

// Каталог услуг = их ItemList из 67 инструментов
$catIds = array_filter(array_map(\'trim\', explode(\',\', (string)$modx->resource->getTVValue(\'categoryi\'))));
$items = array(); $pos = 1;
foreach ($catIds as $cid) {
    $r = $modx->getObject(\'modResource\', (int)$cid);
    if (!$r || !$r->get(\'published\') || $r->get(\'deleted\')) continue;
    $items[] = array(\'@type\' => \'ListItem\', \'position\' => $pos++, \'item\' => array(\'@type\' => \'Service\', \'name\' => $r->get(\'pagetitle\'), \'url\' => $modx->makeUrl($r->get(\'id\'), \'\', \'\', \'full\'), \'provider\' => array(\'@id\' => $siteUrl . \'/#organization\'), \'areaServed\' => array(\'Москва\', \'Московская область\')));
}
if (!empty($items)) $graph[] = array(\'@type\' => \'ItemList\', \'@id\' => $url . \'#services\', \'name\' => \'Услуги ландшафтного дизайна Дом Оз\', \'numberOfItems\' => count($items), \'itemListElement\' => $items);

// Тарифы = их OfferCatalog (цены сверьте с сайтом)
$offers = array(
    array(\'@type\' => \'Offer\', \'name\' => \'Проектирование\', \'price\' => \'11500\', \'priceCurrency\' => \'RUB\', \'url\' => $siteUrl . \'/prices\'),
    array(\'@type\' => \'Offer\', \'name\' => \'Благоустройство\', \'price\' => \'50000\', \'priceCurrency\' => \'RUB\', \'url\' => $siteUrl . \'/prices\'),
    array(\'@type\' => \'Offer\', \'name\' => \'Газон\', \'price\' => \'390\', \'priceCurrency\' => \'RUB\', \'url\' => $siteUrl . \'/prices\')
);
$graph[] = array(\'@type\' => \'Service\', \'@id\' => $url . \'#service\', \'serviceType\' => \'Ландшафтный дизайн под ключ\', \'name\' => \'Ландшафтный дизайн в Москве и Московской области\', \'provider\' => array(\'@id\' => $siteUrl . \'/#organization\'), \'areaServed\' => array(\'Москва\', \'Московская область\', \'Красногорск\', \'Одинцово\', \'Истра\'), \'hasOfferCatalog\' => array(\'@type\' => \'OfferCatalog\', \'name\' => \'Цены на ландшафтные работы\', \'itemListElement\' => $offers));

// Меню = их SiteNavigationElement
$graph[] = array(\'@type\' => \'SiteNavigationElement\', \'@id\' => $url . \'#nav\', \'name\' => \'Главное меню\', \'hasPart\' => array(
    array(\'@type\' => \'SiteNavigationElement\', \'name\' => \'Услуги\', \'url\' => $url . \'#vidy\'),
    array(\'@type\' => \'SiteNavigationElement\', \'name\' => \'Цены\', \'url\' => $siteUrl . \'/prices\'),
    array(\'@type\' => \'SiteNavigationElement\', \'name\' => \'Блог\', \'url\' => $siteUrl . \'/blogs\'),
    array(\'@type\' => \'SiteNavigationElement\', \'name\' => \'Отзывы\', \'url\' => $siteUrl . \'/history-company/reviews\')
));

// FAQ из TV vopros
$faqItems = $modx->resource->getTVValue(\'vopros\');
$faqItems = $faqItems ? json_decode($faqItems, true) : array();
$faqMain = array();
if (is_array($faqItems)) {
    foreach ($faqItems as $fq) {
        $q = trim(strip_tags((string)(isset($fq[\'vopr\']) ? $fq[\'vopr\'] : \'\')));
        $a = trim(strip_tags((string)(isset($fq[\'otv\']) ? $fq[\'otv\'] : \'\')));
        if ($q !== \'\' && $a !== \'\') $faqMain[] = array(\'@type\' => \'Question\', \'name\' => $q, \'acceptedAnswer\' => array(\'@type\' => \'Answer\', \'text\' => $a));
    }
}
if (!empty($faqMain)) $graph[] = array(\'@type\' => \'FAQPage\', \'@id\' => $url . \'#faq\', \'mainEntity\' => $faqMain);

return \'<script type="application/ld+json">\' . "\\n" . json_encode(array(\'@context\' => \'https://schema.org\', \'@graph\' => $graph), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . "\\n" . \'</script>\';',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '$id = $modx->resource->get(\'id\');
$url = $modx->makeUrl($id, \'\', \'\', \'full\');
$siteUrl = rtrim($modx->getOption(\'site_url\', null, \'https://domozmsk.ru\'), \'/\');
$headline = $modx->resource->get(\'pagetitle\');
$desc = $modx->resource->get(\'description\');
if (empty($desc)) $desc = \'Ландшафтный дизайн участков под ключ в Москве и Московской области: проектирование, благоустройство, озеленение. Смета за 1 день, договор, гарантия до 5 лет.\';

// Организация и персона — как в блог-сниппете
$org = array(\'@type\' => \'Organization\', \'@id\' => $siteUrl . \'/#organization\', \'name\' => \'ООО Дом Оз\', \'alternateName\' => \'Дом Оз\', \'url\' => $siteUrl . \'/\', \'description\' => $desc, \'logo\' => array(\'@type\' => \'ImageObject\', \'@id\' => $siteUrl . \'/#logo\', \'url\' => $siteUrl . \'/assets/img/logo.png\'), \'telephone\' => \'+7-985-920-77-00\', \'email\' => \'DOMOZ.77@yandex.ru\', \'address\' => array(\'@type\' => \'PostalAddress\', \'addressCountry\' => \'RU\', \'addressLocality\' => \'Москва\', \'streetAddress\' => \'Головинское шоссе, 5А\'), \'foundingDate\' => \'2015\', \'sameAs\' => array(\'https://t.me/domozmskru\', \'https://vk.ru/domozmsk\', \'https://www.youtube.com/@domozmsk\'), \'knowsAbout\' => array(\'Ландшафтный дизайн\', \'Благоустройство территорий\', \'Озеленение\', \'Дренаж\', \'Автополив\'), \'founder\' => array(\'@id\' => $siteUrl . \'/#person\'));
$person = array(\'@type\' => \'Person\', \'@id\' => $siteUrl . \'/#person\', \'name\' => \'Главный специалист Дом Оз\', \'jobTitle\' => \'Эксперт по ландшафтному дизайну\', \'worksFor\' => array(\'@id\' => $siteUrl . \'/#organization\'), \'url\' => $siteUrl . \'/history-company/nasha-komanda\');

$graph = array();
$graph[] = $org;
$graph[] = $person;
$graph[] = array(\'@type\' => \'WebSite\', \'@id\' => $siteUrl . \'/#website\', \'url\' => $siteUrl . \'/\', \'name\' => \'Дом Оз\', \'publisher\' => array(\'@id\' => $siteUrl . \'/#organization\'), \'inLanguage\' => \'ru-RU\');
$graph[] = array(\'@type\' => \'WebPage\', \'@id\' => $url . \'#webpage\', \'url\' => $url, \'name\' => $headline, \'description\' => $desc, \'inLanguage\' => \'ru-RU\', \'isPartOf\' => array(\'@id\' => $siteUrl . \'/#website\'), \'speakable\' => array(\'@type\' => \'SpeakableSpecification\', \'cssSelector\' => array(\'h1\', \'h2\', \'.tldr\', \'.hero-desc\', \'.faq-answer\'), \'xpath\' => array("/html/head/title", "/html/body//h1[1]")));
$graph[] = array(\'@type\' => \'BreadcrumbList\', \'@id\' => $url . \'#breadcrumb\', \'itemListElement\' => array(array(\'@type\' => \'ListItem\', \'position\' => 1, \'name\' => \'Главная\', \'item\' => $siteUrl . \'/\')));

// Калькулятор = их бесплатный чекер
$graph[] = array(\'@type\' => \'WebApplication\', \'@id\' => $url . \'#calculator\', \'name\' => \'Калькулятор стоимости ландшафтного дизайна\', \'url\' => $url . \'#kviz\', \'description\' => \'Рассчитайте стоимость благоустройства участка в Москве и Подмосковье за 1 минуту\', \'applicationCategory\' => \'UtilitiesApplication\', \'operatingSystem\' => \'Web\', \'isAccessibleForFree\' => true, \'offers\' => array(\'@type\' => \'Offer\', \'price\' => \'0\', \'priceCurrency\' => \'RUB\'), \'provider\' => array(\'@id\' => $siteUrl . \'/#organization\'));

// Каталог услуг = их ItemList из 67 инструментов
$catIds = array_filter(array_map(\'trim\', explode(\',\', (string)$modx->resource->getTVValue(\'categoryi\'))));
$items = array(); $pos = 1;
foreach ($catIds as $cid) {
    $r = $modx->getObject(\'modResource\', (int)$cid);
    if (!$r || !$r->get(\'published\') || $r->get(\'deleted\')) continue;
    $items[] = array(\'@type\' => \'ListItem\', \'position\' => $pos++, \'item\' => array(\'@type\' => \'Service\', \'name\' => $r->get(\'pagetitle\'), \'url\' => $modx->makeUrl($r->get(\'id\'), \'\', \'\', \'full\'), \'provider\' => array(\'@id\' => $siteUrl . \'/#organization\'), \'areaServed\' => array(\'Москва\', \'Московская область\')));
}
if (!empty($items)) $graph[] = array(\'@type\' => \'ItemList\', \'@id\' => $url . \'#services\', \'name\' => \'Услуги ландшафтного дизайна Дом Оз\', \'numberOfItems\' => count($items), \'itemListElement\' => $items);

// Тарифы = их OfferCatalog (цены сверьте с сайтом)
$offers = array(
    array(\'@type\' => \'Offer\', \'name\' => \'Проектирование\', \'price\' => \'11500\', \'priceCurrency\' => \'RUB\', \'url\' => $siteUrl . \'/prices\'),
    array(\'@type\' => \'Offer\', \'name\' => \'Благоустройство\', \'price\' => \'50000\', \'priceCurrency\' => \'RUB\', \'url\' => $siteUrl . \'/prices\'),
    array(\'@type\' => \'Offer\', \'name\' => \'Газон\', \'price\' => \'390\', \'priceCurrency\' => \'RUB\', \'url\' => $siteUrl . \'/prices\')
);
$graph[] = array(\'@type\' => \'Service\', \'@id\' => $url . \'#service\', \'serviceType\' => \'Ландшафтный дизайн под ключ\', \'name\' => \'Ландшафтный дизайн в Москве и Московской области\', \'provider\' => array(\'@id\' => $siteUrl . \'/#organization\'), \'areaServed\' => array(\'Москва\', \'Московская область\', \'Красногорск\', \'Одинцово\', \'Истра\'), \'hasOfferCatalog\' => array(\'@type\' => \'OfferCatalog\', \'name\' => \'Цены на ландшафтные работы\', \'itemListElement\' => $offers));

// Меню = их SiteNavigationElement
$graph[] = array(\'@type\' => \'SiteNavigationElement\', \'@id\' => $url . \'#nav\', \'name\' => \'Главное меню\', \'hasPart\' => array(
    array(\'@type\' => \'SiteNavigationElement\', \'name\' => \'Услуги\', \'url\' => $url . \'#vidy\'),
    array(\'@type\' => \'SiteNavigationElement\', \'name\' => \'Цены\', \'url\' => $siteUrl . \'/prices\'),
    array(\'@type\' => \'SiteNavigationElement\', \'name\' => \'Блог\', \'url\' => $siteUrl . \'/blogs\'),
    array(\'@type\' => \'SiteNavigationElement\', \'name\' => \'Отзывы\', \'url\' => $siteUrl . \'/history-company/reviews\')
));

// FAQ из TV vopros
$faqItems = $modx->resource->getTVValue(\'vopros\');
$faqItems = $faqItems ? json_decode($faqItems, true) : array();
$faqMain = array();
if (is_array($faqItems)) {
    foreach ($faqItems as $fq) {
        $q = trim(strip_tags((string)(isset($fq[\'vopr\']) ? $fq[\'vopr\'] : \'\')));
        $a = trim(strip_tags((string)(isset($fq[\'otv\']) ? $fq[\'otv\'] : \'\')));
        if ($q !== \'\' && $a !== \'\') $faqMain[] = array(\'@type\' => \'Question\', \'name\' => $q, \'acceptedAnswer\' => array(\'@type\' => \'Answer\', \'text\' => $a));
    }
}
if (!empty($faqMain)) $graph[] = array(\'@type\' => \'FAQPage\', \'@id\' => $url . \'#faq\', \'mainEntity\' => $faqMain);

return \'<script type="application/ld+json">\' . "\\n" . json_encode(array(\'@context\' => \'https://schema.org\', \'@graph\' => $graph), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . "\\n" . \'</script>\';',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
      'blog_category' => 
      array (
        'fields' => 
        array (
          'id' => 40,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'blog_category',
          'caption' => 'Категория статьи',
          'description' => 'Например: Ландшафтный дизайн, Озеленение, Дренаж',
          'editor_type' => 0,
          'category' => 26,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'minLength' => '',
            'maxLength' => '',
            'regex' => '',
            'regexText' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'blog_tags' => 
      array (
        'fields' => 
        array (
          'id' => 41,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'blog_tags',
          'caption' => 'Теги статьи',
          'description' => 'Через запятую: ландшафт, озеленение, дренаж',
          'editor_type' => 0,
          'category' => 26,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'minLength' => '',
            'maxLength' => '',
            'regex' => '',
            'regexText' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'categoryi' => 
      array (
        'fields' => 
        array (
          'id' => 12,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'listbox-multiple',
          'name' => 'categoryi',
          'caption' => 'Добавить Услугу',
          'description' => '',
          'editor_type' => 0,
          'category' => 16,
          'locked' => false,
          'elements' => '@SELECT `pagetitle` AS `name`,`id` FROM `[[+PREFIX]]site_content` WHERE `published` = 1 AND `deleted` = 0 AND `template` IN (3,2,6)',
          'rank' => 0,
          'display' => 'delim',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'listWidth' => '',
            'title' => '',
            'typeAhead' => 'false',
            'typeAheadDelay' => '250',
            'forceSelection' => 'false',
            'listEmptyText' => '',
            'stackItems' => 'false',
            'preserveSelectionOrder' => 'true',
          ),
          'output_properties' => 
          array (
            'delimiter' => ',',
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'vopros' => 
      array (
        'fields' => 
        array (
          'id' => 16,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'migx',
          'name' => 'vopros',
          'caption' => 'Добавить вопрос',
          'description' => '',
          'editor_type' => 0,
          'category' => 19,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'configs' => 'vopros',
            'formtabs' => '',
            'columns' => '',
            'btntext' => '',
            'previewurl' => '',
            'jsonvarkey' => '',
            'autoResourceFolders' => 'false',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
  ),
);