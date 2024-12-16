/**
 * Created by Sushant Gauchan
 * Email : sushant.gauchan11@gmail.com
 */

var $ = jQuery;
var winWidth = $(window).width();

$(document).ready(function () {
  sliderInit();
  openMenuNav();
  closeMenuNav();
  addClassInit();
});

/*------------------------------- Functions Starts -------------------------------*/
function sliderInit() {
  $('.banner-slider-container .banner-slider').slick({
      arrows: false,
      dots: true,
      autoplay: true,
      autoplaySpeed: 2500,
      fade: true,
      speed: 1000,
      centerMode: false,
      pauseOnHover: false,
      slidesToShow: 1,
      slidesToScroll: 1,
  });

  $('.card-slider-container #slider-intro').slick({
      arrows: false,
      dots: true,
      autoplay: true,
      speed: 750,
      centerMode: false,
      pauseOnHover: true,
      slidesToShow: 3,
      slidesToScroll: 3,
      responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        }
      }
    ]
  });

  $('.card-slider-container .card-slider').slick({
      arrows: false,
      dots: true,
      autoplay: true,
      speed: 750,
      centerMode: false,
      pauseOnHover: true,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        }
      }
    ]
  });

  $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
    e.target
    e.relatedTarget
    $('#mattress-slider').slick('setPosition');
    $('#pillows-slider').slick('setPosition');
    $('#cushions-slider').slick('setPosition');
    $('#quilts-slider').slick('setPosition');
  });
}
function openMenuNav() {
    jQuery("#main-side-menu").addClass("menuItemsnav");
    jQuery("#menuOverlay").addClass("menuOverlay");
}
function closeMenuNav() {
    jQuery("#main-side-menu").removeClass("menuItemsnav");
    jQuery("#menuOverlay").removeClass("menuOverlay");
}
function addClassInit() {
    $('.search-toggle').click(function () {
        $('body').toggleClass('search-open');
    });
    $('.filter-btn').click(function () {
        $('.shop-filter-block').toggleClass('filter-open');
        $('#header-wrapper').toggleClass('sticky-open');
    });
    $('.mattress-btn').click(function () {
        $('.product-mattress').toggleClass('pro-active');
        $('#header-wrapper').toggleClass('sticky-open');
    });
    $('.pillow-btn').click(function () {
        $('.product-pillow').toggleClass('pro-active');
        $('#header-wrapper').toggleClass('sticky-open');
    });
    $('.quilt-btn').click(function () {
        $('.product-quilt').toggleClass('pro-active');
        $('#header-wrapper').toggleClass('sticky-open');
    });
    $('.accessories-btn').click(function () {
        $('.product-accessories').toggleClass('pro-active');
        $('#header-wrapper').toggleClass('sticky-open');
    });
    $('.search-close').click(function () {
        $('body').removeClass('search-open');
    });;
    $('.close-shop-filter').click(function () {
        $('.shop-filter-block').removeClass('filter-open');
    });;
    $('#close-menu-mattress').click(function () {
        $('.product-mattress').removeClass('pro-active');
    });;
    $('#close-menu-pillow').click(function () {
        $('.product-pillow').removeClass('pro-active');
    });;
    $('#close-menu-quilt').click(function () {
        $('.product-quilt').removeClass('pro-active');
    });;
    $('#close-menu-accessories').click(function () {
        $('.product-accessories').removeClass('pro-active');
    });;
}
/*-------------------------------- Functions Ends --------------------------------*/
