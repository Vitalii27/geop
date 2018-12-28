jQuery(function ($) {
    // arrow icons

    var arrowLeft = '<i class="fa fa-angle-left" aria-hidden="true"></i>';
    var arrowRight = '<i class="fa fa-angle-right" aria-hidden="true"></i>';
    //
    // var partnersSlider = $('.js-slider-partners');
    // var partnersOption = {
    //     slidesToShow: 6,
    //     slidesToScroll: 1,
    //     infinite: true,
    //     arrows: true,
    //     dots: false,
    //     nextArrow: '<button type="button" class="slider_btn--next slider_btn"> ' + arrowRight + ' </button>',
    //     prevArrow: '<button type="button" class="slider_btn--prev slider_btn">' + arrowLeft + '</button>',
    //     responsive: [{
    //         breakpoint: 1200,
    //         settings: {
    //             slidesToShow: 5,
    //         }
    //     }, {
    //         breakpoint: 998,
    //         settings: {
    //             slidesToShow: 4,
    //         }
    //     }, {
    //         breakpoint: 768,
    //         settings: {
    //             slidesToShow: 3,
    //         }
    //     }, {
    //         breakpoint: 600,
    //         settings: {
    //             slidesToShow: 2,
    //         }
    //     }, {
    //         breakpoint: 321,
    //         settings: {
    //             slidesToShow: 1,
    //         }
    //     }]
    //
    //     //accessibility: false // prevent page scroll up on autoplay
    // };
    var heroSlider = $('.js-hero-slide');

    var heroOption = {
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,
        dots: false,
        fade: true,
        nextArrow: '<button type="button" class="slider_btn--next slider_btn"> ' + arrowRight + ' </button>',
        prevArrow: '<button type="button" class="slider_btn--prev slider_btn">' + arrowLeft + '</button>',

        //accessibility: false // prevent page scroll up on autoplay
    };


    // jQuery('.js-photo-slider').on('init', function(event, slick, currentSlide, nextSlide){
    //     PopUpModule.initImg(".js-pop-up-img");
    // });
    // init slider
    // partnersSlider.slick(partnersOption);
    heroSlider.slick(heroOption);
    // photoSlider.slick(photoOption);


}); // ready