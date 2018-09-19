jQuery(document).ready(function ($) {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 30) {
      $("div.nav-spacer").show();
      $("header nav a").css("transition", "none");
      $("header nav").addClass("fixed");
      setTimeout(function () {
        $("header nav a").css("transition", "all 0.5s ease");
      }, 500);
    }
    else {
      $("div.nav-spacer").hide();
      $("header nav a").css("transition", "none");
      $("header nav").removeClass("fixed");
      setTimeout(function () {
        $("header nav a").css("transition", "all 0.5s ease");
      }, 500);
    }
  });
});
