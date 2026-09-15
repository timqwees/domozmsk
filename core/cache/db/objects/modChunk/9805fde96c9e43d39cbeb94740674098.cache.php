<?php  return array (
  'id' => 7,
  'source' => 1,
  'property_preprocess' => 0,
  'name' => 'header',
  'description' => '',
  'editor_type' => 0,
  'category' => 0,
  'cache_type' => 0,
  'snippet' => '<style>
    .menu {
    height: 100%;
    }
    
  .drop {
    position: relative;
    padding-bottom: 25px;
    margin-bottom: -25px;
    z-index: 100;
  }

  .drop ul {
    position: absolute;
    top: 100%;
    left: 0;
    min-width: 200px;
    background: #fff;
    padding: 8px 0;
    list-style: none;
    
    opacity: 0;
    visibility: hidden;
    transition: all 0.25s ease-in-out;
    pointer-events: none;
    
    margin-top: 15px;
  }

  .drop::after {
    content: \'\';
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    height: 25px;
    background: transparent;
    z-index: 1;
  }

  .drop ul li a {
    display: block;
    padding: 12px 20px;
    color: #333;
    text-decoration: none;
    font-size: 14px;
    transition: background 0.2s, color 0.2s;
  }

  .drop ul li a:hover {
    background: #f0f7f0;
    color: #558255 !important;
  }

  .drop:hover ul {
    opacity: 1;
    visibility: visible;
    border-top: 0.5px solid gray;
    transform: translateY(-10.5px);
    pointer-events: auto;
  }

  .services {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 5px;
    padding: 0;
    margin: 0;
    list-style: none;
    min-width: 400px;
  }
  
  .services-row {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    gap: 5px;
    padding: 0;
    margin: 0;
    list-style: none;
  }

  /* МОБИЛЬНОЕ ПОДМЕНЮ */
  .mobile-menu .submenu {
    position: fixed;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: #fff;
    z-index: 1001;
    transition: left 0.4s ease;
    overflow-y: auto;
    padding: 0;
    box-shadow: 2px 0 20px rgba(0,0,0,0.15);
  }
  .mobile-menu .submenu.show {
    left: 0;
  }
  .mobile-menu .submenu-header {
    display: flex;
    align-items: center;
    padding: 15px 20px;
    border-bottom: 1px solid #eee;
    background: #fff;
    position: sticky;
    top: 0;
    z-index: 10;
  }
  .mobile-menu .back-btn {
    background: none;
    border: none;
    font-size: 24px;
    padding: 5px 12px;
    margin-right: 8px;
    cursor: pointer;
    color: #333;
  }
  .mobile-menu .submenu-title {
    font-size: 19px;
    font-weight: 600;
    color: #333;
  }
  .mobile-menu .submenu-services {
    list-style: none;
    padding: 10px 0 50px 0;
    margin: 0;
  }
  .mobile-menu .submenu-services li a {
    display: block;
    padding: 16px 20px;
    color: #333;
    text-decoration: none;
    border-bottom: 1px solid #f0f0f0;
    font-size: 16.5px;
  }
  .mobile-menu .submenu-services li a:hover {
    background: #f8fff8;
    color: #000;
  }

  .mobile-menu .menu ul ul {
    display: block !important;
  }
  
  .menu ul li span {
    display: none;
  }

  /* МОБИЛЬНАЯ ВЕРСИЯ - УПРАВЛЕНИЕ PADDING */
  @media only screen and (min-width: 320px) and (max-width: 768px) {
    .header {
        padding: 10px 15px;
        display: grid;
        gap: 5px;
        grid-template-columns: 1fr;
        justify-items: start;
        transition: padding 0.3s ease;
    }
    
    /* Когда меню закрыто - убираем padding */
    .header.menu-closed {
        padding: 0 !important;
    }
  }
</style>

<header class="blackr men-fix fix bg-white menu-closed">
  <div class="ar-container header">
    <!-- Десктопное меню слева -->
    <div class="header__menu">
      <nav class="header__menu-nav">
        <ul class="header__menu-ul">
          <li class="drop">
            <a href="https://domozmsk.ru/#about" class="!text-black">О нас</a>
            <ul class="services-row">
              <li><a href="https://domozmsk.ru/history-company"><span>История компании</span></a></li>
              <li><a href="https://domozmsk.ru/history-company/nasha-komanda"><span>Наша команда</span></a></li>
              <li><a href="https://domozmsk.ru/history-company/reviews"><span>Отзывы</span></a></li>
              <li><a href="https://domozmsk.ru/history-company/rabochij-proczess"><span>Рабочий процесс</span></a></li>
              <li><a href="https://domozmsk.ru/history-company/contact"><span>Контакты</span></a></li>
            </ul>
          </li>
          <li class="drop">
            <a href="https://domozmsk.ru/#vidy" class="!text-black">Услуги</a>
            <ul class="services">
              <li><a href="[[~2]]"><span>Ландшафтное проектирование</span></a></li>
              <li><a href="[[~16]]"><span>Дренаж и ливневая канализация</span></a></li>
              <li><a href="[[~11]]"><span>Автополив</span></a></li>
              <li><a href="[[~13]]"><span>Ландшафтное освещение</span></a></li>
              <li><a href="[[~18]]"><span>Мощение</span></a></li>
              <li><a href="[[~17]]"><span>Газон</span></a></li>
              <li><a href="[[~57]]"><span>Уход за растениями</span></a></li>
              <li><a href="[[~12]]"><span>Городское благоустройство и озеленение</span></a></li>
              <li><a href="[[~24]]"><span>Топографическая съемка участка</span></a></li>
              <li><a href="[[~112]]"><span>Посадка и пересадка растений</span></a></li>
              <li><a href="[[~20]]"><span>Резиновые покрытия</span></a></li>
              <li><a href="[[~19]]"><span>Асфальтирование участка</span></a></li>
              <li><a href="[[~14]]"><span>Подпорные стенки</span></a></li>
              <li><a href="[[~22]]"><span>Монтаж МАФ</span></a></li>
              <li><a href="[[~23]]"><span>Монтаж ограждений</span></a></li>
              <li><a href="[[~7]]"><span>Новогоднее оформление</span></a></li>
            </ul>
          </li>
          <li><a href="https://domozmsk.ru/blogs" class="!text-black">Блоги</a></li>
          <li>
            <a href="https://domozmsk.ru/#kviz" class="!text-black">Рассчитать проект</a>
          </li>
        </ul>
      </nav>
    </div>

    <!-- Логотип -->
    <div class="relative relative header__flex-logo py-2">
      <a href="https://domozmsk.ru/" class="logo" title="logo">
        <img class="lazyload h-14" data-src="/assets/img/logo/logoblack.svg" alt="Логотип" width="200" height="60" loading="eager" fetchpriority="high">
      </a>
    </div>

    <!-- Десктопное меню справа -->
    <div class="header__menu">
      <nav class="header__menu-nav">
        <ul class="header__menu-ul items-center">
          <li><a href="https://domozmsk.ru/history-company/glavnaya-uslug" class="hover:text-[#558255] transition !text-black">Поиск по сайту</a></li>
          <li><a href="https://domozmsk.ru/prices" class="hover:text-[#558255] transition !text-black">Цены</a></li>
          <li><a href="[[~52]]" class="hover:text-[#558255] transition !text-black">Партнерская программа</a></li>
          
          <li>
            <a href="tel:+79859207700" class="group flex items-center gap-2 bg-[#558255] hover:bg-[#3d5c3d] text-white font-bold px-5 py-4 rounded-xl transition-all duration-300 shadow-lg hover:shadow-[#558255]/30 transform hover:-translate-y-0.5">
              <span>+7 (985) 920-77-00</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <!-- МОБИЛЬНОЕ МЕНЮ -->
    <div class="mobile-menu">
      <div class="menu-bar"><span></span></div>
      <div class="menu">
        <div class="header__flex-logo-mob">
          <a href="https://domozmsk.ru/" class="logo" title="logo">
            <img class="lazyload" data-src="/assets/img/logo-ru-1.png" title="logo" alt="logo">
          </a>
        </div>

        <ul>
          <li class="has-children">
            <a href="#" class="menuh submenu-trigger" data-submenu="services-submenu-about">
              О нас
            </a>
            <div id="services-submenu-about" class="submenu">
              <div class="submenu-header">
                <button class="back-btn">← Назад</button>
              </div>
              <ul class="submenu-services">
              <li><a href="https://domozmsk.ru/history-company">История компании</a></li>
              <li><a href="https://domozmsk.ru/history-company/nasha-komanda">Наша команда</a></li>
              <li><a href="https://domozmsk.ru/history-company/reviews">Отзывы</a></li>
              <li><a href="https://domozmsk.ru/history-company/rabochij-proczess">Рабочий процесс</span></a></li>
              <li><a href="https://domozmsk.ru/history-company/contact">Контакты</span></a></li>
              </ul>
            </div>
          </li>
          
          <li class="has-children">
            <a href="#" class="menuh submenu-trigger" data-submenu="services-submenu">
              Виды работ
            </a>
            <div id="services-submenu" class="submenu">
              <div class="submenu-header">
                <button class="back-btn">← Назад</button>
              </div>
              <ul class="submenu-services">
                  <li><a href="[[~2]]">Ландшафтное проектирование</a></li>
                  <li><a href="[[~16]]">Дренаж и ливневая канализация</a></li>
                  <li><a href="[[~11]]">Автополив</a></li>
                  <li><a href="[[~13]]">Ландшафтное освещение</a></li>
                  <li><a href="[[~18]]">Мощение</a></li>
                  <li><a href="[[~17]]">Газон</a></li>
                  <li><a href="[[~57]]">Уход за растениями</a></li>
                  <li><a href="[[~12]]">Городское благоустройство и озеленение</a></li>
                  <li><a href="[[~24]]">Топографическая съемка участка</a></li>
                  <li><a href="[[~112]]">Посадка и пересадка растений</a></li>
                  <li><a href="[[~20]]">Резиновые покрытия</a></li>
                  <li><a href="[[~19]]">Асфальтирование участка</a></li>
                  <li><a href="[[~14]]">Подпорные стенки</a></li>
                  <li><a href="[[~22]]">Монтаж МАФ</a></li>
                  <li><a href="[[~23]]">Монтаж ограждений</a></li>
                  <li><a href="[[~7]]">Новогоднее оформление</a></li>
              </ul>
            </div>
          </li>

          <li>
            <a href="https://domozmsk.ru/#kviz">Рассчитать проект</a>
          </li>
          <li><a href="https://domozmsk.ru/history-company/glavnaya-uslug">Поиск по сайту</a></li>
          <li><a href="https://domozmsk.ru/prices">Цены</a></li>
          <li><a href="[[~52]]">Партнерская программа</a></li>
          <li><a href="https://domozmsk.ru/#contac">Контакты</a></li>
          <li><a href="https://domozmsk.ru/blogs">Блоги</a></li>
        </ul>

        <ul role="list" class="t-sociallinks__wrapper" aria-label="Соц. сети">
        </ul>

        <div class="header__button" style="align-items: center;margin-left:0">
          <a href="" onclick="return false;" class="header__butmobile header_callme_viewform" style="width: -webkit-fill-available;">Оставить заявку</a>
          <a href="mailto:{\'email_2\'|config}" class="header__button-email">{\'email_2\'|config}</a>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- JavaScript -->
<script>
document.addEventListener(\'DOMContentLoaded\', function () {
  const triggers = document.querySelectorAll(\'.submenu-trigger\');
  const header = document.querySelector(\'.header\');
  
  // Изначально меню закрыто - padding = 0
  if (header) {
    header.classList.add(\'menu-closed\');
  }
  
  triggers.forEach(trigger => {
    trigger.addEventListener(\'click\', function (e) {
      e.preventDefault();
      e.stopImmediatePropagation();
      const submenu = document.getElementById(this.dataset.submenu);
      if (submenu) { 
        submenu.classList.add(\'show\');
        // Открываем меню - возвращаем padding
        if (header) {
          header.classList.remove(\'menu-closed\');
        }
      };
    });
  });

  document.querySelectorAll(\'.back-btn\').forEach(btn => {
    btn.addEventListener(\'click\', function (e) {
      e.stopPropagation();
      this.closest(\'.submenu\').classList.remove(\'show\');
      // Проверяем, все ли подменю закрыты
      const openSubmenus = document.querySelectorAll(\'.submenu.show\');
      if (openSubmenus.length === 0 && header) {
        // Все меню закрыты - убираем padding
        header.classList.add(\'menu-closed\');
      }
    });
  });
});
</script>',
  'locked' => 0,
  'properties' => 'a:0:{}',
  'static' => 0,
  'static_file' => '',
  'content' => '<style>
    .menu {
    height: 100%;
    }
    
  .drop {
    position: relative;
    padding-bottom: 25px;
    margin-bottom: -25px;
    z-index: 100;
  }

  .drop ul {
    position: absolute;
    top: 100%;
    left: 0;
    min-width: 200px;
    background: #fff;
    padding: 8px 0;
    list-style: none;
    
    opacity: 0;
    visibility: hidden;
    transition: all 0.25s ease-in-out;
    pointer-events: none;
    
    margin-top: 15px;
  }

  .drop::after {
    content: \'\';
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    height: 25px;
    background: transparent;
    z-index: 1;
  }

  .drop ul li a {
    display: block;
    padding: 12px 20px;
    color: #333;
    text-decoration: none;
    font-size: 14px;
    transition: background 0.2s, color 0.2s;
  }

  .drop ul li a:hover {
    background: #f0f7f0;
    color: #558255 !important;
  }

  .drop:hover ul {
    opacity: 1;
    visibility: visible;
    border-top: 0.5px solid gray;
    transform: translateY(-10.5px);
    pointer-events: auto;
  }

  .services {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 5px;
    padding: 0;
    margin: 0;
    list-style: none;
    min-width: 400px;
  }
  
  .services-row {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    gap: 5px;
    padding: 0;
    margin: 0;
    list-style: none;
  }

  /* МОБИЛЬНОЕ ПОДМЕНЮ */
  .mobile-menu .submenu {
    position: fixed;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: #fff;
    z-index: 1001;
    transition: left 0.4s ease;
    overflow-y: auto;
    padding: 0;
    box-shadow: 2px 0 20px rgba(0,0,0,0.15);
  }
  .mobile-menu .submenu.show {
    left: 0;
  }
  .mobile-menu .submenu-header {
    display: flex;
    align-items: center;
    padding: 15px 20px;
    border-bottom: 1px solid #eee;
    background: #fff;
    position: sticky;
    top: 0;
    z-index: 10;
  }
  .mobile-menu .back-btn {
    background: none;
    border: none;
    font-size: 24px;
    padding: 5px 12px;
    margin-right: 8px;
    cursor: pointer;
    color: #333;
  }
  .mobile-menu .submenu-title {
    font-size: 19px;
    font-weight: 600;
    color: #333;
  }
  .mobile-menu .submenu-services {
    list-style: none;
    padding: 10px 0 50px 0;
    margin: 0;
  }
  .mobile-menu .submenu-services li a {
    display: block;
    padding: 16px 20px;
    color: #333;
    text-decoration: none;
    border-bottom: 1px solid #f0f0f0;
    font-size: 16.5px;
  }
  .mobile-menu .submenu-services li a:hover {
    background: #f8fff8;
    color: #000;
  }

  .mobile-menu .menu ul ul {
    display: block !important;
  }
  
  .menu ul li span {
    display: none;
  }

  /* МОБИЛЬНАЯ ВЕРСИЯ - УПРАВЛЕНИЕ PADDING */
  @media only screen and (min-width: 320px) and (max-width: 768px) {
    .header {
        padding: 10px 15px;
        display: grid;
        gap: 5px;
        grid-template-columns: 1fr;
        justify-items: start;
        transition: padding 0.3s ease;
    }
    
    /* Когда меню закрыто - убираем padding */
    .header.menu-closed {
        padding: 0 !important;
    }
  }
</style>

<header class="blackr men-fix fix bg-white menu-closed">
  <div class="ar-container header">
    <!-- Десктопное меню слева -->
    <div class="header__menu">
      <nav class="header__menu-nav">
        <ul class="header__menu-ul">
          <li class="drop">
            <a href="https://domozmsk.ru/#about" class="!text-black">О нас</a>
            <ul class="services-row">
              <li><a href="https://domozmsk.ru/history-company"><span>История компании</span></a></li>
              <li><a href="https://domozmsk.ru/history-company/nasha-komanda"><span>Наша команда</span></a></li>
              <li><a href="https://domozmsk.ru/history-company/reviews"><span>Отзывы</span></a></li>
              <li><a href="https://domozmsk.ru/history-company/rabochij-proczess"><span>Рабочий процесс</span></a></li>
              <li><a href="https://domozmsk.ru/history-company/contact"><span>Контакты</span></a></li>
            </ul>
          </li>
          <li class="drop">
            <a href="https://domozmsk.ru/#vidy" class="!text-black">Услуги</a>
            <ul class="services">
              <li><a href="[[~2]]"><span>Ландшафтное проектирование</span></a></li>
              <li><a href="[[~16]]"><span>Дренаж и ливневая канализация</span></a></li>
              <li><a href="[[~11]]"><span>Автополив</span></a></li>
              <li><a href="[[~13]]"><span>Ландшафтное освещение</span></a></li>
              <li><a href="[[~18]]"><span>Мощение</span></a></li>
              <li><a href="[[~17]]"><span>Газон</span></a></li>
              <li><a href="[[~57]]"><span>Уход за растениями</span></a></li>
              <li><a href="[[~12]]"><span>Городское благоустройство и озеленение</span></a></li>
              <li><a href="[[~24]]"><span>Топографическая съемка участка</span></a></li>
              <li><a href="[[~112]]"><span>Посадка и пересадка растений</span></a></li>
              <li><a href="[[~20]]"><span>Резиновые покрытия</span></a></li>
              <li><a href="[[~19]]"><span>Асфальтирование участка</span></a></li>
              <li><a href="[[~14]]"><span>Подпорные стенки</span></a></li>
              <li><a href="[[~22]]"><span>Монтаж МАФ</span></a></li>
              <li><a href="[[~23]]"><span>Монтаж ограждений</span></a></li>
              <li><a href="[[~7]]"><span>Новогоднее оформление</span></a></li>
            </ul>
          </li>
          <li><a href="https://domozmsk.ru/blogs" class="!text-black">Блоги</a></li>
          <li>
            <a href="https://domozmsk.ru/#kviz" class="!text-black">Рассчитать проект</a>
          </li>
        </ul>
      </nav>
    </div>

    <!-- Логотип -->
    <div class="relative relative header__flex-logo py-2">
      <a href="https://domozmsk.ru/" class="logo" title="logo">
        <img class="lazyload h-14" data-src="/assets/img/logo/logoblack.svg" alt="Логотип" width="200" height="60" loading="eager" fetchpriority="high">
      </a>
    </div>

    <!-- Десктопное меню справа -->
    <div class="header__menu">
      <nav class="header__menu-nav">
        <ul class="header__menu-ul items-center">
          <li><a href="https://domozmsk.ru/history-company/glavnaya-uslug" class="hover:text-[#558255] transition !text-black">Поиск по сайту</a></li>
          <li><a href="https://domozmsk.ru/prices" class="hover:text-[#558255] transition !text-black">Цены</a></li>
          <li><a href="[[~52]]" class="hover:text-[#558255] transition !text-black">Партнерская программа</a></li>
          
          <li>
            <a href="tel:+79859207700" class="group flex items-center gap-2 bg-[#558255] hover:bg-[#3d5c3d] text-white font-bold px-5 py-4 rounded-xl transition-all duration-300 shadow-lg hover:shadow-[#558255]/30 transform hover:-translate-y-0.5">
              <span>+7 (985) 920-77-00</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <!-- МОБИЛЬНОЕ МЕНЮ -->
    <div class="mobile-menu">
      <div class="menu-bar"><span></span></div>
      <div class="menu">
        <div class="header__flex-logo-mob">
          <a href="https://domozmsk.ru/" class="logo" title="logo">
            <img class="lazyload" data-src="/assets/img/logo-ru-1.png" title="logo" alt="logo">
          </a>
        </div>

        <ul>
          <li class="has-children">
            <a href="#" class="menuh submenu-trigger" data-submenu="services-submenu-about">
              О нас
            </a>
            <div id="services-submenu-about" class="submenu">
              <div class="submenu-header">
                <button class="back-btn">← Назад</button>
              </div>
              <ul class="submenu-services">
              <li><a href="https://domozmsk.ru/history-company">История компании</a></li>
              <li><a href="https://domozmsk.ru/history-company/nasha-komanda">Наша команда</a></li>
              <li><a href="https://domozmsk.ru/history-company/reviews">Отзывы</a></li>
              <li><a href="https://domozmsk.ru/history-company/rabochij-proczess">Рабочий процесс</span></a></li>
              <li><a href="https://domozmsk.ru/history-company/contact">Контакты</span></a></li>
              </ul>
            </div>
          </li>
          
          <li class="has-children">
            <a href="#" class="menuh submenu-trigger" data-submenu="services-submenu">
              Виды работ
            </a>
            <div id="services-submenu" class="submenu">
              <div class="submenu-header">
                <button class="back-btn">← Назад</button>
              </div>
              <ul class="submenu-services">
                  <li><a href="[[~2]]">Ландшафтное проектирование</a></li>
                  <li><a href="[[~16]]">Дренаж и ливневая канализация</a></li>
                  <li><a href="[[~11]]">Автополив</a></li>
                  <li><a href="[[~13]]">Ландшафтное освещение</a></li>
                  <li><a href="[[~18]]">Мощение</a></li>
                  <li><a href="[[~17]]">Газон</a></li>
                  <li><a href="[[~57]]">Уход за растениями</a></li>
                  <li><a href="[[~12]]">Городское благоустройство и озеленение</a></li>
                  <li><a href="[[~24]]">Топографическая съемка участка</a></li>
                  <li><a href="[[~112]]">Посадка и пересадка растений</a></li>
                  <li><a href="[[~20]]">Резиновые покрытия</a></li>
                  <li><a href="[[~19]]">Асфальтирование участка</a></li>
                  <li><a href="[[~14]]">Подпорные стенки</a></li>
                  <li><a href="[[~22]]">Монтаж МАФ</a></li>
                  <li><a href="[[~23]]">Монтаж ограждений</a></li>
                  <li><a href="[[~7]]">Новогоднее оформление</a></li>
              </ul>
            </div>
          </li>

          <li>
            <a href="https://domozmsk.ru/#kviz">Рассчитать проект</a>
          </li>
          <li><a href="https://domozmsk.ru/history-company/glavnaya-uslug">Поиск по сайту</a></li>
          <li><a href="https://domozmsk.ru/prices">Цены</a></li>
          <li><a href="[[~52]]">Партнерская программа</a></li>
          <li><a href="https://domozmsk.ru/#contac">Контакты</a></li>
          <li><a href="https://domozmsk.ru/blogs">Блоги</a></li>
        </ul>

        <ul role="list" class="t-sociallinks__wrapper" aria-label="Соц. сети">
        </ul>

        <div class="header__button" style="align-items: center;margin-left:0">
          <a href="" onclick="return false;" class="header__butmobile header_callme_viewform" style="width: -webkit-fill-available;">Оставить заявку</a>
          <a href="mailto:{\'email_2\'|config}" class="header__button-email">{\'email_2\'|config}</a>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- JavaScript -->
<script>
document.addEventListener(\'DOMContentLoaded\', function () {
  const triggers = document.querySelectorAll(\'.submenu-trigger\');
  const header = document.querySelector(\'.header\');
  
  // Изначально меню закрыто - padding = 0
  if (header) {
    header.classList.add(\'menu-closed\');
  }
  
  triggers.forEach(trigger => {
    trigger.addEventListener(\'click\', function (e) {
      e.preventDefault();
      e.stopImmediatePropagation();
      const submenu = document.getElementById(this.dataset.submenu);
      if (submenu) { 
        submenu.classList.add(\'show\');
        // Открываем меню - возвращаем padding
        if (header) {
          header.classList.remove(\'menu-closed\');
        }
      };
    });
  });

  document.querySelectorAll(\'.back-btn\').forEach(btn => {
    btn.addEventListener(\'click\', function (e) {
      e.stopPropagation();
      this.closest(\'.submenu\').classList.remove(\'show\');
      // Проверяем, все ли подменю закрыты
      const openSubmenus = document.querySelectorAll(\'.submenu.show\');
      if (openSubmenus.length === 0 && header) {
        // Все меню закрыты - убираем padding
        header.classList.add(\'menu-closed\');
      }
    });
  });
});
</script>',
);