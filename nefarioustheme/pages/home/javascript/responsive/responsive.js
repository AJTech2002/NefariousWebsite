$(window).on('scroll', function() {
  var scroll = $(window).scrollTop();
  var scrollPercent = 100 * $(window).scrollTop() / ($(document).height() - $(window).height());

  if (scrollPercent > 5) {
      $(".HeaderListPhoneItem").css("opacity", "0.3");
  }
  else if (scrollPercent < 5) {
      $(".HeaderListPhoneItem").css("opacity", "1");
  }

});
