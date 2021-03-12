(function ($) {

    "use strict";
    /* Sticky Navigation */
    $('.mail-navigation').onePageNav({
        scrollThreshold: 0.2,
        scrollOffset: 75,
        filter: ':not(.external)',
        changeHash: true
    });

    /* Navigation Visible On Scroll */
    mainNav();
    $(window).scroll(function () {
        mainNav();
    });

    function mainNav() {
        var top = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
        if (top > 40) $('.sticky-navigation').stop().animate({
            "opacity": '1',
            "top": '0'
        });
        else $('.sticky-navigation').stop().animate({
            "opacity": '0',
            "top": '-75'
        });
    }


    /* OWL Carousel */
    var owl = $("#portfolio");
    var timeline = $("#timeline");

    timeline.owlCarousel({
        items: 6,
        autoPlay: 3000,
        stopOnHover: true,
    });
    owl.owlCarousel({
        items: 3,
        itemsDesktop: [1000, 3],
        itemsDesktopSmall: [900, 2],
        itemsTablet: [600, 1],
        itemsMobile: false,
        navigation: false,
        slideSpeed: 800,
        paginationSpeed: 410,
        autoPlay: 3000,
        stopOnHover: true
    });

    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            autoPlay: 3000,
            items: 4,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3]
        });

    });


    /* Button */
    $('#call_to_action-1, #call_to_action-2, #call_to_action-3, #call_to_action-4, #call_to_action-5').localScroll({
        duration: 1000
    });

    /* Video Responsive */

    $("#morephoto").on("click", function () {
        $("#all-photos").addClass("active");
    });

    $(".fa-close").on("click", function () {
        $("#all-photos").removeClass("active");
    });


})(jQuery);


$(window).resize(function () {

    "use strict";

    var ww = $(window).width();

    /* COLLAPSE NAVIGATION ON MOBILE AFTER CLICKING ON LINK */

    if (ww < 480) {
        $('.mail-navigation a').on('click', function () {
            $(".navbar-toggle").click();
        });
    }
});
