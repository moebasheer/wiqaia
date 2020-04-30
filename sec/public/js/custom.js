$(function(){
    'use strict';
    $('.lab-ul li a').click(function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $('#' + $(this).data('scroll')).offset().top
        }, 3500);
    });
});