$(function() {
    $('.menu-toggle').click(function () {
        $('nav').toggleClass('ativar');
    })

    $('ul li').click(function () {
       $(this).siblings().removeClass('ativar');
        $(this).toggleClass('ativar');
    })

})

