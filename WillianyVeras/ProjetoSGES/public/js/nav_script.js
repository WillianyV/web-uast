$(function() {
    $(".menu-toggle").click(function () {
        $("nav").toggleClass('active');
    })
    //problema não sei como resolver
    // $("ul li").click(function () {
    //     $("header nav ul li").siblings().removeClass("active");
    //     $(" header nav ul li").toggleClass("active");
    // })

    $("header nav ul li").click(function () {
       // $("ul li").siblings().removeClass('active');
        $(this).toggleClass('active');
    })
})
