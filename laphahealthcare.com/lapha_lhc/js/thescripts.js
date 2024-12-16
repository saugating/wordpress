/**
 * Created by Sushant Gauchan
 * Email : sushant.gauchan11@gmail.com
 */
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
}

function sliderInit() {
  $('.banner-slider-container .banner-slider').slick({
      arrows: true,
      dots: false,
      autoplay: false,
      autoplaySpeed: 2500,
      fade: false,
      speed: 1000,
      centerMode: false,
      pauseOnHover: false,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
      {
        breakpoint: 1299,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 999,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 799,
        settings: {
          slidesToShow: 2,
        }
      }
    ]
  });
  $('.about-slider-container .banner-slider').slick({
      arrows: true,
      dots: false,
      autoplay: false,
      autoplaySpeed: 2500,
      fade: false,
      speed: 1000,
      centerMode: true,
      pauseOnHover: false,
      slidesToShow: 5,
      slidesToScroll: 1,
      responsive: [
      {
        breakpoint: 1299,
        settings: {
          slidesToShow: 4,
        }
      },
      {
        breakpoint: 999,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 799,
        settings: {
          slidesToShow: 2,
        }
      }
    ]
  });
}




/*-------------------------------- Functions Ends --------------------------------*/
