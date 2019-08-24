jQuery(document).ready(function ($) {
  $("header nav.mobile-hide").click(function () {
    $("header nav").toggleClass("mobile-hide");
  });

  $("header nav div.menu").mouseenter(function () {
    if ($(window).width() >= 1000)
      $(this).css("overflow", "visible");
  });
  $("header nav div.menu").mouseleave(function () {
    if ($(window).width() >= 1000)
      $(this).css("overflow", "hidden");
  });
});
