/*!
 * Start Bootstrap - Clean Blog v5.0.1 (https://startbootstrap.com/template-overviews/clean-blog)
 * Copyright 2013-2018 Start Bootstrap
 * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap-clean-blog/blob/master/LICENSE)
 */

// ! function (o) {
//     "use strict";
//     o("body").on("input propertychange", ".floating-label-form-group", function (i) {
//         o(this).toggleClass("floating-label-form-group-with-value", !!o(i.target).val())
//     }).on("focus", ".floating-label-form-group", function () {
//         o(this).addClass("floating-label-form-group-with-focus")
//     }).on("blur", ".floating-label-form-group", function () {
//         o(this).removeClass("floating-label-form-group-with-focus")
//     });
//     if (992 < o(window).width()) {
//         var s = o("#mainNav").height();
//         o(window).on("scroll", {
//             previousTop: 0
//         }, function () {
//             var i = o(window).scrollTop();
//             i < this.previousTop ? 0 < i && o("#mainNav").hasClass("is-fixed") ? o("#mainNav").addClass("is-visible") : o("#mainNav").removeClass("is-visible is-fixed") : i > this.previousTop && (o("#mainNav").removeClass("is-visible"), s < i && !o("#mainNav").hasClass("is-fixed") && o("#mainNav").addClass("is-fixed")), this.previousTop = i
//         })
//     }
// }(jQuery);

! function(e) {
    "use strict";
    e('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
            var a = e(this.hash);
            if ((a = a.length ? a : e("[name=" + this.hash.slice(1) + "]")).length) return e("html, body").animate({
                scrollTop: a.offset().top - 48
            }, 1e3, "easeInOutExpo"), !1
        }
    }), e(".js-scroll-trigger").click(function() {
        e(".navbar-collapse").collapse("hide")
    }), e("body").scrollspy({
        target: "#mainNav",
        offset: 54
    });
    var a = function() {
        100 < e("#mainNav").offset().top ? e("#mainNav").addClass("navbar-shrink") : e("#mainNav").removeClass("navbar-shrink")
    };
    a(), e(window).scroll(a)
}(jQuery);
