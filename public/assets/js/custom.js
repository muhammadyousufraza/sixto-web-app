

///////////////*****//////////////////
// RESPONSIVE NAVIGATION
// OPEN BTN
$(document).ready(function () {

  $("#navbar").on("click", function () {
    $(".nveMenu").addClass("is-opened");
    $(".overlay").addClass("is-on");
  });

  $(".overlay").on("click", function () {
    $(this).removeClass("is-on");
    $(".nveMenu").removeClass("is-opened");
  });

});
// CLOSE BTN
$(".overlay").on("click", function () {
  $(this).removeClass("is-on");
  $(".nveMenu").removeClass("is-opened");
});

$(".close-btn-nav").click(function () {
  $(".nveMenu").removeClass("is-opened");
  $(".overlay").removeClass("is-on");
});
// RESPONSIVE NAVIGATION
// 
// ACTIVE JS START
$(document).ready(function () {

  $('ul li span').click(function () {
    $('li span').removeClass("active-class");
    $(this).addClass("active-class");
  });
  $('#testimonials').owlCarousel({
    items: 2,
    loop: true,
    autoplay: true,
    dots:true,
    autoplayTimeout: 5000, // Set autoplay interval in milliseconds
    autoplayHoverPause: true,
    margin: 10,
    responsive:{
      0:{
          items:1,
      },
      1000:{
          items:2,
      }
  }
  });

});

// ACTIVE JS END


