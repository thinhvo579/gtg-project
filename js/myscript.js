$(document).ready(function() {
    slickHeader();
    ourwork();
    //slick_photo();
    //slick_testimonials();
    slidetoggle_header();
    fancybox();
    headerTop();
});

function slickHeader() {
    // -----------------slick----------

    $(".header__banner-photo").slick({
        autoplay: false,

        arrows: false,

        dots: false,

        fade: true,

        slidesToShow: 1,

        draggable: false,

        infinite: true,

        pauseOnHover: false,

        swipe: true,

        touchMove: true,

        speed: 1500,

        autoplaySpeed: 3000,

        useTransform: true,

        cssEase: "cubic-bezier(0.645, 0.045, 0.355, 1.000)",

        adaptiveHeight: true,

        focusOnSelect: true,
    });
    $("#banner-prev").click(function(event) {
        event.preventDefault();

        $(".header__banner-photo").slick("slickPrev");
    });

    $("#banner-next").click(function(event) {
        event.preventDefault();

        $(".header__banner-photo").slick("slickNext");
    });
}

function ourwork() {
    $(".click-ser").slick({
        autoplay: false,

        arrows: false,
        fade: true,
        dots: false,

        slidesToShow: 1,

        draggable: false,

        infinite: true,

        pauseOnHover: false,

        swipe: true,

        touchMove: true,

        speed: 1500,

        autoplaySpeed: 3000,

        useTransform: true,

        cssEase: "cubic-bezier(0.645, 0.045, 0.355, 1.000)",

        adaptiveHeight: false,

        focusOnSelect: true,
        asNavFor: ".click-title, .collum-photo",
    });
    $(".click-title").slick({
        slidesToShow: 1,
        fade: true,
        arrows: false,
        speed: 1500,
        asNavFor: ".click-ser, .collum-photo",
    });
    $(".collum-photo").slick({
        slidesToShow: 2,

        arrows: false,
        speed: 1500,
        asNavFor: ".click-ser, .click-title",
        responsive: [{
                breakpoint: 991.5,
                settings: {
                    slidesToShow: 1,
                },
            },
            {
                breakpoint: 767.5,
                settings: {
                    slidesToShow: 1,
                    dots: true,
                },
            },
        ],
    });
    $("#ser-prev").click(function(event) {
        event.preventDefault();

        $(".click-ser").slick("slickPrev");
    });

    $("#ser-next").click(function(event) {
        event.preventDefault();

        $(".click-ser").slick("slickNext");
    });
}

function slick_photo() {
    $(".collum-photo").slick({
        autoplay: false,

        arrows: false,

        dots: false,

        slidesToShow: 2,

        slidesToScroll: 1,

        // draggable: false,

        infinite: true,

        //pauseOnHover: false,

        //swipe: true,

        // touchMove: true,

        speed: 1500,

        autoplaySpeed: 3000,

        useTransform: true,

        cssEase: "cubic-bezier(0.645, 0.045, 0.355, 1.000)",

        //adaptiveHeight: true,

        //focusOnSelect: true,

        responsive: [{
            breakpoint: 767.5,
            settings: {
                slidesToShow: 1,
            },
        }, ],
    });
}

function slick_testimonials() {
    $(".testimonials__slick").slick({
        autoplay: false,

        arrows: false,

        dots: true,

        slidesToShow: 1,

        slidesToScroll: 1,

        // draggable: false,

        infinite: true,

        //pauseOnHover: false,

        //swipe: true,

        // touchMove: true,

        speed: 1500,

        autoplaySpeed: 3000,

        useTransform: true,

        cssEase: "cubic-bezier(0.645, 0.045, 0.355, 1.000)",

        //adaptiveHeight: true,

        //focusOnSelect: true,
    });
}

function slidetoggle_header() {
    // var link_panel = $('.menu-mobile');

    // link_panel.click(function(){

    // 	$(this).parent().find('.main-menu').slideToggle('active');

    // })
    jQuery(".menu-mobile").click(function() {
        jQuery(".header__nav").toggleClass("active");
        jQuery("body").toggleClass("show-scroll");
    });
    jQuery(document).mouseup(function(e) {
        if (!jQuery(".menu-mobile, .header__nav.active").is(e.target) &&
            jQuery(".menu-mobile, .header__nav.active").has(e.target).length === 0
        ) {
            jQuery(".header__nav").removeClass("active");
            jQuery("body").removeClass("show-scroll");
        }
    });
}

function fancybox() {
    var gallery_row = jQuery(".p__row");

    gallery_row.each(function() {
        jQuery(this)
            .find(".p__collum-photo a")

        .attr("data-fancybox", "images");

        jQuery('[data-fancybox="images"]').fancybox({
            thumbs: {
                showOnStart: true,
            },
        });
    });

    if ($(window).width() > 767.5) {
        var itemclass = "img-overlay";
        $(".p__collum-photo").append('<div class="' + itemclass + '"></div>');
    }
}

function headerTop() {
    var header = $(".header__scroll");
    if (header.length) {
        var offset = header.offset().top;
        header_height = $(".header__top").height();
        containerwidth = $(window).width();
        $(window).scroll(function() {
            if ($(window).scrollTop() > header_height) {
                header.addClass("active");
            } else {
                header.removeClass("active");
            }
        });
    }
}