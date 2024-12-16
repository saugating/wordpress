 var $ = jQuery;
 var winWidth = $(window).width();

$(document).ready(function () {
    navInit();
    sliderInit();
});


/*------------------------------- Functions Starts -------------------------------*/
function navInit() {
    $('.mobile-toggle').click(function() {
        $('#header-wrapper .custom-container').toggleClass('menu-open');
    });
    $('.close-menu').click(function () {
      $('#header-wrapper .custom-container').removeClass('menu-open');
    });

    $('.search-toggle').click(function () {
        $('body').toggleClass('search-open');
    });
    $('.search-close').click(function () {
        $('body').removeClass('search-open');
    });;

    $( ".filter-btn" ).on( "click", function() {
      $( ".sub-menu" ).toggleClass( "open" );
    });
}

function sliderInit() {
  $('.home-slider-container .home-slider').slick({
      arrows: false,
      dots: true,
      autoplay: false,
      autoplaySpeed: 2500,
      fade: true,
      speed: 500,
      centerMode: false,
      pauseOnHover: false,
      slidesToShow: 1,
      slidesToScroll: 1,
  });
  $('.product-slider-container .product-slider').slick({
      arrows: true,
      dots: false,
      autoplay: false,
      autoplaySpeed: 2500,
      fade: false,
      speed: 500,
      centerMode: false,
      pauseOnHover: false,
      slidesToShow: 1,
      slidesToScroll: 1,
  });
  $('.project-slider-container .project-slider').slick({
      arrows: true,
      dots: false,
      autoplay: false,
      autoplaySpeed: 2500,
      fade: false,
      speed: 500,
      centerMode: false,
      pauseOnHover: false,
      slidesToShow: 2,
      slidesToScroll: 1,
      responsive: [
      {
        breakpoint: 999,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });

  $('.gallery-slider.type-main-gallery').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.gallery-slider.type-nav-gallery'
  });

  $('.gallery-slider.type-nav-gallery').slick({
    centerMode: false,
    slidesToShow: 12,
    slidesToScroll: 1,
    arrows: true,
    focusOnSelect: true,
    asNavFor: '.gallery-slider.type-main-gallery',
    responsive: [
      {
        breakpoint: 1699,
        settings: {
          slidesToShow: 10,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 1299,
        settings: {
          slidesToShow: 9,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 999,
        settings: {
          slidesToShow: 7,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 799,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 1,
        }
      }
    ]
  });
}




/*-------------------------------- Functions Ends --------------------------------*/
