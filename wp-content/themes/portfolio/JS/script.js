jQuery(function(){



  jQuery('.test-b').hide();
jQuery(window).scroll(function(){

  if (jQuery(window).scrollTop() > 100) {
    jQuery('.test-b').fadeIn();
  }else{
    jQuery('.test-b').fadeOut();
  }
  
})
jQuery(window).scroll(function(){

  if (jQuery(window).scrollTop() > 100) {
    jQuery('.test-a').fadeOut();
  }else{
    jQuery('.test-a').fadeIn();
  }
  
})





});