jQuery(document).ready(function(a) {
        function m(b) {
            b = b.target;
            a(b).parent().parent().find(".carousel-loader").fadeOut("200");
            a(b).css("opacity", "1").css("height", "auto")
        }
        var r = {
            interval: 100,
            timeout: 200,
            over: function() {
                a(this).addClass("active");
                a(this).find(".inner-content").css("visibility", "visible")
            },
            out: function() {
                a(this).removeClass("active");
                a(this).find(".inner-content").css("visibility", "hidden")
            }
        };
        if (window.matchMedia("(min-width: 801px)").matches) a(".tz-hoverable-tabs ul.nav li").hoverIntent(r);
        else a(".tz-hoverable-tabs ul.nav li").on("click", function() {
            a(this).hasClass("active") ? a(this).removeClass("active").find(".inner-content").css("visibility", "hidden") : (a(this).parent().find(".active").removeClass("active").find(".inner-content").css("visibility", "hidden"), a(this).addClass("active").find(".inner-content").css("visibility", "visible"))
        });
        if (window.matchMedia("(max-width: 500px)").matches) a('.tz-product-tabs a[data-toggle="tab"]').on("click", function() {
            a(this).closest("ul").toggleClass("open")
        });
        r = a('[data-countdown="container"]');
        a(r).each(function() {
            var b = a(this).data("countdown-target").split("-");
            b = new Date(b[0], b[1] - 1, b[2]);
            a(this).countdown({
                until: b,
                format: "DHMS",
                labels: "Years Months Weeks Days Hrs Mins Sec".split(" "),
                labels1: "Year Month Week Day Hour Min Sec".split(" ")
            })
        });
        var v = a('[data-owl="container"]');
        a('.tz-product-tabs a[data-toggle="tab"]').on("shown.bs.tab", function(b) {
            b = a(b.target).attr("href");
            if (!a(b).find(".owl-carousel").length) {
                a("body").hasClass("chromium-product-style-2") &&
                a(b).find("ul.products").find("li.product").each(function() {
                    a(this).css("height", "auto").find(".inner-wrapper").css("position", "relative");
                    var p = a(this).css("height");
                    a(this).css({
                        height: p
                    }).find(".inner-wrapper").css({
                        position: "absolute",
                        top: 0,
                        left: 0
                    })
                });
                var d = a(b).find("ul.products").addClass("owl-carousel"),
                    h = a(b),
                    k = a(b).data("owl-slides"),
                    f = a(b).data("owl-margin"),
                    c = "true" == a(b).data("owl-loop"),
                    g = a(b).data("owl-col-mobile") ? a(b).data("owl-col-mobile") : 1,
                    n = a(b).data("owl-slide-by") ? a(b).data("owl-slide-by") :
                        1,
                    l = 30;
                if (0 == f || f) l = f;
                f = !1;
                "yes" == a(b).data("owl-2rows") && (f = !0);
                d.owlCarousel({
                    navText: ["", ""],
                    onInitialized: m,
                    loop: c,
                    nav: !1,
                    dots: !1,
                    slideBy: n,
                    margin: l,
                    responsive: {
                        0: {
                            items: g,
                            dots: !0,
                            loop: c,
                            margin: 0,
                            owl2row: !1
                        },
                        400: {
                            items: g,
                            dots: !0,
                            loop: c,
                            owl2row: !1
                        },
                        768: {
                            items: 2,
                            loop: c,
                            dots: !1,
                            owl2row: f
                        },
                        992: {
                            items: k,
                            loop: c,
                            dots: !1,
                            owl2row: f
                        }
                    }
                });
                window.matchMedia("(min-width: 768px)").matches && (h.find(".slider-navi .next").click(function() {
                    d.trigger("next.owl.carousel")
                }), h.find(".slider-navi .prev").click(function() {
                    d.trigger("prev.owl.carousel")
                }))
            }
        });
        a(v).each(function() {
            var b = a(this),
                d = a(this).data("owl-slides"),
                h = a(this).data("owl-type"),
                k = a(this).data("owl-custom-nav"),
                f = a(this).data("owl-slide-by") ? a(this).data("owl-slide-by") : 1,
                c = a(this).data("owl-loop"),
                g = a(this).data("owl-margin"),
                n = !1,
                l = !1,
                p = !1,
                t = !1,
                q = 30,
                u = a(this).data("owl-col-mobile") ? a(this).data("owl-col-mobile") : 1;
            if (0 == g || g) q = g;
            "yes" == a(this).data("owl-2rows") && (t = !0);
            "yes" == a(this).data("owl-autoplay") && (n = !0);
            "yes" == a(this).data("owl-arrows") && (l = !0);
            "yes" == a(this).data("owl-dots") &&
            (p = !0);
            if (a(v).hasClass("tab-pane") && a(this).hasClass("active")) {
                var e = a(this).find("ul.products").addClass("owl-carousel");
                e.owlCarousel({
                    onInitialized: m,
                    loop: c,
                    nav: !1,
                    navText: ["", ""],
                    dots: !1,
                    slideBy: f,
                    margin: q,
                    responsive: {
                        0: {
                            items: u,
                            dots: !0,
                            loop: c,
                            margin: 10,
                            owl2row: !1
                        },
                        400: {
                            items: u,
                            dots: !0,
                            loop: c,
                            owl2row: !1
                        },
                        768: {
                            items: u + 1,
                            loop: c,
                            dots: !1,
                            owl2row: t
                        },
                        992: {
                            items: d,
                            loop: c,
                            dots: !1,
                            owl2row: t
                        }
                    }
                });
                window.matchMedia("(min-width: 768px)").matches && (b.find(".slider-navi .next").click(function() {
                    e.trigger("next.owl.carousel")
                }),
                    b.find(".slider-navi .prev").click(function() {
                        e.trigger("prev.owl.carousel")
                    }))
            }
            "content-carousel" == h && (e = a(this).find(".carousel-container").addClass("owl-carousel"), "yes" == k && (l = !1, window.matchMedia("(min-width: 768px)").matches && (b.find(".slider-next").click(function() {
                e.trigger("next.owl.carousel")
            }), b.find(".slider-prev").click(function() {
                e.trigger("prev.owl.carousel")
            }))), k = 1, g = f = 2, 1 == d && (k = f = g = d), e.owlCarousel({
                items: d,
                loop: c,
                nav: l,
                navText: ["", ""],
                dots: p,
                onInitialized: m,
                autoplay: n,
                autoHeight: !0,
                margin: q,
                responsive: {
                    0: {
                        items: k,
                        loop: !1,
                        dots: !0,
                        nav: !1
                    },
                    400: {
                        items: f,
                        loop: c
                    },
                    768: {
                        items: g,
                        loop: c
                    },
                    992: {
                        items: d,
                        loop: c
                    }
                }
            }));
            "product-carousel" == h && (e = a(this).find("ul.products").addClass("owl-carousel"), window.matchMedia("(min-width: 768px)").matches && (b.find(".slider-navi .next").click(function() {
                e.trigger("next.owl.carousel")
            }), b.find(".slider-navi .prev").click(function() {
                e.trigger("prev.owl.carousel")
            })), e.owlCarousel({
                items: d,
                loop: c,
                nav: !1,
                navText: ["", ""],
                dots: !1,
                onInitialized: m,
                autoplay: n,
                margin: q,
                responsive: {
                    0: {
                        items: 1,
                        dots: !0,
                        loop: c,
                        margin: 0
                    },
                    400: {
                        items: 1 == d ? d : 1,
                        dots: !0,
                        loop: c,
                        margin: 15
                    },
                    768: {
                        items: 1 == d ? d : 2,
                        loop: c
                    },
                    992: {
                        items: d,
                        loop: c
                    }
                }
            }));
            "related" == h && window.matchMedia("(max-width: 767px)").matches && (e = a(this).find("ul.post-list").addClass("owl-carousel"), e.owlCarousel({
                items: d,
                loop: c,
                nav: !1,
                dots: !0,
                onInitialized: m,
                margin: 30,
                autoHeight: !0
            }))
        })
});