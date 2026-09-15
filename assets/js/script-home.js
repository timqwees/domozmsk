$(document).ready(function() {
    var $earBlock = $('.secblock');
    var $eeeElement = $('.etap');
    var windowHeight = $(window).height();
    
    $eeeElement.css('transition', 'background-color 0.5s ease');
    
    $(window).scroll(function() {
        var scrollTop = $(this).scrollTop();
        var earBlockOffset = $earBlock.offset().top;
        
        // Блок появляется в нижней части экрана
        if (scrollTop + windowHeight >= earBlockOffset + 100) { // +100px для задержки
            $eeeElement.css('backgroundColor', '#5c745c');
        } else {
            $eeeElement.css('backgroundColor', '');
        }
    });
});