jQuery(document).ready(function() {

  $(window).scroll(function() {
    $('.footer-sect').animate({
      opacity: '1',
    }, 200);
  });

  $('.welcome-banner').delay(2200).animate({
    opacity: '1',
  }, 300);

  $('.page-fade').delay(1000).animate({
    opacity: '1',
  }, 200);
});
