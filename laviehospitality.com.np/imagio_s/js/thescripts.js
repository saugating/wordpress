 var $ = jQuery;
 var winWidth = $(window).width();

$(document).ready(function () {
    openCartNav();
    closeCartNav();
    sliderInit();
    cstmfadeInit();
    cstmVidInit();
});

/*------------------------------- Functions Starts -------------------------------*/
function openCartNav() {
    jQuery("#cart-side-menu").addClass("cartItemsnav");
    jQuery("#cartOverlay").addClass("cartOverlay");
    jQuery("body").addClass("menu-opened");
}
function closeCartNav() {
    jQuery("#cart-side-menu").removeClass("cartItemsnav");
    jQuery("#cartOverlay").removeClass("cartOverlay");
    jQuery("body").removeClass("menu-opened");
}

function sliderInit() {
  $('.slider-container .item-slider').slick({
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
  $('.brand-container .item-slider').slick({
      arrows: true,
      dots: true,
      autoplay: true,
      autoplaySpeed: 2500,
      fade: false,
      speed: 500,
      centerMode: false,
      pauseOnHover: false,
      slidesToShow: 1,
      slidesToScroll: 1,
  });
  $('.gallery-container .item-slider').slick({
      arrows: true,
      dots: true,
      autoplay: false,
      autoplaySpeed: 2500,
      fade: false,
      speed: 500,
      centerMode: false,
      infinite: false,
      pauseOnHover: false,
      variableWidth: true,
      slidesToShow: 5,
      slidesToScroll: 1,
      responsive: [
      {
        breakpoint: 1699,
        settings: {
          slidesToShow: 4,
        }
      },
      {
        breakpoint: 1199,
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
          slidesToShow: 1,
        }
      },
    ]
  });
  $('.team-gallery-container .item-slider').slick({
      arrows: true,
      dots: true,
      autoplay: false,
      autoplaySpeed: 2500,
      fade: false,
      speed: 500,
      centerMode: true,
      pauseOnHover: false,
      slidesToShow: 5,
      slidesToScroll: 1,
      responsive: [
      {
        breakpoint: 1699,
        settings: {
          slidesToShow: 4,
        }
      },
      {
        breakpoint: 1199,
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
        breakpoint: 599,
        settings: {
          slidesToShow: 1,
        }
      },
    ]
  });
  $('.home-brand-container .item-slider').slick({
      arrows: true,
      dots: true,
      autoplay: false,
      autoplaySpeed: 2500,
      fade: false,
      speed: 500,
      centerMode: false,
      pauseOnHover: false,
      variableWidth: true,
      responsive: [
        {
          breakpoint: 999,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 799,
          settings: {
            variableWidth: false,
            slidesToShow: 1,
          }
        }
      ]
  });
  $('.reviews-slider-container .item-slider').slick({
      arrows: true,
      dots: true,
      autoplay: false,
      autoplaySpeed: 2500,
      fade: false,
      speed: 500,
      centerMode: false,
      pauseOnHover: false,
      variableWidth: true,
      responsive: [
      {
        breakpoint: 1699,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 1199,
        settings: {

          slidesToShow: 2,
        }
      },
      {
        breakpoint: 999,
        settings: {

          slidesToShow: 1,
        }
      }
    ]
  });

  // $("#v-pills-home-tab").click(function(){
  //   $('.item-slider').slick('refresh');
  // });
  // $("#v-pills-profile-tab").click(function(){
  //   $('.item-slider').slick('refresh');
  // });
  // $("#v-pills-messages-tab").click(function(){
  //   $('.item-slider').slick('refresh');
  // });
  // $("#v-pills-settings-tab").click(function(){
  //   $('.item-slider').slick('refresh');
  // });


}

function cstmfadeInit() {
  let elementsArray = document.querySelectorAll(".cst-fade");
  console.log(elementsArray);
  window.addEventListener('scroll', fadeIn );
  function fadeIn() {
    for (var i = 0; i < elementsArray.length; i++) {
      var elem = elementsArray[i]
      var distInView = elem.getBoundingClientRect().top - window.innerHeight + 100;
      if (distInView < 0) {
        elem.classList.add("inView");
      } else {
        elem.classList.remove("inView");
      }
    }
  }
  fadeIn();
}

function cstmVidInit() {
  let elementsArray = document.querySelectorAll(".playvideo");
  console.log(elementsArray);
  window.addEventListener('scroll', fadeplayIn );
  function fadeplayIn() {
    for (var i = 0; i < elementsArray.length; i++) {
      var elem = elementsArray[i]
      var distInView = elem.getBoundingClientRect().top - window.innerHeight + 100;
      if (distInView < 0) {
        elem.classList.add("inView");
      } else {
        elem.classList.remove("inView");
      }
    }
  }
  fadeplayIn();
}

jQuery(window).scroll(function () {
    var winHeight = jQuery(window).height();
    var offset = 0.6;
    var scrollTop = jQuery(window).scrollTop();
    var visibleArea = scrollTop + (winHeight * offset);

    jQuery('.animation-area').each(function () {
        if(jQuery(this).offset().top < visibleArea) {
            jQuery(this).find('.ani-reveal-left').addClass('normal');
            jQuery(this).find('.ani-reveal-right').addClass('normal');
            jQuery(this).find('.ani-reveal-top').addClass('normal');
        }else{
            jQuery(this).find('.ani-reveal-left').removeClass('normal');
            jQuery(this).find('.ani-reveal-right').removeClass('normal');
            jQuery(this).find('.ani-reveal-top').removeClass('normal');
        }
    });
});

window.onload = function() {
  var sr = document.getElementById("one"),
  ds = document.getElementById("recheckout");
  sr.addEventListener('input', function() {
    ds.value = sr.value;
  });
  var src = document.getElementById("two"),
  dst = document.getElementById("recheckin");
  src.addEventListener('input', function() {
    dst.value = src.value;
  });
  var srca = document.getElementById("three"),
  dsta = document.getElementById("recheckout");
  srca.addEventListener('input', function() {
    dsta.value = srca.value;
  });
};

$(window).scroll(function() {
   $('video').each(function(){
       if ($(this).is(":in-viewport")) {
           $(this)[0].play();
       } else {
           $(this)[0].pause();
       }
   })
});

/*-------------------------------- Functions Ends --------------------------------*/
