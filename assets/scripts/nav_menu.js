$(document).ready(function(){

	$('#close-btn').hide();
	$('.sub-menu').hide();
	$('#close-btn').animate({
		opacity: 1
	},100);
	$('.sub-menu').animate({
		opacity: 1
	},100);

	$('#open-btn').click(function(){
		$(this).fadeOut('fast');
		$('#close-btn').fadeIn('fast');
		$('.sub-menu').fadeIn('fast');
	});
	$('#close-btn').click(function(){
		$(this).fadeOut('fast');
		$('#open-btn').fadeIn('fast');
		$('.sub-menu').fadeOut('fast');
	});

	$(".index-page").click(function(){

	      $("body").animate({
	      	opacity: '0',
	      }, 200);

	      setTimeout(indexPage, 201);

	      // Function to take user to index.html.
	      function indexPage() {
	      	window.location.href = "index.html";
	      }

	});

	$(".price-list-page").click(function(){

	      $("body").animate({
	      	opacity: '0',
	      }, 200);

	      setTimeout(priceListPage, 201);

	      // Function to take user to price_list.html.
	      function priceListPage() {
	      	window.location.href = "price_list.html";
	      }

	});

	$(".contact-page").click(function(){

	      $("body").animate({
	      	opacity: '0',
	      }, 200);

	      setTimeout(contactPage, 201);

	      // Function to take user to contact.html.
	      function contactPage() {
	      	window.location.href = "contact.html";
	      }

	});

});
