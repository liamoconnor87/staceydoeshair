$(document).ready(function() {

  // FADES BODY INTO VIEW
  $('body').delay(2000).animate({
    opacity: '1',
  }, 200);

  $(window).scroll(function() {
    $('.footer-sect').animate({
      opacity: '1',
    }, 200);
  });

});
