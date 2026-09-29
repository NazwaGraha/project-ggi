!function($) {
    "use strict";

    // Smooth scroll for anchor links
    function scrollNav(selector) {
        if ($(selector).length > 0) {
            $(selector).each(function() {
                var $a = $(this).find("a");
                $a.on("click", function(e) {
                    var target = $(this.getAttribute("href"));
                    if (target.length) {
                        e.preventDefault();
                        $("html, body").stop().animate({
                            scrollTop: target.offset().top - 10
                        }, 800);
                    }
                });
            });
        }
    }

    // Preloader fadeout if exists
    $(window).on("load", function() {
        if ($(".preloader").length) {
            $(".preloader").fadeOut();
        }
    });

    // Mobile menu toggle
    $.fn.thmobilemenu = function(options) {
        var opt = $.extend({
            menuToggleBtn: ".th-menu-toggle",
            bodyToggleClass: "th-body-visible",
            subMenuClass: "th-submenu",
            subMenuParent: "menu-item-has-children",
            thSubMenuParent: "th-item-has-children",
            subMenuParentToggle: "th-active",
            subMenuToggleClass: "th-open",
            toggleSpeed: 400
        }, options);

        return this.each(function() {
            var $menu = $(this);
            function toggleMenu() {
                $menu.toggleClass(opt.bodyToggleClass);
            }

            $menu.find("." + opt.subMenuParent).each(function() {
                var $sub = $(this).find("ul");
                $sub.addClass(opt.subMenuClass).hide();
                $(this).addClass(opt.thSubMenuParent);
            });

            $("." + opt.thSubMenuParent + " > a").on("click", function(e) {
                var $parent = $(this).parent();
                var $sub = $parent.children("ul");
                if ($sub.length > 0) {
                    e.preventDefault();
                    $parent.toggleClass(opt.subMenuParentToggle);
                    $sub.slideToggle(opt.toggleSpeed).toggleClass(opt.subMenuToggleClass);
                }
            });

            $(opt.menuToggleBtn).on("click", function(e) {
                e.preventDefault();
                e.stopPropagation();
                if ($(this).closest(".th-menu-wrapper").length) {
                    $menu.removeClass(opt.bodyToggleClass);
                } else {
                    $menu.addClass(opt.bodyToggleClass);
                }
            });

            $menu.on("click", function(e) {
                if ($(e.target).closest(".th-menu-area").length === 0) {
                    $menu.removeClass(opt.bodyToggleClass);
                }
            });

            $menu.find(".th-mobile-menu a").on("click", function() {
                $menu.removeClass(opt.bodyToggleClass);
            });
        });
    };

    if ($(".th-menu-wrapper").length) {
        $(".th-menu-wrapper").thmobilemenu();
    }

    scrollNav(".onepage-nav");
    scrollNav(".scroll-down");

    // Sticky header
    $(window).on("scroll", function() {
        if ($(this).scrollTop() > 500) {
            $(".sticky-wrapper").addClass("sticky");
        } else {
            $(".sticky-wrapper").removeClass("sticky");
        }
    });

    // Background image data attribute
    $("[data-bg-src]").each(function() {
        var src = $(this).attr("data-bg-src");
        if (src) {
            $(this).css("background-image", "url(" + src + ")").removeAttr("data-bg-src").addClass("background-image");
        }
    });

    // Background color data attribute
    $("[data-bg-color]").each(function() {
        var col = $(this).attr("data-bg-color");
        if (col) {
            $(this).css("background-color", col).removeAttr("data-bg-color");
        }
    });

    // Shape Mockup positioning
    $.fn.shapeMockup = function() {
        return this.each(function() {
            var $el = $(this);
            var top = $el.data("top");
            var right = $el.data("right");
            var bottom = $el.data("bottom");
            var left = $el.data("left");
            $el.css({
                top: top,
                right: right,
                bottom: bottom,
                left: left
            }).removeAttr("data-top data-right data-bottom data-left").parent().addClass("shape-mockup-wrap");
        });
    };

    if ($(".shape-mockup").length) {
        $(".shape-mockup").shapeMockup();
    }

    // Scroll to Top button
    if ($(".scroll-top").length > 0) {
        $(window).on("scroll", function() {
            if ($(this).scrollTop() > 300) {
                $(".scroll-top").addClass("show");
            } else {
                $(".scroll-top").removeClass("show");
            }
        });
        $(".scroll-top").on("click", function(e) {
            e.preventDefault();
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
    }

    // Magnific Popup for images
    if ($.fn.magnificPopup) {
        $(".popup-image").magnificPopup({
            type: "image",
            mainClass: "mfp-zoom-in",
            removalDelay: 260,
            gallery: { enabled: true }
        });
        $(".popup-video").magnificPopup({ type: "iframe" });
        $(".popup-content").magnificPopup({ type: "inline", midClick: true });
    }

    // Swiper support (guarded so it only initializes if library is loaded AND element exists)
    if (typeof Swiper !== "undefined" && $(".th-slider").length) {
        $(".th-slider").each(function() {
            var $t = $(this);
            var opts = $t.data("slider-options") || {};
            if (typeof opts === "string") {
                try { opts = JSON.parse(opts); } catch(e) {}
            }
            new Swiper(this, opts);
        });
    }

}(jQuery);