jQuery(document).ready(function() {

  $('#close-btn').hide();
  $('.sub-menu').hide();
  $('#close-btn').animate({
    opacity: 1
  }, 100);
  $('.sub-menu').animate({
    opacity: 1
  }, 100);

  $('#open-btn').click(function() {
    $(this).fadeOut('fast');
    $('#close-btn').fadeIn('fast');
    $('.sub-menu').fadeIn('fast');
  });
  $('#close-btn').click(function() {
    $(this).fadeOut('fast');
    $('#open-btn').fadeIn('fast');
    $('.sub-menu').fadeOut('fast');
  });

  $(".index-page").click(function() {

    $(".page-fade, .footer-sect, .welcome-banner").animate({
      opacity: '0',
    }, 200);

    setTimeout(indexPage, 201);

    // Function to take user to index
    function indexPage() {
      window.location.href = "/";
    }

  });

  $(".price-list-page").click(function() {

    $(".page-fade, .footer-sect, .welcome-banner").animate({
      opacity: '0',
    }, 200);


    setTimeout(priceListPage, 201);

    // Function to take user to price_list
    function priceListPage() {
      window.location.href = "/price_list/";
    }

  });

  $(".contact-page").click(function() {

    $(".page-fade, .footer-sect, .welcome-banner").animate({
      opacity: '0',
    }, 200);


    setTimeout(contactPage, 201);

    // Function to take user to contact
    function contactPage() {
      window.location.href = "/contact/";
    }

  });


});
