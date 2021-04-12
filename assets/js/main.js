$(function(){


    $('.menu').on('click', function(){
        $(this).toggleClass('open');
        $('.links').toggleClass('reveal');

    });
    
    $('.panel').on('click', function(){
        $(this).addClass('bg-light').siblings().removeClass('bg-light');
    })

});
