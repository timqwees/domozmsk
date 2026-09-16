$(document).ready(function() {
  $('.menu ul li a').click( function() {  
   $('.menu-bar').click()
});
});
$(document).ready(function() {
$('.abssocial__one').click( function() {
  $(this).css({'opacity':'0','zIndex':'9999'})
    $('.abssocial__close').css('opacity','1')
$('.abssocial__two').css('transform','translateY(-70px)');   
$('.abssocial__fry').css('transform','translateY(-135px)'); 
$('.abssocial__fy ').css('transform','translateY(-200px)');  
$('.abssocial__fo ').css('transform','translateY(-266px)');  

});
$('.abssocial__close').click( function() {
  $(this).css('opacity','0')
    $('.abssocial__one').css({'opacity':'1','zIndex':'99999'})
    $('.abssocial__two').css('transform','translateY(0px)');
    $('.abssocial__fry').css('transform','translateY(0px)'); 
    $('.abssocial__fy ').css('transform','translateY(0px)'); 
    $('.abssocial__fo ').css('transform','translateY(0px)');  
});
});

   /*скрипт для модального окна*/ 
$(document).ready(function(){

    $('.vidy__grid-block-text').hover(function() {
     $(this).parent().find('img').addClass('hoverimg');
    }, function() {
       $(this).parent().find('img').removeClass('hoverimg');
    });

$('#form-modal').click( function() {
$('.overlay-modal').fadeOut();
$('#form-modal').css({
        'pointer-events': 'none',
        'opacity': '.5'
    });
});
$('#form-foter').click( function() {
function sayHi() {
$('#form-foter').css({
        'pointer-events': 'none',
        'opacity': '.5'
    });
}

setTimeout(sayHi, 1000);

});


$('a.header_callme_viewform').click( function() {
  $('.overlay-modal').fadeIn();
});
$('button.header_callme_viewform').click( function() {
  $('.overlay-modal').fadeIn();
});
$('button.callme_viewform').click( function() {
  $('.overlay-modal').fadeIn();
});
// Закрытие окна на крестик
$('.ar-modal-close-default').click( function() {
  $('.overlay-modal').fadeOut();
});
// Закрытие окна на поле
$(document).mouseup( function (e) { 
  var popup = $('.ar-modal-dialog');
  if (e.target != popup[0] && popup.has(e.target).length === 0){
    $('.overlay-modal').fadeOut();
  }
});
});
  
$(document).ready(function() {
  $('.baner__home-text-phone,.foterphone').hover(function(){
      $(this).find('a').addClass('no_mack')
  })
});
$(document).ready(function() {
 // третья карусель
var swiper2 = new Swiper('.do', {
    effect: 'slide',
    slidesPerView: 1.2, // Частично показываем боковые слайды
    centeredSlides: true,
    loop: true,
    allowTouchMove: false,
    spaceBetween: 30, // Отступ между слайдами
    
    navigation: {
        clickable: true,
        nextEl: '.swiper-button-next2',
        prevEl: '.swiper-button-prev2',
    },
    
    // Добавляем пагинацию
    pagination: {
        el: '.swiper-pagination2', // Селектор элемента для пагинации
        clickable: true, // Возможность переключать слайды кликом по точкам
        type: 'bullets', // Тип пагинации: 'bullets' (точки), 'fraction' (дробь), 'progressbar' (прогрессбар)
        dynamicBullets: false, // Динамическое изменение размера активной точки
    },
    
    breakpoints: {
        0: {
            slidesPerView: 1.1,
            spaceBetween: 15,
            centeredSlides: true
        },
        768: {
            slidesPerView: 1.3,
            spaceBetween: 30,
            centeredSlides: true
        },
        1024: {
            slidesPerView: 2, // На десктопе показываем больше боковой части
            spaceBetween: 40,
            centeredSlides: true
        },
    }
});


var swiper21 = new Swiper('.otzi', {
    effect: 'slide',

    shortSwipes: false,
    loop: true,
    
    slidesPerView: 'auto',
    spaceBetween: 20,

 
    navigation: {
        clickable: true,
        nextEl: '.swiper-button-next3',
        prevEl: '.swiper-button-prev3',
    },
    // Добавляем пагинацию
    pagination: {
        el: '.swiper-pagination3', // Селектор элемента для пагинации
        clickable: true, // Возможность переключать слайды кликом по точкам
        type: 'bullets', // Тип пагинации: 'bullets' (точки), 'fraction' (дробь), 'progressbar' (прогрессбар)
        dynamicBullets: false, // Динамическое изменение размера активной точки
    },
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        868: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
      
        },
    }
}); 

  });
   /*скрипт для карты спрятать end */ 
/*скрипт для мобильного меню*/ 
(function($){
    $('.menu-bar').on('click', function() {
        $('.mobile-menu').toggleClass('triggered');
    }); 
    $('.has-children > a').after('<span></span>');  
    $('.has-children span').on('click', function() {
        $(this).toggleClass('subtriggered');
    });
})(jQuery);
/*скрипт для  мобильного меню end*/ 
/*скрипт для фиксированого меню*/ 
$(document).ready(function() {
  // Запуск функции при скролле
   
  $(window).on('scroll', function() {
    var scrollTop = $(this).scrollTop(); // Получаем текущую позицию скролла    
    // Проверяем условие для изменения класса
  
  });
});
$(document).ready(function() {
  // Запуск функции при скролле
  const mediaQueryw = window.matchMedia('(min-width: 350px) and (max-width: 768px)')
if (mediaQueryw.matches) {
  $(window).on('scroll', function() {
    var scrollTop = $(this).scrollTop(); // Получаем текущую позицию скролла    
    // Проверяем условие для изменения класса
    if (scrollTop > 60) {
           $('.header-phone').hide();
        $('#mobil').addClass('mobil');
    } else {
           $('.header-phone').show();
         $('#mobil').removeClass('mobil');
    }
  });
} 
});
/*скрипт для фиксированого меню*/ 
  
/*spisok*/
$(document).ready(function() {
    $('.button_icon').click(function(){
        $('#spisok').toggleClass('uk-open');
    })
    /*Клик не по элементу*/
$(document).ready(function() {
    $('.button_icon').click(function(){
  $(document).mouseup( function(e){ // событие клика по веб-документу
    var divwer = $( "#spisok" ); // тут указываем ID элемента
    if ( !divwer.is(e.target) && !$('.button_icon').is(e.target)  // если клик был не по нашему блоку
        && divwer.has(e.target).length === 0 ) { // и не по его дочерним элементам
      $(".button_icon").click();
    }
}); 
})
});
/*Клик не по элементу*/
    });
/*spisok end*/
/*maska*/
  //Код jQuery, устанaвливающий маску для ввода телефона элементу input
  //1. После загрузки страницы,  когда все элементы будут доступны выполнить...
/*$(function(){
    //2. Получить элемент, к которому необходимо добавить маску
    $("input[type='phone']").mask("+7 (999) 999-9999");
  });*/
/*maska end*/

$(document).ready(function() { 
    $('#form-modal').css({
        'pointer-events': 'none',
        'opacity': '.5'
    });
     $('#form-foter').css({
        'pointer-events': 'none',
        'opacity': '.5'
    });
    
    // Инициализация маски
    $("input[type='phone']").mask("+7 (999) 999-99-99");
 $("#af_phonee").mask("+7 (999) 999-99-99");
    function checkFormFields() {   
        var nameInput = document.getElementById('af_name');
        var emailInput = document.getElementById('af_email');
        var phoneInput = document.getElementById('af_phone');
        var name = nameInput.value.trim();
        var phone = phoneInput.value.trim();
        var email = emailInput.value.trim();
        var submitButton = document.getElementById('form-modal');
        
        // Несколько способов проверки телефона
        var isPhoneValid = false;
        
        // Способ 1: Проверка на отсутствие символов маски
        if (phone.length > 0) {
            // Убираем все нецифровые символы и проверяем длину
            var cleanPhone = phone.replace(/\D/g, '');
            isPhoneValid = cleanPhone.length === 11; // +7 и 10 цифр
        }
        
        // Способ 2: Альтернативная проверка (раскомментировать если первый не работает)
        // isPhoneValid = phone.length === 18 && !phone.includes('_');
        
        // console.log('Phone:', phone, 'Valid:', isPhoneValid, 'Name:', name);
        
        if (name !== '' && isPhoneValid && email) {  
            //console.log('All fields valid')  
            if (submitButton) {
                submitButton.style.pointerEvents = 'auto';
                submitButton.style.opacity = '1';
            }
        } else { 
            //console.log('Fields invalid')
            if (submitButton) {
                submitButton.style.pointerEvents = 'none';
                submitButton.style.opacity = '0.5';
            }
        }
        
        // Валидация полей (красная обводка)
        if (name === '') {    
            nameInput.classList.add('art-rede');
        } else {
            nameInput.classList.remove('art-rede');
        }
          if (email === '') {    
            emailInput.classList.add('art-rede');
        } else {
            emailInput.classList.remove('art-rede');
        }
        
        if (!isPhoneValid) {    
            phoneInput.classList.add('art-rede');
        } else {
            phoneInput.classList.remove('art-rede');
        }
    }


   function checkFormFieldse() {   
        var nameeInput = document.getElementById('af_namee');
        var phoneeInput = document.getElementById('af_phonee');
        var namee = nameeInput.value.trim();
        var phonee = phoneeInput.value.trim();
        var submitButton = document.getElementById('form-foter');
        // Несколько способов проверки телефона
        var isPhoneValid = false;
        
        // Способ 1: Проверка на отсутствие символов маски
        if (phonee.length > 0) {
            // Убираем все нецифровые символы и проверяем длину
            var cleanPhone = phonee.replace(/\D/g, '');
            isPhoneValid = cleanPhone.length === 11; // +7 и 10 цифр
        }
        
        // Способ 2: Альтернативная проверка (раскомментировать если первый не работает)
        // isPhoneValid = phone.length === 18 && !phone.includes('_');
        
        // console.log('Phone:', phone, 'Valid:', isPhoneValid, 'Name:', name);
        
        if (namee !== '' && isPhoneValid) {  
            //console.log('All fields valid')  
            if (submitButton) {
                submitButton.style.pointerEvents = 'auto';
                submitButton.style.opacity = '1';
            }
        } else { 
            //console.log('Fields invalid')
            if (submitButton) {
                submitButton.style.pointerEvents = 'none';
                submitButton.style.opacity = '0.5';
            }
        }
        
        // Валидация полей (красная обводка)
        if (namee === '') {    
            nameeInput.classList.add('art-rede');
        } else {
            nameeInput.classList.remove('art-rede');
        }
      
        
        if (!isPhoneValid) {    
            phoneeInput.classList.add('art-rede');
        } else {
            phoneeInput.classList.remove('art-rede');
        }
    }


    // Улучшенная инициализация событий
    function initEvents() {
        var nameInput = document.getElementById('af_name');
        var phoneInput = document.getElementById('af_phone');
        // События для поля имени
        nameInput.addEventListener('input', checkFormFields);
        nameInput.addEventListener('blur', checkFormFields);
        nameInput.addEventListener('change', checkFormFields);
        // События для поля телефона
        phoneInput.addEventListener('input', checkFormFields);
        phoneInput.addEventListener('blur', checkFormFields);
        phoneInput.addEventListener('change', checkFormFields);
        phoneInput.addEventListener('keyup', checkFormFields);
        // Дополнительно: проверка при загрузке
       
    }
      function initEventse() {
        var nameeInput = document.getElementById('af_namee');
        var phoneeInput = document.getElementById('af_phonee');
        // События для поля имени
        nameeInput.addEventListener('input', checkFormFieldse);
        nameeInput.addEventListener('blur', checkFormFieldse);
        nameeInput.addEventListener('change', checkFormFieldse);
        // События для поля телефона
        phoneeInput.addEventListener('input', checkFormFieldse);
        phoneeInput.addEventListener('blur', checkFormFieldse);
        phoneeInput.addEventListener('change', checkFormFieldse);
        phoneeInput.addEventListener('keyup', checkFormFieldse);
        // Дополнительно: проверка при загрузке
       
    }

    setTimeout(initEvents, 1000);
    setTimeout(initEventse, 1000);
    
    // Альтернатива: если все еще не работает, попробуйте этот вариант
    $("input[type='phone']").on("input change keyup", function() {
        setTimeout(checkFormFields, 100);
    });
    $("#af_phonee").on("input change keyup", function() {
        setTimeout(checkFormFieldse, 100);
    });
    
    $("#af_name,#af_email").on("input change keyup", function() {
        checkFormFields();
    });
    $("#af_namee").on("input change keyup", function() {
        checkFormFieldse();
    });
});

$(document).ready(function() {
  $(".read_tx .text").append('<span class="read_more" style="">Читать далее…</span>');
  $(".read_tx .read").append('<span class="hidden_bt" style="">Свернуть</span>');
  $('.read_tx .read_more').click(function(){
    $('.read_tx .read').slideDown(200);
    $(this).css({ display: "none" });
    $('.read_tx .hidden_bt').css({ display: "inline-blocK" });
  });
  $('.read_tx .hidden_bt').click(function(){
    $('.read_tx .read').slideUp(200);
    $(this).hide();
    $('.read_tx .read_more').css({ display: "inline-blocK" });
    $('html, body').animate({
      scrollTop: $(".read_tx").offset().top - 120
      }, 100);
  });
});

document.addEventListener('fetchit:success', (e) => {
  const { response } = e.detail; // Получаем объект ответа

   window.location.href = '/thanks';
});

/* === moved inline scripts (were inline in chunks/templates) === */

/* --- MENU (chunk 7 header) --- */
document.addEventListener('DOMContentLoaded', function () {
  const triggers = document.querySelectorAll('.submenu-trigger');
  const header = document.querySelector('.header');
  
  // Изначально меню закрыто - padding = 0
  if (header) {
    header.classList.add('menu-closed');
  }
  
  triggers.forEach(trigger => {
    trigger.addEventListener('click', function (e) {
      e.preventDefault();
      e.stopImmediatePropagation();
      const submenu = document.getElementById(this.dataset.submenu);
      if (submenu) { 
        submenu.classList.add('show');
        // Открываем меню - возвращаем padding
        if (header) {
          header.classList.remove('menu-closed');
        }
      };
    });
  });

  document.querySelectorAll('.back-btn').forEach(btn => {
    btn.addEventListener('click', function (e) {
      e.stopPropagation();
      this.closest('.submenu').classList.remove('show');
      // Проверяем, все ли подменю закрыты
      const openSubmenus = document.querySelectorAll('.submenu.show');
      if (openSubmenus.length === 0 && header) {
        // Все меню закрыты - убираем padding
        header.classList.add('menu-closed');
      }
    });
  });
});

/* --- MODAL (chunk 30 modal_window) --- */
document.addEventListener('DOMContentLoaded', function() {
    
    const modal = document.getElementById('modal-form');
    const closeBtn = modal.querySelector('.custom-modal-close');
    const overlay = modal.querySelector('.custom-modal-overlay');
    
    if (!modal) {
        console.error('❌ Модальное окно не найдено!');
        return;
    }
    
    // === Открытие модального окна ===
    function openModal() {
        modal.classList.add('active');
        document.body.classList.add('modal-open');
        console.log('Модальное окно открыто');
    }
    
    // === Закрытие модального окна ===
    function closeModal() {
        modal.classList.remove('active');
        document.body.classList.remove('modal-open');
        console.log('Модальное окно закрыто');
    }
    
    // === Обработчик клика на кнопки с классом modal_window ===
    document.addEventListener('click', function(e) {
        const trigger = e.target.closest('.modal_window');
        if (trigger) {
            e.preventDefault();
            e.stopPropagation();
            openModal();
        }
    });
    
    // === Закрытие по кнопке X ===
    if (closeBtn) {
        closeBtn.addEventListener('click', closeModal);
    }
    
    // === Закрытие по клику на overlay ===
    if (overlay) {
        overlay.addEventListener('click', closeModal);
    }
    
    // === Закрытие по Escape ===
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
            closeModal();
        }
    });
    
    console.log('Скрипт модального окна загружен');
});

/* --- QUIZ (tpl 1 home) --- */
(function() {
                    'use strict';
                
                    const QUIZ_ID = '694a7f2849c7600019f84985';
                    const QUIZ_CONFIG = {
                        id: QUIZ_ID,
                        buttonText: '«Старт»',
                        bgColor: '#283328',
                        textColor: '#ffffff',
                        rounded: true,
                        shadow: 'rgba(40, 51, 40, 0.5)',
                        blicked: true,
                        fixed: false,
                        buttonOnMobile: false,
                        disableOnMobile: false,
                        fullWidth: false
                    };
                
                    let marquizLoaded = false;
                    let marquizInitialized = false;
                
                    // Загрузка скрипта Marquiz
                    function loadMarquizScript() {
                        if (marquizLoaded) return;
                        marquizLoaded = true;
                
                        console.log('[Marquiz] Загрузка скрипта...');
                
                        const script = document.createElement('script');
                        script.src = 'https://script.marquiz.ru/v2.js';
                        script.async = true;
                
                        script.onload = function() {
                            console.log('[Marquiz] Скрипт загружен');
                            initMarquiz();
                        };
                
                        script.onerror = function() {
                            console.error('[Marquiz] Ошибка загрузки скрипта');
                            marquizLoaded = false;
                        };
                
                        document.head.appendChild(script);
                    }
                
                    // Инициализация квиза
                    function initMarquiz() {
                        if (marquizInitialized) return;
                        if (typeof Marquiz === 'undefined') {
                            console.warn('[Marquiz] Marquiz ещё не определён, ждём...');
                            setTimeout(initMarquiz, 100);
                            return;
                        }
                
                        marquizInitialized = true;
                        console.log('[Marquiz] Инициализация...');
                
                        // Инициализация
                        Marquiz.init({
                            host: '//quiz.marquiz.ru',
                            region: 'ru',
                            id: QUIZ_ID,
                            autoOpen: false,
                            autoOpenFreq: 'once',
                            openOnExit: false,
                            disableOnMobile: false
                        });
                
                        // Добавление inline-квиза
                        Marquiz.add(['Inline', QUIZ_CONFIG]);
                        console.log('[Marquiz] Квиз добавлен');
                    }
                
                    // Загрузка СТРОГО при скролле до блока (без принудительных таймеров — они грузят Marquiz 600+ КБ даже тем, кто не доскроллил, и роняют PSI)
                    const quizBlock = document.getElementById('kviz');
                    if (!quizBlock) {
                        console.error('[Marquiz] Блок #kviz не найден');
                        return;
                    }
                
                    if ('IntersectionObserver' in window) {
                        const observer = new IntersectionObserver(function(entries) {
                            entries.forEach(function(entry) {
                                if (entry.isIntersecting) {
                                    console.log('[Marquiz] Блок виден, загружаем...');
                                    loadMarquizScript();
                                    observer.disconnect();
                                }
                            });
                        }, {
                            rootMargin: '200px'
                        });
                
                        observer.observe(quizBlock);
                        console.log('[Marquiz] Observer установлен');
                    } else {
                        // Fallback для старых браузеров
                        console.log('[Marquiz] IntersectionObserver не поддерживается');
                        setTimeout(loadMarquizScript, 2000);
                    }
                
                    // Блок уже виден при загрузке? Не форсируем: догрузится при первом скролле через observer выше
                })();
