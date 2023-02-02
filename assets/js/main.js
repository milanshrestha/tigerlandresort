//                 tl.fromTo(".hidden-menu-cta, .header-menu-cta-info", { duration: 1, y: -50, autoAlpha: 0, stagger: 0.5, clearProps: "all", ease:  Power4.easeOut }, { y: 0, autoAlpha: 1 }, 0.6);                

(function ($) {
    // function scroll() {
    //     $contentDivs.each(function (k) {
    //         var _thisOffset = $(this).offset();
    //         var _actPosition = _thisOffset.top - $(window).scrollTop();
    //         if (_actPosition < stickyOffset.top && _actPosition + $(this).height() > 70) {
    //             $(".change").removeClass("light dark").addClass($(this).hasClass("light") ? "light" : "dark");
    //             return false;
    //         }
    //     });
    // }

    var stickyOffset = $('.site-header').offset().top;
    var scroll = new LocomotiveScroll();
  $(window).scroll(function(){
    var sticky = $('body'),
        scroll = $(window).scrollTop();

    if (scroll >= stickyOffset) sticky.addClass('fixed');
    else sticky.removeClass('fixed');
  });

     var mySwipers = new Swiper ('.hero-banner .swiper-container', {
          loop: true,
         grapCursor:false,
          effect: 'fade',
          autoplay: {
            delay: 1000,
          },
          speed: 2000
        });

  
     var mySwiper = new Swiper ('.section--testimonail .swiper-container', {
       
         slidesPerView : 'auto',
          loop : true,
          autoplay: 
          {
            delay: 3000,
          },
        });

var swiper = new Swiper(".activities", {
        centeredSlides: true,
        centeredSlides: true,
        roundLengths: true,
        loop: true,
            slidesPerView:1,
        pagination: {
          el: ".swiper-pagination",
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },

         breakpoints: {
          400: {
            slidesPerView:1,
            spaceBetween: 10,
          },
           480: {
            slidesPerView:1,
            spaceBetween: 10,
          },
          640: {
            slidesPerView:1,
            spaceBetween: 20,
          },
          800: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          1024: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
        },
        
      });



$('.menu-toggle').click(function($) {
    const  tl = new gsap.timeline({});
    tl.fromTo(".hidden-menu", { 
        duration: 1,
         yPercent: -100, 
         display: "block", 
         ease:  Power3.easeOut 
       }, { yPercent: 0 }, 0),

     tl.fromTo(".hidden-menu .header-container", { 
      duration: 1, 
      autoAlpha: 0 }, 
      { autoAlpha: 1 }, "=+0"), 

     tl.fromTo(".hidden-nav-items li", { 
      duration: 2, 
      autoAlpha: 0, 
      y:0,
      clearProps: "all", 
      ease:  Power4.easeOut 
      }, { y: 0, autoAlpha: 1 }, 0.4),

       tl.fromTo('.hidden-transition', {
        duration:2,
        rotateX:0,
        ease:Power4.easeOut,
       }, 
       {
        rotateX:90, 
      })
     // tl.fromTo(".hidden-menu-cta", { 
     //  duration: 1, y: -50, autoAlpha: 0, stagger: 0.5, clearProps: "all", ease:  Power4.easeOut }, 
     //  { y: 0, autoAlpha: 1 }, 0.6);
    });

  $('.close-menu-toggle ').click(function($) {
      const  tl = new gsap.timeline({ });
      tl.to(".hidden-menu .header-container", { duration: 0.3, autoAlpha: 0 }, 0),
      tl.to(".hidden-nav-items li", { duration: 0.5, y: -50, autoAlpha: 0, stagger: 0.07, ease: Cubic.easeOut }, 0),
      tl.fromTo(".hidden-transition", { duration: 1, rotateX: 90, ease:  Power4.easeOut }, { rotateX: 0 }, 0),
      // tl.to(".hidden-menu-cta", { duration: 0.5, y: -50, autoAlpha: 0, stagger: 0.03, ease: Cubic.easeOut }, 0.4),
      tl.to(".hidden-menu", { duration: 1, yPercent: -100, ease:  Power4.easeOut }, 0.6);
  });
})(jQuery)


