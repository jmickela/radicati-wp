(function($) {
    $(document).ready(function() {
    });
})(jQuery);

(function($) {
    $(window).ready(function() {
        //slider
        $('.owl-carousel').owlCarousel({
            items: 1,
            loop: true
        });
    });
})(jQuery);
(function($) {
    $(document).ready(function() {
        $(".offcanvas li.menu-item-has-children > a").on("click", function () {
            if($(this).closest('li').hasClass('active')) {
                return true;
            }

            $(".offcanvas .menu-item-has-children").removeClass('active');
            $(this).closest('li').toggleClass("active");
            return false;
        });
    });
})(jQuery);