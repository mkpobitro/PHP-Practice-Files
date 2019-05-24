//custom js
(function($) {
    "use strict";

    /* ---------------------------------------------
     Initialization
     --------------------------------------------- */
    $(document).ready(function() {

        $(window).trigger("resize");
        init_classic_menu();
        init_fullscreen_menu();
        init_side_panel();

    });

    $(window).resize(function() {

        init_classic_menu_resize();
        init_side_panel_resize()


    });

    // Function for block height 100%
    function height_line(height_object, height_donor) {
        height_object.height(height_donor.height());
        height_object.css({
            "line-height": height_donor.height() + "px"
        });
    }

    /* ---------------------------------------------
     Nav panel classic
     --------------------------------------------- */

    var mobile_nav = $(".mobile-nav");
    var desktop_nav = $(".desktop-nav");

    function init_classic_menu_resize() {

        // Mobile menu max height
        $(".mobile-on .desktop-nav > ul").css("max-height", $(window).height() - $(".main-nav").height() - 20 + "px");

        // Mobile menu style toggle
        if ($(window).width() <= 1024) {
            $(".main-nav").addClass("mobile-on");
        } else
        if ($(window).width() > 1024) {
            $(".main-nav").removeClass("mobile-on");
            desktop_nav.show();
        }
    }

    function init_classic_menu() {


        // Navbar sticky

        $(".js-stick").sticky({
            topSpacing: 0
        });


        height_line($(".inner-nav > ul > li > a"), $(".main-nav"));
        height_line(mobile_nav, $(".main-nav"));

        mobile_nav.css({
            "width": $(".main-nav").height() + "px"
        });

        // Transpaner menu

        if ($(".main-nav").hasClass("transparent")) {
            $(".main-nav").addClass("js-transparent");
        }

        $(window).scroll(function() {

            if ($(window).scrollTop() > 10) {
                $(".js-transparent").removeClass("transparent");
                $(".main-nav, .nav-logo-wrap .logo, .mobile-nav").addClass("small-height");
            } else {
                $(".js-transparent").addClass("transparent");
                $(".main-nav, .nav-logo-wrap .logo, .mobile-nav").removeClass("small-height");
            }


        });

        // Mobile menu toggle

        mobile_nav.click(function() {

            if (desktop_nav.hasClass("js-opened")) {
                desktop_nav.slideUp("slow", "easeOutExpo").removeClass("js-opened");
                $(this).removeClass("active");
            } else {
                desktop_nav.slideDown("slow", "easeOutQuart").addClass("js-opened");
                $(this).addClass("active");

                // Fix for responsive menu
                if ($(".main-nav").hasClass("not-top")) {
                    $(window).scrollTo(".main-nav", "slow");
                }

            }

        });

        desktop_nav.find("a:not(.mn-has-sub)").click(function() {
            if (mobile_nav.hasClass("active")) {
                desktop_nav.slideUp("slow", "easeOutExpo").removeClass("js-opened");
                mobile_nav.removeClass("active");
            }
        });


        // Sub menu

        var mnHasSub = $(".mn-has-sub");
        var mnThisLi;

        $(".mobile-on .mn-has-sub").find(".fa:first").removeClass("fa-angle-right").addClass("fa-angle-down");

        mnHasSub.click(function() {

            if ($(".main-nav").hasClass("mobile-on")) {
                mnThisLi = $(this).parent("li:first");
                if (mnThisLi.hasClass("js-opened")) {
                    mnThisLi.find(".mn-sub:first").slideUp(function() {
                        mnThisLi.removeClass("js-opened");
                        mnThisLi.find(".mn-has-sub").find(".fa:first").removeClass("fa-angle-up").addClass("fa-angle-down");
                    });
                } else {
                    $(this).find(".fa:first").removeClass("fa-angle-down").addClass("fa-angle-up");
                    mnThisLi.addClass("js-opened");
                    mnThisLi.find(".mn-sub:first").slideDown();
                }

                return false;
            } else {

            }

        });

        mnThisLi = mnHasSub.parent("li");
        mnThisLi.hover(function() {

            if (!($(".main-nav").hasClass("mobile-on"))) {

                $(this).find(".mn-sub:first").stop(true, true).fadeIn("fast");
            }

        }, function() {

            if (!($(".main-nav").hasClass("mobile-on"))) {

                $(this).find(".mn-sub:first").stop(true, true).delay(100).fadeOut("fast");
            }

        });

    }

})(jQuery);



/* ---------------------------------------------
     Fullscreen menu
   --------------------------------------------- */

var fm_menu_wrap = $("#fullscreen-menu");
var fm_menu_button = $(".fm-button");

function init_fullscreen_menu() {

    fm_menu_button.click(function() {

        if ($(this).hasClass("animation-process")) {
            return false;
        } else {
            if ($(this).hasClass("active")) {
                $(this).removeClass("active").css("z-index", "2001").addClass("animation-process");;

                fm_menu_wrap.find(".fm-wrapper-sub").fadeOut("fast", function() {
                    fm_menu_wrap.fadeOut(function() {
                        fm_menu_wrap.find(".fm-wrapper-sub").removeClass("js-active").show();
                        fm_menu_button.css("z-index", "1030").removeClass("animation-process");

                    });
                });

                if ($(".owl-carousel").lenth) {
                    $(".owl-carousel").data("owlCarousel").play();
                }

            } else {
                if ($(".owl-carousel").lenth) {
                    $(".owl-carousel").data("owlCarousel").stop();
                }
                $(this).addClass("active").css("z-index", "2001").addClass("animation-process");

                fm_menu_wrap.fadeIn(function() {
                    fm_menu_wrap.find(".fm-wrapper-sub").addClass("js-active");
                    fm_menu_button.removeClass("animation-process");
                });
            }

            return false;
        }

    });

    $("#fullscreen-menu").find("a:not(.fm-has-sub)").click(function() {

        if (fm_menu_button.hasClass("animation-process")) {
            return false;
        } else {
            fm_menu_button.removeClass("active").css("z-index", "2001").addClass("animation-process");

            fm_menu_wrap.find(".fm-wrapper-sub").fadeOut("fast", function() {
                fm_menu_wrap.fadeOut(function() {
                    fm_menu_wrap.find(".fm-wrapper-sub").removeClass("js-active").show();
                    fm_menu_button.css("z-index", "1030").removeClass("animation-process");

                });
            });

            if ($(".owl-carousel").lenth) {
                $(".owl-carousel").data("owlCarousel").play();
            }
        }
    });

    // Sub menu

    var fmHasSub = $(".fm-has-sub");
    var fmThisLi;

    fmHasSub.click(function() {

        fmThisLi = $(this).parent("li:first");
        if (fmThisLi.hasClass("js-opened")) {
            fmThisLi.find(".fm-sub:first").slideUp(function() {
                fmThisLi.removeClass("js-opened");
                fmThisLi.find(".fm-has-sub").find(".fa:first").removeClass("fa-angle-up").addClass("fa-angle-down");
            });
        } else {
            $(this).find(".fa:first").removeClass("fa-angle-down").addClass("fa-angle-up");
            fmThisLi.addClass("js-opened");
            fmThisLi.find(".fm-sub:first").slideDown();
        }

        return false;

    });

}


/* ---------------------------------------------
     Side panel
   --------------------------------------------- */

var side_panel = $(".side-panel");
var sp_button = $(".sp-button");
var sp_close_button = $(".sp-close-button");
var sp_overlay = $(".sp-overlay");

function sp_panel_close() {
    side_panel.animate({
        opacity: 0,
        left: -270
    }, 500, "easeOutExpo");
    sp_overlay.fadeOut();


    if ($(".owl-carousel").lenth) {
        $(".owl-carousel").data("owlCarousel").play();
    }
}

function init_side_panel() {
    (function($) {
        "use strict";

        sp_button.click(function() {

            side_panel.animate({
                opacity: 1,
                left: 0
            }, 500, "easeOutExpo");

            setTimeout(function() {
                sp_overlay.fadeIn();
            }, 100);

            if ($(".owl-carousel").lenth) {
                $(".owl-carousel").data("owlCarousel").stop();
            }

            return false;

        });

        sp_close_button.click(function() {
            sp_panel_close();
            return false;
        });
        sp_overlay.click(function() {
            sp_panel_close();
            return false;
        });

        $("#side-panel-menu").find("a:not(.sp-has-sub)").click(function() {
            if (!($(window).width() >= 1199)) {
                sp_panel_close();
            }
        });


        // Sub menu

        var spHasSub = $(".sp-has-sub");
        var spThisLi;

        spHasSub.click(function() {

            spThisLi = $(this).parent("li:first");
            if (spThisLi.hasClass("js-opened")) {
                spThisLi.find(".sp-sub:first").slideUp(function() {
                    spThisLi.removeClass("js-opened");
                    spThisLi.find(".sp-has-sub").find(".fa:first").removeClass("fa-angle-up").addClass("fa-angle-down");
                });
            } else {
                $(this).find(".fa:first").removeClass("fa-angle-down").addClass("fa-angle-up");
                spThisLi.addClass("js-opened");
                spThisLi.find(".sp-sub:first").slideDown();
            }

            return false;

        });

    })(jQuery);
}

function init_side_panel_resize() {
    (function($) {
        "use strict";

        if ($(window).width() >= 1199) {
            side_panel.css({
                opacity: 1,
                left: 0
            });
            $(".side-panel-is-left").css("margin-left", "270px");
            sp_button.css("display", "none");
            sp_close_button.css("display", "none");
        } else {
            side_panel.css({
                opacity: 0,
                left: -270
            });
            $(".side-panel-is-left").css("margin-left", "0");
            sp_button.css("display", "block");
            sp_close_button.css("display", "block");
        }

    })(jQuery);
}

(function($) {
    "use strict";
    new WOW().init();
    //preloader
    jQuery(window).on('load', function() {
        var pre = $("#preloader");
        var lre = $("#load");
        pre.delay(50).fadeOut("slow");
        lre.delay(50).fadeOut("slow");
    });

    //jQuery for page scrolling feature - requires jQuery Easing plugin
    $(function() {
        var nli = $(".main-nav li a");
        var scrl = $(".page-scroll a");


        nli.on('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        });

        scrl.on('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        });
    });

})(jQuery);