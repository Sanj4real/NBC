// hamburger
$(document).ready(function(){
  $('#nav-icon1').click(function(){
    $(this).toggleClass('open');
  });
});

// menu
$("[data-trigger]").on("click", function(e){
    e.preventDefault();
    e.stopPropagation();
    var offcanvas_id =  $(this).attr('data-trigger');
    $(offcanvas_id).toggleClass("show");
    $('body').toggleClass("offcanvas-active");
    $(".screen-overlay").toggleClass("show");
}); 

$(".btn-close, .screen-overlay").click(function(e){
    $(".screen-overlay").removeClass("show");
    $(".mobile-offcanvas").removeClass("show");
    $("body").removeClass("offcanvas-active");
}); 




// SEARCH BOX
$('.user-info button .la-search').on('click', function (e) {
  $(this).toggleClass('open');
  $(".search-box").toggleClass('active');
  $(".l-header").toggleClass("z-index");
  $(".logo").toggleClass("z-indexx");
  $("body").toggleClass("overflow");
});


// carousel
  $('.slider-home').owlCarousel({
      loop: true,
      margin: 10,
      dots: false,
      nav: true,
      mouseDrag: false,
      autoplay: false,
      animateOut: 'fadeOut',
      navText: ['<span class="las la-arrow-left"></span>', '<span class="las la-arrow-right"></span>'],
      responsive: {
          0: {
              items: 1
          },
          600: {
              items: 1
          },
          1000: {
              items: 1
          }
      }
  });

  $('.history-carousel').owlCarousel({
      loop: true,
      margin: 10,
      dots: false,
      nav: true,
      mouseDrag: false,
      autoplay: true,
      animateOut: 'fadeOut',
      navText: ['<span class="las la-arrow-left"></span>', '<span class="las la-arrow-right"></span>'],
      responsive: {
          0: {
              items: 1
          },
          600: {
              items: 1
          },
          1000: {
              items: 1
          }
      }
  });
// carousel
  $('.testimonial-wrap').owlCarousel({
      autoplay: true,
      lazyLoad: true,
      loop: true,
      margin: 20,
      responsiveClass: true,
      autoHeight: true,
      autoplayTimeout: 3000,
      smartSpeed: 800,
      nav: true,
      navText: ['<span class="las la-arrow-left"></span>', '<span class="las la-arrow-right"></span>'],
      responsive: {
        0: {
          items: 1
        },

        600: {
          items: 2
        },

        1024: {
          items: 2
        },

        1366: {
          items: 2
        }
      }
    });

  $('.pop-left-testimonial').owlCarousel({
      autoplay: false,
      lazyLoad: true,
      loop: true,
      margin: 20,
      dots: false,
      responsiveClass: true,
      autoHeight: true,
      autoplayTimeout: 3000,
      smartSpeed: 800,
      nav: true,
      navText: ['<span class="las la-arrow-left"></span>', '<span class="las la-arrow-right"></span>'],
      responsive: {
        0: {
          items: 1
        },

        600: {
          items: 1
        },

        1024: {
          items: 1
        },

        1366: {
          items: 1
        }
      }
    });

  // graduate
  $('.graduate-testimonial').owlCarousel({
      autoplay: false,
      lazyLoad: true,
      loop: true,
      margin: 15,
      dots: false,
      responsiveClass: true,
      autoHeight: true,
      autoplayTimeout: 3000,
      smartSpeed: 800,
      nav: true,
      navText: ['<span class="las la-arrow-left"></span>', '<span class="las la-arrow-right"></span>'],
      responsive: {
        0: {
          items: 1
        },

        600: {
          items: 2
        },

        1024: {
          items: 3
        },

        1366: {
          items: 3
        }
      }
    });

// animate
  AOS.init();

// index-float-news
$(".news-heading").on("mouseenter", function(){
  $(this).closest(".sidebar-notice").addClass("hover")
});
$(".sidebar-notice").on("mouseleave", function(){
  $(this).removeClass("hover");
});


// auto hiding navbar on scrolling
// $(document).ready(function () {
  
//   'use strict';
  
//    var c, currentScrollTop = 0,
//        navbar = $('.header-wrap');

//    $(window).scroll(function () {
//       var a = $(window).scrollTop();
//       var b = navbar.height();
     
//       currentScrollTop = a;
     
//       if (c < currentScrollTop && a > b + b) {
//         navbar.addClass("scrollUp");
//       } else if (c > currentScrollTop && !(a <= b)) {
//         navbar.removeClass("scrollUp");
//       }
//       c = currentScrollTop;
     
//      console.log(a);
//   });
  
// });
 // menu-newClass
$(window).scroll(function() {
    if ($(this).scrollTop() > 50) {
        $(".header-wrap").addClass("scrollUp");
    } else {
        $(".header-wrap").removeClass("scrollUp");
    }
});