$(function() {
    $('.expand').click(function(){
    	//alert('fuk');
      $(this).toggleClass('on');
      $('.expand .one, .expand .two, .expand .three, nav ul').toggleClass('on');
    });
})




$(window).load(function(){
	  $('.grid').isotope({
				masonry: {
			//columnWidth: 100
		  }
	  });
	});


$(document).ready(function(){
    $('.gallery').Chocolat();
});