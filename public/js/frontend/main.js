(function ($) {
"use strict";

  $(document).ready(function(){

    // review-active
    $('.slider_active').owlCarousel({
      loop:true,
      margin:0,
      items:1,
      autoplay:true,
      navText:['<i class="fas fa-arrow-circle-left"></i>','<i class="fas fa-arrow-circle-right"></i>'],
      nav:true,
      dots:false,
      autoplayHoverPause: true,
      autoplaySpeed: 800,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      responsive:{
          0:{
              items:1,
              nav:false,
          },
          767:{
              items:1,
              nav:false,
          },
          992:{
              items:1,
              nav:true
          },
          1200:{
              items:1,
              nav:true
          },
          1600:{
              items:1,
              nav:true
          }
      }
    });

  });

})(jQuery);	