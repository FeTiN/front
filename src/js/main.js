jQuery(document).ready(function () {

  jQuery('#top').fadeOut();
  
  jQuery('#top').click(function(){
    jQuery("body,html").animate({
      scrollTop:0
    },1000);
  });

  jQuery('.mobi').click(function(){
    if ( jQuery(this).hasClass('active') )
      jQuery(this).removeClass('active'),
      jQuery('nav.nav').removeClass('active');
    else
      jQuery(this).addClass('active'),
      jQuery('nav.nav').addClass('active');
  });

  jQuery(window).scroll(function(){
      var s = jQuery(this).scrollTop();
      if(s > jQuery('.header').height()){
        jQuery('.header').addClass('fix');
        jQuery('#top').fadeIn();
      } else {
        jQuery('.header').removeClass('fix');
        jQuery('#top').fadeOut();
      }
  });

  jQuery('.aside .akkardeon ul li').eq(0).addClass('active');
  jQuery('.aside .akkardeon > ul > li > a').click(function(){
    if ( jQuery(this).parent().find('.sub-menu').is(':visible') ) {
      jQuery(this).parent().removeClass('active').find('.sub-menu').slideUp().removeClass('active');
    } else {
      jQuery('.aside .akkardeon .sub-menu').slideUp().removeClass('active');
      jQuery('.aside .akkardeon ul li').removeClass('active');
      jQuery(this).parent().addClass('active').find('.sub-menu').slideDown().addClass('active');
    }
  });

	jQuery('.slider_home .slider').owlCarousel({
      loop:true,
      nav:true,
      margin: 0,
      lazyLoad:true,
      autoplayHoverPause:true,
      autoplay:true,
      responsive:{
          0:{
              items:1
          },
          1000:{
              items:1
          },
          1920:{
              items:1
          }
      }
  });

  jQuery('.robot a.more').click(function(){
    if ( jQuery('.robot .text').is(':visible') ) {
      jQuery(this).html('Читать').parent().parent().find('.text').slideUp();
    } else{
      jQuery(this).html('Свернуть').parent().parent().find('.text').slideDown();
    }
    return false
  });

});