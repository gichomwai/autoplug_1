jQuery(document).ready(function(a) {

        a(".widget_tz_search").each(function() {
            var c = a(this).find(".tz-search-icon-wrapper"),
                b = a(this).find(".tz-searchform-wrapper");
            if (a(this).parent().hasClass("hgroup-sidebar")) {
                var d = b.innerWidth();
                b.css({
                    "margin-left": "-" + d / 2 + "px"
                })
            }
            c.on("click", function(e) {
                a(this).hasClass("opened") ? (a(this).removeClass("opened").find(".tz-search-icon").removeClass("jshop-icon-close").addClass("jshop-icon-magnifier"), b.removeClass("opened").delay(300).queue(function() {
                    a(this).css("visibility",
                        "hidden").dequeue()
                })) : (a(this).addClass("opened").find(".tz-search-icon").removeClass("jshop-icon-magnifier").addClass("jshop-icon-close"), b.css("visibility", "visible").addClass("opened"))
            })
        })
});