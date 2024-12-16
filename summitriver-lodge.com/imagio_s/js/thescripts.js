/**
 * Created by Sushant Gauchan
 * Email : sushant.gauchan11@gmail.com
 */

var $ = jQuery;
var winWidth = $(window).width();

$(document).ready(function () {
    sliderInit();
    navInit();
    addClassInit();
    modalInit();
    mcustomInit();
    smootScroll();


    var $gallery = $('.common-gallery-section .gallery-container').isotope({
        // options
        itemSelector: '.gallery-item',
        layoutMode: 'masonry'
    });

    $gallery.imagesLoaded().progress(function () {
        $gallery.isotope('layout');
    });
});


/*------------------------------- Functions Starts -------------------------------*/
function sliderInit() {
    // $('.common-banner-section .banner-slider').slick({
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     arrows: true,
    //     dots: false,
    //     autoplay: false,
    //     speed: 500,
    //     pauseOnHover: false,
    //     fade: true,
    //     cssEase: 'linear',
    // });

    $('.common-room-container.add-slider').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: true,
        speed: 500,
        pauseOnHover: false,
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
        ]
    });
    $('.testimonial-section .common-box-container').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        autoplay: false,
        speed: 500,
        pauseOnHover: false,
        fade: true,
        cssEase: 'linear',
    });
    $('.common-testimonial-section .testimonial-container').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: false,
        speed: 500,
        pauseOnHover: false,
        fade: true,
        cssEase: 'linear',
    });

    if(winWidth > 767){
        $('#navigation-wrapper .nav-image-container').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '#navigation-wrapper .nav-container ul'
        });

        $('#navigation-wrapper .nav-container ul').slick({
            slidesToShow: 6,
            slidesToScroll: 6,
            vertical: true,
            asNavFor: '#navigation-wrapper .nav-image-container',
        });

        $('#navigation-wrapper .nav-container ul li').hover(function(){
            var index = ($(this).attr('data-slick-index'));
            $('#navigation-wrapper .nav-image-container').slick('slickGoTo',index);
        });
    }

    if(winWidth <= 767){
   /*     $('#home-page .common-room-container').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            autoplay: false,
            speed: 500,
            pauseOnHover: false,
        });*/
    }

    $('.gallery-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.gallery-nav-slider'
    });

    $('.gallery-nav-slider').slick({
        slidesToShow: 7,
        slidesToScroll: 7,
        asNavFor: '.gallery-slider',
        dots: false,
        arrows: false,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                }
            },
        ]
    });
}


function navInit() {
    $('.common-toggle.type-login').click(function (e){
        $('body').addClass('open');
    });

    $('.common-toggle.type-logout').click(function (e){
        $('body').removeClass('open');
    })
}

function addClassInit() {

}

function modalInit() {


    $('.open-enquiry').click(function (e) {
        e.preventDefault();
        $('#enquiryModal').modal('show');
    });

}

function mcustomInit() {
    /*$(".your-class").mCustomScrollbar({
     theme:"minimal",
     axis:"x" // horizontal scrollbar
     });*/
}

function smootScroll(){
    // hide #back-top first
    $("#common-back-top").hide();

    // fade in #back-top
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#common-back-top').fadeIn();
            } else {
                $('#common-back-top').fadeOut();
            }
        });

        // scroll body to 0px on click
        $('#common-back-top a').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 1000);
            return false;
        });
    });
}

/*-------------------------------- Functions Ends --------------------------------*/
