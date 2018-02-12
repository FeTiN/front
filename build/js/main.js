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
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiIiwic291cmNlcyI6WyJtYWluLmpzIl0sInNvdXJjZXNDb250ZW50IjpbImpRdWVyeShkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24gKCkge1xyXG5cclxuICBqUXVlcnkoJyN0b3AnKS5mYWRlT3V0KCk7XHJcbiAgXHJcbiAgalF1ZXJ5KCcjdG9wJykuY2xpY2soZnVuY3Rpb24oKXtcclxuICAgIGpRdWVyeShcImJvZHksaHRtbFwiKS5hbmltYXRlKHtcclxuICAgICAgc2Nyb2xsVG9wOjBcclxuICAgIH0sMTAwMCk7XHJcbiAgfSk7XHJcblxyXG4gIGpRdWVyeSgnLm1vYmknKS5jbGljayhmdW5jdGlvbigpe1xyXG4gICAgaWYgKCBqUXVlcnkodGhpcykuaGFzQ2xhc3MoJ2FjdGl2ZScpIClcclxuICAgICAgalF1ZXJ5KHRoaXMpLnJlbW92ZUNsYXNzKCdhY3RpdmUnKSxcclxuICAgICAgalF1ZXJ5KCduYXYubmF2JykucmVtb3ZlQ2xhc3MoJ2FjdGl2ZScpO1xyXG4gICAgZWxzZVxyXG4gICAgICBqUXVlcnkodGhpcykuYWRkQ2xhc3MoJ2FjdGl2ZScpLFxyXG4gICAgICBqUXVlcnkoJ25hdi5uYXYnKS5hZGRDbGFzcygnYWN0aXZlJyk7XHJcbiAgfSk7XHJcblxyXG4gIGpRdWVyeSh3aW5kb3cpLnNjcm9sbChmdW5jdGlvbigpe1xyXG4gICAgICB2YXIgcyA9IGpRdWVyeSh0aGlzKS5zY3JvbGxUb3AoKTtcclxuICAgICAgaWYocyA+IGpRdWVyeSgnLmhlYWRlcicpLmhlaWdodCgpKXtcclxuICAgICAgICBqUXVlcnkoJy5oZWFkZXInKS5hZGRDbGFzcygnZml4Jyk7XHJcbiAgICAgICAgalF1ZXJ5KCcjdG9wJykuZmFkZUluKCk7XHJcbiAgICAgIH0gZWxzZSB7XHJcbiAgICAgICAgalF1ZXJ5KCcuaGVhZGVyJykucmVtb3ZlQ2xhc3MoJ2ZpeCcpO1xyXG4gICAgICAgIGpRdWVyeSgnI3RvcCcpLmZhZGVPdXQoKTtcclxuICAgICAgfVxyXG4gIH0pO1xyXG5cclxuICBqUXVlcnkoJy5hc2lkZSAuYWtrYXJkZW9uIHVsIGxpJykuZXEoMCkuYWRkQ2xhc3MoJ2FjdGl2ZScpO1xyXG4gIGpRdWVyeSgnLmFzaWRlIC5ha2thcmRlb24gPiB1bCA+IGxpID4gYScpLmNsaWNrKGZ1bmN0aW9uKCl7XHJcbiAgICBpZiAoIGpRdWVyeSh0aGlzKS5wYXJlbnQoKS5maW5kKCcuc3ViLW1lbnUnKS5pcygnOnZpc2libGUnKSApIHtcclxuICAgICAgalF1ZXJ5KHRoaXMpLnBhcmVudCgpLnJlbW92ZUNsYXNzKCdhY3RpdmUnKS5maW5kKCcuc3ViLW1lbnUnKS5zbGlkZVVwKCkucmVtb3ZlQ2xhc3MoJ2FjdGl2ZScpO1xyXG4gICAgfSBlbHNlIHtcclxuICAgICAgalF1ZXJ5KCcuYXNpZGUgLmFra2FyZGVvbiAuc3ViLW1lbnUnKS5zbGlkZVVwKCkucmVtb3ZlQ2xhc3MoJ2FjdGl2ZScpO1xyXG4gICAgICBqUXVlcnkoJy5hc2lkZSAuYWtrYXJkZW9uIHVsIGxpJykucmVtb3ZlQ2xhc3MoJ2FjdGl2ZScpO1xyXG4gICAgICBqUXVlcnkodGhpcykucGFyZW50KCkuYWRkQ2xhc3MoJ2FjdGl2ZScpLmZpbmQoJy5zdWItbWVudScpLnNsaWRlRG93bigpLmFkZENsYXNzKCdhY3RpdmUnKTtcclxuICAgIH1cclxuICB9KTtcclxuXHJcblx0alF1ZXJ5KCcuc2xpZGVyX2hvbWUgLnNsaWRlcicpLm93bENhcm91c2VsKHtcclxuICAgICAgbG9vcDp0cnVlLFxyXG4gICAgICBuYXY6dHJ1ZSxcclxuICAgICAgbWFyZ2luOiAwLFxyXG4gICAgICBsYXp5TG9hZDp0cnVlLFxyXG4gICAgICBhdXRvcGxheUhvdmVyUGF1c2U6dHJ1ZSxcclxuICAgICAgYXV0b3BsYXk6dHJ1ZSxcclxuICAgICAgcmVzcG9uc2l2ZTp7XHJcbiAgICAgICAgICAwOntcclxuICAgICAgICAgICAgICBpdGVtczoxXHJcbiAgICAgICAgICB9LFxyXG4gICAgICAgICAgMTAwMDp7XHJcbiAgICAgICAgICAgICAgaXRlbXM6MVxyXG4gICAgICAgICAgfSxcclxuICAgICAgICAgIDE5MjA6e1xyXG4gICAgICAgICAgICAgIGl0ZW1zOjFcclxuICAgICAgICAgIH1cclxuICAgICAgfVxyXG4gIH0pO1xyXG5cclxuICBqUXVlcnkoJy5yb2JvdCBhLm1vcmUnKS5jbGljayhmdW5jdGlvbigpe1xyXG4gICAgaWYgKCBqUXVlcnkoJy5yb2JvdCAudGV4dCcpLmlzKCc6dmlzaWJsZScpICkge1xyXG4gICAgICBqUXVlcnkodGhpcykuaHRtbCgn0KfQuNGC0LDRgtGMJykucGFyZW50KCkucGFyZW50KCkuZmluZCgnLnRleHQnKS5zbGlkZVVwKCk7XHJcbiAgICB9IGVsc2V7XHJcbiAgICAgIGpRdWVyeSh0aGlzKS5odG1sKCfQodCy0LXRgNC90YPRgtGMJykucGFyZW50KCkucGFyZW50KCkuZmluZCgnLnRleHQnKS5zbGlkZURvd24oKTtcclxuICAgIH1cclxuICAgIHJldHVybiBmYWxzZVxyXG4gIH0pO1xyXG5cclxufSk7Il0sImZpbGUiOiJtYWluLmpzIn0=
