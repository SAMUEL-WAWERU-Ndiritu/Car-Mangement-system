
$(document).ready(function(){
    $('.corousel').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        nextArrow:$(".next"),
        prevArrow:$(".prev"),
      });
});